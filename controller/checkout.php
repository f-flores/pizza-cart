<?php 
session_start();

	$shopping_sum = 0;
     
  include_once("../includes/site_constants.php");
  require(INCLUDES_PATH . "tools.php");
  render("header",
        ["lang"=>"en-US",
				 "ch_set"=>"UTF-8",
				 "title"=>"Three Aces Checkout",
				 "css_path"=>INET_CSS_PATH,
				 "css_file"=>"style.css"]
    );
// include site header file
   require(VIEW_PATH . "site_nav.php"); 
?>

  <form action="leave_site.php" method="post"> 
    <fieldset id="cart">

<?php 
	 // show cart items for user review
  if (!empty($_SESSION['cart']))
  {
    print "** MENU CHECKOUT PLEASE REVIEW ORDER **<br /><br />";
    foreach ($_SESSION['cart'] as $key=>$value)
    {
	  	if (!empty($key) && !empty($value))
      {
        print $value["num"] . "&nbsp;&nbsp; " . $value["type"];
        print "&nbsp;&nbsp;". $value["size"] . "&nbsp;&nbsp;";
        print '$' . number_format($value["price"]/100,2) . " <br /> ";

        // calculate shopping cart sum
        $shopping_sum += ($value["price"] * $value["num"]);
		
	    }
    }
  }

  print "<br />&nbsp;Order Sum: $" . number_format($shopping_sum/100,2);
?>
      <br /><br />&nbsp;
      <input type="submit" value="SUBMIT PURCHASE" />
      <button class="cart_button" name="review" type='submit' 
      formaction="index.php" value ="R">Make Changes to Order</button>
      <br /><br />  
     </fieldset>
  </form>
 
<?php 
  if (DEBUG){
		 print " session at end of render_cart: ";	print_r($_SESSION);}
   
   render("footer") 

?>