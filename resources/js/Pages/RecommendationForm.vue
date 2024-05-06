<template lang="">
<div>
    <div class="flex justify-center mt-10 sm:mt-0">
        <div class="flex justify-center md:gap-6 mt-5">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form @submit.prevent="register">
                <div class="border border-gray-200 shadow-md overflow-hidden sm:rounded-lg p-10 py-8">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <h1 class="text-3xl text-center font-medium leading-6 text-gray-900 mb-12">RECOMMENDATION FORM</h1>
                    <p class="mt-1 text-lg text-gray-600 text-left font-semibold">To the Applicant:</p>
                    <p class="mt-1 text-md text-gray-600 mb-10">This form should be given to professors, supervisors, employers, etc. who are able to evaluate you for graduate study.</p>
                        <div class="grid grid-cols-3 gap-4 mt-5">
                            

                        <div>
                            <label for="first-name" class="block text-sm font-bold text-gray-700">First name</label>
                            <input type="text" v-model="rec.firstname" id="first-name"  class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Firstname">
                        </div>

                        <div>
                            <label for="middlename" class="block text-sm font-bold text-gray-700">Middle Name</label>
                            <input type="text" v-model="rec.middlename" id="middlename"  class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Middlename">
                        </div>

                        <div>
                            <label for="lastname" class="block text-sm font-bold text-gray-700">Last name</label>
                            <input type="text" v-model="rec.lastname" id="lastname"  class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Lastname">
                        </div>
                     </div>
                        <div>
                            <label for="degreesought" class="block text-sm font-bold text-gray-700 mt-5">Degree Sought:  </label>
                            <input type="text"  v-model="rec.degreesought"  class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div>
                            <label for="proposedmajor" class="block text-sm font-bold text-gray-700 mt-5">Proposed Major Field:</label>
                            <input id="proposedmajor" v-model="rec.proposedmajor"  class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                        </div>
                       


                        <div class="hidden sm:block" aria-hidden="true">
                            <div class="py-5 mt-8 mb-8">
                            <div class="border-t border-gray-200"></div>
                            </div>
                        </div>

                     <p class="mt-1 text-lg text-gray-600 text-left font-semibold">To the Evaluator:</p>
                    <p class="mt-1 text-md text-gray-600 mb-8">Your recommendation will be considered confidential. Please return directly to the above address.</p>
                </div>
      

            <div class="grid grid-cols-2 gap-3">


                        <div>
                            <label for="capacity" class="block text-sm font-bold text-gray-700">How long have you known the applicant and in what capacity?</label>
                            <select id="capacity" v-model="rec.capacity"  class="mt-1 block w-3/4 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>As his/her professor</option>
                                <option>As his/ her research adviser</option>
                                <option>As his/ her Employer/ Supervisor</option>
                                <option>Others (please specify ) </option>
                        </select>
                        </div>

                        <div>
                            <label for="years" class="block text-sm font-bold text-gray-700">How many years?</label>
                            <select id="years" v-model="rec.years"  class="mt-1 block w-3/4 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>1 Year</option>
                                <option>2 Year</option>
                                <option>3 Year</option>
                                <option>4 Year</option>
                                <option>5 Year</option>
                                <option>6 Year</option>
                                <option>7 Year</option>
                                <option>8 Year</option>
                                <option>9 Year</option>
                                <option>10 Year</option>

                         </select>
                        </div>

                        <div>
                            <label for="others" class="block text-sm font-bold text-gray-700">Other: Specify</label>
                            <input id="others" v-model="rec.others" class="mt-1 block w-3/4 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
   
                        </div>
            </div>

                        <div class="hidden sm:block" aria-hidden="true">
                            <div class="py-5 mt-8 mb-8">
                            <div class="border-t border-gray-200"></div>
                            </div>
                        </div>

                        <div>
                            <label for="applicantenrolled" class="block text-sm font-bold text-gray-700">Was the applicant enrolled in any of your classes and if so, in what subjects?</label>
                            <textarea id="applicantenrolled" v-model="rec.applicantenrolled" rows="5" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"></textarea>               
   
                        </div>

                        <div>
                            <label for="potential" class="block text-sm font-bold text-gray-700">Please describe the applicant's potential for teaching and research.</label>
                            <textarea id="potential" v-model="rec.potential" rows="5" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"></textarea>                 
                        </div>

                        <div class="hidden sm:block" aria-hidden="true">
                            <div class="py-5 mt-8 mb-8">
                            <div class="border-t border-gray-200"></div>
                            </div>
                        </div>

                        <div>
                            <label for="citizenship" class="text-sm font-bold text-gray-700">Please rate the applicant on each characteristic in comparison with your other students with approximately the same amount of experience and training.</label>
                        </div>


            <div class="grid grid-cols-2 gap-6 mt-10">

                        <div>
                            <label for="intellectualcapacity" class="block text-sm font-bold text-gray-700">1. Intellectual capacity</label>
                        </div>



                        <div>
                            <select id="intellectualcapacity" v-model="rec.intellectualcapacity" class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>Upper 2 %</option>
                                <option>Upper 10 %</option>
                                <option>Upper 25 %</option>
                                <option>Lower 50 %</option>
                                <option>Lower 2 %</option>
                                <option>No Basis for Judgement</option>
                               

                         </select>
                        </div>
                        <div>
                            <label for="ambition" class="block text-sm font-bold text-gray-700">2. Desire to achieve ambition</label>
                        </div>



                        <div>
                            <select id="ambition" v-model="rec.ambition"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>Upper 2 %</option>
                                <option>Upper 10 %</option>
                                <option>Upper 25 %</option>
                                <option>Lower 50 %</option>
                                <option>Lower 2 %</option>
                                <option>No Basis for Judgement</option>
                         </select>
                        </div>
                        <div>
                            <label for="majorfield" class="block text-sm font-bold text-gray-700">3. Potential for success in major field</label>
                        </div>



                        <div>
                            <select id="majorfield" v-model="rec.majorfield"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>Upper 2 %</option>
                                <option>Upper 10 %</option>
                                <option>Upper 25 %</option>
                                <option>Lower 50 %</option>
                                <option>Lower 2 %</option>
                                <option>No Basis for Judgement</option>
                         </select>
                        </div>
                        <div>
                            <label for="emotional" class="block text-sm font-bold text-gray-700">4. Emotional maturity</label>
                        </div>



                        <div>
                            <select id="emotional" v-model="rec.emotional"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>Upper 2 %</option>
                                <option>Upper 10 %</option>
                                <option>Upper 25 %</option>
                                <option>Lower 50 %</option>
                                <option>Lower 2 %</option>
                                <option>No Basis for Judgement</option>
                         </select>
                        </div>
                        <div>
                            <label for="enthusiasm" class="block text-sm font-bold text-gray-700">5. Enthusiasm</label>
                        </div>



                        <div>
                            <select id="enthusiasm" v-model="rec.enthusiasm"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>Upper 2 %</option>
                                <option>Upper 10 %</option>
                                <option>Upper 25 %</option>
                                <option>Lower 50 %</option>
                                <option>Lower 2 %</option>
                                <option>No Basis for Judgement</option>                              

                         </select>
                        </div>
                        <div>
                            <label for="initiative" class="block text-sm font-bold text-gray-700">6. Initiative</label>
                        </div>



                        <div>
                            <select id="initiative" v-model="rec.initiative"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>Upper 2 %</option>
                                <option>Upper 10 %</option>
                                <option>Upper 25 %</option>
                                <option>Lower 50 %</option>
                                <option>Lower 2 %</option>
                                <option>No Basis for Judgement</option>                         
                                </select>
                        </div>
                        <div>
                            <label for="resourcefulness" class="block text-sm font-bold text-gray-700">7. Resourcefulness</label>
                        </div>



                        <div>
                            <select id="resourcefulness" v-model="rec.resourcefulness"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>Upper 2 %</option>
                                <option>Upper 10 %</option>
                                <option>Upper 25 %</option>
                                <option>Lower 50 %</option>
                                <option>Lower 2 %</option>
                                <option>No Basis for Judgement</option>
                         </select>
                        </div>
                        <div>
                            <label for="responsibility" class="block text-sm font-bold text-gray-700">8. Responsibility</label>
                        </div>



                        <div>
                            <select id="responsibility" v-model="rec.responsibility"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>Upper 2 %</option>
                                <option>Upper 10 %</option>
                                <option>Upper 25 %</option>
                                <option>Lower 50 %</option>
                                <option>Lower 2 %</option>
                                <option>No Basis for Judgement</option>
                         </select>
                        </div>
                        <div>
                            <label for="carefulness" class="block text-sm font-bold text-gray-700">9. Carefulness</label>
                        </div>



                        <div>
                            <select id="carefulness" v-model="rec.carefulness"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>Upper 2 %</option>
                                <option>Upper 10 %</option>
                                <option>Upper 25 %</option>
                                <option>Lower 50 %</option>
                                <option>Lower 2 %</option>
                                <option>No Basis for Judgement</option>
                         </select>
                        </div>
                        <div>
                            <label for="originality" class="block text-sm font-bold text-gray-700">10. Originality, Ingenuity</label>
                        </div>



                        <div>
                            <select id="originality" v-model="rec.originality"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>Upper 2 %</option>
                                <option>Upper 10 %</option>
                                <option>Upper 25 %</option>
                                <option>Lower 50 %</option>
                                <option>Lower 2 %</option>
                                <option>No Basis for Judgement</option>
                         </select>
                        </div>
                        <div>
                            <label for="ability" class="block text-sm font-bold text-gray-700">11. Ability to work with others</label>
                        </div>



                        <div>
                            <select id="ability" v-model="rec.ability"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>Upper 2 %</option>
                                <option>Upper 10 %</option>
                                <option>Upper 25 %</option>
                                <option>Lower 50 %</option>
                                <option>Lower 2 %</option>
                                <option>No Basis for Judgement</option>
                         </select>
                        </div>
                        <div>
                            <label for="situations" class="block text-sm font-bold text-gray-700">12. Ability to adjust in new situations</label>
                        </div>



                        <div>
                            <select id="situations" v-model="rec.situations"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>Upper 2 %</option>
                                <option>Upper 10 %</option>
                                <option>Upper 25 %</option>
                                <option>Lower 50 %</option>
                                <option>Lower 2 %</option>
                                <option>No Basis for Judgement</option>
                         </select>
                        </div>

                        <div>
                            <label for="leadership" class="block text-sm font-bold text-gray-700">13. Leadership Quality</label>
                        </div>

                        <div>
                            <select id="leadership" v-model="rec.leadership"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>Upper 2 %</option>
                                <option>Upper 10 %</option>
                                <option>Upper 25 %</option>
                                <option>Lower 50 %</option>
                                <option>Lower 2 %</option>
                                <option>No Basis for Judgement</option>
                         </select>
                        </div>
                        <div>
                            <label for="writtenskills" class="block text-sm font-bold text-gray-700">14. Written Expression skills </label>
                        </div>



                        <div>
                            <select id="writtenskills" v-model="rec.writtenskills"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>Upper 2 %</option>
                                <option>Upper 10 %</option>
                                <option>Upper 25 %</option>
                                <option>Lower 50 %</option>
                                <option>Lower 2 %</option>
                                <option>No Basis for Judgement</option>
                         </select>
                        </div>

                        <div>
                            <label for="oralskills" class="block text-sm font-bold text-gray-700">15. Oral expression skills</label>
                        </div>



                        <div>
                            <select id="oralskills" v-model="rec.oralskills"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                                <option selected>Choose Option</option>
                                <option>Upper 2 %</option>
                                <option>Upper 10 %</option>
                                <option>Upper 25 %</option>
                                <option>Lower 50 %</option>
                                <option>Lower 2 %</option>
                                <option>No Basis for Judgement</option>
                         </select>
                        </div>
            </div>

    <div class="hidden sm:block" aria-hidden="true">
             <div class="py-5 mt-8 mb-8">
            <div class="border-t border-gray-200"></div>
         </div>
    </div>

     <div>
        <label for="first-name" class="block text-sm font-bold text-gray-700">Please indicate additional information concerning the applicant's potential as a graduate student that may not be reflected in his transcript of records. </label>
        <textarea type="text" name="firstname" rows="8" id="first-name"  class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
     </div>

         <div class="hidden sm:block" aria-hidden="true">
             <div class="py-5 mt-8 mb-8">
            <div class="border-t border-gray-200"></div>
         </div>
    </div>

         <div>
        <label for="first-name" class="block text-sm font-bold text-gray-700">Please indicate additional information concerning the applicant's potential as a graduate student that may not be reflected in his transcript of records. </label>
     </div>



    <div class="grid grid-cols-2 gap-6 mt-10">

            <div>
                <label for="outstanding" class="block text-sm font-bold text-gray-700">Outstanding        - Upper 3%</label>
            </div>

            <div>
                <select id="outstanding" v-model="rec.outstanding"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                    <option selected>Choose Option</option>
                    <option>Masteral</option>
                    <option>Doctorate</option>
            </select>
            </div>
            <div>
                <label for="aboveaverage" class="block text-sm font-bold text-gray-700">Above Average   - Upper 15%</label>
            </div>

            <div>
                <select id="aboveaverage" v-model="rec.aboveaverage"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                    <option selected>Choose Option</option>
                    <option>Masteral</option>
                    <option>Doctorate</option>
            </select>
            </div>
            <div>
                <label for="satisfactory" class="block text-sm font-bold text-gray-700">Satisfactory         - Upper 25%</label>
            </div>

            <div>
                <select id="satisfactory" v-model="rec.satisfactory"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                    <option selected>Choose Option</option>
                    <option>Masteral</option>
                    <option>Doctorate</option>
            </select>
            </div>
            <div>
                <label for="withreservation" class="block text-sm font-bold text-gray-700">Satisfactory with some reservations</label>
            </div>

            <div>
                <select id="withreservation" v-model="rec.withreservation"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                    <option selected>Choose Option</option>
                    <option>Masteral</option>
                    <option>Doctorate</option>
            </select>
            </div>
            <div>
                <label for="marginal" class="block text-sm font-bold text-gray-700">Marginal</label>
            </div>

            <div>
                <select id="marginal" v-model="rec.marginal"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                    <option selected>Choose Option</option>
                    <option>Masteral</option>
                    <option>Doctorate</option>
            </select>
            </div>
            <div>
                <label for="unsatisfactory" class="block text-sm font-bold text-gray-700">Unsatisfactory</label>
            </div>

            <div>
                <select id="unsatisfactory" v-model="rec.unsatisfactory"  class="mt-1 block w-1/2 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">                
                    <option selected>Choose Option</option>
                    <option>Masteral</option>
                    <option>Doctorate</option>
            </select>
            </div>

    </div>

        <div class="hidden sm:block" aria-hidden="true">
             <div class="py-5 mt-8 mb-8">
            <div class="border-t border-gray-200"></div>
         </div>
    </div>


    <div class="grid grid-cols-2 gap-6">

    <div>
       <label for="yourname" class="block text-sm font-bold text-gray-700">Your Name:</label>
       <input type="text" v-model="rec.yourname" id="yourname"  class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Lastname">
    </div>
    <div>
       <label for="position" class="block text-sm font-bold text-gray-700">Position:</label>
       <input type="text" v-model="rec.position" id="position"  class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Lastname">
    </div>
    <div>
       <label for="address" class="block text-sm font-bold text-gray-700">Address:</label>
       <input type="text" v-model="rec.address" id="address"  class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Lastname">
    </div>
    <div>
       <label for="date" class="block text-sm font-bold text-gray-700">Date:</label>
       <input type="date" v-model="rec.date" id="date"  class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Lastname">
    </div>

