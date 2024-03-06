import {defineStore} from 'pinia'
import axios from 'axios'
import {reactive} from 'vue'
export const useTrademensStore =  defineStore('tradesmen',{
state: () => ({
    userInformation:reactive({}),
    tradingInformation:reactive({}),
    introductionToCustomer:'',
    workAddressDetails:{},
    strongestTrades:{},
    evaluationTrade:{},
    assessmentQuestions:{},
    selectedAnswers:[],
    
    
}),
getters:{
    getUserInfo:(state)=> state.userInformation,
    getTradingInformation:(state) => state.tradingInformation,
    getWorkAddressDetails:(state) => state.workAddressDetails,
    getStrongestTrade:(state) => state.strongestTrades,
    getEvaluationTrade:(state) => state.evaluationTrade,
    getIntroduction:(state) => state.introductionToCustomer,
    getSelectedAnswer:(state) => state.selectedAnswers,
    getStrongestTradesId:(state) => state.strongestTrades.forEach(strongestTrade => ((strongestTrade.map((id) => id))))
},
actions:{
    setUserInformation(userInformation){
        this.userInformation = userInformation
    },
    setUserIntroduction(userIntro){
        this.introductionToCustomer = userIntro.value
    },
    setTradingInformation(tradingInformation){
        this.tradingInformation = tradingInformation
    },
    setWorkingDetails(workAddressDetails){
        this.workAddressDetails = workAddressDetails
    },
    setStrongestTrades(strongestTrades){
        this.strongestTrades = strongestTrades
    },
    setSelectedAnswer(selectedAnswer){
        this.selectedAnswers.push(selectedAnswer)
    },
    setEvaluationTrade(active){
        this.evaluationTrade = active
    },
    setSelectedAnswers(selectedAnswer){
        this.selectedAnswers.push(selectedAnswer)
    },
    resetSelectedAnswers(){
        this.selectedAnswers = []
    },
    async setAssessment(){
        const response =  await axios.post('/getAssessment',{
            id:this.evaluationTrade.id
        });
       this.assessmentQuestions = response.data
    },
    async authenticatedUser(){
        try {
            
            const response = await axios.post('/register', {
              ...this.userInformation,
              trading_info : this.tradingInformation,
              bio : this.introductionToCustomer,
              workaddress : this.workAddressDetails,
              strongesttrades :this.strongestTrades,
              user_type:'freelancer',
            }, {
              headers: {
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
              },
            });
            
            if (response.status === 200) {
              // Check if there is a redirect in the response headers
              if (response.headers['x-redirect']) {
                // Handle the redirect on the client side
                Swal.fire({
                    title: "Evaluation",
                    text: "You Passed the Evaluation",
                    icon: "success",
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "Ready to be on board after successfull sms verification!"
                  }).then((result) => {
                    if (result.isConfirmed) {
                      Swal.fire({
                        title: "Redirecting you to the dashboard!",
                        text: "Registration Successfull",
                        icon: "info"
                      });
                      
                      window.location.href = response.headers['x-redirect'];
                    };
                  });
                // Redirect after the Swal confirmation
               
                
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
                });
                window.location.href = '/register';
              }
              else{
                await Swal.fire({
                  title: 'Validation Error',
                  text: e.response.data.message,
                  icon: 'error',
                 
                });
                window.location.href = '/register';
              }
              
            } else if (e.request) {
              // The request was made but no response was received
              console.error('No response received from the server');
              window.location.href = '/register';
            } else {
              // Something happened in setting up the request that triggered an Error
              console.error('Error during request setup', e.message);
              window.location.href = '/register';
            }
          }
    }

}



});