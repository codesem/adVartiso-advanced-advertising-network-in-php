{include file='../Layout/header.tpl'}

                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                                    <div class="text-center">
                                        <div class="alert alert-success">
                                            <h4><i class="fa fa-user"></i> <span class="text-uppercase">{$_YOUR_PERSONAL_MANAGER}:</span></h4>
                                            <span class="text-uppercase">{$_EMAIL}:</span> <b>{do_config(24)}</b>
                                        </div>
                                    </div><hr>
                     {if $sent}<div class="alert alert-{$_CONTACT_SENT}">{$__CONTACT_SENT}</div>{/if}
                     {if $required}<div class="alert alert-{$_REQUIRED}">{$__REQUIRED}</div>{/if}
                     {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}  

                        					<form class="form-horizontal" method="POST">
                                              
                                                <input type="hidden" name="support" value="support"/>
                                                <input type="hidden" name="csrf" value="{$csrfToken}"/>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="name" class="form-control" placeholder="{$_FULL_NAME}">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="email" name="email" class="form-control" placeholder="{$_EMAIL_ADDRESS}">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="subject" class="form-control" placeholder="{$_SUBJECT}">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <textarea type="text" name="message" class="form-control" placeholder="{$_MESSAGE}"></textarea>
	                                                </div>
	                                            </div>
                                                <button type="submit" class="btn btn-black btn-bordered waves-effect w-md m-b-5"><i class="fa fa-envelope"></i> {$_CONTACT}</button>
	                                        </form>

                                </div> <!-- end card -->
                              
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->

{include file='../Layout/footer.tpl'}