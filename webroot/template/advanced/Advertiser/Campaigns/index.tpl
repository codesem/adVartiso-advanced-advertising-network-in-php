{include file='../Layout/header.tpl'}

                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
                                   {include file='../Campaigns/menu.tpl'}
                                    <div class="row">
                                        <div class="col-sm-12">
                         
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-success">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_ACCOUNT_BALANCE} <small>({$_TOTAL})</small></p>
                                                      <h2><i class="fa fa-money"></i> <span>{do_config(3)}</span><span data-plugin="counterup">{$ad_balance}</span></h2>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                <div class="card-box widget-box-two widget-two-primary">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_ACTIVE_CAMPAIGNS} <small>({$_TOTAL})</small></p>
                                                     <h2><i class="fa fa-database"></i> <span data-plugin="counterup">{$active_campaigns}</span></h2>
                                                      </div>
                                                     </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-danger">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_PAUSED_CAMPAIGNS} <small>({$_TOTAL})</small></p>
                                                      <h2><i class="fa fa-pause"></i> <span data-plugin="counterup">{$paused_campaigns}</span></h2>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                               <div class="card-box widget-box-two widget-two-pink">
                                                 <div class="wigdet-two-content">
                                                  <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_COMPLETED_CAMPAIGNS} <small >({$_TOTAL})</small></p>
                                                  <h2><i class="fa fa-check-circle"></i> <span data-plugin="counterup">{$completed_campaigns}</span></h2>
                                                  </div>
                                                 </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-warning">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_PENDING_CAMPAIGNS} <small>({$_TOTAL})</small></p>
                                                      <h2><i class="fa fa-pause"></i> <span data-plugin="counterup">{$pending_campaigns}</span></h2>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                               <div class="card-box widget-box-two widget-two-purple">
                                                 <div class="wigdet-two-content">
                                                  <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_INACTIVE_CAMPAIGNS} <small >({$_TOTAL})</small></p>
                                                  <h2><i class="fa fa-check-circle"></i> <span data-plugin="counterup">{$inactive_campaigns}</span></h2>
                                                  </div>
                                                 </div>
                                                </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                    <hr>
                               </div>
                            </div>
                        </div>
                        <!-- end row -->
                       </div>
                
{include file='../Layout/footer.tpl'}