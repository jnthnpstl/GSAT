import { defineStore } from "pinia";

export const registerStore = defineStore('register', {
    state: () => {
        return {
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
    actions: {
        register() {
            if(this.reg.password == this.reg.confirmpassword) {
                window.axios.post('/register', this.reg).then(({data})=>{
                    this.error = []
                    var errors = data.error;
                    for (var key in errors) {
                        this.error[key] = errors[key][0]
                    }
            
                    if (data.success) {
                        alert('save successful');
                        window.location.href = '/login';
                    } else {
                        alert('Edit Unsuccessful');
                    }
                });
            } else {
                alert ('Password not match')
            }    
        }
    }
})