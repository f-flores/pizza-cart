<?php 
//session_start();

/******************************
 *
 * get_category returns the value of the menu button selected 
 * by the user. The information stored in the data array (which
 * got populated by parsing the xml file) is rendered by category.
 *
 ******************************/

function get_category($data=array(), $show_pg)
{
    $start = ($show_pg - 1) * CATEGORIES_PER_PAGE + 1;
    $end = $start + CATEGORIES_PER_PAGE - 1;
    $cat_count = 1;

		if (DEBUG) {echo " show_pg: $show_pg <br />";}
    foreach($data["category"] as $category) 
    {
      if (($cat_count >= $start) && ($cat_count <= $end))
      {
        $css_class = "visible";
      }
      else
      {
        $css_class = "";
      }
   			$cat_count++;

?>
      <form action="<?= $local_url ?>" method="post">
			  <section id="catmenu">
          <fieldset class="<?= $css_class ?>"> 
             <button name="category" type="submit" 
			        value="<?= $category['name'] ?>"> 
                 <?= $category['name'] ?> 
             </button>
           </fieldset>
         </section>
      </form>
<?php 
		}
    if (DEBUG) print 'category' .  $_POST[category];
 
    return $_POST["category"];
}

/********
            <ul>
              <li><a href="<?= "/menu/$show_pg"  ?>"  >
             <?= $category['name'] ?>
              </a> </li>
            </ul> 
************/


?>