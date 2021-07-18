{include file='../Layout/header.tpl'}


                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                     {if $error}<div class="alert alert-danger">{$checkout_msg}</div>{/if}
                     {if $small}<div class="alert alert-{$_AMOUNT_D_SMALL}">{$__AMOUNT_D_SMALL}</div>{/if}
                     {if $required}<div class="alert alert-{$_REQUIRED}">{$__REQUIRED}</div>{/if}
                     {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}
     {include file='../Deposit/menu.tpl'}
                                        <div class="col-sm-12">
                                             <div style="display: flex; justify-content: flex-end"></div>
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-success">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_ACCOUNT_BALANCE} <small>({$_TOTAL})</small></p>
                                                      <h2><i class="fa fa-money"></i> <span>{do_config(3)}</span><span data-plugin="counterup">{$ad_balance}</span></h2>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                <div class="card-box widget-box-two widget-two-primary">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_SPENDING} <small>({$_TOTAL})</small></p>
                                                     <h2><i class="fa fa-dollar"></i> <span data-plugin="counterup">{$spending}</span></h2>
                                                      </div>
                                                     </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                               <div class="card-box widget-box-two widget-two-danger">
                                                 <div class="wigdet-two-content">
                                                  <p class="m-0 text-uppercase font-600 font-secondary text-overflow">{$_INVOICES} <small >({$_TOTAL})</small></p>
                                                  <h2><i class="fa fa-bank"></i> <span data-plugin="counterup">{$invoices}</span></h2>
                                                  </div>
                                                 </div>
                                                </div>

                                        </div><!-- end col -->


                        					<form class="form-horizontal" method="POST">
                                              
                                                <input type="hidden" name="deposit" value="deposit"/>
                                                <input type="hidden" name="csrf" value="{$csrfToken}"/>
	                                            <div class="form-group">
                                                    <label for="Amount" class="col-sm-8">
                                                        {$_AMOUNT} *
                                                    </label>
	                                                <div class="col-md-8">
	                                                    <input type="text" name="amount" class="form-control" value="{do_amount(do_config(2),false)}" required="required">
	                                                </div>
	                                            </div>
                                               <button type="submit" class="btn btn-black btn-bordered waves-effect w-md m-b-5"><i class="fa fa-dollar"></i> {$_DEPOSIT}</button>
	                                        </form>

                                </div> <!-- end card -->
                              
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                        
{include file='../Layout/footer.tpl'}