$(function() {
    "use strict";
	$ = jQuery.noConflict();
    function i(i) {
        return i.replace(/^\//, "").replace(/(index|default).[a-zA-Z]{3,4}$/, "").replace(/\/$/, "")
    }

    function e() {
        for (var i = 0, e = arguments.length; e > i; i++) {
            var n = arguments[i],
                s = $(n);
            if (s.scrollTop() > 0) return n;
            s.scrollTop(1);
            var a = s.scrollTop() > 0;
            if (s.scrollTop(0), a) return n
        }
        return []
    }
    if (window.location.hash) {
        var n = window.location.hash.substring(1),
            s = $("section#" + n + ".row"),
            a = n,
            t = e("html", "body");
        if (a) {
            if ("about" == a) var o = Math.ceil(s.offset().top - 237);
            else var o = Math.ceil(s.offset().top - 107);
            if(typeof event !== 'undefined'){
				event.preventDefault()
			}
            $(t).animate({
                scrollTop: o + "px"
            }, 300)
        }
    }
    $(".banner").unslider(), $("#header-links li a").mouseenter(function() {
        $(this).parent().css({
            background: "#ea6d01"
        })
    }), $("#header-links li a").mouseout(function() {
        $(this).parent().css({
            background: "none"
        })
    }), $(document).scroll(function() {
        if ($(this).scrollTop() >= 0) {
            var i = Math.round(parseInt($(window).scrollTop()) / 5) + "px";
            $("#top-banner").css({
                "background-position": "10% " + i
            })
        }
        $(this).scrollTop() >= $("#navbar").position().top && ($("#newsletter-field").css({
            display: "none"
        }), $(".small-logo-hidden").hasClass("logoshow") || ($(".small-logo-hidden").addClass("logoshow"), $(".small-logo-hidden").animate({
            opacity: "1"
        }, 400))), $(this).scrollTop() <= $("#navbar").position().top && ($("#newsletter-field").css({
            display: "block"
        }), $(".small-logo-hidden").hasClass("logoshow") && ($(".small-logo-hidden").removeClass("logoshow"), $(".small-logo-hidden").css({
            opacity: "0"
        }))), $(this).scrollTop() <= $(".top-top-grey").position().top && $(".top-top-grey").css({
            "-webkit-box-shadow": "0px 0px 8px 2px rgba(0,0,0,0.3)",
            "-moz-box-shadow": "0px 0px 8px 2px rgba(0,0,0,0.5)",
            "box-shadow": "0px 0px 8px 2px rgba(0,0,0,0.5)"
        }), $(this).scrollTop() + 130 < $("#home").offset().top && ($("#menu").children().each(function() {
            $(this).removeClass("active")
        }), $("#menu").children().find('a[href="#home"]').parent().addClass("active")), $(this).scrollTop() + 130 >= $("#offer").offset().top && ($("#menu").children().each(function() {
            $(this).removeClass("active")
        }), $("#menu").children().find('a[href="#offer"]').parent().addClass("active")), $(this).scrollTop() + 130 >= $("#usage").offset().top && ($("#menu").children().each(function() {
            $(this).removeClass("active")
        }), $("#menu").children().find("a.functionality").parent().addClass("active")), $(this).scrollTop() + 130 >= $("#sms").offset().top && ($("#menu").children().each(function() {
            $(this).removeClass("active")
        }), $("#menu").children().find("a.functionality").parent().addClass("active")), $(this).scrollTop() + 130 >= $("#loaded").offset().top && ($("#menu").children().each(function() {
            $(this).removeClass("active")
        }), $("#menu").children().find("a.security").parent().addClass("active")), $(this).scrollTop() + 130 >= $("#safety").offset().top && ($("#menu").children().each(function() {
            $(this).removeClass("active")
        }), $("#menu").children().find("a.security").parent().addClass("active")), $(this).scrollTop() + 130 >= $("#fees").offset().top && ($("#menu").children().each(function() {
            $(this).removeClass("active")
        }), $("#menu").children().find('a[href="#fees"]').parent().addClass("active")), $(this).scrollTop() + 130 >= $("#faq").offset().top && ($("#menu").children().each(function() {
            $(this).removeClass("active")
        }), $("#menu").children().find('a[href="#faq"]').parent().addClass("active")), $(this).scrollTop() + 130 >= $("#about").offset().top && ($("#menu").children().each(function() {
            $(this).removeClass("active")
        }), $("#menu").children().find('a[href="#about"]').parent().addClass("active"))
    });
    var l = i(location.pathname),
        t = e("html", "body");
    $("a[href*=#]").each(function() {
        var e = i(this.pathname) || l;
        if (l == e && (location.hostname == this.hostname || !this.hostname) && this.hash.replace(/#/, "")) {
            var n = $(this.hash),
                s = this.hash;
            s && $(this).on("click", function(i) {
                if ("about" == s) var e = Math.ceil(n.offset().top - 237);
                else var e = Math.ceil(n.offset().top - 107);
                i.preventDefault(), $(t).animate({
                    scrollTop: e + "px"
                }, 1e3, function() {})
            })
        }
    }), $("#mobile-nav .menu-btn .nav-expand").click(function() {
        "1000px" == $("#mobile-nav .nav-links").css("max-height") ? $("#mobile-nav .nav-links").stop().animate({
            "max-height": "0px"
        }, 100) : $("#mobile-nav .nav-links").stop().animate({
            "max-height": "1000px"
        }, 500)
    }), $("#mobile-nav .nav-links ul li a").click(function() {
        $(this).parent().css({
            background: "#ea6d01"
        }), $("#mobile-nav").find(".nav-links").stop().delay(500).animate({
            "max-height": "0px"
        }, 100)
    }), $("#navigationmain .functionality").mouseenter(function() {
        $("#navigationmain .security").siblings("ul").css({
            visibility: "visible",
            display: "none",
            opacity: "0"
        }), $(this).siblings("ul").css({
            visibility: "visible",
            display: "block"
        }).animate({
            opacity: "1",
            top: "64px"
        }, 300)
    }), $("#navigationmain .functionality").siblings("ul").mouseleave(function() {
        $(this).css({
            visibility: "visible",
            display: "none",
            opacity: "0"
        })
    }), $("#navigationmain .security").mouseenter(function() {
        $("#navigationmain .functionality").siblings("ul").css({
            visibility: "visible",
            display: "none",
            opacity: "0"
        }), $(this).siblings("ul").css({
            visibility: "visible",
            display: "block"
        }).animate({
            opacity: "1",
            top: "64px"
        }, 300)
    }), $("#navigationmain .security").siblings("ul").mouseleave(function() {
        $(this).css({
            visibility: "visible",
            display: "none",
            opacity: "0"
        })
    }), $(window).resize(function() {
        $(".banner ul").animate({
            left: "0px"
        }, 300), $(".banner .dots li").each(function() {
            $(this).removeClass("active")
        }), $(".banner .dots li:first-child").addClass("active"), $(".banner").css({
            width: $(window).width()
        }), $(".banner ul li").each(function() {
            $(this).css({
                width: $(window).width()
            })
        })
    })
});
