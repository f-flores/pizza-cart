<?php
session_start();

// pagination of menu categories
  $cat_count = count($menu_data["category"]);

  if ($cat_count > CATEGORIES_PER_PAGE) {
    if (($cat_count % CATEGORIES_PER_PAGE) == 0)
			$total_mpages = (int)($cat_count/CATEGORIES_PER_PAGE);
    else
			$total_mpages = (int)($cat_count/CATEGORIES_PER_PAGE) + 1;
  }

?>


<?php 

 

    /* upon entering web site set $mpage to 1 */
    if (!empty($_GET["menu_page"]))
  			$mpage = htmlspecialchars($_GET["menu_page"]);
    else 
			  $mpage = 1;

    if (DEBUG) 
    {
          echo "mpage: $mpage total: $total_mpages <br />";
    }

  	if ($mpage < $total_mpages) 
    {
				$mpage += 1;
    }
		else /* go back to first page */
    {
        $mpage = 1; 
		}
?>


<?php
function get_show_page($s_pg, $total) 
{
  /* handle current page */
  /* if (empty($s_pg)) 
   {
		 return 1; // default to page 1
		 } */
   if ($s_pg == 1) 
   {
       return $total;
	 }
	 else 
   {
       return $s_pg - 1; 
   }
}


?>

