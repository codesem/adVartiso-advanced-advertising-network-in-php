{include file='../Layout/header.tpl'}


                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                                    {if $required}<div class="alert alert-danger">Error: All Fields Are Required!</div>{/if}
                                    {if $do_error}<div class="alert alert-danger">Error: Somthing Wrong! Please Try Again.</div>{/if}
                                    {if $do_demo}<div class="alert alert-danger">Error: You can't do this action on demo mode.</div>{/if}
                        					<form class="form-horizontal" method="POST">
                                              
                                                <input type="hidden" name="up-user" value="up-user"/>
                                                <input type="hidden" name="csrf" value="{$csrfToken}"/>
                                                <div class="form-group">
                                                   <label for="Role" class="col-sm-10">
                                                     Role
                                                   </label>
                                                   <div class="col-sm-10">
                                                     <select name="role" class="form-control">
                                                        <option value="admin" {if $r_role == 'admin'} selected="selected"{/if}>Admin</option>
                                                        <option value="publisher" {if $r_role == 'publisher'} selected="selected"{/if} >Publisher</option>
                                                        <option value="advertiser" {if $r_role == 'advertiser'} selected="selected"{/if} >Advertiser</option>
                                                     </select>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Status" class="col-sm-10">
                                                         Status
                                                    </label>
                                                    <div class="col-sm-10">
                                                    <select name="status" class="form-control">
                                                     <option value="1" {if $r_status == '1'} selected="selected"{/if} >Active</option>
                                                     <option value="2"{if $r_status == '2'} selected="selected"{/if}>Inactive</option>
                                                    </select>
                                                    </div>
                                                </div>
	                                            <div class="form-group">
                                                    <label for="Username" class="col-sm-10">
                                                        Username *
                                                    </label>
	                                                <div class="col-md-10">
                                                     <input name="username" class="form-control" type="text" value="{$r_username}"/>	                                           
                                                    </div>
	                                            </div>
	                                            <div class="form-group">
                                                    <label for="Email" class="col-sm-10">
                                                        Email *
                                                    </label>
	                                                <div class="col-md-10">
                                                      <input name="email" class="form-control" type="email" value="{$r_email}"/>
	                                                </div>
	                                            </div>
                        {if $r_role == 'publisher'} 
	                                            <div class="form-group">
                                                    <label for="Balance" class="col-sm-10">
                                                        Pub Balance
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="pub_earnings" class="form-control" value="{$r_pub_earnings}">
	                                                </div>
	                                            </div>
                        {elseif $r_role == 'advertiser'}
	                                            <div class="form-group">
                                                    <label for="Balance" class="col-sm-10">
                                                        Adv Balance
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="ad_balance" class="form-control" value="{$r_ad_balance}">
	                                                </div>
	                                            </div>
                        {else}
	                                            <div class="form-group">
                                                    <label for="Balance" class="col-sm-10">
                                                        Adv Balance
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="ad_balance" class="form-control" value="{$r_ad_balance}">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
                                                    <label for="Balance" class="col-sm-10">
                                                        Pub Balance
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="pub_earnings" class="form-control" value="{$r_pub_earnings}">
	                                                </div>
	                                            </div>
                        {/if}

                                              <button type="submit" class="btn btn-black waves-effect w-md m-b-5" {if !$prmcode} data-toggle="tooltip" data-placement="top" title="" data-original-title="Go Premium To Unlock This Feature" {/if}>
                                                   <i class="fa fa-check-circle"></i> Save
                                              </button>
	                                        </form>
	                                        {include file='../Layout/back.tpl'}

                                </div> <!-- end card -->
                              
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->

{include file='../Layout/footer.tpl'}