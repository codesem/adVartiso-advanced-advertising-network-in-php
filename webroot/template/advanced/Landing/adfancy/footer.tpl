<footer class="footer section--light bg-color--primary-light--1  position-relative hidden">
    <div class="pt-3 pt-lg-10 pb-6 pb-lg-10 border--bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-4 mb-4 mb-xl-0">
                    <div class="pr-xl-3">
                        <span class="widget__title font-size--20 font-w--700 mb-1 text-uppercase">{do_config(0)}</span>
                        <p>{$site_description}</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-2 mb-xl-0">
                    <div class="widget widget-nav">
                        <span class="widget__title font-size--20 font-w--700 mb-1 text-uppercase">{$_HELP}</span>
                        <ul>
                            <li><a href="{$HOST}page/about-us/">{$_ABOUT_US}</a></li>
                            <li><a href="{$HOST}page/faqs/">{$_FAQS}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4 col-xl-2 offset-xl-1 mb-2 mb-xl-0">
                    <div class="widget widget-nav">
                        <span class="widget__title font-size--20 font-w--700 mb-1 text-uppercase">{$_ABOUT}</span>
                        <ul>
                            <li><a href="{$HOST}page/privacy-policy/">{$_PRIVACY_POLICY}</a></li>
                            <li><a href="{$HOST}page/terms-conditions/">{$_TERMS_CONDITIONS}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-8 col-sm-8 col-md-4 col-xl-3">
                    <span class="widget__title font-size--20 font-w--700 mb-1 text-uppercase">{$_SOCIAL}</span>
                    <ul class="icon-group mb-0">
                        {if !empty(do_config(57))}
                            <li>
                                <a href="{do_config(57)}" class="color--primary" target="_blank">
                                  <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                        {/if}
                        {if !empty(do_config(59))}
                            <li>
                                <a href="{do_config(59)}" class="color--primary" target="_blank">
                                  <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        {/if}
                        {if !empty(do_config(58))}
                            <li>
                                <a href="{do_config(58)}" class="color--primary" target="_blank">
                                  <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        {/if}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="font-size--15">&copy; {$_COPYRIGHT} {do_config(0)} {$date}.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</main>
<!-- footer code -->
{do_config(15)}

<!-- common js-->
<script src="{$LND}js/plugins.min.js"></script>
<script src="{$LND}js/app.js"></script>

</body>
</html>