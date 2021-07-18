<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('Plugins');
 
 $fun->do_plugins();

 //$fun->do_activate('plugins','plugins/index');
 
 //$fun->do_deactivate('plugins','plugins/index');
 
 //$fun->do_delete('plugins','plugins/index');
 
 show('Admin/Plugins/index');