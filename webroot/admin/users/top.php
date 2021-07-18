<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('TOP_USERS');
 
 $fun->do_topusers();

 $fun->do_activate('user','users/top');
 
 $fun->do_deactivate('user','users/top');
 
 show('Admin/Users/top');