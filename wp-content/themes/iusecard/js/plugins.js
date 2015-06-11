window.log = function() {
    log.history = log.history || [];
    log.history.push(arguments);
    if (this.console) {
        arguments.callee = arguments.callee.caller;
        var a = [].slice.call(arguments);
        (typeof console.log === "object" ? log.apply.call(console.log, console, a) : console.log.apply(console, a))
    }
};
(function(b) {
    function c() {}
    for (var d = "assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","), a; a = d.pop();) {
        b[a] = b[a] || c
    }
})((function() {
	if(typeof console.log === "function"){
		return window.console;
	}else{
		return window.console = {};
	}
    /*try {
        console.log();
        return window.console;
    } catch (err) {
        return window.console = {};
    }*/
})());

// place any jQuery/helper plugins in here, instead of separate, slower script files.



/*
 SelectNav.js (v. 0.1)
 Converts your <ul>/<ol> navigation into a dropdown list for small screens
 https://github.com/lukaszfiszer/selectnav.js
 MIT License
*/
window.selectnav = function() {
    return function(p, q) {
        var a, h = function(b) {
                var c;
                b || (b = window.event);
                b.target ? c = b.target : b.srcElement && (c = b.srcElement);
                3 === c.nodeType && (c = c.parentNode);
                c.value && (window.location.href = c.value)
            },
            k = function(b) {
                b = b.nodeName.toLowerCase();
                return "ul" === b || "ol" === b
            },
            l = function(b) {
                for (var c = 1; document.getElementById("selectnav" + c); c++);
                return b ? "selectnav" + c : "selectnav" + (c - 1)
            },
            n = function(b) {
                g++;
                var c = b.children.length,
                    a = "",
                    d = "",
                    f = g - 1;
                if (c) {
                    if (f) {
                        for (; f--;) d += r;
                        d += " "
                    }
                    for (f = 0; f <
                        c; f++) {
                        var e = b.children[f].children[0];
                        if ("undefined" !== typeof e) {
                            var h = e.innerText || e.textContent,
                                i = "";
                            j && (i = -1 !== e.className.search(j) || -1 !== e.parentElement.className.search(j) ? m : "");
                            s && !i && (i = e.href === document.URL ? m : "");
                            a += '<option value="' + e.href + '" ' + i + ">" + d + h + "</option>";
                            t && (e = b.children[f].children[1]) && k(e) && (a += n(e))
                        }
                    }
                    1 === g && o && (a = '<option value="">' + o + "</option>" + a);
                    1 === g && (a = '<select class="selectnav" id="' + l(!0) + '">' + a + "</select>");
                    g--;
                    return a
                }
            };
        if ((a = document.getElementById(p)) && k(a)) {
            document.documentElement.className +=
                " js";
            var d = q || {},
                j = d.activeclass || "active",
                s = "boolean" === typeof d.autoselect ? d.autoselect : !0,
                t = "boolean" === typeof d.nested ? d.nested : !0,
                r = d.indent || "\u2192",
                o = d.label || "- Navigation -",
                g = 0,
                m = " selected ";
            a.insertAdjacentHTML("afterend", n(a));
            a = document.getElementById(l());
            a.addEventListener && a.addEventListener("change", h);
            a.attachEvent && a.attachEvent("onchange", h)
        }
    }
}();

/*
 * jQuery FlexSlider v2.0
 * http://www.woothemes.com/flexslider/
 *
 * Copyright 2012 WooThemes
 * Free to use under the GPLv2 license.
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Contributing author: Tyler Smith (@mbmufffin)
 */

