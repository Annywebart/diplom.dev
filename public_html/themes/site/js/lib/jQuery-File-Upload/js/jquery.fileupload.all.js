//* tmpl.js
!function(e) {
    "use strict";
    var n = function(e, t) {
        var r = /[^\w\-\.:]/.test(e) ? new Function(n.arg + ",tmpl", "var _e=tmpl.encode" + n.helper + ",_s='" + e.replace(n.regexp, n.func) + "';return _s;") : n.cache[e] = n.cache[e] || n(n.load(e));
        return t ? r(t, n) : function(e) {
            return r(e, n)
        }
    };
    n.cache = {}, n.load = function(e) {
        return document.getElementById(e).innerHTML
    }, n.regexp = /([\s'\\])(?!(?:[^{]|\{(?!%))*%\})|(?:\{%(=|#)([\s\S]+?)%\})|(\{%)|(%\})/g, n.func = function(e, n, t, r, c, u) {
        return n ? {"\n": "\\n", "\r": "\\r", "	": "\\t", " ": " "}[n] || "\\" + n : t ? "=" === t ? "'+_e(" + r + ")+'" : "'+" + r + "+'" : c ? "';" : u ? "_s+='" : void 0
    }, n.encReg = /[<>&"'\x00]/g, n.encMap = {"<": "&lt;", ">": "&gt;", "&": "&amp;", '"': "&quot;", "'": "&#39;"}, n.encode = function(e) {
        return String(e).replace(n.encReg, function(e) {
            return n.encMap[e] || ""
        })
    }, n.arg = "o", n.helper = ",print=function(s,e){_s+=e&&(s||'')||_e(s);},include=function(s,d){_s+=tmpl(s,d);}", "function" == typeof define && define.amd ? define(function() {
        return n
    }) : e.tmpl = n
}(this);

//* load-images.js
(function(e) {
    "use strict";
    var t = function(e, i, a) {
        var n, r, o = document.createElement("img");
        if (o.onerror = i, o.onload = function() {
            !r || a && a.noRevoke || t.revokeObjectURL(r), i && i(t.scale(o, a))
        }, t.isInstanceOf("Blob", e) || t.isInstanceOf("File", e))
            n = r = t.createObjectURL(e), o._type = e.type;
        else {
            if ("string" != typeof e)
                return!1;
            n = e, a && a.crossOrigin && (o.crossOrigin = a.crossOrigin)
        }
        return n ? (o.src = n, o) : t.readFile(e, function(e) {
            var t = e.target;
            t && t.result ? o.src = t.result : i && i(e)
        })
    }, i = window.createObjectURL && window || window.URL && URL.revokeObjectURL && URL || window.webkitURL && webkitURL;
    t.isInstanceOf = function(e, t) {
        return Object.prototype.toString.call(t) === "[object " + e + "]"
    }, t.transformCoordinates = function() {
    }, t.getTransformedOptions = function(e) {
        return e
    }, t.renderImageToCanvas = function(e, t, i, a, n, r, o, s, d, l) {
        return e.getContext("2d").drawImage(t, i, a, n, r, o, s, d, l), e
    }, t.hasCanvasOption = function(e) {
        return e.canvas || e.crop
    }, t.scale = function(e, i) {
        i = i || {};
        var a, n, r, o, s, d, l, c, u, g = document.createElement("canvas"), f = e.getContext || t.hasCanvasOption(i) && g.getContext, h = e.naturalWidth || e.width, m = e.naturalHeight || e.height, p = h, S = m, b = function() {
            var e = Math.max((r || p) / p, (o || S) / S);
            e > 1 && (p = Math.ceil(p * e), S = Math.ceil(S * e))
        }, v = function() {
            var e = Math.min((a || p) / p, (n || S) / S);
            1 > e && (p = Math.ceil(p * e), S = Math.ceil(S * e))
        };
        return f && (i = t.getTransformedOptions(i), l = i.left || 0, c = i.top || 0, i.sourceWidth ? (s = i.sourceWidth, void 0 !== i.right && void 0 === i.left && (l = h - s - i.right)) : s = h - l - (i.right || 0), i.sourceHeight ? (d = i.sourceHeight, void 0 !== i.bottom && void 0 === i.top && (c = m - d - i.bottom)) : d = m - c - (i.bottom || 0), p = s, S = d), a = i.maxWidth, n = i.maxHeight, r = i.minWidth, o = i.minHeight, f && a && n && i.crop ? (p = a, S = n, u = s / d - a / n, 0 > u ? (d = n * s / a, void 0 === i.top && void 0 === i.bottom && (c = (m - d) / 2)) : u > 0 && (s = a * d / n, void 0 === i.left && void 0 === i.right && (l = (h - s) / 2))) : ((i.contain || i.cover) && (r = a = a || r, o = n = n || o), i.cover ? (v(), b()) : (b(), v())), f ? (g.width = p, g.height = S, t.transformCoordinates(g, i), t.renderImageToCanvas(g, e, l, c, s, d, 0, 0, p, S)) : (e.width = p, e.height = S, e)
    }, t.createObjectURL = function(e) {
        return i ? i.createObjectURL(e) : !1
    }, t.revokeObjectURL = function(e) {
        return i ? i.revokeObjectURL(e) : !1
    }, t.readFile = function(e, t, i) {
        if (window.FileReader) {
            var a = new FileReader;
            if (a.onload = a.onerror = t, i = i || "readAsDataURL", a[i])
                return a[i](e), a
        }
        return!1
    }, "function" == typeof define && define.amd ? define(function() {
        return t
    }) : e.loadImage = t
})(this), function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["load-image"], e) : e(window.loadImage)
}(function(e) {
    "use strict";
    if (window.navigator && window.navigator.platform && /iP(hone|od|ad)/.test(window.navigator.platform)) {
        var t = e.renderImageToCanvas;
        e.detectSubsampling = function(e) {
            var t, i;
            return e.width * e.height > 1048576 ? (t = document.createElement("canvas"), t.width = t.height = 1, i = t.getContext("2d"), i.drawImage(e, -e.width + 1, 0), 0 === i.getImageData(0, 0, 1, 1).data[3]) : !1
        }, e.detectVerticalSquash = function(e, t) {
            var i, a, n, r, o, s = e.naturalHeight || e.height, d = document.createElement("canvas"), l = d.getContext("2d");
            for (t && (s /= 2), d.width = 1, d.height = s, l.drawImage(e, 0, 0), i = l.getImageData(0, 0, 1, s).data, a = 0, n = s, r = s; r > a; )
                o = i[4 * (r - 1) + 3], 0 === o ? n = r : a = r, r = n + a >> 1;
            return r / s || 1
        }, e.renderImageToCanvas = function(i, a, n, r, o, s, d, l, c, u) {
            if ("image/jpeg" === a._type) {
                var g, f, h, m, p = i.getContext("2d"), S = document.createElement("canvas"), b = 1024, v = S.getContext("2d");
                if (S.width = b, S.height = b, p.save(), g = e.detectSubsampling(a), g && (n /= 2, r /= 2, o /= 2, s /= 2), f = e.detectVerticalSquash(a, g), g || 1 !== f) {
                    for (r *= f, c = Math.ceil(b * c / o), u = Math.ceil(b * u / s / f), l = 0, m = 0; s > m; ) {
                        for (d = 0, h = 0; o > h; )
                            v.clearRect(0, 0, b, b), v.drawImage(a, n, r, o, s, -h, -m, o, s), p.drawImage(S, 0, 0, b, b, d, l, c, u), h += b, d += c;
                        m += b, l += u
                    }
                    return p.restore(), i
                }
            }
            return t(i, a, n, r, o, s, d, l, c, u)
        }
    }
}), function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["load-image"], e) : e(window.loadImage)
}(function(e) {
    "use strict";
    var t = e.hasCanvasOption;
    e.hasCanvasOption = function(e) {
        return t(e) || e.orientation
    }, e.transformCoordinates = function(e, t) {
        var i = e.getContext("2d"), a = e.width, n = e.height, r = t.orientation;
        if (r)
            switch (r > 4 && (e.width = n, e.height = a), r) {
                case 2:
                    i.translate(a, 0), i.scale(-1, 1);
                    break;
                case 3:
                    i.translate(a, n), i.rotate(Math.PI);
                    break;
                case 4:
                    i.translate(0, n), i.scale(1, -1);
                    break;
                case 5:
                    i.rotate(.5 * Math.PI), i.scale(1, -1);
                    break;
                case 6:
                    i.rotate(.5 * Math.PI), i.translate(0, -n);
                    break;
                case 7:
                    i.rotate(.5 * Math.PI), i.translate(a, -n), i.scale(-1, 1);
                    break;
                case 8:
                    i.rotate(-.5 * Math.PI), i.translate(-a, 0)
            }
    }, e.getTransformedOptions = function(e) {
        if (!e.orientation || 1 === e.orientation)
            return e;
        var t, i = {};
        for (t in e)
            e.hasOwnProperty(t) && (i[t] = e[t]);
        switch (e.orientation) {
            case 2:
                i.left = e.right, i.right = e.left;
                break;
            case 3:
                i.left = e.right, i.top = e.bottom, i.right = e.left, i.bottom = e.top;
                break;
            case 4:
                i.top = e.bottom, i.bottom = e.top;
                break;
            case 5:
                i.left = e.top, i.top = e.left, i.right = e.bottom, i.bottom = e.right;
                break;
            case 6:
                i.left = e.top, i.top = e.right, i.right = e.bottom, i.bottom = e.left;
                break;
            case 7:
                i.left = e.bottom, i.top = e.right, i.right = e.top, i.bottom = e.left;
                break;
            case 8:
                i.left = e.bottom, i.top = e.left, i.right = e.top, i.bottom = e.right
        }
        return e.orientation > 4 && (i.maxWidth = e.maxHeight, i.maxHeight = e.maxWidth, i.minWidth = e.minHeight, i.minHeight = e.minWidth, i.sourceWidth = e.sourceHeight, i.sourceHeight = e.sourceWidth), i
    }
}), function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["load-image"], e) : e(window.loadImage)
}(function(e) {
    "use strict";
    var t = window.Blob && (Blob.prototype.slice || Blob.prototype.webkitSlice || Blob.prototype.mozSlice);
    e.blobSlice = t && function() {
        var e = this.slice || this.webkitSlice || this.mozSlice;
        return e.apply(this, arguments)
    }, e.metaDataParsers = {jpeg: {65505: []}}, e.parseMetaData = function(t, i, a) {
        a = a || {};
        var n = this, r = a.maxMetaDataSize || 262144, o = {}, s = !(window.DataView && t && t.size >= 12 && "image/jpeg" === t.type && e.blobSlice);
        (s || !e.readFile(e.blobSlice.call(t, 0, r), function(t) {
            var r, s, d, l, c = t.target.result, u = new DataView(c), g = 2, f = u.byteLength - 4, h = g;
            if (65496 === u.getUint16(0)) {
                for (; f > g && (r = u.getUint16(g), r >= 65504 && 65519 >= r || 65534 === r); ) {
                    if (s = u.getUint16(g + 2) + 2, g + s > u.byteLength) {
                        console.log("Invalid meta data: Invalid segment size.");
                        break
                    }
                    if (d = e.metaDataParsers.jpeg[r])
                        for (l = 0; d.length > l; l += 1)
                            d[l].call(n, u, g, s, o, a);
                    g += s, h = g
                }
                !a.disableImageHead && h > 6 && (o.imageHead = c.slice ? c.slice(0, h) : new Uint8Array(c).subarray(0, h))
            } else
                console.log("Invalid JPEG file: Missing JPEG marker.");
            i(o)
        }, "readAsArrayBuffer")) && i(o)
    }
}), function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["load-image", "load-image-meta"], e) : e(window.loadImage)
}(function(e) {
    "use strict";
    e.ExifMap = function() {
        return this
    }, e.ExifMap.prototype.map = {Orientation: 274}, e.ExifMap.prototype.get = function(e) {
        return this[e] || this[this.map[e]]
    }, e.getExifThumbnail = function(e, t, i) {
        var a, n, r;
        if (!i || t + i > e.byteLength)
            return console.log("Invalid Exif data: Invalid thumbnail data."), void 0;
        for (a = [], n = 0; i > n; n += 1)
            r = e.getUint8(t + n), a.push((16 > r ? "0" : "") + r.toString(16));
        return"data:image/jpeg,%" + a.join("%")
    }, e.exifTagTypes = {1: {getValue: function(e, t) {
                return e.getUint8(t)
            }, size: 1}, 2: {getValue: function(e, t) {
                return String.fromCharCode(e.getUint8(t))
            }, size: 1, ascii: !0}, 3: {getValue: function(e, t, i) {
                return e.getUint16(t, i)
            }, size: 2}, 4: {getValue: function(e, t, i) {
                return e.getUint32(t, i)
            }, size: 4}, 5: {getValue: function(e, t, i) {
                return e.getUint32(t, i) / e.getUint32(t + 4, i)
            }, size: 8}, 9: {getValue: function(e, t, i) {
                return e.getInt32(t, i)
            }, size: 4}, 10: {getValue: function(e, t, i) {
                return e.getInt32(t, i) / e.getInt32(t + 4, i)
            }, size: 8}}, e.exifTagTypes[7] = e.exifTagTypes[1], e.getExifValue = function(t, i, a, n, r, o) {
        var s, d, l, c, u, g, f = e.exifTagTypes[n];
        if (!f)
            return console.log("Invalid Exif data: Invalid tag type."), void 0;
        if (s = f.size * r, d = s > 4 ? i + t.getUint32(a + 8, o) : a + 8, d + s > t.byteLength)
            return console.log("Invalid Exif data: Invalid data offset."), void 0;
        if (1 === r)
            return f.getValue(t, d, o);
        for (l = [], c = 0; r > c; c += 1)
            l[c] = f.getValue(t, d + c * f.size, o);
        if (f.ascii) {
            for (u = "", c = 0; l.length > c && (g = l[c], "\0" !== g); c += 1)
                u += g;
            return u
        }
        return l
    }, e.parseExifTag = function(t, i, a, n, r) {
        var o = t.getUint16(a, n);
        r.exif[o] = e.getExifValue(t, i, a, t.getUint16(a + 2, n), t.getUint32(a + 4, n), n)
    }, e.parseExifTags = function(e, t, i, a, n) {
        var r, o, s;
        if (i + 6 > e.byteLength)
            return console.log("Invalid Exif data: Invalid directory offset."), void 0;
        if (r = e.getUint16(i, a), o = i + 2 + 12 * r, o + 4 > e.byteLength)
            return console.log("Invalid Exif data: Invalid directory size."), void 0;
        for (s = 0; r > s; s += 1)
            this.parseExifTag(e, t, i + 2 + 12 * s, a, n);
        return e.getUint32(o, a)
    }, e.parseExifData = function(t, i, a, n, r) {
        if (!r.disableExif) {
            var o, s, d, l = i + 10;
            if (1165519206 === t.getUint32(i + 4)) {
                if (l + 8 > t.byteLength)
                    return console.log("Invalid Exif data: Invalid segment size."), void 0;
                if (0 !== t.getUint16(i + 8))
                    return console.log("Invalid Exif data: Missing byte alignment offset."), void 0;
                switch (t.getUint16(l)) {
                    case 18761:
                        o = !0;
                        break;
                    case 19789:
                        o = !1;
                        break;
                    default:
                        return console.log("Invalid Exif data: Invalid byte alignment marker."), void 0
                }
                if (42 !== t.getUint16(l + 2, o))
                    return console.log("Invalid Exif data: Missing TIFF marker."), void 0;
                s = t.getUint32(l + 4, o), n.exif = new e.ExifMap, s = e.parseExifTags(t, l, l + s, o, n), s && !r.disableExifThumbnail && (d = {exif: {}}, s = e.parseExifTags(t, l, l + s, o, d), d.exif[513] && (n.exif.Thumbnail = e.getExifThumbnail(t, l + d.exif[513], d.exif[514]))), n.exif[34665] && !r.disableExifSub && e.parseExifTags(t, l, l + n.exif[34665], o, n), n.exif[34853] && !r.disableExifGps && e.parseExifTags(t, l, l + n.exif[34853], o, n)
            }
        }
    }, e.metaDataParsers.jpeg[65505].push(e.parseExifData)
}), function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["load-image", "load-image-exif"], e) : e(window.loadImage)
}(function(e) {
    "use strict";
    var t, i, a;
    e.ExifMap.prototype.tags = {256: "ImageWidth", 257: "ImageHeight", 34665: "ExifIFDPointer", 34853: "GPSInfoIFDPointer", 40965: "InteroperabilityIFDPointer", 258: "BitsPerSample", 259: "Compression", 262: "PhotometricInterpretation", 274: "Orientation", 277: "SamplesPerPixel", 284: "PlanarConfiguration", 530: "YCbCrSubSampling", 531: "YCbCrPositioning", 282: "XResolution", 283: "YResolution", 296: "ResolutionUnit", 273: "StripOffsets", 278: "RowsPerStrip", 279: "StripByteCounts", 513: "JPEGInterchangeFormat", 514: "JPEGInterchangeFormatLength", 301: "TransferFunction", 318: "WhitePoint", 319: "PrimaryChromaticities", 529: "YCbCrCoefficients", 532: "ReferenceBlackWhite", 306: "DateTime", 270: "ImageDescription", 271: "Make", 272: "Model", 305: "Software", 315: "Artist", 33432: "Copyright", 36864: "ExifVersion", 40960: "FlashpixVersion", 40961: "ColorSpace", 40962: "PixelXDimension", 40963: "PixelYDimension", 42240: "Gamma", 37121: "ComponentsConfiguration", 37122: "CompressedBitsPerPixel", 37500: "MakerNote", 37510: "UserComment", 40964: "RelatedSoundFile", 36867: "DateTimeOriginal", 36868: "DateTimeDigitized", 37520: "SubSecTime", 37521: "SubSecTimeOriginal", 37522: "SubSecTimeDigitized", 33434: "ExposureTime", 33437: "FNumber", 34850: "ExposureProgram", 34852: "SpectralSensitivity", 34855: "PhotographicSensitivity", 34856: "OECF", 34864: "SensitivityType", 34865: "StandardOutputSensitivity", 34866: "RecommendedExposureIndex", 34867: "ISOSpeed", 34868: "ISOSpeedLatitudeyyy", 34869: "ISOSpeedLatitudezzz", 37377: "ShutterSpeedValue", 37378: "ApertureValue", 37379: "BrightnessValue", 37380: "ExposureBias", 37381: "MaxApertureValue", 37382: "SubjectDistance", 37383: "MeteringMode", 37384: "LightSource", 37385: "Flash", 37396: "SubjectArea", 37386: "FocalLength", 41483: "FlashEnergy", 41484: "SpatialFrequencyResponse", 41486: "FocalPlaneXResolution", 41487: "FocalPlaneYResolution", 41488: "FocalPlaneResolutionUnit", 41492: "SubjectLocation", 41493: "ExposureIndex", 41495: "SensingMethod", 41728: "FileSource", 41729: "SceneType", 41730: "CFAPattern", 41985: "CustomRendered", 41986: "ExposureMode", 41987: "WhiteBalance", 41988: "DigitalZoomRatio", 41989: "FocalLengthIn35mmFilm", 41990: "SceneCaptureType", 41991: "GainControl", 41992: "Contrast", 41993: "Saturation", 41994: "Sharpness", 41995: "DeviceSettingDescription", 41996: "SubjectDistanceRange", 42016: "ImageUniqueID", 42032: "CameraOwnerName", 42033: "BodySerialNumber", 42034: "LensSpecification", 42035: "LensMake", 42036: "LensModel", 42037: "LensSerialNumber", 0: "GPSVersionID", 1: "GPSLatitudeRef", 2: "GPSLatitude", 3: "GPSLongitudeRef", 4: "GPSLongitude", 5: "GPSAltitudeRef", 6: "GPSAltitude", 7: "GPSTimeStamp", 8: "GPSSatellites", 9: "GPSStatus", 10: "GPSMeasureMode", 11: "GPSDOP", 12: "GPSSpeedRef", 13: "GPSSpeed", 14: "GPSTrackRef", 15: "GPSTrack", 16: "GPSImgDirectionRef", 17: "GPSImgDirection", 18: "GPSMapDatum", 19: "GPSDestLatitudeRef", 20: "GPSDestLatitude", 21: "GPSDestLongitudeRef", 22: "GPSDestLongitude", 23: "GPSDestBearingRef", 24: "GPSDestBearing", 25: "GPSDestDistanceRef", 26: "GPSDestDistance", 27: "GPSProcessingMethod", 28: "GPSAreaInformation", 29: "GPSDateStamp", 30: "GPSDifferential", 31: "GPSHPositioningError"}, e.ExifMap.prototype.stringValues = {ExposureProgram: {0: "Undefined", 1: "Manual", 2: "Normal program", 3: "Aperture priority", 4: "Shutter priority", 5: "Creative program", 6: "Action program", 7: "Portrait mode", 8: "Landscape mode"}, MeteringMode: {0: "Unknown", 1: "Average", 2: "CenterWeightedAverage", 3: "Spot", 4: "MultiSpot", 5: "Pattern", 6: "Partial", 255: "Other"}, LightSource: {0: "Unknown", 1: "Daylight", 2: "Fluorescent", 3: "Tungsten (incandescent light)", 4: "Flash", 9: "Fine weather", 10: "Cloudy weather", 11: "Shade", 12: "Daylight fluorescent (D 5700 - 7100K)", 13: "Day white fluorescent (N 4600 - 5400K)", 14: "Cool white fluorescent (W 3900 - 4500K)", 15: "White fluorescent (WW 3200 - 3700K)", 17: "Standard light A", 18: "Standard light B", 19: "Standard light C", 20: "D55", 21: "D65", 22: "D75", 23: "D50", 24: "ISO studio tungsten", 255: "Other"}, Flash: {0: "Flash did not fire", 1: "Flash fired", 5: "Strobe return light not detected", 7: "Strobe return light detected", 9: "Flash fired, compulsory flash mode", 13: "Flash fired, compulsory flash mode, return light not detected", 15: "Flash fired, compulsory flash mode, return light detected", 16: "Flash did not fire, compulsory flash mode", 24: "Flash did not fire, auto mode", 25: "Flash fired, auto mode", 29: "Flash fired, auto mode, return light not detected", 31: "Flash fired, auto mode, return light detected", 32: "No flash function", 65: "Flash fired, red-eye reduction mode", 69: "Flash fired, red-eye reduction mode, return light not detected", 71: "Flash fired, red-eye reduction mode, return light detected", 73: "Flash fired, compulsory flash mode, red-eye reduction mode", 77: "Flash fired, compulsory flash mode, red-eye reduction mode, return light not detected", 79: "Flash fired, compulsory flash mode, red-eye reduction mode, return light detected", 89: "Flash fired, auto mode, red-eye reduction mode", 93: "Flash fired, auto mode, return light not detected, red-eye reduction mode", 95: "Flash fired, auto mode, return light detected, red-eye reduction mode"}, SensingMethod: {1: "Undefined", 2: "One-chip color area sensor", 3: "Two-chip color area sensor", 4: "Three-chip color area sensor", 5: "Color sequential area sensor", 7: "Trilinear sensor", 8: "Color sequential linear sensor"}, SceneCaptureType: {0: "Standard", 1: "Landscape", 2: "Portrait", 3: "Night scene"}, SceneType: {1: "Directly photographed"}, CustomRendered: {0: "Normal process", 1: "Custom process"}, WhiteBalance: {0: "Auto white balance", 1: "Manual white balance"}, GainControl: {0: "None", 1: "Low gain up", 2: "High gain up", 3: "Low gain down", 4: "High gain down"}, Contrast: {0: "Normal", 1: "Soft", 2: "Hard"}, Saturation: {0: "Normal", 1: "Low saturation", 2: "High saturation"}, Sharpness: {0: "Normal", 1: "Soft", 2: "Hard"}, SubjectDistanceRange: {0: "Unknown", 1: "Macro", 2: "Close view", 3: "Distant view"}, FileSource: {3: "DSC"}, ComponentsConfiguration: {0: "", 1: "Y", 2: "Cb", 3: "Cr", 4: "R", 5: "G", 6: "B"}, Orientation: {1: "top-left", 2: "top-right", 3: "bottom-right", 4: "bottom-left", 5: "left-top", 6: "right-top", 7: "right-bottom", 8: "left-bottom"}}, e.ExifMap.prototype.getText = function(e) {
        var t = this.get(e);
        switch (e) {
            case"LightSource":
            case"Flash":
            case"MeteringMode":
            case"ExposureProgram":
            case"SensingMethod":
            case"SceneCaptureType":
            case"SceneType":
            case"CustomRendered":
            case"WhiteBalance":
            case"GainControl":
            case"Contrast":
            case"Saturation":
            case"Sharpness":
            case"SubjectDistanceRange":
            case"FileSource":
            case"Orientation":
                return this.stringValues[e][t];
            case"ExifVersion":
            case"FlashpixVersion":
                return String.fromCharCode(t[0], t[1], t[2], t[3]);
            case"ComponentsConfiguration":
                return this.stringValues[e][t[0]] + this.stringValues[e][t[1]] + this.stringValues[e][t[2]] + this.stringValues[e][t[3]];
            case"GPSVersionID":
                return t[0] + "." + t[1] + "." + t[2] + "." + t[3]
        }
        return t + ""
    }, t = e.ExifMap.prototype.tags, i = e.ExifMap.prototype.map;
    for (a in t)
        t.hasOwnProperty(a) && (i[t[a]] = a);
    e.ExifMap.prototype.getAll = function() {
        var e, i, a = {};
        for (e in this)
            this.hasOwnProperty(e) && (i = t[e], i && (a[i] = this.getText(i)));
        return a
    }
});

