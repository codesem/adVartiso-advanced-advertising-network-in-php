 {include file='./Layout/header.tpl'}

                                <div class="account-content">
                                    <h4>Step 2: Build database</h4>
                                    <div class="alert alert-danger">Create tables.</div>
                                    <form class="form-horizontal" method="POST">

                                      <input type="hidden" name="build" value="build" />
                                      <input type="hidden" name="csrf" value="{$csrfToken}" />

                                        <div class="form-group text-center">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-black waves-effect waves-light" type="submit"><i class="fa fa-code"></i> Build</button>
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