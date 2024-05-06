<template lang="">
<div>

    <div class="flex justify-center mt-10 grid-cols-2 gap-4">

          <div class="max-w-sm">
              <div class="p-4 py-3">

                  <a>
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black hover:scale-105 hover:bg-blue-50 duration-300">Profile</h5>
                  </a>
                  <td class="mb-3 font-normal font-serif  text-black dark:text-black gap-5">Name:</td>
                  <td><input disabled v-model="dash.name"  class="mb-3"></td>
                    <br>
                  <td class="mb-3 font-normal font-serif  text-black dark:text-black">Student Number:</td>
                   <td><input disabled v-model="dash.studentnumber"  class="mb-3"></td>
                    <br>
                  <td class="mb-3 font-normal font-serif text-black dark:text-black">Degree:</td>
                    <td><input disabled v-model="dash.degree"  class="mb-3"></td>
                    <br>
                  <td class="mb-3 font-normal font-serif text-black dark:text-black">Curriculum:</td>
                    <td><input disabled v-model="dash.curriculum"  class="mb-3"></td>

              
                   
              
              </div>
          </div>



          <div class="max-w-xs bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-100 dark:border-gray-100 hover:scale-105 hover:bg-blue-50 duration-300">
              <div class="p-5">
                  <a>
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">Schedule:</h5>
                  </a>
                  <p class="mb-3 font-normal text-black dark:text-black">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
              
                   
              
              </div>
          </div>

    </div>

    <div class="flex justify-center mt-10">

          <div class="w-5/12 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-100 dark:border-gray-100 hover:scale-105 hover:bg-blue-50 duration-300">
              <div class="p-5">
                  <a>
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">Proceed to Online Application</h5>
                  </a>
                  <p class="mb-3 font-normal text-black dark:text-black">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
              
                    <a href="/applicationForm" class="font-medium text-indigo-600 hover:text-indigo-800 text-right">- Fill out Application Form</a><br>
                    <a href="/recommendationForm" class="font-medium text-indigo-600 hover:text-indigo-800 text-right">- Download Recommendation Form</a>
                   
              
              </div>
          </div>

    </div>




  <div class="flex justify-center mt-3">
          
   

          <div class="w-5/12 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-100 dark:border-gray-100 hover:scale-105 hover:bg-blue-50 duration-300">
              <div class="p-5">
                  <a>
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">MMSU Mission and Vision</h5>
                  </a>
                  <p class="mb-3 font-semibold text-lg text-green-500 dark:text-green-600">Mission</p>
                  <p class="mb-3 font-normal text-md text-black dark:text-black"><i>"To develop virtuous human capital and sustainable innovations in a knowledge-driven global economy"</i></p>

                  <p class="mb-3 font-semibold text-lg text-yellow-500  dark:text-yellow-600">Vision</p>
                  <p class="mb-3 font-normal text-md text-black dark:text-black"><i>"A premier Philippine university by 2028"</i></p>
              </div>
          </div>

    </div>


    <div class="flex justify-center mt-3">


          <div class="w-5/12 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-100 dark:border-gray-100 hover:scale-105 hover:bg-blue-50 duration-300">
              <div class="p-5">
                  <a>
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black" for="file_input">Core Values</h5>
                  </a>
                  
                  
                  <p class="mb-3 font-bold  text-lg">1. Knowledge.</p>
                  <p class="mb-3 font-normal text-md text-black dark:text-black indent-7"><i> Upholding knowledge as empowerment, we aim to develop intelligent individuals who can make informed decisions.</i></p>
                  
                  <p class="mb-3 font-bold text-lg">2. Inclusiveness.</p>
                  <p class="mb-3 font-normal text-md text-black dark:text-black indent-7"><i> We support and encourage diversity and collaboration, engaging in programs that promote growth and development for all sectors of society.</i></p>
                  
                  <p class="mb-3 font-bold text-lg">3. Professionalism.</p>
                  <p class="mb-3 font-normal text-md text-black dark:text-black indent-7"><i> Reared in a merit-based environment, we commit ourselves to the highest standards of ethics and professionalism.</i></p>
                  
                  <p class="mb-3 font-bold text-lg">4. Spirituality and Social Responsibility.</p>
                  <p class="mb-3 font-normal text-md text-black dark:text-black indent-7"><i> We are committed to providing holistic development that inculcates love and service to God, humanity, and the environment.</i></p>

              </div>
          </div>

