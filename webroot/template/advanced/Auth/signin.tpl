 {include file='./Layout/header.tpl'}

                                <div class="account-content">
                                    <!-- ALERTS START HERE -->
                                      {if $blocked_ip}<div class="alert alert-{$_IP_BLOCKED}">{$__IP_BLOCKED}</div>{/if}
                                      {if $recaptcha}<div class="alert alert-{$_RECAPTCHA}">{$__RECAPTCHA}</div>{/if}
                                      {if $banned}<div class="alert alert-{$_BANNED}">{$__BANNED}</div>{/if}
                                      {if $invalid}<div class="alert alert-{$_INVALID}">{$__INVALID}</div>{/if}
                                      {if $required}<div class="alert alert-{$_REQUIRED}">{$__REQUIRED}</div>{/if}
                                      {if $express_login}<div class="alert alert-{$_EXPRESS}">{$__EXPRESS}</div>{/if}
                                    <!-- ALERTS END HERE -->
                     
                                    <form class="form-horizontal" method="POST">

                                    <input type="hidden" name="login" value="login" />
                                    <input type="hidden" name="csrf" value="{$csrfToken}" />

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                               <input class="form-control" type="text" name="username" required="" placeholder="{$_USERNAME}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                              <input class="form-control" type="password" name="password" required="" placeholder="{$_PASSWORD}">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-success">
                                                    <input id="checkbox-signup" type="checkbox" checked>
                                                    <label for="checkbox-signup">
                                                        {$_REMEMBER_ME}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                     {if do_config(55) == 1}
                                       <div class="form-group">
                                            <div class="col-xs-12">
                                              <label for="password">{$_PROVE_YOUR_HUMAN}<span class="required">*</span></label>
										      	<div id="recaptcha-widget" class="g-recaptcha" data-sitekey="{do_config(5)}"></div>
                                            </div>
  									   </div>
                                     {/if}
                                    <div class="form-group text-center m-t-30">
                                        <div class="col-sm-12">
                                            <a href="{$HOST}auth/forgot-password" class="text-muted"><i class="fa fa-lock m-r-5"></i> {$_FORGOT_PASSWORD}?</a>
                                        </div>
                                    </div>
                                        <div class="form-group text-center">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-black waves-effect waves-light" type="submit"><i class="fa fa-key"></i> {$_SIGN_IN}</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row m-t-50">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-muted">{$_NO_ACCOUNT} <a href="{$HOST}auth/signup" class="text-primary m-l-5"><b>{$_SIGN_UP}</b></a></p>
                                        </div>
                                    </div>
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