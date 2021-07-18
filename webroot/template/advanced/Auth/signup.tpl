 {include file='./Layout/header.tpl'}

                                <div class="account-content">
                                    <!-- ALERTS START HERE -->
                                      {if $whitespace}<div class="alert alert-{$_WHITESPACE}">{$__WHITESPACE}</div>{/if}
                                      {if $blocked_ip}<div class="alert alert-{$_IP_BLOCKED}">{$__IP_BLOCKED}</div>{/if}
                                      {if $rep_email}<div class="alert alert-{$_EXIST}">{$__EXIST}</div>{/if}
                                      {if $passwords}<div class="alert alert-{$_PASSWORDS}">{$__PASSWORDS}</div>{/if}
                                      {if $rep_username}<div class="alert alert-{$_REPEAT}">{$__REPEAT}</div>{/if}
                                      {if $recaptcha}<div class="alert alert-{$_RECAPTCHA}">{$__RECAPTCHA}</div>{/if}
                                      {if $required}<div class="alert alert-{$_REQUIRED}">{$__REQUIRED}</div>{/if}
                                    <!-- ALERTS END HERE -->
                                    <form class="form-horizontal" method="POST">

                                    <input type="hidden" name="register" value="register" />
                                    <input type="hidden" name="csrf" value="{$csrfToken}" />

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <select name="role" class="form-control" required>
                                                    <option value="publisher">{$_PUBLISHER}</option>
                                                    <option value="advertiser">{$_ADVERTISER}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                               <input type="text" class="form-control" name="username" required="" id="username" onBlur="checkAvailability()" autocomplete="disabled" placeholder="{$_USERNAME}">
                                               <h6 style="display: inline-block;"><i class="fa fa-spinner" id="loader-availability" style="display: none;"></i></h6>
                                               <span id="user-availability-status"></span> 
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                               <input type="email" class="form-control" name="email" required="" placeholder="{$_EMAIL}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                              <input type="password" class="form-control" name="password" required="" placeholder="{$_PASSWORD}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                              <input type="password" class="form-control" name="passwordcheck" required="" placeholder="{$_CONFIRM_PASSWORD}">
                                            </div>
                                        </div>

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-success">
                                                    <input id="checkbox-signup" type="checkbox" required>
                                                    <label for="checkbox-signup">
                                                        {$_I_ACCEPT}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                     {if do_config(54) == 1}
                                       <div class="form-group">
                                            <div class="col-xs-12">
                                              <label for="password">{$_PROVE_YOUR_HUMAN}<span class="required">*</span></label>
										      	<div id="recaptcha-widget" class="g-recaptcha" data-sitekey="{do_config(5)}"></div>
                                            </div>
  									   </div>
                                     {/if}
                                        <div class="form-group text-center">
                                            <div class="col-xs-12">
                                                <button type="submit" class="btn w-md btn-bordered btn-black waves-effect waves-light"><i class="fa fa-check-circle"></i> {$_SIGN_UP}</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row m-t-50">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-muted">{$_ALREADY_HAVE_AN_ACCOUNT} <a href="{$HOST}auth/signin" class="text-primary m-l-5"><b>{$_SIGN_IN}</b></a></p>
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
            </div>
          </section>
          <!-- END HOME -->

 {include file='./Layout/footer.tpl'}