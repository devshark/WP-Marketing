function aboutCreativeCarousels() {
    "use strict";
    $("#carouselFirst").utilCarousel({
        responsiveMode: "itemWidthRange",
        itemWidthRange: [260, 320],
        autoPlay: !0,
        interval: 3e3,
        itemAnimation: "util-flip-in-x"
    }), $("#carouselSecond").utilCarousel({
        responsiveMode: "itemWidthRange",
        itemWidthRange: [160, 180],
        autoPlay: !0,
        interval: 3e3,
        itemAnimation: "util-fade-in"
    }), $("#team-showcase").utilCarousel({
        responsiveMode: "itemWidthRange",
        itemWidthRange: [300, 360],
        autoPlay: !1,
        interval: 3e3,
        itemAnimation: "util-flip-in-y"
    })
}

function homeCreativeCarousels() {
    "use strict";
    $("#fullwidth").utilCarousel({
        breakPoints: [
            [600, 1],
            [900, 2],
            [1200, 3],
            [1500, 4],
            [1800, 5]
        ],
        mouseWheel: !0,
        rewind: !1
    })
}

function allCommonFunctions() {
    "use strict";
    var e = new WOW({
        animateClass: "animated",
        offset: 100
    });
    e.init(), jQuery(function() {
        $(".fact").appear(function() {
            $(".fact").each(function() {
                var e = $(this).attr("data-perc");
                $(this).find(".factor").delay(6e3).countTo({
                    from: 0,
                    to: e,
                    speed: 3e3,
                    refreshInterval: 50
                })
            })
        })
    }), $(".chart").appear(function() {
        t()
    });
    var t = function() {
        jQuery(".percentage-light").easyPieChart({
            barColor: "#232425",
            trackColor: "rgba(230, 230, 230, 0.2)",
            scaleColor: !1,
            lineCap: "round",
            rotate: -90,
            lineWidth: 10,
            size: 120,
            animate: 2e3,
            onStep: function(e) {
                this.$el.find("span").text(~~e)
            }
        })
    };
    $(".iMac").parallax("right", .4, "originY", -500), $(".parallax1").parallax("50%", .4), $(".parallax2").parallax("50%", .4), $(".parallax3").parallax("50%", .4), $(".parallax4").parallax("50%", .4), $(".zoom").nivoLightbox({
        effect: "fade",
        theme: "default",
        keyboardNav: !0,
        clickOverlayToClose: !0,
        errorMessage: "The requested content cannot be loaded. Please try again later."
    }), $(".loading").click(function() {
        var e = $(this);
        e.button("loading")
    })
}

function textParallax() {
    var e = $(this).scrollTop();
    $(".page-header-wrap .container").css({
        opacity: 1 - e / 200
    })
}

function initialize() {
    var e = [{
            featureType: "road.highway",
            elementType: "geometry",
            stylers: [{
                saturation: -100
            }, {
                lightness: -8
            }, {
                gamma: 1.18
            }]
        }, {
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [{
                saturation: -100
            }, {
                gamma: 1
            }, {
                lightness: -24
            }]
        }, {
            featureType: "poi",
            elementType: "geometry",
            stylers: [{
                saturation: -100
            }]
        }, {
            featureType: "administrative",
            stylers: [{
                saturation: -100
            }]
        }, {
            featureType: "transit",
            stylers: [{
                saturation: -100
            }]
        }, {
            featureType: "water",
            elementType: "geometry.fill",
            stylers: [{
                saturation: -100
            }]
        }, {
            featureType: "road",
            stylers: [{
                saturation: -100
            }]
        }, {
            featureType: "administrative",
            stylers: [{
                saturation: -100
            }]
        }, {
            featureType: "landscape",
            stylers: [{
                saturation: -100
            }]
        }, {
            featureType: "poi",
            stylers: [{
                saturation: -100
            }]
        }, {}],
        t = {
            zoom: 16,
            disableDefaultUI: !0,
            panControl: !1,
            zoomControl: !1,
            scrollwheel: !1,
            navigationControl: !1,
            mapTypeControl: !1,
            scaleControl: !1,
            draggable: !1,
            center: hongkong,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, "usroadatlas"]
            }
        };
    map = new google.maps.Map(document.getElementById("map-canvas"), t);
    var a = {},
        o = new google.maps.StyledMapType(e, a);
    map.mapTypes.set("usroadatlas", o), map.setMapTypeId("usroadatlas");
    new google.maps.Marker({
        position: hongkong,
        icon: template_dir_url + "img/marker.png",
        map: map
    });
    google.maps.event.addDomListener(window, "resize", function() {
        map.setCenter(hongkong)
    })
}

