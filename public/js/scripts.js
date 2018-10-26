/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 51);
/******/ })
/************************************************************************/
/******/ ({

/***/ 51:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(52);


/***/ }),

/***/ 52:
/***/ (function(module, exports) {

(function () {
    var a,
        b,
        c,
        d,
        e,
        f = function f(a, b) {
        return function () {
            return a.apply(b, arguments);
        };
    },
        g = [].indexOf || function (a) {
        for (var b = 0, c = this.length; c > b; b++) {
            if (b in this && this[b] === a) return b;
        }return -1;
    };
    b = function () {
        function a() {}
        return a.prototype.extend = function (a, b) {
            var c, d;
            for (c in b) {
                d = b[c], null == a[c] && (a[c] = d);
            }return a;
        }, a.prototype.isMobile = function (a) {
            return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)
            );
        }, a.prototype.createEvent = function (a, b, c, d) {
            var e;
            return null == b && (b = !1), null == c && (c = !1), null == d && (d = null), null != document.createEvent ? (e = document.createEvent("CustomEvent"), e.initCustomEvent(a, b, c, d)) : null != document.createEventObject ? (e = document.createEventObject(), e.eventType = a) : e.eventName = a, e;
        }, a.prototype.emitEvent = function (a, b) {
            return null != a.dispatchEvent ? a.dispatchEvent(b) : b in (null != a) ? a[b]() : "on" + b in (null != a) ? a["on" + b]() : void 0;
        }, a.prototype.addEvent = function (a, b, c) {
            return null != a.addEventListener ? a.addEventListener(b, c, !1) : null != a.attachEvent ? a.attachEvent("on" + b, c) : a[b] = c;
        }, a.prototype.removeEvent = function (a, b, c) {
            return null != a.removeEventListener ? a.removeEventListener(b, c, !1) : null != a.detachEvent ? a.detachEvent("on" + b, c) : delete a[b];
        }, a.prototype.innerHeight = function () {
            return "innerHeight" in window ? window.innerHeight : document.documentElement.clientHeight;
        }, a;
    }(), c = this.WeakMap || this.MozWeakMap || (c = function () {
        function a() {
            this.keys = [], this.values = [];
        }
        return a.prototype.get = function (a) {
            var b, c, d, e, f;
            for (f = this.keys, b = d = 0, e = f.length; e > d; b = ++d) {
                if (c = f[b], c === a) return this.values[b];
            }
        }, a.prototype.set = function (a, b) {
            var c, d, e, f, g;
            for (g = this.keys, c = e = 0, f = g.length; f > e; c = ++e) {
                if (d = g[c], d === a) return void (this.values[c] = b);
            }return this.keys.push(a), this.values.push(b);
        }, a;
    }()), a = this.MutationObserver || this.WebkitMutationObserver || this.MozMutationObserver || (a = function () {
        function a() {
            "undefined" != typeof console && null !== console && console.warn("MutationObserver is not supported by your browser."), "undefined" != typeof console && null !== console && console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.");
        }
        return a.notSupported = !0, a.prototype.observe = function () {}, a;
    }()), d = this.getComputedStyle || function (a) {
        return this.getPropertyValue = function (b) {
            var c;
            return "float" === b && (b = "styleFloat"), e.test(b) && b.replace(e, function (a, b) {
                return b.toUpperCase();
            }), (null != (c = a.currentStyle) ? c[b] : void 0) || null;
        }, this;
    }, e = /(\-([a-z]){1})/g, this.WOW = function () {
        function e(a) {
            null == a && (a = {}), this.scrollCallback = f(this.scrollCallback, this), this.scrollHandler = f(this.scrollHandler, this), this.resetAnimation = f(this.resetAnimation, this), this.start = f(this.start, this), this.scrolled = !0, this.config = this.util().extend(a, this.defaults), this.animationNameCache = new c(), this.wowEvent = this.util().createEvent(this.config.boxClass);
        }
        return e.prototype.defaults = {
            boxClass: "wow",
            animateClass: "animated",
            offset: 0,
            mobile: !0,
            live: !0,
            callback: null
        }, e.prototype.init = function () {
            var a;
            return this.element = window.document.documentElement, "interactive" === (a = document.readyState) || "complete" === a ? this.start() : this.util().addEvent(document, "DOMContentLoaded", this.start), this.finished = [];
        }, e.prototype.start = function () {
            var b, c, d, e;
            if (this.stopped = !1, this.boxes = function () {
                var a, c, d, e;
                for (d = this.element.querySelectorAll("." + this.config.boxClass), e = [], a = 0, c = d.length; c > a; a++) {
                    b = d[a], e.push(b);
                }return e;
            }.call(this), this.all = function () {
                var a, c, d, e;
                for (d = this.boxes, e = [], a = 0, c = d.length; c > a; a++) {
                    b = d[a], e.push(b);
                }return e;
            }.call(this), this.boxes.length) if (this.disabled()) this.resetStyle();else for (e = this.boxes, c = 0, d = e.length; d > c; c++) {
                b = e[c], this.applyStyle(b, !0);
            }return this.disabled() || (this.util().addEvent(window, "scroll", this.scrollHandler), this.util().addEvent(window, "resize", this.scrollHandler), this.interval = setInterval(this.scrollCallback, 50)), this.config.live ? new a(function (a) {
                return function (b) {
                    var c, d, e, f, g;
                    for (g = [], c = 0, d = b.length; d > c; c++) {
                        f = b[c], g.push(function () {
                            var a, b, c, d;
                            for (c = f.addedNodes || [], d = [], a = 0, b = c.length; b > a; a++) {
                                e = c[a], d.push(this.doSync(e));
                            }return d;
                        }.call(a));
                    }return g;
                };
            }(this)).observe(document.body, {
                childList: !0,
                subtree: !0
            }) : void 0;
        }, e.prototype.stop = function () {
            return this.stopped = !0, this.util().removeEvent(window, "scroll", this.scrollHandler), this.util().removeEvent(window, "resize", this.scrollHandler), null != this.interval ? clearInterval(this.interval) : void 0;
        }, e.prototype.sync = function () {
            return a.notSupported ? this.doSync(this.element) : void 0;
        }, e.prototype.doSync = function (a) {
            var b, c, d, e, f;
            if (null == a && (a = this.element), 1 === a.nodeType) {
                for (a = a.parentNode || a, e = a.querySelectorAll("." + this.config.boxClass), f = [], c = 0, d = e.length; d > c; c++) {
                    b = e[c], g.call(this.all, b) < 0 ? (this.boxes.push(b), this.all.push(b), this.stopped || this.disabled() ? this.resetStyle() : this.applyStyle(b, !0), f.push(this.scrolled = !0)) : f.push(void 0);
                }return f;
            }
        }, e.prototype.show = function (a) {
            return this.applyStyle(a), a.className = a.className + " " + this.config.animateClass, null != this.config.callback && this.config.callback(a), this.util().emitEvent(a, this.wowEvent), this.util().addEvent(a, "animationend", this.resetAnimation), this.util().addEvent(a, "oanimationend", this.resetAnimation), this.util().addEvent(a, "webkitAnimationEnd", this.resetAnimation), this.util().addEvent(a, "MSAnimationEnd", this.resetAnimation), a;
        }, e.prototype.applyStyle = function (a, b) {
            var c, d, e;
            return d = a.getAttribute("data-wow-duration"), c = a.getAttribute("data-wow-delay"), e = a.getAttribute("data-wow-iteration"), this.animate(function (f) {
                return function () {
                    return f.customStyle(a, b, d, c, e);
                };
            }(this));
        }, e.prototype.animate = function () {
            return "requestAnimationFrame" in window ? function (a) {
                return window.requestAnimationFrame(a);
            } : function (a) {
                return a();
            };
        }(), e.prototype.resetStyle = function () {
            var a, b, c, d, e;
            for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++) {
                a = d[b], e.push(a.style.visibility = "visible");
            }return e;
        }, e.prototype.resetAnimation = function (a) {
            var b;
            return a.type.toLowerCase().indexOf("animationend") >= 0 ? (b = a.target || a.srcElement, b.className = b.className.replace(this.config.animateClass, "").trim()) : void 0;
        }, e.prototype.customStyle = function (a, b, c, d, e) {
            return b && this.cacheAnimationName(a), a.style.visibility = b ? "hidden" : "visible", c && this.vendorSet(a.style, {
                animationDuration: c
            }), d && this.vendorSet(a.style, {
                animationDelay: d
            }), e && this.vendorSet(a.style, {
                animationIterationCount: e
            }), this.vendorSet(a.style, {
                animationName: b ? "none" : this.cachedAnimationName(a)
            }), a;
        }, e.prototype.vendors = ["moz", "webkit"], e.prototype.vendorSet = function (a, b) {
            var c, d, e, f;
            d = [];
            for (c in b) {
                e = b[c], a["" + c] = e, d.push(function () {
                    var b, d, g, h;
                    for (g = this.vendors, h = [], b = 0, d = g.length; d > b; b++) {
                        f = g[b], h.push(a["" + f + c.charAt(0).toUpperCase() + c.substr(1)] = e);
                    }return h;
                }.call(this));
            }return d;
        }, e.prototype.vendorCSS = function (a, b) {
            var c, e, f, g, h, i;
            for (h = d(a), g = h.getPropertyCSSValue(b), f = this.vendors, c = 0, e = f.length; e > c; c++) {
                i = f[c], g = g || h.getPropertyCSSValue("-" + i + "-" + b);
            }return g;
        }, e.prototype.animationName = function (a) {
            var b;
            try {
                b = this.vendorCSS(a, "animation-name").cssText;
            } catch (c) {
                b = d(a).getPropertyValue("animation-name");
            }
            return "none" === b ? "" : b;
        }, e.prototype.cacheAnimationName = function (a) {
            return this.animationNameCache.set(a, this.animationName(a));
        }, e.prototype.cachedAnimationName = function (a) {
            return this.animationNameCache.get(a);
        }, e.prototype.scrollHandler = function () {
            return this.scrolled = !0;
        }, e.prototype.scrollCallback = function () {
            var a;
            return !this.scrolled || (this.scrolled = !1, this.boxes = function () {
                var b, c, d, e;
                for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++) {
                    a = d[b], a && (this.isVisible(a) ? this.show(a) : e.push(a));
                }return e;
            }.call(this), this.boxes.length || this.config.live) ? void 0 : this.stop();
        }, e.prototype.offsetTop = function (a) {
            for (var b; void 0 === a.offsetTop;) {
                a = a.parentNode;
            }for (b = a.offsetTop; a = a.offsetParent;) {
                b += a.offsetTop;
            }return b;
        }, e.prototype.isVisible = function (a) {
            var b, c, d, e, f;
            return c = a.getAttribute("data-wow-offset") || this.config.offset, f = window.pageYOffset, e = f + Math.min(this.element.clientHeight, this.util().innerHeight()) - c, d = this.offsetTop(a), b = d + a.clientHeight, e >= d && b >= f;
        }, e.prototype.util = function () {
            return null != this._util ? this._util : this._util = new b();
        }, e.prototype.disabled = function () {
            return !this.config.mobile && this.util().isMobile(navigator.userAgent);
        }, e;
    }();
}).call(this);
/***************************************************************************************************************
||||||||||||||||||||||||||||         CUSTOM SCRIPT FOR CHARITY HOME            ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************
||||||||||||||||||||||||||||              TABLE OF CONTENT                  ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************
****************************************************************************************************************

1 revolutionSliderActiver
2 galleryMasonaryLayout
3 LightBox / Fancybox
4 Gallery Filters
5 accrodion
6 pieChart RoundCircle
7 progressBarConfig
8 teamCarosule
9 testiCarosule
10 clientsCarosule
11 owlCarosule
12 CounterNumberChanger
13 stickyHeader
14 contactFormValidation
15 event slider
16 Common CssJs
17 selectInput
18 datePicker
19 gMap
20 mobileMenu

****************************************************************************************************************
||||||||||||||||||||||||||||            End TABLE OF CONTENT                ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************/

