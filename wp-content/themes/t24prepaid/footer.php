<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

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

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 ft-col wow fadeInLeft">
				<h4 class="ft-heading">About Transact24</h4>
				<p>Transact24 Limited is incorporated with its Head Office in Hong Kong with operations, technical and support centers in Hong Kong, Zhuhai (China) and South Africa. Regional registered satellite offices are located in Australia, Austria, the UK, Indonesia, Macau and the USA.</p>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo_light.png" style="width: 80%;">
			</div>
			<div class="col-md-3 col-sm-6 ft-col wow fadeInLeft">
				<h4 class="ft-heading"></h4>
			</div>
            <div class="col-md-3 col-sm-6 ft-col wow fadeInRight">
            	<h4 class="ft-heading">Our Links</h4>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-link"></i>  Home</a><br>
                <a href="<?php echo esc_url( home_url( '/payout-management' ) ); ?>"><i class="fa fa-link"></i>  Payout Management</a><br>
                <a href="<?php echo esc_url( home_url( '/card-director' ) ); ?>"><i class="fa fa-link"></i>  Card Director</a><br>
                <a href="<?php echo esc_url( home_url( '/card-features' ) ); ?>"><i class="fa fa-link"></i>  Card Features</a><br>
                <a href="<?php echo esc_url( home_url( '/our-cards' ) ); ?>"><i class="fa fa-link"></i>  Our Cards</a>
            </div>
			<div class="col-md-3 col-sm-6 ft-col wow fadeInRight">
				<h4 class="ft-heading">Get In Touch</h4>
				<address>
				<strong>Transact24 Limited</strong><br>
                3rd floor, Heritage House<br>
                235 Main Street<br>
                Gibraltar<br>
				<abbr title="Phone"><i class="fa fa-phone"></i>:</abbr> +852 2851 0145<br>
				<abbr title="Email"><i class="fa fa-envelope-o"></i>:</abbr> <a href="mailto:enquiries@transact24.com">enquiries@transact24.com</a><br>
				<abbr title="Website"><i class="fa fa-globe"></i>:</abbr> <a href="http://www.transact24.com">www.transact24.com</a>
				</address>
			</div>
     	</div>
	</div>
	<div class="copyright-info">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<p>Copyright &copy; <a href="http://www.transact24.com"> Transact24 Trading Limited </a> , <?php echo date('Y');?>.</p>
				</div>
				<div class="col-sm-6 leagles"> <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/download/T24%20Cardholder%20Agreement%20T24Prepaid%20JUL%202014.pdf" target="_blank"> Terms and Conditions </a> <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/download/Privacy%20Policy%20T24%20Prepaid%202014.pdf" target="_blank"> Privacy Policy </a> <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/download/Data%20protection%20policy%20T24%20Prepaid%202014.pdf" target="_blank"> Data Protection Policy </a></div>
			</div>
            <div class="row">
            	<div class="col-sm-12" style="padding-top: 30px;">
            	<p>This card is issued by CashFlows®. CashFlows® is a trading name of the Voice Commerce Limited. Voice Commerce Limited is a wholly owned subsidiary of Voice Commerce Group Limited and is authorised by the Financial Conduct Authority under the Electronic Money Regulations 2011 (register reference 900006) for the issuing of electronic money and the provision of payment services.</p>
                </div>
            </div>
		</div>
	</div>
</footer>
</section>
</div>
<script>
window.template_dir_url = '<?php echo esc_url( get_template_directory_uri() ); ?>/';
</script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/jquery-1.11.1.min.js"></script> 
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/bootstrap.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/nivo-lightbox.min.js"></script> 
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/parallax.js"></script> 
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/totemticker.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.easing.1.3.js"></script> 
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/wow.min.js"></script> 
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/appear-count.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/scrolltotop.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd8xtFrsKqF2upO5jFfuYwum7gCAYesLI&sensor=true"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.stellar.js" type="text/javascript"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script> 
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-XXXX-Y', 'auto');
ga('send', 'pageview');
setTimeout(function(){ga('send','event','Control','Bounce Rate','')},10000)
</script>
<!-- End Google Analytics -->
<?php wp_footer(); ?>
</body>
</html>
