import {defineStore} from 'pinia'
import axios from 'axios'
import {reactive} from 'vue'
export const useTrademensStore =  defineStore('tradesmen',{
state: () => ({
    userInformation:reactive({}),
    tradingInformation:reactive({}),
    workAddressDetails:{},
    strongestTrades:{},
}),
getters:{
    getUserInfo:(state)=> state.userInformation,
    getTradingInformation:(state) => state.tradingInformation,
    getWorkAddressDetails:(state) => state.workAddressDetails,
    getWorkAddressDetails:(state) => state.strongestTrades
},
actions:{
    setUserInformation(userInformation){
        this.userInformation = userInformation
    },
    setTradingInformation(tradingInformation){
        this.tradingInformation = tradingInformation
    },
    setWorkingDetails(workAddressDetails){
        this.workAddressDetails = workAddressDetails
    },
    setStrongestTrades(strongestTrades){
        this.strongestTrades = strongestTrades
    }
    

}



});