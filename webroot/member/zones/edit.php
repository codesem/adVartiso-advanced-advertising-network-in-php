<?php

  require_once (dirname(dirname(__FILE__)).'/functions.php');

  $token = base64_decode($_GET['id']);

  $data = $query->addquery('select','tbl_codes','*','si',"$token,$user->user_id",'token=?,user_id=?');

  if(!$data || !$_GET['id']):

  Redirect(['controller' => 'member', 'action' => 'zones']);

  endif;

  $smarty->assign('arr',json_decode($data->filter));

  $smarty->assign('email',$user->email);

  $smarty->assign('code_name',$data->code_name);

  $smarty->assign('url',$data->url);

  $smarty->assign('code_type',$data->code_type);

  $smarty->assign('size',$data->code_size);

  $smarty->assign('token',$data->token);

  if( isset($_POST['change'] ) ){

  $title = check_request('title');

  $size = check_request('size');

  $filter = json_encode(explode(' ','clean'.check_request('nsfw').check_request('gamble') . check_request('shady'). check_request('risky')));
  

  $query->addquery('update','tbl_codes','code_name=?,code_size=?,filter=?','ssss',[$title,$size,$filter,$token],'token=?');

  $_SESSION['zone']['changed']=true;

  Redirect(['controller' => 'member', 'action' => 'zones']);

  }
	
  if( isset($_POST['delete'])){

  $query->addquery('delete','tbl_codes',false,'s',$token,'token=?');

  $_SESSION['zone']['deleted']=true;

  Redirect(['controller' => 'member', 'action' => 'zones']);

  }

 show('Publisher/Zones/edit');

?>