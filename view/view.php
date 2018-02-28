<?php
session_start();

/*
      <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
         <button name="menu_page" type="submit" value="<?= $mpage ?>"  >
           Browse Other Menu Categories
         </button>
      </form>
*/

?>


   <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
         <button name="menu_page" type="submit" value="<?= $mpage ?>"  >
           Browse Other Menu Categories
         </button>
      </form>

<?php 

	render("footer");

?>
