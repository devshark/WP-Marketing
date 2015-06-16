function formSubmit(event) {
    event.preventDefault();
    var e = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var t = $("#contact-form").find('[name="first_name"]').val();
    var n = $("#contact-form").find('[name="last_name"]').val();
    var r = $("#contact-form").find('[name="email"]').val();
    var i = $("#contact-form").find('[name="phone"]').val();
    var s = $.trim($("#contact-form").find('[name="message"]').val());
    var o = "";
    if (t == "") {
        $("#contact-form").find("input[name='first_name']").css({
            border: "1px solid #D64541"
        })
    } else {
        $("#contact-form").find("input[name='first_name']").css({
            border: "1px solid #ffffff"
        })
    }
    if (n == "") {
        $("#contact-form").find("input[name='last_name']").css({
            border: "1px solid #D64541"
        })
    } else {
        $("#contact-form").find("input[name='last_name']").css({
            border: "1px solid #ffffff"
        })
    }
    if (r == "") {
        $("#contact-form").find("input[name='email']").css({
            border: "1px solid #D64541"
        })
    } else if (e.test(r) == false) {
        $("#contact-form").find("input[name='email']").css({
            border: "1px solid #D64541"
        })
    } else {
        $("#contact-form").find("input[name='email']").css({
            border: "1px solid #ffffff !important"
        })
    }
    if (t != "" && n != "" && e.test(r) != false) {
        o = "firstname=" + t + "&lastname=" + n + "&email=" + r + "&telephone=" + i + "&message=" + s;
        $.ajax({
            type: "POST",
            url: window.template_directory + "/contact.php",
            data: o,
            success: function(e) {
                if (e == "ok") {
                    $("#contact-form").find("#result").css({
                        color: "#00B16A",
                        "padding-bottom": "30px"
                    }).html("Thank you for contacting us. We'll be in touch shortly.");
                    $("#contact-form").find("#first_name").css({
                        border: "1px solid #a9a9a9"
                    }).val("");
                    $("#contact-form").find("#last_name").css({
                        border: "1px solid #a9a9a9"
                    }).val("");
                    $("#contact-form").find("#email").css({
                        border: "1px solid #a9a9a9"
                    }).val("");
                    $("#contact-form").find("#phone").css({
                        border: "1px solid #a9a9a9"
                    }).val("");
                    $("#contact-form").find("#message").css({
                        border: "1px solid #a9a9a9"
                    }).val("");
                    setTimeout(function() {
                        $("#contact-form").find("#result").html("")
                    }, 8e3)
                } else {
                    $("#contact-form").find("#result").css({
                        color: "#D64541"
                    }).html("Mail Error. Please Try Again or email us at sales"+"@"+"t24cup.com!")
                }
            }
        })
    }
    return false
}(function(e) {
    "use strict";
    var t = {
        Android: function() {
            return navigator.userAgent.match(/Android/i)
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i)
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i)
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i)
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i)
        },
        any: function() {
            return t.Android() || t.BlackBerry() || t.iOS() || t.Opera() || t.Windows()
        }
    };
    e(document).on("ready", function() {
        e(".hero-images").css({
            height: e("#home").height() + "px"
        });
        e("#card_front_holder").css({
            height: e("#features .col-md-3.col-sm-6").height() + "px",
            width: e("#card_front_holder").children().children("img").width() + "px"
        });
        e("#preloader .preloader-logo > img").on("load", function() {
            e(this).show().addClass("bounceIn").next().show()
        });
        if (t.any()) {
            e("body").addClass("mobile-device");
            e(".remove-on-mobile-device").remove()
        }
        e(window).on("resize", function() {
            //resizeVideoBackground()
        });
        e.stellar({
            responsive: true,
            horizontalScrolling: false,
            hideDistantElements: false
        });
        var n = new WOW({
            mobile: false,
            offset: 60
        });
        n.init();
        e("#contact").on("shown.bs.collapse", function() {
            n.scrollHandler()
        });
        e(".question .title").click(function() {
            e(this).parent().parent().children().each(function() {
                e(this).find(".text").animate({
                    "max-height": "0px"
                }, 300).removeClass("open");
                e(this).find("i").removeClass("fa-minus-circle").addClass("fa-plus-circle")
            });
            if (!e(this).next(".text").hasClass("open")) {
                e(this).next(".text").animate({
                    "max-height": "1000px"
                }, 300).addClass("open");
                e(this).find("i").removeClass("fa-plus-circle").addClass("fa-minus-circle")
            } else if (e(this).next(".text").hasClass("open")) {
                e(this).next(".text").animate({
                    "max-height": "0px"
                }, 300).removeClass("open");
                e(this).find("i").removeClass("fa-minus-circle").addClass("fa-plus-circle")
            }
        });
        e(window).on("scroll", function() {
            if (e(window).scrollTop() > 60) {
                e(".header-floating").addClass("floating")
            } else {
                e(".header-floating").removeClass("floating")
            }
        });
        e("#navigation").onePageNav({
            changeHash: true,
            scrollSpeed: 1e3,
            scrollOffset: 60
        });
        e("a.anchor-link").on("click", function(t) {
            t.preventDefault();
            var n = e(this),
                r = e(n.attr("href"));
            if (r.length < 1) return;
            e("html, body").animate({
                scrollTop: r.offset().top
            }, 1e3)
        });
        e(".screenshot-images a").nivoLightbox({
            effect: "fadeScale",
            beforeShowLightbox: function() {
                e("#document").addClass("blur")
            },
            afterHideLightbox: function() {
                e("#document").removeClass("blur")
            }
        });
        e("#subscribe-form").on("submit", function(t) {
            t.preventDefault();
            var n = e(this),
                r = n.find(".form-validation"),
                i = n.find("button"),
                s = n.attr("action");
            i.button("loading");
            r.removeClass("alert-danger alert-success");
            r.html("");
            e.ajax({
                type: "POST",
                url: s,
                data: n.serialize() + "&ajax=1",
                dataType: "JSON",
                success: function(e) {
                    if (e.status == "error") {
                        r.html(e.message);
                        r.addClass("alert-danger").fadeIn(500)
                    } else {
                        n.trigger("reset");
                        r.html(e.message);
                        r.addClass("alert-success").fadeIn(500)
                    }
                    i.button("reset")
                }
            })
        });
        e("#contact-form").on("submit", function(t) {
            t.preventDefault();
            var n = e(this),
                r = n.find(".form-validation"),
                i = n.find("button"),
                s = n.attr("action");
            i.button("loading");
            r.removeClass("alert-danger alert-success");
            r.html("");
            e.ajax({
                type: "POST",
                url: s,
                data: n.serialize() + "&ajax=1",
                dataType: "JSON",
                success: function(e) {
                    if (e.status == "error") {
                        r.html(e.message);
                        r.addClass("alert-danger").fadeIn(500)
                    } else {
                        n.trigger("reset");
                        r.html(e.message);
                        r.addClass("alert-success").fadeIn(500)
                    }
                    i.button("reset")
                }
            })
        })
    });
    e(window).on("load", function() {
        e("#preloader").fadeOut(1e3, function() {
            e("body").addClass("preloader-done")
        })
    });
    e("#tabs").tab()
})(jQuery)
