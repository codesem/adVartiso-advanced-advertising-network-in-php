{include file='../Layout/header.tpl'}


                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                     {if $updated}<div class="alert alert-{$_PERSONAL}">{$__PERSONAL}</div>{/if}
                     {if $required}<div class="alert alert-{$_REQUIRED}">{$__REQUIRED}</div>{/if}
                     {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}
     {include file='../Settings/menu.tpl'}

                        					<form class="form-horizontal" method="POST">
                                              
                                                <input type="hidden" name="settings" value="settings" />
                                                <input type="hidden" name="csrf" value="{$csrfToken}"/>
	                                            <div class="form-group">
                                                    <label for="Username" class="col-sm-10">
                                                        {$_USERNAME}
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="text" class="form-control" value="{$username}" disabled="disabled">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
                                                    <label for="First Name" class="col-sm-10">
                                                        {$_FIRST_NAME} *
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="first_name" class="form-control" value="{$first_name}">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
                                                    <label for="Last Name" class="col-sm-10">
                                                        {$_LAST_NAME} *
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="last_name" class="form-control" value="{$last_name}">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
                                                    <label for="Email" class="col-sm-10">
                                                        {$_EMAIL} *
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="email" name="email" class="form-control" value="{$email}">
	                                                </div>
	                                            </div>
                                                <div class="form-group">
                                                    <label for="Country" class="col-sm-10">
                                                        {$_COUNTRY} *
                                                    </label>
                                                    <div class="col-sm-10">
                                                     <select name="country" class="form-control">
                    {foreach from=$countries item=foo}
                                                      <option value="{$foo}" {if $country == $foo} selected="selected" {/if}>{$foo}</option>
                    {/foreach}
                                                     </select>
                                                    </div>
                                                 </div>
	                                            <div class="form-group">
                                                    <label for="Address" class="col-sm-10">
                                                        {$_ADDRESS} *
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <textarea type="text" name="address" class="form-control" placeholder="{$_ADDRESS}">{$address}</textarea>
	                                                </div>
	                                            </div>
                                               <button type="submit" class="btn btn-black btn-bordered waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> {$_SAVE}</button>
	                                        </form>

                                </div> <!-- end card -->
                              
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                        
{include file='../Layout/footer.tpl'}