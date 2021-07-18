<?php

 require_once (dirname(dirname(__FILE__)).'/functions.php');

 $fun->do_winfo('DASHBOARD');

 $fun->do_pub_statistics();

 $fun->do_pub_chart();

 show('Publisher/Layout/dashboard');

?>