{include file="../Layout/header.tpl"}

                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
                                   {if $generale}<div class='alert alert-success'><b>#Generale</b> Ads Updated Successfully!</div>{/if}
                                   {if $imgbanners}<div class='alert alert-success'><b>#Image Banners</b> Ads Updated Successfully!</div>{/if}
                                   {if $txtbanners}<div class='alert alert-success'><b>#Text Banners</b> Ads Updated Successfully!</div>{/if}
                                   {if $popups}<div class='alert alert-success'><b>#Popups</b> Ads Updated Successfully!</div>{/if}
                                   {if $directs}<div class='alert alert-success'><b>#Direct Links</b> Ads Updated Successfully!</div>{/if}
                                   {if $do_error}<div class='alert alert-danger'>Error: Somthing Wrong! Please Try again <small><b>[Reasons: Required Fields, SQL Error]</b></small></div>{/if}
                                   {include file='../Options/main.tpl'}
                               </div>
                               <div class="card-box">
                                 <!-- Tab links -->
                                 <div class="tab">
                                     <button class="tablinks" onclick="openTAB(event, 'general')"{if $generale}id="defaultOpen"{/if}{if !$generale && !$imgbanners && !$txtbanners && !$popups && !$directs}id="defaultOpen"{/if}><i class="fa fa-wrench"></i> General</button>
                                     <button class="tablinks" onclick="openTAB(event, 'image-banners')"{if $imgbanners}id="defaultOpen"{/if}><i class="fa fa-image"></i> Image Banners</button>
                                     <button class="tablinks" onclick="openTAB(event, 'text-banners')"{if $txtbanners}id="defaultOpen"{/if}><i class="fa fa-file"></i> Text Banners</button>
                                     <button class="tablinks" onclick="openTAB(event, 'popups')"{if $popups}id="defaultOpen"{/if}><i class="fa fa-files-o"></i> Popups</button>
                                     <button class="tablinks" onclick="openTAB(event, 'direct-links')" {if $directs}id="defaultOpen"{/if}><i class="fa fa-link"></i> Direct Links</button>
                                 </div>
                                 <!-- Tab content -->
                                 <div id="general" class="tabcontent">
                                     <form class="form-horizontal" method="POST">
                                         <input type="hidden" name="up-generale" value="up-generale" />
                                         
                                         <div class="form-group">
                                             <label for="Views" class="col-md-6"> Views IP/24H *</label>
                                             <div class="col-md-10">
                                                 <input type="number" name="max_ip_views" class="form-control" value="{do_config(87)}" required="required"/>
                                                 <em class="font-600 forhelp">The max views per IP in 24 Hours.</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Clicks" class="col-md-6"> Clicks IP/24H *</label>
                                             <div class="col-md-10">
                                                 <input type="number" name="max_ip_clicks" class="form-control" value="{do_config(86)}" required="required"/>
                                                 <em class="font-600 forhelp">The max clicks per IP in 24 Hours.</em>
                                             </div>
                                         </div>
                                         
                                         <div class="form-group">
                                             <label for="Views" class="col-md-6"> Minimum Views *</label>
                                             <div class="col-md-10">
                                                 <input type="number" name="min_views" class="form-control" value="{do_config(36)}" required="required"/>
                                                 <em class="font-600 forhelp">The minimum views must advertiser order.</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Clicks" class="col-md-6"> Minimum Clicks *</label>
                                             <div class="col-md-10">
                                                 <input type="number" name="min_clicks" class="form-control" value="{do_config(37)}" required="required"/>
                                                 <em class="font-600 forhelp">The minimum clicks must advertiser order.</em>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="AdChoiceIcon" class="col-md-6">AdChoice Icon *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="adchoice_icon" class="form-control" value="{do_config(78)}" required="required"/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="AdChoiceLink" class="col-md-6">AdChoice Link *</label>
                                             <div class="col-md-10">
                                                 <input type="url" name="adchoice_link" class="form-control" value="{do_config(79)}" required="required"/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="Sizes" class="col-md-6">Sizes</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="sizes" class="form-control" data-role="tagsinput" value="{do_config(20)}" disabled="disabled"/>
                                                 <em class="font-600 forhelp">Press (ENTER) after typing each size. (Disabled for now)</em>
                                             </div>
                                         </div>
                                         <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> {$_SAVE}</button>
                                    </form>
                                 <!-- General ends -->
                                 </div>
                                 <div id="image-banners" class="tabcontent">
                                     <form class="form-horizontal" method="POST">
                                         <input type="hidden" name="up-imgbanners" value="up-imgbanners" />

                                         <div class="form-group">
                                             <div class="col-md-10">
                                                 <label for="Status" class="col-md-6">Status</label>
                                                 <select name="enable_img_banner" class="form-control">
                                                     <option value="1"{if do_config(80) == 1}selected="selected"{/if}>Enable</option>
                                                     <option value="2"{if do_config(80) == 2}selected="selected"{/if}>Disable</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="DefaultUrl" class="col-md-6"> Default Url *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="default_link_banner" class="form-control" value="{do_config(61)}" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="CPM" class="col-md-6"> CPM Image Banner *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="cpm_img_banner" class="form-control" value="{do_config(48)}" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="CPC" class="col-md-6"> CPC Image Banner *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="cpc_img_banner" class="form-control" value="{do_config(49)}" required=""/>
                                             </div>
                                         </div><hr>
                                         <h4><i class="fa fa-image"></i> Default Image Banners</h4><hr>
                                         <div class="form-group">
                                             <label for="728x90" class="col-md-6"> 728x90</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="default_728x90_img_banner" class="form-control" value="{do_config(67)}"/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="468x60" class="col-md-6"> 468x60</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="default_468x60_img_banner" class="form-control" value="{do_config(68)}"/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="300x250" class="col-md-6"> 300x250</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="default_300x250_img_banner" class="form-control" value="{do_config(69)}"/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="300x600" class="col-md-6"> 300x600</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="default_300x600_img_banner" class="form-control" value="{do_config(70)}"/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="120x600" class="col-md-6"> 120x600</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="default_120x600_img_banner" class="form-control" value="{do_config(71)}"/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="200x200" class="col-md-6"> 200x200</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="default_200x200_img_banner" class="form-control" value="{do_config(72)}"/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="125x125" class="col-md-6"> 125x125</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="default_125x125_img_banner" class="form-control" value="{do_config(73)}"/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="690x500" class="col-md-6"> 690x500</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="default_690x500_img_banner" class="form-control" value="{do_config(74)}"/>
                                             </div>
                                         </div>
                                         
                                         <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> {$_SAVE}</button>
                                    </form>
                                 </div>
                                 <div id="text-banners" class="tabcontent">
                                     <form class="form-horizontal" method="POST">
                                         <input type="hidden" name="up-txtbanners" value="up-txtbanners" />
                                         
                                         <div class="form-group">
                                             <div class="col-md-10">
                                                 <label for="Status" class="col-md-6">Status</label>
                                                 <select name="enable_txt_banner" class="form-control">
                                                     <option value="1"{if do_config(81) == 1}selected="selected"{/if}>Enable</option>
                                                     <option value="2"{if do_config(81) == 2}selected="selected"{/if}>Disable</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="DefaultUrl" class="col-md-6"> Default Url *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="default_link_text_banner" class="form-control" value="{do_config(62)}" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="DefaultTitle" class="col-md-6"> Default Title *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="default_title_text_banner" class="form-control" value="{do_config(63)}" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="DefaultDescription" class="col-md-6"> Default Description *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="default_description_text_banner" class="form-control" value="{do_config(64)}" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="CPM" class="col-md-6"> CPM Text Banner *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="cpm_text_banner" class="form-control" value="{do_config(45)}" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="CPC" class="col-md-6"> CPC Text Banner *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="cpc_text_banner" class="form-control" value="{do_config(46)}" required=""/>
                                             </div>
                                         </div>
                                         <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> {$_SAVE}</button>
                                    </form>
                                 <!-- General ends -->
                                 </div>
                                 <div id="popups" class="tabcontent">
                                     <form class="form-horizontal" method="POST">
                                         <input type="hidden" name="up-popups" value="up-popups" />
                                         
                                         <div class="form-group">
                                             <div class="col-md-10">
                                                 <label for="Status" class="col-md-6">Status</label>
                                                 <select name="enable_popup" class="form-control">
                                                     <option value="1"{if do_config(82) == 1}selected="selected"{/if}>Enable</option>
                                                     <option value="2"{if do_config(82) == 2}selected="selected"{/if}>Disable</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="DefaultUrl" class="col-md-6"> Default Url *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="default_link_popup" class="form-control" value="{do_config(65)}" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="CPC" class="col-md-6"> CPC Price *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="cpc_popup" class="form-control" value="{do_config(47)}" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="PopupWidth" class="col-md-6"> Popup Width *</label>
                                             <div class="col-md-10">
                                                 <input type="number" name="popup_width" class="form-control" value="{do_config(75)}" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="PopupHeight" class="col-md-6"> Popup Height *</label>
                                             <div class="col-md-10">
                                                 <input type="number" name="popup_height" class="form-control" value="{do_config(76)}" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="DefaultUrl" class="col-md-6"> Popup Timer <small>(Minutes)</small> *</label>
                                             <div class="col-md-10">
                                                 <input type="number" name="popup_seen_timer" class="form-control" value="{do_config(77)}" required=""/>
                                             </div>
                                         </div>
                                        <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> {$_SAVE}</button>
                                    </form>
                                 </div>
                                 <div id="direct-links" class="tabcontent">
                                     <form class="form form-horizontal" method="POST">
                                         <input type="hidden" name="up-directs" value="up-directs" />
                                         
                                         <div class="form-group">
                                             <div class="col-md-10">
                                                 <label for="Status" class="col-md-6">Status</label>
                                                 <select name="enable_direct" class="form-control">
                                                     <option value="1"{if do_config(83) == 1}selected="selected"{/if}>Enable</option>
                                                     <option value="2"{if do_config(83) == 2}selected="selected"{/if}>Disable</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="DefaultUrl" class="col-md-6"> Default Url *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="default_link_direct" class="form-control" value="{do_config(66)}" required=""/>
                                             </div>
                                         </div>
                                         <div class="form-group">
                                             <label for="CPC" class="col-md-6"> CPC Price *</label>
                                             <div class="col-md-10">
                                                 <input type="text" name="cpc_direct" class="form-control" value="{do_config(44)}" required=""/>
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