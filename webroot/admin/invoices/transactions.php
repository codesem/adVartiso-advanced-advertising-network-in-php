<?php

require_once (dirname(dirname(__FILE__)).'/functions.php');

$smarty->assign('payments_nu',$query->num_rows('payments','*'));

$data = $query->limit('payments','*','id','desc',$result['start'].','.$result['perpage']);
 
while($res=$data->fetch_assoc()){
    
$ar=array('id'=>$res['id'],'user_id'=>$res['user_id'],'txn_id'=>$res['txn_id'],'item_number'=>$res['item_number'],'payment_gross'=>$res['payment_gross'],'amount_btc'=>$res['amount_btc'],'currency_code'=>$res['currency_code'],'type'=>$res['type'],'payment_status'=>$res['payment_status'],'created'=>$res['created']);

array_push($with,$ar);
}
$smarty->assign('with',$with);

paging($result['screen']+1,ceil($query->num_rows('payments','*')/$result['perpage'])+1,'transactions?p=');

show('Admin/Invoices/transactions');

?> 