/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/beneficiario/show.js":
/*!*******************************************!*\
  !*** ./resources/js/beneficiario/show.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  // Smart Wizard
  $('#smartwizard').smartWizard({
    selected: 1,
    theme: 'arrows',
    autoAdjustHeight: true,
    transition: {
      animation: 'slide-horizontal' // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing

    },
    toolbarSettings: {
      toolbarPosition: 'bottom',
      // both bottom
      toolbarButtonPosition: 'center' // both bottom

    }
  });
  $("body").on("click", '.pull-left', function () {
    var element = document.querySelector(".page-container");

    if (element.classList.contains("sidebar_collapsed")) {
      document.getElementById("btn-familia").style.marginLeft = "96pt";
    } else {
      document.getElementById('btn-familia').removeAttribute("style");
    }
  });
  $("body").on('click', '.deleteDap', function (e) {
    var _this = this;

    e.preventDefault();
    swal({
      title: "Você tem certeza?",
      text: "Você não poderá reverter isso!",
      type: "warning",
      showCancelButton: !0,
      confirmButtonText: "Sim, exclua-o!",
      cancelButtonText: "Não, cancele!",
      confirmButtonClass: "btn btn-success mr-5",
      cancelButtonClass: "btn btn-danger",
      buttonsStyling: !1
    }).then(function (result) {
      if (result.value) {
        var $this = $(_this);
        document.getElementById("formDap" + $this.attr("idform")).submit();
      }
    });
  });
  $("body").on('click', '.deleteDependente', function (e) {
    var _this2 = this;

    e.preventDefault();
    swal({
      title: "Você tem certeza?",
      text: "Você não poderá reverter isso!",
      type: "warning",
      showCancelButton: !0,
      confirmButtonText: "Sim, exclua-o!",
      cancelButtonText: "Não, cancele!",
      confirmButtonClass: "btn btn-success mr-5",
      cancelButtonClass: "btn btn-danger",
      buttonsStyling: !1
    }).then(function (result) {
      if (result.value) {
        var $this = $(_this2);
        document.getElementById("formDependente" + $this.attr("idform")).submit();
      }
    });
  });

  $("body").on("click", "#uploadArquivo", function (e) {
    e.preventDefault();
    $("#formUploadArquivo").submit();
  });
  $("body").on("click", '.deletarArquivo', function (e) {
    var _this4 = this;

    e.preventDefault();
    swal({
      title: "Você tem certeza?",
      text: "Você não poderá reverter isso!",
      type: "warning",
      showCancelButton: !0,
      confirmButtonText: "Sim, exclua-o!",
      cancelButtonText: "Não, cancele!",
      confirmButtonClass: "btn btn-success mr-5",
      cancelButtonClass: "btn btn-danger",
      buttonsStyling: !1
    }).then(function (result) {
      if (result.value) {
        var $this = $(_this4);
        document.getElementById("formArquivo" + $this.attr("idform")).submit();
      }
    });
  });
});

/***/ }),

/***/ 5:
/*!*************************************************!*\
  !*** multi ./resources/js/beneficiario/show.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /mnt/sda1/sistemas/sepa/develop/siagro/resources/js/beneficiario/show.js */"./resources/js/beneficiario/show.js");


/***/ })

/******/ });
