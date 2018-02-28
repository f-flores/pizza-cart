<?php 
// **************************
// * File name: site_constants.php
// * Description: Definition of site wide constant variables
// * 
// *************************
define("DEBUG", false);


// *
// * SITE_DIR is relative from Apache Configuration file
// * "Document Root". In this case, one level up:
// * "/var/www/project0"
// *
define("SITE_DIR", dirname(dirname(__FILE__)));

/*
 * INET_DIR is 'absolute' internet path
 * used to locate css templates
 */
define("INET_DIR",$_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST']);


// *
// * MVC model Directory names
// *
define("CONTROLLER","controller/");
define("VIEW","view/");
define("MODEL","model/");
define("IMGS", "imgs/");
define("CSS", "css/");
define("INCLUDES","includes/");

// *
// * Relative paths to MVC and site folders
// *
define("CONTROLLER_PATH", SITE_DIR . "/" . CONTROLLER);
define("VIEW_PATH", SITE_DIR . "/" . VIEW);
define("MODEL_PATH", SITE_DIR . "/" . MODEL);
define("INCLUDES_PATH", SITE_DIR . "/" . INCLUDES);
define("INET_CSS_PATH", INET_DIR . "/" . CSS);
define("INET_IMG_PATH", INET_DIR . "/" . IMGS);

/*
 * maximum number of menu items to display per page
 */
define("CATEGORIES_PER_PAGE", 4);

/*
 * Print following information if DEBUG set to true
 */
/************
if (DEBUG)
{
  print("<br>");
  print("Control Path: " . CONTROLLER_PATH . "<br>");
  print("View Path: " . VIEW_PATH . "<br>");
  print("Model Path: " . MODEL_PATH . "<br>");
  print("Internet Css Path: " . INET_CSS_PATH . "<br>");
  print("Image Path: " . INET_IMG_PATH . "<br>");
  print("Var dump: " );
  var_dump(stream_get_wrappers());
  print("<br>");
  print("dirname(__FILE__): " . dirname(__FILE__) . "<br>");
}
**************/
?>
