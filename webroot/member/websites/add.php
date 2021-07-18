<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('ADD_SITE');

 $fun->do_add_website();

 show('Publisher/Websites/add');

?>