/*!
 * MockJax - jQuery Plugin to Mock Ajax requests
 *
 * Version:  1.5.1
 * Released:
 * Home:   http://github.com/appendto/jquery-mockjax
 * Author:   Jonathan Sharp (http://jdsharp.com)
 * License:  MIT,GPL
 *
 * Copyright (c) 2011 appendTo LLC.
 * Dual licensed under the MIT or GPL licenses.
 * http://appendto.com/open-source-licenses
 */
(function(c) {
    function q(a, d) {
        var j = !1;
        if ("string" === typeof d)
            return c.isFunction(a.test) ? a.test(d) : a == d;
        c.each(a, function(b) {
            if (void 0 === d[b])
                return j = !1;
            j = !0;
            return"object" == typeof d[b] ? q(a[b], d[b]) : j = c.isFunction(a[b].test) ? a[b].test(d[b]) : a[b] == d[b]
        });
        return j
    }
    function v(a, d) {
        if (c.isFunction(a))
            return a(d);
        if (c.isFunction(a.url.test)) {
            if (!a.url.test(d.url))
                return null
        } else {
            var j = a.url.indexOf("*");
            if (a.url !== d.url && -1 === j || !RegExp(a.url.replace(/[-[\]{}()+?.,\\^$|#\s]/g, "\\$&").replace("*", ".+")).test(d.url))
                return null
        }
        return a.data &&
                d.data && !q(a.data, d.data) || a && a.type && a.type.toLowerCase() != d.type.toLowerCase() ? null : a
    }
    function w(a, c) {
        jsonp = a.jsonpCallback || "jsonp" + x++;
        a.data && (a.data = (a.data + "").replace(m, "=" + jsonp + "$1"));
        a.url = a.url.replace(m, "=" + jsonp + "$1");
        window[jsonp] = window[jsonp] || function(j) {
            data = j;
            s(a, c);
            t(a, c);
            window[jsonp] = void 0;
            try {
                delete window[jsonp]
            } catch (b) {
            }
            head && head.removeChild(script)
        }
    }
    function s(a, d) {
        a.success && a.success.call(callbackContext, d.response ? d.response.toString() : d.responseText || "", status, {});
        if (a.global) {
            var j = [{}, a];
            (a.context ? c(a.context) : c.event).trigger("ajaxSuccess", j)
        }
    }
    function t(a) {
        a.complete && a.complete.call(callbackContext, {}, status);
        if (a.global) {
            var d = [{}, a];
            ("ajaxComplete".context ? c("ajaxComplete".context) : c.event).trigger(d, void 0)
        }
        a.global && !--c.active && c.event.trigger("ajaxStop")
    }
    var r = c.ajax, k = [], m = /=\?(&|$)/, x = (new Date).getTime();
    c.extend({ajax: function(a, d) {
            var j, b, l;
            "object" === typeof a ? (d = a, a = void 0) : d.url = a;
            b = c.extend(!0, {}, c.ajaxSettings, d);
            for (var p = 0; p < k.length; p++)
                if (k[p] &&
                        (l = v(k[p], b))) {
                    var f = b;
                    if (window.console && console.log) {
                        var g = "MOCK " + f.type.toUpperCase() + ": " + f.url, f = c.extend({}, f);
                        if ("function" === typeof console.log)
                            console.log(g, f);
                        else
                            try {
                                console.log(g + " " + JSON.stringify(f))
                            } catch (q) {
                                console.log(g)
                            }
                    }
                    if ("jsonp" === b.dataType) {
                        a:{
                            var h = b, f = l, g = d, e = h;
                            if ("GET" === e.type.toUpperCase())
                                m.test(e.url) || (e.url += (/\?/.test(e.url) ? "&" : "?") + (e.jsonp || "callback") + "=?");
                            else if (!e.data || !m.test(e.data))
                                e.data = (e.data ? e.data + "&" : "") + (e.jsonp || "callback") + "=?";
                            h.dataType = "json";
                            if (h.data && m.test(h.data) || m.test(h.url))
                                if (w(h, f), e = (e = /^(\w+:)?\/\/([^\/?#]+)/.exec(h.url)) && (e[1] && e[1] !== location.protocol || e[2] !== location.host), h.dataType = "script", "GET" === h.type.toUpperCase() && e) {
                                    var e = g && g.context || h, n = null;
                                    f.response && c.isFunction(f.response) ? f.response(g) : "object" === typeof f.responseText ? c.globalEval("(" + JSON.stringify(f.responseText) + ")") : c.globalEval("(" + f.responseText + ")");
                                    s(h, f);
                                    t(h, f);
                                    c.Deferred && (n = new c.Deferred, "object" == typeof f.responseText ? n.resolveWith(e, [f.responseText]) :
                                            n.resolveWith(e, [c.parseJSON(f.responseText)]));
                                    g = (g = n) ? g : !0;
                                    break a
                                }
                            g = null
                        }
                        if (j = g)
                            return j
                    }
                    l.cache = b.cache;
                    l.timeout = b.timeout;
                    l.global = b.global;
                    g = l;
                    f = d;
                    if (!(!g.url instanceof RegExp) && g.hasOwnProperty("urlParams") && (h = g.url.exec(f.url), 1 !== h.length)) {
                        h.shift();
                        var e = 0, n = Math.min(h.length, g.urlParams.length), u = {};
                        for (e; e < n; e++)
                            u[g.urlParams[e]] = h[e];
                        f.urlParams = u
                    }
                    (function(a, d, e, f) {
                        j = r.call(c, c.extend(!0, {}, e, {xhr: function() {
                                var b = a, b = c.extend(!0, {}, c.mockjaxSettings, b);
                                "undefined" === typeof b.headers &&
                                        (b.headers = {});
                                b.contentType && (b.headers["content-type"] = b.contentType);
                                return{status: b.status, statusText: b.statusText, readyState: 1, open: function() {
                                    }, send: function() {
                                        f.fired = !0;
                                        var a = b, g, h = this;
                                        g = function() {
                                            return function() {
                                                this.status = a.status;
                                                this.statusText = a.statusText;
                                                this.readyState = 4;
                                                c.isFunction(a.response) && a.response(e);
                                                if ("json" == d.dataType && "object" == typeof a.responseText)
                                                    this.responseText = JSON.stringify(a.responseText);
                                                else if ("xml" == d.dataType) {
                                                    var b;
                                                    if ("string" == typeof a.responseXML)
                                                        a:{
                                                            b =
                                                                    a.responseXML;
                                                            void 0 == window.DOMParser && window.ActiveXObject && (DOMParser = function() {
                                                            }, DOMParser.prototype.parseFromString = function(a) {
                                                                var b = new ActiveXObject("Microsoft.XMLDOM");
                                                                b.async = "false";
                                                                b.loadXML(a);
                                                                return b
                                                            });
                                                            try {
                                                                var f = (new DOMParser).parseFromString(b, "text/xml");
                                                                if (c.isXMLDoc(f)) {
                                                                    if (1 == c("parsererror", f).length)
                                                                        throw"Error: " + c(f).text();
                                                                } else
                                                                    throw"Unable to parse XML";
                                                            } catch (g) {
                                                                b = void 0 == g.name ? g : g.name + ": " + g.message;
                                                                c(document).trigger("xmlParseError", [b]);
                                                                b = void 0;
                                                                break a
                                                            }
                                                            b = f
                                                        }
                                                    else
                                                        b =
                                                                a.responseXML;
                                                    this.responseXML = b
                                                } else
                                                    this.responseText = a.responseText;
                                                if ("number" == typeof a.status || "string" == typeof a.status)
                                                    this.status = a.status;
                                                "string" === typeof a.statusText && (this.statusText = a.statusText);
                                                c.isFunction(this.onreadystatechange) ? (a.isTimeout && (this.status = -1), this.onreadystatechange(a.isTimeout ? "timeout" : void 0)) : a.isTimeout && (this.status = -1)
                                            }.apply(h)
                                        };
                                        a.proxy ? r({global: !1, url: a.proxy, type: a.proxyType, data: a.data, dataType: "script" === d.dataType ? "text/plain" : d.dataType, complete: function(b) {
                                                a.responseXML =
                                                        b.responseXML;
                                                a.responseText = b.responseText;
                                                a.status = b.status;
                                                a.statusText = b.statusText;
                                                this.responseTimer = setTimeout(g, a.responseTime || 0)
                                            }}) : !1 === d.async ? g() : this.responseTimer = setTimeout(g, a.responseTime || 50)
                                    }, abort: function() {
                                        clearTimeout(this.responseTimer)
                                    }, setRequestHeader: function(a, c) {
                                        b.headers[a] = c
                                    }, getResponseHeader: function(a) {
                                        if (b.headers && b.headers[a])
                                            return b.headers[a];
                                        if ("last-modified" == a.toLowerCase())
                                            return b.lastModified || (new Date).toString();
                                        if ("etag" == a.toLowerCase())
                                            return b.etag ||
                                                    "";
                                        if ("content-type" == a.toLowerCase())
                                            return b.contentType || "text/plain"
                                    }, getAllResponseHeaders: function() {
                                        var a = "";
                                        c.each(b.headers, function(b, c) {
                                            a += b + ": " + c + "\n"
                                        });
                                        return a
                                    }}
                            }}))
                    })(l, b, d, k[p]);
                    return j
                }
            return r.apply(c, [d])
        }});
    c.mockjaxSettings = {log: function(a) {
            window.console && window.console.log && Function.prototype.bind.call(console.log, console).apply(console, arguments)
        }, status: 200, statusText: "OK", responseTime: 500, isTimeout: !1, contentType: "text/plain", response: "", responseText: "", responseXML: "",
        proxy: "", proxyType: "GET", lastModified: null, etag: "", headers: {etag: "IJF@H#@923uf8023hFO@I#H#", "content-type": "text/plain"}};
    c.mockjax = function(a) {
        var c = k.length;
        k[c] = a;
        return c
    };
    c.mockjaxClear = function(a) {
        1 == arguments.length ? k[a] = null : k = []
    };
    c.mockjax.handler = function(a) {
        if (1 == arguments.length)
            return k[a]
    }
})(jQuery);