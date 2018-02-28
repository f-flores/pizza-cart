<?php 
session_start();

/***************************************
 *
 * process_order: using the information captured
 * by the "submenu" forms, the session variable 
 * is set. This will be used by the "cart".
 * Also, the children will be added to the xml
 * file (to the prize[size] element  to further 
 * specify the order. This will ease cart management.
 */

function  process_order(&$menuxml)
{
	if (DEBUG) {print "<br />post in process_order:"; print_r($_POST);
		          print "<br/>";}
  $current_order = array();
  // current_order will be used to populate session cart
  foreach ($_POST as $key=>$value)
  {
		 if (DEBUG)echo "key: $key  value: $value <br />";
     switch ($key) {
		   case "type":
				 $current_order["type"]=$value;
         $ckey = $value; // way to identify cart item
         break;
		   case "size":
         $current_order["size"]=$value;
         $ckey .= $value; // type.size makes cart item unique
         break;
		   case "price":
         $current_order["price"]=$value;
         break;
   		 case "num":
         $current_order["num"]=$value;
         break;
		  }
	 }
	 if (!empty($current_order))
	 {
      $_SESSION['cart'][$ckey] = $current_order;
   }
   if (DEBUG){echo "session cart: ";print_r($_SESSION);}
}

	   // put comma separated menu info into an array using 
		 // str_getcsv function
 		 //  echo "key: $key  value: $value <br />";
     //$items_array[] = str_getcsv($value,$delimiter=","); 

?>