"use strict";

// 1 revolutionSliderActiver
function revolutionSliderActiver() {
    if ($('.rev_slider_wrapper #slider1').length) {
        $("#slider1").revolution({
            sliderType: "standard",
            sliderLayout: "auto",
            delay: 15000,
            navigation: {
                arrows: {
                    enable: true
                }
            },
            gridwidth: 1170,
            gridheight: 770
        });
    };
}

// 2 galleryMasonaryLayout
function galleryMasonaryLayout() {
    if ($('.img-masonary').length) {
        $('.img-masonary').isotope({
            layoutMode: 'masonry'
        });
    }
}

// 3 LightBox / Fancybox
if ($('.lightbox-image').length) {
    $('.lightbox-image').fancybox({
        openEffect: 'elastic',
        closeEffect: 'elastic',
        helpers: {
            media: {}
        }
    });
}

// 4 Gallery Filters
if ($('.filter-list').length) {
    $('.filter-list').mixItUp({});
}

// 5 accrodion
function accrodion() {
    if ($('.accrodion-grp').length) {
        $('.accrodion-grp').each(function () {
            var accrodionName = $(this).data('grp-name');
            var Self = $(this);
            Self.addClass(accrodionName);
            Self.find('.accrodion .accrodion-content').hide();
            Self.find('.accrodion.active').find('.accrodion-content').show();
            Self.find('.accrodion').each(function () {
                $(this).find('.accrodion-title').on('click', function () {
                    if ($(this).parent().hasClass('active') === false) {
                        $('.accrodion-grp.' + accrodionName).find('.accrodion').removeClass('active');
                        $('.accrodion-grp.' + accrodionName).find('.accrodion').find('.accrodion-content').slideUp();
                        $(this).parent().addClass('active');
                        $(this).parent().find('.accrodion-content').slideDown();
                    };
                });
            });
        });
    };
}

