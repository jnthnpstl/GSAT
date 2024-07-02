<template lang="">
<div>
<div class="flex justify-center mt-10 sm:mt-0">
  <div class="flex justify-center md:gap-6 mt-5">
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form @submit.prevent="store.application">
        <div class="border border-gray-100 shadow-md overflow-hidden sm:rounded-lg">
          <div class="px-4 py-5 bg-white sm:p-6">
            <h1 class="text-3xl text-center font-medium leading-6 text-gray-900 mb-12">Application for Admission</h1>
            <div class="grid grid-cols-3 gap-4 mt-5">
                

              <div>
                <label for="first-name" class="block text-sm font-bold text-gray-700">First name</label>
                <input disabled type="text" v-model="apply.firstname" id="first-name" autocomplete="given-name" class="disabled:opacity-75 mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Firstname">
              </div>

              <div>
                <label for="middlename" class="block text-sm font-bold text-gray-700">Middle Name</label>
                <input disabled type="text" v-model="apply.middlename" id="middlename" autocomplete="middlename" class="disabled:opacity-75 mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Middlename">
              </div>

              <div>
                <label for="lastname" class="block text-sm font-bold text-gray-700">Last name</label>
                <input disabled type="text" v-model="apply.lastname" id="lastname" autocomplete="lastname" class="disabled:opacity-75 mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Lastname">
              </div>
            </div>  
            <div class="grid grid-cols-2 gap-4 mt-2">

              <div>
                <label for="dateofbirth" class="block text-sm font-bold text-gray-700">Date of Birth</label>
                <input type="date" v-model="apply.dateofbirth" id="dateofbirth" autocomplete="email" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div>
                <label for="citizenship" class="block text-sm font-bold text-gray-700">Citizenship</label>
                <input id="citizenship" v-model="apply.citizenship" autocomplete="citizenship-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="ex. Filipino">                
              </div>

            </div>

            <div class="grid grid-cols-2 gap-4 mt-2">
              <div>
                <label for="gender" class="block text-sm font-bold text-gray-700">Gender</label>
                <select disabled type="text" v-model="apply.gender" id="gender" autocomplete="gender" class="disabled:opacity-75 mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    
                    <option selected>Choose Option</option>
                    <option>Male</option>
                    <option>Female</option>
              </select>
              </div>

              <div>
                <label for="civilstatus" class="block text-sm font-bold text-gray-700">Civil Status</label>
                <select disabled type="text" v-model="apply.civilstatus" id="civilstatus" autocomplete="address-level2" class=" disabled:opacity-75 mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    <option selected>Choose Option</option>
                    <option>Single</option>
                    <option>Married</option>
                    <option>Widow/er</option>
                    <option>Divorce</option>
                    </select>
              </div>
  </div>
                <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5 mt-8 mb-8">
                    <div class="border-t border-gray-200"></div>
                </div>
                </div>

            <div class="grid grid-cols-3 gap-4">

              <div>
                <label for="presentoccupation" class="block text-sm font-bold text-gray-700">Present Occupation</label>
                <input type="text" v-model="apply.presentoccupation" id="presentoccupation" autocomplete="address-level1" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div>
                <label for="employer" class="block text-sm font-bold text-gray-700">Employer</label>
                <input type="text" v-model="apply.employer" id="employer" autocomplete="employer" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              </div>

              <div>
                <label for="businessaddress" class="block text-sm font-bold text-gray-700">Business Address</label>
                <textarea type="text" v-model="apply.businessaddress" rows="1" id="businessaddress" autocomplete="businessaddress" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Complete Address"></textarea>
              </div>


              <div>
                <label for="homeaddress" class="block text-sm font-bold text-gray-700">Home Address</label>
                <textarea disabled type="text" v-model="apply.homeaddress" rows="1" id="homeaddress" autocomplete="homeaddress" class="disabled:opacity-75 mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Complete Address"></textarea>
              </div>

              <div>
                <label for="contactnumber" class="block text-sm font-bold text-gray-700">Telephone/CP Number</label>
                <input disabled type="text" v-model="apply.contactnumber" id="contactnumber" autocomplete="contactnumber" class="disabled:opacity-75 mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="ex. 8-7000 or 09xxxxxxxxx" >
              </div>

              <div>
                <label for="email" class="block text-sm font-bold text-gray-700">Email</label>
                <input disabled type="text" v-model="apply.email" id="email" autocomplete="email" class="disabled:opacity-75 mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="ex. jdlacruz@example.com">
              </div>

            </div>

            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5 mt-3 mb-8">
                <div class="border-t border-gray-200"></div>
                </div>
            </div>

              <div>
                <p for="academicbackground" class="block text-sm font-bold text-gray-700">Academic Background, List all schools attended, starting with the latest.</p>
                <ul>
                  <li>
                    <label for="graduate" class="block text-sm text-gray-700">Graduate</label>
                    <input type="text" id="tertiary" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </li>
                  <li>
                    <label for="tertiary" class="block text-sm text-gray-700">Tertiary</label>
                    <input type="text" id="tertiary"class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </li>
                  <li>
                    <label for="secondary" class="block text-sm text-gray-700">Secondary</label>
                    <input type="text" id="secondary" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </li>
                  <li>
                    <label for="primary" class="block text-sm text-gray-700">Primary</label>
                    <input type="text" id="primary" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  </li>
                </ul>
              </div>

            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5 mt-3 mb-3">
                <div class="border-t border-gray-200"></div>
                </div>
            </div>


              <div>
                <label for="degree" class="block text-sm font-bold text-gray-700">Degree Program Applied for:</label>
                <input list="degrees" v-model="apply.degree" id="degree" autocomplete="degree" class="mt-1 p-2 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-lg" placeholder="Applying for:">

                  <datalist id="degrees">
                    <option v-for="(degree, index) in degrees" :value = "degree.id">{{degree.degree}}</option>
                  </datalist>

              
              </div>



             <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5 mt-3 mb-3">
                <div class="border-t border-gray-200"></div>
                </div>
            </div>
              <div>
                <label for="opportunity" class="block text-sm font-bold text-gray-700">List any professor with whom you would especially like to work with if given the opportunity.</label>
                <input type="text" v-model="holders.opportunities" id="opportunity"class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <div class="px-4 py-3 text-right sm:px-6">
                  <button type="button" data-label="opportunities" v-on:click="store.saveToList" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">{{edittingIndex != null ? 'Save' : 'Add'}}</button>
                </div>
                <ul>
                  <li v-for="(item, index) in apply.opportunities" :key = "index" class="border-b hover:bg-gray-50">
                    <div class="flex justify-between">
                      <p class="p-4">
                        {{ item }}
                      </p>
                      <div class="px-4 py-3  text-right sm:px-6">
                        <button type="button" data-label="opportunities" v-on:click="store.editFromList($event, index)" :disabled="edittingIndex != null"  class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Edit</button>
                        <button type="button" data-label="opportunities" v-on:click="store.deleteFromList($event, index)" class="inline-flex justify-center  ml-3 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Delete</button>
                      </div>
                    </div>
                    </li>
                </ul>
                <!-- <label for="opportunity" class="block text-sm font-bold text-gray-700">List any professor with whom you would especially like to work with if given the opportunity.</label>
                
                <textarea type="text" rows="4" v-model="apply.opportunity" id="opportunity" autocomplete="opportunity" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea> -->
              </div>




            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5 mt-3 mb-3">
                <div class="border-t border-gray-200"></div>
                </div>
            </div>


              <div>
                <label for="applying" class="block text-sm font-bold text-gray-700">Semester for which you are applying:</label>
                <select type="text" v-model="apply.applying" id="applying" autocomplete="applying" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-1/4 shadow-sm sm:text-sm border-gray-300 rounded-md">
                    <option selected>Choose Option</option>
                    <option>First Sem (August, 20__)</option>
                    <option>Second Sem (January, 20__)</option>
                    <option>Summer (June, 20__)</option>
             </select>
             </div>


             <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5 mt-8 mb-8">
                <div class="border-t border-gray-200"></div>
                </div>
            </div>


