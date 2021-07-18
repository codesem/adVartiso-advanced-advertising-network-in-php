<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-21 21:18:36
         compiled from "/home/creatprs/public_html/metro/webroot/template/Metro/Admin/Campaigns/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16984910105ce46b2ce63d18-80670681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '115289d3b354c72111942c972e9b1379704ee51f' => 
    array (
      0 => '/home/creatprs/public_html/metro/webroot/template/Metro/Admin/Campaigns/edit.tpl',
      1 => 1550303088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16984910105ce46b2ce63d18-80670681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'succ' => 0,
    'id' => 0,
    'role' => 0,
    'status' => 0,
    'title' => 0,
    'campaign' => 0,
    'type_banner' => 0,
    'dscr' => 0,
    'clicks' => 0,
    'type_spend' => 0,
    'views' => 0,
    'arr' => 0,
    'HOST' => 0,
    'device' => 0,
    'url' => 0,
    'size' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ce46b2cee0087_98482101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce46b2cee0087_98482101')) {function content_5ce46b2cee0087_98482101($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title> Edit Campaign - Admin</title>
  <div class="content">
            <div class="container-fluid">
                


  <?php if ($_smarty_tpl->tpl_vars['succ']->value) {?><br><br><div class='alert alert-success' >Campaign #<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 Changed Successfully!</div><?php }?>

           <br>
<br><br>
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">border_color</i>
                </div>
                <br>
                <h4 class="card-title">Campaign Edit #<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h4>
                <div class="card-content">
                    <br>

            <div class="col-sm-12">
                <div class="demo-form-wrapper">
                    <form id="changeDataVO" class="form form-horizontal" data-toggle="validator" method="POST">
                       <div class="form-group">
                            <label for="paymentWay" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Role
                            </label>
                            <div class="col-sm-6">
                                    <select id="form-control-6" name="role" class="form-control" required="true" style="height: 45px;">
                                        
            <option value="" disabled="disabled" >Select...</option>
                                        
            <option value="1" <?php if ($_smarty_tpl->tpl_vars['role']->value==1) {?> selected="selected" <?php } else {
}?>>Paid Campaign</option>
   
            <option value="2"  <?php if ($_smarty_tpl->tpl_vars['role']->value==2) {?> selected="selected" <?php } else {
}?> >Default Campaign</option>

                                    </select>
                                </div>
                            </div>
                   
                       <div class="form-group">
                            <label for="paymentWay" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Status
                            </label>
                            <div class="col-sm-6">
                                    <select id="form-control-6" name="status" class="form-control" required="true" style="height: 45px;">
                                        
            <option value="" disabled="disabled" selected="selected">Select...</option>
                       
                                    
            <option value="1" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1==1) {?> selected="selected" <?php } else {
}?> >Active</option>

            
            <option value="2" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==2) {?> selected="selected" <?php } else {
}?> >Inactive</option>

            
            <option value="3"<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3==3) {?> selected="selected" <?php } else {
}?>>Completed</option>


            <option value="4"<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4==4) {?> selected="selected" <?php } else {
}?>>Pending</option>

                                    </select>
                                </div>
                            </div>
                    
                        
                        <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label" style="white-space: nowrap; text-align: left; float: left;">
                               Title
                            </label>
                            <div class="col-sm-6">
                                    <input id="form-control-4" name="title" class="form-control" type="text" required="true" style="height: 45px;" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"/>
                                </div>
                            </div>
                 
                        <?php if ($_smarty_tpl->tpl_vars['campaign']->value=='banner'&&$_smarty_tpl->tpl_vars['type_banner']->value=='text') {?> 

                        <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label" style="white-space: nowrap; text-align: left; float: left;">
                               Description
                            </label>
                            <div class="col-sm-6">
                                    <textarea id="form-control-4" name="dscr" class="form-control" type="text" required="true" style="height: 125px;" ><?php echo $_smarty_tpl->tpl_vars['dscr']->value;?>
</textarea>
                                </div>
                            </div>
                            
                        <?php }?> 

                        <?php if ($_smarty_tpl->tpl_vars['campaign']->value=='direct') {?> 

                        <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label" style="white-space: nowrap; text-align: left; float: left;">
                               Paid Clicks
                            </label>
                            <div class="col-sm-6">
                                    <input id="form-control-4" name="clicks" class="form-control" type="text" required="true" style="height: 45px;" value="<?php echo $_smarty_tpl->tpl_vars['clicks']->value;?>
" disabled="disabled"/>
                                </div>
                            </div>
                            
                        <?php } elseif ($_smarty_tpl->tpl_vars['type_spend']->value=='views') {?> 

                       <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label" style="white-space: nowrap; text-align: left; float: left;">
                               Paid Views
                            </label>
                            <div class="col-sm-6">
                                    <input id="form-control-4" name="views" class="form-control" type="text" required="true" style="height: 45px;" value="<?php echo $_smarty_tpl->tpl_vars['views']->value;?>
" disabled="disabled"/>
                                </div>
                            </div>

                        <?php } elseif ($_smarty_tpl->tpl_vars['type_spend']->value=='clicks') {?> 

                        <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label" style="white-space: nowrap; text-align: left; float: left;">
                               Paid Clicks
                            </label>
                            <div class="col-sm-6">
                                    <input id="form-control-4" name="clicks" class="form-control" type="text" required="true" style="height: 45px;" value="<?php echo $_smarty_tpl->tpl_vars['clicks']->value;?>
" disabled="disabled"/>
                                </div>
                            </div> 
                        
                        <?php }?> 

   <div class="form-group">
     <label class="col-sm-1 control-label" style="white-space: nowrap; text-align: left; float: left;">
         Selected
     </label>
  <div class="col-sm-6"> <input id="form-control-4" class="form-control" type="text" name="selected_country" style="height: 45px;" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value;?>
