{include file="../{$LANDING}/header.tpl"}
<style>
.img-fluid {
  height: 420px;
  width: 620px;
}
</style>
 <section class="hero hero--full hero--v12 d-flex align-items-center">
    <div class="background-holder background--cover z-index1">
        <img src="{$LND}img/hero-12.png" alt="image" class="background-image-holder">
    </div>
    <div class="background-holder bg-color--primary"></div>
    <div class="svg-shape w-100 z-index2">
        <img src="{$LND}img/wave-14.svg" alt="wave" class="svg">
    </div>
    <div class="container mb-10">
        <div class="row flex-column-reverse flex-lg-row align-items-center mb-10 mb-lg-5">
            <div class="col-12 col-md-10 col-lg-6 mx-auto mx-lg-0 text-center text-lg-left z-index3">
                <div class="hero-content reveal">
                    <h1 class="hero__title color--white h2-font font-w--700 mb-2">{$site_title}</h1>
                    <p class="hero__description color--white opacity--80 font-size--18 mb-4 mb-lg-5 pr-xl-5">{do_config(23)}</p>
                </div>
                <div class="form--v4 reveal">
                {if !$logged}  
                    <a href="{$HOST}auth/signup" class="btn btn-size--md btn-hover--splash btn-bg--cta--5"><span class="btn__text"> {$_CREATE_ACCOUNT}</span></a>
                {else} 
                   {if $role == 'publisher'} 
                        <a href="{$PUB}zones/add" class="btn btn-size--md btn-hover--splash btn-bg--cta--5"><span class="btn__text"> {$_CREATE_AD_ZONE}</span></a>
                   {elseif $role == 'advertiser'} 
                        <a href="{$ADV}purchase/index" class="btn btn-size--md btn-hover--splash btn-bg--cta--5"><span class="btn__text"> {$_CREATE_CAMPAIGN}</span></a>
                   {else}
                        <a href="{$ADM}dashboard" class="btn btn-size--md btn-hover--splash btn-bg--cta--5"><span class="btn__text"> {$_DASHBOARD}</span></a>
                   {/if}
                {/if}
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-6 mt-lg-0 mb-3 mb-lg-0 pl-lg-4  hero__image z-index3 reveal">
                <picture>
                    <img src="{$UPD}images/network-banner-small.svg" alt="network-banner" class="img-fluid">
                </picture>
            </div>
        </div>
    </div>
 </section>
 <section class="pt-5 pt-xl-0 z-index3 jsElement" data-pull="-200">
     <div class="container">
         <div class="bg-white box-shadow--5 rounded--10 text-center pt-6 pb-2 px-3 px-sm-5 px-md-3 pt-lg-8 pb-lg-3 px-lg-10">
             <div class="row justify-content-between border--bottom mb-5 pb-lg-1 text-lg-left">
                 <div class="col-12 col-md-6 col-xl-5 pb-5 reveal">
                     <span class="mb-2">
                         <img src="{$UPD}images/income.png" alt="exchange-icon" height="60" width="60">
                     </span>
                     <h3 class="h5-font font-w--500 mb-1">{$_HUGE_INCOME}</h3>
                     <p>{$__HUGE_INCOME}</p>
                 </div>
                 <div class="col-12 col-md-6 col-xl-5 pb-5 reveal">
                     <span class="mb-2">
                         <img src="{$UPD}images/quality.png" alt="exchange-icon" height="60" width="60">
                     </span>
                     <h3 class="h5-font font-w--500 mb-1">{$_HIGH_QUALITY}</h3>
                     <p>{$__HIGH_QUALITY}</p>
                 </div>
                 <div class="col-12 col-md-6 col-xl-5 pb-5 reveal">
                     <span class="mb-2">
                         <img src="{$UPD}images/target.png" alt="exchange-icon" height="60" width="60">
                     </span>
                     <h3 class="h5-font font-w--500 mb-1">{$_TARGETING}</h3>
                     <p>{$__TARGETING}</p>
                 </div>
                 <div class="col-12 col-md-6 col-xl-5 pb-5 reveal">
                     <span class="mb-2">
                         <img src="{$UPD}images/support.png" alt="exchange-icon" height="60" width="60">
                     </span>
                     <h3 class="h5-font font-w--500 mb-1">{$_SUPPORT}</h3>
                     <p>{$__SUPPORT}</p>
                 </div>
             </div>
             <div class="row justify-content-between reveal">
                 <div class="col-12 col-md-4 text-center mb-4">
                     <span class="font-size--48 color--primary">{$active_campaigns}</span>
                     <p><i class="fa fa-play"></i> {$_ACTIVE_CAMPAIGNS}</p>
                 </div>
                 <div class="col-12 col-md-4 text-center mb-4">
                     <span class="font-size--48 color--primary">{$today_views}</span>
                     <p><i class="fa fa-eye"></i> {$_TODAY_VIEWS}</p>
                 </div>
                 <div class="col-12 col-md-4 text-center mb-4">
                     <span class="font-size--48 color--primary">{$today_clicks}</span>
                     <p><i class="fa fa-bar-chart"></i> {$_TODAY_CLICKS}</p>
                 </div>
             </div>
            </div>
        </div>
 </section>
 <section class="space--top z-index1">
     <div class="container">
         <div class="row">
             <div class="col-12 col-sm-9 col-lg-6 mb-4 mb-lg-6 mx-auto text-center reveal">
                 <h2 class="mb-2 h3-font font-w--700">{$_ADVANCED_ADVERTISING_NETWORK}</h2>
                 <p class="mb-4">{$__ADVANCED_ADVERTISING_NETWORK}</p>
                 <a href="{$HOST}auth/signup" class="btn btn-size--md btn-bg--cta--5 btn-hover--3d"><span class="btn__text">{$_CREATE_ACCOUNT}</span></a>
             </div>
         </div>
     </div>
 </section>
 <section class="space--bottom steps--v1 pt-10 bg-color--primary jsElement" data-pull="-100">
     <div class="container">
         <div class="row space--top">
             <div class="col-12 col-md-6 col-xl-5 offset-xl-1 mb-5 mb-lg-0 reveal">
                 <div>
                     <h2 class="h3-font font-w--700 mb-2">{$_GET_STARTED_STEPS}</h2>
                     <p class="opacity--60">{$__GET_STARTED_STEPS}</p>
                 </div>
                 <div class="ml-lg-10 d-none d-md-inline-block">
                     <img src="{$LND}img/steps-arrow.svg" alt="arrow" class="svg svg-shape--default opacity--10">
                 </div>
             </div>
             <div class="col-12 col-md-6 col-xl-5 offset-xl-1 pr-sm-6 pr-md-0 remove-space--bottom steps-wrapper">
                 <div class="step position-relative d-flex align-items-start pb-6 reveal">
                     <div class="mr-3 mr-md-4">
                         <span class="icon--lg step__icon bg-color--white-opacity--05 box-shadow--1 rounded-circle">
                             <img src="{$UPD}images/open-account.png" alt="icon">
                         </span>
                     </div>
                     <div class="position-relative">
                         <h3 class="h4-font font-w--600 mb-1 step__title">{$_OPEN_ACCOUNT}</h3>
                         <p class="opacity--80">{$__OPEN_ACCOUNT}</p>
                     </div>
                </div>
                <div class="step position-relative d-flex align-items-start pb-6 reveal">
                    <div class="mr-3 mr-md-4">
                        <span class="icon--lg step__icon bg-color--white-opacity--05 box-shadow--1 rounded-circle">
                            <img src="{$UPD}images/launch-campaign.png" alt="icon">
                        </span>
                    </div>
                    <div class="position-relative">
                        <h3 class="h4-font font-w--600 mb-1 step__title">{$_LAUNCH_CAMPAIGN}</h3>
                        <p class="opacity--80">{$__LAUNCH_CAMPAIGN}</p>
                    </div>
                </div>
                <div class="step position-relative d-flex align-items-start pb-6 reveal">
                    <div class="mr-3 mr-md-4">
                        <span class="icon--lg step__icon bg-color--white-opacity--05 box-shadow--1 rounded-circle">
                            <img src="{$UPD}images/traffic.png" alt="icon">
                        </span>
                    </div>
                    <div class="position-relative">
                        <h3 class="h4-font font-w--600 mb-1 step__title">{$_TRAFFIC}</h3>
                        <p class="opacity--80">{$__TRAFFIC}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
 <section class="space--top pb-lg-10 ">
     <div class="container">
         <div class="row">
             <div class="col-12 col-md-10 col-lg-8 col-xl-6 mb-5 mb-xl-0 pl-xl-4 mx-auto pos-abs-xl-vertical-center pos-left text-xl-right">
                 <picture>
                     <img src="{$UPD}images/users-black.svg" alt="users" class="img-fluid reveal">
                 </picture>
             </div>
             <div class="col-12 col-xl-5 ml-auto">
                 <div class="row">
                     <div class="col-12 mb-5 mb-sm-7 mb-xl-5 text-center text-xl-left mx-auto reveal">
                         <h2 class="mb-1 h3-font font-w--700">{$_REFERRAL_COMISSION}</h2>
                         <p>{$__REFERRAL_COMISSION}</p>
                     </div>
                 </div>
            </div>
        </div>
    </div>
 </section>
 <section class="bg-color--primary">
     <div class="py-6 p-lg-8">
         <div class="container">
             <div class="row text-center text-md-left align-items-center justify-content-lg-between">
                 <div class="col-12 col-xl-11 mx-auto d-md-flex flex-md-row align-items-md-center reveal">
                     <div class="mb-3 mb-md-0 mr-2 mr-md-4 mr-xl-10 flex-1">
                         <h2 class="font-size--30 font-w--700 mb-2">{$_WE_LOVE_HELP}</h2>
                         <p class="opacity--60 pr-xl-10">{$__WE_LOVE_HELP}</p>
                     </div>
                     <a href="{$HOST}auth/signup" class="btn btn-bg--cta--5 btn-hover--3d">
                         <span class="btn__text">{$_CREATE_ACCOUNT_NOW}</span>
                     </a>
                </div>
            </div>
        </div>
    </div>
 </section>

{include file="../{$LANDING}/footer.tpl"}