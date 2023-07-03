/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/src/js/custom.js":
/*!*********************************!*\
  !*** ./assets/src/js/custom.js ***!
  \*********************************/
/***/ (() => {

jQuery(document).ready(function ($) {
  // Mobile navigation

  $(".menu-toggle").click(function () {
    $("#primary-menu").fadeToggle();
    $(this).toggleClass('menu-open');
    $('#masthead').toggleClass('sticky');
  });
  // Sub Menu Trigger

  $("#primary-menu li.menu-item-has-children > a").after('<span class="sub-menu-trigger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></span>');
  $(".sub-menu-trigger").click(function () {
    $(this).parent().toggleClass('sub-menu-open');
    $(this).siblings(".sub-menu").slideToggle();
  });
  $("#primary-menu li").click(function () {
    var windowsize = $(window).width();
    if (windowsize < 1200) {
      $("#primary-menu").fadeToggle();
      $(".menu-toggle").toggleClass('menu-open');
    }
  });

  //Custom links for certain btn's depends utm params
  var websiteURL = document.location.host;
  if (websiteURL === 'react.shebaonline.org') {
    var urlParams = new URLSearchParams(window.location.search);
    var utmSource = urlParams.get('utm_source');
    if (utmSource === 'facebook') {
      var utmMedium = urlParams.get('utm_medium');
      var utmCampaign = urlParams.get('utm_campaign');
      var utmContent = urlParams.get('utm_content');
      var link_params = '?utm_source=' + utmSource;
      utmMedium !== null ? link_params = link_params + '&utm_medium=' + utmMedium : link_params;
      utmCampaign !== null ? link_params = link_params + '&utm_campaign=' + utmCampaign : link_params;
      utmContent !== null ? link_params = link_params + '&utm_content=' + utmContent : link_params;
      var link = 'https://forms-wizard.biz/' + link_params + '';
      $('.hero-din-btn .il_btn:first-of-type').attr('href', link);
      $('.about-din-btn .il_btn').attr('href', link);
      $('.agenda-din-btn a').attr('href', link);
      $('.spot-din-btn .il_btn').attr('href', link);
    }
    if (utmSource === 'linkedin') {
      var _utmMedium = urlParams.get('utm_medium');
      var _utmCampaign = urlParams.get('utm_campaign');
      var _link_params = '?utm_source=' + utmSource;
      _utmMedium !== null ? _link_params = _link_params + '&utm_medium=' + _utmMedium : _link_params;
      _utmCampaign !== null ? _link_params = _link_params + '&utm_campaign=' + _utmCampaign : _link_params;
      var _link = 'https://forms-wizard.biz/' + _link_params + '';
      $('.hero-din-btn .il_btn:first-of-type').attr('href', _link);
      $('.about-din-btn .il_btn').attr('href', _link);
      $('.agenda-din-btn a').attr('href', _link);
      $('.spot-din-btn .il_btn').attr('href', _link);
    }
  }

  // Technologies
  /*
      $(".tg_trigger-1").click(function () {
          $(".tg_trigger-1").toggleClass('si_open');
          $(".tg_trigger.si_open:not(.tg_trigger-1)").removeClass('si_open');
          $(".tg_modal-1").slideToggle().toggleClass('si_open');
          $(".tg_modal.si_open:not(.tg_modal-1)").slideToggle().removeClass('si_open');
      });
  
      $(".tg_trigger-2").click(function () {
          $(".tg_trigger-2").toggleClass('si_open');
          $(".tg_trigger.si_open:not(.tg_trigger-2)").removeClass('si_open');
          $(".tg_modal-2").slideToggle().toggleClass('si_open');
          $(".tg_modal.si_open:not(.tg_modal-2)").slideToggle().removeClass('si_open');
      });
  
      $(".tg_trigger-3").click(function () {
          $(".tg_trigger-3").toggleClass('si_open');
          $(".tg_trigger.si_open:not(.tg_trigger-3)").removeClass('si_open');
          $(".tg_modal-3").slideToggle().toggleClass('si_open');
          $(".tg_modal.si_open:not(.tg_modal-3)").slideToggle().removeClass('si_open');
      }); */

  document.addEventListener('wpcf7mailsent', function (event) {
    location = '/thank-you';
  }, false);
});
window.onscroll = function () {
  scrollHeader();
};
function scrollHeader() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("masthead").className = "header-main sticky";
  } else {
    document.getElementById("masthead").className = "header-main";
  }
}

/***/ }),

/***/ "./assets/src/sass/frontend.scss":
/*!***************************************!*\
  !*** ./assets/src/sass/frontend.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!***********************************!*\
  !*** ./assets/src/js/frontend.js ***!
  \***********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _sass_frontend_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../sass/frontend.scss */ "./assets/src/sass/frontend.scss");
/* harmony import */ var _js_custom__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../js/custom */ "./assets/src/js/custom.js");
/* harmony import */ var _js_custom__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_custom__WEBPACK_IMPORTED_MODULE_1__);
/**
 * SASS
 */


/**
 * JavaScript
 */


})();

/******/ })()
;