/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/admin/login.js ***!
  \*************************************/
var form = {
  data: function data() {
    return {
      username: '',
      password: ''
    };
  },
  methods: {
    submit: function submit() {
      axios.post("/admin/login", {
        username: this.username,
        password: this.password
      }).then(function (response) {
        var data = response.data;
        var content = "";

        if (data.success === false) {
          if (data.result instanceof Array) {
            data.result.forEach(function (element) {
              content = content + element + "\n";
            });
            swal({
              icon: "error",
              title: "出错啦!",
              text: content
            });
          }
        } else {
          // 登陆成功
          swal({
            icon: "success",
            title: "Success",
            text: data.result.msg
          });
          setTimeout(function () {
            location.href = data.result.url;
          }, 1500);
        }
      })["catch"](function (error) {
        swal({
          icon: "error",
          title: "请求错误,详细查看控制台输出"
        });
        console.log(error);
      });
    }
  }
};
Vue.createApp(form).mount("#form");
/******/ })()
;