" readonly/></div></div>
      
      
 <div class="form-group">
     <label class="col-sm-1 control-label" style="white-space: nowrap; text-align: left; float: left;">
         Countries
     </label>
  <div class="col-sm-6">
 
 <input id="my" name="multiple" type="checkbox" value="1"> Change Contries? <br />

 <span id="togg" style="display:none">
 
 <input id="my" type="hidden"/>
 
<select name="country[]" id='my-select' multiple='multiple'>
                    <option value="ALL" >ALL (All contries)</option><option value="AF" >Afganistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AX">Åland Islands</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegowina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, the Democratic Republic of the</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote d&#039;Ivoire</option><option value="CW">Curaçao</option><option value="HR">Croatia (Hrvatska)</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="FX">France, Metropolitan</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard and Mc Donald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IM">Isle of Man</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran (Islamic Republic of)</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JE">Jersey</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea, Democratic People&#039;s Republic of</option><option value="KR">Korea, Republic of</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People&#039;s Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau</option><option value="MK">Macedonia, The Former Yugoslav Republic of</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States of</option><option value="MD">Moldova, Republic of</option><option value="MC">Monaco</option><option value="ME">Montenegro</option><option value="MN">Mongolia</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="PS">Palestine</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RS">Republic of Serbia</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint LUCIA</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia (Slovak Republic)</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="SX">Sint Maarten</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SH">St. Helena</option><option value="PM">St. Pierre and Miquelon</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen Islands</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan, Province of China</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic of</option><option value="TH">Thailand</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (U.S.)</option><option value="WF">Wallis and Futuna Islands</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="YU">Yugoslavia</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
</select>
 
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
template/Main/Advertiser/Purchase/multi-select/js/jquery.multi-select.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$('#my-select').multiSelect()
<?php echo '</script'; ?>
></span>
<br>
 <?php echo '<script'; ?>
>
         $(document).ready(function(){
        $("#my").change(function(){      
            var showOrHide =$(this).is(':checked');         
                $("#togg").toggle(showOrHide);
                $('[name="description"]').toggleClass('required',showOrHide )
                        
        });
    });
 <?php echo '</script'; ?>
>

