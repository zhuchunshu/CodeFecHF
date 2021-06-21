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
            alert("1")
        }
    },
}

Vue.createApp(vue_im_form).mount("#vue-im-form")