<!-- Quiz.vue -->
<template>
    <div>
      <trade-questionare
        v-if="currentQuestion"
        :question="currentQuestion"
        @next="nextQuestion"
      ></trade-questionare>
      <div v-else>
        <h2>Evaluation Completed!</h2>
      </div>
    </div>
  </template>
  
  <script>
 import TradeQuestionare from './TradeQuestionare.vue';
 import { mapState } from 'pinia';
 import { useTrademensStore } from '../store/trademensStore';
 
  export default {
    components: {
        TradeQuestionare,
    },
    data() {
      return {// Your array of questions
        currentQuestionIndex: 0,
      };
    },
    computed: {
      ...mapState(useTrademensStore, {
        questions: 'assessmentQuestions',
      }),
      currentQuestion() {
        return this.questions[this.currentQuestionIndex];
      },
      
    },
    methods: {
      nextQuestion(selectedAnswer) {
        const store = useTrademensStore()
        store.setSelectedAnswers(selectedAnswer)
        // console.log('Selected Answer:', selectedAnswer);
        this.currentQuestionIndex++;
  
     
        if (this.currentQuestionIndex >= this.questions.length) {
          
          console.log('Evaluation completed!');
          console.log({
            user_info:store.userInformation,
            trading_info:store.getTradingInformation,
            work_details:store.getWorkAddressDetails,
            customerintroduction:store.getIntroduction,
            selected_answers:store.getSelectedAnswers,
            


          })
        }
      },
    },
    mounted(){
      const scrollComponent = document.querySelector('div');

    // Check if the element is found before scrolling
    if (scrollComponent) {
      // Use scrollIntoView to scroll to the element
      scrollComponent.scrollIntoView({ behavior: 'smooth' });
    }
    }
  };
  </script>
  