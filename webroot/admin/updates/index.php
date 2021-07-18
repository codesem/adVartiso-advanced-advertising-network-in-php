<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('Update');
 
 $fun->do_extract_update();
 
 show('Admin/Updates/index');
 