<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('STATS');

 $fun->do_adm_stats();

 show('Admin/Stats/index');

?>