//* canvas-to-blob.js
!function(t) {
    "use strict";
    var e = t.HTMLCanvasElement && t.HTMLCanvasElement.prototype, n = t.Blob && function() {
        try {
            return Boolean(new Blob)
        } catch (t) {
            return!1
        }
    }(), o = n && t.Uint8Array && function() {
        try {
            return 100 === new Blob([new Uint8Array(100)]).size
        } catch (t) {
            return!1
        }
    }(), r = t.BlobBuilder || t.WebKitBlobBuilder || t.MozBlobBuilder || t.MSBlobBuilder, i = (n || r) && t.atob && t.ArrayBuffer && t.Uint8Array && function(t) {
        var e, i, a, l, u, B;
        for (e = t.split(",")[0].indexOf("base64") >= 0?atob(t.split(",")[1]):decodeURIComponent(t.split(",")[1]), i = new ArrayBuffer(e.length), a = new Uint8Array(i), l = 0; l < e.length; l += 1)
            a[l] = e.charCodeAt(l);
        return u = t.split(",")[0].split(":")[1].split(";")[0], n ? new Blob([o ? a : i], {type: u}) : (B = new r, B.append(i), B.getBlob(u))
    };
    t.HTMLCanvasElement && !e.toBlob && (e.mozGetAsFile ? e.toBlob = function(t, n, o) {
        o && e.toDataURL && i ? t(i(this.toDataURL(n, o))) : t(this.mozGetAsFile("blob", n))
    } : e.toDataURL && i && (e.toBlob = function(t, e, n) {
        t(i(this.toDataURL(e, n)))
    })), "function" == typeof define && define.amd ? define(function() {
        return i
    }) : t.dataURLtoBlob = i
}(this);

