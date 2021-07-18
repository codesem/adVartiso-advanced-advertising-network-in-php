<?php

 /*
 |--------------------------------------------------------------------------
 | Configuration & Connection & Functions & Models
 |--------------------------------------------------------------------------
 |
 | Load config file getting info.
 | load database connector file.
 | Load our functions file.
 | Load our smarty model files.
 |
 */

 if (!file_exists(dirname(__DIR__).'/config/app.php')):
      require_once (dirname(__DIR__).'/config/models/configModel.php');
 else:
      require_once ('config.php');
 endif;
  require_once (CONNECT.'dbconnect.class.php');
  require_once (MODELS.'smartyModel.php');
  require_once (CONFIG.'function.php');
  require_once (MODELS.'adsModel.php');

  $ads->do_host();
 
 //ON
 if ($info->install == 'on'):
     
     $uid = $se->new_session('user','logged','uid');
     $smart->users($uid);
     $smart->sign_option();
     $smart->sign_user_fun();
     $ads->do_user($uid);
     $ads->do_lang(do_config(12));

  //OFF
 elseif($info->install == 'off'):
  $ads->do_install();
 endif;