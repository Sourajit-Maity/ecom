(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_Pages_AboutComponent_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/AboutComponent.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/AboutComponent.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _minogin_vue_drag_resize_rotate__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @minogin/vue-drag-resize-rotate */ "./node_modules/@minogin/vue-drag-resize-rotate/src/drr.vue");
/* harmony import */ var _Shared_WelcomeLayout__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../Shared/WelcomeLayout */ "./resources/js/Shared/WelcomeLayout.vue");
var _layout$layout$compon;

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }



function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//https://vuejsfeed.com/blog/drag-and-resize-elements-with-vuedraggableresizable


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_layout$layout$compon = {
  //   name: 'about-us',
  layout: function layout(h, page) {
    return h(Layout, [page]);
  }
}, _defineProperty(_layout$layout$compon, "layout", _Shared_WelcomeLayout__WEBPACK_IMPORTED_MODULE_2__.default), _defineProperty(_layout$layout$compon, "components", {
  drr: _minogin_vue_drag_resize_rotate__WEBPACK_IMPORTED_MODULE_1__.default,
  WelcomeLayout: _Shared_WelcomeLayout__WEBPACK_IMPORTED_MODULE_2__.default
}), _defineProperty(_layout$layout$compon, "props", {
  users: Array
}), _defineProperty(_layout$layout$compon, "created", function created() {
  console.info('user', this.users);
}), _defineProperty(_layout$layout$compon, "mounted", function mounted() {
  console.log("This is about component");
}), _defineProperty(_layout$layout$compon, "data", function data() {
  return {
    addTextIndex: 0,
    addClipartIndex: 0,
    selectedTextBoxIndex: 0,
    selectedClipartIndex: 0,
    textDesigns: [{
      x: 300,
      y: 70,
      weight: 140,
      height: 55,
      angle: 0,
      text: "Your text",
      font: "font-fnt2",
      fontStyle: "",
      fontSize: "font-size35",
      fontColor: "",
      selected: false
    }],
    clipartDesigns: [// {
      //     x:100,
      //     y:60,
      //     weight:100,
      //     height:60,
      //     angle: 0,
      //     img: "/clipart/1/1.png",
      //     font:"font-fnt2",
      //     fontStyle: "",
      //     fontSize: "font-size35",
      //     fontColor: "",
      //     selected:false
      // }
    ],
    menu: {
      sizeShape: true,
      background: false,
      border: false,
      textOptions: false
    },
    output: null,
    shapeDefaultClass: 'rectangle1-3',
    borderDefaultClass: 'no-border',
    backgroundImage: ""
  };
}), _defineProperty(_layout$layout$compon, "computed", {
  getShapeClass: function getShapeClass() {
    return {
      'rectangle1-3': 'rectangle1-3' == this.shapeDefaultClass,
      'rectangle1-5-3': 'rectangle1-5-3' == this.shapeDefaultClass,
      'oval1-3': 'oval1-3' == this.shapeDefaultClass,
      'rectangle12-3': 'rectangle12-3' == this.shapeDefaultClass,
      'gold-border': 'gold-border' == this.borderDefaultClass,
      'silver-border': 'silver-border' == this.borderDefaultClass,
      'black-border': 'black-border' == this.borderDefaultClass,
      'rose-border': 'rose-border' == this.borderDefaultClass,
      'no-border': 'no-border' == this.borderDefaultClass
    };
  },
  getYourText: {
    get: function get() {
      return this.textDesigns[this.selectedTextBoxIndex].text;
    },
    set: function set(value) {
      this.textDesigns[this.selectedTextBoxIndex].text = value;
    }
  }
}), _defineProperty(_layout$layout$compon, "methods", {
  //   itemChange(event){
  //       console.info('event',event);
  //   },
  selectItem: function selectItem(index) {
    var _this = this;

    console.info('index', index);
    this.selectedTextBoxIndex = index;
    this.selectDesignbar('textOptions');
    this.textDesigns.forEach(function (item, index_textDesign) {
      if (index_textDesign == _this.selectedTextBoxIndex) item.selected = true;else item.selected = false;
    });
    console.info('this.textDesigns', this.textDesigns);
  },
  selectItemClipart: function selectItemClipart(index) {
    var _this2 = this;

    //   console.info('index',index);
    this.selectedClipartIndex = index; //   this.selectDesignbar('textOptions');

    this.clipartDesigns.forEach(function (item, index_clipartDesign) {
      if (index_clipartDesign == _this2.selectedClipartIndex) item.selected = true;else item.selected = false;
    }); //   console.info('this.textDesigns',this.textDesigns);
  },
  selectDesignbar: function selectDesignbar(menuName) {
    this.menu.sizeShape = 'sizeShape' == menuName;
    this.menu.border = 'border' == menuName;
    this.menu.textOptions = 'textOptions' == menuName;
    this.menu.background = 'background' == menuName;
  },
  deleteText: function deleteText() {
    this.textDesigns.splice(this.selectedTextBoxIndex, 1);
    if (this.textDesigns.length > 0) this.selectItem(0);else this.menu.textOptions = false;
  },
  getCustomDesignClass: function getCustomDesignClass(index) {
    return {
      'font-italic': 'font-italic' == this.textDesigns[index].fontStyle,
      'font-weight-bold': 'font-weight-bold' == this.textDesigns[index].fontStyle,
      'font-size20': 'font-size20' == this.textDesigns[index].fontSize,
      'font-size35': 'font-size35' == this.textDesigns[index].fontSize,
      'font-size50': 'font-size50' == this.textDesigns[index].fontSize,
      'font-coloRed': 'font-coloRed' == this.textDesigns[index].fontColor,
      'font-colorGreen': 'font-colorGreen' == this.textDesigns[index].fontColor,
      'font-colorBlue': 'font-colorBlue' == this.textDesigns[index].fontColor,
      'font-fnt2': 'font-fnt2' == this.textDesigns[index].font,
      'font-fnt4': 'font-fnt4' == this.textDesigns[index].font,
      'font-fnt28': 'font-fnt28' == this.textDesigns[index].font,
      'font-fnt5': 'font-fnt5' == this.textDesigns[index].font,
      'font-fnt6': 'font-fnt6' == this.textDesigns[index].font
    };
  },
  addText: function addText() {
    this.addTextIndex++;
    this.textDesigns.push({
      x: 300 + this.addTextIndex * 10,
      y: 70 + this.addTextIndex * 10,
      weight: 200,
      height: 70,
      angle: 0,
      text: "Your text",
      font: "font-fnt2",
      fontStyle: "",
      fontSize: "font-size35",
      fontColor: "",
      selected: false
    });
  },
  addClipart: function addClipart(i) {
    this.addClipartIndex++;
    this.clipartDesigns.push({
      x: 150 + this.addClipartIndex * 11,
      y: 60 + this.addClipartIndex * 11,
      weight: 100,
      height: 60,
      angle: 0,
      img: "/clipart/".concat(i, "/").concat(i, ".png"),
      selected: false
    });
  },
  printThis: function printThis() {
    var _this3 = this;

    return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
      var el, options;
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              console.log("printing..");
              el = _this3.$refs.printcontent; // add option type to get the image version
              // if not provided the promise will return 
              // the canvas.

              options = {
                type: 'dataURL'
              };
              _context.next = 5;
              return _this3.$html2canvas(el, options);

            case 5:
              _this3.output = _context.sent;

            case 6:
            case "end":
              return _context.stop();
          }
        }
      }, _callee);
    }))();
  }
}), _layout$layout$compon);

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Shared/WelcomeLayout.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Shared/WelcomeLayout.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({});

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/AboutComponent.vue?vue&type=style&index=0&id=3ea7f44e&scoped=true&lang=css&":
/*!************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/AboutComponent.vue?vue&type=style&index=0&id=3ea7f44e&scoped=true&lang=css& ***!
  \************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "\n.shadow[data-v-3ea7f44e] {\n            box-shadow: 0px 2px 4px 0px rgb(0 0 0 / 29%)\n}\n.design-area[data-v-3ea7f44e] {\n            width: 566px;\n            border-radius: 30px;\n            overflow: hidden;\n            position: relative;\n}\n.rectangle1-3[data-v-3ea7f44e] {\n            height: 198px;\n}\n.rectangle1-5-3[data-v-3ea7f44e] {\n            height: 290px;\n}\n.oval1-3[data-v-3ea7f44e] {\n            height: 244px;\n            border-radius: 50% !important;\n}\n.rectangle12-3[data-v-3ea7f44e] {\n            height: 367px;\n}\n.font-size50[data-v-3ea7f44e] {\n                font-size: 50px;\n}\n.font-size35[data-v-3ea7f44e] {\n                font-size: 35px;\n}\n.font-coloRed[data-v-3ea7f44e] {\n                color: red;\n}\n.font-colorGreen[data-v-3ea7f44e] {\n                color: green;\n}\n.font-colorBlue[data-v-3ea7f44e]{\n            color: blue;\n}\n.no-border[data-v-3ea7f44e]{\n            border: none;\n}\n.gold-border[data-v-3ea7f44e]{\n                border: 9px solid #ffed4a;\n}\n.silver-border[data-v-3ea7f44e]{\n                border: 9px solid #b8b7b2;\n}\n.black-border[data-v-3ea7f44e]{\n                border: 9px solid #050505;\n}\n.rose-border[data-v-3ea7f44e]{\n                border: 9px solid #c07b86;\n}\n.selected-material-box[data-v-3ea7f44e]{\n            border: 3px solid #3a00ff !important;\n}\n.cursor-pointer[data-v-3ea7f44e]{\n            cursor:pointer;\n}\n.custom-background-img[data-v-3ea7f44e]{\n            max-height: 400px;\n            overflow: scroll;\n            overflow-x: hidden;\n}\n.font-fnt2[data-v-3ea7f44e]{\n    font-family:Arial;\n}\n.font-fnt4[data-v-3ea7f44e]{\n    font-family:serif;\n}\n.font-fnt28[data-v-3ea7f44e]{\n    font-family:monospace;\n}\n.font-fnt5[data-v-3ea7f44e]{\n    font-family:cursive;\n}\n.font-fnt6[data-v-3ea7f44e]{\n    font-family:fantasy;\n}\n.clipart-custom[data-v-3ea7f44e]{\n    max-height: 307px;\n    overflow-y: scroll;\n}\n        ", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/AboutComponent.vue?vue&type=style&index=0&id=3ea7f44e&scoped=true&lang=css&":
/*!****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/AboutComponent.vue?vue&type=style&index=0&id=3ea7f44e&scoped=true&lang=css& ***!
  \****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_AboutComponent_vue_vue_type_style_index_0_id_3ea7f44e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AboutComponent.vue?vue&type=style&index=0&id=3ea7f44e&scoped=true&lang=css& */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/AboutComponent.vue?vue&type=style&index=0&id=3ea7f44e&scoped=true&lang=css&");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_AboutComponent_vue_vue_type_style_index_0_id_3ea7f44e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__.default, options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_AboutComponent_vue_vue_type_style_index_0_id_3ea7f44e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_1__.default.locals || {});

