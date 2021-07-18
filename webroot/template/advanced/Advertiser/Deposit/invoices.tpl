{include file='../Layout/header.tpl'}

                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
     {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}
     {include file='../Deposit/menu.tpl'}
     <form class="form-vertical" method="GET">
           <div class="form-group">
             <div class="col-sm-3">
             <select name="search" class="form-control">
               <option value="id" {if $search == "id"}selected{/if}>{$_INVOICE_ID}</option>
               <option value="status" {if $search == "status"}selected{/if}>{$_STATUS}(1={$_PAID} - 2={$_UNPAID})</option>
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
                                                                <th><i class="fa fa-dollar"></i> {$_AMOUNT}</th>
                                                                <th><i class="fa fa-bank"></i> {$_METHOD}</th>
                                                                <th><i class="fa fa-question-circle"></i> {$_RESPONSE}</th>
                                                                <th><i class="fa fa-unsorted"></i> {$_STATUS}</th>
                                                                <th><i class="fa fa-calendar"></i> {$_DATE}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$invoices item=foo}
                                                            <tr>
                                                                <th scope="row">{$foo['id']}</th>
                                                                <td>{$foo['amount']}</td>
                                                                <td>{$foo['method']}</td>
                                                                <td>{$foo['status_text']}</td>
                                                                <td>
                                               {if $foo['status'] == '1'}
                                                               <span class="badge badge-success">{$_PAID}</span>
                                               {elseif $foo['status'] == '2'}
                                                               <span class="badge badge-danger">{$_UNPAID}</span>
                                               {/if}</td>
                                                                <td>{$foo['created']}</td>
                                                            </tr>
                                               {/foreach}
                                                        </tbody>
                                                    </table>
                                                </div>
                                               {if !$invoices}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">{$_NO_RECORDS_WERE_FOUND}</span>
                                               </div>
                                               {/if}
                               </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row" style="text-align: center"> 
                           {if $invoices}
                             <ul class="pagination">
                                       {$paging} 
                             </ul>
                           {/if}
                        </div>
                        <!-- end pagination -->
                       </div>
                
{include file='../Layout/footer.tpl'}