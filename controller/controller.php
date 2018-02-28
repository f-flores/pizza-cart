<?php
//session_start();

//$_SESSION['cart'] = array(); //initialize cart

error_reporting(E_ALL & ~E_NOTICE);

// store multiple xpath queries for menu into one array
// of variable arrays for processing by model.php
   $menu_data = array( 
  	  "category" => "(/menu/category['name'])",
      "item" => "(/menu/category/item['type'])",
   );

  // model module
  include(MODEL_PATH . "model.php");

  // $current_page and $mpage are set in pagination
  include(VIEW_PATH . "pagination.php");

  include(CONTROLLER_PATH . "select_items.php");

// figure out menu "page" to display, $local_url keeps menu's place
  $current_page = get_show_page($mpage, $total_mpages);
	$local_url = $_SERVER["PHP_SELF"] . "?menu_page=" . $pg;



// $cat_sel stores menu category selected by user
  $cat_sel = get_category($menu_data, $current_page); 
    

// list items and prices for the category selected by user  
  include(VIEW_PATH . "menu_views.php");
  render_submenu($menuxml, $cat_sel);

// user's order information, stored in the $_POST variable and
// the $_SESSION variable, is used manage the users cart
// print "<br />"; print_r($_POST);
  include(CONTROLLER_PATH . "process_order.php");
  process_order($menuxml);
    
  include(VIEW_PATH . "render_cart.php");
  render_cart();

  if (DEBUG){
		print "<br />POST after render cart: "; print_r($_POST);print"<br />";}
  // handle remove item from cart
  if (!empty($_POST[remove])) 
  {
    remove_from_cart();
		unshow_prior_cart();
    render_cart();
  }
  // view module
  include(VIEW_PATH . "view.php");
  
?>