;
(function($) {

    //FlexSlider: Object Instance
    $.flexslider = function(el, options) {
        var slider = $(el),
            vars = $.extend({}, $.flexslider.defaults, options),
            namespace = vars.namespace,
            touch = ("ontouchstart" in window) || window.DocumentTouch && document instanceof DocumentTouch,
            eventType = (touch) ? "touchend" : "click",
            vertical = vars.direction === "vertical",
            reverse = vars.reverse,
            carousel = (vars.itemWidth > 0),
            fade = vars.animation === "fade",
            asNav = vars.asNavFor !== "",
            methods = {};

        // Store a reference to the slider object
        $.data(el, "flexslider", slider);

        // Privat slider methods
        methods = {
            init: function() {
                slider.animating = false;
                slider.currentSlide = vars.startAt;
                slider.animatingTo = slider.currentSlide;
                slider.atEnd = (slider.currentSlide === 0 || slider.currentSlide === slider.last);
                slider.containerSelector = vars.selector.substr(0, vars.selector.search(' '));
                slider.slides = $(vars.selector, slider);
                slider.container = $(slider.containerSelector, slider);
                slider.count = slider.slides.length;
                // SYNC:
                slider.syncExists = $(vars.sync).length > 0;
                // SLIDE:
                if (vars.animation === "slide") vars.animation = "swing";
                slider.prop = (vertical) ? "top" : "marginLeft";
                slider.args = {};
                // SLIDESHOW:
                slider.manualPause = false;
                // TOUCH/USECSS:
                slider.transitions = !vars.video && !fade && vars.useCSS && (function() {
                    var obj = document.createElement('div'),
                        props = ['perspectiveProperty', 'WebkitPerspective', 'MozPerspective', 'OPerspective', 'msPerspective'];
                    for (var i in props) {
                        if (obj.style[props[i]] !== undefined) {
                            slider.pfx = props[i].replace('Perspective', '').toLowerCase();
                            slider.prop = "-" + slider.pfx + "-transform";
                            return true;
                        }
                    }
                    return false;
                }());
                // CONTROLSCONTAINER:
                if (vars.controlsContainer !== "") slider.controlsContainer = $(vars.controlsContainer).length > 0 && $(vars.controlsContainer);
                // MANUAL:
                if (vars.manualControls !== "") slider.manualControls = $(vars.manualControls).length > 0 && $(vars.manualControls);

                // RANDOMIZE:
                if (vars.randomize) {
                    slider.slides.sort(function() {
                        return (Math.round(Math.random()) - 0.5);
                    });
                    slider.container.empty().append(slider.slides);
                }

                slider.doMath();

                // ASNAV:
                if (asNav) methods.asNav.setup();

                // INIT
                slider.setup("init");

                // CONTROLNAV:
                if (vars.controlNav) methods.controlNav.setup();

                // DIRECTIONNAV:
                if (vars.directionNav) methods.directionNav.setup();

                // KEYBOARD:
                if (vars.keyboard && ($(slider.containerSelector).length === 1 || vars.multipleKeyboard)) {
                    $(document).bind('keyup', function(event) {
                        var keycode = event.keyCode;
                        if (!slider.animating && (keycode === 39 || keycode === 37)) {
                            var target = (keycode === 39) ? slider.getTarget('next') :
                                (keycode === 37) ? slider.getTarget('prev') : false;
                            slider.flexAnimate(target, vars.pauseOnAction);
                        }
                    });
                }
                // MOUSEWHEEL:
                if (vars.mousewheel) {
                    slider.bind('mousewheel', function(event, delta, deltaX, deltaY) {
                        event.preventDefault();
                        var target = (delta < 0) ? slider.getTarget('next') : slider.getTarget('prev');
                        slider.flexAnimate(target, vars.pauseOnAction);
                    });
                }

                // PAUSEPLAY
                if (vars.pausePlay) methods.pausePlay.setup();

                // SLIDSESHOW
                if (vars.slideshow) {
                    if (vars.pauseOnHover) {
                        slider.hover(function() {
                            slider.pause();
                        }, function() {
                            if (!slider.manualPause) slider.play();
                        });
                    }
                    // initialize animation
                    (vars.initDelay > 0) ? setTimeout(slider.play, vars.initDelay): slider.play();
                }

                // TOUCH
                if (touch && vars.touch) methods.touch();

                // FADE&&SMOOTHHEIGHT || SLIDE:
                if (!fade || (fade && vars.smoothHeight)) $(window).bind("resize focus", methods.resize);


                // API: start() Callback
                setTimeout(function() {
                    vars.start(slider);
                }, 200);
            },
            asNav: {
                setup: function() {
                    slider.asNav = true;
                    slider.animatingTo = Math.floor(slider.currentSlide / slider.move);
                    slider.currentItem = slider.currentSlide;
                    slider.slides.removeClass(namespace + "active-slide").eq(slider.currentItem).addClass(namespace + "active-slide");
                    slider.slides.click(function(e) {
                        e.preventDefault();
                        var $slide = $(this),
                            target = $slide.index();
                        if (!$(vars.asNavFor).data('flexslider').animating && !$slide.hasClass('active')) {
                            slider.direction = (slider.currentItem < target) ? "next" : "prev";
                            slider.flexAnimate(target, vars.pauseOnAction, false, true, true);
                        }
                    });
                }
            },
            controlNav: {
                setup: function() {
                    if (!slider.manualControls) {
                        methods.controlNav.setupPaging();
                    } else { // MANUALCONTROLS:
                        methods.controlNav.setupManual();
                    }
                },
                setupPaging: function() {
                    var type = (vars.controlNav === "thumbnails") ? 'control-thumbs' : 'control-paging',
                        j = 1,
                        item;

                    slider.controlNavScaffold = $('<ol class="' + namespace + 'control-nav ' + namespace + type + '"></ol>');

                    if (slider.pagingCount > 1) {
                        for (var i = 0; i < slider.pagingCount; i++) {
                            item = (vars.controlNav === "thumbnails") ? '<img src="' + slider.slides.eq(i).attr("data-thumb") + '"/>' : '<a>' + j + '</a>';
                            slider.controlNavScaffold.append('<li>' + item + '</li>');
                            j++;
                        }
                    }

                    // CONTROLSCONTAINER:
                    (slider.controlsContainer) ? $(slider.controlsContainer).append(slider.controlNavScaffold): slider.append(slider.controlNavScaffold);
                    methods.controlNav.set();

                    methods.controlNav.active();

                    slider.controlNavScaffold.delegate('a, img', eventType, function(event) {
                        event.preventDefault();
                        var $this = $(this),
                            target = slider.controlNav.index($this);

                        if (!$this.hasClass(namespace + 'active')) {
                            slider.direction = (target > slider.currentSlide) ? "next" : "prev";
                            slider.flexAnimate(target, vars.pauseOnAction);
                        }
                    });
                    // Prevent iOS click event bug
                    if (touch) {
                        slider.controlNavScaffold.delegate('a', "click touchstart", function(event) {
                            event.preventDefault();
                        });
                    }
                },
                setupManual: function() {
                    slider.controlNav = slider.manualControls;
                    methods.controlNav.active();

                    slider.controlNav.live(eventType, function(event) {
                        event.preventDefault();
                        var $this = $(this),
                            target = slider.controlNav.index($this);

                        if (!$this.hasClass(namespace + 'active')) {
                            (target > slider.currentSlide) ? slider.direction = "next": slider.direction = "prev";
                            slider.flexAnimate(target, vars.pauseOnAction);
                        }
                    });
                    // Prevent iOS click event bug
                    if (touch) {
                        slider.controlNav.live("click touchstart", function(event) {
                            event.preventDefault();
                        });
                    }
                },
                set: function() {
                    var selector = (vars.controlNav === "thumbnails") ? 'img' : 'a';
                    slider.controlNav = $('.' + namespace + 'control-nav li ' + selector, (slider.controlsContainer) ? slider.controlsContainer : slider);
                },
                active: function() {
                    slider.controlNav.removeClass(namespace + "active").eq(slider.animatingTo).addClass(namespace + "active");
                },
                update: function(action, pos) {
                    if (slider.pagingCount > 1 && action === "add") {
                        slider.controlNavScaffold.append($('<li><a>' + slider.count + '</a></li>'));
                    } else if (slider.pagingCount === 1) {
                        slider.controlNavScaffold.find('li').remove();
                    } else {
                        slider.controlNav.eq(pos).closest('li').remove();
                    }
                    methods.controlNav.set();
                    (slider.pagingCount > 1 && slider.pagingCount !== slider.controlNav.length) ? slider.update(pos, action): methods.controlNav.active();
                }
            },
            directionNav: {
                setup: function() {
                    var directionNavScaffold = $('<ul class="' + namespace + 'direction-nav"><li><a class="' + namespace + 'prev icon-chevron-left whitetext" href="#"></a></li><li><a class="' + namespace + 'next icon-chevron-right whitetext" href="#"></a></li></ul>');

                    // CONTROLSCONTAINER:
                    if (slider.controlsContainer) {
                        $(slider.controlsContainer).append(directionNavScaffold);
                        slider.directionNav = $('.' + namespace + 'direction-nav li a', slider.controlsContainer);
                    } else {
                        slider.append(directionNavScaffold);
                        slider.directionNav = $('.' + namespace + 'direction-nav li a', slider);
                    }

                    methods.directionNav.update();

                    slider.directionNav.bind(eventType, function(event) {
                        event.preventDefault();
                        var target = ($(this).hasClass(namespace + 'next')) ? slider.getTarget('next') : slider.getTarget('prev');
                        slider.flexAnimate(target, vars.pauseOnAction);
                    });
                    // Prevent iOS click event bug
                    if (touch) {
                        slider.directionNav.bind("click touchstart", function(event) {
                            event.preventDefault();
                        });
                    }
                },
                update: function() {
                    var disabledClass = namespace + 'disabled';
                    if (!vars.animationLoop) {
                        if (slider.pagingCount === 1) {
                            slider.directionNav.addClass(disabledClass);
                        } else if (slider.animatingTo === 0) {
                            slider.directionNav.removeClass(disabledClass).filter('.' + namespace + "prev").addClass(disabledClass);
                        } else if (slider.animatingTo === slider.last) {
                            slider.directionNav.removeClass(disabledClass).filter('.' + namespace + "next").addClass(disabledClass);
                        } else {
                            slider.directionNav.removeClass(disabledClass);
                        }
                    }
                }
            },
            pausePlay: {
                setup: function() {
                    var pausePlayScaffold = $('<div class="' + namespace + 'pauseplay"><a></a></div>');

                    // CONTROLSCONTAINER:
                    if (slider.controlsContainer) {
                        slider.controlsContainer.append(pausePlayScaffold);
                        slider.pausePlay = $('.' + namespace + 'pauseplay a', slider.controlsContainer);
                    } else {
                        slider.append(pausePlayScaffold);
                        slider.pausePlay = $('.' + namespace + 'pauseplay a', slider);
                    }

                    // slider.pausePlay.addClass(pausePlayState).text((pausePlayState == 'pause') ? vars.pauseText : vars.playText);
                    methods.pausePlay.update((vars.slideshow) ? namespace + 'pause' : namespace + 'play');

                    slider.pausePlay.bind(eventType, function(event) {
                        event.preventDefault();
                        if ($(this).hasClass(namespace + 'pause')) {
                            slider.pause();
                            slider.manualPause = true;
                        } else {
                            slider.play();
                            slider.manualPause = false;
                        }
                    });
                    // Prevent iOS click event bug
                    if (touch) {
                        slider.pausePlay.bind("click touchstart", function(event) {
                            event.preventDefault();
                        });
                    }
                },
                update: function(state) {
                    (state === "play") ? slider.pausePlay.removeClass(namespace + 'pause').addClass(namespace + 'play').text(vars.playText): slider.pausePlay.removeClass(namespace + 'play').addClass(namespace + 'pause').text(vars.pauseText);
                }
            },
            touch: function() {
                var startX,
                    startY,
                    offset,
                    cwidth,
                    dx,
                    startT,
                    scrolling = false;

                el.addEventListener('touchstart', onTouchStart, false);

                function onTouchStart(e) {
                    if (slider.animating) {
                        e.preventDefault();
                    } else if (e.touches.length === 1) {
                        slider.pause();
                        // CAROUSEL: 
                        cwidth = (vertical) ? slider.h : slider.w;
                        startT = Number(new Date());
                        // CAROUSEL:
                        offset = (carousel && reverse && slider.animatingTo === slider.last) ? 0 :
                            (carousel && reverse) ? slider.limit - (((slider.itemW + vars.itemMargin) * slider.move) * slider.animatingTo) :
                            (carousel && slider.currentSlide === slider.last) ? slider.limit :
                            (carousel) ? ((slider.itemW + vars.itemMargin) * slider.move) * slider.currentSlide :
                            (reverse) ? (slider.last - slider.currentSlide + slider.cloneOffset) * cwidth : (slider.currentSlide + slider.cloneOffset) * cwidth;
                        startX = (vertical) ? e.touches[0].pageY : e.touches[0].pageX;
                        startY = (vertical) ? e.touches[0].pageX : e.touches[0].pageY;

                        el.addEventListener('touchmove', onTouchMove, false);
                        el.addEventListener('touchend', onTouchEnd, false);
                    }
                }

                function onTouchMove(e) {
                    dx = (vertical) ? startX - e.touches[0].pageY : startX - e.touches[0].pageX;
                    scrolling = (vertical) ? (Math.abs(dx) < Math.abs(e.touches[0].pageX - startY)) : (Math.abs(dx) < Math.abs(e.touches[0].pageY - startY));

                    if (!scrolling || Number(new Date()) - startT > 500) {
                        e.preventDefault();
                        if (!fade && slider.transitions) {
                            if (!vars.animationLoop) {
                                dx = dx / ((slider.currentSlide === 0 && dx < 0 || slider.currentSlide === slider.last && dx > 0) ? (Math.abs(dx) / cwidth + 2) : 1);
                            }
                            slider.setProps(offset + dx, "setTouch");
                        }
                    }
                }

                function onTouchEnd(e) {
                    if (slider.animatingTo === slider.currentSlide && !scrolling && !(dx === null)) {
                        var updateDx = (reverse) ? -dx : dx,
                            target = (updateDx > 0) ? slider.getTarget('next') : slider.getTarget('prev');

                        if (slider.canAdvance(target) && (Number(new Date()) - startT < 550 && Math.abs(updateDx) > 20 || Math.abs(updateDx) > cwidth / 2)) {
                            slider.flexAnimate(target, vars.pauseOnAction);
                        } else {
                            slider.flexAnimate(slider.currentSlide, vars.pauseOnAction, true);
                        }
                    }
                    // finish the touch by undoing the touch session
                    el.removeEventListener('touchmove', onTouchMove, false);
                    el.removeEventListener('touchend', onTouchEnd, false);
                    startX = null;
                    startY = null;
                    dx = null;
                    offset = null;
                }
            },
            resize: function() {
                if (!slider.animating && slider.is(':visible')) {
                    if (!carousel) slider.doMath();

                    if (fade) {
                        // SMOOTH HEIGHT:
                        methods.smoothHeight();
                    } else if (carousel) { //CAROUSEL:
                        slider.slides.width(slider.computedW);
                        slider.update(slider.pagingCount);
                        slider.setProps();
                    } else if (vertical) { //VERTICAL:
                        slider.viewport.height(slider.h);
                        slider.setProps(slider.h, "setTotal");
                    } else {
                        // SMOOTH HEIGHT:
                        if (vars.smoothHeight) methods.smoothHeight();
                        slider.newSlides.width(slider.computedW);
                        slider.setProps(slider.computedW, "setTotal");
                    }
                }
            },
            smoothHeight: function(dur) {
                if (!vertical || fade) {
                    var $obj = (fade) ? slider : slider.viewport;
                    (dur) ? $obj.animate({
                        "height": slider.slides.eq(slider.animatingTo).height()
                    }, dur): $obj.height(slider.slides.eq(slider.animatingTo).height());
                }
            },
            sync: function(action) {
                var $obj = $(vars.sync).data("flexslider"),
                    target = slider.animatingTo;

                switch (action) {
                    case "animate":
                        $obj.flexAnimate(target, vars.pauseOnAction, false, true);
                        break;
                    case "play":
                        if (!$obj.playing && !$obj.asNav) {
                            $obj.play();
                        }
                        break;
                    case "pause":
                        $obj.pause();
                        break;
                }
            }
        }

        // public methods
        slider.flexAnimate = function(target, pause, override, withSync, fromNav) {
            if (!slider.animating && (slider.canAdvance(target) || override) && slider.is(":visible")) {
                if (asNav && withSync) {
                    var master = $(vars.asNavFor).data('flexslider');
                    slider.atEnd = target === 0 || target === slider.count - 1;
                    master.flexAnimate(target, true, false, true, fromNav);
                    slider.direction = (slider.currentItem < target) ? "next" : "prev";
                    master.direction = slider.direction;

                    if (Math.ceil((target + 1) / slider.visible) - 1 !== slider.currentSlide && target !== 0) {
                        slider.currentItem = target;
                        slider.slides.removeClass(namespace + "active-slide").eq(target).addClass(namespace + "active-slide");
                        target = Math.floor(target / slider.visible);
                    } else {
                        slider.currentItem = target;
                        slider.slides.removeClass(namespace + "active-slide").eq(target).addClass(namespace + "active-slide");
                        return false;
                    }
                }

                slider.animating = true;
                slider.animatingTo = target;
                // API: before() animation Callback
                vars.before(slider);

                // SLIDESHOW:
                if (pause) slider.pause();

                // SYNC:
                if (slider.syncExists && !fromNav) methods.sync("animate");

                // CONTROLNAV
                if (vars.controlNav) methods.controlNav.active();

                // !CAROUSEL:
                // CANDIDATE: slide active class (for add/remove slide)
                if (!carousel) slider.slides.removeClass(namespace + 'active-slide').eq(target).addClass(namespace + 'active-slide');

                // INFINITE LOOP:
                // CANDIDATE: atEnd
                slider.atEnd = target === 0 || target === slider.last;

                // DIRECTIONNAV:
                if (vars.directionNav) methods.directionNav.update();

                if (target === slider.last) {
                    // API: end() of cycle Callback
                    vars.end(slider);
                    // SLIDESHOW && !INFINITE LOOP:
                    if (!vars.animationLoop) slider.pause();
                }

                // SLIDE:
                if (!fade) {
                    var dimension = (vertical) ? slider.slides.filter(':first').height() : slider.computedW,
                        margin, slideString, calcNext;

                    // INFINITE LOOP / REVERSE:
                    if (carousel) {
                        margin = (vars.itemWidth > slider.w) ? vars.itemMargin * 2 : vars.itemMargin;
                        calcNext = ((slider.itemW + margin) * slider.move) * slider.animatingTo;
                        slideString = (calcNext > slider.limit && slider.visible !== 1) ? slider.limit : calcNext;
                    } else if (slider.currentSlide === 0 && target === slider.count - 1 && vars.animationLoop && slider.direction !== "next") {
                        slideString = (reverse) ? (slider.count + slider.cloneOffset) * dimension : 0;
                    } else if (slider.currentSlide === slider.last && target === 0 && vars.animationLoop && slider.direction !== "prev") {
                        slideString = (reverse) ? 0 : (slider.count + 1) * dimension;
                    } else {
                        slideString = (reverse) ? ((slider.count - 1) - target + slider.cloneOffset) * dimension : (target + slider.cloneOffset) * dimension;
                    }
                    slider.setProps(slideString, "", vars.animationSpeed);
                    if (slider.transitions) {
                        if (!vars.animationLoop || !slider.atEnd) {
                            slider.animating = false;
                            slider.currentSlide = slider.animatingTo;
                        }
                        slider.container.unbind("webkitTransitionEnd transitionend");
                        slider.container.bind("webkitTransitionEnd transitionend", function() {
                            slider.wrapup(dimension);
                        });
                    } else {
                        slider.container.animate(slider.args, vars.animationSpeed, vars.easing, function() {
                            slider.wrapup(dimension);
                        });
                    }
                } else { // FADE:
                    slider.slides.eq(slider.currentSlide).fadeOut(vars.animationSpeed, vars.easing);
                    slider.slides.eq(target).fadeIn(vars.animationSpeed, vars.easing, slider.wrapup);
                }
                // SMOOTH HEIGHT:
                if (vars.smoothHeight) methods.smoothHeight(vars.animationSpeed);
            }
        }
        slider.wrapup = function(dimension) {
            // SLIDE:
            if (!fade && !carousel) {
                if (slider.currentSlide === 0 && slider.animatingTo === slider.last && vars.animationLoop) {
                    slider.setProps(dimension, "jumpEnd");
                } else if (slider.currentSlide === slider.last && slider.animatingTo === 0 && vars.animationLoop) {
                    slider.setProps(dimension, "jumpStart");
                }
            }
            slider.animating = false;
            slider.currentSlide = slider.animatingTo;
            // API: after() animation Callback
            vars.after(slider);
        }

        // SLIDESHOW:
        slider.animateSlides = function() {
                if (!slider.animating) slider.flexAnimate(slider.getTarget("next"));
            }
            // SLIDESHOW:
        slider.pause = function() {
                clearInterval(slider.animatedSlides);
                slider.playing = false;
                // PAUSEPLAY:
                if (vars.pausePlay) methods.pausePlay.update("play");
                // SYNC:
                if (slider.syncExists) methods.sync("pause");
            }
            // SLIDESHOW:
        slider.play = function() {
            slider.animatedSlides = setInterval(slider.animateSlides, vars.slideshowSpeed);
            slider.playing = true;
            // PAUSEPLAY:
            if (vars.pausePlay) methods.pausePlay.update("pause");
            // SYNC:
            if (slider.syncExists) methods.sync("play");
        }
        slider.canAdvance = function(target) {
            // ASNAV:
            var last = (asNav) ? slider.pagingCount - 1 : slider.last;
            return (asNav && slider.currentItem === 0 && target === slider.pagingCount - 1 && slider.direction !== "next") ? false :
                (target === slider.currentSlide && !asNav) ? false :
                (vars.animationLoop) ? true :
                (slider.atEnd && slider.currentSlide === 0 && target === last && slider.direction !== "next") ? false :
                (slider.atEnd && slider.currentSlide === last && target === 0 && slider.direction === "next") ? false :
                true;
        }
        slider.getTarget = function(dir) {
            slider.direction = dir;
            if (dir === "next") {
                return (slider.currentSlide === slider.last) ? 0 : slider.currentSlide + 1;
            } else {
                return (slider.currentSlide === 0) ? slider.last : slider.currentSlide - 1;
            }
        }

        // SLIDE:
        slider.setProps = function(pos, special, dur) {
            var target = (function() {
                var posCheck = (pos) ? pos : ((slider.itemW + vars.itemMargin) * slider.move) * slider.animatingTo,
                    posCalc = (function() {
                        if (carousel) {
                            return (special === "setTouch") ? pos :
                                (reverse && slider.animatingTo === slider.last) ? 0 :
                                (reverse) ? slider.limit - (((slider.itemW + vars.itemMargin) * slider.move) * slider.animatingTo) :
                                (slider.animatingTo === slider.last) ? slider.limit : posCheck;
                        } else {
                            switch (special) {
                                case "setTotal":
                                    return (reverse) ? ((slider.count - 1) - slider.currentSlide + slider.cloneOffset) * pos : (slider.currentSlide + slider.cloneOffset) * pos;
                                case "setTouch":
                                    return (reverse) ? pos : pos;
                                case "jumpEnd":
                                    return (reverse) ? pos : slider.count * pos;
                                case "jumpStart":
                                    return (reverse) ? slider.count * pos : pos;
                                default:
                                    return pos;
                            }
                        }
                    }());
                return (posCalc * -1) + "px";
            }());

            if (slider.transitions) {
                target = (vertical) ? "translate3d(0," + target + ",0)" : "translate3d(" + target + ",0,0)";
                dur = (dur !== undefined) ? (dur / 1000) + "s" : "0s";
                slider.container.css("-" + slider.pfx + "-transition-duration", dur);
            }

            slider.args[slider.prop] = target;
            if (slider.transitions || dur === undefined) slider.container.css(slider.args);
        }

        slider.setup = function(type) {
            // SLIDE:
            if (!fade) {
                var sliderOffset, arr;

                if (type === "init") {
                    slider.viewport = $('<div class="flex-viewport"></div>').css({
                        "overflow": "hidden",
                        "position": "relative"
                    }).appendTo(slider).append(slider.container);
                    // INFINITE LOOP:
                    slider.cloneCount = 0;
                    slider.cloneOffset = 0;
                    // REVERSE:
                    if (reverse) {
                        arr = $.makeArray(slider.slides).reverse();
                        slider.slides = $(arr);
                        slider.container.empty().append(slider.slides);
                    }
                }
                // INFINITE LOOP && !CAROUSEL:
                if (vars.animationLoop && !carousel) {
                    slider.cloneCount = 2;
                    slider.cloneOffset = 1;
                    // clear out old clones
                    if (type !== "init") slider.container.find('.clone').remove();
                    slider.container.append(slider.slides.first().clone().addClass('clone')).prepend(slider.slides.last().clone().addClass('clone'));
                }
                slider.newSlides = $(vars.selector, slider);

                sliderOffset = (reverse) ? slider.count - 1 - slider.currentSlide + slider.cloneOffset : slider.currentSlide + slider.cloneOffset;
                // VERTICAL:
                if (vertical && !carousel) {
                    slider.container.height((slider.count + slider.cloneCount) * 200 + "%").css("position", "absolute").width("100%");
                    setTimeout(function() {
                        slider.newSlides.css({
                            "display": "block"
                        });
                        slider.doMath();
                        slider.viewport.height(slider.h);
                        slider.setProps(sliderOffset * slider.h, "init");
                    }, (type === "init") ? 100 : 0);
                } else {
                    slider.container.width((slider.count + slider.cloneCount) * 200 + "%");
                    slider.setProps(sliderOffset * slider.computedW, "init");
                    setTimeout(function() {
                        slider.doMath();
                        slider.newSlides.css({
                            "width": slider.computedW,
                            "float": "left",
                            "display": "block"
                        });
                        // SMOOTH HEIGHT:
                        if (vars.smoothHeight) methods.smoothHeight();
                    }, (type === "init") ? 100 : 0);
                }
            } else { // FADE: 
                slider.slides.css({
                    "width": "100%",
                    "float": "left",
                    "marginRight": "-100%",
                    "position": "relative"
                });
                if (type === "init") slider.slides.eq(slider.currentSlide).fadeIn(vars.animationSpeed, vars.easing);
                // SMOOTH HEIGHT:
                if (vars.smoothHeight) methods.smoothHeight();
            }
            // !CAROUSEL:
            // CANDIDATE: active slide
            if (!carousel) slider.slides.removeClass(namespace + "active-slide").eq(slider.currentSlide).addClass(namespace + "active-slide");
        }

        slider.doMath = function() {
            var slide = slider.slides.first(),
                slideMargin = vars.itemMargin,
                minItems = vars.minItems,
                maxItems = vars.maxItems;

            slider.w = slider.width();
            slider.h = slide.height();
            slider.boxPadding = slide.outerWidth() - slide.width();

            // CAROUSEL:
            if (carousel) {
                slider.itemT = vars.itemWidth + slideMargin;
                slider.minW = (minItems) ? minItems * slider.itemT : slider.w;
                slider.maxW = (maxItems) ? maxItems * slider.itemT : slider.w;
                slider.itemW = (slider.minW > slider.w) ? (slider.w - (slideMargin * minItems)) / minItems :
                    (slider.maxW < slider.w) ? (slider.w - (slideMargin * maxItems)) / maxItems :
                    (vars.itemWidth > slider.w) ? slider.w : vars.itemWidth;
                slider.visible = Math.floor(slider.w / (slider.itemW + slideMargin));
                slider.move = (vars.move > 0 && vars.move < slider.visible) ? vars.move : slider.visible;
                slider.pagingCount = Math.ceil(((slider.count - slider.visible) / slider.move) + 1);
                slider.last = slider.pagingCount - 1;
                slider.limit = (slider.pagingCount === 1) ? 0 :
                    (vars.itemWidth > slider.w) ? ((slider.itemW + (slideMargin * 2)) * slider.count) - slider.w - slideMargin : ((slider.itemW + slideMargin) * slider.count) - slider.w;
            } else {
                slider.itemW = slider.w;
                slider.pagingCount = slider.count;
                slider.last = slider.count - 1;
            }
            slider.computedW = slider.itemW - slider.boxPadding;
        }

        slider.update = function(pos, action) {
            slider.doMath();

            // update currentSlide and slider.animatingTo if necessary
            if (!carousel) {
                if (pos < slider.currentSlide) {
                    slider.currentSlide += 1;
                } else if (pos <= slider.currentSlide && pos !== 0) {
                    slider.currentSlide -= 1;
                }
                slider.animatingTo = slider.currentSlide;
            }

            // update controlNav
            if (vars.controlNav && !slider.manualControls) {
                if ((action === "add" && !carousel) || slider.pagingCount > slider.controlNav.length) {
                    methods.controlNav.update("add");
                } else if ((action === "remove" && !carousel) || slider.pagingCount < slider.controlNav.length) {
                    if (carousel && slider.currentSlide > slider.last) {
                        slider.currentSlide -= 1;
                        slider.animatingTo -= 1;
                    }
                    methods.controlNav.update("remove", slider.last);
                }
            }
            // update directionNav
            if (vars.directionNav) methods.directionNav.update();

        }

        slider.addSlide = function(obj, pos) {
            var $obj = $(obj);

            slider.count += 1;
            slider.last = slider.count - 1;

            // append new slide
            if (vertical && reverse) {
                (pos !== undefined) ? slider.slides.eq(slider.count - pos).after($obj): slider.container.prepend($obj);
            } else {
                (pos !== undefined) ? slider.slides.eq(pos).before($obj): slider.container.append($obj);
            }

            // update currentSlide, animatingTo, controlNav, and directionNav
            slider.update(pos, "add");

            // update slider.slides
            slider.slides = $(vars.selector + ':not(.clone)', slider);
            // re-setup the slider to accomdate new slide
            slider.setup();

            //FlexSlider: added() Callback
            vars.added(slider);
        }
        slider.removeSlide = function(obj) {
            var pos = (isNaN(obj)) ? slider.slides.index($(obj)) : obj;

            // update count
            slider.count -= 1;
            slider.last = slider.count - 1;

            // remove slide
            if (isNaN(obj)) {
                $(obj, slider.slides).remove();
            } else {
                (vertical && reverse) ? slider.slides.eq(slider.last).remove(): slider.slides.eq(obj).remove();
            }

            // update currentSlide, animatingTo, controlNav, and directionNav
            slider.doMath();
            slider.update(pos, "remove");

            // update slider.slides
            slider.slides = $(vars.selector + ':not(.clone)', slider);
            // re-setup the slider to accomdate new slide
            slider.setup();

            // FlexSlider: removed() Callback
            vars.removed(slider);
        }

        //FlexSlider: Initialize
        methods.init();
    }

    //FlexSlider: Default Settings
    $.flexslider.defaults = {
        namespace: "flex-", //{NEW} String: Prefix string attached to the class of every element generated by the plugin
        selector: ".slides > li", //{NEW} Selector: Must match a simple pattern. '{container} > {slide}' -- Ignore pattern at your own peril
        animation: "fade", //String: Select your animation type, "fade" or "slide"
        easing: "swing", //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
        direction: "horizontal", //String: Select the sliding direction, "horizontal" or "vertical"
        reverse: false, //{NEW} Boolean: Reverse the animation direction
        animationLoop: true, //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
        smoothHeight: false, //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode  
        startAt: 0, //Integer: The slide that the slider should start on. Array notation (0 = first slide)
        slideshow: true, //Boolean: Animate slider automatically
        slideshowSpeed: 7000, //Integer: Set the speed of the slideshow cycling, in milliseconds
        animationSpeed: 600, //Integer: Set the speed of animations, in milliseconds
        initDelay: 0, //{NEW} Integer: Set an initialization delay, in milliseconds
        randomize: false, //Boolean: Randomize slide order

        // Usability features
        pauseOnAction: true, //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
        pauseOnHover: false, //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
        useCSS: true, //{NEW} Boolean: Slider will use CSS3 transitions if available
        touch: true, //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
        video: false, //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches

        // Primary Controls
        controlNav: true, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        directionNav: true, //Boolean: Create navigation for previous/next navigation? (true/false)
        prevText: "Previous", //String: Set the text for the "previous" directionNav item
        nextText: "Next", //String: Set the text for the "next" directionNav item

        // Secondary Navigation
        keyboard: true, //Boolean: Allow slider navigating via keyboard left/right keys
        multipleKeyboard: false, //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
        mousewheel: false, //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
        pausePlay: false, //Boolean: Create pause/play dynamic element
        pauseText: "Pause", //String: Set the text for the "pause" pausePlay item
        playText: "Play", //String: Set the text for the "play" pausePlay item

        // Special properties
        controlsContainer: "", //{UPDATED} jQuery Object/Selector: Declare which container the navigation elements should be appended too. Default container is the FlexSlider element. Example use would be $(".flexslider-container"). Property is ignored if given element is not found.
        manualControls: "", //{UPDATED} jQuery Object/Selector: Declare custom control navigation. Examples would be $(".flex-control-nav li") or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
        sync: "", //{NEW} Selector: Mirror the actions performed on this slider with another slider. Use with care.
        asNavFor: "", //{NEW} Selector: Internal property exposed for turning the slider into a thumbnail navigation for another slider

        // Carousel Options
        itemWidth: 0, //{NEW} Integer: Box-model width of individual carousel items, including horizontal borders and padding.
        itemMargin: 0, //{NEW} Integer: Margin between carousel items.
        minItems: 0, //{NEW} Integer: Minimum number of carousel items that should be visible. Items will resize fluidly when below this.
        maxItems: 0, //{NEW} Integer: Maxmimum number of carousel items that should be visible. Items will resize fluidly when above this limit.
        move: 0, //{NEW} Integer: Number of carousel items that should move on animation. If 0, slider will move all visible items.

        // Callback API
        start: function() {}, //Callback: function(slider) - Fires when the slider loads the first slide
        before: function() {}, //Callback: function(slider) - Fires asynchronously with each slider animation
        after: function() {}, //Callback: function(slider) - Fires after each slider animation completes
        end: function() {}, //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)
        added: function() {}, //{NEW} Callback: function(slider) - Fires after a slide is added
        removed: function() {} //{NEW} Callback: function(slider) - Fires after a slide is removed
    }


    //FlexSlider: Plugin Function
    $.fn.flexslider = function(options) {
        options = options || {};
        if (typeof options === "object") {
            return this.each(function() {
                var $this = $(this),
                    selector = (options.selector) ? options.selector : ".slides > li",
                    $slides = $this.find(selector);

                if ($slides.length === 1) {
                    $slides.fadeIn(400);
                    if (options.start) options.start($this);
                } else if ($this.data('flexslider') === undefined) {
                    new $.flexslider(this, options);
                }
            });
        } else {
            // Helper strings to quickly perform functions on the slider
            var $slider = $(this).data('flexslider');
            switch (options) {
                case "play":
                    $slider.play();
                    break;
                case "pause":
                    $slider.pause();
                    break;
                case "next":
                    $slider.flexAnimate($slider.getTarget("next"), true);
                    break;
                case "prev":
                case "previous":
                    $slider.flexAnimate($slider.getTarget("prev"), true);
                    break;
                default:
                    if (typeof options === "number") $slider.flexAnimate(options, true);
            }
        }
    }

})(jQuery);


