(window["webpackJsonp_name_"] = window["webpackJsonp_name_"] || []).push([[0],{

/***/ "./node_modules/@babel/runtime/helpers/classCallCheck.js":
/*!***************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/classCallCheck.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
}

module.exports = _classCallCheck;
module.exports["default"] = module.exports, module.exports.__esModule = true;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/createClass.js":
/*!************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/createClass.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _defineProperties(target, props) {
  for (var i = 0; i < props.length; i++) {
    var descriptor = props[i];
    descriptor.enumerable = descriptor.enumerable || false;
    descriptor.configurable = true;
    if ("value" in descriptor) descriptor.writable = true;
    Object.defineProperty(target, descriptor.key, descriptor);
  }
}

function _createClass(Constructor, protoProps, staticProps) {
  if (protoProps) _defineProperties(Constructor.prototype, protoProps);
  if (staticProps) _defineProperties(Constructor, staticProps);
  return Constructor;
}

module.exports = _createClass;
module.exports["default"] = module.exports, module.exports.__esModule = true;

/***/ }),

/***/ "./src/Blocks/components/drawer/assets/drawer.js":
/*!*******************************************************!*\
  !*** ./src/Blocks/components/drawer/assets/drawer.js ***!
  \*******************************************************/
/*! exports provided: Drawer */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Drawer", function() { return Drawer; });
/* harmony import */ var _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/classCallCheck */ "./node_modules/@babel/runtime/helpers/classCallCheck.js");
/* harmony import */ var _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1__);


var Drawer = /*#__PURE__*/function () {
  function Drawer(_ref) {
    var _drawerElement$datase, _drawerElement$datase2;

    var drawerElement = _ref.drawerElement;

    _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0___default()(this, Drawer);

    this.drawerElement = drawerElement;
    this.CLASS_MENU_OPEN = 'is-menu-open';
    this.CLASS_OVERLAY_IS_SHOWING = 'page-overlay-shown';
    this.CLASS_NO_SCROLL = 'u-no-scroll';
    var overlaySelector = drawerElement === null || drawerElement === void 0 ? void 0 : (_drawerElement$datase = drawerElement.dataset) === null || _drawerElement$datase === void 0 ? void 0 : _drawerElement$datase.overlay;
    var triggerSelector = drawerElement === null || drawerElement === void 0 ? void 0 : (_drawerElement$datase2 = drawerElement.dataset) === null || _drawerElement$datase2 === void 0 ? void 0 : _drawerElement$datase2.trigger;

    if (overlaySelector) {
      this.overlay = document.querySelector(".".concat(overlaySelector));
    }

    if (triggerSelector) {
      this.trigger = document.querySelector(".".concat(triggerSelector));
    }
  }

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1___default()(Drawer, [{
    key: "preventScroll",
    value: function preventScroll() {
      document.body.classList.add(this.CLASS_NO_SCROLL);
    }
  }, {
    key: "enableScroll",
    value: function enableScroll() {
      document.body.classList.remove(this.CLASS_NO_SCROLL);
    }
  }, {
    key: "openMobileMenu",
    value: function openMobileMenu() {
      if (this.overlay) {
        var _this$trigger;

        document.body.classList.add(this.CLASS_OVERLAY_IS_SHOWING);
        (_this$trigger = this.trigger) === null || _this$trigger === void 0 ? void 0 : _this$trigger.classList.add(this.CLASS_MENU_OPEN);
      }

      document.body.classList.add(this.CLASS_MENU_OPEN);
      this.preventScroll();
    }
  }, {
    key: "closeMobileMenu",
    value: function closeMobileMenu() {
      if (this.overlay) {
        var _this$trigger2;

        document.body.classList.remove(this.CLASS_OVERLAY_IS_SHOWING);
        (_this$trigger2 = this.trigger) === null || _this$trigger2 === void 0 ? void 0 : _this$trigger2.classList.remove(this.CLASS_MENU_OPEN);
      }

      document.body.classList.remove(this.CLASS_MENU_OPEN);
      this.enableScroll();
    }
  }, {
    key: "closeMobileMenuOnOverlayClick",
    value: function closeMobileMenuOnOverlayClick() {
      var _this$overlay,
          _this = this;

      (_this$overlay = this.overlay) === null || _this$overlay === void 0 ? void 0 : _this$overlay.addEventListener('click', function () {
        return _this.closeMobileMenu();
      });
    }
  }, {
    key: "init",
    value: function init() {
      var _this2 = this;

      this.trigger.addEventListener('click', function () {
        if (document.body.classList.contains(_this2.CLASS_MENU_OPEN)) {
          _this2.closeMobileMenu();
        } else {
          _this2.openMobileMenu();
        }
      });
      this.closeMobileMenuOnOverlayClick();
    }
  }]);

  return Drawer;
}();

/***/ })

}]);