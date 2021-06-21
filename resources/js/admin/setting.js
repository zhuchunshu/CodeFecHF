const vue_im_form = {
    data() {
        return {
            username:admin.username,
            email:admin.email
        }
    },
}

Vue.createApp(vue_im_form).mount("#vue-im-form")