// 6 pieChart RoundCircle
function expertizeRoundCircle() {
    var rounderContainer = $('.piechart.style-one');
    if (rounderContainer.length) {
        rounderContainer.each(function () {
            var Self = $(this);
            var value = Self.data('value');
            var size = Self.parent().width();
            var color = Self.data('fg-color');

            Self.find('span').each(function () {
                var expertCount = $(this);
                expertCount.appear(function () {
                    expertCount.countTo({
                        from: 1,
                        to: value * 100,
                        speed: 3000
                    });
                });
            });
            Self.appear(function () {
                Self.circleProgress({
                    value: value,
                    size: 142,
                    thickness: 10,
                    emptyFill: 'rgba(149,149,149,1)',
                    animation: {
                        duration: 3000
                    },
                    fill: {
                        color: color
                    }
                });
            });
        });
    };
}

// 7 progressBarConfig
function progressBarConfig() {
    var progressBar = $('.progress');
    if (progressBar.length) {
        progressBar.each(function () {
            var Self = $(this);
            Self.appear(function () {
                var progressValue = Self.data('value');

                Self.find('.progress-bar').animate({
                    width: progressValue + '%'
                }, 100);

                Self.find('span.value').countTo({
                    from: 0,
                    to: progressValue,
                    speed: 100
                });
            });
        });
    }
}

