/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/Utilities/adverts.js":
/*!*************************************!*\
  !*** ./src/js/Utilities/adverts.js ***!
  \*************************************/
/***/ (function() {

jQuery(document).ready(function ($) {
  (function (d, sc, u) {
    var s = d.createElement(sc),
        p = d.getElementsByTagName(sc)[0];
    s.type = "text/javascript";
    s.async = true;
    s.src = u + "?v=" + +new Date();
    p.parentNode.insertBefore(s, p);
  })(document, "script", "//cf.bstatic.com/static/affiliate_base/js/flexiproduct.js");
});
jQuery(document).ready(function ($) {
  (function (d, sc, u) {
    var s = d.createElement(sc),
        p = d.getElementsByTagName(sc)[0];
    s.type = "text/javascript";
    s.async = true;
    s.src = u + "?v=" + +new Date();
    p.parentNode.insertBefore(s, p);
  })(document, "script", "//cf.bstatic.com/static/affiliate_base/js/flexiproduct.js");
});

/***/ }),

/***/ "./src/js/Utilities/ontop.js":
/*!***********************************!*\
  !*** ./src/js/Utilities/ontop.js ***!
  \***********************************/
/***/ (function() {

jQuery(document).ready(function ($) {
  var offset = 100;
  var speed = 250;
  var duration = 500;
  $(window).scroll(function () {
    if ($(this).scrollTop() < offset) {
      $(".topbutton").fadeOut(duration);
    } else {
      $(".topbutton").fadeIn(duration);
    }
  });
  $(".topbutton").on("click", function () {
    $("html, body").animate({
      scrollTop: 0
    }, speed);
    return false;
  });
});

/***/ }),

/***/ "./src/js/Utilities/placeholder.js":
/*!*****************************************!*\
  !*** ./src/js/Utilities/placeholder.js ***!
  \*****************************************/
/***/ (function() {

jQuery(document).ready(function () {
  jQuery("input,textarea").focus(function () {
    jQuery(this).data("placeholder", jQuery(this).attr("placeholder")).attr("placeholder", "");
  }).blur(function () {
    jQuery(this).attr("placeholder", jQuery(this).data("placeholder"));
  });
});

/***/ }),

/***/ "./src/js/Utilities/share-buttons.js":
/*!*******************************************!*\
  !*** ./src/js/Utilities/share-buttons.js ***!
  \*******************************************/
/***/ (function() {

/* Social Share: jQuery */
if (".social-share".length) {
  jQuery(document).ready(function () {
    jQuery(".social-popup").click(function (e) {
      e.preventDefault();
      window.open(jQuery(this).attr("href"), "fbShareWindow", "height=450, width=550, top=" + (jQuery(window).height() / 2 - 275) + ", left = " + (jQuery(window).width() / 2 - 225) + ", toolbar = 0, location = 0, menubar = 0, directories = 0, scrollbars = 0");
      return false;
    });
  });
}

/***/ }),

/***/ "./src/js/carousel/index.js":
/*!**********************************!*\
  !*** ./src/js/carousel/index.js ***!
  \**********************************/
/***/ (function() {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

(function ($) {
  var SlickCarousel = /*#__PURE__*/function () {
    function SlickCarousel() {
      _classCallCheck(this, SlickCarousel);

      this.initiateCarousel();
    }

    _createClass(SlickCarousel, [{
      key: "initiateCarousel",
      value: function initiateCarousel() {
        $('.posts-carousel').slick({
          autoplay: true,
          autoplaySpeed: 1000,
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          responsive: [{
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }, {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }, {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }]
        });
      }
    }]);

    return SlickCarousel;
  }();

  new SlickCarousel();
})(jQuery);

/***/ }),

/***/ "./src/js/posts/loadmore.js":
/*!**********************************!*\
  !*** ./src/js/posts/loadmore.js ***!
  \**********************************/