//* jquery.iframe-transport.js
(function(b) {
    "function" === typeof define && define.amd ? define(["jquery"], b) : b(window.jQuery)
})(function(b) {
    var g = 0;
    b.ajaxTransport("iframe", function(a) {
        if (a.async) {
            var c, d, e;
            return{send: function(k, h) {
                    c = b('<form style="display:none;"></form>');
                    c.attr("accept-charset", a.formAcceptCharset);
                    e = /\?/.test(a.url) ? "&" : "?";
                    "DELETE" === a.type ? (a.url = a.url + e + "_method=DELETE", a.type = "POST") : "PUT" === a.type ? (a.url = a.url + e + "_method=PUT", a.type = "POST") : "PATCH" === a.type && (a.url = a.url + e + "_method=PATCH", a.type = "POST");
                    g +=
                            1;
                    d = b('<iframe src="javascript:false;" name="iframe-transport-' + g + '"></iframe>').bind("load", function() {
                        var f, e = b.isArray(a.paramName) ? a.paramName : [a.paramName];
                        d.unbind("load").bind("load", function() {
                            var a;
                            try {
                                if (a = d.contents(), !a.length || !a[0].firstChild)
                                    throw Error();
                            } catch (e) {
                                a = void 0
                            }
                            h(200, "success", {iframe: a});
                            b('<iframe src="javascript:false;"></iframe>').appendTo(c);
                            window.setTimeout(function() {
                                c.remove()
                            }, 0)
                        });
                        c.prop("target", d.prop("name")).prop("action", a.url).prop("method", a.type);
                        a.formData &&
                                b.each(a.formData, function(a, d) {
                                    b('<input type="hidden"/>').prop("name", d.name).val(d.value).appendTo(c)
                                });
                        a.fileInput && (a.fileInput.length && "POST" === a.type) && (f = a.fileInput.clone(), a.fileInput.after(function(a) {
                            return f[a]
                        }), a.paramName && a.fileInput.each(function(c) {
                            b(this).prop("name", e[c] || a.paramName)
                        }), c.append(a.fileInput).prop("enctype", "multipart/form-data").prop("encoding", "multipart/form-data"));
                        c.submit();
                        f && f.length && a.fileInput.each(function(a, c) {
                            var d = b(f[a]);
                            b(c).prop("name", d.prop("name"));
                            d.replaceWith(c)
                        })
                    });
                    c.append(d).appendTo(document.body)
                }, abort: function() {
                    d && d.unbind("load").prop("src", "javascript".concat(":false;"));
                    c && c.remove()
                }}
        }
    });
    b.ajaxSetup({converters: {"iframe text": function(a) {
                return a && b(a[0].body).text()
            }, "iframe json": function(a) {
                return a && b.parseJSON(b(a[0].body).text())
            }, "iframe html": function(a) {
                return a && b(a[0].body).html()
            }, "iframe xml": function(a) {
                return(a = a && a[0]) && b.isXMLDoc(a) ? a : b.parseXML(a.XMLDocument && a.XMLDocument.xml || b(a.body).html())
            }, "iframe script": function(a) {
                return a &&
                        b.globalEval(b(a[0].body).text())
            }}})
});

