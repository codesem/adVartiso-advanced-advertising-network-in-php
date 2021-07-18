    <div class="tab">
      <a href="{$PUB}zones/index"><button {if isset($zones)} class="tablinks active"{/if}><i class="fa fa-code"></i> {$_ZONES}</button></a>
      <a href="{$PUB}zones/add"><button {if !isset($zones)} class="tablinks active"{/if}><i class="fa fa-plus-circle"></i> {$_CREATE_ZONE}</button></a>
    </div>
    <hr>