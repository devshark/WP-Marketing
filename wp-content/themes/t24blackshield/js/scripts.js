jQuery(document).ready(function ($) {

$('.tp-banner').revolution({
                            startwidth: 1050,
                            startheight: 500,
                            hideThumbs: 10,
                            fullWidth: 'on',
                            forceFullWidth: 'on',
                            videoJsPath:'src/rs-plugin/videojs/'
                        });

$('ul.navigation li').click(function() {
			
			if($(window).width() < 1024){
				
				$('ul.navigation').addClass('noHeight');
			
			}
			
		});
		
		$('.menutoggle').click(function(){
		
			if($('ul.navigation').hasClass('noHeight')){
			
			$('ul.navigation').removeClass('noHeight');
			
			}
			
			else {
			
			$('ul.navigation').addClass('noHeight');	
				
			}
			
		});

var options = {
	useEasing : true, 
	useGrouping : true, 
	separator : ',', 
	decimal : '.' 
}
var countupCancelled = new countUp("countupCancelled", 0, 480, 0, 5, options);
var countupDelays = new countUp("countupDelays", 0, 4.9, 1, 0, 5, options);
var countupLuggage = new countUp("countupLuggage", 0, 26, 0, 5, options);
var countupHospitals = new countUp("countupHospitals", 0, 376, 0, 5, options);



$('.faq-question').click(function(){
			
			if(!$(this).children('.faq-answer').hasClass('open')){
				
				$('.faq-answer.open').each(function(){
				$(this).css({"max-height":"0px",display:"none"}).removeClass('open');
			})
				
			$(this).children('.faq-answer').css({display:"block"}).animate({"max-height":"1000px"}, 500).addClass('open');
			}
			 
		})


$("li[data-dropdown=yes]").hover(
   function() {
	   
      $(this).children('.dropdown-wraper').css({"display":"block"});
	  $(this).children().children().children().click(function(){
		 
		  $(this).children('.dropdown-wraper').css({"display":"none"});
		  })
   },
   function() {
      $(this).children('.dropdown-wraper').css({"display":"none"});
   }
);
	
	$('.featurette, #slide3').appear();	
	$(document.body).on('appear', '.featurette', function() {
		$(this).children('.left').delay(1000).animate({"left":"0","opacity":"1","filter": "alpha(opacity = 100)"}, 1500);
		$(this).children('.right').delay(1000).animate({"right":"0","opacity":"1","filter": "alpha(opacity = 100)"}, 1500);
	});
	
	$(document.body).on('appear', '#slide3', function() {
		countupCancelled.start();
		countupDelays.start();
		countupLuggage.start();
		countupHospitals.start();
	});


    $(window).stellar();

    var links = $('.navigation').find('li');
    slide = $('.slide');
    button = $('.button');
    mywindow = $(window);
    htmlbody = $('html,body');



	slide.waypoint(function(direction) {
  if (direction === 'down') {
    alert("half way");
  }
}, { offset: '50%' });

    slide.waypoint(function (event) {

        dataslide = $(this).attr('data-slide');
			
			if(dataslide === "9"){
			$('.navigation li[data-slide="9"]').addClass('active');
			$('.navigation li[data-slide="9"]').siblings().removeClass('active');
			}
			
			else if($('.navigation li[data-slide="' + dataslide + '"]').attr('data-dropdown')) {
			$('.navigation li[data-slide="' + dataslide + '"]').parent().parent().parent().addClass('active');
			$('.navigation li[data-slide="' + dataslide + '"]').parent().parent().parent().siblings().removeClass('active');
		
			}
		
			else {
			
            $('.navigation li[data-slide="' + dataslide + '"]').addClass('active');
			$('.navigation li[data-slide="' + dataslide + '"]').siblings().removeClass('active');
			
			}
		}, { offset: '10' });
		
 
    mywindow.scroll(function () {
        if (mywindow.scrollTop() == 0) {
            $('.navigation li[data-slide="1"]').addClass('active');
            $('.navigation li[data-slide="2"]').removeClass('active');
        }
    });

    function goToByScroll(dataslide) {
        htmlbody.animate({
            scrollTop: ($('.slide[data-slide="' + dataslide + '"]').offset().top-60)
        }, 2000, 'easeInOutQuint');
    }



    links.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);
    });

    button.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);

    });
	
	function toTop() {
		
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
			
		}
		
});



function formSubmit() {

  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  var name = $('#contact-form').find('[name="name"]').val();	 
  var email = $('#contact-form').find('[name="email"]').val();
  var telephone = $('#contact-form').find('[name="telephone"]').val();
  var subject = $.trim($('#contact-form').find('[name="subject"]').val());
  var message = $.trim($('#contact-form').find('[name="message"]').val());
  var data_html ='' ;
   
if(name == ""){
 	$("#contact-form").find("label[for='name']").children('.error').css({"display":"inline-block"});
}else{
	$("#contact-form").find("label[for='name']").children('.error').css({"display":"none"});
}

if(email == ""){
	$("#contact-form").find("label[for='email']").children('.error').css({"display":"inline-block"});
}else if(reg.test(email) == false){
	$("#contact-form").find("label[for='email']").children('.error').html('Invalid Email!').css({"display":"block"});
	$('.email-required').html('Invalid Email!');
}else{
	$("#contact-form").find("label[for='email']").children('.error').html('Required Field!').css({"display":"none"});
}
 				
if(message == ""){
	$("#contact-form").find("label[for='message']").children('.error').css({"display":"inline-block"});
}else{
	$("#contact-form").find("label[for='message']").children('.error').css({"display":"none"});
}
 							
if(message != "" && name != "" && reg.test(email) != false){
	data_html = "name="+ name + "&subject=" + subject + "&message=" + message + "&email="+ email;
 			
	$.ajax({
		type: 'POST',
		url: window.template_uri+'form/contact-send.php',
		data: data_html,
		success: function(msg){
			if (msg == 'sent'){
				
				$('#contact-success').css({"color":"#58B25E"}).html('Thank you for contacting us. We\'ll be in touch shortly.');
				$('#contact-form').find('#name').val('');	 
   				$('#contact-form').find('#email').val('');
   				$('#contact-form').find('#telephone').val('');
  				$('#contact-form').find('#subject').val('');
				$('#contact-form').find('#message').val('');
				 			
			}else{
				
				$('#contact-success').css({"color":"#EB585C"}).html('Mail Error. Please Try Again.!') 	;	
			}
			}
			});
 		
 	  }
 	  		
	 	return false;
		
			
}
