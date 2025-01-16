!function(e){"use strict";var t=e.URL||e.webkitURL;function i(e){return!!t&&t.createObjectURL(e)}function a(e){return!!t&&t.revokeObjectURL(e)}function n(e,t){!e||"blob:"!==e.slice(0,5)||t&&t.noRevoke||a(e)}function o(t,i,a,n){if(!e.FileReader)return!1;var o=new FileReader;return o.onload=function(){i.call(o,this.result)},a&&(o.onabort=o.onerror=function(){a.call(o,this.error)}),(n=o[n||"readAsDataURL"])?(n.call(o,t),o):void 0}function r(e,t){return Object.prototype.toString.call(t)==="[object "+e+"]"}function s(t,a,l){function c(a,c){var f,u=document.createElement("img");function d(e,t){a!==c?e instanceof Error?c(e):((t=t||{}).image=e,a(t)):a&&a(e,t)}function g(a,n){n&&e.console&&console.log(n),a&&r("Blob",a)?f=i(t=a):(f=t,l&&l.crossOrigin&&(u.crossOrigin=l.crossOrigin)),u.src=f}return u.onerror=function(e){n(f,l),c&&c.call(u,e)},u.onload=function(){n(f,l);var e={originalWidth:u.naturalWidth||u.width,originalHeight:u.naturalHeight||u.height};try{s.transform(u,l,d,t,e)}catch(e){c&&c(e)}},"string"==typeof t?(s.requiresMetaData(l)?s.fetchBlob(t,g,l):g(),u):r("Blob",t)||r("File",t)?(f=i(t))?(u.src=f,u):o(t,(function(e){u.src=e}),c):void 0}return e.Promise&&"function"!=typeof a?(l=a,new Promise(c)):c(a,a)}s.requiresMetaData=function(e){return e&&e.meta},s.fetchBlob=function(e,t){t()},s.transform=function(e,t,i,a,n){i(e,n)},s.global=e,s.readFile=o,s.isInstanceOf=r,s.createObjectURL=i,s.revokeObjectURL=a,"function"==typeof define&&define.amd?define((function(){return s})):"object"==typeof module&&module.exports?module.exports=s:e.loadImage=s}("undefined"!=typeof window&&window||this),function(e){"use strict";"function"==typeof define&&define.amd?define(["./load-image"],e):"object"==typeof module&&module.exports?e(require("./load-image")):e(window.loadImage)}((function(e){"use strict";var t=e.transform;e.createCanvas=function(t,i,a){return a&&e.global.OffscreenCanvas?new OffscreenCanvas(t,i):((a=document.createElement("canvas")).width=t,a.height=i,a)},e.transform=function(i,a,n,o,r){t.call(e,e.scale(i,a,r),a,n,o,r)},e.transformCoordinates=function(){},e.getTransformedOptions=function(e,t){var i,a,n,o=t.aspectRatio;if(!o)return t;for(a in i={},t)Object.prototype.hasOwnProperty.call(t,a)&&(i[a]=t[a]);return i.crop=!0,o<(n=e.naturalWidth||e.width)/(e=e.naturalHeight||e.height)?(i.maxWidth=e*o,i.maxHeight=e):(i.maxWidth=n,i.maxHeight=n/o),i},e.drawImage=function(e,t,i,a,n,o,r,s,l){return t=t.getContext("2d"),!1===l.imageSmoothingEnabled?(t.msImageSmoothingEnabled=!1,t.imageSmoothingEnabled=!1):l.imageSmoothingQuality&&(t.imageSmoothingQuality=l.imageSmoothingQuality),t.drawImage(e,i,a,n,o,0,0,r,s),t},e.requiresCanvas=function(e){return e.canvas||e.crop||!!e.aspectRatio},e.scale=function(t,i,a){i=i||{},a=a||{};var n,o,r,s,l,c,f,u,d,g,m,h=t.getContext||e.requiresCanvas(i)&&!!e.global.HTMLCanvasElement,p=t.naturalWidth||t.width,A=t.naturalHeight||t.height,b=p,y=A;function S(){var e=Math.max((r||b)/b,(s||y)/y);1<e&&(b*=e,y*=e)}function v(){var e=Math.min((n||b)/b,(o||y)/y);e<1&&(b*=e,y*=e)}if(h&&(f=(i=e.getTransformedOptions(t,i,a)).left||0,u=i.top||0,i.sourceWidth?(l=i.sourceWidth,void 0!==i.right&&void 0===i.left&&(f=p-l-i.right)):l=p-f-(i.right||0),i.sourceHeight?(c=i.sourceHeight,void 0!==i.bottom&&void 0===i.top&&(u=A-c-i.bottom)):c=A-u-(i.bottom||0),b=l,y=c),n=i.maxWidth,o=i.maxHeight,r=i.minWidth,s=i.minHeight,h&&n&&o&&i.crop?(g=l/c-(b=n)/(y=o))<0?(c=o*l/n,void 0===i.top&&void 0===i.bottom&&(u=(A-c)/2)):0<g&&(l=n*c/o,void 0===i.left&&void 0===i.right&&(f=(p-l)/2)):((i.contain||i.cover)&&(r=n=n||r,s=o=o||s),i.cover?(v(),S()):(S(),v())),h){if(1<(h=i.pixelRatio)&&(!t.style.width||Math.floor(parseFloat(t.style.width,10))!==Math.floor(p/h))&&(b*=h,y*=h),e.orientationCropBug&&!t.getContext&&(f||u||l!==p||c!==A)&&(g=t,t=e.createCanvas(p,A,!0),e.drawImage(g,t,0,0,p,A,p,A,i)),0<(d=i.downsamplingRatio)&&d<1&&b<l&&y<c)for(;b<l*d;)m=e.createCanvas(l*d,c*d,!0),e.drawImage(t,m,f,u,l,c,m.width,m.height,i),u=f=0,l=m.width,c=m.height,t=m;return m=e.createCanvas(b,y),e.transformCoordinates(m,i,a),1<h&&(m.style.width=m.width/h+"px"),e.drawImage(t,m,f,u,l,c,b,y,i).setTransform(1,0,0,1,0,0),m}return t.width=b,t.height=y,t}})),function(e){"use strict";"function"==typeof define&&define.amd?define(["./load-image"],e):"object"==typeof module&&module.exports?e(require("./load-image")):e(window.loadImage)}((function(e){"use strict";var t=e.global,i=e.transform,a=t.Blob&&(Blob.prototype.slice||Blob.prototype.webkitSlice||Blob.prototype.mozSlice),n=t.ArrayBuffer&&ArrayBuffer.prototype.slice||function(e,t){return t=t||this.byteLength-e,e=new Uint8Array(this,e,t),(t=new Uint8Array(t)).set(e),t.buffer},o={jpeg:{65505:[],65517:[]}};function r(i,r,s,l){var c=this;function f(r,f){if(!(t.DataView&&a&&i&&12<=i.size&&"image/jpeg"===i.type))return r(l);var u=s.maxMetaDataSize||262144;e.readFile(a.call(i,0,u),(function(e){var t=new DataView(e);if(65496!==t.getUint16(0))return f(new Error("Invalid JPEG file: Missing JPEG marker."));for(var i,a,u,d,g=2,m=t.byteLength-4,h=g;g<m&&(65504<=(i=t.getUint16(g))&&i<=65519||65534===i);){if(g+(a=t.getUint16(g+2)+2)>t.byteLength){console.log("Invalid JPEG metadata: Invalid segment size.");break}if((u=o.jpeg[i])&&!s.disableMetaDataParsers)for(d=0;d<u.length;d+=1)u[d].call(c,t,g,a,l,s);h=g+=a}!s.disableImageHead&&6<h&&(l.imageHead=n.call(e,0,h)),r(l)}),f,"readAsArrayBuffer")||r(l)}return s=s||{},t.Promise&&"function"!=typeof r?(l=s=r||{},new Promise(f)):(l=l||{},f(r,r))}function s(e,t,i){return e&&t&&i?new Blob([i,a.call(e,t.byteLength)],{type:"image/jpeg"}):null}e.transform=function(a,n,o,s,l){e.requiresMetaData(n)?r(s,(function(r){r!==l&&(t.console&&console.log(r),r=l),i.call(e,a,n,o,s,r)}),n,l=l||{}):i.apply(e,arguments)},e.blobSlice=a,e.bufferSlice=n,e.replaceHead=function(e,i,a){var n={maxMetaDataSize:1024,disableMetaDataParsers:!0};if(!a&&t.Promise)return r(e,n).then((function(t){return s(e,t.imageHead,i)}));r(e,(function(t){a(s(e,t.imageHead,i))}),n)},e.parseMetaData=r,e.metaDataParsers=o})),function(e){"use strict";"function"==typeof define&&define.amd?define(["./load-image"],e):"object"==typeof module&&module.exports?e(require("./load-image")):e(window.loadImage)}((function(e){"use strict";var t=e.global;t.fetch&&t.Request&&t.Response&&t.Response.prototype.blob?e.fetchBlob=function(e,i,a){function n(e){return e.blob()}if(t.Promise&&"function"!=typeof i)return fetch(new Request(e,i)).then(n);fetch(new Request(e,a)).then(n).then(i).catch((function(e){i(null,e)}))}:t.XMLHttpRequest&&""===(new XMLHttpRequest).responseType&&(e.fetchBlob=function(e,i,a){function n(t,i){a=a||{};var n=new XMLHttpRequest;n.open(a.method||"GET",e),a.headers&&Object.keys(a.headers).forEach((function(e){n.setRequestHeader(e,a.headers[e])})),n.withCredentials="include"===a.credentials,n.responseType="blob",n.onload=function(){t(n.response)},n.onerror=n.onabort=n.ontimeout=function(e){t===i?i(null,e):i(e)},n.send(a.body)}return t.Promise&&"function"!=typeof i?(a=i,new Promise(n)):n(i,i)})})),function(e){"use strict";"function"==typeof define&&define.amd?define(["./load-image","./load-image-scale","./load-image-meta"],e):"object"==typeof module&&module.exports?e(require("./load-image"),require("./load-image-scale"),require("./load-image-meta")):e(window.loadImage)}((function(e){"use strict";var t,i,a=e.transform,n=e.requiresCanvas,o=e.requiresMetaData,r=e.transformCoordinates,s=e.getTransformedOptions;function l(t,i){return!0===(t=t&&t.orientation)&&!e.orientation||1===t&&e.orientation||(!i||e.orientation)&&1<t&&t<9}function c(e,t){return e!==t&&(1===e&&1<t&&t<9||1<e&&e<9)}function f(e,t){if(1<t&&t<9)switch(e){case 2:case 4:return 4<t;case 5:case 7:return t%2==0;case 6:case 8:return 2===t||4===t||5===t||7===t}}(t=e).global.document&&((i=document.createElement("img")).onload=function(){var e;t.orientation=2===i.width&&3===i.height,t.orientation&&((e=t.createCanvas(1,1,!0).getContext("2d")).drawImage(i,1,1,1,1,0,0,1,1),t.orientationCropBug="255,255,255,255"!==e.getImageData(0,0,1,1).data.toString())},i.src="data:image/jpeg;base64,/9j/4QAiRXhpZgAATU0AKgAAAAgAAQESAAMAAAABAAYAAAAAAAD/2wCEAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAf/AABEIAAIAAwMBEQACEQEDEQH/xABRAAEAAAAAAAAAAAAAAAAAAAAKEAEBAQADAQEAAAAAAAAAAAAGBQQDCAkCBwEBAAAAAAAAAAAAAAAAAAAAABEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8AG8T9NfSMEVMhQvoP3fFiRZ+MTHDifa/95OFSZU5OzRzxkyejv8ciEfhSceSXGjS8eSdLnZc2HDm4M3BxcXwH/9k="),e.requiresCanvas=function(t){return l(t)||n.call(e,t)},e.requiresMetaData=function(t){return l(t,!0)||o.call(e,t)},e.transform=function(t,i,n,o,r){a.call(e,t,i,(function(t,i){var a,o;!i||4<(o=e.orientation&&i.exif&&i.exif.get("Orientation"))&&o<9&&(a=i.originalWidth,o=i.originalHeight,i.originalWidth=o,i.originalHeight=a),n(t,i)}),o,r)},e.getTransformedOptions=function(t,i,a){var n=s.call(e,t,i);t=a.exif&&a.exif.get("Orientation");if(!c(i=!0===(i=n.orientation)?t:i,a=e.orientation&&t))return n;var o,r=n.top,l=n.right,u=n.bottom,d=n.left,g={};for(o in n)Object.prototype.hasOwnProperty.call(n,o)&&(g[o]=n[o]);if((4<(g.orientation=i)&&!(4<a)||i<5&&4<a)&&(g.maxWidth=n.maxHeight,g.maxHeight=n.maxWidth,g.minWidth=n.minHeight,g.minHeight=n.minWidth,g.sourceWidth=n.sourceHeight,g.sourceHeight=n.sourceWidth),1<a){switch(a){case 2:l=n.left,d=n.right;break;case 3:r=n.bottom,l=n.left,u=n.top,d=n.right;break;case 4:r=n.bottom,u=n.top;break;case 5:r=n.left,l=n.bottom,u=n.right,d=n.top;break;case 6:r=n.left,l=n.top,u=n.right,d=n.bottom;break;case 7:r=n.right,l=n.top,u=n.left,d=n.bottom;break;case 8:r=n.right,l=n.bottom,u=n.left,d=n.top}f(i,a)&&(t=r,a=l,r=u,l=d,u=t,d=a)}switch(g.top=r,g.right=l,g.bottom=u,g.left=d,i){case 2:g.right=d,g.left=l;break;case 3:g.top=u,g.right=d,g.bottom=r,g.left=l;break;case 4:g.top=u,g.bottom=r;break;case 5:g.top=d,g.right=u,g.bottom=l,g.left=r;break;case 6:g.top=l,g.right=u,g.bottom=d,g.left=r;break;case 7:g.top=l,g.right=r,g.bottom=d,g.left=u;break;case 8:g.top=d,g.right=r,g.bottom=l,g.left=u}return g},e.transformCoordinates=function(t,i,a){if(r.call(e,t,i,a),c(i=i.orientation,a=e.orientation&&a.exif&&a.exif.get("Orientation"))){var n=t.getContext("2d"),o=t.width,s=t.height,l=o,u=s;switch((4<i&&!(4<a)||i<5&&4<a)&&(t.width=s,t.height=o),4<i&&(l=s,u=o),a){case 2:n.translate(l,0),n.scale(-1,1);break;case 3:n.translate(l,u),n.rotate(Math.PI);break;case 4:n.translate(0,u),n.scale(1,-1);break;case 5:n.rotate(-.5*Math.PI),n.scale(-1,1);break;case 6:n.rotate(-.5*Math.PI),n.translate(-l,0);break;case 7:n.rotate(-.5*Math.PI),n.translate(-l,u),n.scale(1,-1);break;case 8:n.rotate(.5*Math.PI),n.translate(0,-u)}switch(f(i,a)&&(n.translate(l,u),n.rotate(Math.PI)),i){case 2:n.translate(o,0),n.scale(-1,1);break;case 3:n.translate(o,s),n.rotate(Math.PI);break;case 4:n.translate(0,s),n.scale(1,-1);break;case 5:n.rotate(.5*Math.PI),n.scale(1,-1);break;case 6:n.rotate(.5*Math.PI),n.translate(0,-s);break;case 7:n.rotate(.5*Math.PI),n.translate(o,-s),n.scale(-1,1);break;case 8:n.rotate(-.5*Math.PI),n.translate(-o,0)}}}})),function(e){"use strict";"function"==typeof define&&define.amd?define(["./load-image","./load-image-meta"],e):"object"==typeof module&&module.exports?e(require("./load-image"),require("./load-image-meta")):e(window.loadImage)}((function(e){"use strict";function t(e){e&&(Object.defineProperty(this,"map",{value:this.ifds[e].map}),Object.defineProperty(this,"tags",{value:this.tags&&this.tags[e]||{}}))}t.prototype.ifds={ifd1:{name:"Thumbnail",map:t.prototype.map={Orientation:274,Thumbnail:"ifd1",Blob:513,Exif:34665,GPSInfo:34853,Interoperability:40965}},34665:{name:"Exif",map:{}},34853:{name:"GPSInfo",map:{}},40965:{name:"Interoperability",map:{}}},t.prototype.get=function(e){return this[e]||this[this.map[e]]};var i={1:{getValue:function(e,t){return e.getUint8(t)},size:1},2:{getValue:function(e,t){return String.fromCharCode(e.getUint8(t))},size:1,ascii:!0},3:{getValue:function(e,t,i){return e.getUint16(t,i)},size:2},4:{getValue:function(e,t,i){return e.getUint32(t,i)},size:4},5:{getValue:function(e,t,i){return e.getUint32(t,i)/e.getUint32(t+4,i)},size:8},9:{getValue:function(e,t,i){return e.getInt32(t,i)},size:4},10:{getValue:function(e,t,i){return e.getInt32(t,i)/e.getInt32(t+4,i)},size:8}};function a(e,t,i){return(!e||e[i])&&(!t||!0!==t[i])}function n(e,t,n,o,r,s,l,c){var f,u,d,g,m,h;if(n+6>e.byteLength)console.log("Invalid Exif data: Invalid directory offset.");else{if(!((u=n+2+12*(f=e.getUint16(n,o)))+4>e.byteLength)){for(d=0;d<f;d+=1)a(l,c,m=e.getUint16(g=n+2+12*d,o))&&(h=function(e,t,a,n,o,r){var s,l,c,f,u,d=i[n];if(d){if(!((s=4<(n=d.size*o)?t+e.getUint32(a+8,r):a+8)+n>e.byteLength)){if(1===o)return d.getValue(e,s,r);for(l=[],c=0;c<o;c+=1)l[c]=d.getValue(e,s+c*d.size,r);if(d.ascii){for(f="",c=0;c<l.length&&"\0"!==(u=l[c]);c+=1)f+=u;return f}return l}console.log("Invalid Exif data: Invalid data offset.")}else console.log("Invalid Exif data: Invalid tag type.")}(e,t,g,e.getUint16(g+2,o),e.getUint32(g+4,o),o),r[m]=h,s&&(s[m]=g));return e.getUint32(u,o)}console.log("Invalid Exif data: Invalid directory size.")}}i[7]=i[1],e.parseExifData=function(i,o,r,s,l){if(!l.disableExif){var c,f=l.includeExifTags,u=l.excludeExifTags||{34665:{37500:!0}},d=o+10;if(1165519206===i.getUint32(o+4))if(d+8>i.byteLength)console.log("Invalid Exif data: Invalid segment size.");else if(0===i.getUint16(o+8)){switch(i.getUint16(d)){case 18761:c=!0;break;case 19789:c=!1;break;default:return void console.log("Invalid Exif data: Invalid byte alignment marker.")}42===i.getUint16(d+2,c)?(o=i.getUint32(d+4,c),s.exif=new t,l.disableExifOffsets||(s.exifOffsets=new t,s.exifTiffOffset=d,s.exifLittleEndian=c),(o=n(i,d,d+o,c,s.exif,s.exifOffsets,f,u))&&a(f,u,"ifd1")&&(s.exif.ifd1=o,s.exifOffsets&&(s.exifOffsets.ifd1=d+o)),Object.keys(s.exif.ifds).forEach((function(e){var a,o,r,l,g,m,h;o=e,r=i,l=d,g=c,m=f,h=u,(e=(a=s).exif[o])&&(a.exif[o]=new t(o),a.exifOffsets&&(a.exifOffsets[o]=new t(o)),n(r,l,l+e,g,a.exif[o],a.exifOffsets&&a.exifOffsets[o],m&&m[o],h&&h[o]))})),(o=s.exif.ifd1)&&o[513]&&(o[513]=function(t,i,a){if(a){if(!(i+a>t.byteLength))return new Blob([e.bufferSlice.call(t.buffer,i,i+a)],{type:"image/jpeg"});console.log("Invalid Exif data: Invalid thumbnail data.")}}(i,d+o[513],o[514]))):console.log("Invalid Exif data: Missing TIFF marker.")}else console.log("Invalid Exif data: Missing byte alignment offset.")}},e.metaDataParsers.jpeg[65505].push(e.parseExifData),e.exifWriters={274:function(e,t,i){var a=t.exifOffsets[274];return a&&new DataView(e,a+8,2).setUint16(0,i,t.exifLittleEndian),e}},e.writeExifData=function(t,i,a,n){return e.exifWriters[i.exif.map[a]](t,i,n)},e.ExifMap=t})),function(e){"use strict";"function"==typeof define&&define.amd?define(["./load-image","./load-image-exif"],e):"object"==typeof module&&module.exports?e(require("./load-image"),require("./load-image-exif")):e(window.loadImage)}((function(e){"use strict";var t=e.ExifMap.prototype;t.tags={256:"ImageWidth",257:"ImageHeight",258:"BitsPerSample",259:"Compression",262:"PhotometricInterpretation",274:"Orientation",277:"SamplesPerPixel",284:"PlanarConfiguration",530:"YCbCrSubSampling",531:"YCbCrPositioning",282:"XResolution",283:"YResolution",296:"ResolutionUnit",273:"StripOffsets",278:"RowsPerStrip",279:"StripByteCounts",513:"JPEGInterchangeFormat",514:"JPEGInterchangeFormatLength",301:"TransferFunction",318:"WhitePoint",319:"PrimaryChromaticities",529:"YCbCrCoefficients",532:"ReferenceBlackWhite",306:"DateTime",270:"ImageDescription",271:"Make",272:"Model",305:"Software",315:"Artist",33432:"Copyright",34665:{36864:"ExifVersion",40960:"FlashpixVersion",40961:"ColorSpace",40962:"PixelXDimension",40963:"PixelYDimension",42240:"Gamma",37121:"ComponentsConfiguration",37122:"CompressedBitsPerPixel",37500:"MakerNote",37510:"UserComment",40964:"RelatedSoundFile",36867:"DateTimeOriginal",36868:"DateTimeDigitized",36880:"OffsetTime",36881:"OffsetTimeOriginal",36882:"OffsetTimeDigitized",37520:"SubSecTime",37521:"SubSecTimeOriginal",37522:"SubSecTimeDigitized",33434:"ExposureTime",33437:"FNumber",34850:"ExposureProgram",34852:"SpectralSensitivity",34855:"PhotographicSensitivity",34856:"OECF",34864:"SensitivityType",34865:"StandardOutputSensitivity",34866:"RecommendedExposureIndex",34867:"ISOSpeed",34868:"ISOSpeedLatitudeyyy",34869:"ISOSpeedLatitudezzz",37377:"ShutterSpeedValue",37378:"ApertureValue",37379:"BrightnessValue",37380:"ExposureBias",37381:"MaxApertureValue",37382:"SubjectDistance",37383:"MeteringMode",37384:"LightSource",37385:"Flash",37396:"SubjectArea",37386:"FocalLength",41483:"FlashEnergy",41484:"SpatialFrequencyResponse",41486:"FocalPlaneXResolution",41487:"FocalPlaneYResolution",41488:"FocalPlaneResolutionUnit",41492:"SubjectLocation",41493:"ExposureIndex",41495:"SensingMethod",41728:"FileSource",41729:"SceneType",41730:"CFAPattern",41985:"CustomRendered",41986:"ExposureMode",41987:"WhiteBalance",41988:"DigitalZoomRatio",41989:"FocalLengthIn35mmFilm",41990:"SceneCaptureType",41991:"GainControl",41992:"Contrast",41993:"Saturation",41994:"Sharpness",41995:"DeviceSettingDescription",41996:"SubjectDistanceRange",42016:"ImageUniqueID",42032:"CameraOwnerName",42033:"BodySerialNumber",42034:"LensSpecification",42035:"LensMake",42036:"LensModel",42037:"LensSerialNumber"},34853:{0:"GPSVersionID",1:"GPSLatitudeRef",2:"GPSLatitude",3:"GPSLongitudeRef",4:"GPSLongitude",5:"GPSAltitudeRef",6:"GPSAltitude",7:"GPSTimeStamp",8:"GPSSatellites",9:"GPSStatus",10:"GPSMeasureMode",11:"GPSDOP",12:"GPSSpeedRef",13:"GPSSpeed",14:"GPSTrackRef",15:"GPSTrack",16:"GPSImgDirectionRef",17:"GPSImgDirection",18:"GPSMapDatum",19:"GPSDestLatitudeRef",20:"GPSDestLatitude",21:"GPSDestLongitudeRef",22:"GPSDestLongitude",23:"GPSDestBearingRef",24:"GPSDestBearing",25:"GPSDestDistanceRef",26:"GPSDestDistance",27:"GPSProcessingMethod",28:"GPSAreaInformation",29:"GPSDateStamp",30:"GPSDifferential",31:"GPSHPositioningError"},40965:{1:"InteroperabilityIndex"}},t.tags.ifd1=t.tags,t.stringValues={ExposureProgram:{0:"Undefined",1:"Manual",2:"Normal program",3:"Aperture priority",4:"Shutter priority",5:"Creative program",6:"Action program",7:"Portrait mode",8:"Landscape mode"},MeteringMode:{0:"Unknown",1:"Average",2:"CenterWeightedAverage",3:"Spot",4:"MultiSpot",5:"Pattern",6:"Partial",255:"Other"},LightSource:{0:"Unknown",1:"Daylight",2:"Fluorescent",3:"Tungsten (incandescent light)",4:"Flash",9:"Fine weather",10:"Cloudy weather",11:"Shade",12:"Daylight fluorescent (D 5700 - 7100K)",13:"Day white fluorescent (N 4600 - 5400K)",14:"Cool white fluorescent (W 3900 - 4500K)",15:"White fluorescent (WW 3200 - 3700K)",17:"Standard light A",18:"Standard light B",19:"Standard light C",20:"D55",21:"D65",22:"D75",23:"D50",24:"ISO studio tungsten",255:"Other"},Flash:{0:"Flash did not fire",1:"Flash fired",5:"Strobe return light not detected",7:"Strobe return light detected",9:"Flash fired, compulsory flash mode",13:"Flash fired, compulsory flash mode, return light not detected",15:"Flash fired, compulsory flash mode, return light detected",16:"Flash did not fire, compulsory flash mode",24:"Flash did not fire, auto mode",25:"Flash fired, auto mode",29:"Flash fired, auto mode, return light not detected",31:"Flash fired, auto mode, return light detected",32:"No flash function",65:"Flash fired, red-eye reduction mode",69:"Flash fired, red-eye reduction mode, return light not detected",71:"Flash fired, red-eye reduction mode, return light detected",73:"Flash fired, compulsory flash mode, red-eye reduction mode",77:"Flash fired, compulsory flash mode, red-eye reduction mode, return light not detected",79:"Flash fired, compulsory flash mode, red-eye reduction mode, return light detected",89:"Flash fired, auto mode, red-eye reduction mode",93:"Flash fired, auto mode, return light not detected, red-eye reduction mode",95:"Flash fired, auto mode, return light detected, red-eye reduction mode"},SensingMethod:{1:"Undefined",2:"One-chip color area sensor",3:"Two-chip color area sensor",4:"Three-chip color area sensor",5:"Color sequential area sensor",7:"Trilinear sensor",8:"Color sequential linear sensor"},SceneCaptureType:{0:"Standard",1:"Landscape",2:"Portrait",3:"Night scene"},SceneType:{1:"Directly photographed"},CustomRendered:{0:"Normal process",1:"Custom process"},WhiteBalance:{0:"Auto white balance",1:"Manual white balance"},GainControl:{0:"None",1:"Low gain up",2:"High gain up",3:"Low gain down",4:"High gain down"},Contrast:{0:"Normal",1:"Soft",2:"Hard"},Saturation:{0:"Normal",1:"Low saturation",2:"High saturation"},Sharpness:{0:"Normal",1:"Soft",2:"Hard"},SubjectDistanceRange:{0:"Unknown",1:"Macro",2:"Close view",3:"Distant view"},FileSource:{3:"DSC"},ComponentsConfiguration:{0:"",1:"Y",2:"Cb",3:"Cr",4:"R",5:"G",6:"B"},Orientation:{1:"Original",2:"Horizontal flip",3:"Rotate 180° CCW",4:"Vertical flip",5:"Vertical flip + Rotate 90° CW",6:"Rotate 90° CW",7:"Horizontal flip + Rotate 90° CW",8:"Rotate 90° CCW"}},t.getText=function(e){var t=this.get(e);switch(e){case"LightSource":case"Flash":case"MeteringMode":case"ExposureProgram":case"SensingMethod":case"SceneCaptureType":case"SceneType":case"CustomRendered":case"WhiteBalance":case"GainControl":case"Contrast":case"Saturation":case"Sharpness":case"SubjectDistanceRange":case"FileSource":case"Orientation":return this.stringValues[e][t];case"ExifVersion":case"FlashpixVersion":return t?String.fromCharCode(t[0],t[1],t[2],t[3]):void 0;case"ComponentsConfiguration":return t?this.stringValues[e][t[0]]+this.stringValues[e][t[1]]+this.stringValues[e][t[2]]+this.stringValues[e][t[3]]:void 0;case"GPSVersionID":return t?t[0]+"."+t[1]+"."+t[2]+"."+t[3]:void 0}return String(t)},t.getAll=function(){var e,t,i={};for(e in this)Object.prototype.hasOwnProperty.call(this,e)&&((t=this[e])&&t.getAll?i[this.ifds[e].name]=t.getAll():(t=this.tags[e])&&(i[t]=this.getText(t)));return i},t.getName=function(e){var t=this.tags[e];return"object"==typeof t?this.ifds[e].name:t},function(){var e,i,a,n=t.tags;for(e in n)if(Object.prototype.hasOwnProperty.call(n,e))if(i=t.ifds[e])for(e in a=n[e])Object.prototype.hasOwnProperty.call(a,e)&&(i.map[a[e]]=Number(e));else t.map[n[e]]=Number(e)}()})),function(e){"use strict";"function"==typeof define&&define.amd?define(["./load-image","./load-image-meta"],e):"object"==typeof module&&module.exports?e(require("./load-image"),require("./load-image-meta")):e(window.loadImage)}((function(e){"use strict";function t(){}function i(e,t,i,a,n){return"binary"===t.types[e]?new Blob([i.buffer.slice(a,a+n)]):"Uint16"===t.types[e]?i.getUint16(a):function(e,t,i){for(var a="",n=t+i,o=t;o<n;o+=1)a+=String.fromCharCode(e.getUint8(o));return a}(i,a,n)}function a(e,t,a,n,o,r){for(var s,l,c,f=t+a,u=t;u<f;)28===e.getUint8(u)&&2===e.getUint8(u+1)&&(s=e.getUint8(u+2),o&&!o[s]||r&&r[s]||(l=e.getInt16(u+3),c=i(s,n.iptc,e,u+5,l),n.iptc[s]=void 0===(l=n.iptc[s])?c:l instanceof Array?(l.push(c),l):[l,c],n.iptcOffsets&&(n.iptcOffsets[s]=u))),u+=1}t.prototype.map={ObjectName:5},t.prototype.types={0:"Uint16",200:"Uint16",201:"Uint16",202:"binary"},t.prototype.get=function(e){return this[e]||this[this.map[e]]},e.parseIptcData=function(e,i,n,o,r){if(!r.disableIptc)for(var s=i+n;i+8<s;){if(l=i,943868237===(c=e).getUint32(l)&&1028===c.getUint16(l+4)){var l=(l=i,(c=(c=e).getUint8(l+7))%2!=0&&(c+=1),c=0===c?4:c),c=i+8+l;if(s<c){console.log("Invalid IPTC data: Invalid segment offset.");break}if(s<i+(l=e.getUint16(i+6+l))){console.log("Invalid IPTC data: Invalid segment size.");break}return o.iptc=new t,r.disableIptcOffsets||(o.iptcOffsets=new t),void a(e,c,l,o,r.includeIptcTags,r.excludeIptcTags||{202:!0})}i+=1}},e.metaDataParsers.jpeg[65517].push(e.parseIptcData),e.IptcMap=t})),function(e){"use strict";"function"==typeof define&&define.amd?define(["./load-image","./load-image-iptc"],e):"object"==typeof module&&module.exports?e(require("./load-image"),require("./load-image-iptc")):e(window.loadImage)}((function(e){"use strict";var t=e.IptcMap.prototype;t.tags={0:"ApplicationRecordVersion",3:"ObjectTypeReference",4:"ObjectAttributeReference",5:"ObjectName",7:"EditStatus",8:"EditorialUpdate",10:"Urgency",12:"SubjectReference",15:"Category",20:"SupplementalCategories",22:"FixtureIdentifier",25:"Keywords",26:"ContentLocationCode",27:"ContentLocationName",30:"ReleaseDate",35:"ReleaseTime",37:"ExpirationDate",38:"ExpirationTime",40:"SpecialInstructions",42:"ActionAdvised",45:"ReferenceService",47:"ReferenceDate",50:"ReferenceNumber",55:"DateCreated",60:"TimeCreated",62:"DigitalCreationDate",63:"DigitalCreationTime",65:"OriginatingProgram",70:"ProgramVersion",75:"ObjectCycle",80:"Byline",85:"BylineTitle",90:"City",92:"Sublocation",95:"State",100:"CountryCode",101:"Country",103:"OriginalTransmissionReference",105:"Headline",110:"Credit",115:"Source",116:"CopyrightNotice",118:"Contact",120:"Caption",121:"LocalCaption",122:"Writer",125:"RasterizedCaption",130:"ImageType",131:"ImageOrientation",135:"LanguageIdentifier",150:"AudioType",151:"AudioSamplingRate",152:"AudioSamplingResolution",153:"AudioDuration",154:"AudioOutcue",184:"JobID",185:"MasterDocumentID",186:"ShortDocumentID",187:"UniqueDocumentID",188:"OwnerID",200:"ObjectPreviewFileFormat",201:"ObjectPreviewFileVersion",202:"ObjectPreviewData",221:"Prefs",225:"ClassifyState",228:"SimilarityIndex",230:"DocumentNotes",231:"DocumentHistory",232:"ExifCameraInfo",255:"CatalogSets"},t.stringValues={10:{0:"0 (reserved)",1:"1 (most urgent)",2:"2",3:"3",4:"4",5:"5 (normal urgency)",6:"6",7:"7",8:"8 (least urgent)",9:"9 (user-defined priority)"},75:{a:"Morning",b:"Both Morning and Evening",p:"Evening"},131:{L:"Landscape",P:"Portrait",S:"Square"}},t.getText=function(e){var t=this.get(e);e=this.map[e];return(e=this.stringValues[e])?e[t]:String(t)},t.getAll=function(){var e,t,i={};for(e in this)Object.prototype.hasOwnProperty.call(this,e)&&(t=this.tags[e])&&(i[t]=this.getText(t));return i},t.getName=function(e){return this.tags[e]},function(){var e,i=t.tags,a=t.map||{};for(e in i)Object.prototype.hasOwnProperty.call(i,e)&&(a[i[e]]=Number(e))}()}));