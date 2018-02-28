<?php
//  session_start();
//  print("<p>In Model module.</p>");
   $menuxml = simplexml_load_file(MODEL_PATH . "menu2.xml");


// Support multiple xpath queries at once
// menu_data holds multiple arrays. Each array associated with an
// xml variable name holds a list of values of the xpath queries. 
   foreach( $menu_data as $variable_name => $xpath ) 
   {
		 $menu_data["$variable_name"] = $menuxml->xpath($xpath);
   }

function test_function_pxml(&$menuxml) {
	print_r($menuxml);
}
?>