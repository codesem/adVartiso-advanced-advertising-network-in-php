    <div class="tab">
      <a href="{$ADM}websites/index"><button {if isset($websites)} class="tablinks active"{/if}><i class="fa fa-link"></i> Websites</button></a>
      <a href="{$ADM}websites/categories"><button {if isset($categories) && !isset($websites)} class="tablinks active"{/if}><i class="fa fa-sitemap"></i> Categories</button></a>
      <a href="{$ADM}websites/addcat"><button {if !isset($categories) && !isset($websites)} class="tablinks active"{/if}><i class="fa fa-plus-circle"></i> Add Category</button></a>
    </div>
    <hr>