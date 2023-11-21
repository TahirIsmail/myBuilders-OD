<template>
  <div class="question_div">
    <p class="left-align">{{ question.question }}</p>
    <div class="answer-outer">
      <div class="form-step" v-for="answer in question.answers" :key="answer.id">
        <input type="radio" :value="answer" :id="`answer-${answer.id}`" v-model="selectedAnswer"
          @change="onAnswerSelected(answer)" />

        <label :for="`answer-${answer.id}`" v-html="answer.answer"></label>

      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";

const props = defineProps({
  question: {
    type: Object,
    required: true,
  },
});

const emit = defineEmits(["answer-selected"]);

const selectedAnswer = ref(null);

const onAnswerSelected = (answer) => {
  // Set the selected answer
  selectedAnswer.value = answer;
  // Emit the event with the selected answer, including the `leads_to_question_id`
  emit("answer-selected", answer);
};
</script>



<style scoped>
@import "vue-select/dist/vue-select.css";

.question_div {
  margin: 15px;
  background-color: #f9f9f9;
}

.answer-outer {
  background-color: white;
  border: 2px solid rgb(223, 229, 237);
  border-radius: 5px;
  ;
}

.form-step {
  background-color: white;
  transition: all 0.3s ease;
  border-top: 2px solid rgb(223, 229, 237);
  color: rgb(73, 144, 226);
  margin-top: -2px;
  padding: 0.75em;
  font-size: medium;
  font-weight: bold;
  display: flex;
  align-items: flex-start;
  justify-content: flex-start;
  word-wrap: break-word;
  white-space: normal;
}

.form-step label {
  text-align: left;
  flex-grow: 1;
}

.form-step input[type="radio"] {
  margin-top: 0;
  margin-bottom: 0;
  /* Adjust margin-right if needed for spacing between radio and label */
  margin-right: 10px;
}

.form-step label {
  margin-top: 0;
  margin-bottom: 0;
  /* Additional styling for label if needed */
}

.form-step input[type="radio"] {
  margin-right: 10px;
  /* Space between radio button and label */
}

.left-align {
  text-align: left;
  display: flex;
  align-items: center;
  padding: 10px;




  font-size: 1.5em;
  letter-spacing: 0px;
  margin-bottom: 0.5em;
  color: rgb(52, 57, 68);
  font-weight: bold;
  -webkit-font-smoothing: antialiased;

}
</style>