// Sticky Plugin v1.0.2 for jQuery
// =============
// Author: Anthony Garand
// Improvements by German M. Bravo (Kronuz) and Ruud Kamphuis (ruudk)
// Improvements by Leonardo C. Daronco (daronco)
// Created: 2/14/2011
// Date: 16/04/2015
// Website: http://labs.anthonygarand.com/sticky
// Description: Makes an element on the page stick on the screen as you scroll
//       It will only set the 'top' and 'position' of your element, you
//       might need to adjust the width in some cases.

(function($) {
    var slice = Array.prototype.slice; // save ref to original slice()
    var splice = Array.prototype.splice; // save ref to original slice()

  var defaults = {
      topSpacing: 0,
      bottomSpacing: 0,
      className: 'is-sticky',
      wrapperClassName: 'sticky-wrapper',
      center: false,
      getWidthFrom: '',
      widthFromWrapper: true, // works only when .getWidthFrom is empty
      responsiveWidth: false
    },
    $window = $(window),
    $document = $(document),
    sticked = [],
    windowHeight = $window.height(),
    scroller = function() {
      var scrollTop = $window.scrollTop(),
        documentHeight = $document.height(),
        dwh = documentHeight - windowHeight,
        extra = (scrollTop > dwh) ? dwh - scrollTop : 0;

      for (var i = 0; i < sticked.length; i++) {
        var s = sticked[i],
          elementTop = s.stickyWrapper.offset().top,
          etse = elementTop - s.topSpacing - extra;

        if (scrollTop <= etse) {
          if (s.currentTop !== null) {
            s.stickyElement
              .css({
                'width': '',
                'position': '',
                'top': ''
              });
            s.stickyElement.parent().removeClass(s.className);
            s.stickyElement.trigger('sticky-end', [s]);
            s.currentTop = null;
          }
        }
        else {
          var newTop = documentHeight - s.stickyElement.outerHeight()
            - s.topSpacing - s.bottomSpacing - scrollTop - extra;
          if (newTop < 0) {
            newTop = newTop + s.topSpacing;
          } else {
            newTop = s.topSpacing;
          }
          if (s.currentTop != newTop) {
            var newWidth;
            if ( s.getWidthFrom ) {
                newWidth = $(s.getWidthFrom).width() || null;
            }
            else if(s.widthFromWrapper) {
                newWidth = s.stickyWrapper.width();
            }
            if ( newWidth == null ) {
                newWidth = s.stickyElement.width();
            }
            s.stickyElement
              .css('width', newWidth)
              .css('position', 'fixed')
              .css('top', newTop);

            s.stickyElement.parent().addClass(s.className);

            if (s.currentTop === null) {
              s.stickyElement.trigger('sticky-start', [s]);
            } else {
              // sticky is started but it have to be repositioned
              s.stickyElement.trigger('sticky-update', [s]);
            }

            if (s.currentTop === s.topSpacing && s.currentTop > newTop || s.currentTop === null && newTop < s.topSpacing) {
              // just reached bottom || just started to stick but bottom is already reached
              s.stickyElement.trigger('sticky-bottom-reached', [s]);
            } else if(s.currentTop !== null && newTop === s.topSpacing && s.currentTop < newTop) {
              // sticky is started && sticked at topSpacing && overflowing from top just finished
              s.stickyElement.trigger('sticky-bottom-unreached', [s]);
            }

            s.currentTop = newTop;
          }
        }
      }
    },
    resizer = function() {
      windowHeight = $window.height();

      for (var i = 0; i < sticked.length; i++) {
        var s = sticked[i];
        var newWidth = null;
        if ( s.getWidthFrom ) {
            if ( s.responsiveWidth === true ) {
                newWidth = $(s.getWidthFrom).width();
            }
        }
        else if(s.widthFromWrapper) {
            newWidth = s.stickyWrapper.width();
        }
        if ( newWidth != null ) {
            s.stickyElement.css('width', newWidth);
        }
      }
    },
    methods = {
      init: function(options) {
        var o = $.extend({}, defaults, options);
        return this.each(function() {
          var stickyElement = $(this);

          var stickyId = stickyElement.attr('id');
          var stickyHeight = stickyElement.outerHeight();
          var wrapperId = stickyId ? stickyId + '-' + defaults.wrapperClassName : defaults.wrapperClassName
          var wrapper = $('<div></div>')
            .attr('id', wrapperId)
            .addClass(o.wrapperClassName);

          stickyElement.wrapAll(wrapper);

          var stickyWrapper = stickyElement.parent();

          if (o.center) {
            stickyWrapper.css({width:stickyElement.outerWidth(),marginLeft:"auto",marginRight:"auto"});
          }

          if (stickyElement.css("float") == "right") {
            stickyElement.css({"float":"none"}).parent().css({"float":"right"});
          }

          stickyWrapper.css('height', stickyHeight);

          o.stickyElement = stickyElement;
          o.stickyWrapper = stickyWrapper;
          o.currentTop    = null;

          sticked.push(o);
        });
      },
      update: scroller,
      unstick: function(options) {
        return this.each(function() {
          var that = this;
          var unstickyElement = $(that);

          var removeIdx = -1;
          var i = sticked.length;
          while ( i-- > 0 )
          {
            if (sticked[i].stickyElement.get(0) === that)
            {
                splice.call(sticked,i,1);
                removeIdx = i;
            }
          }
          if(removeIdx != -1)
          {
            unstickyElement.unwrap();
            unstickyElement
              .css({
                'width': '',
                'position': '',
                'top': '',
                'float': ''
              })
            ;
          }
        });
      }
    };

  // should be more efficient than using $window.scroll(scroller) and $window.resize(resizer):
  if (window.addEventListener) {
    window.addEventListener('scroll', scroller, false);
    window.addEventListener('resize', resizer, false);
  } else if (window.attachEvent) {
    window.attachEvent('onscroll', scroller);
    window.attachEvent('onresize', resizer);
  }

  $.fn.sticky = function(method) {
    if (methods[method]) {
      return methods[method].apply(this, slice.call(arguments, 1));
    } else if (typeof method === 'object' || !method ) {
      return methods.init.apply( this, arguments );
    } else {
      $.error('Method ' + method + ' does not exist on jQuery.sticky');
    }
  };

  $.fn.unstick = function(method) {
    if (methods[method]) {
      return methods[method].apply(this, slice.call(arguments, 1));
    } else if (typeof method === 'object' || !method ) {
      return methods.unstick.apply( this, arguments );
    } else {
      $.error('Method ' + method + ' does not exist on jQuery.sticky');
    }

  };
  $(function() {
    setTimeout(scroller, 0);
  });
})(jQuery);


