// Copyright 2012 Google Inc. All rights reserved.
(function () {

    var data = {
        "resource": {
            "version": "1",

            "macros": [{"function": "__e"}, {"function": "__cid"}],
            "tags": [{"function": "__rep", "once_per_event": true, "vtp_containerId": ["macro", 1], "tag_id": 1}],
            "predicates": [{"function": "_eq", "arg0": ["macro", 0], "arg1": "gtm.js"}],
            "rules": [[["if", 0], ["add", 0]]]
        },
        "runtime": []


    };


    /*

     Copyright The Closure Library Authors.
     SPDX-License-Identifier: Apache-2.0
    */
    var h, aa = function (a) {
        var b = 0;
        return function () {
            return b < a.length ? {done: !1, value: a[b++]} : {done: !0}
        }
    }, ba = "function" == typeof Object.create ? Object.create : function (a) {
        var b = function () {
        };
        b.prototype = a;
        return new b
    }, ca;
    if ("function" == typeof Object.setPrototypeOf) ca = Object.setPrototypeOf; else {
        var fa;
        a:{
            var ha = {a: !0}, ia = {};
            try {
                ia.__proto__ = ha;
                fa = ia.a;
                break a
            } catch (a) {
            }
            fa = !1
        }
        ca = fa ? function (a, b) {
            a.__proto__ = b;
            if (a.__proto__ !== b) throw new TypeError(a + " is not extensible");
            return a
        } : null
    }
    var ja = ca, la = function (a, b) {
        a.prototype = ba(b.prototype);
        a.prototype.constructor = a;
        if (ja) ja(a, b); else for (var c in b) if ("prototype" != c) if (Object.defineProperties) {
            var d = Object.getOwnPropertyDescriptor(b, c);
            d && Object.defineProperty(a, c, d)
        } else a[c] = b[c];
        a.Gj = b.prototype
    }, ma = this || self, na = function (a) {
        return a
    };
    var oa = function () {
        }, qa = function (a) {
            return "function" == typeof a
        }, ra = function (a) {
            return "string" == typeof a
        }, sa = function (a) {
            return "number" == typeof a && !isNaN(a)
        }, ta = Array.isArray, ua = function (a, b) {
            if (a && ta(a)) for (var c = 0; c < a.length; c++) if (a[c] && b(a[c])) return a[c]
        }, va = function (a, b) {
            if (!sa(a) || !sa(b) || a > b) a = 0, b = 2147483647;
            return Math.floor(Math.random() * (b - a + 1) + a)
        }, xa = function (a, b) {
            for (var c = new wa, d = 0; d < a.length; d++) c.set(a[d], !0);
            for (var e = 0; e < b.length; e++) if (c.get(b[e])) return !0;
            return !1
        }, ya = function (a,
                          b) {
            for (var c in a) Object.prototype.hasOwnProperty.call(a, c) && b(c, a[c])
        }, za = function (a) {
            return !!a && ("[object Arguments]" == Object.prototype.toString.call(a) || Object.prototype.hasOwnProperty.call(a, "callee"))
        }, Ca = function (a) {
            return Math.round(Number(a)) || 0
        }, Da = function (a) {
            return "false" == String(a).toLowerCase() ? !1 : !!a
        }, Ea = function (a) {
            var b = [];
            if (ta(a)) for (var c = 0; c < a.length; c++) b.push(String(a[c]));
            return b
        }, Fa = function (a) {
            return a ? a.replace(/^\s+|\s+$/g, "") : ""
        }, Ia = function () {
            return new Date(Date.now())
        },
        La = function () {
            return Ia().getTime()
        }, wa = function () {
            this.prefix = "gtm.";
            this.values = {}
        };
    wa.prototype.set = function (a, b) {
        this.values[this.prefix + a] = b
    };
    wa.prototype.get = function (a) {
        return this.values[this.prefix + a]
    };
    var Ma = function (a, b, c) {
            return a && a.hasOwnProperty(b) ? a[b] : c
        }, Pa = function (a) {
            var b = a;
            return function () {
                if (b) {
                    var c = b;
                    b = void 0;
                    try {
                        c()
                    } catch (d) {
                    }
                }
            }
        }, Qa = function (a, b) {
            for (var c in b) b.hasOwnProperty(c) && (a[c] = b[c])
        }, Ra = function (a) {
            for (var b in a) if (a.hasOwnProperty(b)) return !0;
            return !1
        }, Sa = function (a, b) {
            for (var c = [], d = 0; d < a.length; d++) c.push(a[d]), c.push.apply(c, b[a[d]] || []);
            return c
        }, Ta = function (a, b) {
            for (var c = {}, d = c, e = a.split("."), f = 0; f < e.length - 1; f++) d = d[e[f]] = {};
            d[e[e.length - 1]] = b;
            return c
        }, Ua = /^\w{1,9}$/,
        Va = function (a, b) {
            a = a || {};
            b = b || ",";
            var c = [];
            ya(a, function (d, e) {
                Ua.test(d) && e && c.push(d)
            });
            return c.join(b)
        };
    var Wa, Xa = function () {
        if (void 0 === Wa) {
            var a = null, b = ma.trustedTypes;
            if (b && b.createPolicy) {
                try {
                    a = b.createPolicy("goog#html", {createHTML: na, createScript: na, createScriptURL: na})
                } catch (c) {
                    ma.console && ma.console.error(c.message)
                }
                Wa = a
            } else Wa = a
        }
        return Wa
    };
    var Za = function (a, b) {
        this.m = b === Ya ? a : ""
    };
    Za.prototype.toString = function () {
        return this.m + ""
    };
    var Ya = {}, $a = function (a) {
        var b = Xa(), c = b ? b.createScriptURL(a) : a;
        return new Za(c, Ya)
    };
    var ab = /^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i;
    var bb;
    a:{
        var cb = ma.navigator;
        if (cb) {
            var db = cb.userAgent;
            if (db) {
                bb = db;
                break a
            }
        }
        bb = ""
    }

    function eb(a) {
        return -1 != bb.indexOf(a)
    };var ib = {}, jb = function (a, b, c) {
        this.m = c === ib ? a : ""
    };
    jb.prototype.toString = function () {
        return this.m.toString()
    };
    var kb = function (a) {
        return a instanceof jb && a.constructor === jb ? a.m : "type_error:SafeHtml"
    }, lb = function (a) {
        var b = Xa(), c = b ? b.createHTML(a) : a;
        return new jb(c, null, ib)
    }, mb = new jb(ma.trustedTypes && ma.trustedTypes.emptyHTML || "", 0, ib);/*

 SPDX-License-Identifier: Apache-2.0
*/
    function ob(a, b) {
        a.src = b instanceof Za && b.constructor === Za ? b.m : "type_error:TrustedResourceUrl";
        var c, d, e = (a.ownerDocument && a.ownerDocument.defaultView || window).document,
            f = null === (d = e.querySelector) || void 0 === d ? void 0 : d.call(e, "script[nonce]");
        (c = f ? f.nonce || f.getAttribute("nonce") || "" : "") && a.setAttribute("nonce", c)
    };var pb = function (a, b) {
        var c = function () {
        };
        c.prototype = a.prototype;
        var d = new c;
        a.apply(d, Array.prototype.slice.call(arguments, 1));
        return d
    }, qb = function (a) {
        var b = a;
        return function () {
            if (b) {
                var c = b;
                b = null;
                c()
            }
        }
    };
    var rb = function (a) {
        var b = !1, c;
        return function () {
            b || (c = a(), b = !0);
            return c
        }
    }(function () {
        var a = document.createElement("div"), b = document.createElement("div");
        b.appendChild(document.createElement("div"));
        a.appendChild(b);
        var c = a.firstChild.firstChild;
        a.innerHTML = kb(mb);
        return !c.parentElement
    });
    var l = window, B = document, sb = navigator, tb = B.currentScript && B.currentScript.src, ub = function (a, b) {
        var c = l[a];
        l[a] = void 0 === c ? b : c;
        return l[a]
    }, vb = function (a) {
        var b = B.getElementsByTagName("script")[0] || B.body || B.head;
        b.parentNode.insertBefore(a, b)
    }, wb = function (a, b) {
        b && (a.addEventListener ? a.onload = b : a.onreadystatechange = function () {
            a.readyState in {loaded: 1, complete: 1} && (a.onreadystatechange = null, b())
        })
    }, xb = {async: 1, nonce: 1, onerror: 1, onload: 1, src: 1, type: 1}, yb = function (a, b, c, d) {
        var e = B.createElement("script");
        d && ya(d, function (f, g) {
            f = f.toLowerCase();
            xb.hasOwnProperty(f) || e.setAttribute(f, g)
        });
        e.type = "text/javascript";
        e.async = !0;
        ob(e, $a(a));
        wb(e, b);
        c && (e.onerror = c);
        vb(e);
        return e
    }, zb = function () {
        if (tb) {
            var a = tb.toLowerCase();
            if (0 === a.indexOf("https://")) return 2;
            if (0 === a.indexOf("http://")) return 3
        }
        return 1
    }, Ab = function (a, b) {
        var c = B.createElement("iframe");
        c.height = "0";
        c.width = "0";
        c.style.display = "none";
        c.style.visibility = "hidden";
        var d = B.body && B.body.lastChild || B.body || B.head;
        d.parentNode.insertBefore(c,
            d);
        wb(c, b);
        void 0 !== a && (c.src = a);
        return c
    }, Bb = function (a, b, c) {
        var d = new Image(1, 1);
        d.onload = function () {
            d.onload = null;
            b && b()
        };
        d.onerror = function () {
            d.onerror = null;
            c && c()
        };
        d.src = a;
        return d
    }, Cb = function (a, b, c, d) {
        a.addEventListener ? a.addEventListener(b, c, !!d) : a.attachEvent && a.attachEvent("on" + b, c)
    }, Db = function (a, b, c) {
        a.removeEventListener ? a.removeEventListener(b, c, !1) : a.detachEvent && a.detachEvent("on" + b, c)
    }, G = function (a) {
        l.setTimeout(a, 0)
    }, Eb = function (a, b) {
        return a && b && a.attributes && a.attributes[b] ? a.attributes[b].value :
            null
    }, Fb = function (a) {
        var b = a.innerText || a.textContent || "";
        b && " " != b && (b = b.replace(/^[\s\xa0]+|[\s\xa0]+$/g, ""));
        b && (b = b.replace(/(\xa0+|\s{2,}|\n|\r\t)/g, " "));
        return b
    }, Gb = function (a) {
        var b = B.createElement("div"), c = lb("A<div>" + a + "</div>"), d = b;
        if (rb()) for (; d.lastChild;) d.removeChild(d.lastChild);
        d.innerHTML = kb(c);
        b = b.lastChild;
        for (var e = []; b.firstChild;) e.push(b.removeChild(b.firstChild));
        return e
    }, Hb = function (a, b, c) {
        c = c || 100;
        for (var d = {}, e = 0; e < b.length; e++) d[b[e]] = !0;
        for (var f = a, g = 0; f && g <= c; g++) {
            if (d[String(f.tagName).toLowerCase()]) return f;
            f = f.parentElement
        }
        return null
    }, Ib = function (a) {
        var b;
        try {
            b = sb.sendBeacon && sb.sendBeacon(a)
        } catch (c) {
        }
        b || Bb(a)
    }, Jb = function (a, b) {
        var c = a[b];
        c && "string" === typeof c.animVal && (c = c.animVal);
        return c
    }, Kb = function (a) {
        var b = B.featurePolicy;
        return b && qa(b.features) ? -1 !== b.features().indexOf(a) : !1
    }, Lb = function () {
        return sb.userLanguage || sb.language
    };/*
 jQuery (c) 2005, 2012 jQuery Foundation, Inc. jquery.org/license. */
    var Nb = /\[object (Boolean|Number|String|Function|Array|Date|RegExp)\]/, Ob = function (a) {
        if (null == a) return String(a);
        var b = Nb.exec(Object.prototype.toString.call(Object(a)));
        return b ? b[1].toLowerCase() : "object"
    }, Pb = function (a, b) {
        return Object.prototype.hasOwnProperty.call(Object(a), b)
    }, Qb = function (a) {
        if (!a || "object" != Ob(a) || a.nodeType || a == a.window) return !1;
        try {
            if (a.constructor && !Pb(a, "constructor") && !Pb(a.constructor.prototype, "isPrototypeOf")) return !1
        } catch (c) {
            return !1
        }
        for (var b in a) ;
        return void 0 ===
            b || Pb(a, b)
    }, H = function (a, b) {
        var c = b || ("array" == Ob(a) ? [] : {}), d;
        for (d in a) if (Pb(a, d)) {
            var e = a[d];
            "array" == Ob(e) ? ("array" != Ob(c[d]) && (c[d] = []), c[d] = H(e, c[d])) : Qb(e) ? (Qb(c[d]) || (c[d] = {}), c[d] = H(e, c[d])) : c[d] = e
        }
        return c
    };
    var Rb = function (a) {
        if (void 0 === a || ta(a) || Qb(a)) return !0;
        switch (typeof a) {
            case "boolean":
            case "number":
            case "string":
            case "function":
                return !0
        }
        return !1
    };
    var Sb = function () {
        var a = function (b) {
            return {
                toString: function () {
                    return b
                }
            }
        };
        return {
            Wg: a("consent"),
            Xg: a("consent_always_fire"),
            Ye: a("convert_case_to"),
            Ze: a("convert_false_to"),
            $e: a("convert_null_to"),
            af: a("convert_true_to"),
            bf: a("convert_undefined_to"),
            sj: a("debug_mode_metadata"),
            tj: a("event_data_overrides"),
            qb: a("function"),
            Hh: a("instance_name"),
            Lh: a("live_only"),
            Mh: a("malware_disabled"),
            Nh: a("metadata"),
            uj: a("original_activity_id"),
            vj: a("original_vendor_template_id"),
            Rh: a("once_per_event"),
            Jf: a("once_per_load"),
            xj: a("priority_override"),
            yj: a("respected_consent_types"),
            Nf: a("setup_tags"),
            Pf: a("tag_id"),
            Qf: a("teardown_tags")
        }
    }();
    var sc;
    var zc = [], Ac = [], Bc = [], Cc = [], Dc = [], Ec = {}, Fc, Gc, Hc, Ic = function (a, b) {
        var c = a["function"];
        if (!c) throw Error("Error: No function name given for function call.");
        var d = Ec[c], e = {}, f;
        for (f in a) if (a.hasOwnProperty(f)) if (0 === f.indexOf("vtp_")) d && b && b.ag && b.ag(a[f]), e[void 0 !== d ? f : f.substr(4)] = a[f]; else if (f === Sb.Xg.toString() && a[f]) {
        }
        d && b && b.$f && (e.vtp_gtmCachedValues = b.$f);
        return void 0 !== d ? d(e) : sc(c, e, b)
    }, Kc = function (a, b, c) {
        c = c || [];
        var d = {}, e;
        for (e in a) a.hasOwnProperty(e) && (d[e] = Jc(a[e], b, c));
        return d
    }, Jc = function (a, b, c) {
        if (ta(a)) {
            var d;
            switch (a[0]) {
                case "function_id":
                    return a[1];
                case "list":
                    d = [];
                    for (var e = 1; e < a.length; e++) d.push(Jc(a[e], b, c));
                    return d;
                case "macro":
                    var f = a[1];
                    if (c[f]) return;
                    var g = zc[f];
                    if (!g || b.Ge(g)) return;
                    c[f] = !0;
                    try {
                        var k = Kc(g, b, c);
                        k.vtp_gtmEventId = b.id;
                        d = Ic(k, b);
                        Hc && (d = Hc.ei(d, k))
                    } catch (z) {
                        b.rg && b.rg(z, Number(f)), d = !1
                    }
                    c[f] = !1;
                    return d;
                case "map":
                    d = {};
                    for (var m = 1; m < a.length; m += 2) d[Jc(a[m], b, c)] = Jc(a[m + 1], b, c);
                    return d;
                case "template":
                    d = [];
                    for (var n = !1, p = 1; p < a.length; p++) {
                        var r = Jc(a[p], b, c);
                        Gc && (n = n || r === Gc.$c);
                        d.push(r)
                    }
                    return Gc && n ? Gc.ii(d) : d.join("");
                case "escape":
                    d = Jc(a[1], b, c);
                    if (Gc && ta(a[1]) && "macro" === a[1][0] && Gc.Hi(a)) return Gc.Wi(d);
                    d = String(d);
                    for (var u = 2; u < a.length; u++) Tb[a[u]] && (d = Tb[a[u]](d));
                    return d;
                case "tag":
                    var t = a[1];
                    if (!Cc[t]) throw Error("Unable to resolve tag reference " +
                        t + ".");
                    return d = {hg: a[2], index: t};
                case "zb":
                    var q = {arg0: a[2], arg1: a[3], ignore_case: a[5]};
                    q["function"] = a[1];
                    var v = Lc(q, b, c), x = !!a[4];
                    return x || 2 !== v ? x !== (1 === v) : null;
                default:
                    throw Error("Attempting to expand unknown Value type: " + a[0] + ".");
            }
        }
        return a
    }, Lc = function (a, b, c) {
        try {
            return Fc(Kc(a, b, c))
        } catch (d) {
            JSON.stringify(a)
        }
        return 2
    };
    var Oc = function (a) {
        function b(u) {
            for (var t = 0; t < u.length; t++) d[u[t]] = !0
        }

        for (var c = [], d = [], e = Mc(a), f = 0; f < Ac.length; f++) {
            var g = Ac[f], k = Nc(g, e);
            if (k) {
                for (var m = g.add || [], n = 0; n < m.length; n++) c[m[n]] = !0;
                b(g.block || [])
            } else null === k && b(g.block || []);
        }
        for (var p = [], r = 0; r < Cc.length; r++) c[r] && !d[r] && (p[r] = !0);
        return p
    }, Nc = function (a, b) {
        for (var c = a["if"] || [], d = 0; d < c.length; d++) {
            var e = b(c[d]);
            if (0 === e) return !1;
            if (2 === e) return null
        }
        for (var f =
            a.unless || [], g = 0; g < f.length; g++) {
            var k = b(f[g]);
            if (2 === k) return null;
            if (1 === k) return !1
        }
        return !0
    }, Mc = function (a) {
        var b = [];
        return function (c) {
            void 0 === b[c] && (b[c] = Lc(Bc[c], a));
            return b[c]
        }
    };
    var Pc = {
        ei: function (a, b) {
            b[Sb.Ye] && "string" === typeof a && (a = 1 == b[Sb.Ye] ? a.toLowerCase() : a.toUpperCase());
            b.hasOwnProperty(Sb.$e) && null === a && (a = b[Sb.$e]);
            b.hasOwnProperty(Sb.bf) && void 0 === a && (a = b[Sb.bf]);
            b.hasOwnProperty(Sb.af) && !0 === a && (a = b[Sb.af]);
            b.hasOwnProperty(Sb.Ze) && !1 === a && (a = b[Sb.Ze]);
            return a
        }
    };
    var N = {
        ic: "_ee",
        fd: "_syn_or_mod",
        zj: "_uei",
        ae: "_eu",
        wj: "_pci",
        Hb: "event_callback",
        Pc: "event_timeout",
        Aa: "gtag.config",
        Ia: "gtag.get",
        va: "purchase",
        Eb: "refund",
        ib: "begin_checkout",
        Cb: "add_to_cart",
        Db: "remove_from_cart",
        gh: "view_cart",
        df: "add_to_wishlist",
        wa: "view_item",
        jb: "view_promotion",
        Lc: "select_promotion",
        Ed: "select_item",
        Ua: "view_item_list",
        cf: "add_payment_info",
        fh: "add_shipping_info",
        Ka: "value_key",
        Wa: "value_callback",
        Ba: "allow_ad_personalization_signals",
        bc: "restricted_data_processing",
        Xb: "allow_google_signals",
        na: "cookie_expires",
        Gb: "cookie_update",
        cc: "session_duration",
        Vc: "session_engaged_time",
        Ma: "user_properties",
        qa: "transport_url",
        R: "ads_data_redaction",
        xa: "user_data",
        $b: "first_party_collection",
        C: "ad_storage",
        H: "analytics_storage",
        We: "region",
        Xe: "wait_for_update",
        ma: "conversion_linker",
        Ca: "conversion_cookie_prefix",
        ca: "value",
        aa: "currency",
        Ff: "trip_type",
        V: "items",
        xf: "passengers",
        Hd: "allow_custom_scripts",
        fc: "session_id",
        Cf: "quantity",
        Ya: "transaction_id",
        mb: "language",
        Nc: "country",
        Mc: "allow_enhanced_conversions",
        Md: "aw_merchant_id",
        Kd: "aw_feed_country",
        Ld: "aw_feed_language",
        Jd: "discount",
        ba: "developer_id",
        Wc: "delivery_postal_code",
        Sd: "estimated_delivery_date",
        Qd: "shipping",
        Xd: "new_customer",
        Nd: "customer_lifetime_value",
        Rd: "enhanced_conversions",
        Wb: "page_view",
        fa: "linker",
        N: "domains",
        Kb: "decorate_forms",
        tf: "enhanced_conversions_automatic_settings",
        ph: "auto_detection_enabled",
        uf: "ga_temp_client_id",
        Fd: "user_engagement",
        $g: "app_remove",
        ah: "app_store_refund",
        bh: "app_store_subscription_cancel",
        dh: "app_store_subscription_convert",
        eh: "app_store_subscription_renew",
        hh: "first_open",
        ih: "first_visit",
        jh: "in_app_purchase",
        kh: "session_start",
        lh: "user_data_login",
        mh: "user_data_logout",
        nh: "allow_display_features",
        Yb: "campaign",
        ff: "campaign_content",
        hf: "campaign_id",
        jf: "campaign_medium",
        kf: "campaign_name",
        lf: "campaign_source",
        nf: "campaign_term",
        kb: "client_id",
        da: "cookie_domain",
        Fb: "cookie_name",
        Va: "cookie_path",
        Da: "cookie_flags",
        Zb: "custom_map",
        Ud: "groups",
        wf: "non_interaction",
        nb: "page_location",
        Yd: "page_path",
        La: "page_referrer",
        Tc: "page_title",
        Lb: "send_page_view",
        ob: "send_to",
        Zd: "session_engaged",
        Sc: "_logged_in_state",
        $d: "session_number",
        Dh: "tracking_id",
        Za: "url_passthrough",
        Jb: "accept_incoming",
        ac: "url_position",
        Af: "phone_conversion_number",
        yf: "phone_conversion_callback",
        zf: "phone_conversion_css_class",
        Bf: "phone_conversion_options",
        Ah: "phone_conversion_ids",
        zh: "phone_conversion_country_code",
        ef: "aw_remarketing",
        Id: "aw_remarketing_only",
        Gd: "gclid",
        oh: "auid",
        uh: "affiliation",
        sf: "tax",
        Pd: "list_name",
        rf: "checkout_step",
        qf: "checkout_option",
        vh: "coupon",
        wh: "promotions",
        pb: "user_id",
        Bh: "retoken",
        oa: "cookie_prefix",
        pf: "disable_merchant_reported_purchases",
        th: "dc_natural_search",
        sh: "dc_custom_params",
        vf: "method",
        Ch: "search_term",
        rh: "content_type",
        yh: "optimize_id",
        xh: "experiments",
        Xa: "google_signals",
        Rc: "google_tld",
        Xc: "update",
        Td: "firebase_id",
        Ib: "ga_restrict_domain",
        Oc: "event_settings",
        Od: "dynamic_event_settings",
        hc: "user_data_settings",
        Df: "screen_name",
        Ja: "_x_19",
        lb: "_ecid",
        Qc: "_x_20",
        Wd: "internal_traffic_results",
        Ef: "traffic_type",
        Uc: "referral_exclusion_definition",
        Vd: "ignore_referrer",
        qh: "content_group"
    };
    var vd = {};
    N.Hf = Object.freeze((vd[N.cf] = 1, vd[N.fh] = 1, vd[N.Cb] = 1, vd[N.Db] = 1, vd[N.gh] = 1, vd[N.ib] = 1, vd[N.Ed] = 1, vd[N.Ua] = 1, vd[N.Lc] = 1, vd[N.jb] = 1, vd[N.va] = 1, vd[N.Eb] = 1, vd[N.wa] = 1, vd[N.df] = 1, vd));
    N.ce = Object.freeze([N.Ba, N.Xb, N.Gb]);
    N.Ph = Object.freeze([].concat(N.ce));
    N.de = Object.freeze([N.na, N.Pc, N.cc, N.Vc]);
    N.Qh = Object.freeze([].concat(N.de));

    var wd = {};
    N.Tg = Object.freeze((wd[N.Ba] = 1, wd[N.Mc] = 1, wd[N.ef] = 1, wd[N.Id] = 1, wd[N.Jd] = 1, wd[N.Kd] = 1, wd[N.Ld] = 1, wd[N.V] = 1, wd[N.Md] = 1, wd[N.Ca] = 1, wd[N.ma] = 1, wd[N.da] = 1, wd[N.na] = 1, wd[N.Da] = 1, wd[N.oa] = 1, wd[N.aa] = 1, wd[N.Nd] = 1, wd[N.ba] = 1, wd[N.pf] = 1, wd[N.Rd] = 1, wd[N.Sd] = 1, wd[N.Td] = 1, wd[N.$b] = 1, wd[N.mb] = 1, wd[N.Xd] = 1, wd[N.nb] = 1, wd[N.La] = 1, wd[N.yf] = 1, wd[N.zf] = 1, wd[N.Af] = 1, wd[N.Bf] = 1, wd[N.bc] = 1, wd[N.Lb] = 1, wd[N.ob] = 1, wd[N.Wc] = 1, wd[N.Ya] = 1, wd[N.qa] = 1, wd[N.Xc] = 1, wd[N.Za] = 1, wd[N.xa] = 1, wd[N.pb] = 1, wd[N.ca] = 1, wd));
    var xd = {}, yd = function (a, b) {
        xd[a] = xd[a] || [];
        xd[a][b] = !0
    }, zd = function (a) {
        for (var b = [], c = xd[a] || [], d = 0; d < c.length; d++) c[d] && (b[Math.floor(d / 6)] ^= 1 << d % 6);
        for (var e = 0; e < b.length; e++) b[e] = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_".charAt(b[e] || 0);
        return b.join("")
    };
    var Ad = function (a) {
        yd("GTM", a)
    };
    var Bd = {}, P = null, Cd = Math.random();
    Bd.J = "AW-861272757";
    Bd.dd = "ar0";
    Bd.Zg = "ChAI8PHjiwYQnsuMm8HuqYkzEiUAZxeNYasVe3zf2OAp7xyWU/hD6iiIXou/8aQvJnBngdS1alaIGgJHUA\x3d\x3d";
    var Dd = {
        __cl: !0,
        __ecl: !0,
        __ehl: !0,
        __evl: !0,
        __fal: !0,
        __fil: !0,
        __fsl: !0,
        __hl: !0,
        __jel: !0,
        __lcl: !0,
        __sdl: !0,
        __tl: !0,
        __ytl: !0
    }, Ed = {__paused: !0, __tg: !0}, Fd;
    for (Fd in Dd) Dd.hasOwnProperty(Fd) && (Ed[Fd] = !0);
    Bd.Cd = "www.googletagmanager.com";
    var Gd = Bd.Cd + "/gtm.js";
    Gd = Bd.Cd + "/gtag/js";
    var Hd = Gd, Id = Da(""), Jd = null, Kd = null, Ld = "https://www.googletagmanager.com/a?id=" + Bd.J + "&cv=1",
        Sd = {}, Td = {}, Ud = function () {
            var a = P.sequence || 1;
            P.sequence = a + 1;
            return a
        };
    Bd.Yg = "";
    var Vd = "";
    Bd.ed = Vd;
    var Wd = {}, Xd = new wa, Yd = {}, Zd = {}, be = {
        name: "dataLayer", set: function (a, b) {
            H(Ta(a, b), Yd);
            $d()
        }, get: function (a) {
            return ae(a, 2)
        }, reset: function () {
            Xd = new wa;
            Yd = {};
            $d()
        }
    }, ae = function (a, b) {
        return 2 != b ? Xd.get(a) : ce(a)
    }, ce = function (a) {
        var b, c = a.split(".");
        b = b || [];
        for (var d = Yd, e = 0; e < c.length; e++) {
            if (null === d) return !1;
            if (void 0 === d) break;
            d = d[c[e]];
            if (-1 !== b.indexOf(d)) return
        }
        return d
    }, de = function (a, b) {
        Zd.hasOwnProperty(a) || (Xd.set(a, b), H(Ta(a, b), Yd), $d())
    }, $d = function (a) {
        ya(Zd, function (b, c) {
            Xd.set(b, c);
            H(Ta(b,
                void 0), Yd);
            H(Ta(b, c), Yd);
            a && delete Zd[b]
        })
    }, fe = function (a, b, c) {
        Wd[a] = Wd[a] || {};
        Wd[a][b] = ee(b, c)
    }, ee = function (a, b) {
        var c, d = 1 !== (void 0 === b ? 2 : b) ? ce(a) : Xd.get(a);
        "array" === Ob(d) || "object" === Ob(d) ? c = H(d) : c = d;
        return c
    }, ge = function (a, b) {
        if (Wd[a]) return Wd[a][b]
    }, he = function (a, b) {
        Wd[a] && delete Wd[a][b]
    };
    var ie = new RegExp(/^(.*\.)?(google|youtube|blogger|withgoogle)(\.com?)?(\.[a-z]{2})?\.?$/), je = {
        cl: ["ecl"],
        customPixels: ["nonGooglePixels"],
        ecl: ["cl"],
        ehl: ["hl"],
        hl: ["ehl"],
        html: ["customScripts", "customPixels", "nonGooglePixels", "nonGoogleScripts", "nonGoogleIframes"],
        customScripts: ["html", "customPixels", "nonGooglePixels", "nonGoogleScripts", "nonGoogleIframes"],
        nonGooglePixels: [],
        nonGoogleScripts: ["nonGooglePixels"],
        nonGoogleIframes: ["nonGooglePixels"]
    }, ke = {
        cl: ["ecl"],
        customPixels: ["customScripts", "html"],
        ecl: ["cl"],
        ehl: ["hl"],
        hl: ["ehl"],
        html: ["customScripts"],
        customScripts: ["html"],
        nonGooglePixels: ["customPixels", "customScripts", "html", "nonGoogleScripts", "nonGoogleIframes"],
        nonGoogleScripts: ["customScripts", "html"],
        nonGoogleIframes: ["customScripts", "html", "nonGoogleScripts"]
    }, le = "google customPixels customScripts html nonGooglePixels nonGoogleScripts nonGoogleIframes".split(" ");
    var me = function () {
        var a = !1;
        a = !0;
        return a
    }, oe = function (a) {
        var b = ae("gtm.allowlist") || ae("gtm.whitelist");
        b && Ad(9);
        me() && (b = "google gtagfl lcl zone oid op".split(" "));
        var c = b && Sa(Ea(b), je), d = ae("gtm.blocklist") ||
            ae("gtm.blacklist");
        d || (d = ae("tagTypeBlacklist")) && Ad(3);
        d ? Ad(8) : d = [];
        ne() && (d = Ea(d), d.push("nonGooglePixels", "nonGoogleScripts", "sandboxedScripts"));
        0 <= Ea(d).indexOf("google") && Ad(2);
        var e = d && Sa(Ea(d), ke), f = {};
        return function (g) {
            var k = g && g[Sb.qb];
            if (!k || "string" != typeof k) return !0;
            k = k.replace(/^_*/, "");
            if (void 0 !== f[k]) return f[k];
            var m = Td[k] || [], n = a(k, m);
            if (b) {
                var p;
                if (p = n) a:{
                    if (0 > c.indexOf(k)) if (m && 0 < m.length) for (var r = 0; r < m.length; r++) {
                        if (0 > c.indexOf(m[r])) {
                            Ad(11);
                            p = !1;
                            break a
                        }
                    } else {
                        p = !1;
                        break a
                    }
                    p = !0
                }
                n = p
            }
            var u = !1;
            if (d) {
                var t = 0 <= e.indexOf(k);
                if (t) u = t; else {
                    var q = xa(e, m || []);
                    q && Ad(10);
                    u = q
                }
            }
            var v = !n || u;
            v || !(0 <= m.indexOf("sandboxedScripts")) || c && -1 !== c.indexOf("sandboxedScripts") || (v = xa(e, le));
            return f[k] = v
        }
    }, ne = function () {
        return ie.test(l.location && l.location.hostname)
    };
    var pe = {
        active: !0, isAllowed: function () {
            return !0
        }
    }, qe = function (a) {
        var b = P.zones;
        return b ? b.checkState(Bd.J, a) : pe
    }, re = function (a) {
        var b = P.zones;
        !b && a && (b = P.zones = a());
        return b
    };
    var se = function (a) {
        this.m = a;
        this.defaultValue = !1
    };
    var te = new se(1933), ue = new se(1956);
    var we = function () {
        var a = ve, b = "Ee";
        if (a.Ee && a.hasOwnProperty(b)) return a.Ee;
        var c = new a;
        a.Ee = c;
        a.hasOwnProperty(b);
        return c
    };
    var ve = function () {
        var a = {};
        this.m = function (b, c) {
            return null != a[b] ? a[b] : c
        };
        this.o = function () {
            a[te.m] = !0
        }
    }, xe = function (a) {
        return we().m(a.m, a.defaultValue)
    };
    var ye = [];

    function ze() {
        var a = ub("google_tag_data", {});
        a.ics || (a.ics = {
            entries: {},
            set: Ae,
            update: Be,
            addListener: Ce,
            notifyListeners: De,
            active: !1,
            usedDefault: !1
        });
        return a.ics
    }

    function Ae(a, b, c, d, e, f) {
        var g = ze();
        g.active = !0;
        g.usedDefault = !0;
        if (void 0 != b) {
            var k = g.entries, m = k[a] || {}, n = m.region, p = c && ra(c) ? c.toUpperCase() : void 0;
            d = d.toUpperCase();
            e = e.toUpperCase();
            if ("" === d || p === e || (p === d ? n !== e : !p && !n)) {
                var r = !!(f && 0 < f && void 0 === m.update),
                    u = {region: p, initial: "granted" === b, update: m.update, quiet: r};
                if ("" !== d || !1 !== m.initial) k[a] = u;
                r && l.setTimeout(function () {
                    k[a] === u && u.quiet && (u.quiet = !1, Ee(a), De(), yd("TAGGING", 2))
                }, f)
            }
        }
    }

    function Be(a, b) {
        var c = ze();
        c.active = !0;
        if (void 0 != b) {
            var d = Fe(a), e = c.entries, f = e[a] = e[a] || {};
            f.update = "granted" === b;
            var g = Fe(a);
            f.quiet ? (f.quiet = !1, Ee(a)) : g !== d && Ee(a)
        }
    }

    function Ce(a, b) {
        ye.push({ve: a, ui: b})
    }

    function Ee(a) {
        for (var b = 0; b < ye.length; ++b) {
            var c = ye[b];
            ta(c.ve) && -1 !== c.ve.indexOf(a) && (c.xg = !0)
        }
    }

    function De(a) {
        for (var b = 0; b < ye.length; ++b) {
            var c = ye[b];
            if (c.xg) {
                c.xg = !1;
                try {
                    c.ui({consentEventId: a})
                } catch (d) {
                }
            }
        }
    }

    var Fe = function (a) {
            var b = ze().entries[a] || {};
            return void 0 !== b.update ? b.update : b.initial
        }, Ge = function (a) {
            return (ze().entries[a] || {}).initial
        }, He = function (a) {
            return !(ze().entries[a] || {}).quiet
        }, Ie = function () {
            return xe(te) ? ze().active : !1
        }, Je = function () {
            return ze().usedDefault
        }, Ke = function (a, b) {
            ze().addListener(a, b)
        }, Le = function (a) {
            ze().notifyListeners(a)
        }, Me = function (a, b) {
            function c() {
                for (var e = 0; e < b.length; e++) if (!He(b[e])) return !0;
                return !1
            }

            if (c()) {
                var d = !1;
                Ke(b, function (e) {
                    d || c() || (d = !0, a(e))
                })
            } else a({})
        },
        Ne = function (a, b) {
            function c() {
                for (var f = [], g = 0; g < d.length; g++) {
                    var k = d[g];
                    !1 === Fe(k) || e[k] || (f.push(k), e[k] = !0)
                }
                return f
            }

            var d = ra(b) ? [b] : b, e = {};
            c().length !== d.length && Ke(d, function (f) {
                var g = c();
                0 < g.length && (f.ve = g, a(f))
            })
        };

    function Ve() {
    }

    function We() {
    };

    function Xe(a) {
        for (var b = [], c = 0; c < Ye.length; c++) {
            var d = a(Ye[c]);
            b[c] = !0 === d ? "1" : !1 === d ? "0" : "-"
        }
        return b.join("")
    }

    var Ye = [N.C, N.H], Ze = function (a) {
        var b = a[N.We];
        b && Ad(40);
        var c = a[N.Xe];
        c && Ad(41);
        for (var d = ta(b) ? b : [b], e = {Tb: 0}; e.Tb < d.length; e = {Tb: e.Tb}, ++e.Tb) ya(a, function (f) {
            return function (g, k) {
                if (g !== N.We && g !== N.Xe) {
                    var m = d[f.Tb];
                    ze().set(g, k, m, "VN", "VN-HN", c)
                }
            }
        }(e))
    }, $e = 0, af = function (a, b) {
        ya(a, function (e, f) {
            ze().update(e, f)
        });
        Le(b);
        var c = La(), d = c - $e;
        $e && 0 <= d && 1E3 > d && Ad(66);
        $e = c
    }, bf = function (a) {
        var b = Fe(a);
        return void 0 != b ? b : !0
    }, cf = function () {
        return "G1" + Xe(Fe)
    }, df = function () {
        return "G1" +
            Xe(Ge)
    }, ef = function (a, b) {
        Ne(a, b)
    }, ff = function (a, b) {
        Me(a, b)
    };
    var hf = function (a) {
        return gf ? B.querySelectorAll(a) : null
    }, jf = function (a, b) {
        if (!gf) return null;
        if (Element.prototype.closest) try {
            return a.closest(b)
        } catch (e) {
            return null
        }
        var c = Element.prototype.matches || Element.prototype.webkitMatchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.msMatchesSelector || Element.prototype.oMatchesSelector,
            d = a;
        if (!B.documentElement.contains(d)) return null;
        do {
            try {
                if (c.call(d, b)) return d
            } catch (e) {
                break
            }
            d = d.parentElement || d.parentNode
        } while (null !== d && 1 === d.nodeType);
        return null
    }, kf = !1;
    if (B.querySelectorAll) try {
        var lf = B.querySelectorAll(":root");
        lf && 1 == lf.length && lf[0] == B.documentElement && (kf = !0)
    } catch (a) {
    }
    var gf = kf;
    var mf = function (a) {
            return void 0 === a || null === a ? "" : ra(a) ? Fa(String(a)) : "e0"
        }, of = function (a) {
            return a.replace(nf, "")
        }, qf = function (a) {
            return pf(a.replace(/\s/g, ""))
        }, pf = function (a) {
            return Fa(a.replace(rf, "").toLowerCase())
        }, tf = function (a) {
            a = a.replace(/[\s-()/.]/g, "");
            "+" !== a.charAt(0) && (a = "+" + a);
            return sf.test(a) ? a : "e0"
        }, vf = function (a) {
            var b = a.toLowerCase().split("@");
            if (2 == b.length) {
                var c = b[0];
                /^(gmail|googlemail)\./.test(b[1]) && (c = c.replace(/\./g, ""));
                c = c + "@" + b[1];
                if (uf.test(c)) return c
            }
            return "e0"
        },
        yf = function (a, b) {
            window.Promise || b([]);
            Promise.all(a.map(function (c) {
                return c.value && -1 !== wf.indexOf(c.name) ? xf(c.value).then(function (d) {
                    c.value = d
                }) : Promise.resolve()
            })).then(function () {
                b(a)
            }).catch(function () {
                b([])
            })
        }, xf = function (a) {
            if ("" === a || "e0" === a) return Promise.resolve(a);
            if (l.crypto && l.crypto.subtle) try {
                var b = zf(a);
                return l.crypto.subtle.digest("SHA-256", b).then(function (c) {
                    var d = Array.from(new Uint8Array(c)).map(function (e) {
                        return String.fromCharCode(e)
                    }).join("");
                    return l.btoa(d).replace(/\+/g,
                        "-").replace(/\//g, "_").replace(/=+$/, "")
                }).catch(function () {
                    return "e2"
                })
            } catch (c) {
                return Promise.resolve("e2")
            } else return Promise.resolve("e1")
        }, zf = function (a) {
            var b;
            if (l.TextEncoder) b = (new l.TextEncoder("utf-8")).encode(a); else {
                for (var c = [], d = 0; d < a.length; d++) {
                    var e = a.charCodeAt(d);
                    128 > e ? c.push(e) : 2048 > e ? c.push(192 | e >> 6, 128 | e & 63) : 55296 > e || 57344 <= e ? c.push(224 | e >> 12, 128 | e >> 6 & 63, 128 | e & 63) : (e = 65536 + ((e & 1023) << 10 | a.charCodeAt(++d) & 1023), c.push(240 | e >> 18, 128 | e >> 12 & 63, 128 | e >> 6 & 63, 128 | e & 63))
                }
                b = new Uint8Array(c)
            }
            return b
        },
        rf = /[0-9`~!@#$%^&*()_\-+=:;<>,.?|/\\[\]]/g, uf = /^\S+@\S+\.\S+$/, sf = /^\+\d{11,15}$/, nf = /[.~]/g,
        Af = {},
        Bf = (Af.email = "em", Af.phone_number = "pn", Af.first_name = "fn", Af.last_name = "ln", Af.street = "sa", Af.city = "ct", Af.region = "rg", Af.country = "co", Af.postal_code = "pc", Af.error_code = "ec", Af),
        Cf = function (a, b) {
            function c(n, p, r) {
                var u = n[p];
                ta(u) || (u = [u]);
                for (var t = 0; t < u.length; ++t) {
                    var q = mf(u[t]);
                    "" !== q && f.push({name: p, value: r(q), index: void 0})
                }
            }

            function d(n, p, r, u) {
                var t = mf(n[p]);
                "" !== t && f.push({name: p, value: r(t), index: u})
            }

            function e(n) {
                return function (p) {
                    Ad(64);
                    return n(p)
                }
            }

            var f = [];
            if ("https:" === l.location.protocol) {
                c(a, "email", vf);
                c(a, "phone_number", tf);
                c(a, "first_name", e(qf));
                c(a, "last_name", e(qf));
                var g = a.home_address || {};
                c(g, "street", e(pf));
                c(g, "city", e(pf));
                c(g, "postal_code", e(of));
                c(g, "region", e(pf));
                c(g, "country", e(of));
                var k = a.address || {};
                ta(k) || (k = [k]);
                for (var m = 0; m < k.length; m++) d(k[m], "first_name", qf, m), d(k[m], "last_name", qf, m), d(k[m], "street", pf, m), d(k[m], "city", pf, m), d(k[m], "postal_code", of, m), d(k[m],
                    "region", pf, m), d(k[m], "country", of, m);
                yf(f, b)
            } else f.push({name: "error_code", value: "e3", index: void 0}), b(f)
        }, Df = function (a, b) {
            Cf(a, function (c) {
                for (var d = ["tv.1"], e = 0, f = 0; f < c.length; ++f) {
                    var g = c[f].name, k = c[f].value, m = c[f].index, n = Bf[g];
                    n && k && (-1 === wf.indexOf(g) || /^e\d+$/.test(k) || /^[0-9A-Za-z_-]{43}$/.test(k)) && (void 0 !== m && (n += m), d.push(n + "." + k), e++)
                }
                1 === c.length && "error_code" === c[0].name && (e = 0);
                b(encodeURIComponent(d.join("~")), e)
            })
        }, Ef = function (a) {
            if (l.Promise) try {
                return new Promise(function (b) {
                    Df(a,
                        function (c, d) {
                            b({zc: c, Dj: d})
                        })
                })
            } catch (b) {
            }
        }, wf = Object.freeze(["email", "phone_number", "first_name", "last_name", "street"]);
    var Ff = function () {
        this.eventModel = {};
        this.targetConfig = {};
        this.containerConfig = {};
        this.globalConfig = {};
        this.remoteConfig = {};
        this.onSuccess = function () {
        };
        this.onFailure = function () {
        };
        this.setContainerTypeLoaded = function () {
        };
        this.getContainerTypeLoaded = function () {
        };
        this.eventId = void 0;
        this.isGtmEvent = !1
    }, Gf = function (a) {
        var b = new Ff;
        b.eventModel = a;
        return b
    }, Hf = function (a, b) {
        a.targetConfig = b;
        return a
    }, If = function (a, b) {
        a.containerConfig = b;
        return a
    }, Jf = function (a, b) {
        a.globalConfig = b;
        return a
    }, Kf = function (a,
                      b) {
        a.remoteConfig = b;
        return a
    }, Lf = function (a, b) {
        a.onSuccess = b;
        return a
    }, Mf = function (a, b) {
        a.setContainerTypeLoaded = b;
        return a
    }, Nf = function (a, b) {
        a.getContainerTypeLoaded = b;
        return a
    }, Of = function (a, b) {
        a.onFailure = b;
        return a
    };
    Ff.prototype.getWithConfig = function (a) {
        if (void 0 !== this.eventModel[a]) return this.eventModel[a];
        if (void 0 !== this.targetConfig[a]) return this.targetConfig[a];
        if (void 0 !== this.containerConfig[a]) return this.containerConfig[a];
        if (void 0 !== this.globalConfig[a]) return this.globalConfig[a];
        if (void 0 !== this.remoteConfig[a]) return this.remoteConfig[a]
    };
    var Pf = function (a) {
        function b(d) {
            for (var e = Object.keys(d), f = 0; f < e.length; ++f) c[e[f]] = 1
        }

        var c = {};
        b(a.eventModel);
        b(a.targetConfig);
        b(a.containerConfig);
        b(a.globalConfig);
        return Object.keys(c)
    }, Qf = function (a, b, c) {
        function d(g) {
            Qb(g) && ya(g, function (k, m) {
                f = !0;
                e[k] = m
            })
        }

        var e = {}, f = !1;
        c && 1 !== c || (d(a.remoteConfig[b]), d(a.globalConfig[b]), d(a.containerConfig[b]), d(a.targetConfig[b]));
        c && 2 !== c || d(a.eventModel[b]);
        return f ? e : void 0
    }, Rf = function (a) {
        var b = [N.Yb, N.ff, N.hf, N.jf, N.kf, N.lf, N.nf], c = {}, d = !1, e = function (f) {
            for (var g =
                0; g < b.length; g++) void 0 !== f[b[g]] && (c[b[g]] = f[b[g]], d = !0);
            return d
        };
        if (e(a.eventModel) || e(a.targetConfig) || e(a.containerConfig) || e(a.globalConfig)) return c;
        e(a.remoteConfig);
        return c
    };
    var Sf, Tf = !1, Uf = function (a) {
        if (!Tf) {
            Tf = !0;
            Sf = Sf || {}
        }
        return Sf[a]
    };
    var Vf = function (a) {
        if (B.hidden) return !0;
        var b = a.getBoundingClientRect();
        if (b.top == b.bottom || b.left == b.right || !l.getComputedStyle) return !0;
        var c = l.getComputedStyle(a, null);
        if ("hidden" === c.visibility) return !0;
        for (var d = a, e = c; d;) {
            if ("none" === e.display) return !0;
            var f = e.opacity, g = e.filter;
            if (g) {
                var k = g.indexOf("opacity(");
                0 <= k && (g = g.substring(k + 8, g.indexOf(")", k)), "%" == g.charAt(g.length - 1) && (g = g.substring(0, g.length - 1)), f = Math.min(g, f))
            }
            if (void 0 !== f && 0 >= f) return !0;
            (d = d.parentElement) && (e = l.getComputedStyle(d,
                null))
        }
        return !1
    };
    var dg = /:[0-9]+$/, eg = function (a, b, c) {
        for (var d = a.split("&"), e = 0; e < d.length; e++) {
            var f = d[e].split("=");
            if (decodeURIComponent(f[0]).replace(/\+/g, " ") === b) {
                var g = f.slice(1).join("=");
                return c ? g : decodeURIComponent(g).replace(/\+/g, " ")
            }
        }
    }, hg = function (a, b, c, d, e) {
        b && (b = String(b).toLowerCase());
        if ("protocol" === b || "port" === b) a.protocol = fg(a.protocol) || fg(l.location.protocol);
        "port" === b ? a.port = String(Number(a.hostname ? a.port : l.location.port) || ("http" == a.protocol ? 80 : "https" == a.protocol ? 443 : "")) : "host" === b &&
            (a.hostname = (a.hostname || l.location.hostname).replace(dg, "").toLowerCase());
        return gg(a, b, c, d, e)
    }, gg = function (a, b, c, d, e) {
        var f, g = fg(a.protocol);
        b && (b = String(b).toLowerCase());
        switch (b) {
            case "url_no_fragment":
                f = ig(a);
                break;
            case "protocol":
                f = g;
                break;
            case "host":
                f = a.hostname.replace(dg, "").toLowerCase();
                if (c) {
                    var k = /^www\d*\./.exec(f);
                    k && k[0] && (f = f.substr(k[0].length))
                }
                break;
            case "port":
                f = String(Number(a.port) || ("http" == g ? 80 : "https" == g ? 443 : ""));
                break;
            case "path":
                a.pathname || a.hostname || yd("TAGGING",
                    1);
                f = "/" == a.pathname.substr(0, 1) ? a.pathname : "/" + a.pathname;
                var m = f.split("/");
                0 <= (d || []).indexOf(m[m.length - 1]) && (m[m.length - 1] = "");
                f = m.join("/");
                break;
            case "query":
                f = a.search.replace("?", "");
                e && (f = eg(f, e, void 0));
                break;
            case "extension":
                var n = a.pathname.split(".");
                f = 1 < n.length ? n[n.length - 1] : "";
                f = f.split("/")[0];
                break;
            case "fragment":
                f = a.hash.replace("#", "");
                break;
            default:
                f = a && a.href
        }
        return f
    }, fg = function (a) {
        return a ? a.replace(":", "").toLowerCase() : ""
    }, ig = function (a) {
        var b = "";
        if (a && a.href) {
            var c = a.href.indexOf("#");
            b = 0 > c ? a.href : a.href.substr(0, c)
        }
        return b
    }, jg = function (a) {
        var b = B.createElement("a");
        a && (b.href = a);
        var c = b.pathname;
        "/" !== c[0] && (a || yd("TAGGING", 1), c = "/" + c);
        var d = b.hostname.replace(dg, "");
        return {
            href: b.href,
            protocol: b.protocol,
            host: b.host,
            hostname: d,
            pathname: c,
            search: b.search,
            hash: b.hash,
            port: b.port
        }
    }, kg = function (a) {
        function b(n) {
            var p = n.split("=")[0];
            return 0 > d.indexOf(p) ? n : p + "=0"
        }

        function c(n) {
            return n.split("&").map(b).filter(function (p) {
                return void 0 != p
            }).join("&")
        }

        var d = "gclid dclid gbraid wbraid gclaw gcldc gclha gclgf gclgb _gl".split(" "),
            e = jg(a), f = a.split(/[?#]/)[0], g = e.search, k = e.hash;
        "?" === g[0] && (g = g.substring(1));
        "#" === k[0] && (k = k.substring(1));
        g = c(g);
        k = c(k);
        "" !== g && (g = "?" + g);
        "" !== k && (k = "#" + k);
        var m = "" + f + g + k;
        "/" === m[m.length - 1] && (m = m.substring(0, m.length - 1));
        return m
    };
    var lg = {};
    var og = function (a) {
        if (0 == a.length) return null;
        var b;
        b = mg(a, function (c) {
            return !ng.test(c.Ra)
        });
        b = mg(b, function (c) {
            return "INPUT" === c.element.tagName.toUpperCase()
        });
        b = mg(b, function (c) {
            return !Vf(c.element)
        });
        return b[0]
    }, mg = function (a, b) {
        if (1 >= a.length) return a;
        var c = a.filter(b);
        return 0 == c.length ? a : c
    }, pg = function (a) {
        var b;
        if (a === B.body) b = "body"; else {
            var c;
            if (a.id) c = "#" + a.id; else {
                var d;
                if (a.parentElement) {
                    var e;
                    a:{
                        var f = a.parentElement;
                        if (f) {
                            for (var g = 0; g < f.childElementCount; g++) if (f.children[g] === a) {
                                e =
                                    g + 1;
                                break a
                            }
                            e = -1
                        } else e = 1
                    }
                    d = pg(a.parentElement) + ">:nth-child(" + e + ")"
                } else d = "";
                c = d
            }
            b = c
        }
        return b
    }, qg = !0, rg = !1;
    lg.Ug = "true";
    var sg = function (a) {
            if ("false" === lg.Ug || !qg) return !1;
            if (rg) return !0;
            var b = Uf("AW-" +
                a);
            return !!b && !!b.preAutoPii
        }, tg = new RegExp(/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}/i), ug = new RegExp(/@(gmail|googlemail)\./i),
        ng = new RegExp(/support|noreply/i), vg = "SCRIPT STYLE IMG SVG PATH BR".split(" "), wg = ["BR"], xg = {},
        yg = function (a) {
            a = a || {Ce: !0, De: !0};
            a.cb = a.cb || {email: !0, phone: !0, Yf: !0};
            var b, c = a, d = !!c.Ce + "." + !!c.De;
            c && c.od && c.od.length && (d += "." + c.od.join("."));
            c && c.cb && (d += "." + c.cb.email + "." + c.cb.phone + "." + c.cb.Yf);
            b = d;
            var e = xg[b];
            if (e && 200 > La() - e.timestamp) return e.result;
            var f;
            var g = [], k = B.body;
            if (k) {
                for (var m = k.querySelectorAll("*"), n = 0; n < m.length && 1E4 > n; n++) {
                    var p = m[n];
                    if (!(0 <= vg.indexOf(p.tagName.toUpperCase())) && p.children instanceof HTMLCollection) {
                        for (var r = !1, u = 0; u < p.childElementCount && 1E4 > u; u++) if (!(0 <= wg.indexOf(p.children[u].tagName.toUpperCase()))) {
                            r = !0;
                            break
                        }
                        r || g.push(p)
                    }
                }
                f = {elements: g, status: 1E4 < m.length ? "2" : "1"}
            } else f = {elements: g, status: "4"};
            var t = f, q = t.status, v;
            if (a.cb && a.cb.email) {
                for (var x = t.elements, z = [], w = 0; w < x.length; w++) {
                    var y = x[w], A = y.textContent;
                    "INPUT" === y.tagName.toUpperCase() &&
                    y.value && (A = y.value);
                    if (A) {
                        var C = A.match(tg);
                        if (C) {
                            var F = C[0], D;
                            if (l.location) {
                                var E = gg(l.location, "host", !0);
                                D = 0 <= F.toLowerCase().indexOf(E)
                            } else D = !1;
                            D || z.push({element: y, Ra: F})
                        }
                    }
                }
                var O;
                var K = a && a.od;
                if (K && 0 !== K.length) {
                    for (var L = [], M = 0; M < z.length; M++) {
                        for (var J = !0, I = 0; I < K.length; I++) {
                            var V = K[I];
                            if (V && jf(z[M].element, V)) {
                                J = !1;
                                break
                            }
                        }
                        J && L.push(z[M])
                    }
                    O = L
                } else O = z;
                v = og(O);
                10 < z.length && (q = "3")
            }
            var T = [];
            if (v) {
                var X = v.element, S = {Ra: v.Ra, tagName: X.tagName, type: 1};
                a.Ce && (S.querySelector = pg(X));
                a.De && (S.isVisible =
                    !Vf(X));
                T.push(S)
            }
            var W = {elements: T, status: q};
            xg[b] = {timestamp: La(), result: W};
            return W
        }, zg = function (a) {
            return a.tagName + ":" + a.isVisible + ":" + a.Ra.length + ":" + ug.test(a.Ra)
        };
    var Ag = function (a, b, c) {
        if (c) {
            var d = c.selector_type, e = String(c.value), f;
            if ("js_variable" === d) {
                e = e.replace(/\["?'?/g, ".").replace(/"?'?\]/g, "");
                for (var g = e.split(","), k = 0; k < g.length; k++) {
                    var m = g[k].trim();
                    if (m) {
                        if (0 === m.indexOf("dataLayer.")) f = ae(m.substring(10)); else {
                            var n = m.split(".");
                            f = l[n.shift()];
                            for (var p = 0; p < n.length; p++) f = f && f[n[p]]
                        }
                        if (void 0 !== f) break
                    }
                }
            } else if ("css_selector" === d && gf) {
                var r = hf(e);
                r && 0 < r.length && (f = Fb(r[0]) || Fa(r[0].value))
            }
            f && (a[b] = f)
        }
    }, Gg = function (a) {
        if (a) {
            var b = {};
            Ag(b, "email",
                a.email);
            Ag(b, "phone_number", a.phone);
            b.address = [];
            for (var c = a.name_and_address || [], d = 0; d < c.length; d++) {
                var e = {};
                Ag(e, "first_name", c[d].first_name);
                Ag(e, "last_name", c[d].last_name);
                Ag(e, "street", c[d].street);
                Ag(e, "city", c[d].city);
                Ag(e, "region", c[d].region);
                Ag(e, "country", c[d].country);
                Ag(e, "postal_code", c[d].postal_code);
                b.address.push(e)
            }
            return b
        }
    }, Hg = function (a) {
        if (a) switch (a.mode) {
            case "selectors":
                return Gg(a.selectors);
            case "auto_detect":
                var b;
                var c = a.auto_detect;
                if (c) {
                    var d = yg({
                        Ce: !1, De: !1,
                        od: c.exclude_element_selectors, cb: {email: !!c.email, phone: !!c.phone, Yf: !!c.address}
                    }).elements, e = {};
                    if (0 < d.length) for (var f = 0; f < d.length; f++) {
                        var g = d[f];
                        if (1 === g.type) {
                            e.email = g.Ra;
                            break
                        }
                    }
                    b = e
                } else b = void 0;
                return b
        }
    }, Ig = function (a) {
        switch (a.enhanced_conversions_mode) {
            case "manual":
                var b = a.enhanced_conversions_manual_var;
                return void 0 !== b ? b : l.enhanced_conversion_data;
            case "automatic":
                return Gg(a[N.tf])
        }
    };
    var Jg = {}, Kg = function (a, b) {
        if (l._gtmexpgrp && l._gtmexpgrp.hasOwnProperty(a)) return l._gtmexpgrp[a];
        void 0 === Jg[a] && (Jg[a] = Math.floor(Math.random() * b));
        return Jg[a]
    };
    var Lg = function (a) {
        var b = 1, c, d, e;
        if (a) for (b = 0, d = a.length - 1; 0 <= d; d--) e = a.charCodeAt(d), b = (b << 6 & 268435455) + e + (e << 14), c = b & 266338304, b = 0 != c ? b ^ c >> 21 : b;
        return b
    };
    var Mg = function (a, b, c) {
        for (var d = [], e = b.split(";"), f = 0; f < e.length; f++) {
            var g = e[f].split("="), k = g[0].replace(/^\s*|\s*$/g, "");
            if (k && k == a) {
                var m = g.slice(1).join("=").replace(/^\s*|\s*$/g, "");
                m && c && (m = decodeURIComponent(m));
                d.push(m)
            }
        }
        return d
    };

    function Ng(a) {
        return "null" !== a.origin
    };var Qg = function (a, b, c, d) {
        return Og(d) ? Mg(a, String(b || Pg()), c) : []
    }, Tg = function (a, b, c, d, e) {
        if (Og(e)) {
            var f = Rg(a, d, e);
            if (1 === f.length) return f[0].id;
            if (0 !== f.length) {
                f = Sg(f, function (g) {
                    return g.md
                }, b);
                if (1 === f.length) return f[0].id;
                f = Sg(f, function (g) {
                    return g.Ac
                }, c);
                return f[0] ? f[0].id : void 0
            }
        }
    };

    function Ug(a, b, c, d) {
        var e = Pg(), f = window;
        Ng(f) && (f.document.cookie = a);
        var g = Pg();
        return e != g || void 0 != c && 0 <= Qg(b, g, !1, d).indexOf(c)
    }

    var Yg = function (a, b, c) {
        function d(t, q, v) {
            if (null == v) return delete g[q], t;
            g[q] = v;
            return t + "; " + q + "=" + v
        }

        function e(t, q) {
            if (null == q) return delete g[q], t;
            g[q] = !0;
            return t + "; " + q
        }

        if (!Og(c.Ga)) return 2;
        var f;
        void 0 == b ? f = a + "=deleted; expires=" + (new Date(0)).toUTCString() : (c.encode && (b = encodeURIComponent(b)), b = Vg(b), f = a + "=" + b);
        var g = {};
        f = d(f, "path", c.path);
        var k;
        c.expires instanceof Date ? k = c.expires.toUTCString() : null != c.expires && (k = "" + c.expires);
        f = d(f, "expires", k);
        f = d(f, "max-age", c.Cj);
        f = d(f, "samesite",
            c.Ej);
        c.Fj && (f = e(f, "secure"));
        var m = c.domain;
        if (m && "auto" === m.toLowerCase()) {
            for (var n = Wg(), p = 0; p < n.length; ++p) {
                var r = "none" !== n[p] ? n[p] : void 0, u = d(f, "domain", r);
                u = e(u, c.flags);
                if (!Xg(r, c.path) && Ug(u, a, b, c.Ga)) return 0
            }
            return 1
        }
        m && "none" !== m.toLowerCase() && (f = d(f, "domain", m));
        f = e(f, c.flags);
        return Xg(m, c.path) ? 1 : Ug(f, a, b, c.Ga) ? 0 : 1
    }, Zg = function (a, b, c) {
        null == c.path && (c.path = "/");
        c.domain || (c.domain = "auto");
        return Yg(a, b, c)
    };

    function Sg(a, b, c) {
        for (var d = [], e = [], f, g = 0; g < a.length; g++) {
            var k = a[g], m = b(k);
            m === c ? d.push(k) : void 0 === f || m < f ? (e = [k], f = m) : m === f && e.push(k)
        }
        return 0 < d.length ? d : e
    }

    function Rg(a, b, c) {
        for (var d = [], e = Qg(a, void 0, void 0, c), f = 0; f < e.length; f++) {
            var g = e[f].split("."), k = g.shift();
            if (!b || -1 !== b.indexOf(k)) {
                var m = g.shift();
                m && (m = m.split("-"), d.push({id: g.join("."), md: 1 * m[0] || 1, Ac: 1 * m[1] || 1}))
            }
        }
        return d
    }

    var Vg = function (a) {
        a && 1200 < a.length && (a = a.substring(0, 1200));
        return a
    }, $g = /^(www\.)?google(\.com?)?(\.[a-z]{2})?$/, ah = /(^|\.)doubleclick\.net$/i, Xg = function (a, b) {
        return ah.test(window.document.location.hostname) || "/" === b && $g.test(a)
    }, Pg = function () {
        return Ng(window) ? window.document.cookie : ""
    }, Wg = function () {
        var a = [], b = window.document.location.hostname.split(".");
        if (4 === b.length) {
            var c = b[b.length - 1];
            if (parseInt(c, 10).toString() === c) return ["none"]
        }
        for (var d = b.length - 2; 0 <= d; d--) a.push(b.slice(d).join("."));
        var e = window.document.location.hostname;
        ah.test(e) || $g.test(e) || a.push("none");
        return a
    }, Og = function (a) {
        if (!xe(te) || !a || !Ie()) return !0;
        if (!He(a)) return !1;
        var b = Fe(a);
        return null == b ? !0 : !!b
    };
    var bh = function (a) {
        var b = Math.round(2147483647 * Math.random()), c = b;
        a && (c = b ^ Lg(a) & 2147483647);
        return [c, Math.round(La() / 1E3)].join(".")
    }, eh = function (a, b, c, d, e) {
        var f = ch(b);
        return Tg(a, f, dh(c), d, e)
    }, fh = function (a, b, c, d) {
        var e = "" + ch(c), f = dh(d);
        1 < f && (e += "-" + f);
        return [b, e, a].join(".")
    }, ch = function (a) {
        if (!a) return 1;
        a = 0 === a.indexOf(".") ? a.substr(1) : a;
        return a.split(".").length
    }, dh = function (a) {
        if (!a || "/" === a) return 1;
        "/" !== a[0] && (a = "/" + a);
        "/" !== a[a.length - 1] && (a += "/");
        return a.split("/").length - 1
    };

    function gh(a, b, c) {
        var d, e = Number(null != a.eb ? a.eb : void 0);
        0 !== e && (d = new Date((b || La()) + 1E3 * (e || 7776E3)));
        return {path: a.path, domain: a.domain, flags: a.flags, encode: !!c, expires: d}
    };var hh = ["1"], ih = {}, lh = function (a, b) {
        b = void 0 === b ? !0 : b;
        var c = jh(a.prefix);
        if (!ih[c] && !kh(c, a.path, a.domain) && b) {
            var d = jh(a.prefix), e = bh(), f = fh(e, "1", a.domain, a.path), g = gh(a);
            g.Ga = "ad_storage";
            if (0 === Zg(d, f, g)) {
                var k = ub("google_tag_data", {});
                k._gcl_au ? yd("GTM", 57) : k._gcl_au = e
            }
            kh(c, a.path, a.domain)
        }
    };

    function kh(a, b, c) {
        var d = eh(a, b, c, hh, "ad_storage");
        if (!d) return !1;
        var e = d.split(".");
        5 === e.length ? (ih[a] = e.slice(0, 2).join("."), e.slice(2, 4).join(".")) : 3 === e.length ? e.slice(0, 2).join(".") : ih[a] = d;
        return !0
    }

    function jh(a) {
        return (a || "_gcl") + "_au"
    };var mh = function (a) {
        for (var b = [], c = B.cookie.split(";"), d = new RegExp("^\\s*" + (a || "_gac") + "_(UA-\\d+-\\d+)=\\s*(.+?)\\s*$"), e = 0; e < c.length; e++) {
            var f = c[e].match(d);
            f && b.push({Te: f[1], value: f[2], timestamp: Number(f[2].split(".")[1]) || 0})
        }
        b.sort(function (g, k) {
            return k.timestamp - g.timestamp
        });
        return b
    };

    function nh(a, b) {
        var c = mh(a), d = {};
        if (!c || !c.length) return d;
        for (var e = 0; e < c.length; e++) {
            var f = c[e].value.split(".");
            if (!("1" !== f[0] || b && 3 > f.length || !b && 3 !== f.length) && Number(f[1])) {
                d[c[e].Te] || (d[c[e].Te] = []);
                var g = {version: f[0], timestamp: 1E3 * Number(f[1]), ra: f[2]};
                b && 3 < f.length && (g.labels = f.slice(3));
                d[c[e].Te].push(g)
            }
        }
        return d
    };

    function oh() {
        for (var a = ph, b = {}, c = 0; c < a.length; ++c) b[a[c]] = c;
        return b
    }

    function qh() {
        var a = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        a += a.toLowerCase() + "0123456789-_";
        return a + "."
    }

    var ph, rh;

    function sh(a) {
        ph = ph || qh();
        rh = rh || oh();
        for (var b = [], c = 0; c < a.length; c += 3) {
            var d = c + 1 < a.length, e = c + 2 < a.length, f = a.charCodeAt(c), g = d ? a.charCodeAt(c + 1) : 0,
                k = e ? a.charCodeAt(c + 2) : 0, m = f >> 2, n = (f & 3) << 4 | g >> 4, p = (g & 15) << 2 | k >> 6,
                r = k & 63;
            e || (r = 64, d || (p = 64));
            b.push(ph[m], ph[n], ph[p], ph[r])
        }
        return b.join("")
    }

    function th(a) {
        function b(m) {
            for (; d < a.length;) {
                var n = a.charAt(d++), p = rh[n];
                if (null != p) return p;
                if (!/^[\s\xa0]*$/.test(n)) throw Error("Unknown base64 encoding at char: " + n);
            }
            return m
        }

        ph = ph || qh();
        rh = rh || oh();
        for (var c = "", d = 0; ;) {
            var e = b(-1), f = b(0), g = b(64), k = b(64);
            if (64 === k && -1 === e) return c;
            c += String.fromCharCode(e << 2 | f >> 4);
            64 != g && (c += String.fromCharCode(f << 4 & 240 | g >> 2), 64 != k && (c += String.fromCharCode(g << 6 & 192 | k)))
        }
    };var uh, vh = function (a) {
        var b;
        if (!(b = uh)) {
            for (var c = Array(256), d = 0; 256 > d; d++) {
                for (var e = d, f = 0; 8 > f; f++) e = e & 1 ? e >>> 1 ^ 3988292384 : e >>> 1;
                c[d] = e
            }
            b = c
        }
        uh = b;
        for (var g = 4294967295, k = 0; k < a.length; k++) g = g >>> 8 ^ uh[(g ^ a.charCodeAt(k)) & 255];
        return (g ^ -1) >>> 0
    };
    var zh = function () {
        var a = wh, b = xh, c = yh(), d = function (g) {
            a(g.target || g.srcElement || {})
        }, e = function (g) {
            b(g.target || g.srcElement || {})
        };
        if (!c.init) {
            Cb(B, "mousedown", d);
            Cb(B, "keyup", d);
            Cb(B, "submit", e);
            var f = HTMLFormElement.prototype.submit;
            HTMLFormElement.prototype.submit = function () {
                b(this);
                f.call(this)
            };
            c.init = !0
        }
    }, Ah = function (a, b, c, d, e) {
        var f = {callback: a, domains: b, fragment: 2 === c, placement: c, forms: d, sameHost: e};
        yh().decorators.push(f)
    }, Bh = function (a, b, c) {
        for (var d = yh().decorators, e = {}, f = 0; f < d.length; ++f) {
            var g =
                d[f], k;
            if (k = !c || g.forms) a:{
                var m = g.domains, n = a, p = !!g.sameHost;
                if (m && (p || n !== B.location.hostname)) for (var r = 0; r < m.length; r++) if (m[r] instanceof RegExp) {
                    if (m[r].test(n)) {
                        k = !0;
                        break a
                    }
                } else if (0 <= n.indexOf(m[r]) || p && 0 <= m[r].indexOf(n)) {
                    k = !0;
                    break a
                }
                k = !1
            }
            if (k) {
                var u = g.placement;
                void 0 == u && (u = g.fragment ? 2 : 1);
                u === b && Qa(e, g.callback())
            }
        }
        return e
    };

    function yh() {
        var a = ub("google_tag_data", {}), b = a.gl;
        b && b.decorators || (b = {decorators: []}, a.gl = b);
        return b
    };var Ch = /(.*?)\*(.*?)\*(.*)/, Dh = /^https?:\/\/([^\/]*?)\.?cdn\.ampproject\.org\/?(.*)/,
        Eh = /^(?:www\.|m\.|amp\.)+/, Fh = /([^?#]+)(\?[^#]*)?(#.*)?/;

    function Gh(a) {
        return new RegExp("(.*?)(^|&)" + a + "=([^&]*)&?(.*)")
    }

    var Jh = function (a, b) {
        var c = [], d;
        for (d in a) if (a.hasOwnProperty(d)) {
            var e = a[d];
            void 0 !== e && e === e && null !== e && "[object Object]" !== e.toString() && (c.push(d), c.push(sh(String(e))))
        }
        var f = c.join("*");
        if (void 0 !== b) {
            var g = "xp_" + b, k = Hh[b](f);
            f = f + "*" + [g, sh(String(k))].join("*")
        }
        return ["1", Ih(f), f].join("*")
    };

    function Ih(a, b) {
        var c = [l.navigator.userAgent, (new Date).getTimezoneOffset(), Lb(), Math.floor(La() / 60 / 1E3) - (void 0 === b ? 0 : b), a].join("*");
        return vh(c).toString(36)
    }

    var Kh = {}, Hh = (Kh[1] = Lh, Kh[2] = Mh, Kh);

    function Lh(a, b) {
        var c = [(new Date).getTimezoneOffset(), Lb(), Math.floor(La() / 60 / 1E3) - (void 0 === b ? 0 : b), a].join("*");
        return vh(c).toString(36)
    }

    function Mh(a, b) {
        if (sb.userAgentData) {
            var c = [(new Date).getTimezoneOffset(), Lb(), Math.floor(La() / 60 / 1E3) - (void 0 === b ? 0 : b), sb.userAgentData.brands, sb.userAgentData.mobile, sb.userAgentData.platform, a].join("*");
            return vh(c).toString(36)
        }
    }

    function Nh() {
        return function (a) {
            var b = jg(l.location.href), c = b.search.replace("?", ""), d = eg(c, "_gl", !0) || "";
            a.query = Oh(d) || {};
            var e = hg(b, "fragment").match(Gh("_gl"));
            a.fragment = Oh(e && e[3] || "") || {}
        }
    }

    var Ph = function (a) {
        var b = Nh(), c = yh();
        c.data || (c.data = {query: {}, fragment: {}}, b(c.data));
        var d = {}, e = c.data;
        e && (Qa(d, e.query), a && Qa(d, e.fragment));
        return d
    }, Oh = function (a) {
        var b;
        b = void 0 === b ? 3 : b;
        try {
            if (a) {
                var c;
                a:{
                    for (var d = a, e = 0; 3 > e; ++e) {
                        var f = Ch.exec(d);
                        if (f) {
                            c = f;
                            break a
                        }
                        d = decodeURIComponent(d)
                    }
                    c = void 0
                }
                var g = c;
                if (g && "1" === g[1]) {
                    var k = g[3], m;
                    a:{
                        for (var n = g[2], p = 0; p < b; ++p) if (n === Ih(k, p)) {
                            m = !0;
                            break a
                        }
                        m = !1
                    }
                    if (m) {
                        for (var r = {}, u = k ? k.split("*") : [], t = 0; t < u.length; t += 2) r[u[t]] = th(u[t + 1]);
                        return r
                    }
                }
            }
        } catch (q) {
        }
    };

    function Qh(a, b, c, d) {
        function e(p) {
            var r = p, u = Gh(a).exec(r), t = r;
            if (u) {
                var q = u[2], v = u[4];
                t = u[1];
                v && (t = t + q + v)
            }
            p = t;
            var x = p.charAt(p.length - 1);
            p && "&" !== x && (p += "&");
            return p + n
        }

        d = void 0 === d ? !1 : d;
        var f = Fh.exec(c);
        if (!f) return "";
        var g = f[1], k = f[2] || "", m = f[3] || "", n = a + "=" + b;
        d ? m = "#" + e(m.substring(1)) : k = "?" + e(k.substring(1));
        return "" + g + k + m
    }

    function Rh(a, b) {
        var c = "FORM" === (a.tagName || "").toUpperCase(), d = Bh(b, 1, c), e = Bh(b, 2, c), f = Bh(b, 3, c);
        if (Ra(d)) {
            var g = Jh(d, void 0);
            c ? Sh("_gl", g, a) : Th("_gl", g, a, !1)
        }
        if (!c && Ra(e)) {
            var k = Jh(e);
            Th("_gl", k, a, !0)
        }
        for (var m in f) if (f.hasOwnProperty(m)) a:{
            var n = m, p = f[m], r = a;
            if (r.tagName) {
                if ("a" === r.tagName.toLowerCase()) {
                    Th(n, p, r, void 0);
                    break a
                }
                if ("form" === r.tagName.toLowerCase()) {
                    Sh(n, p, r);
                    break a
                }
            }
            "string" == typeof r && Qh(n, p, r, void 0)
        }
    }

    function Th(a, b, c, d) {
        if (c.href) {
            var e = Qh(a, b, c.href, void 0 === d ? !1 : d);
            ab.test(e) && (c.href = e)
        }
    }

    function Sh(a, b, c) {
        if (c && c.action) {
            var d = (c.method || "").toLowerCase();
            if ("get" === d) {
                for (var e = c.childNodes || [], f = !1, g = 0; g < e.length; g++) {
                    var k = e[g];
                    if (k.name === a) {
                        k.setAttribute("value", b);
                        f = !0;
                        break
                    }
                }
                if (!f) {
                    var m = B.createElement("input");
                    m.setAttribute("type", "hidden");
                    m.setAttribute("name", a);
                    m.setAttribute("value", b);
                    c.appendChild(m)
                }
            } else if ("post" === d) {
                var n = Qh(a, b, c.action);
                ab.test(n) && (c.action = n)
            }
        }
    }

    function wh(a) {
        try {
            var b;
            a:{
                for (var c = a, d = 100; c && 0 < d;) {
                    if (c.href && c.nodeName.match(/^a(?:rea)?$/i)) {
                        b = c;
                        break a
                    }
                    c = c.parentNode;
                    d--
                }
                b = null
            }
            var e = b;
            if (e) {
                var f = e.protocol;
                "http:" !== f && "https:" !== f || Rh(e, e.hostname)
            }
        } catch (g) {
        }
    }

    function xh(a) {
        try {
            if (a.action) {
                var b = hg(jg(a.action), "host");
                Rh(a, b)
            }
        } catch (c) {
        }
    }

    var Uh = function (a, b, c, d) {
        zh();
        Ah(a, b, "fragment" === c ? 2 : 1, !!d, !1)
    }, Vh = function (a, b) {
        zh();
        Ah(a, [gg(l.location, "host", !0)], b, !0, !0)
    }, Wh = function () {
        var a = B.location.hostname, b = Dh.exec(B.referrer);
        if (!b) return !1;
        var c = b[2], d = b[1], e = "";
        if (c) {
            var f = c.split("/"), g = f[1];
            e = "s" === g ? decodeURIComponent(f[2]) : decodeURIComponent(g)
        } else if (d) {
            if (0 === d.indexOf("xn--")) return !1;
            e = d.replace(/-/g, ".").replace(/\.\./g, "-")
        }
        var k = a.replace(Eh, ""), m = e.replace(Eh, ""), n;
        if (!(n = k === m)) {
            var p = "." + m;
            n = k.substring(k.length - p.length,
                k.length) === p
        }
        return n
    }, Xh = function (a, b) {
        return !1 === a ? !1 : a || b || Wh()
    };
    var Yh = {};
    var Zh = /^\w+$/, $h = /^[\w-]+$/, ai = {aw: "_aw", dc: "_dc", gf: "_gf", ha: "_ha", gp: "_gp", gb: "_gb"},
        bi = function () {
            if (!xe(te) || !Ie()) return !0;
            var a = Fe("ad_storage");
            return null == a ? !0 : !!a
        }, ci = function (a, b) {
            He("ad_storage") ? bi() ? a() : Ne(a, "ad_storage") : b ? yd("TAGGING", 3) : Me(function () {
                ci(a, !0)
            }, ["ad_storage"])
        }, ei = function (a) {
            return di(a).map(function (b) {
                return b.ra
            })
        }, di = function (a) {
            var b = [];
            if (!Ng(l) || !B.cookie) return b;
            var c = Qg(a, B.cookie, void 0, "ad_storage");
            if (!c || 0 == c.length) return b;
            for (var d = {}, e = 0; e < c.length; d =
                {Hc: d.Hc}, e++) {
                var f = fi(c[e]);
                if (null != f) {
                    var g = f, k = g.version;
                    d.Hc = g.ra;
                    var m = g.timestamp, n = g.labels, p = ua(b, function (r) {
                        return function (u) {
                            return u.ra === r.Hc
                        }
                    }(d));
                    p ? (p.timestamp = Math.max(p.timestamp, m), p.labels = gi(p.labels, n || [])) : b.push({
                        version: k,
                        ra: d.Hc,
                        timestamp: m,
                        labels: n
                    })
                }
            }
            b.sort(function (r, u) {
                return u.timestamp - r.timestamp
            });
            return hi(b)
        };

    function gi(a, b) {
        for (var c = {}, d = [], e = 0; e < a.length; e++) c[a[e]] = !0, d.push(a[e]);
        for (var f = 0; f < b.length; f++) c[b[f]] || d.push(b[f]);
        return d
    }

    function ii(a) {
        return a && "string" == typeof a && a.match(Zh) ? a : "_gcl"
    }

    var ki = function () {
        var a = jg(l.location.href), b = hg(a, "query", !1, void 0, "gclid"), c = hg(a, "query", !1, void 0, "gclsrc"),
            d = hg(a, "query", !1, void 0, "wbraid"), e = hg(a, "query", !1, void 0, "dclid");
        if (!b || !c || !d) {
            var f = a.hash.replace("#", "");
            b = b || eg(f, "gclid", void 0);
            c = c || eg(f, "gclsrc", void 0);
            d = d || eg(f, "wbraid", void 0)
        }
        return ji(b, c, e, d)
    }, ji = function (a, b, c, d) {
        var e = {}, f = function (g, k) {
            e[k] || (e[k] = []);
            e[k].push(g)
        };
        e.gclid = a;
        e.gclsrc = b;
        e.dclid = c;
        void 0 !== d && $h.test(d) && (e.gbraid = d, f(d, "gb"));
        if (void 0 !== a && a.match($h)) switch (b) {
            case void 0:
                f(a,
                    "aw");
                break;
            case "aw.ds":
                f(a, "aw");
                f(a, "dc");
                break;
            case "ds":
                f(a, "dc");
                break;
            case "3p.ds":
                f(a, "dc");
                break;
            case "gf":
                f(a, "gf");
                break;
            case "ha":
                f(a, "ha")
        }
        c && f(c, "dc");
        return e
    }, mi = function (a) {
        var b = ki();
        ci(function () {
            li(b, !1, a)
        })
    };

    function li(a, b, c, d, e) {
        function f(x, z) {
            var w = ni(x, g);
            w && (Zg(w, z, k), m = !0)
        }

        c = c || {};
        e = e || [];
        var g = ii(c.prefix);
        d = d || La();
        var k = gh(c, d, !0);
        k.Ga = "ad_storage";
        var m = !1, n = Math.round(d / 1E3), p = function (x) {
            var z = ["GCL", n, x];
            0 < e.length && z.push(e.join("."));
            return z.join(".")
        };
        a.aw && f("aw", p(a.aw[0]));
        a.dc && f("dc", p(a.dc[0]));
        a.gf && f("gf", p(a.gf[0]));
        a.ha && f("ha", p(a.ha[0]));
        a.gp && f("gp", p(a.gp[0]));
        if ((void 0 == Yh.enable_gbraid_cookie_write ? 0 : Yh.enable_gbraid_cookie_write) && !m && a.gb) {
            var r = a.gb[0], u = ni("gb",
                g), t = !1;
            if (!b) for (var q = di(u), v = 0; v < q.length; v++) q[v].ra === r && q[v].labels && 0 < q[v].labels.length && (t = !0);
            t || f("gb", p(r))
        }
    }

    var pi = function (a, b) {
        var c = Ph(!0);
        ci(function () {
            for (var d = ii(b.prefix), e = 0; e < a.length; ++e) {
                var f = a[e];
                if (void 0 !== ai[f]) {
                    var g = ni(f, d), k = c[g];
                    if (k) {
                        var m = Math.min(oi(k), La()), n;
                        b:{
                            var p = m;
                            if (Ng(l)) for (var r = Qg(g, B.cookie, void 0, "ad_storage"), u = 0; u < r.length; ++u) if (oi(r[u]) > p) {
                                n = !0;
                                break b
                            }
                            n = !1
                        }
                        if (!n) {
                            var t = gh(b, m, !0);
                            t.Ga = "ad_storage";
                            Zg(g, k, t)
                        }
                    }
                }
            }
            li(ji(c.gclid, c.gclsrc), !1, b)
        })
    }, ni = function (a, b) {
        var c = ai[a];
        if (void 0 !== c) return b + c
    }, oi = function (a) {
        return 0 !== qi(a.split(".")).length ? 1E3 * (Number(a.split(".")[1]) ||
            0) : 0
    };

    function fi(a) {
        var b = qi(a.split("."));
        return 0 === b.length ? null : {
            version: b[0],
            ra: b[2],
            timestamp: 1E3 * (Number(b[1]) || 0),
            labels: b.slice(3)
        }
    }

    function qi(a) {
        return 3 > a.length || "GCL" !== a[0] && "1" !== a[0] || !/^\d+$/.test(a[1]) || !$h.test(a[2]) ? [] : a
    }

    var ri = function (a, b, c, d, e) {
        if (ta(b) && Ng(l)) {
            var f = ii(e), g = function () {
                for (var k = {}, m = 0; m < a.length; ++m) {
                    var n = ni(a[m], f);
                    if (n) {
                        var p = Qg(n, B.cookie, void 0, "ad_storage");
                        p.length && (k[n] = p.sort()[p.length - 1])
                    }
                }
                return k
            };
            ci(function () {
                Uh(g, b, c, d)
            })
        }
    }, hi = function (a) {
        return a.filter(function (b) {
            return $h.test(b.ra)
        })
    }, si = function (a, b) {
        if (Ng(l)) {
            for (var c = ii(b.prefix), d = {}, e = 0; e < a.length; e++) ai[a[e]] && (d[a[e]] = ai[a[e]]);
            ci(function () {
                ya(d, function (f, g) {
                    var k = Qg(c + g, B.cookie, void 0, "ad_storage");
                    k.sort(function (t,
                                     q) {
                        return oi(q) - oi(t)
                    });
                    if (k.length) {
                        var m = k[0], n = oi(m), p = 0 !== qi(m.split(".")).length ? m.split(".").slice(3) : [], r = {},
                            u;
                        u = 0 !== qi(m.split(".")).length ? m.split(".")[2] : void 0;
                        r[f] = [u];
                        li(r, !0, b, n, p)
                    }
                })
            })
        }
    };

    function ti(a, b) {
        for (var c = 0; c < b.length; ++c) if (a[b[c]]) return !0;
        return !1
    }

    var ui = function (a) {
        function b(e, f, g) {
            g && (e[f] = g)
        }

        if (Ie()) {
            var c = ki();
            if (ti(c, a)) {
                var d = {};
                b(d, "gclid", c.gclid);
                b(d, "dclid", c.dclid);
                b(d, "gclsrc", c.gclsrc);
                b(d, "wbraid", c.gbraid);
                Vh(function () {
                    return d
                }, 3);
                Vh(function () {
                    var e = {};
                    return e._up = "1", e
                }, 1)
            }
        }
    };

    function vi(a, b) {
        var c = ii(b), d = ni(a, c);
        if (!d) return 0;
        for (var e = di(d), f = 0, g = 0; g < e.length; g++) f = Math.max(f, e[g].timestamp);
        return f
    }

    function wi(a) {
        var b = 0, c;
        for (c in a) for (var d = a[c], e = 0; e < d.length; e++) b = Math.max(b, Number(d[e].timestamp));
        return b
    };
    var xi = function (a) {
        var b = [];
        ya(a, function (c, d) {
            d = hi(d);
            for (var e = [], f = 0; f < d.length; f++) e.push(d[f].ra);
            e.length && b.push(c + ":" + e.join(","))
        });
        return b.join(";")
    }, zi = function (a, b, c) {
        if ("aw" === a || "dc" === a || "gb" === a) {
            var d = yi("gcl" + a);
            if (d) return d.split(".")
        }
        var e = ii(b);
        if ("_gcl" == e) {
            c = void 0 === c ? !0 : c;
            var f = !bf(N.C) && c, g;
            g = ki()[a] || [];
            if (0 < g.length) return f ? ["0"] : g
        }
        var k = ni(a, e);
        return k ? ei(k) : []
    }, yi = function (a) {
        var b = jg(l.location.href), c = hg(b, "host", !1);
        if (c && c.match(Ai)) {
            var d = hg(b, "path").split(a +
                "=");
            if (1 < d.length) return d[1].split(";")[0].split("?")[0]
        }
    }, Bi = function (a, b) {
        He(N.C) ? bf(N.C) ? a() : Ne(a, N.C) : b ? Ad(42) : ff(function () {
            Bi(a, !0)
        }, [N.C])
    }, Ai = /^\d+\.fls\.doubleclick\.net$/, Ci = function (a, b) {
        return zi("aw", a, b)
    }, Di = function (a, b) {
        return zi("dc", a, b)
    }, Ei = function (a) {
        var b = yi("gac");
        return b ? !bf(N.C) && a ? "0" : decodeURIComponent(b) : xi(bi() ? nh() : {})
    }, Fi = function (a) {
        var b = yi("gacgb");
        return b ? !bf(N.C) && a ? "0" : decodeURIComponent(b) : xi(bi() ? nh("_gac_gb", !0) : {})
    }, Gi = function (a) {
        var b = ki(), c = [], d = b.gclid,
            e = b.dclid, f = b.gclsrc || "aw";
        !d || "aw.ds" !== f && "aw" !== f && "ds" !== f || c.push({ra: d, ze: f});
        e && c.push({ra: e, ze: "ds"});
        Bi(function () {
            lh(a);
            var g = ih[jh(a.prefix)];
            if (g && 0 < c.length) for (var k = P.joined_auid = P.joined_auid || {}, m = 0; m < c.length; m++) {
                var n =
                    c[m], p = n.ra, r = n.ze, u = (a.prefix || "_gcl") + "." + r + "." + p;
                if (!k[u]) {
                    var t = "https://adservice.google.com/pagead/regclk";
                    t = "gb" === r ? t + "?gbraid=" + p + "&auid=" + g : t + "?gclid=" + p + "&auid=" + g + "&gclsrc=" + r;
                    Ib(t);
                    k[u] = !0
                }
            }
        })
    }, Hi = function (a) {
        var b;
        if (yi("gclaw") || yi("gac") || 0 < (ki().aw || []).length) b = !1; else {
            var c;
            if (0 < (ki().gb || []).length) c = !0; else {
                var d = Math.max(vi("aw", a), wi(bi() ? nh() : {}));
                c = Math.max(vi("gb", a), wi(bi() ? nh("_gac_gb", !0) : {})) > d
            }
            b = c
        }
        return b
    };
    var Ii = function (a) {
        var b = sb && sb.userAgent || "";
        if (0 > b.indexOf("Safari") || /Chrome|Coast|Opera|Edg|Silk|Android/.test(b)) return !1;
        var c = (/Version\/([\d\.]+)/.exec(b) || [])[1] || "";
        if ("" === c) return !1;
        for (var d = a.split("."), e = c.split("."), f = 0; f < e.length; f++) {
            if (void 0 === d[f]) return !0;
            if (e[f] != d[f]) return Number(e[f]) > Number(d[f])
        }
        return e.length >= d.length
    };
    var Ki = function (a) {
        var b = a ? Ig(a) : l.enhanced_conversion_data, c = (a || {}).enhanced_conversions_mode, d = void 0;
        if ("manual" === c && b) switch (b._tag_mode) {
            case "CODE":
                d = "c";
                break;
            case "AUTO":
                d = "a";
                break;
            case "MANUAL":
                d = "m";
                break;
            default:
                d = "c"
        } else d = "automatic" === c ? Ji(a) ? "a" : "m" : "c";
        if (l.Promise) try {
            return b ? Ef(b).then(function (e) {
                e.xe = d;
                return e
            }) : Promise.resolve({zc: "", xe: void 0})
        } catch (e) {
        }
    }, Ji = function (a) {
        var b = a && a[N.tf];
        return b && b[N.ph]
    }, Li = function (a) {
        if (bf(N.C)) return a;
        a = a.replace(/&url=([^&#]+)/,
            function (b, c) {
                var d = kg(decodeURIComponent(c));
                return "&url=" + encodeURIComponent(d)
            });
        a = a.replace(/&ref=([^&#]+)/, function (b, c) {
            var d = kg(decodeURIComponent(c));
            return "&ref=" + encodeURIComponent(d)
        });
        return a
    }, Mi = function () {
        if (Id || !0 !== l._gtmdgs && !Ii("11")) return -1;
        var a = Ca('1');
        return Kg(1, 100) < a ? Kg(2, 2) : -1
    }, Ni = function () {
        return -1 !== sb.userAgent.toLowerCase().indexOf("firefox")
    }, Oi = function (a) {
        var b;
        if (!a || !a.length) return;
        for (var c = [], d = 0; d < a.length; ++d) {
            var e = a[d];
            e && e.estimated_delivery_date ? c.push("" + e.estimated_delivery_date) : c.push("")
        }
        b = c.join(",");
        return b
    }, Pi = function () {
        var a = !1;
        return a
    };
    var Qi = !1, Ri = 0, Si = [];

    function Ti(a) {
        if (!Qi) {
            var b = B.createEventObject, c = "complete" == B.readyState, d = "interactive" == B.readyState;
            if (!a || "readystatechange" != a.type || c || !b && d) {
                Qi = !0;
                for (var e = 0; e < Si.length; e++) G(Si[e])
            }
            Si.push = function () {
                for (var f = 0; f < arguments.length; f++) G(arguments[f]);
                return 0
            }
        }
    }

    function Ui() {
        if (!Qi && 140 > Ri) {
            Ri++;
            try {
                B.documentElement.doScroll("left"), Ti()
            } catch (a) {
                l.setTimeout(Ui, 50)
            }
        }
    }

    var Vi = function (a) {
        Qi ? a() : Si.push(a)
    };
    var Xi = function (a, b) {
        this.m = !1;
        this.D = [];
        this.I = {tags: []};
        this.Z = !1;
        this.o = this.s = 0;
        Wi(this, a, b)
    }, Yi = function (a, b, c, d) {
        if (Ed.hasOwnProperty(b) || "__zone" === b) return -1;
        var e = {};
        Qb(d) && (e = H(d, e));
        e.id = c;
        e.status = "timeout";
        return a.I.tags.push(e) - 1
    }, Zi = function (a, b, c, d) {
        var e = a.I.tags[b];
        e && (e.status = c, e.executionTime = d)
    }, $i = function (a) {
        if (!a.m) {
            for (var b = a.D, c = 0; c < b.length; c++) b[c]();
            a.m = !0;
            a.D.length = 0
        }
    }, Wi = function (a, b, c) {
        qa(b) && aj(a, b);
        c && l.setTimeout(function () {
            return $i(a)
        }, Number(c))
    }, aj = function (a,
                      b) {
        var c = Pa(function () {
            return G(function () {
                b(Bd.J, a.I)
            })
        });
        a.m ? c() : a.D.push(c)
    }, bj = function (a) {
        a.s++;
        return Pa(function () {
            a.o++;
            a.Z && a.o >= a.s && $i(a)
        })
    };
    var cj = function () {
        function a(d) {
            return !sa(d) || 0 > d ? 0 : d
        }

        if (!P._li && l.performance && l.performance.timing) {
            var b = l.performance.timing.navigationStart, c = sa(be.get("gtm.start")) ? be.get("gtm.start") : 0;
            P._li = {cst: a(c - b), cbt: a(Kd - b)}
        }
    }, dj = function (a) {
        l.performance && l.performance.mark(Bd.J + "_" + a + "_start")
    }, ej = function (a) {
        if (l.performance) {
            var b = Bd.J + "_" + a + "_start", c = Bd.J + "_" + a + "_duration";
            l.performance.measure(c, b);
            var d = l.performance.getEntriesByName(c)[0];
            l.performance.clearMarks(b);
            l.performance.clearMeasures(c);
            var e = P._p || {};
            void 0 === e[a] && (e[a] = d.duration, P._p = e);
            return d.duration
        }
    }, fj = function () {
        if (l.performance && l.performance.now) {
            var a = P._p || {};
            a.PAGEVIEW = l.performance.now();
            P._p = a
        }
    };
    var gj = {}, hj = function () {
        return l.GoogleAnalyticsObject && l[l.GoogleAnalyticsObject]
    }, ij = !1;

    function mj() {
        return l.GoogleAnalyticsObject || "ga"
    }

    var nj = function (a) {
    }, oj = function (a, b) {
        return function () {
            var c = hj(), d = c && c.getByName && c.getByName(a);
            if (d) {
                var e = d.get("sendHitTask");
                d.set("sendHitTask", function (f) {
                    var g = f.get("hitPayload"), k = f.get("hitCallback"), m = 0 > g.indexOf("&tid=" + b);
                    m && (f.set("hitPayload", g.replace(/&tid=UA-[0-9]+-[0-9]+/, "&tid=" + b), !0), f.set("hitCallback", void 0, !0));
                    e(f);
                    m && (f.set("hitPayload",
                        g, !0), f.set("hitCallback", k, !0), f.set("_x_19", void 0, !0), e(f))
                })
            }
        }
    };
    var vj = function (a) {
        }, zj = function (a) {
        }, Aj =
            function () {
                return "&tc=" + Cc.filter(function (a) {
                    return a
                }).length
            }, Dj = function () {
            2022 <= Bj().length && Cj()
        }, Ej = function (a) {
            return 0 === a.indexOf("gtm.") ? encodeURIComponent(a) : "*"
        }, Gj = function () {
            Fj || (Fj = l.setTimeout(Cj, 500))
        }, Cj = function () {
            Fj && (l.clearTimeout(Fj), Fj = void 0);
            void 0 === Hj || Ij[Hj] && !Jj && !Kj || (Lj[Hj] || Mj.Ii() || 0 >= Nj-- ? (Ad(1), Lj[Hj] = !0) : (Mj.cj(), Bb(Bj(!0)), Ij[Hj] = !0, Oj = Pj = Qj = Kj = Jj = ""))
        }, Bj = function (a) {
            var b = Hj;
            if (void 0 === b) return "";
            var c = zd("GTM"), d = zd("TAGGING");
            return [Rj, Ij[b] ? "" : "&es=1",
                Sj[b], vj(b), c ? "&u=" + c : "", d ? "&ut=" + d : "", Aj(), Jj, Kj, Qj, Pj, zj(a), Oj, "&z=0"].join("")
        }, Uj = function () {
            Rj = Tj()
        }, Tj = function () {
            return [Ld, "&v=3&t=t", "&pid=" + va(), "&rv=" + Bd.dd].join("")
        }, yj = ["L", "S", "Y"], uj = ["S", "E"], Vj = {sampleRate: "0.005000", Rg: "", Qg: Number("5")},
        Wj = 0 <= B.location.search.indexOf("?gtm_latency=") || 0 <= B.location.search.indexOf("&gtm_latency="), Xj;
    if (!(Xj = Wj)) {
        var Yj = Math.random(), Zj = Vj.sampleRate;
        Xj = Yj < Zj
    }
    var ak = Xj, bk = {label: Bd.J + " Container", children: [{label: "Initialization", children: []}]}, Rj = Tj(),
        Ij = {}, Jj = "", Kj = "", Oj = "", Pj = "", xj = {}, wj = !1, tj = {}, ck = {}, Qj = "", Hj = void 0, Sj = {},
        Lj = {}, Fj = void 0, dk = 5;
    0 < Vj.Qg && (dk = Vj.Qg);
    var Mj = function (a, b) {
        for (var c = 0, d = [], e = 0; e < a; ++e) d.push(0);
        return {
            Ii: function () {
                return c < a ? !1 : La() - d[c % a] < b
            }, cj: function () {
                var f = c++ % a;
                d[f] = La()
            }
        }
    }(dk, 1E3), Nj = 1E3, fk = function (a, b) {
        if (ak && !Lj[a] && Hj !==
            a) {
            Cj();
            Hj = a;
            Oj = Jj = "";
            Sj[a] = "&e=" + Ej(b) + "&eid=" + a;
            Gj();
        }
    }, gk = function (a, b, c, d) {
        if (ak && b) {
            var e, f = String(b[Sb.qb] || "").replace(/_/g, "");
            0 === f.indexOf("cvt") && (f = "cvt");
            e = f;
            var g = c + e;
            if (!Lj[a]) {
                a !== Hj && (Cj(), Hj = a);
                Jj = Jj ? Jj + "." + g : "&tr=" + g;
                var k = b["function"];
                if (!k) throw Error("Error: No function name given for function call.");
                var m = (Ec[k] ? "1" : "2") + e;
                Oj = Oj ? Oj + "." + m : "&ti=" + m;
                Gj();
                Dj()
            }
        }
    };
    var nk = function (a, b, c) {
        if (ak && !Lj[a]) {
            a !== Hj && (Cj(), Hj = a);
            var d = c + b;
            Kj = Kj ? Kj + "." + d : "&epr=" + d;
            Gj();
            Dj()
        }
    }, ok = function (a, b, c) {
    };

    function pk(a, b, c, d) {
        var e = Cc[a], f = qk(a, b, c, d);
        if (!f) return null;
        var g = Jc(e[Sb.Nf], c, []);
        if (g && g.length) {
            var k = g[0];
            f = pk(k.index, {onSuccess: f, onFailure: 1 === k.hg ? b.terminate : f, terminate: b.terminate}, c, d)
        }
        return f
    }

    function qk(a, b, c, d) {
        function e() {
            if (f[Sb.Mh]) k(); else {
                var x = Kc(f, c, []);
                var z = x[Sb.Wg];
                if (null != z) for (var w = 0; w < z.length; w++) if (!bf(z[w])) {
                    k();
                    return
                }
                var y = Yi(c.rb, String(f[Sb.qb]), Number(f[Sb.Pf]), x[Sb.Nh]), A = !1;
                x.vtp_gtmOnSuccess = function () {
                    if (!A) {
                        A = !0;
                        var D = La() - F;
                        gk(c.id, Cc[a], "5", D);
                        Zi(c.rb, y, "success",
                            D);
                        g()
                    }
                };
                x.vtp_gtmOnFailure = function () {
                    if (!A) {
                        A = !0;
                        var D = La() - F;
                        gk(c.id, Cc[a], "6", D);
                        Zi(c.rb, y, "failure", D);
                        k()
                    }
                };
                x.vtp_gtmTagId = f.tag_id;
                x.vtp_gtmEventId = c.id;
                gk(c.id, f, "1");
                var C = function () {
                    var D = La() - F;
                    gk(c.id, f, "7", D);
                    Zi(c.rb, y, "exception", D);
                    A || (A = !0, k())
                };
                var F = La();
                try {
                    Ic(x, c)
                } catch (D) {
                    C(D)
                }
            }
        }

        var f = Cc[a], g = b.onSuccess, k = b.onFailure, m = b.terminate;
        if (c.Ge(f)) return null;
        var n = Jc(f[Sb.Qf], c, []);
        if (n && n.length) {
            var p = n[0], r = pk(p.index, {onSuccess: g, onFailure: k, terminate: m}, c, d);
            if (!r) return null;
            g = r;
            k = 2 === p.hg ? m : r
        }
        if (f[Sb.Jf] || f[Sb.Rh]) {
            var u = f[Sb.Jf] ? Dc :
                c.mj, t = g, q = k;
            if (!u[a]) {
                e = Pa(e);
                var v = rk(a, u, e);
                g = v.onSuccess;
                k = v.onFailure
            }
            return function () {
                u[a](t, q)
            }
        }
        return e
    }

    function rk(a, b, c) {
        var d = [], e = [];
        b[a] = sk(d, e, c);
        return {
            onSuccess: function () {
                b[a] = tk;
                for (var f = 0; f < d.length; f++) d[f]()
            }, onFailure: function () {
                b[a] = uk;
                for (var f = 0; f < e.length; f++) e[f]()
            }
        }
    }

    function sk(a, b, c) {
        return function (d, e) {
            a.push(d);
            b.push(e);
            c()
        }
    }

    function tk(a) {
        a()
    }

    function uk(a, b) {
        b()
    };var xk = function (a, b) {
        for (var c = [], d = 0; d < Cc.length; d++) if (a[d]) {
            var e = Cc[d];
            var f = bj(b.rb);
            try {
                var g = pk(d, {onSuccess: f, onFailure: f, terminate: f}, b, d);
                if (g) {
                    var k = c, m = k.push, n = d, p = e["function"];
                    if (!p) throw"Error: No function name given for function call.";
                    var r = Ec[p];
                    m.call(k, {Jg: n, yg: r ? r.priorityOverride || 0 : 0, execute: g})
                } else vk(d, b), f()
            } catch (q) {
                f()
            }
        }
        var u = b.rb;
        u.Z = !0;
        u.o >= u.s && $i(u);
        c.sort(wk);
        for (var t = 0; t < c.length; t++) c[t].execute();
        return 0 < c.length
    };

    function wk(a, b) {
        var c, d = b.yg, e = a.yg;
        c = d > e ? 1 : d < e ? -1 : 0;
        var f;
        if (0 !== c) f = c; else {
            var g = a.Jg, k = b.Jg;
            f = g > k ? 1 : g < k ? -1 : 0
        }
        return f
    }

    function vk(a, b) {
        if (!ak) return;
        var c = function (d) {
            var e = b.Ge(Cc[d]) ? "3" : "4", f = Jc(Cc[d][Sb.Nf], b, []);
            f && f.length && c(f[0].index);
            gk(b.id, Cc[d], e);
            var g = Jc(Cc[d][Sb.Qf], b, []);
            g && g.length && c(g[0].index)
        };
        c(a);
    }

    var yk = !1, Ek = function (a) {
        var b = La(), c = a["gtm.uniqueEventId"], d = a.event;
        if ("gtm.js" === d) {
            if (yk) return !1;
            yk = !0;
        }
        var g = qe(c), k = !1;
        if (!g.active) {
            if ("gtm.js" !== d) return !1;
            k = !0;
            g = qe(Number.MAX_SAFE_INTEGER)
        }
        fk(c, d);
        var m = a.eventCallback, n = a.eventTimeout, p = m;
        var r = {
            id: c, name: d, Ge: oe(g.isAllowed), mj: [], rg: function () {
                Ad(6)
            }, ag: zk(c), rb: new Xi(p, n)
        };
        r.$f = Ak();
        Bk(c, r.rb);
        var u = Oc(r);
        k && (u = Ck(u));
        var t = xk(u, r);
        "gtm.js" !== d && "gtm.sync" !== d || nj(Bd.J);
        return Dk(u, t)
    };

    function zk(a) {
        return function (b) {
            ak && (Rb(b) || ok(a, "input", b))
        }
    }

    function Bk(a, b) {
        fe(a, "event", 1);
        fe(a, "ecommerce", 1);
        fe(a, "gtm");
        fe(a, "eventModel");
    }

    function Ak() {
        var a = {};
        a.event = ee("event", 1);
        a.ecommerce = ee("ecommerce", 1);
        a.gtm = ee("gtm");
        a.eventModel = ee("eventModel");
        return a
    }

    function Ck(a) {
        for (var b = [], c = 0; c < a.length; c++) a[c] && Dd[String(Cc[c][Sb.qb])] && (b[c] = !0);
        return b
    }

    function Dk(a, b) {
        if (!b) return b;
        for (var c = 0; c < a.length; c++) if (a[c] && Cc[c] && !Ed[String(Cc[c][Sb.qb])]) return !0;
        return !1
    }

    function Fk(a, b) {
        if (a) {
            var c = "" + a;
            0 !== c.indexOf("http://") && 0 !== c.indexOf("https://") && (c = "https://" + c);
            "/" === c[c.length - 1] && (c = c.substring(0, c.length - 1));
            return jg("" + c + b).href
        }
    }

    function Gk(a, b) {
        return Hk() ? Fk(a, b) : void 0
    }

    function Hk() {
        var a = !1;
        return a
    }

    function Ik() {
        return !!Bd.ed && "SGTM_TOKEN" !== Bd.ed.replaceAll("@@", "")
    };var Jk = function () {
        var a = !1;
        return a
    };
    var Kk;
    if (3 === Bd.dd.length) Kk = "g"; else {
        var Lk = "G";
        Lk = "g";
        Kk = Lk
    }
    var Mk = {"": "n", UA: "u", AW: "a", DC: "d", G: "e", GF: "f", HA: "h", GTM: Kk, OPT: "o"}, Nk = function (a) {
        var b = Bd.J.split("-"), c = b[0].toUpperCase(), d = Mk[c] || "i",
            e = a && "GTM" === c ? b[1] : "OPT" === c ? b[1] : "", f;
        if (3 === Bd.dd.length) {
            var g = "w";
            g = Jk() ? "s" : "o";
            f = "2" + g
        } else f = "";
        return f + d + Bd.dd + e
    };

    function Ok(a, b) {
        if ("" === a) return b;
        var c = Number(a);
        return isNaN(c) ? b : c
    };var Pk = function (a, b) {
        a.addEventListener && a.addEventListener.call(a, "message", b, !1)
    };

    function Qk() {
        return eb("iPhone") && !eb("iPod") && !eb("iPad")
    };eb("Opera");
    eb("Trident") || eb("MSIE");
    eb("Edge");
    !eb("Gecko") || -1 != bb.toLowerCase().indexOf("webkit") && !eb("Edge") || eb("Trident") || eb("MSIE") || eb("Edge");
    -1 != bb.toLowerCase().indexOf("webkit") && !eb("Edge") && eb("Mobile");
    eb("Macintosh");
    eb("Windows");
    eb("Linux") || eb("CrOS");
    var Rk = ma.navigator || null;
    Rk && (Rk.appVersion || "").indexOf("X11");
    eb("Android");
    Qk();
    eb("iPad");
    eb("iPod");
    Qk() || eb("iPad") || eb("iPod");
    bb.toLowerCase().indexOf("kaios");
    var Sk = function (a, b) {
        for (var c = a, d = 0; 50 > d; ++d) {
            var e;
            try {
                e = !(!c.frames || !c.frames[b])
            } catch (k) {
                e = !1
            }
            if (e) return c;
            var f;
            a:{
                try {
                    var g = c.parent;
                    if (g && g != c) {
                        f = g;
                        break a
                    }
                } catch (k) {
                }
                f = null
            }
            if (!(c = f)) break
        }
        return null
    }, Tk = function (a) {
        var b = B;
        b = void 0 === b ? window.document : b;
        if (!a || !b.head) return null;
        var c, d, e;
        e = void 0 === e ? document : e;
        d = "META";
        "application/xhtml+xml" === (null == e ? void 0 : e.contentType) && (d = d.toLowerCase());
        c = e.createElement(d);
        b.head.appendChild(c);
        c.httpEquiv = "origin-trial";
        c.content = a;
        return c
    };
    var Uk = function () {
    };
    var Vk = function (a) {
        void 0 !== a.addtlConsent && "string" !== typeof a.addtlConsent && (a.addtlConsent = void 0);
        void 0 !== a.gdprApplies && "boolean" !== typeof a.gdprApplies && (a.gdprApplies = void 0);
        return void 0 !== a.tcString && "string" !== typeof a.tcString || void 0 !== a.listenerId && "number" !== typeof a.listenerId ? 2 : a.cmpStatus && "error" !== a.cmpStatus ? 0 : 3
    }, Wk = function (a, b) {
        this.o = a;
        this.m = null;
        this.D = {};
        this.Z = 0;
        this.I = void 0 === b ? 500 : b;
        this.s = null
    };
    la(Wk, Uk);
    var Yk = function (a) {
        return "function" === typeof a.o.__tcfapi || null != Xk(a)
    };
    Wk.prototype.addEventListener = function (a) {
        var b = {}, c = qb(function () {
            return a(b)
        }), d = 0;
        -1 !== this.I && (d = setTimeout(function () {
            b.tcString = "tcunavailable";
            b.internalErrorState = 1;
            c()
        }, this.I));
        var e = function (f, g) {
            clearTimeout(d);
            f ? (b = f, b.internalErrorState = Vk(b), g && 0 === b.internalErrorState || (b.tcString = "tcunavailable", g || (b.internalErrorState = 3))) : (b.tcString = "tcunavailable", b.internalErrorState = 3);
            a(b)
        };
        try {
            Zk(this, "addEventListener", e)
        } catch (f) {
            b.tcString = "tcunavailable", b.internalErrorState = 3, d && (clearTimeout(d),
                d = 0), c()
        }
    };
    Wk.prototype.removeEventListener = function (a) {
        a && a.listenerId && Zk(this, "removeEventListener", null, a.listenerId)
    };
    var al = function (a, b, c) {
            var d;
            d = void 0 === d ? "755" : d;
            var e;
            a:{
                if (a.publisher && a.publisher.restrictions) {
                    var f = a.publisher.restrictions[b];
                    if (void 0 !== f) {
                        e = f[void 0 === d ? "755" : d];
                        break a
                    }
                }
                e = void 0
            }
            var g = e;
            if (0 === g) return !1;
            var k = c;
            2 === c ? (k = 0, 2 === g && (k = 1)) : 3 === c && (k = 1, 1 === g && (k = 0));
            var m;
            if (0 === k) if (a.purpose && a.vendor) {
                var n = $k(a.vendor.consents, void 0 === d ? "755" : d);
                m = n && "1" === b && a.purposeOneTreatment && ((xe(ue) ? 0 : "DE" === a.publisherCC) || "CH" === a.publisherCC) ? !0 : n && $k(a.purpose.consents, b)
            } else m = !0; else m =
                1 === k ? a.purpose && a.vendor ? $k(a.purpose.legitimateInterests, b) && $k(a.vendor.legitimateInterests, void 0 === d ? "755" : d) : !0 : !0;
            return m
        }, $k = function (a, b) {
            return !(!a || !a[b])
        }, Zk = function (a, b, c, d) {
            c || (c = function () {
            });
            if ("function" === typeof a.o.__tcfapi) {
                var e = a.o.__tcfapi;
                e(b, 2, c, d)
            } else if (Xk(a)) {
                bl(a);
                var f = ++a.Z;
                a.D[f] = c;
                if (a.m) {
                    var g = {};
                    a.m.postMessage((g.__tcfapiCall = {command: b, version: 2, callId: f, parameter: d}, g), "*")
                }
            } else c({}, !1)
        }, Xk = function (a) {
            if (a.m) return a.m;
            a.m = Sk(a.o, "__tcfapiLocator");
            return a.m
        },
        bl = function (a) {
            a.s || (a.s = function (b) {
                try {
                    var c;
                    c = ("string" === typeof b.data ? JSON.parse(b.data) : b.data).__tcfapiReturn;
                    a.D[c.callId](c.returnValue, c.success)
                } catch (d) {
                }
            }, Pk(a.o, a.s))
        };
    var cl = !0;
    cl = !1;
    var dl = {1: 0, 3: 0, 4: 0, 7: 3, 9: 3, 10: 3}, el = Ok("", 550), fl = Ok("", 500);

    function gl() {
        var a = P.tcf || {};
        return P.tcf = a
    }

    var hl = function (a, b) {
        this.s = a;
        this.m = b;
        this.o = La();
    }, il = function (a) {
    }, jl = function (a) {
    }, pl = function () {
        var a = gl(), b = new Wk(l, cl ? 3E3 : -1), c = new hl(b, a);
        if ((kl() ? !0 === l.gtag_enable_tcf_support : !1 !== l.gtag_enable_tcf_support) && !a.active && ("function" === typeof l.__tcfapi || Yk(b))) {
            a.active = !0;
            a.Cc = {};
            ll();
            var d = null;
            cl ? d = l.setTimeout(function () {
                ml(a);
                nl(a);
                d = null
            }, fl) : a.tcString = "tcunavailable";
            try {
                b.addEventListener(function (e) {
                    d && (clearTimeout(d), d = null);
                    if (0 !== e.internalErrorState) ml(a), nl(a), il(c);
                    else {
                        var f;
                        a.gdprApplies = e.gdprApplies;
                        if (!1 === e.gdprApplies) f = ol(), b.removeEventListener(e); else if ("tcloaded" === e.eventStatus || "useractioncomplete" === e.eventStatus || "cmpuishown" === e.eventStatus) {
                            var g = {}, k;
                            for (k in dl) if (dl.hasOwnProperty(k)) if ("1" === k) {
                                var m, n = e, p = !0;
                                p = void 0 === p ? !1 : p;
                                var r;
                                var u = n;
                                !1 === u.gdprApplies ? r = !0 : (void 0 === u.internalErrorState && (u.internalErrorState = Vk(u)), r = "error" === u.cmpStatus || 0 !== u.internalErrorState || "loaded" === u.cmpStatus && ("tcloaded" === u.eventStatus || "useractioncomplete" ===
                                    u.eventStatus) ? !0 : !1);
                                m = r ? !1 === n.gdprApplies || "tcunavailable" === n.tcString || void 0 === n.gdprApplies && !p || "string" !== typeof n.tcString || !n.tcString.length ? !0 : al(n, "1", 0) : !1;
                                g["1"] = m
                            } else g[k] = al(e, k, dl[k]);
                            f = g
                        }
                        f && (a.tcString = e.tcString || "tcempty", a.Cc = f, nl(a), il(c))
                    }
                }), jl(c)
            } catch (e) {
                d && (clearTimeout(d), d = null), ml(a), nl(a)
            }
        }
    };

    function ml(a) {
        a.type = "e";
        a.tcString = "tcunavailable";
        cl && (a.Cc = ol())
    }

    function ll() {
        var a = {}, b = (a.ad_storage = "denied", a.wait_for_update = el, a);
        Ze(b)
    }

    var kl = function () {
        var a = !1;
        a = !0;
        return a
    };

    function ol() {
        var a = {}, b;
        for (b in dl) dl.hasOwnProperty(b) && (a[b] = !0);
        return a
    }

    function nl(a) {
        var b = {}, c = (b.ad_storage = a.Cc["1"] ? "granted" : "denied", b);
        af(c, 0, {gdprApplies: a ? a.gdprApplies : void 0, tcString: ql()})
    }

    var rl = function () {
        var a = gl();
        if (a.active && void 0 !== a.loadTime) return Number(a.loadTime)
    }, ql = function () {
        var a = gl();
        return a.active ? a.tcString || "" : ""
    }, sl = function () {
        var a = gl();
        return a.active && void 0 !== a.gdprApplies ? a.gdprApplies ? "1" : "0" : ""
    }, tl = function (a) {
        if (!dl.hasOwnProperty(String(a))) return !0;
        var b = gl();
        return b.active && b.Cc ? !!b.Cc[String(a)] : !0
    };
    var ul = function (a, b) {
        var c = a && !bf(N.C);
        return b && c ? "0" : b
    }, yl = function (a) {
        function b(q) {
            var v;
            P.reported_gclid || (P.reported_gclid = {});
            v = P.reported_gclid;
            var x;
            x = !g || Ie() && !bf(N.C) ? m + (q ? "gcu" : "gcs") : m + "." + (f.prefix || "_gcl") + (q ? "gcu" : "gcs");
            if (!v[x]) {
                v[x] = !0;
                var z = [], w = {}, y = function (K, L) {
                    L && (z.push(K + "=" + encodeURIComponent(L)), w[K] = !0)
                }, A = "https://www.google.com";
                if (Ie()) {
                    var C = bf(N.C);
                    y("gcs", cf());
                    q && y("gcu", "1");
                    Je() && y("gcd", df());
                    P.dedupe_gclid || (P.dedupe_gclid = "" + bh());
                    y("rnd", P.dedupe_gclid);
                    if ((!m || n && "aw.ds" !== n) && bf(N.C)) {
                        var F = ei("_gcl_aw");
                        y("gclaw", F.join("."))
                    }
                    y("url", String(l.location).split(/[?#]/)[0]);
                    y("dclid", ul(d, p));
                    var D = !1;
                    D = !0;
                    C || !d && !D || (A = "https://pagead2.googlesyndication.com")
                }
                y("gdpr_consent",
                    ql()), y("gdpr", sl());
                "1" === Ph(!1)._up && y("gtm_up", "1");
                y("gclid", ul(d, m));
                y("gclsrc", n);
                if (!(w.gclid || w.dclid || w.gclaw) && (y("gbraid", ul(d, r)), !w.gbraid && Ie() && bf(N.C))) {
                    var E = ei("_gcl_gb");
                    y("gclgb", E.join("."))
                }
                y("gtm", Nk(!e));
                g && bf(N.C) && (lh(f || {}), y("auid", ih[jh(f.prefix)] || ""));
                wl || a.ld &&
                y("did", a.ld), xl && (a.Pb && y("gdid", a.Pb), a.Ob && y("edid", a.Ob));
                var O = A + "/pagead/landing?" + z.join("&");
                Ib(O)
            }
        }

        var c = !!a.ue, d = !!a.Fa, e = a.P, f = void 0 === a.sb ? {} : a.sb, g = void 0 === a.ud ? !0 : a.ud, k = ki(),
            m = k.gclid || "", n = k.gclsrc, p = k.dclid || "", r = k.gbraid || "",
            u = !c && ((!m || n && "aw.ds" !== n ? !1 : !0) || r), t = Ie();
        if (u || t) t ? ff(function () {
            b();
            bf(N.C) || ef(function (q) {
                return b(!0, q.consentEventId)
            }, N.C)
        }, [N.C]) : b()
    }, vl = function (a) {
        var b = String(l.location).split(/[?#]/)[0],
            c = Bd.Zg || l._CONSENT_MODE_SALT;
        return a ? c ? String(Lg(b + a + c)) : "0" : ""
    }, wl = !1;
    var xl = !1;
    var Al = function (a) {
        if (!Ie() || Fe(N.C)) {
            var b = zl(a);
            if (b && !(18E5 < La() - b.pg)) return b.fg
        }
    }, zl = function (a) {
        a = a || {};
        if (Ng(l) && B.cookie) {
            var b = eh(ii(a.prefix) + "_ec", a.domain, a.path, ["1"], N.C);
            if (b) {
                var c = b.split(".");
                if (3 === c.length) {
                    var d = 1E3 * Number(c[1]) || 0;
                    if (0 !== d) return {fg: c[0] + "." + c[1], ji: d, pg: 1E3 * Number(c[2]) || 0}
                }
            }
        }
    };
    var Bl = !1;
    var Cl = function () {
        this.m = {}
    }, Dl = function (a, b, c) {
        null != c && (a.m[b] = c)
    }, El = function (a) {
        return Object.keys(a.m).map(function (b) {
            return encodeURIComponent(b) + "=" + encodeURIComponent(a.m[b])
        }).join("&")
    }, Gl = function (a, b, c, d, e) {
        if (!Ie()) {
            Fl(a, b, c, d, e);
            return
        }
        ff(function () {
            bf(N.C) ? Fl(a, b, c, d, e) : d && d()
        }, [N.C]);
    };

    var Hl = function (a, b, c) {
        c = void 0 === c ? !0 : c;
        var d = {
                gclgb: function () {
                    return zi("gb", b, c).join(".")
                }, gacgb: function () {
                    return Fi(c)
                }, gclaw: function () {
                    return Ci(b, c).join(".")
                }, gac: function () {
                    return Ei(c)
                }
            }, e = Hi(b), f = e ? "gclgb" : "gclaw", g = e ? "gacgb" : "gac", k = d[g], m = (0, d[f])(),
            n = "_gcl" !== b ? "" : k();
        m && Dl(a, f, m);
        n && Dl(a, g, n)
    }, Fl = function (a, b, c, d, e) {
        c = c || {};
        var f = c.sb || {}, g = new Cl;
        Df(b, function (k, m) {
            Dl(g, "em", k);
            Dl(g, "gtm", Nk());
            Ie() && (Dl(g, "gcs", cf()), Dl(g, "gcd", df()));
            Hl(g, ii(f.prefix), c.Fa);
            Dl(g, "auid", ih[jh(f.prefix)]);
            var z = El(g);
            Ib("https://google.com/pagead/form-data/" + a + "?" + z);
            d && d()
        })
    };
    var Il = /[A-Z]+/, Jl = /\s/, Kl = function (a) {
        if (ra(a)) {
            a = Fa(a);
            var b = a.indexOf("-");
            if (!(0 > b)) {
                var c = a.substring(0, b);
                if (Il.test(c)) {
                    var d = !1;
                    d = !0;
                    for (var e = a.substring(b + 1).split("/"), f = 0; f < e.length; f++) if (!e[f] || Jl.test(e[f]) && ("AW" !== c || 1 !== f || !d)) return;
                    return {id: a, prefix: c, containerId: c + "-" + e[0], M: e}
                }
            }
        }
    }, Ml = function (a) {
        for (var b = {}, c = 0; c < a.length; ++c) {
            var d =
                Kl(a[c]);
            d && (b[d.id] = d)
        }
        Ll(b);
        var e = [];
        ya(b, function (f, g) {
            e.push(g)
        });
        return e
    };

    function Ll(a) {
        var b = [], c;
        for (c in a) if (a.hasOwnProperty(c)) {
            var d = a[c];
            "AW" === d.prefix && d.M[1] && b.push(d.containerId)
        }
        for (var e = 0; e < b.length; ++e) delete a[b[e]]
    };var Ol = function (a, b, c, d) {
        return (2 === Nl() || d || "http:" != l.location.protocol ? a : b) + c
    }, Nl = function () {
        var a = zb(), b;
        if (1 === a) a:{
            var c = Hd;
            c = c.toLowerCase();
            for (var d = "https://" + c, e = "http://" + c, f = 1, g = B.getElementsByTagName("script"), k = 0; k < g.length && 100 > k; k++) {
                var m = g[k].src;
                if (m) {
                    m = m.toLowerCase();
                    if (0 === m.indexOf(e)) {
                        b = 3;
                        break a
                    }
                    1 === f && 0 === m.indexOf(d) && (f = 2)
                }
            }
            b = f
        } else b = a;
        return b
    };
    var Ql = function (a, b, c) {
            if (l[a.functionName]) return b.Le && G(b.Le), l[a.functionName];
            var d = Pl();
            l[a.functionName] = d;
            if (a.hd) for (var e = 0; e < a.hd.length; e++) l[a.hd[e]] = l[a.hd[e]] || Pl();
            a.td && void 0 === l[a.td] && (l[a.td] = c);
            yb(Ol("https://", "http://", a.Re), b.Le, b.Ti);
            return d
        }, Pl = function () {
            var a = function () {
                a.q = a.q || [];
                a.q.push(arguments)
            };
            return a
        }, Rl = {functionName: "_googWcmImpl", td: "_googWcmAk", Re: "www.gstatic.com/wcm/loader.js"},
        Sl = {functionName: "_gaPhoneImpl", td: "ga_wpid", Re: "www.gstatic.com/gaphone/loader.js"},
        Tl = {Vg: "", Sh: "5"}, Ul = {
            functionName: "_googCallTrackingImpl",
            hd: [Sl.functionName, Rl.functionName],
            Re: "www.gstatic.com/call-tracking/call-tracking_" + (Tl.Vg || Tl.Sh) + ".js"
        }, Vl = {}, Wl = function (a, b, c, d) {
            Ad(22);
            if (c) {
                d = d || {};
                var e = Ql(Rl, d, a), f = {ak: a, cl: b};
                void 0 === d.Pa && (f.autoreplace = c);
                e(2, d.Pa, f, c, 0, Ia(), d.options)
            }
        }, Xl = function (a, b, c, d) {
            Ad(21);
            if (b && c) {
                d = d || {};
                for (var e = {countryNameCode: c, destinationNumber: b, retrievalTime: Ia()}, f = 0; f < a.length; f++) {
                    var g = a[f];
                    Vl[g.id] ||
                    (g && "AW" === g.prefix && !e.adData && 2 <= g.M.length ? (e.adData = {
                        ak: g.M[0],
                        cl: g.M[1]
                    }, Vl[g.id] = !0) : g && "UA" === g.prefix && !e.gaData && (e.gaData = {gaWpid: g.containerId}, Vl[g.id] = !0))
                }
                (e.gaData || e.adData) && Ql(Ul, d)(d.Pa, e, d.options)
            }
        }, Yl = function () {
            var a = !1;
            return a
        }, Zl = function (a, b) {
            if (a) if (Jk()) {
            } else {
                if (ra(a)) {
                    var c =
                        Kl(a);
                    if (!c) return;
                    a = c
                }
                var d = void 0, e = !1, f = b.getWithConfig(N.Ah);
                if (f && ta(f)) {
                    d = [];
                    for (var g = 0; g < f.length; g++) {
                        var k = Kl(f[g]);
                        k && (d.push(k), (a.id === k.id || a.id === a.containerId && a.containerId === k.containerId) && (e = !0))
                    }
                }
                if (!d || e) {
                    var m = b.getWithConfig(N.Af), n;
                    if (m) {
                        ta(m) ? n = m : n = [m];
                        var p = b.getWithConfig(N.yf), r = b.getWithConfig(N.zf), u = b.getWithConfig(N.Bf),
                            t = b.getWithConfig(N.zh), q = p || r, v = 1;
                        "UA" !== a.prefix || d || (v = 5);
                        for (var x = 0; x < n.length; x++) if (x < v) if (d) Xl(d, n[x], t, {
                            Pa: q,
                            options: u
                        }); else if ("AW" === a.prefix &&
                            a.M[1]) Yl() ? Xl([a], n[x], t || "US", {Pa: q, options: u}) : Wl(a.M[0], a.M[1], n[x], {
                            Pa: q,
                            options: u
                        }); else if ("UA" === a.prefix) if (Yl()) Xl([a], n[x], t || "US", {Pa: q}); else {
                            var z = a.containerId, w = n[x], y = {Pa: q};
                            Ad(23);
                            if (w) {
                                y = y || {};
                                var A = Ql(Sl, y, z), C = {};
                                void 0 !== y.Pa ? C.receiver = y.Pa : C.replace = w;
                                C.ga_wpid = z;
                                C.destination = w;
                                A(2, Ia(), C)
                            }
                        }
                    }
                }
            }
        };
    var am = function () {
        var a = P.floc;
        if (a) {
            var b = a.ts, c = a.floc;
            if (b && c && 1E3 > La() - b) return Promise.resolve(c)
        }
        var d = void 0;
        try {
            d = Promise.race([B.interestCohort().then(function (e) {
                P.floc = {ts: La(), floc: e};
                return e
            }), new Promise(function (e) {
                l.setTimeout(function () {
                    return e()
                }, $l)
            })]).catch(function () {
            })
        } catch (e) {
            return
        }
        return d
    }, cm = function () {
        if (!l.Promise) return !1;
        qa(B.interestCohort) || bm || (bm = !0, Tk("A489+ZNTpP/HCOD+k3I13nobRVH7eyh5fz5LGhYvQlNf9WauHk/0awCtXOEoWTIK9JN8bgzgn2SfPdaFXe5O9QkAAACKeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"));
        return qa(B.interestCohort)
    }, bm = !1, $l = Number("200");
    var em = function (a, b) {
        var c = a.qg, d = a.Ng;
        a.kd && (Xh(c[N.Jb], !!c[N.N]) && pi(dm, b), mi(b), si(dm, b), Gi(b));
        c[N.N] && ri(dm, c[N.N], c[N.ac], !!c[N.Kb], b.prefix);
        d && ui(["aw", "dc", "gb"])
    }, fm = function (a, b, c, d) {
        var e = a.Pg, f = a.callback, g = a.sg;
        if ("function" === typeof f) if (e === N.Gd && void 0 === g) {
            var k = d(b.prefix, c);
            0 === k.length ? f(void 0) : 1 === k.length ? f(k[0]) : f(k)
        } else e === N.oh ? (Ad(65), lh(b, !1), f(ih[jh(b.prefix)])) : f(g)
    }, dm = ["aw", "dc", "gb"];
    var gm = function (a, b, c, d, e) {
        var f;
        if (f = !b && !a.m) {
            var g;
            if (g = !a.isGtmEvent) {
                var k = a.s.remoteConfig[N.hc];
                g = k ? "auto_detect" === k.mode || "selectors" === k.mode || "code" === k.mode : !1
            }
            f = g
        }
        if (f) {
            var m = a.F(N.xa);
            if (null !== m) {
                var n;
                m && Qb(m) ? n = m : n = Hg(a.getRemoteConfig(N.hc));
                n && Gl(a.I, n, {sb: e, Fa: c}, void 0, d)
            }
        }
    }, hm = function (a, b) {
    }, im = function (a, b) {
        a.ia("google_gtm_url_processor", function (c) {
            b && (c = Li(c));
            return c
        })
    }, jm = function (a, b) {
        if (a.m || !a.isGtmEvent) {
        }
        a.ab("gdpr_consent", ql()), a.ab("gdpr", sl());
        Ie() && a.m && (a.O("gcs", cf()), Je() && a.O("gcd", df()), b && a.O("gcu", "1"))
    }, km = function (a, b) {
        if (b || sg(a.I)) {
            var c = La(), d = yg();
            if (0 !== d.elements.length) {
                for (var e = [], f = [], g = 0; g < d.elements.length; ++g) {
                    var k = d.elements[g];
                    e.push(k.querySelector);
                    f.push(zg(k))
                }
                var m = La();
                a.O("ec_sel", e.join(","));
                a.O("ec_meta", f.join(","));
                a.O("ec_lat", String(m - c));
                a.O("ec_s", d.status)
            }
        }
    }, lm = function (a) {
        if (!a.m) a.F(N.V) && a.ia("google_gtag_event_data", {items: a.F(N.V)}); else if (a.eventName == N.va) {
            a.kc({
                google_conversion_merchant_id: a.F(N.Md),
                google_basket_feed_country: a.F(N.Kd),
                google_basket_feed_language: a.F(N.Ld),
                google_basket_discount: a.F(N.Jd),
                google_basket_transaction_type: a.eventName,
                google_disable_merchant_reported_conversions: !0 === a.F(N.pf)
            });
            Jk() && a.ia("google_disable_merchant_reported_conversions", !0);
            var b;
            var c = a.F(N.V);
            if (c) {
                for (var d = [], e = 0; e < c.length; ++e) {
                    var f = c[e];
                    f && d.push({
                        item_id: f.id,
                        quantity: f.quantity,
                        value: f.price,
                        start_date: f.start_date,
                        end_date: f.end_date
                    })
                }
                b = d
            } else b = void 0;
            var g = b;
            g && a.ia("google_conversion_items",
                g)
        }
    }, mm = function (a) {
        var b;
        var c = {};
        a.isGtmEvent && !a.m ? a.eventName && (c.event = a.eventName) : c.event = a.eventName;
        var d = a.s.eventModel;
        if (d) {
            H(d, c);
            for (var e in c) c.hasOwnProperty(e) && N.Tg[e.split(".")[0]] && delete c[e];
            b = c
        } else b = null;
        var f = b;
        f && a.ia("google_custom_params", f)
    }, nm = function (a) {
        Jk() && (a.ia("opt_image_generator", function () {
            return new Image
        }), a.ia("google_enable_display_cookie_match", !1))
    }, om = function (a) {
        var b = Pi();
        b && a.oc("apcm");
        if (!b) {
            a.oc("capi");
        }
        if (!a.isGtmEvent) {
            var c = Mi();
            0 === c ? a.ab("dg", "c") : 1 === c && a.ab("dg", "e")
        }
    }, pm = function (a, b) {
        var c = Gk(a, "/pagead/conversion_async.js");
        if (c) return c;
        var d = Ol("https://", "http://", "www.googleadservices.com"), e = !b.isGtmEvent && 1 === Mi();
        if (Ni() || e) d = "https://www.google.com";
        return d + "/pagead/conversion_async.js"
    }, qm = !1, rm = !1;
    var sm = !1;
    var tm = !1;
    var um = [], vm = function (a) {
        var b = l.google_trackConversion, c = a.o.gtm_onFailure;
        "function" == typeof b ? b(a.o) || c() : c()
    }, wm = function () {
        for (; 0 < um.length;) vm(um.shift())
    }, xm = function (a, b) {
        var c = qm;
        rm && (c = b.getContainerTypeLoaded("AW"));
        if (!c) {
            qm = !0;
            cj();
            var d = function () {
                rm && b.setContainerTypeLoaded("AW", !0);
                wm();
                um = {push: vm}
            };
            Jk() ? d() : yb(a, d, function () {
                wm();
                qm = !1;
                rm && b.setContainerTypeLoaded("AW", !1)
            })
        }
    }, ym = function (a, b, c) {
        var d = Kl(a);
        this.P =
            a;
        this.I = d.M[0] || "";
        this.D = d.M[1];
        this.m = void 0 !== this.D;
        this.eventName = b;
        this.isGtmEvent = c.isGtmEvent;
        this.s = c;
        this.o = {
            google_conversion_id: this.I,
            google_conversion_label: this.D,
            google_conversion_format: "3",
            google_conversion_color: "ffffff",
            google_conversion_domain: "",
            google_gtm: Nk()
        }
    };
    h = ym.prototype;
    h.ia = function (a, b) {
        this.o[a] = b
    };
    h.fj = function () {
        delete this.o.google_transport_url
    };
    h.kc = function (a) {
        for (var b in a) a.hasOwnProperty(b) && (this.o[b] = a[b])
    };
    h.O = function (a, b) {
        void 0 != b && "" !== b && (this.o.google_additional_conversion_params =
            this.o.google_additional_conversion_params || {}, this.o.google_additional_conversion_params[a] = b)
    };
    h.ab = function (a, b) {
        void 0 != b && "" !== b && (this.o.google_additional_params = this.o.google_additional_params || {}, this.o.google_additional_params[a] = b)
    };
    h.oc = function (a) {
        this.o.google_gtm_experiments = this.o.google_gtm_experiments || {};
        this.o.google_gtm_experiments[a] = !0
    };
    h.F = function (a) {
        return this.s.getWithConfig(a)
    };
    h.getRemoteConfig = function (a) {
        return this.s.remoteConfig[a]
    };
    var Am = function (a, b, c, d) {
        function e(E,
                   O) {
            function K() {
                um.push(E);
                rm && d.getContainerTypeLoaded("AW") && wm()
            }

            var L = [];
            if (O) {
                E.m && m && (lh(y), E.O("auid", ih[jh(n)]));
                var I = (g(N.Rd) || {})[E.D];
                km(E, Ji(I));
                var V = !0 === g(N.Mc) || I;
                if (E.m && V) {
                    var T = Ki(I);
                    T && L.push(T.then(function (X) {
                        E.O("em", X.zc);
                        E.O("ec_mode", X.xe)
                    }))
                }
            }
            if (L.length) try {
                Promise.all(L).then(function () {
                    K()
                });
                return
            } catch (X) {
            }
            K()
        }

        var f = new ym(a, b, d), g = function (E) {
                return d.getWithConfig(E)
            }, k = void 0 != g(N.R) && !1 !== g(N.R), m = !1 !== g(N.ma), n = g(N.Ca) || g(N.oa), p = g(N.da), r = g(N.na),
            u = g(N.Da), t = {};
        if (!sm) {
            var q = Qf(d, N.ba);
            t.dg = Va(Qb(q) ? q : {})
        }
        if (tm) {
            var v = Qf(d, N.ba, 1), x = Qf(d, N.ba, 2);
            t.qd = Va(Qb(v) ? v : {}, ".");
            t.nd = Va(Qb(x) ?
                x : {}, ".")
        }
        var z = g(N.qa), w = pm(z, f);
        xm(w, d);
        var y = {prefix: n, domain: p, eb: r, flags: u}, A = b == N.Aa;
        if (A && zm(f, m, y, k, t), b === N.Ia) {
            var C = {};
            C.callback = f.F(N.Wa);
            var F = f.F(N.Ka);
            C.Pg = F;
            C.sg = f.F(String(F));
            fm(C, y, k, Ci);
            return
        }
        var D = !1 === g(N.ef) || !1 === g(N.Lb);
        if (!A || !f.m && !D) if (!0 === g(N.Id) && (f.m = !1), !1 !== g(N.Ba) || f.m) {
            f.kc({
                google_remarketing_only: !f.m,
                google_conversion_language: f.F(N.mb),
                google_conversion_value: f.F(N.ca),
                google_conversion_currency: f.F(N.aa),
                google_conversion_order_id: f.F(N.Ya),
                google_user_id: f.F(N.pb),
                google_conversion_page_url: f.F(N.nb),
                google_conversion_referrer_url: f.F(N.La)
            });
            f.kc({onload_callback: f.s.onSuccess, gtm_onFailure: f.s.onFailure});
            om(f);
            f.m && f.ia("google_transport_url", Fk(f.F(N.qa), "/"));
            f.ia("google_restricted_data_processing", f.F(N.bc));
            nm(f);
            !1 === f.F(N.Ba) && f.ia("google_allow_ad_personalization_signals", !1);
            m ? f.kc({
                google_gcl_cookie_prefix: y.prefix,
                google_gcl_cookie_domain: y.domain,
                google_gcl_cookie_max_age_seconds: y.eb,
                google_gcl_cookie_flags: y.flags
            }) : f.ia("google_read_gcl_cookie_opt_out", !0);
            mm(f);
            lm(f);
            "1" === Ph(!1)._up && f.O("gtm_up", "1");
            f.m && (f.O("vdnc", f.F(N.Xd)), f.O("vdltv", f.F(N.Nd)));
            jm(f);
            f.m && (f.O("delopc", f.F(N.Wc)), f.O("oedeld", f.F(N.Sd)), f.O("delc", f.F(N.Nc)), f.O("shf", f.F(N.Qd)), f.O("iedeld", Oi(f.F(N.V))));
            sm || f.O("did", t.dg), tm && (f.O("gdid", t.qd),
                f.O("edid", t.nd));
            im(f, k);
            hm(f, y);
            gm(f, A, k, t, y);
            Ie() ? ff(function () {
                jm(f);
                var E = bf(N.C);
                if (f.m) {
                    var O = !1;
                    O = !0;
                    E || z || !k && !O || f.ia("google_transport_url", "https://pagead2.googlesyndication.com/");
                    e(f, E)
                } else if (E) {
                    e(f, E);
                    return
                }
                E || ef(function () {
                    var K = new ym(a, f.eventName, d);
                    K.m = f.m;
                    K.kc(H(f.o));
                    im(K, k);
                    !z && K.o.google_transport_url &&
                    K.fj();
                    jm(K, !0);
                    e(K, !0)
                }, N.C)
            }, [N.C]) : e(f, !0)
        }
    };
    var zm = function (a, b, c, d, e) {
        var f = a.F(N.Gb), g = a.F(N.fa) || {}, k = a.F(N.Za);
        em({kd: b, hi: f, qg: g, Ng: k}, c);
        Zl(a.P, a.s);
        var m = {ue: !1, Fa: d, P: a.P, eventId: a.s.eventId, sb: b ? c : void 0, ud: b, ld: ""};
        sm ? m.ld = void 0 : m.ld = e.dg || "";
        tm && (m.Pb = e.qd, m.Ob = e.nd);
        yl(m)
    };
    var en = function () {
        var a = !0;
        tl(7) && tl(9) && tl(10) || (a = !1);
        var b = !0;
        b = !1;
        b && !dn() && (a = !1);
        return a
    }, dn = function () {
        var a = !0;
        tl(3) && tl(4) || (a = !1);
        return a
    };
    var Zn = !1;
    Zn = !0;

    function $n() {
        var a = P;
        return a.gcq = a.gcq || new ao
    }

    var bo = function (a, b, c) {
        $n().register(a, b, c)
    }, co = function (a, b, c, d) {
        $n().push("event", [b, a], c, d)
    }, eo = function (a, b) {
        $n().push("config", [a], b)
    }, fo = function (a, b, c, d) {
        $n().push("get", [a, b], c, d)
    }, go = {}, ho = function () {
        this.status = 1;
        this.containerConfig = {};
        this.targetConfig = {};
        this.remoteConfig = {};
        this.o = {};
        this.s = null;
        this.m = !1
    }, io = function (a, b, c, d, e) {
        this.type = a;
        this.s = b;
        this.P = c || "";
        this.m = d;
        this.o = e
    }, ao = function () {
        this.o = {};
        this.s = {};
        this.m = [];
        this.D = {AW: !1, UA: !1}
    }, jo = function (a, b) {
        var c = Kl(b);
        return a.o[c.containerId] =
            a.o[c.containerId] || new ho
    }, ko = function (a, b, c) {
        if (b) {
            var d = Kl(b);
            if (d && 1 === jo(a, b).status) {
                jo(a, b).status = 2;
                var e = {};
                ak && (e.timeoutId = l.setTimeout(function () {
                    Ad(38);
                    Gj()
                }, 3E3));
                a.push("require", [e], d.containerId);
                go[d.containerId] = La();
                if (Jk()) {
                } else {
                    var g =
                        "/gtag/js?id=" + encodeURIComponent(d.containerId) + "&l=dataLayer&cx=c";
                    Ik() && (g += "&sign=" + Bd.ed);
                    var k = ("http:" != l.location.protocol ? "https:" : "http:") + ("//www.googletagmanager.com" + g),
                        m = Gk(c, g) || k;
                    yb(m)
                }
            }
        }
    }, lo = function (a, b, c, d) {
        if (d.P) {
            var e = jo(a, d.P), f = e.s;
            if (f) {
                var g = H(c), k = H(e.targetConfig[d.P]), m = H(e.containerConfig), n = H(e.remoteConfig), p = H(a.s),
                    r = ae("gtm.uniqueEventId"), u = Kl(d.P).prefix, t = Pa(function () {
                        var v = g[N.Hb];
                        v && G(v)
                    }), q = Nf(Mf(Of(Lf(Jf(Kf(If(Hf(Gf(g), k), m), n), p), function () {
                        nk(r, u, "2");
                        Zn && t()
                    }), function () {
                        nk(r, u, "3");
                        Zn && t()
                    }), function (v, x) {
                        a.D[v] = x
                    }), function (v) {
                        return a.D[v]
                    });
                try {
                    nk(r, u, "1");
                    f(d.P, b, d.s, q)
                } catch (v) {
                    nk(r, u, "4");
                }
            }
        }
    };
    ao.prototype.register = function (a, b, c) {
        var d = jo(this, a);
        if (3 !== d.status) {
            d.s = b;
            d.status = 3;
            c && (H(d.remoteConfig, c), d.remoteConfig = c);
            var e = Kl(a), f = go[e.containerId];
            if (void 0 !== f) {
                var g = P[e.containerId].bootstrap, k = e.prefix.toUpperCase();
                P[e.containerId]._spx && (k = k.toLowerCase());
                var m = ae("gtm.uniqueEventId"), n = k, p = La() - g;
                if (ak && !Lj[m]) {
                    m !== Hj && (Cj(), Hj = m);
                    var r = n + "." + Math.floor(g - f) + "." + Math.floor(p);
                    Pj = Pj ? Pj + "," + r : "&cl=" + r
                }
                delete go[e.containerId]
            }
            this.flush()
        }
    };
    ao.prototype.push = function (a, b, c, d) {
        var e = Math.floor(La() / 1E3);
        ko(this, c, b[0][N.qa] || this.s[N.qa]);
        c && jo(this, c).m && (d = !1);
        this.m.push(new io(a, e, c, b, d));
        d || this.flush()
    };
    ao.prototype.insert = function (a, b, c) {
        var d = Math.floor(La() / 1E3);
        0 < this.m.length ? this.m.splice(1, 0, new io(a, d, c, b, !1)) : this.m.push(new io(a, d, c, b, !1))
    };
    ao.prototype.flush = function (a) {
        for (var b = this, c = [], d = !1, e = {}; this.m.length;) {
            var f = this.m[0];
            if (f.o) !f.P || jo(this, f.P).m ? (f.o = !1, this.m.push(f)) : c.push(f), this.m.shift(); else {
                switch (f.type) {
                    case "require":
                        if (3 !== jo(this, f.P).status && !a) {
                            this.m.push.apply(this.m, c);
                            return
                        }
                        ak && l.clearTimeout(f.m[0].timeoutId);
                        break;
                    case "set":
                        ya(f.m[0], function (u, t) {
                            H(Ta(u, t), b.s)
                        });
                        break;
                    case "config":
                        e.Ha = {};
                        ya(f.m[0], function (u) {
                            return function (t, q) {
                                H(Ta(t, q), u.Ha)
                            }
                        }(e));
                        var g = !!e.Ha[N.Xc];
                        delete e.Ha[N.Xc];
                        var k =
                            jo(this, f.P), m = Kl(f.P), n = m.containerId === m.id;
                        g || (n ? k.containerConfig = {} : k.targetConfig[f.P] = {});
                        k.m && g || lo(this, N.Aa, e.Ha, f);
                        k.m = !0;
                        delete e.Ha[N.ic];
                        n ? H(e.Ha, k.containerConfig) : H(e.Ha, k.targetConfig[f.P]);
                        d = !0;
                        break;
                    case "event":
                        e.Gc = {};
                        ya(f.m[0], function (u) {
                            return function (t, q) {
                                H(Ta(t, q), u.Gc)
                            }
                        }(e));
                        lo(this, f.m[1], e.Gc, f);
                        break;
                    case "get":
                        var p = {}, r = (p[N.Ka] = f.m[0], p[N.Wa] = f.m[1], p);
                        lo(this, N.Ia, r, f)
                }
                this.m.shift();
                mo(this, f)
            }
            e = {Ha: e.Ha, Gc: e.Gc}
        }
        this.m.push.apply(this.m, c);
        d && this.flush()
    };
    var mo = function (a, b) {
        if ("require" !== b.type) if (b.P) for (var c = a.getCommandListeners(b.P)[b.type] || [], d = 0; d < c.length; d++) c[d](); else for (var e in a.o) if (a.o.hasOwnProperty(e)) {
            var f = a.o[e];
            if (f && f.o) for (var g = f.o[b.type] || [], k = 0; k < g.length; k++) g[k]()
        }
    };
    ao.prototype.getRemoteConfig = function (a) {
        return jo(this, a).remoteConfig
    };
    ao.prototype.getCommandListeners = function (a) {
        return jo(this, a).o
    };
    var no = function (a, b, c) {
        var d = {
            event: b,
            "gtm.element": a,
            "gtm.elementClasses": Jb(a, "className"),
            "gtm.elementId": a["for"] || Eb(a, "id") || "",
            "gtm.elementTarget": a.formTarget || Jb(a, "target") || ""
        };
        c && (d["gtm.triggers"] = c.join(","));
        d["gtm.elementUrl"] = (a.attributes && a.attributes.formaction ? a.formAction : "") || a.action || Jb(a, "href") || a.src || a.code || a.codebase || "";
        return d
    }, oo = function (a) {
        P.hasOwnProperty("autoEventsSettings") || (P.autoEventsSettings = {});
        var b = P.autoEventsSettings;
        b.hasOwnProperty(a) || (b[a] = {});
        return b[a]
    }, po = function (a, b, c) {
        oo(a)[b] = c
    }, qo = function (a, b, c, d) {
        var e = oo(a), f = Ma(e, b, d);
        e[b] = c(f)
    }, ro = function (a, b, c) {
        var d = oo(a);
        return Ma(d, b, c)
    };
    var Bo = !1, Co = [];

    function Do() {
        if (!Bo) {
            Bo = !0;
            for (var a = 0; a < Co.length; a++) G(Co[a])
        }
    }

    var Eo = function (a) {
        Bo ? G(a) : Co.push(a)
    };

    function Fo(a, b) {
        a = String(a);
        b = String(b);
        var c = a.length - b.length;
        return 0 <= c && a.indexOf(b, c) == c
    }

    var Go = new wa;

    function Ho(a, b, c) {
        var d = c ? "i" : void 0;
        try {
            var e = String(b) + d, f = Go.get(e);
            f || (f = new RegExp(b, d), Go.set(e, f));
            return f.test(a)
        } catch (g) {
            return !1
        }
    }

    function Io(a, b) {
        function c(g) {
            var k = jg(g), m = hg(k, "protocol"), n = hg(k, "host", !0), p = hg(k, "port"),
                r = hg(k, "path").toLowerCase().replace(/\/$/, "");
            if (void 0 === m || "http" == m && "80" == p || "https" == m && "443" == p) m = "web", p = "default";
            return [m, n, p, r]
        }

        for (var d = c(String(a)), e = c(String(b)), f = 0; f < d.length; f++) if (d[f] !== e[f]) return !1;
        return !0
    }

    function Jo(a) {
        return Ko(a) ? 1 : 0
    }

    function Ko(a) {
        var b = a.arg0, c = a.arg1;
        if (a.any_of && ta(c)) {
            for (var d = 0; d < c.length; d++) {
                var e = H(a, {});
                H({arg1: c[d], any_of: void 0}, e);
                if (Jo(e)) return !0
            }
            return !1
        }
        switch (a["function"]) {
            case "_cn":
                return 0 <= String(b).indexOf(String(c));
            case "_css":
                var f;
                a:{
                    if (b) {
                        var g = ["matches", "webkitMatchesSelector", "mozMatchesSelector", "msMatchesSelector", "oMatchesSelector"];
                        try {
                            for (var k = 0; k < g.length; k++) if (b[g[k]]) {
                                f = b[g[k]](c);
                                break a
                            }
                        } catch (m) {
                        }
                    }
                    f = !1
                }
                return f;
            case "_ew":
                return Fo(b, c);
            case "_eq":
                return String(b) ==
                    String(c);
            case "_ge":
                return Number(b) >= Number(c);
            case "_gt":
                return Number(b) > Number(c);
            case "_lc":
                return 0 <= String(b).split(",").indexOf(String(c));
            case "_le":
                return Number(b) <= Number(c);
            case "_lt":
                return Number(b) < Number(c);
            case "_re":
                return Ho(b, c, a.ignore_case);
            case "_sw":
                return 0 == String(b).indexOf(String(c));
            case "_um":
                return Io(b, c)
        }
        return !1
    };var Lo = function (a) {
        if (P.addTargetToGroup) P.addTargetToGroup(a); else {
        }
    };
    Object.freeze({dl: 1, id: 1});
    Object.freeze(["config", "event", "get", "set"]);
    var Mo = {}, No = function (a, b) {
        b = b.toString().split(",");
        for (var c = 0; c < b.length; c++) {
            var d = Mo[b[c]] || [];
            Mo[b[c]] = d;
            0 > d.indexOf(a) && d.push(a)
        }
    }, Oo = function (a) {
        ya(Mo, function (b, c) {
            var d = c.indexOf(a);
            0 <= d && c.splice(d, 1)
        })
    };
    var Po = "HA GF G UA AW DC".split(" "), Qo = !1;
    Qo = !0;
    var Ro = !1, So = !1;

    function To(a, b) {
        var c = {event: a};
        b && (c.eventModel = H(b), b[N.Hb] && (c.eventCallback = b[N.Hb]), b[N.Pc] && (c.eventTimeout = b[N.Pc]));
        return c
    }

    function Uo(a) {
        a.hasOwnProperty("gtm.uniqueEventId") || Object.defineProperty(a, "gtm.uniqueEventId", {value: Ud()});
        return a["gtm.uniqueEventId"]
    }

    function Vo() {
        if (!Ro && !P.gtagRegistered) {
            Ro = P.gtagRegistered = !0;
            P.addTargetToGroup = function (c) {
                No(c, "default")
            };
        }
        return Ro
    }

    var Wo = {
        config: function (a) {
            var b, c = Uo(a);
            if (2 > a.length || !ra(a[1])) return;
            var d = {};
            if (2 < a.length) {
                if (void 0 != a[2] && !Qb(a[2]) || 3 < a.length) return;
                d = a[2]
            }
            var e = Kl(a[1]);
            if (!e) return;
            Oo(e.id);
            No(e.id, d[N.Ud] || "default");
            delete d[N.Ud];
            So || Ad(43);
            if (Vo() && -1 !== Po.indexOf(e.prefix)) {
                "G" === e.prefix && (d[N.ic] = !0);
                Qo && delete d[N.Hb];
                eo(d, e.id);
                return
            }
            de("gtag.targets." + e.id, void 0);
            de("gtag.targets." + e.id, H(d));
            var f = {};
            f[N.ob] = e.id;
            b = To(N.Aa, f);
            b["gtm.uniqueEventId"] = c;
            return b
        }, consent: function (a) {
            function b() {
                Vo() && H(a[2], {subcommand: a[1]})
            }

            if (3 === a.length) {
                Ad(39);
                var c = Ud(), d = a[1];
                "default" === d ? (b(), Ze(a[2])) : "update" === d && (b(), af(a[2], c))
            }
        }, event: function (a) {
            var b = a[1];
            if (!(2 > a.length) && ra(b)) {
                var c;
                if (2 < a.length) {
                    if (!Qb(a[2]) && void 0 != a[2] || 3 < a.length) return;
                    c = a[2]
                }
                var d = To(b, c), e = Uo(a);
                d["gtm.uniqueEventId"] = e;
                var f;
                var g = c && c[N.ob];
                void 0 === g && (g = ae(N.ob, 2), void 0 === g && (g = "default"));
                if (ra(g) || ta(g)) {
                    for (var k = g.toString().replace(/\s+/g,
                        "").split(","), m = [], n = 0; n < k.length; n++) if (0 <= k[n].indexOf("-")) m.push(k[n]); else {
                        var p = Mo[k[n]];
                        p && p.length && (m = m.concat(p))
                    }
                    f = Ml(m)
                } else f = void 0;
                var r = f;
                if (!r) return;
                for (var u = Vo(), t = [], q = 0; u && q < r.length; q++) {
                    var v = r[q];
                    if (-1 !== Po.indexOf(v.prefix)) {
                        var x = H(c);
                        "G" === v.prefix && (x[N.ic] = !0);
                        Qo && delete x[N.Hb];
                        co(b, x, v.id)
                    }
                    t.push(v.id)
                }
                d.eventModel = d.eventModel || {};
                0 < r.length ? d.eventModel[N.ob] = t.join() : delete d.eventModel[N.ob];
                So || Ad(43);
                return d
            }
        }, get: function (a) {
            Ad(53);
            if (4 !== a.length || !ra(a[1]) || !ra(a[2]) || !qa(a[3])) return;
            var b = Kl(a[1]), c = String(a[2]), d = a[3];
            if (!b) return;
            So || Ad(43);
            if (!Vo() || -1 === Po.indexOf(b.prefix)) return;
            Ud();
            var e = {};
            Ve(H((e[N.Ka] = c, e[N.Wa] = d, e)));
            fo(c, function (f) {
                G(function () {
                    return d(f)
                })
            }, b.id);
        }, js: function (a) {
            if (2 == a.length && a[1].getTime) {
                So = !0;
                Vo();
                var b = {};
                return b.event = "gtm.js", b["gtm.start"] = a[1].getTime(), b["gtm.uniqueEventId"] = Uo(a), b
            }
        }, policy: function () {
        }, set: function (a) {
            var b;
            2 == a.length && Qb(a[1]) ?
                b = H(a[1]) : 3 == a.length && ra(a[1]) && (b = {}, Qb(a[2]) || ta(a[2]) ? b[a[1]] = H(a[2]) : b[a[1]] = a[2]);
            if (b) {
                if (Ud(), Vo()) {
                    H(b);
                    var c = H(b);
                    $n().push("set", [c])
                }
                b._clear = !0;
                return b
            }
        }
    }, Xo = {policy: !0};
    var Yo = function (a, b) {
        var c = a.hide;
        if (c && void 0 !== c[b] && c.end) {
            c[b] = !1;
            var d = !0, e;
            for (e in c) if (c.hasOwnProperty(e) && !0 === c[e]) {
                d = !1;
                break
            }
            d && (c.end(), c.end = null)
        }
    }, $o = function (a) {
        var b = Zo(), c = b && b.hide;
        c && c.end && (c[a] = !0)
    };
    var qp = function (a) {
        if (pp(a)) return a;
        this.m = a
    };
    qp.prototype.Ai = function () {
        return this.m
    };
    var pp = function (a) {
        return !a || "object" !== Ob(a) || Qb(a) ? !1 : "getUntrustedUpdateValue" in a
    };
    qp.prototype.getUntrustedUpdateValue = qp.prototype.Ai;
    var rp = [], sp = !1, tp = !1, up = function (a) {
        return l["dataLayer"].push(a)
    }, vp = function (a, b) {
        var c = P["dataLayer"], d = c ? c.subscribers : 1, e = 0, f = !1, g = void 0;
        b && (g = l.setTimeout(function () {
            f || (f = !0, a());
            g = void 0
        }, b));
        return function () {
            ++e === d && (g && (l.clearTimeout(g), g = void 0), f || (a(), f = !0))
        }
    };

    function wp(a) {
        var b = a._clear;
        ya(a, function (d, e) {
            "_clear" !== d && (b && de(d, void 0), de(d, e))
        });
        Jd || (Jd = a["gtm.start"]);
        var c = a["gtm.uniqueEventId"];
        if (!a.event) return !1;
        c || (c = Ud(), a["gtm.uniqueEventId"] = c, de("gtm.uniqueEventId", c));
        return Ek(a)
    }

    function xp() {
        var a = rp[0];
        if (null == a || "object" !== typeof a) return !1;
        if (a.event) return !0;
        if (za(a)) {
            var b = a[0];
            if ("config" === b || "event" === b || "js" === b) return !0
        }
        return !1
    }

    function yp() {
        for (var a = !1; !tp && 0 < rp.length;) {
            if (!sp && xp()) {
                var b = {}, c = (b.event = "gtm.init_consent", b), d = {}, e = (d.event = "gtm.init", d),
                    f = rp[0]["gtm.uniqueEventId"];
                f && (c["gtm.uniqueEventId"] = f - 2, e["gtm.uniqueEventId"] = f - 1);
                rp.unshift(c, e);
                sp = !0
            }
            tp = !0;
            delete Yd.eventModel;
            $d();
            var g = rp.shift();
            if (null != g) {
                var k = pp(g);
                if (k) {
                    var m = g;
                    g = pp(m) ? m.getUntrustedUpdateValue() : void 0;
                    for (var n = ["gtm.allowlist",
                        "gtm.blocklist", "gtm.whitelist", "gtm.blacklist", "tagTypeBlacklist"], p = 0; p < n.length; p++) {
                        var r = n[p], u = ae(r, 1);
                        if (ta(u) || Qb(u)) u = H(u);
                        Zd[r] = u
                    }
                }
                try {
                    if (qa(g)) try {
                        g.call(be)
                    } catch (A) {
                    } else if (ta(g)) {
                        var t = g;
                        if (ra(t[0])) {
                            var q = t[0].split("."), v = q.pop(), x = t.slice(1), z = ae(q.join("."), 2);
                            if (void 0 !== z && null !== z) try {
                                z[v].apply(z, x)
                            } catch (A) {
                            }
                        }
                    } else {
                        if (za(g)) {
                            a:{
                                var w = g;
                                if (w.length && ra(w[0])) {
                                    var y = Wo[w[0]];
                                    if (y && (!k || !Xo[w[0]])) {
                                        g = y(w);
                                        break a
                                    }
                                }
                                g = void 0
                            }
                            if (!g) {
                                tp = !1;
                                continue
                            }
                        }
                        a = wp(g) || a
                    }
                } finally {
                    k && $d(!0)
                }
            }
            tp =
                !1
        }
        return !a
    }

    function zp() {
        var b = yp();
        try {
            Yo(l["dataLayer"], Bd.J)
        } catch (c) {
        }
        return b
    }

    var Bp = function () {
        var a = ub("dataLayer", []), b = ub("google_tag_manager", {});
        b = b["dataLayer"] = b["dataLayer"] || {};
        Vi(function () {
            b.gtmDom || (b.gtmDom = !0, a.push({event: "gtm.dom"}))
        });
        Eo(function () {
            b.gtmLoad || (b.gtmLoad = !0, a.push({event: "gtm.load"}))
        });
        b.subscribers = (b.subscribers || 0) + 1;
        var c = a.push;
        a.push = function () {
            var e;
            if (0 < P.SANDBOXED_JS_SEMAPHORE) {
                e = [];
                for (var f = 0; f < arguments.length; f++) e[f] = new qp(arguments[f])
            } else e = [].slice.call(arguments, 0);
            var g, k = !0;
            g = k;
            !g && rp.push.apply(rp, e);
            var m = c.apply(a, e);
            g && rp.push.apply(rp, e);
            if (300 < this.length) for (Ad(4); 300 < this.length;) this.shift();
            var n = "boolean" !== typeof m || m;
            return yp() && n
        };
        var d = a.slice(0);
        rp.push.apply(rp, d);
        if (Ap()) {
            G(zp)
        }
    }, Ap = function () {
        var a = !0;
        return a
    };

    function Cp(a) {
        if (null == a || 0 === a.length) return !1;
        var b = Number(a), c = La();
        return b < c + 3E5 && b > c - 9E5
    };var Dp = {};
    Dp.$c = new String("undefined");
    var Qp = l.clearTimeout, Rp = l.setTimeout, R = function (a, b, c, d) {
        if (Jk()) {
            b && G(b)
        } else return yb(a, b, c, d)
    }, Sp = function () {
        return new Date
    }, Tp = function () {
        return l.location.href
    }, Up = function (a) {
        return hg(jg(a), "fragment")
    }, Vp = function (a) {
        return ig(jg(a))
    }, Wp = function (a, b) {
        return ae(a, b || 2)
    }, Xp = function (a, b, c) {
        var d;
        b ? (a.eventCallback = b, c && (a.eventTimeout = c), d = up(a)) : d = up(a);
        return d
    }, Yp = function (a, b) {
        l[a] = b
    }, U = function (a, b,
                     c) {
        b && (void 0 === l[a] || c && !l[a]) && (l[a] = b);
        return l[a]
    }, Zp = function (a, b, c) {
        return Qg(a, b, void 0 === c ? !0 : !!c)
    }, $p = function (a, b, c) {
        return 0 === Zg(a, b, c)
    }, aq = function (a, b) {
        if (Jk()) {
            b && G(b)
        } else Ab(a, b)
    }, bq = function (a) {
        return !!ro(a, "init", !1)
    }, cq = function (a) {
        po(a, "init", !0)
    }, dq = function (a) {
        var b = Hd, c = "?id=" + encodeURIComponent(a) + "&l=dataLayer";
        Ik() && (c += "&sign=" + Bd.ed, tb && (b = tb.replace(/^(?:https?:\/\/)?/i, "").split(/[?#]/)[0]));
        var d = Ol("https://", "http://", b + c);
        R(d)
    }, eq = function (a, b, c) {
        ak && (Rb(a) || ok(c, b, a))
    };
    var Cq = encodeURI, Y = encodeURIComponent, Dq = Bb;
    var Eq = function (a, b) {
        if (!a) return !1;
        var c = hg(jg(a), "host");
        if (!c) return !1;
        for (var d = 0; b && d < b.length; d++) {
            var e = b[d] && b[d].toLowerCase();
            if (e) {
                var f = c.length - e.length;
                0 < f && "." != e.charAt(0) && (f--, e = "." + e);
                if (0 <= f && c.indexOf(e, f) == f) return !0
            }
        }
        return !1
    };
    var Fq = function (a, b, c) {
        for (var d = {}, e = !1, f = 0; a && f < a.length; f++) a[f] && a[f].hasOwnProperty(b) && a[f].hasOwnProperty(c) && (d[a[f][b]] = a[f][c], e = !0);
        return e ? d : null
    };

    function es() {
        return l.gaGlobal = l.gaGlobal || {}
    }

    var fs = function () {
        var a = es();
        a.hid = a.hid || va();
        return a.hid
    }, gs = function (a, b) {
        var c = es();
        if (void 0 == c.vid || b && !c.from_cookie) c.vid = a, c.from_cookie = b
    };
    var Hs = function () {
        if (qa(l.__uspapi)) {
            var a = "";
            try {
                l.__uspapi("getUSPData", 1, function (b, c) {
                    if (c && b) {
                        var d = b.uspString;
                        d && RegExp("^[\\da-zA-Z-]{1,20}$").test(d) && (a = d)
                    }
                })
            } catch (b) {
            }
            return a
        }
    };
    var gt = window, ht = document, it = function (a) {
        var b = gt._gaUserPrefs;
        if (b && b.ioo && b.ioo() || a && !0 === gt["ga-disable-" + a]) return !0;
        try {
            var c = gt.external;
            if (c && c._gaUserPrefs && "oo" == c._gaUserPrefs) return !0
        } catch (f) {
        }
        for (var d = Mg("AMP_TOKEN", String(ht.cookie), !0), e = 0; e < d.length; e++) if ("$OPT_OUT" == d[e]) return !0;
        return ht.getElementById("__gaOptOutExtension") ? !0 : !1
    };
    var jt = {};

    function mt(a) {
        delete a.eventModel[N.ic];
        ot(a.eventModel)
    }

    var ot = function (a) {
        ya(a, function (c) {
            "_" === c.charAt(0) && delete a[c]
        });
        var b = a[N.Ma] || {};
        ya(b, function (c) {
            "_" === c.charAt(0) && delete b[c]
        })
    };
    var rt = function (a, b, c) {
        co(b, c, a)
    }, st = function (a, b, c) {
        co(b, c, a, !0)
    }, wt = function (a, b) {
    };

    function tt(a, b) {
    }

    var Z = {g: {}};


    Z.g.e = ["google"], function () {
        (function (a) {
            Z.__e = a;
            Z.__e.h = "e";
            Z.__e.isVendorTemplate = !0;
            Z.__e.priorityOverride = 0
        })(function (a) {
            var b = String(ge(a.vtp_gtmEventId, "event"));
            a.vtp_gtmCachedValues && (b = String(a.vtp_gtmCachedValues.event));
            return b
        })
    }();
    Z.g.v = ["google"], function () {
        (function (a) {
            Z.__v = a;
            Z.__v.h = "v";
            Z.__v.isVendorTemplate = !0;
            Z.__v.priorityOverride = 0
        })(function (a) {
            var b = a.vtp_name;
            if (!b || !b.replace) return !1;
            var c = Wp(b.replace(/\\\./g, "."), a.vtp_dataLayerVersion || 1), d = void 0 !== c ? c : a.vtp_defaultValue;
            eq(d, "v", a.vtp_gtmEventId);
            return d
        })
    }();
    Z.g.rep = ["google"], function () {
        (function (a) {
            Z.__rep = a;
            Z.__rep.h = "rep";
            Z.__rep.isVendorTemplate = !0;
            Z.__rep.priorityOverride = 0
        })(function (a) {
            var b;
            switch (Kl(a.vtp_containerId).prefix) {
                case "AW":
                    b = Am;
                    break;
                case "DC":
                    b = Qm;
                    break;
                case "GF":
                    b = Vm;
                    break;
                case "HA":
                    b = $m;
                    break;
                case "UA":
                    b = yn;
                    break;
                default:
                    G(a.vtp_gtmOnFailure);
                    return
            }
            G(a.vtp_gtmOnSuccess);
            bo(a.vtp_containerId, b, a.vtp_remoteConfig || {})
        })
    }();

    Z.g.cid = ["google"], function () {
        (function (a) {
            Z.__cid = a;
            Z.__cid.h = "cid";
            Z.__cid.isVendorTemplate = !0;
            Z.__cid.priorityOverride = 0
        })(function () {
            return Bd.J
        })
    }();


    Z.g.get = ["google"], function () {
        (function (a) {
            Z.__get = a;
            Z.__get.h = "get";
            Z.__get.isVendorTemplate = !0;
            Z.__get.priorityOverride = 0
        })(function (a) {
            var b = a.vtp_settings;
            (a.vtp_deferrable ? st : rt)(String(b.streamId), String(a.vtp_eventName), b.eventParameters || {});
            a.vtp_gtmOnSuccess()
        })
    }();


    var xt = {};
    xt.dataLayer = be;
    xt.callback = function (a) {
        Sd.hasOwnProperty(a) && qa(Sd[a]) && Sd[a]();
        delete Sd[a]
    };
    xt.bootstrap = 0;
    xt._spx = !1;

    function yt() {
        P[Bd.J] = xt;
        Qa(Td, Z.g);
        Hc = Pc
    }

    function zt() {
        var a = !1;
        a && dj("INIT");
        we().o();
        P = l.google_tag_manager = l.google_tag_manager || {};
        pl();
        Yh.enable_gbraid_cookie_write = !0;
        var b = !!P[Bd.J];
        if (b) {
            var c = P.zones;
            c && c.unregisterChild(Bd.J);
        } else {
            for (var g = data.resource || {}, k = g.macros || [], m = 0; m < k.length; m++) zc.push(k[m]);
            for (var n = g.tags || [], p = 0; p < n.length; p++) Cc.push(n[p]);
            for (var r = g.predicates || [], u = 0; u < r.length; u++) Bc.push(r[u]);
            for (var t = g.rules || [], q = 0; q < t.length; q++) {
                for (var v =
                    t[q], x = {}, z = 0; z < v.length; z++) x[v[z][0]] = Array.prototype.slice.call(v[z], 1);
                Ac.push(x)
            }
            Ec = Z;
            Fc = Jo;
            yt();
            Bp();
            Qi = !1;
            Ri = 0;
            if ("interactive" == B.readyState && !B.createEventObject || "complete" == B.readyState) Ti(); else {
                Cb(B, "DOMContentLoaded", Ti);
                Cb(B, "readystatechange", Ti);
                if (B.createEventObject && B.documentElement.doScroll) {
                    var w = !0;
                    try {
                        w = !l.frameElement
                    } catch (D) {
                    }
                    w && Ui()
                }
                Cb(l, "load", Ti)
            }
            Bo = !1;
            "complete" === B.readyState ? Do() : Cb(l, "load", Do);
            ak && l.setInterval(Uj, 864E5);
            Kd = (new Date).getTime();
            xt.bootstrap =
                Kd;
            if (a) {
                var F = ej("INIT");
            }
        }
    }

    (function (a) {
        if (!l["__TAGGY_INSTALLED"]) {
            var b = !1;
            if (B.referrer) {
                var c = jg(B.referrer);
                b = "cct.google" === gg(c, "host")
            }
            if (!b) {
                var d = Qg("googTaggyReferrer");
                b = d.length && d[0].length
            }
            b && (l["__TAGGY_INSTALLED"] = !0, yb("https://cct.google/taggy/agent.js"))
        }
        var f = function (r) {
            var u = "GTM", t = "GTM";
            u = "OGT", t = "GTAG";
            var q = l["google.tagmanager.debugui2.queue"];
            q || (q = [], l["google.tagmanager.debugui2.queue"] = q, yb("https://" + Bd.Cd + "/debug/bootstrap?id=" + Bd.J + "&src=" + t + "&cond=" + r + "&gtm=" + Nk()));
            var v = {
                messageType: "CONTAINER_STARTING", data: {
                    scriptSource: tb,
                    containerProduct: u, debug: !1, id: Bd.J
                }
            };
            v.data.resume = function () {
                a()
            };
            Bd.Yg && (v.data.initialPublish = !0);
            q.push(v)
        }, g = void 0, k = hg(l.location, "query", !1, void 0, "gtm_debug");
        Cp(k) && (g = 2);
        if (!g && B.referrer) {
            var m = jg(B.referrer);
            "tagassistant.google.com" === gg(m, "host") && (g = 3)
        }
        if (!g) {
            var n = Qg("__TAG_ASSISTANT");
            n.length && n[0].length && (g = 4)
        }
        if (!g) {
            var p = B.documentElement.getAttribute("data-tag-assistant-present");
            Cp(p) && (g = 5)
        }
        g && tb ? f(g) : a()
    })(zt);

})()
