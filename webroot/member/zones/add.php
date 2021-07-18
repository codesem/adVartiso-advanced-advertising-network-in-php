<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('CREATE_ZONE');

 $fun->do_add_zone();

 show('Publisher/Zones/add');