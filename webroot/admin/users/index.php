<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('USERS');
 
 $fun->do_members();

 $fun->do_activate('user','users/index');
 
 $fun->do_deactivate('user','users/index');
 
 $fun->do_delete('user','users/index');
 
 show('Admin/Users/index');
