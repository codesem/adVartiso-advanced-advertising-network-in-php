 {include file='../Layout/header.tpl'}
 
                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
                                   {if $added}<div class="alert alert-success">Announcement Added Successfully</div>{/if}
                                   {if $updated}<div class="alert alert-success">Announcement Updated Successfully</div>{/if}
                                   {if $deactivated}<div class='alert alert-success'>Announcement Deactivated Successfully</div>{/if}
                                   {if $activated}<div class='alert alert-success'>Announcement Activated Successfully</div>{/if}
                                   {if $deleted}<div class="alert alert-success">Announcement Deleted Successfully</div>{/if}
                                   {if $do_error}<div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div>{/if}
                                   {include file='../Announcements/menu.tpl'}
                                     <div class="table-responsive">
                                                    <table class="table m-0">

                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-pencil"></i> Title</th>
                                                                <th><i class="fa fa-unsorted"></i> Status</th>
                                                                <th><i class="fa fa-calendar"></i> Date</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> Actions</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$announcements item=foo}
                                                            <tr>
                                                                <th scope="row">{$foo['id']}</th>
                                                                <td>{$foo['title']}</td>
                                                                <td>
                                               {if $foo['status'] == '1'}
                                                               <span class="badge badge-success">Active</span>
                                               {elseif $foo['status'] == '2'}
                                                               <span class="badge badge-danger">Inactive</span>
                                               {/if}</td>
                                                                <td>{$foo['created']}</td>
                                                                
                                                                                                                                <td>
                {if $foo['status']=='1'}
                    <form method="POST">
                      <input type="hidden" name="id" value="{$foo['id']}"> 
                      <button class="btn btn-danger btn-xs" type="submit" name="deactivate" value="deactivate" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">Deactivate</button>
                    </form>
               {elseif $foo['status']=='2'}
                   <form method="POST">
                     <input type="hidden" name="id" value="{$foo['id']}"> 
                     <button class="btn btn-success btn-xs" type="submit" name="activate" value="activate">Activate</button>
                   </form>
              {/if}
                    </td>
                   <td>
                     <form method="POST">
                      <input type="hidden" name="id" value="{$foo['id']}"> 
                      <button class="btn btn-warning btn-xs" type="submit" name="delete" value="Delete" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">Delete</button>
                     </form> 
                    </td>
                  <td>
                   <form action="{$ADM}announcements/edit/{$foo['id']}/" method="POST">
                    <button class="btn btn-success btn-xs">Edit</button>
                   </form>
                  </td>
                    
                                                            </tr>
                                               {/foreach}
                                                        </tbody>
                                                    </table>
                                                </div>
                                               {if !$announcements}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No announcements was Found..</span>
                                               </div>
                                               {/if}
                               </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row" style="text-align: center"> 
                           {if $announcements}
                             <ul class="pagination">
                                       {$paging} 
                             </ul>
                           {/if}
                        </div>
                        <!-- end pagination -->
                       </div>
                
{include file='../Layout/footer.tpl'}