</div></div>


                        
                            

                       <div class="form-group">
                            <label for="paymentWay" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Device
                            </label>
                            
            <div class="col-sm-6">
                            
            <select id="form-control-6" name="device" class="form-control" required="true" style="height: 45px;">
            
            
            <option value="" disabled="disabled" selected="selected">Select...</option>
            
                                    
            <option value="ALL" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['device']->value;?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5=='ALL') {?> selected="selected" <?php } else {
}?> >ALL</option>

            
            <option value="PC" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['device']->value;?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6=='PC') {?> selected="selected" <?php } else {
}?> >PC</option>

            
            <option value="MOBILE"<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['device']->value;?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7=='MOBILE') {?> selected="selected" <?php } else {
}?>>MOBILE</option>


                                    </select>
                                </div>
                            </div>
                            
                        <div class="form-group">
                            
                            <label for="accountNumber" class="col-sm-1 control-label" style="white-space: nowrap; text-align: left; float: left;">
                               Url
                            </label>
                            <div class="col-sm-6">
                                    <input id="form-control-4" name="url" class="form-control" type="text" required="true" style="height: 45px;" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"/>
                                </div>
                            </div>

                        <?php if ($_smarty_tpl->tpl_vars['campaign']->value=='banner') {?> 
    
                       <div class="form-group">
                            <label for="paymentWay" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Size
                            </label>
                            
            <div class="col-sm-6">
            
            <select id="form-control-6" name="size" class="form-control" required="true" style="height: 45px;">
            
            <option value="" disabled="disabled" selected="selected">Select...</option>
                                    
            <option value="728x90" <?php if ($_smarty_tpl->tpl_vars['size']->value=='728x90') {?> selected="selected" <?php } else {
}?> >728x90</option>
            
            <option value="468x60" <?php if ($_smarty_tpl->tpl_vars['size']->value=='468x60') {?> selected="selected" <?php } else {
}?> >468x60</option>
            
            <option value="336x280" <?php if ($_smarty_tpl->tpl_vars['size']->value=='336x280') {?> selected="selected" <?php } else {
}?> >336x280</option>

            <option value="300x250" <?php if ($_smarty_tpl->tpl_vars['size']->value=='300x250') {?> selected="selected" <?php } else {
}?> >300x250</option>
            
            <option value="300x600" <?php if ($_smarty_tpl->tpl_vars['size']->value=='300x600') {?> selected="selected" <?php } else {
}?> >300x600</option>
            
            <option value="120x600" <?php if ($_smarty_tpl->tpl_vars['size']->value=='120x600') {?> selected="selected" <?php } else {
}?> >120x600</option>
            
            <option value="200x200" <?php if ($_smarty_tpl->tpl_vars['size']->value=='200x200') {?> selected="selected" <?php } else {
}?> >200x200</option>
            
            <option value="125x125" <?php if ($_smarty_tpl->tpl_vars['size']->value=='125x125') {?> selected="selected" <?php } else {
}?> >125x125</option>

                                    </select>
                                </div>
                            </div>
                            
                        <div class="form-group">
                            
                            <label for="paymentWay" class="col-sm-1 control-label" style="white-space: nowrap; text-align: left; float: left;">
                               Type
                            </label>
                            <div class="col-sm-6">
                                    <select id="select_role" name="banner_type" class="form-control" style="height: 45px;">
                                        
             <option value="" disabled="disabled" selected="selected">Select...</option>
                        
             <option value="image" <?php if ($_smarty_tpl->tpl_vars['type_banner']->value=='image') {?> selected="selected"<?php }?> disabled="disabled">Image Banner</option>
                        
             <option value="text" <?php if ($_smarty_tpl->tpl_vars['type_banner']->value=='text') {?> selected="selected"<?php }?> disabled="disabled">Text Banner</option>
                        
                                    </select>
                                </div>
                            </div>


                        <div class="form-group">
                            <label for="paymentWay" class="col-sm-1 control-label" style="white-space: nowrap; text-align: left; float: left;">
                               Type spend
                            </label>
                            <div class="col-sm-6">
                                    <select id="select_role" name="type_spend" class="form-control" style="height: 45px;">
                                        
             <option value="" disabled="disabled" selected="selected">Select...</option>
                        
             <option value="views" <?php if ($_smarty_tpl->tpl_vars['type_spend']->value=='views') {?> selected="selected"<?php }?> disabled="disabled">CPM</option>
                        
             <option value="clicks"  <?php if ($_smarty_tpl->tpl_vars['type_spend']->value=='clicks') {?> selected="selected"<?php }?> disabled="disabled">CPC</option>
                        
                                    </select>
                                </div>
                            </div>
                            
                        

                        <?php if ($_smarty_tpl->tpl_vars['type_banner']->value=='image') {?> 

                       <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Banner image 
                            </label>
                            <div class="col-sm-6">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"/>
                                </div>
                            </div>
                            
                         <?php }?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['campaign']->value=='popup') {?>
         
                        <div class="form-group">
                            <label for="paymentWay" class="col-sm-1 control-label" style="white-space: nowrap; text-align: left; float: left;">
                               Type spend
                            </label>
                            <div class="col-sm-6">
                                    <select id="select_role" name="type_spend" class="form-control" style="height: 45px;">
                                        
             <option value="" disabled="disabled" selected="selected">Select...</option>
                        
             <option value="views" <?php if ($_smarty_tpl->tpl_vars['type_spend']->value=='views') {?> selected="selected"<?php }?> disabled="disabled">CPM</option>
                        
             <option value="clicks"  <?php if ($_smarty_tpl->tpl_vars['type_spend']->value=='clicks') {?> selected="selected"<?php }?> disabled="disabled">CPC</option>
                        
                                    </select>
                                </div>
                            </div>
                            <?php }?>

                        <div class= "form-group" style="display:inline-block;margin-right:1px;">  
                            <div class="col-sm-1 col-sm-offset-1">

                                <h5 style="color: red"></h5>
                                <h5 style="color: #00a000"></h5>

                                <br>
                                <input class="btn btn-info" name="change" type="submit" value="Save" />

                            </div>
                        </div>
                        
                        <div class= "form-group" style="display:inline-block;">  
                            <div class="col-sm-1 col-sm-offset-1">

                                <h5 style="color: red"></h5>
                                <h5 style="color: #00a000"></h5>

                                <br>
                                <input class="btn btn-danger" name="delete" type="submit" value="Delete"/>

                            </div>
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