//* jquery.fileupload.js
(function(d) {
    "function" === typeof define && define.amd ? define(["jquery", "jquery.ui.widget"], d) : d(window.jQuery)
})(function(d) {
    d.support.fileInput = !(RegExp("(Android (1\\.[0156]|2\\.[01]))|(Windows Phone (OS 7|8\\.0))|(XBLWP)|(ZuneWP)|(WPDesktop)|(w(eb)?OSBrowser)|(webOS)|(Kindle/(1\\.0|2\\.[05]|3\\.0))").test(window.navigator.userAgent) || d('<input type="file">').prop("disabled"));
    d.support.xhrFileUpload = !(!window.XMLHttpRequestUpload || !window.FileReader);
    d.support.xhrFormDataFileUpload = !!window.FormData;
    d.support.blobSlice = window.Blob && (Blob.prototype.slice || Blob.prototype.webkitSlice || Blob.prototype.mozSlice);
    d.widget("blueimp.fileupload", {options: {dropZone: d(document), pasteZone: d(document), fileInput: void 0, replaceFileInput: !0, paramName: void 0, singleFileUploads: !0, limitMultiFileUploads: void 0, sequentialUploads: !1, limitConcurrentUploads: void 0, forceIframeTransport: !1, redirect: void 0, redirectParamName: void 0, postMessage: void 0, multipart: !0, maxChunkSize: void 0, uploadedBytes: void 0, recalculateProgress: !0,
            progressInterval: 100, bitrateInterval: 500, autoUpload: !0, messages: {uploadedBytes: "Uploaded bytes exceed file size"}, i18n: function(a, b) {
                a = this.messages[a] || a.toString();
                b && d.each(b, function(b, e) {
                    a = a.replace("{" + b + "}", e)
                });
                return a
            }, formData: function(a) {
                return a.serializeArray()
            }, add: function(a, b) {
                (b.autoUpload || !1 !== b.autoUpload && d(this).fileupload("option", "autoUpload")) && b.process().done(function() {
                    b.submit()
                })
            }, processData: !1, contentType: !1, cache: !1}, _specialOptions: ["fileInput", "dropZone", "pasteZone",
            "multipart", "forceIframeTransport"], _blobSlice: d.support.blobSlice && function() {
            return(this.slice || this.webkitSlice || this.mozSlice).apply(this, arguments)
        }, _BitrateTimer: function() {
            this.timestamp = Date.now ? Date.now() : (new Date).getTime();
            this.bitrate = this.loaded = 0;
            this.getBitrate = function(a, b, c) {
                var e = a - this.timestamp;
                if (!this.bitrate || !c || e > c)
                    this.bitrate = 8 * (b - this.loaded) * (1E3 / e), this.loaded = b, this.timestamp = a;
                return this.bitrate
            }
        }, _isXHRUpload: function(a) {
            return!a.forceIframeTransport && (!a.multipart &&
                    d.support.xhrFileUpload || d.support.xhrFormDataFileUpload)
        }, _getFormData: function(a) {
            var b;
            return"function" === typeof a.formData ? a.formData(a.form) : d.isArray(a.formData) ? a.formData : "object" === d.type(a.formData) ? (b = [], d.each(a.formData, function(a, e) {
                b.push({name: a, value: e})
            }), b) : []
        }, _getTotal: function(a) {
            var b = 0;
            d.each(a, function(a, e) {
                b += e.size || 1
            });
            return b
        }, _initProgressObject: function(a) {
            var b = {loaded: 0, total: 0, bitrate: 0};
            a._progress ? d.extend(a._progress, b) : a._progress = b
        }, _initResponseObject: function(a) {
            var b;
            if (a._response)
                for (b in a._response)
                    a._response.hasOwnProperty(b) && delete a._response[b];
            else
                a._response = {}
        }, _onProgress: function(a, b) {
            if (a.lengthComputable) {
                var c = Date.now ? Date.now() : (new Date).getTime(), e;
                b._time && b.progressInterval && c - b._time < b.progressInterval && a.loaded !== a.total || (b._time = c, e = Math.floor(a.loaded / a.total * (b.chunkSize || b._progress.total)) + (b.uploadedBytes || 0), this._progress.loaded += e - b._progress.loaded, this._progress.bitrate = this._bitrateTimer.getBitrate(c, this._progress.loaded,
                        b.bitrateInterval), b._progress.loaded = b.loaded = e, b._progress.bitrate = b.bitrate = b._bitrateTimer.getBitrate(c, e, b.bitrateInterval), this._trigger("progress", a, b), this._trigger("progressall", a, this._progress))
            }
        }, _initProgressListener: function(a) {
            var b = this, c = a.xhr ? a.xhr() : d.ajaxSettings.xhr();
            c.upload && (d(c.upload).bind("progress", function(c) {
                var d = c.originalEvent;
                c.lengthComputable = d.lengthComputable;
                c.loaded = d.loaded;
                c.total = d.total;
                b._onProgress(c, a)
            }), a.xhr = function() {
                return c
            })
        }, _isInstanceOf: function(a,
                b) {
            return Object.prototype.toString.call(b) === "[object " + a + "]"
        }, _initXHRData: function(a) {
            var b = this, c, e = a.files[0], f = a.multipart || !d.support.xhrFileUpload, g = a.paramName[0];
            a.headers = d.extend({}, a.headers);
            a.contentRange && (a.headers["Content-Range"] = a.contentRange);
            f && !a.blob && this._isInstanceOf("File", e) || (a.headers["Content-Disposition"] = 'attachment; filename="' + encodeURI(e.name) + '"');
            f ? d.support.xhrFormDataFileUpload && (a.postMessage ? (c = this._getFormData(a), a.blob ? c.push({name: g, value: a.blob}) : d.each(a.files,
                    function(b, e) {
                        c.push({name: a.paramName[b] || g, value: e})
                    })) : (b._isInstanceOf("FormData", a.formData) ? c = a.formData : (c = new FormData, d.each(this._getFormData(a), function(a, b) {
                c.append(b.name, b.value)
            })), a.blob ? c.append(g, a.blob, e.name) : d.each(a.files, function(e, d) {
                (b._isInstanceOf("File", d) || b._isInstanceOf("Blob", d)) && c.append(a.paramName[e] || g, d, d.name)
            })), a.data = c) : (a.contentType = e.type, a.data = a.blob || e);
            a.blob = null
        }, _initIframeSettings: function(a) {
            var b = d("<a></a>").prop("href", a.url).prop("host");
            a.dataType = "iframe " + (a.dataType || "");
            a.formData = this._getFormData(a);
            a.redirect && b && b !== location.host && a.formData.push({name: a.redirectParamName || "redirect", value: a.redirect})
        }, _initDataSettings: function(a) {
            this._isXHRUpload(a) ? (this._chunkedUpload(a, !0) || (a.data || this._initXHRData(a), this._initProgressListener(a)), a.postMessage && (a.dataType = "postmessage " + (a.dataType || ""))) : this._initIframeSettings(a)
        }, _getParamName: function(a) {
            var b = d(a.fileInput), c = a.paramName;
            c ? d.isArray(c) || (c = [c]) : (c = [], b.each(function() {
                for (var a =
                        d(this), b = a.prop("name") || "files[]", a = (a.prop("files") || [1]).length; a; )
                    c.push(b), a -= 1
            }), c.length || (c = [b.prop("name") || "files[]"]));
            return c
        }, _initFormSettings: function(a) {
            a.form && a.form.length || (a.form = d(a.fileInput.prop("form")), a.form.length || (a.form = d(this.options.fileInput.prop("form"))));
            a.paramName = this._getParamName(a);
            a.url || (a.url = a.form.prop("action") || location.href);
            a.type = (a.type || "string" === d.type(a.form.prop("method")) && a.form.prop("method") || "").toUpperCase();
            "POST" !== a.type && "PUT" !==
                    a.type && "PATCH" !== a.type && (a.type = "POST");
            a.formAcceptCharset || (a.formAcceptCharset = a.form.attr("accept-charset"))
        }, _getAJAXSettings: function(a) {
            a = d.extend({}, this.options, a);
            this._initFormSettings(a);
            this._initDataSettings(a);
            return a
        }, _getDeferredState: function(a) {
            return a.state ? a.state() : a.isResolved() ? "resolved" : a.isRejected() ? "rejected" : "pending"
        }, _enhancePromise: function(a) {
            a.success = a.done;
            a.error = a.fail;
            a.complete = a.always;
            return a
        }, _getXHRPromise: function(a, b, c) {
            var e = d.Deferred(), f = e.promise();
            b = b || this.options.context || f;
            !0 === a ? e.resolveWith(b, c) : !1 === a && e.rejectWith(b, c);
            f.abort = e.promise;
            return this._enhancePromise(f)
        }, _addConvenienceMethods: function(a, b) {
            var c = this;
            b.process = function(a, f) {
                if (a || f)
                    b._processQueue = this._processQueue = (this._processQueue || d.Deferred().resolveWith(c, [this]).promise()).pipe(a, f);
                return this._processQueue || d.Deferred().resolveWith(c, [this]).promise()
            };
            b.submit = function() {
                "pending" !== this.state() && (b.jqXHR = this.jqXHR = !1 !== c._trigger("submit", a, this) && c._onSend(a,
                        this));
                return this.jqXHR || c._getXHRPromise()
            };
            b.abort = function() {
                return this.jqXHR ? this.jqXHR.abort() : c._getXHRPromise()
            };
            b.state = function() {
                if (this.jqXHR)
                    return c._getDeferredState(this.jqXHR);
                if (this._processQueue)
                    return c._getDeferredState(this._processQueue)
            };
            b.progress = function() {
                return this._progress
            };
            b.response = function() {
                return this._response
            }
        }, _getUploadedBytes: function(a) {
            return(a = (a = (a = a.getResponseHeader("Range")) && a.split("-")) && 1 < a.length && parseInt(a[1], 10)) && a + 1
        }, _chunkedUpload: function(a,
                b) {
            a.uploadedBytes = a.uploadedBytes || 0;
            var c = this, e = a.files[0], f = e.size, g = a.uploadedBytes, k = a.maxChunkSize || f, h = this._blobSlice, l = d.Deferred(), m = l.promise(), p, n;
            if (!(this._isXHRUpload(a) && h && (g || k < f)) || a.data)
                return!1;
            if (b)
                return!0;
            if (g >= f)
                return e.error = a.i18n("uploadedBytes"), this._getXHRPromise(!1, a.context, [null, "error", e.error]);
            n = function() {
                var b = d.extend({}, a), m = b._progress.loaded;
                b.blob = h.call(e, g, g + k, e.type);
                b.chunkSize = b.blob.size;
                b.contentRange = "bytes " + g + "-" + (g + b.chunkSize - 1) + "/" + f;
                c._initXHRData(b);
                c._initProgressListener(b);
                p = (!1 !== c._trigger("chunksend", null, b) && d.ajax(b) || c._getXHRPromise(!1, b.context)).done(function(e, h, k) {
                    g = c._getUploadedBytes(k) || g + b.chunkSize;
                    m + b.chunkSize - b._progress.loaded && c._onProgress(d.Event("progress", {lengthComputable: !0, loaded: g - b.uploadedBytes, total: g - b.uploadedBytes}), b);
                    a.uploadedBytes = b.uploadedBytes = g;
                    b.result = e;
                    b.textStatus = h;
                    b.jqXHR = k;
                    c._trigger("chunkdone", null, b);
                    c._trigger("chunkalways", null, b);
                    g < f ? n() : l.resolveWith(b.context, [e, h, k])
                }).fail(function(a,
                        e, d) {
                    b.jqXHR = a;
                    b.textStatus = e;
                    b.errorThrown = d;
                    c._trigger("chunkfail", null, b);
                    c._trigger("chunkalways", null, b);
                    l.rejectWith(b.context, [a, e, d])
                })
            };
            this._enhancePromise(m);
            m.abort = function() {
                return p.abort()
            };
            n();
            return m
        }, _beforeSend: function(a, b) {
            0 === this._active && (this._trigger("start"), this._bitrateTimer = new this._BitrateTimer, this._progress.loaded = this._progress.total = 0, this._progress.bitrate = 0);
            this._initResponseObject(b);
            this._initProgressObject(b);
            b._progress.loaded = b.loaded = b.uploadedBytes ||
                    0;
            b._progress.total = b.total = this._getTotal(b.files) || 1;
            b._progress.bitrate = b.bitrate = 0;
            this._active += 1;
            this._progress.loaded += b.loaded;
            this._progress.total += b.total
        }, _onDone: function(a, b, c, e) {
            var f = e._progress.total, g = e._response;
            e._progress.loaded < f && this._onProgress(d.Event("progress", {lengthComputable: !0, loaded: f, total: f}), e);
            g.result = e.result = a;
            g.textStatus = e.textStatus = b;
            g.jqXHR = e.jqXHR = c;
            this._trigger("done", null, e)
        }, _onFail: function(a, b, c, e) {
            var d = e._response;
            e.recalculateProgress && (this._progress.loaded -=
                    e._progress.loaded, this._progress.total -= e._progress.total);
            d.jqXHR = e.jqXHR = a;
            d.textStatus = e.textStatus = b;
            d.errorThrown = e.errorThrown = c;
            this._trigger("fail", null, e)
        }, _onAlways: function(a, b, c, e) {
            this._trigger("always", null, e)
        }, _onSend: function(a, b) {
            b.submit || this._addConvenienceMethods(a, b);
            var c = this, e, f, g, k, h = c._getAJAXSettings(b), l = function() {
                c._sending += 1;
                h._bitrateTimer = new c._BitrateTimer;
                return e = e || ((f || !1 === c._trigger("send", a, h)) && c._getXHRPromise(!1, h.context, f) || c._chunkedUpload(h) || d.ajax(h)).done(function(a,
                        b, e) {
                    c._onDone(a, b, e, h)
                }).fail(function(a, b, e) {
                    c._onFail(a, b, e, h)
                }).always(function(a, b, e) {
                    c._onAlways(a, b, e, h);
                    c._sending -= 1;
                    c._active -= 1;
                    if (h.limitConcurrentUploads && h.limitConcurrentUploads > c._sending)
                        for (a = c._slots.shift(); a; ) {
                            if ("pending" === c._getDeferredState(a)) {
                                a.resolve();
                                break
                            }
                            a = c._slots.shift()
                        }
                    0 === c._active && c._trigger("stop")
                })
            };
            this._beforeSend(a, h);
            return this.options.sequentialUploads || this.options.limitConcurrentUploads && this.options.limitConcurrentUploads <= this._sending ? (1 < this.options.limitConcurrentUploads ?
                    (g = d.Deferred(), this._slots.push(g), k = g.pipe(l)) : k = this._sequence = this._sequence.pipe(l, l), k.abort = function() {
                f = [void 0, "abort", "abort"];
                return e ? e.abort() : (g && g.rejectWith(h.context, f), l())
            }, this._enhancePromise(k)) : l()
        }, _onAdd: function(a, b) {
            var c = this, e = !0, f = d.extend({}, this.options, b), g = f.limitMultiFileUploads, k = this._getParamName(f), h, l, m;
            if ((f.singleFileUploads || g) && this._isXHRUpload(f))
                if (!f.singleFileUploads && g)
                    for (l = [], h = [], m = 0; m < b.files.length; m += g)
                        l.push(b.files.slice(m, m + g)), f = k.slice(m,
                                m + g), f.length || (f = k), h.push(f);
                else
                    h = k;
            else
                l = [b.files], h = [k];
            b.originalFiles = b.files;
            d.each(l || b.files, function(f, g) {
                var k = d.extend({}, b);
                k.files = l ? g : [g];
                k.paramName = h[f];
                c._initResponseObject(k);
                c._initProgressObject(k);
                c._addConvenienceMethods(a, k);
                return e = c._trigger("add", a, k)
            });
            return e
        }, _replaceFileInput: function(a) {
            var b = a.clone(!0);
            d("<form></form>").append(b)[0].reset();
            a.after(b).detach();
            d.cleanData(a.unbind("remove"));
            this.options.fileInput = this.options.fileInput.map(function(c, e) {
                return e ===
                        a[0] ? b[0] : e
            });
            a[0] === this.element[0] && (this.element = b)
        }, _handleFileTreeEntry: function(a, b) {
            var c = this, e = d.Deferred(), f = function(b) {
                b && !b.entry && (b.entry = a);
                e.resolve([b])
            }, g;
            b = b || "";
            a.isFile ? a._file ? (a._file.relativePath = b, e.resolve(a._file)) : a.file(function(a) {
                a.relativePath = b;
                e.resolve(a)
            }, f) : a.isDirectory ? (g = a.createReader(), g.readEntries(function(d) {
                c._handleFileTreeEntries(d, b + a.name + "/").done(function(a) {
                    e.resolve(a)
                }).fail(f)
            }, f)) : e.resolve([]);
            return e.promise()
        }, _handleFileTreeEntries: function(a,
                b) {
            var c = this;
            return d.when.apply(d, d.map(a, function(a) {
                return c._handleFileTreeEntry(a, b)
            })).pipe(function() {
                return Array.prototype.concat.apply([], arguments)
            })
        }, _getDroppedFiles: function(a) {
            a = a || {};
            var b = a.items;
            return b && b.length && (b[0].webkitGetAsEntry || b[0].getAsEntry) ? this._handleFileTreeEntries(d.map(b, function(a) {
                var b;
                if (a.webkitGetAsEntry) {
                    if (b = a.webkitGetAsEntry())
                        b._file = a.getAsFile();
                    return b
                }
                return a.getAsEntry()
            })) : d.Deferred().resolve(d.makeArray(a.files)).promise()
        }, _getSingleFileInputFiles: function(a) {
            a =
                    d(a);
            var b = a.prop("webkitEntries") || a.prop("entries");
            if (b && b.length)
                return this._handleFileTreeEntries(b);
            b = d.makeArray(a.prop("files"));
            if (b.length)
                void 0 === b[0].name && b[0].fileName && d.each(b, function(a, b) {
                    b.name = b.fileName;
                    b.size = b.fileSize
                });
            else {
                a = a.prop("value");
                if (!a)
                    return d.Deferred().resolve([]).promise();
                b = [{name: a.replace(/^.*\\/, "")}]
            }
            return d.Deferred().resolve(b).promise()
        }, _getFileInputFiles: function(a) {
            return a instanceof d && 1 !== a.length ? d.when.apply(d, d.map(a, this._getSingleFileInputFiles)).pipe(function() {
                return Array.prototype.concat.apply([],
                        arguments)
            }) : this._getSingleFileInputFiles(a)
        }, _onChange: function(a) {
            var b = this, c = {fileInput: d(a.target), form: d(a.target.form)};
            this._getFileInputFiles(c.fileInput).always(function(d) {
                c.files = d;
                b.options.replaceFileInput && b._replaceFileInput(c.fileInput);
                !1 !== b._trigger("change", a, c) && b._onAdd(a, c)
            })
        }, _onPaste: function(a) {
            var b = a.originalEvent && a.originalEvent.clipboardData && a.originalEvent.clipboardData.items, c = {files: []};
            b && b.length && (d.each(b, function(a, b) {
                var d = b.getAsFile && b.getAsFile();
                d && c.files.push(d)
            }),
                    !1 !== this._trigger("paste", a, c) && this._onAdd(a, c))
        }, _onDrop: function(a) {
            a.dataTransfer = a.originalEvent && a.originalEvent.dataTransfer;
            var b = this, c = a.dataTransfer, d = {};
            c && c.files && c.files.length && (a.preventDefault(), this._getDroppedFiles(c).always(function(c) {
                d.files = c;
                !1 !== b._trigger("drop", a, d) && b._onAdd(a, d)
            }))
        }, _onDragOver: function(a) {
            a.dataTransfer = a.originalEvent && a.originalEvent.dataTransfer;
            var b = a.dataTransfer, c = {dropEffect: "copy", preventDefault: !0};
            b && -1 !== d.inArray("Files", b.types) && !1 !==
                    this._trigger("dragover", a, c) && (b.dropEffect = c.dropEffect, c.preventDefault && a.preventDefault())
        }, _initEventHandlers: function() {
            this._isXHRUpload(this.options) && (this._on(this.options.dropZone, {dragover: this._onDragOver, drop: this._onDrop}), this._on(this.options.pasteZone, {paste: this._onPaste}));
            d.support.fileInput && this._on(this.options.fileInput, {change: this._onChange})
        }, _destroyEventHandlers: function() {
            this._off(this.options.dropZone, "dragover drop");
            this._off(this.options.pasteZone, "paste");
            this._off(this.options.fileInput,
                    "change")
        }, _setOption: function(a, b) {
            var c = -1 !== d.inArray(a, this._specialOptions);
            c && this._destroyEventHandlers();
            this._super(a, b);
            c && (this._initSpecialOptions(), this._initEventHandlers())
        }, _initSpecialOptions: function() {
            var a = this.options;
            void 0 === a.fileInput ? a.fileInput = this.element.is('input[type="file"]') ? this.element : this.element.find('input[type="file"]') : a.fileInput instanceof d || (a.fileInput = d(a.fileInput));
            a.dropZone instanceof d || (a.dropZone = d(a.dropZone));
            a.pasteZone instanceof d || (a.pasteZone =
                    d(a.pasteZone))
        }, _getRegExp: function(a) {
            a = a.split("/");
            var b = a.pop();
            a.shift();
            return RegExp(a.join("/"), b)
        }, _isRegExpOption: function(a, b) {
            return"url" !== a && "string" === d.type(b) && /^\/.*\/[igm]{0,3}$/.test(b)
        }, _initDataAttributes: function() {
            var a = this, b = this.options;
            d.each(d(this.element[0].cloneNode(!1)).data(), function(c, d) {
                a._isRegExpOption(c, d) && (d = a._getRegExp(d));
                b[c] = d
            })
        }, _create: function() {
            this._initDataAttributes();
            this._initSpecialOptions();
            this._slots = [];
            this._sequence = this._getXHRPromise(!0);
            this._sending = this._active = 0;
            this._initProgressObject(this);
            this._initEventHandlers()
        }, active: function() {
            return this._active
        }, progress: function() {
            return this._progress
        }, add: function(a) {
            var b = this;
            a && !this.options.disabled && (a.fileInput && !a.files ? this._getFileInputFiles(a.fileInput).always(function(c) {
                a.files = c;
                b._onAdd(null, a)
            }) : (a.files = d.makeArray(a.files), this._onAdd(null, a)))
        }, send: function(a) {
            if (a && !this.options.disabled) {
                if (a.fileInput && !a.files) {
                    var b = this, c = d.Deferred(), e = c.promise(), f, g;
                    e.abort = function() {
                        g = !0;
                        if (f)
                            return f.abort();
                        c.reject(null, "abort", "abort");
                        return e
                    };
                    this._getFileInputFiles(a.fileInput).always(function(d) {
                        g || (d.length ? (a.files = d, f = b._onSend(null, a).then(function(a, b, d) {
                            c.resolve(a, b, d)
                        }, function(a, b, d) {
                            c.reject(a, b, d)
                        })) : c.reject())
                    });
                    return this._enhancePromise(e)
                }
                a.files = d.makeArray(a.files);
                if (a.files.length)
                    return this._onSend(null, a)
            }
            return this._getXHRPromise(!1, a && a.context)
        }})
});

