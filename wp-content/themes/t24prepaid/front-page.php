<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


<header> 

<section class="splash-banner">
	<div class="pattern-wrap color1">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 wow fadeInUp"> <a href="index.html" class="splash-icon"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/splash_icon.png" width="350px" alt=""> </a>
					<h1 class="splash-heading uppercase">We Deliver Prepaid Financial Products</h1>
					<div class="ticker">
						<hr>
						<ul id="vertical-ticker" class="vertical-ticker">
							<li>Prepaid Card Programs</li>
							<li>Whitelabel Prepaid Solutions</li>
						</ul>
						<hr>
					</div>
					<div class="bouncing-arrow"><i class="fa fa-chevron-down"></i></div>
				</div>
			</div>
		</div>
	</div>
</section>
	

<div class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_dark.png" alt="Insperia" class="logo-icon"> </a> 
        </div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown active"> <a onclick="$('html,body').animate({scrollTop:0},2e3);ga('send','event','Menu','Click','Home');" > Home </a></li>
				<li class="dropdown"> <a onclick="goToByScroll(1,0);ga('send','event','Menu','Click','Overview');" onClick="goToByScroll(1,0)"> Overview </a></li>
				<li class="dropdown"> <a onclick="goToByScroll(3,0);ga('send','event','Menu','Click','Payout Management');" onClick="goToByScroll(3,0)"> Payout Management </a></li>
				<li class="dropdown"> <a onclick="goToByScroll(4,0);ga('send','event','Menu','Click','Card Director');" onClick="goToByScroll(4,0)"> Card Director </a></li>
				<li class="dropdown"> <a onclick="goToByScroll(5,1);ga('send','event','Menu','Click','Features');" data-toggle="dropdown" onclick="goToByScroll(5,1)"> Features </a>
					<ul class="dropdown-menu">
						<li> <a onClick="goToByScroll(5,1);ga('send','event','Menu','Click','Features/Card Usage');"> Card Usage </a> </li>
						<li> <a onClick="goToByScroll(5,2);ga('send','event','Menu','Click','Features/Account Management');"> Account Management </a> </li>
						<li> <a onClick="goToByScroll(5,3);ga('send','event','Menu','Click','Features/SMS Functionality');"> SMS Functionality</a> </li>
                   		<li> <a onClick="goToByScroll(5,4);ga('send','event','Menu','Click','Features/Card Security');"> Card Security</a> </li>
                    	<li> <a onClick="goToByScroll(5,5);ga('send','event','Menu','Click','Features/Money Loaded');"> Money Loaded</a> </li>
					</ul>
				</li>
          		<li> <a onClick="goToByScroll(6);ga('send','event','Menu','Click','Our Cards');"> Our Cards </a> </li>
				<li> <a onClick="goToByScroll(8);ga('send','event','Menu','Click','Contact');"> Contact </a> </li>
			</ul>
		</div>
	</div>
</div>
</header>

<section class="home-content-wrap">

<section class="section bg-right iMac" data-sectionnum="1">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 wow fadeInUp">
				<h2 class="h1">Setting Guidelines &amp; Standards for <span class="stronger">Prepaid Cards &amp; Support Services</span>.</h2>
				<p>A prepaid card program is nothing without it's supporting services, We at T24 take particular pride in offering supporting applications and remote access capabilities, in order to make truly professional prepaid card product</p>
				<a title="About insperia bootstrap theme" class="btn btn-primary btn-xl with-icon" onClick="goToByScroll(2,0);ga('send','event','Page-Content','Click','Explore');"> Explore <i class="fa fa-leaf"></i></a>
			</div>
		</div>
	</div>   
</section>
    
<hr class="xsmall">
      
