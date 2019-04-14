(function (a) {
    a.fn.pgwSlideshow = function (q) {
        var i = {
            mainClassName: "pgwSlideshow",
            transitionEffect: "sliding",
            displayList: true,
            displayControls: true,
            touchControls: true,
            autoSlide: false,
            beforeSlide: false,
            afterSlide: false,
            maxHeight: null,
            adaptiveDuration: 200,
            transitionDuration: 500,
            intervalDuration: 3000
        };
        if (this.length == 0) {
            return this
        } else {
            if (this.length > 1) {
                this.each(function () {
                    a(this).pgwSlideshow(q)
                });
                return this
            }
        }
        var j = this;
        j.plugin = this;
        j.config = {};
        j.data = [];
        j.currentSlide = 0;
        j.slideCount = 0;
        j.resizeEvent = null;
        j.intervalEvent = null;
        j.touchFirstPosition = null;
        j.touchListLastPosition = false;
        j.window = a(window);
        var p = function () {
            j.config = a.extend({}, i, q);
            g();
            if (j.config.displayList) {
                b()
            }
            j.window.resize(function () {
                clearTimeout(j.resizeEvent);
                j.resizeEvent = setTimeout(function () {
                    e();
                    var r = j.plugin.find(".ps-current > ul > li.elt_" + j.currentSlide + " img").height();
                    h(r);
                    if (j.config.displayList) {
                        b();
                        n()
                    }
                }, 100)
            });
            if (j.config.autoSlide) {
                k()
            }
            return true
        };
        var h = function (r, s) {
            if (j.config.maxHeight) {
                if (r + j.plugin.find(".ps-list").height() > j.config.maxHeight) {
                    r = j.config.maxHeight - j.plugin.find(".ps-list").height()
                }
            }
            if (typeof j.plugin.find(".ps-current").animate == "function") {
                j.plugin.find(".ps-current").stop().animate({
                    height: r
                }, j.config.adaptiveDuration, function () {
                    if (j.config.maxHeight) {
                        j.plugin.find(".ps-current > ul > li img").css("max-height", r + "px")
                    }
                })
            } else {
                j.plugin.find(".ps-current").css("height", r);
                if (j.config.maxHeight) {
                    j.plugin.find(".ps-current > ul > li img").css("max-height", r + "px")
                }
            }
            return true
        };
        var c = function () {
            var r = 0;
            j.plugin.show();
            j.plugin.find(".ps-list > ul > li").show().each(function () {
                r += a(this).width()
            });
            j.plugin.find(".ps-list > ul").width(r);
            return true
        };
        var e = function () {
            if (j.plugin.width() <= 480) {
                j.plugin.addClass("narrow").removeClass("wide")
            } else {
                j.plugin.addClass("wide").removeClass("narrow")
            }
            return true
        };
        var g = function () {
            j.plugin.removeClass("pgwSlideshow").removeClass(j.config.mainClassName);
            j.plugin.wrap('<div class="ps-list"></div>');
            j.plugin = j.plugin.parent();
            j.plugin.wrap('<div class="' + j.config.mainClassName + '"></div>');
            j.plugin = j.plugin.parent();
            j.plugin.prepend('<div class="ps-current"><ul></ul><span class="ps-caption"></span></div>');
            j.slideCount = j.plugin.find(".ps-list > ul > li").length;
            if (j.slideCount == 0) {
                throw new Error("pgwSlideshow - No slider item has been found");
                return false
            }
            if (j.slideCount > 1) {
                if (j.config.displayControls) {
                    j.plugin.find(".ps-current").prepend('<span class="ps-prev"><span class="ps-prevIcon"></span></span>');
                    j.plugin.find(".ps-current").append('<span class="ps-next"><span class="ps-nextIcon"></span></span>');
                    j.plugin.find(".ps-current .ps-prev").click(function () {
                        j.previousSlide()
                    });
                    j.plugin.find(".ps-current .ps-next").click(function () {
                        j.nextSlide()
                    })
                }
                if (j.config.touchControls) {
                    j.plugin.find(".ps-current").on("touchstart", function (s) {
                        try {
                            if (s.originalEvent.touches[0].clientX && j.touchFirstPosition == null) {
                                j.touchFirstPosition = s.originalEvent.touches[0].clientX
                            }
                        } catch (s) {
                            j.touchFirstPosition = null
                        }
                    });
                    j.plugin.find(".ps-current").on("touchmove", function (s) {
                        try {
                            if (s.originalEvent.touches[0].clientX && j.touchFirstPosition != null) {
                                if (s.originalEvent.touches[0].clientX > (j.touchFirstPosition + 50)) {
                                    j.touchFirstPosition = null;
                                    j.previousSlide()
                                } else {
                                    if (s.originalEvent.touches[0].clientX < (j.touchFirstPosition - 50)) {
                                        j.touchFirstPosition = null;
                                        j.nextSlide()
                                    }
                                }
                            }
                        } catch (s) {
                            j.touchFirstPosition = null
                        }
                    });
                    j.plugin.find(".ps-current").on("touchend", function (s) {
                        j.touchFirstPosition = null
                    })
                }
            }
            var r = 1;
            j.plugin.find(".ps-list > ul > li").each(function () {
                var t = d(a(this));
                t.id = r;
                j.data.push(t);
                a(this).addClass("elt_" + t.id);
                a(this).wrapInner('<span class="ps-item' + (r == 1 ? " ps-selected" : "") + '"></span>');
                var s = a('<li class="elt_' + r + '"></li>');
                if (t.image) {
                    s.html('<img src="' + t.image + '" alt="' + (t.title ? t.title : "") + '">')
                } else {
                    if (t.thumbnail) {
                        s.html('<img src="' + t.thumbnail + '" alt="' + (t.title ? t.title : "") + '">')
                    }
                }
                if (t.link) {
                    s.html('<a href="' + t.link + '"' + (t.linkTarget ? ' target="' + t.linkTarget + '"' : "") + ">" + s.html() + "</a>")
                }
                j.plugin.find(".ps-current > ul").append(s);
                a(this).css("cursor", "pointer").click(function (u) {
                    u.preventDefault();
                    l(t.id)
                });
                r++
            });
            if (j.config.displayList) {
                c();
                j.plugin.find(".ps-list").prepend('<span class="ps-prev"><span class="ps-prevIcon"></span></span>');
                j.plugin.find(".ps-list").append('<span class="ps-next"><span class="ps-nextIcon"></span></span>');
                j.plugin.find(".ps-list").show()
            } else {
                j.plugin.find(".ps-list").hide()
            }
            if (j.config.autoSlide) {
                j.plugin.on("mouseenter", function () {
                    clearInterval(j.intervalEvent);
                    j.intervalEvent = null
                }).on("mouseleave", function () {
                    k()
                })
            }
            j.plugin.find(".ps-current > ul > li").hide();
            l(1);
            j.plugin.find(".ps-current > ul > li.elt_1 img").on("load", function () {
                e();
                var s = j.plugin.find(".ps-current > ul > li.elt_1 img").height();
                h(s)
            });
            e();
            j.plugin.show();
            return true
        };
        var d = function (x) {
            var v = {};
            var t = x.find("a").attr("href");
            if ((typeof t != "undefined") && (t != "")) {
                v.link = t;
                var u = x.find("a").attr("target");
                if ((typeof u != "undefined") && (u != "")) {
                    v.linkTarget = u
                }
            }
            var s = x.find("img").attr("src");
            if ((typeof s != "undefined") && (s != "")) {
                v.thumbnail = s
            }
            var y = x.find("img").attr("data-large-src");
            if ((typeof y != "undefined") && (y != "")) {
                v.image = y
            }
            var r = x.find("img").attr("alt");
            if ((typeof r != "undefined") && (r != "")) {
                v.title = r
            }
            var w = x.find("img").attr("data-description");
            if ((typeof w != "undefined") && (w != "")) {
                v.description = w
            }
            return v
        };
        var m = function (r) {
            var t = "";
            if (r.title) {
                t += "<b>" + r.title + "</b>"
            }
            if (r.description) {
                if (t != "") {
                    t += "<br>"
                }
                t += r.description
            }
            if (t != "") {
                if (r.link) {
                    t = '<a href="' + r.link + '"' + (r.linkTarget ? ' target="' + r.linkTarget + '"' : "") + ">" + t + "</a>"
                }
                if (typeof j.plugin.find(".ps-caption").fadeIn == "function") {
                    j.plugin.find(".ps-caption").html(t);
                    j.plugin.find(".ps-caption").fadeIn(j.config.transitionDuration / 2)
                } else {
                    j.plugin.find(".ps-caption").html(t);
                    j.plugin.find(".ps-caption").show()
                }
            }
            j.plugin.find(".ps-list > ul > li .ps-item").removeClass("ps-selected");
            j.plugin.find(".ps-list > ul > li.elt_" + r.id + " .ps-item").addClass("ps-selected");
            if (j.config.displayList) {
                b();
                n()
            }
            if (j.config.displayControls) {
                if (typeof j.plugin.find(".ps-current > .ps-prev").fadeIn == "function") {
                    j.plugin.find(".ps-current > .ps-prev, .ps-current > .ps-next").fadeIn(j.config.transitionDuration / 2)
                } else {
                    j.plugin.find(".ps-current > .ps-prev, .ps-current > .ps-next").show()
                }
            }
            if (typeof j.config.afterSlide == "function") {
                j.config.afterSlide(r.id)
            }
            var s = j.plugin.find(".ps-current .elt_" + r.id + " img").height();
            h(s, true);
            return true
        };
        var f = function (u) {
            var t = j.plugin.find(".ps-current > ul");
            t.find("li").not(".elt_" + j.currentSlide).not(".elt_" + u.id).each(function () {
                if (typeof a(this).stop == "function") {
                    a(this).stop()
                }
                a(this).css("position", "").css("z-index", 1).hide()
            });
            if (j.currentSlide > 0) {
                var r = t.find(".elt_" + j.currentSlide);
                if (typeof r.animate != "function") {
                    r.animate = function (v, w, x) {
                        r.css(v);
                        if (x) {
                            x()
                        }
                    }
                }
                if (typeof r.stop == "function") {
                    r.stop()
                }
                r.css("position", "absolute").animate({
                    opacity: 0
                }, j.config.transitionDuration, function () {
                    r.css("position", "").css("z-index", 1).hide()
                })
            }
            j.currentSlide = u.id;
            var s = t.find(".elt_" + u.id);
            if (typeof s.animate != "function") {
                s.animate = function (v, w, x) {
                    s.css(v);
                    if (x) {
                        x()
                    }
                }
            }
            if (typeof s.stop == "function") {
                s.stop()
            }
            s.css("position", "absolute").show().animate({
                opacity: 1
            }, j.config.transitionDuration, function () {
                s.css("position", "").css("z-index", 2).css("display", "block");
                m(u)
            });
            return true
        };
        var o = function (v, y) {
            var u = j.plugin.find(".ps-current > ul");
            if (typeof y == "undefined") {
                y = "left"
            }
            if (j.currentSlide == 0) {
                u.find(".elt_1").css({
                    position: "",
                    left: "",
                    opacity: 1,
                    "z-index": 2
                }).show();
                j.plugin.find(".ps-list > li.elt_1").css("opacity", "1");
                m(v)
            } else {
                if (j.transitionInProgress) {
                    return false
                }
                j.transitionInProgress = true;
                var x = u.width();
                if (y == "left") {
                    var r = -x;
                    var w = x
                } else {
                    var r = x;
                    var w = -x
                }
                var s = u.find(".elt_" + j.currentSlide);
                if (typeof s.animate != "function") {
                    s.animate = function (z, A, B) {
                        s.css(z);
                        if (B) {
                            B()
                        }
                    }
                }
                s.css("position", "absolute").animate({
                    left: r
                }, j.config.transitionDuration, function () {
                    s.css("position", "").css("z-index", 1).css("left", "").css("opacity", 0).hide()
                });
                var t = u.find(".elt_" + v.id);
                if (typeof t.animate != "function") {
                    t.animate = function (z, A, B) {
                        t.css(z);
                        if (B) {
                            B()
                        }
                    }
                }
                t.css("position", "absolute").css("left", w).css("opacity", 1).show().animate({
                    left: 0
                }, j.config.transitionDuration, function () {
                    t.css("position", "").css("left", "").css("z-index", 2).show();
                    j.transitionInProgress = false;
                    m(v)
                })
            }
            j.currentSlide = v.id;
            return true
        };
        var l = function (r, t, u) {
            if (r == j.currentSlide) {
                return false
            }
            var s = j.data[r - 1];
            if (typeof s == "undefined") {
                throw new Error("pgwSlideshow - The element " + r + " is undefined");
                return false
            }
            if (typeof u == "undefined") {
                u = "left"
            }
            if (typeof j.config.beforeSlide == "function") {
                j.config.beforeSlide(r)
            }
            if (typeof j.plugin.find(".ps-caption").fadeOut == "function") {
                j.plugin.find(".ps-caption, .ps-prev, .ps-next").fadeOut(j.config.transitionDuration / 2)
            } else {
                j.plugin.find(".ps-caption, .ps-prev, .ps-next").hide()
            }
            if (j.config.transitionEffect == "sliding") {
                o(s, u)
            } else {
                f(s)
            }
            if (typeof t != "undefined" && j.config.autoSlide) {
                k()
            }
            return true
        };
        var k = function () {
            clearInterval(j.intervalEvent);
            if (j.slideCount > 1 && j.config.autoSlide) {
                j.intervalEvent = setInterval(function () {
                    if (j.currentSlide + 1 <= j.slideCount) {
                        var r = j.currentSlide + 1
                    } else {
                        var r = 1
                    }
                    l(r)
                }, j.config.intervalDuration)
            }
            return true
        };
        var b = function () {
            if (!j.config.displayList) {
                return false
            }
            c();
            var w = j.plugin.find(".ps-list");
            var u = w.width();
            var r = j.plugin.find(".ps-list > ul");
            var v = r.width();
            if (v > u) {
                r.css("margin", "0 45px");
                var t = parseInt(r.css("margin-left"));
                var s = parseInt(r.css("margin-right"));
                u -= (t + s);
                w.find(".ps-prev").show().unbind("click").click(function () {
                    var y = parseInt(r.css("left"));
                    var x = y + u;
                    if (y == 0) {
                        x = -(v - u)
                    } else {
                        if (x > 0) {
                            x = 0
                        }
                    }
                    if (typeof r.animate == "function") {
                        r.animate({
                            left: x
                        }, j.config.transitionDuration)
                    } else {
                        r.css("left", x)
                    }
                });
                w.find(".ps-next").show().unbind("click").click(function () {
                    var y = parseInt(r.css("left"));
                    var x = y - u;
                    var z = -(v - u);
                    if (y == z) {
                        x = 0
                    } else {
                        if (x < z) {
                            x = z
                        }
                    }
                    if (typeof r.animate == "function") {
                        r.animate({
                            left: x
                        }, j.config.transitionDuration)
                    } else {
                        r.css("left", x)
                    }
                });
                if (j.config.touchControls) {
                    j.plugin.find(".ps-list > ul").on("touchmove", function (C) {
                        try {
                            if (C.originalEvent.touches[0].clientX) {
                                var G = (j.touchListLastPosition == false ? 0 : j.touchListLastPosition);
                                nbPixels = (j.touchListLastPosition == false ? 1 : Math.abs(G - C.originalEvent.touches[0].clientX));
                                j.touchListLastPosition = C.originalEvent.touches[0].clientX;
                                var x = "";
                                if (G > C.originalEvent.touches[0].clientX) {
                                    x = "left"
                                } else {
                                    if (G < C.originalEvent.touches[0].clientX) {
                                        x = "right"
                                    }
                                }
                            }
                            var F = parseInt(r.css("left"));
                            if (x == "left") {
                                var E = w.width();
                                var D = r.width();
                                var z = parseInt(r.css("margin-left"));
                                var B = parseInt(r.css("margin-right"));
                                E -= (z + B);
                                var A = -(D - E);
                                var y = F - nbPixels;
                                if (y > A) {
                                    r.css("left", y)
                                }
                            } else {
                                if (x == "right") {
                                    var y = F + nbPixels;
                                    if (y < 0) {
                                        r.css("left", y)
                                    } else {
                                        r.css("left", 0)
                                    }
                                }
                            }
                        } catch (C) {
                            j.touchListLastPosition = false
                        }
                    });
                    j.plugin.find(".ps-list > ul").on("touchend", function (x) {
                        j.touchListLastPosition = false
                    })
                }
            } else {
                var t = parseInt((u - v) / 2);
                r.css("left", 0).css("margin-left", t);
                w.find(".ps-prev").hide();
                w.find(".ps-next").hide();
                j.plugin.find(".ps-list > ul").unbind("touchstart touchmove touchend")
            }
            return true
        };
        var n = function () {
            var A = j.plugin.find(".ps-list").width();
            var y = j.plugin.find(".ps-list > ul");
            var z = y.width();
            var t = parseInt(y.css("margin-left"));
            var x = parseInt(y.css("margin-right"));
            A -= (t + x);
            var w = Math.abs(parseInt(y.css("left")));
            var r = w + A;
            var u = j.plugin.find(".ps-list .ps-selected").position().left;
            var s = u + j.plugin.find(".ps-list .ps-selected").width();
            if ((u < w) || (s > r) || (z > A && r > s)) {
                var v = -(z - A);
                if (-u < v) {
                    y.css("left", v)
                } else {
                    y.css("left", -u)
                }
            }
            return true
        };
        j.startSlide = function () {
            j.config.autoSlide = true;
            k();
            return true
        };
        j.stopSlide = function () {
            j.config.autoSlide = false;
            clearInterval(j.intervalEvent);
            return true
        };
        j.getCurrentSlide = function () {
            return j.currentSlide
        };
        j.getSlideCount = function () {
            return j.slideCount
        };
        j.displaySlide = function (r) {
            l(r, true);
            return true
        };
        j.nextSlide = function () {
            if (j.currentSlide + 1 <= j.slideCount) {
                var r = j.currentSlide + 1
            } else {
                var r = 1
            }
            l(r, true, "left");
            return true
        };
        j.previousSlide = function () {
            if (j.currentSlide - 1 >= 1) {
                var r = j.currentSlide - 1
            } else {
                var r = j.slideCount
            }
            l(r, true, "right");
            return true
        };
        j.destroy = function (r) {
            clearInterval(j.intervalEvent);
            if (typeof r != "undefined") {
                j.plugin.find(".ps-list > ul > li").each(function () {
                    a(this).attr("style", null).removeClass().unbind("click");
                    a(this).html(a(this).find("span").html())
                });
                j.plugin.find(".ps-current").remove();
                j.plugin.find(".ps-list").find(".ps-prev, .ps-next").remove();
                j.plugin.find(".ps-list > ul").addClass(j.config.mainClassName).attr("style", "");
                j.plugin.find(".ps-list > ul").unwrap().unwrap();
                j.hide()
            } else {
                j.parent().parent().remove()
            }
            j.plugin = null;
            j.data = [];
            j.config = {};
            j.currentSlide = 0;
            j.slideCount = 0;
            j.resizeEvent = null;
            j.intervalEvent = null;
            j.touchFirstPosition = null;
            j.window = null;
            return true
        };
        j.reload = function (r) {
            j.destroy(true);
            j = this;
            j.plugin = this;
            j.window = a(window);
            j.plugin.show();
            j.config = a.extend({}, i, r);
            g();
            j.window.resize(function () {
                clearTimeout(j.resizeEvent);
                j.resizeEvent = setTimeout(function () {
                    e();
                    var s = j.plugin.find(".ps-current > ul > li.elt_" + j.currentSlide + " img").css("max-height", "").height();
                    h(s);
                    if (j.config.displayList) {
                        b();
                        n()
                    }
                }, 100)
            });
            if (j.config.autoSlide) {
                k()
            }
            return true
        };
        p();
        return this
    }
})(window.Zepto || window.jQuery);