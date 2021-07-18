{include file='../Layout/header.tpl'}


                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                                        <div class="col-sm-12">
                                             <div style="display: flex; justify-content: flex-end"></div>
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-success">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_VIEWS} <small>({$_MONTH})</small></p>
                                                      <h2><i class="fa fa-eye"></i> <span>{$monthly_views}</span></h2>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                <div class="card-box widget-box-two widget-two-primary">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_CLICKS} <small>({$_MONTH})</small></p>
                                                     <h2><i class="fa fa-bar-chart"></i> <span data-plugin="counterup">{$monthly_clicks}</span></h2>
                                                      </div>
                                                     </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                               <div class="card-box widget-box-two widget-two-danger">
                                                 <div class="wigdet-two-content">
                                                  <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_EARNINGS} <small >({$_MONTH})</small></p>
                                                  <h2><i class="fa fa-dollar"></i> <span data-plugin="counterup">{$monthly_earnings}</span></h2>
                                                  </div>
                                                 </div>
                                                </div>
                                        </div><!-- end col --><hr>
                                        <div class="text-center">
                                            <span class="badge badge-success">{$_CHECK_EVERY_ZONE}</span>
                                        </div><br>
                                            <!-- filter form -->
                                            {if $required}<div class="alert alert-{$_REQUIRED}">{$__REQUIRED}</div>{/if}
                                            {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}
                        					<form class="form-vertical" method="POST">
                                              
                                                <input type="hidden" name="filter" value="filter"/>
                                                <input type="hidden" name="csrf" value="{$csrfToken}"/>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                     <select name="zone_id" class="form-control">
                    {foreach from=$zones item=foo}
                                                         <option value="{$foo['id']}" {if $foo['id'] == $id} selected="selected" {/if}>{$foo['name']} 
                                                    {if {$foo['type']} == 'img_banner'}
                                                             (Image Banner)
                                                    {elseif {$foo['type']} == 'text_banner'}
                                                             (Text Banner)
                                                    {elseif {$foo['type']} == 'popup'}
                                                             (Popup)
                                                    {elseif {$foo['type']} == 'direct'}
                                                             (Direct Link)
                                                    {/if}
                                                         </option>
                    {/foreach}
                                                     </select>
                                                    </div>
                                                 </div>
                                             <button type="submit" class="btn btn-black btn-bordered waves-effect w-md m-b-5">
                                                    <i class="fa fa-line-chart"></i> {$_FILTER}
                                             </button>
	                                        </form>
	                                        {if $stats}
	                                           <hr><h5>{$_STATS_BY_ZONE} ({$_CURRENT_MONTH})</h5>
	                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-unsorted"></i> {$_TYPE}</th>
                                                                <th><i class="fa fa-money"></i> {$_EARN}</th>
                                                                <th><i class="fa fa-eye"></i> {$_VIEWS}</th>
                                                                <th><i class="fa fa-bar-chart"></i> {$_CLICKS}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$statistics item=foo}
                                                            <tr>
                                                                <th scope="row">{$id}</th>
                                                                <td>
                                               {if $foo['status'] == '1'}
                                                               <span class="badge badge-danger">{$_EARN}</span>
                                               {elseif $foo['status'] == '2'}
                                                               <span class="badge badge-danger">{$_IP_CHANGED}</span>
                                               {elseif $foo['status'] == '3'}
                                                               <span class="badge badge-danger">{$_DONT_COUNT}</span>
                                               {elseif $foo['status'] == '4'}
                                                               <span class="badge badge-danger">{$_FRAUD}</span>
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
                                                   <span class="badge badge-danger" style="margin-top: 30px;">{$_NO_RECORDS_WERE_FOUND}</span>
                                               </div>
                                              {/if}
                                               <hr><h5>{$_STATS_BY_COUNTRY} ({$_CURRENT_MONTH})</h5>
	                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-globe"></i> {$_COUNTRY}</th>
                                                                <th><i class="fa fa-money"></i> {$_EARN}</th>
                                                                <th><i class="fa fa-eye"></i> {$_VIEWS}</th>
                                                                <th><i class="fa fa-bar-chart"></i> {$_CLICKS}</th>
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
                                                   <span class="badge badge-danger" style="margin-top: 30px;">{$_NO_RECORDS_WERE_FOUND}</span>
                                               </div>
                                              {/if}
                                               <hr><h5>{$_STATS_BY_REFERER} ({$_CURRENT_MONTH})</h5>
	                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-share"></i> {$_REFERER}</th>
                                                                <th><i class="fa fa-money"></i> {$_EARN}</th>
                                                                <th><i class="fa fa-eye"></i> {$_VIEWS}</th>
                                                                <th><i class="fa fa-bar-chart"></i> {$_CLICKS}</th>
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
                                                   <span class="badge badge-danger" style="margin-top: 30px;">{$_NO_RECORDS_WERE_FOUND}</span>
                                               </div>
                                              {/if}
                                            {/if}
                                </div> <!-- end card -->
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                        
{include file='../Layout/footer.tpl'}