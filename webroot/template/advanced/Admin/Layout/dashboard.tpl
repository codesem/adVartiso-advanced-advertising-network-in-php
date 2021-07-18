{include file='../Layout/header.tpl'}

                        <div class="row">
                        <div class="col-md-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="text-center">
                                            {if !$prmcode}
                                                <div class="badge badge-danger"><i class="fa fa-star"></i> Go Premium To Unlock All Features <a class="blue-color" href="{$ADM}activation">(activation page)</a>
                                                </div>
                                            {else}
                                                <div class="badge badge-danger"><i class="fa fa-refresh"></i> TIP: Always check new updates on the <a class="blue-color" href="{$ADM}updates/index">(update page)</a>
                                                </div>
                                            {/if}
                                            </div>
                                             <hr>
                                        <div class="text-center">
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-success">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Owner Earnings <small>(Last 24H)</small></p>
                                                      <h2><i class="fa fa-money"></i> <span>{do_config(3)}</span><span data-plugin="counterup">{$owner_earnings}</span></h2>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                <div class="card-box widget-box-two widget-two-primary">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Publishers Earnings <small>(Last 24H)</small></p>
                                                     <h2><i class="fa fa-database"></i> <span>{do_config(3)}</span><span data-plugin="counterup">{$publishers_earnings}</span></h2>
                                                      </div>
                                                     </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                               <div class="card-box widget-box-two widget-two-danger">
                                                 <div class="wigdet-two-content">
                                                  <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Clicks <small >(Last 24H)</small></p>
                                                  <h2><i class="fa fa-shopping-cart"></i> <span data-plugin="counterup">{$today_clicks}</span></h2>
                                                  </div>
                                                 </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                <div class="card-box widget-box-two widget-two-pink">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Views <small>(Last 24H)</small></p>
                                                     <h2><i class="fa fa-eye"></i> <span data-plugin="counterup">{$today_views}</span></h2>
                                                      </div>
                                                     </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-warning">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Users <small>(TOTAL)</small></p>
                                                      <h2><i class="fa fa-users"></i> <span data-plugin="counterup">{$users}</span></h2>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                               <div class="card-box widget-box-two widget-two-purple">
                                                 <div class="wigdet-two-content">
                                                  <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Websites <small >(Total)</small></p>
                                                  <h2><i class="fa fa-link"></i> <span data-plugin="counterup">{$websites}</span></h2>
                                                  </div>
                                                 </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-primary">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Campagins <small>(Last 24H)</small></p>
                                                      <h2><i class="fa fa-database"></i> <span data-plugin="counterup">{$today_campaigns}</span></h2>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                <div class="card-box widget-box-two widget-two-danger">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Advertisers <small>(TOTAL)</small></p>
                                                     <h2><i class="fa fa-bullhorn"></i> <span data-plugin="counterup">{$advertisers}</span></h2>
                                                      </div>
                                                     </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                               <div class="card-box widget-box-two widget-two-success">
                                                 <div class="wigdet-two-content">
                                                  <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Publishers">Publishers <small >(TOTAL)</small></p>
                                                  <h2><i class="fa fa-chart-line"></i> <span data-plugin="counterup">{$publishers}</span></h2>
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
                                        <a href="{$ADM}users/index" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-users"></i> Users</a>
                                        <a href="{$ADM}websites/index" class="btn btn-info waves-effect w-md m-b-5"><i class="fa fa-link"></i> Websites</a>
                                        <a href="{$ADM}invoices/index" class="btn btn-danger waves-effect w-md m-b-5"><i class="fa fa-bank"></i> Invoices</a>
                                        <a href="{$ADM}campaigns/image-banners" class="btn btn-primary waves-effect w-md m-b-5"><i class="fa fa-database"></i> Campaigns</a>
                                    </div>
                                                </div> <!-- end card -->
                            </div>

                            <!-- end col -->
                        </div>
                        <!-- end row -->

                         <!-- js chart -->
                         <!-- {include file="$TMP/Admin/Layout/chart.js.tpl"} -->

{include file='../Layout/footer.tpl'}