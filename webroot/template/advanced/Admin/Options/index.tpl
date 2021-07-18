{include file="../Layout/header.tpl"}

                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
                                   {if $generale}<div class='alert alert-success'><b>#Generale</b> Settings Updated Successfully!</div>{/if}
                                   {if $design}<div class='alert alert-success'><b>#Design</b> Settings Updated Successfully!</div>{/if}
                                   {if $extra}<div class='alert alert-success'><b>#Extra</b> Settings Updated Successfully!</div>{/if}
                                   {if $interg}<div class='alert alert-success'><b>#Integration</b> Settings Updated Successfully!</div>{/if}
                                   {if $captcha}<div class='alert alert-success'><b>#Captcha</b> Settings Updated Successfully!</div>{/if}
                                   {if $system}<div class='alert alert-success'><b>#System</b> Settings Updated Successfully!</div>{/if}
                                   {if $social}<div class='alert alert-success'><b>#Social</b> Settings Updated Successfully!</div>{/if}
                                   {if $do_error}<div class='alert alert-danger'>Error: Somthing Wrong! Please Try again <small><b>[Reasons: Required Fields, SQL Error]</b></small></div>{/if}
                                   {if $do_demo}<div class="alert alert-danger">Error: You can't do this action on demo mode.</div>{/if}
                                   {include file='../Options/main.tpl'}
                               </div>
                               <div class="card-box">
                                 <!-- Tab links -->
                                 <div class="tab">
                                     <button class="tablinks" onclick="openTAB(event, 'General')"{if $generale}id="defaultOpen"{/if}{if !$generale && !$design && !$interg && !$extra && !$captcha && !$system && !$social}id="defaultOpen"{/if}><i class="fa fa-wrench"></i> General</button>
                                     <button class="tablinks" onclick="openTAB(event, 'Design')"{if $design}id="defaultOpen"{/if}><i class="fa fa-paint-brush"></i> Design</button>
                                     <button class="tablinks" onclick="openTAB(event, 'Extra')"{if $extra}id="defaultOpen"{/if}><i class="fa fa-plus-circle"></i> Extra</button>
                                     <button class="tablinks" onclick="openTAB(event, 'Integration')"{if $interg}id="defaultOpen"{/if}><i class="fa fa-code"></i> Integration</button>
                                     <button class="tablinks" onclick="openTAB(event, 'Captcha')" {if $captcha}id="defaultOpen"{/if}><i class="fa fa-refresh"></i> Captcha</button>
                                     <button class="tablinks" onclick="openTAB(event, 'System')"{if $system}id="defaultOpen"{/if}><i class="fa fa-gears"></i> System</button>
                                     <button class="tablinks" onclick="openTAB(event, 'Social')"{if $social}id="defaultOpen"{/if}><i class="fa fa-feed"></i> Social Links</button>
                                 </div>
                                 <!-- Tab content -->
                                 <div id="General" class="tabcontent">
                                     <form class="form-horizontal" method="POST">
                                         <input type="hidden" name="up-generale" value="up-generale" />
                                         <div class="form-group">
                                             <label for="Name" class="col-md-6"> Name *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="name" class="form-control" value="{do_config(0)}" required="required"/>
                                                 <em class="font-600 forhelp">Your website Name</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Title" class="col-md-6">Title *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="site_title" class="form-control" value="{do_config(10)}" required="required"/>
                                                 <em class="font-600 forhelp">Your home page title</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Description" class="col-md-6">Description</label>
                                             <div class="col-md-10">
                                                 <textarea name="site_description" class="form-control" type="text">{do_config(9)}</textarea>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Keywords" class="col-md-6">Keywords</label>
                                             <div class="col-md-10">
                                                 <input name="keywords" class="form-control" type="text" data-role="tagsinput" value="{do_config(41)}"/>
                                                 <em class="font-600 forhelp">Press (ENTER) after typing each keyword.</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for=" UserNote" class="col-md-6">Landing Page note</label>
                                             <div class="col-md-10">
                                                 <input name="home_sec_desc" class="form-control" type="text" value="{do_config(23)}" />
                                                 <em class="font-600 forhelp">Specify a short note displayed on home page.</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="MainDomain" class="col-md-6"> Main Domain *</label>
                                             <div class="col-md-10">
                                                 <input type="url" name="main_domain" class="form-control" value="{$HOST}" required="required"/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="UsersActivation" class="col-md-6">Users Activation</label>
                                             <div class="col-md-10">
                                                 <select name="account_activate_email" class="form-control">
                                                     <option value="1"{if do_config(29) == 1} selected="selected"{/if}>Yes</option>
                                                     <option value="2"{if do_config(29) == 2} selected="selected"{/if}>No</option>
                                                 </select>
                                                 <em class="font-600 forhelp">Users need to confirm thier email after signup.</em>
                                             </div>
                                         </div>
                                         <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> {$_SAVE}</button>
                                    </form>
                                 <!-- General ends -->
                                 </div>
                                 <div id="Design" class="tabcontent">
                                     <form class="form-horizontal" method="POST">
                                         <input type="hidden" name="up-design" value="up-design" />
                                         <div class="form-group">
                                             <label for="LogoUrl" class="col-md-6"> Logo Url *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="logo_url" class="form-control" value="{do_config(27)}" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="LogoUrl" class="col-md-6"> Users Logo Url *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="users_logo_url" class="form-control" value="{do_config(28)}" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="FaviconURL" class="col-md-6"> Favicon URL *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="icon_url" class="form-control" value="{do_config(8)}" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Metaimage" class="col-md-6"> Meta image</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="meta_img" class="form-control" value="{do_config(26)}"/>
                                                 <em class="font-600 forhelp">Main Meta image url.</em>
                                             </div>
                                         </div>
                                         <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> {$_SAVE}</button>
                                    </form>
                                 </div>
                                 <div id="Extra" class="tabcontent">
                                     <form class="form-horizontal" method="POST">
                                         <input type="hidden" name="up-extra" value="up-extra" />
                                         <div class="form-group">
                                             <label for="Perfix" class="col-md-6"> Perfix *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="meta_perfix" class="form-control" value="{do_config(7)}" required=""/>
                                                 <em class="font-600 forhelp">Title Perfix</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Title" class="col-md-6">Search Index *</label>
                                             <div class="col-md-10">
                                                 <select name="enable_search_index" class="form-control">
                                                     <option value="1"{if do_config(38) == 1} selected="selected"{/if}>Indexed</option>
                                                     <option value="2"{if do_config(38) == 2} selected="selected"{/if}>No Index</option>
                                                 </select>
                                                 <em class="font-600 forhelp">Search Engines Index Your Website.</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Description" class="col-md-6">Symbole Position *</label>
                                             <div class="col-md-10">
                                                 <select name="sumbole_position" class="form-control">
                                                     <option value="before"{if do_config(18) == 'before'} selected="selected"{/if}>Before</option>
                                                     <option value="after"{if do_config(18) == 'after'} selected="selected"{/if}>After</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Keywords" class="col-md-6">Amount Decimal *</label>
                                             <div class="col-md-10">
                                                 <input type="number" name="amount_decimal" class="form-control" value="{do_config(19)}" min="1" required=""/>
                                                 <em class="font-600 forhelp">Apply to general decimal on your website.</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="admin_percent" class="col-md-6">Admin Percent</label>
                                             <div class="col-md-10">
                                                 <input name="admin_percent" class="form-control" type="number" value="{do_config(40)}" min="5" max="60"/>
                                                 <em class="font-600 forhelp">Enter percent in number.</em>
                                             </div>
                                         </div>
                                         <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> {$_SAVE}</button>
                                    </form>
                                 <!-- General ends -->
                                 </div>
                                 <div id="Integration" class="tabcontent">
                                     <form class="form-horizontal" method="POST">
                                         <input type="hidden" name="up-interg" value="up-interg" />
                                         <div class="form-group">
                                             <label for="FrontHeadCode" class="col-md-6"> Front Head Code</label>
                                             <div class="col-md-10">
                                                 <textarea type="text" name="head_code" class="form-control">{do_config(14)}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="AfterBodyTagCode" class="col-md-6"> After Body Tag Code</label>
                                            <div class="col-md-10">
                                                <textarea type="text" name="body_code" class="form-control">{do_config(16)}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="AfterFooterTagCode" class="col-md-6"> After Footer Tag Code</label>
                                            <div class="col-md-10">
                                                <textarea type="text" name="footer_code" class="form-control">{do_config(15)}</textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> {$_SAVE}</button>
                                    </form>
                                 </div>
                                 <div id="Captcha" class="tabcontent">
                                     <form class="form form-horizontal" method="POST">
                                         <input type="hidden" name="up-captcha" value="up-captcha" />
                                         <div class="form-group">
                                             <label for="CaptchaType" class="col-md-6">Type</label>
                                             <div class="col-md-10">
                                                 <select name="captcha_type" class="form-control" >
                                                     <option value="recaptcha" selected="selected">Recaptcha</option>
                                                 </select>
                                                 <em class="font-600 forhelp">Get your reCAPTCHA keys from <a href="https://www.google.com/recaptcha/" target="_blank">here</a>.</em>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reCAPTCHASitekey" class="col-md-6"> reCAPTCHA Site key</label>
                                            <div class="col-md-10">
                                                <input type="text" name="reCAPTCHA_site_key" class="form-control" value="{do_config(5)}"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="reCAPTCHASecretkey" class="col-md-6"> reCAPTCHA Secret key</label>
                                            <div class="col-md-10">
                                                <input type="text" name="reCAPTCHA_secret_key" class="form-control" value="{do_config(6)}"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Captchaonsignup" class="col-md-6">Captcha on signup</label>
                                            <div class="col-md-10">
                                                <select name="captcha_signup" class="form-control">
                                                    <option value="1"{if do_config(54) == 1} selected="selected"{/if}>Yes</option>
                                                    <option value="2"{if do_config(54) == 2} selected="selected"{/if}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Captchaonlogin" class="col-md-6"> Captcha on login</label>
                                            <div class="col-md-10">
                                                <select name="captcha_login" class="form-control">
                                                    <option value="1"{if do_config(55) == 1} selected="selected"{/if}>Yes</option>
                                                    <option value="2"{if do_config(55) == 2} selected="selected"{/if}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="CaptchaonForgot" class="col-md-6">Captcha on Forgot Password</label>
                                            <div class="col-md-10">
                                                <select name="captcha_forgot" class="form-control">
                                                    <option value="1"{if do_config(56) == 1} selected="selected"{/if}>Yes</option>
                                                    <option value="2"{if do_config(56) == 2} selected="selected"{/if}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> {$_SAVE}</button>

                    </form>
                                 </div>
                                 <div id="System" class="tabcontent">
                                     <form class="form form-horizontal" method="POST">
                                         <input type="hidden" name="up-system" value="up-system" />
                                         <div class="form-group">
                                             <label for="DefaultLanguage" class="col-md-6">Default Language</label>
                                             <div class="col-md-10">
                                                 <select name="language" class="form-control">
                                                     <option value="en_US" 
                                                     {if do_config(12) == 'en_US'} selected="selected" {/if}>
                                                         English (United States)
                                                     </option>
                                                     <option value="fr_FR" 
                                                     {if do_config(12) == 'fr_FR'}selected="selected"{/if}>
                                                         French (France)
                                                     </option>
                                                    <!-- 
                                                     <option value="es_ES" 
                                                     {if do_config(12) == 'es_ES'} selected="selected" {/if}>
                                                         Spanish (Spain)
                                                     </option>
                                                     <option value="ar_SA" 
                                                     {if do_config(12) == 'ar_SA'}selected="selected"{/if}>
                                                         Arabic (Saudi Arabia)
                                                     </option>
                                                     <option value="ru_RU" 
                                                     {if do_config(12) == 'ru_RU'} selected="selected" {/if}>
                                                         Russian (Russia)
                                                     </option>
                                                     <option value="hi_IN" 
                                                     {if do_config(12) == 'hi_IN'}selected="selected"{/if}>
                                                         Hindi (India)
                                                     </option>
                                                    -->
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Landing" class="col-md-6">Home Landing</label>
                                             <div class="col-md-10">
                                                 <select name="landing" class="form-control">
                                                     <option value="adfancy" {if do_config(42) == 'adfancy'}selected="selected"{/if}>AdFancy</option>
                                                     <option value="adcrypto" {if do_config(42) == 'adcrypto'}selected="selected"{/if}>AdCrypto</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Keywords" class="col-md-6">Protected Usernames</label>
                                             <div class="col-md-10">
                                                 <input name="protected_usernames" class="form-control" type="text" data-role="tagsinput" value="{do_config(11)}"/>
                                                 <em class="font-600 forhelp">Enter Usernames that users cannot use them.</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="adv_support_email" class="col-md-6">Advertiser Support Email</label>
                                             <div class="col-md-10">
                                                 <input name="adv_support_email" class="form-control" type="text" value="{do_config(24)}"/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="pub_support_email" class="col-md-6">Publisher Support Email</label>
                                             <div class="col-md-10">
                                                 <input name="pub_support_email" class="form-control" type="text" value="{do_config(25)}"/>
                                             </div>
                                         </div>
                                         <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> {$_SAVE}</button>
                                     </form>
                                 </div>
                                 <div id="Social" class="tabcontent">
                                     <form class="form form-horizontal" method="POST">
                                         <input type="hidden" name="up-social" value="up-social" />
                                        <div class="form-group">
                                             <label for="Facebook" class="col-md-6"> Facebook</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="fb_link" class="form-control" value="{do_config(57)}"/>
                                             </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Instagram" class="col-md-6"> Instagram</label>
                                            <div class="col-md-10">
                                                <input type="text" name="insta_link" class="form-control" value="{do_config(58)}"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Twitter" class="col-md-6"> Twitter</label>
                                            <div class="col-md-10">
                                                <input type="text" name="tweet_link" class="form-control" value="{do_config(59)}"/>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> {$_SAVE}</button>
                                    </form>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!-- =========================
                           TABS
                        ============================== -->
                        {include file="../Layout/tab.js.tpl"}
{include file="../Layout/footer.tpl"}