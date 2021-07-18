{include file='../Layout/header.tpl'}

                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
                            {if $required}<div class="alert alert-{$_REQUIRED}">{$__REQUIRED}</div>{/if}
                            {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}
     {include file='../Zones/menu.tpl'}
     <form class="form-vertical" method="GET">
           <div class="form-group">
             <div class="col-sm-3">
             <select name="search" class="form-control">
               <option value="site_id" {if $search == "site_id"}selected{/if}>Site ID</option>
               <option value="status" {if $search == "status"}selected{/if}>Status(1=Active - 2=Inactive)</option>
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
                                   {foreach from=$zones item=foo}
                                     <div id="modal-{$foo['id']}" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                         <div class="modal-dialog">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <h4 class="modal-title mt-0">{$_ZONE} #{$foo['id']}</h4>
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">×</span>
                                                     </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
	                                            <div class="form-group">
	                                                <div class="col-md-12">
	                                            {if {$foo['type']} == 'banner'}
	                                                  <textarea id="code" type="text" rows="3" cols="10" class="form-control text-center" disabled="disabled"><iframe src="{$ZN}{$foo['type']}/{$foo['id']}/" scrolling="no" style="{do_size($foo['size'],'iframe')} border:0px; padding:0px;overflow:hidden" allowtransparency="true"></iframe></textarea>
	                                            {elseif {$foo['type']} == 'popup'}
	                                                  <textarea id="code" type="text" rows="3" cols="10" class="form-control text-center" disabled="disabled"><script type="text/javascript" src="{$ZN}{$foo['type']}/{$foo['id']}/"></script></textarea>
	                                            {elseif {$foo['type']} == 'direct'}
	                                                  <textarea id="code" type="text" rows="3" cols="10" class="form-control text-center" disabled="disabled">{$ZN}{$foo['type']}/{$foo['id']}/</textarea>
	                                            {/if}
	                                                </div>
	                                            </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" onclick="copy('code')" class="btn btn-black waves-effect"><i class="fa fa-copy"></i> {$_COPY}</button>
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal"><i class="fa fa-times"></i> {$_CLOSE}</button>
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
                                                                <th><i class="fa fa-link"></i> {$_URL}</th>
                                                                <th><i class="fa fa-bars"></i> {$_TYPE}</th>
                                                                <th><i class="fa fa-code"></i> {$_SIZE}</th>
                                                                <th><i class="fa fa-money"></i> {$_EARNED}</th>
                                                                <th><i class="fa fa-eye"></i> {$_VIEWS}</th>
                                                                <th><i class="fa fa-bar-chart"></i> {$_CLICKS}</th>
                                                                <th><i class="fa fa-unsorted"></i> {$_STATUS}</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> {$_ACTIONS}</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$zones item=foo}
                                                            <tr>
                                                                <th scope="row">{$foo['id']}</th>
                                                                <td><span class="badge badge-danger">{$foo['site']}</span></td>
                                                                <td>
                                               {if $foo['ad_type'] == 'img_banner'}
                                                               <span class="badge badge-info">{$_IMAGE_BANNER}</span>
                                               {elseif $foo['ad_type'] == 'text_banner'}
                                                               <span class="badge badge-info">{$_TEXT_BANNER}</span>
                                               {elseif $foo['ad_type'] == 'popup'}
                                                               <span class="badge badge-info">{$_POPUP}</span>
                                               {elseif $foo['ad_type'] == 'direct'}
                                                               <span class="badge badge-info">{$_DIRECT}</span>
                                               {/if}</td>
                                                                <td>{$foo['size']}</td>
                                                                <td>{$foo['balance']}</td>
                                                                <td>{$foo['views']}</td>
                                                                <td>{$foo['clicks']}</td>
                                                                <td>
                                               {if $foo['status'] == '1'}
                                                               <span class="badge badge-success">{$_ACTIVE}</span>
                                               {elseif $foo['status'] == '2'}
                                                               <span class="badge badge-danger">{$_INACTIVE}</span>
                                               {/if}</td>
                                                                <td>
                                                                    <a href="" class="btn btn-black btn-xs" data-toggle="modal" data-target="#modal-{$foo['id']}">
                                                                        <i class="fa fa-code"></i>
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
                                               {if !$zones}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">{$_NO_RECORDS_WERE_FOUND}</span>
                                               </div>
                                               {/if}
                               </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row" style="text-align: center"> 
                           {if $zones}
                             <ul class="pagination">
                                       {$paging} 
                             </ul>
                           {/if}
                        </div>
                        <!-- end pagination -->
                       </div>
                
{include file='../Layout/footer.tpl'}