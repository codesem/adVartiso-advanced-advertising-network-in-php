{include file='../Layout/header.tpl'}

                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
     {if $marked}<div class="alert alert-success">Campaign Marked Successfully</div>{/if}
     {if $updated}<div class="alert alert-success">Campaign Updated Successfully</div>{/if}
     {if $deactivated}<div class='alert alert-success'>Campaign Deactivated Successfully</div>{/if}
     {if $activated}<div class='alert alert-success'>Campaign Activated Successfully</div>{/if}
     {if $deleted}<div class="alert alert-success">Campaign Deleted Successfully</div>{/if}
     {if $do_error}<div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div>{/if}
     {include file='../Campaigns/menu.tpl'}
                                   {foreach from=$popups item=foo}
                                     <div id="modal-{$foo['id']}" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                         <div class="modal-dialog" style="width:70%; max-width: none;">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <h4 class="modal-title mt-0">Mark Campaign #{$foo['id']}</h4>
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">×</span>
                                                     </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="text-center">
                                                            <span class="badge badge-success"><i class="fa fa-check-circle"></i> Mark Campaign As:</span>
                                                        </div><hr>
                                                        <form class="form-horizontal" method="POST" action="{$ADM}campaigns/mark">
                                                            
                                                            <input type="hidden" name="mark" value="mark"/>
                                                            <input type="hidden" name="csrf" value="{$csrfToken}"/>
                                                            <input type="hidden" name="id" value="{$foo['id']}"/>
                                                            <div class="form-group">
                                                                <div class="col-md-6" style="margin-left: 225px;">
                                                                    <select name="filter" class="form-control">
                                                                        <option value="clean" {if $foo['filter'] == 'clean'}selected="selected"{/if}>CLEAN - Clean Campaign</option>
                                                                        <option value="nsfw" {if $foo['filter'] == 'nsfw'}selected="selected"{/if}>NSFW - Nudity or other content not suitable for work</option>
                                                                        <option value="gamble" {if $foo['filter'] == 'gamble'}selected="selected"{/if}>GAMBLING - Games of chance, HYIPs, ponzi schemes</option>
                                                                        <option value="shady" {if $foo['filter'] == 'shady'}selected="selected"{/if}>SHADY - Ads that pass other filters, but might be considered inappropriate by publishers</option>
                                                                        <option value="risky" {if $foo['filter'] == 'risky'}selected="selected"{/if}>RISKY - High risk investments</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="margin-left: 225px;">
                                                                <button type="submit" class="btn btn-black waves-effect btn-xs"><i class="fa fa-check-circle"></i> Mark</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                   {/foreach}
                                     <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-user"></i> User</th>
                                                                <th><i class="fa fa-link"></i> Url</th>
                                                                <th><i class="fa fa-dollar"></i> Spend</th>
                                                                <th><i class="fa fa-money"></i> Price</th>
                                                                <th><i class="fa fa-bar-chart"></i> Clicks</th>
                                                                <th><i class="fa fa-unsorted"></i> Status</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> Actions</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$popups item=foo}
                                                            <tr>
                                                                <th scope="row">{$foo['id']}</th>
                                                                <td>
                                                                    <a href="{$ADM}users/view/{$foo['user_id']}/" class="badge badge-info">
                                                                        <i class="fa fa-user"></i>
                                                                    </a>
                                                                </td>
                                                                <td><a href="{$foo['url']}" class="badge badge-danger" target="_blank"><i class="fa fa-link"></i></a></td>
                                                                <td>{$foo['price']}</td>
                                                                <td>{$foo['camp_price']}</td>
                                                                <td>{$foo['clicks']}/{$foo['camp_clicks']}</td>
                                                                <td>
                                               {if $foo['status'] == '1'}
                                                               <span class="badge badge-success">Active</span>
                                               {elseif $foo['status'] == '2'}
                                                               <span class="badge badge-danger">Pending</span>
                                               {elseif $foo['status'] == '3'}
                                                               <span class="badge badge-info">Completed</span>
                                               {elseif $foo['status'] == '4'}
                                                               <span class="badge badge-warning">Paused</span>
                                               {elseif $foo['status'] == '5'}
                                                               <span class="badge badge-danger">Inactive</span>
                                               {/if}</td>
                                                                <td>
                {if $foo['status']== '1'}
                    <form method="POST">
                      <input type="hidden" name="id" value="{$foo['id']}"> 
                      <button class="btn btn-danger btn-xs" type="submit" name="deactivate" value="deactivate" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">Deactivate</button>
                    </form>
               {elseif $foo['status']== '2'}
                   <form method="POST">
                     <input type="hidden" name="id" value="{$foo['id']}"> 
                     <button class="btn btn-success btn-xs" type="submit" name="activate" value="activate"
                     {if !$prmcode} data-toggle="tooltip" data-placement="top" title="" data-original-title="Go Premium To Unlock This Feature" {/if}>
                         Activate
                     </button>
                   </form>
               {elseif $foo['status']== '3' || $foo['status']== '4' || $foo['status']== '5'}
                     <button class="btn btn-black btn-xs" disabled="disabled">No Access</button>
              {/if}
                    </td>
                    <td>
                        <a href="" class="btn btn-black btn-xs" data-toggle="modal" data-target="#modal-{$foo['id']}">
                            <i class="fa fa-check-circle" data-toggle="tooltip" data-placement="top" title="Mark Campaign"></i>
                        </a>
                    </td> 
                   <td>
                     <form method="POST">
                      <input type="hidden" name="id" value="{$foo['id']}"> 
                      <button class="btn btn-warning btn-xs" type="submit" name="delete" value="Delete" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">Delete</button>
                     </form> 
                    </td>
                                                            </tr>
                                               {/foreach}
                                                        </tbody>
                                                    </table>
                                                </div>
                                               {if !$popups}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No popups was Found..</span>
                                               </div>
                                               {/if}
                               </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row" style="text-align: center"> 
                           {if $popups}
                             <ul class="pagination">
                                       {$paging} 
                             </ul>
                           {/if}
                        </div>
                        <!-- end pagination -->
                       </div>
                
{include file='../Layout/footer.tpl'}