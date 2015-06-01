<?php
/**
 * Template Name: Front Page Template
 */

get_header();
?>
		<!-- section -->
        
		<section id="home" style="margin-top: 70px; height: 500px;">
        
        <ul class="bxslider" style="height: 100%;">
        
		<li style="height: 100%; width: 100%; background: url(<?php echo get_template_directory_uri();?>/img/banner1.jpg); background-size: cover; background-position: center;">
        
        <!--<div class="dotted-overlay">-->
        
        <div style="height: 100%; width: 100%; background: rgba(70,166,148,0.8);">
        
        <div style=" width: 100%; height: 500px;">
        
 
        
        <div class="container" style="height: 100%;">
        
        <div class="feature sixteen columns" style="height: 100%; display: table;">
		<div style="display: table-cell; vertical-align: middle;">
        
        <div id="first-slide-container" style=" padding: 15px;">
		<div class="left1" style="float: left; width: 65%;">
        <div class="heading" style="color: #ffffff;">Card based payouts for commissions, expenses and payroll</div>
        <div class="devider" style="background-color: rgba(255, 255, 255, 0.2) !important; width: 90% !important; margin-bottom: 20px !important; float: left;"></div>
        <div style="clear: both;"></div>
        <div class="text">The T24 PayVault Visa prepaid card has a load limit of 20,000USD, offers instant card loads and comprehensive backend support</div>
        <div style="color: #ffffff; font-size: 20px; font-weight: 400; line-height: 48px; margin: 10px auto; text-align: left; margin-top: 25px; float: left;"><button data-url="payout" data-type="in">Payout Management</button></div>
        <div style="color: #ffffff; font-size: 20px; font-weight: 400; line-height: 48px; margin: 10px auto; text-align: left; margin-top: 25px; float: left; margin-left: 10px;"><button class="secondbutton" data-url="features" data-type="in">Card Features</button></div>
        <div style="clear: both;"></div>
        </div>
        
        
        <div style="float: right; width: 35%; height: 100%; position: relative;" id="header-card-holder">
        <div class="right1" style="opacity: 1; display: table-cell; vertical-align: middle;">
        <div style="width: 100%; position: relative; margin: 0 auto;"><img src="<?php echo get_template_directory_uri();?>/img/payvaultcard.png" style="width: 100%;"></div>
        </div>
        <div style="clear: both;"></div>
        </div>
        
        
        <div style="clear:both;"></div>
        
        </div>
        
        
        </div>
		</div>
        </div>
        
        </div>
        
        </div>
        </li>
        <li style="height: 100%; width: 100%; background: url(<?php echo get_template_directory_uri();?>/img/banner2.jpg); background-position: bottom left;">
        
       <div style="height: 100%; width: 100%; background: rgba(70,166,148,0.8);">
        
        <div style="height: 500px; width: 100%;">
        
        
        <div class="container" style="height: 100%;">
        
        <div style="height: 100%; display: table;">
		<div style="display: table-cell; vertical-align: middle;">
        
        
        <div id="second-slide-container" style="padding: 15px;">
		<div class="left2" style="height: 100%; width: 55%; float: left;">
        
        <div style="display: table; height: 100%;">
        
        <div style="display: table-cell; vertical-align: middle;">
        
        
       <div class="heading" style="color: #ffffff;">Automated Payout Management</div>
        <div class="devider" style="background-color: rgba(255, 255, 255, 0.2) !important; width: 90% !important; margin-bottom: 20px !important; float: left;"></div>
        <div style="clear: both;"></div>
        <div class="text">With the T24 full support API, you will be able to load the cards on demand, verify balances and check the float account balance</div>
        
        </div>
        </div>
        
		</div>
        
        
        <div style="height: 100%; width: 45%; float: right;">
        <div class="right2" style="opacity: 1; height: 100%;">
        
        <div style="display: table; height: 100%;">
        
        <div style="display: table-cell; vertical-align: middle;">
        <img src="<?php echo get_template_directory_uri();?>/img/world.png" style="width: 500px;">
        
        </div>
        </div>
        
        </div>
        </div>
        
        <div style="clear: both;"></div>
        
        </div>
        
        </div>
        
        </div>
        
        </div>
        </li>
        </ul>

		</section>
		<!-- section -->


		<!-- section -->
		<section class="features" id="features">

			<div class="main offset" style="padding-top: 80px;">

				<!-- container -->
				<div class="container">
					
					<div class="feature one-third column" data-id="1">

						<div class="icon"><i class="ion-card" style="color: #46a694; font-size: 36px;"></i></div>
						<div class="title">Visa Prepaid Card</div>
						<p class="text">Reloadable payout cards that work anywhere the Visa trademark is displayed</p>

					</div>

					<div class="feature one-third column" data-id="2">

						<div class="icon"><i class="ion-earth" style="color: #46a694; font-size: 36px;"></i></div>
						<div class="title">Use Worldwide</div>
						<p class="text">Can be used online, in-store or at ATMs in over 179 countries worldwide</p>

					</div>

					<div class="feature one-third column" data-id="3">

						<div class="icon"><i class="ion-clock" style="color: #46a694; font-size: 36px;"></i></div>
						<div class="title">Instant Payouts</div>
						<p class="text">Send funds to your investors instantly, worldwide, at lower fees with immediate customer satisfaction</p>

					</div>

				</div>
				<!-- container -->
                
                
                <!-- container -->
				<div class="container" style="margin-top: 40px;" data-id="4">
					
					<div class="feature one-third column">

						<div class="icon"><i class="ion-locked" style="color: #46a694; font-size: 36px;"></i></div>
						<div class="title">Safe and Secure</div>
						<p class="text">All our programs are fully EMV compliant with Chip and PIN technology</p>

					</div>

					<div class="feature one-third column" data-id="5">

						<div class="icon"><i class="ion-wrench" style="color: #46a694; font-size: 36px;"></i></div>
						<div class="title">Fully Documented API</div>
						<p class="text">Integrate Card Director seamlessly into your existing web applications and systems</p>

					</div>

					<div class="feature one-third column" data-id="6">

						<div class="icon"><i class="ion-help-buoy" style="color: #46a694; font-size: 36px;"></i></div>
						<div class="title">24/7 Support</div>
						<p class="text">Dedicated first and second line cardholder support plans available</p>

					</div>

				</div>
				<!-- container -->
			</div>

		</section>
		<!-- section -->
        <section id="payout" class="payout" style="background: #f8f8f8;">
        
        
        
        <div class="payouts offset">

				<!-- container -->
				<div class="container clearfix">

					<div class="sixteen columns">

						<div class="title">Payout Management</div>
						<div class="subtitle">How the payouts work</div>
						<div class="devider"></div>

					</div>

				</div>
				<!-- container -->
                
                
                <!-- container -->
				<div class="container clearfix payoutscopy" style="margin-bottom: 70px;">
                
                
                <div class="container clearfix">
					
					<div class="feature one-third column" style="margin-left: 0px; padding: 0px;">

						<div style="background-color: #eeeeee; border: none; border-radius: 88px; height: 88px; margin: 0px auto 50px; width: 88px; text-align: center; font-size: 24px; color: #46a694; line-height: 88px;">1</div>
						<p class="text">Wire the necessary cardholder funds directly to the issuer. T24 never has access to these funds, they are instead held securely by the issuer in a ring-fenced trust account with HSBC (UK). Learn more about the <a style="color: #46a694; cursor: pointer;" data-url="<?php echo get_template_directory_uri();?>/download/Security of cardholder funds.pdf" data-type="out">security of customer funds</a>.</p>

					</div>

					<div class="feature one-third column" style="margin-left: 20px; margin-right: 20px;  padding: 0px;">

						<div style="background-color: #eeeeee; border: none; border-radius: 88px; height: 88px; margin: 0px auto 50px; width: 88px; text-align: center; font-size: 24px; color: #46a694; line-height: 88px;">2</div>
						<p class="text">Through encrypted API calls with end-to-end validation, you can securely load as many cards as you want at any given time, including weekends and bank holidays.</p>

					</div>
                    
                    <div class="feature one-third column" style="margin-right: 0px;  padding: 0px;">

						<div style="background-color: #eeeeee; border: none; border-radius: 88px; height: 88px; margin: 0px auto 50px; width: 88px; text-align: center; font-size: 24px; color: #46a694; line-height: 88px;">3</div>
						<p class="text">Cardholders receive a notification that their card has been loaded and that it is now ready for spending.</p>

					</div>
                                        
                    </div>
                    
                    <div class="container clearfix">
					
					<div class="feature tweleve columns">
                    
                    <table width="100%">
                    
                    <tr>
                    
                    <td align="center">
                    
                    <img src="<?php echo get_template_directory_uri();?>/img/payoutmanagement.png">
                    
                    </td>
                    
                    </tr>
                    
                    </table>
                    
                    </div>
                    
                    
                    
                    </div>

				</div>
                
                
                

			</div>
        
        </section>
        
        <section>
        
        <div class="offset">
        
        <!-- container -->
				<div class="container clearfix">

					<div class="sixteen columns">

						<div class="title">Card Director</div>
						<div class="subtitle">The card director platform combines with our API services to provide you with a full card management solution</div>
						<div class="devider"></div>

					</div>

				</div>
				<!-- container -->
		<div class="container clearfix" style="padding-bottom: 100px;">
        
        <div id="carddirector1" style="opacity: 0;">
        
        <div class="feature one-third column">
        <div class="title" style="text-align: left !important;">Managing Your Cards</div>
        <p style="text-align: left !important; margin-top: 12px;">You can search for cards issued under your merchant profile by card ID or client card reference, which is the reference you can assign to cards in order to easily identify them. This could be a membership number, employee number, or indeed anything else. Once you’ve found a card you can individually load it with the amount you choose.</p>
        
        <p style="text-align: left !important; margin-top: 12px;">These features are available through the Card Director interface or remotely via our API.</p>
        
        </div>

				<div class="feature two-thirds column"><img src="<?php echo get_template_directory_uri();?>/img/carddirector001.png" style="width: 100%;"></div>
                
          </div>  
                
