// var Arrive = function (d, e, w) {
//     "use strict";
//     if (d.MutationObserver && "undefined" != typeof HTMLElement) {
//     var a, t, r = 0,
//     c = (a = HTMLElement.prototype.matches || HTMLElement.prototype.webkitMatchesSelector || HTMLElement.prototype.mozMatchesSelector || HTMLElement.prototype.msMatchesSelector, {
//     matchesSelector: function (e, t) {
//     return e instanceof HTMLElement && a.call(e, t)
// }, addMethod: function (e, t, a) {
//     var r = e[t];
//     e[t] = function () {
//     return a.length == arguments.length ? a.apply(this, arguments) : "function" == typeof r ? r.apply(this, arguments) : void 0
// }
// }, callCallbacks: function (e, t) {
//     t && t.options.onceOnly && 1 == t.firedElems.length && (e = [e[0]]);
//     for (var a, r = 0; a = e[r]; r++) a && a.callback && a.callback.call(a.elem, a.elem);
//     t && t.options.onceOnly && 1 == t.firedElems.length && t.me.unbindEventWithSelectorAndCallback.call(t.target, t.selector, t.callback)
// }, checkChildNodesRecursively: function (e, t, a, r) {
//     for (var i, n = 0; i = e[n]; n++) a(i, t, r) && r.push({
//     callback: t.callback,
//     elem: i
// }), 0 < i.childNodes.length && c.checkChildNodesRecursively(i.childNodes, t, a, r)
// }, mergeArrays: function (e, t) {
//     var a, r = {};
//     for (a in e) e.hasOwnProperty(a) && (r[a] = e[a]);
//     for (a in t) t.hasOwnProperty(a) && (r[a] = t[a]);
//     return r
// }, toElementsArray: function (e) {
//     return void 0 === e || "number" == typeof e.length && e !== d || (e = [e]), e
// }
// }), u = ((t = function () {
//     this._eventsBucket = [], this._beforeAdding = null, this._beforeRemoving = null
// }).prototype.addEvent = function (e, t, a, r) {
//     var i = {target: e, selector: t, options: a, callback: r, firedElems: []};
//     return this._beforeAdding && this._beforeAdding(i), this._eventsBucket.push(i), i
// }, t.prototype.removeEvent = function (e) {
//     for (var t, a = this._eventsBucket.length - 1; t = this._eventsBucket[a]; a--) if (e(t)) {
//     this._beforeRemoving && this._beforeRemoving(t);
//     var r = this._eventsBucket.splice(a, 1);
//     r && r.length && (r[0].callback = null)
// }
// }, t.prototype.beforeAdding = function (e) {
//     this._beforeAdding = e
// }, t.prototype.beforeRemoving = function (e) {
//     this._beforeRemoving = e
// }, t), l = function (i, n) {
//     var l = new u, o = this, s = {fireOnAttributesModification: !1};
//     return l.beforeAdding(function (t) {
//     var e, a = t.target;
//     a !== d.document && a !== d || (a = document.getElementsByTagName("html")[0]), e = new MutationObserver(function (e) {
//     n.call(this, e, t)
// });
//     var r = i(t.options);
//     e.observe(a, r), t.observer = e, t.me = o
// }), l.beforeRemoving(function (e) {
//     e.observer.disconnect()
// }), this.bindEvent = function (e, t, a) {
//     t = c.mergeArrays(s, t);
//     for (var r = c.toElementsArray(this), i = 0; i < r.length; i++) l.addEvent(r[i], e, t, a)
// }, this.unbindEvent = function () {
//     var a = c.toElementsArray(this);
//     l.removeEvent(function (e) {
//     for (var t = 0; t < a.length; t++) if (this === w || e.target === a[t]) return !0;
//     return !1
// })
// }, this.unbindEventWithSelectorOrCallback = function (a) {
//     var e, r = c.toElementsArray(this), i = a;
//     e = "function" == typeof a ? function (e) {
//     for (var t = 0; t < r.length; t++) if ((this === w || e.target === r[t]) && e.callback === i) return !0;
//     return !1
// } : function (e) {
//     for (var t = 0; t < r.length; t++) if ((this === w || e.target === r[t]) && e.selector === a) return !0;
//     return !1
// }, l.removeEvent(e)
// }, this.unbindEventWithSelectorAndCallback = function (a, r) {
//     var i = c.toElementsArray(this);
//     l.removeEvent(function (e) {
//     for (var t = 0; t < i.length; t++) if ((this === w || e.target === i[t]) && e.selector === a && e.callback === r) return !0;
//     return !1
// })
// }, this
// }, i = new function () {
//     var s = {fireOnAttributesModification: !1, onceOnly: !1, existing: !1};
//
//     function n(e, t, a) {
//     return !(!c.matchesSelector(e, t.selector) || (e._id === w && (e._id = r++), -1 != t.firedElems.indexOf(e._id)) || (t.firedElems.push(e._id), 0))
// }
//
//     var d = (i = new l(function (e) {
//     var t = {attributes: !1, childList: !0, subtree: !0};
//     return e.fireOnAttributesModification && (t.attributes = !0), t
// }, function (e, i) {
//     e.forEach(function (e) {
//     var t = e.addedNodes, a = e.target, r = [];
//     null !== t && 0 < t.length ? c.checkChildNodesRecursively(t, i, n, r) : "attributes" === e.type && n(a, i) && r.push({
//     callback: i.callback,
//     elem: a
// }), c.callCallbacks(r, i)
// })
// })).bindEvent;
//     return i.bindEvent = function (e, t, a) {
//     t = void 0 === a ? (a = t, s) : c.mergeArrays(s, t);
//     var r = c.toElementsArray(this);
//     if (t.existing) {
//     for (var i = [], n = 0; n < r.length; n++) for (var l = r[n].querySelectorAll(e), o = 0; o < l.length; o++) i.push({
//     callback: a,
//     elem: l[o]
// });
//     if (t.onceOnly && i.length) return a.call(i[0].elem, i[0].elem);
//     setTimeout(c.callCallbacks, 1, i)
// }
//     d.call(this, e, t, a)
// }, i
// }, o = new function () {
//     var r = {};
//
//     function i(e, t) {
//     return c.matchesSelector(e, t.selector)
// }
//
//     var n = (o = new l(function () {
//     return {childList: !0, subtree: !0}
// }, function (e, r) {
//     e.forEach(function (e) {
//     var t = e.removedNodes, a = [];
//     null !== t && 0 < t.length && c.checkChildNodesRecursively(t, r, i, a), c.callCallbacks(a, r)
// })
// })).bindEvent;
//     return o.bindEvent = function (e, t, a) {
//     t = void 0 === a ? (a = t, r) : c.mergeArrays(r, t), n.call(this, e, t, a)
// }, o
// };
//     e && g(e.fn), g(HTMLElement.prototype), g(NodeList.prototype), g(HTMLCollection.prototype), g(HTMLDocument.prototype), g(Window.prototype);
//     var n = {};
//     return s(i, n, "unbindAllArrive"), s(o, n, "unbindAllLeave"), n
// }
//
//     function s(e, t, a) {
//     c.addMethod(t, a, e.unbindEvent), c.addMethod(t, a, e.unbindEventWithSelectorOrCallback), c.addMethod(t, a, e.unbindEventWithSelectorAndCallback)
// }
//
//     function g(e) {
//     e.arrive = i.bindEvent, s(i, e, "unbindArrive"), e.leave = o.bindEvent, s(o, e, "unbindLeave")
// }
// }(window, "undefined" == typeof jQuery ? null : jQuery, void 0), ewww_webp_supported = !1;
//
//     function check_webp_feature(e, t) {
//         if (ewww_webp_supported) t(ewww_webp_supported); else {
//         var a = new Image;
//         a.onload = function () {
//         ewww_webp_supported = 0 < a.width && 0 < a.height, t(ewww_webp_supported)
//     }, a.onerror = function () {
//         t(!1)
//     }, a.src = "data:image/webp;base64," + {
//         alpha: "UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",
//         animation: "UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"
//     }[e]
//     }
//     }
//
//     function ewwwLoadImages(e) {
//         var n = "data-";
//
//         function t(e, t) {
//         for (var a = ["accesskey", "align", "alt", "border", "class", "contenteditable", "contextmenu", "crossorigin", "dir", "draggable", "dropzone", "height", "hidden", "hspace", "id", "ismap", "lang", "longdesc", "sizes", "spellcheck", "style", "tabindex", "title", "translate", "usemap", "vspace", "width", "data-animation", "data-attachment-id", "data-auto-height", "data-caption", "data-comments-opened", "data-delay", "data-event-trigger", "data-flex_fx", "data-height", "data-hide-on-end", "data-highlight-color", "data-highlight-border-color", "data-highlight-border-opacity", "data-highlight-border-width", "data-highlight-opacity", "data-image-meta", "data-image-title", "data-image-description", "data-interval", "data-large_image_width", "data-large_image_height", "data-lazy", "data-lazy-type", "data-mode", "data-name", "data-no-lazy", "data-orig-size", "data-partial", "data-per-view", "data-permalink", "data-pin-description", "data-pin-id", "data-pin-media", "data-pin-url", "data-rel", "data-ride", "data-shadow", "data-shadow-direction", "data-slide", "data-slide-to", "data-target", "data-vc-zoom", "data-width", "data-wrap"], r = 0, i = a.length; r < i; r++) ewwwAttr(t, a[r], e.getAttribute(n + a[r]));
//         return t
//     }
//
//         if (e) {
//         for (var a = document.querySelectorAll(".batch-image img, .image-wrapper a, .ngg-pro-masonry-item a, .ngg-galleria-offscreen-seo-wrapper a"), r = 0, i = a.length; r < i; r++) ewwwAttr(a[r], "data-src", a[r].getAttribute("data-webp")), ewwwAttr(a[r], "data-thumbnail", a[r].getAttribute("data-webp-thumbnail"));
//         for (r = 0, i = (o = document.querySelectorAll(".rev_slider ul li")).length; r < i; r++) {
//         ewwwAttr(o[r], "data-thumb", o[r].getAttribute("data-webp-thumb"));
//         for (var l = 1; l < 11;) ewwwAttr(o[r], "data-param" + l, o[r].getAttribute("data-webp-param" + l)), l++
//     }
//         var o;
//         for (r = 0, i = (o = document.querySelectorAll(".rev_slider img")).length; r < i; r++) ewwwAttr(o[r], "data-lazyload", o[r].getAttribute("data-webp-lazyload"));
//         var s = document.querySelectorAll("div.woocommerce-product-gallery__image");
//         for (r = 0, i = s.length; r < i; r++) ewwwAttr(s[r], "data-thumb", s[r].getAttribute("data-webp-thumb"))
//     }
//         var d = document.querySelectorAll("video");
//         for (r = 0, i = d.length; r < i; r++) ewwwAttr(d[r], "poster", e ? d[r].getAttribute("data-poster-webp") : d[r].getAttribute("data-poster-image"));
//         var w = document.querySelectorAll("img.ewww_webp_lazy_load");
//         for (r = 0, i = w.length; r < i; r++) {
//         if (e) {
//         ewwwAttr(w[r], "data-lazy-srcset", w[r].getAttribute("data-lazy-srcset-webp")), ewwwAttr(w[r], "data-srcset", w[r].getAttribute("data-srcset-webp")), ewwwAttr(w[r], "data-lazy-src", w[r].getAttribute("data-lazy-src-webp")), ewwwAttr(w[r], "data-src", w[r].getAttribute("data-src-webp")), ewwwAttr(w[r], "data-orig-file", w[r].getAttribute("data-webp-orig-file")), ewwwAttr(w[r], "data-medium-file", w[r].getAttribute("data-webp-medium-file")), ewwwAttr(w[r], "data-large-file", w[r].getAttribute("data-webp-large-file"));
//         var c = w[r].getAttribute("srcset");
//         null != c && !1 !== c && c.includes("R0lGOD") && ewwwAttr(w[r], "src", w[r].getAttribute("data-lazy-src-webp"))
//     }
//         w[r].className = w[r].className.replace(/\bewww_webp_lazy_load\b/, "")
//     }
//         var u = document.querySelectorAll(".ewww_webp");
//         for (r = 0, i = u.length; r < i; r++) {
//         var g = document.createElement("img");
//         e ? (ewwwAttr(g, "src", u[r].getAttribute("data-webp")), ewwwAttr(g, "srcset", u[r].getAttribute("data-srcset-webp")), ewwwAttr(g, "data-orig-file", u[r].getAttribute("data-orig-file")), ewwwAttr(g, "data-orig-file", u[r].getAttribute("data-webp-orig-file")), ewwwAttr(g, "data-medium-file", u[r].getAttribute("data-medium-file")), ewwwAttr(g, "data-medium-file", u[r].getAttribute("data-webp-medium-file")), ewwwAttr(g, "data-large-file", u[r].getAttribute("data-large-file")), ewwwAttr(g, "data-large-file", u[r].getAttribute("data-webp-large-file")), ewwwAttr(g, "data-large_image", u[r].getAttribute("data-large_image")), ewwwAttr(g, "data-large_image", u[r].getAttribute("data-webp-large_image")), ewwwAttr(g, "data-src", u[r].getAttribute("data-src")), ewwwAttr(g, "data-src", u[r].getAttribute("data-webp-src"))) : (ewwwAttr(g, "src", u[r].getAttribute("data-img")), ewwwAttr(g, "srcset", u[r].getAttribute("data-srcset-img")), ewwwAttr(g, "data-orig-file", u[r].getAttribute("data-orig-file")), ewwwAttr(g, "data-medium-file", u[r].getAttribute("data-medium-file")), ewwwAttr(g, "data-large-file", u[r].getAttribute("data-large-file")), ewwwAttr(g, "data-large_image", u[r].getAttribute("data-large_image")), ewwwAttr(g, "data-src", u[r].getAttribute("data-src"))), g = t(u[r], g), u[r].parentNode.insertBefore(g, u[r].nextSibling), u[r].className = u[r].className.replace(/\bewww_webp\b/, "")
//     }
//         window.jQuery && jQuery.fn.isotope && jQuery.fn.imagesLoaded && (jQuery(".fusion-posts-container-infinite").imagesLoaded(function () {
//         jQuery(".fusion-posts-container-infinite").hasClass("isotope") && jQuery(".fusion-posts-container-infinite").isotope()
//     }), jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").imagesLoaded(function () {
//         jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").isotope()
//     }))
//     }
//
//     function ewwwWebPInit(e) {
//         ewwwLoadImages(e), ewwwNggLoadGalleries(e), document.arrive(".ewww_webp", function () {
//         ewwwLoadImages(e)
//     }), document.arrive(".ewww_webp_lazy_load", function () {
//         ewwwLoadImages(e)
//     }), document.arrive("videos", function () {
//         ewwwLoadImages(e)
//     }), "loading" == document.readyState ? document.addEventListener("DOMContentLoaded", ewwwJSONParserInit) : ("undefined" != typeof galleries && ewwwNggParseGalleries(e), ewwwWooParseVariations(e))
//     }
//
//     function ewwwAttr(e, t, a) {
//         null != a && !1 !== a && e.setAttribute(t, a)
//     }
//
//     function ewwwJSONParserInit() {
//         "undefined" != typeof galleries && check_webp_feature("alpha", ewwwNggParseGalleries), check_webp_feature("alpha", ewwwWooParseVariations)
//     }
//
//     function ewwwWooParseVariations(e) {
//         if (e) for (var t = document.querySelectorAll("form.variations_form"), a = 0, r = t.length; a < r; a++) {
//         var i = t[a].getAttribute("data-product_variations"), n = !1;
//         try {
//         for (var l in i = JSON.parse(i)) void 0 !== i[l] && void 0 !== i[l].image && (void 0 !== i[l].image.src_webp && (i[l].image.src = i[l].image.src_webp, n = !0), void 0 !== i[l].image.srcset_webp && (i[l].image.srcset = i[l].image.srcset_webp, n = !0), void 0 !== i[l].image.full_src_webp && (i[l].image.full_src = i[l].image.full_src_webp, n = !0), void 0 !== i[l].image.gallery_thumbnail_src_webp && (i[l].image.gallery_thumbnail_src = i[l].image.gallery_thumbnail_src_webp, n = !0), void 0 !== i[l].image.thumb_src_webp && (i[l].image.thumb_src = i[l].image.thumb_src_webp, n = !0));
//         n && ewwwAttr(t[a], "data-product_variations", JSON.stringify(i))
//     } catch (e) {
//     }
//     }
//     }
//
//     function ewwwNggParseGalleries(e) {
//         if (e) for (var t in galleries) {
//         var a = galleries[t];
//         galleries[t].images_list = ewwwNggParseImageList(a.images_list)
//     }
//     }
//
//     function ewwwNggLoadGalleries(e) {
//         e && document.addEventListener("ngg.galleria.themeadded", function (e, t) {
//             window.ngg_galleria._create_backup = window.ngg_galleria.create, window.ngg_galleria.create = function (e, t) {
//                 var a = $(e).data("id");
//                 return galleries["gallery_" + a].images_list = ewwwNggParseImageList(galleries["gallery_" + a].images_list), window.ngg_galleria._create_backup(e, t)
//             }
//         })
//     }
//
//     function ewwwNggParseImageList(e) {
//         for (var t in e) {
//         var a = e[t];
//         if (void 0 !== a["image-webp"] && (e[t].image = a["image-webp"], delete e[t]["image-webp"]), void 0 !== a["thumb-webp"] && (e[t].thumb = a["thumb-webp"], delete e[t]["thumb-webp"]), void 0 !== a.full_image_webp && (e[t].full_image = a.full_image_webp, delete e[t].full_image_webp), void 0 !== a.srcsets) for (var r in a.srcsets) nggSrcset = a.srcsets[r], void 0 !== a.srcsets[r + "-webp"] && (e[t].srcsets[r] = a.srcsets[r + "-webp"], delete e[t].srcsets[r + "-webp"]);
//         if (void 0 !== a.full_srcsets) for (var i in a.full_srcsets) nggFSrcset = a.full_srcsets[i], void 0 !== a.full_srcsets[i + "-webp"] && (e[t].full_srcsets[i] = a.full_srcsets[i + "-webp"], delete e[t].full_srcsets[i + "-webp"])
//     }
//         return e
//     }
//
//     check_webp_feature("alpha", ewwwWebPInit);
