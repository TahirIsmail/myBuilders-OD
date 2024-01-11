<!-- Quiz.vue -->
<template>
    <div>
      <trade-questionare
        v-if="currentQuestion"
        :question="currentQuestion"
        @next="nextQuestion"
      ></trade-questionare>
      <!-- <div v-else>
        <h2>Evaluation Completed!</h2>
      </div> -->
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
        store.setSelectedAnswer(selectedAnswer)
        // console.log('Selected Answer:', selectedAnswer);
        this.currentQuestionIndex++;
  
     
        if (this.currentQuestionIndex >= this.questions.length) {
          
          Swal.fire({
            title: 'Evaluation',
            text: 'Completed!',
            icon: 'success',
            showCancelButton: false,
            confirmButtonColor: '#51C57D',
            
            confirmButtonText: 'Yes!'
        }).then((result) => {
            if (result.isConfirmed) {

                window.location.href='./'
            }
        });
          console.log({
            user_info:store.userInformation,
            trading_info:store.getTradingInformation,
            work_details:store.getWorkAddressDetails,
            customerintroduction:store.getIntroduction,
            strongesttrade:store.getEvaluationTrade,
            selected_answers:store.getSelectedAnswer,
            


          })
        }
      },
    },
   
  };
  </script>
  