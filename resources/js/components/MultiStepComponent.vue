<template>
    <div>
      <KeepAlive>
          <component :is="currentStepComponent" :key="currentStep" :navigationMethods="{prevStep,nextStep}" />

      </KeepAlive>
      <!-- <button @click="prevStep" :disabled="currentStep === 1">Previous</button>
      <button @click="nextStep" :disabled="currentStep === totalSteps">Next</button> -->
    </div>
  </template>
  
  <script setup>
  import TradeSignupComponent from './TradeSignupComponent';
  import TradeForm from './TradeForm';
  import IntroductionComponent from './IntroductionComponent';
  import SelectTradesComponent from './SelectTradesComponent';
  import StrongestTradeComponent from './StrongestTradeComponent';
  import WorkAddressComponent from './WorkAddressComponent.vue';
  import TradeAssessment from './TradeAssessment.vue';
  import {computed, ref, KeepAlive} from 'vue';
  
  const currentStep = ref(1);
  const totalSteps = 7;
  
  const prevStep = () => {
    if (currentStep.value > 1) {
      currentStep.value--;
    }
  };
  
  const nextStep = () => {
    if (currentStep.value < totalSteps) {
      currentStep.value++;
    }
  };
  
  const currentStepComponent = computed(() => {
    const componentMapping = {
      1:TradeSignupComponent,
      2:TradeForm,
      3:WorkAddressComponent,
      4:IntroductionComponent,
      5:SelectTradesComponent,
      6:StrongestTradeComponent,
      7:TradeAssessment
    };
    const component = componentMapping[currentStep.value];
    if (!component) {
      console.error(`Invalid component for step ${currentStep.value}`);
    }
    return component;
  }) 
  </script>
  