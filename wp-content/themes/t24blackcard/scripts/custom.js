(function($) {
      "use strict";

      var window_height = $(window).height();
      var window_width = $(window).width();

      /* window.load()
      ==================*/
      $(window).load(function(){

                /* PRELOADER
                ===================*/
                if ( $('#preloader').length != 0 ) {
                     setTimeout(function(){
                            $('#preloader').fadeOut(1000);
                     }, 1500);
                }
                
                /* NAVIGATION
                ===================*/
                jQuery('.scrollto a, a.scroll').click(function(){
                     var id = jQuery(this).attr("href");
                     var overlay_menu = $('div.overlay-menu');
                     //if top nav exist
                     if ( $('#top-nav').length != 0 ) {
                             jQuery('html,body').stop().animate({scrollTop: jQuery("div"+id).offset().top},'slow', function(){
                                       if ( navigator.userAgent.indexOf('iPad') != -1 ) {
                                                 var yPos = window.pageYOffset;
                                                 var jQueryfixedElement = jQuery('div#top-nav');
                                                 jQueryfixedElement.css({ "position": "relative" });
                                                 window.scroll(0,yPos);
                                                 jQueryfixedElement.css({ "position": "fixed" });
												 setTimeout(function(){
                                                       $.sidr('close', 'sidr-right');
                                                 }, 1000);
												 
                                       }
                                       if ( overlay_menu.hasClass('open') ) {
                                                 overlay_menu.removeClass('open');
                                                 overlay_menu.addClass('close');
                                                 setTimeout(function(){
                                                       overlay_menu.removeClass('close');
                                                 }, 2000);
												 setTimeout(function(){
                                                       $.sidr('close', 'sidr-right');
                                                 }, 1000);
                                       }
									  
									   
                             });
                     } else { jQuery('html,body').stop().animate({scrollTop: jQuery("div"+id).offset().top},'slow');  setTimeout(function(){
                                                       $.sidr('close', 'sidr-right');
                                                 }, 1000); }
					 
				


                return false;
                });
                
                /* PARALLAX EFFECT
                ===================*/
                $('.parallax').each(function(){
                        var parallax_bg = $(this).attr('data-background');
                        $(this).css('background-image','url(' + parallax_bg + ')');
                });

      }); //END: window.load()


      /* document.ready()
      ==================*/
      $(document).ready(function(){
		  
		// footer-links scroll up to specific tab
		$('#social-container a.scroll, a.others-scroll').bind(
			'click',
			function(){
				if($(this).hasClass('feature-one')){
					$( $('#features-wrapper>div>ul>li')[0] ).trigger('click');
				}else if($(this).hasClass('feature-two')){
					$( $('#features-wrapper>div>ul>li')[1] ).trigger('click');
				}else if($(this).hasClass('feature-three')){
					$( $('#features-wrapper>div>ul>li')[2] ).trigger('click');
				}else if($(this).hasClass('feature-four')){
					$( $('#features-wrapper>div>ul>li')[3] ).trigger('click');
				}else if($(this).hasClass('feature-five')){
					$( $('#features-wrapper>div>ul>li')[4] ).trigger('click');
				}else if($(this).hasClass('feature-six')){
					$( $('#features-wrapper>div>ul>li')[5] ).trigger('click');
				}
			}
		);
		  
		  //faq expand 
	
	var i;
		  
	$(".faq-container .faq-header").click(function() {
		
		
		
            $(this).parent().parent().parent().children().children().each(function() {
				
				
				
				
                $(this).find(".faq-expand").animate({
                    "max-height": "0px"
                }, 'slow').removeClass("open");
                $(this).find("i").removeClass("fa-minus-circle").addClass("fa-plus-circle");
				
				});
				

    
			if (!$(this).next(".faq-expand").hasClass("open")) {
                $(this).next(".faq-expand").animate({
                    "max-height": "1000px"
                }, 'slow').addClass("open");
                $(this).find("i").removeClass("fa-plus-circle").addClass("fa-minus-circle");
            } else if ($(this).next(".faq-expand").hasClass("open")) {
                $(this).next(".faq-expand").animate({
                    "max-height": "0px"
                }, 'slow').removeClass("open");
                $(this).find("i").removeClass("fa-minus-circle").addClass("fa-plus-circle");
            }
	

				
            
            
        });
		  
		  //Features tabs			
				
    $( "#tabs" ).tabs({
					beforeLoad: function( event, ui ) {
						ui.jqXHR.fail(function() {
							ui.panel.html(
								"Couldn't load this tab. We'll try to fix this as soon as possible. " +
								"If this wouldn't be a demo." );
							});
						}
					});
					
					
					
function checkslidePosition() {

	$('.slide').each(function(){
		
		
		var windowSize = $(window).width();

        if (windowSize >= 380) {

		if (($(this).offset().top - $(window).scrollTop()) <= $("#logo img").height()) {


			if($(this).attr('data-color') == "white"){

				$('div.menu-button span.menu-line').css({"background": "#ffffff"});
				$('div.menu-button').css({"color": "#ffffff"});
				//$('#logo img').attr("src", "images/logo.png");
			

			}

			else if($(this).attr('data-color') == "black"){



				$('div.menu-button span.menu-line').css({"background": "#1c1c1c"});
				$('div.menu-button').css({"color": "#1c1c1c"});
				//$('#logo img').attr("src", "images/logo_black.png");


			}

		}
		
		}

	})
	
	

}

$(window).scroll(function() {

     checkslidePosition()

});

                
                /*-- Append Mobile menu into top nav bar --*/
                var overlay_menu = $('div.overlay-menu');
                var menuButton = $('div.menu-button').clone();
                var topNav = $('div#top-nav');
                $(menuButton).attr('id','open-menu');
                $(topNav).append(menuButton);
                $('#open-menu').click(function(){
						   alert("test123");
                          //$(overlay_menu).toggleClass('open');
                });
                
                /*-- Adjust logo on really small screens --*/
                if ( window_width < 380 && $('#navigation').length == 0 ) {
                     $('#logo').css({"float":"none","margin":"0 auto"});
                     $('#logo img').css("margin","0 auto");
                }
                
                /*-- Validate Contact form --*/
                var name_value   = 'Name *'; //default placeholder text for the name field
                var mail_value   = 'Email *'; //default placeholder text for the email field
                var subject_value = 'Subject *'; //default placeholder text for the subject field
                var message_value= 'Message *'; //default place holder text for the textarea
      
                var missing_name = 'What is your name'; //error message, if the name field is empty
                var missing_mail = 'Email address is missing!'; //error message, if the mail field is empty
                var invalid_mail = 'Oh no! Invalid email address!'; //error message, if the user's email address is invalid
                var missing_subject = 'The subject is missing!'; //error message, if the subject field is empty
                var missing_message = 'Any Message!?'; //error message, if the textarea is empty
      
                var error_color   = '#990000'; //text color of the error messages
                var default_color = '#7E7E7E'; //default text color of the contact form
				var success_color = '#000'; //black text color for success message text


		$('#contact-form form#contact-us').submit(
			function(event){
				event.preventDefault();
				var $this = $(this);

				var name = $('input#form-name').val();
				var email = $('input#form-mail').val();
				var subject = $('input#form-subject').val();
				var comments = $('textarea#form-message').val();

				if (name.trim() === '')
				  {
					$('input#form-name', $this).css("color" , error_color);
					$('div#result', $this).html(missing_name).css("color" , error_color);
					 return false;
				  }
				else{
					$('input#form-name', $this).css("color" , default_color);
					$('div#result', $this).empty();
				}

				if (email.trim() === '')
				  {
				  $('input#form-mail', $this).css("color" , error_color);
					 $('div#result', $this).html(invalid_mail).css("color" , error_color);
					 return false;
				  }
				else{
                    var atpos=email.indexOf("@");
                    var dotpos=email.lastIndexOf(".");
                    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
					{
                        $('input#form-mail', $this).css("color" , error_color);
                        $('div#result', $this).html(invalid_mail).css("color" , error_color);
                        return false;
					}
				    else{
						$('input#form-mail', $this).css("color" , default_color);
						$('div#result', $this).empty();
					}
				}
				if (subject.trim() === '')
				{
				$('input#form-subject', $this).css("color" , error_color);
					$('div#result', $this).html(missing_subject).css("color" , error_color);
					return false;
				}
				else{
					$('input#form-subject', $this).css("color" , default_color);
					$('div#result', $this).empty();
				}
				if (comments.trim() === '')
				{
				    $('textarea#form-message', $this).css("color" , error_color);
					$('div#result', $this).html(missing_message).css("color" , error_color);
					return false;
				}
				else{
					$('input#form-message', $this).css("color" , default_color);
					$('div#result', $this).empty();
				}
			   $('div#result').append('<div id="contact-loading"></div>').css('height','55px');
				$.ajax({
					'url': window.template_uri + 'contact_us.php',
					'type': 'POST',
					'dataType': 'json',
					'data': $this.serialize(),
					'success': function(result){
						if(result.hasOwnProperty('status')){
							if(result.status == 200){
							    $('div#contact-loading').remove();
								$('input[type=text], textarea', $this).val("");
								$('#result', $this).html('Thank you for contacting us. We\'ll be in touch shortly.').css({'color':success_color,'height':'auto'});
							}else if(result.status == 500){
								//error sending message.
							}else if(result.status == 404){
								$('#result', $this).html('Missing required fields!');
							}
						}
					}// END: Success method
				});// END: Ajax
		}); //END contact form send
      });  //END: document.ready()


})(jQuery);
