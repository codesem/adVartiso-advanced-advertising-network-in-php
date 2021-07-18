<!--footer start-->
<footer class="app-footer">
    <div class="primary-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 " >
                    <h4 class="text-uppercase">{do_config(0)}</h4>
                    <p class="copyright">&copy; Copyright {$date} {do_config(0)}.</p>
                </div>
                <div class="col-md-4 mb-md-0 mb-3 " >
                    <h6 class="text-uppercase">Help</h6>
                    <ul class="list-unstyled">
    					<li><a href="{$HOST}page/about-us/">{$_ABOUT_US}</a></li>
    					<li><a href="{$HOST}page/faqs/">{$_FAQS}</a></li>
                    </ul>
                </div>
                <div class="col-md-4 " >
                    <h6 class="text-uppercase">About </h6>
                    <ul class="list-unstyled">
	    				    <li><a href="{$HOST}page/privacy-policy/">{$_PRIVACY_POLICY}</a></li>
	    				    <li><a href="{$HOST}page/terms-conditions/">{$_TERMS_CONDITIONS}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="secondary-footer text-md-left text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-md-0 mb-3">
                    <div class="payment-cards ">
                        <img src="assets/img/fc1.png" alt=""/>
                        <img src="assets/img/fc2.png" alt=""/>
                        <img src="assets/img/fc3.png" alt=""/>
                        <img src="assets/img/fc4.png" alt=""/>
                    </div>
                </div>
                <div class="col-md-6 text-md-right " >
                    <div class="float-md-right  mb-md-0 mb-3">
                        <span class="sm-txt pr-2">Language:</span>
                        <div class="btn-group ">
                            <button type="button" class="btn-language dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                English
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button">English</button>
                            </div>
                        </div>
                    </div>

                    <div class="social-links float-md-right">
                        {if !empty(do_config(57))}
                            <a href="{do_config(57)}" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        {/if}
                        {if !empty(do_config(59))}
                            <a href="{do_config(59)}" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        {/if}
                        {if !empty(do_config(58))}
                            <a href="{do_config(58)}" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->

<!-- footer code -->
{do_config(15)}

<!--js initialized-->
<script src="{$LND}vendor/jquery/jquery.min.js"></script>
<script src="{$LND}vendor/popper.min.js"></script>
<script src="{$LND}vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{$LND}vendor/wow.min.js"></script>
<script src="{$LND}vendor/jquery.easing.min.js"></script>
<script src="{$LND}vendor/owl/owl.carousel.min.js"></script>
<script src="{$LND}vendor/jquery.countdown.min.js"></script>
<script src="{$LND}vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<!--<script src="{$LND}vendor/particles/particles.js"></script>-->
<!--<script src="{$LND}vendor/particles/init-particles.js"></script>-->

<!--contact form-->
<script type="text/javascript" src="{$LND}vendor/contact-form/form-validator.min.js"></script>
<script type="text/javascript" src="{$LND}vendor/contact-form/contact-form-script.js"></script>

<!--init scripts-->
<script src="{$LND}js/scripts.js"></script>

</body>
</html>