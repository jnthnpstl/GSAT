<template lang="">
    <div>

<nav class="bg-green border-gold-500 px-5 sm:px-5 py-2.5 h-70 bg-green-800">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="https://www.mmsu.edu.ph/" class="flex gap-3 items-center">
        <img src="https://logger.mmsu.edu.ph/images/mmsu-logo.png" class="mx-auto h-10   w-auto" alt="MMSU logo">
        <span class="self-center text-2xl font-normal whitespace-nowrap font-serif text-white">Mariano Marcos State University</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-white-500 rounded-lg md:hidden hover:bg-white-100 focus:outline-none focus:ring-2 focus:ring-white-200 dark:text-white-400 dark:hover:bg-white-700 dark:focus:ring-white-600" aria-controls="navbar-default" aria-expanded="false">
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
        <li>
          <router-link class="block py-2 pr-4 pl-3 text-white-700 hover:bg-white-50 md:hover:bg-transparent md:border-0 md:hover:text-black-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-white-700 dark:hover:text-white md:dark:hover:bg-transparent" to="/dashboard">Dashboard</router-link>
        </li>
        <!-- <li>
          <router-link class="block py-2 pr-4 pl-3 text-white bg-white-700 rounded md:bg-transparent md:text-white-700 md:p-0 dark:text-white" aria-current="page" to="/home">Home</router-link>
        </li>
        <li>
        <router-link class="block py-2 pr-4 pl-3 text-white-700 border-b border-white-100 hover:bg-white-50 md:hover:bg-transparent md:border-0 md:hover:text-black-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-white-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-white-700" to="/about">About</router-link>
        </li> -->
        <li>
        <router-link class="block py-2 pr-4 pl-3 text-white-700 border-b border-white-100 hover:bg-white-50 md:hover:bg-transparent md:border-0 md:hover:text-black-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-white-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-white-700" to="/myApplication">My Application</router-link>
        </li>
        <li v-if="is_auth">
        <router-link  class="block py-2 pr-4 pl-3 text-white-700 hover:bg-white-50 md:hover:bg-transparent md:border-0 md:hover:text-black-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-white-700 dark:hover:text-white md:dark:hover:bg-transparent" to="/register">Register</router-link>
        </li>
        <li v-if="is_auth">
        <router-link  class="block py-2 pr-4 pl-3 text-white-700 hover:bg-white-50 md:hover:bg-transparent md:border-0 md:hover:text-black-700 md:p-0 dark:text-white-400 md:dark:hover:text-white dark:hover:bg-white-700 dark:hover:text-white md:dark:hover:bg-transparent" to="/login">Log In</router-link>
        </li>
        <li v-else >
          <span @click="logout" class="hover:cursor-pointer">Logout</span>
        </li>



      </ul>
    </div>
  </div>
</nav>



</div>
</template>
<script>
import axios from 'axios'

export default {
    data()
    {

      return{
        is_auth: false
      }
    },

    mounted() {
      this.checker();


    },

    methods: {
      logout(){
        axios.post('/auth/logout').then(({data})=>{
          this.checker();

          if(data == 0){
            
            this.$router.push('/login');

          }
          
        })
      },
      checker(){
              axios.post('/auth/check').then(({data})=>{

          if(data == 1){
          this.is_auth = false
          }else{
            this.is_auth = true
          }

      })

      }
    },


}
</script>
<style lang="">
    
</style>