/***/ }),

/***/ "./resources/js/Pages/AboutComponent.vue":
/*!***********************************************!*\
  !*** ./resources/js/Pages/AboutComponent.vue ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _AboutComponent_vue_vue_type_template_id_3ea7f44e_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AboutComponent.vue?vue&type=template&id=3ea7f44e&scoped=true& */ "./resources/js/Pages/AboutComponent.vue?vue&type=template&id=3ea7f44e&scoped=true&");
/* harmony import */ var _AboutComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AboutComponent.vue?vue&type=script&lang=js& */ "./resources/js/Pages/AboutComponent.vue?vue&type=script&lang=js&");
/* harmony import */ var _AboutComponent_vue_vue_type_style_index_0_id_3ea7f44e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./AboutComponent.vue?vue&type=style&index=0&id=3ea7f44e&scoped=true&lang=css& */ "./resources/js/Pages/AboutComponent.vue?vue&type=style&index=0&id=3ea7f44e&scoped=true&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__.default)(
  _AboutComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _AboutComponent_vue_vue_type_template_id_3ea7f44e_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _AboutComponent_vue_vue_type_template_id_3ea7f44e_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "3ea7f44e",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Pages/AboutComponent.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/Shared/WelcomeLayout.vue":
/*!***********************************************!*\
  !*** ./resources/js/Shared/WelcomeLayout.vue ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _WelcomeLayout_vue_vue_type_template_id_65efb180___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./WelcomeLayout.vue?vue&type=template&id=65efb180& */ "./resources/js/Shared/WelcomeLayout.vue?vue&type=template&id=65efb180&");