<section class="section card-features" data-sectionnum="2">
    <div class="container">
		<div class="row" style="padding-top: 80px;">
			<div class="col-md-4 col-sm-4 from-bottom delay-1400">
				<div class="wow fadeInUp animated icon-holder" style="width: 184px;">
					<div style="height: 64px;">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/visalogo.png" style="height: 48px; margin-top: 10px;">
                    </div>
				</div>
				<div class="content">
					<h3 class="strong text-center wow fadeInUp animated">Visa Prepaid Card</h3>
					<p class="wow fadeInUp animated">Reloadable payout cards that work anywhere the Visa trademark is displayed</p>
				</div>
			</div>
            <div class="col-md-4 col-sm-4 from-bottom delay-1400">
				<div class="wow fadeInUp animated icon-holder" style="width: 55px;">
					<i class="fa fa-globe" style="font-size: 64px;"></i>
				</div>
				<div class="content">
					<h3 class="strong text-center wow fadeInUp animated">Use Worldwide</h3>
					<p class="wow fadeInUp animated">Can be used online, in-store or at ATMs in over 179 countries worldwide</p>
				</div>
			</div>
            <div class="col-md-4 col-sm-4 from-bottom delay-1400">
				<div class="wow fadeInUp animated icon-holder" style="width: 55px;">
					<i class="fa fa-clock-o" style="font-size: 64px;"></i>
				</div>
				<div class="content">
					<h3 class="strong text-center wow fadeInUp animated">Instant Payouts</h3>
					<p class="wow fadeInUp animated">Send funds to your investors instantly, worldwide, at lower fees with immediate customer satisfaction</p>
				</div>
			</div>
    	</div>
       <div class="row" style="padding-top: 40px;">
			<div class="col-md-4 col-sm-4 from-bottom delay-1400">
				<div class="wow fadeInUp animated icon-holder" style="width: 55px;">
					<i class="fa fa-lock" style="font-size: 56px;"></i>
				</div>
				<div class="content">
					<h3 class="strong text-center wow fadeInUp animated">Safe and Secure</h3>
					<p class="wow fadeInUp animated">All our programs are fully EMV compliant with Chip and PIN technology</p>
				</div>
			</div>
            <div class="col-md-4 col-sm-4 from-bottom delay-1400">
				<div class="wow fadeInUp animated icon-holder" style="width: 59px;">
					<i class="fa fa-wrench" style="font-size: 56px;"></i>
				</div>
				<div class="content">
					<h3 class="strong text-center wow fadeInUp animated" style="font-size: font-size: 32px;">Fully Documented API</h3>
					<p class="wow fadeInUp animated">Integrate Card Director seamlessly into your existing web applications and systems</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 from-bottom delay-1400">
				<div class="wow fadeInUp animated icon-holder" style="width: 56px;">
					<i class="fa fa-life-ring" style="font-size: 56px;"></i>
				</div>
				<div class="content">
					<h3 class="strong text-center wow fadeInUp animated">24/7 Support</h3>
					<p class="wow fadeInUp animated">Dedicated first and second line cardholder support plans available</p>
				</div>
			</div>
		</div>
	</div>
</section>
     
<section id="payout-management-parallax" class="section overlay-dark" data-sectionnum="3" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="-250">
	<div class="container">
		<h3 class="stronger text-center wow fadeInUp">Payout Management</h3>
	</div>
</section>
        
<section class="section payout-management">
    <div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 wow fadeInUp">
				<div class="icon-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bankicon.png" style="width: 50%;"></div>
				<p>Wire the necessary cardholder funds directly to the issuer. T24 never has access to these funds, they are instead held securely by the issuer in a ring-fenced trust account with HSBC (UK). Learn more about the <a href="download/Security of cardholder funds.pdf" style="color: #46a694;">security of customer funds</a>.</p>
    		</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp">
				<div class="icon-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/databaseicon.png" style="width: 50%;"></div>
				<p>Through encrypted API calls with end-to-end validation, you can securely load as many cards as you want at any given time, including weekends and bank holidays.</p>
    		</div>
			<div class="col-md-4 col-sm-4 wow fadeInUp">
 				<div class="icon-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/cardicon.png" style="width: 60%;"></div>
   				<p>Cardholders receive a notification that their card has been loaded and that it is now ready for spending.</p>
    		</div>
    	<div class="row">
    		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/payoutmanagement.png" style="width: 100%;">
    	</div>   
	</div>
</section>

<section id="system-parallax" class="section overlay-dark" data-sectionnum="3" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="-250">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12 fact wow fadeInLeft"> 
            	<i class="fa fa-database"></i>
				<p class="lead">System Uptime</p>
				<h2 class="stronger fact" data-perc="99.9"><span class="factor">0</span></h2>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 fact wow fadeInUp"> 
            	<i class="fa fa-clock-o"></i>
				<p class="lead">Transactions/Sec</p>
				<h2 class="stronger fact" data-perc="10000"><span class="factor">0</span></h2>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 fact wow fadeInUp"> 
            	<i class="fa fa-globe"></i>
				<p class="lead">Countries</p>
				<h2 class="stronger fact" data-perc="200"><span class="factor">0</span></h2>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 fact wow fadeInRight"> 
            	<i class="fa fa-save"></i>
				<p class="lead">Recovery Sites</p>
				<h2 class="stronger fact" data-perc="4"><span class="factor">0</span></h2>
			</div>
		</div>
	</div>
</section>
    