</div>


    <div class="flex justify-center mt-3">


          <div class="w-5/12 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-100 dark:border-gray-100 hover:scale-105 hover:bg-blue-50 duration-300">
              <div class="p-5">
                  <a>
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black" for="file_input">Statement of the 7-Point Agenda</h5>
                  </a>
                  
                  
                  <td class="mb-3 font-bold  text-lg text-green-500">A -</td>
                  <td class="mb-3 font-normal text-md text-black dark:text-black indent-7"><i> Upholding knowledge as empowerment, we aim to develop intelligent individuals who can make informed decisions.</i></td>
                     <br><br>
                 
                  <td class="mb-3 font-bold text-lg text-green-500">C -</td>
                  <td class="mb-3 font-normal text-md text-black dark:text-black indent-7"><i> We support and encourage diversity and collaboration, engaging in programs that promote growth and development for all sectors of society.</i></td>
                    <br><br>
                  
                  <td class="mb-3 font-bold text-lg text-green-500">H -</td>
                  <td class="mb-3 font-normal text-md text-black dark:text-black indent-7"><i> Reared in a merit-based environment, we commit ourselves to the highest standards of ethics and professionalism.</i></td>
                     <br><br>
                 
                  <td class="mb-3 font-bold text-lg text-green-500">I -</td>
                  <td class="mb-3 font-normal text-md text-black dark:text-black indent-7"><i> We are committed to providing holistic development that inculcates love and service to God, humanity, and the environment.</i></td>
                    <br><br>

                  <td class="mb-3 font-bold text-lg text-green-500">E -</td>
                  <td class="mb-3 font-normal text-md text-black dark:text-black indent-7"><i> We are committed to providing holistic development that inculcates love and service to God, humanity, and the environment.</i></td>
                     <br><br>
                 
                  <td class="mb-3 font-bold text-lg text-green-500">V -</td>
                  <td class="mb-3 font-normal text-md text-black dark:text-black indent-7"><i> We are committed to providing holistic development that inculcates love and service to God, humanity, and the environment.</i></td>
                    <br><br>
                  
                  <td class="mb-3 font-bold text-lg text-green-500">E -</td>
                  <td class="mb-3 font-normal text-md text-black dark:text-black indent-7"><i> We are committed to providing holistic development that inculcates love and service to God, humanity, and the environment.</i></td>

              </div>
          </div>

</div>


    <div class="flex justify-center mt-3">  
      

          <div class="w-5/12 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-100 dark:border-gray-100 hover:scale-105 hover:bg-blue-50 duration-300">
              <div class="p-5">
                  <a>
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">Steps:</h5>
                  </a>

                  <div class="grid-cols-2 gap-5">
                    <p class="font-bold text-md">Step 1:</p>   
                    <p class="indent-7">On your scheduled enrolment, sign in using your Student Number and Password.</p> 
                    <br><br>
                    <p class="font-bold text-md">Step 2:</p> 
                    <p class="indent-7">Download the detailed instruction here.
                                            Choose the courses to be enrolled this semester by clicking the Enrolment link.
                                            Update your Personal Data Sheet.
                                            You can add/remove/edit courses to be enrolled.
                                            Once done, click "Submit for Approval".
                                            Note: Wait for the approval of your Enrolling Adviser.</p>   

                 <br><br>
                    <p class="font-bold text-md">Step 3:</p> 
                    <p class="indent-7">Merchant's Name: Mariano Marcos State University
                                            Type of Fee: Tuition Fee
                                            Mode: Full Payment
                                            Email a copy of Form 5 and bank transaction details to cashier@mmsu.edu.ph.
                                            Option 2: Offline Payment
                                            Print 3 copies of your Form 5.
                                            Pay your fees at the Cashier's Office - FEM Hall (Admin. Bldg) - Batac, CTE-Laoag, or CIT-Laoag.</p>
                    <br><br>
                    <p class="font-bold text-md">Step 4:</p>   
                    <p class="indent-7">	
                                        Print a copy of your Form 5 and TES Form.
                                        Submit the e-copy of the following on the first day of classes:
                                        Form 5 to your department.
                                        TES Form (signed by Parents only) to the Office of Student Affairs and Services - FEM Hall (Admin. Bldg) - Batac thru isps@mmsu.edu.ph
                                        Note: Please complete and submit all required documents.</p> 

              </div>
              </div>
          </div>



     
                  
              
      
    </div>
                   

</div>  
</template>
<script>
import axios from 'axios';


export default {

    data() {
        return {
            dash:{
                name: '',
            }
        }
    },

  
    mounted() {
        axios.post('/auth/user').then(({data})=>{
            console.log(data);
            this.dash.name = data.first_name;
            this.dash.degree = data.degree_id;
        })



         axios.post('/auth/check').then(({data})=>{
          console.log(data+'auth');
          
          if(data != 1){
          this.$router.push('/login');
          }
        });

    },



}
</script>
<style lang="">
  
</style>