// 8 teamCarosule
function teamCarosule() {
    if ($('.team-carousel').length) {
        $('.team-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
    }
}

// 9 testiCarosule
function testiCarosule() {
    if ($('.testimonaials-carousel').length) {
        $('.testimonaials-carousel').owlCarousel({
            loop: true,
            margin: 50,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
    }
}

//Testimonial Slider
if ($('.testimonials').length) {
    $('.testimonials .slider').owlCarousel({
        items: 2,
        loop: true,
        autoplay: true,
        margin: 40,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },

            600: {
                items: 1
            },

            768: {
                items: 2
            },

            1024: {
                items: 2
            },

            1200: {
                items: 2
            },

            1600: {
                items: 3
            }

        }
    });
}
//Testimonial Slider
if ($('.testimonials').length) {
    $('.client-carsoule').owlCarousel({
        items: 5,
        loop: true,
        autoplay: true,
        margin: 10,
        autoWidth: true,
        autoHeight: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },

            600: {
                items: 2
            },

            768: {
                items: 3
            },

            1024: {
                items: 4
            },

            1200: {
                items: 5
            },

            1600: {
                items: 5
            }

        }
    });
}

// 10 clientsCarosule
function clientsCarosule() {
    if ($('.clients-carousel').length) {
        $('.clients-carousel').owlCarousel({
            loop: true,
            margin: 50,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                480: {
                    items: 3
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 5
                },
                1200: {
                    items: 6
                }
            }
        });
    }
}