<section class="section card-director" data-sectionnum="4">
    <div class="container">
		<div class="row">
			<h3 class="strong text-center wow fadeInUp animated">Card Director</h3>
			<p class="text-center wow fadeInUp animated">The card director platform combines with our API services to provide you with a full card management solution</p>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 wow fadeInLeft animated">
				<h3 class="strong">Managing Your Cards</h3>
				<p>You can search for cards issued under your merchant profile by card ID or client card reference, which is the reference you can assign to cards in order to easily identify them. This could be a membership number, employee number, or indeed anything else. Once you’ve found a card you can individually load it with the amount you choose.</p>
				<p>These features are available through the Card Director interface or remotely via our API.</p>	
			</div>
		<div class="col-md-6 col-sm-6">
			<img class="wow fadeInRight animated" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/carddirector001.png">
		</div>
	</div>
   	<div class="row">
   		<div class="col-md-6 col-sm-6">
 			<img class="wow fadeInLeft animated" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/carddirector002.png">
   		</div>
    	<div class="col-md-6 col-sm-6 wow fadeInRight animated">
    		<h3 class="strong">Batch Card Loads</h3>
			<p>Instead of individually loading cards you can prepare a batch load file and import this into the card director system.</p>
			<p>After security parameters and duplicate file verification is complete, all loads will be processed at once. There is no limitation on the number of card that can be loaded from a batch file.</p>
			<p>This feature is also supported within our API</p>
    	</div>
    </div>
   	<div class="row">
    	<div class="col-md-6 col-sm-6 wow fadeInLeft animated">
    		<h3 class="strong">Full Cleint Reconciliation</h3>
			<p>The reconciliation report records all events that change the balance of your float account, from loads, to fee deductions, and of course funding of the float account. Load history is available all the down to individual card level.</p>
			<p>Read more about funding the float account in the payout management section</p>	
    	</div>
    	<div class="col-md-6 col-sm-6">
    		<img class="wow fadeInRight animated" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/carddirector003.png">
    	</div>
    </div>
    <div class="row">
    	<div class="col-md-6 col-sm-6">
    		<img class="wow fadeInLeft animated" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/carddirector004.png">
    	</div>
    <div class="col-md-6 col-sm-6 wow fadeInRight animated">
    	<h3 class="strong">Managing Your System Remotely</h3>
		<p>Our full service API provides you with powerful integration options that link directly to your backend systems, allowing you to seamlessly communicate with and query our database regarding card activity in real-time.</p>
		<h3 class="strong sub-heading">API Features</h3>
		<p><span><i class="fa fa-check-square"></i></span>&nbsp;&nbsp;<strong>Card Application</strong> - includes KYC submission and different card types</p>
		<p><span><i class="fa fa-check-square"></i></span>&nbsp;&nbsp;<strong>Cardholder Balance Enquiry</strong> - return balance of a particular card</p>
		<p><span><i class="fa fa-check-square"></i></span>&nbsp;&nbsp;<strong>Card Status Enquiry</strong> - Returns status of an issued card</p>
		<p><span><i class="fa fa-check-square"></i></span>&nbsp;&nbsp;<strong>Notification Call Back</strong> - Informs merchant of low account balance</p>
		<p>...and much more</p>
   	</div>
</div>
    
    
<div class="row">
	<div class="col-md-6 col-sm-6 wow fadeInLeft animated">
		<h3 class="strong">T24 Prepaid Mobile App</h3>
		<p>Our app is an extension to our cardholder services, giving cardholders a quicker, secure way of accessing their account on the go, from their mobile devices. The app can be offered as-is or fully customised to reflect the look and feel of your own branding.</p>
    	<h3 class="strong sub-heading">Mobile App Features</h3>
    	<p><span><i class="fa fa-check-square"></i></span>&nbsp;&nbsp;Retrieve account balance information</p>
		<p><span><i class="fa fa-check-square"></i></span>&nbsp;&nbsp;Review card statements and recent transaction history</p>
		<p><span><i class="fa fa-check-square"></i></span>&nbsp;&nbsp;Report card lost or stolen</p>
	</div>
   	<div class="col-md-6 col-sm-6">
    	<div class="wow fadeInRight animated">
    		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/carddirector005.png">
    	<div class="app-buttons">
    		<div class="left"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/appstorebtn.png"></div>
        	<div class="right"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/googleplaybtn.png"></div>
        	<div class="clearfix"></div>
    	</div>
		<div class="clearfix"></div>    
    </div>
</div>
</div>
</div>
</section>
    
<section id="card-features-parallax" class="section overlay-dark" data-sectionnum="5" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="-250">
	<div class="container">
		<h3 class="stronger text-center wow fadeInUp">Card Features</h3>
	</div>
</section>   
    
