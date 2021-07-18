<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('TEMPLATES');

 $fun->do_fetch_templates();

 $fun->do_activate('templates','templates/index');
 
 $fun->do_deactivate('templates','templates/index');
 
 $fun->do_delete('templates','templates/index');

 show('Advertiser/Templates/index');

?>