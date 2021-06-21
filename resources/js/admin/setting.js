const vue_im_form = {
    data() {
        return {
            old_pwd:"",
            new_pwd:"",
            check_username:true,
            check_email:false,
            check_password:false,
            username:admin.username,
            email:admin.email,
        }
    },
    methods: {
        submit(){
            if(this.check_username){
                // 修改用户名
                alert("1")
            }
            if(this.check_email){
                // 修改邮箱
                alert("2")
            }
            if(this.check_password){
                // 修改密码
                alert("3")
            }
        }
    },
}

Vue.createApp(vue_im_form).mount("#vue-im-form")