</div>
        
		<div class="container clearfix" style="padding-bottom: 100px;">
        
        <div id="carddirector2" style="opacity: 0;">

				<div class="feature two-thirds column"><img src="<?php echo get_template_directory_uri();?>/img/carddirector002.png" style="width: 100%;"></div>
                
                
                <div class="feature one-third column">
                <div class="title" style="text-align: left !important;">Batch Card Loads</div>
                 <p style="text-align: left !important; margin-top: 12px;">Instead of individually loading cards you can prepare a batch load file and import this into the card director system.</p> 
                 <p style="text-align: left !important; margin-top: 12px;">After security parameters and duplicate file verification is complete, all loads will be processed at once. There is no limitation on the number of card that can be loaded from a batch file.</p>
        
        <p style="text-align: left !important; margin-top: 12px;">This feature is also supported within our API</p>
                </div>
                
                </div>

			</div>
		<div class="container clearfix">
        
        <div id="carddirector3" style="opacity: 0;">
        
        <div class="feature one-third column">
        <div class="title" style="text-align: left !important;">Full Merchant Reconciliation</div>
         <p style="text-align: left !important; margin-top: 12px;">The reconciliation report records all events that change the balance of your float account, from loads, to fee deductions, and of course funding of the float account. Load history is available all the down to individual card level.</p>
        
        <p style="text-align: left !important; margin-top: 12px;">Read more about funding the float account in the <a data-url="payouts" data-type="in" style="cursor: pointer; color: #46a694;">payout management</a> section</p>
        </div>

				<div class="feature two-thirds column"><img src="<?php echo get_template_directory_uri();?>/img/carddirector003.png" style="width: 100%;"></div>
                
                
                

			</div>
            
            </div>
            
        </div>
        
        <div class="container clearfix" style="padding-bottom: 100px;">
        
        <div id="carddirector4" style="opacity: 0;">

				<div class="feature two-thirds column"><img src="<?php echo get_template_directory_uri();?>/img/carddirector004.png" style="width: 100%;"></div>
                
                
                <div class="feature one-third column">
                <div class="title" style="text-align: left !important;">Managing Your System Remotely</div>
                 <p style="text-align: left !important; margin-top: 12px;">Our full service API provides you with powerful integration options that link directly to your backend systems, allowing you to seamlessly communicate with and query our database regarding card activity in real-time. </p>
                 
                 
                 <p style="text-align: left !important; margin-top: 12px; color: #25292c;
