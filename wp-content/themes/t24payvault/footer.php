<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Story
 */
?>
		<!-- section -->
		<section class="subscribe" id="subscribe">

			<div class="offset">

				<!-- container -->
				<div class="container">

					<div class="sixteen columns">
						<div class="arrow" id="to-top" style="z-index: 9999999; position: relative;">To the top</div>
				</div> 
				<!-- container -->

				<!-- container -->
				<div class="container">

					<div class="devider sixteen columns"></div>

				</div> 
				<!-- container -->


			</div>

		</section>
		<!-- section -->


		<!-- footer -->
		<footer style="position: relative; z-index: 9999999;">

			<div class="offset" style="margin-bottom: -22px;">

				

				<style>
				
				
				
				#footer-links {
					list-style-type: none;
				}
				
				#footer-links li {
					display: inline-block;
				}
				
				#footer-links a:visited, #footer-links a:link {
					color: #c8c8c8;
					font-size: 14px;
					font-weight: 700;
				}
				
				#footer-links a:hover, #footer-links a:focus {
					color: #c8c8c8;
				}
				
				
				</style>

				<!-- container -->
				<div class="container">

					<div class="sixteen columns">
                    
						<div class="copyright" style="float: left;">&copy;<?php echo date('Y');?> Transact24 Trading Limited</div>
                        
                        <div style="float: right;">
                        <ul id="footer-links" style="margin-top: 6px;">
                        <li style="margin-right: 10px;"><a style="cursor: pointer; color: #C8C8C8;" data-url="<?php echo get_template_directory_uri();?>/download/T24 Cardholder Agreement PayVault JUL 2014.pdf" data-type="out">Terms and Conditions</a></li>
                        <li style="margin-right: 10px;"><a style="cursor: pointer; color: #C8C8C8;" data-url="<?php echo get_template_directory_uri();?>/download/Privacy Policy T24 PayVault 2014.pdf" data-type="out">Privacy Policy</a></li>
                        <li><a style="cursor: pointer; color: #C8C8C8;" data-url="<?php echo get_template_directory_uri();?>/download/Data protection policy T24 PayVault 2014.pdf" data-type="out">Data Protection Policy</a></li>
                        </ul>
                        </div>
                        
					</div>
					
				</div> 
				<!-- container -->
                
                
                <!-- container -->
				<div class="container">
					<div class="sixteen columns">
						
                        <p style="font-size: 12px;">This card is issued by CashFlows&reg;. CashFlows&reg; is a trading name of the Voice Commerce Limited. Voice Commerce Limited is a wholly owned subsidiary of Voice Commerce Group Limited and is authorised by the Financial Conduct Authority under the Electronic Money Regulations 2011 (register reference 900006) for the issuing of electronic money and the provision of payment services.</p>
                        
					</div>
				</div>
				<!-- container -->

			</div>

		</footer>
		<!-- footer -->

	</div>
	<!-- wrapper -->


	<!--<div class="loader"></div>-->

	<!-- javascript -->
	<script>window.template_path = '<?php echo get_template_directory_uri();?>';</script>
	<script src="<?php echo get_template_directory_uri();?>/js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/magnific-popup.0.9.9.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/modernizr.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/waypoints.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/rome.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/countUp.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.bxslider.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/countUp.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.stellar.js" type="text/javascript"></script>
	<!-- javascript -->
    
    
    
    <script>


