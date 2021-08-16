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
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pedido/create.js":
/*!*********************************************!*\
  !*** ./resources/js/beneficiario/create.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

  $(document).ready(function () {
  

  
 
  // Inicio da Função tipo de contato
  var rowIdx = 0;
  
  // jQuery button click event to add a row.
  $('#addBtn').on('click', function () {
  
    // Adding a row inside the tbody.
    $('#tbody').append(`<tr id="R${++rowIdx}">
                  <td class="text-center">
                   <select name="" class="form-control">
                        <option value="">Selecione uma opção</option>
                       
                  </select>
                  </td>
      <td class="row-index text-center">
                  <input type="text" class="form-control focus" name="" placeholder="Informações do contato">
                  </td>
      <td class="text-center">
        <button class="btn btn-danger remove"
        type="button">Remover campo</button>
      </td>
      </tr>`);
  });
  // 
  // 
  
  // jQuery button click event to remove a row
  $('#tbody').on('click', '.remove', function () {
  
    
    var child = $(this).closest('tr').nextAll();
    child.each(function () {
      
      // Getting <tr> id.
      var id = $(this).attr('id');
  
      // Getting the <p> inside the .row-index class.
      var idx = $(this).children('.row-index').children('p');
  
      // Gets the row number from <tr> id.
      var dig = parseInt(id.substring(1));
  
      // Modifying row index.
      idx.html(`Row ${dig - 1}`);
  
      // Modifying row id.
      $(this).attr('id', `R${dig - 1}`);
    });
  
    // Removing the current row.
    $(this).closest('tr').remove();
  
    // Decreasing the total number of rows by 1.
    rowIdx--;
  });
  
  
  
  
  
  
  
  
  //
  });
  
  /***/ }),
  
  /***/ 4:
  /*!***************************************************!*\
    !*** multi ./resources/js/beneficiario/create.js ***!
    \***************************************************/
  /*! no static exports found */
  /***/ (function(module, exports, __webpack_require__) {
  
  module.exports = __webpack_require__(/*! /mnt/sda1/sistemas/sepa/develop/siagro/resources/js/beneficiario/create.js */"./resources/js/beneficiario/create.js");
  
  
  /***/ })
  
  /******/ });