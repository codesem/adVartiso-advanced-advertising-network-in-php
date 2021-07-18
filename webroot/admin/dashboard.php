<?php

 require_once (dirname(dirname(__FILE__)).'/functions.php');

 $fun->do_winfo('DASHBOARD');
 
 $fun->do_adm_statistics();
 
 $fun->do_adm_chart();

 show('Admin/Layout/dashboard');
