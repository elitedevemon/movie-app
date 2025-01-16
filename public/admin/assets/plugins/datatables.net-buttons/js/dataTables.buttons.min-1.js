/*! For license information please see dataTables.buttons.min.js.LICENSE.txt */
!function(t){var n,e;"function"==typeof define&&define.amd?define(["jquery","datatables.net"],(function(n){return t(n,window,document)})):"object"==typeof exports?(n=require("jquery"),e=function(t,n){n.fn.dataTable||require("datatables.net")(t,n)},"undefined"==typeof window?module.exports=function(o,i){return o=o||window,i=i||n(o),e(o,i),t(i,o,o.document)}:(e(window,n),module.exports=t(n,window,window.document))):t(jQuery,window,document)}((function(t,n,e){"use strict";var o=t.fn.dataTable,i=0,s=0,r=o.ext.buttons,a=null;function l(n,e,o){t.fn.animate?n.stop().fadeIn(e,o):(n.css("display","block"),o&&o.call(n))}function c(n,e,o){t.fn.animate?n.stop().fadeOut(e,o):(n.css("display","none"),o&&o.call(n))}function u(n,e){if(!o.versionCheck("2"))throw"Warning: Buttons requires DataTables 2 or newer";if(!(this instanceof u))return function(t){return new u(t,n).container()};!0===(e=void 0===e?{}:e)&&(e={}),Array.isArray(e)&&(e={buttons:e}),this.c=t.extend(!0,{},u.defaults,e),e.buttons&&(this.c.buttons=e.buttons),this.s={dt:new o.Api(n),buttons:[],listenKeys:"",namespace:"dtb"+i++},this.dom={container:t("<"+this.c.dom.container.tag+"/>").addClass(this.c.dom.container.className)},this._constructor()}t.extend(u.prototype,{action:function(t,n){return t=this._nodeToButton(t),void 0===n?t.conf.action:(t.conf.action=n,this)},active:function(n,e){n=this._nodeToButton(n);var o=this.c.dom.button.active,i=t(n.node);return n.inCollection&&this.c.dom.collection.button&&void 0!==this.c.dom.collection.button.active&&(o=this.c.dom.collection.button.active),void 0===e?i.hasClass(o):(i.toggleClass(o,void 0===e||e),this)},add:function(t,n,e){var o=this.s.buttons;if("string"==typeof n){for(var i=n.split("-"),s=this.s,r=0,a=i.length-1;r<a;r++)s=s.buttons[+i[r]];o=s.buttons,n=+i[i.length-1]}return this._expandButton(o,t,void 0!==t?t.split:void 0,(void 0===t||void 0===t.split||0===t.split.length)&&void 0!==s,!1,n),void 0!==e&&!0!==e||this._draw(),this},collectionRebuild:function(t,n){var e=this._nodeToButton(t);if(void 0!==n){for(var o=e.buttons.length-1;0<=o;o--)this.remove(e.buttons[o].node);for(e.conf.prefixButtons&&n.unshift.apply(n,e.conf.prefixButtons),e.conf.postfixButtons&&n.push.apply(n,e.conf.postfixButtons),o=0;o<n.length;o++){var i=n[o];this._expandButton(e.buttons,i,void 0!==i&&void 0!==i.config&&void 0!==i.config.split,!0,void 0!==i.parentConf&&void 0!==i.parentConf.split,null,i.parentConf)}}this._draw(e.collection,e.buttons)},container:function(){return this.dom.container},disable:function(n){return((n=this._nodeToButton(n)).isSplit?t(n.node.childNodes[0]):t(n.node)).addClass(this.c.dom.button.disabled).prop("disabled",!0),n.disabled=!0,this._checkSplitEnable(),this},destroy:function(){t("body").off("keyup."+this.s.namespace);for(var n=this.s.buttons.slice(),e=0,o=n.length;e<o;e++)this.remove(n[e].node);this.dom.container.remove();var i=this.s.dt.settings()[0];for(e=0,o=i.length;e<o;e++)if(i.inst===this){i.splice(e,1);break}return this},enable:function(n,e){return!1===e?this.disable(n):(((e=this._nodeToButton(n)).isSplit?t(e.node.childNodes[0]):t(e.node)).removeClass(this.c.dom.button.disabled).prop("disabled",!1),e.disabled=!1,this._checkSplitEnable(),this)},index:function(t,n,e){n||(n="",e=this.s.buttons);for(var o=0,i=e.length;o<i;o++){var s=e[o].buttons;if(e[o].node===t)return n+o;if(s&&s.length&&null!==(s=this.index(t,o+"-",s)))return s}return null},name:function(){return this.c.name},node:function(n){return n?(n=this._nodeToButton(n),t(n.node)):this.dom.container},processing:function(n,e){var o=this.s.dt,i=this._nodeToButton(n);return void 0===e?t(i.node).hasClass("processing"):(t(i.node).toggleClass("processing",e),t(o.table().node()).triggerHandler("buttons-processing.dt",[e,o.button(n),o,t(n),i.conf]),this)},remove:function(n){var e=this._nodeToButton(n),o=this._nodeToHost(n),i=this.s.dt;if(e.buttons.length)for(var s=e.buttons.length-1;0<=s;s--)this.remove(e.buttons[s].node);return e.conf.destroying=!0,e.conf.destroy&&e.conf.destroy.call(i.button(n),i,t(n),e.conf),this._removeKey(e.conf),t(e.node).remove(),i=t.inArray(e,o),o.splice(i,1),this},text:function(n,e){function o(t){return"function"==typeof t?t(s,r,i.conf):t}var i=this._nodeToButton(n),s=(n=i.textNode,this.s.dt),r=t(i.node);return void 0===e?o(i.conf.text):(i.conf.text=e,n.html(o(e)),this)},_constructor:function(){var n=this,o=this.s.dt,i=o.settings()[0],s=this.c.buttons;i._buttons||(i._buttons=[]),i._buttons.push({inst:this,name:this.c.name});for(var r=0,a=s.length;r<a;r++)this.add(s[r]);o.on("destroy",(function(t,e){e===i&&n.destroy()})),t("body").on("keyup."+this.s.namespace,(function(t){var o;e.activeElement&&e.activeElement!==e.body||(o=String.fromCharCode(t.keyCode).toLowerCase(),-1!==n.s.listenKeys.toLowerCase().indexOf(o)&&n._keypress(o,t))}))},_addKey:function(n){n.key&&(this.s.listenKeys+=(t.isPlainObject(n.key)?n.key:n).key)},_draw:function(t,n){t||(t=this.dom.container,n=this.s.buttons),t.children().detach();for(var e=0,o=n.length;e<o;e++)t.append(n[e].inserter),t.append(" "),n[e].buttons&&n[e].buttons.length&&this._draw(n[e].collection,n[e].buttons)},_expandButton:function(n,e,o,i,s,r,a){for(var l,c=this.s.dt,u=this.c.dom.collection,d=Array.isArray(e)?e:[e],f=0,p=(d=void 0===e?Array.isArray(o)?o:[o]:d).length;f<p;f++){var h=this._resolveExtends(d[f]);if(h)if(l=!(!h.config||!h.config.split),Array.isArray(h))this._expandButton(n,h,void 0!==b&&void 0!==b.conf?b.conf.split:void 0,i,void 0!==a&&void 0!==a.split,r,a);else{var b=this._buildButton(h,i,void 0!==h.split||void 0!==h.config&&void 0!==h.config.split,s);if(b){if(null!=r?(n.splice(r,0,b),r++):n.push(b),b.conf.dropIcon&&!b.conf.split&&t(b.node).addClass(this.c.dom.button.dropClass).append(this.c.dom.button.dropHtml),b.conf.buttons&&(b.collection=t("<"+u.container.content.tag+"/>"),b.conf._collection=b.collection,this._expandButton(b.buttons,b.conf.buttons,b.conf.split,!l,l,r,b.conf)),b.conf.split){b.collection=t("<"+u.container.tag+"/>"),b.conf._collection=b.collection;for(var g=0;g<b.conf.split.length;g++){var m=b.conf.split[g];"object"==typeof m&&(m.parent=a,void 0===m.collectionLayout&&(m.collectionLayout=b.conf.collectionLayout),void 0===m.dropup&&(m.dropup=b.conf.dropup),void 0===m.fade)&&(m.fade=b.conf.fade)}this._expandButton(b.buttons,b.conf.buttons,b.conf.split,!l,l,r,b.conf)}b.conf.parent=a,h.init&&h.init.call(c.button(b.node),c,t(b.node),h)}}}},_buildButton:function(n,e,o,i){function a(t){return"function"==typeof t?t(b,f,n):t}var l,c,u,d,f,p=this,h=this.c.dom,b=this.s.dt,g=t.extend(!0,{},h.button);if(e&&o&&h.collection.split?t.extend(!0,g,h.collection.split.action):i||e?t.extend(!0,g,h.collection.button):o&&t.extend(!0,g,h.split.button),n.spacer)return h=t("<"+g.spacer.tag+"/>").addClass("dt-button-spacer "+n.style+" "+g.spacer.className).html(a(n.text)),{conf:n,node:h,inserter:h,buttons:[],inCollection:e,isSplit:o,collection:null,textNode:h};if(n.available&&!n.available(b,n)&&!n.html)return!1;n.html?f=t(n.html):(c=function(n,e,o,i,s){i.action.call(e.button(o),n,e,o,i,s),t(e.table().node()).triggerHandler("buttons-action.dt",[e.button(o),e,o,i])},u=function(t,n,e,o){o.async?(p.processing(e[0],!0),setTimeout((function(){c(t,n,e,o,(function(){p.processing(e[0],!1)}))}),o.async)):c(t,n,e,o,(function(){}))},h=n.tag||g.tag,d=void 0===n.clickBlurs||n.clickBlurs,f=t("<"+h+"/>").addClass(g.className).attr("tabindex",this.s.dt.settings()[0].iTabIndex).attr("aria-controls",this.s.dt.table().node().id).on("click.dtb",(function(t){t.preventDefault(),!f.hasClass(g.disabled)&&n.action&&u(t,b,f,n),d&&f.trigger("blur")})).on("keypress.dtb",(function(t){13===t.keyCode&&(t.preventDefault(),!f.hasClass(g.disabled))&&n.action&&u(t,b,f,n)})),"a"===h.toLowerCase()&&f.attr("href","#"),"button"===h.toLowerCase()&&f.attr("type","button"),l=g.liner.tag?(h=t("<"+g.liner.tag+"/>").html(a(n.text)).addClass(g.liner.className),"a"===g.liner.tag.toLowerCase()&&h.attr("href","#"),f.append(h),h):(f.html(a(n.text)),f),!1===n.enabled&&f.addClass(g.disabled),n.className&&f.addClass(n.className),n.titleAttr&&f.attr("title",a(n.titleAttr)),n.attr&&f.attr(n.attr),n.namespace||(n.namespace=".dt-button-"+s++),void 0!==n.config&&n.config.split&&(n.split=n.config.split));var m,v,y,x,C,_;h=(h=this.c.dom.buttonContainer)&&h.tag?t("<"+h.tag+"/>").addClass(h.className).append(f):f;return this._addKey(n),this.c.buttonCreated&&(h=this.c.buttonCreated(n,h)),o&&(v=(m=e?t.extend(!0,this.c.dom.split,this.c.dom.collection.split):this.c.dom.split).wrapper,y=t("<"+v.tag+"/>").addClass(v.className).append(f),x=t.extend(n,{autoClose:!0,align:m.dropdown.align,attr:{"aria-haspopup":"dialog","aria-expanded":!1},className:m.dropdown.className,closeButton:!1,splitAlignClass:m.dropdown.splitAlignClass,text:m.dropdown.text}),this._addKey(x),C=function(n,e,o,i){r.split.action.call(e.button(y),n,e,o,i),t(e.table().node()).triggerHandler("buttons-action.dt",[e.button(o),e,o,i]),o.attr("aria-expanded",!0)},_=t('<button class="'+m.dropdown.className+' dt-button"></button>').html(this.c.dom.button.dropHtml).addClass(this.c.dom.button.dropClass).on("click.dtb",(function(t){t.preventDefault(),t.stopPropagation(),_.hasClass(g.disabled)||C(t,b,_,x),d&&_.trigger("blur")})).on("keypress.dtb",(function(t){13===t.keyCode&&(t.preventDefault(),_.hasClass(g.disabled)||C(t,b,_,x))})),0===n.split.length&&_.addClass("dtb-hide-drop"),y.append(_).attr(x.attr)),{conf:n,node:(o?y:f).get(0),inserter:o?y:h,buttons:[],inCollection:e,isSplit:o,inSplit:i,collection:null,textNode:l}},_checkSplitEnable:function(n){n=n||this.s.buttons;for(var e=0;e<n.length;e++){var o,i=n[e];i.isSplit?(o=i.node.childNodes[1],(this._checkAnyEnabled(i.buttons)?t(o).removeClass(this.c.dom.button.disabled):t(o).addClass(this.c.dom.button.disabled)).prop("disabled",!1)):i.isCollection&&this._checkSplitEnable(i.buttons)}},_checkAnyEnabled:function(t){for(var n=0;n<t.length;n++)if(!t[n].disabled)return!0;return!1},_nodeToButton:function(n,e){for(var o=0,i=(e=e||this.s.buttons).length;o<i;o++){if(e[o].node===n||t(e[o].node).children().eq(0).get(0)===n)return e[o];if(e[o].buttons.length){var s=this._nodeToButton(n,e[o].buttons);if(s)return s}}},_nodeToHost:function(t,n){for(var e=0,o=(n=n||this.s.buttons).length;e<o;e++){if(n[e].node===t)return n;if(n[e].buttons.length){var i=this._nodeToHost(t,n[e].buttons);if(i)return i}}},_keypress:function(n,e){var o;e._buttonsHandled||(o=function(i){for(var s,r,a=0,l=i.length;a<l;a++)s=i[a].conf,r=i[a].node,!s.key||s.key!==n&&(!t.isPlainObject(s.key)||s.key.key!==n||s.key.shiftKey&&!e.shiftKey||s.key.altKey&&!e.altKey||s.key.ctrlKey&&!e.ctrlKey||s.key.metaKey&&!e.metaKey)||(e._buttonsHandled=!0,t(r).click()),i[a].buttons.length&&o(i[a].buttons)})(this.s.buttons)},_removeKey:function(n){var e;n.key&&(n=(t.isPlainObject(n.key)?n.key:n).key,e=this.s.listenKeys.split(""),n=t.inArray(n,e),e.splice(n,1),this.s.listenKeys=e.join(""))},_resolveExtends:function(n){function e(e){for(var o=0;!t.isPlainObject(e)&&!Array.isArray(e);){if(void 0===e)return;if("function"==typeof e){if(!(e=e.call(s,a,n)))return!1}else if("string"==typeof e){if(!r[e])return{html:e};e=r[e]}if(30<++o)throw"Buttons: Too many iterations"}return Array.isArray(e)?e:t.extend({},e)}var o,i,s=this,a=this.s.dt;for(n=e(n);n&&n.extend;){if(!r[n.extend])throw"Cannot extend unknown button type: "+n.extend;var l=e(r[n.extend]);if(Array.isArray(l))return l;if(!l)return!1;var c=l.className;void 0!==n.config&&void 0!==l.config&&(n.config=t.extend({},l.config,n.config)),n=t.extend({},l,n),c&&n.className!==c&&(n.className=c+" "+n.className),n.extend=l.extend}var u=n.postfixButtons;if(u)for(n.buttons||(n.buttons=[]),o=0,i=u.length;o<i;o++)n.buttons.push(u[o]);var d=n.prefixButtons;if(d)for(n.buttons||(n.buttons=[]),o=0,i=d.length;o<i;o++)n.buttons.splice(o,0,d[o]);return n},_popover:function(o,i,s){function r(){y=!0,c(t(C),x.fade,(function(){t(this).detach()})),t(m.buttons('[aria-haspopup="dialog"][aria-expanded="true"]').nodes()).attr("aria-expanded","false"),t("div.dt-button-background").off("click.dtb-collection"),u.background(!1,x.backgroundClassName,x.fade,_),t(n).off("resize.resize.dtb-collection"),t("body").off(".dtb-collection"),m.off("buttons-action.b-internal"),m.off("destroy"),t("body").trigger("buttons-popover-hide.dt")}var a,d,f,p,h,b,g,m=i,v=this.c,y=!1,x=t.extend({align:"button-left",autoClose:!1,background:!0,backgroundClassName:"dt-button-background",closeButton:!0,containerClassName:v.dom.collection.container.className,contentClassName:v.dom.collection.container.content.className,collectionLayout:"",collectionTitle:"",dropup:!1,fade:400,popoverTitle:"",rightAlignClassName:"dt-button-right",tag:v.dom.collection.container.tag},s),C=x.tag+"."+x.containerClassName.replace(/ /g,"."),_=(v=i.node(),x.collectionLayout.includes("fixed")?t("body"):i.node());!1===o?r():((s=t(m.buttons('[aria-haspopup="dialog"][aria-expanded="true"]').nodes())).length&&(_.closest(C).length&&(_=s.eq(0)),r()),x.sort&&((s=t("button",o).map((function(n,e){return{text:t(e).text(),el:e}})).toArray()).sort((function(t,n){return t.text.localeCompare(n.text)})),t(o).append(s.map((function(t){return t.el})))),p="",3===(s=t(".dt-button",o).length)?p="dtb-b3":2===s?p="dtb-b2":1===s&&(p="dtb-b1"),a=t("<"+x.tag+"/>").addClass(x.containerClassName).addClass(x.collectionLayout).addClass(x.splitAlignClass).addClass(p).css("display","none").attr({"aria-modal":!0,role:"dialog"}),o=t(o).addClass(x.contentClassName).attr("role","menu").appendTo(a),v.attr("aria-expanded","true"),_.parents("body")[0]!==e.body&&(_=e.body.lastChild),x.popoverTitle?a.prepend('<div class="dt-button-collection-title">'+x.popoverTitle+"</div>"):x.collectionTitle&&a.prepend('<div class="dt-button-collection-title">'+x.collectionTitle+"</div>"),x.closeButton&&a.prepend('<div class="dtb-popover-close">&times;</div>').addClass("dtb-collection-closeable"),l(a.insertAfter(_),x.fade),s=t(i.table().container()),p=a.css("position"),"container"!==x.span&&"dt-container"!==x.align||(_=_.parent(),a.css("width",s.width())),"absolute"===p?(v=t(_[0].offsetParent),i=_.position(),s=_.offset(),p=v.offset(),d=v.position(),f=n.getComputedStyle(v[0]),p.height=v.outerHeight(),p.width=v.width()+parseFloat(f.paddingLeft),p.right=p.left+p.width,p.bottom=p.top+p.height,p=i.top+_.outerHeight(),h=i.left,a.css({top:p,left:h}),f=n.getComputedStyle(a[0]),(b=a.offset()).height=a.outerHeight(),b.width=a.outerWidth(),b.right=b.left+b.width,b.bottom=b.top+b.height,b.marginTop=parseFloat(f.marginTop),b.marginBottom=parseFloat(f.marginBottom),x.dropup&&(p=i.top-b.height-b.marginTop-b.marginBottom),"button-right"!==x.align&&!a.hasClass(x.rightAlignClassName)||(h=i.left-b.width+_.outerWidth()),"dt-container"!==x.align&&"container"!==x.align||h<i.left&&(h=-i.left),d.left+h+b.width>t(n).width()&&(h=t(n).width()-b.width-d.left),s.left+h<0&&(h=-s.left),d.top+p+b.height>t(n).height()+t(n).scrollTop()&&(p=i.top-b.height-b.marginTop-b.marginBottom),v.offset().top+p<t(n).scrollTop()&&(p=i.top+_.outerHeight()),a.css({top:p,left:h})):((g=function(){var e=t(n).height()/2,o=a.height()/2;a.css("marginTop",-1*(o=e<o?e:o))})(),t(n).on("resize.dtb-collection",(function(){g()}))),x.background&&u.background(!0,x.backgroundClassName,x.fade,x.backgroundHost||_),t("div.dt-button-background").on("click.dtb-collection",(function(){})),x.autoClose&&setTimeout((function(){m.on("buttons-action.b-internal",(function(t,n,e,o){o[0]!==_[0]&&r()}))}),0),t(a).trigger("buttons-popover.dt"),m.on("destroy",r),setTimeout((function(){y=!1,t("body").on("click.dtb-collection",(function(n){var e,i;!y&&(e=t.fn.addBack?"addBack":"andSelf",i=t(n.target).parent()[0],!t(n.target).parents()[e]().filter(o).length&&!t(i).hasClass("dt-buttons")||t(n.target).hasClass("dt-button-background"))&&r()})).on("keyup.dtb-collection",(function(t){27===t.keyCode&&r()})).on("keydown.dtb-collection",(function(n){var i=t("a, button",o),s=e.activeElement;9===n.keyCode&&(-1===i.index(s)?(i.first().focus(),n.preventDefault()):n.shiftKey?s===i[0]&&(i.last().focus(),n.preventDefault()):s===i.last()[0]&&(i.first().focus(),n.preventDefault()))}))}),0))}}),u.background=function(n,o,i,s){void 0===i&&(i=400),s=s||e.body,n?l(t("<div/>").addClass(o).css("display","none").insertAfter(s),i):c(t("div."+o),i,(function(){t(this).removeClass(o).remove()}))},u.instanceSelector=function(n,e){var o,i,s;return null==n?t.map(e,(function(t){return t.inst})):(o=[],i=t.map(e,(function(t){return t.name})),(s=function(n){var r;if(Array.isArray(n))for(var a=0,l=n.length;a<l;a++)s(n[a]);else if("string"==typeof n)-1!==n.indexOf(",")?s(n.split(",")):-1!==(r=t.inArray(n.trim(),i))&&o.push(e[r].inst);else if("number"==typeof n)o.push(e[n].inst);else if("object"==typeof n&&n.nodeName)for(var c=0;c<e.length;c++)e[c].inst.dom.container[0]===n&&o.push(e[c].inst);else"object"==typeof n&&o.push(n)})(n),o)},u.buttonSelector=function(n,e){for(var o=[],i=function(t,n,e){for(var o,s,r=0,a=n.length;r<a;r++)(o=n[r])&&(t.push({node:o.node,name:o.conf.name,idx:s=void 0!==e?e+r:r+""}),o.buttons)&&i(t,o.buttons,s+"-")},s=function(n,e){var r=[],a=(i(r,e.s.buttons),t.map(r,(function(t){return t.node})));if(Array.isArray(n)||n instanceof t)for(c=0,u=n.length;c<u;c++)s(n[c],e);else if(null==n||"*"===n)for(c=0,u=r.length;c<u;c++)o.push({inst:e,node:r[c].node});else if("number"==typeof n)e.s.buttons[n]&&o.push({inst:e,node:e.s.buttons[n].node});else if("string"==typeof n)if(-1!==n.indexOf(","))for(var l=n.split(","),c=0,u=l.length;c<u;c++)s(l[c].trim(),e);else if(n.match(/^\d+(\-\d+)*$/)){var d=t.map(r,(function(t){return t.idx}));o.push({inst:e,node:r[t.inArray(n,d)].node})}else if(-1!==n.indexOf(":name")){var f=n.replace(":name","");for(c=0,u=r.length;c<u;c++)r[c].name===f&&o.push({inst:e,node:r[c].node})}else t(a).filter(n).each((function(){o.push({inst:e,node:this})}));else"object"==typeof n&&n.nodeName&&-1!==(d=t.inArray(n,a))&&o.push({inst:e,node:a[d]})},r=0,a=n.length;r<a;r++){var l=n[r];s(e,l)}return o},u.stripData=function(t,n){return"string"==typeof t&&(t=u.stripHtmlScript(t),t=u.stripHtmlComments(t),n&&!n.stripHtml||(t=o.util.stripHtml(t)),n&&!n.trim||(t=t.trim()),n&&!n.stripNewlines||(t=t.replace(/\n/g," ")),n&&!n.decodeEntities||(t=a?a(t):(g.innerHTML=t,g.value)),!n||n.escapeExcelFormula)&&t.match(/^[=+\-@\t\r]/)&&(console.log("matching and updateing"),t="'"+t),t},u.entityDecoder=function(t){a=t},u.stripHtmlComments=function(t){for(var n;(t=(n=t).replace(/(<!--.*?--!?>)|(<!--[\S\s]+?--!?>)|(<!--[\S\s]*?$)/g,""))!==n;);return t},u.stripHtmlScript=function(t){for(var n;(t=(n=t).replace(/<script\b[^<]*(?:(?!<\/script[^>]*>)<[^<]*)*<\/script[^>]*>/gi,""))!==n;);return t},u.defaults={buttons:["copy","excel","csv","pdf","print"],name:"main",tabIndex:0,dom:{container:{tag:"div",className:"dt-buttons"},collection:{container:{className:"dt-button-collection",content:{className:"",tag:"div"},tag:"div"}},button:{tag:"button",className:"dt-button",active:"dt-button-active",disabled:"disabled",spacer:{className:"dt-button-spacer",tag:"span"},liner:{tag:"span",className:""},dropClass:"",dropHtml:'<span class="dt-button-down-arrow">&#x25BC;</span>'},split:{action:{className:"dt-button-split-drop-button dt-button",tag:"button"},dropdown:{align:"split-right",className:"dt-button-split-drop",splitAlignClass:"dt-button-split-left",tag:"button"},wrapper:{className:"dt-button-split",tag:"div"}}}},t.extend(r,{collection:{text:function(t){return t.i18n("buttons.collection","Collection")},className:"buttons-collection",closeButton:!(u.version="3.2.0"),dropIcon:!0,init:function(t,n){n.attr("aria-expanded",!1)},action:function(n,e,o,i){i._collection.parents("body").length?this.popover(!1,i):this.popover(i._collection,i),"keypress"===n.type&&t("a, button",i._collection).eq(0).focus()},attr:{"aria-haspopup":"dialog"}},split:{text:function(t){return t.i18n("buttons.split","Split")},className:"buttons-split",closeButton:!1,init:function(t,n){return n.attr("aria-expanded",!1)},action:function(t,n,e,o){this.popover(o._collection,o)},attr:{"aria-haspopup":"dialog"}},copy:function(){if(r.copyHtml5)return"copyHtml5"},csv:function(t,n){if(r.csvHtml5&&r.csvHtml5.available(t,n))return"csvHtml5"},excel:function(t,n){if(r.excelHtml5&&r.excelHtml5.available(t,n))return"excelHtml5"},pdf:function(t,n){if(r.pdfHtml5&&r.pdfHtml5.available(t,n))return"pdfHtml5"},pageLength:function(n){var e=n.settings()[0].aLengthMenu,o=[],i=[];if(Array.isArray(e[0]))o=e[0],i=e[1];else for(var s=0;s<e.length;s++){var r=e[s];t.isPlainObject(r)?(o.push(r.value),i.push(r.label)):(o.push(r),i.push(r))}return{extend:"collection",text:function(t){return t.i18n("buttons.pageLength",{"-1":"Show all rows",_:"Show %d rows"},t.page.len())},className:"buttons-page-length",autoClose:!0,buttons:t.map(o,(function(t,n){return{text:i[n],className:"button-page-length",action:function(n,e){e.page.len(t).draw()},init:function(n,e,o){function i(){s.active(n.page.len()===t)}var s=this;n.on("length.dt"+o.namespace,i),i()},destroy:function(t,n,e){t.off("length.dt"+e.namespace)}}})),init:function(t,n,e){var o=this;t.on("length.dt"+e.namespace,(function(){o.text(e.text)}))},destroy:function(t,n,e){t.off("length.dt"+e.namespace)}}},spacer:{style:"empty",spacer:!0,text:function(t){return t.i18n("buttons.spacer","")}}}),o.Api.register("buttons()",(function(t,n){void 0===n&&(n=t,t=void 0),this.selector.buttonGroup=t;var e=this.iterator(!0,"table",(function(e){if(e._buttons)return u.buttonSelector(u.instanceSelector(t,e._buttons),n)}),!0);return e._groupSelector=t,e})),o.Api.register("button()",(function(t,n){return 1<(t=this.buttons(t,n)).length&&t.splice(1,t.length),t})),o.Api.registerPlural("buttons().active()","button().active()",(function(t){return void 0===t?this.map((function(t){return t.inst.active(t.node)})):this.each((function(n){n.inst.active(n.node,t)}))})),o.Api.registerPlural("buttons().action()","button().action()",(function(t){return void 0===t?this.map((function(t){return t.inst.action(t.node)})):this.each((function(n){n.inst.action(n.node,t)}))})),o.Api.registerPlural("buttons().collectionRebuild()","button().collectionRebuild()",(function(t){return this.each((function(n){for(var e=0;e<t.length;e++)"object"==typeof t[e]&&(t[e].parentConf=n);n.inst.collectionRebuild(n.node,t)}))})),o.Api.register(["buttons().enable()","button().enable()"],(function(t){return this.each((function(n){n.inst.enable(n.node,t)}))})),o.Api.register(["buttons().disable()","button().disable()"],(function(){return this.each((function(t){t.inst.disable(t.node)}))})),o.Api.register("button().index()",(function(){var t=null;return this.each((function(n){null!==(n=n.inst.index(n.node))&&(t=n)})),t})),o.Api.registerPlural("buttons().nodes()","button().node()",(function(){var n=t();return t(this.each((function(t){n=n.add(t.inst.node(t.node))}))),n})),o.Api.registerPlural("buttons().processing()","button().processing()",(function(t){return void 0===t?this.map((function(t){return t.inst.processing(t.node)})):this.each((function(n){n.inst.processing(n.node,t)}))})),o.Api.registerPlural("buttons().text()","button().text()",(function(t){return void 0===t?this.map((function(t){return t.inst.text(t.node)})):this.each((function(n){n.inst.text(n.node,t)}))})),o.Api.registerPlural("buttons().trigger()","button().trigger()",(function(){return this.each((function(t){t.inst.node(t.node).trigger("click")}))})),o.Api.register("button().popover()",(function(t,n){return this.map((function(e){return e.inst._popover(t,this.button(this[0].node),n)}))})),o.Api.register("buttons().containers()",(function(){var n=t(),e=this._groupSelector;return this.iterator(!0,"table",(function(t){if(t._buttons)for(var o=u.instanceSelector(e,t._buttons),i=0,s=o.length;i<s;i++)n=n.add(o[i].container())})),n})),o.Api.register("buttons().container()",(function(){return this.containers().eq(0)})),o.Api.register("button().add()",(function(t,n,e){var o=this.context;return o.length&&(o=u.instanceSelector(this._groupSelector,o[0]._buttons)).length&&o[0].add(n,t,e),this.button(this._groupSelector,t)})),o.Api.register("buttons().destroy()",(function(){return this.pluck("inst").unique().each((function(t){t.destroy()})),this})),o.Api.registerPlural("buttons().remove()","buttons().remove()",(function(){return this.each((function(t){t.inst.remove(t.node)})),this})),o.Api.register("buttons.info()",(function(n,e,o){var i=this;return!1===n?(this.off("destroy.btn-info"),c(t("#datatables_buttons_info"),400,(function(){t(this).remove()})),clearTimeout(d),d=null):(d&&clearTimeout(d),t("#datatables_buttons_info").length&&t("#datatables_buttons_info").remove(),n=n?"<h2>"+n+"</h2>":"",l(t('<div id="datatables_buttons_info" class="dt-button-info"/>').html(n).append(t("<div/>")["string"==typeof e?"html":"append"](e)).css("display","none").appendTo("body")),void 0!==o&&0!==o&&(d=setTimeout((function(){i.buttons.info(!1)}),o)),this.on("destroy.btn-info",(function(){i.buttons.info(!1)}))),this})),o.Api.register("buttons.exportData()",(function(t){if(this.context.length)return m(new o.Api(this.context[0]),t)})),o.Api.register("buttons.exportInfo()",(function(t){return{filename:f(t=t||{},this),title:h(t,this),messageTop:b(this,t,t.message||t.messageTop,"top"),messageBottom:b(this,t,t.messageBottom,"bottom")}}));var d,f=function(n,e){var o;return null==(o="function"==typeof(o="*"===n.filename&&"*"!==n.title&&void 0!==n.title&&null!==n.title&&""!==n.title?n.title:n.filename)?o(n,e):o)?null:(o=(o=-1!==o.indexOf("*")?o.replace(/\*/g,t("head > title").text()).trim():o).replace(/[^a-zA-Z0-9_\u00A1-\uFFFF\.,\-_ !\(\)]/g,""))+(p(n.extension,n,e)||"")},p=function(t,n,e){return null==t?null:"function"==typeof t?t(n,e):t},h=function(n,e){return null===(n=p(n.title,n,e))?null:-1!==n.indexOf("*")?n.replace(/\*/g,t("head > title").text()||"Exported data"):n},b=function(n,e,o,i){return null===(o=p(o,e,n))?null:(e=t("caption",n.table().container()).eq(0),"*"===o?e.css("caption-side")!==i?null:e.length?e.text():"":o)},g=t("<textarea/>")[0],m=function(n,e){for(var o=t.extend(!0,{},{rows:null,columns:"",modifier:{search:"applied",order:"applied"},orthogonal:"display",stripHtml:!0,stripNewlines:!0,decodeEntities:!0,escapeExcelFormula:!1,trim:!0,format:{header:function(t){return u.stripData(t,o)},footer:function(t){return u.stripData(t,o)},body:function(t){return u.stripData(t,o)}},customizeData:null,customizeZip:null},e),i=(e=n.columns(o.columns).indexes().map((function(t){var e=n.column(t);return o.format.header(e.title(),t,e.header())})).toArray(),n.table().footer()?n.columns(o.columns).indexes().map((function(e){var i,s=n.column(e).footer(),r="";return s&&(r=((i=t(".dt-column-title",s)).length?i:t(s)).html()),o.format.footer(r,e,s)})).toArray():null),s=t.extend({},o.modifier),r=(n.select&&"function"==typeof n.select.info&&void 0===s.selected&&n.rows(o.rows,t.extend({selected:!0},s)).any()&&t.extend(s,{selected:!0}),n.rows(o.rows,s).indexes().toArray()),a=(r=n.cells(r,o.columns,{order:s.order})).render(o.orthogonal).toArray(),l=r.nodes().toArray(),c=r.indexes().toArray(),d=n.columns(o.columns).count(),f=[],p=0,h=0,b=0<d?a.length/d:0;h<b;h++){for(var g=[d],m=0;m<d;m++)g[m]=o.format.body(a[p],c[p].row,c[p].column,l[p]),p++;f[h]=g}return s={header:e,headerStructure:v(o.format.header,n.table().header.structure(o.columns)),footer:i,footerStructure:v(o.format.footer,n.table().footer.structure(o.columns)),body:f},o.customizeData&&o.customizeData(s),s};function v(t,n){for(var e=0;e<n.length;e++)for(var o=0;o<n[e].length;o++){var i=n[e][o];i&&(i.title=t(i.title,o,i.cell))}return n}function y(t,n){return t=new o.Api(t),n=n||t.init().buttons||o.defaults.buttons,new u(t,n).container()}return t.fn.dataTable.Buttons=u,t.fn.DataTable.Buttons=u,t(e).on("init.dt plugin-init.dt",(function(t,n){"dt"===t.namespace&&(t=n.oInit.buttons||o.defaults.buttons)&&!n._buttons&&new u(n,t).container()})),o.ext.feature.push({fnInit:y,cFeature:"B"}),o.feature&&o.feature.register("buttons",y),o}));