/* harmony import */ var _WelcomeLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./WelcomeLayout.vue?vue&type=script&lang=js& */ "./resources/js/Shared/WelcomeLayout.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _WelcomeLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _WelcomeLayout_vue_vue_type_template_id_65efb180___WEBPACK_IMPORTED_MODULE_0__.render,
  _WelcomeLayout_vue_vue_type_template_id_65efb180___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Shared/WelcomeLayout.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/Pages/AboutComponent.vue?vue&type=script&lang=js&":
/*!************************************************************************!*\
  !*** ./resources/js/Pages/AboutComponent.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AboutComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AboutComponent.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/AboutComponent.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AboutComponent_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/Shared/WelcomeLayout.vue?vue&type=script&lang=js&":
/*!************************************************************************!*\
  !*** ./resources/js/Shared/WelcomeLayout.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WelcomeLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./WelcomeLayout.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Shared/WelcomeLayout.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_WelcomeLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/Pages/AboutComponent.vue?vue&type=style&index=0&id=3ea7f44e&scoped=true&lang=css&":
/*!********************************************************************************************************!*\
  !*** ./resources/js/Pages/AboutComponent.vue?vue&type=style&index=0&id=3ea7f44e&scoped=true&lang=css& ***!
  \********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_AboutComponent_vue_vue_type_style_index_0_id_3ea7f44e_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/style-loader/dist/cjs.js!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AboutComponent.vue?vue&type=style&index=0&id=3ea7f44e&scoped=true&lang=css& */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/AboutComponent.vue?vue&type=style&index=0&id=3ea7f44e&scoped=true&lang=css&");


/***/ }),

/***/ "./resources/js/Pages/AboutComponent.vue?vue&type=template&id=3ea7f44e&scoped=true&":
/*!******************************************************************************************!*\
  !*** ./resources/js/Pages/AboutComponent.vue?vue&type=template&id=3ea7f44e&scoped=true& ***!
  \******************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AboutComponent_vue_vue_type_template_id_3ea7f44e_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AboutComponent_vue_vue_type_template_id_3ea7f44e_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AboutComponent_vue_vue_type_template_id_3ea7f44e_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AboutComponent.vue?vue&type=template&id=3ea7f44e&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/AboutComponent.vue?vue&type=template&id=3ea7f44e&scoped=true&");


/***/ }),

