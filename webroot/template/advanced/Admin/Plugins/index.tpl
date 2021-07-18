{include file='../Layout/header.tpl'}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    {if $required}<div class="alert alert-danger">Error: All Fields Are Required!</div>{/if}
                                    {if $do_error}<div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div>{/if}
                                    <form id="upload_form" class="form-horizontal" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="plugin" value="plugin"/>
                                        <input type="hidden" name="csrf" value="{$csrfToken}"/>
                                        <div class="form-group text-center">
                                            <p class="badge badge-success">
                                                <i class="fa fa-search"></i> 
                                                You can check some amazing plugins <a href="https://codsem.com/category/plugins" class="blue-color" target="_blank">here</a>
                                            </p>
                                            <div class="empty-h"></div>
                                            <div class="col-md-12">
                                                <label for="Icon" >ZIP FILE (PLUGIN)</label>
                                                    <div id="upload-files" class="upload-file">
                                                        <label for="file-input">
                                                            <i class="fa fa-cloud-upload up-icon"></i>
                                                        </label>
                                                        <input id="file-input" type="file" name="plugin-file" onchange="uploadPlugin()"/>
                                                    </div>
                                                    <div id="progress" class="progress" style="display: none;">
                                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                                        aria-valuemin="0" aria-valuemax="100" style="width:0%">0%
                                                        </div>
                                                    </div>
                                                    <div id="response" class=""></div>
                                            </div>
	                                    </div>
                                    </form><hr>
                                     <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-plug"></i> Name</th>
                                                                <th><i class="fa fa-refresh"></i> Version</th>
                                                                <th><i class="fa fa-user"></i> Author</th>
                                                                <th><i class="fa fa-calendar"></i> Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           {foreach from=$plugins item=foo}
                                                            <tr>
                                                                <th scope="row">{$foo['id']}</th>
                                                                <td>{$foo['name']}</td>
                                                                <td>{$foo['version']}</td>
                                                                <td>{$foo['author']}</td>
                                                                <td>{$foo['created']}</td>
                                                            </tr>
                                               {/foreach}
                                                        </tbody>
                                                    </table>
                                                </div>
                                               {if !$plugins}
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No plugins was Found..</span>
                                               </div>
                                               {/if}
	                           </div> <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="row" style="text-align: center"> 
                           {if $plugins}
                             <ul class="pagination">
                                       {$paging} 
                             </ul>
                           {/if}
                        </div>
                        <!-- end pagination -->

{include file='../Layout/footer.tpl'}