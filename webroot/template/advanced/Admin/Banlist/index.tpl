 {include file='../Layout/header.tpl'}

                       <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
     {if $added}<div class="alert alert-success">IP Added Successfully</div>{/if}
     {if $deleted}<div class="alert alert-success">IP Deleted Successfully</div>{/if}
     {if $deactivated}<div class='alert alert-success'>IP BlackListed Successfully</div>{/if}
     {if $activated}<div class='alert alert-success'>IP WhiteListed Successfully</div>{/if}
     {if $do_error}<div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div>{/if}
     {include file='../Banlist/menu.tpl'}
     <div class="text-center">
         <span class="badge badge-danger"><i class="fa fa-ban"></i> Blacklisted IP(s) Can't Login/signup</span>
     </div><br>
                                     <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-wifi"></i> IP</th>
                                                                <th><i class="fa fa-comment"></i> Reason</th>
                                                                <th><i class="fa fa-calendar"></i> Date</th>
                                                                <th><i class="fa fa-unsorted"></i> Status</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> Actions</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$banlist item=foo}
                                                            <tr>
                                                                <th scope="row">{$foo['id']}</th>
                                                                <td>{$foo['ip_address']}</td>
                                                                <td>{$foo['reason']}</td>
                                                                <td>{$foo['created']}</td>
                                                                <td>
                                               {if $foo['status'] == 1}
                                                               <span class="badge badge-success">Whitelisted</span>
                                               {elseif $foo['status'] == 2}
                                                               <span class="badge badge-danger">Blacklisted</span>
                                               {/if}
                                                                </td>
                                                                <td>
                                               {if $foo['status']== '1'}
                                                    <form method="POST">
                                                       <input type="hidden" name="id" value="{$foo['id']}"> 
                                                       <button class="btn btn-danger btn-xs" type="submit" name="deactivate" value="deactivate" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">Blacklist</button>
                                                    </form>
                                               {elseif $foo['status']== '2'}
                                                    <form method="POST">
                                                        <input type="hidden" name="id" value="{$foo['id']}"> 
                                                        <button class="btn btn-success btn-xs" type="submit" name="activate" value="activate">Whitelist</button>
                                                    </form>
                                                {/if}
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
                                               {if !$banlist}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No IP(s) was Found..</span>
                                               </div>
                                               {/if}
                               </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row" style="text-align: center"> 
                           {if $banlist}
                             <ul class="pagination">
                                       {$paging} 
                             </ul>
                           {/if}
                        </div>
                        <!-- end pagination -->
                       </div>
                
{include file='../Layout/footer.tpl'}