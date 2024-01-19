<!-- Quiz.vue -->
<template>
  <div>
    <trade-questionare v-if="currentQuestion" :question="currentQuestion" @next="nextQuestion"></trade-questionare>
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
      assesmentAttempt: 1,
      totalAttempts: 3
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
            }
          });
        }
        else {
          
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
  