font-size: 18px;
letter-spacing: 1px;
text-transform: uppercase;">API Features:</p>
                 
                 <p style="text-align: left !important; margin-top: 12px;">
                 
                 <ul>
                 
                 
                 <li style="text-align: left;"><strong style="color:#46a694;">Card Application</strong> - includes KYC submission and different card types</li>
                 <li style="text-align: left;"><strong style="color:#46a694;">Cardholder Balance Enquiry</strong> - return balance of a particular card</li>
				 <li style="text-align: left;"><strong style="color:#46a694;">Card Status Enquiry</strong> - Returns status of an issued card</li>
				 <li style="text-align: left;"><strong style="color:#46a694;">Notification Call Back</strong> - Informs merchant of low account balance</li>
				 <li style="text-align: left;">...and much more</li>
                 
                 </ul>
                 
                 </p>
        
                </div>
                
                </div>
                
                </div>
                
                
                
                 <div class="container clearfix" style="padding-bottom: 100px;">
                
                 <div id="carddirector5" style="opacity: 0;">
    
    
    
    
    
    <div class="feature one-third column">
    
    <div class="title" style="text-align: left !important;">T24 Prepaid Mobile App</div>
	<p style="text-align: left !important; margin-top: 12px;">Our app is an extension to our cardholder services, giving cardholders a quicker, secure way of accessing their account on the go, from their mobile devices. The app can be offered as-is or fully customised to reflect the look and feel of your own branding.</p>
    <p style="text-align: left !important; margin-top: 12px; color: #25292c;