// jquery.tweet.js - See http://tweet.seaofclouds.com/ or https://github.com/seaofclouds/tweet for more info
// Copyright (c) 2008-2012 Todd Matthews & Steve Purcell
(function(factory) {
    if (typeof define === 'function' && define.amd)
        define(['jquery'], factory); // AMD support for RequireJS etc.
    else
        factory(jQuery);
}(function($) {
    $.fn.tweet = function(o) {
        var s = $.extend({
            username: null, // [string or array] required unless using the 'query' option; one or more twitter screen names (use 'list' option for multiple names, where possible)
            list: null, // [string]   optional name of list belonging to username
            favorites: false, // [boolean]  display the user's favorites instead of his tweets
            query: null, // [string]   optional search query (see also: http://search.twitter.com/operators)
            avatar_size: null, // [integer]  height and width of avatar if displayed (48px max)
            count: 3, // [integer]  how many tweets to display?
            fetch: null, // [integer]  how many tweets to fetch via the API (set this higher than 'count' if using the 'filter' option)
            page: 1, // [integer]  which page of results to fetch (if count != fetch, you'll get unexpected results)
            retweets: true, // [boolean]  whether to fetch (official) retweets (not supported in all display modes)
            intro_text: null, // [string]   do you want text BEFORE your your tweets?
            outro_text: null, // [string]   do you want text AFTER your tweets?
            join_text: null, // [string]   optional text in between date and tweet, try setting to "auto"
            auto_join_text_default: " I said, ", // [string]   auto text for non verb: "I said" bullocks
            auto_join_text_ed: " I ", // [string]   auto text for past tense: "I" surfed
            auto_join_text_ing: " I am ", // [string]   auto tense for present tense: "I was" surfing
            auto_join_text_reply: " I replied to ", // [string]   auto tense for replies: "I replied to" @someone "with"
            auto_join_text_url: " I was looking at ", // [string]   auto tense for urls: "I was looking at" http:...
            loading_text: null, // [string]   optional loading text, displayed while tweets load
            refresh_interval: null, // [integer]  optional number of seconds after which to reload tweets
            twitter_url: "twitter.com", // [string]   custom twitter url, if any (apigee, etc.)
            twitter_api_url: "api.twitter.com", // [string]   custom twitter api url, if any (apigee, etc.)
            twitter_search_url: "search.twitter.com", // [string]   custom twitter search url, if any (apigee, etc.)
            template: "{avatar}{time}{join} {text}", // [string or function] template used to construct each tweet <li> - see code for available vars
            comparator: function(tweet1, tweet2) { // [function] comparator used to sort tweets (see Array.sort)
                return tweet2["tweet_time"] - tweet1["tweet_time"];
            },
            filter: function(tweet) { // [function] whether or not to include a particular tweet (be sure to also set 'fetch')
                    return true;
                }
                // You can attach callbacks to the following events using jQuery's standard .bind() mechanism:
                //   "loaded" -- triggered when tweets have been fetched and rendered
        }, o);

        // See http://daringfireball.net/2010/07/improved_regex_for_matching_urls
        var url_regexp = /\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'".,<>?Ãƒâ€šÃ‚Â«Ãƒâ€šÃ‚Â»ÃƒÂ¢Ã¢â€šÂ¬Ã…â€œÃƒÂ¢Ã¢â€šÂ¬Ã‚ÂÃƒÂ¢Ã¢â€šÂ¬Ã‹Å“ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢]))/gi;

        // Expand values inside simple string templates with {placeholders}
        function t(template, info) {
            if (typeof template === "string") {
                var result = template;
                for (var key in info) {
                    var val = info[key];
                    result = result.split('{' + key + '}').join(val === null ? '' : val);
                }
                return result;
            } else return template(info);
        }
        // Export the t function for use when passing a function as the 'template' option
        $.extend({
            tweet: {
                t: t
            }
        });

        function replacer(regex, replacement) {
            return function() {
                var returning = [];
                this.each(function() {
                    returning.push(this.replace(regex, replacement));
                });
                return $(returning);
            };
        }

        function escapeHTML(s) {
            return s.replace(/</g, "&lt;").replace(/>/g, "^&gt;");
        }

        $.fn.extend({
            linkUser: replacer(/(^|[\W])@(\w+)/gi, "$1<span class=\"at\">@</span><a href=\"http://" + s.twitter_url + "/$2\">$2</a>"),
            // Support various latin1 (\u00**) and arabic (\u06**) alphanumeric chars
            linkHash: replacer(/(?:^| )[\#]+([\w\u00c0-\u00d6\u00d8-\u00f6\u00f8-\u00ff\u0600-\u06ff]+)/gi,
                ' <a href="http://' + s.twitter_search_url + '/search?q=&tag=$1&lang=all' +
                ((s.username && s.username.length == 1 && !s.list) ? '&from=' + s.username.join("%2BOR%2B") : '') +
                '" class="tweet_hashtag">#$1</a>'),
            makeHeart: replacer(/(&lt;)+[3]/gi, "<tt class='heart'>&#x2665;</tt>")
        });

        function linkURLs(text, entities) {
            return text.replace(url_regexp, function(match) {
                var url = (/^[a-z]+:/i).test(match) ? match : "http://" + match;
                var text = match;
                for (var i = 0; i < entities.length; ++i) {
                    var entity = entities[i];
                    if (entity.url == url && entity.expanded_url) {
                        url = entity.expanded_url;
                        text = entity.display_url;
                        break;
                    }
                }
                return "<a href=\"" + escapeHTML(url) + "\">" + escapeHTML(text) + "</a>";
            });
        }

        function parse_date(date_str) {
            // The non-search twitter APIs return inconsistently-formatted dates, which Date.parse
            // cannot handle in IE. We therefore perform the following transformation:
            // "Wed Apr 29 08:53:31 +0000 2009" => "Wed, Apr 29 2009 08:53:31 +0000"
            return Date.parse(date_str.replace(/^([a-z]{3})( [a-z]{3} \d\d?)(.*)( \d{4})$/i, '$1,$2$4$3'));
        }

        function extract_relative_time(date) {
            var toInt = function(val) {
                return parseInt(val, 10);
            };
            var relative_to = new Date();
            var delta = toInt((relative_to.getTime() - date) / 1000);
            if (delta < 1) delta = 0;
            return {
                days: toInt(delta / 86400),
                hours: toInt(delta / 3600),
                minutes: toInt(delta / 60),
                seconds: toInt(delta)
            };
        }

        function format_relative_time(time_ago) {
            if (time_ago.days > 2) return 'about ' + time_ago.days + ' days ago';
            if (time_ago.hours > 24) return 'about a day ago';
            if (time_ago.hours > 2) return 'about ' + time_ago.hours + ' hours ago';
            if (time_ago.minutes > 45) return 'about an hour ago';
            if (time_ago.minutes > 2) return 'about ' + time_ago.minutes + ' minutes ago';
            if (time_ago.seconds > 1) return 'about ' + time_ago.seconds + ' seconds ago';
            return 'just now';
        }

        function build_auto_join_text(text) {
            if (text.match(/^(@([A-Za-z0-9-_]+)) .*/i)) {
                return s.auto_join_text_reply;
            } else if (text.match(url_regexp)) {
                return s.auto_join_text_url;
            } else if (text.match(/^((\w+ed)|just) .*/im)) {
                return s.auto_join_text_ed;
            } else if (text.match(/^(\w*ing) .*/i)) {
                return s.auto_join_text_ing;
            } else {
                return s.auto_join_text_default;
            }
        }

        function build_api_url() {
            var proto = ('https:' == document.location.protocol ? 'https:' : 'http:');
            var count = (s.fetch === null) ? s.count : s.fetch;
            var common_params = '&include_entities=1&callback=?';
            if (s.list) {
                return proto + "//" + s.twitter_api_url + "/1/" + s.username[0] + "/lists/" + s.list + "/statuses.json?page=" + s.page + "&per_page=" + count + common_params;
            } else if (s.favorites) {
                return proto + "//" + s.twitter_api_url + "/1/favorites.json?screen_name=" + s.username[0] + "&page=" + s.page + "&count=" + count + common_params;
            } else if (s.query === null && s.username.length == 1) {
                return proto + '//' + s.twitter_api_url + '/1/statuses/user_timeline.json?screen_name=' + s.username[0] + '&count=' + count + (s.retweets ? '&include_rts=1' : '') + '&page=' + s.page + common_params;
            } else {
                var query = (s.query || 'from:' + s.username.join(' OR from:'));
                return proto + '//' + s.twitter_search_url + '/search.json?&q=' + encodeURIComponent(query) + '&rpp=' + count + '&page=' + s.page + common_params;
            }
        }

        function extract_avatar_url(item, secure) {
            if (secure) {
                return ('user' in item) ?
                    item.user.profile_image_url_https :
                    extract_avatar_url(item, false).
                replace(/^http:\/\/[a-z0-9]{1,3}\.twimg\.com\//, "https://s3.amazonaws.com/twitter_production/");
            } else {
                return item.profile_image_url || item.user.profile_image_url;
            }
        }

        // Convert twitter API objects into data available for
        // constructing each tweet <li> using a template
        function extract_template_data(item) {
            var o = {};
            o.item = item;
            o.source = item.source;
            o.screen_name = item.from_user || item.user.screen_name;
            // The actual user name is not returned by all Twitter APIs, so please do not
            // file an issue if it is empty:
            o.name = item.from_user_name || item.user.name;
            o.retweet = typeof(item.retweeted_status) != 'undefined';

            o.tweet_time = parse_date(item.created_at);
            o.join_text = s.join_text == "auto" ? build_auto_join_text(item.text) : s.join_text;
            o.tweet_id = item.id_str;
            o.twitter_base = "http://" + s.twitter_url + "/";
            o.user_url = o.twitter_base + o.screen_name;
            o.tweet_url = o.user_url + "/status/" + o.tweet_id;
            o.reply_url = o.twitter_base + "intent/tweet?in_reply_to=" + o.tweet_id;
            o.retweet_url = o.twitter_base + "intent/retweet?tweet_id=" + o.tweet_id;
            o.favorite_url = o.twitter_base + "intent/favorite?tweet_id=" + o.tweet_id;
            o.retweeted_screen_name = o.retweet && item.retweeted_status.user.screen_name;
            o.tweet_relative_time = format_relative_time(extract_relative_time(o.tweet_time));
            o.entities = item.entities ? (item.entities.urls || []).concat(item.entities.media || []) : [];
            o.tweet_raw_text = o.retweet ? ('RT @' + o.retweeted_screen_name + ' ' + item.retweeted_status.text) : item.text; // avoid '...' in long retweets
            o.tweet_text = $([linkURLs(o.tweet_raw_text, o.entities)]).linkUser().linkHash()[0];
            o.retweeted_tweet_text = $([linkURLs(item.text, o.entities)]).linkUser().linkHash()[0];
            o.tweet_text_fancy = $([o.tweet_text]).makeHeart()[0];

            o.avatar_size = s.avatar_size;
            o.avatar_url = extract_avatar_url(o.retweet ? item.retweeted_status : item, (document.location.protocol === 'https:'));
            o.avatar_screen_name = o.retweet ? o.retweeted_screen_name : o.screen_name;
            o.avatar_profile_url = o.twitter_base + o.avatar_screen_name;

            // Default spans, and pre-formatted blocks for common layouts
            o.user = t('<a class="tweet_user" href="{user_url}">{screen_name}</a>', o);
            o.join = s.join_text ? t('<span class="tweet_join">{join_text}</span>', o) : '';
            o.avatar = o.avatar_size ?
                t('<a class="tweet_avatar" href="{avatar_profile_url}"><img src="{avatar_url}" height="{avatar_size}" width="{avatar_size}" alt="{avatar_screen_name}\'s avatar" title="{avatar_screen_name}\'s avatar" border="0"/></a>', o) : '';
            o.time = t('<span class="tweet_time"><a href="{tweet_url}" title="view tweet on twitter">{tweet_relative_time}</a></span>', o);
            o.text = t('<span class="tweet_text">{tweet_text_fancy}</span>', o);
            o.retweeted_text = t('<span class="tweet_text">{retweeted_tweet_text}</span>', o);
            o.reply_action = t('<a class="tweet_action tweet_reply" href="{reply_url}">reply</a>', o);
            o.retweet_action = t('<a class="tweet_action tweet_retweet" href="{retweet_url}">retweet</a>', o);
            o.favorite_action = t('<a class="tweet_action tweet_favorite" href="{favorite_url}">favorite</a>', o);
            return o;
        }

        function render_tweets(widget, tweets) {
            var list = $('<ul class="tweet_list">');
            list.append($.map(tweets, function(o) {
                return "<li>" + t(s.template, o) + "</li>";
            }).join('')).
            children('li:first').addClass('tweet_first').end().
            children('li:odd').addClass('tweet_even').end().
            children('li:even').addClass('tweet_odd');

            $(widget).empty().append(list);
            if (s.intro_text) list.before('<p class="tweet_intro">' + s.intro_text + '</p>');
            if (s.outro_text) list.after('<p class="tweet_outro">' + s.outro_text + '</p>');

            $(widget).trigger("loaded").trigger((tweets.length === 0 ? "empty" : "full"));
            if (s.refresh_interval) {
                window.setTimeout(function() {
                    $(widget).trigger("tweet:load");
                }, 1000 * s.refresh_interval);
            }
        }

        function load(widget) {
            var loading = $('<p class="loading">' + s.loading_text + '</p>');
            if (s.loading_text) $(widget).not(":has(.tweet_list)").empty().append(loading);
            $.getJSON(build_api_url(), function(data) {
                var tweets = $.map(data.results || data, extract_template_data);
                tweets = $.grep(tweets, s.filter).sort(s.comparator).slice(0, s.count);
                $(widget).trigger("tweet:retrieved", [tweets]);
            });
        }

        return this.each(function(i, widget) {
            if (s.username && typeof(s.username) == "string") {
                s.username = [s.username];
            }

            $(widget).unbind("tweet:render").unbind("tweet:retrieved").unbind("tweet:load").
            bind({
                "tweet:load": function() {
                    load(widget);
                },
                "tweet:retrieved": function(ev, tweets) {
                    $(widget).trigger("tweet:render", [tweets])
                },
                "tweet:render": function(ev, tweets) {
                    render_tweets($(widget), tweets);
                }
            }).trigger("tweet:load");
        });
    };
}));


/**
 * Isotope v1.5.25
 * An exquisite jQuery plugin for magical layouts
 * http://isotope.metafizzy.co
 *
 * Commercial use requires one-time purchase of a commercial license
 * http://isotope.metafizzy.co/docs/license.html
 *
 * Non-commercial use is licensed under the MIT License
 *
 * Copyright 2013 Metafizzy
 */
(function(a, b, c) {
    "use strict";
    var d = a.document,
        e = a.Modernizr,
        f = function(a) {
            return a.charAt(0).toUpperCase() + a.slice(1)
        },
        g = "Moz Webkit O Ms".split(" "),
        h = function(a) {
            var b = d.documentElement.style,
                c;
            if (typeof b[a] == "string") return a;
            a = f(a);
            for (var e = 0, h = g.length; e < h; e++) {
                c = g[e] + a;
                if (typeof b[c] == "string") return c
            }
        },
        i = h("transform"),
        j = h("transitionProperty"),
        k = {
            csstransforms: function() {
                return !!i
            },
            csstransforms3d: function() {
                var a = !!h("perspective");
                if (a) {
                    var c = " -o- -moz- -ms- -webkit- -khtml- ".split(" "),
                        d = "@media (" + c.join("transform-3d),(") + "modernizr)",
                        e = b("<style>" + d + "{#modernizr{height:3px}}" + "</style>").appendTo("head"),
                        f = b('<div id="modernizr" />').appendTo("html");
                    a = f.height() === 3, f.remove(), e.remove()
                }
                return a
            },
            csstransitions: function() {
                return !!j
            }
        },
        l;
    if (e)
        for (l in k) e.hasOwnProperty(l) || e.addTest(l, k[l]);
    else {
        e = a.Modernizr = {
            _version: "1.6ish: miniModernizr for Isotope"
        };
        var m = " ",
            n;
        for (l in k) n = k[l](), e[l] = n, m += " " + (n ? "" : "no-") + l;
        b("html").addClass(m)
    }
    if (e.csstransforms) {
        var o = e.csstransforms3d ? {
                translate: function(a) {
                    return "translate3d(" + a[0] + "px, " + a[1] + "px, 0) "
                },
                scale: function(a) {
                    return "scale3d(" + a + ", " + a + ", 1) "
                }
            } : {
                translate: function(a) {
                    return "translate(" + a[0] + "px, " + a[1] + "px) "
                },
                scale: function(a) {
                    return "scale(" + a + ") "
                }
            },
            p = function(a, c, d) {
                var e = b.data(a, "isoTransform") || {},
                    f = {},
                    g, h = {},
                    j;
                f[c] = d, b.extend(e, f);
                for (g in e) j = e[g], h[g] = o[g](j);
                var k = h.translate || "",
                    l = h.scale || "",
                    m = k + l;
                b.data(a, "isoTransform", e), a.style[i] = m
            };
        b.cssNumber.scale = !0, b.cssHooks.scale = {
            set: function(a, b) {
                p(a, "scale", b)
            },
            get: function(a, c) {
                var d = b.data(a, "isoTransform");
                return d && d.scale ? d.scale : 1
            }
        }, b.fx.step.scale = function(a) {
            b.cssHooks.scale.set(a.elem, a.now + a.unit)
        }, b.cssNumber.translate = !0, b.cssHooks.translate = {
            set: function(a, b) {
                p(a, "translate", b)
            },
            get: function(a, c) {
                var d = b.data(a, "isoTransform");
                return d && d.translate ? d.translate : [0, 0]
            }
        }
    }
    var q, r;
    e.csstransitions && (q = {
        WebkitTransitionProperty: "webkitTransitionEnd",
        MozTransitionProperty: "transitionend",
        OTransitionProperty: "oTransitionEnd otransitionend",
        transitionProperty: "transitionend"
    }[j], r = h("transitionDuration"));
    var s = b.event,
        t = b.event.handle ? "handle" : "dispatch",
        u;
    s.special.smartresize = {
        setup: function() {
            b(this).bind("resize", s.special.smartresize.handler)
        },
        teardown: function() {
            b(this).unbind("resize", s.special.smartresize.handler)
        },
        handler: function(a, b) {
            var c = this,
                d = arguments;
            a.type = "smartresize", u && clearTimeout(u), u = setTimeout(function() {
                s[t].apply(c, d)
            }, b === "execAsap" ? 0 : 100)
        }
    }, b.fn.smartresize = function(a) {
        return a ? this.bind("smartresize", a) : this.trigger("smartresize", ["execAsap"])
    }, b.Isotope = function(a, c, d) {
        this.element = b(c), this._create(a), this._init(d)
    };
    var v = ["width", "height"],
        w = b(a);
    b.Isotope.settings = {
        resizable: !0,
        layoutMode: "masonry",
        containerClass: "isotope",
        itemClass: "isotope-item",
        hiddenClass: "isotope-hidden",
        hiddenStyle: {
            opacity: 0,
            scale: .001
        },
        visibleStyle: {
            opacity: 1,
            scale: 1
        },
        containerStyle: {
            position: "relative",
            overflow: "hidden"
        },
        animationEngine: "best-available",
        animationOptions: {
            queue: !1,
            duration: 800
        },
        sortBy: "original-order",
        sortAscending: !0,
        resizesContainer: !0,
        transformsEnabled: !0,
        itemPositionDataEnabled: !1
    }, b.Isotope.prototype = {
        _create: function(a) {
            this.options = b.extend({}, b.Isotope.settings, a), this.styleQueue = [], this.elemCount = 0;
            var c = this.element[0].style;
            this.originalStyle = {};
            var d = v.slice(0);
            for (var e in this.options.containerStyle) d.push(e);
            for (var f = 0, g = d.length; f < g; f++) e = d[f], this.originalStyle[e] = c[e] || "";
            this.element.css(this.options.containerStyle), this._updateAnimationEngine(), this._updateUsingTransforms();
            var h = {
                "original-order": function(a, b) {
                    return b.elemCount++, b.elemCount
                },
                random: function() {
                    return Math.random()
                }
            };
            this.options.getSortData = b.extend(this.options.getSortData, h), this.reloadItems(), this.offset = {
                left: parseInt(this.element.css("padding-left") || 0, 10),
                top: parseInt(this.element.css("padding-top") || 0, 10)
            };
            var i = this;
            setTimeout(function() {
                i.element.addClass(i.options.containerClass)
            }, 0), this.options.resizable && w.bind("smartresize.isotope", function() {
                i.resize()
            }), this.element.delegate("." + this.options.hiddenClass, "click", function() {
                return !1
            })
        },
        _getAtoms: function(a) {
            var b = this.options.itemSelector,
                c = b ? a.filter(b).add(a.find(b)) : a,
                d = {
                    position: "absolute"
                };
            return c = c.filter(function(a, b) {
                return b.nodeType === 1
            }), this.usingTransforms && (d.left = 0, d.top = 0), c.css(d).addClass(this.options.itemClass), this.updateSortData(c, !0), c
        },
        _init: function(a) {
            this.$filteredAtoms = this._filter(this.$allAtoms), this._sort(), this.reLayout(a)
        },
        option: function(a) {
            if (b.isPlainObject(a)) {
                this.options = b.extend(!0, this.options, a);
                var c;
                for (var d in a) c = "_update" + f(d), this[c] && this[c]()
            }
        },
        _updateAnimationEngine: function() {
            var a = this.options.animationEngine.toLowerCase().replace(/[ _\-]/g, ""),
                b;
            switch (a) {
                case "css":
                case "none":
                    b = !1;
                    break;
                case "jquery":
                    b = !0;
                    break;
                default:
                    b = !e.csstransitions
            }
            this.isUsingJQueryAnimation = b, this._updateUsingTransforms()
        },
        _updateTransformsEnabled: function() {
            this._updateUsingTransforms()
        },
        _updateUsingTransforms: function() {
            var a = this.usingTransforms = this.options.transformsEnabled && e.csstransforms && e.csstransitions && !this.isUsingJQueryAnimation;
            a || (delete this.options.hiddenStyle.scale, delete this.options.visibleStyle.scale), this.getPositionStyles = a ? this._translate : this._positionAbs
        },
        _filter: function(a) {
            var b = this.options.filter === "" ? "*" : this.options.filter;
            if (!b) return a;
            var c = this.options.hiddenClass,
                d = "." + c,
                e = a.filter(d),
                f = e;
            if (b !== "*") {
                f = e.filter(b);
                var g = a.not(d).not(b).addClass(c);
                this.styleQueue.push({
                    $el: g,
                    style: this.options.hiddenStyle
                })
            }
            return this.styleQueue.push({
                $el: f,
                style: this.options.visibleStyle
            }), f.removeClass(c), a.filter(b)
        },
        updateSortData: function(a, c) {
            var d = this,
                e = this.options.getSortData,
                f, g;
            a.each(function() {
                f = b(this), g = {};
                for (var a in e) !c && a === "original-order" ? g[a] = b.data(this, "isotope-sort-data")[a] : g[a] = e[a](f, d);
                b.data(this, "isotope-sort-data", g)
            })
        },
        _sort: function() {
            var a = this.options.sortBy,
                b = this._getSorter,
                c = this.options.sortAscending ? 1 : -1,
                d = function(d, e) {
                    var f = b(d, a),
                        g = b(e, a);
                    return f === g && a !== "original-order" && (f = b(d, "original-order"), g = b(e, "original-order")), (f > g ? 1 : f < g ? -1 : 0) * c
                };
            this.$filteredAtoms.sort(d)
        },
        _getSorter: function(a, c) {
            return b.data(a, "isotope-sort-data")[c]
        },
        _translate: function(a, b) {
            return {
                translate: [a, b]
            }
        },
        _positionAbs: function(a, b) {
            return {
                left: a,
                top: b
            }
        },
        _pushPosition: function(a, b, c) {
            b = Math.round(b + this.offset.left), c = Math.round(c + this.offset.top);
            var d = this.getPositionStyles(b, c);
            this.styleQueue.push({
                $el: a,
                style: d
            }), this.options.itemPositionDataEnabled && a.data("isotope-item-position", {
                x: b,
                y: c
            })
        },
        layout: function(a, b) {
            var c = this.options.layoutMode;
            this["_" + c + "Layout"](a);
            if (this.options.resizesContainer) {
                var d = this["_" + c + "GetContainerSize"]();
                this.styleQueue.push({
                    $el: this.element,
                    style: d
                })
            }
            this._processStyleQueue(a, b), this.isLaidOut = !0
        },
        _processStyleQueue: function(a, c) {
            var d = this.isLaidOut ? this.isUsingJQueryAnimation ? "animate" : "css" : "css",
                f = this.options.animationOptions,
                g = this.options.onLayout,
                h, i, j, k;
            i = function(a, b) {
                b.$el[d](b.style, f)
            };
            if (this._isInserting && this.isUsingJQueryAnimation) i = function(a, b) {
                h = b.$el.hasClass("no-transition") ? "css" : d, b.$el[h](b.style, f)
            };
            else if (c || g || f.complete) {
                var l = !1,
                    m = [c, g, f.complete],
                    n = this;
                j = !0, k = function() {
                    if (l) return;
                    var b;
                    for (var c = 0, d = m.length; c < d; c++) b = m[c], typeof b == "function" && b.call(n.element, a, n);
                    l = !0
                };
                if (this.isUsingJQueryAnimation && d === "animate") f.complete = k, j = !1;
                else if (e.csstransitions) {
                    var o = 0,
                        p = this.styleQueue[0],
                        s = p && p.$el,
                        t;
                    while (!s || !s.length) {
                        t = this.styleQueue[o++];
                        if (!t) return;
                        s = t.$el
                    }
                    var u = parseFloat(getComputedStyle(s[0])[r]);
                    u > 0 && (i = function(a, b) {
                        b.$el[d](b.style, f).one(q, k)
                    }, j = !1)
                }
            }
            b.each(this.styleQueue, i), j && k(), this.styleQueue = []
        },
        resize: function() {
            this["_" + this.options.layoutMode + "ResizeChanged"]() && this.reLayout()
        },
        reLayout: function(a) {
            this["_" + this.options.layoutMode + "Reset"](), this.layout(this.$filteredAtoms, a)
        },
        addItems: function(a, b) {
            var c = this._getAtoms(a);
            this.$allAtoms = this.$allAtoms.add(c), b && b(c)
        },
        insert: function(a, b) {
            this.element.append(a);
            var c = this;
            this.addItems(a, function(a) {
                var d = c._filter(a);
                c._addHideAppended(d), c._sort(), c.reLayout(), c._revealAppended(d, b)
            })
        },
        appended: function(a, b) {
            var c = this;
            this.addItems(a, function(a) {
                c._addHideAppended(a), c.layout(a), c._revealAppended(a, b)
            })
        },
        _addHideAppended: function(a) {
            this.$filteredAtoms = this.$filteredAtoms.add(a), a.addClass("no-transition"), this._isInserting = !0, this.styleQueue.push({
                $el: a,
                style: this.options.hiddenStyle
            })
        },
        _revealAppended: function(a, b) {
            var c = this;
            setTimeout(function() {
                a.removeClass("no-transition"), c.styleQueue.push({
                    $el: a,
                    style: c.options.visibleStyle
                }), c._isInserting = !1, c._processStyleQueue(a, b)
            }, 10)
        },
        reloadItems: function() {
            this.$allAtoms = this._getAtoms(this.element.children())
        },
        remove: function(a, b) {
            this.$allAtoms = this.$allAtoms.not(a), this.$filteredAtoms = this.$filteredAtoms.not(a);
            var c = this,
                d = function() {
                    a.remove(), b && b.call(c.element)
                };
            a.filter(":not(." + this.options.hiddenClass + ")").length ? (this.styleQueue.push({
                $el: a,
                style: this.options.hiddenStyle
            }), this._sort(), this.reLayout(d)) : d()
        },
        shuffle: function(a) {
            this.updateSortData(this.$allAtoms), this.options.sortBy = "random", this._sort(), this.reLayout(a)
        },
        destroy: function() {
            var a = this.usingTransforms,
                b = this.options;
            this.$allAtoms.removeClass(b.hiddenClass + " " + b.itemClass).each(function() {
                var b = this.style;
                b.position = "", b.top = "", b.left = "", b.opacity = "", a && (b[i] = "")
            });
            var c = this.element[0].style;
            for (var d in this.originalStyle) c[d] = this.originalStyle[d];
            this.element.unbind(".isotope").undelegate("." + b.hiddenClass, "click").removeClass(b.containerClass).removeData("isotope"), w.unbind(".isotope")
        },
        _getSegments: function(a) {
            var b = this.options.layoutMode,
                c = a ? "rowHeight" : "columnWidth",
                d = a ? "height" : "width",
                e = a ? "rows" : "cols",
                g = this.element[d](),
                h, i = this.options[b] && this.options[b][c] || this.$filteredAtoms["outer" + f(d)](!0) || g;
            h = Math.floor(g / i), h = Math.max(h, 1), this[b][e] = h, this[b][c] = i
        },
        _checkIfSegmentsChanged: function(a) {
            var b = this.options.layoutMode,
                c = a ? "rows" : "cols",
                d = this[b][c];
            return this._getSegments(a), this[b][c] !== d
        },
        _masonryReset: function() {
            this.masonry = {}, this._getSegments();
            var a = this.masonry.cols;
            this.masonry.colYs = [];
            while (a--) this.masonry.colYs.push(0)
        },
        _masonryLayout: function(a) {
            var c = this,
                d = c.masonry;
            a.each(function() {
                var a = b(this),
                    e = Math.ceil(a.outerWidth(!0) / d.columnWidth);
                e = Math.min(e, d.cols);
                if (e === 1) c._masonryPlaceBrick(a, d.colYs);
                else {
                    var f = d.cols + 1 - e,
                        g = [],
                        h, i;
                    for (i = 0; i < f; i++) h = d.colYs.slice(i, i + e), g[i] = Math.max.apply(Math, h);
                    c._masonryPlaceBrick(a, g)
                }
            })
        },
        _masonryPlaceBrick: function(a, b) {
            var c = Math.min.apply(Math, b),
                d = 0;
            for (var e = 0, f = b.length; e < f; e++)
                if (b[e] === c) {
                    d = e;
                    break
                }
            var g = this.masonry.columnWidth * d,
                h = c;
            this._pushPosition(a, g, h);
            var i = c + a.outerHeight(!0),
                j = this.masonry.cols + 1 - f;
            for (e = 0; e < j; e++) this.masonry.colYs[d + e] = i
        },
        _masonryGetContainerSize: function() {
            var a = Math.max.apply(Math, this.masonry.colYs);
            return {
                height: a
            }
        },
        _masonryResizeChanged: function() {
            return this._checkIfSegmentsChanged()
        },
        _fitRowsReset: function() {
            this.fitRows = {
                x: 0,
                y: 0,
                height: 0
            }
        },
        _fitRowsLayout: function(a) {
            var c = this,
                d = this.element.width(),
                e = this.fitRows;
            a.each(function() {
                var a = b(this),
                    f = a.outerWidth(!0),
                    g = a.outerHeight(!0);
                e.x !== 0 && f + e.x > d && (e.x = 0, e.y = e.height), c._pushPosition(a, e.x, e.y), e.height = Math.max(e.y + g, e.height), e.x += f
            })
        },
        _fitRowsGetContainerSize: function() {
            return {
                height: this.fitRows.height
            }
        },
        _fitRowsResizeChanged: function() {
            return !0
        },
        _cellsByRowReset: function() {
            this.cellsByRow = {
                index: 0
            }, this._getSegments(), this._getSegments(!0)
        },
        _cellsByRowLayout: function(a) {
            var c = this,
                d = this.cellsByRow;
            a.each(function() {
                var a = b(this),
                    e = d.index % d.cols,
                    f = Math.floor(d.index / d.cols),
                    g = (e + .5) * d.columnWidth - a.outerWidth(!0) / 2,
                    h = (f + .5) * d.rowHeight - a.outerHeight(!0) / 2;
                c._pushPosition(a, g, h), d.index++
            })
        },
        _cellsByRowGetContainerSize: function() {
            return {
                height: Math.ceil(this.$filteredAtoms.length / this.cellsByRow.cols) * this.cellsByRow.rowHeight + this.offset.top
            }
        },
        _cellsByRowResizeChanged: function() {
            return this._checkIfSegmentsChanged()
        },
        _straightDownReset: function() {
            this.straightDown = {
                y: 0
            }
        },
        _straightDownLayout: function(a) {
            var c = this;
            a.each(function(a) {
                var d = b(this);
                c._pushPosition(d, 0, c.straightDown.y), c.straightDown.y += d.outerHeight(!0)
            })
        },
        _straightDownGetContainerSize: function() {
            return {
                height: this.straightDown.y
            }
        },
        _straightDownResizeChanged: function() {
            return !0
        },
        _masonryHorizontalReset: function() {
            this.masonryHorizontal = {}, this._getSegments(!0);
            var a = this.masonryHorizontal.rows;
            this.masonryHorizontal.rowXs = [];
            while (a--) this.masonryHorizontal.rowXs.push(0)
        },
        _masonryHorizontalLayout: function(a) {
            var c = this,
                d = c.masonryHorizontal;
            a.each(function() {
                var a = b(this),
                    e = Math.ceil(a.outerHeight(!0) / d.rowHeight);
                e = Math.min(e, d.rows);
                if (e === 1) c._masonryHorizontalPlaceBrick(a, d.rowXs);
                else {
                    var f = d.rows + 1 - e,
                        g = [],
                        h, i;
                    for (i = 0; i < f; i++) h = d.rowXs.slice(i, i + e), g[i] = Math.max.apply(Math, h);
                    c._masonryHorizontalPlaceBrick(a, g)
                }
            })
        },
        _masonryHorizontalPlaceBrick: function(a, b) {
            var c = Math.min.apply(Math, b),
                d = 0;
            for (var e = 0, f = b.length; e < f; e++)
                if (b[e] === c) {
                    d = e;
                    break
                }
            var g = c,
                h = this.masonryHorizontal.rowHeight * d;
            this._pushPosition(a, g, h);
            var i = c + a.outerWidth(!0),
                j = this.masonryHorizontal.rows + 1 - f;
            for (e = 0; e < j; e++) this.masonryHorizontal.rowXs[d + e] = i
        },
        _masonryHorizontalGetContainerSize: function() {
            var a = Math.max.apply(Math, this.masonryHorizontal.rowXs);
            return {
                width: a
            }
        },
        _masonryHorizontalResizeChanged: function() {
            return this._checkIfSegmentsChanged(!0)
        },
        _fitColumnsReset: function() {
            this.fitColumns = {
                x: 0,
                y: 0,
                width: 0
            }
        },
        _fitColumnsLayout: function(a) {
            var c = this,
                d = this.element.height(),
                e = this.fitColumns;
            a.each(function() {
                var a = b(this),
                    f = a.outerWidth(!0),
                    g = a.outerHeight(!0);
                e.y !== 0 && g + e.y > d && (e.x = e.width, e.y = 0), c._pushPosition(a, e.x, e.y), e.width = Math.max(e.x + f, e.width), e.y += g
            })
        },
        _fitColumnsGetContainerSize: function() {
            return {
                width: this.fitColumns.width
            }
        },
        _fitColumnsResizeChanged: function() {
            return !0
        },
        _cellsByColumnReset: function() {
            this.cellsByColumn = {
                index: 0
            }, this._getSegments(), this._getSegments(!0)
        },
        _cellsByColumnLayout: function(a) {
            var c = this,
                d = this.cellsByColumn;
            a.each(function() {
                var a = b(this),
                    e = Math.floor(d.index / d.rows),
                    f = d.index % d.rows,
                    g = (e + .5) * d.columnWidth - a.outerWidth(!0) / 2,
                    h = (f + .5) * d.rowHeight - a.outerHeight(!0) / 2;
                c._pushPosition(a, g, h), d.index++
            })
        },
        _cellsByColumnGetContainerSize: function() {
            return {
                width: Math.ceil(this.$filteredAtoms.length / this.cellsByColumn.rows) * this.cellsByColumn.columnWidth
            }
        },
        _cellsByColumnResizeChanged: function() {
            return this._checkIfSegmentsChanged(!0)
        },
        _straightAcrossReset: function() {
            this.straightAcross = {
                x: 0
            }
        },
        _straightAcrossLayout: function(a) {
            var c = this;
            a.each(function(a) {
                var d = b(this);
                c._pushPosition(d, c.straightAcross.x, 0), c.straightAcross.x += d.outerWidth(!0)
            })
        },
        _straightAcrossGetContainerSize: function() {
            return {
                width: this.straightAcross.x
            }
        },
        _straightAcrossResizeChanged: function() {
            return !0
        }
    }, b.fn.imagesLoaded = function(a) {
        function h() {
            a.call(c, d)
        }

        function i(a) {
            var c = a.target;
            c.src !== f && b.inArray(c, g) === -1 && (g.push(c), --e <= 0 && (setTimeout(h), d.unbind(".imagesLoaded", i)))
        }
        var c = this,
            d = c.find("img").add(c.filter("img")),
            e = d.length,
            f = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",
            g = [];
        return e || h(), d.bind("load.imagesLoaded error.imagesLoaded", i).each(function() {
            var a = this.src;
            this.src = f, this.src = a
        }), c
    };
    var x = function(b) {
        a.console && a.console.error(b)
    };
    b.fn.isotope = function(a, c) {
        if (typeof a == "string") {
            var d = Array.prototype.slice.call(arguments, 1);
            this.each(function() {
                var c = b.data(this, "isotope");
                if (!c) {
                    x("cannot call methods on isotope prior to initialization; attempted to call method '" + a + "'");
                    return
                }
                if (!b.isFunction(c[a]) || a.charAt(0) === "_") {
                    x("no such method '" + a + "' for isotope instance");
                    return
                }
                c[a].apply(c, d)
            })
        } else this.each(function() {
            var d = b.data(this, "isotope");
            d ? (d.option(a), d._init(c)) : b.data(this, "isotope", new b.Isotope(a, this, c))
        });
        return this
    }
})(window, jQuery);

/*
 * responsive-carousel
 * https://github.com/filamentgroup/responsive-carousel
 *
 * Copyright (c) 2012 Filament Group, Inc.
 * Licensed under the MIT, GPL licenses.
 */

(function($) {

    var pluginName = "carousel",
        initSelector = "." + pluginName,
        transitionAttr = "data-transition",
        transitioningClass = pluginName + "-transitioning",
        itemClass = pluginName + "-item",
        activeClass = pluginName + "-active",
        inClass = pluginName + "-in",
        outClass = pluginName + "-out",
        navClass = pluginName + "-nav",
        cssTransitionsSupport = (function() {
            var prefixes = "webkit Moz O Ms".split(" "),
                supported = false,
                property;

            while (prefixes.length) {
                property = prefixes.shift() + "Transition";

                if (property in document.documentElement.style !== undefined && property in document.documentElement.style !== false) {
                    supported = true;
                    break;
                }
            }
            return supported;
        }()),
        methods = {
            _create: function() {
                $(this)
                    .trigger("beforecreate." + pluginName)[pluginName]("_init")[pluginName]("_addNextPrev")
                    .trigger("create." + pluginName);
            },

            _init: function() {
                var trans = $(this).attr(transitionAttr);

                if (!trans) {
                    cssTransitionsSupport = false;
                }

                return $(this)
                    .addClass(
                        pluginName +
                        " " + (trans ? pluginName + "-" + trans : "") + " "
                    )
                    .children()
                    .addClass(itemClass)
                    .first()
                    .addClass(activeClass);
            },

            next: function() {
                $(this)[pluginName]("goTo", "+1");
            },

            prev: function() {
                $(this)[pluginName]("goTo", "-1");
            },

            goTo: function(num) {

                var $self = $(this),
                    trans = $self.attr(transitionAttr),
                    reverseClass = " " + pluginName + "-" + trans + "-reverse";

                // clean up children
                $(this).find("." + itemClass).removeClass([outClass, inClass, reverseClass].join(" "));

                var $from = $(this).find("." + activeClass),
                    prevs = $from.index(),
                    activeNum = (prevs < 0 ? 0 : prevs) + 1,
                    nextNum = typeof(num) === "number" ? num : activeNum + parseFloat(num),
                    $to = $(this).find(".carousel-item").eq(nextNum - 1),
                    reverse = (typeof(num) === "string" && !(parseFloat(num))) || nextNum > activeNum ? "" : reverseClass;

                if (!$to.length) {
                    $to = $(this).find("." + itemClass)[reverse.length ? "last" : "first"]();
                }

                if (cssTransitionsSupport) {
                    $self[pluginName]("_transitionStart", $from, $to, reverse);
                } else {
                    $to.addClass(activeClass);
                    $self[pluginName]("_transitionEnd", $from, $to, reverse);
                }

                // added to allow pagination to track
                $self.trigger("goto." + pluginName, $to);
            },

            update: function() {
                $(this).children().not("." + navClass).addClass(itemClass);

                return $(this).trigger("update." + pluginName);
            },

            _transitionStart: function($from, $to, reverseClass) {
                var $self = $(this);

                $to.one(navigator.userAgent.indexOf("AppleWebKit") > -1 ? "webkitTransitionEnd" : "transitionend otransitionend", function() {
                    $self[pluginName]("_transitionEnd", $from, $to, reverseClass);
                });

                $(this).addClass(reverseClass);
                $from.addClass(outClass);
                $to.addClass(inClass);
            },

            _transitionEnd: function($from, $to, reverseClass) {
                $(this).removeClass(reverseClass);
                $from.removeClass(outClass + " " + activeClass);
                $to.removeClass(inClass).addClass(activeClass);
            },

            _bindEventListeners: function() {
                var $elem = $(this)
                    .bind("click", function(e) {
                        var targ = $(e.target).closest("a[href='#next'],a[href='#prev']");
                        if (targ.length) {
                            $elem[pluginName](targ.is("[href='#next']") ? "next" : "prev");
                            e.preventDefault();
                        }
                    });

                return this;
            },

            _addNextPrev: function() {
                return $(this)
                    .append("<nav class='" + navClass + "'><a href='#prev' class='prev' aria-hidden='true' title='Previous'><i class='icon-chevron-left'></i></a><a href='#next' class='next' aria-hidden='true' title='Next'><i class='icon-chevron-right'></i></a></nav>")[pluginName]("_bindEventListeners");
            },

            destroy: function() {
                // TODO
            }
        };

    // Collection method.
    $.fn[pluginName] = function(arrg, a, b, c) {
        return this.each(function() {

            // if it's a method
            if (arrg && typeof(arrg) === "string") {
                return $.fn[pluginName].prototype[arrg].call(this, a, b, c);
            }

            // don't re-init
            if ($(this).data(pluginName + "data")) {
                return $(this);
            }

            // otherwise, init
            $(this).data(pluginName + "active", true);
            $.fn[pluginName].prototype._create.call(this);
        });
    };

    // add methods
    $.extend($.fn[pluginName].prototype, methods);

}(jQuery));


/* noUiSlider 3.2.1 */
(function($) {

    $.fn.noUiSlider = function(options, flag) {

        // test for mouse, pointer or touch
        var EVENT = window.navigator.msPointerEnabled ? 2 : 'ontouchend' in document ? 3 : 1;
        if (window.debug && console) {
            console.log(EVENT);
        }

        // shorthand for test=function, calling
        function call(f, scope, args) {
            if (typeof f === "function") {
                f.call(scope, args);
            }
        }

        // function wrapper for calculating to and from range values
        var percentage = {
            to: function(range, value) {
                value = range[0] < 0 ? value + Math.abs(range[0]) : value - range[0];
                return (value * 100) / this._length(range);
            },
            from: function(range, value) {
                return (value * 100) / this._length(range);
            },
            is: function(range, value) {
                return ((value * this._length(range)) / 100) + range[0];
            },
            _length: function(range) {
                return (range[0] > range[1] ? range[0] - range[1] : range[1] - range[0]);
            }
        }

        // bounce handles of eachother, the edges of the slider
        function correct(proposal, slider, handle) {

            var
                setup = slider.data('setup'),
                handles = setup.handles,
                settings = setup.settings,
                pos = setup.pos;

            proposal = proposal < 0 ? 0 : proposal > 100 ? 100 : proposal;

            if (settings.handles == 2) {
                if (handle.is(':first-child')) {
                    var other = parseFloat(handles[1][0].style[pos]) - settings.margin;
                    proposal = proposal > other ? other : proposal;
                } else {
                    var other = parseFloat(handles[0][0].style[pos]) + settings.margin;
                    proposal = proposal < other ? other : proposal;
                }
            }

            if (settings.step) {
                var per = percentage.from(settings.range, settings.step);
                proposal = Math.round(proposal / per) * per;
            }

            return proposal;

        }

        // get standarised clientX and clientY
        function client(f) {
            try {
                return [(f.clientX || f.originalEvent.clientX || f.originalEvent.touches[0].clientX), (f.clientY || f.originalEvent.clientY || f.originalEvent.touches[0].clientY)];
            } catch (e) {
                return ['x', 'y'];
            }
        }

        // get native inline style value in %
        function place(handle, pos) {
            return parseFloat(handle[0].style[pos]);
        }

        // simplified defaults
        var defaults = {
            handles: 2,
            serialization: {
                to: ['', ''],
                resolution: 0.01
            }
        };

        // contains all methods
        methods = {
            create: function() {

                return this.each(function() {

                    // set handle to position
                    function setHandle(handle, to, slider) {
                        handle.css(pos, to + '%').data('input').val(percentage.is(settings.range, to).toFixed(res));
                    }

                    var
                        settings = $.extend(defaults, options),
                        // handles
                        handlehtml = '<a><div></div></a>',
                        // save this to variable, // allows identification
                        slider = $(this).data('_isnS_', true),
                        // array of handles
                        handles = [],
                        // the way the handles are positioned for this slider, top/left
                        pos,
                        // for quick orientation testing and array matching
                        orientation,
                        // append classes
                        classes = "",
                        // tests numerical
                        num = function(e) {
                            return !isNaN(parseFloat(e)) && isFinite(e);
                        },
                        // counts decimals in serialization, sets default
                        split = (settings.serialization.resolution = settings.serialization.resolution || 0.01).toString().split('.'),
                        res = split[0] == 1 ? 0 : split[1].length;

                    settings.start = num(settings.start) ? [settings.start, 0] : settings.start;

                    // logs bad input values, if possible
                    $.each(settings, function(a, b) {

                        if (num(b)) {
                            settings[a] = parseFloat(b);
                        } else if (typeof b == "object" && num(b[0])) {
                            b[0] = parseFloat(b[0]);
                            if (num(b[1])) {
                                b[1] = parseFloat(b[1]);
                            }
                        }

                        var e = false;
                        b = typeof b == "undefined" ? "x" : b;

                        switch (a) {
                            case 'range':
                            case 'start':
                                e = b.length != 2 || !num(b[0]) || !num(b[1]);
                                break;
                            case 'handles':
                                e = (b < 1 || b > 2 || !num(b));
                                break;
                            case 'connect':
                                e = b != "lower" && b != "upper" && typeof b != "boolean";
                                break;
                            case 'orientation':
                                e = (b != "vertical" && b != "horizontal");
                                break;
                            case 'margin':
                            case 'step':
                                e = typeof b != "undefined" && !num(b);
                                break;
                            case 'serialization':
                                e = typeof b != "object" || !num(b.resolution) || (typeof b.to == 'object' && b.to.length < settings.handles);
                                break;
                            case 'slide':
                                e = typeof b != "function";
                                break;
                        }

                        if (e && console) {
                            console.error('Bad input for ' + a + ' on slider:', slider);
                        }

                    });

                    settings.margin = settings.margin ? percentage.from(settings.range, settings.margin) : 0;

                    // tests serialization to be strings or jQuery objects
                    if (settings.serialization.to instanceof jQuery || typeof settings.serialization.to == 'string' || settings.serialization.to === false) {
                        settings.serialization.to = [settings.serialization.to];
                    }

                    if (settings.orientation == "vertical") {
                        classes += "vertical";
                        pos = 'top';
                        orientation = 1;
                    } else {
                        classes += "horizontal";
                        pos = 'left';
                        orientation = 0;
                    }

                    classes += settings.connect ? settings.connect == "lower" ? " connect lower" : " connect" : "";

                    slider.addClass(classes);

                    for (var i = 0; i < settings.handles; i++) {

                        handles[i] = slider.append(handlehtml).children(':last');
                        var setTo = percentage.to(settings.range, settings.start[i]);
                        handles[i].css(pos, setTo + '%');
                        if (setTo == 100 && handles[i].is(':first-child')) {
                            handles[i].css('z-index', 2);
                        }

                        var bind = '.noUiSlider',
                            onEvent = (EVENT === 1 ? 'mousedown' : EVENT === 2 ? 'MSPointerDown' : 'touchstart') + bind + 'X',
                            moveEvent = (EVENT === 1 ? 'mousemove' : EVENT === 2 ? 'MSPointerMove' : 'touchmove') + bind,
                            offEvent = (EVENT === 1 ? 'mouseup' : EVENT === 2 ? 'MSPointerUp' : 'touchend') + bind

                        handles[i].find('div').on(onEvent, function(e) {

                            $('body').bind('selectstart' + bind, function() {
                                return false;
                            });

                            if (!slider.hasClass('disabled')) {

                                $('body').addClass('TOUCH');

                                var handle = $(this).addClass('active').parent(),
                                    unbind = handle.add($(document)).add('body'),
                                    originalPosition = parseFloat(handle[0].style[pos]),
                                    originalClick = client(e),
                                    previousClick = originalClick,
                                    previousProposal = false;

                                $(document).on(moveEvent, function(f) {

                                    f.preventDefault();

                                    var currentClick = client(f);

                                    if (currentClick[0] == "x") {
                                        return;
                                    }

                                    currentClick[0] -= originalClick[0];
                                    currentClick[1] -= originalClick[1];

                                    var movement = [
                                            previousClick[0] != currentClick[0], previousClick[1] != currentClick[1]
                                        ],
                                        proposal = originalPosition + ((currentClick[orientation] * 100) / (orientation ? slider.height() : slider.width()));
                                    proposal = correct(proposal, slider, handle);

                                    if (movement[orientation] && proposal != previousProposal) {
                                        handle.css(pos, proposal + '%').data('input').val(percentage.is(settings.range, proposal).toFixed(res));
                                        call(settings.slide, slider.data('_n', true));
                                        previousProposal = proposal;
                                        handle.css('z-index', handles.length == 2 && proposal == 100 && handle.is(':first-child') ? 2 : 1);
                                    }

                                    previousClick = currentClick;

                                }).on(offEvent, function() {

                                    unbind.off(bind);
                                    $('body').removeClass('TOUCH');
                                    if (slider.find('.active').removeClass('active').end().data('_n')) {
                                        slider.data('_n', false).change();
                                    }

                                });

                            }
                        }).on('click', function(e) {
                            e.stopPropagation();
                        });

                    }

                    if (EVENT == 1) {
                        slider.on('click', function(f) {
                            if (!slider.hasClass('disabled')) {
                                var currentClick = client(f),
                                    proposal = ((currentClick[orientation] - slider.offset()[pos]) * 100) / (orientation ? slider.height() : slider.width()),
                                    handle = handles.length > 1 ? (currentClick[orientation] < (handles[0].offset()[pos] + handles[1].offset()[pos]) / 2 ? handles[0] : handles[1]) : handles[0];
                                setHandle(handle, correct(proposal, slider, handle), slider);
                                call(settings.slide, slider);
                                slider.change();
                            }
                        });
                    }

                    for (var i = 0; i < handles.length; i++) {
                        var val = percentage.is(settings.range, place(handles[i], pos)).toFixed(res);
                        if (typeof settings.serialization.to[i] == 'string') {
                            handles[i].data('input',
                                slider.append('<input type="hidden" name="' + settings.serialization.to[i] + '">').find('input:last')
                                .val(val)
                                .change(function(a) {
                                    a.stopPropagation();
                                }));
                        } else if (settings.serialization.to[i] == false) {
                            handles[i].data('input', {
                                val: function(a) {
                                    if (typeof a != 'undefined') {
                                        this.handle.data('noUiVal', a);
                                    } else {
                                        return this.handle.data('noUiVal');
                                    }
                                },
                                handle: handles[i]
                            });
                        } else {
                            handles[i].data('input', settings.serialization.to[i].data('handleNR', i).val(val).change(function() {
                                var arr = [null, null];
                                arr[$(this).data('handleNR')] = $(this).val();
                                slider.val(arr);
                            }));
                        }
                    }

                    $(this).data('setup', {
                        settings: settings,
                        handles: handles,
                        pos: pos,
                        res: res
                    });

                });
            },
            val: function() {

                if (typeof arguments[0] !== 'undefined') {

                    var val = typeof arguments[0] == 'number' ? [arguments[0]] : arguments[0];

                    return this.each(function() {

                        var setup = $(this).data('setup');

                        for (var i = 0; i < setup.handles.length; i++) {
                            if (val[i] != null) {
                                var proposal = correct(percentage.to(setup.settings.range, val[i]), $(this), setup.handles[i]);
                                setup.handles[i].css(setup.pos, proposal + '%').data('input').val(percentage.is(setup.settings.range, proposal).toFixed(setup.res));
                            }
                        }
                    });

                } else {

                    var handles = $(this).data('setup').handles,
                        re = [];
                    for (var i = 0; i < handles.length; i++) {
                        re.push(parseFloat(handles[i].data('input').val()));
                    }
                    return re.length == 1 ? re[0] : re;

                }
            },
            disabled: function() {
                return flag ? $(this).addClass('disabled') : $(this).removeClass('disabled');
            }
        }

        // remap the native/current val function to noUiSlider
        var $_val = jQuery.fn.val;

        jQuery.fn.val = function() {
            return this.data('_isnS_') ? methods.val.apply(this, arguments) : $_val.apply(this, arguments);
        }

        return options == "disabled" ? methods.disabled.apply(this) : methods.create.apply(this);

    }

})(jQuery);

/* ------------------------------------------------------------------------
	Class: prettyPhoto
	Use: Lightbox clone for jQuery
	Author: Stephane Caron (http://www.no-margin-for-errors.com)
	Version: 3.1.5
------------------------------------------------------------------------- */
(function(e) {
    function t() {
        var e = location.href;
        hashtag = e.indexOf("#prettyPhoto") !== -1 ? decodeURI(e.substring(e.indexOf("#prettyPhoto") + 1, e.length)) : false;
        return hashtag
    }

    function n() {
        if (typeof theRel == "undefined") return;
        location.hash = theRel + "/" + rel_index + "/"
    }

    function r() {
        if (location.href.indexOf("#prettyPhoto") !== -1) location.hash = "prettyPhoto"
    }

    function i(e, t) {
        e = e.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var n = "[\\?&]" + e + "=([^&#]*)";
        var r = new RegExp(n);
        var i = r.exec(t);
        return i == null ? "" : i[1]
    }
    e.prettyPhoto = {
        version: "3.1.5"
    };
    e.fn.prettyPhoto = function(s) {
        function g() {
            e(".pp_loaderIcon").hide();
            projectedTop = scroll_pos["scrollTop"] + (d / 2 - a["containerHeight"] / 2);
            if (projectedTop < 0) projectedTop = 0;
            $ppt.fadeTo(settings.animation_speed, 1);
            $pp_pic_holder.find(".pp_content").animate({
                height: a["contentHeight"],
                width: a["contentWidth"]
            }, settings.animation_speed);
            $pp_pic_holder.animate({
                top: projectedTop,
                left: v / 2 - a["containerWidth"] / 2 < 0 ? 0 : v / 2 - a["containerWidth"] / 2,
                width: a["containerWidth"]
            }, settings.animation_speed, function() {
                $pp_pic_holder.find(".pp_hoverContainer,#fullResImage").height(a["height"]).width(a["width"]);
                $pp_pic_holder.find(".pp_fade").fadeIn(settings.animation_speed);
                if (isSet && S(pp_images[set_position]) == "image") {
                    $pp_pic_holder.find(".pp_hoverContainer").show()
                } else {
                    $pp_pic_holder.find(".pp_hoverContainer").hide()
                }
                if (settings.allow_expand) {
                    if (a["resized"]) {
                        e("a.pp_expand,a.pp_contract").show()
                    } else {
                        e("a.pp_expand").hide()
                    }
                }
                if (settings.autoplay_slideshow && !m && !f) e.prettyPhoto.startSlideshow();
                settings.changepicturecallback();
                f = true
            });
            C();
            s.ajaxcallback()
        }

        function y(t) {
            $pp_pic_holder.find("#pp_full_res object,#pp_full_res embed").css("visibility", "hidden");
            $pp_pic_holder.find(".pp_fade").fadeOut(settings.animation_speed, function() {
                e(".pp_loaderIcon").show();
                t()
            })
        }

        function b(t) {
            t > 1 ? e(".pp_nav").show() : e(".pp_nav").hide()
        }

        function w(e, t) {
            resized = false;
            E(e, t);
            imageWidth = e, imageHeight = t;
            if ((p > v || h > d) && doresize && settings.allow_resize && !u) {
                resized = true, fitting = false;
                while (!fitting) {
                    if (p > v) {
                        imageWidth = v - 200;
                        imageHeight = t / e * imageWidth
                    } else if (h > d) {
                        imageHeight = d - 200;
                        imageWidth = e / t * imageHeight
                    } else {
                        fitting = true
                    }
                    h = imageHeight, p = imageWidth
                }
                if (p > v || h > d) {
                    w(p, h)
                }
                E(imageWidth, imageHeight)
            }
            return {
                width: Math.floor(imageWidth),
                height: Math.floor(imageHeight),
                containerHeight: Math.floor(h),
                containerWidth: Math.floor(p) + settings.horizontal_padding * 2,
                contentHeight: Math.floor(l),
                contentWidth: Math.floor(c),
                resized: resized
            }
        }

        function E(t, n) {
            t = parseFloat(t);
            n = parseFloat(n);
            $pp_details = $pp_pic_holder.find(".pp_details");
            $pp_details.width(t);
            detailsHeight = parseFloat($pp_details.css("marginTop")) + parseFloat($pp_details.css("marginBottom"));
            $pp_details = $pp_details.clone().addClass(settings.theme).width(t).appendTo(e("body")).css({
                position: "absolute",
                top: -1e4
            });
            detailsHeight += $pp_details.height();
            detailsHeight = detailsHeight <= 34 ? 36 : detailsHeight;
            $pp_details.remove();
            $pp_title = $pp_pic_holder.find(".ppt");
            $pp_title.width(t);
            titleHeight = parseFloat($pp_title.css("marginTop")) + parseFloat($pp_title.css("marginBottom"));
            $pp_title = $pp_title.clone().appendTo(e("body")).css({
                position: "absolute",
                top: -1e4
            });
            titleHeight += $pp_title.height();
            $pp_title.remove();
            l = n + detailsHeight;
            c = t;
            h = l + titleHeight + $pp_pic_holder.find(".pp_top").height() + $pp_pic_holder.find(".pp_bottom").height();
            p = t
        }

        function S(e) {
            if (e.match(/youtube\.com\/watch/i) || e.match(/youtu\.be/i)) {
                return "youtube"
            } else if (e.match(/vimeo\.com/i)) {
                return "vimeo"
            } else if (e.match(/\b.mov\b/i)) {
                return "quicktime"
            } else if (e.match(/\b.swf\b/i)) {
                return "flash"
            } else if (e.match(/\biframe=true\b/i)) {
                return "iframe"
            } else if (e.match(/\bajax=true\b/i)) {
                return "ajax"
            } else if (e.match(/\bcustom=true\b/i)) {
                return "custom"
            } else if (e.substr(0, 1) == "#") {
                return "inline"
            } else {
                return "image"
            }
        }

        function x() {
            if (doresize && typeof $pp_pic_holder != "undefined") {
                scroll_pos = T();
                contentHeight = $pp_pic_holder.height(), contentwidth = $pp_pic_holder.width();
                projectedTop = d / 2 + scroll_pos["scrollTop"] - contentHeight / 2;
                if (projectedTop < 0) projectedTop = 0;
                if (contentHeight > d) return;
                $pp_pic_holder.css({
                    top: projectedTop,
                    left: v / 2 + scroll_pos["scrollLeft"] - contentwidth / 2
                })
            }
        }

        function T() {
            if (self.pageYOffset) {
                return {
                    scrollTop: self.pageYOffset,
                    scrollLeft: self.pageXOffset
                }
            } else if (document.documentElement && document.documentElement.scrollTop) {
                return {
                    scrollTop: document.documentElement.scrollTop,
                    scrollLeft: document.documentElement.scrollLeft
                }
            } else if (document.body) {
                return {
                    scrollTop: document.body.scrollTop,
                    scrollLeft: document.body.scrollLeft
                }
            }
        }

        function N() {
            d = e(window).height(), v = e(window).width();
            if (typeof $pp_overlay != "undefined") $pp_overlay.height(e(document).height()).width(v)
        }

        function C() {
            if (isSet && settings.overlay_gallery && S(pp_images[set_position]) == "image") {
                itemWidth = 52 + 5;
                navWidth = settings.theme == "facebook" || settings.theme == "pp_default" ? 50 : 30;
                itemsPerPage = Math.floor((a["containerWidth"] - 100 - navWidth) / itemWidth);
                itemsPerPage = itemsPerPage < pp_images.length ? itemsPerPage : pp_images.length;
                totalPage = Math.ceil(pp_images.length / itemsPerPage) - 1;
                if (totalPage == 0) {
                    navWidth = 0;
                    $pp_gallery.find(".pp_arrow_next,.pp_arrow_previous").hide()
                } else {
                    $pp_gallery.find(".pp_arrow_next,.pp_arrow_previous").show()
                }
                galleryWidth = itemsPerPage * itemWidth;
                fullGalleryWidth = pp_images.length * itemWidth;
                $pp_gallery.css("margin-left", -(galleryWidth / 2 + navWidth / 2)).find("div:first").width(galleryWidth + 5).find("ul").width(fullGalleryWidth).find("li.selected").removeClass("selected");
                goToPage = Math.floor(set_position / itemsPerPage) < totalPage ? Math.floor(set_position / itemsPerPage) : totalPage;
                e.prettyPhoto.changeGalleryPage(goToPage);
                $pp_gallery_li.filter(":eq(" + set_position + ")").addClass("selected")
            } else {
                $pp_pic_holder.find(".pp_content").unbind("mouseenter mouseleave")
            }
        }

        function k(t) {
            if (settings.social_tools) facebook_like_link = settings.social_tools.replace("{location_href}", encodeURIComponent(location.href));
            settings.markup = settings.markup.replace("{pp_social}", "");
            e("body").append(settings.markup);
            $pp_pic_holder = e(".pp_pic_holder"), $ppt = e(".ppt"), $pp_overlay = e("div.pp_overlay");
            if (isSet && settings.overlay_gallery) {
                currentGalleryPage = 0;
                toInject = "";
                for (var n = 0; n < pp_images.length; n++) {
                    if (!pp_images[n].match(/\b(jpg|jpeg|png|gif)\b/gi)) {
                        classname = "default";
                        img_src = ""
                    } else {
                        classname = "";
                        img_src = pp_images[n]
                    }
                    toInject += "<li class='" + classname + "'><a href='#'><img src='" + img_src + "' width='50' alt='' /></a></li>"
                }
                toInject = settings.gallery_markup.replace(/{gallery}/g, toInject);
                $pp_pic_holder.find("#pp_full_res").after(toInject);
                $pp_gallery = e(".pp_pic_holder .pp_gallery"), $pp_gallery_li = $pp_gallery.find("li");
                $pp_gallery.find(".pp_arrow_next").click(function() {
                    e.prettyPhoto.changeGalleryPage("next");
                    e.prettyPhoto.stopSlideshow();
                    return false
                });
                $pp_gallery.find(".pp_arrow_previous").click(function() {
                    e.prettyPhoto.changeGalleryPage("previous");
                    e.prettyPhoto.stopSlideshow();
                    return false
                });
                $pp_pic_holder.find(".pp_content").hover(function() {
                    $pp_pic_holder.find(".pp_gallery:not(.disabled)").fadeIn()
                }, function() {
                    $pp_pic_holder.find(".pp_gallery:not(.disabled)").fadeOut()
                });
                itemWidth = 52 + 5;
                $pp_gallery_li.each(function(t) {
                    e(this).find("a").click(function() {
                        e.prettyPhoto.changePage(t);
                        e.prettyPhoto.stopSlideshow();
                        return false
                    })
                })
            }
            if (settings.slideshow) {
                $pp_pic_holder.find(".pp_nav").prepend('<a href="#" class="pp_play">Play</a>');
                $pp_pic_holder.find(".pp_nav .pp_play").click(function() {
                    e.prettyPhoto.startSlideshow();
                    return false
                })
            }
            $pp_pic_holder.attr("class", "pp_pic_holder " + settings.theme);
            $pp_overlay.css({
                opacity: 0,
                height: e(document).height(),
                width: e(window).width()
            }).bind("click", function() {
                if (!settings.modal) e.prettyPhoto.close()
            });
            e("a.pp_close").bind("click", function() {
                e.prettyPhoto.close();
                return false
            });
            if (settings.allow_expand) {
                e("a.pp_expand").bind("click", function(t) {
                    if (e(this).hasClass("pp_expand")) {
                        e(this).removeClass("pp_expand").addClass("pp_contract");
                        doresize = false
                    } else {
                        e(this).removeClass("pp_contract").addClass("pp_expand");
                        doresize = true
                    }
                    y(function() {
                        e.prettyPhoto.open()
                    });
                    return false
                })
            }
            $pp_pic_holder.find(".pp_previous, .pp_nav .pp_arrow_previous").bind("click", function() {
                e.prettyPhoto.changePage("previous");
                e.prettyPhoto.stopSlideshow();
                return false
            });
            $pp_pic_holder.find(".pp_next, .pp_nav .pp_arrow_next").bind("click", function() {
                e.prettyPhoto.changePage("next");
                e.prettyPhoto.stopSlideshow();
                return false
            });
            x()
        }
        s = jQuery.extend({
            hook: "rel",
            animation_speed: "fast",
            ajaxcallback: function() {},
            slideshow: 5e3,
            autoplay_slideshow: false,
            opacity: .8,
            show_title: true,
            allow_resize: true,
            allow_expand: true,
            default_width: 500,
            default_height: 344,
            counter_separator_label: "/",
            theme: "pp_default",
            horizontal_padding: 20,
            hideflash: false,
            wmode: "opaque",
            autoplay: true,
            modal: false,
            deeplinking: true,
            overlay_gallery: true,
            overlay_gallery_max: 30,
            keyboard_shortcuts: true,
            changepicturecallback: function() {},
            callback: function() {},
            ie6_fallback: true,
            markup: '<div class="pp_pic_holder"> 						<div class="ppt">Â </div> 						<div class="pp_top"> 							<div class="pp_left"></div> 							<div class="pp_middle"></div> 							<div class="pp_right"></div> 						</div> 						<div class="pp_content_container"> 							<div class="pp_left"> 							<div class="pp_right"> 								<div class="pp_content"> 									<div class="pp_loaderIcon"></div> 									<div class="pp_fade"> 										<a href="#" class="pp_expand" title="Expand the image">Expand</a> 																<div id="pp_full_res"></div> 										<div class="pp_details"> 											<div class="pp_nav"> 												<a href="#" class="pp_arrow_previous">Previous</a> 												<p class="currentTextHolder">0/0</p> 												<a href="#" class="pp_arrow_next">Next</a> 											</div> 											<p class="pp_description"></p> 											<div class="pp_social">{pp_social}</div> 											<a class="pp_close" href="#"><i class="icon-remove"></i></a> 										</div> 									</div> 								</div> 							</div> 							</div> 						</div> 						<div class="pp_bottom"> 							<div class="pp_left"></div> 							<div class="pp_middle"></div> 							<div class="pp_right"></div> 						</div> 					</div> 					<div class="pp_overlay"></div>',
            gallery_markup: '<div class="pp_gallery"> 								<a href="#" class="pp_arrow_previous">Previous</a> 								<div> 									<ul> 										{gallery} 									</ul> 								</div> 								<a href="#" class="pp_arrow_next">Next</a> 							</div>',
            image_markup: '<img id="fullResImage" src="{path}" />',
            flash_markup: '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="{width}" height="{height}"><param name="wmode" value="{wmode}" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="{path}" /><embed src="{path}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="{width}" height="{height}" wmode="{wmode}"></embed></object>',
            quicktime_markup: '<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="{height}" width="{width}"><param name="src" value="{path}"><param name="autoplay" value="{autoplay}"><param name="type" value="video/quicktime"><embed src="{path}" height="{height}" width="{width}" autoplay="{autoplay}" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/"></embed></object>',
            iframe_markup: '<iframe src ="{path}" width="{width}" height="{height}" frameborder="no"></iframe>',
            inline_markup: '<div class="pp_inline">{content}</div>',
            custom_markup: "",
            social_tools: '<div class="twitter"><a href="http://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div><div class="facebook"><iframe src="//www.facebook.com/plugins/like.php?locale=en_US&href={location_href}&layout=button_count&show_faces=true&width=500&action=like&font&colorscheme=light&height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:23px;" allowTransparency="true"></iframe></div>'
        }, s);
        var o = this,
            u = false,
            a, f, l, c, h, p, d = e(window).height(),
            v = e(window).width(),
            m;
        doresize = true, scroll_pos = T();
        e(window).unbind("resize.prettyphoto").bind("resize.prettyphoto", function() {
            x();
            N()
        });
        if (s.keyboard_shortcuts) {
            e(document).unbind("keydown.prettyphoto").bind("keydown.prettyphoto", function(t) {
                if (typeof $pp_pic_holder != "undefined") {
                    if ($pp_pic_holder.is(":visible")) {
                        switch (t.keyCode) {
                            case 37:
                                e.prettyPhoto.changePage("previous");
                                t.preventDefault();
                                break;
                            case 39:
                                e.prettyPhoto.changePage("next");
                                t.preventDefault();
                                break;
                            case 27:
                                if (!settings.modal) e.prettyPhoto.close();
                                t.preventDefault();
                                break
                        }
                    }
                }
            })
        }
        e.prettyPhoto.initialize = function() {
            settings = s;
            if (settings.theme == "pp_default") settings.horizontal_padding = 16;
            theRel = e(this).attr(settings.hook);
            galleryRegExp = /\[(?:.*)\]/;
            isSet = galleryRegExp.exec(theRel) ? true : false;
            pp_images = isSet ? jQuery.map(o, function(t, n) {
                if (e(t).attr(settings.hook).indexOf(theRel) != -1) return e(t).attr("href")
            }) : e.makeArray(e(this).attr("href"));
            pp_titles = isSet ? jQuery.map(o, function(t, n) {
                if (e(t).attr(settings.hook).indexOf(theRel) != -1) return e(t).find("img").attr("alt") ? e(t).find("img").attr("alt") : ""
            }) : e.makeArray(e(this).find("img").attr("alt"));
            pp_descriptions = isSet ? jQuery.map(o, function(t, n) {
                if (e(t).attr(settings.hook).indexOf(theRel) != -1) return e(t).attr("title") ? e(t).attr("title") : ""
            }) : e.makeArray(e(this).attr("title"));
            if (pp_images.length > settings.overlay_gallery_max) settings.overlay_gallery = false;
            set_position = jQuery.inArray(e(this).attr("href"), pp_images);
            rel_index = isSet ? set_position : e("a[" + settings.hook + "^='" + theRel + "']").index(e(this));
            k(this);
            if (settings.allow_resize) e(window).bind("scroll.prettyphoto", function() {
                x()
            });
            e.prettyPhoto.open();
            return false
        };
        e.prettyPhoto.open = function(t) {
            if (typeof settings == "undefined") {
                settings = s;
                pp_images = e.makeArray(arguments[0]);
                pp_titles = arguments[1] ? e.makeArray(arguments[1]) : e.makeArray("");
                pp_descriptions = arguments[2] ? e.makeArray(arguments[2]) : e.makeArray("");
                isSet = pp_images.length > 1 ? true : false;
                set_position = arguments[3] ? arguments[3] : 0;
                k(t.target)
            }
            if (settings.hideflash) e("object,embed,iframe[src*=youtube],iframe[src*=vimeo]").css("visibility", "hidden");
            b(e(pp_images).size());
            e(".pp_loaderIcon").show();
            if (settings.deeplinking) n();
            if (settings.social_tools) {
                facebook_like_link = settings.social_tools.replace("{location_href}", encodeURIComponent(location.href));
                $pp_pic_holder.find(".pp_social").html(facebook_like_link)
            }
            if ($ppt.is(":hidden")) $ppt.css("opacity", 0).show();
            $pp_overlay.show().fadeTo(settings.animation_speed, settings.opacity);
            $pp_pic_holder.find(".currentTextHolder").text(set_position + 1 + settings.counter_separator_label + e(pp_images).size());
            if (typeof pp_descriptions[set_position] != "undefined" && pp_descriptions[set_position] != "") {
                $pp_pic_holder.find(".pp_description").show().html(unescape(pp_descriptions[set_position]))
            } else {
                $pp_pic_holder.find(".pp_description").hide()
            }
            movie_width = parseFloat(i("width", pp_images[set_position])) ? i("width", pp_images[set_position]) : settings.default_width.toString();
            movie_height = parseFloat(i("height", pp_images[set_position])) ? i("height", pp_images[set_position]) : settings.default_height.toString();
            u = false;
            if (movie_height.indexOf("%") != -1) {
                movie_height = parseFloat(e(window).height() * parseFloat(movie_height) / 100 - 150);
                u = true
            }
            if (movie_width.indexOf("%") != -1) {
                movie_width = parseFloat(e(window).width() * parseFloat(movie_width) / 100 - 150);
                u = true
            }
            $pp_pic_holder.fadeIn(function() {
                settings.show_title && pp_titles[set_position] != "" && typeof pp_titles[set_position] != "undefined" ? $ppt.html(unescape(pp_titles[set_position])) : $ppt.html("Â ");
                imgPreloader = "";
                skipInjection = false;
                switch (S(pp_images[set_position])) {
                    case "image":
                        imgPreloader = new Image;
                        nextImage = new Image;
                        if (isSet && set_position < e(pp_images).size() - 1) nextImage.src = pp_images[set_position + 1];
                        prevImage = new Image;
                        if (isSet && pp_images[set_position - 1]) prevImage.src = pp_images[set_position - 1];
                        $pp_pic_holder.find("#pp_full_res")[0].innerHTML = settings.image_markup.replace(/{path}/g, pp_images[set_position]);
                        imgPreloader.onload = function() {
                            a = w(imgPreloader.width, imgPreloader.height);
                            g()
                        };
                        imgPreloader.onerror = function() {
                            alert("Image cannot be loaded. Make sure the path is correct and image exist.");
                            e.prettyPhoto.close()
                        };
                        imgPreloader.src = pp_images[set_position];
                        break;
                    case "youtube":
                        a = w(movie_width, movie_height);
                        movie_id = i("v", pp_images[set_position]);
                        if (movie_id == "") {
                            movie_id = pp_images[set_position].split("youtu.be/");
                            movie_id = movie_id[1];
                            if (movie_id.indexOf("?") > 0) movie_id = movie_id.substr(0, movie_id.indexOf("?"));
                            if (movie_id.indexOf("&") > 0) movie_id = movie_id.substr(0, movie_id.indexOf("&"))
                        }
                        movie = "http://www.youtube.com/embed/" + movie_id;
                        i("rel", pp_images[set_position]) ? movie += "?rel=" + i("rel", pp_images[set_position]) : movie += "?rel=1";
                        if (settings.autoplay) movie += "&autoplay=1";
                        toInject = settings.iframe_markup.replace(/{width}/g, a["width"]).replace(/{height}/g, a["height"]).replace(/{wmode}/g, settings.wmode).replace(/{path}/g, movie);
                        break;
                    case "vimeo":
                        a = w(movie_width, movie_height);
                        movie_id = pp_images[set_position];
                        var t = /http(s?):\/\/(www\.)?vimeo.com\/(\d+)/;
                        var n = movie_id.match(t);
                        movie = "http://player.vimeo.com/video/" + n[3] + "?title=0&byline=0&portrait=0";
                        if (settings.autoplay) movie += "&autoplay=1;";
                        vimeo_width = a["width"] + "/embed/?moog_width=" + a["width"];
                        toInject = settings.iframe_markup.replace(/{width}/g, vimeo_width).replace(/{height}/g, a["height"]).replace(/{path}/g, movie);
                        break;
                    case "quicktime":
                        a = w(movie_width, movie_height);
                        a["height"] += 15;
                        a["contentHeight"] += 15;
                        a["containerHeight"] += 15;
                        toInject = settings.quicktime_markup.replace(/{width}/g, a["width"]).replace(/{height}/g, a["height"]).replace(/{wmode}/g, settings.wmode).replace(/{path}/g, pp_images[set_position]).replace(/{autoplay}/g, settings.autoplay);
                        break;
                    case "flash":
                        a = w(movie_width, movie_height);
                        flash_vars = pp_images[set_position];
                        flash_vars = flash_vars.substring(pp_images[set_position].indexOf("flashvars") + 10, pp_images[set_position].length);
                        filename = pp_images[set_position];
                        filename = filename.substring(0, filename.indexOf("?"));
                        toInject = settings.flash_markup.replace(/{width}/g, a["width"]).replace(/{height}/g, a["height"]).replace(/{wmode}/g, settings.wmode).replace(/{path}/g, filename + "?" + flash_vars);
                        break;
                    case "iframe":
                        a = w(movie_width, movie_height);
                        frame_url = pp_images[set_position];
                        frame_url = frame_url.substr(0, frame_url.indexOf("iframe") - 1);
                        toInject = settings.iframe_markup.replace(/{width}/g, a["width"]).replace(/{height}/g, a["height"]).replace(/{path}/g, frame_url);
                        break;
                    case "ajax":
                        doresize = false;
                        a = w(movie_width, movie_height);
                        doresize = true;
                        skipInjection = true;
                        e.get(pp_images[set_position], function(e) {
                            toInject = settings.inline_markup.replace(/{content}/g, e);
                            $pp_pic_holder.find("#pp_full_res")[0].innerHTML = toInject;
                            g()
                        });
                        break;
                    case "custom":
                        a = w(movie_width, movie_height);
                        toInject = settings.custom_markup;
                        break;
                    case "inline":
                        myClone = e(pp_images[set_position]).clone().append('<br clear="all" />').css({
                            width: settings.default_width
                        }).wrapInner('<div id="pp_full_res"><div class="pp_inline"></div></div>').appendTo(e("body")).show();
                        doresize = false;
                        a = w(e(myClone).width(), e(myClone).height());
                        doresize = true;
                        e(myClone).remove();
                        toInject = settings.inline_markup.replace(/{content}/g, e(pp_images[set_position]).html());
                        break
                }
                if (!imgPreloader && !skipInjection) {
                    $pp_pic_holder.find("#pp_full_res")[0].innerHTML = toInject;
                    g()
                }
            });
            return false
        };
        e.prettyPhoto.changePage = function(t) {
            currentGalleryPage = 0;
            if (t == "previous") {
                set_position--;
                if (set_position < 0) set_position = e(pp_images).size() - 1
            } else if (t == "next") {
                set_position++;
                if (set_position > e(pp_images).size() - 1) set_position = 0
            } else {
                set_position = t
            }
            rel_index = set_position;
            if (!doresize) doresize = true;
            if (settings.allow_expand) {
                e(".pp_contract").removeClass("pp_contract").addClass("pp_expand")
            }
            y(function() {
                e.prettyPhoto.open()
            })
        };
        e.prettyPhoto.changeGalleryPage = function(e) {
            if (e == "next") {
                currentGalleryPage++;
                if (currentGalleryPage > totalPage) currentGalleryPage = 0
            } else if (e == "previous") {
                currentGalleryPage--;
                if (currentGalleryPage < 0) currentGalleryPage = totalPage
            } else {
                currentGalleryPage = e
            }
            slide_speed = e == "next" || e == "previous" ? settings.animation_speed : 0;
            slide_to = currentGalleryPage * itemsPerPage * itemWidth;
            $pp_gallery.find("ul").animate({
                left: -slide_to
            }, slide_speed)
        };
        e.prettyPhoto.startSlideshow = function() {
            if (typeof m == "undefined") {
                $pp_pic_holder.find(".pp_play").unbind("click").removeClass("pp_play").addClass("pp_pause").click(function() {
                    e.prettyPhoto.stopSlideshow();
                    return false
                });
                m = setInterval(e.prettyPhoto.startSlideshow, settings.slideshow)
            } else {
                e.prettyPhoto.changePage("next")
            }
        };
        e.prettyPhoto.stopSlideshow = function() {
            $pp_pic_holder.find(".pp_pause").unbind("click").removeClass("pp_pause").addClass("pp_play").click(function() {
                e.prettyPhoto.startSlideshow();
                return false
            });
            clearInterval(m);
            m = undefined
        };
        e.prettyPhoto.close = function() {
            if ($pp_overlay.is(":animated")) return;
            e.prettyPhoto.stopSlideshow();
            $pp_pic_holder.stop().find("object,embed").css("visibility", "hidden");
            e("div.pp_pic_holder,div.ppt,.pp_fade").fadeOut(settings.animation_speed, function() {
                e(this).remove()
            });
            $pp_overlay.fadeOut(settings.animation_speed, function() {
                if (settings.hideflash) e("object,embed,iframe[src*=youtube],iframe[src*=vimeo]").css("visibility", "visible");
                e(this).remove();
                e(window).unbind("scroll.prettyphoto");
                r();
                settings.callback();
                doresize = true;
                f = false;
                delete settings
            })
        };
        if (!pp_alreadyInitialized && t()) {
            pp_alreadyInitialized = true;
            hashIndex = t();
            hashRel = hashIndex;
            hashIndex = hashIndex.substring(hashIndex.indexOf("/") + 1, hashIndex.length - 1);
            hashRel = hashRel.substring(0, hashRel.indexOf("/"));
            setTimeout(function() {
                e("a[" + s.hook + "^='" + hashRel + "']:eq(" + hashIndex + ")").trigger("click")
            }, 50)
        }
        return this.unbind("click.prettyphoto").bind("click.prettyphoto", e.prettyPhoto.initialize)
    };
})(jQuery);
var pp_alreadyInitialized = false


/**
 *   Unslider by @idiot
 */
 
$ = jQuery.noConflict();
/**
 *   Unslider by @idiot and @damirfoy
 *   Contributors:
 *   - @ShamoX
 *
 */

(function($, f) {
	var Unslider = function() {
		//  Object clone
		var _ = this;

		//  Set some options
		_.o = {
			speed: 500,     // animation speed, false for no transition (integer or boolean)
			delay: 3000,    // delay between slides, false for no autoplay (integer or boolean)
			init: 0,        // init delay, false for no delay (integer or boolean)
			pause: !f,      // pause on hover (boolean)
			loop: !f,       // infinitely looping (boolean)
			keys: f,        // keyboard shortcuts (boolean)
			dots: f,        // display dots pagination (boolean)
			arrows: f,      // display prev/next arrows (boolean)
			prev: '&larr;', // text or html inside prev button (string)
			next: '&rarr;', // same as for prev option
			fluid: f,       // is it a percentage width? (boolean)
			starting: f,    // invoke before animation (function with argument)
			complete: f,    // invoke after animation (function with argument)
			items: '>ul',   // slides container selector
			item: '>li',    // slidable items selector
			easing: 'swing',// easing function to use for animation
			autoplay: true  // enable autoplay on initialisation
		};

		_.init = function(el, o) {
			//  Check whether we're passing any options in to Unslider
			_.o = $.extend(_.o, o);

			_.el = el;
			_.ul = el.find(_.o.items);
			_.max = [el.outerWidth() | 0, el.outerHeight() | 0];
			_.li = _.ul.find(_.o.item).each(function(index) {
				var me = $(this),
					width = me.outerWidth(),
					height = me.outerHeight();

				//  Set the max values
				if (width > _.max[0]) _.max[0] = width;
				if (height > _.max[1]) _.max[1] = height;
			});


			//  Cached vars
			var o = _.o,
				ul = _.ul,
				li = _.li,
				len = li.length;

			//  Current indeed
			_.i = 0;

			//  Set the main element
			el.css({width: _.max[0], height: li.first().outerHeight(), overflow: 'hidden'});

			//  Set the relative widths
			ul.css({position: 'relative', left: 0, width: (len * 100) + '%'});
			if(o.fluid) {
				li.css({'float': 'left', width: (100 / len) + '%'});
			} else {
				li.css({'float': 'left', width: (_.max[0]) + 'px'});
			}

			//  Autoslide
			o.autoplay && setTimeout(function() {
				if (o.delay | 0) {
					_.play();

					if (o.pause) {
						el.on('mouseover mouseout', function(e) {
							_.stop();
							e.type === 'mouseout' && _.play();
						});
					};
				};
			}, o.init | 0);

			//  Keypresses
			if (o.keys) {
				$(document).keydown(function(e) {
					switch(e.which) {
						case 37:
							_.prev(); // Left
							break;
						case 39:
							_.next(); // Right
							break;
						case 27:
							_.stop(); // Esc
							break;
					};
				});
			};

			//  Dot pagination
			o.dots && nav('dot');

			//  Arrows support
			o.arrows && nav('arrow');

			//  Patch for fluid-width sliders. Screw those guys.
			o.fluid && $(window).resize(function() {
				_.r && clearTimeout(_.r);

				_.r = setTimeout(function() {
					var styl = {height: li.eq(_.i).outerHeight()},
						width = el.outerWidth();

					ul.css(styl);
					styl['width'] = Math.min(Math.round((width / el.parent().width()) * 100), 100) + '%';
					el.css(styl);
					li.css({ width: width + 'px' });
				}, 50);
			}).resize();

			//  Move support
			if ($.event.special['move'] || $.Event('move')) {
				el.on('movestart', function(e) {
					if ((e.distX > e.distY && e.distX < -e.distY) || (e.distX < e.distY && e.distX > -e.distY)) {
						e.preventDefault();
					}else{
						el.data("left", _.ul.offset().left / el.width() * 100);
					}
				}).on('move', function(e) {
					var left = 100 * e.distX / el.width();
				        var leftDelta = 100 * e.deltaX / el.width();
					_.ul[0].style.left = parseInt(_.ul[0].style.left.replace("%", ""))+leftDelta+"%";

					_.ul.data("left", left);
				}).on('moveend', function(e) {
					var left = _.ul.data("left");
					if (Math.abs(left) > 30){
						var i = left > 0 ? _.i-1 : _.i+1;
						if (i < 0 || i >= len) i = _.i;
						_.to(i);
					}else{
						_.to(_.i);
					}
				});
			};

			return _;
		};

		//  Move Unslider to a slide index
		_.to = function(index, callback) {
			if (_.t) {
				_.stop();
				_.play();
	                }
			var o = _.o,
				el = _.el,
				ul = _.ul,
				li = _.li,
				current = _.i,
				target = li.eq(index);

			$.isFunction(o.starting) && !callback && o.starting(el, li.eq(current));

			//  To slide or not to slide
			if ((!target.length || index < 0) && o.loop === f) return;

			//  Check if it's out of bounds
			if (!target.length) index = 0;
			if (index < 0) index = li.length - 1;
			target = li.eq(index);

			var speed = callback ? 5 : o.speed | 0,
				easing = o.easing,
				obj = {height: target.outerHeight()};

			if (!ul.queue('fx').length) {
				//  Handle those pesky dots
				el.find('.dot').eq(index).addClass('active').siblings().removeClass('active');

				el.animate(obj, speed, easing) && ul.animate($.extend({left: '-' + index + '00%'}, obj), speed, easing, function(data) {
					_.i = index;

					$.isFunction(o.complete) && !callback && o.complete(el, target);
				});
			};
		};

		//  Autoplay functionality
		_.play = function() {
			_.t = setInterval(function() {
				_.to(_.i + 1);
			}, _.o.delay | 0);
		};

		//  Stop autoplay
		_.stop = function() {
			_.t = clearInterval(_.t);
			return _;
		};

		//  Move to previous/next slide
		_.next = function() {
			return _.stop().to(_.i + 1);
		};

		_.prev = function() {
			return _.stop().to(_.i - 1);
		};

		//  Create dots and arrows
		function nav(name, html) {
			if (name == 'dot') {
				html = '<ol class="dots">';
					$.each(_.li, function(index) {
						html += '<li class="' + (index === _.i ? name + ' active' : name) + '">' + ++index + '</li>';
					});
				html += '</ol>';
			} else {
				html = '<div class="';
				html = html + name + 's">' + html + name + ' prev">' + _.o.prev + '</div>' + html + name + ' next">' + _.o.next + '</div></div>';
			};

			_.el.addClass('has-' + name + 's').append(html).find('.' + name).click(function() {
				var me = $(this);
				me.hasClass('dot') ? _.stop().to(me.index()) : me.hasClass('prev') ? _.prev() : _.next();
			});
		};
	};

	//  Create a jQuery plugin
	$.fn.unslider = function(o) {
		var len = this.length;

		//  Enable multiple-slider support
		return this.each(function(index) {
			//  Cache a copy of $(this), so it
			var me = $(this),
				key = 'unslider' + (len > 1 ? '-' + ++index : ''),
				instance = (new Unslider).init(me, o);

			//  Invoke an Unslider instance
			me.data(key, instance).data('key', key);
		});
	};

	Unslider.version = "1.0.0";
})(jQuery, false);