// 11 owlCarosule
if ($('.owl-carousel-1col').length) {
    $('.owl-carousel-1col').each(function () {
        var data_dots = $(this).data("dots") === undefined ? false : $(this).data("dots");
        var data_nav = $(this).data("nav") === undefined ? false : $(this).data("nav");
        var data_duration = $(this).data("duration") === undefined ? 4000 : $(this).data("duration");
        $(this).owlCarousel({
            rtl: false,
            autoplay: true,
            autoplayTimeout: data_duration,
            loop: true,
            items: 1,
            dots: data_dots,
            nav: data_nav,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
        });
    });
}

if ($('.owl-carousel-2col').length) {
    $('.owl-carousel-2col').each(function () {
        var data_dots = $(this).data("dots") === undefined ? false : $(this).data("dots");
        var data_nav = $(this).data("nav") === undefined ? false : $(this).data("nav");
        var data_duration = $(this).data("duration") === undefined ? 4000 : $(this).data("duration");
        $(this).owlCarousel({
            rtl: true,
            autoplay: true,
            autoplayTimeout: data_duration,
            loop: true,
            items: 2,
            margin: 15,
            dots: data_dots,
            nav: data_nav,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                750: {
                    items: 2,
                    center: false
                },
                960: {
                    items: 2
                },
                1170: {
                    items: 2
                },
                1300: {
                    items: 2
                }
            }
        });
    });
}

if ($('.owl-carousel-3col').length) {
    $('.owl-carousel-3col').each(function () {
        var data_dots = $(this).data("dots") === undefined ? false : $(this).data("dots");
        var data_nav = $(this).data("nav") === undefined ? false : $(this).data("nav");
        var data_duration = $(this).data("duration") === undefined ? 4000 : $(this).data("duration");
        $(this).owlCarousel({
            rtl: false,
            autoplay: true,
            autoplayTimeout: data_duration,
            loop: true,
            items: 3,
            margin: 15,
            dots: data_dots,
            nav: data_nav,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                750: {
                    items: 2,
                    center: false
                },
                960: {
                    items: 2
                },
                1170: {
                    items: 3
                },
                1300: {
                    items: 3
                }
            }
        });
    });
}

if ($('.owl-carousel-4col').length) {
    $('.owl-carousel-4col').each(function () {
        var data_dots = $(this).data("dots") === undefined ? false : $(this).data("dots");
        var data_nav = $(this).data("nav") === undefined ? false : $(this).data("nav");
        var data_duration = $(this).data("duration") === undefined ? 4000 : $(this).data("duration");
        $(this).owlCarousel({
            rtl: false,
            autoplay: false,
            autoplayTimeout: data_duration,
            loop: true,
            items: 4,
            margin: 15,
            dots: data_dots,
            nav: data_nav,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                750: {
                    items: 2,
                    center: false
                },
                960: {
                    items: 3
                },
                1170: {
                    items: 4
                },
                1300: {
                    items: 4
                }
            }
        });
    });
}

// 12 CounterNumberChanger
function CounterNumberChanger() {
    var timer = $('.timer');
    if (timer.length) {
        timer.appear(function () {
            timer.countTo();
        });
    }
}

// 13 stickyHeader
function stickyHeader() {
    if ($('.stricky').length) {
        var strickyScrollPos = 100;
        if ($(window).scrollTop() > strickyScrollPos) {
            $('.stricky').removeClass('fadeIn animated');
            $('.stricky').addClass('stricky-fixed fadeInDown animated');
        } else if ($(this).scrollTop() <= strickyScrollPos) {
            $('.stricky').removeClass('stricky-fixed fadeInDown animated');
            $('.stricky').addClass('slideIn animated');
        }
    };
}