<section class="section custom-tabs">
	<div class="container">
		<ul id="myTab" class="nav nav-tabs wow fadeInUp">
			<li class="active"> <a onclick="ga('send','event','Page-Content','Tabs','Functionality/Card Usage');" href="#one" data-toggle="tab"> <i class="fa fa-paperclip"></i>Card Usage </a> </li>
			<li> <a onclick="ga('send','event','Page-Content','Tabs','Functionality/Account Management');" href="#two" data-toggle="tab"> <i class="fa fa-compass"></i> Account Management </a> </li>
			<li> <a onclick="ga('send','event','Page-Content','Tabs','Functionality/SMS Functionality');" href="#three" data-toggle="tab"> <i class="fa fa-map-marker"></i> SMS Functionality </a> </li>
			<li> <a onclick="ga('send','event','Page-Content','Tabs','Functionality/Card Security');" href="#four" data-toggle="tab"> <i class="fa fa-gear"></i> Card Security </a> </li>
			<li> <a onclick="ga('send','event','Page-Content','Tabs','Functionality/Money Loaded');" href="#five" data-toggle="tab"> <i class="fa fa-dashboard"></i> Money Loaded </a> </li>
		</ul>
		<div id="myTabContent" class="tab-content" style="margin-bottom: 0;">
			<div class="tab-pane fade in active" id="one" style="margin-bottom: 0;">
				<div class="row" style="margin-top: 40px;">
                	<div class="col-md-12">
						<h3 class="text-center">Card Usage</h3>
						<p class="text-center">Enjoy the ease and convenience of the T24 PayVault VISA Prepaid Card</p>
					</div>
				</div>
                <div class="row" style="margin-top: 60px;">
					<div class="col-md-4">
    					<div class="icon-first"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/visalogomini.png" style="width: auto; height: auto;"></div>
						<p class="text">Use it anywhere in the world where the VISA Acceptance Mark is displayed</p>
					</div>

					<div class="col-md-4">
						<div class="icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/atmicon.png" style="width: 38px; height: auto;"></div>
						<p class="text">Withdraw cash at any VISA enabled ATM</p>
					</div>
                    
                    <div class="col-md-4">
						<div class="icon"><i class="fa fa-credit-card" style="font-size: 36px; width: 100%;"></i></div>
						<p class="text">Swipe your card in any VISA enabled POS machine and enter your PIN</p>
					</div>
				</div>
                <div class="row">
					<div class="col-md-4">
						<div class="icon"><i class="fa fa-shopping-cart" style="font-size: 36px;"></i></div>		
                        <p class="text">Shop online using your T24 PayVault VISA and enter your 3D secure code for verification</p>
					</div>

					<div class="col-md-4">
						<div class="icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/currenciesicon.png" style="width: 42px; height: auto;"></div>
						<p class="text">Your T24 PayVault Card automatically converts to the local currency wherever you are</p>
					</div>
                    
                    <div class="col-md-4">
						<div class="icon"><i class="fa fa-random" style="font-size: 36px;"></i></div>
						<p class="text">Do a Card to Card money transfer to any other T24 PayVault Cardholder by SMS or online</p>
					</div>
				</div>
			</div>
            
            <div class="tab-pane fade" id="two" style="margin-bottom: 0;">
            	<div class="row" style="margin-top: 40px;">
                	<div class="col-md-12">
						<h3 class="text-center">Account Management</h3>
						<p class="text-center">Enjoy the ease and convenience of the T24 PayVault VISA Prepaid Card</p>
					</div>
				</div>
            	<div class="row" style="margin-top: 60px;">
					<div class="col-md-6 col-xs-12">
						<div class="row">  
                			<div class="col-md-6">
								<div class="icon"><i class="fa fa-desktop" style="font-size: 36px;"></i></div>
								<p class="text">Up-to-the-minute online statements that make it easy to track expenses</p>
							</div>
							<div class="col-md-6">
								<div class="icon"><i class="fa fa-mobile" style="font-size: 36px;"></i></div>
								<p class="text">On-the-go access to your account that lets you check your balance online, via SMS, at ATMs, or IVR</p>
							</div>
                    	</div>
                    	<div class="row">
							<div class="col-md-6">
								<div class="icon"><i class="fa fa-line-chart" style="font-size: 36px;"></i></div>
								<p class="text">Track your expenses</p>
							</div>
                    		<div class="col-md-6">
								<div class="icon"><i class="fa fa-refresh" style="font-size: 36px;"></i></div>
								<p class="text">Only spend what is loaded</p>
							</div>
                    	</div>
                    </div>
				<div class="col-md-6 col-xs-12">
                <div class="row">
                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/iphone_statement.png" style="width: 100%;">
                </div>
			</div>
		</div>
	</div>
            
            
            
            
            
			<div class="tab-pane fade" id="three" style="margin-bottom: 0;">
            
            
             <div class="row" style="margin-top: 40px;">
                	<div class="col-md-12">
						<h3 class="text-center">Mobile Functionality</h3>
						<p class="text-center">We offer mobile services, including SMS functionality and a mobile application that give cardholders a range of features that they can access whilst on the go.</p>
					</div>
				</div>
            
            <div class="row" style="margin-top: 60px;">
            
            
                	<div class="col-md-6">
