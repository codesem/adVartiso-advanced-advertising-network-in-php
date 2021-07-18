{include file='../Layout/header.tpl'}

                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                                    
                     {if $do_exist}<div class="alert alert-{$_WEB_EXIST}">{$__WEB_EXIST}</div>{/if}
                     {if $required}<div class="alert alert-{$_REQUIRED}">{$__REQUIRED}</div>{/if}
                     {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}
                     {include file='../Websites/menu.tpl'}

                        					<form class="form-horizontal" method="POST">
                                              
                                                <input type="hidden" name="add-website" value="add-website"/>
                                                <input type="hidden" name="csrf" value="{$csrfToken}"/>
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                     <select name="category" class="form-control">
                    {foreach from=$categories item=foo}
                                                      <option value="{$foo['id']}">{$foo['name']}</option>
                    {/foreach}
                                                     </select>
                                                    </div>
                                                 </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="url" class="form-control" placeholder="{$_URL}"><br>
	                                                    <span class="badge badge-danger">{$__URL}</span>
	                                                </div>
	                                            </div>

                                                <button type="submit" class="btn btn-black btn-bordered waves-effect w-md m-b-5"><i class="fa fa-plus-circle"></i> {$_ADD_SITE}</button>
	                                        </form>

                                </div> <!-- end card -->
                              
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->

{include file='../Layout/footer.tpl'}