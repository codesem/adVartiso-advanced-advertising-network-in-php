{include file='../Layout/header.tpl'}

                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
     {if $updated}<div class="alert alert-success">Website Updated Successfully</div>{/if}
     {if $added}<div class="alert alert-success">Website Added Successfully</div>{/if}
     {if $deactivated}<div class='alert alert-success'>Website Deactivated Successfully</div>{/if}
     {if $activated}<div class='alert alert-success'>Website Activated Successfully</div>{/if}
     {if $deleted}<div class="alert alert-success">Website Deleted Successfully</div>{/if}
     {if $do_error}<div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div>{/if}
     {include file='../Websites/menu.tpl'}
     <form class="form-vertical" method="GET">
           <div class="form-group">
             <div class="col-sm-3">
             <select name="search" class="form-control">
               <option value="user_id" {if $search == "user_id"}selected{/if}>User ID</option>
               <option value="status" {if $search == "status"}selected{/if}>Status (1=active, 2=pending, 3=banned)</option>
               <option value="url" {if $search == "url"}selected{/if}>Url</option>
             </select>
             </div>
           </div>
	       <div class="form-group">
	         <div class="col-md-3">
	          <input type="text" name="data" class="form-control" placeholder="Search..." value="{$data}">
	         </div>
	       </div>
           <button type="submit" class="btn btn-primary waves-effect w-md m-b-5"><i class="fa fa-search"></i> Search</button>
	       </form>
	                                 <hr>
                                     <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-user"></i> User</th>
                                                                <th><i class="fa fa-link"></i> Url</th>
                                                                <th><i class="fa fa-amazon"></i> Alexa Rank</th>
                                                                <th><i class="fa fa-sitemap"></i> Category</th>
                                                                <th><i class="fa fa-unsorted"></i> Status</th>
                                                                <th><i class="fa fa-calendar"></i> Date</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> Actions</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$websites item=foo}
                                                            <tr>
                                                                <th scope="row">{$foo['id']}</th>
                                                                <td>
                                                                    <a href="{$ADM}users/view/{$foo['user_id']}/" class="badge badge-info">
                                                                        <i class="fa fa-user"></i>
                                                                    </a>
                                                                </td>                                                                
                                                                <td><span class="badge badge-danger">{$foo['url']}</span></td>
                                                                <td><a href="{$foo['rank']}" class="badge badge-info" target="_blank" onclick="return !window.open(this.href, 'Alexa Rank', 'width=860,height=400')"><i class="fa fa-amazon"></i> Rank</a></td>
                                                                <td>{$foo['category']}</td>
                                                                <td>
                                               {if $foo['status'] == '1'}
                                                               <span class="badge badge-success">Active</span>
                                               {elseif $foo['status'] == '2'}
                                                               <span class="badge badge-info">Pending</span>
                                               {elseif $foo['status'] == '3'}
                                                               <span class="badge badge-danger">Banned</span>
                                               {elseif $foo['status'] == '4'}
                                                               <span class="badge badge-danger">Rejected</span>
                                               {/if}</td>
                                                                <td>{$foo['created']}</td>
                                                                <td>
                {if $foo['status']== '1'}
                    <form method="POST">
                      <input type="hidden" name="id" value="{$foo['id']}"> 
                      <button class="btn btn-danger btn-xs" type="submit" name="deactivate" value="deactivate" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">Deactivate</button>
                    </form>
               {elseif $foo['status']== '3'}
                   <form method="POST">
                     <input type="hidden" name="id" value="{$foo['id']}"> 
                     <button class="btn btn-success btn-xs" type="submit" name="activate" value="activate">Activate</button>
                   </form>
               {elseif $foo['status']== '2'}
                   <form method="POST">
                     <input type="hidden" name="id" value="{$foo['id']}"> 
                     <button class="btn btn-success btn-xs" type="submit" name="activate" value="activate">Approve</button>
                   </form>
                   <form method="POST">
                     <input type="hidden" name="id" value="{$foo['id']}"> 
                     <button class="btn btn-danger btn-xs" type="submit" name="reject" value="reject" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">Reject</button>
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
                                               {if !$websites}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No websites was Found..</span>
                                               </div>
                                               {/if}
                               </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row" style="text-align: center"> 
                           {if $websites}
                             <ul class="pagination">
                                       {$paging} 
                             </ul>
                           {/if}
                        </div>
                        <!-- end pagination -->
                       </div>
                
{include file='../Layout/footer.tpl'}