font-size: 18px;
letter-spacing: 1px;
text-transform: uppercase;">Mobile App Features</p>
    <ul>
	<li style="text-align: left;"><i class="ion-checkmark-circled" style="color: #46a694;"></i>&nbsp;&nbsp;Retrieve account balance information</li>
	<li style="text-align: left;"><i class="ion-checkmark-circled" style="color: #46a694;"></i>&nbsp;&nbsp;Review card statements and recent transaction history</li>
	<li style="text-align: left;"><i class="ion-checkmark-circled" style="color: #46a694;"></i>&nbsp;&nbsp;Report card lost or stolen</li>
    </ul>
    
    </div>
          
          <div class="feature two-thirds column" style="position: relative; top: -60px;">
    
    <img src="<?php echo get_template_directory_uri();?>/img/carddirector005.png" style="width: 100%;">
    <div style="width: 85%; float: right; position: relative; top: -20px;">
    	<div style="width: 49%; float: left;"><img src="<?php echo get_template_directory_uri();?>/img/appstorebtn.png" style="width: 100%;"></div>
        <div style="width: 49%; float: right;"><img src="<?php echo get_template_directory_uri();?>/img/googleplaybtn.png" style="width: 100%;"></div>
        <div style="clear: both;"></div>
    </div>
	<!--<div style="clear: both;"></div> -->   
    </div>      

			</div>
        
        
          </div>
          
          </div>
        
        </section>
        
        
        
        


		<section class="featured" id="featured" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo get_template_directory_uri();?>/img/parallax1.jpg);">

			 <div class="dotted-overlay">

			<div class="countup offset">

				<!-- container -->
				<div class="container clearfix">

					<div class="feature four columns" style="opacity: 0;">

						<div class="title" id="countup1" style="font-size: 48px; margin-bottom: 25px;"></div>
                        <div class="title" style="color: #46a694;">System Uptime</div>

					</div>

					<div class="feature four columns" style="opacity: 0;">

						<div class="title" id="countup2" style="font-size: 48px; margin-bottom: 25px;"></div>
                        <div class="title text" style="color: #46a694;">Transactions/Sec</div>

					</div>

					<div class="feature four columns" style="opacity: 0;">

						<div class="title" id="countup3" style="font-size: 48px; margin-bottom: 25px;"></div>
                        <div class="title" style="color: #46a694;">Countries</div>

					</div>
                    
                    
                    <div class="feature four columns" style="opacity: 0;">

						<div class="title" id="countup4" style="font-size: 48px; margin-bottom: 25px;"></div>
                        <div class="title text" style="color: #46a694;">Disaster Recovery Sites</div>

					</div>

				</div>
				<!-- container -->

			</div>
            
            </div>

		</section>
        
        

		<!-- section -->
		<section class="cardusage" id="cardusage">

			<!--<div class="main offset">-->

				<!-- container -->
				<!--<div class="container clearfix">

					<div class="sixteen columns">

						<div class="title">Functionality Overview</div>
						<div class="devider"></div>

					</div>

				</div>-->
				<!-- container -->

				<!-- container -->
				<!--<div class="container">
					
					<div class="feature one-third column" data-id="1">

						<div class="icon"><i class="ion-card" style="color: #46a694; font-size: 36px;"></i></div>
						<div class="title">Visa Prepaid Card</div>
						<p class="text">Reloadable payout cards that work anywhere the Visa trademark is displayed</p>

					</div>

					<div class="feature one-third column" data-id="2">

						<div class="icon"><i class="ion-earth" style="color: #46a694; font-size: 36px;"></i></div>
						<div class="title">Use Worldwide</div>
						<p class="text">Can be used online, in-store or at ATMs in over 179 countries worldwide</p>

					</div>

					<div class="feature one-third column" data-id="3">

						<div class="icon"><i class="ion-clock" style="color: #46a694; font-size: 36px;"></i></div>
						<div class="title">Instant Payouts</div>
						<p class="text">Send funds to your investors instantly, worldwide, at lower fees with immediate customer satisfaction</p>

					</div>

				</div>-->
				<!-- container -->
                
                
                <!-- container -->
				<!--<div class="container" style="margin-top: 40px;" data-id="4">
					
					<div class="feature one-third column">

						<div class="icon"><i class="ion-locked" style="color: #46a694; font-size: 36px;"></i></div>
						<div class="title">Safe and Secure</div>
						<p class="text">All our programs are fully EMV compliant with Chip and PIN technology</p>

					</div>

					<div class="feature one-third column" data-id="5">

						<div class="icon"><i class="ion-wrench" style="color: #46a694; font-size: 36px;"></i></div>
						<div class="title">Fully Documented API</div>
						<p class="text">Integrate Card Director seamlessly into your existing web applications and systems</p>

					</div>

					<div class="feature one-third column" data-id="6">

						<div class="icon"><i class="ion-help-buoy" style="color: #46a694; font-size: 36px;"></i></div>
						<div class="title">24/7 Support</div>
						<p class="text">Dedicated first and second line cardholder support plans available</p>

					</div>

				</div>-->
				<!-- container -->
                

			<!--</div>-->

			<div class="usage offset">

				<!-- container -->
				<div class="container clearfix">

					<div class="sixteen columns">

						<div class="title">Card Usage</div>
						<div class="subtitle">Enjoy the ease and convenience of the T24 PayVault VISA Prepaid Card</div>
						<div class="devider"></div>

					</div>

				</div>
				<!-- container -->
                
                <!-- container -->
				<div class="container">
					
					<div class="feature one-third column">

						<div class="icon" style="width: auto; height: auto; margin-right: 0px; margin-top: 5px;"><img src="<?php echo get_template_directory_uri();?>/img/visalogomini.png" style="width: auto; height: auto;"></i></div>
						<p class="text" style="margin-left: 60px;">Use it anywhere in the world where the VISA Acceptance Mark is displayed</p>

					</div>

					<div class="feature one-third column">

						<div class="icon"><img src="<?php echo get_template_directory_uri();?>/img/atmicon.png" style="width: 38px; height: auto;"></div>
						<p class="text" style="margin-left: 60px;">Withdraw cash at any VISA enabled ATM</p>

					</div>
                    
                    
                    <div class="feature one-third column">

						<div class="icon"><i class="ion-card" style="color: #46a694; font-size: 36px; width: 100%;"></i></div>
						<p class="text" style="margin-left: 60px;">Swipe your card in any VISA enabled POS machine and enter your PIN</p>

					</div>

				</div>
				<!-- container -->
                
                
                <!-- container -->
				<div class="container" style="margin-top: 40px;">
					
					

					<div class="feature one-third column">

						<div class="icon"><i class="ion-wifi" style="color: #46a694; font-size: 36px;"></i></div>
						<p class="text" style="margin-left: 60px;">Shop online using your T24 PayVault VISA and enter your 3D secure code for verification</p>

					</div>

					<div class="feature one-third column">

						<div class="icon"><img src="<?php echo get_template_directory_uri();?>/img/currenciesicon.png" style="width: 42px; height: auto;"></div>
						<p class="text" style="margin-left: 60px;">Your T24 PayVault Card automatically converts to the local currency wherever you are</p>

					</div>
                    
                    <div class="feature one-third column">

						<div class="icon"><i class="ion-shuffle" style="color: #46a694; font-size: 36px;"></i></div>
						<p class="text" style="margin-left: 60px;">Do a Card to Card money transfer to any other T24 PayVault Cardholder by SMS or online</p>

					</div>

				</div>
				<!-- container -->

			</div>
            
            
            
            
            
            <div class="management offset">

				<!-- container -->
				<div class="container clearfix">

					<div class="sixteen columns">

						<div class="title">Account Management</div>
						<div class="subtitle">The transactions on your T24 PayVault card happen in real time and give you full control over your spending</div>
						<div class="devider"></div>

					</div>

				</div>
				<!-- container -->
                
                
                
                
                
                 <!-- container -->
				<div class="container">
					
					<div class="feature sixteen columns">
                    
                    </div>
                    
                </div>
                <!-- container -->
                
                
                
                <!-- container -->
				<div class="container clearfix" style="margin-bottom: 70px;">
                
                <div style="float: left; width: 50%;">
                
                <div class="container clearfix">
					
					<div class="feature four columns">

						<div class="icon"><i class="ion-monitor" style="color: #46a694; font-size: 36px;"></i></div>
						<p class="text">Up-to-the-minute online statements that make it easy to track expenses</p>

					</div>

					<div class="feature four columns">

						<div class="icon"><i class="ion-iphone" style="color: #46a694; font-size: 36px;"></i></div>
						<p class="text">On-the-go access to your account that lets you check your balance online, via SMS, at ATMs, or IVR</p>

					</div>
                    
                    </div>
                    
                    <div class="container clearfix">

					<div class="feature four columns">

						<div class="icon"><i class="ion-arrow-graph-up-right" style="color: #46a694; font-size: 36px;"></i></div>
						<p class="text">Track your expenses</p>

					</div>
                    
                    
                    <div class="feature four columns">

						<div class="icon"><i class="ion-refresh" style="color: #46a694; font-size: 36px;"></i></div>
						<p class="text">Only spend what is loaded</p>

					</div>
                    
                    </div>

				</div>
                
                <div style="float: right; width: 50%;">
                
                <div style="width: 100%; margin: 0 auto; opacity: 0;" class="phone-statement">
                
                <img src="<?php echo get_template_directory_uri();?>/img/iphone_statement.png" style="width: 100%;">
                
                </div>

				</div>
				<!-- container -->
                

			</div>
            
            
            <div class="sms offset">

				<!-- container -->
				<div class="container clearfix">

					<div class="sixteen columns">

						<div class="title">SMS Functionality</div>
						<div class="subtitle">You can get several T24 PayVault services straight to your phone using our SMS functionality. Simply send a message to<br> <span style="color: #46a694;">+44 (0)7797 800 035</span> and enter one of the following commands</div>
						<div class="devider"></div>

					</div>

				</div>
				<!-- container -->
                
                <!-- container -->
				<div class="container">
					
					<div class="feature sixteen columns">

					
					
					<table class="sms_table" style="width: 100%;">
                    <tr style="border-bottom: 2px solid #25292c; padding: 5px 0;">
                    <th>Function</th>
                    <th>Instruction</th>
                    <th>Example</th>
                    </tr>
                    <tr style="border-bottom: 1px solid #25292c; padding: 5px 0;">
                    <td>The card balance</td>
                    <td>TRA BAL ACCESSCODE [LAST 4 OF CARD]</td>
                    <td>TRA BAL 123456 1111</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #25292c; padding: 5px 0;">
                    <td>Last 3 transactions</td>
                    <td>TRA TXN ACCESSCODE [LAST 4 OF CARD]</td>
                    <td>TRA TXN 123456 1111</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #25292c; padding: 5px 0;">
                    <td>Lock card</td>
                    <td>TRA LOCK ACCESSCODE [LAST 4 OF CARD]</td>
                    <td>TRA LOCK 123456 1111</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #25292c; padding: 5px 0;">
                    <td>Unlock card</td>
                    <td>TRA UNLOCK ACCESSCODE [LAST 4 OF CARD]</td>
                    <td>TRA UNLOCK 123456 1111</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #25292c; padding: 5px 0;">
                    <td>Card to Card transfer</td>
                    <td>TRA XFER AMOUNT TO MOBILE ACCESSCODE [LAST 4 OF CARD]</td>
					<td>TRA XFER 20 TO +467043242423423 123456 1111</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #25292c; padding: 5px 0;">
                    <td>Stop notification</td>
                    <td>TRA STOP [LAST 4 OF CARD]</td>
                    <td>TRA STOP 1111</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #25292c; padding: 5px 0;">
                    <td>Stop all notifications</td>
                    <td>TRA STOP ALL [LAST 4 OF CARD]</td>
                    <td>TRA STOP ALL 1111</td>
                    </tr>
                    </table>

					</div>

				</div>
				<!-- container -->

			</div>
            
            
            

		</section>
		<!-- section -->
        
        
        <section class="featured" id="featured" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo get_template_directory_uri();?>/img/parallax2.jpg); background-position:center; ">

			 <div class="dotted-overlay">

			<div class="offset">

				<!-- container -->
				<div class="container clearfix">
					<div class="sixteen columns">

						<div class="title" style="font-size: 36px;">Card Security</div>
						<div class="devider" style="margin-bottom: 0px;"></div>

					</div>

				</div>
				<!-- container -->

			</div>
            
            </div>

		</section>


		<!-- section -->
		<section class="security" id="security">

			<div class="loaded offset">

				<!-- container -->
				<div class="container clearfix">

					<div class="sixteen columns">

						<div class="title">Money Loaded</div>
						<div class="devider"></div>

					</div>
                    
				</div>
				<!-- container -->
                
                <div class="container">
					
					<div class="feature four columns" style="opacity: 0;">

                        <div class="title" style="font-size: 16px;">100% Funding of the Card</div>
						<p class="text" style="margin-left: 0px !important;">Your PayVault VISA prepaid card is automatically loaded upon receipt
