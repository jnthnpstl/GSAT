import { defineStore } from "pinia";
import { useRouter } from "vue-router";
const router =useRouter()

export const loginStore = defineStore('login', {
    state: () => {
        return {
            loginData: {
                username: '',
                password: '',
            },
            error: null,
        }
    },
    actions: {
        login(){
            this.error = null;
            window.axios.post('/auth/login', this.loginData ).then(({data})=>{
            
            // console.log(@json(Auth::check()));
    
                if(data == 1){
                    window.location.href = "/dashboard";
        
                // this.$router.push('/dashboard')
                }else{
                this.error = data;
                }
            })
        },
        chechAuth(){
            window.axios.post('/auth/check').then(({data})=>{
                if(data == 1){
                /**
                 * 
                 * CHANGED
                window.$router.push('/dashboard')
                 */
                  window.location.href = "/dashboard";
                }
            })
        }
    }
})