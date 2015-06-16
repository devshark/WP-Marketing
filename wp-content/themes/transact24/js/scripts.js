jQuery.expr.pseudos.attr = $.expr.createPseudo(function (arg) {
    var regexp = new RegExp(arg);
    return function (elem) {
        for (var i = 0; i < elem.attributes.length; i++) {
            var attr = elem.attributes[i];
            if (regexp.test(attr.name)) {
                return true;
            }
        }
        return false;
    };
});

function expandFooter() {
    event.preventDefault();
    if (!$("#footer-text").hasClass("open")) {
        $("#footer-text").addClass("open").animate({
            "max-height": "1000px"
        }, 300);
        $("#footer-toggle").text("Less")
    } else {
        $("#footer-text").removeClass("open").animate({
            "max-height": "0px"
        }, 300);
        $("#footer-toggle").text("More")
    }
}
$(function () {
    //edit
    var langJson = switch_lang();
    (function () {
        var url = "/category/" + window.current_language + "/feed";
        $.ajax({
            'url': url,
            'method': 'GET',
            'success': function (xml) {
				// header news
                var f = $('channel item', xml).first().find('category').html();
                var l = $('channel item', xml).first().find('title').html();
                var c = $('channel item', xml).first().find('link').html();
                
                var n = $('channel item', xml).first().find('content\\:encoded').text();
                var r = $('channel item', xml).first().find('pubDate').text();
                var i = n.split("Display embed code");
                var s = r.split(" ");
                var o = s[1] + "-" + s[2] + "-" + s[3];
                var u = i[0].split('src="');
                var a = [];
                if (u.length > 1) {
                    a = u[1].split('"');
                }
                
                //footer news 
                $(".blog-latest .news-title a").text(t($('channel item', xml).first().find('title').html(), 45));
                $(".blog-latest .news-title a").attr("href", c);
                $(".blog-latest .news-date div").text(o);
                $(".blog-latest .news-desc").text(t($($('channel item', xml).first().find('description').text()).text(), 100));
                $(".blog-latest .news-more a").attr("href", c);
                
                // section thumbnail news
                $('channel item', xml).each(function (id, value) {
                    $(".carousel-inner .blog-header" + id + " a").attr("href", $('link', value).html());
                    $(".carousel-inner .blog-header" + id + " a").text($('title', value).html());
                    $("#blog-news-" + id + " .blog-img-url").attr("href", $('link', value).html());
                    var p = t($('title', value).html(), 46);
                    $("#blog-news-" + id + " h3 a").text(p);
                    $("#blog-news-" + id + " h3 a").attr("href", $('link', value).html());
                    var d = t($($('description', value).text()).text(), 96);
                    $("#blog-news-" + id + " .blog-news-info").text(d);
                    $("#blog-news-" + id + " .blog-news-more").attr("href", $('link', value).html());
                    //var v = $('content\\:encoded', value).html();
                    var v = $('description', value).html();
					//console.log(v);
                    var m = v.split("Display embed code");
                    var g = m[0].split('src="');
                    var y = [];
                    if (g.length > 1) {
                        y = g[1].split('"');
                    }
                    $("#blog-news-" + id + " .blog-img-holder").attr("style", "background:url(" + y[0] + ")");
                    var b = $('pubDate', value).text();
                    var w = b.split(" ");
                    var E = w[1] + "-" + w[2] + "-" + w[3];
                    $("#blog-news-" + id + " .blog-news-date").text(E);
                });
            }
        });
    })();

    function t(e, t) {
        var n = e;
        if (e.length > t) {
            n = e.substring(0, t);
            n += "..."
        }
        return n
    }

    //e();
    r();
    $("a[data-target=#contentCarousel]").click(function () {
        c();
        u();
        a()
    });
    //$(".dropdown li ul li").click(function () { 
    //var hashstring = $(this).children().attr('href').split('#');  
    //document.location.hash =  "#"+hashstring[1];
    //var whichpage = hashstring[0].split('/');
    //var whichpage1 = window.location.href.split('#');
    //var whichpage2 = whichpage1.substring(location.lastIndexOf["/"]);
    //if(whichpage2.length <= 0){
    //var i = window.location.hash.substring(1);
    //if (!i.length <= 0) {
    //var s;
    //if (i == "ach-processing") {
    //s = 1
    //} else if (i == "alipay") {
    //s = 2
    //} else if (i == "card-payment-processing") {
    //			s = 3
    //		} else if (i == "china-union-pay") {
    //			s = 4
    //		} else if (i == "prepaid-cards") {
    //			s = 5
    //		} else if (i == "travel-insurance") {
    //			s = 6
    //		} else if (i == "white-label-gateway") {
    //			s = 7
    //		}
    //		$("#contentCarousel .carousel-inner").children(".item").each(function () {
    //			$(this).removeClass("active")
    //		});
    //		$("#contentCarousel .carousel-inner").children(".item").eq(s).addClass("active");
    //		c();
    //		
    //	}
    //}
    //});
    $("a").hover(function () {
        window.orglinktitle = $(this).attr("title");
        $(this).attr("title", "")
    }, function () {
        $(this).attr("title", window.orglinktitle)
    });
    $("img").hover(function () {
        window.orgimgalt = $(this).attr("alt");
        $(this).attr("alt", "")
    }, function () {
        $(this).attr("alt", window.orgimgalt)
    });
    //$(window).scroll(function () {
    //		if ($(this).scrollTop() > $(".feature-1").offset().top) {
    //			$("#element").visible();
    //			$(".feature-1").children(".col-md-7").animate({
    //				left: "0px",
    //				opacity: "1"
    //			}, 1e3);
    //			$(".feature-1").children(".col-md-5").animate({
    //				left: "0px",
    //				opacity: "1"
    //			}, 1e3)
    //		} else {} if ($(this).scrollTop() > $(".feature-2").offset().top) {
    //			$(".feature-2").children(".col-md-5").animate({
    //				left: "0px",
    //				opacity: "1"
    //			}, 1e3);
    //			$(".feature-2").children(".col-md-7").animate({
    //				left: "0px",
    //				opacity: "1"
    //			}, 1e3)
    //		} else {} if ($(this).scrollTop() > $(".feature-3").offset().top) {
    //			$(".feature-3").children(".col-md-7").animate({
    //				left: "0px",
    //				opacity: "1"
    //			}, 1e3);
    //			$(".feature-3").children(".col-md-5").animate({
    //				left: "0px",
    //				opacity: "1"
    //			}, 1e3)
    //		} else {}
    //	});
    $(".dropdown-menu li ul li").hover(function () {
        $(this).css({
            background: "#f0191e"
        });
        $(this).find("a").css({
            color: "#fff"
        })
    }, function () {
        $(this).css({
            background: "#fff"
        });
        $(this).find("a").css({
            color: "#f0191e"
        })
    });
    $.validator.addMethod("re_weburl", function (e, t, n) {
        return !e || re_weburl.test(e)
    }, langJson.re_weburl);
    $("#contactform").validate({
        rules: {
            contactname: {
                required: true,
                minlength: 2
            },
            website: {
                re_weburl: true
            },
            phone: {
                required: true,
                digits: true
            },
            email: {
                required: true,
                email: true
            },
            department: {
                required: true
            },
            captcha_code: {
                required: true
            },
            messages: {
                contactname: {
                    required: "Please enter your name",
                    minlength: "Please enter a valid name"
                },
                website: "Please enter a valid URL",
                phone: "Please enter your lastname",
                email: "Please enter a valid email",
                department: "Please select a department",
                captcha_code: "Please enter the text in the image"
            }
        }
    });
    $('form#contactform').submit(function (event) {
        event.preventDefault();
        var $this = $(this);
        var ser = $(this).serialize();
        if ($("#contactform").valid()) {
            $.ajax({
                type: 'get',
                url: window.template_uri + '/check.php',
                data: ser,
                dataType: 'json',
                success: function (data) {
                    if (data.status == 200) {
                        $this.find('div.row').first().find('p.error').hide();
                        $this.find('div.row').first().find('p.error#success').show();
                        form_reset($this);
                    } else if (data.status == 406) {
                        $this.find('div.row').first().find('p.error').hide();
                        $this.find('div.row').first().find('p.error#error').show();
                    }
                    $this.find('a#a-refresh').trigger('click');
                }
            });
        }
    });
    var form_reset = function (dom_form) {
        dom_form.find('input[type=text],textarea').val("");
        dom_form.find('select#department').prop('selectedIndex', 0);
        window.setTimeout(function () {
            dom_form.find('div.row').first().find('p.error').hide();
            $('div#cta a#cta-btn').trigger('click');
        }, 2000);
    }
    $(".btn-clear").click(function () {
        bootbox.confirm("Are you sure?", function (e) {
            if (e == true) {
                $("#form")[0].reset();
                $("label.error").each(function () {
                    $(this).remove()
                })
            }
        })
    });
    $(".navbar-wrapper").sticky({
        topSpacing: 0
    });
    $("#cta").sticky({
        topSpacing: 137
    });
    $('#cta-btn, a:contains("Contact")').click(function (e) {
        if (window.is_front) {
            e.preventDefault();
        }
        if ($("#cta-expand").hasClass("open")) {
            $("#cta-expand").removeClass("open").animate({
                "max-height": "0px"
            }, {
                duration: 500,
                step: function () {
                    setTimeout(function () {
                        $("#cta").children(".container:first-child").children(".row:first-child").css({
                            "border-bottom": "none"
                        })
                    }, 500)
                }
            })
        } else {
            $("#cta").children(".container:first-child").children(".row:first-child").css({
                "border-bottom": "1px solid #dddddd"
            });
            $("html, body").animate({
                scrollTop: 400
            }, 500);
            $("#cta-expand").animate({
                "max-height": "1000px"
            }, 500).addClass("open")
        }
    });
    $('#menu_about').click(function (e) {
        if (window.is_front) {
            e.preventDefault();
        }
        if ($("#about-expand").hasClass("open")) {
            $("#about-expand").removeClass("open").animate({
                "max-height": "0px"
            }, {
                duration: 500,
                step: function () {}
            })
        } else {
            $("html, body").animate({
                scrollTop: 400
            }, 500);
            $("#about-expand").animate({
                "max-height": "1000px"
            }, 500).addClass("open");
            $("#cta-expand").removeClass("open").animate({
                "max-height": "0px"
            });
            $("#cta").children(".container:first-child").children(".row:first-child").css({
                "border-bottom": "none"
            });
            //$mylabel.text($mylabel.text().replace("-", ""))
        }
    });
    $('a:contains("Home"), .nav.navbar-nav a:first').click(function (e) {
        if (window.is_front) {
            e.preventDefault();
        }
        f();
        l();
        u();
        a();
        l()
    });
    $(".dropdown-menu li ul li").click(function () {
        if (!$(this).parent().parent().parent().hasClass('languages') && (window.location.href.replace(/\/$/, '') == window.location.origin || window.location.href.replace(/\/$/, '') == window.location.origin + "/zh_hk" || window.location.href.replace(/\/$/, '') == window.location.origin + "/zh_cn")) {
            c();
        }
        u();
        a()
    });
    $(".marketing .img-holder, .marketing .blog-img-holder").hover(function () {
        $(this).children(".plus-holder").stop().animate({
            opacity: "1"
        }, 400)
    }, function () {
        $(this).children(".plus-holder").stop().animate({
            opacity: "0"
        }, 100)
    });
    $("#newsCarousel").carousel({
        interval: false,
        speed: 1e3,
        timeout: 0,
        easing: "easeinout"
    });
    $("#testimonialCarousel").carousel({
        interval: false
    });
    $("#contentCarousel").carousel({
        interval: false
    });
    $("#partnerCarousel").carousel({
        interval: false
    });
    $("#top-text-slider").carousel({
        interval: 3e3
    })
    $("#myCarousel").carousel({
        interval: 8e3
    })
    var hash = window.location.hash.substring(1);
    if (!hash.length <= 0) {
        var s;
		c();
        u();
        a()
        if (hash == "ach-processing") {
            s = 1
        } else if (hash == "alipay") {
            s = 2
        } else if (hash == "card-payment-processing") {
            s = 3
        } else if (hash == "china-union-pay") {
            s = 4
        } else if (hash == "prepaid-cards") {
            s = 5
        } else if (hash == "travel-insurance") {
            s = 6
        } else if (hash == "white-label-gateway") {
            s = 7
        } else if (hash == "about") {
			$('.nav.navbar-nav a:first').trigger('click');
            $('#menu_about').trigger('click');
        } else if (hash == "contact") {
            $('#cta-btn').trigger('click');
        }
        $("#contentCarousel .carousel-inner").children(".item").each(function () {
            $(this).removeClass("active");
        });
        $("#contentCarousel .carousel-inner").children(".item").eq(s).addClass("active");
        c();
    }
    removeHash();
});
//remove message flag function
function removeMessageFlag(flag) {
    // purpose is to remove the query string flag that signals backend to display dialog box
    var oldquery = window.location.search; // get the query string
    var newquery = oldquery.replace('?m=' + flag, '/?'); // remove ?m=<flag> if existing
    newquery = newquery.replace('?&', '?'); // if there is existing & immediately after '?' then remove as well
    window.history.pushState('', '', newquery); // replace the URL with the new query string
}
//remove hash in url 
function removeHash() {
    var oldURL = window.location.href; // get the current URL
    var hashIndex = oldURL.indexOf('#');
    if (hashIndex > 0) { //if URL has hash,
		var splt = oldURL.split('#');
		var newURL = oldURL.replace('#'+splt[1],'');
        window.history.pushState('', '', newURL); // update the URL and remove the hash
    }
}

