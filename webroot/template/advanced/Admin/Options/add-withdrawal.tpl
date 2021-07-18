{include file="../Layout/header.tpl"}

                        <div class="row">
                            <div class="col-md-12">
                               <div class="card-box">
                                   {if $do_error}<div class='alert alert-danger'>Error: Somthing wrong! Please Try again.</div>{/if}
                                   {if $required}<div class='alert alert-danger'>Error: Somthing wrong! Please Try again.</div>{/if}
                                   {if $do_demo}<div class="alert alert-danger">Error: You can't do this action on demo mode.</div>{/if}
                                   {include file='../Options/main.tpl'}
                                   
                        					<form class="form-horizontal" method="POST">
                                              
                                                <input type="hidden" name="add-withdrawal" value="add-withdrawal"/>
                                                <input type="hidden" name="csrf" value="{$csrfToken}"/>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="name" class="form-control" placeholder="Name">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="minimum" class="form-control" placeholder="Minimum">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="fee" class="form-control" placeholder="Fee">
	                                                </div>
	                                            </div>

                                             <button type="submit" class="btn btn-black waves-effect w-md m-b-5"
                                             {if !$prmcode} data-toggle="tooltip" data-placement="top" title="" data-original-title="Go Premium To Unlock This Feature" {/if}>
                                                   <i class="fa fa-plus-circle"></i> New Withdrawal
                                             </button>
	                                        </form>
	                                        {include file='../Layout/back.tpl'}

                                 </div>
                            </div>
                        </div>
{include file="../Layout/footer.tpl"}