import { defineStore } from 'pinia';
import axios from 'axios';
import { reactive } from 'vue';
export const useQuestionnaireStore = defineStore('questionnaire', {
  state: () => ({
    jobCategories: [],
    jobInformation: null,
    userInformation: null,
    isUserSignedUp : false,
    selectedAnswers : reactive({}),
    jobDescription: '',
    selectedCategory: null,
    email: '',
  }),
  getters: {
    getAllSelectedAnswers: (state) => {
      return state.selectedAnswers;
    },
    getJobDescription:(state) => {
      return state.jobDescription;
    },
    getSelectedCategory:(state) => {
      return state.selectedCategory;
    },
    getJobInformation:(state) => {
      return state.jobInformation;
    },
    getUserInformation:(state) => {
      return state.userInformation;
    }

  },
  actions: {
    
    async loadJobCategories() {
        try {
          const response = await axios.get('/api/job-categories');
          this.jobCategories = response.data;
        
        } catch (error) {
          console.error('Failed to load job categories:', error);
        }
      },
      setAnswerForQuestion(index, selectedAnswer) {
        // Store the selected answer for a specific question
        this.selectedAnswers[index] = selectedAnswer;
      },
      setJobDescription(jobDescription){
        
        this.jobDescription = jobDescription
      },
      setSelectedCategory(category){
        this.selectedCategory = category
      },
      setjobInformation(jobInformation){
        this.jobInformation = jobInformation
      },
      setUserInformation(userInformation){
        this.userInformation = userInformation
      },
     async sendJobinformation(){
      try{
        const response = await axios.post('/jobinfo',{
          ...this.jobInformation
        },{
          headers: {
        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
    },
        })
        if (response.status === 200) {
          // Check if there is a redirect in the response headers
            console.log(response.data);
          if (response.headers['x-redirect']) {
            // Handle the redirect on the client side
            
            window.location.href = response.headers['x-redirect'];
          } else {
            // Handle other successful responses as needed
            Swal.fire({
              icon: "error",
              title: "Oops...",
              text: "Something went wrong!",
              footer: '<a href="#">Why do I have this issue?</a>'
            });
            window.location.href = response.headers['x-redirect'];

          }
        }
      }
      catch(e){
        console.error("Error Sending data to the server")
      }
     },
     async sendUserinfoWithJobInfo() {
      try {
        const response = await axios.post('/register', {
          job_information: this.jobInformation,
          ...this.userInformation,
        }, {
          headers: {
            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
          },
        });
        
        if (response.status === 200) {
          // Check if there is a redirect in the response headers
          if (response.headers['x-redirect']) {
            // Handle the redirect on the client side
            await Swal.fire({
              title: 'The Job will be posted after verification',
              text: 'You have successfully signed up. Proceed to verify your phone number',
              icon: 'success',
              showConfirmButton: true,
            });
    
            // Redirect after the Swal confirmation
            window.location.href = response.headers['x-redirect'];
          }
        } 
        
      } catch (e) {
        if (e.response) {
          // The request was made and the server responded with a status code
          // that falls out of the range of 2xx
          console.error(e.response);
          console.error('Response data:', e.response.data); // This will contain the validation errors
          console.error('Response status:', e.response.status);
          console.error('Response headers:', e.response.headers);
          
          // You can use the error response data to display specific error messages
          // to the user using Swal or any other alert mechanism.
          const message = e.response.data.message;
          if (typeof message === "object") {
            await Swal.fire({
              title: 'Verification Error',
              text: e.response.data.message.verification[0],
              icon: 'error',
              showConfirmButton: true,
            });
          }
          else{
            await Swal.fire({
              title: 'Validation Error',
              text: e.response.data.message,
              icon: 'error',
              showConfirmButton: true,
            });
          }
          
        } else if (e.request) {
          // The request was made but no response was received
          console.error('No response received from the server');
        } else {
          // Something happened in setting up the request that triggered an Error
          console.error('Error during request setup', e.message);
        }
      }
    },
     resetState(){
      this.jobInformation = null,
      this.userInformation = null,
      this.isUserSignedUp = false,
      this.selectedAnswers = reactive({}),
      this.jobDescription = '',
      this.selectedCategory = null
     },
      setEmail(email) {
      this.email = email;
    },

    
  },
});