function n(e, t) {
	var n = $(e).parent().children("p").length;
	$(e).parent().children("p").eq(t - 1).animate({
		opacity: "0"
	}, 500).css({
		display: "none"
	});
	$(e).css({
		display: "block"
	}).animate({
		opacity: "1"
	}, {
		duration: 500,
		complete: function () {
			if (n == t + 1) {
				setTimeout(function () {
					r()
				}, 1e4)
			}
		}
	})
}

function r() {
	$(".didyouknow").children("p").each(function (e) {
		var t = $(this);
		var r = $("#test").children().length;
		setTimeout(function () {
			n(t, e)
		}, e * 1e4)
	})
}

function o() {
	$(".feature-regular .col-md-7").css({
		left: "-100px",
		opacity: "0"
	});
	$(".feature-regular .col-md-5").css({
		left: "100px",
		opacity: "0"
	});
	$(".feature-invert .col-md-5").css({
		left: "-100px",
		opacity: "0"
	});
	$(".feature-invert .col-md-7").css({
		left: "100px",
		opacity: "0"
	})
}

function u() {
	$("#about-expand").removeClass("open").animate({
		"max-height": "0px"
	}, 300)
}

function a() {
	$("#cta-expand").removeClass("open").animate({
		"max-height": "0px"
	}, 300);
	$("#cta").children(".container:first-child").children(".row:first-child").css({
		"border-bottom": "none"
	})
}

function f() {
	$("html, body").animate({
		scrollTop: 0
	}, 400)
}

function l() {
	$("#contentCarousel .carousel-inner .item").each(function () {
		$(this).removeClass("active")
	});
	$("#contentCarousel .carousel-inner .item:first-child").addClass("active")
}

function c() {
	$("html, body").animate({
		scrollTop: 800
	}, 500)
}
/*
if(document.location.search.length) {
    // query string exists
 $("#cta").children(".container:first-child").children(".row:first-child").css({
  "border-bottom": "1px solid #dddddd"
    });
    $("html, body").animate({
  scrollTop: 400
  }, 500);
 $("#cta-expand").animate({
  "max-height": "1000px"
 }, 500).addClass("open")
 
}*/
$('footer div.container a:last').click(function (e) {
    e.preventDefault();
    $("html, body").delay(500).animate({
        scrollTop: 0
    }, 2000);
});
