{include file='../Layout/header.tpl'}


                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                     {if $scheduled}<div class="alert alert-{$_WITH_SCHEDULED}">{$__WITH_SCHEDULED}</div>{/if}
                     {if $minimum}<div class="alert alert-{$_SMALL_BALANCE}">{$__SMALL_BALANCE}</div>{/if}
                     {if $required}<div class="alert alert-{$_REQUIRED}">{$__REQUIRED}</div>{/if}
                     {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}
                     
     {include file='../Withdraw/menu.tpl'}
                                        <div class="col-sm-12">
                                             <div style="display: flex; justify-content: flex-end"></div>
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-success">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_ACCOUNT_BALANCE} <small>({$_TOTAL})</small></p>
                                                      <h2><i class="fa fa-money"></i> <span>{do_config(3)}</span><span data-plugin="counterup">{$pub_balance}</span></h2>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                <div class="card-box widget-box-two widget-two-primary">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_PENDING} <small>({$_TOTAL})</small></p>
                                                     <h2><i class="fa fa-history"></i> <span>{do_config(3)}</span><span data-plugin="counterup">{$pending}</span></h2>
                                                      </div>
                                                     </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                               <div class="card-box widget-box-two widget-two-danger">
                                                 <div class="wigdet-two-content">
                                                  <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_WITHDRAWN} <small >({$_TOTAL})</small></p>
                                                  <h2><i class="fa fa-check-circle"></i> <span>{do_config(3)}</span><span data-plugin="counterup">{$withdrawn}</span></h2>
                                                  </div>
                                                 </div>
                                                </div>

                                        </div><!-- end col -->

                        					<form class="form-horizontal" method="POST">
                                              
                                                <input type="hidden" name="withdraw" value="withdraw"/>
                                                <input type="hidden" name="csrf" value="{$csrfToken}"/>
                                                <div class="form-group">
                                                    <label for="Country" class="col-sm-10">
                                                        {$_METHOD} *
                                                    </label>
                                                    <div class="col-sm-10">
                                                     <select name="method_id" class="form-control">
                    {foreach from=$withdraw_methods item=foo}
                                                      <option value="{$foo['id']}">{$foo['name']} ({$_MIN}: {do_amount($foo['minimum'])})</option>
                    {/foreach}
                                                     </select>
                                                    </div>
                                                 </div>
	                                            <div class="form-group">
                                                    <label for="WITHDRAWACCOUNT" class="col-sm-10">
                                                        {$_WITHDRAW_ACCOUNT} *
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="account" class="form-control" placeholder="{$_WITHDRAW_ACCOUNT}">
	                                                </div>
	                                            </div>
                                               <button type="submit" class="btn btn-black btn-bordered waves-effect w-md m-b-5"><i class="fa fa-dollar"></i> {$_WITHDRAWAL}</button>
	                                        </form>

                                </div> <!-- end card -->
                              
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                        
{include file='../Layout/footer.tpl'}