//* jquery.fileupload-process.js
(function(c) {
    "function" === typeof define && define.amd ? define(["jquery", "./jquery.fileupload"], c) : c(window.jQuery)
})(function(c) {
    var h = c.blueimp.fileupload.prototype.options.add;
    c.widget("blueimp.fileupload", c.blueimp.fileupload, {options: {processQueue: [], add: function(b, a) {
                var d = c(this);
                a.process(function() {
                    return d.fileupload("process", a)
                });
                h.call(this, b, a)
            }}, processActions: {}, _processFile: function(b) {
            var a = this, d = c.Deferred().resolveWith(a, [b]).promise();
            this._trigger("process", null, b);
            c.each(b.processQueue,
                    function(c, b) {
                        var g = function(c) {
                            return a.processActions[b.action].call(a, c, b)
                        };
                        d = d.pipe(g, b.always && g)
                    });
            d.done(function() {
                a._trigger("processdone", null, b);
                a._trigger("processalways", null, b)
            }).fail(function() {
                a._trigger("processfail", null, b);
                a._trigger("processalways", null, b)
            });
            return d
        }, _transformProcessQueue: function(b) {
            var a = [];
            c.each(b.processQueue, function() {
                var d = {}, e = this.action, f = !0 === this.prefix ? e : this.prefix;
                c.each(this, function(a, e) {
                    "string" === c.type(e) && "@" === e.charAt(0) ? d[a] = b[e.slice(1) ||
                            (f ? f + a.charAt(0).toUpperCase() + a.slice(1) : a)] : d[a] = e
                });
                a.push(d)
            });
            b.processQueue = a
        }, processing: function() {
            return this._processing
        }, process: function(b) {
            var a = this, d = c.extend({}, this.options, b);
            d.processQueue && d.processQueue.length && (this._transformProcessQueue(d), 0 === this._processing && this._trigger("processstart"), c.each(b.files, function(b) {
                var f = b ? c.extend({}, d) : d, g = function() {
                    return a._processFile(f)
                };
                f.index = b;
                a._processing += 1;
                a._processingQueue = a._processingQueue.pipe(g, g).always(function() {
                    a._processing -=
                            1;
                    0 === a._processing && a._trigger("processstop")
                })
            }));
            return this._processingQueue
        }, _create: function() {
            this._super();
            this._processing = 0;
            this._processingQueue = c.Deferred().resolveWith(this).promise()
        }})
});

