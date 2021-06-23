const { default: axios } = require("axios");

const empty = {
  data() {
    return {
      code: 200,
      msg: "error",
      url:"/"
    };
  },
  mounted() {
    axios
      .get(location.href + "?data=json")
      .then(
        (response) => (
          (this.code = response.data.code),
          (this.msg = response.data.result.msg),
          (this.url = document.referrer)
        )
      )
      .catch(function (error) {
        console.log(error);
        swal({
          title: "错误信息获取失败! 详细请查看控制台",
        });
      });
  },
};

Vue.createApp(empty).mount("#empty");
