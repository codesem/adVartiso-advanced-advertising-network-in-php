    <div class="tab">
      <a href="{$ADM}options/index"><button {if isset($options)} class="tablinks active"{/if}><div class="fa fa-cog"></div> Options</button></a>
      <a href="{$ADM}options/ads"><button {if isset($options)} class="tablinks active"{/if}><div class="fa fa-code"></div> ADS Configuration</button></a>
      <a href="{$ADM}options/email"><button {if isset($emails)} class="tablinks active"{/if}><div class="fa fa-envelope"></div> Email</button></a>
      <a href="{$ADM}options/payment"><button {if isset($payments)} class="tablinks active"{/if}><div class="fa fa-bank"></div> Payment Methods</button></a>
      <a href="{$ADM}options/withdrawal"><button {if isset($withdrawal)} class="tablinks active"{/if}><div class="fa fa-dollar"></div> Withdrawal Methods</button></a>
      <a href="{$ADM}options/themes"><button {if isset($themes)} class="tablinks active"{/if}><div class="fa fa-paint-brush"></div> Themes</button></a>
    </div>
    <hr>