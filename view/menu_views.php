<?php 
//session_start();

function render_submenu(&$mxml, &$category)
{
  print("<fieldset id='order'>");
  print("Menu Category: " . $category . "<br /><br />");

	// display only menu categories which were selected  by the
  // user -- category[@name='$category']
  foreach 
  ($mxml->xpath("/menu/category[@name='$category']/item") as $item)
  {
    		print($item['type']);
    		foreach($item->price as  $order)
	  		{ 
        	print('<form action="' .
                 $local_url . '" method="post">');
 		   		print("<br />" . $order['size'] .' $'.  
                number_format($order/100,2));

					// set value of menu item for form submittion
          print ('<input type="hidden" name="type" ');
          print ('value="' . $item['type'] . '">');  

          // set value of item size for form submission
          print('<input type="hidden" name="size" ');
          print('value="' . $order['size'] . '">');

          //set value of item price for form submittion
				  print('<input type="hidden" name="price" ');
          print('value="' . $order . '">');  

          // have user select quantity desired of menu item
  ?>
          Qty:<input type='number' name='num' value='1'
          required='required' min='1' max='5' pattern='\d{1}'/>
          <input type="submit" value="Add to Order">
	     </form><br />
 
<?php 
			}
  }

	print("</fieldset>");

}

?>