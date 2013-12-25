(function() {
    var b = tinymce.explode("id,name,width,height,style,align,class,hspace,vspace,bgcolor,type"), a = tinymce.makeMap(b.join(",")), f = tinymce.html.Node, d, i, h = tinymce.util.JSON, g;
    d = [["Flash", "d27cdb6e-ae6d-11cf-96b8-444553540000", "application/x-shockwave-flash", "http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"], ["ShockWave", "166b1bca-3f9c-11cf-8075-444553540000", "application/x-director", "http://download.macromedia.com/pub/shockwave/cabs/director/sw.cab#version=8,5,1,0"], ["WindowsMedia", "6bf52a52-394a-11d3-b153-00c04f79faa6,22d6f312-b0f6-11d0-94ab-0080c74c7e95,05589fa1-c356-11ce-bf01-00aa0055595a", "application/x-mplayer2", "http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701"], ["QuickTime", "02bf25d5-8c17-4b23-bc80-d3488abddc6b", "video/quicktime", "http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0"], ["RealMedia", "cfcdaa03-8be4-11cf-b84b-0020afbbccfa", "audio/x-pn-realaudio-plugin", "http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"], ["Java", "8ad9c840-044e-11d1-b3e9-00805f499d93", "application/x-java-applet", "http://java.sun.com/products/plugin/autodl/jinstall-1_5_0-windows-i586.cab#Version=1,5,0,0"], ["Silverlight", "dfeaf541-f3e1-4c24-acac-99c30715084a", "application/x-silverlight-2"], ["Iframe"], ["Video"], ["EmbeddedAudio"], ["Audio"]];
    function e(j) {
        return typeof (j) == "string" ? j.replace(/[^0-9%]/g, "") : j
    }
    function c(m) {
        var l, j, k;
        if (m && !m.splice) {
            j = [];
            for (k = 0; true; k++) {
                if (m[k]) {
                    j[k] = m[k]
                } else {
                    break
                }
            }
            return j
        }
        return m
    }
    tinymce.create("tinymce.plugins.MediaPlugin", {init: function(n, j) {
            var r = this, l = {}, m, p, q, k;
            function o(s) {
                return s && s.nodeName === "IMG" && n.dom.hasClass(s, "mceItemMedia")
            }
            r.editor = n;
            r.url = j;
            i = "";
            for (m = 0; m < d.length; m++) {
                k = d[m][0];
                q = {name: k, clsids: tinymce.explode(d[m][1] || ""), mimes: tinymce.explode(d[m][2] || ""), codebase: d[m][3]};
                for (p = 0; p < q.clsids.length; p++) {
                    l["clsid:" + q.clsids[p]] = q
                }
                for (p = 0; p < q.mimes.length; p++) {
                    l[q.mimes[p]] = q
                }
                l["mceItem" + k] = q;
                l[k.toLowerCase()] = q;
                i += (i ? "|" : "") + k
            }
            tinymce.each(n.getParam("media_types", "video=mp4,m4v,ogv,webm;silverlight=xap;flash=swf,flv;shockwave=dcr;quicktime=mov,qt,mpg,mpeg;shockwave=dcr;windowsmedia=avi,wmv,wm,asf,asx,wmx,wvx;realmedia=rm,ra,ram;java=jar;audio=mp3,ogg").split(";"), function(v) {
                var s, u, t;
                v = v.split(/=/);
                u = tinymce.explode(v[1].toLowerCase());
                for (s = 0; s < u.length; s++) {
                    t = l[v[0].toLowerCase()];
                    if (t) {
                        l[u[s]] = t
                    }
                }
            });
            i = new RegExp("write(" + i + ")\\(([^)]+)\\)");
            r.lookup = l;
            n.onPreInit.add(function() {
                n.schema.addValidElements("object[id|style|width|height|classid|codebase|*],param[name|value],embed[id|style|width|height|type|src|*],video[*],audio[*],source[*]");
                n.parser.addNodeFilter("object,embed,video,audio,script,iframe", function(s) {
                    var t = s.length;
                    while (t--) {
                        r.objectToImg(s[t])
                    }
                });
                n.serializer.addNodeFilter("img", function(s, u, t) {
                    var v = s.length, w;
                    while (v--) {
                        w = s[v];
                        if ((w.attr("class") || "").indexOf("mceItemMedia") !== -1) {
                            r.imgToObject(w, t)
                        }
                    }
                })
            });
            n.onInit.add(function() {
                if (n.theme && n.theme.onResolveName) {
                    n.theme.onResolveName.add(function(s, t) {
                        if (t.name === "img" && n.dom.hasClass(t.node, "mceItemMedia")) {
                            t.name = "media"
                        }
                    })
                }
                if (n && n.plugins.contextmenu) {
                    n.plugins.contextmenu.onContextMenu.add(function(t, u, s) {
                        if (s.nodeName === "IMG" && s.className.indexOf("mceItemMedia") !== -1) {
                            u.add({title: "media.edit", icon: "media", cmd: "mceMedia"})
                        }
                    })
                }
            });
            n.addCommand("mceMedia", function() {
                var t, s;
                s = n.selection.getNode();
                if (o(s)) {
                    t = n.dom.getAttrib(s, "data-mce-json");
                    if (t) {
                        t = h.parse(t);
                        tinymce.each(b, function(u) {
                            var v = n.dom.getAttrib(s, u);
                            if (v) {
                                t[u] = v
                            }
                        });
                        t.type = r.getType(s.className).name.toLowerCase()
                    }
                }
                if (!t) {
                    t = {type: "flash", video: {sources: []}, params: {}}
                }
                n.windowManager.open({file: j + "/media.htm", width: 430 + parseInt(n.getLang("media.delta_width", 0)), height: 500 + parseInt(n.getLang("media.delta_height", 0)), inline: 1}, {plugin_url: j, data: t})
            });
            n.addButton("media", {title: "media.desc", cmd: "mceMedia"});
            n.onNodeChange.add(function(t, s, u) {
                s.setActive("media", o(u))
            })
        }, convertUrl: function(l, o) {
            var k = this, n = k.editor, m = n.settings, p = m.url_converter, j = m.url_converter_scope || k;
            if (!l) {
                return l
            }
            if (o) {
                return n.documentBaseURI.toAbsolute(l)
            }
            return p.call(j, l, "src", "object")
        }, getInfo: function() {
            return{longname: "Media", author: "Moxiecode Systems AB", authorurl: "http://tinymce.moxiecode.com", infourl: "http://wiki.moxiecode.com/index.php/TinyMCE:Plugins/media", version: tinymce.majorVersion + "." + tinymce.minorVersion}
        }, dataToImg: function(m, k) {
            var r = this, o = r.editor, p = o.documentBaseURI, j, q, n, l;
            m.params.src = r.convertUrl(m.params.src, k);
            q = m.video.attrs;
            if (q) {
                q.src = r.convertUrl(q.src, k)
            }
            if (q) {
                q.poster = r.convertUrl(q.poster, k)
            }
            j = c(m.video.sources);
            if (j) {
                for (l = 0; l < j.length; l++) {
                    j[l].src = r.convertUrl(j[l].src, k)
                }
            }
            n = r.editor.dom.create("img", {id: m.id, style: m.style, align: m.align, hspace: m.hspace, vspace: m.vspace, src: r.editor.theme.url + "/img/trans.gif", "class": "mceItemMedia mceItem" + r.getType(m.type).name, "data-mce-json": h.serialize(m, "'")});
            n.width = m.width = e(m.width || (m.type == "audio" ? "300" : "320"));
            n.height = m.height = e(m.height || (m.type == "audio" ? "32" : "240"));
            return n
        }, dataToHtml: function(j, k) {
            return this.editor.serializer.serialize(this.dataToImg(j, k), {forced_root_block: "", force_absolute: k})
        }, htmlToData: function(l) {
            var k, j, m;
            m = {type: "flash", video: {sources: []}, params: {}};
            k = this.editor.parser.parse(l);
            j = k.getAll("img")[0];
            if (j) {
                m = h.parse(j.attr("data-mce-json"));
                m.type = this.getType(j.attr("class")).name.toLowerCase();
                tinymce.each(b, function(n) {
                    var o = j.attr(n);
                    if (o) {
                        m[n] = o
                    }
                })
            }
            return m
        }, getType: function(m) {
            var k, j, l;
            j = tinymce.explode(m, " ");
            for (k = 0; k < j.length; k++) {
                l = this.lookup[j[k]];
                if (l) {
                    return l
                }
            }
        }, imgToObject: function(z, o) {
            var u = this, p = u.editor, C, H, j, t, I, y, G, w, k, E, s, q, A, D, m, x, l, B, F;
            function r(n, J) {
                var N, M, O, L, K;
                K = p.getParam("flash_video_player_url", u.convertUrl(u.url + "/moxieplayer.swf"));
                if (K) {
                    N = p.documentBaseURI;
                    G.params.src = K;
                    if (p.getParam("flash_video_player_absvideourl", true)) {
                        n = N.toAbsolute(n || "", true);
                        J = N.toAbsolute(J || "", true)
                    }
                    O = "";
                    M = p.getParam("flash_video_player_flashvars", {url: "$url", poster: "$poster"});
                    tinymce.each(M, function(Q, P) {
                        Q = Q.replace(/\$url/, n || "");
                        Q = Q.replace(/\$poster/, J || "");
                        if (Q.length > 0) {
                            O += (O ? "&" : "") + P + "=" + escape(Q)
                        }
                    });
                    if (O.length) {
                        G.params.flashvars = O
                    }
                    L = p.getParam("flash_video_player_params", {allowfullscreen: true, allowscriptaccess: true});
                    tinymce.each(L, function(Q, P) {
                        G.params[P] = "" + Q
                    })
                }
            }
            G = z.attr("data-mce-json");
            if (!G) {
                return
            }
            G = h.parse(G);
            q = this.getType(z.attr("class"));
            B = z.attr("data-mce-style");
            if (!B) {
                B = z.attr("style");
                if (B) {
                    B = p.dom.serializeStyle(p.dom.parseStyle(B, "img"))
                }
            }
            G.width = z.attr("width") || G.width;
            G.height = z.attr("height") || G.height;
            if (q.name === "Iframe") {
                x = new f("iframe", 1);
                tinymce.each(b, function(n) {
                    var J = z.attr(n);
                    if (n == "class" && J) {
                        J = J.replace(/mceItem.+ ?/g, "")
                    }
                    if (J && J.length > 0) {
                        x.attr(n, J)
                    }
                });
                for (I in G.params) {
                    x.attr(I, G.params[I])
                }
                x.attr({style: B, src: G.params.src});
                z.replace(x);
                return
            }
            if (this.editor.settings.media_use_script) {
                x = new f("script", 1).attr("type", "text/javascript");
                y = new f("#text", 3);
                y.value = "write" + q.name + "(" + h.serialize(tinymce.extend(G.params, {width: z.attr("width"), height: z.attr("height")})) + ");";
                x.append(y);
                z.replace(x);
                return
            }
            if (q.name === "Video" && G.video.sources[0]) {
                C = new f("video", 1).attr(tinymce.extend({id: z.attr("id"), width: e(z.attr("width")), height: e(z.attr("height")), style: B}, G.video.attrs));
                if (G.video.attrs) {
                    l = G.video.attrs.poster
                }
                k = G.video.sources = c(G.video.sources);
                for (A = 0; A < k.length; A++) {
                    if (/\.mp4$/.test(k[A].src)) {
                        m = k[A].src
                    }
                }
                if (!k[0].type) {
                    C.attr("src", k[0].src);
                    k.splice(0, 1)
                }
                for (A = 0; A < k.length; A++) {
                    w = new f("source", 1).attr(k[A]);
                    w.shortEnded = true;
                    C.append(w)
                }
                if (m) {
                    r(m, l);
                    q = u.getType("flash")
                } else {
                    G.params.src = ""
                }
            }
            if (q.name === "Audio" && G.video.sources[0]) {
                F = new f("audio", 1).attr(tinymce.extend({id: z.attr("id"), width: e(z.attr("width")), height: e(z.attr("height")), style: B}, G.video.attrs));
                if (G.video.attrs) {
                    l = G.video.attrs.poster
                }
                k = G.video.sources = c(G.video.sources);
                if (!k[0].type) {
                    F.attr("src", k[0].src);
                    k.splice(0, 1)
                }
                for (A = 0; A < k.length; A++) {
                    w = new f("source", 1).attr(k[A]);
                    w.shortEnded = true;
                    F.append(w)
                }
                G.params.src = ""
            }
            if (q.name === "EmbeddedAudio") {
                j = new f("embed", 1);
                j.shortEnded = true;
                j.attr({id: z.attr("id"), width: e(z.attr("width")), height: e(z.attr("height")), style: B, type: z.attr("type")});
                for (I in G.params) {
                    j.attr(I, G.params[I])
                }
                tinymce.each(b, function(n) {
                    if (G[n] && n != "type") {
                        j.attr(n, G[n])
                    }
                });
                G.params.src = ""
            }
            if (G.params.src) {
                if (/\.flv$/i.test(G.params.src)) {
                    r(G.params.src, "")
                }
                if (o && o.force_absolute) {
                    G.params.src = p.documentBaseURI.toAbsolute(G.params.src)
                }
                H = new f("object", 1).attr({id: z.attr("id"), width: e(z.attr("width")), height: e(z.attr("height")), style: B});
                tinymce.each(b, function(n) {
                    var J = G[n];
                    if (n == "class" && J) {
                        J = J.replace(/mceItem.+ ?/g, "")
                    }
                    if (J && n != "type") {
                        H.attr(n, J)
                    }
                });
                for (I in G.params) {
                    s = new f("param", 1);
                    s.shortEnded = true;
                    y = G.params[I];
                    if (I === "src" && q.name === "WindowsMedia") {
                        I = "url"
                    }
                    s.attr({name: I, value: y});
                    H.append(s)
                }
                if (this.editor.getParam("media_strict", true)) {
                    H.attr({data: G.params.src, type: q.mimes[0]})
                } else {
                    H.attr({classid: "clsid:" + q.clsids[0], codebase: q.codebase});
                    j = new f("embed", 1);
                    j.shortEnded = true;
                    j.attr({id: z.attr("id"), width: e(z.attr("width")), height: e(z.attr("height")), style: B, type: q.mimes[0]});
                    for (I in G.params) {
                        j.attr(I, G.params[I])
                    }
                    tinymce.each(b, function(n) {
                        if (G[n] && n != "type") {
                            j.attr(n, G[n])
                        }
                    });
                    H.append(j)
                }
                if (G.object_html) {
                    y = new f("#text", 3);
                    y.raw = true;
                    y.value = G.object_html;
                    H.append(y)
                }
                if (C) {
                    C.append(H)
                }
            }
            if (C) {
                if (G.video_html) {
                    y = new f("#text", 3);
                    y.raw = true;
                    y.value = G.video_html;
                    C.append(y)
                }
            }
            if (F) {
                if (G.video_html) {
                    y = new f("#text", 3);
                    y.raw = true;
                    y.value = G.video_html;
                    F.append(y)
                }
            }
            var v = C || F || H || j;
            if (v) {
                z.replace(v)
            } else {
                z.remove()
            }
        }, objectToImg: function(C) {
            var L, k, F, s, M, N, y, A, x, G, E, t, q, I, B, l, K, o, H = this.lookup, m, z, v = this.editor.settings.url_converter, n = this.editor.settings.url_converter_scope, w, r, D, j;
            function u(O) {
                return new tinymce.html.Serializer({inner: true, validate: false}).serialize(O)
            }
            function J(P, O) {
                return H[(P.attr(O) || "").toLowerCase()]
            }
            function p(P) {
                var O = P.replace(/^.*\.([^.]+)$/, "$1");
                return H[O.toLowerCase() || ""]
            }
            if (!C.parent) {
                return
            }
            if (C.name === "script") {
                if (C.firstChild) {
                    m = i.exec(C.firstChild.value)
                }
                if (!m) {
                    return
                }
                o = m[1];
                K = {video: {}, params: h.parse(m[2])};
                A = K.params.width;
                x = K.params.height
            }
            K = K || {video: {}, params: {}};
            M = new f("img", 1);
            M.attr({src: this.editor.theme.url + "/img/trans.gif"});
            N = C.name;
            if (N === "video" || N == "audio") {
                F = C;
                L = C.getAll("object")[0];
                k = C.getAll("embed")[0];
                A = F.attr("width");
                x = F.attr("height");
                y = F.attr("id");
                K.video = {attrs: {}, sources: []};
                z = K.video.attrs;
                for (N in F.attributes.map) {
                    z[N] = F.attributes.map[N]
                }
                B = C.attr("src");
                if (B) {
                    K.video.sources.push({src: v.call(n, B, "src", C.name)})
                }
                l = F.getAll("source");
                for (E = 0; E < l.length; E++) {
                    B = l[E].remove();
                    K.video.sources.push({src: v.call(n, B.attr("src"), "src", "source"), type: B.attr("type"), media: B.attr("media")})
                }
                if (z.poster) {
                    z.poster = v.call(n, z.poster, "poster", C.name)
                }
            }
            if (C.name === "object") {
                L = C;
                k = C.getAll("embed")[0]
            }
            if (C.name === "embed") {
                k = C
            }
            if (C.name === "iframe") {
                s = C;
                o = "Iframe"
            }
            if (L) {
                A = A || L.attr("width");
                x = x || L.attr("height");
                G = G || L.attr("style");
                y = y || L.attr("id");
                w = w || L.attr("hspace");
                r = r || L.attr("vspace");
                D = D || L.attr("align");
                j = j || L.attr("bgcolor");
                K.name = L.attr("name");
                I = L.getAll("param");
                for (E = 0; E < I.length; E++) {
                    q = I[E];
                    N = q.remove().attr("name");
                    if (!a[N]) {
                        K.params[N] = q.attr("value")
                    }
                }
                K.params.src = K.params.src || L.attr("data")
            }
            if (k) {
                A = A || k.attr("width");
                x = x || k.attr("height");
                G = G || k.attr("style");
                y = y || k.attr("id");
                w = w || k.attr("hspace");
                r = r || k.attr("vspace");
                D = D || k.attr("align");
                j = j || k.attr("bgcolor");
                for (N in k.attributes.map) {
                    if (!a[N] && !K.params[N]) {
                        K.params[N] = k.attributes.map[N]
                    }
                }
            }
            if (s) {
                A = e(s.attr("width"));
                x = e(s.attr("height"));
                G = G || s.attr("style");
                y = s.attr("id");
                w = s.attr("hspace");
                r = s.attr("vspace");
                D = s.attr("align");
                j = s.attr("bgcolor");
                tinymce.each(b, function(O) {
                    M.attr(O, s.attr(O))
                });
                for (N in s.attributes.map) {
                    if (!a[N] && !K.params[N]) {
                        K.params[N] = s.attributes.map[N]
                    }
                }
            }
            if (K.params.movie) {
                K.params.src = K.params.src || K.params.movie;
                delete K.params.movie
            }
            if (K.params.src) {
                K.params.src = v.call(n, K.params.src, "src", "object")
            }
            if (F) {
                if (C.name === "video") {
                    o = H.video.name
                } else {
                    if (C.name === "audio") {
                        o = H.audio.name
                    }
                }
            }
            if (L && !o) {
                o = (J(L, "clsid") || J(L, "classid") || J(L, "type") || {}).name
            }
            if (k && !o) {
                o = (J(k, "type") || p(K.params.src) || {}).name
            }
            if (k && o == "EmbeddedAudio") {
                K.params.type = k.attr("type")
            }
            C.replace(M);
            if (k) {
                k.remove()
            }
            if (L) {
                t = u(L.remove());
                if (t) {
                    K.object_html = t
                }
            }
            if (F) {
                t = u(F.remove());
                if (t) {
                    K.video_html = t
                }
            }
            K.hspace = w;
            K.vspace = r;
            K.align = D;
            K.bgcolor = j;
            M.attr({id: y, "class": "mceItemMedia mceItem" + (o || "Flash"), style: G, width: A || (C.name == "audio" ? "300" : "320"), height: x || (C.name == "audio" ? "32" : "240"), hspace: w, vspace: r, align: D, bgcolor: j, "data-mce-json": h.serialize(K, "'")})
        }});
    tinymce.PluginManager.add("media", tinymce.plugins.MediaPlugin)
})();