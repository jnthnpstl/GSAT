import { defineStore } from "pinia";
// import { useRouter } from "vue-router";
// const router =useRouter()

export const applicationStore = defineStore('application', {
    state: () => {
        return {
            apply:{
                firstname: '',
                middlename: '',
                lastname: '',
                dateofbirth: '',
                citizenship: '',
                gender: '',
                civilstatus: '',
                presentoccupation: '',
                employer: '',
                businessaddress: '',
                homeaddress: '',
                contactnumber: '',
                email: '',
                academicbackground: '',
                degree: '',
                major: '',
                opportunity: '',
                applying: '',
                prevoiusapply: '',
                datesubmitted: '',
                experience: '', 
                honors: '', 
                scholarship: '', 
                publications: '', 
                unpublished: '', 
                recommend: '', 
                futureplans: '', 
            },
            degrees: null
        }
    },
    actions: {
        application(){

            window.axios.post('/application', this.apply).then(({data})=>{
                

                if(data){
                    alert('Application Sent');
                    this.$reset()
                }else{
                    alert('error')
                }
            })
        },

        fetchData(){
            window.axios.post('/auth/user').then(({data})=>{
                console.log(data);
                this.apply.firstname = data.firstname;
                this.apply.middlename = data.middlename;
                this.apply.lastname = data.lastname;
                this.apply.homeaddress = data.address;
                this.apply.homeaddress = data.address;
                this.apply.contactnumber = data.contact_number;
                this.apply.email = data.email;
                this.apply.gender = data.gender;
                this.apply.civilstatus = data.civilstatus;
                this.apply.citizenship = data.citizenship;
             
            })
    
            window.axios.get('/get/degrees').then(({data})=>{
              this.degrees = data;
    
            });
    
            window.axios.post('/auth/check').then(({data})=>{
              console.log(data+'auth');
              
              if(data != 1){
            //   this.$router.push('/login'); CHNAGED
              window.location.href = "/login";
              }
            });
        }
    }
    
})  