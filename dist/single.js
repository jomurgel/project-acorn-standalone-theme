!function(t){var r={};function o(e){if(r[e])return r[e].exports;var n=r[e]={i:e,l:!1,exports:{}};return t[e].call(n.exports,n,n.exports,o),n.l=!0,n.exports}o.m=t,o.c=r,o.d=function(e,n,t){o.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:t})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(n,e){if(1&e&&(n=o(n)),8&e)return n;if(4&e&&"object"==typeof n&&n&&n.__esModule)return n;var t=Object.create(null);if(o.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:n}),2&e&&"string"!=typeof n)for(var r in n)o.d(t,r,function(e){return n[e]}.bind(null,r));return t},o.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(n,"a",n),n},o.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},o.p="",o(o.s=20)}({0:function(e,n,t){"use strict";var c=function(e,n){return!!e.className.match(new RegExp("(\\s|^)"+n+"(\\s|$)"))},r=function(e,n){c(e,n)||(e.className+=" "+n)},u=function(e,n){if(c(e,n)){var t=new RegExp("(\\s|^)"+n+"(\\s|$)");e.className=e.className.replace(t," ")}},i=function(e,n){document.getElementById(e).setAttribute("aria-hidden",n)},d=function(e,n){for(var t=0;t<e.length;t++){e[t].setAttribute("tabindex",n)}},s=function(){var e=document.getElementsByTagName("body")[0],n=document.getElementById("primary").getElementsByTagName("a");c(e,"menu-open")?(u(e,"menu-open"),i("primary","true"),d(n,"-1")):(r(e,"menu-open"),i("primary","false"),d(n,"0"))},a=function(){var e=document.getElementsByTagName("body")[0],n=document.querySelector("form.search-form input");console.log(n),c(e,"search-open")?(u(e,"search-open"),i("search-form-container","true"),d(n,"-1"),n.blur()):(r(e,"search-open"),i("search-form-container","false"),d(n,"0"),n.focus())};document.addEventListener("readystatechange",function(){"complete"===document.readyState&&(function(){var t=document.getElementsByTagName("body")[0],r=document.getElementById("menu-toggle"),o=document.getElementById("primary");if(null!==o){var a=document.getElementById("primary").getElementsByTagName("a");c(t,"nav-is-visible")?d(a,"0"):d(a,"-1"),r.addEventListener("click",s),document.addEventListener("keydown",function(e){c(t,"menu-open")&&"Escape"===e.key&&s()}),document.addEventListener("click",function(e){var n=!o.contains(e.target)&&!r.contains(e.target);c(t,"menu-open")&&n&&s()}),window.addEventListener("resize",function(e){var n=window.innerWidth;c(t,"nav-is-visible")&&1024<n&&(u(t,"menu-open"),i("primary","true"),d(a,"-1"))})}}(),function(){var t=document.getElementById("search-toggle");if(null!==t){var r=document.getElementsByTagName("body")[0],o=document.getElementById("search-form-container");t.addEventListener("click",a),document.addEventListener("keydown",function(e){c(r,"search-open")&&"Escape"===e.key&&a()}),document.addEventListener("click",function(e){var n=!o.contains(e.target)&&!t.contains(e.target);c(r,"search-open")&&n&&a()})}}())})},20:function(e,n,t){t(21),e.exports=t(22)},21:function(e,n,t){"use strict";t.r(n);t(0)},22:function(e,n,t){}});