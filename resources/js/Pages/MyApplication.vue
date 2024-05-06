<template lang="">
    <div class="flex justify-center mt-10">
      <!-- component -->
        <div class="bg-white">
        <div class="overflow-x-auto border-x border-t">
        <table class="table-auto w-screen">
            <thead class="border-b">
                <tr class="bg-gray-300">
                    <th class="text-left p-5 font-bold text-lg">
                    Degree
                    </th>
                    <th class="text-left p-5 font-bold text-lg">
                    Status
                    </th>
                    <th class="text-left p-5 font-bold text-lg">
                    Date Applied
                    </th>
                    <th class="text-left p-5 font-bold text-lg">
                    Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in my" :key = "item.id" class="border-b hover:bg-gray-50">
                    <td class="p-5">
                        {{ item.degree }}

                    </td>
                    <td class="p-5">
                         <!-- {{ item. }} -->

                    </td>

                    <td class="p-5">
                        {{ item.created_at }}
                    </td>

                    <td class="p-5">
                    </td>

                </tr>
               
            </tbody>
        </table>
        </div>
        </div>
    </div>
</template>
<script>
export default {


    data(){
        return{
            my: null
                
            
        }
    },
    

    mounted() {

        axios.post('/auth/apply_form').then(({data})=>{
            console.log(data);
            this.my = data;

            // this.my.status = data;
            // this.my.dateapplied = data;
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