function formSubmit() {
    event.preventDefault();
    var e = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/,
        t = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/,
        a = $("#contact-form").find('[name="name"]').val(),
        o = $("#contact-form").find('[name="company"]').val(),
        n = $("#contact-form").find('[name="email"]').val(),
        i = $("#contact-form").find('[name="phone"]').val(),
        r = $("#contact-form").find('[name="website"]').val(),
        s = $.trim($("#contact-form").find('[name="message"]').val()),
        l = "";
    return $("#contact-form").find("input[name='name']").css("" == a ? {
        border: "1px solid #D64541"
    } : {
        border: "1px solid #cccccc"
    }), $("#contact-form").find("input[name='company']").css("" == o ? {
        border: "1px solid #D64541"
    } : {
        border: "1px solid #cccccc"
    }), $("#contact-form").find("input[name='email']").css("" == n ? {
        border: "1px solid #D64541"
    } : 0 == e.test(n) ? {
        border: "1px solid #D64541"
    } : {
        border: "1px solid #cccccc !important"
    }), "" == r ? $("#contact-form").find("input[name='website']").css({
        border: "1px solid #D64541"
    }) : 0 == t.test(r) ? $("#contact-form").find("input[name='website']").css({
        border: "1px solid #D64541"
    }) : 1 == t.test(r) && "" == !r && $("#contact-form").find("input[name='website']").css({
        border: "1px solid #cccccc"
    }), "" != a && "" != o && 0 != e.test(n) && 0 != t.test(r) && (l = "name=" + a + "&company=" + o + "&email=" + n + "&telephone=" + i + "&website=" + r + "&message=" + s, $.ajax({
        type: "GET",
        url: template_dir_url + 'contact.php?name="+name+"&company="+company+"&email="+email+"&telephone="+telephone+"&website="+website+"&message="+message',
        data: l,
        success: function(e) {
            "ok" == e ? ($("#contact-form").find("#result").css({
                color: "#ffffff"
            }).html("Thank you for contacting us. We'll be in touch shortly."), $("#contact-form").find("#name").css({
                border: "1px solid #ffffff"
            }).val(""), $("#contact-form").find("#company").css({
                border: "1px solid #ffffff"
            }).val(""), $("#contact-form").find("#email").css({
                border: "1px solid #ffffff"
            }).val(""), $("#contact-form").find("#phone").css({
                border: "1px solid #ffffff"
            }).val(""), $("#contact-form").find("#website").css({
                border: "1px solid #ffffff"
            }).val(""), $("#contact-form").find("#message").css({
                border: "1px solid #ffffff"
            }).val(""), setTimeout(function() {
                $("#contact-form").find("#result").html("")
            }, 3e3)) : $("#contact-form").find("#result").css({
                color: "#D64541"
            }).html("Mail Error. Please Try Again or email us at sales@transact24.com!")
        }
    })), !1
}