<h4>SMS functionality</h4>
<p>With our SMS functionality cardholders are able to access a number of cardholder services by simply sending a message. These services include card balance queries, last 3 transactions, lock/unlock card, card to card transfer and to turn on/off low balance notifications.</p>
<p>To use SMS functionality see the table below:</p>

<table>
<tr>
<th>Function</th>
<th>Instruction</th>
<th>Example</th>
</tr>
<tr>
<td style="padding-top: 20px;">The card balance</td>
<td style="padding-top: 20px;">TRA BAL ACCESSCODE [LAST 4 OF CARD]</td>
<td style="padding-top: 20px;">TRA BAL 123456 1111</td>
</tr>
<tr>
<td style="padding: 10px 0;">Last 3 transactions</td>
<td style="padding: 10px 0;">TRA TXN ACCESSCODE [LAST 4 OF CARD]</td>
<td style="padding: 10px 0;">TRA TXN 123456 1111</td>
</tr>
<tr>
<td style="padding: 10px 0;">Lock card</td>
<td style="padding: 10px 0;">TRA LOCK ACCESSCODE [LAST 4 OF CARD]</td>
<td style="padding: 10px 0;">TRA LOCK 123456 1111</td>
</tr>
<tr>
<td style="padding: 10px 0;">Unlock card</td>
<td style="padding: 10px 0;">TRA UNLOCK ACCESSCODE [LAST 4 OF CARD]</td>
<td style="padding: 10px 0;">TRA UNLOCK 123456 1111</td>
</tr>
<tr>
<td style="padding: 10px 0;">Card to Card transfer</td>
<td style="padding: 10px 0;">TRA XFER AMOUNT TO MOBILE ACCESSCODE [LAST 4 OF CARD]</td>
<td style="padding: 10px 0;">TRA XFER 20 TO +447000000000 123456 1111</td>
</tr>
<tr>
<td style="padding: 10px 0;">Stop notification</td>
<td style="padding: 10px 0;">TRA STOP [LAST 4 OF CARD]</td>
<td style="padding: 10px 0;">TRA STOP 1111</td>
</tr>
<tr>
<td style="padding: 10px 0;">Stop all notifications</td>
<td style="padding: 10px 0;">TRA STOP ALL [LAST 4 OF CARD]</td>
<td style="padding: 10px 0;">TRA STOP ALL 1111</td>
</tr>
</table>
</p>
                    </div>
                    <div class="col-md-6">
            		<h4>Mobile Application</h4>
					<p>Our mobile application is available on both iOS and Android devices and is available for download from within each of these operating systems respective app stores. The application can be offered to your cardholders as is, or can be rebranded at an additional cost to you, the program owner.</p> 
					<p>The current functionality of our mobile application includes the following:</p>
					<ul>
                    <li>Report card lost or stolen</li>
					<li>Access to account balance, open to buy (OTB) balance and statements</li>
                    </ul>
					<p>Our application has been developed and is fully supported by our in-house development team, who will be working to bring updates and more functionality to it in the future.</p>
                    </div>
            
				
			</div>
            
            </div>
            
            
            
			<div class="tab-pane fade" id="four" style="margin-bottom: 0;">
				
                 <div class="row" style="margin-top: 40px;">
                	<div class="col-md-12">
						<h3 class="text-center">Card Security</h3>
						<p class="text-center">Enjoy the ease and convenience of the T24 PayVault VISA Prepaid Card</p>
					</div>
				</div>
            
				<div class="row" style="margin-top: 60px;">
                
					<div class="col-md-4 col-xs-12">
                    
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/payvault-cardsafety-front.png" style="width: 100%;">
                    
                    </div>
                    
                    <div class="col-md-8 col-xs-12">
                    
                    <h4>Chip with Encrypted PIN</h4>
					<p>The T24 PayVault VISA Card must be used at a PIN-enabled terminal and your personal PIN code is used to authorise any transaction.</p>
					<h4>Flat Numbers</h4>
					<p>The T24 PayVault Card does not have raised numbers. This protects against the possibility of the card being copied in a Zip Zap machine. You can still feel the numbers with the Indent printing technique.</p>
					<h4>3D Secure Verified by VISA</h4>
					<p>With Verified by VISA, you're protected whenever you make an online payment with your VISA card at more than 300,000 websites across Europe.</p>
                    
                    </div>
                    
                </div>
                
                <div class="row">
                
					<div class="col-md-4 col-xs-12">
                    
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/payvault-cardsafety-back.png" style="width: 100%;">
                    
                    </div>
                    
                    <div class="col-md-8 col-xs-12">
                    
                    <h4>Signature</h4>
					<p>You must sign your card on the back when you receive it. A T24 PayVault VISA Card is not valid unless signed.</p>
					<h4 style="margin-top: 45px;">CVV</h4>
					<p>The CVV number is used to authenticate online transactions and is there for your security.</p>
					<h4 style="margin-top: 45px;">Electronic Use Only</h4>
					<p>The T24 PayVault VISA Card cannot be used if the Merchant is unable to verify that the funds are available on the card. This will safeguard you from any unauthorised usage.</p>
					<h4>VISA Hologram</h4>
					<p>The VISA dove hologram glimmers in different angles. Check the hologram if you suspect that the card you are holding might be fraudulent.</p>
                    
                    </div>
                    
                </div>
                
			</div>
			<div class="tab-pane fade" id="five" style="margin-bottom: 0;">
				
                
                <div class="row" style="margin-top: 40px;">
                	<div class="col-md-12">
						<h3 class="text-center">Money Loaded</h3>
						<p class="text-center">Our issuer is fully FCA regulated. Security of cardholder funds is our top priority</p>
					</div>
				</div>
            
				<div class="row" style="margin-top: 60px;">
					<div class="col-md-3 col-xs-12">
                    <div class="icon-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/moneyloaded1.png" style="width: 120px; margin-top: 10px;"></div>
                    	<h4>100% Funding of the Card</h4>
						<p>Your PayVault VISA prepaid card is automatically loaded upon receipt of your funds.</p>
                    </div>
                    <div class="col-md-3 col-xs-12">
                    <div class="icon-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/moneyloaded2.png" style="width: 120px;
