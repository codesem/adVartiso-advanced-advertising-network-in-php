 {include file='./Layout/header.tpl'}

                                <div class="account-content">
                                    <h4>Step 1: Database</h4>
                                    {if $faild}<div class="alert alert-danger">Error: We couldn't connect to database! Please Try again.</div>{/if}
                                    <form class="form-horizontal" method="POST">

                                    <input type="hidden" name="install" value="proccess" />
                                    <input type="hidden" name="csrf" value="{$csrfToken}" />

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                               <input class="form-control" type="text" name="host" required="" placeholder="Database Host">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                              <input class="form-control" type="text" name="user" required="" placeholder="Database Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                              <input class="form-control" type="password" name="pass" required="" placeholder="Database Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                              <input class="form-control" type="text" name="dbname" required="" placeholder="Database Name">
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-black waves-effect waves-light" type="submit"><i class="fa fa-database"></i> Proccess</button>
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