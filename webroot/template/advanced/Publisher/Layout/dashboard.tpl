{include file='../Layout/header.tpl'}

                        <div class="row">
                        <div class="col-md-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-12">
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-success">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_ACCOUNT_BALANCE} <small>({$_TOTAL})</small></p>
                                                      <h2><i class="fa fa-money"></i> <span>{do_config(3)}</span><span data-plugin="counterup">{$pub_earnings}</span></h2>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                <div class="card-box widget-box-two widget-two-primary">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_CLICKS} <small>({$_TODAY})</small></p>
                                                     <h2><i class="fa fa-unsorted"></i> <span data-plugin="counterup">{$today_clicks}</span></h2>
                                                      </div>
                                                     </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                               <div class="card-box widget-box-two widget-two-danger">
                                                 <div class="wigdet-two-content">
                                                  <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_VIEWS} <small >({$_TODAY})</small></p>
                                                  <h2><i class="fa fa-eye"></i> <span data-plugin="counterup">{$today_views}</span></h2>
                                                  </div>
                                                 </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                <div class="card-box widget-box-two widget-two-pink">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_WEBSITES} <small>({$_ACTIVE})</small></p>
                                                     <h2><i class="fa fa-link"></i> <span data-plugin="counterup">{$websites}</span></h2>
                                                      </div>
                                                     </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-warning">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_REFERRALS} <small>({$_TOTAL})</small></p>
                                                      <h2><i class="fa fa-users"></i> <span data-plugin="counterup">{$referrals}</span></h2>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                               <div class="card-box widget-box-two widget-two-purple">
                                                 <div class="wigdet-two-content">
                                                  <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_ZONES} <small >({$_ACTIVE})</small></p>
                                                  <h2><i class="fa fa-code"></i> <span data-plugin="counterup">{$zones}</span></h2>
                                                  </div>
                                                 </div>
                                                </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                    <!-- <hr><div class="chart-container text-center" style="position: relative;">
                                        <canvas id="views_chart" width="100" height="35"></canvas>
                                    </div> -->
                                    <hr>
                                    <div class="text-center">
                                        <a href="{$PUB}websites/add" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-plus-circle"></i> {$_ADD_SITE}</a>
                                        <a href="{$PUB}withdraws/index" class="btn btn-primary waves-effect w-md m-b-5"><i class="fa fa-dollar"></i> {$_WITHDRAWAL}</a>
                                    </div>
                                </div> <!-- end card -->
                                        
                            
                            </div>

                            <!-- end col -->
                        </div>
                        <!-- end row -->

                         <!-- js chart -->
                         <!-- {include file="$TMP/Publisher/Layout/chart.js.tpl"} -->

{include file='../Layout/footer.tpl'}