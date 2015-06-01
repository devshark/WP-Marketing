$(function() {

	$('input[name="contact-email"]').attr('autocomplete', 'off');
	$('#submit').click(function(event) {
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
			$("#contact-form").find("label[for='contact-message']").children('.error').css({"display":"inline-block"});
		}else{
			$("#contact-form").find("label[for='contact-message']").children('.error').css({"display":"none"});
		}
 							
		if(message != "" && name != "" && reg.test(email) != false){
			data_html = "name="+ name + "&subject=" + subject + "&message=" + message + "&email="+ email;
 			
			$.ajax({
				type: 'POST',
				url: 'form/contact-send.php',
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
	
$(".nav").click(function (event) {
    event.preventDefault();
    var dest = 0;
    if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
        dest = $(document).height() - $(window).height();
    } else {
        dest = ($(this.hash).offset().top-79);
    }
    
    $('html,body').animate({
        scrollTop: dest
    }, 2000, 'swing');
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

$(".navbar-collapse ul li").click(function(){
	$(this).parent().parent().removeClass('in');
});
		
});
		 

	





		

		
	
	
	
	
	
	
	