</div>

          <div class="mt-8 indent-1">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Submit</button>
          </div>



</div>







    
            </form>
            </div>
        </div>
    </div>
</div>
</template>
<script>
export default {
    data() {
        return {
            rec:{
                firstname: '',
                middlename: '',
                lastname: '',
                degreesought: '',
                proposemajor: '',
                capacity: '',
                years: '',
                others: '',
                applicantenrolled: '',
                potential: '',
                intellectualcapacity: '',
                ambition: '',
                emotional: '',
                enthusiasm: '',
                initiative: '',
                resourcefulness: '',
                responsibility: '',
                carefulness: '',
                originality: '',
                ability: '',
                situations: '',
                leadership: '',
                writtenskills: '',
                oralskills: '',
                outstanding: '',
                aboveaverage: '',
                satisfactory: '',
                withreservations: '',
                marginal: '',
                unsatisfactory: '',
                yourname: '',
                position: '',
                address: '',
                date: '',
            }
        }
    },

    methods: {
        recommendation(){
            if(data){
                this.rec.firstname = '';
                this.rec.middlename = '';
                this.rec.lastname = '';
                this.rec.degreesought = '';
                this.rec.proposemajor = '';
                this.rec.capacity = '';
                this.rec.years = '';
                this.rec.others = '';
                this.rec.applicantenrolled = '';
                this.rec.potential = '';
                this.rec.intellectualcapacity = '';
                this.rec.ambition = '';
                this.rec.emotional = '';
                this.rec.enthusiasm = '';
                this.rec.initiative = '';
                this.rec.resourcefulness = '';
                this.rec.responsibility = '';
                this.rec.carefulness = '';
                this.rec.originality = '';
                this.rec.ability = '';
                this.rec.situations = '';
                this.rec.leadership = '';
                this.rec.writtenskills = '';
                this.rec.oralskills = '';
                this.rec.outstanding = '';
                this.rec.aboveaverage = '';
                this.rec.satisfactory = '';
                this.rec.withreservations = '';
                this.rec.marginal = '';
                this.rec.unsatisfactory = '';
                this.rec.yourname = '';
                this.rec.position = '';
                this.rec.address = '';
                this.rec.date = '';
            }
        }
    },


}
</script>
<style lang="">
    
</style>