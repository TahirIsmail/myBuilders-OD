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
            alert(response.headers['x-redirect']);
            window.location.href = response.headers['x-redirect'];
          } else {
            // Handle other successful responses as needed
            window.location.href = response.headers['x-redirect'];

          }
        }
      }
      catch(e){
        console.error("Error Sending data to the server")
      }
     },
     async sendUserinfoWithJobInfo(){
      try{
        const response = await axios.post('/register',{
          job_information: this.jobInformation,
          ...this.userInformation
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
            alert(response.headers['x-redirect']);
            window.location.href = response.headers['x-redirect'];
          } else {
            // Handle other successful responses as needed
            window.location.href = response.headers['x-redirect'];

          }
        }
      }
      catch(e){
        console.error("Error Sending data to the server")
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
