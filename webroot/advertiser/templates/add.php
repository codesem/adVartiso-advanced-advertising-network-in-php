<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('ADD_TEMPLATES');

 $fun->do_addtemplate();

 show('Advertiser/Templates/add');

?>