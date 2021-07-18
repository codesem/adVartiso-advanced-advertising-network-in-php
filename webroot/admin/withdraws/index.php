<?php
 
require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('Withdrawals');
 
 $fun->do_withdraws();
 
 //approve
 $fun->do_activate('withdrawal','withdraws/index');
 
 //reject
 $fun->do_deactivate('withdrawal','withdraws/index');
 
 //delete
 $fun->do_delete('withdrawal','withdraws/index');
 
 //complete
 $fun->do_complete('withdrawal','withdraws/index');
 
 show('Admin/Withdraws/index');