{include file="../{$LANDING}/header.tpl"}

<!--banner start-->
<div class="hero-banner creative-banner" id="home">
    <div class="bubble-set">
        <div class="bubble-lg"></div>
        <div class="bubble-md"></div>
        <div class="bubble-sm"></div>
    </div>

    <div id="particles-js"></div>

    <div class="hero-text ">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7 col-md-12">
                    <h1 class="hero-title text-light">{$site_title}</h1>
                    <p class="here-sub-title  text-light">
                        {do_config(23)}
                    </p>
                    <div class="mb-3 mb-lg-3">
                {if !$logged}  
                        <a href="{$HOST}auth/signup" class="btn btn-gradient btn-pill text-uppercase mr-3 mb-3"><i class="fa fa-user-plus"></i> Signup</a>
                        <a href="{$HOST}auth/login" class="btn btn-white btn-pill mb-3 text-uppercase"><i class="fa fa-sign-in"></i> Login</a>
                {else} 
                   {if $role == 'publisher'} 
                        <a href="{$PUB}zones/add" class="btn btn-gradient btn-pill text-uppercase mr-3 mb-3"><i class="fa fa-code"></i> Create Ad Zone</a>
                   {elseif $role == 'advertiser'} 
                        <a href="{$ADV}purchase/index" class="btn btn-gradient btn-pill text-uppercase mr-3 mb-3"><i class="fa fa-plus-circle"></i> Create Campaign</a>
                   {else}
                        <a href="{$ADM}dashboard" class="btn btn-gradient btn-pill text-uppercase mr-3 mb-3"><i class="fa fa-dashboard"></i> {$_DASHBOARD}</a>
                   {/if}
                {/if}
                    </div>
                </div>
                <div class="col-lg-5 col-md-12" >
                    <img class="banner-img" src="{$UPD}images/network-banner.svg" alt=""/>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-footer" style="background-image: url('{$UPD}images/banner-curve-dark.png')"></div>
</div>
<!--banner end-->

<!--partner section start-->
<section class="section-gap-sm">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm col-6">
                <div class="partner-brand " >
                    <h5><i class="fa fa-users"></i> USERS</h5>
                    <h6>{$users}</h6>
                </div>
            </div>
            <div class="col-sm col-6">
                <div class="partner-brand " >
                    <h5><i class="fa fa-play"></i> ACTIVE CAMPAIGNS</h5>
                    <h6>{$active_campaigns}</h6>
                </div>
            </div>
            <div class="col-sm col-6">
                <div class="partner-brand " >
                    <h5><i class="fa fa-eye"></i> TODAY VIEWS</h5>
                    <h6>{$today_views}</h6>
                </div>
            </div>
            <div class="col-sm col-6">
                <div class="partner-brand " >
                    <h5><i class="fa fa-bar-chart"></i> TODAY CLICKS</h5>
                    <h6>{$today_clicks}</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!--partner section end-->

<!--section start-->
<div id="about">
    <section class="section-gap section-gray-bg">
        <div class="container">

            <!--currency icons-->
            <div class="row justify-content-md-center text-center accept-card">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="">We Accept</h3>
                            <p class=""><i class="fa fa-bank"></i> This following payment methods right now.</p>
                        </div>
                        {foreach from=$dmethods item=foo}
                        <div class="col">
                            <div class="card " >
                                <div class="card-body py-md-4"><img src="{$UPD}images/{$foo['methods']}-white.svg" width="150" alt="{$foo['name']}"/></div>
                            </div>
                        </div>
                        {/foreach}

                    </div>
                </div>
            </div>
            <!--currency icons-->
        </div>
    </section>

</div>
<!--section end-->

<div id="features">
    <!--section start-->
    <section class="section-gap">
        <div class="container">
            <!--section title-->
            <div class="row text-center">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="">What we offer?</h3>
                        <p class=""> We offer best ads services for you, you can sell and buy traffic from us.</p>
                    </div>
                </div>
            </div><!--section title-->
            <div class="row text-md-left text-center">
                <div class="col-md-4 col-sm-6 " >
                    <i class="fa fa-money f-icon text-paste-color"></i>
                    <h5 class="my-4">QUICK PURCHASE</h5>
                    <p>To get started, Just choose whatever you like and purchse with just 1 click.</p>
                </div>
                <div class="col-md-4 col-sm-6 " >
                    <i class="fa fa-bank f-icon text-paste-color"></i>
                    <h5 class="my-4">VARIETY OF PAYMENTS</h5>
                    <p>We support all the modern payment systems that are continuously improving.</p>
                </div>
                <div class="col-md-4 col-sm-6 " >
                    <i class="fa fa-bar-chart f-icon text-paste-color"></i>
                    <h5 class="my-4">HUGE INCOME</h5>
                    <p>When you sign up with us you will earn extra income from your websites.</p>
                </div>
                <div class="col-md-4 col-sm-6 " >
                    <i class="fa fa-dashboard f-icon text-paste-color"></i>
                    <h5 class="my-4">POWERFUL DASHBOARD</h5>
                    <p>We have powerful publisher & advertiser Dashboard.</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <i class="fa fa-globe f-icon text-paste-color"></i>
                    <h5 class="my-4">TARGET</h5>
                    <p>You can target any device or any country with your campaigns!</p>
                </div>
                <div class="col-md-4 col-sm-6 " >
                    <i class="fa fa-shield f-icon text-paste-color"></i>
                    <h5 class="my-4">24x7 Live Support</h5>
                    <p>If you have questions Contact us anytime we are here to help.</p>
                </div>
            </div>
        </div>
    </section>
    <!--section end-->
