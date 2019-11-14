(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/GenerateOneTimePass"],{

/***/ "./resources/js/frontend/ajax/GenerateOneTimePass.js":
/*!***********************************************************!*\
  !*** ./resources/js/frontend/ajax/GenerateOneTimePass.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
  var submitUrl = "{{route('frontend.user.account.game.otp')}}";
  var submitButton = $("#gen0");
  /* submit form */

  submitButton.click(function (event) {
    event.preventDefault();
    $.ajax({
      method: "GET",
      url: submitUrl,
      success: function success(e) {
        console.log(e);
      }
    });
  });
})();

/***/ }),

/***/ 1:
/*!*****************************************************************!*\
  !*** multi ./resources/js/frontend/ajax/GenerateOneTimePass.js ***!
  \*****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\AuditionNexus\resources\js\frontend\ajax\GenerateOneTimePass.js */"./resources/js/frontend/ajax/GenerateOneTimePass.js");


/***/ })

},[[1,"/js/manifest"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZnJvbnRlbmQvYWpheC9HZW5lcmF0ZU9uZVRpbWVQYXNzLmpzIl0sIm5hbWVzIjpbInN1Ym1pdFVybCIsInN1Ym1pdEJ1dHRvbiIsIiQiLCJjbGljayIsImV2ZW50IiwicHJldmVudERlZmF1bHQiLCJhamF4IiwibWV0aG9kIiwidXJsIiwic3VjY2VzcyIsImUiLCJjb25zb2xlIiwibG9nIl0sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7QUFBQSxDQUFDLFlBQVc7QUFDUixNQUFNQSxTQUFTLEdBQUcsNkNBQWxCO0FBRUEsTUFBTUMsWUFBWSxHQUFHQyxDQUFDLENBQUMsT0FBRCxDQUF0QjtBQUVBOztBQUVBRCxjQUFZLENBQUNFLEtBQWIsQ0FBbUIsVUFBU0MsS0FBVCxFQUFnQjtBQUMvQkEsU0FBSyxDQUFDQyxjQUFOO0FBQ0lILEtBQUMsQ0FBQ0ksSUFBRixDQUFPO0FBQ0hDLFlBQU0sRUFBRSxLQURMO0FBRUhDLFNBQUcsRUFBRVIsU0FGRjtBQUtIUyxhQUFPLEVBQUUsaUJBQVNDLENBQVQsRUFBWTtBQUNqQkMsZUFBTyxDQUFDQyxHQUFSLENBQVlGLENBQVo7QUFDSDtBQVBFLEtBQVA7QUFVUCxHQVpEO0FBYUgsQ0FwQkQsSSIsImZpbGUiOiIvanMvR2VuZXJhdGVPbmVUaW1lUGFzcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbigpIHtcclxuICAgIGNvbnN0IHN1Ym1pdFVybCA9IFwie3tyb3V0ZSgnZnJvbnRlbmQudXNlci5hY2NvdW50LmdhbWUub3RwJyl9fVwiO1xyXG5cclxuICAgIGNvbnN0IHN1Ym1pdEJ1dHRvbiA9ICQoXCIjZ2VuMFwiKTtcclxuXHJcbiAgICAvKiBzdWJtaXQgZm9ybSAqL1xyXG5cclxuICAgIHN1Ym1pdEJ1dHRvbi5jbGljayhmdW5jdGlvbihldmVudCkge1xyXG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XHJcbiAgICAgICAgICAgICQuYWpheCh7XHJcbiAgICAgICAgICAgICAgICBtZXRob2Q6IFwiR0VUXCIsXHJcbiAgICAgICAgICAgICAgICB1cmw6IHN1Ym1pdFVybCxcclxuICAgICAgICAgICAgICAgXHJcblxyXG4gICAgICAgICAgICAgICAgc3VjY2VzczogZnVuY3Rpb24oZSkge1xyXG4gICAgICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKGUpO1xyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9KVxyXG4gICAgICBcclxuICAgIH0pO1xyXG59KSgpO1xyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuIl0sInNvdXJjZVJvb3QiOiIifQ==