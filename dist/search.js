!function(n){var r={};function o(e){if(r[e])return r[e].exports;var t=r[e]={i:e,l:!1,exports:{}};return n[e].call(t.exports,t,t.exports,o),t.l=!0,t.exports}o.m=n,o.c=r,o.d=function(e,t,n){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(t,e){if(1&e&&(t=o(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)o.d(n,r,function(e){return t[e]}.bind(null,r));return n},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=18)}({0:function(e,t,n){
/*! lozad.js - v1.8.0 - 2019-01-31
* https://github.com/ApoorvSaxena/lozad.js
* Copyright (c) 2019 Apoorv Saxena; Licensed MIT */
e.exports=function(){"use strict";var l=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e},a="undefined"!=typeof document&&document.documentMode,g={rootMargin:"0px",threshold:0,load:function(e){if("picture"===e.nodeName.toLowerCase()){var t=document.createElement("img");a&&e.getAttribute("data-iesrc")&&(t.src=e.getAttribute("data-iesrc")),e.getAttribute("data-alt")&&(t.alt=e.getAttribute("data-alt")),e.appendChild(t)}if("video"===e.nodeName.toLowerCase()&&!e.getAttribute("data-src")&&e.children){for(var n=e.children,r=void 0,o=0;o<=n.length-1;o++)(r=n[o].getAttribute("data-src"))&&(n[o].src=r);e.load()}e.getAttribute("data-src")&&(e.src=e.getAttribute("data-src")),e.getAttribute("data-srcset")&&e.setAttribute("srcset",e.getAttribute("data-srcset")),e.getAttribute("data-background-image")&&(e.style.backgroundImage="url('"+e.getAttribute("data-background-image")+"')"),e.getAttribute("data-toggle-class")&&e.classList.toggle(e.getAttribute("data-toggle-class"))},loaded:function(){}};function m(e){e.setAttribute("data-loaded",!0)}var f=function(e){return"true"===e.getAttribute("data-loaded")};return function(){var n,r,o=0<arguments.length&&void 0!==arguments[0]?arguments[0]:".lozad",e=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{},t=l({},g,e),a=t.root,c=t.rootMargin,i=t.threshold,u=t.load,d=t.loaded,s=void 0;return window.IntersectionObserver&&(s=new IntersectionObserver((n=u,r=d,function(e,t){e.forEach(function(e){(0<e.intersectionRatio||e.isIntersecting)&&(t.unobserve(e.target),f(e.target)||(n(e.target),m(e.target),r(e.target)))})}),{root:a,rootMargin:c,threshold:i})),{observe:function(){for(var e=function(e){var t=1<arguments.length&&void 0!==arguments[1]?arguments[1]:document;return e instanceof Element?[e]:e instanceof NodeList?e:t.querySelectorAll(e)}(o,a),t=0;t<e.length;t++)f(e[t])||(s?s.observe(e[t]):(u(e[t]),m(e[t]),d(e[t])))},triggerLoad:function(e){f(e)||(u(e),m(e),d(e))},observer:s}}}()},1:function(e,t,n){"use strict";var u=function(e,t){return!!e.className.match(new RegExp("(\\s|^)"+t+"(\\s|$)"))},r=function(e,t){u(e,t)||(e.className+=" "+t)},o=function(e,t){if(u(e,t)){var n=new RegExp("(\\s|^)"+t+"(\\s|$)");e.className=e.className.replace(n," ")}},a=function(e,t){document.getElementById(e).setAttribute("aria-hidden",t)},d=function(e,t){for(var n=0;n<e.length;n++){e[n].setAttribute("tabindex",t)}},s=function(){var e=document.getElementsByTagName("body")[0],t=document.getElementById("primary").getElementsByTagName("a");u(e,"menu-open")?(o(e,"menu-open"),a("primary","true"),d(t,"-1")):(r(e,"menu-open"),a("primary","false"),d(t,"0"))},l=function(){var e=document.getElementsByTagName("body")[0],t=document.querySelector("form.search-form input");console.log(t),u(e,"search-open")?(o(e,"search-open"),a("search-form-container","true"),d(t,"-1"),t.blur()):(r(e,"search-open"),a("search-form-container","false"),d(t,"0"),t.focus())};n(0);document.addEventListener("readystatechange",function(){var n,r,o,a,c,i,e;"complete"===document.readyState&&(a=document.getElementsByTagName("body")[0],c=document.getElementById("menu-toggle"),i=document.getElementById("primary"),e=document.getElementById("primary").getElementsByTagName("a"),d(e,"-1"),c.addEventListener("click",s),document.addEventListener("keydown",function(e){u(a,"menu-open")&&"Escape"===e.key&&s()}),document.addEventListener("click",function(e){var t=!i.contains(e.target)&&!c.contains(e.target);u(a,"menu-open")&&t&&s()}),n=document.getElementsByTagName("body")[0],r=document.getElementById("search-toggle"),o=document.getElementById("search-form-container"),r.addEventListener("click",l),document.addEventListener("keydown",function(e){u(n,"search-open")&&"Escape"===e.key&&l()}),document.addEventListener("click",function(e){var t=!o.contains(e.target)&&!r.contains(e.target);u(n,"search-open")&&t&&l()}))})},18:function(e,t,n){n(19),e.exports=n(20)},19:function(e,t,n){"use strict";n.r(t);n(1)},20:function(e,t,n){}});