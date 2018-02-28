
January, 2017

The Three Aces app reads a menu from an xml file.
The menu is rendered from the file depending on the category.

The data from the xml file is stored in key value pairs.
Submenu forms are generated. Through the traversal of xpath "category"
items, the items (type, size, price) on the menu are shown. A quantity
variable is also added. For the menu views, what helped to "pass" the
values "behind the scenes" from the xpath queries stored in the $data array is the input type "hidden" fields. 

So upon submission  of form menu_views.php,
these values are stored to $_POST. From $_POST, process_order.php adds
to the $_SESSION cart array.

render_cart.php renders the menu shopping cart and adds "remove item"
functionality by storing the item key (concatenation of type and size
variables which represents a unique key). This was used instead of an
"id" key. A lot of forms interact on this page. As another design
decision, I  added 
"checkout.php" and "leave_site.php" to the html directory (as links to
the ../controller directory origin files) to make
form handling easier. 

The three sections (category, order menu, and cart display) are 
divided by using css classes and ids.

The menu categories are able to be browsed by groups, based on the
"CATEGORIES_PER_PAGE" constant in "./include/constants.php'. The logic
was placed in "pagination.php". The rendering of the menu categories 
combines php logic and css classes.

Also included an .htaccess file with Rewrite rules to show 
urls with the following style: "http://pizza-cart/menu/2"where 2 is 
the page number.