<?php /* Template Name: Front Page */ get_header(); ?>
<div id="main-container" style="position:relative;top:-33px">
    <script src="<?php echo get_template_directory_uri();?>/js/index.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/unislider.css">
    <style>
        .banner h3 {
            color: #fff;
            font-size: 24px;
            font-weight: 400;
            text-align: left
        }
    </style>
    <div>
        <div class="banner">
            <ul>
                <li style="background:url(<?php echo get_template_directory_uri();?>/img/slide1.jpg) center center no-repeat">
                    <div style="width:100%">
                        <div class="content-container" style="width:50%;float:left;margin-top:45px">
                            <div class="content" style="width:460px;height:250px;padding:20px;margin:0 auto;background:url(<?php echo get_template_directory_uri();?>/img/slide_content_bg.png) repeat;position:relative">
                                <h3 style="color:#fff;font-size:24px;font-weight:400;text-align:left">Simplify customer payouts with a full-featured, co-branded VISA Prepaid Card from i-use</h3>
                                <div style="float:left;width:100%;text-align:left;line-height:37px">
                                    <div style="width:40px;float:left;text-wrap:normal"><i class="icon-pencil icon-2x" style="width:32px;margin:0 auto;color:#ea6d01"></i></div>&nbsp;Customise cards with logo overprinting</div>
                                <div style="float:left;width:100%;text-align:left;line-height:37px">
                                    <div style="width:40px;float:left;text-wrap:normal"><i class="icon-credit-card icon-2x" style="width:32px;margin:0 auto;color:#ea6d01"></i></div>&nbsp;$20,000 USD load limit</div>
                                <div style="float:left;width:100%;text-align:left;line-height:37px">
                                    <div style="width:40px;float:left;text-wrap:normal"><i class="icon-globe icon-2x" style="width:32px;margin:0 auto;color:#ea6d01"></i></div>&nbsp;Use anywhere the VISA acceptance mark is displayed</div>
                                <div style="width:100%;position:relative">
                                    <div class="secondary medium btn" style="width:49%;position:relative;top:5px;float:left">
                                        <a href="#offer">MORE INFO</a>
                                    </div>
                                    <div class="primary medium btn" style="width:49%;position:relative;top:5px;float:right">
                                        <a href="#about">CONTACT US</a>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <div style="float:left;margin-top:65px;margin-left:130px"><img src="<?php echo get_template_directory_uri();?>/img/card-front.png"></div>
                    </div>
                </li>
                <li style="background:url(<?php echo get_template_directory_uri();?>/img/slide2.jpg) center center no-repeat">
                    <div class="content-container" style="width:50%;float:left;margin-top:45px">
                        <div class="content" style="width:460px;height:250px;padding:20px;margin:0 auto;background:url(<?php echo get_template_directory_uri();?>/img/slide_content_bg.png) repeat;position:relative">
                            <h3 style="color:#fff;font-size:24px;font-weight:400;text-align:left">Automate customer applications and payouts with Card Genie, our full-service payout platform</h3>
                            <div style="float:left;width:100%;text-align:left;line-height:37px">
                                <div style="width:40px;float:left;text-wrap:normal"><i class="icon-edit icon-2x" style="width:32px;margin:0 auto;color:#ea6d01"></i></div>&nbsp;Automated applications and approvals</div>
                            <div style="float:left;width:100%;text-align:left;line-height:37px">
                                <div style="width:40px;float:left;text-wrap:normal"><i class="icon-credit-card icon-2x" style="width:34px;margin:0 auto;color:#ea6d01"></i></div>&nbsp;Manage card creation and upgrades</div>
                            <div style="float:left;width:100%;text-align:left;line-height:37px">
                                <div style="width:40px;float:left;text-wrap:normal"><i class="icon-money icon-2x" style="width:32px;margin:0 auto;color:#ea6d01"></i></div>&nbsp;Automated card holder payouts and loads</div>
                            <div style="clear:both"></div>
                            <div style="width:100%;position:relative">
                                <div class="secondary medium btn" style="width:49%;position:relative;top:5px;float:left">
                                    <a href="#offer">MORE INFO</a>
                                </div>
                                <div class="primary medium btn" style="width:49%;position:relative;top:5px;float:right">
                                    <a href="#about">CONTACT US</a>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                </li>
                <li style="background:url(<?php echo get_template_directory_uri();?>/img/slide3.jpg) center center no-repeat">
                    <div class="content-container" style="width:50%;float:left;margin-top:45px">
                        <div class="content" style="width:460px;height:250px;padding:20px;margin:0 auto;background:url(<?php echo get_template_directory_uri();?>/img/slide_content_bg.png) repeat;position:relative">
                            <h3 style="color:#fff;font-size:24px;font-weight:400;text-align:left">With our API, Card Genie can be seamlessly integrated with your existing customer platforms</h3>
                            <div style="float:left;width:100%;text-align:left;line-height:37px">
                                <div style="width:40px;float:left;text-wrap:normal"><i class="icon-lock icon-2x" style="width:32px;margin:0 auto;color:#ea6d01"></i></div>&nbsp;2-factor authentication security</div>
                            <div style="float:left;width:100%;text-align:left;line-height:37px">
                                <div style="width:40px;float:left;text-wrap:normal"><i class="icon-desktop icon-2x" style="width:32px;margin:0 auto;color:#ea6d01"></i></div>&nbsp;Implement into web applications with JSON</div>
                            <div style="float:left;width:100%;text-align:left;line-height:37px">
                                <div style="width:40px;float:left;text-wrap:normal"><i class="icon-file-text-alt icon-2x" style="width:32px;margin:0 auto;color:#ea6d01"></i></div>&nbsp;Full support and documentation</div>
                            <div style="width:100%;position:relative">
                                <div class="secondary medium btn" style="width:49%;position:relative;top:5px;float:left">
                                    <a href="#offer">MORE INFO</a>
                                </div>
                                <div class="primary medium btn" style="width:49%;position:relative;top:5px;float:right">
                                    <a href="#about">CONTACT US</a>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                        </div>
                        <div style="clear:both"></div>
                </li>
            </ul>
            </div>
            </div>
            <script>
                $(function () {
                    if (window.chrome) {
                        $(".banner li").css("background-size", "100% 100%")
                    }
                    $(".banner").unslider({
                        fluid: false,
                        dots: true,
                        speed: 500,
                        delay: 12000
                    })
                });
            </script>
            <div id="content-main" style="position:relative;top:-25px;margin-bottom:-58px">
                <div class="top-top-grey" style="height:10px;width:100%;background:#ddd;z-index:1"></div>
                <div class="container white top-grey bigpadding">
                    <section class="row" id="offer">
                        <div class="eight columns">
                            <h5 class="blacktext bold">The i-use card is a $20,000 USD limit prepaid card solution offering automated payout and application functionality through our full-service API</h5>
                        </div>
                        <div class="three columns push_one">
                            <div class="primary medium btn">
                                <a href="#request">REQUEST CARDS</a>
                            </div>
                        </div>
                    </section>
                    <section class="row">
                        <div class="grey-dotted">
                        </div>
                    </section>
                    <div id="services-two">
                        <section class="row">
                            <style>
                                #offer-section .left p {
                                    padding-left: 0
                                }
                                
                                #offer-section .right p {
                                    padding-left: 0
                                }
                            </style>
                            <div id="offer-section">
                                <div class="left">
                                    <p style="font-weight:bold;font-size:18px;color:#000">Card Genie support system</h3>
                                        <p>i-use is a $20,000 USD load limit prepaid card-based corporate payout solution, allowing for the effective management and automation of payroll or payouts to your customers or clients.</p>
                                        <p>The i-use card is supported by Card Genie, our card management platform that can be incorporated into your existing customer systems through our fully-documented API. Features of Card Genie include card management, extending to applications, approvals and loads, card upgrades, float management and more.</p>
                                        <p>All i-use cards are fully funded and the monies held securely in a ring-fenced client account. To learn more see <a href="<?php echo get_template_directory_uri();?>/SECURITY%20OF%20CUSTOMER%20FUNDS.pdf">Security of Customer Funds</a>.</p>
                                        <p style="font-weight:bold;font-size:18px;color:#000">Customisable Design</p>
                                        <p>The i-use card can be co-branded, giving it a unique design that works to better showcase your brand and provides reassurance and confidence to your existing customers with a card that bears a familiar logo.</p>
                                        <p>i-use provides product management services for companies wanting to launch their own prepaid card brand, but who don’t necessarily want to develop or operate the card programme themselves.</p>
                                    </p>
                                </div>
                                <div class="right">
                                    <p style="font-weight:bold;color:#000;margin-top:18px">These are the general steps in evaluating your own card program:</p>
                                    <div style="float:left">
                                        <ul style="float:left;padding-left:30px;margin-top:10px;margin-bottom:0">
                                            <li style="float:left;width:100%;text-align:left">&raquo; <span style="color:#ea6d01">Details and check list of the programme features</span></li>
                                            <li style="float:left;width:100%;text-align:left">&raquo; <span style="color:#ea6d01">Sourcing of necessary partners (Card Printers, Issuer etc.)</span></li>
                                            <li style="float:left;width:100%;text-align:left">&raquo; <span style="color:#ea6d01">Card programme viability evaluation</span></li>
                                        </ul>
                                    </div>
                                    <p style="font-weight:bold;color:#000;margin-top:2px">The client will need to provide:</p>
                                    <div style="float:left">
                                        <ul style="float:left;padding-left:30px;margin-top:10px;margin-bottom:0">
                                            <li style="float:left;width:100%;text-align:left">&raquo; <span style="color:#ea6d01">Company Due Diligence documentation</span></li>
                                            <li style="float:left;width:100%;text-align:left">&raquo; <span style="color:#ea6d01">Prepaid programme feature specification</span></li>
                                            <li style="float:left;width:100%;text-align:left">&raquo; <span style="color:#ea6d01">Prepaid programme business plan</span></li>
                                        </ul>
                                    </div>
                                    <p>When the programme is live, the Issuer will operate, maintain and enforce compliance of the prepaid programme while it is operational. The Client is responsible for the marketing of their programme, as outlined within the provided business plan. If there is a loyalty scheme the Client takes care of this part as well.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                    <section class="row smalltoppadding">
                        <div class="grey-dotted">
                        </div>
                    </section>
                    <section class="row" id="usage">
                        <div class="eight columns">
                            <h5 class="blacktext bold midbottommargin">Functionality: Card Usage</h5>
                            <p class="greytext midbottompadding">
                                Using the i-use card is easy and convenient
                            </p>
                        </div>
                        <div class="two columns push_two midtoppadding smalltopmargin">
                            <div class="small primary btn">
                                <a href="#about">CONTACT US</a>
                            </div>
                        </div>
                    </section>
                    <section class="row smalltoppadding">
                        <div class="grey-dotted" style="margin:0 0 40px 0!important">
                        </div>
                    </section>
                    <section class="row">
                        <div id="usage-top-row">
                            <div class="holder">
                                <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/usage_world.png"></div>
                                <p>Use your card worldwide wherever the VISA acceptance mark is displayed</p>
                            </div>
                            <div class="holder">
                                <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/usage_atm.png"></div>
                                <p>Make cash withdrawals at any ATM which bears the VISA acceptance mark</p>
                            </div>
                            <div class="holder">
                                <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/usage_pin.png"></div>
                                <p>Your PIN can be changed at any VISA enabled ATM which supports this functionality</p>
                            </div>
                            <div class="holder">
                                <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/usage_swipe.png"></div>
                                <p>Your i-use card can be used at any POS machine that is VISA enabled</p>
                            </div>
                        </div>
                        <div style="clear:both"></div>
                        <div id="usage-bottom-row" style="margin-top:30px">
                            <div class="holder">
                                <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/usage_3dsecure.png"></div>
                                <p style="text-align:center">Shop safely online with your i-use card using 3D Secure Code Verification</p>
                            </div>
                            <div class="holder">
                                <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/usage_currencies.png"></div>
                                <p style="text-align:center">Your i-use card converts to the currency where you are automatically</p>
                            </div>
                            <div class="holder">
                                <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/usage_c2c.png"></div>
                                <p style="text-align:center">Transfer funds between i-use cards online or by SMS</p>
                            </div>
                        </div>
                    </section>
                    <section class="row smalltoppadding">
                        <div class="grey-dotted">
                        </div>
                    </section>
                    <section class="row" id="management">
                        <div class="eight columns">
                            <h5 class="blacktext bold midbottommargin">Functionality: Account Management</h5>
                            <p class="greytext midbottompadding">
                                Transactions on your i-use card occur near real-time, giving you full control over your spending
                            </p>
                        </div>
                        <div class="two columns push_two midtoppadding smalltopmargin">
                            <div class="small primary btn">
                                <a href="#about">CONTACT US</a>
                            </div>
                        </div>
                    </section>
                    <section class="row smalltoppadding">
                        <div class="grey-dotted" style="margin:0 0 40px 0!important">
                        </div>
                    </section>
                    <section class="row">
                        <div id="account-management">
                            <div class="holder">
                                <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/management_statements.png"></div>
                                <p>Access online statements in real-time</p>
                            </div>
                            <div class="holder">
                                <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/management_atm.png"></div>
                                <p>Check your Balance online, with our IVR and SMS systems or at an ATM</p>
                            </div>
                            <div class="holder">
                                <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/management_track.png"></div>
                                <p>Keep track of your spending with ease</p>
                            </div>
                            <div class="holder">
                                <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/management_overdraft.png"></div>
                                <p>No overdrafts or overdraft fees</p>
                            </div>
                            <div class="text">
                                <p>In order to apply for an i-use card you are not required to:</p>
                            </div>
                            <div class="holder">
                                <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/management_bank.png"></div>
                                <p>Have a bank account</p>
                            </div>
                            <div class="holder">
                                <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/management_checks.png"></div>
                                <p>Undergo any credit checks</p>
                            </div>
                        </div>
                    </section>
                    <section class="row smalltoppadding">
                        <div class="grey-dotted">
                        </div>
                    </section>
                    <section class="row" id="sms">
                        <div class="eight columns">
                            <h5 class="blacktext bold midbottommargin">Functionality: SMS</h5>
                            <p class="greytext midbottompadding">
                                You can access i-use card services from your mobile, by using SMS functionality
                            </p>
                        </div>
                        <div class="two columns push_two midtoppadding smalltopmargin">
                            <div class="small primary btn">
                                <a href="#about">CONTACT US</a>
                            </div>
                        </div>
                    </section>
                    <section class="row smalltoppadding">
                        <div class="grey-dotted" style="margin:0 0 40px 0!important">
                        </div>
                    </section>
                    <section class="row">
                        <div id="sms-functionality">
                            <div class="right">
                                <div class="img-holder" style="padding:10px"><img src="<?php echo get_template_directory_uri();?>/images/moby.jpg" style="padding:0!important"></div>
                            </div>
                            <div class="left">
                                <table style="width:100%">
                                    <tr>
                                        <th style="text-align:left!important;padding:9px 10px!important">Function</th>
                                        <th style="text-align:left!important;padding:9px 10px!important">Instruction</th>
                                        <th style="text-align:left!important;padding:9px 10px!important">Example</th>
                                    </tr>
                                    <tr>
                                        <td>The card balance</td>
                                        <td>TRA BAL ACCESSCODE [LAST 4 OF CARD]</td>
                                        <td>TRA BAL 123456 1111</td>
                                    </tr>
                                    <tr>
                                        <td>Last 3 transactions</td>
                                        <td>TRA TXN ACCESSCODE [LAST 4 OF CARD]</td>
                                        <td>TRA TXN 123456 1111</td>
                                    </tr>
                                    <td>Lock card</td>
                                    <td>TRA LOCK ACCESSCODE [LAST 4 OF CARD]</td>
                                    <td>TRA LOCK 123456 1111</td>
                                    </tr>
                                    <tr>
                                        <td>Unlock card</td>
                                        <td>TRA UNLOCK ACCESSCODE [LAST 4 OF CARD]</td>
                                        <td>TRA UNLOCK 123456 1111</td>
                                    </tr>
                                    <tr>
                                        <td>Card to Card transfer</td>
                                        <td>TRA XFER AMOUNT TO MOBILE ACCESSCODE [LAST 4 OF CARD]</td>
                                        <td>TRA XFER 20 TO +447000000000 123456 1111</td>
                                    </tr>
                                    <tr>
                                        <td>Load card</td>
                                        <td>TRA LOAD AMOUNT CVC ACCESSCODE [LAST 4 OF CARD]</td>
                                        <td>TRA LOAD 20 111 123456 1111</td>
                                    </tr>
                                    <tr>
                                        <td>Stop notification</td>
                                        <td>TRA STOP [LAST 4 OF CARD]</td>
                                        <td>TRA STOP 1111</td>
                                    </tr>
                                    <tr>
                                        <td>Stop all notifications</td>
                                        <td>TRA STOP ALL [LAST 4 OF CARD]</td>
                                        <td>TRA STOP ALL 1111</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </section>
                    <section class="row smalltoppadding">
                        <div class="grey-dotted">
                        </div>
                    </section>
                    <section class="row" id="loaded">
                        <div class="eight columns">
                            <h5 class="blacktext bold midbottommargin">Security: Money Loaded</h5>
                            <p class="greytext midbottompadding">
                                The money you load to your i-use card is kept safe at all times through a number of safety features
                            </p>
                        </div>
                        <div class="two columns push_two midtoppadding smalltopmargin">
                            <div class="small primary btn">
                                <a href="#about">CONTACT US</a>
                            </div>
                        </div>
                    </section>
                    <section class="row smalltoppadding">
                        <div class="grey-dotted" style="margin:0 0 40px 0!important">
                        </div>
                    </section>
                    <section class="row">
                        <div id="money-loaded">
                            <div class="left">
                                <div class="left-sub">
                                    <div class="left">
                                        <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/loaded_funding.png"></div>
                                    </div>
                                    <div class="right">
                                        <h3>100% Funding</h3>
                                        <p>Once funds are received, your prepaid card is loaded automatically</p>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div class="left-sub2" style="margin-top:30px">
                                    <div class="left">
                                        <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/loaded_trust.png"></div>
                                    </div>
                                    <div class="right">
                                        <h3>The Client Account</h3>
                                        <p>Loaded funds are held in a client account that is controlled by the card Issuer. To protect your funds, i-use doesn't have access to this account. For more information, read about the <a href="<?php echo get_template_directory_uri();?>/SECURITY%20OF%20CUSTOMER%20FUNDS.pdf">Security of Customer Funds</a></p>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div style="clear:both"></div>
                            </div>
                            <div class="right">
                                <div class="right-sub">
                                    <div style="width:100%">
                                        <div class="left">
                                            <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/loaded_security.png"></div>
                                        </div>
                                        <div class="right">
                                            <h3>Additional Security</h3>
                                            <p>The Issuer has to keep a deposit over and above the weekly settlement of all i-use card transactions. This provides our customers with additional security and increased protection of the funds that they load.</p>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>
                                    <div class="right-sub2" style="margin-top:30px">
                                        <div style="width:100%">
                                            <div class="left">
                                                <div class="img"><img src="<?php echo get_template_directory_uri();?>/images/loaded_reserves.png"></div>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <h3>No Fractional Reserves</h3>
                                            <p>As is governed by the e-money laws within the UK, as regulated by the FCA and enforced by CashFlows Limited. i-use are unable to approve payments on i-use cards unless they have sufficient funds at the time. Additionally, i-use never extends credit to card holders.</p>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                            </div>
                    </section>
                    <section class="row smalltoppadding">
                        <div class="grey-dotted">
                        </div>
                    </section>
                    <section class="row" id="safety">
                        <div class="eight columns">
                            <h5 class="blacktext bold midbottommargin">Security: Card Safety</h5>
                            <p class="greytext midbottompadding">
                                The i-use card has a number of security features integrated into it. These are to protect cardholders and vendors alike
                            </p>
                        </div>
                        <div class="two columns push_two midtoppadding smalltopmargin">
                            <div class="small primary btn">
                                <a href="#about">CONTACT US</a>
                            </div>
                        </div>
                    </section>
                    <section class="row smalltoppadding">
                        <div class="grey-dotted" style="margin:0 0 40px 0!important">
                        </div>
                    </section>
                    <section class="row">
                        <div id="card-safety">
                            <p>The i-use ard has several security features integrated on the card. These are there to ensure that both cardholders and vendors know that the card is genuine, protecting both parties from fraud and unauthorised usage. The features on the i-use card include:</p>
                            <div class="holder">
                                <div class="left-sub">
                                    <div class="left">
                                        <img src="<?php echo get_template_directory_uri();?>/images/front.png">
                                    </div>
                                    <div class="right" style="margin-top:10px">
                                        <h3 style="font-size:16px;text-align:left">Chip with encrypted PIN</h3>
                                        <p style="font-size:11px;text-align:left">The i-use card must be used at PIN-enabled merchant terminals, requiring a PIN to authorise any transaction</p>
                                        <h3 style="font-size:16px;text-align:left">Hot Foil Printing</h3>
                                        <p style="font-size:11px;text-align:left">The i-use card doesn’t have raised numbers, protecting card holders from Zip-Zap machines used to copy card details</p>
                                        <h3 style="font-size:16px;text-align:left">3D Secure - Verified by VISA</h3>
                                        <p style="font-size:11px;text-align:left">With Verified by Visa, i-use card holders are protected at more than 300,000 online retailers throughout Europe</p>
                                    </div>
                                </div>
                                <div class="right-sub">
                                    <div class="left">
                                        <img src="<?php echo get_template_directory_uri();?>/images/back.png">
                                    </div>
                                    <div class="right" style="margin-top:10px">
                                        <h3 style="font-size:16px;text-align:left">Signature</h3>
                                        <p style="font-size:11px;text-align:left">The i-use card must be signed on the back in order for it to be valid for use</p>
                                        <h3 style="font-size:16px;text-align:left">CVV</h3>
                                        <p style="font-size:11px;text-align:left">The cards CVV number is used to authenticate online transactions</p>
                                        <h3 style="font-size:16px;text-align:left">Electronic Use Only</h3>
                                        <p style="font-size:11px;text-align:left">The i-use card can only be used where it is possible for merchants to verify that sufficient funds are available, safeguarding against unauthorised usage</p>
                                        <h3 style="font-size:16px;text-align:left">Visa Hologram</h3>
                                        <p style="font-size:11px;text-align:left">The VISA dove hologram glimmers under light at different angles. Check the hologram on your i-use card should you suspect it to be fraudulent</p>
                                    </div>
                                </div>
                            </div>
                    </section>
                    <section class="row smalltoppadding">
                        <div class="grey-dotted">
                        </div>
                    </section>
                    <section class="row" id="fees">
                        <div class="eight columns">
                            <h5 class="blacktext bold midbottommargin">Card Fees</h5>
                            <p class="greytext midbottompadding">
                                The fee summary below shows the main fees and limits of the i-use card. To download a fee schedule <a href="<?php echo get_template_directory_uri();?>/i-use%20cardholder%20agreement%20JUN%202015%20-%20Fee%20Schedule%20.pdf">click here</a>
                            </p>
                        </div>
                        <div class="two columns push_two midtoppadding smalltopmargin">
                            <div class="small primary btn">
                                <a href="#about">CONTACT US</a>
                            </div>
                        </div>
                    </section>
                    <section class="row smalltoppadding">
                        <div class="grey-dotted" style="margin:0 0 40px 0!important">
                        </div>
                    </section>
                    <section class="row">
                        <div id="card-fees">
                            <div class="left">
                                <table>
                                    <tr>
                                        <th style="text-align:left!important;padding:9px 10px!important">DESCRIPTION</th>
                                        <th style="text-align:left!important;padding:9px 10px!important">CURRENCY-USD</th>
                                    </tr>
                                    <tr>
                                        <th colspan="2" style="text-align:left!important;padding:9px 10px!important">ON APPLICATION</td>
                                    </tr>
                                    <tr>
                                        <td>Activation Fee</td>
                                        <td>Free</td>
                                    </tr>
                                    <tr>
                                        <td>Get PIN / PIN Change / PIN Reminder</td>
                                        <td>1.50</td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" style="text-align:left!important;padding:9px 10px!important">LOAD & TRANSFER FEES</td>
                                    </tr>
                                    <tr>
                                        <td>Card to Card Transfer (by SMS or Website)</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Bank/Telegraphic Transfer (TT)/Salary load</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" style="text-align:left!important;padding:9px 10px!important">LOAD AND TRANSFER LIMITS</td>
                                    </tr>
                                    <tr>
                                        <td>Maximum Load Per Transaction (Bank/Telegraphic Transfer/Salary only)</td>
                                        <td>20,000</td>
                                    </tr>
                                    <tr>
                                        <td>Maximum Card Balance (15K Euro equivalent)</td>
                                        <td>20,000</td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" style="text-align:left!important;padding:9px 10px!important">RETAIL PURCHASE FEES AND LIMITS</td>
                                    </tr>
                                    <tr>
                                        <td>Retail Purchase Transaction</td>
                                        <td>1.50</td>
                                    </tr>
                                    <tr>
                                        <td>Retail Transaction Refund</td>
                                        <td>1.50</td>
                                    </tr>
                                    <tr>
                                        <td>Declined Transaction Fee</td>
                                        <td>1.50</td>
                                    </tr>
                                    <tr>
                                        <td>Maximum POS & Online Daily Spend</td>
                                        <td>5,000</td>
                                    </tr>
                                    <tr>
                                        <th colspan="2" style="text-align:left!important;padding:9px 10px!important">ATM FEES AND LIMITS</td>
                                    </tr>
                                    <tr>
                                        <td>ATM Withdrawal - USD</td>
                                        <td>2.00%</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Min 3.50</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Max 7.50</td>
                                    </tr>
                                    <th colspan="2" style="text-align:left!important;padding:9px 10px!important">FOREIGN EXCHANGE CONVERSION FEE</td>
                                        </tr>
                                        <tr>
                                            <td>Foreign Exchange Markup (for transactions in a currency other than USD)</td>
                                            <td>3.00%</td>
                                        </tr>
                                </table>
                            </div>
                            <div class="right">
                                <p>This Fee Summary shows you the main fees and limits of the i-use card</p>
                                <p>Click to download a full <a href="<?php echo get_template_directory_uri();?>/i-use%20cardholder%20agreement%20JUN%202015%20-%20Fee%20Schedule%20.pdf">Fee Schedule</a> or the complete <a href="<?php echo get_template_directory_uri();?>/i-use%20cardholder%20agreement%20JUN%202015%20-%20TOC.pdf">Terms And Conditions</a></p>
                            </div>
                        </div>
                    </section>
                    <section class="row smalltoppadding">
                        <div class="grey-dotted">
                        </div>
                    </section>
                    <section class="row" id="faq">
                        <div class="eight columns">
                            <h5 class="blacktext bold midbottommargin">FAQs</h5>
                            <p class="greytext midbottompadding">
                                We’ve provided answers to many of the questions people ask about the i-use card. Got a question that isn't here? <a href="#about">Email us</a>
                            </p>
                        </div>
                        <div class="two columns push_two midtoppadding smalltopmargin">
                            <div class="small primary btn">
                                <a href="#about">CONTACT US</a>
                            </div>
                        </div>
                    </section>
                    <section class="row">
                        <div class="grey-dotted" style="margin:0 0 40px 0!important">
                        </div>
                    </section>
                    <section class="row">
                        <h5 class="blacktext bold midbottommargin" style="width:100%">i-use Card FAQs</h5>
                    </section>
                    <section class="row">
                        <div class="six columns">
                            <div id="accordion-container">
                                <h2 class="accordion-header">How does the i-use card work?</h2>
                                <div class="accordion-content">
                                    <p>
                                        The i-use card is a reloadable prepaid card that looks and functions just like any other VISA card without offering credit facility. Cards are activated, and provided a PIN, over the phone. You may use the card at any POS, online or ATM terminal displaying the VISA® trademark. In order to use the card, you must load funds onto the card. The value of a purchase is then deducted from the funds available on the card.
                                    </p>
                                </div>
                                <h2 class="accordion-header">Does my credit rating or bank account balance matter?</h2>
                                <div class="accordion-content">
                                    <p>
                                        No, you can apply for and obtain an i-use card regardless of your credit rating or bank account balance
                                    </p>
                                </div>
                                <h2 class="accordion-header">How do I manage my Prepaid Account?</h2>
                                <div class="accordion-content">
                                    <p>
                                        Cardholders can transact with and manage their card accounts with the ease of a mobile phone SMS, including making fund transfers, card loading, checking balances etc. The i-use online transacting platform enables all these operations to be performed conveniently
                                    </p>
                                </div>
                                <h2 class="accordion-header">How do I load funds onto the card?</h2>
                                <div class="accordion-content">
                                    <p>
                                        Cards may be loaded by a range of convenient means, including directly from bank accounts, from another i-use card and batch payroll payments. A card can be loaded over and over again and funds are available for use near real-time
                                    </p>
                                </div>
                                <h2 class="accordion-header">Is my account, with full transaction detail and history available for viewing?</h2>
                                <div class="accordion-content">
                                    <p>
                                        Yes, all account and transaction information is available 24/7 online via an account management facility. You can also check your balance and three last transactions anytime via SMS
                                    </p>
                                </div>
                                <h2 class="accordion-header">How secure are these cards? What if a card is lost/stolen?</h2>
                                <div class="accordion-content">
                                    <p>
                                        The cards can be personalised and a PIN is associated with every card. All payments are made through a secure channel. In the event that a card is lost or stolen it can be blocked immediately, locking the funds on the card, and replaced. Exposure to a loss is limited to the amount of funds that exist on the card at any point in time
                                    </p>
                                </div>
                                <h2 class="accordion-header">How does the mobile functionality work?</h2>
                                <div class="accordion-content">
                                    <p>
                                        For full information on the SMS functionality on your i-use card, please see <a href="#sms">SMS functionality</a>
                                    </p>
                                </div>
                                <h2 class="accordion-header">Can I block a card temporarily?</h2>
                                <div class="accordion-content">
                                    <p>
                                        Yes, you may lock a card temporarily and unlock it at your convenience using SMS. Please see the <a href="#sms">SMS Functionality</a> section for instructions
                                    </p>
                                </div>
                                <h2 class="accordion-header">How can I apply for a card?</h2>
                                <div class="accordion-content">
                                    <p>
                                        You can apply online by clicking Apply Now. You will need a clear scanned color copy of your Passport and Proof of Address (Utility bill, Rental Agreement or Bank Account) that is no more than 3 months old
                                    </p>
                                </div>
                                <h2 class="accordion-header">When will I receive my card?</h2>
                                <div class="accordion-content">
                                    <p>
                                        You should receive your i-use card within 14 working days of your application being approved. If you fail to receive your card after this please contact our customer support team, details of which can be found within the <a href="#about">contact section</a> of our site
                                    </p>
                                </div>
                                <h2 class="accordion-header">May I apply for multiple cards?</h2>
                                <div class="accordion-content">
                                    <p>
                                        The i-use card has a very high spending limit and therefore we have chosen to limit the amount of cards to two per person
                                    </p>
                                </div>
                                <h2 class="accordion-header">When can I start using my Card?</h2>
                                <div class="accordion-content">
                                    <p>
                                        Upon receipt of a prepaid card, cardholders must sign the back of the card in the box highlighted 'authorised signature' and then activate their card as per the instructions provided in the welcome pack. Cards must be activated over the phone before cardholders can access their funds or load funds onto their prepaid card
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="six columns">
                            <div id="accordion-container">
                                <h5></h5>
                                <h2 class="accordion-header">Is any interest earned on the prepaid account?</h2>
                                <div class="accordion-content">
                                    <p>
                                        There is no interest accrued on the prepaid funds
                                    </p>
                                </div>
                                <h2 class="accordion-header">What are the fees and terms and conditions?</h2>
                                <div class="accordion-content">
                                    <p>
                                        The full Terms and Conditions with fees you can get here: <a href="<?php echo get_template_directory_uri();?>/i-use%20cardholder%20agreement%20JUN%202015%20-%20TOC.pdf">Terms and Conditions</a></a>
                                    </p>
                                </div>
                                <h2 class="accordion-header">Do the cards have an expiry date?</h2>
                                <div class="accordion-content">
                                    <p>
                                        Yes, the i-use card expires after 3 years. If the cardholder is actively using the card, a replacement will be offered. The validity period is printed on the front of the card
                                    </p>
                                </div>
                                <h2 class="accordion-header">How do I get my PIN?</h2>
                                <div class="accordion-content">
                                    <p>
                                        Your PIN is retrieved through IVR. To activate your i-use card, have your physical card, and your access code ready. Then call +44(0)20 7281 6090 and follow the instructions
                                    </p>
                                </div>
                                <h2 class="accordion-header">What is the minimum balance I have to keep on the card?</h2>
                                <div class="accordion-content">
                                    <p>
                                        There is no minimum balance requirement on the i-use card
                                    </p>
                                </div>
                                <h2 class="accordion-header">What is 3D secure?</h2>
                                <div class="accordion-content">
                                    <p>
                                        3D Secure is a safety protocol developed by VISA to improve the security of online payments. It works as an added layer of security
                                    </p>
                                </div>
                                <h2 class="accordion-header">Why is my card declined at self service petrol stations when I have enough money to cover the bill?</h2>
                                <div class="accordion-content">
                                    <p>
                                        Self service petrol stations do not have the ability to check your balance online. For your security, we cannot authorise this type of transaction
                                    </p>
                                </div>
                                <h2 class="accordion-header">What happens if my application is declined?</h2>
                                <div class="accordion-content">
                                    <p>
                                        The cost of the application will be reversed back to your credit/debit card without extra cost
                                    </p>
                                </div>
                                <h2 class="accordion-header">Can I use my card overseas?</h2>
                                <div class="accordion-content">
                                    <p>
                                        You can use your i-use card anywhere in the world where the VISA Acceptance Mark is displayed
                                    </p>
                                </div>
                                <h2 class="accordion-header">How do I log on to my account?</h2>
                                <div class="accordion-content">
                                    <p>
                                        You can log on to your account here: <a href="https://www.secure.i-usecard.com/">Account Login</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="row smalltoppadding">
                        <div class="grey-dotted">
                        </div>
                    </section>
                    <section class="row" id="request">
                        <form id="request-form" name="request-form" method="POST">
                            <div class="six columns">
                                <h5 class="blacktext bold midbottommargin">Request cards</h5>
                                <div id="request-success" style="color:#eb8832"></div>
                                <div style="padding-right:10px">
                                    <div class="row">
                                        <dl class="field eight columns" style="width:100%">
                                            <dd>
                                                <label for="name">Your name*</label>
                                            </dd>
                                            <dt class="text"><input type="text" name="name" id="name"/></dt>
                                            <dd class="msg">You filled this out wrong.</dd>
                                        </dl>
                                    </div>
                                    <div class="row">
                                        <dl class="field eight columns" style="width:100%">
                                            <dd>
                                                <label for="company">Your company*</label>
                                            </dd>
                                            <dt class="text"><input type="text" name="company" id="company"/></dt>
                                            <dd class="msg">You filled this out wrong.</dd>
                                        </dl>
                                    </div>
                                    <div class="row">
                                        <dl class="field eight columns" style="width:100%">
                                            <dd>
                                                <label for="incorporation">Country of incorporation</label>
                                            </dd>
                                            <dt class="text"><input type="text" name="incorporation" id="incorporation"/></dt>
                                            <dd class="msg">You filled this out wrong.</dd>
                                        </dl>
                                    </div>
                                    <div class="row">
                                        <dl class="field eight columns" style="width:100%">
                                            <dd>
                                                <label for="needed">Number of cards needed</label>
                                            </dd>
                                            <dt class="text"><input type="text" name="needed" id="needed"/></dt>
                                            <dd class="msg">You filled this out wrong.</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <section class="row">
                                <div id="contact-holder">
                                    <div class="seven columns" data-role="form" style="width:100%">
                                        <h5 class="blacktext bold midbottommargin" style="opacity:0">Contacts us</h5>
                                        <div class="row">
                                            <dl class="field eight columns" style="width:100%">
                                                <dd>
                                                    <label for="email">Your email*</label>
                                                </dd>
                                                <dt class="text"><input type="text" name="email" id="email"/></dt>
                                                <dd class="msg">You filled this out wrong.</dd>
                                            </dl>
                                        </div>
                                        <div class="row">
                                            <dl class="field eight columns" style="width:100%">
                                                <dd>
                                                    <label for="phone">Your phone number*</label>
                                                </dd>
                                                <dt class="text"><input type="text" name="phone" id="phone"/></dt>
                                                <dd class="msg">You filled this out wrong.</dd>
                                            </dl>
                                        </div>
                                        <dl class="field row" style="width:100%">
                                            <dd>
                                                <label for="message">Describe how the cards will be used*</label>
                                            </dd>
                                            <dt class="textarea"><textarea name="message" id="message"></textarea></dt>
                                            <dd class="error msg">You filled this out wrong.</dd>
                                        </dl>
                                        <div class="row">
                                            <input class="medium primary btn whitetext submit-form" type="button" value="Submit" id="submit" />
                                        </div>
                        </form>
                        <div class="row midpadding" id="success">
                        </div>
                        </div>
                        </div>
                        </section>
                        <section class="row smalltoppadding">
                            <div class="grey-dotted">
                            </div>
                        </section>
                        <section class="row" id="about">
                            <div class="six columns">
                                <h5 class="blacktext bold midbottommargin">About i-use</h5>
                                <div style="padding-right:10px">
                                    <p>i-use is an extended payment consulting brand of CSP, offering integrated solutions for corporate clients with an emphasis on internet, international and instant transactions, through an innovative, co-branded prepaid card product.</p>
                                    <p>CSP has a wealth of experience within the payments sector for over 10 years. This experience gives us a greater understanding of the needs and wants of our SME and corporate clients, helping us to better tailor our solutions to meet these. The payments sector is fast-moving, and at CSP we understand this, which is why we work to continually improve our solutions to better adapt and keep pace with the industry.</p>
                                    <p>We offer our unique and innovative solutions to a range of different clients, including those whose business would typically be thought of as higher risk, such as forex trading , memberships and others. To find out more about our card solutions, our company and what we can offer you and your business please get in touch using the form provided.</p>
                                </div>
                                <div>
                                    <h5 class="blacktext bold midbottommargin">Words From Our Director</h5>
                                    <div class="carousel" data-transition="flip">
                                        <div>
                                            <div class="quote">
                                                <i class="icon-quote-left"></i>
                                                <h6 class="greytext">We're very passionate about prepaid solutions and we've been working hard during the past 10 years to expand the financial services that CSP can offer to our clients</h6>
                                                <i class="icon-quote-right"></i>
                                            </div>
                                            <div class="credit">
                                                <h5 class="blacktext">George Ito - Director, i-use</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <section class="row">
                                <div id="contact-holder">
                                    <div class="seven columns" data-role="form" style="width:100%">
                                        <h5 class="blacktext bold midbottommargin">Contacts us</h5>
                                        <div id="contact-success" style="color:#eb8832"></div>
                                        <form id="contact-form" name="contact-form" method="POST">
                                            <div class="row">
                                                <dl class="field eight columns">
                                                    <dd>
                                                        <label for="name">Your name*</label>
                                                    </dd>
                                                    <dt class="text"><input type="text" name="name" id="name"/></dt>
                                                    <dd class="msg">This field is required.</dd>
                                                </dl>
                                            </div>
                                            <div class="row">
                                                <dl class="field eight columns">
                                                    <dd>
                                                        <label for="email">Your E-mail*</label>
                                                    </dd>
                                                    <dt class="text"><input type="text" name="email" id="email"/></dt>
                                                    <dd class="msg">This field is required.</dd>
                                                </dl>
                                            </div>
                                            <div class="row">
                                                <dl class="field eight columns">
                                                    <dd>
                                                        <label for="subject">Subject</label>
                                                    </dd>
                                                    <dt class="text"><input type="text" name="subject" id="subject"/></dt>
                                                    <dd class="msg">This field is required.</dd>
                                                </dl>
                                            </div>
                                            <dl class="field row">
                                                <dd>
                                                    <label for="message">Your message*</label>
                                                </dd>
                                                <dt class="textarea"><textarea name="message" id="message"></textarea></dt>
                                                <dd class="error msg">This field is required.</dd>
                                            </dl>
                                            <div class="row">
                                                <input class="medium primary btn whitetext submit-form" type="button" value="Submit" data-form="contact" />
                                            </div>
                                        </form>
                                        <div class="row midpadding" id="success">
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </section>
                            </div>
                </div>
            </div>
            <?php get_footer();?>
