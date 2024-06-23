<template>

  <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <div>
        <img class="mx-auto h-20 w-auto" src="https://logger.mmsu.edu.ph/images/mmsu-logo.png" alt="MMSU_Logo" />
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Sign in to your account</h2>
        <p class="mt-2 text-center text-sm text-gray-600">

        </p>
      </div>
      <form class="mt-8 space-y-6" @submit.prevent="store.login">
        <input type="hidden" name="remember" value="true" />
        <div class="rounded-md shadow-sm -space-y-px">
          <div>
            <label for="username" class="sr-only">Username</label>
            <input id="username" v-model="loginData.username" autocomplete="username" type="username" required="" class="appearance-none rounded-none mb-3 relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm" placeholder="Username" />
          
          </div>
          <div>
            <label for="password" class="sr-only">Password</label>
            <input id="password" v-model="loginData.password" type="password" autocomplete="current-password" required="" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:z-10 sm:text-sm" placeholder="Password" />
          </div>

        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded" />
            <label for="remember-me" class="ml-2 block text-sm text-gray-900"> Remember me </label>
          </div>

          <div class="text-sm">
            <a href="/forgotPassword" class="font-medium text-green-600 hover:text-green-500"> Forgot your password? </a>
          </div>
        </div>
        <span v-if="error" class="text-red-900 text-xs"><i>{{error}}</i></span>

        <div>
          <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-800 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <LockClosedIcon class="h-5 w-5 text-green-800 group-hover:text-green-800" aria-hidden="true" />

            </span>
            Sign in
          </button>
            <p class="text-sm font-semibold mt-2 pt-1 mb-0"></p>

        </div>
      </form>
    </div>
  </div>
</template>

<script setup>

import { onMounted } from 'vue'
import { storeToRefs } from "pinia";
import { loginStore } from '@/Store/loginStore';
const store = loginStore();
const {loginData, error} = storeToRefs(store);

onMounted(() => {
    store.chechAuth()
});

console.log(this)
// export default {
//   data(){
//         return{
//           loginData: {
//             username: '',
//             password: '',
//         },
//             error: null
//         }
//       },
//     methods: {
//       login(){
//         this.error = null;
//         axios.post('/auth/login', this.loginData ).then(({data})=>{
        
//         // console.log(@json(Auth::check()));

//         if(data == 1){
//           window.location.href = "/dashboard";

//         // this.$router.push('/dashboard')

//         }else{
//           this.error = data;
//         }

//         })
//       },
      
//     },

//     mounted() {
//         axios.post('/auth/check').then(({data})=>{

//             if(data == 1){
//                  this.$router.push('/dashboard')
//           }

//       })

//     },
    

// }

</script>