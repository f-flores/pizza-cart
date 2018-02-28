<?php 
session_start();
    include_once("../includes/site_constants.php");
      require(INCLUDES_PATH . "tools.php");
      render("header",
        ["lang"=>"en-US",
				 "ch_set"=>"UTF-8",
				 "title"=>"Leaving Site",
				 "css_path"=>INET_CSS_PATH,
				 "css_file"=>"style.css"]
      );
// include site header file
   require(VIEW_PATH . "site_nav.php");

// start controller
//   require(CONTROLLER_PATH . "controller.php"); 
?>


<br /><h1>Thank you for purchasing with us.</h1><br />
      <h2>We hope to see you again soon.</h2>


<?php 
  session_destroy();
//  print "<button class=" . '"cart_button"' . " name=" . '"bye"';
//  print " type='submit' formaction='index.php' " . 'value ="'. "R" .'">';
//  print "Three Aces Menu App" . "</button><br /><br />";  
print "<br /><br />";
print '<a href="index.php" target="_self">Three Aces Menu App</a>';

  render("footer");

?>