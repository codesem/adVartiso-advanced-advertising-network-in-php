{include file='../Layout/header.tpl'}

                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
     {if $added}<div class="alert alert-{$_WEB_ADDED}">{$__WEB_ADDED}</div>{/if}
     {if $deleted}<div class="alert alert-{$_WEB_DELETED}">{$__WEB_DELETED}</div>{/if}
     {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}  
     {include file='../Websites/menu.tpl'}
     <form class="form-vertical" method="GET">
           <div class="form-group">
             <div class="col-sm-3">
             <select name="search" class="form-control">
               <option value="url" {if $search == "url"}selected{/if}>Url</option>
               <option value="status" {if $search == "status"}selected{/if}>Status(1=Active - 2=Pending - 3=Banned)</option>
             </select>
             </div>
           </div>
	       <div class="form-group">
	         <div class="col-md-3">
	          <input type="text" name="data" class="form-control" placeholder="{$_SEARCH}" value="{$data}">
	         </div>
	       </div>
           <button type="submit" class="btn btn-primary waves-effect w-md m-b-5"><i class="fa fa-search"></i> {$_SEARCH}</button>
	       </form>
	                                 <hr>
                                     <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-link"></i> {$_URL}</th>
                                                                <th><i class="fa fa-sitemap"></i> {$_CATEGORY}</th>
                                                                <th><i class="fa fa-unsorted"></i> {$_STATUS}</th>
                                                                <th><i class="fa fa-calendar"></i> {$_DATE}</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> {$_ACTIONS}</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$websites item=foo}
                                                            <tr>
                                                                <th scope="row">{$foo['id']}</th>
                                                                <td><span class="badge badge-danger">{$foo['url']}</span></td>
                                                                <td>{$foo['category']}</td>
                                                                <td>
                                               {if $foo['status'] == '1'}
                                                               <span class="badge badge-success">{$_ACTIVE}</span>
                                               {elseif $foo['status'] == '2'}
                                                               <span class="badge badge-info">{$_PENDING}</span>
                                               {elseif $foo['status'] == '3'}
                                                               <span class="badge badge-danger">{$_BANNED}</span>
                                               {elseif $foo['status'] == '4'}
                                                               <span class="badge badge-danger">{$_REJECTED}</span>
                                               {/if}</td>
                                                                <td>{$foo['created']}</td>
                   <td>
                    {if $foo['status'] == '1' || $foo['status'] == '2'}
                     <form method="POST">
                      <input type="hidden" name="id" value="{$foo['id']}"> 
                      <button class="btn btn-warning btn-xs" type="submit" name="delete" value="Delete" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">{$_DELETE}</button>
                     </form> 
                    {elseif $foo['status'] == '3'}
                      <button class="btn btn-black btn-xs" disabled="disabled">{$_DELETE}</button>
                    {/if}
                    </td>
                                                            </tr>
                                               {/foreach}
                                                        </tbody>
                                                    </table>
                                                </div>
                                               {if !$websites}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">{$_NO_RECORDS_WERE_FOUND}</span>
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