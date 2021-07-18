{include file='../Layout/header.tpl'}

                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
     {if $deactivated}<div class='alert alert-{$_TEMP_DEACTIVATED}'>{$__TEMP_DEACTIVATED}</div>{/if}
     {if $activated}<div class='alert alert-{$_TEMP_ACTIVATED}'>{$__TEMP_ACTIVATED}</div>{/if}
     {if $deleted}<div class="alert alert-{$_TEMP_DELETED}">{$__TEMP_DELETED}</div>{/if}
     {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}  
     {include file='../Templates/menu.tpl'}
                                     <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-pencil"></i> {$_NAME}</th>
                                                                <th><i class="fa fa-bars"></i> {$_TITLE}</th>
                                                                <th><i class="fa fa-link"></i> {$_LINK}</th>
                                                                <th><i class="fa fa-unsorted"></i> {$_STATUS}</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> {$_ACTIONS}</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$templates item=foo}
                                                            <tr>
                                                                <th scope="row">{$foo['id']}</th>
                                                                <td>{$foo['name']}</td>
                                                                <td>{$foo['title']}</td>
                                                                <td><span class="badge badge-danger">{$foo['link']}</span></td>
                                                                <td>
                                               {if $foo['status'] == '1'}
                                                               <span class="badge badge-success">{$_ACTIVE}</span>
                                               {elseif $foo['status'] == '2'}
                                                               <span class="badge badge-danger">{$_INACTIVE}</span>
                                               {/if}</td>
                                                                <td>
                {if $foo['status']== '1'}
                    <form method="POST">
                      <input type="hidden" name="id" value="{$foo['id']}"> 
                      <button class="btn btn-danger btn-xs" type="submit" name="deactivate" value="deactivate" onclick="if (confirm(&quot;Are you sure you want to pause?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;"><i class="fa fa-times"></i> {$_DEACTIVATE}</button>
                    </form>
               {elseif $foo['status']== '2'}
                   <form method="POST">
                     <input type="hidden" name="id" value="{$foo['id']}"> 
                     <button class="btn btn-black btn-xs" type="submit" name="activate" value="activate"><i class="fa fa-check-circle"></i> {$_ACTIVATE}</button>
                   </form>
              {/if}
                    </td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="id" value="{$foo['id']}"> 
                            <button class="btn btn-warning btn-xs" type="submit" name="delete" value="delete" onclick="if (confirm(&quot;Are you sure you want to pause?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i> {$_DELETE}</button>
                        </form>
                    </td>
                                                            </tr>
                                               {/foreach}
                                                        </tbody>
                                                    </table>
                                                </div>
                                               {if !$templates}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">{$_NO_RECORDS_WERE_FOUND}</span>
                                               </div>
                                               {/if}
                               </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row" style="text-align: center"> 
                           {if $templates}
                             <ul class="pagination">
                                       {$paging} 
                             </ul>
                           {/if}
                        </div>
                        <!-- end pagination -->
                       </div>
                
{include file='../Layout/footer.tpl'}