 {include file='./Layout/header.tpl'}

                                <div class="account-content">
                                    <!-- ALERTS START HERE -->
                                       {if $confirm}<div class="alert alert-{$_PASSWORDS}">{$__PASSWORDS}</div>{/if}
                                       {if $required}<div class="alert alert-{$_REQUIRED}">{$__REQUIRED}</div>{/if}
                                    <!-- ALERTS END HERE -->
                                    <form class="form-horizontal" method="POST">
                                        <input type="hidden" name="reset" value="reset" />
                                        <input type="hidden" name="csrf" value="{$csrfToken}" />

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                               <input class="form-control" type="text" value="{$reset_username}" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                               <input class="form-control" type="password" name="new_password" placeholder="{$_NEW_PASSWORD}" required="">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                               <input class="form-control" type="password" name="confirm_password" placeholder="{$_CONFIRM_PASSWORD}" required="">
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-black waves-effect waves-light" type="submit"><i class="fa fa-refresh"></i> {$_RESET_PASSWORD}</button>
                                            </div>
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