/***/ (function() {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

(function ($) {
  /**
   * Class Loadmore.
   */
  var LoadMore = /*#__PURE__*/function () {
    /**
     * Contructor.
     */
    function LoadMore() {
      var _siteConfig$ajaxUrl, _siteConfig, _siteConfig$ajax_nonc, _siteConfig2;

      _classCallCheck(this, LoadMore);

      this.ajaxUrl = (_siteConfig$ajaxUrl = (_siteConfig = siteConfig) === null || _siteConfig === void 0 ? void 0 : _siteConfig.ajaxUrl) !== null && _siteConfig$ajaxUrl !== void 0 ? _siteConfig$ajaxUrl : '';
      this.ajaxNonce = (_siteConfig$ajax_nonc = (_siteConfig2 = siteConfig) === null || _siteConfig2 === void 0 ? void 0 : _siteConfig2.ajax_nonce) !== null && _siteConfig$ajax_nonc !== void 0 ? _siteConfig$ajax_nonc : '';
      this.loadMoreBtn = $('#load-more');
      this.loadingTextEl = $('#loading-text');
      this.isRequestProcessing = false;
      this.options = {
        root: null,
        rootMargin: '0px',
        threshold: 1.0 // 1.0 means set isIntersecting to true when element comes in 100% view.

      };
      this.init();
    }

    _createClass(LoadMore, [{
      key: "init",
      value: function init() {
        var _this = this;

        if (!this.loadMoreBtn.length) {
          return;
        }

        this.totalPagesCount = $('#post-pagination').data('max-pages');
        /**
         * Add the IntersectionObserver api, and listen to the load more intersection status.
         * so that intersectionObserverCallback gets called if the element intersection status changes.
         *
         * @type {IntersectionObserver}
         */

        var observer = new IntersectionObserver(function (entries) {
          return _this.intersectionObserverCallback(entries);
        }, this.options);
        observer.observe(this.loadMoreBtn[0]);
      }
      /**
       * Gets called on initial render with status 'isIntersecting' as false and then
       * everytime element intersection status changes.
       *
       * @param {array} entries No of elements under observation.
       *
       */

    }, {
      key: "intersectionObserverCallback",
      value: function intersectionObserverCallback(entries) {
        var _this2 = this;

        // array of observing elements
        // The logic is apply for each entry ( in this case it's just one loadmore button )
        entries.forEach(function (entry) {
          // If load more button in view.
          if (entry !== null && entry !== void 0 && entry.isIntersecting) {
            _this2.handleLoadMorePosts();
          }
        });
      }
      /**
       * Load more posts.
       *
       * 1.Make an ajax request, by incrementing the page no. by one on each request.
       * 2.Append new/more posts to the existing content.
       * 3.If the response is 0 ( which means no more posts available ), remove the load-more button from DOM.
       * Once the load-more button gets removed, the IntersectionObserverAPI callback will not be triggered, which means
       * there will be no further ajax request since there won't be any more posts available.
       *
       * @return null
       */

    }, {
      key: "handleLoadMorePosts",
      value: function handleLoadMorePosts() {
        var _this3 = this;

        // Get page no from data attribute of load-more button.
        var page = this.loadMoreBtn.data('page');

        if (!page || this.isRequestProcessing) {
          return null;
        }

        var nextPage = parseInt(page) + 1; // Increment page count by one.

        this.isRequestProcessing = true;
        $.ajax({
          url: this.ajaxUrl,
          type: 'post',
          data: {
            page: page,
            action: 'load_more',
            ajax_nonce: this.ajaxNonce
          },
          success: function success(response) {
            _this3.loadMoreBtn.data('page', nextPage);

            $('#load-more-content').append(response);

            _this3.removeLoadMoreIfOnLastPage(nextPage);

            _this3.isRequestProcessing = false;
          },
          error: function error(response) {
            console.log(response);
            _this3.isRequestProcessing = false;
          }
        });
      }
      /**
       * Remove Load more Button If on last page.
       *
       * @param {int} nextPage New Page.
       */

    }, {
      key: "removeLoadMoreIfOnLastPage",
      value: function removeLoadMoreIfOnLastPage(nextPage) {
        if (nextPage + 1 > this.totalPagesCount) {
          this.loadMoreBtn.remove();
        }
      }
    }]);

    return LoadMore;
  }();

  new LoadMore();
})(jQuery);

/***/ }),

/***/ "./src/img/cats.jpg":
/*!**************************!*\
  !*** ./src/img/cats.jpg ***!
  \**************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/cats.jpg");

/***/ }),

/***/ "./src/img/patterns/madrid.jpg":
/*!*************************************!*\
  !*** ./src/img/patterns/madrid.jpg ***!
  \*************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/patterns/madrid.jpg");

/***/ }),

/***/ "./src/img/port.png":
/*!**************************!*\
  !*** ./src/img/port.png ***!
  \**************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/port.png");

/***/ }),

/***/ "./src/img/spain.jpg":
/*!***************************!*\
  !*** ./src/img/spain.jpg ***!
  \***************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/spain.jpg");

/***/ }),

/***/ "./src/img/up-arrow.png":
/*!******************************!*\
  !*** ./src/img/up-arrow.png ***!
  \******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/up-arrow.png");

/***/ }),

/***/ "./src/sass/main.scss":
/*!****************************!*\
  !*** ./src/sass/main.scss ***!
  \****************************/
/***/ (function() {

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
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
!function() {
"use strict";
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _carousel_index__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./carousel/index */ "./src/js/carousel/index.js");
/* harmony import */ var _carousel_index__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_carousel_index__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _posts_loadmore__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./posts/loadmore */ "./src/js/posts/loadmore.js");
/* harmony import */ var _posts_loadmore__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_posts_loadmore__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _Utilities_placeholder__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Utilities/placeholder */ "./src/js/Utilities/placeholder.js");
/* harmony import */ var _Utilities_placeholder__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_Utilities_placeholder__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _Utilities_share_buttons__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./Utilities/share-buttons */ "./src/js/Utilities/share-buttons.js");
/* harmony import */ var _Utilities_share_buttons__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_Utilities_share_buttons__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _Utilities_ontop__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./Utilities/ontop */ "./src/js/Utilities/ontop.js");
/* harmony import */ var _Utilities_ontop__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_Utilities_ontop__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _Utilities_adverts__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./Utilities/adverts */ "./src/js/Utilities/adverts.js");
/* harmony import */ var _Utilities_adverts__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_Utilities_adverts__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../sass/main.scss */ "./src/sass/main.scss");
/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_sass_main_scss__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _img_patterns_madrid_jpg__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../img/patterns/madrid.jpg */ "./src/img/patterns/madrid.jpg");
/* harmony import */ var _img_cats_jpg__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../img/cats.jpg */ "./src/img/cats.jpg");
/* harmony import */ var _img_spain_jpg__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../img/spain.jpg */ "./src/img/spain.jpg");
/* harmony import */ var _img_port_png__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ../img/port.png */ "./src/img/port.png");
/* harmony import */ var _img_up_arrow_png__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ../img/up-arrow.png */ "./src/img/up-arrow.png");





 // ///Sass

 // Images.






}();
/******/ })()
;
//# sourceMappingURL=main.js.map