margin-top: 10px;"></div>
                    	<h4>The Client Account</h4>
						<p>When your funds are received, they are loaded into a client account, which is controlled by the Issuer. In order to protect your funds, T24 does not have access to this account. For more information, read about the <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/download/Security of cardholder funds.pdf" style="color: #46a694;">Security of Customer Funds</a></p>
                    </div>
                    <div class="col-md-3 col-xs-12">
                    <div class="icon-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/moneyloaded3.png" style="height: 72px;"></div>
                    	<h4>Additional Security</h4>
						<p>T24 is obligated to keep a certain deposit over and above the weekly settlement of all transactions on T24 PayVault Cards. This provides additional security and protection to your loaded funds.</p>
                    </div>
                    <div class="col-md-3 col-xs-12">
                    <div class="icon-holder"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/moneyloaded4.png" style="height: 72px;"></div>
                    	<h4>No Fractional Reserves</h4>
						<p>As governed by the e-money regulations in the UK and enforced by Voice Commerce Limited. T24 is not allowed to enable payments on the T24 PayVault Card unless it is fully funded. In addition, T24 will never extend credit.</p>
                    </div>
                </div>
                
                
		</div>
	</div>
	</section>
	
    
    
    
    
<section id="our-card-parallax" class="section overlay-dark" data-sectionnum="6" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="-250">
	<div class="container">
		<h3 class="stronger text-center wow fadeInUp">Our Cards</h3>
	</div>
</section>
    
<section class="section home-folio">
	<div class="container">
		<ul class="portfolio">
			<li class="portfolio-item" data-id="id-1" data-type="graphics"> 
            	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/portfolio/black-card.png" alt="#">
            	<div class="card-hover-holder">
            		<a onclick="ga('send','event','Page-Content','Zoom','Our Cards/T24 Black Card');" href="#case-study-t24-black" class="zoom" data-lightbox-type="inline" data-lightbox-gallery="gallery1"> <i class="fa fa-plus"></i> </a> <a onclick="ga('send','event','Page-Content','Get Link','Our Cards/T24 Black Card');" href="https://www.t24blackcard.com" class="link" target="_blank"> <i class="fa fa-link"></i> </a>
					<h3>T24 Black Card</h3>
                	<div class="card-overlay" style="opacity: 0;"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/portfolio/card-overlay.png"></div>
            	</div>
			</li>
			<li class="portfolio-item" data-id="id-2" data-type="themes"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/portfolio/pay-vault-card.png" alt="#"> 
            	<div class="card-hover-holder">
                	<a onclick="ga('send','event','Page-Content','Zoom','Our Cards/T24 Pay Vault');" href="#case-study-t24-pay-vault" class="zoom"  data-lightbox-type="inline"  data-lightbox-gallery="gallery1"> <i class="fa fa-plus"></i> </a> <a onclick="ga('send','event','Page-Content','Get Link','Our Cards/T24 Pay Vault');" href="http://www.t24payvault.com" class="link" target="_blank"> <i class="fa fa-link"></i> </a>
					<h3>T24 Pay Vault Card</h3>
                	<div class="card-overlay" style="opacity: 0;"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/portfolio/card-overlay.png"></div>
                </div>
			</li>
			<li class="portfolio-item" data-id="id-3" data-type="wordpress">
            	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/portfolio/black-sheild-card.png" alt="Portfolio Image">  
            	<div class="card-hover-holder">
            		<a onclick="ga('send','event','Page-Content','Zoom','Our Cards/T24 Black Shield Card');" href="#case-study-t24-black-shield" class="zoom" data-lightbox-type="inline"  data-lightbox-gallery="gallery1"> <i class="fa fa-plus"></i> </a> <a onclick="ga('send','event','Page-Content','Get Link','Our Cards/T24 Black Shield Card');" href="http://www.t24blackshield.com" class="link" target="_blank"> <i class="fa fa-link"></i> </a>
					<h3>T24 Black Shield Card</h3>
                	<div class="card-overlay" style="opacity: 0;"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/portfolio/card-overlay.png"></div>
                </div>
			</li>
		</ul>
	</div>
