<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?>

	<!-- footer -->
	<footer>
		<div class="black container top largetoppadding midbottompadding">
			<section class="row bigbottompadding">
			
				<!-- footer widget -->
				<div class="four columns">
					<img src="<?php echo get_template_directory_uri();?>/img/iuse-logo.png" style="width: 130px;">
					<p class="greytext midtoppadding">
						 i-use is an extended payment consulting brand of CSP, offering integrated solutions for corporate clients with an emphasis on internet, international and instant transactions, through an innovative, co-branded prepaid card product.
					</p>
				</div>
				<!-- footer widget -->
				
				<div class="five columns" id="footer-links" style="float: right !important;">
					<h6 class="whitetext bold meta" style="width: 100%;">OUR LINKS</h6>	
					<div style="width: 50%; float: left;">
						<ul class="links midtoppadding">
							<li><a href="<?php echo esc_url( home_url('/'));?>">Home</a></li>
							<li><a href="<?php echo esc_url( home_url('/home'));?>">The Offer</a></li>
							<li><a href="<?php echo esc_url( home_url('/card-usage'));?>">Card Usage</a></li>
							<li><a href="<?php echo esc_url( home_url('/account-management'));?>">Account Management</a></li>
							<li><a href="<?php echo esc_url( home_url('/sms-functionality'));?>">SMS Functionality</a></li>
							<li><a href="<?php echo esc_url( home_url('/money-loaded'));?>">Money Loaded</a></li>
							<li><a href="<?php echo esc_url( home_url('/card-safety'));?>">Card Safety</a></li>
						</ul>
					</div>
				
					<div style="width: 50%; float: left;">
						<ul class="links midtoppadding">
							<li><a href="<?php echo esc_url( home_url('/card-fees'));?>">Fees</a></li>
							<li><a href="<?php echo esc_url( home_url('/card-faq'));?>">FAQs</a></li>
							<li><a href="<?php echo esc_url( home_url('/about'));?>">About us</a></li>
							<li><a href="<?php echo get_template_directory_uri();?>/i-use%20cardholder%20agreement%20JUN%202015%20-%20TOC.pdf">Terms and conditions</a></li>
							<li><a href="<?php echo get_template_directory_uri();?>/i-use%20Privacy%20Policy%20SEP%202013.pdf">Privacy policy</a></li>
							<li><a href="<?php echo get_template_directory_uri();?>/i-use%20Data%20protection%20policy%20SEP%202013.pdf">Data protection</a></li>
						</ul>
					</div>
				</div>			
			</section><!--row bigbottompadding-->
		</div><!--black container top largetoppadding midbottompadding-->
		<!-- end top footer section -->

		<!-- bottom footer FCA disclaimer section -->
		<div class="black container midpadding">
			<section class="row smalltoppadding">
				<!-- FCA Discalimer-->
				<div class="fourteen columns">
					<p class="smallfont whitetext disctext">
						 This card is issued by CashFlows&reg;. CashFlows&reg; is a trading name of the Voice Commerce Limited. Voice Commerce Limited is a wholly owned subsidiary of Voice Commerce Group Limited and is authorised by the Financial Conduct Authority under the Electronic Money Regulations 2011 (register reference 900006) for the issuing of electronic money and the provision of payment services. 
						 <br>
						 <br>
						 &copy; <?php echo date('Y');?> Card Service Provider
					</p>
				</div>
			</section><!--row bigbottompadding-->
		</div><!--black container midpadding-->
	</footer>
	
	<script>window.template_uri = '<?php echo get_template_directory_uri();?>';</script>
	<!-- JavaScript at the bottom for fast page loading -->
	<!-- Grab jQuery's CDN provided by MediaTemple, with a protocol relative URL; fall back to local if offline -->
	<!--<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-migrate-1.2.1.min"><\/script>')</script>-->
	<script src="<?php echo get_template_directory_uri();?>/js/plugins.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/libs/gumby.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
	<!-- end scripts-->
	
	<!-- Prompt IE 6 users to install Chrome Frame. We suggest that you not support IE 6.
		   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	  <![endif]-->

	<script src="<?php echo get_template_directory_uri();?>/js/footer.js"></script>

	<script type="text/javascript">
		(function() {
		  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		  po.src = 'https://apis.google.com/js/plusone.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		})();
	  </script>
	<!-- End Social Widget Rendering Javascript /-->
	<?php wp_footer();?>
	</body>
</html>