// 14 contactFormValidation
function contactFormValidation() {

    if ($('.contact-form').length) {
        $('.contact-form').each(function () {

            var cfName = $(this).attr('id');

            $('#' + cfName).validate({ // initialize the plugin
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true
                    },
                    date: {
                        required: true
                    },
                    category: {
                        required: true
                    },
                    phone: {
                        required: true
                    },
                    gender: {
                        required: true
                    },
                    dateOfBirth: {
                        required: true
                    },
                    subject: {
                        required: true
                    }
                },
                submitHandler: function submitHandler(form) {
                    // sending value with ajax request
                    $.post($(form).attr('action'), $(form).serialize(), function (response) {
                        $('#result').append(response);
                        $(form).find('input[type="text"]').val('');
                        $(form).find('input[type="email"]').val('');
                        $(form).find('textarea').val('');
                    });
                    return false;
                }
            });
        });
    }
}

// 15 event slider
function bxgeventCarousel() {
    $('.bx-event-carousel').bxSlider({
        auto: false,
        speed: 300,
        mode: 'vertical',
        minSlides: 3,
        slideMargin: 20,
        pager: false,
        prevText: '<i class="fa fa-angle-left"></i>',
        nextText: '<i class="fa fa-angle-right"></i>'
    });
    $('.testimonial-slider .slider').bxSlider({
        adaptiveHeight: true,
        auto: true,
        controls: false,
        pause: 5000,
        speed: 500,
        pager: false,
        mode: 'fade'
    });
}

// 16 Common CssJs
$('[data-bg-color]').each(function () {
    $(this).css("cssText", "background: " + $(this).data("bg-color") + " !important;");
});
$('[data-bg-img]').each(function () {
    $(this).css('background-image', 'url(' + $(this).data("bg-img") + ')');
});
$('[data-text-color]').each(function () {
    $(this).css('color', $(this).data("text-color"));
});
$('[data-font-size]').each(function () {
    $(this).css('font-size', $(this).data("font-size"));
});
$('[data-height]').each(function () {
    $(this).css('height', $(this).data("height"));
});
$('[data-border]').each(function () {
    $(this).css('border', $(this).data("border"));
});
$('[data-margin-top]').each(function () {
    $(this).css('margin-top', $(this).data("margin-top"));
});
$('[data-margin-left]').each(function () {
    $(this).css('margin-left', $(this).data("margin-left"));
});
$('[data-margin-bottom]').each(function () {
    $(this).css('margin-bottom', $(this).data("margin-bottom"));
});

// 17 selectInput
function selectInput() {
    if ($('.select-input').length) {
        $('.select-input').selectmenu();
    };
}

//Event Calendar
function calendarEvent() {
    if (typeof calendarEvents !== "undefined") {
        $('#full-event-calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'agendaDay,agendaWeek,month'
            },
            defaultDate: '2016-01-01',
            selectable: true,
            selectHelper: true,
            select: function select(start, end) {
                var title = prompt('Event Title:');
                var eventData;
                if (title) {
                    eventData = {
                        title: title,
                        start: start,
                        end: end
                    };
                    $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                }
                $('#calendar').fullCalendar('unselect');
            },
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: calendarEvents
        });
    }
}
// 18 datePicker
// Time Picker
function timeSelect() {
    if ($(".timepicker").length) {
        $(".timepicker").timepicker();
    }
}
// Date Select
function dateSelect() {
    if ($(".datepicker").length) {
        $(".datepicker").datepicker();
    };
}

// Background Parallax
function bgParallax() {
    if ($(".bg-parallax").length) {

        $('.bg-parallax').parallax("50%", 0.5);
    }
}
// twitter feed widget
function twitterFeedWidget() {
    if ($('.twitter').length) {
        var twitterWrapper = $('.twitter');
        var twitterCount = twitterWrapper.data('twitter-query-count');
        var twitterName = twitterWrapper.data('twitter-name');
        var slideCondition = twitterWrapper.data('enable-slide');
        var slideCount = twitterWrapper.data('slide-count');
        $.ajax({
            method: "POST",
            url: "inc/twitter/tweet-api.php",
            data: {
                count: twitterCount,
                name: twitterName,
                slide_condition: slideCondition,
                slide_count: slideCount
            }
        }).done(function (msg) {
            twitterWrapper.append(function () {
                return msg;
            });
        });
    };
}
//Jquery Knob animation
if ($('.dial').length) {
    $('.dial').appear(function () {
        var elm = $(this);
        var color = elm.attr('data-fgColor');
        var perc = elm.attr('value');

        elm.knob({
            'value': 0,
            'min': 0,
            'max': 100,
            'skin': 'tron',
            'readOnly': true,
            'thickness': 0.15,
            'dynamicDraw': true,
            'displayInput': false
        });

        $({
            value: 0
        }).animate({
            value: perc
        }, {
            duration: 1000,
            easing: 'swing',
            progress: function progress() {
                elm.val(Math.ceil(this.value)).trigger('change');
            }
        });

        //circular progress bar color
        $(this).append(function () {
            elm.parent().parent().find('.circular-bar-content').css('color', color);
            elm.parent().parent().find('.circular-bar-content label').text(perc + '%');
        });
    }, {
        accY: 20
    });
}

