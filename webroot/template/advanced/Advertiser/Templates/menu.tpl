    <div class="tab">
      <a href="{$ADV}templates/index"><button {if isset($templates)} class="tablinks active"{/if}><i class="fa fa-paint-brush"></i> {$_TEMPLATES}</button></a>
      <a href="{$ADV}templates/add"><button {if !isset($templates)} class="tablinks active"{/if}><i class="fa fa-plus-circle"></i> {$_ADD}</button></a>
    </div>
    <hr>