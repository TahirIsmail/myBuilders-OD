<template>
    <div class="container" style="padding: 30px">
        <div class="row justify-content-center">
            <div class="col-md-6">
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
                            <label :for="`answer-${answer.id}`">{{
                                answer.answer
                            }}</label>
                        </div>
                    </div>
                </div>
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
.answer-outer {
    background-color: white;
    border: 2px solid rgb(223, 229, 237);
    border-radius: 5px;
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
    text-align: left; /* Align text to the left */
    flex-grow: 1; /* Allows the label to take up available space */
}

/* Dynamic font size (optional) */
@media screen and (max-width: 600px) {
    .form-step {
        font-size: smaller; /* Smaller font for smaller screens */
    }
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
