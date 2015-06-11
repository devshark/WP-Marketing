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
	<!-- SOCIAL -->
	<div id="social" class="slide" data-color="white">
		<div class="overlay"></div>
		<div class="border-top"></div>

		 <!-- Social icons -->
		 <div id="social-container" class="wow fadeInUp" style="width: 1080px;">
			  <div class="one_fourth">
				<h3 style="color: #555;">About us</h3>
				<p style="color: #999;">Transact24 genuinely believes in Prepaid Card solutions that make a difference in your life and your business. The head office of Transact24 is in Hong Kong and the card is issued out of UK.</p>
			  
				<div style="margin-top: 15px;">
					<img src="/wp-content/uploads/sites/16/2015/06/prepaid365-international.png"  style="width:49%;float:left;"/>
					<img src="/wp-content/uploads/sites/16/2015/06/prepaid365-app.png" style="width:49%;float:left;"/>
					<div class="clearfix"></div>
				</div>
			  </div>
			  <div class="one_fourth">
				<h3 style="color: #555;">Latest News</h3>
				<?php 
				$url= 'http://t24:24com@'.$_SERVER['HTTP_HOST'].'/feed/';
				$xml = simplexml_load_file($url);
				?>
				<div style="color: #999;"><i class="fa fa-calendar" style="color: #46a694;"></i><?php $datesplit = explode(" ", $xml->channel->item[0]->pubDate); echo $datesplit[0].' '.$datesplit[1].' '.$datesplit[2].' '.$datesplit[3]; ?></div>
				<div style="margin-top: 10px;"><a href="<?php echo $xml->channel->item[0]->link; ?>" target="_blank"><?php echo $xml->channel->item[0]->title; ?></a></div>
				<p  style="color: #999; margin-top: 10px;"><?php $descstring = strip_tags($xml->channel->item[0]->description); echo substr($descstring, 0, strpos($descstring, ' ', 210)).'...';  ?></p>
				<div style="margin-top: 10px;"><a onclick="ga('send','event','Footer','Click','Latest New/Read More');" href="<?php echo $xml->channel->item[0]->link; ?>" target="_blank">Read more</a></div>
			  </div>
			  <div class="one_fourth overlay-menu" style="margin-bottom: 0px;">
				<h3 style="color: #555;">Links</h3>
				<div class="one_half" style="margin-bottom: 0px;">
					<ul style="list-style-type: none; padding: 0; margin-top: 0px;">
						<li><a onclick="ga('send','event','Footer','Click','Overview');" href="/prepaid-card/" class="scroll ui-link">Overview</a></li>
						<li style="margin-top: 10px;"><a onclick="ga('send','event','Footer','Click','Features');" class="scroll ui-link" href="/prepaid-card/features">Features</a></li>
						<li style="margin-top: 10px;"><a class="scroll feature-one" href="/prepaid-card/features/using-your-card">Using your card</a></li>
						<li style="margin-top: 10px;"><a class="scroll feature-two" href="/prepaid-card/features/where-to-use/">Where to use?</a></li>
						<li style="margin-top: 10px;"><a class="scroll feature-three" href="/prepaid-card/features/loading/">Loading Options</a></li>
						<li style="margin-top: 10px;"><a class="scroll feature-four" href="/prepaid-card/features/fund-security/">Fund Security</a></li>
						<li style="margin-top: 10px;"><a class="scroll feature-five" href="/prepaid-card/features/card-safety/">Card Safety</a></li>
						<li style="margin-top: 10px;"><a class="scroll feature-six" href="/prepaid-card/features/mobile/">Mobile</a></li>
					</ul>
				</div>
				<div class="one_half_last" style="margin-bottom:0px;">
					<ul style="list-style-type: none; padding: 0; margin-top: 0px;">
						<li style="margin-top: 10px;"><a onclick="ga('send','event','Footer','Click','Fee Highlights');" class="scroll" href="/prepaid-card/fee-highlights/">Fee Highlights</a></li>
						<li style="margin-top: 10px;"><a onclick="ga('send','event','Footer','Click','FAQa');" class="scroll" href="/faq/">FAQs</a></li>
						<li style="margin-top: 10px;"><a onclick="ga('send','event','Footer','Click','Contact');" class="scroll" href="/contact">Contact</a></li>
						<li style="margin-top: 10px;"><a onclick="ga('send','event','Footer','Click','Register');" class="scroll" href="https://www.secure.t24prepaid.com/register">Register</a></li>
						<li style="margin-top: 10px;"><a onclick="ga('send','event','Footer','Click','Sign In');" class="scroll" href="https://www.secure.t24prepaid.com/">Sign In</a></li>
						<li style="margin-top: 10px;"><a onclick="ga('send','event','Footer','Click','Blog');" class="scroll" href="/blog">Blog</a></li>
						<li style="margin-top: 10px;"><a onclick="ga('send','event','Footer','Download','Terms and Conditions');" href="<?php echo esc_url( get_template_directory_uri() ); ?>/download/T24%20Cardholder%20Agreement%20Black%20Oct%202013.pdf" target="_blank">Terms & Conditions</a></li>
						<li style="margin-top: 10px;"><a onclick="ga('send','event','Footer','Download','Privacy terms');" href="<?php echo esc_url( get_template_directory_uri() ); ?>/download/T24%20Prepaid%20Privacy%20Policy%2020130828.pdf" target="_blank">Privacy</a></li>
						<li style="margin-top: 10px;"><a onclick="ga('send','event','Footer','Download','Data Protection');" href="<?php echo esc_url( get_template_directory_uri() ); ?>/download/T24%20Prepaid%20Data%20protection%20policy%2020130828.pdf" target="_blank">Data Protection</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			  </div>
			  <div class="one_fourth_last">
				<h3 style="color: #555;">Contact us</h3>
            	<p style="color: #999;"><i class="fa fa-map-marker" style="color: #46a694;"></i> Transact24 Trading Limited, 3rd floor, Heritage House, 235 Main Street, Gibraltar</p>
            	<p style="color: #999;"><i class="fa fa-phone" style="color: #46a694;"></i> +44 (0)20 7281 6090</p>
            	<p style="color: #999;"><i class="fa fa-envelope" style="color: #46a694;"></i> support&#64;t24blackcard.com</p>
            	<p style="color: #999;"><i class="fa fa-skype" style="color: #46a694;"></i> T24BlackSupport</p>
                <ul class="soc">
                    <li><a class="soc-twitter" href="http://twitter.com/t24blackcard"></a></li>
                    <li><a class="soc-facebook" href="http://www.facebook.com/t24blackcard"></a></li>
                    <li><a class="soc-google sos-icon-last" href="http://plus.google.com/116217112222166421573"></a></li>
                </ul>
				<div style="margin-top: 15px;">
					<a style="float:left;margin-right:10px;" href="https://itunes.apple.com/hk/app/t24-prepaid/id932221752?mt=8" target="_blank" 
					onclick="_gaq.push(['_trackEvent', 'Footer', 'Click', 'Apps/AppStore']);"><img src="/wp-content/uploads/sites/16/2015/06/applebtn1.png" style="height: 35px; margin-top: 8px;"></a>
					<a style="float:left;" href="https://play.google.com/store/apps/details?id=com.transact24.T24Prepaid" target="_blank"
					onclick="_gaq.push(['_trackEvent', 'Footer', 'Click', 'Apps/PlayStore']);"><img src="/wp-content/uploads/sites/16/2015/06/googlebtn1.png" style="height: 35px; margin-top: 8px;"></a>
				    <div class="clear"></div>
				</div>
				<div style="margin-top: 15px;">
					<script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
					<a style="width:48%;float:left;padding-top:10px;" href="http://www.dmca.com/Protection/Status.aspx?ID=0df19cc2-306f-4d68-b5a3-124a918ec68b" title="DMCA.com Protection Program" class="dmca-badge" target="_blank" 
					onclick="_gaq.push(['_trackEvent', 'Footer', 'Click', 'DMCA Badge']);"> 
						<img src="//images.dmca.com/Badges/dmca_protected_sml_120j.png?ID=0df19cc2-306f-4d68-b5a3-124a918ec68b" alt="DMCA.com Protection Status" />
					</a>
					<div  style="width:48%;float:right;">
                        <!-- McAfee Secure Trustmark for www.t24blackcard.com -->
                		<a onclick="_gaq.push(['_trackEvent', 'McAfee', 'Click']);" target="_blank" href="https://www.mcafeesecure.com/verify?host=www.t24blackcard.com" title=""><img id="mcafee_top" class="mfes-trustmark" onmouseover="showMCAfeeIframe()" border="0" src="//cdn.ywxi.net/meter/www.t24blackcard.com/101.gif" style="width: 80px; margin:8px 0 0 10px;" title="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert('Copying Prohibited by Law - McAfee Secure is aTrademark of McAfee, Inc.'); return false;"></a>
                		<div id="pd_mouseOverWin" style="position: fixed; width: 330px; height: 344px; background-color: rgb(255, 255, 255); border: 1px solid rgb(221, 221, 221); box-shadow: rgba(0, 0, 0, 0.45098) 0px 7px 27px; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; overflow: hidden; z-index: 99999; top: 50px; right: 10px; display: none;"><div style="background:#f2f2f2;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td style="text-align:left;padding:5px;"><a href="https://www.mcafeesecure.com/" target="_blank"><img border="0" src="//cdn.ywxi.net/static/img/vh_logo.png" width="145" height="30"></a></td><td style="padding:10px;" width="9"><img id="pd_mouseOverWin_x" src="//cdn.ywxi.net/static/img/vh_close_button.png" width="9" height="9" style="cursor: pointer;" onclick="closeMCAfeeIframe()"></td></tr></tbody></table></div><iframe src="https://www.mcafeesecure.com/verify-float?corner=1&amp;width=330&amp;height=300&amp;host=www.t24blackcard.com" frameborder="0" scrolling="no" style="border:0;width:330px;height:300px;"></iframe></div>
                		<!--End McAfee Secure Trustmark -->
            		</div>
            		<div class="clear"></div>
				</div>
			</div>
			  
		 <div class="clear"></div>
		 </div>
		 
		 <!-- COPYRIGHT -->
		 <div id="copyright" class="wow fadeIn" style="width: 1080px; margin: 0 auto; color: #999 !important;">
			  <p>This card is issued by CashFlows&reg;. CashFlows&reg; is a trading name of the Voice Commerce Limited. Voice Commerce Limited is a wholly owned subsidiary of Voice Commerce Group Limited and is authorised by the Financial Conduct Authority under the Electronic Money Regulations 2011 (register reference 900006) for the issuing of electronic money and the provision of payment services.</p>
			  <p style="margin-top: 10px;">&copy; <?php echo date('Y');?> Transact24 Trading Limited</p>
		 </div>

	</div>
	<!-- END: SOCIAL -->

	<!-- JAVASCRIPT -->
	<script type="text/javascript">window.template_uri = '<?php echo esc_url( get_template_directory_uri() ); ?>/';</script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/jquery.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/easing.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/modernizr.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/fitvids.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/backstretch.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/swipebox.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/flexslider.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/tipTip.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/wow.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/tubular.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/menu.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/jquery.sidr.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/jqm-inlinetabs.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/jquery.stellar.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/custom.js"></script>

    <script>
    $(function(){
    	$('aside a,div#social a,#features-wrapper a').click(function(event){
    		$(this).removeClass('ui-link');
    		window.location.href = $(this).attr('href');
    	});
    	$('aside a,div#social a,#features-wrapper a').removeClass('ui-link');
    });
    </script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd8xtFrsKqF2upO5jFfuYwum7gCAYesLI&sensor=true"></script>

	<script>
	$(document).ready(function() {	
		
	$(window).stellar();	
		
	$('#simple-menu').sidr({
		name: 'sidr-right',
		side: 'right'
	}); 

	$('.ui-inlinetabs-bar li').click(function(){
		
		var clickedtab = $(this).attr("data-tab");
					
		if(clickedtab == 2){
			$('div[data-tab="2"]').load(window.template_uri+'ajax_content/features/acceptance.php?root=<?php echo esc_url( get_template_directory_uri() ); ?>');
		}
		else if(clickedtab == 3){
			$('div[data-tab="3"]').load(window.template_uri+'ajax_content/features/loading-options.php?root=<?php echo esc_url( get_template_directory_uri() ); ?>');
		}
		else if(clickedtab == 4){
			$('div[data-tab="4"]').load(window.template_uri+'ajax_content/features/money-loaded.php?root=<?php echo esc_url( get_template_directory_uri() ); ?>');
		}
		else if(clickedtab == 5){
			$('div[data-tab="5"]').load(window.template_uri+'ajax_content/features/card-safety.php?root=<?php echo esc_url( get_template_directory_uri() ); ?>');
		}
		else if(clickedtab == 6){
			$('div[data-tab="6"]').load(window.template_uri+'ajax_content/features/mobile.php?root=<?php echo esc_url( get_template_directory_uri() ); ?>');
		}
		
		
	});

	});
	</script> 

	<script type="text/javascript">
		
	var map;
	var hongkong = new google.maps.LatLng(36.138918, -5.353578);

	function initialize() {
		var roadAtlasStyles = [
	{
		"featureType": "road.highway",
		"elementType": "geometry",
		"stylers": [
			{ "saturation": -100 },
			{ "lightness": -8 },
			{ "gamma": 1.18 }
		  ]
	  }, {
		  "featureType": "road.arterial",
		  "elementType": "geometry",
		  "stylers": [
			{ "saturation": -100 },
			{ "gamma": 1 },
			{ "lightness": -24 }
		  ]
	  }, {
		  "featureType": "poi",
		  "elementType": "geometry",
		  "stylers": [
			{ "saturation": -100 }
		  ]
	  }, {
		  "featureType": "administrative",
		  "stylers": [
			{ "saturation": -100 }
		  ]
	  }, {
		  "featureType": "transit",
		  "stylers": [
			{ "saturation": -100 }
		  ]
	  }, {
		  "featureType": "water",
		  "elementType": "geometry.fill",
		  "stylers": [
			{ "saturation": -100 }
		  ]
	  }, {
		  "featureType": "road",
		  "stylers": [
			{ "saturation": -100 }
		  ]
	  }, {
		  "featureType": "administrative",
		  "stylers": [
			{ "saturation": -100 }
		  ]
	  }, {
		  "featureType": "landscape",
		  "stylers": [
			{ "saturation": -100 }
		  ]
	  }, {
		  "featureType": "poi",
		  "stylers": [
			{ "saturation": -100 }
		  ]
	  }, {
	  }
				]

	var mapOptions = {
		zoom: 16,
		disableDefaultUI: true,
		panControl: false,
		zoomControl: false,
		scrollwheel: false,
		navigationControl: false,
		mapTypeControl: false,
		scaleControl: false,
		draggable: false,
		disableDoubleClickZoom: true,
		center: hongkong,
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'usroadatlas']
		}
	};

	map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	var styledMapOptions = {
					
	};

	var usRoadMapType = new google.maps.StyledMapType(roadAtlasStyles, styledMapOptions);

	map.mapTypes.set('usroadatlas', usRoadMapType);
	map.setMapTypeId('usroadatlas');
				
	var marker = new google.maps.Marker({
		position: hongkong,
		icon: "<?php echo esc_url( get_template_directory_uri() ); ?>/images/marker.png",
		map: map
	});
			
	google.maps.event.addDomListener(window, 'resize', function() {
		map.setCenter(hongkong);
	});

	}

	google.maps.event.addDomListener(window, 'load', initialize);

	</script>


	<script>
	 new WOW().init();
	 $('.bxslider').bxSlider({
	  infiniteLoop: false,
	  hideControlOnEnd: true,
	  pager: false,
	  adaptiveHeight: true
	});

	var wow = new WOW(
	  {
		boxClass:     'wow',      // animated element css class (default is wow)
		animateClass: 'animated', // animation css class (default is animated)
		offset:       0,          // distance to the element when triggering the animation (default is 0)
		mobile:       true,       // trigger animations on mobile devices (default is true)
		live:         true,       // act on asynchronously loaded content (default is true)
		callback:     function(box) {
		  // the callback is fired every time an animation is started
		  // the argument that is passed in is the DOM node being animated
		}
	  }
	);
	
	
	</script>

	<script>

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new
	Date();a=s.createElement(o),

	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-25205581-1', 't24blackcard.com');
	ga('send', 'pageview');

	setTimeout(function(){ga('send','event','Control','Bounce Rate','')},10000)

	var _gaq = {
		e: 'event',
		c: 'Page',
		a: 'Click',
		l: 'Label',
		v: 'None',
		push : function(r){
			try{
				this.c = r[1];
				this.a = r[2];
				this.l = r[3];
				this.v = r[4];
			}catch(err){}
			ga('send', this.e, this.c, this.a, this.l, this.v);
		}
	}

	</script>
<?php wp_footer(); ?>
</body>
</html>
