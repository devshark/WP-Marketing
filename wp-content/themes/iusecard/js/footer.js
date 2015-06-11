$(document).ready(function(){
	"use strict";
 	$('.submit-form').click(
 	function()
 	{
		
		if($(this).data("form") == "contact"){

			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			var names = $('#contact-form').find('#name').val();	 
			var email_address = $('#contact-form').find('#email').val();
			var subject = $('#contact-form').find('#subject').val();
			var comment = $.trim($('#contact-form').find('#message').val());
			var data_html ='' ;

			if(names == ""){
				$("#contact-form").find("label[for='name']").parent().parent().children('.msg').css({"display":"block"});
			}else{
				$("#contact-form").find("label[for='name']").parent().parent().children('.msg').css({"display":"none"});
			}
			if(email_address == ""){
				$("#contact-form").find("label[for='email']").parent().parent().children('.msg').css({"display":"block"});
			}else if(reg.test(email_address) == false){
				$("#contact-form").find("label[for='email']").parent().parent().children('.msg').html('Please provide a valid email.').css({"display":"block"});
				$('.email-required').html('Invalid Email Address.');
			}else{
				$("#contact-form").find("label[for='email']").parent().parent().children('.msg').html('This field is required.').css({"display":"none"});
			}
			
			if(subject == ""){
				 $("#contact-form").find("label[for='subject']").parent().parent().children('.msg').css({"display":"block"});
			}else{
				$("#contact-form").find("label[for='subject']").parent().parent().children('.msg').css({"display":"none"});
			}
			if(comment == ""){
				 $("#contact-form").find("label[for='message']").parent().parent().children('.msg').css({"display":"block"});
			}else{
				 $("#contact-form").find("label[for='message']").parent().parent().children('.msg').css({"display":"none"});
			}
			if(comment != "" && names != "" && reg.test(email_address) != false){
				data_html = "name="+ names + "&subject=" + subject + "&message=" + comment + "&email="+ email_address;
				$.ajax(
				{
					type: 'POST',
					url: window.template_uri + '/contact-send.php',
					data: data_html,
					success: function(msg)
					{
						if (msg == 'sent'){
							$('#contact-success').html('Thank you for contacting us. We\'ll be in touch shortly.');
							$('#contact-form').find('#name').val('');	 
							$('#contact-form').find('#email').val('');
							$('#contact-form').find('#subject').val('');
							$('#contact-form').find('#message').val('');
						}else{
							$('#contact-success').html('Mail Error. Please Try Again.!') 	;	
						}
					}
				});
			}
			return false;
		}
		else {
			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			var names = $('#request-form').find('#name').val();
			var company = 	 $('#request-form').find('#company').val();
			var incorporation =  $('#request-form').find('#incorporation').val();
			var needed =  $('#request-form').find('#needed').val();
			var email_address = $('#request-form').find('#email').val();
			var phone = $('#request-form').find('#phone').val();
			var comment = $.trim($('#request-form').find('#message').val());
			var data_html ='' ;

			if(names == ""){
				$("#request-form").find("label[for='name']").parent().parent().children('.msg').css({"display":"block"});
			}else{
				$("#request-form").find("label[for='name']").parent().parent().children('.msg').css({"display":"none"});
			}

			if(company == ""){
				$("#request-form").find("label[for='company']").parent().parent().children('.msg').css({"display":"block"});
			}else{
				$("#request-form").find("label[for='company']").parent().parent().children('.msg').css({"display":"none"});
			}

			if(phone == ""){
				$("#request-form").find("label[for='phone']").parent().parent().children('.msg').css({"display":"block"});
			}else{
				$("#request-form").find("label[for='phone']").parent().parent().children('.msg').css({"display":"none"});
			}
			if(comment == ""){
				$("#request-form").find("label[for='message']").parent().parent().children('.msg').css({"display":"block"});
			}else{
				$("#request-form").find("label[for='message']").parent().parent().children('.msg').css({"display":"none"});
			}

			//if(incorporation == ""){
			// 					 $("#request-form").find("label[for='incorporation']").parent().parent().children('.msg').css({"display":"block"});
			// 				}else{
			//					$("#request-form").find("label[for='incorporation']").parent().parent().children('.msg').css({"display":"none"});
			// 				}
			//				
			//				
			//				if(needed == ""){
			// 					 $("#request-form").find("label[for='needed']").parent().parent().children('.msg').css({"display":"block"});
			// 				}else{
			//					$("#request-form").find("label[for='needed']").parent().parent().children('.msg').css({"display":"none"});
			// 				}

			if(email_address == ""){
				$("#request-form").find("label[for='email']").parent().parent().children('.msg').css({"display":"block"});
			}else if(reg.test(email_address) == false){
				$("#request-form").find("label[for='email']").parent().parent().children('.msg').html('Please provide a valid email.').css({"display":"block"});
				$('.email-required').html('Invalid Email Address.');
			}else{
				$("#request-form").find("label[for='email']").parent().parent().children('.msg').html('This field is required.').css({"display":"none"});
			}
			if(comment != "" && names != "" && company != "" && phone != "" && reg.test(email_address) != false){
				data_html = "name=" + names + "&company=" + company + "&incorporation=" + incorporation + "&needed=" + needed + "&phone=" + phone + "&message=" + comment + "&email=" + email_address;
				$.ajax(
				{
					type: 'POST',
					url: window.template_uri+'/contact-send.php',
					data: data_html,
					success: function(msg)
					{
						if (msg == 'sent'){
							$('#request-success').html('Thank you for contacting us. We\'ll be in touch shortly.');
							$('#request-form').find('#name').val('');	
							$('#request-form').find('#company').val(''); 
							$('#request-form').find('#incorporation').val('');
							$('#request-form').find('#needed').val('');
							$('#request-form').find('#email').val('');
							$('#request-form').find('#phone').val('');
							$('#request-form').find('#message').val('');
							
						}else{
							$('#request-success').html('Mail Error. Please Try Again.!') 	;	
						}
					}
				});
			}
			return false;
		}
	});
})