</section>


<section class="section overlay-color" data-sectionnum="8">
	<div class="container">
    	<div class="col-md-9 col-sm-6 col-xs-12 fact wow fadeInLeft animated">
    		<h3 class="stronger wow fadeInUp animated" style="visibility: visible; -webkit-animation: fadeInUp; margin-bottom: 0px;">Let’s talk about your prepaid card requirement</h3>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 fact wow fadeInLeft animated" style="visibility: visible; -webkit-animation: fadeInRight;">
        	<a title="" class="btn btn-primary btn-xl with-icon contactbtn">Contact us <i class="fa fa-envelope"></i> </a>
        </div>
    	<div class="row contact-options">
      		<div class="col-lg-12">
        		<form id="contact-form" class="contact-form">
          			<fieldset>
          				<div class="row">
              				<div class="col-sm-12">
          						<div id="result"></div>
          					</div>
          				</div>
          				<div class="row">
              				<div class="col-sm-6">
                				<div class="form-group">
                  					<label>*Required</label>
                  					<input id="name" class="form-control input-lg" id="name" placeholder="Your Name" type="text" name="name">
                				</div>
              				</div>
              				<div class="col-sm-6">
                				<div class="form-group">
                  					<label>*Required</label>
                  					<input id="email" class="form-control input-lg" id="email" placeholder="Email" type="email" name="email">
                				</div>
              				</div>
              				<div class="col-sm-6">
                				<div class="form-group">
                  					<label>*Required</label>
                  					<input id="company" class="form-control input-lg" id="company" placeholder="Company name" type="text" name="company">
                				</div>
              				</div>
              				<div class="col-sm-6">
                				<div class="form-group">
                  					<label></label>
                  					<input id="phone" class="form-control input-lg" id="phone" placeholder="Phone" type="text" name="phone">
                				</div>
              				</div>
              				<div class="col-sm-6">
                				<div class="form-group">
                					<label>*Required</label>
                					<input id="website" class="form-control input-lg" id="website" placeholder="Website" type="text" name="website">
                				</div>
              				</div>
              				<div class="col-sm-6">
              				</div>
            			</div>
            			<div class="row">
              				<div class="col-sm-12">
                				<div class="form-group">
                  					<label></label>
                  					<textarea id="message" name="message" class="form-control" cols="3" rows="5" placeholder="Message..." name="message"></textarea>
                				</div>
              				</div>
            			</div>
            			<div class="row" style="margin-top: 30px;">
              				<div class="col-xs-12">
                				<button class="btn btn-primary btn-lg btn-block" onClick="formSubmit();ga('send','event','Page-Content','Form Send','Contact Us');">Send</button>
              				</div>
            			</div>
          			</fieldset>
        		</form>
     		 </div>
    	</div>
	</div>
</section>

<section id="map">
    <div id="map-canvas"></div>
</section>

<section class="section overlay-color">
	<div class="container">
		<div class="col-md-4 col-xs-12 fact wow fadeInLeft">
			<div class="icon-holder" style="width: 27px;"><i class="fa fa-map-marker"></i></div>
        	<h4>3rd floor, Heritage House, 235 Main Street, Gibraltar</h4>
        </div>
        <div class="col-md-4 col-xs-12 fact wow fadeInLeft">
        	<div class="icon-holder" style="width: 48px;"><i class="fa fa-envelope"></i></div>
        	<h4>enquiries@transact24.com</h4>
        </div>
        <div class="col-md-4 col-xs-12 fact wow fadeInLeft">
        	<div class="icon-holder" style="width: 38px;"><i class="fa fa-phone"></i></div>
        	<h4>+852 2851 0145</h4>
        </div>
   </div>
