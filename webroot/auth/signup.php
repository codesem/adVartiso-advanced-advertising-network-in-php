<?php

 require_once(dirname(dirname(__FILE__)).'/loader.php');

 $fun->do_winfo('SIGN_UP');

 /* start signup */
 
 $fun->do_signup();

 show('Auth/signup');