<div class="grid grid-cols-2 gap-4">

              <div>
                <label for="previousapply" class="block text-sm font-bold text-gray-700">Have you previously applied for admission to graduate studies at MMSU?</label>
                <select type="text" v-model="apply.previousapply" id="previousapply" autocomplete="previousapply" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    <option selected>Choose Option</option>
                    <option>Yes</option>
                    <option>No</option>
              </select>
              </div>

              <div>
                <label for="datesubmitted" class="block text-sm font-bold text-gray-700">if Yes..Date Submitted</label>
                <input type="date" v-model="apply.datesubmitted" id="datesubmitted" autocomplete="datesubmitted" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                   
              </div>


              <div>
                <label for="itwas" class="block text-sm font-bold text-gray-700">It was/ is </label>
                <select type="text" v-model="apply.itwas" id="itwas" autocomplete="itwas" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    <option selected>Choose Option</option>
                    <option>Approved</option>
                    <option>Denied</option>
                    <option>Pending Approval</option>
              
                </select>
              </div>


</div>

            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5 mt-8 mb-8">
                <div class="border-t border-gray-200"></div>
                </div>
            </div>

              <div>
                <label for="experience" class="block text-sm font-bold text-gray-700">Your most recent and most pertinent occupational experience:</label>
                <textarea type="text" rows="4" v-model="apply.experience" id="experience" autocomplete="experience" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
              </div>

            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5 mt-3 mb-3">
                <div class="border-t border-gray-200"></div>
                </div>
            </div>


              <div>
                <label for="honor" class="block text-sm font-bold text-gray-700">Please list your membership in honor and professional organizations. Indicate positions held, if any.</label>
                <input type="text" v-model="holders.honors" id="honor"class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <div class="px-4 py-3 text-right sm:px-6">
                  <button type="button" data-label="honors" v-on:click="store.saveToList" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">{{edittingIndex != null ? 'Save' : 'Add'}}</button>
                </div>
                <ul>
                  <li v-for="(item, index) in apply.honors" :key = "index" class="border-b hover:bg-gray-50">
                    <div class="flex justify-between">
                      <p class="p-4">
                        {{ item }}
                      </p>
                      <div class="px-4 py-3  text-right sm:px-6">
                        <button type="button" data-label="honors" v-on:click="store.editFromList($event, index)" :disabled="edittingIndex != null"  class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Edit</button>
                        <button type="button" data-label="honors" v-on:click="store.deleteFromList($event, index)" class="inline-flex justify-center  ml-3 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Delete</button>
                      </div>
                    </div>
                    </li>
                </ul>
                <!-- <label for="honors" class="block text-sm font-bold text-gray-700">Please list your membership in honor and professional organizations. Indicate positions held, if any.</label>
                <textarea type="text" rows="4" v-model="apply.honors" id="honors" autocomplete="honors" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea> -->
              </div>


            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5 mt-3 mb-3">
                <div class="border-t border-gray-200"></div>
                </div>
            </div>


              <div>
                <label for="scholarship" class="block text-sm font-bold text-gray-700">Please list scholarships, honors, prizes, and awards you have received.</label>
                <input type="text" v-model="holders.scholarships" id="scholarship"class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <div class="px-4 py-3 text-right sm:px-6">
                  <button type="button" data-label="scholarships" v-on:click="store.saveToList" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"> {{edittingIndex != null ? 'Save' : 'Add'}}</button>
                </div>
                <ul>
                  <li v-for="(item, index) in apply.scholarships" :key = "index" class="border-b hover:bg-gray-50">
                    <div class="flex justify-between">
                      <p class="p-4">
                        {{ item }}
                      </p>
                      <div class="px-4 py-3  text-right sm:px-6">
                        <button type="button" data-label="scholarships" v-on:click="store.editFromList($event, index)" :disabled="edittingIndex != null" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"> Edit</button>
                        <button type="button" data-label="scholarships" v-on:click="store.deleteFromList($event, index)" class="inline-flex justify-center  ml-3 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Delete</button>
                      </div>
                    </div>
                    </li>
                </ul>
              </div>

            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5 mt-3 mb-3">
                <div class="border-t border-gray-200"></div>
                </div>
            </div>


              <div>
                <label for="publications" class="block text-sm font-bold text-gray-700">Publications:  Give the bibliographical information.</label>
                <textarea type="text" v-model="apply.publications" rows="5" id="publications" autocomplete="publications" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
              </div>

            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5 mt-3 mb-3">
                <div class="border-t border-gray-200"></div>
                </div>
            </div>


              <div>
                <label for="unpublished" class="block text-sm font-bold text-gray-700">Unpublished research papers or theses.</label>
                <textarea type="text" v-model="apply.unpublished" rows="5" id="unpublished" autocomplete="unpublished" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
              </div>

            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5 mt-3 mb-3">
                <div class="border-t border-gray-200"></div>
                </div>
            </div>


              <div>
                <label for="recommend" class="block text-sm font-bold text-gray-700">Names, titles, and addresses of the professors, supervisors, employers, etc. whom you have requested to recommend you.</label>
                <textarea type="text" rows="4" v-model="apply.recommend" id="recommend" autocomplete="recommend" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
              </div>

            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5 mt-3 mb-3">
                <div class="border-t border-gray-200"></div>
                </div>
            </div>


              <div>
                <label for="futureplans" class="block text-sm font-bold text-gray-700">Future plans after completion of graduate studies at the Mariano Marcos State University</label>
                <textarea type="text" rows="4" v-model="apply.futureplans" id="futureplans" autocomplete="futureplans" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
              </div>
            </div>
         
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit"  class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Submit</button>
          </div>
        </div>
    </form>
    </div>
    
    </div>
    
