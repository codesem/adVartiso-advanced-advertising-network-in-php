<?php
 
require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('Categories');
 
 $fun->do_categories();
 
 $fun->do_activate('categories','websites/categories');
 
 $fun->do_deactivate('categories','websites/categories');
 
 $fun->do_delete('categories','websites/categories');
 
 show('Admin/Websites/categories');