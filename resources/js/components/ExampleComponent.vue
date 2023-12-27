<template>
    <div class="container mt-4">
      <div class="text-center" style="width: 800px; margin: 0 auto;">
        <!-- Display the selected category but faded -->
        <div v-if="selectedCategory" class="faded-category">
          {{ selectedCategory.name }}
        </div>
  
        <!-- Form Step 1 -->
        <div class="mx-auto row justify-content-md-center">
          <div class="col col-lg-8 text-center">
            <p>What would you like to have done?</p>
            <v-select v-model="selectedCategory" :options="jobCategories" label="name" class="form-control form-control-lg mb-3" placeholder="Select a category"></v-select>
          </div>
        </div>
  
        <!-- Append the component in real-time upon selection -->
        <div v-if="selectedCategory" ref="questionSection">
          <QuestionWithOptions
            v-if="selectedCategory && selectedCategory.questions"
            v-for="question in selectedCategory.questions"
            :key="question.id"
            :question="question"
            @update:answers="handleAnswersUpdate(question.id, $event)"
          />
        </div>
  
        <!-- Continue button -->
        <button @click="goToNextStep" type="button" class="btn btn-primary">Continue</button>
      </div>
    </div>
  </template>

<script setup>
import vSelect from 'vue-select';
import { ref, onMounted, defineProps,computed } from 'vue';
import QuestionWithOptions from './QuestionWithOptionsComponent.vue';
// Define props using defineProps
const props = defineProps({
  job_categories: Array,
  default: () => []
});


const selectedCategory = ref(null);
const questionSection = ref(null);

const jobCategories = computed(() => {
  return props.job_categories.map(category => ({
    ...category,
    name: category.name
  }));
});


function goToNextStep() {
  console.log(selectedCategory.value.name)
  console.log(selectedCategory.value.questions[0])
  console.log(selectedCategory.value.questions[0].answers)
  

}
// function goToNextStep() {
//   // Scroll the questionSection into view
//   if (questionSection.value) {
//     questionSection.value.scrollIntoView({ behavior: 'smooth' });
//   }
// }

// Function to handle the answers update
function handleAnswersUpdate(questionId, answers) {
  // Logic for handling updated answers
}


onMounted(() => {
  console.log('Post a Job Component mounted');
});
</script>




<style scoped>
@import 'vue-select/dist/vue-select.css';
</style>
