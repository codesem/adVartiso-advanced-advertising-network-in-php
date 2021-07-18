{include file='../Layout/header.tpl'}

       <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          {foreach from=$announcements item=foo}
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading{$foo['id']}">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{$foo['id']}"
                           aria-expanded="true" aria-controls="collapse{$foo['id']}">
                            <i class="fa fa-bullhorn"></i> {$foo['title']} <span class="badge badge-success"><i class="fa fa-clock-o"></i> {$foo['created']}</span>
                        </a>
                    </h4>
                </div>
                <div id="collapse{$foo['id']}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{$foo['id']}">
                    <div class="panel-body">
                        {$foo['content']}
                    </div>
                </div>
           </div>
          {/foreach}
        </div>
        {if !$announcements}
          <div class="card-box">
              <div class="text-center">
                  <span class="badge badge-danger" style="margin-top: 30px;">{$_NO_RECORDS_WERE_FOUND}</span>
              </div>
          </div>
        {/if}
 {include file='../Layout/footer.tpl'}