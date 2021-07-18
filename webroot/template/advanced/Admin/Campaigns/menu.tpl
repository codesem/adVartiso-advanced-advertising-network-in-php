    <div class="tab">
    {if do_config(80) == 1}
      <a href="{$ADM}campaigns/image-banners"><button {if isset($imgbanners)} class="tablinks active"{/if}><i class="fa fa-image"></i> Image Banners <span class="badge badge-danger">{$nimgbanners}</span></button></a>
    {/if}
    {if do_config(81) == 1}
      <a href="{$ADM}campaigns/text-banners"><button {if isset($textbanners)} class="tablinks active"{/if}><i class="fa fa-file"></i> Text Banners <span class="badge badge-danger">{$ntxtbanners}</span></button></a>
    {/if}
    {if do_config(82) == 1}
      <a href="{$ADM}campaigns/popups"><button {if isset($popups)} class="tablinks active"{/if}><i class="fa fa-files-o"></i> Popups <span class="badge badge-danger">{$npopups}</span></button></a>
    {/if}
    {if do_config(83) == 1}
      <a href="{$ADM}campaigns/directs"><button {if isset($directs)} class="tablinks active"{/if}><i class="fa fa-link"></i> Directs <span class="badge badge-danger">{$ndirects}</span></button></a>
    {/if}
      <a href="#"><button><i class="fa fa-file-o"></i> Native</button></a>
      <a href="#"><button><i class="fa fa-times-circle"></i> Exit Intent</button></a>
    </div>
    <hr>