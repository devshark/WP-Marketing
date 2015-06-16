   
<?php if ( is_front_page() && is_home() ): ?>

<footer id="site-footer">
	<div id="footer-bottom" class="section dark">
		<div class="container clearfix">
			<div class="grid_6">
            	<p class="copyright">
                	&copy;2015 Transact24 Trading Limited
                </p>
            </div>
            <div class="grid_6 omega">
            	<nav id="footer-nav" class="nav horizontal text-right">
                	<ul>
                    	<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/download/T24%20Carholder%20Agreement%20Blackshield%20June%202015.pdf" target="_blank">Terms and Conditions</a></li>
                        <li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/download/Privacy%20Policy%20June%202015%20T24%20Blackshield.pdf" target="_blank">Privacy Policy</a></li>
                        <li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/download/Data%20protection%20policy%20June%202015%20T24%20Blackshield.pdf" target="_blank">Data Protection Policy</a></li>
                    </ul>
                </nav>
           	</div>
		</div>
	</div>
    <div id="footer-bottom" class="section dark">
		<div class="container clearfix">
			<div class="grid_12 omega">
				<p>This card is issued by CashFlows®. CashFlows® is a trading name of the Voice Commerce Limited. Voice Commerce Limited is a wholly owned subsidiary of Voice Commerce Group Limited and is authorised by the Financial Conduct Authority under the Electronic Money Regulations 2011 (register reference 900006) for the issuing of electronic money and the provision of payment services.</p>
			</div>
		</div>
	</div>
</footer>

<?php else: ?>

<footer id="site-footer">
	<div id="footer-bottom" class="section dark">
		<div class="container clearfix">
			<div class="grid_6">
            	<p class="copyright">
                	&copy;2015 Transact24 Trading Limited
                </p>
            </div>
            <div class="grid_6 omega">
            	<nav id="footer-nav" class="nav horizontal text-right">
                	<ul>
                    	<li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/download/T24%20Carholder%20Agreement%20Blackshield%20June%202015.pdf" target="_blank"></a></li>
                        <li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/download/Privacy%20Policy%20June%202015%20T24%20Blackshield.pdf" target="_blank">隐私政策</a></li>
                        <li><a href="<?php echo esc_url( get_template_directory_uri() ); ?>/download/Data%20protection%20policy%20June%202015%20T24%20Blackshield.pdf" target="_blank">数据保护政策</a></li>
                    </ul>
                </nav>
           	</div>
		</div>
	</div>
    <div id="footer-bottom" class="section dark">
		<div class="container clearfix">
			<div class="grid_12 omega">
				<p>This card is issued by CashFlows®. CashFlows® is a trading name of the Voice Commerce Limited. Voice Commerce Limited is a wholly owned subsidiary of Voice Commerce Group Limited and is authorised by the Financial Conduct Authority under the Electronic Money Regulations 2011 (register reference 900006) for the issuing of electronic money and the provision of payment services.</p>
			</div>
		</div>
	</div>
</footer>

<?php endif; ?>
                    
<div class="clearfix"></div>


	<script>window.template_uri = '<?php echo esc_url( get_template_directory_uri() ); ?>/'</script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/waypoints.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/countUp.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.appear.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/scripts.js"></script>
	<!-- <script type="text/javascript" src="js/scripts.min.js"></script> -->
    
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?v=3.13&amp;sensor=false&amp;libraries=geometry&amp;1343675513"></script>
        <!-- end scripts -->
    
    <script>
	
	var myLatlng = new google.maps.LatLng(36.139763,-5.353785);
	
	function initialize() {
		var mapOptions = {
			zoom: 15,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.SATELLITE,
			disableDefaultUI: true
		}

		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map
		});
	}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    
    
    <!--[if IE]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    
    <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-25205581-2', 't24blackshield.com');
	ga('send', 'pageview');
	</script>
	<?php wp_footer();?>
</body>
</html>