function formSubmit() {
	
  event.preventDefault();	

  var regemail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  var regurl = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/;
  var first_name = $('#contact-form').find('[name="first_name"]').val();	
  var last_name = $('#contact-form').find('[name="last_name"]').val(); 
  var company_name = $('#contact-form').find('[name="company_name"]').val();
  var country_incorporation = $('#contact-form').find('[name="country_incorporation"]').val();
  var email = $('#contact-form').find('[name="email"]').val();
  var telephone = $('#contact-form').find('[name="phone"]').val();
  var company_website = $('#contact-form').find('[name="website"]').val();
  var number_cards = $('#contact-form').find('[name="number_cards"]').val();
  var description = $.trim($('#contact-form').find('[name="description"]').val());
  var data_html ='' ;
  
if(first_name == ""){
 	$("#contact-form").find("input[name='first_name']").css({"border":"1px solid #D64541"});
}else{
	$("#contact-form").find("input[name='first_name']").css({"border":"1px solid #cccccc"});
}

if(last_name == ""){
 	$("#contact-form").find("input[name='last_name']").css({"border":"1px solid #D64541"});
}else{
	$("#contact-form").find("input[name='last_name']").css({"border":"1px solid #cccccc"});
}

if(company_name == ""){
 	$("#contact-form").find("input[name='company_name']").css({"border":"1px solid #D64541"});
}else{
	$("#contact-form").find("input[name='company_name']").css({"border":"1px solid #cccccc"});
}
	
	
if(email == ""){
	$("#contact-form").find("input[name='email']").css({"border":"1px solid #D64541"});
}else if(regemail.test(email) == false){
	$("#contact-form").find("input[name='email']").css({"border":"1px solid #D64541"});
}
else{
	$("#contact-form").find("input[name='email']").css({"border":"1px solid #cccccc !important"});
}



if(company_website == ""){
	$("#contact-form").find("input[name='website']").css({"border":"1px solid #D64541"});
}else if(regurl.test(company_website) == false){
	$("#contact-form").find("input[name='website']").css({"border":"1px solid #D64541"});
}else if((regurl.test(company_website) == true) && (!company_website == "")){
	$("#contact-form").find("input[name='website']").css({"border":"1px solid #cccccc"});
}
	
 							
if(first_name != "" && last_name != "" && company_name != "" && regemail.test(email) != false && regurl.test(company_website) != false){
	data_html = "first_name="+first_name+"&last_name="+last_name+"&company_name="+company_name+"&country_incorporation="+country_incorporation+"&email="+email+"&telephone="+telephone+"&website="+company_website+"&number_cards="+number_cards+"&description="+description;
 			
			
	$.ajax({
		type: 'POST',
		url: window.template_path+'/contact-send.php',
		data: data_html,
		success: function(msg){
			if (msg == 'ok'){
				
				$('#contact-success').css({"color":"#46a694"}).html('Thank you for contacting us. We\'ll be in touch shortly.');
				$('#first_name').find('#contact-name').val('');	 
   				$('#last_name').find('#contact-email').val('');
   				$('#company_name').find('#contact-telephone').val('');
  				$('#country_incorporation').find('#contact-subject').val('');
				$('#email').find('#contact-message').val('');
				$('#telephone').find('#contact-message').val('');
				$('#company_website').find('#contact-message').val('');
				$('#number_cards').find('#contact-message').val('');
				$('#description').find('#contact-message').val('');
				
				setTimeout(function(){$('#contact-success').html('')},500);
				
				 			
			}else{
				$('#contact-success').css({"color":"#D64541"}).html('Mail Error. Please Try Again or email us at support@t24payvault.com!');	
				
			}
			}
			});
 		
 	  }
 	  		
	 	return false;
		
			
}
	
	
	
	$(function() {
		
		if(window.location.hash.substr(1) != ""){
			hashLinks()
		}
		
		
		
		function hashLinks() {
			
			var name = window.location.hash.substr(1);
			$('.navigation li[data-url="' + name + '"]').addClass('active', {duration:300});
			$('.navigation li[data-url="' + name + '"]').siblings().removeClass('active', {duration:300});
			
	    	if (!$('header .navigation').is(":hidden")) {
				$('header .logo').stop().animate({ top: 15 }, 'fast');
	    		$('header .menu').stop().animate({ top: 25 }, 'fast');
	    		if (!$('header .menu').is(":hidden")) $('header .navigation').slideUp("fast","easeOutQuart");
	    		$('header').stop().animate({ height: '70px' }, 'fast', function() {
					
	    			$('html,body').stop().animate({scrollTop: $("."+name).offset().top - 70}, 1000);
				});
			}
				
		}
		
		
		var bxcontrolpos = parseInt((($('#first-slide-container').offset().top + $('#first-slide-container').height())-20));
		
$('.bx-wrapper .bx-pager').css({top:bxcontrolpos+"px",position:"absolute"})
		
		var headercardheight = parseInt(($('#first-slide-container').height() - $('#header-card-holder').height())/2);

$('#header-card-holder').css({top:headercardheight+"px"});
		
		var slideheight = $('#first-slide-container').outerHeight();
		
		$('#second-slide-container').css({height: slideheight+"px"});
		
		
		$('#to-top').click(function(){
			 toTop()
		});
		
		$.stellar({
				horizontalScrolling: false,
				verticalOffset: 500
			});
		
	$('.bxslider').bxSlider({mode:'fade', auto: true, autoDelay: 4000, pause: 12000});
    
	var contactHeight = $("#contact").height();
	
	$("#map-canvas").css({"height":contactHeight});
	
	$('#contact .offset').css({"top":-Math.abs(contactHeight)});
	
	$('#contact').css({"margin-bottom":-Math.abs(contactHeight)});
	
	$('#faq .title').click(function(){
		
		
		$(this).siblings('.title').each(function(){
			$(this).removeClass('open');
			$(this).next('.text').css({"max-height":"0px"});
		})
		
		if(!$(this).hasClass('open')){
		$(this).next('.text').animate({"max-height":"1000px"}, 300).addClass('open');
		}
		
		else{
		$(this).next('.text').animate({"max-height":"0px"}, 300).removeClass('open');
		}
		
	});
	
	
	
});

</script>

<script src="https://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">

	function initialize() {
		var myLatlng = new google.maps.LatLng(36.139763,-5.353785);
        var mapOptions = {
          zoom: 16,
		  disableDefaultUI: true,
		  center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      	var myMarker = new google.maps.LatLng(36.139763,-5.353785);
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-25205581-3', 'auto');
  ga('send', 'pageview');

  setTimeout(function(){ga('send','event','Control','Bounce Rate','')},10000)
</script>

<?php wp_footer(); ?>
</body>
</html>