/***/ "./resources/js/Shared/WelcomeLayout.vue?vue&type=template&id=65efb180&":
/*!******************************************************************************!*\
  !*** ./resources/js/Shared/WelcomeLayout.vue?vue&type=template&id=65efb180& ***!
  \******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WelcomeLayout_vue_vue_type_template_id_65efb180___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WelcomeLayout_vue_vue_type_template_id_65efb180___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_WelcomeLayout_vue_vue_type_template_id_65efb180___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./WelcomeLayout.vue?vue&type=template&id=65efb180& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Shared/WelcomeLayout.vue?vue&type=template&id=65efb180&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/AboutComponent.vue?vue&type=template&id=3ea7f44e&scoped=true&":
/*!*********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Pages/AboutComponent.vue?vue&type=template&id=3ea7f44e&scoped=true& ***!
  \*********************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("section", { staticClass: "inner-page" }, [
    _c("div", { staticClass: "container py-5" }, [
      _c(
        "div",
        { staticClass: "row" },
        [
          _c("div", { staticClass: "col-md-7" }, [
            _c("div", { staticClass: "row" }, [
              _c("div", { staticClass: "col-md-12" }, [
                _c(
                  "button",
                  {
                    staticClass: "btn mr-2",
                    class: [_vm.menu.sizeShape ? "btn-danger" : "btn-dark"],
                    on: {
                      click: function($event) {
                        return _vm.selectDesignbar("sizeShape")
                      }
                    }
                  },
                  [
                    _vm._v(
                      "\n                           Size/Shape\n                       "
                    )
                  ]
                ),
                _vm._v(" "),
                _c(
                  "button",
                  {
                    staticClass: "btn mr-2",
                    class: [_vm.menu.background ? "btn-danger" : "btn-dark"],
                    on: {
                      click: function($event) {
                        return _vm.selectDesignbar("background")
                      }
                    }
                  },
                  [
                    _vm._v(
                      "\n                           Background\n                       "
                    )
                  ]
                ),
                _vm._v(" "),
                _c(
                  "button",
                  {
                    staticClass: "btn  mr-2",
                    class: [_vm.menu.border ? "btn-danger" : "btn-dark"],
                    on: {
                      click: function($event) {
                        return _vm.selectDesignbar("border")
                      }
                    }
                  },
                  [
                    _vm._v(
                      "\n                           Border\n                       "
                    )
                  ]
                )
              ]),
              _vm._v(" "),
              _c(
                "div",
                { ref: "printcontent", staticClass: "col-md-12 mt-4" },
                [
                  _c(
                    "div",
                    {
                      staticClass: "design-area shadow",
                      class: _vm.getShapeClass
                    },
                    [
                      _vm.backgroundImage
                        ? _c("img", {
                            staticClass: "h-100 w-100",
                            attrs: { src: _vm.backgroundImage }
                          })
                        : _vm._e(),
                      _vm._v(" "),
                      _vm._l(_vm.clipartDesigns, function(
                        clipartDesign,
                        index
                      ) {
                        return _c(
                          "drr",
                          {
                            key: index,
                            attrs: {
                              x: clipartDesign.x,
                              y: clipartDesign.y,
                              w: clipartDesign.weight,
                              h: clipartDesign.height,
                              angle: clipartDesign.angle,
                              selected: clipartDesign.selected,
                              aspectRatio: true,
                              innerBox: _vm.innerBox,
                              outerBox: _vm.outerBox
                            },
                            on: {
                              select: function($event) {
                                return _vm.selectItemClipart(index)
                              }
                            }
                          },
                          [
                            _c("img", {
                              staticStyle: { width: "100%", height: "100%" },
                              attrs: { src: clipartDesign.img }
                            })
                          ]
                        )
                      }),
                      _vm._v(" "),
                      _vm._l(_vm.textDesigns, function(textDesign, index) {
                        return _c(
                          "drr",
                          {
                            key: index,
                            attrs: {
                              x: textDesign.x,
                              y: textDesign.y,
                              w: textDesign.weight,
                              h: textDesign.height,
                              angle: textDesign.angle,
                              selected: textDesign.selected,
                              aspectRatio: true
                            },
                            on: {
                              select: function($event) {
                                return _vm.selectItem(index)
                              }
                            }
                          },
                          [
                            _c(
                              "span",
                              {
                                class: _vm.getCustomDesignClass(index),
                                staticStyle: { width: "100%", height: "100%" }
                              },
                              [_vm._v(_vm._s(textDesign.text))]
                            )
                          ]
                        )
                      })
                    ],
                    2
                  )
                ]
              )
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "col-md-5" }, [
            _c("div", { staticClass: "row" }, [
              _c("div", { staticClass: "col-md-12" }, [
                _c(
                  "button",
                  {
                    staticClass: "btn btn-success mr-2",
                    on: { click: _vm.addText }
                  },
                  [
                    _vm._v(
                      "\n                           Add Text\n                       "
                    )
                  ]
                ),
                _vm._v(" "),
                _c(
                  "button",
                  {
                    staticClass: "btn btn-primary mr-2",
                    on: {
                      click: function($event) {
                        return _vm.$modal.show("clipart-modal")
                      }
                    }
                  },
                  [
                    _vm._v(
                      "\n                           Add Clipart\n                       "
                    )
                  ]
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "col-md-12" }, [
                _vm.menu.sizeShape
                  ? _c("div", { staticClass: "card mt-4" }, [
                      _vm._m(0),
                      _vm._v(" "),
                      _c("ul", { staticClass: "list-group list-group-flush" }, [
                        _c("li", { staticClass: "list-group-item" }, [
                          _c("div", { staticClass: "row" }, [
                            _c("div", { staticClass: "col-md-6" }, [
                              _c(
                                "button",
                                {
                                  staticClass: "btn btn-block mb-2",
                                  class: [
                                    _vm.shapeDefaultClass == "rectangle1-3"
                                      ? "btn-danger"
                                      : "btn-dark"
                                  ],
                                  on: {
                                    click: function($event) {
                                      _vm.shapeDefaultClass = "rectangle1-3"
                                    }
                                  }
                                },
                                [_vm._v('1"x3" Rectangle')]
                              )
                            ]),
                            _vm._v(" "),
                            _c("div", { staticClass: "col-md-6" }, [
                              _c(
                                "button",
                                {
                                  staticClass: "btn  btn-block mb-2",
                                  class: [
                                    _vm.shapeDefaultClass == "rectangle1-5-3"
                                      ? "btn-danger"
                                      : "btn-dark"
                                  ],
                                  on: {
                                    click: function($event) {
                                      _vm.shapeDefaultClass = "rectangle1-5-3"
                                    }
                                  }
                                },
                                [_vm._v('1.5"x3" Rectangle')]
                              )
                            ]),
                            _vm._v(" "),
                            _c("div", { staticClass: "col-md-6" }, [
                              _c(
                                "button",
                                {
                                  staticClass: "btn  btn-block",
                                  class: [
                                    _vm.shapeDefaultClass == "oval1-3"
                                      ? "btn-danger"
                                      : "btn-dark"
                                  ],
                                  on: {
                                    click: function($event) {
                                      _vm.shapeDefaultClass = "oval1-3"
                                    }
                                  }
                                },
                                [_vm._v('1"x3" Oval')]
                              )
                            ]),
                            _vm._v(" "),
                            _c("div", { staticClass: "col-md-6" }, [
                              _c(
                                "button",
                                {
                                  staticClass: "btn  btn-block",
                                  class: [
                                    _vm.shapeDefaultClass == "rectangle12-3"
                                      ? "btn-danger"
                                      : "btn-dark"
                                  ],
                                  on: {
                                    click: function($event) {
                                      _vm.shapeDefaultClass = "rectangle12-3"
                                    }
                                  }
                                },
                                [_vm._v('2"x3" Rectangle')]
                              )
                            ])
                          ])
                        ])
                      ])
                    ])
                  : _vm._e(),
                _vm._v(" "),
                _vm.menu.textOptions
                  ? _c("div", { staticClass: "card mt-4" }, [
                      _vm._m(1),
                      _vm._v(" "),
                      _c("div", { staticClass: "card-body" }, [
                        _c("div", { staticClass: "form-group row" }, [
                          _c(
                            "label",
                            {
                              staticClass: "col-sm-3 col-form-label",
                              attrs: { for: "inputPassword" }
                            },
                            [_vm._v("Your Text")]
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-sm-9" }, [
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.getYourText,
                                  expression: "getYourText"
                                }
                              ],
                              staticClass: "form-control",
                              attrs: {
                                type: "text",
                                id: "inputPassword",
                                placeholder: "Your Text"
                              },
                              domProps: { value: _vm.getYourText },
                              on: {
                                input: function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.getYourText = $event.target.value
                                }
                              }
                            })
                          ])
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group row" }, [
                          _c(
                            "label",
                            {
                              staticClass: "col-sm-3 col-form-label",
                              attrs: { for: "inputPassword" }
                            },
                            [_vm._v("Font")]
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-sm-9" }, [
                            _c(
                              "select",
                              {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value:
                                      _vm.textDesigns[_vm.selectedTextBoxIndex]
                                        .font,
                                    expression:
                                      "textDesigns[selectedTextBoxIndex].font"
                                  }
                                ],
                                staticClass: "form-control",
                                on: {
                                  change: function($event) {
                                    var $$selectedVal = Array.prototype.filter
                                      .call($event.target.options, function(o) {
                                        return o.selected
                                      })
                                      .map(function(o) {
                                        var val =
                                          "_value" in o ? o._value : o.value
                                        return val
                                      })
                                    _vm.$set(
                                      _vm.textDesigns[_vm.selectedTextBoxIndex],
                                      "font",
                                      $event.target.multiple
                                        ? $$selectedVal
                                        : $$selectedVal[0]
                                    )
                                  }
                                }
                              },
                              [
                                _c(
                                  "option",
                                  {
                                    staticClass: "font-fnt2",
                                    attrs: { value: "font-fnt2" }
                                  },
                                  [_vm._v("Arial")]
                                ),
                                _vm._v(" "),
                                _c(
                                  "option",
                                  {
                                    staticClass: "font-fnt4",
                                    attrs: { value: "font-fnt4" }
                                  },
                                  [_vm._v("Century Gothic")]
                                ),
                                _vm._v(" "),
                                _c(
                                  "option",
                                  {
                                    staticClass: "font-fnt28",
                                    attrs: { value: "font-fnt28" }
                                  },
                                  [_vm._v("Century Gothic Bold")]
                                ),
                                _vm._v(" "),
                                _c(
                                  "option",
                                  {
                                    staticClass: "font-fnt5",
                                    attrs: { value: "font-fnt5" }
                                  },
                                  [_vm._v("Comic Sans MS")]
                                ),
                                _vm._v(" "),
                                _c(
                                  "option",
                                  {
                                    staticClass: "font-fnt6",
                                    attrs: { value: "font-fnt6" }
                                  },
                                  [_vm._v("Courier New")]
                                )
                              ]
                            )
                          ])
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group row" }, [
                          _c(
                            "label",
                            {
                              staticClass: "col-sm-3 col-form-label",
                              attrs: { for: "inputPassword" }
                            },
                            [_vm._v("Font Style")]
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-sm-9" }, [
                            _c(
                              "select",
                              {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value:
                                      _vm.textDesigns[_vm.selectedTextBoxIndex]
                                        .fontStyle,
                                    expression:
                                      "textDesigns[selectedTextBoxIndex].fontStyle"
                                  }
                                ],
                                staticClass: "form-control",
                                attrs: { id: "inputState" },
                                on: {
                                  change: function($event) {
                                    var $$selectedVal = Array.prototype.filter
                                      .call($event.target.options, function(o) {
                                        return o.selected
                                      })
                                      .map(function(o) {
                                        var val =
                                          "_value" in o ? o._value : o.value
                                        return val
                                      })
                                    _vm.$set(
                                      _vm.textDesigns[_vm.selectedTextBoxIndex],
                                      "fontStyle",
                                      $event.target.multiple
                                        ? $$selectedVal
                                        : $$selectedVal[0]
                                    )
                                  }
                                }
                              },
                              [
                                _c("option", { attrs: { value: "" } }, [
                                  _vm._v("Regular")
                                ]),
                                _vm._v(" "),
                                _c(
                                  "option",
                                  { attrs: { value: "font-weight-bold" } },
                                  [_vm._v("Bold")]
                                ),
                                _vm._v(" "),
                                _c(
                                  "option",
                                  { attrs: { value: "font-italic" } },
                                  [_vm._v("Italic")]
                                )
                              ]
                            )
                          ])
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group row" }, [
                          _c(
                            "label",
                            {
                              staticClass: "col-sm-3 col-form-label",
                              attrs: { for: "inputPassword" }
                            },
                            [_vm._v("Font Size")]
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-sm-9" }, [
                            _c(
                              "select",
                              {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value:
                                      _vm.textDesigns[_vm.selectedTextBoxIndex]
                                        .fontSize,
                                    expression:
                                      "textDesigns[selectedTextBoxIndex].fontSize"
                                  }
                                ],
                                staticClass: "form-control",
                                attrs: { id: "inputState" },
                                on: {
                                  change: function($event) {
                                    var $$selectedVal = Array.prototype.filter
                                      .call($event.target.options, function(o) {
                                        return o.selected
                                      })
                                      .map(function(o) {
                                        var val =
                                          "_value" in o ? o._value : o.value
                                        return val
                                      })
                                    _vm.$set(
                                      _vm.textDesigns[_vm.selectedTextBoxIndex],
                                      "fontSize",
                                      $event.target.multiple
                                        ? $$selectedVal
                                        : $$selectedVal[0]
                                    )
                                  }
                                }
                              },
                              [
                                _c(
                                  "option",
                                  { attrs: { value: "font-size20" } },
                                  [_vm._v("10")]
                                ),
                                _vm._v(" "),
                                _c(
                                  "option",
                                  { attrs: { value: "font-size35" } },
                                  [_vm._v("20")]
                                ),
                                _vm._v(" "),
                                _c(
                                  "option",
                                  { attrs: { value: "font-size50" } },
                                  [_vm._v("30")]
                                )
                              ]
                            )
                          ])
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "form-group row" }, [
                          _c(
                            "label",
                            {
                              staticClass: "col-sm-3 col-form-label",
                              attrs: { for: "inputPassword" }
                            },
                            [_vm._v("Color")]
                          ),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-sm-9" }, [
                            _c(
                              "select",
                              {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value:
                                      _vm.textDesigns[_vm.selectedTextBoxIndex]
                                        .fontColor,
                                    expression:
                                      "textDesigns[selectedTextBoxIndex].fontColor"
                                  }
                                ],
                                staticClass: "form-control",
                                attrs: { id: "inputState" },
                                on: {
                                  change: function($event) {
                                    var $$selectedVal = Array.prototype.filter
                                      .call($event.target.options, function(o) {
                                        return o.selected
                                      })
                                      .map(function(o) {
                                        var val =
                                          "_value" in o ? o._value : o.value
                                        return val
                                      })
                                    _vm.$set(
                                      _vm.textDesigns[_vm.selectedTextBoxIndex],
                                      "fontColor",
                                      $event.target.multiple
                                        ? $$selectedVal
                                        : $$selectedVal[0]
                                    )
                                  }
                                }
                              },
                              [
                                _c("option", { attrs: { value: "" } }, [
                                  _vm._v("Black")
                                ]),
                                _vm._v(" "),
                                _c(
                                  "option",
                                  { attrs: { value: "font-coloRed" } },
                                  [_vm._v("Red")]
                                ),
                                _vm._v(" "),
                                _c(
                                  "option",
                                  { attrs: { value: "font-colorGreen" } },
                                  [_vm._v("Green")]
                                ),
                                _vm._v(" "),
                                _c(
                                  "option",
                                  { attrs: { value: "font-colorBlue" } },
                                  [_vm._v("Blue")]
                                )
                              ]
                            )
                          ])
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "row" }, [
                          _c("div", { staticClass: "col-md-3" }),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-md-9" }, [
                            _c(
                              "button",
                              {
                                staticClass: "btn btn-danger",
                                on: { click: _vm.deleteText }
                              },
                              [_vm._v("Delete Text")]
                            )
                          ])
                        ])
                      ])
                    ])
                  : _vm._e(),
                _vm._v(" "),
                _vm.menu.border
                  ? _c("div", { staticClass: "card mt-4" }, [
                      _vm._m(2),
                      _vm._v(" "),
                      _c("ul", { staticClass: "list-group list-group-flush" }, [
                        _c("li", { staticClass: "list-group-item" }, [
                          _c("div", { staticClass: "row" }, [
                            _c("div", { staticClass: "col-md-6" }, [
                              _c(
                                "button",
                                {
                                  staticClass: "btn btn-block mb-2",
                                  class: [
                                    _vm.borderDefaultClass == "gold-border"
                                      ? "btn-danger"
                                      : "btn-dark"
                                  ],
                                  on: {
                                    click: function($event) {
                                      _vm.borderDefaultClass = "gold-border"
                                    }
                                  }
                                },
                                [_vm._v("Gold Border")]
                              )
                            ]),
                            _vm._v(" "),
                            _c("div", { staticClass: "col-md-6" }, [
                              _c(
                                "button",
                                {
                                  staticClass: "btn  btn-block mb-2",
                                  class: [
                                    _vm.borderDefaultClass == "silver-border"
                                      ? "btn-danger"
                                      : "btn-dark"
                                  ],
                                  on: {
                                    click: function($event) {
                                      _vm.borderDefaultClass = "silver-border"
                                    }
                                  }
                                },
                                [_vm._v("Silver Border")]
                              )
                            ]),
                            _vm._v(" "),
                            _c("div", { staticClass: "col-md-6" }, [
                              _c(
                                "button",
                                {
                                  staticClass: "btn  btn-block mb-2",
                                  class: [
                                    _vm.borderDefaultClass == "black-border"
                                      ? "btn-danger"
                                      : "btn-dark"
                                  ],
                                  on: {
                                    click: function($event) {
                                      _vm.borderDefaultClass = "black-border"
                                    }
                                  }
                                },
                                [_vm._v("Black Border")]
                              )
                            ]),
                            _vm._v(" "),
                            _c("div", { staticClass: "col-md-6" }, [
                              _c(
                                "button",
                                {
                                  staticClass: "btn  btn-block",
                                  class: [
                                    _vm.borderDefaultClass == "rose-border"
                                      ? "btn-danger"
                                      : "btn-dark"
                                  ],
                                  on: {
                                    click: function($event) {
                                      _vm.borderDefaultClass = "rose-border"
                                    }
                                  }
                                },
                                [_vm._v("Rose Border")]
                              )
                            ]),
                            _vm._v(" "),
                            _c("div", { staticClass: "col-md-6" }, [
                              _c(
                                "button",
                                {
                                  staticClass: "btn  btn-block",
                                  class: [
                                    _vm.borderDefaultClass == "no-border"
                                      ? "btn-danger"
                                      : "btn-dark"
                                  ],
                                  on: {
                                    click: function($event) {
                                      _vm.borderDefaultClass = "no-border"
                                    }
                                  }
                                },
                                [_vm._v("No Border")]
                              )
                            ])
                          ])
                        ])
                      ])
                    ])
                  : _vm._e(),
                _vm._v(" "),
                _vm.menu.background
                  ? _c("div", { staticClass: "card mt-4" }, [
                      _c("div", { staticClass: "card-body" }, [
                        _vm._m(3),
                        _vm._v(" "),
                        _c(
                          "div",
                          {
                            staticClass: "tab-content",
                            attrs: { id: "myTabContent" }
                          },
                          [
                            _c(
                              "div",
                              {
                                staticClass: "tab-pane fade show active",
                                attrs: {
                                  id: "MATERIAL",
                                  role: "tabpanel",
                                  "aria-labelledby": "home-tab"
                                }
                              },
                              [
                                _c("div", { staticClass: "row" }, [
                                  _c(
                                    "div",
                                    {
                                      staticClass:
                                        "col-md-4 pt-4 cursor-pointer"
                                    },
                                    [
                                      _c(
                                        "span",
                                        {
                                          on: {
                                            click: function($event) {
                                              _vm.backgroundImage =
                                                "/background/Material/White-Plastic/1.png"
                                            }
                                          }
                                        },
                                        [
                                          _c("img", {
                                            staticClass: "border",
                                            attrs: {
                                              src:
                                                "/background/Material/White-Plastic/1-thumb.png"
                                            }
                                          }),
                                          _vm._v("White - Plastic")
                                        ]
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "div",
                                    {
                                      staticClass:
                                        "col-md-4 pt-4 cursor-pointer"
                                    },
                                    [
                                      _c(
                                        "span",
                                        {
                                          on: {
                                            click: function($event) {
                                              _vm.backgroundImage =
                                                "/background/Material/Gold-Plastic/7.png"
                                            }
                                          }
                                        },
                                        [
                                          _c("img", {
                                            staticClass: "border",
                                            attrs: {
                                              src:
                                                "/background/Material/Gold-Plastic/7-thumb.png"
                                            }
                                          }),
                                          _vm._v("Gold - Plastic")
                                        ]
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "div",
                                    {
                                      staticClass:
                                        "col-md-4 pt-4 cursor-pointer"
                                    },
                                    [
                                      _c(
                                        "span",
                                        {
                                          on: {
                                            click: function($event) {
                                              _vm.backgroundImage =
                                                "/background/Material/Silver-Plastic/8.png"
                                            }
                                          }
                                        },
                                        [
                                          _c("img", {
                                            staticClass: "border",
                                            attrs: {
                                              src:
                                                "/background/Material/Silver-Plastic/8-thumb.png"
                                            }
                                          }),
                                          _vm._v("Silver - Plastic")
                                        ]
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "div",
                                    {
                                      staticClass:
                                        "col-md-4 pt-4 cursor-pointer"
                                    },
                                    [
                                      _c(
                                        "span",
                                        {
                                          on: {
                                            click: function($event) {
                                              _vm.backgroundImage =
                                                "/background/Material/Gold-Metallic/5.png"
                                            }
                                          }
                                        },
                                        [
                                          _c("img", {
                                            staticClass: "border",
                                            attrs: {
                                              src:
                                                "/background/Material/Gold-Metallic/5-thumb.png"
                                            }
                                          }),
                                          _vm._v("Gold Metallic")
                                        ]
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "div",
                                    {
                                      staticClass:
                                        "col-md-4 pt-4 cursor-pointer"
                                    },
                                    [
                                      _c(
                                        "span",
                                        {
                                          on: {
                                            click: function($event) {
                                              _vm.backgroundImage =
                                                "/background/Material/Silver-Metallic/6.png"
                                            }
                                          }
                                        },
                                        [
                                          _c("img", {
                                            staticClass: "border",
                                            attrs: {
                                              src:
                                                "/background/Material/Silver-Metallic/6-thumb.png"
                                            }
                                          }),
                                          _vm._v("Silver Metallic")
                                        ]
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "div",
                                    {
                                      staticClass:
                                        "col-md-4 pt-4 cursor-pointer"
                                    },
                                    [
                                      _c(
                                        "span",
                                        {
                                          on: {
                                            click: function($event) {
                                              _vm.backgroundImage =
                                                "/background/Material/Wood-Grain/11.png"
                                            }
                                          }
                                        },
                                        [
                                          _c("img", {
                                            staticClass: "border",
                                            attrs: {
                                              src:
                                                "/background/Material/Wood-Grain/11-thumb.png"
                                            }
                                          }),
                                          _vm._v("Wood Grain")
                                        ]
                                      )
                                    ]
                                  )
                                ])
                              ]
                            ),
                            _vm._v(" "),
                            _c(
                              "div",
                              {
                                staticClass: "tab-pane fade",
                                attrs: {
                                  id: "custom",
                                  role: "tabpanel",
                                  "aria-labelledby": "profile-tab"
                                }
                              },
                              [
                                _c(
                                  "div",
                                  { staticClass: "row custom-background-img" },
                                  _vm._l(37, function(i) {
                                    return _c(
                                      "div",
                                      {
                                        key: i,
                                        staticClass:
                                          "col-md-4 cursor-pointer pt-4"
                                      },
                                      [
                                        _c("img", {
                                          staticClass: "border",
                                          staticStyle: {
                                            height: "60px",
                                            width: "100px"
                                          },
                                          attrs: {
                                            src:
                                              "/background/Custom/" +
                                              i +
                                              "/thumb.png"
                                          },
                                          on: {
                                            click: function($event) {
                                              _vm.backgroundImage =
                                                "/background/Custom/" +
                                                i +
                                                "/" +
                                                i +
                                                ".png"
                                            }
                                          }
                                        })
                                      ]
                                    )
                                  }),
                                  0
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c(
                              "div",
                              {
                                staticClass: "tab-pane fade",
                                attrs: {
                                  id: "contact",
                                  role: "tabpanel",
                                  "aria-labelledby": "contact-tab"
                                }
                              },
                              [_vm._v("...")]
                            )
                          ]
                        )
                      ])
                    ])
                  : _vm._e()
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "col-md-12" }, [
                _c("img", { attrs: { src: _vm.output } })
              ])
            ])
          ]),
          _vm._v(" "),
          _c(
            "modal",
            {
              attrs: { name: "clipart-modal", adaptive: true, draggable: true }
            },
            [
              _c(
                "div",
                { staticClass: "row p-4 clipart-custom" },
                _vm._l(36, function(i) {
                  return _c(
                    "div",
                    { key: i, staticClass: "col-md-3 cursor-pointer pt-4" },
                    [
                      _c("img", {
                        staticStyle: { height: "60px", width: "100px" },
                        attrs: { src: "/clipart/" + i + "/thumb.png" },
                        on: {
                          click: function($event) {
                            return _vm.addClipart(i)
                          }
                        }
                      })
                    ]
                  )
                }),
                0
              )
            ]
          )
        ],
        1
      )
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "card-header" }, [
      _c("b", [_vm._v("SELECT A SIZE/ SHAPE")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "card-header" }, [
      _c("b", [_vm._v("TEXT OPTIONS")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "card-header" }, [
      _c("b", [_vm._v("BORDER OPTIONS")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "ul",
      { staticClass: "nav nav-tabs", attrs: { id: "myTab", role: "tablist" } },
      [
        _c("li", { staticClass: "nav-item" }, [
          _c(
            "a",
            {
              staticClass: "nav-link active",
              attrs: {
                id: "home-tab",
                "data-toggle": "tab",
                href: "#MATERIAL",
                role: "tab",
                "aria-controls": "home",
                "aria-selected": "true"
              }
            },
            [_vm._v("MATERIAL")]
          )
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "nav-item" }, [
          _c(
            "a",
            {
              staticClass: "nav-link",
              attrs: {
                id: "contact-tab",
                "data-toggle": "tab",
                href: "#custom",
                role: "tab",
                "aria-controls": "contact",
                "aria-selected": "false"
              }
            },
            [_vm._v("CUSTOM")]
          )
        ])
      ]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Shared/WelcomeLayout.vue?vue&type=template&id=65efb180&":
/*!*********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/Shared/WelcomeLayout.vue?vue&type=template&id=65efb180& ***!
  \*********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("header", { staticClass: "fixed-top", attrs: { id: "header" } }, [
      _c("div", { staticClass: "container d-flex align-items-center" }, [
        _c(
          "h1",
          { staticClass: "logo mr-auto" },
          [
            _c("inertia-link", { attrs: { href: "/" } }, [
              _vm._v("Badge Print CO")
            ])
          ],
          1
        ),
        _vm._v(" "),
        _c("nav", { staticClass: "nav-menu d-none d-lg-block" }, [
          _c("ul", [
            _c(
              "li",
              [_c("inertia-link", { attrs: { href: "/" } }, [_vm._v("Home")])],
              1
            )
          ])
        ])
      ])
    ]),
    _vm._v(" "),
    _c("main", [_vm._t("default")], 2),
    _vm._v(" "),
    _vm._m(0)
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("footer", { attrs: { id: "footer" } }, [
      _c("div", { staticClass: "footer-top" }, [
        _c("div", { staticClass: "container" }, [
          _c("div", { staticClass: "row" }, [
            _c("div", { staticClass: "col-lg-3 col-md-6 footer-contact" }, [
              _c("h3", [_vm._v("Badge Print CO")]),
              _vm._v(" "),
              _c("p", [
                _vm._v("\r\n                            A108 Adam Street "),
                _c("br"),
                _vm._v("\r\n                            New York, NY 535022"),
                _c("br"),
                _vm._v("\r\n                            United States "),
                _c("br"),
                _c("br"),
                _vm._v(" "),
                _c("strong", [_vm._v("Phone:")]),
                _vm._v(" +1 5589 55488 55"),
                _c("br"),
                _vm._v(" "),
                _c("strong", [_vm._v("Email:")]),
                _vm._v(" info@example.com"),
                _c("br")
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "col-lg-2 col-md-6 footer-links" }, [
              _c("h4", [_vm._v("Useful Links")]),
              _vm._v(" "),
              _c("ul", [
                _c("li", [
                  _c("i", { staticClass: "bx bx-chevron-right" }),
                  _vm._v(" "),
                  _c("a", { attrs: { href: "#" } }, [_vm._v("Home")])
                ]),
                _vm._v(" "),
                _c("li", [
                  _c("i", { staticClass: "bx bx-chevron-right" }),
                  _vm._v(" "),
                  _c("a", { attrs: { href: "#" } }, [_vm._v("About us")])
                ]),
                _vm._v(" "),
                _c("li", [
                  _c("i", { staticClass: "bx bx-chevron-right" }),
                  _vm._v(" "),
                  _c("a", { attrs: { href: "#" } }, [_vm._v("Services")])
                ]),
                _vm._v(" "),
                _c("li", [
                  _c("i", { staticClass: "bx bx-chevron-right" }),
                  _vm._v(" "),
                  _c("a", { attrs: { href: "#" } }, [
                    _vm._v("Terms of service")
                  ])
                ]),
                _vm._v(" "),
                _c("li", [
                  _c("i", { staticClass: "bx bx-chevron-right" }),
                  _vm._v(" "),
                  _c("a", { attrs: { href: "#" } }, [_vm._v("Privacy policy")])
                ])
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "col-lg-3 col-md-6 footer-links" }, [
              _c("h4", [_vm._v("Our Services")]),
              _vm._v(" "),
              _c("ul", [
                _c("li", [
                  _c("i", { staticClass: "bx bx-chevron-right" }),
                  _vm._v(" "),
                  _c("a", { attrs: { href: "#" } }, [_vm._v("Web Design")])
                ]),
                _vm._v(" "),
                _c("li", [
                  _c("i", { staticClass: "bx bx-chevron-right" }),
                  _vm._v(" "),
                  _c("a", { attrs: { href: "#" } }, [_vm._v("Web Development")])
                ]),
                _vm._v(" "),
                _c("li", [
                  _c("i", { staticClass: "bx bx-chevron-right" }),
                  _vm._v(" "),
                  _c("a", { attrs: { href: "#" } }, [
                    _vm._v("Product Management")
                  ])
                ]),
                _vm._v(" "),
                _c("li", [
                  _c("i", { staticClass: "bx bx-chevron-right" }),
                  _vm._v(" "),
                  _c("a", { attrs: { href: "#" } }, [_vm._v("Marketing")])
                ]),
                _vm._v(" "),
                _c("li", [
                  _c("i", { staticClass: "bx bx-chevron-right" }),
                  _vm._v(" "),
                  _c("a", { attrs: { href: "#" } }, [_vm._v("Graphic Design")])
                ])
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "col-lg-4 col-md-6 footer-newsletter" }, [
              _c("h4", [_vm._v("Join Our Newsletter")]),
              _vm._v(" "),
              _c("p", [
                _vm._v(
                  "Tamen quem nulla quae legam multos aute sint culpa legam noster magna"
                )
              ]),
              _vm._v(" "),
              _c("form", { attrs: { action: "", method: "post" } }, [
                _c("input", { attrs: { type: "email", name: "email" } }),
                _c("input", { attrs: { type: "submit", value: "Subscribe" } })
              ])
            ])
          ])
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "container d-md-flex py-4" }, [
        _c("div", { staticClass: "mr-md-auto text-center text-md-left" }, [
          _c("div", { staticClass: "copyright" }, [
            _vm._v("\r\n                    © Copyright "),
            _c("strong", [_c("span", [_vm._v("Badge Print CO")])]),
            _vm._v(". All Rights Reserved\r\n                ")
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "credits" })
        ]),
        _vm._v(" "),
        _c("div", {
          staticClass: "social-links text-center text-md-right pt-3 pt-md-0"
        })
      ])
    ])
  }
]
render._withStripped = true



/***/ })

}]);