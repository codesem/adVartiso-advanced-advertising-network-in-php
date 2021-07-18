{include file='../Layout/header.tpl'}

                        <div class="row">
                        <div class="col-md-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-12">
                         
                                            <div style="display: flex; justify-content: flex-end"></div>
                                            <div class="text-center">
                                                <h4><i class="fa fa-shopping-cart"></i> {$_PICK_TYPE_CAMPAIGN_YOU_WISH}</h4><hr>
                                            </div>
                                            <div class="hover01 text-center">
                                            {if do_config(80) == 1}
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-success" data-toggle="tooltip" data-placement="top" title="{$_IMAGE_BANNER}">
                                                   <div class="wigdet-two-content">
                                                       <a href="{$ADV}purchase/image-banner">
                                                           <img class="text-center" src="{$UPD}images/image-banner.svg" height="130"/>
                                                       </a>
                                                    </div>
                                                  </div>
                                                </div>
                                            {/if}
                                            {if do_config(82) == 1}
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-success" data-toggle="tooltip" data-placement="top" title="{$_POPUP}">
                                                   <div class="wigdet-two-content">
                                                       <a href="{$ADV}purchase/popup">
                                                           <img class="text-center" src="{$UPD}images/popup.svg" height="130"/>
                                                       </a>
                                                    </div>
                                                  </div>
                                                </div>
                                            {/if}
                                            {if do_config(83) == 1}
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-success" data-toggle="tooltip" data-placement="top" title="{$_DIRECT}">
                                                   <div class="wigdet-two-content">
                                                       <a href="{$ADV}purchase/direct">
                                                           <img class="text-center" src="{$UPD}images/direct.svg" height="130"/>
                                                       </a>
                                                    </div>
                                                  </div>
                                                </div>
                                            {/if}
                                            {if do_config(81) == 1}
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-success" data-toggle="tooltip" data-placement="top" title="{$_TEXT_BANNER}">
                                                   <div class="wigdet-two-content">
                                                       <a href="{$ADV}purchase/text-banner">
                                                           <img class="text-center" src="{$UPD}images/text-banner.svg" height="130"/>
                                                       </a>
                                                    </div>
                                                  </div>
                                                </div>
                                            {/if}
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-success" data-toggle="tooltip" data-placement="top" title="{$_NATIVE}">
                                                   <div class="wigdet-two-content">
                                                       <a href="#">
                                                           <img class="text-center" src="{$UPD}images/native-soon.svg" height="130"/>
                                                       </a>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-success" data-toggle="tooltip" data-placement="top" title="{$_EXIT_INTENT}">
                                                   <div class="wigdet-two-content">
                                                       <a href="#">
                                                           <img class="text-center" src="{$UPD}images/exit-intent-soon.svg" height="130"/>
                                                       </a>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                             <div class="text-center">
                                                 <hr>
                                                 <span class="badge badge-danger">
                                                      {$_GET_YOUR_CAMPAIGN_DELIVERED_TO_MILLIONS_VISITORS_OUR_NETWORK}
                                                 </span>
                                             </div>

                                                </div> <!-- end card -->
                                        
                            
                            </div>

                            <!-- end col -->
                        </div>
                        <!-- end row -->

{include file='../Layout/footer.tpl'}