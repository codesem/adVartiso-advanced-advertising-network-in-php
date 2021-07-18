{include file='../Layout/header.tpl'}


                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                                        <div class="col-sm-12">
                                             <div style="display: flex; justify-content: flex-end"></div>
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-success">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Views <small>(MONTH)</small></p>
                                                      <h2><i class="fa fa-eye"></i> <span data-plugin="counterup">{$monthly_views}</span></h2>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                <div class="card-box widget-box-two widget-two-primary">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Spending">CLIKCS <small>(MONTH)</small></p>
                                                     <h2><i class="fa fa-bar-chart"></i> <span data-plugin="counterup">{$monthly_clicks}</span></h2>
                                                      </div>
                                                     </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                               <div class="card-box widget-box-two widget-two-danger">
                                                 <div class="wigdet-two-content">
                                                  <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Invoices">Earnings <small >(MONTH)</small></p>
                                                  <h2><i class="fa fa-dollar"></i> <span data-plugin="counterup">{$monthly_earnings}</span></h2>
                                                  </div>
                                                 </div>
                                                </div>
                                        </div><!-- end col --><hr>
                                        <div class="text-center">
                                            <span class="badge badge-success">Check every campaign statistics</span>
                                        </div>
                                            <!-- filter form -->
                                            {if $do_nonfound}<div class="alert alert-danger">Error: Campaign Non Found.</div>{/if}
                                            {if $required}<div class="alert alert-danger">Error: All Fields Are Required!</div>{/if}
                                            {if $do_error}<div class="alert alert-danger">Error: Somthing Wrong! Please Try Again.</div>{/if}
                        					<form class="form-vertical" method="POST">
                                              
                                                <input type="hidden" name="filter" value="filter"/>
                                                <input type="hidden" name="csrf" value="{$csrfToken}"/>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                     <select name="camp_id" class="form-control">
                    {foreach from=$campaigns item=foo}
                                                         <option value="{$foo['id']}" {if $foo['id'] == $id} selected="selected" {/if}>{$foo['title']} 
                                                    {if {$foo['camp_type']} == 'img_banner'}
                                                             (Image Banner)
                                                    {elseif {$foo['camp_type']} == 'text_banner'}
                                                             (Text Banner)
                                                    {elseif {$foo['camp_type']} == 'popup'}
                                                             (Popup)
                                                    {elseif {$foo['camp_type']} == 'direct'}
                                                             (Direct Link)
                                                    {/if}
                                                         </option>
                    {/foreach}
                                                     </select>
                                                    </div>
                                                 </div>
                                                <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-line-chart"></i> Filter</button>
	                                        </form>
	                                        {if $stats}
	                                           <hr><h5>Statistics By Campaign (Current Month)</h5>
	                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-unsorted"></i> Status</th>
                                                                <th><i class="fa fa-money"></i> Admin Earn</th>
                                                                <th><i class="fa fa-eye"></i> VIEWS</th>
                                                                <th><i class="fa fa-bar-chart"></i> CLICKS</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$statistics item=foo}
                                                            <tr>
                                                                <th scope="row">{$id}</th>
                                                                <td>
                                               {if $foo['status'] == '1'}
                                                               <span class="badge badge-danger">EARN</span>
                                               {elseif $foo['status'] == '2'}
                                                               <span class="badge badge-danger">IP CHANGED</span>
                                               {elseif $foo['status'] == '3'}
                                                               <span class="badge badge-danger">DON'T COUNT</span>
                                               {elseif $foo['status'] == '4'}
                                                               <span class="badge badge-danger">FRAUD</span>
                                                {/if}
                                                                </td>
                                                                <td>{$foo['earn']}</td>
                                                                <td>{$foo['views']}</td>
                                                                <td>{$foo['clicks']}</td>
                                                            </tr>
                                               {/foreach}
                                                        </tbody>
                                                    </table>
                                            </div>
                                              {if !$statistics}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No statistics was Found..</span>
                                               </div>
                                              {/if}
                                               <hr><h5>Statistics By Country (Current Month)</h5>
	                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-globe"></i> Country</th>
                                                                <th><i class="fa fa-money"></i> Admin Earn</th>
                                                                <th><i class="fa fa-eye"></i> VIEWS</th>
                                                                <th><i class="fa fa-bar-chart"></i> CLICKS</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$countries item=foo}
                                                            <tr>
                                                                <th scope="row">{$id}</th>
                                                                <td><span class="badge badge-danger">{$foo['country']}</span></td>
                                                                <td>{$foo['earn']}</td>
                                                                <td>{$foo['views']}</td>
                                                                <td>{$foo['clicks']}</td>
                                                            </tr>
                                               {/foreach}
                                                        </tbody>
                                                    </table>
                                            </div>
                                              {if !$countries}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No statistics was Found..</span>
                                               </div>
                                              {/if}
                                               <hr><h5>Statistics By Referer Domains (Current Month)</h5>
	                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-share"></i> Referer</th>
                                                                <th><i class="fa fa-money"></i> Admin Earn</th>
                                                                <th><i class="fa fa-eye"></i> VIEWS</th>
                                                                <th><i class="fa fa-bar-chart"></i> CLICKS</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$referers item=foo}
                                                            <tr>
                                                                <th scope="row">{$id}</th>
                                                                <td><span class="badge badge-danger">{$foo['referer_domain']}</span></td>
                                                                <td>{$foo['earn']}</td>
                                                                <td>{$foo['views']}</td>
                                                                <td>{$foo['clicks']}</td>
                                                            </tr>
                                               {/foreach}
                                                        </tbody>
                                                    </table>
                                            </div>
                                              {if !$referers}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No statistics was Found..</span>
                                               </div>
                                              {/if}
                                            {/if}
                                </div> <!-- end card -->
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                        
{include file='../Layout/footer.tpl'}