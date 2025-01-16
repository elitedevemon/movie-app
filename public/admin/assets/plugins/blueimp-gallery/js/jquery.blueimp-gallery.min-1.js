!function(t){"use strict";"function"==typeof define&&define.amd?define(["./blueimp-helper"],t):(window.blueimp=window.blueimp||{},window.blueimp.Gallery=t(window.blueimp.helper||window.jQuery))}((function(t){"use strict";function e(t,i){return void 0===document.body.style.maxHeight?null:this&&this.options===e.prototype.options?void(t&&t.length?(this.list=t,this.num=t.length,this.initOptions(i),this.initialize()):this.console.log("blueimp Gallery: No or empty list provided as first argument.",t)):new e(t,i)}return t.extend(e.prototype,{options:{container:"#blueimp-gallery",slidesContainer:"div",titleElement:"h3",displayClass:"blueimp-gallery-display",controlsClass:"blueimp-gallery-controls",singleClass:"blueimp-gallery-single",leftEdgeClass:"blueimp-gallery-left",rightEdgeClass:"blueimp-gallery-right",playingClass:"blueimp-gallery-playing",svgasimgClass:"blueimp-gallery-svgasimg",smilClass:"blueimp-gallery-smil",slideClass:"slide",slideActiveClass:"slide-active",slidePrevClass:"slide-prev",slideNextClass:"slide-next",slideLoadingClass:"slide-loading",slideErrorClass:"slide-error",slideContentClass:"slide-content",toggleClass:"toggle",prevClass:"prev",nextClass:"next",closeClass:"close",playPauseClass:"play-pause",typeProperty:"type",titleProperty:"title",altTextProperty:"alt",urlProperty:"href",srcsetProperty:"srcset",sizesProperty:"sizes",sourcesProperty:"sources",displayTransition:!0,clearSlides:!0,toggleControlsOnEnter:!0,toggleControlsOnSlideClick:!0,toggleSlideshowOnSpace:!0,enableKeyboardNavigation:!0,closeOnEscape:!0,closeOnSlideClick:!0,closeOnSwipeUpOrDown:!0,closeOnHashChange:!0,emulateTouchEvents:!0,stopTouchEventsPropagation:!1,hidePageScrollbars:!0,disableScroll:!0,carousel:!1,continuous:!0,unloadElements:!0,startSlideshow:!1,slideshowInterval:5e3,slideshowDirection:"ltr",index:0,preloadRange:2,transitionDuration:300,slideshowTransitionDuration:500,event:void 0,onopen:void 0,onopened:void 0,onslide:void 0,onslideend:void 0,onslidecomplete:void 0,onclose:void 0,onclosed:void 0},carouselOptions:{hidePageScrollbars:!1,toggleControlsOnEnter:!1,toggleSlideshowOnSpace:!1,enableKeyboardNavigation:!1,closeOnEscape:!1,closeOnSlideClick:!1,closeOnSwipeUpOrDown:!1,closeOnHashChange:!1,disableScroll:!1,startSlideshow:!0},console:window.console&&"function"==typeof window.console.log?window.console:{log:function(){}},support:function(e){var i,s={source:!!window.HTMLSourceElement,picture:!!window.HTMLPictureElement,svgasimg:document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"),smil:!!document.createElementNS&&/SVGAnimate/.test(document.createElementNS("http://www.w3.org/2000/svg","animate").toString()),touch:void 0!==window.ontouchstart||window.DocumentTouch&&document instanceof DocumentTouch},n={webkitTransition:{end:"webkitTransitionEnd",prefix:"-webkit-"},MozTransition:{end:"transitionend",prefix:"-moz-"},OTransition:{end:"otransitionend",prefix:"-o-"},transition:{end:"transitionend",prefix:""}};for(i in n)if(Object.prototype.hasOwnProperty.call(n,i)&&void 0!==e.style[i]){s.transition=n[i],s.transition.name=i;break}function o(){var t,i,n=s.transition;document.body.appendChild(e),n&&(t=n.name.slice(0,-9)+"ransform",void 0!==e.style[t]&&(e.style[t]="translateZ(0)",i=window.getComputedStyle(e).getPropertyValue(n.prefix+"transform"),s.transform={prefix:n.prefix,name:t,translate:!0,translateZ:!!i&&"none"!==i})),document.body.removeChild(e)}return document.body?o():t(document).on("DOMContentLoaded",o),s}(document.createElement("div")),requestAnimationFrame:window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame,cancelAnimationFrame:window.cancelAnimationFrame||window.webkitCancelRequestAnimationFrame||window.webkitCancelAnimationFrame||window.mozCancelAnimationFrame,initialize:function(){if(this.initStartIndex(),!1===this.initWidget())return!1;this.initEventListeners(),this.onslide(this.index),this.ontransitionend(),this.options.startSlideshow&&this.play()},slide:function(t,e){window.clearTimeout(this.timeout);var i,s,n,o=this.index;if(o!==t&&1!==this.num){if(e=e||this.options.transitionDuration,this.support.transform){for(this.options.continuous||(t=this.circle(t)),i=Math.abs(o-t)/(o-t),this.options.continuous&&(s=i,(i=-this.positions[this.circle(t)]/this.slideWidth)!==s&&(t=-i*this.num+t)),n=Math.abs(o-t)-1;n;)this.move(this.circle((o<t?t:o)- --n-1),this.slideWidth*i,0);t=this.circle(t),this.move(o,this.slideWidth*i,e),this.move(t,0,e),this.options.continuous&&this.move(this.circle(t-i),-this.slideWidth*i,0)}else t=this.circle(t),this.animate(o*-this.slideWidth,t*-this.slideWidth,e);this.onslide(t)}},getIndex:function(){return this.index},getNumber:function(){return this.num},prev:function(){(this.options.continuous||this.index)&&this.slide(this.index-1)},next:function(){(this.options.continuous||this.index<this.num-1)&&this.slide(this.index+1)},play:function(t){var e=this,i=this.index+("rtl"===this.options.slideshowDirection?-1:1);window.clearTimeout(this.timeout),this.interval=t||this.options.slideshowInterval,1<this.elements[this.index]&&(this.timeout=this.setTimeout(!this.requestAnimationFrame&&this.slide||function(t,i){e.animationFrameId=e.requestAnimationFrame.call(window,(function(){e.slide(t,i)}))},[i,this.options.slideshowTransitionDuration],this.interval)),this.container.addClass(this.options.playingClass),this.slidesContainer[0].setAttribute("aria-live","off"),this.playPauseElement.length&&this.playPauseElement[0].setAttribute("aria-pressed","true")},pause:function(){window.clearTimeout(this.timeout),this.interval=null,this.cancelAnimationFrame&&(this.cancelAnimationFrame.call(window,this.animationFrameId),this.animationFrameId=null),this.container.removeClass(this.options.playingClass),this.slidesContainer[0].setAttribute("aria-live","polite"),this.playPauseElement.length&&this.playPauseElement[0].setAttribute("aria-pressed","false")},add:function(t){var e;for(t.concat||(t=Array.prototype.slice.call(t)),this.list.concat||(this.list=Array.prototype.slice.call(this.list)),this.list=this.list.concat(t),this.num=this.list.length,2<this.num&&null===this.options.continuous&&(this.options.continuous=!0,this.container.removeClass(this.options.leftEdgeClass)),this.container.removeClass(this.options.rightEdgeClass).removeClass(this.options.singleClass),e=this.num-t.length;e<this.num;e+=1)this.addSlide(e),this.positionSlide(e);this.positions.length=this.num,this.initSlides(!0)},resetSlides:function(){this.slidesContainer.empty(),this.unloadAllSlides(),this.slides=[]},handleClose:function(){var t=this.options;this.destroyEventListeners(),this.pause(),this.container[0].style.display="none",this.container.removeClass(t.displayClass).removeClass(t.singleClass).removeClass(t.leftEdgeClass).removeClass(t.rightEdgeClass),t.hidePageScrollbars&&(document.body.style.overflow=this.bodyOverflowStyle),this.options.clearSlides&&this.resetSlides(),this.options.onclosed&&this.options.onclosed.call(this)},close:function(){var t=this;this.options.onclose&&this.options.onclose.call(this),this.support.transition&&this.options.displayTransition?(this.container.on(this.support.transition.end,(function e(i){i.target===t.container[0]&&(t.container.off(t.support.transition.end,e),t.handleClose())})),this.container.removeClass(this.options.displayClass)):this.handleClose()},circle:function(t){return(this.num+t%this.num)%this.num},move:function(t,e,i){this.translateX(t,e,i),this.positions[t]=e},translate:function(t,e,i,s){var n,o;this.slides[t]&&(n=this.slides[t].style,o=this.support.transition,t=this.support.transform,n[o.name+"Duration"]=s+"ms",n[t.name]="translate("+e+"px, "+i+"px)"+(t.translateZ?" translateZ(0)":""))},translateX:function(t,e,i){this.translate(t,e,0,i)},translateY:function(t,e,i){this.translate(t,0,e,i)},animate:function(t,e,i){var s,n,o;i?(s=this,n=(new Date).getTime(),o=window.setInterval((function(){var a=(new Date).getTime()-n;if(i<a)return s.slidesContainer[0].style.left=e+"px",s.ontransitionend(),void window.clearInterval(o);s.slidesContainer[0].style.left=(e-t)*(Math.floor(a/i*100)/100)+t+"px"}),4)):this.slidesContainer[0].style.left=e+"px"},preventDefault:function(t){t.preventDefault?t.preventDefault():t.returnValue=!1},stopPropagation:function(t){t.stopPropagation?t.stopPropagation():t.cancelBubble=!0},onresize:function(){this.initSlides(!0)},onhashchange:function(){this.options.closeOnHashChange&&this.close()},onmousedown:function(t){t.which&&1===t.which&&"VIDEO"!==t.target.nodeName&&"AUDIO"!==t.target.nodeName&&(t.preventDefault(),(t.originalEvent||t).touches=[{pageX:t.pageX,pageY:t.pageY}],this.ontouchstart(t))},onmousemove:function(t){this.touchStart&&((t.originalEvent||t).touches=[{pageX:t.pageX,pageY:t.pageY}],this.ontouchmove(t))},onmouseup:function(t){this.touchStart&&(this.ontouchend(t),delete this.touchStart)},onmouseout:function(e){var i,s;this.touchStart&&(i=e.target,(s=e.relatedTarget)&&(s===i||t.contains(i,s))||this.onmouseup(e))},ontouchstart:function(t){this.options.stopTouchEventsPropagation&&this.stopPropagation(t),t=(t.originalEvent||t).touches[0],this.touchStart={x:t.pageX,y:t.pageY,time:Date.now()},this.isScrolling=void 0,this.touchDelta={}},ontouchmove:function(t){this.options.stopTouchEventsPropagation&&this.stopPropagation(t);var e,i,s=(t.originalEvent||t).touches,n=s[0],o=(t.originalEvent||t).scale,a=this.index;if(!(1<s.length||o&&1!==o))if(this.options.disableScroll&&t.preventDefault(),this.touchDelta={x:n.pageX-this.touchStart.x,y:n.pageY-this.touchStart.y},e=this.touchDelta.x,void 0===this.isScrolling&&(this.isScrolling=this.isScrolling||Math.abs(e)<Math.abs(this.touchDelta.y)),this.isScrolling)this.options.carousel||this.translateY(a,this.touchDelta.y+this.positions[a],0);else for(t.preventDefault(),window.clearTimeout(this.timeout),this.options.continuous?i=[this.circle(a+1),a,this.circle(a-1)]:(this.touchDelta.x=e/=!a&&0<e||a===this.num-1&&e<0?Math.abs(e)/this.slideWidth+1:1,i=[a],a&&i.push(a-1),a<this.num-1&&i.unshift(a+1));i.length;)a=i.pop(),this.translateX(a,e+this.positions[a],0)},ontouchend:function(t){this.options.stopTouchEventsPropagation&&this.stopPropagation(t);var e=this.index,i=Math.abs(this.touchDelta.x),s=this.slideWidth,n=Math.ceil(this.options.transitionDuration*(1-i/s)/2),o=20<i,a=!e&&0<this.touchDelta.x||e===this.num-1&&this.touchDelta.x<0,l=!o&&this.options.closeOnSwipeUpOrDown&&20<Math.abs(this.touchDelta.y);this.options.continuous&&(a=!1),t=this.touchDelta.x<0?-1:1,this.isScrolling?l?this.close():this.translateY(e,0,n):o&&!a?(i=e+t,l=e-t,o=s*t,a=-s*t,this.options.continuous?(this.move(this.circle(i),o,0),this.move(this.circle(e-2*t),a,0)):0<=i&&i<this.num&&this.move(i,o,0),this.move(e,this.positions[e]+o,n),this.move(this.circle(l),this.positions[this.circle(l)]+o,n),e=this.circle(l),this.onslide(e)):this.options.continuous?(this.move(this.circle(e-1),-s,n),this.move(e,0,n),this.move(this.circle(e+1),s,n)):(e&&this.move(e-1,-s,n),this.move(e,0,n),e<this.num-1&&this.move(e+1,s,n))},ontouchcancel:function(t){this.touchStart&&(this.ontouchend(t),delete this.touchStart)},ontransitionend:function(t){var e=this.slides[this.index];t&&e!==t.target||(this.interval&&this.play(),this.setTimeout(this.options.onslideend,[this.index,e]))},oncomplete:function(e){var i,s=e.target||e.srcElement,n=s&&s.parentNode;s&&n&&(i=this.getNodeIndex(n),t(n).removeClass(this.options.slideLoadingClass),"error"===e.type?(t(n).addClass(this.options.slideErrorClass),this.elements[i]=3):this.elements[i]=2,s.clientHeight>this.container[0].clientHeight&&(s.style.maxHeight=this.container[0].clientHeight),this.interval&&this.slides[this.index]===n&&this.play(),this.setTimeout(this.options.onslidecomplete,[i,n]))},onload:function(t){this.oncomplete(t)},onerror:function(t){this.oncomplete(t)},onkeydown:function(t){switch(t.which||t.keyCode){case 13:this.options.toggleControlsOnEnter&&(this.preventDefault(t),this.toggleControls());break;case 27:this.options.closeOnEscape&&(this.close(),t.stopImmediatePropagation());break;case 32:this.options.toggleSlideshowOnSpace&&(this.preventDefault(t),this.toggleSlideshow());break;case 37:this.options.enableKeyboardNavigation&&(this.preventDefault(t),this.prev());break;case 39:this.options.enableKeyboardNavigation&&(this.preventDefault(t),this.next())}},handleClick:function(e){var i=this.options,s=e.target||e.srcElement,n=s.parentNode;function o(e){return t(s).hasClass(e)||t(n).hasClass(e)}o(i.toggleClass)?(this.preventDefault(e),this.toggleControls()):o(i.prevClass)?(this.preventDefault(e),this.prev()):o(i.nextClass)?(this.preventDefault(e),this.next()):o(i.closeClass)?(this.preventDefault(e),this.close()):o(i.playPauseClass)?(this.preventDefault(e),this.toggleSlideshow()):n===this.slidesContainer[0]?i.closeOnSlideClick?(this.preventDefault(e),this.close()):i.toggleControlsOnSlideClick&&(this.preventDefault(e),this.toggleControls()):n.parentNode&&n.parentNode===this.slidesContainer[0]&&i.toggleControlsOnSlideClick&&(this.preventDefault(e),this.toggleControls())},onclick:function(t){if(!(this.options.emulateTouchEvents&&this.touchDelta&&(20<Math.abs(this.touchDelta.x)||20<Math.abs(this.touchDelta.y))))return this.handleClick(t);delete this.touchDelta},updateEdgeClasses:function(t){t?this.container.removeClass(this.options.leftEdgeClass):this.container.addClass(this.options.leftEdgeClass),t===this.num-1?this.container.addClass(this.options.rightEdgeClass):this.container.removeClass(this.options.rightEdgeClass)},updateActiveSlide:function(e,i){for(var s,n,o=this.slides,a=this.options,l=[{index:i,method:"addClass",hidden:!1},{index:e,method:"removeClass",hidden:!0}];l.length;)s=l.pop(),t(o[s.index])[s.method](a.slideActiveClass),n=this.circle(s.index-1),(a.continuous||n<s.index)&&t(o[n])[s.method](a.slidePrevClass),n=this.circle(s.index+1),(a.continuous||n>s.index)&&t(o[n])[s.method](a.slideNextClass);this.slides[e].setAttribute("aria-hidden","true"),this.slides[i].removeAttribute("aria-hidden")},handleSlide:function(t,e){this.options.continuous||this.updateEdgeClasses(e),this.updateActiveSlide(t,e),this.loadElements(e),this.options.unloadElements&&this.unloadElements(t,e),this.setTitle(e)},onslide:function(t){this.handleSlide(this.index,t),this.index=t,this.setTimeout(this.options.onslide,[t,this.slides[t]])},setTitle:function(t){var e;t=(e=this.slides[t].firstChild).title||e.alt;(e=this.titleElement).length&&(this.titleElement.empty(),t&&e[0].appendChild(document.createTextNode(t)))},setTimeout:function(t,e,i){var s=this;return t&&window.setTimeout((function(){t.apply(s,e||[])}),i||0)},imageFactory:function(e,i){var s,n,o,a,l,r,h,d,c=this.options,u=this,p=e,m=this.imagePrototype.cloneNode(!1);if("string"!=typeof p&&(p=this.getItemProperty(e,c.urlProperty),o=this.support.picture&&this.support.source&&this.getItemProperty(e,c.sourcesProperty),a=this.getItemProperty(e,c.srcsetProperty),l=this.getItemProperty(e,c.sizesProperty),r=this.getItemProperty(e,c.titleProperty),h=this.getItemProperty(e,c.altTextProperty)||r),m.draggable=!1,r&&(m.title=r),h&&(m.alt=h),t(m).on("load error",(function e(o){if(!n){if(!(o={type:o.type,target:s||m}).target.parentNode)return u.setTimeout(e,[o]);n=!0,t(m).off("load error",e),i(o)}})),o&&o.length){for(s=this.picturePrototype.cloneNode(!1),d=0;d<o.length;d+=1)s.appendChild(t.extend(this.sourcePrototype.cloneNode(!1),o[d]));s.appendChild(m),t(s).addClass(c.toggleClass)}return a&&(l&&(m.sizes=l),m.srcset=a),m.src=p,s||m},createElement:function(e,i){var s=(s=e&&this.getItemProperty(e,this.options.typeProperty))&&this[s.split("/")[0]+"Factory"]||this.imageFactory;return(s=e&&s.call(this,e,i))||(s=this.elementPrototype.cloneNode(!1),this.setTimeout(i,[{type:"error",target:s}])),t(s).addClass(this.options.slideContentClass),s},iteratePreloadRange:function(t,e){for(var i=this.num,s=this.options,n=Math.min(i,2*s.preloadRange+1),o=t,a=0;a<n;a+=1){if((o+=a*(a%2==0?-1:1))<0||i<=o){if(!s.continuous)continue;o=this.circle(o)}e.call(this,o)}},loadElement:function(e){this.elements[e]||(this.slides[e].firstChild?this.elements[e]=t(this.slides[e]).hasClass(this.options.slideErrorClass)?3:2:(this.elements[e]=1,t(this.slides[e]).addClass(this.options.slideLoadingClass),this.slides[e].appendChild(this.createElement(this.list[e],this.proxyListener))))},loadElements:function(t){this.iteratePreloadRange(t,this.loadElement)},unloadElements:function(t,e){var i=this.options.preloadRange;this.iteratePreloadRange(t,(function(t){var s=Math.abs(t-e);i<s&&s+i<this.num&&(this.unloadSlide(t),delete this.elements[t])}))},addSlide:function(t){var e=this.slidePrototype.cloneNode(!1);e.setAttribute("data-index",t),e.setAttribute("aria-hidden","true"),this.slidesContainer[0].appendChild(e),this.slides.push(e)},positionSlide:function(t){var e=this.slides[t];e.style.width=this.slideWidth+"px",this.support.transform&&(e.style.left=t*-this.slideWidth+"px",this.move(t,this.index>t?-this.slideWidth:this.index<t?this.slideWidth:0,0))},initSlides:function(e){var i,s;for(e||(this.positions=[],this.positions.length=this.num,this.elements={},this.picturePrototype=this.support.picture&&document.createElement("picture"),this.sourcePrototype=this.support.source&&document.createElement("source"),this.imagePrototype=document.createElement("img"),this.elementPrototype=document.createElement("div"),this.slidePrototype=this.elementPrototype.cloneNode(!1),t(this.slidePrototype).addClass(this.options.slideClass),this.slides=this.slidesContainer[0].children,i=this.options.clearSlides||this.slides.length!==this.num),this.slideWidth=this.container[0].clientWidth,this.slideHeight=this.container[0].clientHeight,this.slidesContainer[0].style.width=this.num*this.slideWidth+"px",i&&this.resetSlides(),s=0;s<this.num;s+=1)i&&this.addSlide(s),this.positionSlide(s);this.options.continuous&&this.support.transform&&(this.move(this.circle(this.index-1),-this.slideWidth,0),this.move(this.circle(this.index+1),this.slideWidth,0)),this.support.transform||(this.slidesContainer[0].style.left=this.index*-this.slideWidth+"px")},unloadSlide:function(t){var e=this.slides[t];null!==(t=e.firstChild)&&e.removeChild(t)},unloadAllSlides:function(){for(var t=0,e=this.slides.length;t<e;t++)this.unloadSlide(t)},toggleControls:function(){var t=this.options.controlsClass;this.container.hasClass(t)?this.container.removeClass(t):this.container.addClass(t)},toggleSlideshow:function(){this.interval?this.pause():this.play()},getNodeIndex:function(t){return parseInt(t.getAttribute("data-index"),10)},getNestedProperty:function(t,e){return e.replace(/\[(?:'([^']+)'|"([^"]+)"|(\d+))\]|(?:(?:^|\.)([^\.\[]+))/g,(function(e,i,s,n,o){n=o||i||s||n&&parseInt(n,10),e&&t&&(t=t[n])})),t},getDataProperty:function(e,i){var s;if(e.dataset?(s=i.replace(/-([a-z])/g,(function(t,e){return e.toUpperCase()})),s=e.dataset[s]):e.getAttribute&&(s=e.getAttribute("data-"+i.replace(/([A-Z])/g,"-$1").toLowerCase())),"string"==typeof s){if(/^(true|false|null|-?\d+(\.\d+)?|\{[\s\S]*\}|\[[\s\S]*\])$/.test(s))try{return t.parseJSON(s)}catch(t){}return s}},getItemProperty:function(t,e){var i=this.getDataProperty(t,e);return void 0===(i=void 0===i?t[e]:i)?this.getNestedProperty(t,e):i},initStartIndex:function(){var t,e=this.options.index,i=this.options.urlProperty;if(e&&"number"!=typeof e)for(t=0;t<this.num;t+=1)if(this.list[t]===e||this.getItemProperty(this.list[t],i)===this.getItemProperty(e,i)){e=t;break}this.index=this.circle(parseInt(e,10)||0)},initEventListeners:function(){var e=this,i=this.slidesContainer;function s(t){var i=e.support.transition&&e.support.transition.end===t.type?"transitionend":t.type;e["on"+i](t)}t(window).on("resize",s),t(window).on("hashchange",s),t(document.body).on("keydown",s),this.container.on("click",s),this.support.touch?i.on("touchstart touchmove touchend touchcancel",s):this.options.emulateTouchEvents&&this.support.transition&&i.on("mousedown mousemove mouseup mouseout",s),this.support.transition&&i.on(this.support.transition.end,s),this.proxyListener=s},destroyEventListeners:function(){var e=this.slidesContainer,i=this.proxyListener;t(window).off("resize",i),t(document.body).off("keydown",i),this.container.off("click",i),this.support.touch?e.off("touchstart touchmove touchend touchcancel",i):this.options.emulateTouchEvents&&this.support.transition&&e.off("mousedown mousemove mouseup mouseout",i),this.support.transition&&e.off(this.support.transition.end,i)},handleOpen:function(){this.options.onopened&&this.options.onopened.call(this)},initWidget:function(){var e=this;return this.container=t(this.options.container),this.container.length?(this.slidesContainer=this.container.find(this.options.slidesContainer).first(),this.slidesContainer.length?(this.titleElement=this.container.find(this.options.titleElement).first(),this.playPauseElement=this.container.find("."+this.options.playPauseClass).first(),1===this.num&&this.container.addClass(this.options.singleClass),this.support.svgasimg&&this.container.addClass(this.options.svgasimgClass),this.support.smil&&this.container.addClass(this.options.smilClass),this.options.onopen&&this.options.onopen.call(this),this.support.transition&&this.options.displayTransition?this.container.on(this.support.transition.end,(function t(i){i.target===e.container[0]&&(e.container.off(e.support.transition.end,t),e.handleOpen())})):this.handleOpen(),this.options.hidePageScrollbars&&(this.bodyOverflowStyle=document.body.style.overflow,document.body.style.overflow="hidden"),this.container[0].style.display="block",this.initSlides(),void this.container.addClass(this.options.displayClass)):(this.console.log("blueimp Gallery: Slides container not found.",this.options.slidesContainer),!1)):(this.console.log("blueimp Gallery: Widget container not found.",this.options.container),!1)},initOptions:function(e){this.options=t.extend({},this.options),(e&&e.carousel||this.options.carousel&&(!e||!1!==e.carousel))&&t.extend(this.options,this.carouselOptions),t.extend(this.options,e),this.num<3&&(this.options.continuous=!!this.options.continuous&&null),this.support.transition||(this.options.emulateTouchEvents=!1),this.options.event&&this.preventDefault(this.options.event)}}),e})),function(t){"use strict";"function"==typeof define&&define.amd?define(["./blueimp-helper","./blueimp-gallery"],t):t(window.blueimp.helper||window.jQuery,window.blueimp.Gallery)}((function(t,e){"use strict";var i=e.prototype;t.extend(i.options,{fullscreen:!1});var s=i.initialize,n=i.close;return t.extend(i,{getFullScreenElement:function(){return document.fullscreenElement||document.webkitFullscreenElement||document.mozFullScreenElement||document.msFullscreenElement},requestFullScreen:function(t){t.requestFullscreen?t.requestFullscreen():t.webkitRequestFullscreen?t.webkitRequestFullscreen():t.mozRequestFullScreen?t.mozRequestFullScreen():t.msRequestFullscreen&&t.msRequestFullscreen()},exitFullScreen:function(){document.exitFullscreen?document.exitFullscreen():document.webkitCancelFullScreen?document.webkitCancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.msExitFullscreen&&document.msExitFullscreen()},initialize:function(){s.call(this),this.options.fullscreen&&!this.getFullScreenElement()&&this.requestFullScreen(this.container[0])},close:function(){this.getFullScreenElement()===this.container[0]&&this.exitFullScreen(),n.call(this)}}),e})),function(t){"use strict";"function"==typeof define&&define.amd?define(["./blueimp-helper","./blueimp-gallery"],t):t(window.blueimp.helper||window.jQuery,window.blueimp.Gallery)}((function(t,e){"use strict";var i=e.prototype;t.extend(i.options,{indicatorContainer:"ol",activeIndicatorClass:"active",thumbnailProperty:"thumbnail",thumbnailIndicators:!0});var s=i.initSlides,n=i.addSlide,o=i.resetSlides,a=i.handleClick,l=i.handleSlide,r=i.handleClose;return t.extend(i,{createIndicator:function(e){var i,s,n=this.indicatorPrototype.cloneNode(!1),o=this.getItemProperty(e,this.options.titleProperty),a=this.options.thumbnailProperty;return this.options.thumbnailIndicators&&(i=void 0===(i=a?this.getItemProperty(e,a):i)&&(s=e.getElementsByTagName&&t(e).find("img")[0])?s.src:i)&&(n.style.backgroundImage='url("'+i+'")'),o&&(n.title=o),n.setAttribute("role","link"),n},addIndicator:function(t){var e;this.indicatorContainer.length&&((e=this.createIndicator(this.list[t])).setAttribute("data-index",t),this.indicatorContainer[0].appendChild(e),this.indicators.push(e))},setActiveIndicator:function(e){this.indicators&&(this.activeIndicator&&this.activeIndicator.removeClass(this.options.activeIndicatorClass),this.activeIndicator=t(this.indicators[e]),this.activeIndicator.addClass(this.options.activeIndicatorClass))},initSlides:function(t){t||(this.indicatorContainer=this.container.find(this.options.indicatorContainer),this.indicatorContainer.length&&(this.indicatorPrototype=document.createElement("li"),this.indicators=this.indicatorContainer[0].children)),s.call(this,t)},addSlide:function(t){n.call(this,t),this.addIndicator(t)},resetSlides:function(){o.call(this),this.indicatorContainer.empty(),this.indicators=[]},handleClick:function(t){var e=t.target||t.srcElement,i=e.parentNode;if(i===this.indicatorContainer[0])this.preventDefault(t),this.slide(this.getNodeIndex(e));else{if(i.parentNode!==this.indicatorContainer[0])return a.call(this,t);this.preventDefault(t),this.slide(this.getNodeIndex(i))}},handleSlide:function(t,e){l.call(this,t,e),this.setActiveIndicator(e)},handleClose:function(){this.activeIndicator&&this.activeIndicator.removeClass(this.options.activeIndicatorClass),r.call(this)}}),e})),function(t){"use strict";"function"==typeof define&&define.amd?define(["./blueimp-helper","./blueimp-gallery"],t):t(window.blueimp.helper||window.jQuery,window.blueimp.Gallery)}((function(t,e){"use strict";var i=e.prototype;t.extend(i.options,{videoContentClass:"video-content",videoLoadingClass:"video-loading",videoPlayingClass:"video-playing",videoIframeClass:"video-iframe",videoCoverClass:"video-cover",videoPlayClass:"video-play",videoPlaysInline:!0,videoPreloadProperty:"preload",videoPosterProperty:"poster"});var s=i.handleSlide;return t.extend(i,{handleSlide:function(t,e){s.call(this,t,e),this.setTimeout((function(){this.activeVideo&&this.activeVideo.pause()}))},videoFactory:function(e,i,s){var n,o,a,l=this,r=this.options,h=this.elementPrototype.cloneNode(!1),d=t(h),c=[{type:"error",target:h}],u=s||document.createElement("video"),p=this.elementPrototype.cloneNode(!1),m=document.createElement("a"),y=this.getItemProperty(e,r.urlProperty),f=this.getItemProperty(e,r.sourcesProperty),g=this.getItemProperty(e,r.titleProperty),v=this.getItemProperty(e,r.videoPosterProperty),C=[m];if(d.addClass(r.videoContentClass),t(m).addClass(r.videoPlayClass),t(p).addClass(r.videoCoverClass).hasClass(r.toggleClass)||C.push(p),p.draggable=!1,g&&(h.title=g,m.setAttribute("aria-label",g)),v&&(p.style.backgroundImage='url("'+v+'")'),u.setAttribute?r.videoPlaysInline&&u.setAttribute("playsinline",""):d.addClass(r.videoIframeClass),u.preload=this.getItemProperty(e,r.videoPreloadProperty)||"none",this.support.source&&f)for(a=0;a<f.length;a+=1)u.appendChild(t.extend(this.sourcePrototype.cloneNode(!1),f[a]));return y&&(u.src=y),m.href=y||f&&f.length&&f[0].src,u.play&&u.pause&&((s||t(u)).on("error",(function(){l.setTimeout(i,c)})).on("pause",(function(){u.seeking||(o=!1,d.removeClass(l.options.videoLoadingClass).removeClass(l.options.videoPlayingClass),n&&l.container.addClass(l.options.controlsClass),u.controls=!1,u===l.activeVideo&&delete l.activeVideo,l.interval&&l.play())})).on("playing",(function(){o=!1,p.removeAttribute("style"),d.removeClass(l.options.videoLoadingClass).addClass(l.options.videoPlayingClass)})).on("play",(function(){window.clearTimeout(l.timeout),o=!0,d.addClass(l.options.videoLoadingClass),l.container.hasClass(l.options.controlsClass)?(n=!0,l.container.removeClass(l.options.controlsClass)):n=!1,u.controls=!0,l.activeVideo=u})),t(C).on("click",(function(t){l.preventDefault(t),l.activeVideo=u,o?u.pause():u.play()})),h.appendChild(s&&s.element||u)),h.appendChild(p),h.appendChild(m),this.setTimeout(i,[{type:"load",target:h}]),h}}),e})),function(t){"use strict";"function"==typeof define&&define.amd?define(["./blueimp-helper","./blueimp-gallery-video"],t):t(window.blueimp.helper||window.jQuery,window.blueimp.Gallery)}((function(t,e){"use strict";if(!window.postMessage)return e;var i=e.prototype;t.extend(i.options,{vimeoVideoIdProperty:"vimeo",vimeoPlayerUrl:"https://player.vimeo.com/video/VIDEO_ID?api=1&player_id=PLAYER_ID",vimeoPlayerIdPrefix:"vimeo-player-",vimeoClickToPlay:!1});var s=i.textFactory||i.imageFactory,n=function(t,e,i,s){this.url=t,this.videoId=e,this.playerId=i,this.clickToPlay=s,this.element=document.createElement("div"),this.listeners={}},o=0;return t.extend(n.prototype,{on:function(t,e){return this.listeners[t]=e,this},loadAPI:function(){var e,i,s=this,n="https://f.vimeocdn.com/js/froogaloop2.min.js",o=document.getElementsByTagName("script"),a=o.length;function l(){!i&&s.playOnReady&&s.play(),i=!0}for(;a;)if(o[--a].src===n){e=o[a];break}e||((e=document.createElement("script")).src=n),t(e).on("load",l),o[0].parentNode.insertBefore(e,o[0]),/loaded|complete/.test(e.readyState)&&l()},onReady:function(){var t=this;this.ready=!0,this.player.addEvent("play",(function(){t.hasPlayed=!0,t.onPlaying()})),this.player.addEvent("pause",(function(){t.onPause()})),this.player.addEvent("finish",(function(){t.onPause()})),this.playOnReady&&this.play()},onPlaying:function(){this.playStatus<2&&(this.listeners.playing(),this.playStatus=2)},onPause:function(){this.listeners.pause(),delete this.playStatus},insertIframe:function(){var t=document.createElement("iframe");t.src=this.url.replace("VIDEO_ID",this.videoId).replace("PLAYER_ID",this.playerId),t.id=this.playerId,t.allow="autoplay",this.element.parentNode.replaceChild(t,this.element),this.element=t},play:function(){var t=this;this.playStatus||(this.listeners.play(),this.playStatus=1),this.ready?!this.hasPlayed&&(this.clickToPlay||window.navigator&&/iP(hone|od|ad)/.test(window.navigator.platform))?this.onPlaying():this.player.api("play"):(this.playOnReady=!0,window.$f?this.player||(this.insertIframe(),this.player=$f(this.element),this.player.addEvent("ready",(function(){t.onReady()}))):this.loadAPI())},pause:function(){this.ready?this.player.api("pause"):this.playStatus&&(delete this.playOnReady,this.listeners.pause(),delete this.playStatus)}}),t.extend(i,{VimeoPlayer:n,textFactory:function(t,e){var i=this.options,a=this.getItemProperty(t,i.vimeoVideoIdProperty);return a?(void 0===this.getItemProperty(t,i.urlProperty)&&(t[i.urlProperty]="https://vimeo.com/"+a),o+=1,this.videoFactory(t,e,new n(i.vimeoPlayerUrl,a,i.vimeoPlayerIdPrefix+o,i.vimeoClickToPlay))):s.call(this,t,e)}}),e})),function(t){"use strict";"function"==typeof define&&define.amd?define(["./blueimp-helper","./blueimp-gallery-video"],t):t(window.blueimp.helper||window.jQuery,window.blueimp.Gallery)}((function(t,e){"use strict";if(!window.postMessage)return e;var i=e.prototype;t.extend(i.options,{youTubeVideoIdProperty:"youtube",youTubePlayerVars:{wmode:"transparent"},youTubeClickToPlay:!1});var s=i.textFactory||i.imageFactory,n=function(t,e,i){this.videoId=t,this.playerVars=e,this.clickToPlay=i,this.element=document.createElement("div"),this.listeners={}};return t.extend(n.prototype,{on:function(t,e){return this.listeners[t]=e,this},loadAPI:function(){var t,e=this,i=window.onYouTubeIframeAPIReady,s="https://www.youtube.com/iframe_api",n=document.getElementsByTagName("script"),o=n.length;for(window.onYouTubeIframeAPIReady=function(){i&&i.apply(this),e.playOnReady&&e.play()};o;)if(n[--o].src===s)return;(t=document.createElement("script")).src=s,n[0].parentNode.insertBefore(t,n[0])},onReady:function(){this.ready=!0,this.playOnReady&&this.play()},onPlaying:function(){this.playStatus<2&&(this.listeners.playing(),this.playStatus=2)},onPause:function(){this.listeners.pause(),delete this.playStatus},onStateChange:function(t){switch(window.clearTimeout(this.pauseTimeout),t.data){case YT.PlayerState.PLAYING:this.hasPlayed=!0,this.onPlaying();break;case YT.PlayerState.UNSTARTED:case YT.PlayerState.PAUSED:this.pauseTimeout=i.setTimeout.call(this,this.onPause,null,500);break;case YT.PlayerState.ENDED:this.onPause()}},onError:function(t){this.listeners.error(t)},play:function(){var t=this;this.playStatus||(this.listeners.play(),this.playStatus=1),this.ready?!this.hasPlayed&&(this.clickToPlay||window.navigator&&/iP(hone|od|ad)/.test(window.navigator.platform))?this.onPlaying():this.player.playVideo():(this.playOnReady=!0,window.YT&&YT.Player?this.player||(this.player=new YT.Player(this.element,{videoId:this.videoId,playerVars:this.playerVars,events:{onReady:function(){t.onReady()},onStateChange:function(e){t.onStateChange(e)},onError:function(e){t.onError(e)}}})):this.loadAPI())},pause:function(){this.ready?this.player.pauseVideo():this.playStatus&&(delete this.playOnReady,this.listeners.pause(),delete this.playStatus)}}),t.extend(i,{YouTubePlayer:n,textFactory:function(t,e){var i=this.options,o=this.getItemProperty(t,i.youTubeVideoIdProperty);return o?(void 0===this.getItemProperty(t,i.urlProperty)&&(t[i.urlProperty]="https://www.youtube.com/watch?v="+o),void 0===this.getItemProperty(t,i.videoPosterProperty)&&(t[i.videoPosterProperty]="https://img.youtube.com/vi/"+o+"/maxresdefault.jpg"),this.videoFactory(t,e,new n(o,i.youTubePlayerVars,i.youTubeClickToPlay))):s.call(this,t,e)}}),e})),function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery","./blueimp-gallery"],t):t(window.jQuery,window.blueimp.Gallery)}((function(t,e){"use strict";t(document).on("click","[data-gallery]",(function(i){var s=t(this).data("gallery"),n=(o=t(s)).length&&o||t(e.prototype.options.container),o={onopen:function(){n.data("gallery",this).trigger("open")},onopened:function(){n.trigger("opened")},onslide:function(){n.trigger("slide",arguments)},onslideend:function(){n.trigger("slideend",arguments)},onslidecomplete:function(){n.trigger("slidecomplete",arguments)},onclose:function(){n.trigger("close")},onclosed:function(){n.trigger("closed").removeData("gallery")}};o=t.extend(n.data(),{container:n[0],index:this,event:i},o),s=t(this).closest("[data-gallery-group], body").find('[data-gallery="'+s+'"]');return o.filter&&(s=s.filter(o.filter)),new e(s,o)}))}));