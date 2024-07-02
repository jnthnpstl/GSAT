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
                opportunities: [],
                applying: '',
                prevoiusapply: '',
                datesubmitted: '',
                experience: '', 
                honors: [], 
                scholarships: [], 
                publications: '', 
                unpublished: '', 
                recommend: '', 
                futureplans: '', 
            },
            degrees: null,
            holders: {
                scholarships:'',
                opportunities:'',
                honors:'',
            },
            edittingIndex: null
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

        saveToList(event) {
            const label = event.target?.getAttribute("data-label") ?? '' // if attribute is null/false, default to a string
            if (this.apply.hasOwnProperty(label) && this.holders.hasOwnProperty(label)) {
                if (this.edittingIndex !== null) { // save to list when editing an element
                    this.apply[label][this.edittingIndex] = this.holders[label]
                    this.holders[label] = ''
                    this.edittingIndex = null
                } else if (!this.edittingIndex && this.holders[label].length > 0) {  //save to list when adding an element
                    this.apply[label].push(this.holders[label])
                    this.holders[label] = ''
                }
            } else {
                console.log("Attribute undefined");
            }
        },

        editFromList(event, i) {
            const label = event.target?.getAttribute("data-label") ?? ''
            if (this.holders.hasOwnProperty(label) && this.apply.hasOwnProperty(label)) {
                this.holders[label] = this.apply[label][i]
                this.edittingIndex = i
            } else {
                console.log("Attribute undefined");
            }
        },

        deleteFromList(event, i) {
            const label = event.target?.getAttribute("data-label") ?? ''
            if (this.apply.hasOwnProperty(label)) {
                this.apply[label].splice(i, 1);
            } else {
                console.log("Attribute undefined");
            }
        },

        // saveScholarship(){
        //     if (this.edittingIndex != null) {
        //         this.apply.scholarships[this.edittingIndex] = this.holders.scholarship
        //         this.holders.scholarship = ''
        //         this.edittingIndex = null
        //     } else {
        //         if (this.holders.scholarship.length > 0){
        //             this.apply.scholarships.push(this.holders.scholarship)
        //             this.holders.scholarship = ''
        //         }
        //     }
        // },

        // deleteScholarship(i){
        //     this.apply.scholarships.splice(i, 1);
        // },

        // editScholarship(i){
        //     this.holders.scholarship = this.apply.scholarships[i]
        //     this.edittingIndex = i
        // },

        // saveOpportunity(){
        //     console.log("Clicked")
        //     if (this.edittingIndex != null) {
        //         this.apply.opportunities[this.edittingIndex] = this.holders.opportunity
        //         this.holders.opportunity = ''
        //         this.edittingIndex = null
        //     } else {
        //         if (this.holders.opportunity.length > 0){
        //             this.apply.opportunities.push(this.holders.opportunity)
        //             this.holders.opportunity = ''
        //         }
        //     }
        // },

        // deleteOpportunity(i){
        //     this.apply.opportunities.splice(i, 1);
        // },

        // editOpportunity(i){
        //     this.holders.opportunity = this.apply.opportunities[i]
        //     this.edittingIndex = i
        // },

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

            window.axios.get('/get/application').then(({data})=>{
              console.log("Here's the data")
              console.log(data)
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