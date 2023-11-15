<template>
  <div class="question_div">
      <p class="left-align">{{ question.question }}</p>
      <div class="answer-outer">
          <div
              class="form-step"
              v-for="answer in question.answers"
              :key="answer.id"
          >
              <input
                  type="radio"
                  :value="answer"
                  :id="`answer-${answer.id}`"
                  v-model="selectedAnswers"
              />
              <label :for="`answer-${answer.id}`" v-html="answer.answer"></label>
          </div>
      </div>
  </div>
</template>

<script setup>
import { ref, watch, defineEmits } from "vue";

// Define the props the component accepts
const props = defineProps({
  question: {
      type: Object,
      required: true,
  },
});

// Define the emits the component can send
const emit = defineEmits(["update:answers"]);

// A ref to hold the selected answers
const selectedAnswers = ref(null);

// Watch the selectedAnswers and emit an event when it changes
watch(selectedAnswers, (newAnswers) => {
  emit("update:answers", newAnswers);
});
</script>
<style scoped>
@import "vue-select/dist/vue-select.css";
.question_div {
  margin: 15px;
  background-color: #f9f9f9;
}
.answer-outer
{
background-color: white ;
border: 2px solid rgb(223, 229, 237);   
border-radius: 5px;;
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
  align-items: center; /* Vertically center the content */
  justify-content: flex-start; /* Align content to the left */
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
  margin-right: 10px; /* Space between radio button and label */
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
