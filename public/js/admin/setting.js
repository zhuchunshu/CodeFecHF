/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/admin/setting.js ***!
  \***************************************/
var vue_im_form = {
  data: function data() {
    return {
      old_pwd: "",
      new_pwd: "",
      check_username: true,
      check_email: false,
      check_password: false,
      username: admin.username,
      email: admin.email
    };
  },
  methods: {
    submit: function submit() {
      alert("1");
    }
  }
};
Vue.createApp(vue_im_form).mount("#vue-im-form");
/******/ })()
;