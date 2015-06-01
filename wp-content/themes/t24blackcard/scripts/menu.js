//(function(e){"use strict";function t(e){return new RegExp("(^|\\s+)"+e+"(\\s+|$)")}function s(e,t){var s=n(e,t)?i:r;s(e,t)}var n,r,i;if("classList"in document.documentElement){n=function(e,t){return e.classList.contains(t)};r=function(e,t){e.classList.add(t)};i=function(e,t){e.classList.remove(t)}}else{n=function(e,n){return t(n).test(e.className)};r=function(e,t){if(!n(e,t)){e.className=e.className+" "+t}};i=function(e,n){e.className=e.className.replace(t(n)," ")}}var o={hasClass:n,addClass:r,removeClass:i,toggleClass:s,has:n,add:r,remove:i,toggle:s};if(typeof define==="function"&&define.amd){define(o)}else{e.classie=o}})(window);(function(){function r(){if(classie.has(t,"open")){classie.remove(t,"open");classie.add(t,"close");var e=function(n){if(support.transitions){if(n.propertyName!=="visibility")return;this.removeEventListener(transEndEventName,e)}classie.remove(t,"close")};if(support.transitions){t.addEventListener(transEndEventName,e)}else{e()}}else if(!classie.has(t,"close")){classie.add(t,"open")}}var e=document.getElementById("open-overlay"),z=document.getElementById("open-menu"),t=document.querySelector("div.overlay-menu"),n=t.querySelector("button.overlay-menu-close");transEndEventNames={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",msTransition:"MSTransitionEnd",transition:"transitionend"},transEndEventName=transEndEventNames[Modernizr.prefixed("transition")],support={transitions:Modernizr.csstransitions};e.addEventListener("click",r);n.addEventListener("click",r)})()

(function(e) {
    "use strict";

    function t(e) {
        return new RegExp("(^|\\s+)" + e + "(\\s+|$)")
    }

    function s(e, t) {
        var s = n(e, t) ? i : r;
        s(e, t)
    }
    var n, r, i;
    if ("classList" in document.documentElement) {
        n = function(e, t) {
            return e.classList.contains(t)
        };
        r = function(e, t) {
            e.classList.add(t)
        };
        i = function(e, t) {
            e.classList.remove(t)
        }
    } else {
        n = function(e, n) {
            return t(n).test(e.className)
        };
        r = function(e, t) {
            if (!n(e, t)) {
                e.className = e.className + " " + t
            }
        };
        i = function(e, n) {
            e.className = e.className.replace(t(n), " ")
        }
    }
    var o = {
        hasClass: n,
        addClass: r,
        removeClass: i,
        toggleClass: s,
        has: n,
        add: r,
        remove: i,
        toggle: s
    };
    if (typeof define === "function" && define.amd) {
        define(o)
    } else {
        e.classie = o
    }
})(window);
(function() {
    function r() {
        if (classie.has(t, "open")) {
            classie.remove(t, "open");
            classie.add(t, "close");
            var e = function(n) {
                if (support.transitions) {
                    if (n.propertyName !== "visibility") return;
                    this.removeEventListener(transEndEventName, e)
                }
                classie.remove(t, "close")
            };
            if (support.transitions) {
                t.addEventListener(transEndEventName, e)
            } else {
                e()
            }
        } else if (!classie.has(t, "close")) {
            classie.add(t, "open")
        }
    }
    var e = document.getElementById("open-overlay"),
        z = document.getElementById("open-menu"),
        t = document.querySelector("div.overlay-menu"),
        n = t.querySelector("button.overlay-menu-close");
    transEndEventNames = {
        WebkitTransition: "webkitTransitionEnd",
        MozTransition: "transitionend",
        OTransition: "oTransitionEnd",
        msTransition: "MSTransitionEnd",
        transition: "transitionend"
    }, transEndEventName = transEndEventNames[Modernizr.prefixed("transition")], support = {
        transitions: Modernizr.csstransitions
    };
    try{
		e.addEventListener("click", r);
		n.addEventListener("click", r);
	}catch(err){}
})()
