<!-- Quiz.vue -->

<template>
  <div>

    <div v-if="loading" class="loader">
      <div class="spinner">

      </div>
    </div>

    <div>
      <trade-questionare v-if="currentQuestion" :question="currentQuestion" @next="nextQuestion" />
      <!-- <div v-else>
        <h2>Evaluation Completed!</h2>
      </div> -->


    </div>

  </div>
</template>

<script setup>
import { ref, computed, watchEffect } from 'vue';
import Swal from 'sweetalert2';
import { useTrademensStore } from '../store/trademensStore';
import TradeQuestionare from './TradeQuestionare.vue';
const store = useTrademensStore();

const currentQuestionIndex = ref(0);
const assesmentAttempt = ref(1);
const totalAttempts = 3;
const loading = ref(false);

const questions = computed(() => store.assessmentQuestions);
const currentQuestion = computed(() => {
  console.log(currentQuestionIndex.value);
  return questions.value[currentQuestionIndex.value];
});

const registerUser = async () => {
  try {
    loading.value = true;
    const response = await store.authenticatedUser();

    if (response.status === 200) {
      // Check if there is a redirect in the response headers
      if (response.headers['x-redirect']) {
        // Handle the redirect on the client side
        loading.value = false;
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
            // Set loading to true before redirecting
            loading.value = true;
            window.location.href = response.headers['x-redirect'];
          };
        });
      } else {
        loading.value = false; // Set loading to false if there's no redirect
        console.error('Redirect Header  is missing');
      }

    } // Handle the response here
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
        loading.value = false;
        await Swal.fire({
          title: 'Verification Error',
          text: e.response.data.message.verification[0],
          icon: 'error',
        });
        
        window.location.href = '/register';

      }
      else {
        loading.value = false
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
      loading.value = true
      window.location.href = '/register';

    } else {
      // Something happened in setting up the request that triggered an Error
      console.error('Error during request setup', e.message);
      loading.value = true;
      window.location.href = '/register';

    }// Handle any errors that occurred during the request
  }
};

const nextQuestion = (selectedAnswer) => {
  store.setSelectedAnswer(selectedAnswer);
  currentQuestionIndex.value++;

  if (currentQuestionIndex.value >= questions.value.length) {
    const evaluationResults = [];

    questions.value.forEach((question) => {
      const selectedAnswer = store.selectedAnswers.find(
        (answer) => answer.assessment_question_id === question.id
      );

      if (selectedAnswer) {
        const isCorrect = selectedAnswer.id === question.correct_answer;

        const evaluationResult = {
          questionId: question.id,
          isCorrect: isCorrect,
          selectedAnswer: selectedAnswer.answer,
          correctAnswer: question.answers.find((answer) => answer.id === question.correct_answer).answer,
        };

        evaluationResults.push(evaluationResult);
      }
    });

    const correctCount = evaluationResults.reduce((count, result) => {
      return result.isCorrect ? count + 1 : count;
    }, 0);

    if (correctCount >= 3) {

      registerUser();

    } else {
      loading.value = false;

      Swal.fire({
        title: 'Evaluation Failed',
        text: `${assesmentAttempt.value}th Attempt`,
        icon: 'question',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Restart Evaluation!',
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: 'Not Bad still! Try Again',
            text: 'You are at the start of the Assessment',
            icon: 'info',
          });
          if (assesmentAttempt.value <= 3) {
            loading.value = true;
            currentQuestionIndex.value = 0;
            loading.value = false
          } else {
            loading.value = true;
            window.location.href = '/register';
          }
        }
      });
      store.resetSelectedAnswers();
      assesmentAttempt.value++;
    }
  }
};

watchEffect(() => {
  console.log('Trade Asessment Got Mounted');
});

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