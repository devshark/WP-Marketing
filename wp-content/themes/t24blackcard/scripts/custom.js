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
      
                $('input#form-name').click(function() {
      
                           var form_name = $('input#form-name').val();
            
                           if (form_name == missing_name)
                              {
                              $('input#form-name').css("color" , default_color);
                              $('input#form-name').val('');
                              }
                              else if (form_name == name_value)
                                      {
                                      $('input#form-name').val('');
                                      $('input#form-name').css("color" , default_color);
                                      }
      
                });
      
                $('input#form-mail').click(function() {
      
                           var form_mail = $('input#form-mail').val();
            
                           if (form_mail == missing_mail || form_mail == invalid_mail)
                           {
                           $('input#form-mail').css("color" , default_color);
                           $('input#form-mail').val('');
                           }
                           else if (form_mail == mail_value)
                                   {
                                   $('input#form-mail').val('');
                                   $('input#form-mail').css("color" , default_color);
                                   }
      
                });
           
                $('input#form-subject').click(function() {
      
                           var form_subject = $('input#form-subject').val();
            
                           if (form_subject == missing_subject)
                           {
                           $('input#form-subject').css("color" , default_color);
                           $('input#form-subject').val('');
                           }
                           else if (form_subject == subject_value)
                                   {
                                   $('input#form-subject').val('');
                                   $('input#form-subject').css("color" , default_color);
                                   }
      
                });
      
                $('textarea#form-message').click(function() {
      
                           var message_content = $('textarea#form-message').val();
            
                           if (message_content == missing_message || message_content == message_value)
                              {
                              $('textarea#form-message').css("color" , default_color);
                              $('textarea#form-message').val('');
                              }
                });
      
                $('#contact-form button#button').click(function() {
      
                           var name = $('input#form-name').val();
                           var email = $('input#form-mail').val();
                           var subject = $('input#form-subject').val();
                           var comments = $('textarea#form-message').val();
            
                           if (name == "" || name == missing_name || name == name_value)
                              {
                              $('input#form-name').css("color" , error_color);
                              $('input#form-name').val(missing_name);
                              }
            
                           if (email == "" || email == invalid_mail || email == mail_value)
                              {
                              $('input#form-mail').css("color" , error_color);
                              $('input#form-mail').val(missing_mail);
                              }
                              
                           if (email != mail_value && email != missing_mail ) {
                              var atpos=email.indexOf("@");
                              var dotpos=email.lastIndexOf(".");
                              if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
                                 {
                                 $('input#form-mail').css("color" , error_color);
                                 $('input#form-mail').val(invalid_mail);
                                 return false;
                                 }
                           }
                           
                           if (subject == "" || subject == missing_subject || subject == subject_value)
                              {
                              $('input#form-subject').css("color" , error_color);
                              $('input#form-subject').val(missing_subject);
                              }
            
                           if (comments == "" || comments == message_value || comments == missing_message)
                              {
                              $('textarea#form-message').css("color" , error_color);
                              $('textarea#form-message').val(missing_message);
                              }
            
                           if ( name == "" || name == missing_name || name == name_value || email == "" || email == invalid_mail || email == mail_value || email == missing_mail || comments == "" || comments == message_value || comments == missing_message || subject == "" || subject == missing_subject || subject == subject_value ) { return false; }
            
                           var atpos=email.indexOf("@");
                           var dotpos=email.lastIndexOf(".");
                           if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
                              {
                              $('input#form-mail').css("color" , error_color);
                              $('input#form-mail').val(invalid_mail);
                              return false;
                              }
            
                           $("div#contact-form input[type='text']").remove();
                           $('div#contact-form textarea').remove();
                           $('div#contact-form button').remove();
                           $('p#required').remove();
                           $('div#result').append('<div id="contact-loading"></div>');
            
                           $.ajax({
                                     type: 'post',
                                     url: window.template_uri + 'mail.php',
                                     data: 'name=' + name + '&email=' + email + '&subject=' + subject + '&comments=' + comments,
            
                                     success: function(results) {
                                               $('div#contact-loading').remove();
                                               $('div#result').html(results);
                                     }
                           });
      
                });//send click process ends here

      });  //END: document.ready()


})(jQuery);
