<template lang="">
<div>
    <div class="flex justify-center mt-10 sm:mt-0">
        <div class="flex justify-center md:gap-6 mt-5">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form @submit.prevent="register">
                <div class="shadow overflow-hidden sm:rounded-md p-10 py-8">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <h1 class="text-3xl text-center font-medium leading-6 text-gray-900 mb-12">Interview Results</h1>
                        <div class="grid grid-cols-2 gap-4 mt-5">
                            

                        <div>
                            <label for="fullname" class="block text-sm font-bold text-gray-700">Name:</label>
                            <input type="text" name="fullname" id="fullname" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Full Name">
                        </div>

                        <div>
                            <label for="middlename" class="block text-sm font-bold text-gray-700">Age</label>
                            <input type="number" name="middlename" id="middlename" autocomplete="middlename" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Age">
                        </div>

                        <div>
                            <label for="lastname" class="block text-sm font-bold text-gray-700">Sex</label>
                            <input type="text" name="lastname" id="lastname" autocomplete="lastname" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="">
                        </div>
                        <div>
                            <label for="lastname" class="block text-sm font-bold text-gray-700">Civil Status</label>
                            <input type="text" name="lastname" id="lastname" autocomplete="lastname" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="">
                        </div>
                     </div>
                        <div>
                            <label for="" class="block text-sm font-bold text-gray-700 mt-5">Degree Sought:  </label>
                            <input type="text" name="" id="" autocomplete="email" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="" class="block text-sm font-bold text-gray-700 mt-5">Highest Educational Qualification:  </label>
                            <input type="text" name="" id="" autocomplete="email" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="" class="block text-sm font-bold text-gray-700 mt-5">Position/ Designation/ Occupation:  </label>
                            <input type="text" name="" id="" autocomplete="email" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                  <div class="grid grid-cols-2 gap-4 mt-5">

                        <div>
                            <label for="" class="block text-sm font-bold text-gray-700 mt-5">Telephone/Mobile Number:  </label>
                            <input type="text" name="" id="" autocomplete="email" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label for="" class="block text-sm font-bold text-gray-700 mt-5">Home Address:  </label>
                            <textarea type="text" name="" id="" autocomplete="email" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                  </div>  
                  
                        <div>
                            <label for="" class="block text-sm font-bold text-gray-700 mt-5">Interviewer's Comments/ Interpretations: </label>
                            <textarea type="text" name="" id="" autocomplete="email" class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>


                         <div>
                            <label for="" class="block text-sm font-bold text-gray-700 mt-10 text-center">=================================================</label>
                        </div>

                         <h1 class="text-3xl text-center font-medium leading-6 text-gray-900 mb-12 mt-8">Departmental Evaluation</h1>

                    <div class="grid grid-cols-2 gap-4 mt-5">


                        <div class="flex items-center pl-4  border-gray-200 dark:border-gray-300 rounded-md">
                            <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-1" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Default radio</label>
                        </div>

                        <div class="flex items-center pl-4  border-gray-200 dark:gray-300 rounded-md">
                            <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-2" class="py-4 ml-2 w-full text-sm font-medium text-black dark:text-black">Checked state</label>
                        </div>

                        <div class="flex items-center pl-4  border-gray-200 dark:border-gray-300 rounded-md">
                            <input id="bordered-radio-1" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-1" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Default radio</label>
                        </div>

                        <div class="flex items-center pl-4  border-gray-200 dark:border-gray-300 rounded-md">
                            <input checked id="bordered-radio-2" type="radio" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-2" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
                        </div>

                    </div>

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
    

}
</script>
<style lang="">
    
</style>