//Progress Bar
if ($('.progress-levels .progress-box .bar-fill').length) {
    $(".progress-box .bar-fill").each(function () {
        var progressWidth = $(this).attr('data-percent');
        $(this).css('width', progressWidth + '%');
        $(this).parents('.bar').children('.percent').html(progressWidth + '%');
    });
}

//Tabs Box
if ($('.tabs-box').length) {
    $('.tabs-box .tab-btn').on('click', function (e) {
        e.preventDefault();
        var target = $($(this).attr('href'));
        $('.tabs-box .tab-btn').removeClass('active');
        $(this).addClass('active');
        $('.tabs-box .tab').fadeOut(0);
        $('.tabs-box .tab').removeClass('active-tab');
        $(target).fadeIn(300);
        $(target).addClass('active-tab');
    });
}

//Accordions
if ($('.accordion-box').length) {
    $('.accordion-box .acc-btn').on('click', function () {
        if ($(this).hasClass('active') !== true) {
            $('.accordion-box .acc-btn').removeClass('active');
        }

        if ($(this).next('.acc-content').is(':visible')) {
            $(this).removeClass('active');
            $(this).next('.acc-content').slideUp(500);
        } else {
            $(this).addClass('active');
            $('.accordion-box .acc-content').slideUp(500);
            $(this).next('.acc-content').slideDown(500);
        }
    });
}
// 19 gMap
function gMap() {
    if ($('.google-map').length) {
        $('.google-map').each(function () {
            // getting options from html
            var mapName = $(this).attr('id');
            var mapLat = $(this).data('map-lat');
            var mapLng = $(this).data('map-lng');
            var iconPath = $(this).data('icon-path');
            var mapZoom = $(this).data('map-zoom');
            var mapTitle = $(this).data('map-title');

            // if zoom not defined the zoom value will be 15;
            if (!mapZoom) {
                var mapZoom = 15;
            };
            // init map
            var map;
            map = new GMaps({
                div: '#' + mapName,
                scrollwheel: false,
                lat: mapLat,
                lng: mapLng,
                zoom: mapZoom
            });
            // if icon path setted then show marker
            if (iconPath) {
                map.addMarker({
                    icon: iconPath,
                    lat: mapLat,
                    lng: mapLng,
                    title: mapTitle
                });
            }
        });
    };
}

// 20 mobileMenu
function mobileMenu() {
    if ($('.nav-footer button').length) {
        $('.nav-footer button').on('click', function () {
            $('.navigation .nav-header').slideToggle();
            var children = $('.navigation .nav-header').find('.dropdown').children('a');

            children.append('<button class="down-icon"><i class="fa fa-angle-down"></i></button>');

            $('.down-icon').click(function () {
                if ($(this).find('i').hasClass('fa-angle-down')) {
                    $(this).find('i').addClass('fa-angle-up');
                    $(this).find('i').removeClass('fa-angle-down');
                } else {
                    $(this).find('i').removeClass('fa-angle-up');
                    $(this).find('i').addClass('fa-angle-down');
                }
            });

            $('.navigation .nav-header .dropdown a button').on('click', function () {
                $(this).parent().parent().children('ul.submenu').slideToggle();
                return false;
            });
        });
    };
}

// Scroll to top
if ($('.scroll-to-top').length) {
    $(".scroll-to-top").on('click', function () {
        // animate
        $('html, body').animate({
            scrollTop: $('html, body').offset().top
        }, 1000);
    });
}