of your funds.</p>

					</div>

					<div class="feature four columns" style="opacity: 0;">

                        <div class="title" style="font-size: 16px;">The Client Account</div>
						<p class="text" style="margin-left: 0px !important;">When your funds are received, they are loaded into a client account, which is controlled by the Issuer. In order to protect your funds, T24 does not have access to this account. For more information, read about the <a style="color: #46a694; cursor: pointer;" data-url="<?php echo get_template_directory_uri();?>/download/Security of cardholder funds.pdf" data-type="out">Security of Customer Funds</a></p>

					</div>

					<div class="feature four columns" style="opacity: 0;">

                        <div class="title" style="font-size: 16px;">Additional Security</div>
						<p class="text" style="margin-left: 0px !important;">T24 is obligated to keep a certain deposit over and above the weekly settlement of all transactions on T24 PayVault Cards. This provides additional security and protection to your loaded funds.</p>

					</div>
                    
                    
                    <div class="feature four columns" style="opacity: 0;">

                        <div class="title" style="font-size: 16px;">No Fractional Reserves</div>
						<p class="text" style="margin-left: 0px !important;">As governed by the e-money laws in the UK and enforced by CashFlows Limited. T24 is not allowed to enable payments on the T24 PayVault Card unless it is fully funded. In addition, T24 will never extend credit.</p>

					</div>

				</div>

			</div>
            
            
            <div class="cardsecurity offset">

				<!-- container -->
				<div class="container clearfix">

					<div class="sixteen columns">

						<div class="title">Card Security</div>
                        <div class="subtitle">The T24 PayVault VISA card has several security features integrated on the card to protect both the cardholders and vendors from fraud and unauthorised card usage.</div>
						<div class="devider"></div>

					</div>

				</div>
				<!-- container -->
                
                
                <div class="container">
					
					<div class="feature eight columns" style="opacity: 0;">

						<img src="<?php echo get_template_directory_uri();?>/img/payvault-cardsafety-front.png" style="width: 100%;">

					</div>

					<div class="feature eight columns" style="opacity: 0;">

                        <div class="title" style="font-size: 16px;">Chip with encrypted PIN</div>
						<p class="text" style="margin-left: 0px !important;">The T24 PayVault VISA Card must be used at a PIN-enabled terminal and your personal PIN code is used to authorise any transaction.</p>
                        
                        
                        <div class="title" style="font-size: 16px;">Flat numbers</div>
						<p class="text" style="margin-left: 0px !important;">The T24 PayVault Card does not have raised numbers. This protects against the possibility of the card being copied in a Zip Zap machine. You can still feel the numbers with the Indent printing technique.</p>
                        
                        
                        <div class="title" style="font-size: 16px;"> 3D Secure Verified by VISA</div>
						<p class="text" style="margin-left: 0px !important;">With Verified by VISA, you're protected whenever you make an online payment with your VISA card at more than 300,000 websites across Europe.</p>
                        

					</div>

			</div>
            
            
            <div class="container">
					
					<div class="feature eight columns" style="opacity: 0;">

						<img src="<?php echo get_template_directory_uri();?>/img/payvault-cardsafety-back.png" style="width: 100%;">

					</div>

					<div class="feature eight columns" style="opacity: 0;">

                        <div class="title" style="font-size: 16px;">Signature</div>
						<p class="text" style="margin-left: 0px !important; margin-bottom: 60px;">You must sign your card on the back when you receive it. A T24 PayVault VISA Card is not valid unless signed.</p>
                        
                        
                        <div class="title" style="font-size: 16px;">CVV</div>
						<p class="text" style="margin-left: 0px !important; margin-bottom: 50px;">The CVV number is used to authenticate online transactions and is there for your security.</p>
                        
                        
                        <div class="title" style="font-size: 16px;">Electronic Use Only</div>
						<p class="text" style="margin-left: 0px !important; margin-bottom: 30px;">The T24 PayVault VISA Card cannot be used if the Merchant is unable to verify that the funds are available on the card. This will safeguard you from any unauthorised usage.</p>
                        
                        <div class="title" style="font-size: 16px;">VISA hologram</div>
						<p class="text" style="margin-left: 0px !important;">The VISA dove hologram glimmers in different angles. Check the hologram if you suspect that the card you are holding might be fraudulent.</p>
                        

					</div>

			</div>
            

		</section>
		<!-- section -->
        
        <section class="featured" id="featured" data-stellar-background-ratio="0.5" style="background-image: url(<?php echo get_template_directory_uri();?>/img/parallax3.jpg); background-position:center; ">

			 <div class="dotted-overlay">

			<div class="offset">

				<!-- container -->
				<div class="container clearfix">

					<div class="sixteen columns">

						<div class="title" style="font-size: 36px;">Fee Highlights</div>
						<div class="devider" style="margin-bottom: 0px;"></div>

					</div>

				</div>
				<!-- container -->

			</div>
            
            </div>

		</section>
        
        
        
        
        <!-- section -->
		<section class="fees" id="fees">

			<div class="feehighlights offset">

				<!-- container -->
				<div class="container clearfix">

					<div class="sixteen columns">

                        <div class="subtitle">This fee summary explains the main fees and limits of the T24 PayVault Card. For more information, download the full<br> <a data-url="<?php echo get_template_directory_uri();?>/download/T24 Cardholder Agreement PayVault JUL 2014-fees.pdf" data-type="out" style="cursor: pointer;">Fee Schedule</a> or the complete <a data-url="<?php echo get_template_directory_uri();?>/download/T24 Cardholder Agreement PayVault JUL 2014.pdf" data-type="out" style="cursor: pointer;">Terms and Conditions</a>.<br><br>
