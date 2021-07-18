{include file='../Layout/header.tpl'}

                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
     {if $updated}<div class="alert alert-success">Withdraw Approved Successfully</div>{/if}
     {if $added}<div class="alert alert-success">Withdraw Completed Successfully</div>{/if}
     {if $deactivated}<div class='alert alert-success'>Withdraw Rejected Successfully</div>{/if}
     {if $deleted}<div class="alert alert-success">Withdraw Deleted Successfully</div>{/if}
     {if $do_error}<div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div>{/if}
     {include file='../Invoices/menu.tpl'}
     <form class="form-vertical" method="GET">
           <div class="form-group">
             <div class="col-sm-3">
             <select name="search" class="form-control">
               <option value="user_id" {if $search == "user_id"}selected{/if}>User ID</option>
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
                                                                <th><i class="fa fa-money"></i> Amount</th>
                                                                <th><i class="fa fa-times"></i> Fee</th>
                                                                <th><i class="fa fa-dollar"></i> ACCOUNT</th>
                                                                <th><i class="fa fa-bank"></i> Method</th>
                                                                <th><i class="fa fa-unsorted"></i> Status</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$withdraws item=foo}
                                                            <tr>
                                                                <th scope="row">{$foo['id']}</th>
                                                                <td>
                                                                    <a href="{$ADM}users/view/{$foo['user_id']}/" class="badge badge-info">
                                                                        <i class="fa fa-user"></i>
                                                                    </a>
                                                                </td>
                                                                <td>{do_amount($foo['amount'])}</td>
                                                                <td>{do_amount($foo['fee'])}</td>
                                                                <td><span class="badge badge-danger">{$foo['account']}</span></td>
                                                                <td>{$foo['method']}</td>
                                                                <td>
                                               {if $foo['status'] == '1'}
                                                               <span class="badge badge-info">Approved</span>
                                               {elseif $foo['status'] == '2'}
                                                               <span class="badge badge-warning">Pending</span>
                                               {elseif $foo['status'] == '3'}
                                                               <span class="badge badge-success">Completed</span>
                                               {elseif $foo['status'] == '4'}
                                                               <span class="badge badge-danger">Rejected</span>
                                               {/if}</td>
                                                                <td>
                {if $foo['status']== '1'}
                    <form method="POST">
                      <input type="hidden" name="id" value="{$foo['id']}"> 
                      <button class="btn btn-success btn-xs" type="submit" name="complete" value="complete">Complete</button>
                    </form>
               {elseif $foo['status']== '2'}
                       <form method="POST">
                           <input type="hidden" name="id" value="{$foo['id']}"> 
                           <button class="btn btn-info btn-xs" type="submit" name="activate" value="activate"
                           {if !$prmcode} data-toggle="tooltip" data-placement="top" title="" data-original-title="Go Premium To Unlock This Feature" {/if}>
                               Approve
                           </button>
                       </form>
               {elseif $foo['status']== '3'}
                     <button class="btn btn-info btn-xs" disabled="disabled">Sent</button>
              {/if}
                    </td>
              {if $foo['status']== '2'}
                   <td>
                       <form method="POST">
                           <input type="hidden" name="id" value="{$foo['id']}"> 
                           <button class="btn btn-danger btn-xs" type="submit" name="reject" value="reject">Reject</button>
                       </form>
                    </td>
              {/if}
                                                            </tr>
                                               {/foreach}
                                                        </tbody>
                                                    </table>
                                                </div>
                                               {if !$withdraws}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No withdraws was Found..</span>
                                               </div>
                                               {/if}
                               </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row" style="text-align: center"> 
                           {if $withdraws}
                             <ul class="pagination">
                                       {$paging} 
                             </ul>
                           {/if}
                        </div>
                        <!-- end pagination -->
                       </div>
                
{include file='../Layout/footer.tpl'}