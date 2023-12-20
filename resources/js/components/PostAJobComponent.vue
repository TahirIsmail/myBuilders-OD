<template>
  <div class="form-header container">
    <!-- Header content... -->
    
  </div>
  <div style="background-color: #f9f9f9">
    <div class="container mt-4 mb-4">
      <div class="text-center" style="width: 800px; padding: 10px; margin: 0 auto">
        <!-- Display the selected category but faded -->
        <div class="mx-auto row justify-content-md-center">
          <div class="col-lg-8">
            <p class="left-align">
              What would you like to have done?
            </p>
            <v-select v-model="selectedCategory" :options="jobCategories" label="name" class="mb-3"
              placeholder="Select a category"></v-select>
          </div>
        </div>

        <!-- Form Steps -->


      </div>

    </div>
    <div class="container mt-4 mb-4">
      <QuestionComponent 
      v-if="selectedCategory"
      :ref="`questionComponent-${index}`" 
      v-for="(question, index) in questions" :question="question"
      :index="index"
      :key="question.id" 
      @answer-selected="handleAnswerSelected" 
      @is-last="handleLast"
      
      />

    </div>

    <div v-if="isLastComponent && selectedCategory" class="container mt-5">
      <div class="form-group button-container">
        <JobHeadline />
      </div>
    </div>

    
  </div>
</template>
<script setup>
import { ref, computed, watch, onBeforeMount,provide } from "vue";

import JobHeadline from './JobHeadlineComponent.vue'// Make sure you import your dynamic question component
import axios from 'axios';
import QuestionComponent from './QuestionWithOptionsComponent.vue';


import { useQuestionnaireStore } from "../store/questionnaireStore"
const store = useQuestionnaireStore();
const props = defineProps({
  user:Object
})
provide("user",props.user)
const isLastComponent = ref(false);
const jobCategories = computed(() => {
  return store.jobCategories.map((category) => ({
    ...category,
    name: category.name,
  }));
});

const selectedCategory = ref(null);

const questions = ref(new Set()); // Now a list of question data

onBeforeMount(async () => {
  await store.loadJobCategories();
});

// Fetch initial question based on selected category
const fetchInitialQuestion = async () => {
  if (selectedCategory.value && selectedCategory.value.firstquestion) {

    questions.value.push(selectedCategory.value.firstquestion);

  }
};
//
function handleLast(isLast) {
  isLastComponent.value = isLast.value

  

}
// Event handler for when an answer is selected
function handleAnswerSelected(index, selectedAnswer) {
  store.setAnswerForQuestion(index, selectedAnswer);
  
  fetchNextQuestion(index, selectedAnswer);
}

// API call to get the next question based on answer
const fetchNextQuestion = async (index, selectedAnswer) => {
  try {
    // Assuming selectedAnswers is the payload you want to send along with the POST request
    const response = await axios.post(`/api/nextquestion`, {
      answers: selectedAnswer

    }, {
      headers: {
        'Content-Type': 'application/json',
      }
    });

    // Handle the response, e.g., append to questions array or update state
    if (!response.data.length) {
      // Array is empty
      isEmptyArray = computed(() => (response.data.length === 0));
    } else {
      const newQuestion = response.data[0];
      // Array is not empty
      questions.value.splice(index + 1, questions.value.length - index - 1);


      // Insert the new question after the current question
      questions.value.push(newQuestion);
    }








  } catch (error) {
    console.error('Error fetching next question:', error);
  }
};

const moveToSignUp = () => {
  
}
watch(selectedCategory, (newCategory, oldCategory) => {
  // Check if the category has actually changed
  if (newCategory && (!oldCategory || newCategory.id !== oldCategory.id)) {
    // Reset the questions array and fetch the initial question for the new category
    store.setSelectedCategory(newCategory)
    questions.value = []; // Clear the previous questions
    
    fetchInitialQuestion(); // Fetch the initial question for the new category
  }
}, { immediate: true });



</script>

<style scoped>
@import "vue-select/dist/vue-select.css";

.container {
  max-width: 800px !important;
  margin: 20px auto !important;
}

.form-header {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  padding-top: 10px;
}

.text-center {
  text-align: center !important;
}

.faded-category {
  color: #999 !important;
  font-size: 1.5em !important;
  margin-bottom: 15px !important;
}

/* Style for form elements and the container */
.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}

.row {
  display: flex !important;
  justify-content: center !important;
}

.button-container {
  display: flex;
  justify-content: center;
}

.col-lg-8 {
  width: 100% !important;
  max-width: 800px !important;
  /* Adjust as needed */
}

.form-control-lg {
  height: calc(1.5em + 1rem + 2px) !important;
  padding: 0.5rem 1rem !important;
  font-size: 1.25rem !important;
  line-height: 1.5 !important;
}

/* Style for vue-select */
.vue-select {
  width: 100% !important;
  margin-bottom: 1rem !important;
}

/* Button styling */
.btn-primary {
  color: #fff !important;
  background-color: rgb(81, 197, 125) !important;
}




/* Additional styles for responsiveness and spacing */
@media (max-width: 768px) {
  .col-lg-8 {
    max-width: 100%;
  }
}

.mb-3 {
  margin-bottom: 1rem;
}

.v-select .vs__dropdown-toggle {
  border: none !important;
  /* Removes border */
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
