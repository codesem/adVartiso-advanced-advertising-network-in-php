<?php

 require_once (dirname(dirname(__FILE__)).'/functions.php');

 $fun->do_winfo('ZONES');
 
 $fun->do_zones();
 
 $fun->do_activate('zones','zones');
 
 $fun->do_deactivate('zones','zones');
 
 $fun->do_delete('zones','zones');
 
 show('Admin/Zones/index');
 