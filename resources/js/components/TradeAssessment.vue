<!-- Quiz.vue -->
<template>
  <div v-if="loading" class="loader">
        <div class="spinner">
          
        </div>
  <div>
    <trade-questionare v-if="currentQuestion" :question="currentQuestion" @next="nextQuestion"></trade-questionare>
    <!-- <div v-else>
        <h2>Evaluation Completed!</h2>
      </div> -->
      
      
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
      assesmentAttempt: 1,
      totalAttempts: 3,
      loading:false,
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
        // let correct_answers =store.assessmentQuestions.map((question) => (question.))
        this.loading = true;

        const evaluationResults = [];

        // Iterate through assessment questions
        store.assessmentQuestions.forEach(question => {
          // Find the selected answer for the current question
          const selectedAnswer = store.selectedAnswers.find(answer => answer.assessment_question_id === question.id);

          // Check if a selected answer is found
          if (selectedAnswer) {
            // Check if the selected answer id matches the correct answer id
            const isCorrect = selectedAnswer.id === question.correct_answer;

            // Build the evaluation result object
            const evaluationResult = {
              questionId: question.id,
              isCorrect: isCorrect,
              selectedAnswer: selectedAnswer.answer,
              correctAnswer: question.answers.find(answer => answer.id === question.correct_answer).answer
            };

            // Push the result to the evaluationResults array
            evaluationResults.push(evaluationResult);
          }
        });
        console.log(evaluationResults)
        const correctCount = evaluationResults.reduce((count, result) => {
          return result.isCorrect ? count + 1 : count;
        }, 0);

        if (correctCount >= 3) {
          
          const response = store.authenticatedUser()
          this.loading = false;
        }
        else {
          this.loading = true;
          
          Swal.fire({
            title: "Evaluation Failed",
            text: this.assesmentAttempt + 'th Attempt',
            icon: "question",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Restart Evaluation!"
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire({
                title: "Try Again Some other time!",
                text: "Registration",
                icon: "info"
              });
              if (this.assesmentAttempt <= 3) {

                this.currentQuestionIndex = 0
              }
              else {
                window.location.href = '/register';
              }
              
            }

          });
          store.resetSelectedAnswers();
          this.assesmentAttempt++

        }
      }

    }
  },


};
</script>
<style scoped>
.loader {
    width: 100vw;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    background: rgba(255, 255, 255, 0.705);
    z-index: 999999999999;
   
}



.spinner {
--size: 30px;
--color: #64c976;
width: 100px;
height: 100px;
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}

.spinner::after,
.spinner::before {
box-sizing: border-box;
position: absolute;
content: "";
width: var(--size);
height: var(--size);
top: 50%;
left: 50%;
animation: up 2.4s cubic-bezier(0, 0, 0.24, 1.21) infinite;
background: var(--color);
box-shadow: 0 0 calc(var(--size) / 3) rgba(255, 255, 255, 0.733);
}

.spinner::after {
top: calc(50% - var(--size));
left: calc(50% - var(--size));
animation: down 2.4s cubic-bezier(0, 0, 0.24, 1.21) infinite;
}


.spinner::after,
.spinner::before {
    box-sizing: border-box;
    position: absolute;
    content: "";
    width: var(--size);
    height: var(--size);
    top: 50%;
    animation: up 2.4s cubic-bezier(0, 0, 0.24, 1.21) infinite;
    left: 50%;
    background: var(--color);
    box-shadow: 0 0 calc(var(--size) / 3) rgba(0, 0, 0, 0.25);
}

.spinner::after {
    background: var(--color);
    top: calc(50% - var(--size));
    left: calc(50% - var(--size));
    animation: down 2.4s cubic-bezier(0, 0, 0.24, 1.21) infinite;
}

@keyframes down {

    0%,
    100% {
        transform: none;
    }

    25% {
        transform: translateX(100%);
    }

    50% {
        transform: translateX(100%) translateY(100%);
    }

    75% {
        transform: translateY(100%);
    }
}

@keyframes up {

    0%,
    100% {
        transform: none;
    }

    25% {
        transform: translateX(-100%);
    }

    50% {
        transform: translateX(-100%) translateY(-100%);
    }

    75% {
        transform: translateY(-100%);
    }
}
</style> 