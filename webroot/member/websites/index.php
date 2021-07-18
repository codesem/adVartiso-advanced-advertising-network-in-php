<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('WEBSITES');

 $fun->do_fetch_websites();

 $fun->do_delete('link','websites/index');
 
 show('Publisher/Websites/index');

?>