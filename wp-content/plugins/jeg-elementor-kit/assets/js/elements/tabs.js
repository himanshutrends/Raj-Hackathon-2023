!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=0)}([function(e,t){class n extends elementorModules.frontend.handlers.Base{getDefaultSettings(){return{selectors:{wrapper:".jeg-elementor-kit.jkit-tabs",tab:"li.tab-nav",content:".tab-content-list"}}}getDefaultElements(){const e=this.getSettings("selectors");return{$wrapper:this.$element.find(e.wrapper),$tab:this.$element.find(e.tab),$content:this.$element.find(e.content)}}bindEvents(){const e=this,t="yes"===e.$element.find(".tab-nav-list").data("toggle");t&&e.$element.find("li.tab-nav.active").find(".tab-content").slideDown(),e.elements.$tab.on("click",(function(){if(jQuery(this).hasClass("active"))return;const n=jQuery(this).data("tab");e.elements.$tab.removeClass("active"),t&&(e.elements.$tab.find(".tab-content").slideUp(),jQuery(this).find(".tab-content").slideDown()),jQuery(this).addClass("active"),e.elements.$content.find(".tab-content").removeClass("active"),e.elements.$content.find("."+n).addClass("active")}))}}jQuery(window).on("elementor/frontend/init",(()=>{elementorFrontend.hooks.addAction("frontend/element_ready/jkit_tabs.default",(e=>{elementorFrontend.elementsHandler.addHandler(n,{$element:e})}))}))}]);