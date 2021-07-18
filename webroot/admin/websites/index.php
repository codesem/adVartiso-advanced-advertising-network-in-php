<?php
 
require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('WEBSITES');
 
 $fun->do_websites();
 
 $fun->do_activate('link','websites/index');
 
 $fun->do_deactivate('link','websites/index');
 
 $fun->do_delete('link','websites/index');
 
 $fun->do_reject('link','websites/index');

 show('Admin/Websites/index');