    <div class="tab">
      <a href="{$ADV}campaigns/index"><button {if isset($active_campaigns)} class="tablinks active"{/if}><i class="fa fa-database"></i> Campaigns</button></a>
    {if do_config(80) == 1}
      <a href="{$ADV}campaigns/image-banners"><button {if isset($imgbanners)} class="tablinks active"{/if}><i class="fa fa-image"></i> {$_IMAGE_BANNER}</button></a>
    {/if}
    {if do_config(81) == 1}
      <a href="{$ADV}campaigns/text-banners"><button {if isset($textbanners)} class="tablinks active"{/if}><i class="fa fa-file"></i> {$_TEXT_BANNER}</button></a>
    {/if}
    {if do_config(82) == 1}
      <a href="{$ADV}campaigns/popups"><button {if isset($popups)} class="tablinks active"{/if}><i class="fa fa-files-o"></i> {$_POPUP}</button></a>
    {/if}
    {if do_config(83) == 1}
      <a href="{$ADV}campaigns/directs"><button {if isset($directs)} class="tablinks active"{/if}><i class="fa fa-link"></i> {$_DIRECT}</button></a>
    {/if}
    </div>
    <hr>