For "T24 PayVault Limited" cardholders, please refer to these <a data-url="<?php echo get_template_directory_uri();?>/download/T24 Cardholder Agreement PayVault JUL 2014 Limited.pdf" data-type="out" style="cursor: pointer;">Terms And Conditions</a> and <a data-url="<?php echo get_template_directory_uri();?>/download/T24 Cardholder Agreement PayVault JUL 2014 Limited-fees.pdf" data-type="out" style="cursor: pointer;">Fee Schedule</a>.</div>
						<div class="devider"></div>

					</div>
                    
				</div>
				<!-- container -->
                
                <!-- container -->
				<div class="container">
					
					<div class="feature sixteen columns" style="opacity: 0;">

					<style>
					
					.fees_table .left {
						text-align: left;
					}
					
					.fees_table .right {
						text-align: right;
					}
					
					
					</style>

					
					<table class="fees_table" style="font-size: 18px; width: 100%;">
                    <tr style="border-bottom: 2px solid #25292c; padding: 5px 0;">
                    <th class="left" style="width: 80%;">Description</th>
                    <th class="right" style="width: 20%;">USD</th>
                    </tr>
                    <tr>
                    <td class="left">Activation Fee</td>
                    <td class="right">Free</td>
                    </tr>
                    <tr>
                    <td class="left">Get PIN / PIN Change</td>
                    <td class="right">Free</td>
                    </tr>
                    <tr style="border-bottom: 2px solid #25292c; padding: 5px 0;">
                    <th colspan="2" class="left">Load & Transfer Fees</th>
                    </tr>
                    <tr>
                    <td class="left">Card to Card Transfer (by SMS or Website)</td>
                    <td class="right">2</td>
                    </tr>
                    <tr>
                    <th colspan="2" class="left" style="border-bottom: 2px solid #25292c; padding: 5px 0;">Load & Transfer Fees</th>
                    </tr>
                    <tr>
                    <td class="left">Maximum Card Balance  (15K Euro equivalent)</td>
                    <td class="right">20,000</td>
                    </tr>
                    <tr>
                    <th colspan="2" class="left" style="border-bottom: 2px solid #25292c; padding: 5px 0;">Retail Purchase Fees & Limits</th>
                    </tr>
                    <tr>
                    <td class="left">Retail Purchase Transaction</td>
                    <td class="right">0.05</td>
                    </tr>
                    <tr>
                    <td class="left">Retail Transaction Refund</td>
                    <td class="right">Free</td>
                    </tr>
                    <tr>
                    <td class="left">Declined Transaction Fee</td>
                    <td class="right">Free</td>
                    </tr>
                    <tr>
                    <th colspan="2" class="left" style="border-bottom: 2px solid #25292c; padding: 5px 0;">ATM Fees & Limits</th>
                    </tr>
                    <tr>
                    <td class="left">ATM Withdrawal - USD</td>
                    <td class="right">1.20</td>
                    </tr>
                    <tr>
                    <td class="left">ATM Withdrawal - Non USD</td>
                    <td class="right">3.00</td>
                    </tr>
                    <tr>
                    <th colspan="2" class="left" style="border-bottom: 2px solid #25292c; padding: 5px 0;">Foreign Exchange Conversion Fee</th>
                    </tr>
                    <tr>
                    <td class="left">Foreign Exchange Markup (for transactions in a currency other than USD)</td>
                    <td class="right">2.00%</td>
                    </tr>
                    <tr>
                    <th colspan="2" class="left" style="border-bottom: 2px solid #25292c; padding: 5px 0;">Administration Fees</th>
                    </tr>
                    <tr>
                    <td class="left">Monthly Service Charge (Charged from month 1 from activation onwards)</td>
                    <td class="right">See Purchase Receipt</td>
                    </tr>
                    </table>

					</div>

				</div>
				<!-- container -->

		</section>
		<!-- section -->
        

		<section class="featured" id="featured"  data-stellar-background-ratio="0.5" style="background-image: url(<?php echo get_template_directory_uri();?>/img/parallax4.jpg);">

			 <div class="dotted-overlay">

			<div class="offset">

				<!-- container -->
				<div class="container clearfix">

					<div class="sixteen columns">

						<div class="title" style="font-size: 36px;">FAQs</div>
						<div class="devider" style="margin-bottom: 0px;"></div>

					</div>

				</div>
				<!-- container -->

			</div>
            
            </div>

		</section>



