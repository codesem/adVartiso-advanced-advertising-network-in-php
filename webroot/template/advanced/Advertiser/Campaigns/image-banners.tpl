{include file='../Layout/header.tpl'}

                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
     {if $updated}<div class="alert alert-{$_CAMP_UPDATED}">{$__CAMP_UPDATED}</div>{/if}
     {if $deactivated}<div class='alert alert-{$_CAMP_DEACTIVATED}'>{$__CAMP_DEACTIVATED}</div>{/if}
     {if $activated}<div class='alert alert-{$_CAMP_ACTIVATED}'>{$__CAMP_ACTIVATED}</div>{/if}
     {if $deleted}<div class="alert alert-{$_CAMP_DELETED}">{$__CAMP_DELETED}</div>{/if}
     {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}

     {include file='../Campaigns/menu.tpl'}
                                   {foreach from=$imgbanners item=foo}
                                     <div id="modal-{$foo['id']}" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                         <div class="modal-dialog" style="width:70%; max-width: none;">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <h4 class="modal-title mt-0">{$_IMAGE} #{$foo['id']}</h4>
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">×</span>
                                                     </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="text-center">
                                                            <img src="{$UPD}{$foo['image']}" />
                                                        </div>
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
                                                                <th><i class="fa fa-unsorted"></i> {$_TYPE}</th>
                                                                <th><i class="fa fa-dollar"></i> {$_SPEND}</th>
                                                                <th><i class="fa fa-eye"></i> {$_VIEWS}</th>
                                                                <th><i class="fa fa-bar-chart"></i> {$_CLICKS}</th>
                                                                <th><i class="fa fa-code"></i> {$_SIZE}</th>
                                                                <th><i class="fa fa-unsorted"></i> {$_STATUS}</th>
                                                                <th><i class="fa fa-image"></i> {$_IMAGE}</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> {$_ACTIONS}</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$imgbanners item=foo}
                                                            <tr>
                                                                <th scope="row">{$foo['id']}</th>
                                               {if $foo['method'] == 'clicks'}
                                                                <td><strong>{$_CPC}</strong></td>
                                               {elseif $foo['method'] == 'views'}
                                                                <td><strong>{$_CPM}</strong></td>
                                               {/if}
                                                                <td>{$foo['price']}</td>
                                               {if $foo['method'] == 'clicks'}
                                                                <td>{$foo['views']}</td>
                                               {elseif $foo['method'] == 'views'}
                                                                <td>{$foo['views']}/{$foo['camp_views']}</td>
                                               {/if}
                                               {if $foo['method'] == 'views'}
                                                                <td>{$foo['clicks']}</td>
                                               {elseif $foo['method'] == 'clicks'}
                                                                <td>{$foo['clicks']}/{$foo['camp_clicks']}</td>
                                               {/if}
                                                                <td>{$foo['camp_size']}</td>
                                                                <td>
                                               {if $foo['status'] == '1'}
                                                               <span class="badge badge-success">{$_ACTIVE}</span>
                                               {elseif $foo['status'] == '2'}
                                                               <span class="badge badge-danger">{$_PENDING}</span>
                                               {elseif $foo['status'] == '3'}
                                                               <span class="badge badge-info">{$_COMPLETED}</span>
                                               {elseif $foo['status'] == '4'}
                                                               <span class="badge badge-warning">{$_PAUSED}</span>
                                               {elseif $foo['status'] == '5'}
                                                               <span class="badge badge-danger">{$_INACTIVE}</span>
                                               {/if}</td>
                                                                <td>
                                                                    <a href="" class="btn btn-black btn-xs" data-toggle="modal" data-target="#modal-{$foo['id']}">
                                                                        <i class="fa fa-image"></i>
                                                                    </a>
                                                                </td>                                                                
                                                                <td>
                {if $foo['status']== '1'}
                    <form method="POST">
                      <input type="hidden" name="id" value="{$foo['id']}"> 
                      <button class="btn btn-danger btn-xs" type="submit" name="pause" value="pause" onclick="if (confirm(&quot;Are you sure you want to pause?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;"><i class="fa fa-pause"></i> {$_PAUSE}</button>
                    </form>
               {elseif $foo['status']== '4'}
                   <form method="POST">
                     <input type="hidden" name="id" value="{$foo['id']}"> 
                     <button class="btn btn-black btn-xs" type="submit" name="activate" value="activate"><i class="fa fa-play"></i> {$_RUN}</button>
                   </form>
               {else}
                     <button class="btn btn-success btn-xs" disabled="disabled"><i class="fa fa-ban"></i> {$_NO_ACTION}</button>
              {/if}
                    </td>
                                                            </tr>
                                               {/foreach}
                                                        </tbody>
                                                    </table>
                                                </div>
                                               {if !$imgbanners}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">{$_NO_RECORDS_WERE_FOUND}</span>
                                               </div>
                                               {/if}
                               </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row" style="text-align: center"> 
                           {if $imgbanners}
                             <ul class="pagination">
                                       {$paging} 
                             </ul>
                           {/if}
                        </div>
                        <!-- end pagination -->
                       </div>
                
{include file='../Layout/footer.tpl'}