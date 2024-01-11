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
    selectedAnswers:[]
}),
getters:{
    getUserInfo:(state)=> state.userInformation,
    getTradingInformation:(state) => state.tradingInformation,
    getWorkAddressDetails:(state) => state.workAddressDetails,
    getStrongestTrade:(state) => state.strongestTrades,
    getEvaluationTrade:(state) => state.evaluationTrade,
    getIntroduction:(state) => state.introductionToCustomer,
    getSelectedAnswers:(state) => state.selectedAnswers
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
    setEvaluationTrade(active){
        this.evaluationTrade = active
    },
    setSelectedAnswers(selectedAnswer){
        this.selectedAnswers.push(selectedAnswer)
    },
    async setAssessment(){
        const response =  await axios.post('/getAssessment',{
            id:this.evaluationTrade.id
        });
       this.assessmentQuestions = response.data
    }

}



});