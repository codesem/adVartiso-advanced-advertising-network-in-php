 {include file='./Layout/header.tpl'}

                                <div class="account-content">
                                    <h4>Step 3: Create Admin User</h4>

                                    <form class="form-horizontal" method="POST">
                                        <input type="hidden" name="register" value="register" />
                                        <input type="hidden" name="csrf" value="{$csrfToken}" />

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                               <input class="form-control" type="text" name="username" required="" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                              <input class="form-control" type="email" name="email" required="" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                              <input class="form-control" type="password" name="password" required="" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                              <input class="form-control" type="password" name="passwordcheck" required="" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                               <input class="form-control" type="url" name="website" required="" placeholder="Website URL">
                                               <small>Note: insert with (http://) Or (https://) and the trailing slash (/). ex: http://domain.com/</small>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-black waves-effect waves-light" type="submit"><i class="fa fa-user-plus"></i> Signup</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="text-center">
                                        <hr><p>
                                            <a target="_blank" href="https://codsem.com/">By Codesem Team</a>
                                        </p>
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