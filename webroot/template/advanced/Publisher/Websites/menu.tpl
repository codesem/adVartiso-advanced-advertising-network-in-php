    <div class="tab">
      <a href="{$PUB}websites/index"><button {if isset($websites)} class="tablinks active"{/if}><i class="fa fa-link"></i> {$_WEBSITES}</button></a>
      <a href="{$PUB}websites/add"><button {if !isset($websites)} class="tablinks active"{/if}><i class="fa fa-plus-circle"></i> {$_ADD_SITE}</button></a>
    </div>
    <hr>