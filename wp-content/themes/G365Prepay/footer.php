			</div>
		</section>
		<!-- End Main -->

		<!-- Footer -->
		<footer>
			<?php if (eva_option("footer_widget")) { ?>
			<div class="container">
				<div class="row">
					<?php
					$grid = eva_option('footer_layout') ? eva_option('footer_layout') : '4-4-4';
					$i = 1;
					foreach (explode('-', $grid) as $g) {
						echo '<div class="span' . esc_attr( $g ) . ' col-' . esc_attr( $i ) . ' padbot30">';
						dynamic_sidebar("footer-sidebar-$i");
						echo '</div>';
						$i++;
					}
					?>
				</div>
			</div>
			<?php } ?>

			<div id="bottom">
				<div class="container">
					<div class="row">

						<!-- Logo -->
						<?php theme_footer_logo(); ?>
						<!-- //Logo -->

						<!-- Footer Social -->
						<?php if (eva_option("footer_social")) { ?>
							<div class="span7"><div class="eva-social-icon"><?php eva_social(); ?></div></div>
						<?php } ?>
						<!-- //Footer Social -->

						<div class="span3 pull-right right">
							<p class="copyright">&copy; <?php echo date('Y');?> <a href="/">G365 Prepay</a>.</p>
							<div id="scrollTop"><i class="fa fa-chevron-up"></i></div>
						</div>
					</div>
				
                                <div class="row">
                                      <p style="margin-left: 30px;">This card is issued by CashFlows®. CashFlows® is a trading name of the Voice Commerce Limited. Voice Commerce Limited is a wholly owned subsidiary of Voice Commerce Group Limited and is authorised by the Financial Conduct Authority under the Electronic Money Regulations 2011 (register reference 900006) for the issuing of electronic money and the provision of payment services.</p>
                                </div>

</div>
			</div>
		</footer>
		<!-- //Footer -->

	</div>
	<!-- Page Wrap -->

<?php
global $eva_end;
printf( '%s', $eva_end );
?>

<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">

	function initialize() {
		var myLatlng = new google.maps.LatLng(51.5199282,-0.1597721000000547);
        var mapOptions = {
		scrollwheel: false,
    		navigationControl: false,
    		mapTypeControl: false,
    		scaleControl: false,
    		draggable: false,
   		mapTypeId: google.maps.MapTypeId.ROADMAP,
		zoom: 16,
		disableDefaultUI: true,
		center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      	var myMarker = new google.maps.LatLng(51.5199282,-0.1597721000000547);
	  	var marker = new google.maps.Marker({
      	position: myMarker,
      	map: map
  		});
	}
    
	google.maps.event.addDomListener(window, 'load', initialize);
	
	function toTop() {
    	$('html,body').animate({ scrollTop: 0 }, 'slow');
	}
	
</script>

<?php
/* Google Analytics Code */
printf( '%s', stripslashes(eva_option('tracking_code')) );

?>



<script src="http://g365prepay.boarding.transact24.com/wp-content/themes/perfecti/assets/js/script.custom.js"></script>
<link href="http://g365prepay.boarding.transact24.com/wp-content/themes/perfecti/assets/css/prettyPhoto.css" rel="stylesheet" />

<?php wp_footer(); ?>

</body>
</html>