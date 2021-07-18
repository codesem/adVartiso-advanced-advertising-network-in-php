{include file='../Layout/header.tpl'}


                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                     {if $changed}<div class="alert alert-{$_PASS_CHANGED}">{$__PASS_CHANGED}</div>{/if}
                     {if $confirm}<div class="alert alert-{$_PASS_NOTMATCH}">{$__PASS_NOTMATCH}</div>{/if}
                     {if $required}<div class="alert alert-{$_REQUIRED}">{$__REQUIRED}</div>{/if}
                     {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}
     {include file='../Settings/menu.tpl'}

                        					<form class="form-horizontal" method="POST">
                                              
                                                <input type="hidden" name="change-password" value="change-password"/>
                                                <input type="hidden" name="csrf" value="{$csrfToken}"/>
	                                            <div class="form-group">
                                                    <label for="CurrentPassword" class="col-sm-10">
                                                        {$_CURRENT_PASSWORD} *
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="password" name="current_password" class="form-control">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
                                                    <label for="NewPassword" class="col-sm-10">
                                                        {$_NEW_PASSWORD} *
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="password" name="new_password" class="form-control">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
                                                    <label for="ConfirmPassword" class="col-sm-10">
                                                        {$_RETYPE_NEW_PASSWORD} *
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="password" name="confirm_new_password" class="form-control">
	                                                </div>
	                                            </div>
                                               <button type="submit" class="btn btn-black btn-bordered waves-effect w-md m-b-5"><i class="fa fa-lock"></i> {$_CHANGE_YOUR_PASSWORD}</button>
	                                        </form>

                                </div> <!-- end card -->
                              
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                        
{include file='../Layout/footer.tpl'}