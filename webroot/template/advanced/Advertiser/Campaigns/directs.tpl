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
                                     <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-dollar"></i> {$_SPEND}</th>
                                                                <th><i class="fa fa-money"></i> {$_PRICE}</th>
                                                                <th><i class="fa fa-bar-chart"></i> {$_CLICKS}</th>
                                                                <th><i class="fa fa-unsorted"></i> {$_STATUS}</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> {$_ACTIONS}</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$directs item=foo}
                                                            <tr>
                                                                <th scope="row">{$foo['id']}</th>
                                                                <td>{$foo['price']}</td>
                                                                <td>{$foo['camp_price']}</td>
                                                                <td>{$foo['clicks']}/{$foo['camp_clicks']}</td>
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
                                               {if !$directs}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">{$_NO_RECORDS_WERE_FOUND}</span>
                                               </div>
                                               {/if}
                               </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row" style="text-align: center"> 
                           {if $directs}
                             <ul class="pagination">
                                       {$paging} 
                             </ul>
                           {/if}
                        </div>
                        <!-- end pagination -->
                       </div>
                
{include file='../Layout/footer.tpl'}