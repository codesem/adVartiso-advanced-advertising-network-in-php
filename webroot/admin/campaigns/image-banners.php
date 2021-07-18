<?php
 
 require_once (dirname(dirname(dirname(__FILE__))).'/functions.php');

 $fun->do_winfo('IMAGE_BANNERS');
 
 $fun->do_imgbanners();

 $fun->do_activate('campaigns','campaigns/image-banners');
 
 $fun->do_deactivate('campaigns','campaigns/image-banners');
 
 $fun->do_delete('campaigns','campaigns/image-banners');
 
 show('Admin/Campaigns/image-banners');


//Mark as

/*
if ( isset($_GET['id']) && isset($_GET['campaign']) && isset($_GET['as'])):
    

 switch($_GET['campaign']):

 case 'banner':
    
 $query->addquery('update','tbl_banner','filter=?','si',[$_GET['as'],$_GET['id']],'id=?');

 break;
 
 case 'popup':
    
 $query->addquery('update','tbl_popup','filter=?','si',[$_GET['as'],$_GET['id']],'id=?');

 break;
 
 case 'direct':

 $query->addquery('update','tbl_direct','filter=?','si',[$_GET['as'],$_GET['id']],'id=?');

 break;
 
 case 'exit':

 $query->addquery('update','tbl_exit','filter=?','si',[$_GET['as'],$_GET['id']],'id=?');

 break;
 endswitch;
 
$_SESSION['success']['marked_as']=true;

header('location: index?as='.$_GET['as']);

else:

if (isset($_GET['as'])):

$smarty->assign('as',$_GET['as']);

endif;

//alert
alerts('success','marked_as');

endif;



//==================== Banners images and text banners ========================>

$data = $query->limit('tbl_banner','*','id','desc',$result['start'].','.$result['perpage']);
 
while($res=$data->fetch_assoc()){
    
$ar=array('idBanner'=>$res['id'],'user_id'=>$res['user_id'],'banner_image'=>$res['banner_image'],'banner_url'=>$res['banner_url'],'banner_title'=>$res['banner_title'],'banner_dscr'=>$res['banner_dscr'],'views'=>$res['views'],'clicks'=>$res['clicks'],'spend'=>$res['spend'],'price'=>$res['price'],'banner_price'=>$res['banner_price'],'banner_views'=>$res['banner_views'],'banner_clicks'=>$res['banner_clicks'],'banner_country'=>$res['banner_country'],'banner_device'=>$res['banner_device'],'banner_size'=>$res['banner_size'],'banner_type'=>$res['banner_type'],'type_spend'=>$res['type_spend'],'status'=>$res['status'],'created'=>$res['created']);

array_push($with,$ar);
}
$smarty->assign('with',$with);

if( isset($_POST['deactivate_banner'] ) ){

$request = check_request('b_id');

if ($request):

$query->addquery('update','tbl_banner','status=?','ii',[2,$request],'id=?');

$_SESSION['success']['deactivate_banner']=true;

header("location: index");

endif;

}

else{

alerts('success','deactivate_banner');

alerts('success','campaign_succ');

}

if( isset($_POST['activate_banner'] ) ){
    
$request = check_request('b_id');

if ($request):

$query->addquery('update','tbl_banner','status=?','ii',[1,$request],'id=?');

$_SESSION['success']['activate_banner']=true;

header("location: index");

endif;

}	

else{
    
alerts('success','activate_banner');

}

$smarty->assign('n_banner',number_format($query->num_rows('tbl_banner','*')));

$BannerP = paging($result['screen']+1,ceil($query->num_rows('tbl_banner','*')/$result['perpage'])+1,'index?p=',true);

$smarty->assign('BannerP',$BannerP);

//============================ POPUP CAMPAIGNS ================================>

$with_popup=array();

$data = $query->limit('tbl_popup','*','id','desc',$result['start'].','.$result['perpage']);
 
while($res=$data->fetch_assoc()){
    
$ar_popup=array('popup_id'=>$res['id'],'popup_user'=>$res['user_id'],'popup_url'=>$res['popup_url'],'popup_views'=>$res['views'],'popup_clicks'=>$res['clicks'],'popup_spend'=>$res['spend'],'popup_price'=>$res['price'],'pop_price'=>$res['popup_price'],'pop_views'=>$res['popup_views'],'pop_clicks'=>$res['popup_clicks'],'popup_country'=>$res['popup_country'],'popup_device'=>$res['popup_device'],'type_spend'=>$res['type_spend'],'popup_status'=>$res['status'],'popup_created'=>$res['created']);

array_push($with_popup,$ar_popup);
}
$smarty->assign('with_popup',$with_popup);

if( isset($_POST['deactivate_popup'] ) ){
 
$request = check_request('p_id');

if ($request):

$query->addquery('update','tbl_popup','status=?','ii',[2,$request],'id=?');

$_SESSION['success']['deactivate_popup']=true;

header("location: index");

endif;

}	

else{

alerts('success','deactivate_popup');

}

if( isset($_POST['activate_popup'] ) ){

$request = check_request('p_id');

if ($request):

$query->addquery('update','tbl_popup','status=?','ii',[1,$request],'id=?');

$_SESSION['success']['activate_popup']=true;

header("location: index");

endif;

}
else{

alerts('success','activate_popup');

}

$smarty->assign('n_pop',number_format($query->num_rows('tbl_popup','*')));

$PopP = paging($result['screen']+1,ceil($query->num_rows('tbl_popup','*')/$result['perpage'])+1,'index?p=',true);	

$smarty->assign('PopP',$PopP);

//================================== Directs links ============================>

$with_direct=array();

$data = $query->limit('tbl_direct','*','id','desc',$result['start'].','.$result['perpage']);
 
while($res=$data->fetch_assoc()){
    
$ar_direct=array('direct_id'=>$res['id'],'direct_user'=>$res['user_id'],'direct_url'=>$res['direct_url'],'direct_clicks'=>$res['clicks'],'direct_spend'=>$res['spend'],'direct_price'=>$res['price'],'dir_price'=>$res['direct_price'],'dir_clicks'=>$res['direct_clicks'],'direct_country'=>$res['direct_country'],'direct_device'=>$res['direct_device'],'direct_status'=>$res['status'],'direct_created'=>$res['created']);

array_push($with_direct,$ar_direct);
}
$smarty->assign('with_direct',$with_direct);

if( isset($_POST['deactivate_direct'] ) ){
    
$request = check_request('d_id');

if ($request):

$query->addquery('update','tbl_direct','status=?','ii',[2,$request],'id=?');

$_SESSION['success']['deactivate_direct']=true;

header("location: index");

endif;

}
else{

alerts('success','deactivate_direct');

}

if( isset($_POST['activate_direct'] ) ){

$request = check_request('d_id',false,'int');

if ($request):

$query->addquery('update','tbl_direct','status=?','ii',[1,$request],'id=?');

$_SESSION['success']['activate_direct']=true;

header("location: index");

endif;

}	

else{

alerts('success','activate_direct');

}

$smarty->assign('n_direct',number_format($query->num_rows('tbl_direct','*')));

$DirectP = paging($result['screen']+1,ceil($query->num_rows('tbl_direct','*')/$result['perpage'])+1,'index?p=',true);

$smarty->assign('DirectP',$DirectP);

show('Admin/Campaigns/index');

?>
*/