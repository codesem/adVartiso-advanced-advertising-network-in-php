{include file="$TMP/Pages/Layout/header.tpl"}

                        <div class="col-sm-12 account-content">
                            <h2 class="text-uppercase text-black"><i class="fa fa-cog"></i> {$site_title}</h2><hr>
                            <p class="text">
                                <p> To enable Coinbase as a payment method, you need to navigate to Admin Area  >> Payment Methods >> Coinbase from there enable Coinbase.</p>
                                <p> You need to login/signup on https://commerce.coinbase.com/ then on the menu click on “Settings“.</p>
                                <p> Once you're on the setting you need to follow this steps:</p>
                                <p>1 Look for an option labelled “API keys”. Create an API key Make sure to Copy and paste it on payments options in your website.</p>
                                <p>2 Look for an option labelled “Webhook subscriptions”, Then click on “Add an endpoint“.</p>
                                <p>3 Now return to the payments options and copy the IPN URL and paste it there.</p>
                                <p>4 Click on “Show shared secret“ and copy it, Now return to the payments options in your website and paste it on “Coinbase Shared Secret“ input.</p>
                                <p>That's it!</p>
                            </p><hr>
                            <a href="{$HOST}" class="badge badge-success"><i class="fa fa-arrow-left"></i> BACK</a>
                        </div>
                            </div>
                            <!-- end card-box-->
                        </div>
                        <!-- end wrapper -->
          
{include file="$TMP/Pages/Layout/footer.tpl"}