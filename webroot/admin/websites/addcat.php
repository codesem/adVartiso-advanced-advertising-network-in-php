<?php
 
require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('Add Category');
 
 $fun->do_addcat();
 
 show('Admin/Websites/addcat');