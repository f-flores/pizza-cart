<?php 
session_start();

/**********
 * 
 * render_cart() - iterates throught the $_SESSION array
 * to properly render the cart. Also adds remove item 
 * functionality and provides subtotal.
 *
 */
function render_cart()
{
	$shopping_sum = 0;

?>

  <form action="checkout.php" method="post"> <fieldset id="cart">

<?php 
	$items_count = count($_SESSION['cart']);
	if (DEBUG) print "items_count : " . $items_count . " <br />";

  if (!empty($_SESSION['cart']))
  {
    print "** MENU CART **<br />";
    foreach ($_SESSION['cart'] as $key=>$value)
    {
	  	if (!empty($key) && !empty($value)){
        print $value["num"] . "  " . $value["type"] . "  ";
        print $value["size"] . "  ";
        print '$' . number_format($value["price"]/100,2) . "  ";

        // calculate shopping cart sum
        $shopping_sum += ($value["price"] * $value["num"]);
 ?>
   	   <button class="cart_button" name="remove"type='submit' 
           formaction="<?= $local_url ?>"
           value ="<?= $key ?>">Remove
       </button>
       <br /><br />
<?php 
	    }
    }
  }
?>

  &nbsp; Order Sum: $<?= number_format($shopping_sum/100,2); ?>
  &nbsp;&nbsp;<input type="submit" value="Proceed to Checkout" />
      </fieldset>
    </form> <br />
 
<?php 
  if (DEBUG){
		 print " session at end of render_cart: ";	print_r($_SESSION);}

}


/********
 *
 * remove_from_cart Iterates thru session cart until key to remove is 
 * found then remove key
 *
 */
function remove_from_cart() 
{
	$key_to_remove = $_POST["remove"];

	if (DEBUG) print $key_to_remove . " hello from remove_from_cart <br />";
  if (!empty($_SESSION['cart']))
  {
    foreach ($_SESSION['cart'] as $key=>$value)
    {
      if (DEBUG) echo "$key session key and value is $value <br />";
      if ($key == $key_to_remove)
      {
				 if (DEBUG) echo "key == key_to_remove <br />";
         unset($_SESSION['cart'][$key]);
         break; //once key is found stop iterating $_SESSION array
      }
    }
  }
}

function unshow_prior_cart()
{
?>
	<form>
    <fieldset id="cart">
      unshow_prior_cart
    </fieldset>
  </form>
<?php 
}
?>