{include file='../Layout/header.tpl'}

                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
     {include file='../Withdraw/menu.tpl'}
                                     <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-refresh"></i> {$_ACCOUNT}</th>
                                                                <th><i class="fa fa-bank"></i> {$_METHOD}</th>
                                                                <th><i class="fa fa-money"></i> {$_AMOUNT}</th>
                                                                <th><i class="fa fa-dollar"></i> {$_FEE}</th>
                                                                <th><i class="fa fa-unsorted"></i> {$_STATUS}</th>
                                                                <th><i class="fa fa-calendar"></i> {$_DATE}</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$withdraws item=foo}
                                                            <tr>
                                                                <th scope="row">{$foo['id']}</th>
                                                                <td><span class="badge badge-danger">{$foo['account']}</span></td>
                                                                <td>{$foo['method']}</td>
                                                                <td>{do_amount($foo['amount'])}</td>
                                                                <td>{do_amount($foo['fee'])}</td>
                                                                <td>
                                               {if $foo['status'] == '1'}
                                                               <span class="badge badge-success">{$_APPROVED}</span>
                                               {elseif $foo['status'] == '2'}
                                                               <span class="badge badge-info">{$_PENDING}</span>
                                               {elseif $foo['status'] == '3'}
                                                               <span class="badge badge-success">{$_COMPLETED}</span>
                                               {elseif $foo['status'] == '4'}
                                                               <span class="badge badge-danger">{$_REJECTED}</span>
                                               {/if}</td>
                                                                <td>{$foo['created']}</td>
                                                            </tr>
                                               {/foreach}
                                                        </tbody>
                                                    </table>
                                                </div>
                                               {if !$withdraws}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">{$_NO_RECORDS_WERE_FOUND}</span>
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