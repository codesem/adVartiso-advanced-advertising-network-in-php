<?php

 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('WITHDRAWAL');

 $fun->do_withdraw();

 show('Publisher/Withdraw/index');

?>