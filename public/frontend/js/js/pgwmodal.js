/** PgwModal - Version 2.0 Copyright 2014, Jonathan M. Piat http://pgwjs.com - http://pagawa.com Released under the GNU GPLv3 license - http://opensource.org/licenses/gpl-3.0*/
(function (a) {
    a.pgwModal = function (i) {
        var c = {};
        var g = {
            mainClassName: "pgwModal",
            backdropClassName: "pgwModalBackdrop",
            maxWidth: 500,
            titleBar: true,
            closable: true,
            closeOnEscape: true,
            closeOnBackgroundClick: true,
            closeContent: '<i class="fas  whitebg roundborder50p fa-times abdposleft"></i>',
            loadingContent: '<span class="re_loadingbefore"></span>',
            errorContent: "An error has occured. Please try again in a few moments."
        };
        if (typeof window.pgwModalObject != "undefined") {
            c = window.pgwModalObject
        }
        if ((typeof i == "object") && (!i.pushContent)) {
            if (!i.url && !i.target && !i.content) {
                throw new Error('PgwModal - There is no content to display, please provide a config parameter : "url", "target" or "content"')
            }
            c.config = {};
            c.config = a.extend({}, g, i);
            window.pgwModalObject = c
        }
        var k = function () {
            var o = '<div id="pgwModalBackdrop"></div><div id="pgwModal"><div class="pm-container"><div class="pm-body"><span class="pm-close rh-close-btn"></span><div class="pm-title"></div><div class="pm-content"></div></div></div></div>';
            a("body").append(o);
            a(document).trigger("PgwModal::Create");
            return true
        };
        var l = function () {
            a("#pgwModal .pm-title, #pgwModal .pm-content").html("");
            a("#pgwModal .pm-close").html("").unbind("click");
            return true
        };
        var f = function () {
            angular.element('body').injector().invoke(function ($compile) {
                var scope = angular.element($('#pgwModal .pm-content')).scope();
                $compile($('#pgwModal .pm-content'))(scope);
                scope.$digest()
            });
            return true
        };
        var d = function (o) {
            a("#pgwModal .pm-content").html(o);
            if (c.config.angular) {
                f()
            }
            m();
            a(document).trigger("PgwModal::PushContent");
            return true
        };
        var m = function () {
            a("#pgwModal, #pgwModalBackdrop").show();
            var q = a(window).height();
            var o = a("#pgwModal .pm-body").height();
            var p = Math.round((q - o) / 3);
            if (p <= 0) {
                p = 0
            }
            a("#pgwModal .pm-body").animate({marginTop: p}, 200);
            return true
        };
        var h = function () {
            return c.config.modalData
        };
        var e = function () {
            var o = a('<div style="width:50px;height:50px;overflow:auto"><div></div></div>').appendTo("body");
            var q = o.children();
            if (typeof q.innerWidth != "function") {
                return 0
            }
            var p = q.innerWidth() - q.height(90).innerWidth();
            o.remove();
            return p
        };
        var b = function () {
            return a("body").hasClass("pgwModalOpen")
        };
        var n = function () {
            a("#pgwModal, #pgwModalBackdrop").removeClass().hide();
            a("body").css("padding-right", "").removeClass("pgwModalOpen");
            l();
            a(window).unbind("resize.PgwModal");
            a(document).unbind("keyup.PgwModal");
            a("#pgwModal").unbind("click.PgwModalBackdrop");
            try {
                delete window.pgwModalObject
            } catch (o) {
                window.pgwModalObject = undefined
            }
            a(document).trigger("PgwModal::Close");
            return true
        };
        var j = function () {
            if (a("#pgwModal").length == 0) {
                k()
            } else {
                l()
            }
            a("#pgwModal").removeClass().addClass(c.config.mainClassName);
            a("#pgwModalBackdrop").removeClass().addClass(c.config.backdropClassName);
            if (!c.config.closable) {
                a("#pgwModal .pm-close").html("").unbind("click").hide()
            } else {
                a("#pgwModal .pm-close").html(c.config.closeContent).click(function () {
                    n()
                }).show()
            }
            if (!c.config.titleBar) {
                a("#pgwModal .pm-title").hide()
            } else {
                a("#pgwModal .pm-title").show()
            }
            if (c.config.title) {
                a("#pgwModal .pm-title").text(c.config.title)
            }
            if (c.config.maxWidth) {
                a("#pgwModal .pm-body").css("max-width", c.config.maxWidth)
            }
            if (c.config.url) {
                if (c.config.loadingContent) {
                    a("#pgwModal .pm-content").html(c.config.loadingContent)
                }
                var o = {
                    url: i.url, success: function (q) {
                        d(q)
                    }, error: function () {
                        a("#pgwModal .pm-content").html(c.config.errorContent)
                    }
                };
                if (c.config.ajaxOptions) {
                    o = a.extend({}, o, c.config.ajaxOptions)
                }
                a.ajax(o)
            } else {
                if (c.config.target) {
                    d(a(c.config.target).html())
                } else {
                    if (c.config.content) {
                        d(c.config.content)
                    }
                }
            }
            if (c.config.closeOnEscape && c.config.closable) {
                a(document).bind("keyup.PgwModal", function (q) {
                    if (q.keyCode == 27) {
                        n()
                    }
                })
            }
            if (c.config.closeOnBackgroundClick && c.config.closable) {
                a("#pgwModal").bind("click.PgwModalBackdrop", function (s) {
                    var r = a(s.target).hasClass("pm-container");
                    var q = a(s.target).attr("id");
                    if (r || q == "pgwModal") {
                        n()
                    }
                })
            }
            a("body").addClass("pgwModalOpen");
            var p = e();
            if (p > 0) {
                a("body").css("padding-right", p)
            }
            a(window).bind("resize.PgwModal", function () {
                m()
            });
            a(document).trigger("PgwModal::Open");
            return true
        };
        if ((typeof i == "string") && (i == "close")) {
            return n()
        } else {
            if ((typeof i == "string") && (i == "reposition")) {
                return m()
            } else {
                if ((typeof i == "string") && (i == "getData")) {
                    return h()
                } else {
                    if ((typeof i == "string") && (i == "isOpen")) {
                        return b()
                    } else {
                        if ((typeof i == "object") && (i.pushContent)) {
                            return d(i.pushContent)
                        } else {
                            if (typeof i == "object") {
                                return j()
                            }
                        }
                    }
                }
            }
        }
    }
})(window.Zepto || window.jQuery);
