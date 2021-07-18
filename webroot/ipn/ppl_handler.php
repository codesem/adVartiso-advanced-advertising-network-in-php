<?php

 require_once (dirname(dirname(__FILE__)).'/loader.php');
 
 function emptydata($array){
     $array = explode(',', $array);
     for($i=0; $i < count($array); $i++){
         if(empty(trim($array[$i]))){
             echo 'Error: Wrong data';
             exit;
         }
     }
 }
 if(!isset($_GET['cm'])){
   echo 'Error: No Response';
   exit;
 }
 if(!isset($_GET['tx'])){
   echo 'Error: No Response';
   exit;
 }
 if(!isset($_GET['item_number'])){
   echo 'Error: No Response';
   exit;
 }
 $invoice = $query->addquery('select','invoice','*','i',$_GET['item_number'],'id=?');
      if(!$invoice){
          echo 'Error: Wrong info';
          exit;
      }
      if($invoice->token != $_GET['cm']){
          echo 'Error: Wrong info';
          exit;
      }
         $invoice_number =     $_GET['item_number']; 
         $item_name      =     $_GET['item_name']; 
         $txn_id         =     $_GET['tx']; 
         $payment_gross  =     $_GET['amt']; 
         $currency_code  =     $_GET['cc']; 
         $payment_status =     $_GET['st']; 
         $custom         =     $_GET['cm'];
         $transaction = $query->addquery('select','payments','*','s',$txn_id,'txn_id=?');
         if($transaction){
             echo 'Error: Wrong info';
             exit;
         }
         //check response informations
         emptydata("$invoice_number,$item_name,$txn_id,$payment_gross,$currency_code,$payment_status,$custom");
         
         //check correct payment
         if(do_amount($payment_gross,false) != $invoice->total){
             echo 'Error: Wrong payment';
             exit;
         }
         if($payment_status == 'Completed'){
            
            /* transaction successful */
            $query->addquery('insert','payments','user_id,item_number,txn_id,payment_gross,currency_code,payment_status,type,created','isssssss',[$invoice->user_id,$invoice_number,$txn_id,$payment_gross,$currency_code,$payment_status,'PayPal',$dateForm]);
            $query->addquery('update','invoice','status=?','ii',['1',$invoice_number],'id=?');
            $query->addquery('update','invoice','status_text=?,txn_id=?','ssi',[$payment_status,$txn_id,$invoice_number],'id=?');
            $query->addquery('update','user','ad_balance=ad_balance+?','si',[$invoice->amount,$invoice->user_id],'user_id=?');
            $query->addquery('insert','notifications','user_id,role,type,amount,created','issss',[$invoice->user_id,'advertiser','deposit',$invoice->amount,$dateForm]);
            redirect(['controller' => 'advertiser','action' => 'deposit/index']);
            
         }else{
             
            /* transaction failed */
            $query->addquery('insert','payments','user_id,item_number,txn_id,payment_gross,payment_status,type,created','iisssss',[$invoice->user_id,$invoice_number,$txn_id,$payment_gross,$payment_status,'PayPal',$dateForm]);
            $query->addquery('update','invoice','status_text=?,txn_id=?','ssi',[$payment_status,$txn_id,$invoice_number],'id=?');
            redirect(['controller' => 'advertiser','action' => 'deposit/index']);
         }
      