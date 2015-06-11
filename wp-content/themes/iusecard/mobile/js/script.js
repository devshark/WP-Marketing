$(function () {
    function containerHeights() {
        $('#main section .cta').each(function () {
            var ctaHeight = $(this).height();
            $(this).css({
                "height": ctaHeight
            });
        });
        $('#main #loaded .holder').each(function () {
            var holderHeight = $(this).height();
            $(this).css({
                "height": holderHeight
            });
        });
    }
    containerHeights()
    window.windowHeight = $(window).height();
    window.addEventListener("load", function () {
        setTimeout(function () {
            window.scrollTo(0, 1);
        }, 0);
    });
    $('header .container .menu').css({
        "height": window.windowHeight
    });

    function menuClose() {
        $('header .container .menu').stop().animate({
            "max-height": "0px"
        }, {
            duration: 100,
            complete: function () {
                $('header .container .menu ul li').each(function () {
                    $(this).css({
                        "background": "none",
                        "color": "#fff"
                    });
                });
            }
        });
    }

    function menuOpen() {
        $('header .container .menu').stop().animate({
            "max-height": "1000px"
        }, 800);
    }
    $('header .container > .left').click(function () {
        if ($('header .container .menu').css("max-height") == "1000px") {
            menuClose()
        } else {
            menuOpen()
        }
    });
    $('#main section .big-btn span').hover(function () {
        $(this).css({
            "background": "#eb8832"
        });
    }, function () {
        $(this).css({
            "background": "#ea6d01"
        });
    });
    $('#main section .small-btn span').hover(function () {
        $(this).css({
            "background": "#eb8832"
        });
    }, function () {
        $(this).css({
            "background": "#ea6d01"
        });
    });
    $('#main > #faqs > .holder').click(function () {
        if ($(this).css("max-height") == "42px") {
            $(this).animate({
                "max-height": "1000px"
            }, 300);
            $(this).children().children('span').children().text('-');
            $(this).children('.question').css({
                "color": "#555"
            });
            $(this).siblings().each(function () {
                $(this).children('.question').css({
                    "color": "#828383"
                });
                $(this).children().children('span').children().text('+');
                $(this).animate({
                    "max-height": "42px"
                }, 100);
            });
        }
    });
    $('header .container .menu ul li').click(function (event) {
        $(this).css({
            "background": "#ea6d01",
            "color": "#000"
        });
        event.preventDefault();
        var defaultAnchorOffset = 105;
        var $anchor = $('#' + $(this).children('a').attr('href').substring(1));
        var anchorOffset = $anchor.attr('data-anchor-offset');
        if (!anchorOffset) anchorOffset = defaultAnchorOffset;
        $('html,body').animate({
            scrollTop: $anchor.offset().top - anchorOffset
        }, 500);
        setTimeout(menuClose, 400)
    });
    $(window).resize(function () {
        menuClose()
        window.windowHeight = $(window).height();
        $('header .container .menu').css({
            "height": window.windowHeight
        });
        containerHeights()
    });
    $('.submit-form').click(function () {
        if ($(this).data("form") == "contact") {
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            var names = $('#contact-form').find('#name').val();
            var email_address = $('#contact-form').find('#email').val();
            var subject = $('#contact-form').find('#subject').val();
            var comment = $.trim($('#contact-form').find('#message').val());
            var data_html = '';
            if (names == "") {
                $("#contact-form").find("label[for='name']").parent().parent().children('.msg').css({
                    "display": "block",
                    "opacity": "1",
                    "height": "auto",
                    "color": "#F00",
                    "margin-top": "10px"
                });
            } else {
                $("#contact-form").find("label[for='name']").parent().parent().children('.msg').css({
                    "display": "none"
                });
            }
            if (email_address == "") {
                $("#contact-form").find("label[for='email']").parent().parent().children('.msg').css({
                    "display": "block",
                    "opacity": "1",
                    "height": "auto",
                    "color": "#F00",
                    "margin-top": "10px"
                });
            } else if (reg.test(email_address) == false) {
                $("#contact-form").find("label[for='email']").parent().parent().children('.msg').html('Please provide a valid email.').css({
                    "display": "block",
                    "opacity": "1",
                    "height": "auto",
                    "color": "#F00",
                    "margin-top": "10px"
                });
                $('.email-required').html('Invalid Email Address.');
            } else {
                $("#contact-form").find("label[for='email']").parent().parent().children('.msg').html('This field is required.').css({
                    "display": "none"
                });
            }
            if (subject == "") {
                $("#contact-form").find("label[for='subject']").parent().parent().children('.msg').css({
                    "display": "block",
                    "opacity": "1",
                    "height": "auto",
                    "color": "#F00",
                    "margin-top": "10px"
                });
            } else {
                $("#contact-form").find("label[for='subject']").parent().parent().children('.msg').css({
                    "display": "none"
                });
            }
            if (comment == "") {
                $("#contact-form").find("label[for='message']").parent().parent().children('.msg').css({
                    "display": "block",
                    "opacity": "1",
                    "height": "auto",
                    "color": "#F00",
                    "margin-top": "10px"
                });
            } else {
                $("#contact-form").find("label[for='message']").parent().parent().children('.msg').css({
                    "display": "none"
                });
            }
            if (comment != "" && names != "" && reg.test(email_address) != false) {
                data_html = "name=" + names + "&subject=" + subject + "&message=" + comment + "&email=" + email_address;
                $.ajax({
                    type: 'POST',
                    url: window.template_uri + '/contact-send.php',
                    data: data_html,
                    success: function (msg) {
                        if (msg == 'sent') {
                            $('#contact-success').html('Thank you for contacting us. We\'ll be in touch shortly.');
                            $('#contact-form').find('#name').val('');
                            $('#contact-form').find('#email').val('');
                            $('#contact-form').find('#subject').val('');
                            $('#contact-form').find('#message').val('');
                        } else {
                            $('#contact-success').html('Mail Error. Please Try Again.!');
                        }
                    }
                });
            }
            return false;
        } else {
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            var names = $('#request-form').find('#name').val();
            var company = $('#request-form').find('#company').val();
            var incorporation = $('#request-form').find('#incorporation').val();
            var needed = $('#request-form').find('#needed').val();
            var email_address = $('#request-form').find('#email').val();
            var phone = $('#request-form').find('#phone').val();
            var comment = $.trim($('#request-form').find('#message').val());
            var data_html = '';
            if (names == "") {
                $("#request-form").find("label[for='name']").parent().parent().children('.msg').css({
                    "display": "block"
                });
            } else {
                $("#request-form").find("label[for='name']").parent().parent().children('.msg').css({
                    "display": "none"
                });
            }
            if (company == "") {
                $("#request-form").find("label[for='company']").parent().parent().children('.msg').css({
                    "display": "block"
                });
            } else {
                $("#request-form").find("label[for='company']").parent().parent().children('.msg').css({
                    "display": "none"
                });
            }
            if (phone == "") {
                $("#request-form").find("label[for='phone']").parent().parent().children('.msg').css({
                    "display": "block"
                });
            } else {
                $("#request-form").find("label[for='phone']").parent().parent().children('.msg').css({
                    "display": "none"
                });
            }
            if (comment == "") {
                $("#request-form").find("label[for='message']").parent().parent().children('.msg').css({
                    "display": "block"
                });
            } else {
                $("#request-form").find("label[for='message']").parent().parent().children('.msg').css({
                    "display": "none"
                });
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
            if (email_address == "") {
                $("#request-form").find("label[for='email']").parent().parent().children('.msg').css({
                    "display": "block"
                });
            } else if (reg.test(email_address) == false) {
                $("#request-form").find("label[for='email']").parent().parent().children('.msg').html('Please provide a valid email.').css({
                    "display": "block"
                });
                $('.email-required').html('Invalid Email Address.');
            } else {
                $("#request-form").find("label[for='email']").parent().parent().children('.msg').html('This field is required.').css({
                    "display": "none"
                });
            }
            if (comment != "" && names != "" && company != "" && phone != "" && reg.test(email_address) != false) {
                data_html = "name=" + names + "&company=" + company + "&incorporation=" + incorporation + "&needed=" + needed + "&phone=" + phone + "&message=" + comment + "&email=" + email_address;
                $.ajax({
                    type: 'POST',
                    url: window.template_uri + 'contact-send.php',
                    data: data_html,
                    success: function (msg) {
                        if (msg == 'sent') {
                            $('#request-success').html('Thank you for contacting us. We\'ll be in touch shortly.');
                            $('#request-form').find('#name').val('');
                            $('#request-form').find('#company').val('');
                            $('#request-form').find('#incorporation').val('');
                            $('#request-form').find('#needed').val('');
                            $('#request-form').find('#email').val('');
                            $('#request-form').find('#phone').val('');
                            $('#request-form').find('#message').val('');
                        } else {
                            $('#request-success').html('Mail Error. Please Try Again.!');
                        }
                    }
                });
            }
            return false;
        }
    })
})
