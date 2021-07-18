{include file='../Layout/header.tpl'}

                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                                     <div id="modal-prev" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                         <div class="modal-dialog" style="width:70%; max-width: none;">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <h4 class="modal-title mt-0">{$_BANNER_AD_PREVIEW} #{$id}</h4>
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">×</span>
                                                     </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="text-center">
                                                            <iframe src="{$ZN}preview/{$ad_type}/{$size}/" scrolling="no" style="{do_size($size,'iframe')} border:0px;padding:0px;overflow:hidden;" allowtransparency="true"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="{$PUB}zones/add" class="btn btn-black waves-effect"><i class="fa fa-plus-circle"></i> {$_CREATE_ZONE} </a>
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal"><i class="fa fa-times"></i> {$_CLOSE}</button>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                    <h3 class="text-center"><i class="fa fa-code"></i> {$_ZONE_CODE}</h3><br>
                                    <div class="text-center">
                                    {if $type == 'banner'}
                                        <textarea id="code" class="form-control text-center" rows="2" cols="10" disabled><iframe src="{$ZN}{$type}/{$id}/" scrolling="no" style="{do_size($size,'iframe')} border:0px; padding:0;overflow:hidden" allowtransparency="true"></iframe></textarea>
                                        <br><span class="badge badge-danger"><i class="fa fa-warning"></i> {$_PLACE_THIS_CODE_WEBSITE}</span>
                                    {elseif $type == 'popup'}
                                        <textarea id="code" class="form-control text-center" rows="2" cols="10" disabled><script type="text/javascript" src="{$ZN}{$type}/{$id}/"></script></textarea>
                                        <br><span class="badge badge-danger"><i class="fa fa-warning"></i> {$_PLACE_THIS_CODE_WEBSITE}</span>
                                    {elseif $type == 'direct'}
                                        <textarea id="code" class="form-control text-center" rows="2" cols="10" disabled>{$ZN}{$type}/{$id}/</textarea>
                                        <br><span class="badge badge-danger"><i class="fa fa-warning"></i> {$_DRIVE_TRAFFIC_TO_LINK}</span>
                                    {/if}
                                    </div><hr>
                                    <div class="text-center">
                                        <button type="button" onclick="copy('code')" class="btn btn-black waves-effect"><i class="fa fa-copy"></i> {$_COPY}</button>
                                    {if $type == 'banner'}
                                        <button class="btn btn-success waves-effect" data-toggle="modal" data-target="#modal-prev"><i class="fa fa-image"></i> {$_PREVIEW}</button>
                                    {/if}
                                        <a href="{$PUB}zones/index" class="btn btn-info waves-effect"><i class="fa fa-code"></i> {$_ZONES}</a>
                                    </div>
	                                {include file='../Layout/back.tpl'}
                                </div> <!-- end card -->
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->

{include file='../Layout/footer.tpl'}