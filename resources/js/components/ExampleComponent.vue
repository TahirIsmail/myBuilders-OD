<template>
    <div class="form-header container">
        <div class="col-lg-5">
            <h2 style="font-weight: bolder !important; margin-top: 30px">
                Post a job
            </h2>
            <p>
                Get responses from MyBuilder's screened and reviewed
                tradespeople near you
            </p>
        </div>
    </div>
    <div style="background-color: #f9f9f9">
        <div class="container mt-4 mb-4" style="margin-bottom: 0px !important">
            <div class="text-center" style="padding: 10px; margin: 0 auto">
                <!-- Display the selected category but faded -->

                <!-- Form Step 1 -->
                <div class="mx-auto row justify-content-md-center">
                    <div class="col-md-6" style="padding: 30px">
                        <p class="left-align">
                            What would you like to have done?
                        </p>
                        <v-select
                            v-model="selectedCategory"
                            :options="jobCategories"
                            label="name"
                            class="mb-3"
                            placeholder="Select a category"
                        ></v-select>
                    </div>
                </div>

                <!-- Append the component in real-time upon selection -->
                <div
                    v-if="selectedCategory && showFirstQuestion"
                    ref="questionSection"
                >
                    <QuestionWithOptions
                        v-if="firstQuestion"
                        :key="firstQuestion.id"
                        :question="firstQuestion"
                        @update:answers="
                            handleAnswersUpdate(firstQuestion.id, $event)
                        "
                    />
                </div>
                <div class="form-group button-container">
                    <!-- Continue button -->
                    <button
                        @click="goToNextStep"
                        type="button"
                        class="btn btn-primary"
                    >
                        Continue
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import vSelect from "vue-select";
import { ref, watch, onMounted, computed } from "vue";
import QuestionWithOptions from "./QuestionWithOptionsComponent.vue";
// Define props using defineProps
const props = defineProps({
    job_categories: Array,
    default: () => [],
});

const selectedCategory = ref(null);
const questionSection = ref(null);
const showFirstQuestion = ref(false);
const jobCategories = computed(() => {
    return props.job_categories.map((category) => ({
        ...category,
        name: category.name,
    }));
});
const firstQuestion = computed(() => {
    return selectedCategory.value?.questions?.[0] || null;
});

// Function to handle the answers update
function handleAnswersUpdate(questionId, answers) {
    // Logic for handling updated answers
    console.log(questionId);
    console.log(answers);
}
watch(selectedCategory, (newValue, oldValue) => {
    if (newValue !== oldValue) {
        showFirstQuestion.value = !showFirstQuestion.value; // Toggle the value when category changes
    }
});
const goToNextStep = () => {
    showFirstQuestion.value = !showFirstQuestion.value; // Set to true when the button is clicked
};

onMounted(() => {
    console.log("Post a Job Component mounted");
});
</script>

<style scoped>
@import "vue-select/dist/vue-select.css";

container {
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

.btn {
    width: 500px !important;
    display: inline-block !important;
    font-weight: 400 !important;
    color: white !important;
    text-align: center !important;
    vertical-align: middle !important;
    user-select: none !important;
    border: 1px solid transparent !important;
    padding: 0.375rem 0.75rem !important;
    font-size: 1rem !important;
    line-height: 1.5 !important;
    border-radius: 0.25rem !important;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.btn-primary:hover {
    color: #fff;
    background-color: rgb(101, 217, 145) !important;
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
    border: none !important; /* Removes border */
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
.button-container {
    display: flex;
    justify-content: center;
}
</style>