function customTabProductPageTab() {
    if ($('.product-details-tab-title').length) {
        var tabWrap = $('.product-details-tab-content');
        var tabClicker = $('.product-details-tab-title ul li');

        tabWrap.children('div').hide();
        tabWrap.children('div').eq(0).show();
        tabClicker.on('click', function () {
            var tabName = $(this).data('tab-name');
            tabClicker.removeClass('active');
            $(this).addClass('active');
            var id = '#' + tabName;
            tabWrap.children('div').not(id).hide();
            tabWrap.children('div' + id).fadeIn('500');
            return false;
        });
    }
}
// Dom Ready Function
jQuery(document).on('ready', function () {
    (function ($) {
        // add your functions
        revolutionSliderActiver();
        galleryMasonaryLayout();
        accrodion();
        expertizeRoundCircle();
        progressBarConfig();
        teamCarosule();
        testiCarosule();
        clientsCarosule();
        CounterNumberChanger();
        contactFormValidation();
        calendarEvent();
        bxgeventCarousel();
        selectInput();
        timeSelect();
        dateSelect();
        bgParallax();
        gMap();
        mobileMenu();
        customTabProductPageTab();
    })(jQuery);
});

// window on load functino
jQuery(window).on('load', function () {
    (function ($) {
        twitterFeedWidget();
    })(jQuery);
});

// window on scroll functino
jQuery(window).on('scroll', function () {
    (function ($) {
        // add your functions
        stickyHeader();
    })(jQuery);
});

//paste this code under the head tag or in a separate js file.
// Wait for window load
$(window).load(function () {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
});

// Change radio button
$('#radioBtn a').on('click', function () {
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#' + tog).prop('value', sel);

    $('a[data-toggle="' + tog + '"]').not('[data-title="' + sel + '"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="' + tog + '"][data-title="' + sel + '"]').removeClass('notActive').addClass('active');
});

/*--------------------------------------------------------------------
 * Copyright (c) 2009 Vision Master Designs
 * Licensed under GPL (http://www.opensource.org/licenses/gpl-license.php)

 * JQuery Plugin : "Switch Stylesheet"
 * Author : Michael (http://www.visionmasterdesigns.com)
 * Version : 1.0
 * Description : Based on the superb stylesheet switcher plugin by By Kelvin Luck ( http://www.kelvinluck.com/ ).
					Can create multiple groups of alternate stylesheets to change

Ex :
Alternate Stylesheets :
<!-- alternate css for colors -->
<link href="green.css" type="text/css" rel="alternate stylesheet" title="green-color" />
<link href="blue.css" type="text/css" rel="alternate stylesheet" title="blue-color" />

JS Code :
<script >
$(document).ready(function(){
	$(".changecolor").switchstylesheet( { seperator:"color"} );
});
</script>

Usage :
<a href="#" class="changecolor" title="red-color">Red</a> |
<a href="#" class="changecolor" title="green-color">Green</a> |
<a href="#" class="changecolor" title="blue-color">Blue</a>

------------------------------------------------------------------------*/

$.fn.switchstylesheet = function (options) {

    //default vals
    defaults = {
        seperator: 'alt'
    };

    var options = $.extend(defaults, options);

    //read the style
    var c = cookie.readCookie(options.seperator);
    if (c) switchss(c);

    //goes thru the links to find out the ones having the selector
    $(this).click(function () {
        var title = $(this).attr('title'); //gets the title=?
        switchss(title);
        return false;
    });

    function switchss(title) {
        //goes thru all the styles having seperator - alt
        $('link[rel*=style][title*=' + options.seperator + ']').each(function (i) {
            this.disabled = true;
            if ($(this).attr('title') == title) {
                this.disabled = false;
            }
        });
        //create a cookie to store the style
        cookie.createCookie(options.seperator, title, 365);
    }
};

//cookie functions
var cookie;
(function ($) {
    cookie = {
        createCookie: function createCookie(name, value, days) {
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
                var expires = "; expires=" + date.toGMTString();
            } else var expires = "";
            document.cookie = name + "=" + value + expires + "; path=/";
        },

        readCookie: function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1, c.length);
                }if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }
    };
})(jQuery);

/***/ })

/******/ });