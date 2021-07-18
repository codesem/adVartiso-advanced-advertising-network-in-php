<?php

 require_once(dirname(dirname(__FILE__)).'/loader.php');

 $fun->do_winfo('SIGN_IN');

 /* start signin */
 
 $fun->do_login();

 show('Auth/signin');