</div>

<!--section start-->
<section class="section-gap section-gray-bg">
    <div class="container">
        <div class="row d-flex align-items-center mb-lg-5 mb-md-3 pb-lg-5 pb-0">
            <div class="col-md-7 col-gap">
                <h2 class="mb-md-5 text-purple-color">High Quality Traffic</h2>
                <p class="">Get more visitors to your website with our high quality traffic that are coming from blogs, forums, Chat websites and more.</p>
                <a href="{$HOST}auth/signup" class="btn btn-purple btn-pill text-uppercase">Signup</a>
            </div>
            <div class="col-md-5 col-gap">
                <img class="my-5" src="{$UPD}images/high-quality.svg" alt="High Quality"/>
            </div>
        </div>

        <div class="row d-flex align-items-center">
            <div class="col-md-7 col-gap">
                <h2 class="text-paste-color mb-md-5">{do_config(2)}% Referral Comission</h2>
                <p class="">You can also receive additional income on our website using our lucrative referral program. For every user signed up under your referral link, you will receive {do_config(2)}% of whatever they earned.</p>
            </div>
            <div class="col-md-5 col-gap mb-md-0 mb-3 order-md-first">
                <div class="">
                    <img src="{$UPD}images/users.svg" alt="Users"/>
                </div>
            </div>
        </div>
    </div>
</section>
<!--section end-->

<div id="how_works">
    <!--section start-->
    <section class="section-gap section-gray-bg">
        <div class="container">
            <!--section title-->
            <div class="row text-center">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="">We Love to Help Your Perfect Business</h3>
                        <p class=""> The way we can change your business is amazing. Start our network and see the result!</p>
                    </div>
                </div>
            </div><!--section title-->
            <div class="row d-flex align-items-center">
                <div class="col-md-12 col-gap">
                    <div class="owl-carousel owl-theme js_steps_carousel steps-shadow">
                        <div class="row">
                            <div class="col-md-12" data-dot="<i class='fa fa-mobile'></i> ">
                                <div class="steps-content text-dark">
                                    <h3 class="mb-md-3">Target By Country & Device</h3>
                                    <p>{do_config(0)} have special offer for you. You can target any device or any country with your campaigns!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-md-12" data-dot="<i class='fa fa-server'></i>">
                                <div class="steps-content text-dark">
                                    <h3 class="mb-md-3">Referral Bonus</h3>
                                    <p> It's simple. Refer others to us and get {do_config(2)}% for life!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-md-12" data-dot=" <i class='fa fa-bar-chart'></i> ">
                                <div class="steps-content text-dark">
                                    <h3 class="mb-md-3">Advanced Reports Included</h3>
                                    <p>Know your audience. Analyse in detail what brings you the most clicks/views!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section end-->
</div>

<div id="faq">
    <!--faq section start-->
    <section class="section-gap pb-0">
    <div class="container">
        <!--section title-->
        <div class="row text-center">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="">Frequently Asked Question</h3>
                    <p class="">Do you have any question? we hope you find it on this list.</p>
                </div>
            </div>
        </div><!--section title-->
        <div class="row">
            <div class="col-md-6 col-gap">
                <div class="accordion "  id="accordion-1">
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" data-target="#collapse-1-1">
                                    What is {do_config(0)}?
                                </a>
                            </h5>
                        </div>
                        <div id="collapse-1-1" class="collapse" data-parent="#accordion-1">
                            <div class="card-body pt-0">
                                <p>{do_config(0)} is an advertising network, simple way to advertise your business and make money online.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse"  data-target="#collapse-1-2">
                                    How do I start making money?
                                </a>
                            </h5>
                        </div>
                        <div id="collapse-1-2" class="collapse" data-parent="#accordion-1">
                            <div class="card-body pt-0">
                                <p>It's just 3 steps: create an account, submit your website, place adzones in your wesbite - For every clicks impressions, you earn money. It's just that easy!.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-gap">

                <div class="accordion "  id="accordion-2">
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" data-target="#collapse-1-3">
                                    {do_config(1)}% Referral Bonus
                                </a>
                            </h5>
                        </div>
                        <div id="collapse-1-3" class="collapse" data-parent="#accordion-1">
                            <div class="card-body pt-0">
                                <p>{do_config(0)} referral program is a great way to spread the word of this great service and to earn even more money with your Websites! Refer friends and receive {do_config(1)}% of their earnings for life!</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>
                                <a class="collapsed" data-toggle="collapse" data-target="#collapse-1-4">
                                    What is the minimum Deposit?
                                </a>
                            </h5>
                        </div>
                        <div id="collapse-1-4" class="collapse" data-parent="#accordion-1">
                            <div class="card-body pt-0">
                                <p>You are required to earn only {do_config(2)} before you will be paid.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
    <!--faq section end-->
</div>

{include file="../{$LANDING}/footer.tpl"}