//* jquery.fileupload-image.js
(function(e) {
    "function" === typeof define && define.amd ? define("jquery load-image load-image-meta load-image-exif load-image-ios canvas-to-blob ./jquery.fileupload-process".split(" "), e) : e(window.jQuery, window.loadImage)
})(function(e, k) {
    e.blueimp.fileupload.prototype.options.processQueue.unshift({action: "loadImageMetaData", disableImageHead: "@", disableExif: "@", disableExifThumbnail: "@", disableExifSub: "@", disableExifGps: "@", disabled: "@disableImageMetaDataLoad"}, {action: "loadImage", prefix: !0, fileTypes: "@",
        maxFileSize: "@", noRevoke: "@", disabled: "@disableImageLoad"}, {action: "resizeImage", prefix: "image", maxWidth: "@", maxHeight: "@", minWidth: "@", minHeight: "@", crop: "@", disabled: "@disableImageResize"}, {action: "saveImage", disabled: "@disableImageResize"}, {action: "saveImageMetaData", disabled: "@disableImageMetaDataSave"}, {action: "resizeImage", prefix: "preview", maxWidth: "@", maxHeight: "@", minWidth: "@", minHeight: "@", crop: "@", orientation: "@", thumbnail: "@", canvas: "@", disabled: "@disableImagePreview"}, {action: "setImage",
        name: "@imagePreviewName", disabled: "@disableImagePreview"});
    e.widget("blueimp.fileupload", e.blueimp.fileupload, {options: {loadImageFileTypes: /^image\/(gif|jpeg|png)$/, loadImageMaxFileSize: 1E7, imageMaxWidth: 1920, imageMaxHeight: 1080, imageCrop: !1, disableImageResize: !0, previewMaxWidth: 80, previewMaxHeight: 80, previewOrientation: !0, previewThumbnail: !0, previewCrop: !1, previewCanvas: !0}, processActions: {loadImage: function(a, b) {
                if (b.disabled)
                    return a;
                var d = this, c = a.files[a.index], f = e.Deferred();
                return"number" ===
                        e.type(b.maxFileSize) && c.size > b.maxFileSize || b.fileTypes && !b.fileTypes.test(c.type) || !k(c, function(b) {
                    b.src && (a.img = b);
                    f.resolveWith(d, [a])
                }, b) ? a : f.promise()
            }, resizeImage: function(a, b) {
                if (b.disabled)
                    return a;
                var d = this, c = e.Deferred(), f = function(b) {
                    a[b.getContext ? "canvas" : "img"] = b;
                    c.resolveWith(d, [a])
                }, g, h;
                b = e.extend({canvas: !0}, b);
                if (a.exif && (!0 === b.orientation && (b.orientation = a.exif.get("Orientation")), b.thumbnail && (g = a.exif.get("Thumbnail"))))
                    return k(g, f, b), c.promise();
                if (g = b.canvas && a.canvas ||
                        a.img)
                    if (h = k.scale(g, b), h.width !== g.width || h.height !== g.height)
                        return f(h), c.promise();
                return a
            }, saveImage: function(a, b) {
                if (!a.canvas || b.disabled)
                    return a;
                var d = this, c = a.files[a.index], f = c.name, g = e.Deferred(), h = function(b) {
                    b.name || (c.type === b.type ? b.name = c.name : c.name && (b.name = c.name.replace(/\..+$/, "." + b.type.substr(6))));
                    a.files[a.index] = b;
                    g.resolveWith(d, [a])
                };
                if (a.canvas.mozGetAsFile)
                    h(a.canvas.mozGetAsFile(/^image\/(jpeg|png)$/.test(c.type) && f || (f && f.replace(/\..+$/, "") || "blob") + ".png", c.type));
                else if (a.canvas.toBlob)
                    a.canvas.toBlob(h, c.type);
                else
                    return a;
                return g.promise()
            }, loadImageMetaData: function(a, b) {
                if (b.disabled)
                    return a;
                var d = this, c = e.Deferred();
                k.parseMetaData(a.files[a.index], function(b) {
                    e.extend(a, b);
                    c.resolveWith(d, [a])
                }, b);
                return c.promise()
            }, saveImageMetaData: function(a, b) {
                if (!a.imageHead || !a.canvas || !a.canvas.toBlob || b.disabled)
                    return a;
                var d = a.files[a.index], c = new Blob([a.imageHead, this._blobSlice.call(d, 20)], {type: d.type});
                c.name = d.name;
                a.files[a.index] = c;
                return a
            }, setImage: function(a,
                    b) {
                var d = a.canvas || a.img;
                d && !b.disabled && (a.files[a.index][b.name || "preview"] = d);
                return a
            }}})
});

