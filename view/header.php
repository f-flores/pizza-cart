<!DOCTYPE html>
<!-- Standard header of html page -->
<?php
// handle language
  print ('<html lang="');
  if (isset($lang))
      print (htmlspecialchars($lang));
  else // default to en-US language
  {
    $lang = NULL;
    print ("en-US");
  }
print ("\">\n <head>");

// handle character set
  print ('<meta charset="');
  if (isset($ch_set))
      print (htmlspecialchars($ch_set));
  else // default to UTF-8 characterset
  {
    $ch_set = NULL;
    print ("UTF-8");
  }
  print ("\">\n");


// handle title
  print ("<title>");
  if (isset($title))
      print  (htmlspecialchars($title));
  else
      $title=NULL;
  print ("</title>\n");

// handle stylesheet
   if (isset($css_file) && isset($css_path))
      {
        print ("<link rel = \"stylesheet\"\n");
        print ("type = \"text/css\"\n");
        $href_file = $css_path . $css_file;
        print ('href ="');
        print $href_file;
        print ('" />');
				// if (DEBUG) print_r($_SERVER); //DEBUG defined in constants.php
      }
      else
      {
        $css_file=NULL;
        $css_path=NULL;
      }
    print ("\n</head>\n<body>");

?>