<!-- section -->
		<section class="faq" id="faq">

			<div class="faqs offset">

				<!-- container -->
				<div class="container clearfix">

					<div class="sixteen columns">


					</div>
                    
				</div>
				<!-- container -->
                
                <!-- container -->
				<div class="container">
					
					<div class="feature sixteen columns" style="opacity: 0;">
                        
                        	
<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">How does the T24 PayVault card work?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>The T24 PayVault Card is a reloadable prepaid card that looks and functions just like any other VISA card without offering a credit facility. Cards are activated and provided a PIN over the phone. You may use the card at any POS, online or ATM terminal displaying the VISA® trademark. In order to use the card, you must have funds available on the card. The value of a purchase is then deducted from the card balance.</p>
</div>

<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">Does my credit rating or bank account balance matter?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>No, the cardholders credit history or bank account balance is not considered when processing a card application.</p>
</div>


<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">How do I manage my prepaid account?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>The T24 online transaction platform enables cardholders to conveniently transact with and manage their card accounts from their mobile phones by simply sending SMS messages to transfer funds, check their balance, etc. To find out more please see the section <a style="cursor: pointer;" data-url="management" data-type="in">Account Management</a>.</p>
</div>


<!--<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">How do I load funds onto the card?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>The T24 PayVault prepaid card is a single source of funds card and as an individual cardholder you are unable to load funds yourself. </p>
</div>-->


<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">Is my account, with full transaction details and history available for viewing?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>Yes, your account and transaction information is available 24/7, online, via an account management facility. You can also check your balance and last three transactions anytime via SMS.</p>
</div>


<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">How secure are these cards? What if a card is lost/stolen?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>The cards are personalised and a PIN is associated with every card. All payments are made through a secure channel. In the event that a card is lost or stolen it can be blocked immediately, locking the funds on the card. A replacement card will then be issued to you. Exposure to loss is limited to the amount of funds that exist on the card at any point in time. To read more about the security features, please see the section <a style="cursor: pointer;" data-url="cardsecurity" data-type="in">Card Security</a>.</p>
</div>


<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">How does the mobile functionality work?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>For full information on the SMS functionality on your T24 PayVault Card, please see <a style="cursor: pointer;" data-url="sms" data-type="in">SMS functionality</a></p>
</div>


<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">Can I block a card temporarily?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>Yes, you may lock a card temporarily and unlock it at your convenience using SMS. Please see the SMS section for instructions <a style="cursor: pointer;" data-url="sms" data-type="in">SMS functionality</a></p>
</div>



<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">May I apply for multiple cards?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>The T24 PayVault card is personal and we only allow 1 card per cardholder.</p>
</div>


<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">When can I start using my Card?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>Upon receipt of their T24 PayVault card, cardholders must sign the reverse of the card in the box highlighted 'authorised signature' and then activate their card either online or by phone, using the number found on the reverse of the card.</p>
</div>


<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">Is any interest earned on the prepaid account?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>There is no interest accrued on the prepaid funds.</p>
</div>


<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">What are the fees and terms and conditions?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>Read the full Terms and Conditions here: <a style="cursor: pointer;" data-url="download/T24 Cardholder Agreement PayVault JUL 2014.pdf" data-type="out">Terms and Conditions</a></p>
</div>



<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">Do the cards have an expiry date?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>Yes, the T24 PayVault Card expires after three years. If the cardholder is actively using the card, a replacement will be offered. The validity period is printed on the front of the card.</p>
</div>



<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">How do I get my PIN?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>Your PIN is retrieved through our Interactive Voice Response (IVR) system. To activate your T24 PayVault prepaid card, have your card and AccessCode ready. Then call +44 (0)20 7272 0935 and follow the instructions.</p>
</div>



<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">What is the minimum balance I have to keep on the card?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>There is no minimum balance requirement for the T24 PayVault Card.</p>
</div>



<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">What is 3D secure?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>3D Secure is a safety protocol developed by VISA to improve the security of online payments. All T24 PayVault cards are 3D Secure enabled.</p>
</div>



<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">Why is my card declined at self-service petrol stations when I have enough money to cover the bill?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>Self-service petrol stations do not have the ability to check your balance online. For your security, we cannot authorise this type of transaction.</p>
</div>



<!--<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">What happens if my application is declined?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>The cost of the application will be reversed back to your credit/debit card at no charge.</p>
</div>-->




<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">Can I use my card overseas?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>You can use your T24 PayVault Card anywhere in the world where the VISA Acceptance Mark is displayed.</p>
</div>



