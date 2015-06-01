<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Story
 */
?>
    <div id="content-5-region" class="region bg-color-theme text-color-light">

      <div id="call-to-action-1-block" class="call-to-action-1 block">
        <div class="container">
          <div class="row">

            <div class="col-xs-12 text-center call-to-action-1-holder">
              <h4 class="call-to-action-1-text">Let's talk about your payout requirement</h4>
              <a href="#content-5-region" class="call-to-action-1-button btn btn-default nav">Contact us</a>
            </div>

          </div> <!-- /row -->
        </div> <!-- /container -->
      </div> <!-- /call-to-action-1-block -->
      
      
      <div id="contact-content-block" class="contact-content block bg-color-theme" style="max-height: 0px; padding: 0; overflow: hidden;">
        <div class="container">
          <div class="row">

            <div class="col-xs-12 col-md-8 col-md-offset-2 form-holder">
              
              <div id="contact-success"></div>
                          
              <form class="form-horizontal" method="post" id="contact-form">
                <div class="form-group" style="margin-bottom: 0;">
                
                
                 <div class="col-md-4 margin-bottom-sm-20">
                    <label style="color: #A2A5A7; font-size: 14px;" for="contact-name" style="max-height: 0px;"><span class="error" style="color: #EB585C; display: none;">Name Required</span></label>
                  </div> <!-- /col-md-6 -->
                  <div class="col-md-4">
                 	<label style="color: #A2A5A7; font-size: 14px;" for="contact-email" style="max-height: 0px;"><span class="error" style="color: #EB585C; display: none;">Email Address Required</span></label>
                  </div> <!-- /col-md-6 -->
                  <div class="col-md-4">
                  <label style="color: #A2A5A7; font-size: 14px;" style="max-height: 0px;"></label>
                  </div> <!-- /col-md-6 -->
                </div> <!-- /form-group -->
                
                <div class="form-group">
                  <div class="col-md-4 margin-bottom-sm-20">
                    <input type="text" class="form-control" id="contact-name" name="contact-name" placeholder="Name">
                  </div> <!-- /col-md-6 -->
                  <div class="col-md-4">
                    <input type="email" class="form-control" id="contact-email" name="contact-email" placeholder="Email">
                  </div> <!-- /col-md-6 -->
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="contact-phone" name="contact-phone" placeholder="Phone">
                  </div> <!-- /col-md-6 -->
                </div> <!-- /form-group -->
                
                <div class="form-group">
                  <div class="col-xs-12">
                    <input type="text" class="form-control" id="contact-subject" name="contact-subject" placeholder="Subject">
                  </div> <!-- /col-xs-12 -->
                </div> <!-- /form-group -->
                
                <div class="form-group" style="margin-bottom: 0;display:none;">
                  <div class="col-xs-12">
                    <label style="color: #A2A5A7; font-size: 14px;" for="contact-message"><span class="error" style="color: #EB585C;">Message Required</span></label>
                  </div> <!-- /col-xs-12 -->
                </div> <!-- /form-group -->
                
                <div class="form-group">
                  <div class="col-xs-12">
                    <textarea class="form-control" rows="8" id="contact-message" name="contact-message" placeholder="Message"></textarea>
                  </div> <!-- /col-xs-12 -->
                </div> <!-- /form-group -->
                
                <div class="form-group">
                  <div class="col-xs-12">
                    <input type="submit" class="btn btn-primary btn-sm" style="border: 2px solid #f0f0f0; color: #ffffff;" id="submit" name="submit" value="Send">
                  </div> <!-- /col-xs-12 -->
                </div> <!-- /form-group -->
              </form>

            </div> <!-- /col-xs-12 -->

          </div> <!-- /row -->
        </div> <!-- /container -->
      </div>
      

    </div> <!-- /content-5-region -->

    <div id="call-to-action-1-marker"></div>

    <div id="content-7-region" class="region" style="padding: 0 !important; height: 500px;">

		<div id="map-canvas" style="height: 500px; width: 100%; position: absolute; left: 0;"/></div>

    </div> <!-- /content-7-region -->

    <div id="" class="bg-color-grayDark2 text-color-light">
      <div class="container">
        <div class="row">

          <div id="footer-first-column-region" class="col-xs-12 col-md-4 text-center footer-section" style="opacity: 0;">
            <div class="region">

              <div id="footer-address-block" class="footer-address block">
                <i class="icon ion-ios7-location-outline size-32 margin-bottom-20"></i>
                <p>3rd floor, Heritage House, 235 Main Street<br />Gibraltar</p>
              </div> <!-- /footer-address-block -->

            </div> <!-- /region -->
          </div> <!-- /footer-first-column-region -->

          <div id="footer-second-column-region" class="col-xs-12 col-md-4 text-center footer-section" style="opacity: 0;">
            <div class="region">

              <div id="footer-mail-block" class="footer-mail block">
                <i class="icon ion-ios7-email-outline size-32 margin-bottom-20"></i>
                <p><a href="mailto:sales@forexpayouts.co.uk">sales@forexpayouts.co.uk</a></p>
              </div> <!-- /footer-mail-block -->

            </div> <!-- /region -->
          </div>  <!-- /footer-second-column-region -->

          <div id="footer-third-column-region" class="col-xs-12 col-md-4 text-center footer-section" style="opacity: 0;">
            <div class="region">

              <div id="footer-phone-block" class="footer-phone block">
                <i class="icon ion-ios7-telephone-outline size-32 margin-bottom-20"></i>
                <p>+852 2851 0145</p>
              </div> <!-- /footer-phone-block -->

            </div> <!-- /region -->
          </div>  <!-- /footer-third-column-region -->

        </div> <!-- /row -->
      </div> <!-- /container -->
    </div> <!-- /footer-columns-region -->
    
    <div id="footer-columns-marker"></div>

    <footer class="bg-color-grayDark1 text-color-light">
      <div class="container">
        <div class="row">

          <div id="footer-left-region" class="col-xs-12 col-md-6 text-center-sm">
            <div class="region">

              <div id="copyright-block" class="block">
                <p>© <?php echo date('Y');?> <a onclick="ga('send','event','Footer','Click','www.transact24.com');" target="_blank" href="http://www.transact24.com">Transact24 Trading Limited</a></p>
              </div> <!-- /copyright-block -->

            </div> <!-- /region -->
          </div> <!-- /footer-left-region -->

          <div id="footer-right-region" class="col-xs-12 col-md-6 text-right text-center-sm">
            <div class="region">

              <div id="copyright-block" class="block">
                <p><a  onclick="ga('send','event','Footer','Download','Data Protection');" target="_blank" href="<?php echo get_template_directory_uri();?>/download/T24%20Prepaid%20Data%20protection%20policy%2020130828.pdf">Data Protection</a> | <a href="#" onclick="ga('send','event','Footer','Click','Back to Top');" class="to-top">↑ Back to top</a></p>
              </div> <!-- /copyright-block -->

            </div> <!-- /region -->
          </div> <!-- /footer-right-region -->

        </div> <!-- /row -->

		<div class="col-xs-12 col-md-12" style="padding-right: 0px; padding-left: 0px;">
        
        <p>Pages: <a onclick="ga('send','event','Footer','Pages','Prepaid Card Functionality');" href="<?php echo esc_url( home_url( '/functionality' ) ); ?>" title="Prepaid Card Functionality">Functionality</a> | <a href="<?php echo esc_url( home_url( '/white-label' ) ); ?>" onclick="ga('send','event','Footer-Pages','Click','White Label');" title="White Label Prepaid Cards">White Label</a> | <a href="<?php echo esc_url( home_url( '/branded' ) ); ?>" onclick="ga('send','event','Footer-Pages','Click','Branded Prepaid Card Solutions');" title="Branded Prepaid Card Solutions">T24 Branded</a> | <a href="<?php echo esc_url( home_url( '/instant-loads' ) ); ?>" onclick="ga('send','event','Footer-Pages','Click','Instant Loads');" title="Instant Loads">Instant Loads</a> | <a href="<?php echo esc_url( home_url( '/system-features' ) ); ?>" onclick="ga('send','event','Footer-Pages','Click','System Features');" title="System Features">System Features</a>
        
        <p>Our Brands: <a onclick="ga('send','event','Footer','Our Brands','T24 Black Card');" href="https://www.t24blackcard.com">T24 Black Card</a> | <a onclick="ga('send','event','Footer','Our Brands','T24 Pay Vault');" href="https://www.t24payvault.com">T24 Pay Vault</a> | <a onclick="ga('send','event','Footer','Our Brands','T24 Black Shield');" href="http://www.t24blackshield.com">T24 Black Shield</a> | <a onclick="ga('send','event','Footer','Our Brands','T24 Prepaid');" href="http://www.t24prepaid.com">T24 Prepaid</a>
        
	<p style="font-size: 13px; margin-bottom: 20px;">This card is issued by CashFlows®. CashFlows® is a trading name of the Voice Commerce Limited. Voice Commerce Limited is a wholly owned subsidiary of Voice Commerce Group Limited and is authorised by the Financial Conduct Authority under the Electronic Money Regulations 2011 (register reference 900006) for the issuing of electronic money and the provision of payment services.</p>

	</div>


      </div> <!-- /container -->
    </footer>

    
    <!-- jQuery 1.10.2 -->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery-1.10.2.min.js"></script>
    <!-- jQuery Plugins -->
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.flexverticalcenter.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.flexslider-min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/retina-1.1.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.stellar.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/countUp.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/waypoints.js"></script>
    
    <script type="text/javascript">

	function initialize() {
		var myLatlng = new google.maps.LatLng(36.138918,-5.353578);
        var mapOptions = {
          zoom: 16,
		  disableDefaultUI: true,
		  scrollwheel: false,
    	  navigationControl: false,
    	  mapTypeControl: false,
   	      scaleControl: false,
    	  draggable: false,
		  center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      	var myMarker = new google.maps.LatLng(36.138918,-5.353578);
	  	var marker = new google.maps.Marker({
      	position: myMarker,
      	map: map
  		});
	}
    
	google.maps.event.addDomListener(window, 'load', initialize);
	
</script>

<style>



.btnflash {

color: #2b2b2b !important;
border-color: #f0f0f0 !important;
background-color: #f0f0f0 !important;

}


</style>

<script>
	try{
		var countup1 = new countUp("countup1", 0.0, 99.9, 1, 3);
		var countup2 = new countUp("countup2", 0, 10000, 0, 3);
		var countup3 = new countUp("countup3", 0, 200, 0, 3);
		var countup4 = new countUp("countup4", 0, 4, 0, 3);
	}catch(err){}
$(function() {
	$('input[name="contact-email"]').attr('autocomplete', 'off');
	$('#submit').click(function(event) {
        // Stop the Search input reloading the page by preventing its default action
        event.preventDefault();
	
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var name = $('#contact-form').find('[name="contact-name"]').val();	 
	var email = $('#contact-form').find('[name="contact-email"]').val();
	var telephone = $('#contact-form').find('[name="contact-phone"]').val();
	var subject = $.trim($('#contact-form').find('[name="contact-subject"]').val());
	var message = $.trim($('#contact-form').find('[name="contact-message"]').val());
	var data_html ='' ;
  
if(name == ""){
 	$("#contact-form").find("label[for='contact-name']").children('.error').css({"display":"inline-block"});
}else{
	$("#contact-form").find("label[for='contact-name']").children('.error').css({"display":"none"});
}

if(email == ""){
	$("#contact-form").find("label[for='contact-email']").children('.error').css({"display":"inline-block"});
}else if(reg.test(email) == false){
	$("#contact-form").find("label[for='contact-email']").children('.error').html('Invalid Email!').css({"display":"block"});
	$('.email-required').html('Invalid Email!');
}else{
	$("#contact-form").find("label[for='contact-email']").children('.error').html('Required Field!').css({"display":"none"});
}
 				
if(message == ""){
	$("#contact-form").find("label[for='contact-message']").children('.error').parents('.form-group').show();
}else{
	$("#contact-form").find("label[for='contact-message']").children('.error').parents('.form-group').hide();
}
 							
if(message != "" && name != "" && reg.test(email) != false){
	data_html = "name="+ name + "&subject=" + subject + "&message=" + message + "&email="+ email;
 			
	$.ajax({
		type: 'POST',
		url: '<?php echo get_template_directory_uri();?>/form/contact-send.php',
		data: data_html,
		success: function(msg){
			if (msg == 'sent'){
				
				$('#contact-success').css({"color":"#FFFFFF"}).html('Thank you for contacting us. We\'ll be in touch shortly.');
				$('#contact-form').find('#contact-name').val('');
   				$('#contact-form').find('#contact-email').val('');
   				$('#contact-form').find('#contact-telephone').val('');
  				$('#contact-form').find('#contact-subject').val('');
				$('#contact-form').find('#contact-message').val('');
				
				setTimeout(function(){$('#contact-success').html('')},10000);
				
				 			
			}else{
				
				$('#contact-success').css({"color":"#EB585C"}).html('Mail Error. Please Try Again.!') 	;	
			}
			}
			});
 	  }
	 	return false;
})
	
	
	
	
	
	
	
	$(window).on('scroll', function() {
    var scrollTop = $(this).scrollTop();
	if(scrollTop>=100){
		//$('header').css({background:"rgba(255,255,255,0.9)", position:"fixed", top:"0"});
	}
	});
	$(".nav").click(function (event) {
		event.preventDefault();
		//calculate destination place
		var dest = 0;
		try{
			if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
				dest = $(document).height() - $(window).height();
			} else {
				dest = ($(this.hash).offset().top-79);
			}
			//go to destination
			$('html,body').animate({
				scrollTop: dest
			}, 2000, 'swing');
		}catch(err){}
	});
	
	$('a.to-top').click(function(){
		$('body,html').animate({
				scrollTop: 0
			}, 
			{
     easing: 'swing',
     duration: 1000
			});
	});

	
	$('a.call-to-action-1-button').click(function(){
	if(!$('#contact-content-block').hasClass("open")){
		$('#contact-content-block').css({position: "absolute", "z-index": "99", padding: "40px 0", width: "100%"}).addClass("open").animate({"max-height":"1000px"},
   {
     easing: 'swing',
     duration: 1000,
     complete: function(){
		  $('#contact-content-block').find('.form-holder').animate({opacity:"1"},500);
		$('#contact-content-block').css({position: "absolute", "z-index": "99", padding: "40px 0", width: "100%"}); 
}
});
}
	else {
	 //$('#contact-content-block').css({opacity:"0"});
		$('#contact-content-block').find('.form-holder').animate({opacity:"0"},
   {
     easing: 'swing',
     duration: 500,
     complete: function(){
	$('#contact-content-block').animate({"max-height":"0px"},500);
	$('#contact-content-block').css({position:"relative", padding:"0px 0px"}).removeClass("open");
}
	});
}
		});
		
		//$('#panels-1-block').waypoint(function() {
//        setTimeout(function(){$('#panels-1-block .panels-item').addClass('animated fadeInDown')},0);
//    }, { offset: '50' });
	
	$('#services-1-block').waypoint(function() {
		setTimeout(function(){$('#services-1-block h3').addClass('animated fadeInLeft')},0);
        setTimeout(function(){$('#services-1-block .services-1-content').addClass('animated fadeInLeft')},0);
		setTimeout(function(){$('#services-1-block .services-1-image').addClass('animated fadeInRight')},0);
		setTimeout(function(){$('#content-1-region .panels-item').each(function(index){
   				 
				 var delay = ((index+1)*800);
				 
				 
				 $(this).delay(delay).animate({opacity:"1"},500);
			 
			},0);
	});
    }, { offset: '50' });
	
	
	$('#white-label-block').waypoint(function() {
        setTimeout(function(){$('#white-label-block .container').addClass('animated fadeInDown')},0);
    }, { offset: '50' });
	
	$('#branded-block').waypoint(function() {
        setTimeout(function(){$('#branded-block .container').addClass('animated fadeInDown')},0);
    }, { offset: '50' });
	
	$('#loads-block').waypoint(function() {
        setTimeout(function(){$('#loads-block .loads-copy').addClass('animated fadeInDown')},0);
		setTimeout(function(){$('#loads-block .loads-item').each(function(index){
   				 
				 var delay = ((index+1)*800);
				 
				 
				 $(this).delay(delay).animate({opacity:"1"},500);
			 
			},0);
	});
    }, { offset: '50' });
	
	$('#text-widget-1-block').waypoint(function() {
        setTimeout(function(){$('#text-widget-1-block .container').addClass('animated fadeInDown')},0);
		countup1.start();
	countup2.start();
	countup3.start();
	countup4.start();
    }, { offset: '50' });
	
	
	$('#system-block').waypoint(function() {
        setTimeout(function(){$('#system-block .container').addClass('animated fadeInDown')},0);
    }, { offset: '50' });
	
	
	
	$('#testimonials-1-block').waypoint(function() {
        setTimeout(function(){$('#testimonials-1-block .container').addClass('animated fadeInDown')},0);
    }, { offset: '50' });
	
	$('#content-7-region').waypoint(function() {
		setTimeout(function(){$('.footer-section').each(function(index){
   				 
				 var delay = ((index+1)*800);
				 
				 
				 $(this).delay(delay).animate({opacity:"1"},500);
			 
			},0);
	});
    }, { offset: '50' });
		
	$(document.body).on('appear', '#footer-columns-marker', function() {
    		
			$('#footer-columns-region .block').each(function(index, value){
   				 
				 var delay = ((index+1)*500);
				 
				 $(this).delay(delay).animate({opacity:"1"},1000);
				 
			});
			
    	});
    	$(document.body).on('appear', '#content-3-region', function() {
	setTimeout(function() {
	countup1.start();
	countup2.start();
	countup3.start();
	countup4.start();	
}, 100);
    	});
		
});
</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50032878-2', 'auto');
  ga('send', 'pageview');
  setTimeout(function(){ga('send','event','Control','Bounce Rate','')},10000)
</script>
    
<?php wp_footer(); ?>
  </body>
</html>
