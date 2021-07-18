{include file='../Layout/header.tpl'}

                        <div class="row">
                        <div class="col-md-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-12">
                         
                                             <div style="display: flex; justify-content: flex-end"></div>
                                             <div class="text-center">
                                                 <h3><i class="fa fa-money"></i> {$_CHOOSE_PAYMENT_METHOD}</h3><hr>
                                             </div>
                                             <div class="hover01">
                                        {foreach from=$dmethods item=foo}
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-success" data-toggle="tooltip" data-placement="top" title="{$foo['name']}">
                                                   <div class="wigdet-two-content">
                                                       <a href="{$ADV}checkout/{$invoice_id}/{$foo['methods']}/">
                                                           <img class="text-center" src="{$UPD}images/{$foo['methods']}.svg" height="130"/>
                                                       </a>
                                                    </div>
                                                  </div>
                                                </div>
                                        {/foreach}
                                             </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
	                                    {include file='../Layout/back.tpl'}
                                                </div> <!-- end card -->
                                        
                            
                            </div>

                            <!-- end col -->
                        </div>
                        <!-- end row -->

{include file='../Layout/footer.tpl'}