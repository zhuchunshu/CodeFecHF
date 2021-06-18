import './bootstrap';
import axios from "axios"
import 'sweetalert';
import swal from 'sweetalert';

if(document.getElementById("app")){
    const app = {
        data() {
            return {
                Username:admin.username,
                Email:admin.email,
                avatar:"/logo.svg"
            }
        },
        mounted() {
            axios.post("/api/avatar",{email:admin.email})
            .then(response=>(this.avatar=response.data.result.avatar))
            .catch(function(error){
                swal("请求错误,头像获取失败,详细查看控制台")
                console.log(error)
            })
        },
    }
    Vue.createApp(app).mount("#app")
}
