<template>
    <div class="col-md-12 mx-auto row justify-content-md-center">
        <div class="col-md-10 question_div ">
            <p class="left-align" v-html="question.question"></p>
            <div v-if="question.answers.length > 0">
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
                            @click="goToNextStep(answer)"
                            v-model="selectedAnswer"
                            style="margin-top: 6px"
                        />

                        <label
                            :for="`answer-${answer.id}`"
                            v-html="answer.answer"
                        ></label>
                    </div>
                </div>
            </div>
            <div v-else>
                <div class="custom-textarea-container">
                    <textarea
                        v-model="text"
                        @input="updateCharacterCount"
                        :disabled="isLimitExceeded"
                        :style="{ borderColor: isLimitExceeded ? 'red' : '' }"
                        ref="customTextarea"
                        placeholder="Include any details you think the tradesperson should know (approx. extension dimensions, timeframe, etc.)"
                        name="basicOutlineExtensionDescription"
                        class="custom-textarea custom-textarea1"
                    ></textarea>
                    <span
                        class="character-count"
                        :class="{ exceeded: isLimitExceeded }"
                        >{{ characterCount }}/3000</span
                    >
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, watch, onMounted, computed } from "vue";
import { useQuestionnaireStore } from "../store/questionnaireStore";
const store = useQuestionnaireStore();
const props = defineProps({
    question: {
        type: Object,
        required: true,
    },
    index: {
        type: Number,
    },
});

const emit = defineEmits(["answer-selected", "is-last"]);

const selectedAnswer = ref(null);
const index = props.index;
const isLast = computed(() =>
    props.question.answers.length === 0 ? true : false
);
watch(selectedAnswer, (newOption, oldOption) => {
    if (newOption != oldOption) {
    }
});
const isLastCheck = () => {
    emit("is-last", isLast);
};
const goToNextStep = (answer) => {
    // Handle the next step logic here
    selectedAnswer.value = answer;
    emit("answer-selected", index, answer);
};
onMounted(() => {
    const scrollComponent = document.querySelector('div');

    // Check if the element is found before scrolling
    if (scrollComponent) {
      // Use scrollIntoView to scroll to the element
      scrollComponent.scrollIntoView({ behavior: 'smooth' });
    }
    isLastCheck();
});

const initialText = ""; // Set your initial text here
const text = ref(initialText);
const characterCount = ref(0);
const customTextarea = ref(null);
const maxWordCount = 3000;
const isLimitExceeded = ref(false);

watch(text, (newText) => {
    characterCount.value = newText.length;
    isLimitExceeded.value = characterCount.value > maxWordCount;

    store.setJobDescription(newText);
});

const updateCharacterCount = () => {
    const words = text.value.trim().split(/\s+/);
    const wordCount = words.length;

    if (wordCount <= maxWordCount) {
        characterCount.value = text.value.length;
        isLimitExceeded.value = false;
    } else {
        // Trim excess words to meet the limit
        const trimmedText = words.slice(0, maxWordCount).join(" ");
        text.value = trimmedText;
        characterCount.value = trimmedText.length;
        isLimitExceeded.value = true;
    }
};

// Example of using the customTextarea ref
const focusTextarea = () => {
    customTextarea.value.focus();
};
</script>

<style scoped>
@import "vue-select/dist/vue-select.css";
.custom-textarea-container {
    position: relative;
}
@media only screen and (min-width: 370px) and (max-width: 600px) {
    .left-align {
        font-size: 1.06rem !important;
    }
}
.character-count {
    position: absolute !important;
    bottom: 5px !important;
    right: 5px !important;
    color: #555 !important;
    font-size: 12px !important;
}
F .question_div {
    margin: 15px;
    margin-top: 40px;
    background-color: #f9f9f9;
}

.answer-outer {
    background-color: white;
    border: 2px solid rgb(223, 229, 237);
    border-radius: 5px;
    margin-bottom: 50px;
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

    align-items: center;
    padding: 10px;

    font-size: 1.5em;
    letter-spacing: 0px;
    margin-bottom: 0.5em;
    color: rgb(52, 57, 68);
    font-weight: bold;
    -webkit-font-smoothing: antialiased;
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
    background-color: rgb(101, 217, 145) !important;
}
.btn-primary:hover {
    color: #fff;
    background-color: rgb(101, 217, 145) !important;
}

.custom-textarea-container {
    display: flex;
    flex-flow: wrap;
    overflow: hidden;
}

.custom-textarea {
    -webkit-text-size-adjust: 100%;
    --vh: 7.42px;
    font-family: "Trebuchet MS", "Segoe UI", Candara, "Bitstream Vera Sans",
        "DejaVu Sans", "Bitstream Vera Sans", Verdana, "Verdana Ref", sans-serif;
    color: #464c5b;
    line-height: 1.5em;
    font-size: 18px;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    cursor: pointer;
    flex: 1; /* Allow the textarea to grow */
    border-radius: 0.333333em;
    border: 2px solid rgb(223, 229, 237);
    background-color: rgb(239, 242, 246);
    width: 100% !important;
    height: 200px !important; /* Adjust the height as needed */
    resize: none !important;
    border: 1px solid #ccc !important;
    padding: 5px !important;
}

.character-count {
    font-weight: bold;
    margin-left: 10px;
    color: #333;
}

.exceeded {
    color: red;
}
</style>