</section>
    
    
<div style="display: none;" id="case-study-t24-black">
    <div class="container">
		<div class="row">
    		<div class="col-md-12 col-xs-12">
    			<h2 style="margin-bottom: 0 !important;">T24 Black Card</h2>
    			<a href="https://www.t24blackcard.com" style="color: #46a694;">www.t24blackcard.com</a>
    		</div>
    	</div>
   		<div class="row" style="margin-top: 20px;">
    		<div class="col-md-6 col-xs-12">
    			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/portfolio/t24blackcardscreen.png" style="width: 100%;">
    		</div>
    		<div class="col-md-6 col-xs-12">
    			<p>The T24 Black Card is the world’s first prepaid program to offer complementary Priority Pass membership connected directly to a Visa Prepaid Card. This allows the cardholder access to over 600 airport lounges worldwide. The card itself is tailored towards the high net worth market, offering a load limit of 50,000 USD, and also comes with complimentary travel insurance.</p>
				<h3>Benefits</h3>
 				<ul>
    				<li>USD 50,000 load limit</li>
 					<li>USD 6,000 daily ATM limit</li>
 					<li>USD 20,000 daily spend limit</li>
 					<li>Travel insurance, including medical coverage of up to 1,000,000 USD</li>
 					<li>Priority Pass membership, giving access to VIP airport lounges worldwide</li>
    			</ul>
				<p>To learn more about T24 Black Card and its full list of features and benefits <a href="https://www.t24blackcard.com" style="color: #46a694;">click here</a></p>
    		</div>
    	</div>
	</div>
</div>
    
<div style="display: none;" id="case-study-t24-pay-vault">
    <div class="container">
		<div class="row">
    		<div class="col-md-12 col-xs-12">
    			<h2 style="margin-bottom: 0 !important;">T24 PayVault Card</h2>
    			<a href="http://www.t24payvault.com" style="color: #46a694;">www.t24payvault.com</a>
    		</div>
    	</div>
  		<div class="row" style="margin-top: 20px;">
    		<div class="col-md-6 col-xs-12">
    			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/portfolio/t24payvaultscreen.png" style="width: 100%;">
    		</div>
    		<div class="col-md-6 col-xs-12">
    			<p>The T24 PayVault Visa Prepaid Card is a dedicated payment solution for European-based companies looking to streamline their payroll management and other systems, ranging from remunerating employees in various geographies to paying commissions to local sales staff</p>
				<h3>Benefits</h3>
				<ul>
					<li>Reduces your need for cash</li>
					<li>Streamlines your payroll procedure</li>
					<li>Allows you to transfer funds cost effectively</li>
					<li>Payments are independent of the cardholder's location</li>
				</ul>
				<p>To learn more about T24 PayVault and its full list of features and benefits <a href="http://www.t24payvault.com" style="color: #46a694;">click here</a></p>
    		</div>
		</div>
	</div>
</div>
    
<div style="display: none;" id="case-study-t24-black-shield">
    <div class="container">
		<div class="row">
    		<div class="col-md-12 col-xs-12">
    			<h2 style="margin-bottom: 0 !important;">T24 BlackShield Card</h2>
    			<a href="http://www.t24blackshield.com" style="color: #46a694;">www.t24blackshield.com</a>
    		</div>
    	</div>
    	<div class="row" style="margin-top: 20px;">
    		<div class="col-md-6 col-xs-12">
    			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/portfolio/t24blackshieldscreen.png" style="width: 100%;">
    		</div>
    		<div class="col-md-6 col-xs-12">
    			<p>The T24 Blackshield membership program and prepaid card is the first program tailored for medical insurance companies enabling them to provide their members with an effective means of distributing claims expediently. As with the T24 Black, the T24 BlackShield is also pre-package with complementary worldwide travel insurance coverage.</p>
				<h3>Benefits</h3>
				<ul>
					<li>Enjoy a 20,000 USD limit</li>
					<li>Complimentary Worldwide Travel Insurance</li>
					<li>Emergency Medical Coverage of up to 5,000,000 USD</li>
					<li>Cancellation, Interruption & Delay of up to 10,000 USD</li>
					<li>Cover extended to include the cardholder’s spouse and dependent children</li>
				</ul>
				<p>To learn more about T24 BlackShield and its full list of features and benefits <a href="http://www.t24blackshield.com" style="color: #46a694;">click here</a></p>
    		</div>
    	</div>
	</div>
</div>

<?php get_footer(); ?>
