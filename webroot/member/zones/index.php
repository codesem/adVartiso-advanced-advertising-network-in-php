<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('ZONES');

 $fun->do_fetch_zones();

 $fun->do_delete('zones','zones/index');

 show('Publisher/Zones/index');

?>