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
        
            
            const response = await axios.post('/register', {
              ...this.userInformation,
              trading_info : this.tradingInformation,
              bio : this.introductionToCustomer,
              workaddress : this.workAddressDetails,
              strongesttrades :this.strongestTrades,
              specialist_at:this.evaluationTrade.id,
              user_type:'freelancer',
            }, {
              headers: {
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
              },
            });
            return response;
             
            
          
    }

}



});