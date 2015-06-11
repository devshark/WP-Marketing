function onloadfunc() {
    $('.controls ul li').click(function () {
        var slide = $(this).attr('data-slide');
    });
    $('#header-links li a').mouseenter(function () {
        $(this).parent().css({
            "background": "#ea6d01"
        });
    });
    $('#header-links li a').mouseout(function () {
        $(this).parent().css({
            "background": "none"
        });
    });
    window.windowWidth = $(window).width();
    window.topbannerWidth = windowWidth * 3;
    $('#topbanner .slideholder').css({
        "width": window.topbannerWidth
    });
    $('#topbanner .slideholder').children().css({
        "width": window.windowWidth
    });
    $(window).resize(function () {
        window.windowWidth = $(window).width();
        window.topbannerWidth = windowWidth * 3;
        $('#topbanner .slideholder').css({
            "width": window.topbannerWidth
        });
        $('#topbanner .slideholder').children().css({
            "width": window.windowWidth
        });
    });

    function slideShow() {
        var curPos = $('#topbanner .slideholder').position();
        if (Math.abs(Math.ceil(curPos.left)) + Math.ceil(windowWidth) >= $('#topbanner .slideholder').width()) {
            var newPos = 0;
        } else if (curPos >= 0) {
            var newPos = (Math.ceil(curPos.left)) + (Math.ceil("-" + windowWidth));
        } else {
            var newPos = (Math.ceil(curPos.left)) - (Math.ceil(windowWidth));
        }
        $('#topbanner .slideholder').animate({
            "left": newPos
        }, {
            duration: 500,
            complete: function () {}
        });
    }
    $('#topbanner .controls a').click(function () {
        alert("lolcakes");
    });
    $("#topbanner").mouseenter(function () {
        stopTimer()
    });
    $("#topbanner").mouseleave(function () {
        startTimer()
    });
    var slideTimer;

    function startTimer() {
        slideTimer = window.setInterval(function () {
            slideShow()
        }, 6000);
    }
    startTimer()

    function stopTimer() {
        window.clearInterval(slideTimer);
    }

    function filterPath(string) {
        return string.replace(/^\//, '').replace(/(index|default).[a-zA-Z]{3,4}$/, '').replace(/\/$/, '');
    }
    var locationPath = filterPath(location.pathname);
    var scrollElem = scrollableElement('html', 'body');
    // Any links with hash tags in them (can't do ^= because of fully qualified URL potential)
    $('a[href*=#]').each(function () {
        // Ensure it's a same-page link
        var thisPath = filterPath(this.pathname) || locationPath;
        if (locationPath == thisPath && (location.hostname == this.hostname || !this.hostname) && this.hash.replace(/#/, '')) {
            // Ensure target exists
            var $target = $(this.hash),
                target = this.hash;
            if (target) {
                // Find location of target
                var targetOffset = Math.ceil(($target.offset().top) - 137);
                $(this).on('click', function (event) {
                    // Prevent jump-down
                    event.preventDefault();
                    // Animate to target
                    $(scrollElem).animate({
                        scrollTop: targetOffset + "px"
                    }, 1000, function () {
                        // Set hash in URL after animation successful
                        //location.hash = target;
                    });
                });
            }
        }
    });
    // Use the first element that is "scrollable"  (cross-browser fix?)
    function scrollableElement(els) {
        for (var i = 0, argLength = arguments.length; i < argLength; i++) {
            var el = arguments[i],
                $scrollElement = $(el);
            if ($scrollElement.scrollTop() > 0) {
                return el;
            } else {
                $scrollElement.scrollTop(1);
                var isScrollable = $scrollElement.scrollTop() > 0;
                $scrollElement.scrollTop(0);
                if (isScrollable) {
                    return el;
                }
            }
        }
        return [];
    }
}