//* jquery.fileupload-audio.js
(function(c) {
    "function" === typeof define && define.amd ? define(["jquery", "load-image", "./jquery.fileupload-process"], c) : c(window.jQuery, window.loadImage)
})(function(c, f) {
    c.blueimp.fileupload.prototype.options.processQueue.unshift({action: "loadAudio", prefix: !0, fileTypes: "@", maxFileSize: "@", disabled: "@disableAudioPreview"}, {action: "setAudio", name: "@audioPreviewName", disabled: "@disableAudioPreview"});
    c.widget("blueimp.fileupload", c.blueimp.fileupload, {options: {loadAudioFileTypes: /^audio\/.*$/}, _audioElement: document.createElement("audio"),
        processActions: {loadAudio: function(a, b) {
                if (b.disabled)
                    return a;
                var d = a.files[a.index], e;
                this._audioElement.canPlayType && (this._audioElement.canPlayType(d.type) && ("number" !== c.type(b.maxFileSize) || d.size <= b.maxFileSize) && (!b.fileTypes || b.fileTypes.test(d.type))) && (d = f.createObjectURL(d)) && (e = this._audioElement.cloneNode(!1), e.src = d, e.controls = !0, a.audio = e);
                return a
            }, setAudio: function(a, b) {
                a.audio && !b.disabled && (a.files[a.index][b.name || "preview"] = a.audio);
                return a
            }}})
});

//* jquery.fileupload-video.js
(function(c) {
    "function" === typeof define && define.amd ? define(["jquery", "load-image", "./jquery.fileupload-process"], c) : c(window.jQuery, window.loadImage)
})(function(c, f) {
    c.blueimp.fileupload.prototype.options.processQueue.unshift({action: "loadVideo", prefix: !0, fileTypes: "@", maxFileSize: "@", disabled: "@disableVideoPreview"}, {action: "setVideo", name: "@videoPreviewName", disabled: "@disableVideoPreview"});
    c.widget("blueimp.fileupload", c.blueimp.fileupload, {options: {loadVideoFileTypes: /^video\/.*$/}, _videoElement: document.createElement("video"),
        processActions: {loadVideo: function(a, b) {
                if (b.disabled)
                    return a;
                var d = a.files[a.index], e;
                this._videoElement.canPlayType && (this._videoElement.canPlayType(d.type) && ("number" !== c.type(b.maxFileSize) || d.size <= b.maxFileSize) && (!b.fileTypes || b.fileTypes.test(d.type))) && (d = f.createObjectURL(d)) && (e = this._videoElement.cloneNode(!1), e.src = d, e.controls = !0, a.video = e);
                return a
            }, setVideo: function(a, b) {
                a.video && !b.disabled && (a.files[a.index][b.name || "preview"] = a.video);
                return a
            }}})
});

//* jquery.fileupload-validate.js
(function(b) {
    "function" === typeof define && define.amd ? define(["jquery", "./jquery.fileupload-process"], b) : b(window.jQuery)
})(function(b) {
    b.blueimp.fileupload.prototype.options.processQueue.push({action: "validate", always: !0, acceptFileTypes: "@", maxFileSize: "@", minFileSize: "@", maxNumberOfFiles: "@", disabled: "@disableValidation"});
    b.widget("blueimp.fileupload", b.blueimp.fileupload, {options: {getNumberOfFiles: b.noop, messages: {maxNumberOfFiles: "Maximum number of files exceeded", acceptFileTypes: "File type not allowed",
                maxFileSize: "File is too large", minFileSize: "File is too small"}}, processActions: {validate: function(d, c) {
                if (c.disabled)
                    return d;
                var f = b.Deferred(), e = this.options, a = d.files[d.index];
                "number" === b.type(c.maxNumberOfFiles) && (e.getNumberOfFiles() || 0) + d.files.length > c.maxNumberOfFiles ? a.error = e.i18n("maxNumberOfFiles") : !c.acceptFileTypes || c.acceptFileTypes.test(a.type) || c.acceptFileTypes.test(a.name) ? c.maxFileSize && a.size > c.maxFileSize ? a.error = e.i18n("maxFileSize") : "number" === b.type(a.size) && a.size < c.minFileSize ?
                        a.error = e.i18n("minFileSize") : delete a.error : a.error = e.i18n("acceptFileTypes");
                a.error || d.files.error ? (d.files.error = !0, f.rejectWith(this, [d])) : f.resolveWith(this, [d]);
                return f.promise()
            }}})
});

