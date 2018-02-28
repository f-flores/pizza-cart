<?php session_start(); ?>
<?php include_once("../includes/site_constants.php");
      require(INCLUDES_PATH . "tools.php");
      render("header",
        ["lang"=>"en-US",
				 "ch_set"=>"UTF-8",
				 "title"=>"Three Aces Pizza",
				 "css_path"=>INET_CSS_PATH,
				 "css_file"=>"style.css"]
      );
?>

<?php
// include site header file
   require(VIEW_PATH . "site_nav.php");

// start controller
   require(CONTROLLER_PATH . "controller.php"); 
   
//   render("footer") 
?>
