{include file="$TMP/Pages/Layout/header.tpl"}

                        <div class="col-sm-12 account-content">
                            <h2 class="text-uppercase text-black"><i class="fa fa-cog"></i> {$site_title}</h2><hr>
                            <p class="text">
                                <p> To enable PayPal as a payment method, you need to navigate to Admin Area  >> Payment Options >> PayPal from there enable PayPal and add your PayPal email address you wish to receive payments on</p>
                                <p> For automatic approve successful payments into your website you will need to enable a return link into your business PayPal account by doing the following:</p>
                                <p>1 Log into your PayPal account</p
                                <p>2 Go to Profile then “My Selling Tools”</p>
                                <p>3 Look for an option labelled “Website preferences”. Click on the update button for that option.</p>
                                <p>4 Click checkbox  "on" for “Auto Return”</p>
                                <p>5 For Return URL you need to return to the payments options in your website and copy the IPN URL and paste it there.</p>
                                <p>6 Look for an option labelled “Payment Data Transfer (optional)”. Click checkbox "on". </p>
                                <p>7 Look for an option labelled “PayPal Account Optional”. Click checkbox "on" and hit “Save”.</p>
                                <p>That's it!</p>
                            </p><hr>
                            <a href="{$HOST}" class="badge badge-success"><i class="fa fa-arrow-left"></i> BACK</a>
                        </div>
                            </div>
                            <!-- end card-box-->
                        </div>
                        <!-- end wrapper -->
          
{include file="$TMP/Pages/Layout/footer.tpl"}