//* jquery.fileupload-ui.js
(function(d) {
    "function" === typeof define && define.amd ? define("jquery tmpl ./jquery.fileupload-image ./jquery.fileupload-audio ./jquery.fileupload-video ./jquery.fileupload-validate".split(" "), d) : d(window.jQuery, window.tmpl)
})(function(d, h, l) {
    d.blueimp.fileupload.prototype._specialOptions.push("filesContainer", "uploadTemplateId", "downloadTemplateId");
    d.widget("blueimp.fileupload", d.blueimp.fileupload, {options: {autoUpload: !1, uploadTemplateId: "template-upload", downloadTemplateId: "template-download", filesContainer: void 0,
            prependFiles: !1, dataType: "json", getNumberOfFiles: function() {
                return this.filesContainer.children().length
            }, getFilesFromResponse: function(a) {
                return a.result && d.isArray(a.result.files) ? a.result.files : []
            }, add: function(a, b) {
                var c = d(this), e = c.data("blueimp-fileupload") || c.data("fileupload"), f = e.options, g = b.files;
                b.process(function() {
                    return c.fileupload("process", b)
                }).always(function() {
                    b.context = e._renderUpload(g).data("data", b);
                    e._renderPreviews(b);
                    f.filesContainer[f.prependFiles ? "prepend" : "append"](b.context);
                    e._forceReflow(b.context);
                    e._transition(b.context).done(function() {
                        !1 === e._trigger("added", a, b) || !f.autoUpload && !b.autoUpload || !1 === b.autoUpload || b.files.error || b.submit()
                    })
                })
            }, send: function(a, b) {
                var c = d(this).data("blueimp-fileupload") || d(this).data("fileupload");
                b.context && b.dataType && "iframe" === b.dataType.substr(0, 6) && b.context.find(".progress").addClass(!d.support.transition && "progress-animated").attr("aria-valuenow", 100).children().first().css("width", "100%");
                return c._trigger("sent", a, b)
            }, done: function(a,
                    b) {
                var c = d(this).data("blueimp-fileupload") || d(this).data("fileupload"), e = (b.getFilesFromResponse || c.options.getFilesFromResponse)(b), f, g;
                b.context ? b.context.each(function(k) {
                    var h = e[k] || {error: "Empty file upload result"};
                    g = c._addFinishedDeferreds();
                    c._transition(d(this)).done(function() {
                        var e = d(this);
                        f = c._renderDownload([h]).replaceAll(e);
                        c._forceReflow(f);
                        c._transition(f).done(function() {
                            b.context = d(this);
                            c._trigger("completed", a, b);
                            c._trigger("finished", a, b);
                            g.resolve()
                        })
                    })
                }) : (f = c._renderDownload(e)[c.options.prependFiles ?
                        "prependTo" : "appendTo"](c.options.filesContainer), c._forceReflow(f), g = c._addFinishedDeferreds(), c._transition(f).done(function() {
                    b.context = d(this);
                    c._trigger("completed", a, b);
                    c._trigger("finished", a, b);
                    g.resolve()
                }))
            }, fail: function(a, b) {
                var c = d(this).data("blueimp-fileupload") || d(this).data("fileupload"), e, f;
                b.context ? b.context.each(function(g) {
                    if ("abort" !== b.errorThrown) {
                        var h = b.files[g];
                        h.error = h.error || b.errorThrown || !0;
                        f = c._addFinishedDeferreds();
                        c._transition(d(this)).done(function() {
                            var g = d(this);
                            e = c._renderDownload([h]).replaceAll(g);
                            c._forceReflow(e);
                            c._transition(e).done(function() {
                                b.context = d(this);
                                c._trigger("failed", a, b);
                                c._trigger("finished", a, b);
                                f.resolve()
                            })
                        })
                    } else
                        f = c._addFinishedDeferreds(), c._transition(d(this)).done(function() {
                            d(this).remove();
                            c._trigger("failed", a, b);
                            c._trigger("finished", a, b);
                            f.resolve()
                        })
                }) : "abort" !== b.errorThrown ? (b.context = c._renderUpload(b.files)[c.options.prependFiles ? "prependTo" : "appendTo"](c.options.filesContainer).data("data", b), c._forceReflow(b.context),
                        f = c._addFinishedDeferreds(), c._transition(b.context).done(function() {
                    b.context = d(this);
                    c._trigger("failed", a, b);
                    c._trigger("finished", a, b);
                    f.resolve()
                })) : (c._trigger("failed", a, b), c._trigger("finished", a, b), c._addFinishedDeferreds().resolve())
            }, progress: function(a, b) {
                var c = Math.floor(100 * (b.loaded / b.total));
                b.context && b.context.each(function() {
                    d(this).find(".progress").attr("aria-valuenow", c).children().first().css("width", c + "%")
                })
            }, progressall: function(a, b) {
                var c = d(this), e = Math.floor(100 * (b.loaded /
                        b.total)), f = c.find(".fileupload-progress"), g = f.find(".progress-extended");
                g.length && g.html((c.data("blueimp-fileupload") || c.data("fileupload"))._renderExtendedProgress(b));
                f.find(".progress").attr("aria-valuenow", e).children().first().css("width", e + "%")
            }, start: function(a) {
                var b = d(this).data("blueimp-fileupload") || d(this).data("fileupload");
                b._resetFinishedDeferreds();
                b._transition(d(this).find(".fileupload-progress")).done(function() {
                    b._trigger("started", a)
                })
            }, stop: function(a) {
                var b = d(this).data("blueimp-fileupload") ||
                        d(this).data("fileupload"), c = b._addFinishedDeferreds();
                d.when.apply(d, b._getFinishedDeferreds()).done(function() {
                    b._trigger("stopped", a)
                });
                b._transition(d(this).find(".fileupload-progress")).done(function() {
                    d(this).find(".progress").attr("aria-valuenow", "0").children().first().css("width", "0%");
                    d(this).find(".progress-extended").html("&nbsp;");
                    c.resolve()
                })
            }, processstart: function() {
                d(this).addClass("fileupload-processing")
            }, processstop: function() {
                d(this).removeClass("fileupload-processing")
            }, destroy: function(a,
                    b) {
                var c = d(this).data("blueimp-fileupload") || d(this).data("fileupload"), e = function() {
                    c._transition(b.context).done(function() {
                        d(this).remove();
                        c._trigger("destroyed", a, b)
                    })
                };
                b.url ? d.ajax(b).done(e) : e()
            }}, _resetFinishedDeferreds: function() {
            this._finishedUploads = []
        }, _addFinishedDeferreds: function(a) {
            a || (a = d.Deferred());
            this._finishedUploads.push(a);
            return a
        }, _getFinishedDeferreds: function() {
            return this._finishedUploads
        }, _enableDragToDesktop: function() {
            var a = d(this), b = a.prop("href"), c = a.prop("download");
            a.bind("dragstart", function(a) {
                try {
                    a.originalEvent.dataTransfer.setData("DownloadURL", ["application/octet-stream", c, b].join(":"))
                } catch (d) {
                }
            })
        }, _formatFileSize: function(a) {
            return"number" !== typeof a ? "" : 1E9 <= a ? (a / 1E9).toFixed(2) + " GB" : 1E6 <= a ? (a / 1E6).toFixed(2) + " MB" : (a / 1E3).toFixed(2) + " KB"
        }, _formatBitrate: function(a) {
            return"number" !== typeof a ? "" : 1E9 <= a ? (a / 1E9).toFixed(2) + " Gbit/s" : 1E6 <= a ? (a / 1E6).toFixed(2) + " Mbit/s" : 1E3 <= a ? (a / 1E3).toFixed(2) + " kbit/s" : a.toFixed(2) + " bit/s"
        }, _formatTime: function(a) {
            var b =
                    new Date(1E3 * a);
            a = Math.floor(a / 86400);
            return(a ? a + "d " : "") + ("0" + b.getUTCHours()).slice(-2) + ":" + ("0" + b.getUTCMinutes()).slice(-2) + ":" + ("0" + b.getUTCSeconds()).slice(-2)
        }, _formatPercentage: function(a) {
            return(100 * a).toFixed(2) + " %"
        }, _renderExtendedProgress: function(a) {
            return this._formatBitrate(a.bitrate) + " | " + this._formatTime(8 * (a.total - a.loaded) / a.bitrate) + " | " + this._formatPercentage(a.loaded / a.total) + " | " + this._formatFileSize(a.loaded) + " / " + this._formatFileSize(a.total)
        }, _renderTemplate: function(a,
                b) {
            if (!a)
                return d();
            var c = a({files: b, formatFileSize: this._formatFileSize, options: this.options});
            return c instanceof d ? c : d(this.options.templatesContainer).html(c).children()
        }, _renderPreviews: function(a) {
            a.context.find(".preview").each(function(b, c) {
                d(c).append(a.files[b].preview)
            })
        }, _renderUpload: function(a) {
            return this._renderTemplate(this.options.uploadTemplate, a)
        }, _renderDownload: function(a) {
            return this._renderTemplate(this.options.downloadTemplate, a).find("a[download]").each(this._enableDragToDesktop).end()
        },
        _startHandler: function(a) {
            a.preventDefault();
            a = d(a.currentTarget);
            var b = a.closest(".template-upload").data("data");
            b && b.submit && !b.jqXHR && b.submit() && a.prop("disabled", !0)
        }, _cancelHandler: function(a) {
            a.preventDefault();
            var b = d(a.currentTarget).closest(".template-upload,.template-download"), c = b.data("data") || {};
            c.jqXHR ? c.jqXHR.abort() : (c.context = c.context || b, c.errorThrown = "abort", this._trigger("fail", a, c))
        }, _deleteHandler: function(a) {
            a.preventDefault();
            var b = d(a.currentTarget);
            this._trigger("destroy",
                    a, d.extend({context: b.closest(".template-download"), type: "DELETE"}, b.data()))
        }, _forceReflow: function(a) {
            return d.support.transition && a.length && a[0].offsetWidth
        }, _transition: function(a) {
            var b = d.Deferred();
            d.support.transition && a.hasClass("fade") && a.is(":visible") ? a.bind(d.support.transition.end, function(c) {
                c.target === a[0] && (a.unbind(d.support.transition.end), b.resolveWith(a))
            }).toggleClass("in") : (a.toggleClass("in"), b.resolveWith(a));
            return b
        }, _initButtonBarEventHandlers: function() {
            var a = this.element.find(".fileupload-buttonbar"),
                    b = this.options.filesContainer;
            this._on(a.find(".start"), {click: function(a) {
                    a.preventDefault();
                    b.find(".start").click()
                }});
            this._on(a.find(".cancel"), {click: function(a) {
                    a.preventDefault();
                    b.find(".cancel").click()
                }});
            this._on(a.find(".delete"), {click: function(c) {
                    c.preventDefault();
                    b.find(".toggle:checked").closest(".template-download").find(".delete").click();
                    a.find(".toggle").prop("checked", !1)
                }});
            this._on(a.find(".toggle"), {change: function(a) {
                    b.find(".toggle").prop("checked", d(a.currentTarget).is(":checked"))
                }})
        },
        _destroyButtonBarEventHandlers: function() {
            this._off(this.element.find(".fileupload-buttonbar").find(".start, .cancel, .delete"), "click");
            this._off(this.element.find(".fileupload-buttonbar .toggle"), "change.")
        }, _initEventHandlers: function() {
            this._super();
            this._on(this.options.filesContainer, {"click .start": this._startHandler, "click .cancel": this._cancelHandler, "click .delete": this._deleteHandler});
            this._initButtonBarEventHandlers()
        }, _destroyEventHandlers: function() {
            this._destroyButtonBarEventHandlers();
            this._off(this.options.filesContainer, "click");
            this._super()
        }, _enableFileInputButton: function() {
            this.element.find(".fileinput-button input").prop("disabled", !1).parent().removeClass("disabled")
        }, _disableFileInputButton: function() {
            this.element.find(".fileinput-button input").prop("disabled", !0).parent().addClass("disabled")
        }, _initTemplates: function() {
            var a = this.options;
            a.templatesContainer = this.document[0].createElement(a.filesContainer.prop("nodeName"));
            h && (a.uploadTemplateId && (a.uploadTemplate = h(a.uploadTemplateId)),
                    a.downloadTemplateId && (a.downloadTemplate = h(a.downloadTemplateId)))
        }, _initFilesContainer: function() {
            var a = this.options;
            void 0 === a.filesContainer ? a.filesContainer = this.element.find(".files") : a.filesContainer instanceof d || (a.filesContainer = d(a.filesContainer))
        }, _initSpecialOptions: function() {
            this._super();
            this._initFilesContainer();
            this._initTemplates()
        }, _create: function() {
            this._super();
            this._resetFinishedDeferreds();
            d.support.fileInput || this._disableFileInputButton()
        }, enable: function() {
            var a = !1;
            this.options.disabled &&
                    (a = !0);
            this._super();
            a && (this.element.find("input, button").prop("disabled", !1), this._enableFileInputButton())
        }, disable: function() {
            this.options.disabled || (this.element.find("input, button").prop("disabled", !0), this._disableFileInputButton());
            this._super()
        }})
});