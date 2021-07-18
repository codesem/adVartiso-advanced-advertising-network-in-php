<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('STATS');

 $fun->do_pub_stats();

 show('Publisher/Stats/index');

?>