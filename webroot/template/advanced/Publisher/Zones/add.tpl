{include file='../Layout/header.tpl'}

                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                                    
                     {if $do_inactive}<div class="alert alert-{$_WEB_INACTIVE}">{$__WEB_INACTIVE}</div>{/if}
                     {if $required}<div class="alert alert-{$_REQUIRED}">{$__REQUIRED}</div>{/if}
                     {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}
                     {include file='../Zones/menu.tpl'}

                        					<form class="form-horizontal" method="POST">
                                              
                                                <input type="hidden" name="add-zone" value="add-zone"/>
                                                <input type="hidden" name="csrf" value="{$csrfToken}"/>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="name" class="form-control" placeholder="{$_NAME}">
	                                                </div>
	                                            </div>
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                     <select name="site_id" class="form-control">
                    {foreach from=$websites item=foo}
                                                      <option value="{$foo['id']}">{$foo['url']} 
                                                      {if $foo['status'] == 1}
                                                         (Active)
                                                      {elseif $foo['status'] == 2}
                                                         (Pending)
                                                      {elseif $foo['status'] == 3}
                                                         (Banned)
                                                      {elseif $foo['status'] == 4}
                                                         (Inactive)
                                                      {/if}

                                                      </option>
                    {/foreach}
                                                     </select>
                                                    </div>
                                                 </div>
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                     <select name="type" onChange="grabeSizes(this.value);" class="form-control">
                                                         <option value="img_banner">{$_IMAGE_BANNER}</option>
                                                         <option value="text_banner">{$_TEXT_BANNER}</option>
                                                         <option value="popup">{$_POPUP}</option>
                                                         <option value="direct">{$_DIRECT}</option>
                                                     </select>
                                                    </div>
                                                 </div>
								                <span id="sizes-data">
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                     <select name="size" class="form-control">
                    {foreach from=$sizes item=foo}
                                                      <option value="{$foo}">{$foo}</option>
                    {/foreach}
                                                     </select>
                                                    </div>
                                                 </div>
                                                </span>
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                      <label class="checkbox-container">{$__NSFW}
                                                        <input type="checkbox" name="nsfw" value="nsfw" checked="checked">
                                                        <span class="checkmark-in"></span>
                                                      </label>
                                                      <label class="checkbox-container">{$__GAMBLING}
                                                        <input type="checkbox" name="gamble" value="gamble" checked="checked">
                                                        <span class="checkmark-in"></span>
                                                      </label>
                                                      <label class="checkbox-container">{$__SHADY}
                                                        <input type="checkbox" name="shady" value="shady" checked="checked">
                                                        <span class="checkmark-in"></span>
                                                      </label>
                                                      <label class="checkbox-container">{$__RISKY}
                                                        <input type="checkbox" name="risky" value="risky" checked="checked">
                                                        <span class="checkmark-in"></span>
                                                      </label>
                                                    </div>             
                                                </div>  
                                                <button type="submit" class="btn btn-black btn-bordered waves-effect w-md m-b-5"><i class="fa fa-code"></i> {$_CREATE_ZONE}</button>
	                                        </form>

                                </div> <!-- end card -->
                              
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->

{include file='../Layout/footer.tpl'}