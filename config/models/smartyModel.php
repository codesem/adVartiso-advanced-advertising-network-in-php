<?php

 /*
 |--------------------------------------------------------------------------
 | smartyModel
 |--------------------------------------------------------------------------
 |
 | Smarty assign options user informations and more.
 |
 */
 
 class smartyModel{
     
     public function users($id){
         global $smarty;
         if(empty(trim($id)) || $id == NULL || $id == 0) {
             define('islogged',false);
             $smarty->assign('notlogged', true);
             $smarty->assign('logged',false);
             $smarty->assign('uid',$id);
         } elseif(number_format($id)) {
             define('islogged',true);
             $smarty->assign('logged', true);
             $smarty->assign('notlogged',false);
             $smarty->assign('uid',$id);
         }
     }
     public function sign_option(){
         global $smarty,$query,$info,$uid,$HOST,$user;
         define('landing',do_config(42));
         if(isset($_COOKIE['locale'])){
             define('LOCALE',$_COOKIE['locale']);
             $smarty->assign('LOCALE',$_COOKIE['locale']);
         }else{
             define('LOCALE',do_config(12));
             $smarty->assign('LOCALE',do_config(12));
         }
         
         $smarty->assign('HOST',$HOST);
         $smarty->assign('AST',$HOST.AST);
         $smarty->assign('LND',$HOST.AST.landing.DS); 
         $smarty->assign('THM',$HOST.THM);
         $smarty->assign('ZN',do_url_zone().ZN);
         $smarty->assign('ADM',$HOST.ADM); 
         $smarty->assign('USR',$HOST.USR); 
         $smarty->assign('PUB',$HOST.PUB); 
         $smarty->assign('ADV',$HOST.ADV); 
         $smarty->assign('UPD',$HOST.UPD); 
         $smarty->assign('APP',$info->app);
         $smarty->assign('ACCESS',ACCESS);
         $smarty->assign('FULLACCESS',sitePRCL().FULLACCESS);
         $smarty->assign('REFERER',REFERER);
         $smarty->assign('THEME',Theme);
         $smarty->assign('LANDING',landing);
         $smarty->assign('date',Year);
         $smarty->assign('WWW_ROOT',WWW_ROOT);
         $smarty->assign('TMP',WWW_ROOT . 'template' . DS . Theme);
         $smarty->assign('TMPL',$HOST.'template' . DS);
         $smarty->assign('name',do_config(0));
         $smarty->assign('site_description',do_config(9));
         $smarty->assign('site_title',do_config(10));
         $smarty->assign('APPversion',$info->version);
         $smarty->assign('keywords',do_config(65));
         $smarty->assign('sumbole',do_config(3));
         $smarty->assign('meta_img',do_config(0));
         $smarty->assign('prmcode',prmcode);
         if (isset($uid)):
             $user = $query->addquery('select','user','*','i', $uid,'user_id=?');
             $smarty->assign('role',$user->role);
         endif;
     }
     public function sign_user_fun(){
         global $smarty,$query,$uid,$HOST;
         if(isset($uid)){
             $user = $query->addquery('select','user','*','i', $uid,'user_id=?');
             
             $smarty->assign('isactivated',$user->isactivated);
             $smarty->assign('ad_balance',$user->ad_balance);
             $smarty->assign('pub_balance',$user->pub_earnings);
             $smarty->assign('username',$user->username);
             $smarty->assign('email',$user->email);
             $smarty->assign('uid',$user->user_id);
         }
     }
 }
 $smart = new smartyModel;