function goToByScroll(e, t) {
    if (0 == !t) {
        if (1 == t) var t = "one";
        else if (2 == t) var t = "two";
        else if (3 == t) var t = "three";
        else if (4 == t) var t = "four";
        else if (5 == t) var t = "five";
        $('a[href^="#' + t + '"]').parent().addClass("active"), $('a[href^="#' + t + '"]').parent().siblings().removeClass("active"), $("#myTabContent").children("#" + t).addClass("in active"), $("#myTabContent").children("#" + t).siblings().removeClass("in active")
    }
    $("html,body").animate({
        scrollTop: $('section[data-sectionnum="' + e + '"]').offset().top - 60
    }, 2e3)
}! function(e) {
    "use strict";
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || ! function(e, t, a) {
        var o = 0,
            n = null,
            i = {
                x: 0,
                y: 0
            };
        e("[data-toggle]").closest("li").on("mouseenter", function() {
            n && n.removeClass("open"), t.clearTimeout(o), n = e(this), o = t.setTimeout(function() {
                n.addClass("open")
            }, a)
        }).on("mousemove", function(e) {
            return Math.abs(i.x - e.ScreenX) > 4 || Math.abs(i.y - e.ScreenY) > 4 ? (i.x = e.ScreenX, void(i.y = e.ScreenY)) : void(n.hasClass("open") || (t.clearTimeout(o), o = t.setTimeout(function() {
                n.addClass("open")
            }, a)))
        }).on("mouseleave", function() {
            t.clearTimeout(o), n = e(this), o = t.setTimeout(function() {
                n.removeClass("open")
            }, a)
        })
    }(e, window, 50), e(document).ready(function() {
        allCommonFunctions(), e.stellar({
            horizontalScrolling: !1,
            verticalOffset: 500
        }), e(".bouncing-arrow").click(function() {
            goToByScroll(1)
        }), e(".contactbtn").click(function() {
            e(".contact-options").animate({
                "max-height": "1000px"
            }, 500)
        }), e(".home-folio ul.portfolio li.portfolio-item").hover(function() {
            e(this).find(".card-overlay").animate({
                opacity: "1"
            }, 200)
        }, function() {
            e(this).find(".card-overlay").animate({
                opacity: "0"
            }, 100)
        }), e(window).load(function() {
            var t = 0;
            e("#myTab li").each(function(a) {
                t += e(this).outerWidth(), a == e("#myTab li").length - 1 && (e(this).css({
                    "border-right": "none"
                }), e("#myTab").css({
                    width: t + a + "px",
                    margin: "0 auto"
                }))
            });
            e(".portfolio-item").each(function() {
                var u = e(this).find("img").height();
                e(this).find(".card-hover-holder").css({
                    position: "relative",
                    top: -Math.abs(u),
                    "margin-bottom": -Math.abs(u)
                })
            });
        }), e(window).scroll(function() {
            var t = e(".splash-banner").innerHeight(),
                a = e(window).innerHeight(),
                o = e("body").attr("id");
            "intro" == o && (e(window).scrollTop() + a >= t ? e("#download").css("position", "absolute") : e("#download").removeAttr("style"), e(window).scrollTop() >= t ? (e(".navbar").addClass("navbar-fixed-top"), e("body").css("padding-top", "60px")) : (e(".navbar").removeClass("navbar-fixed-top"), e("body").removeAttr("style")))
        }), e(function() {
            e("#vertical-ticker").totemticker({
                row_height: "80px",
                next: "#ticker-next",
                previous: "#ticker-previous",
                stop: "#stop",
                start: "#start",
                mousestop: !0,
                max_items: 1,
                speed: 800,
                interval: 3e3
            })
        });
        var t = (e(".options-list li.active a").attr("class"), e(".portfolio")),
            a = t.clone();
        e(".options-list li a").click(function() {
            e(".options-list li").removeClass("active");
            var o = e(this).attr("class");
            if (e(this).parent().addClass("active"), "all" == o) var n = a.find("li");
            else var n = a.find("li[data-type=" + o + "]");
            return t.quicksand(n, {
                duration: 800,
                easing: "easeInOutQuad",
                useScaling: !0,
                adjustHeight: "dynamic"
            }), !1
        }), e(".search-nav > a").click(function() {
            e(".search-form").animate({
                top: "0"
            }, 500)
        }), e(".search-form .btn").click(function() {
            e(".search-form").animate({
                top: "-62"
            }, 500)
        }), e(".cat-toggle").click(function() {
            e(this).next().slideToggle()
        }), e(".filter-options .options-list li a").click(function() {
            var t = e(this).text();
            e(".cat-title span").text(t)
        }), e(".chart-controls .btn-group label").click(function() {
            "monthByMonth" == e(this).attr("id") ? (e(".column .annual, .column .two-year").slideUp(), e(".column .monthly").slideDown()) : "annualBilling" == e(this).attr("id") ? (e(".column .monthly, .column .two-year").slideUp(), e(".column .annual").slideDown()) : "twoYearBilling" == e(this).attr("id") && (e(".column .annual, .column .monthly").slideUp(), e(".column .two-year").slideDown())
        }), e(window).scroll(function() {
            textParallax()
        })
    })
}(jQuery);
var map, hongkong = new google.maps.LatLng(36.138918, -5.353578);
google.maps.event.addDomListener(window, "load", initialize);
