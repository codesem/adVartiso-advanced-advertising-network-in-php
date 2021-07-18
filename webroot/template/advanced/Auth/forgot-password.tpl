 {include file='./Layout/header.tpl'}

                                <div class="account-content">
                                    <!-- ALERTS START HERE -->
                                       {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}
                                       {if $sent}<div class="alert alert-{$_FORGOT_CONFIRMATION_SENT}">{$__FORGOT_CONFIRMATION_SENT}</div>{/if}
                                       {if $notfound}<div class="alert alert-{$_USERNAME_NOTFOUND}">{$__USERNAME_NOTFOUND}</div>{/if}
                                       {if $recaptcha}<div class="alert alert-{$_RECAPTCHA}">{$__RECAPTCHA}</div>{/if}
                                       {if $required}<div class="alert alert-{$_REQUIRED}">{$__REQUIRED}</div>{/if}
                                    <!-- ALERTS END HERE -->
                                    <form class="form-horizontal" method="POST">
                                        <input type="hidden" name="forgot" value="forgot" />
                                        <input type="hidden" name="csrf" value="{$csrfToken}" />

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                               <input class="form-control" type="text" name="username" placeholder="{$_USERNAME}" required="">
                                            </div>
                                        </div>
                                     {if do_config(56) == 1}
                                       <div class="form-group">
                                            <div class="col-xs-12">
                                              <label for="password">{$_PROVE_YOUR_HUMAN}<span class="required">*</span></label>
										      	<div id="recaptcha-widget" class="g-recaptcha" data-sitekey="{do_config(5)}"></div>
                                            </div>
  									   </div>
                                     {/if}
                                        <div class="form-group text-center">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-black waves-effect waves-light" type="submit"><i class="fa fa-lock"></i> {$_FORGOT_PASSWORD}</button>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <a href="{$REFERER}" class="badge badge-success text-uppercase"><i class="fa fa-arrow-left"></i> {$_GO_BACK}</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card-box-->
                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

 {include file='./Layout/footer.tpl'}