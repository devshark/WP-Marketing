function CheckAll(e) {
    return ISBLANK(e.fieldnm_1.value) ? (alert("Please define value for Your name field !!"), !1) : ISBLANK(e.fieldnm_2.value) ? (alert("Please define value for Your E-mail field !!"), !1) : ISBLANK(e.fieldnm_11.value) ? (alert("Please define value for Your project budget field !!"), !1) : !0
}

function checkemail(e) {
    var t = e,
        a = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return testresults = a.test(t) ? !0 : !1, testresults
}

function ISBLANK(e) {
    var t, a = 0;
    for (t = 0; t < e.length; t++) " " == e.charAt(t) && (a += 1);
    return a == e.length ? !0 : !1
}

function is_radio_button_selected(e) {
    var t = !1;
    for (counter = 0; counter < e.length; counter++) e[counter].checked && (t = !0);
    return t ? !0 : !1
}
$(function() {
		"use strict";
		$ = jQuery.noConflict();
		$(".price-slider").noUiSlider({
			range: [10, 100],
			start: [20, 80],
			step: 10,
			slide: function() {
				var e = $(this).val();
				$(".prices").text(e[0] + " - " + e[1])
			}
		});
		var e = [];
		e.push({
			range: [10, 100],
			start: [20, 80],
			handles: 2,
			step: 10,
			slide: function() {
				var e = $(this).val();
				$(".prices").text(e[0] + " - " + e[1])
			}
		})
    }), jQuery(function(e) {
        e(".tweet").tweet({
            username: "t24blackcard",
            join_text: "auto",
            avatar_size: null,
            count: 2,
            auto_join_text_default: " we said,",
            auto_join_text_ed: " we",
            auto_join_text_ing: " we were",
            auto_join_text_reply: " we replied to",
            auto_join_text_url: " we were checking out",
            loading_text: "loading tweets..."
        })
    }), $(document).ready(function() {
        $(window).width() > 768 && ($("#navbar").sticky({
            topSpacing: 0
        }), $(".top-top-grey").sticky({
            topSpacing: 58
        }), $("#sticky-sidebar").sticky({
            topSpacing: 75
        }), $("#sticky-sidebar").sticky({
            bottomSpacing: 470
        }))
    }), $(document).ready(function() {
        $("a[data-rel^='prettyPhoto']").prettyPhoto({
            animationSpeed: "normal",
            padding: 40,
            opacity: .35,
            showTitle: !0,
            allowresize: !0,
            theme: "light_square"
        })
    }), selectnav("menu", {
        label: "### Table of content ### ",
        nested: !0,
        indent: "-"
    }), $(document).ready(function() {
        $(".accordion-header").toggleClass("inactive-header");
        var e = $(".accordion-header").width();
        return $(".accordion-content").css({
            width: e
        }), $(".accordion-header").first().toggleClass("active-header").toggleClass("inactive-header"), $(".accordion-content").first().slideDown().toggleClass("open-content"), $(".accordion-header").click(function() {
            $(this).is(".inactive-header") ? ($(".active-header").toggleClass("active-header").toggleClass("inactive-header").next().slideToggle().toggleClass("open-content"), $(this).toggleClass("active-header").toggleClass("inactive-header"), $(this).next().slideToggle().toggleClass("open-content")) : ($(this).toggleClass("active-header").toggleClass("inactive-header"), $(this).next().slideToggle().toggleClass("open-content"))
        }), !1
    }),
    function(e) {
        e(window).width() > 480 && e(function() {
            e(".carousel").carousel()
        })
    }(jQuery), $(window).load(function() {
        $(".home .flex-control-nav").addClass("show")
    });
