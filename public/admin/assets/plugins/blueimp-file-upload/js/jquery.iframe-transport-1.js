!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery"],e):"object"==typeof exports?e(require("jquery")):e(window.jQuery)}((function(e){"use strict";var t=0,r=e,n="parseJSON";"JSON"in window&&"parse"in JSON&&(r=JSON,n="parse"),e.ajaxTransport("iframe",(function(r){if(r.async){var n,a,o,i=r.initialIframeSrc||"javascript:false;";return{send:function(p,f){(n=e('<form style="display:none;"></form>')).attr("accept-charset",r.formAcceptCharset),o=/\?/.test(r.url)?"&":"?","DELETE"===r.type?(r.url=r.url+o+"_method=DELETE",r.type="POST"):"PUT"===r.type?(r.url=r.url+o+"_method=PUT",r.type="POST"):"PATCH"===r.type&&(r.url=r.url+o+"_method=PATCH",r.type="POST"),a=e('<iframe src="'+i+'" name="iframe-transport-'+(t+=1)+'"></iframe>').on("load",(function(){var t,o=e.isArray(r.paramName)?r.paramName:[r.paramName];a.off("load").on("load",(function(){var t;try{if(!(t=a.contents()).length||!t[0].firstChild)throw new Error}catch(e){t=void 0}f(200,"success",{iframe:t}),e('<iframe src="'+i+'"></iframe>').appendTo(n),window.setTimeout((function(){n.remove()}),0)})),n.prop("target",a.prop("name")).prop("action",r.url).prop("method",r.type),r.formData&&e.each(r.formData,(function(t,r){e('<input type="hidden"/>').prop("name",r.name).val(r.value).appendTo(n)})),r.fileInput&&r.fileInput.length&&"POST"===r.type&&(t=r.fileInput.clone(),r.fileInput.after((function(e){return t[e]})),r.paramName&&r.fileInput.each((function(t){e(this).prop("name",o[t]||r.paramName)})),n.append(r.fileInput).prop("enctype","multipart/form-data").prop("encoding","multipart/form-data"),r.fileInput.removeAttr("form")),window.setTimeout((function(){n.submit(),t&&t.length&&r.fileInput.each((function(r,n){var a=e(t[r]);e(n).prop("name",a.prop("name")).attr("form",a.attr("form")),a.replaceWith(n)}))}),0)})),n.append(a).appendTo(document.body)},abort:function(){a&&a.off("load").prop("src",i),n&&n.remove()}}}})),e.ajaxSetup({converters:{"iframe text":function(t){return t&&e(t[0].body).text()},"iframe json":function(t){return t&&r[n](e(t[0].body).text())},"iframe html":function(t){return t&&e(t[0].body).html()},"iframe xml":function(t){var r=t&&t[0];return r&&e.isXMLDoc(r)?r:e.parseXML(r.XMLDocument&&r.XMLDocument.xml||e(r.body).html())},"iframe script":function(t){return t&&e.globalEval(e(t[0].body).text())}}})}));