</div>
</div>
</template>
<script setup>

import { onMounted } from 'vue'
import { storeToRefs } from "pinia";
import { applicationStore } from '@/Store/applicationStore';
const store = applicationStore();
const {apply, degrees, holders, edittingIndex} = storeToRefs(store);

onMounted(() => {
    store.fetchData()
});

// export default {
//     data(){
//         return{
//             apply:{
//                 firstname: '',
//                 middlename: '',
//                 lastname: '',
//                 dateofbirth: '',
//                 citizenship: '',
//                 gender: '',
//                 civilstatus: '',
//                 presentoccupation: '',
//                 employer: '',
//                 businessaddress: '',
//                 homeaddress: '',
//                 contactnumber: '',
//                 email: '',
//                 academicbackground: '',
//                 degree: '',
//                 major: '',
//                 opportunity: '',
//                 applying: '',
//                 prevoiusapply: '',
//                 datesubmitted: '',
//                 experience: '', 
//                 honors: '', 
//                 scholarship: '', 
//                 publications: '', 
//                 unpublished: '', 
//                 recommend: '', 
//                 futureplans: '', 
//             },
//             degrees: null
//     }

//     },
    
//     methods: {
//         application(){

//             axios.post('/application', this.apply).then(({data})=>{
                

//             if(data){
//                 alert('Application Sent');
//                 this.apply.firstname = '';
//                 this.apply.middlename = '';
//                 this.apply.lastname = '';
//                 this.apply.dateofbirth = '';
//                 this.apply.citizenship = '';
//                 this.apply.gender = '';
//                 this.apply.civilstatus = '';
//                 this.apply.presentoccupation = '';
//                 this.apply.employer = '';
//                 this.apply.businessaddress = '';
//                 this.apply.homeaddress = '';
//                 this.apply.contactnumber = '';
//                 this.apply.email = '';
//                 this.apply.academicbackground = '';
//                 this.apply.degree = '';
//                 this.apply.major = '';
//                 this.apply.opportunity = '';
//                 this.apply.applying = '';
//                 this.apply.prevoiusapply = '';
//                 this.apply.datesubmitted = '';
//                 this.apply.experience = '';
//                 this.apply.honors = '';
//                 this.apply.scholarship= '';
//                 this.apply.publications = '';
//                 this.apply.unpublished = '';
//                 this.apply.recommend = '';
//                 this.apply.futureplans = '';
//             }else{
//                 alert('error')
//             }
//             })
//         }
//     },

//     mounted() {
//         axios.post('/auth/user').then(({data})=>{
//             console.log(data);
//             this.apply.firstname = data.firstname;
//             this.apply.middlename = data.middlename;
//             this.apply.lastname = data.lastname;
//             this.apply.homeaddress = data.address;
//             this.apply.homeaddress = data.address;
//             this.apply.contactnumber = data.contact_number;
//             this.apply.email = data.email;
//             this.apply.gender = data.gender;
//             this.apply.civilstatus = data.civilstatus;
//             this.apply.citizenship = data.citizenship;
//             console.log(this.apply);
         
//         })

//         axios.get('/get/degrees').then(({data})=>{
//           this.degrees = data;

//         });

//         axios.post('/auth/check').then(({data})=>{
//           console.log(data+'auth');
          
//           if(data != 1){
//           this.$router.push('/login');
//           }
//         });


//     },

// }
</script>
<style lang="">
    
</style>