<div class="title" style="font-size: 16px; height: 36px;"><div style="display: table; height: 100%;"><div style="display: table-cell; vertical-align: middle;">How do I log on to my account?&nbsp;&nbsp;&nbsp;<i class="ion-arrow-down-b" style="color: #46a694; font-size: 16px;"></i></div></div></div>
<div class="text" style="max-height: 0px; overflow: hidden;">
<p>You can log on to your account here: <a style="cursor: pointer;" data-type="out" data-url="https://www.secure.t24prepaid.com/">Account Login</a></p>
</div>


                        


					
					</div>

				</div>
				<!-- container -->

		</section>
		<!-- section -->

		<!-- section -->
		<section class="reviews" id="reviews">

			<div class="offset">

				<!-- container -->
				<div class="container clearfix">

					<div class="sixteen columns">
						<div class="title" style="color: #ffffff; font-size: 24px;">A word from our MD</div>
						<div class="devider" style="background-color: #ffffff;"></div>
					</div>

				</div>
				<!-- container -->

				<!-- container -->
				<div class="container clearfix">

					<div class="sixteen columns quotes">

						<ul class="slides">
                        
							<li class="quote">

								<blockquote style="color: #ffffff;">We work hard on continuously improving our products and the offerings that our cardholders can enjoy. Our in-house IT solutions gives us the unique ability of being able to fully meet the needs and wants of our corporate clients, allowing us to be flexible in our solutions.</blockquote>

								<!--<img src="./img/reviews/review-1.jpg" alt="">-->

								<div class="title" style="color: #ffffff;">Philip Meyer</div>

								<div class="subtitle" style="color: #ffffff;">Managing Director, Transact 24</div>

							</li>

							<!--<li class="quote">

								<blockquote style="color: #ffffff;">Morbi ullamcorper nisi velit, eu accumsan ante accumsan nec. Nam vestibulum et dolor et aliquam. Nam lobortis placerat tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec at tempor sapien. Nunc urna lorem, laoreet quis aliquam a, porta ac lacus.</blockquote>

								<!--<img src="./img/reviews/review-2.jpg" alt="">

								<div class="title" style="color: #ffffff;">Bill Johnson</div>

								<div class="subtitle" style="color: #ffffff;">CEO at Sparkles</div>-->

							</li>

							<!--<li class="quote">

								<blockquote style="color: #ffffff;">Nam vestibulum et dolor et aliquam. Nam lobortis placerat tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec at tempor sapien. Nunc urna lorem, laoreet quis aliquam a, porta ac lacus. Morbi ullamcorper nisi velit, eu accumsan ante accumsan nec.</blockquote>

								<img src="./img/reviews/review-3.jpg" alt="">

								<div class="title" style="color: #ffffff;">Bill Johnson</div>

								<div class="subtitle" style="color: #ffffff;">CEO at Sparkles</div>

							</li>-->

						</ul>	

					</div>

				</div>
				<!-- container -->
							
			</div>

		</section>
		<!-- section -->

	<!-- section -->
	<section class="contact" id="contact" style="margin-bottom: -1261px; height: 1140px; overflow: hidden;">
       

	<div id="map-canvas"></div>

			<div class="offset" style="position: relative;">

				<!-- container -->
				<div class="container clearfix">

					<div class="sixteen columns">
						<div class="title">Contact Us</div>
                        <div class="subtitle">Let’s talk about your payout requirement</div>
						<div class="devider"></div>
					</div>

				</div>
				<!-- container -->
                
                <div class="container">
					
					<div class="feature one-third column animated fadeInDown" style="opacity: 0;">

						<div class="icon"><i class="ion-email" style="color: #46a694; font-size: 36px;"></i></div>
						<div class="text" style="font-size: 18px;">support@t24payvault.com</div>
						

					</div>

					<div class="feature one-third column animated fadeInDown" style="opacity: 0;">



						
                        <div class="icon"><i class="ion-location" style="color: #46a694; font-size: 36px;"></i></div>
						<div class="text" style="font-size: 18px;">Transact24 Limited, 8A Pitmans Alley, Main Street, Gibraltar</div>
						

					</div>

					<div class="feature one-third column animated fadeInDown" style="opacity: 0;">

						<div class="icon"><i class="ion-iphone" style="color: #46a694; font-size: 36px;"></i></div>
						<div class="text" style="font-size: 18px;">+44 (0)20 7281 3033</div>
						

					</div>

				</div>

				<!-- container -->
				<div class="container clearfix">

					<div class="form sixteen columns">
                    
                    <div id="contact-success" style="text-align: left; margin-bottom: 15px;"></div>

						<form id="contact-form">
                        
                        <div class="container clearfix">
                        
                        <div class="eight columns" style="margin-left: 0px; margin-right: 0px; float: left; width: 510px;">

							<p>	
                            <label for="first_name" style="text-align: left; height: 21px; max-height: 21px; color: #D64541;">*Required</label>
                            <input type="text" name="first_name" id="first_name" placeholder="First Name" />
							</p>

							<p>
                            	<label for="last_name" style="text-align: left; height: 21px; max-height: 21px; color: #D64541;">*Required</label>
					        	<input type="text" name="last_name" id="last_name" placeholder="Last Name" />
							</p>

							<p> 
                            	<label for="company_name" style="text-align: left; height: 21px; max-height: 21px; color: #D64541;">*Required</label>
					        	<input type="text" name="company_name" id="company_name" placeholder="Company Name" />
							</p>
                            
                            <p> 
                            	<label for="country_incoproration" style="text-align: left; height: 21px; max-height: 21px; color: #D64541;"></label>
					        	<input type="text" name="country_incorporation" id="country_incorporation" placeholder="Country of Incorporation" />
							</p>
                            
                            </div>
                            
                            <div class="eight columns" style="margin-right: 0px; margin-left: 0px; float: right; width: 510px; color: #D64541;"> 
                            
                            <p>
                            	<label for="email" style="text-align: left; height: 21px; max-height: 21px; color: #D64541;">*Required</label>
					        	<input type="text" name="email" id="email" placeholder="E-mail" />
							</p>

							<p>
                            	<label for="phone" style="text-align: left; height: 21px; max-height: 21px; color: #D64541;"></label>
					        	<input type="tel" name="phone" id="phone" placeholder="Phone" />
							</p>

							<p> 
                            	<label for="website" style="text-align: left; height: 21px; max-height: 21px; color: #D64541;">*Required</label>
					        	<input type="text" name="website" id="website" placeholder="Website" />
							</p>
                            
                            <p> 
                            	<label for="number_cards" style="text-align: left; height: 21px; max-height: 21px; color: #D64541;"></label>
					        	<input type="text" name="number_cards" id="number_cards" placeholder="No. of Cards" />
							</p>
                            
                            </div>
                            
                            </div>

							<p>
                            	<label for="description" style="text-align: left; height: 21px; max-height: 21px; color: #D64541;"></label>
								<textarea name="description" id="description" cols="45" rows="10" placeholder="
Description Of How Cards Will Be Used"></textarea>
							</p>

					        <p>
					        	<input type="submit" id="submit" name="submit" value="Submit" onclick="formSubmit()"></button>
					        </p>

					    </form>

					</div>
					<!-- container -->

				</div>
				<!-- container -->

			</div>


		</section>
		<!-- section -->

<?php get_footer(); ?>
