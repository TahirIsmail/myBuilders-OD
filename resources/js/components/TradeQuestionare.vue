<!-- Question.vue -->
<template>
    <div>
      <h2>{{ question.question }}</h2>
      <ul>
        <li v-for="answer in question.answers" :key="answer.id">
          <label>
            <input
              type="radio"
              :value="answer"
              v-model="selectedAnswer"
            />
            {{ answer.answer }}
          </label>
        </li>
      </ul>
      <button @click="nextQuestion">Continue</button>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      question: Object,
    },
    data() {
      return {
        selectedAnswer: {},
      };
    },
    methods: {
      nextQuestion() {
        this.$emit('next', this.selectedAnswer);
      },
    },
  };
  </script>
  