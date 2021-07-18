{include file='../Layout/header.tpl'}

                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                                    
                     {if $do_minimum}<div class="alert alert-{$_SMALL_BALANCE}">{$__SMALL_BALANCE}</div>{/if}
                     {if $do_less}<div class="alert alert-{$_LESS_THEN}">{$__LESS_THEN}</div>{/if}
                     {if $required}<div class="alert alert-{$_REQUIRED}">{$__REQUIRED}</div>{/if}
                     {if $do_error}<div class="alert alert-{$_SOME_WRONG}">{$__SOME_WRONG}</div>{/if}  
                     
                                   <div class="text-center">
                                       <span class="badge badge-danger">{$_DIRECTS_HAVE_ONLY_CPC_TYPE}</span>
                                   </div><hr>

                        					<form class="form-horizontal" method="POST">
                                                
                                                <input type="hidden" name="order-direct" value="order-direct"/>
                                                <input type="hidden" name="csrf" value="{$csrfToken}"/>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="title" class="form-control" placeholder="{$_TITLE}" required>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="url" name="url" class="form-control" placeholder="{$_URL}" required>
	                                                </div>
	                                            </div>
	                                            <div class="form-group row">
	                                                <div class="col-md-10">
                                                    <select name="country-type" onChange="grabeCountry(this.value);" class="form-control" required>
                                                        <option value="all" selected>{$_ALL_COUNTRIES}</option>
                                                        <option value="multiple">{$_MULTIPLE_COUNTRIES}</option>
                                                    </select><br>
                                                    <span id="countries-data"></span>
                                                </div>
                                                </div>
	                                            <div class="form-group row">
	                                                <div class="col-md-10">
                                                    <select name="browser-type" onChange="grabeBrowsers(this.value);" class="form-control" required>
                                                        <option value="all" selected>{$_ALL_BROWSERS}</option>
                                                        <option value="multiple">{$_MULTIPLE_BROWSERS}</option>
                                                    </select><br>
                                                    <span id="browsers-data"></span>
                                                </div>
                                                </div>
	                                            <div class="form-group row">
	                                                <div class="col-md-10">
                                                    <select name="platform-type" onChange="grabePlatforms(this.value);" class="form-control" required>
                                                        <option value="all" selected>{$_ALL_PLATFORMS}</option>
                                                        <option value="multiple">{$_MULTIPLE_PLATFORMS}</option>
                                                    </select><br>
                                                    <span id="platforms-data"></span>
                                                </div>
                                                </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="number" name="clicks" class="form-control" placeholder="Order Clicks" min="{do_config(37)}" step="10" value="{do_config(37)}"  id="order" onkeyup="priceData('direct','clicks')" onBlur="priceData('direct','clicks')" required>
	                                                    <span class="badge badge-danger">{$_CPC}: {do_amount(do_config(44))}</span>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <div>
	                                                        <input type="radio" name="device-type" value="ALL" checked=""> {$_ALL}
	                                                        <input type="radio" name="device-type" value="PC"> {$_PC}
	                                                        <input type="radio" name="device-type" value="MOBILE"> {$_MOBILE}
	                                                    </div>
	                                                </div>
	                                            </div><hr>
	                                            <div class="text-center">
                                                    <h6 style="display: inline-block;"><i class="fa fa-spinner" id="loader-price" style="display: none;"></i></h6>
	                                                <span class="badge badge-success" style="font-size: 15px;" id="price-data">{do_amount(0)}</span>
	                                            </div><hr>
                                                <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-shopping-cart"></i> {$_CREATE_CAMPAIGN}</button>
	                                        </form>
	                                        {include file='../Layout/back.tpl'}

                                </div> <!-- end card -->
                              
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->

{include file='../Layout/footer.tpl'}