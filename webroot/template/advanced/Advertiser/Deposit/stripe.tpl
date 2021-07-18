{include file='../Layout/header.tpl'}

                        <div class="row">
                        <div class="col-md-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-12">
                         
                                             <div style="display: flex; justify-content: flex-end"></div>
                                             <div class="text-center">
                                                 <h3><i class="fa fa-credit-card"></i> {$_PAY_WITH_CREDIT_CARD}</h3><hr>
                                             </div>
                        					<form class="form-horizontal" method="POST" id="payment-form">
                                              
                                                <input type="hidden" name="stripe" value="stripe"/>
                                                <input type="hidden" name="csrf" value="{$csrfToken}"/>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="first_name" class="form-control" placeholder="{$_FIRST_NAME}">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="last_name" class="form-control" placeholder="{$_LAST_NAME}"/>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <div id="card-element" class="form-control"></div>
	                                                    <!-- Used to display form errors. -->
	                                                    <div id="card-errors"></div>
	                                                    {if do_config(43) == 1}
	                                                       <br><div class="badge badge-danger">use this card number for test (4242424242424242)</div>
	                                                    {/if}
	                                                </div>
	                                            </div>

                                               <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-check-circle"></i> {$_SUBMIT}</button>
	                                        </form>


                                        </div><!-- end col -->
                                    </div><!-- end row -->
	                                    {include file='../Layout/back.tpl'}
                                                </div> <!-- end card -->
                                        
                            
                            </div>

                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        <!-- =========================
                             STRIPE CALLS
                        ============================== -->
                        {include file="$TMP/Ajax/stripe.js.tpl"}
    
{include file='../Layout/footer.tpl'}