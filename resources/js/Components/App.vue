<template lang="">
    <div>
        <NavBar v-if="is_logged_in"></NavBar>
        <router-view></router-view>
        
    </div>
</template>
<script>
import NavBar from '../Layouts/NavBar.vue';

export default {
    components:{
        NavBar,
    },

    data(){
        return{
            is_logged_in:true
        }
    }

}
</script>
<style lang="">
    
</style>