jQuery(document).ready(function ($) {


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


    slide.waypoint(function (event, direction) {

        dataslide = $(this).attr('data-slide');
        if (direction === 'down') {
			
			if($('.navigation li[data-slide="' + dataslide + '"]').attr('data-dropdown')) {
			$('.navigation li[data-slide="' + dataslide + '"]').parent().parent().parent().addClass('active').prev().removeClass('active');
		}
		
			else {
			
            $('.navigation li[data-slide="' + dataslide + '"]').addClass('active').prev().removeClass('active');
			
			}
        }
        else {
			
			if($('.navigation li[data-slide="' + dataslide + '"]').attr('data-dropdown')) {
			$('.navigation li[data-slide="' + dataslide + '"]').parent().parent().parent().addClass('active').next().removeClass('active');
		}
		
			else {
			
            $('.navigation li[data-slide="' + dataslide + '"]').addClass('active').next().removeClass('active');
			
			}
        }

    });
 
    mywindow.scroll(function () {
        if (mywindow.scrollTop() == 0) {
            $('.navigation li[data-slide="1"]').addClass('active');
            $('.navigation li[data-slide="2"]').removeClass('active');
        }
    });

    function goToByScroll(dataslide) {
        htmlbody.animate({
            scrollTop: $('.slide[data-slide="' + dataslide + '"]').offset(10).top
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


});