{include file='../Layout/header.tpl'}

                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                                    {if $do_minimum}<div class="alert alert-{$_SMALL_BALANCE}">{$__SMALL_BALANCE}</div>{/if}
                                    {if $do_less}<div class="alert alert-{$_LESS_THEN}">{$__LESS_THEN}</div>{/if}
                                    {if $required}<div class="alert alert-{$_REQUIRED}">{$__REQUIRED}</div>{/if}
                                    {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}  
                                    
                                     <div id="modal-prev" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                         <div class="modal-dialog" style="width:70%; max-width: none;">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <h4 class="modal-title mt-0">{$_BANNER_AD_PREVIEW}</h4>
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">×</span>
                                                     </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="text-center">
                                                            <span class="badge badge-danger"><i class="fa fa-refresh"></i> {$_LOAD_AD_IN_ANY_SIZE}</span>
                                                        </div><hr>
                                                        <div class="form-group">
                                                            <div class="col-md-6" style="margin-left: 225px;">
                                                                <select onChange="GrabePreview(this.value,'text_banner');" class="form-control">
                                            {foreach from=$sizes item=foo}
                                                                          <option value="{$foo}">{$foo}</option>
                                            {/foreach}
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <span id="preview-data">
                                                                <iframe src="{$ZN}preview/text_banner/728x90/" scrolling="no" style="{do_size('728x90','iframe')} border:0px;padding:0px;overflow:hidden;" allowtransparency="true"></iframe>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal"><i class="fa fa-times"></i> {$_CLOSE}</button>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                     <div class="text-center">
                                         <a href="" class="badge badge-danger" data-toggle="modal" data-target="#modal-prev"><i class="fa fa-image"></i> {$_BANNER_AD_PREVIEW}</a>
                                     </div><hr>
                        					<form class="form-horizontal" method="POST">
                                                
                                                <input type="hidden" name="order-txtbanner" value="order-txtbanner"/>
                                                <input type="hidden" name="csrf" value="{$csrfToken}"/>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <select name="method" onChange="CampMethod(this.value,'text_banner');" class="form-control" required>
	                                                        <option value="CPM" selected>{$_CPM}</option>
	                                                        <option value="CPC">{$_CPC}</option>
	                                                    </select>
	                                                </div>
	                                            </div>
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                     <select name="size" class="form-control">
                    {foreach from=$sizes item=foo}
                                                      <option value="{$foo}">{$foo}</option>
                    {/foreach}
                                                     </select>
                                                    </div>
                                                 </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <select onChange="grabeTemplate(this.value);" class="form-control">
                                                      <option selected disabled>{$_FROM_TEMPLATE}From template</option>
                                            {foreach from=$templates item=foo}
                                                      <option value="{$foo['id']}">{$foo['name']}</option>
                                            {/foreach}
	                                                    </select>
	                                                </div>
	                                            </div>
	                                        <span id="template-data">
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="title" class="form-control" placeholder="{$_TITLE}" required>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <textarea type="text" name="description" class="form-control" placeholder="{$_DESCRIPTION}" required></textarea>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="url" name="url" class="form-control" placeholder="{$_URL}" required>
	                                                </div>
	                                            </div>
	                                        </span>
	                                            <div class="form-group row">
	                                                <div class="col-md-10">
                                                    <select name="country-type" onChange="grabeCountry(this.value);" class="form-control" required>
                                                        <option value="all" selected>{$_ALL_COUNTRIES}</option>
                                                        <option value="multiple">{$_MULTIPLE_COUNTRIES}</option>
                                                    </select><br>
                                                    <span id="countries-data"></span>
                                                </div>
                                                </div>
	                                            <div class="form-group row">
	                                                <div class="col-md-10">
                                                    <select name="browser-type" onChange="grabeBrowsers(this.value);" class="form-control" required>
                                                        <option value="all" selected>{$_ALL_BROWSERS}</option>
                                                        <option value="multiple">{$_MULTIPLE_BROWSERS}</option>
                                                    </select><br>
                                                    <span id="browsers-data"></span>
                                                </div>
                                                </div>
	                                            <div class="form-group row">
	                                                <div class="col-md-10">
                                                    <select name="platform-type" onChange="grabePlatforms(this.value);" class="form-control" required>
                                                        <option value="all" selected>{$_ALL_PLATFORMS}</option>
                                                        <option value="multiple">{$_MULTIPLE_PLATFORMS}</option>
                                                    </select><br>
                                                    <span id="platforms-data"></span>
                                                </div>
                                                </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <span id="method-data">
	                                                        <input type="number" name="views" class="form-control" placeholder="Order Views" min="{do_config(37)}" step="10" value="{do_config(37)}"  id="order" onkeyup="priceData('text_banner','views')" onBlur="priceData('text_banner','views')" required>
	                                                        <span class="badge badge-danger">{$_CPM}: {do_amount(do_config(45))}</span>
	                                                    </span>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <div>
	                                                        <input type="radio" name="device-type" value="ALL" checked=""> {$_ALL}
	                                                        <input type="radio" name="device-type" value="PC"> {$_PC}
	                                                        <input type="radio" name="device-type" value="MOBILE"> {$_MOBILE}
	                                                    </div>
	                                                </div>
	                                            </div><hr>
	                                            <div class="text-center">
                                                    <h6 style="display: inline-block;"><i class="fa fa-spinner" id="loader-price" style="display: none;"></i></h6>
	                                                <span class="badge badge-success" style="font-size: 15px;" id="price-data">{do_amount(0)}</span>
	                                            </div><hr>
                                                <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-shopping-cart"></i> {$_CREATE_CAMPAIGN}</button>
	                                        </form>
	                                        {include file='../Layout/back.tpl'}

                                </div> <!-- end card -->
                              
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->

{include file='../Layout/footer.tpl'}