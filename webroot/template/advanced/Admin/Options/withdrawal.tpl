{include file="../Layout/header.tpl"}

                        <div class="row">
                            <div class="col-md-12">
                               <div class="card-box">
                                   {if $deleted}<div class='alert alert-success'>Withdrawal Deleted Successfully!</div>{/if}
                                   {if $added}<div class='alert alert-success'>New Withdrawal Added Successfully!</div>{/if}
                                   {if $updated}<div class='alert alert-success'>Withdrawal Settings Updated Successfully!</div>{/if}
                                   {if $do_error}<div class='alert alert-danger'>Error: Somthing wrong! Please Try again.</div>{/if}
                                   {if $do_demo}<div class="alert alert-danger">Error: You can't do this action on demo mode.</div>{/if}
                                   {include file='../Options/main.tpl'}

                                   <form class="form-horizontal" method="POST">
                                       <input type="hidden" name="up-withdraws" value="up-withdraws"/>

                            {foreach from=$wmethods item=foo}
                                       <h4>{$foo['name']} Settings <a href="{$ADM}options/withdrawal?delete={$foo['id']}" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a></h4><hr>
                                       <div class="form-group">
                                           <div class="col-md-7">
                                               <label for="Status" class="col-md-7">Status</label>
                                               <select name="status_{$foo['methods']}" class="form-control">
                                                    <option value="1"{if $foo['status'] == 1} selected="selected"{/if}>Enable</option>
                                                    <option value="2"{if $foo['status'] == 2} selected="selected"{/if}>Disable</option>
                                                </select>
                                            </div>
                                       </div>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <label for="minimum" class="col-md-10">{$foo['name']} minimum withdrawal</label>
	                                           <input type="text" name="minimum_{$foo['methods']}" class="form-control" value="{$foo['minimum']}">
	                                       </div>
	                                   </div>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <label for="fee" class="col-md-10">{$foo['name']} fee</label>
	                                           <input type="text" name="fee_{$foo['methods']}" class="form-control" value="{$foo['fee']}">
	                                       </div>
	                                   </div>
                                       
                                     <hr>
                            {/foreach}
                                       <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-check-circle"></i>  Save</button>
                                       <a href="{$ADM}options/add-withdrawal" class="btn btn-primary waves-effect w-md m-b-5"><i class="fa fa-plus-circle"></i> Add Method</a>
	                               </form>


                                 </div>
                            </div>
                        </div>
{include file="../Layout/footer.tpl"}