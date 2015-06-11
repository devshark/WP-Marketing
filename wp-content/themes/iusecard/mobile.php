<?php
/*
 * Template Name: Mobile Page
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php wp_title(' | ', true, 'left');?></title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

<link href="<?php echo get_template_directory_uri();?>/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />

<link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

<link href='<?php echo get_template_directory_uri();?>/mobile/css/style.css' rel='stylesheet' type='text/css'>

<style>
<?php echo get_field('custom_style', 47, false);?>
</style>

</head>

<body>


<header>
<div class="container">
<div class="left"></div>
<div class="mid"></div>
<div class="right"></div>
<div class="line"></div>
<div class="clearfix"></div>
<div class="menu">
<ul>
<li><a href="#offer">The Offer</a></li>
<li><a href="#usage">Card Usage</a></li>
<li><a href="#management">Account Management</a></li>
<li><a href="#loading">Loading Options</a></li>
<li><a href="#sms">SMS Functionality</a></li>
<li><a href="#loaded">Money Loaded</a></li>
<li><a href="#safety">Card Safety</a></li>
<li><a href="#fees">Fees</a></li>
<li><a href="#faqs">FAQs</a></li>
<li><a href="#about">About us</a></li>
<li><a href="#contact">Contact us</a></li>
</ul>
</div>
</div>
</header>

<div id="main">

<section id="offer">
<div class="cta">
<div class="left">
<h2>The i-use card is a $20,000 USD limit prepaid card solution offering automated payout and application functionality through our full-service API</h2>
</div>
<div class="right">
<div class="big-btn"><span><a href="#contact" style="color: #fff !important;">Contact us</a></span></div>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="line"></div>
<div class="double">
<div class="holder">
<h2>Card Genie support system</h2>
<p>i-use is a $20,000 USD load limit prepaid card-based corporate payout solution, allowing for the effective management and automation of payroll or payouts to your customers or clients.</p>
<p>The i-use card is supported by Card Genie, our card management platform that can be incorporated into your existing customer systems through our fully-documented API. Features of Card Genie include card management, extending to applications, approvals and loads, card upgrades, float management and more.</p>
<p>All i-use cards are fully funded and the monies held securely in a ring-fenced client account. To learn more see <a href="<?php echo get_template_directory_uri();?>/SECURITY%20OF%20CUSTOMER%20FUNDS.pdf" target="_blank">Security of Customer Funds</a>.</p>
</div>
<div class="holder">
<h2>Customisable Design</h2>
<p>The i-use card can be co-branded, giving it a unique design that works to better showcase your brand and provides reassurance and confidence to your existing customers with a card that bears a familiar logo.</p>
<p>i-use provides product management services for companies wanting to launch their own prepaid card brand, but who don’t necessarily want to develop or operate the card programme themselves.</p>
<p style="color: #000;"><strong>These are the general steps in evaluating your own card program:</strong></p>
<p>» Details and check list of the programme features» Sourcing of necessary partners (Card Printers, Issuer etc.)</p>
<p>» Card programme viability evaluation</p>
<p style="color: #000;"><strong>The client will need to provide:</strong></p>
<p>» Company Due Diligence documentation</p>
<p>» Prepaid programme feature specification» Prepaid programme business plan</p>
<p>When the programme is live, the Issuer will operate, maintain and enforce compliance of the prepaid programme while it is operational. The Client is responsible for the marketing of their programme, as outlined within the provided business plan. If there is a loyalty scheme the Client takes care of this part as well.</p>
</div>
</div>
<div class="clearfix"></div>
</section>

<section id="usage">
<div class="cta">
<div class="left">
<h2>Functionality: Card Usage</h2>
<p>Using the i-use card is easy and convenient</p>
</div>
<div class="right">
<div class="small-btn"><span><a href="#contact" style="color: #fff !important;">Contact us</a></span></div>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="line"></div>
<div class="quad">
<div class="double">
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/usage_world.png"></div>
<p>Use anywhere in the world where the VISA Acceptance Mark is displayed</p>
</div>
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/usage_atm.png"></div>
<p>Withdraw cash in any VISA enabled ATM</p>
</div>
<div class="clearfix"></div>
</div>
<div class="double">
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/usage_pin.png"></div>
<p>Change your PIN in any VISA enabled ATM that has PIN change available</p>
</div>
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/usage_swipe.png"></div>
<p>Swipe your card in any VISA enabled POS machine and enter your PIN</p>
</div>
<div class="clearfix"></div>
</div>
</div>
<div class="quad">
<div class="double">
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/usage_3dsecure.png"></div>
<p>Shop online using your iUse and enter your 3D securecode for online verification</p>
</div>
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/usage_currencies.png"></div>
<p>Your iUse card automatically converts to the local currency where you are</p>
</div>
<div class="clearfix"></div>
</div>
<div class="double">
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/usage_c2c.png"></div>
<p>Do a Card to Card money transfer to any other iUse cardholder by SMS or online</p>
</div>
<div class="clearfix"></div>
</div>
</div>
<div class="clearfix"></div>
</section>

<section id="management">
<div class="cta">
<div class="left">
<h2>Functionality: Account Management</h2>
<p>Transactions on your i-use card occur in real-time, giving you full control over your spending</p>
</div>
<div class="right">
<div class="small-btn"><span><a href="#contact" style="color: #fff !important;">Contact us</a></span></div>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="line"></div>
<div class="quad">
<div class="double">
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/management_statements.png"></div>
<p>Real time online statements</p>
</div>
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/management_atm.png"></div>
<p>Check your Balance online, at an ATM, or with our IVR and SMS systems</p>
</div>
<div class="clearfix"></div>
</div>
<div class="double">
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/management_track.png"></div>
<p>Track your expenses</p>
</div>
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/management_overdraft.png"></div>
<p>No overdrafts or overdraft fees</p>
</div>
<div class="clearfix"></div>
</div>
</div>
<p>In order to apply for a i-use card you do not require:</p>
<div class="quad">
<div class="double">
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/management_bank.png"></div>
<p>Have a bank account</p>
</div>
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/management_checks.png"></div>
<p>Undergo any credit checks</p>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</section>

<section id="loading">
<div class="cta">
<div class="left">
<h2>Functionality: Card Loading</h2>
<p>The i-use cardholder has several loading options available to them</p>
</div>
<div class="right">
<div class="small-btn"><span><a href="#contact" style="color: #fff !important;">Contact us</a></span></div>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="line"></div>
<div class="triple">
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/loading_sms.png"></div>
<p>Receive a Card to Card transfer from another i-use cardholder</p>
</div>
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/loading_bank.png"></div>
<p>Send a bank transfer to one of our accounts available in Europe, Asia, and Africa</p>
</div>
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/loading_missing.png"></div>
<p>Missing a loading option? You can query i-use about adding a specific loading option by contacting us</p>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</section>

<section id="sms">
<div class="cta">
<div class="left">
<h2>Functionality: SMS</h2>
<p>You can get several i-use card services straight to your phone using our SMS functionality</p>
</div>
<div class="right">
<div class="small-btn"><span><a href="#contact" style="color: #fff !important;">Contact us</a></span></div>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="line"></div>
<table class="table" cellpadding="0" cellspacing="0">
<tr>
<th>Function</th>
<th>Instruction</th>
<th>Example</th>
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
</section>

<section id="loaded">
<div class="cta">
<div class="left">
<h2>Security: Money Loaded</h2>
<p>The money you load to your i-use card is kept safe at all times through a number of safety features</p>
</div>
<div class="right">
<div class="small-btn"><span><a href="#contact" style="color: #fff !important;">Contact us</a></span></div>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="line"></div>
<div class="double">
<div class="holder">
<div class="left">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/loaded_funding.png"></div>
</div>
<div class="right">
<h3>100% Funding</h3>
<p>Your prepaid card is automatically loaded upon receipt of your funds</p>
</div>
<div class="clearfix"></div>
</div>
<div class="holder">
<div class="left">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/loaded_trust.png"></div>
</div>
<div class="right">
<h3>The Client Account</h3>
<p>When your funds are received, they are loaded into a client account, which is controlled by the Issuer. In order to protect your funds, i-use does not have access to this account. For more information, read about the <a href="http://i-usecard.com/SECURITY%20OF%20CUSTOMER%20FUNDS.pdf" target="_blank">Security of Customer Funds</a></p>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="double">
<div class="holder">
<div class="left">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/loaded_security.png"></div>
</div>
<div class="right">
<h3>Additional Security</h3>
<p>i-use is obligated to keep a certain deposit over and above the weekly settlement of all transactions on i-use cards. This provides additional security and protection to your loaded funds</p>
</div>
<div class="clearfix"></div>
</div>
<div class="holder">
<div class="left">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/loaded_reserves.png"></div>
</div>
<div class="right">
<h3>No Fractional Reserves</h3>
<p>As governed by the e-money laws in the UK and enforced by CashFlows Limited. i-use is not allowed to enable payments on the i-use card unless it is fully funded. In addition, i-use will never extend credit</p>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</section>

<section id="safety">
<div class="cta">
<div class="left">
<h2>Security: Card Safety</h2>
<p>The i-use card has a number of security features itegrated into it. These are to and vendors alike</p>
</div>
<div class="right">
<div class="small-btn"><span><a href="#contact" style="color: #fff !important;">Contact us</a></span></div>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="line"></div>
<p>The i-use ard has several security features integrated on the card. These are there to ensure that both cardholders and vendors know that the card is genuine, protecting both parties from fraud and unauthorised usage. The features on the iUse ard include:</p>
<div class="double">
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/front.png"></div>
</div>
<div class="holder">
<h3>Chip with encrypted PIN</h3>
<p>The i-use ard must be used with the PIN where a PIN terminal is available and is used to authorise the transaction</p>
<h3>Indent</h3>
<p>The i-use card does not have raised numbers to protect the cardholder from having their card copied in a Zip Zap machine</p>
<h3>3D Secure - Verified by VISA</h3>
<p>With Verified by VISA, you're protected whenever you make an online payment with your VISA card at over 300,000 websites across Europe</p>
</div>
<div class="clearfix"></div>
</div>
<div class="double">
<div class="holder">
<div class="img"><img src="<?php echo get_template_directory_uri();?>/mobile/img/back.png"></div>
</div>
<div class="holder">
<h3>Signature</h3>
<p>You must sign the back of your card when you receive it. An i-use ard is not valid unless signed</p>
<h3>CVV</h3>
<p>The CVV number is used to authenticate online transactions and is there for your security</p>
<h3>Electronic Use Only</h3>
<p>The i-use Card cannot be used if the Merchant is unable to verify that funds are available. This safeguards you from any unauthorised usage</p>
<h3>Visa Hologram</h3>
<p>The VISA dove hologram glimmers in different angles. Check the hologram if you suspect  that the card you are holding might be a fraudulent copy</p>
</div>
<div class="clearfix"></div>
</div>
</section>

<section id="fees">
<div class="cta">
<div class="left">
<h2>Card Fees</h2>
<p>The fee summary below shows the main fees and limits of the i-use ard. To download a fee schedule <a href="<?php echo get_template_directory_uri();?>/i-use%20cardholder%20agreement%20JUN%202015%20-%20Fee%20Schedule%20.pdf" target="_blank">click here</a></p>
</div>
<div class="right">
<div class="small-btn"><span><a href="#contact" style="color: #fff !important;">Contact us</a></span></div>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="line"></div>
<table class="table" cellpadding="0" cellspacing="0">
<tr>
<th style="text-align: left !important; padding: 9px 10px !important;">DESCRIPTION</th>
<th style="text-align: left !important; padding: 9px 10px !important;">CURRENCY-USD</th>
</tr>
<tr>
<th colspan="2" style="text-align: left !important; padding: 9px 10px !important;">ON APPLICATION</td>
</tr>
<tr>
<td>Activation Fee</td>
<td>Free</td>
</tr>
<tr>
<td>Get PIN / PIN Change / PIN Reminder</td>
<td>Free</td>
</tr>
<tr>
<th colspan="2" style="text-align: left !important; padding: 9px 10px !important;">LOAD & TRANSFER FEES</td>
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
<th colspan="2" style="text-align: left !important; padding: 9px 10px !important;">LOAD AND TRANSFER LIMITS</td>
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
<th colspan="2" style="text-align: left !important; padding: 9px 10px !important;">RETAIL PURCHASE FEES AND LIMITS</td>
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
<th colspan="2" style="text-align: left !important; padding: 9px 10px !important;">ATM FEES AND LIMITS</td>
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
<th colspan="2" style="text-align: left !important; padding: 9px 10px !important;">FOREIGN EXCHANGE CONVERSION FEE</td>
</tr>
<tr>
<td>Foreign Exchange Markup (for transactions in a currency other than USD)</td>
<td>3.00%</td>
</tr>
</table>
<p>This Fee Summary shows you the main fees and limits of the i-use are</p>
<p>Click to download a full <a href="<?php echo get_template_directory_uri();?>/i-use%20cardholder%20agreement%20JUN%202015%20-%20Fee%20Schedule%20.pdf" target="_blank">Fee Schedule</a> or the complete <a href="<?php echo get_template_directory_uri();?>/i-use%20cardholder%20agreement%20JUN%202015%20-%20TOC.pdf" target="_blank">Terms And Conditions</a></p>
</section>

<section id="faqs">
<div class="cta">
<div class="left">
<h2>FAQs</h2>
<p>We’ve provided answers to many of the questions people ask about the i-use card. Got a question that isn't here? <a href="#about">Email us</a></p>
</div>
<div class="right">
<div class="small-btn"><span><a href="#contact" style="color: #fff !important;">Contact us</a></span></div>
</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="line"></div>
<div class="holder">
<div class="question">
<h2>How does the Card work?</h2>
<div class="clearfix"></div>
</div>
<p>The i-use card is a reloadable prepaid card that looks and functions just like any other VISA card without offering a credit facility. Cards are activated and provided a PIN, over the phone. You may use the card at any POS, online or ATM terminal displaying the VISA® trademark. You must however load and have funds available on the card in order to use it. The value of a purchase is deducted from the funds available on the card</p>
</div>
<div class="holder">
<div class="question">
<h2>Does my credit rating or bank account balance matter?</h2>
<div class="clearfix"></div>
</div>
<p>No, you can apply for and obtain an i-use card regardless of your credit rating or bank account balance</p>
</div>
<div class="holder">
<div class="question">
<h2>How do I manage my Prepaid Account?</h2>
<div class="clearfix"></div>
</div>
<p>Cardholders can transact with and manage their card accounts with the ease of a mobile phone SMS, including making fund transfers, card loading, checking balances etc. The i-use online transacting platform enables all these operations to be performed conveniently</p>
</div>
<div class="holder">
<div class="question">
<h2>How do I load funds onto the card?</h2>
<div class="clearfix"></div>
</div>
<p>Cards may be loaded by a range of convenient means, including directly from bank accounts, from another i-use card and batch payroll payments. A card can be loaded over and over again and funds are available for use instantaneously</p>
</div>
<div class="holder">
<div class="question">
<h2>Is my account, with full transaction detail and history available for viewing?</h2>
<div class="clearfix"></div>
</div>
<p>Yes, all account and transaction information is available 24/7 online via an account management facility. You can also check your balance and three last transactions anytime via SMS</p>
</div>
<div class="holder">
<div class="question">
<h2>How secure are these cards? What if a card is lost/stolen?</h2>
<div class="clearfix"></div>
</div>
<p>The cards can be personalised and a PIN is associated with every card. All payments are made through a secure channel. In the event that a card is lost or stolen it can be blocked immediately, locking the funds on the card, and replaced. Exposure to a loss is limited to the amount of funds that exist on the card at any point in time</p>
</div>
<div class="holder">
<div class="question">
<h2>How do I load funds onto the card?</h2>
<div class="clearfix"></div>
</div>
<p>Cards may be loaded by a range of convenient means, including directly from bank accounts, from another iUse card and batch payroll payments. A card can be loaded over and over again and funds are available for use instantaneously</p>
</div>
<div class="holder">
<div class="question">
<h2>How does the mobile functionality work?</h2>
<div class="clearfix"></div>
</div>
<p>For full information on the SMS functionality on your i-use card, please see SMS functionality</p>
</div>
<div class="holder">
<div class="question">
<h2>Can I block a card temporarily?</h2>
<div class="clearfix"></div>
</div>
<p>Yes, you may lock a card temporarily and unlock it at your convenience using SMS. Please see the SMS section for instructions SMS functionality</p>
</div>
<div class="holder">
<div class="question">
<h2>How can I apply for a card?</h2>
<div class="clearfix"></div>
</div>
<p>You can apply online by clicking Apply Now. You will need a clear scanned color copy of your Passport and Proof of Address (Utility bill, Rental Agreement or Bank Account) that is no more than 3 months old</p>
</div>
<div class="holder">
<div class="question">
<h2>When will I receive my card?</h2>
<div class="clearfix"></div>
</div>
<p>You will receive your i-use card within 14 working days of your application being approved. If you fail to receive your card after this please contact our customer support team, details of which can be found on our contact us page</p>
</div>
<div class="holder">
<div class="question">
<h2>May I apply for multiple cards?</h2>
<div class="clearfix"></div>
</div>
<p>The i-use ard has a very high spending limit and therefore we have chosen to limit the amount of cards to one per person</p>
</div>
<div class="holder">
<div class="question">
<h2>When can I start using my Card?</h2>
<div class="clearfix"></div>
</div>
<p>Upon receipt of a prepaid card, cardholders must sign the back of the card in the box highlighted 'authorised signature' and then activate their card as per the instructions provided in the welcome pack. Cards must be activated over the phone before cardholders can access their funds or load funds onto their prepaid card</p>
</div>
</section>

<section id="about">
<div class="double">
<div class="holder">
<h2>About i-use</h2>
<p>i-use is an extended payment consulting brand of CSP, offering integrated solutions for corporate clients with an emphasis on internet, international and instant transactions, through an innovative, co-branded prepaid card product.</p>
<p>CSP has a wealth of experience within the payments sector for over 10 years. This experience gives us a greater understanding of the needs and wants of our SME and corporate clients, helping us to better tailor our solutions to meet these. The payments sector is fast-moving, and at CSP we understand this, which is why we work to continually improve our solutions to better adapt and keep pace with the industry.</p>
<p>We offer our unique and innovative solutions to a range of different clients, including those whose business would typically be thought of as higher risk, such as forex trading , memberships and others. To find out more about our card solutions, our company and what we can offer you and your business please get in touch using the form provided.</p>
</div>
<div class="holder">
<h2>Words From Our Director</h2>
<div class="quote">
<p>We're very passionate about prepaid solutions and we've been working hard during the past 10 years to expand the financial services that CSP can offer to our clients</p>
<h3>George Ito - Director, i-use</h3>
</div>
</div>
<div class="clearfix"></div>
</section>

<section id="contact">
<h2>Contact Us</h2>

<div id="contact-success" style="color: #eb8832;"></div>
		<form id="contact-form" name="contact-form" method="POST">
			<div class="row">
				<dl class="field eight columns">
					<dd><label for="name">Your name*</label></dd>
					<dt class="text"><input type="text" name="name" id="name"/>
					</dt>
					<dd class="msg">This field is required.</dd>
				</dl>
			</div>
			<div class="row">
				<dl class="field eight columns">
					<dd><label for="email">Your E-mail*</label></dd>
					<dt class="text"><input type="text" name="email" id="email"/>
					</dt>
					<dd class="msg">This field is required.</dd>
				</dl>
			</div>
			<div class="row">
				<dl class="field eight columns">
					<dd><label for="subject">Subject</label></dd>
					<dt class="text"><input type="text" name="subject" id="subject"/>
					</dt>
					<dd class="msg">This field is required.</dd>
				</dl>
			</div>
			<dl class="field row">
				<dd><label for="message">Your message*</label></dd>
				<dt class="textarea">
				<textarea name="message" id="message"></textarea></dt>
				<dd class="error msg">This field is required.</dd>
			</dl>
			<div class="row">
				<input class="medium primary btn whitetext submit-form" type="button" value="Submit" data-form="contact" />
			</div>
		</form>
		<!-- END FORM -->
		<div class="row midpadding" id="success"></div>

</section>

</div>


<footer style="width:90%; margin:0 auto;">
<!-- bottom footer FCA disclaimer section -->
<div class="black container midpadding">
	<section class="row smalltoppadding">
	<!-- FCA Discalimer-->
	<div class="fourteen columns">
		<p class="smallfont whitetext disctext">
			 This card is issued by CashFlows®. CashFlows® is a trading name of the Voice Commerce Limited. Voice Commerce Limited is a wholly owned subsidiary of Voice Commerce Group Limited and is authorised by the Financial Conduct Authority under the Electronic Money Regulations 2011 (register reference 900006) for the issuing of electronic money and the provision of payment services. 
             <br>
             <br>
             © <?php echo date('Y');?> Card Service Provider
		</p>
	</div>
	</section>
</div>

<script>window.template_uri = '<?php echo get_template_directory_uri();?>';</script>
<script src="<?php echo get_template_directory_uri();?>/mobile/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/mobile/js/script.js"></script>

<script>
<?php
	echo str_replace( '//$/','/\/$/', 
		str_replace( '/^//','/^\//', 
			html_entity_decode(
				get_field('custom_script', 47, false)
			, ENT_QUOTES)
		)
	);
?>
</script>

</footer>

</body>
</html>

