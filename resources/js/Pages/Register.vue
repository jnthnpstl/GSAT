<template lang="">
    <div>
      <form @submit.prevent="register">
        <div class="flex justify-center w-full md:w-auto">
            <div class="flex justify-center mt-12 flex-col">
                <div class="w-full md:w-auto rounded overflow-hidden shadow-lg">
                  <div class="px-6 py-4 ">
                    <div class="font-bold text-2xl mb-2">Profile</div> 
                        <p class="text-gray-700 text-base">
                          <div class="grid grid-cols-3 gap-4">

                            <div>
                              <label for="first-name" class="block text-sm font-medium text-black">First name</label>
                              <input type="text" v-model="reg.firstname" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-green-700 focus:border-green-700 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="First Name" />
                              <span v-if="error.firstname" class="text-red-900 text-xs"><i>{{error.firstname}}</i></span>                
                            </div>

                            <div>
                              <label for="middle-name" class="block text-sm font-medium text-black">Middle Name</label>
                              <input type="text" v-model="reg.middlename" id="middle-name" class="mt-1 focus:ring-green-700 focus:border-green-700 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Middlename" />
                              <span v-if="error.middlename" class="text-red-900 text-xs"><i>{{error.middlename}}</i></span>


                            </div>


                            <div>
                              <label for="last-name" class="block text-sm font-medium text-black">Last name</label>
                              <input type="text" v-model="reg.lastname" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-green-700 focus:border-green-700 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Last Name" />
                              <span v-if="error.lastname" class="text-red-900 text-xs"><i>{{error.lastname}}</i></span>



                            </div>

                            <div>
                              <label for="contact-number" class="block text-sm font-medium text-black">Contact Number</label>
                              <input type="text" v-model="reg.contactnumber" id="contact-number" autocomplete="contact-number" class="mt-1 focus:ring-green-700 focus:border-green-700 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="ex. 09xxxxxxxxx"/>
                              <span v-if="error.contactnumber" class="text-red-900 text-xs"><i>{{error.contactnumber}}</i></span>


                            </div>

                            <div>
                              <label for="birthdate" class="block text-sm font-medium text-black">Birthdate</label>
                              <input id="birthdate" v-model="reg.birthdate" type="date" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-700 focus:border-green-700 sm:text-sm" placeholder="MM/DD/YYYY">
                              <span v-if="error.birthdate" class="text-red-900 text-xs"><i>{{error.birthdate}}</i></span>
                            </div>
                          
            
                            <div>
                              <label for="address" class="block text-sm font-medium text-black">Address</label>
                              <textarea id="address" v-model="reg.address" rows="1" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-700 focus:border-green-700 sm:text-sm" placeholder="Complete Address"></textarea>
                              <span v-if="error.address" class="text-red-900 text-xs"><i>{{error.address}}</i></span>
                            </div>
            

                          </div>

                        <div class="grid grid-cols-3 gap-4 mt-4">


                            <div>
                              <label for="gender" class="block text-sm font-medium text-black">Gender</label>
                              <select id="gender" v-model="reg.gender" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-700 focus:border-green-700 sm:text-sm">
                            
                            <option selected>Choose Option</option>
                            <option>Male</option>
                            <option>Female</option>
                            
                            </select>
                            </div>
            
                            <div>
                              <label for="citizenship" class="block text-sm font-medium text-black">Civil Status</label>
                              <select id="citizenship" v-model="reg.civilstatus" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-700 focus:border-green-700 sm:text-sm">
                            
                                <option selected>Choose Option</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Widow/er</option>
                                <option>Divorce</option>


                            </select>
                            </div>

                            <div>
                              <label for="citizenship" class="block text-sm font-medium text-black">Citizenship</label>
                              <input id="citizenship" v-model="reg.citizenship" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-700 focus:border-green-700 sm:text-sm">
                            </div>


                        </div>
                        
                        </p>
                    </div>
                </div>
              
            
            
    <div>

            <div class="w-full md:w-auto rounded overflow-hidden shadow-lg mt-8">
      <div class="px-6 py-4">
        <div class="font-bold text-2xl mb-2">Account</div>
        <p class="text-gray-700 text-base">

                          <div class="grid grid-cols-2 gap-4">

                    <div>
                      <label for="username" class="block text-sm font-medium text-black">Username</label>
                      <input type="text" v-model="reg.username" id="username" autocomplete="username" class="mt-1 focus:ring-green-700 focus:border-green-700 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Username"/>
                      <span v-if="error.username" class="text-red-900 text-xs"><i>{{error.username}}</i></span>

                    </div>
                    <div>
                      <label for="email" class="block text-sm font-medium text-black">Email</label>
                      <input type="text" v-model="reg.email" id="email" autocomplete="Email" class="mt-1 focus:ring-green-700 focus:border-green-700 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="ex. jdelacruz@example.com"/>
                      <span v-if="error.email" class="text-red-900 text-xs"><i>{{error.email}}</i></span>


                    </div>
                    <div>
                      <label for="password" class="block text-sm font-medium text-black">Password</label>
                      <input type="password" v-model="reg.password" id="password" autocomplete="password" class="mt-1 focus:ring-green-700 focus:border-green-700 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Password" />
                      <span v-if="error.password" class="text-red-900 text-xs"><i>{{error.password}}</i></span>

                    </div>

                    <div>
                      <label for="confirm-password" class="block text-sm font-medium text-black">Confirm Password</label>
                      <input type="password" v-model="reg.confirmpassword" id="confirm-password" class="mt-1 focus:ring-green-700 focus:border-green-700 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Confirm Password" />
                      <span v-if="error.confirmpassword" class="text-red-900 text-xs"><i>{{error.confirmpassword}}</i></span>
                    
                    </div>
                  </div>

              </p>

              </div>
              </div>
              <div class="px-4 py-3 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-800 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Register</button>
              </div>

            </div>
            </div>
        </div>
      </form>
    </div>


</template>
<script>
import axios from 'axios'

export default {
    data(){
      return{
        reg: {
          firstname: '',
          middlename: '',
          lastname: '',
          contact_number: '',
          birthdate: '',
          address: '',
          username: '',
          email: '',
          password: '',
          confirmpassword: '',
        },
        error: [],
      }
    
    },

    methods:{
      register(){
        if(this.reg.password == this.reg.confirmpassword){
              axios.post('/register', this.reg).then(({data})=>{
             this.error = []
              var errors = data.error;
                for (var key in errors) {
                  this.error[key] = errors[key][0]
                }
      
                if (data.success) {
                  alert('save successful');
                  window.location.href = '/login';
                    // this.reg.firstname = '';
                    // this.reg.middlename = '';
                    // this.reg.lastname = '';
                    // this.reg.contactnumber = '';
                    // this.reg.birthdate = '';
                    // this.reg.address = '';
                    // this.reg.username = '';
                    // this.reg.email = '';
                    // this.reg.password = '';
                    // this.reg.confirmpassword = '';
                    // this.$emit('updated');
                  } else {
                    
                    alert('Edit Unsuccessful');
                }
            });
          }else{
            alert ('Password not match')
          }    
       }
      }
}

</script>
<style lang="">
    
</style>