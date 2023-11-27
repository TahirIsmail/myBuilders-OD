<template>
  
  <div class="container mx-auto row justify-content-md-center">
  <div class="question_div">
    <p class="left-align">{{ question.question }}</p>
    <div v-if="question.answers.length > 0">
      <div  class="answer-outer">
      <div class="form-step" v-for="answer in question.answers" :key="answer.id">
        <input type="radio" :value="answer" :id="`answer-${answer.id}`"  @click="goToNextStep(answer)"  v-model="selectedAnswer"/>

        <label :for="`answer-${answer.id}`" v-html="answer.answer"></label>

      </div>
    </div>
    
    </div>
    <div v-else>
      <div class="custom-textarea-container">
        <textarea
        placeholder="Include any details you think the tradesperson should know (approx. extension dimensions, timeframe, etc.)"
        name="basicOutlineExtensionDescription"
        class="custom-textarea"
      ></textarea>
      <span class="character-count">0/3000</span>
      </div>
      
      
      
    </div>
    
  </div>
  
  </div>
</template>

<script setup>
import { ref,watch } from "vue";

const props = defineProps({
  question: {
    type: Object,
    required: true,
  },
  index:{
    type:Number
  }
});

const emit = defineEmits(["answer-selected"]);

const selectedAnswer = ref(null);
const index = props.index
console.log(props.question.answers.length);
watch(selectedAnswer,(newOption,oldOption) =>{
  if(newOption != oldOption){
    
  }
})
const goToNextStep = (answer) => {
  // Handle the next step logic here
  selectedAnswer.value = answer
  emit("answer-selected",index,answer);
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
  height: 81px !important;
  -webkit-text-size-adjust: 100%;
  --vh: 7.42px;
  font-family: 'Trebuchet MS', 'Segoe UI', Candara, 'Bitstream Vera Sans', 'DejaVu Sans', 'Bitstream Vera Sans', Verdana, 'Verdana Ref', sans-serif;
  color: #464c5b;
  line-height: 1.5em;
  font-size: 18px;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  cursor: pointer;
  flex: 1; /* Allow the textarea to grow */
  border-radius: 0.333333em;
  border: 2px solid rgb(223, 229, 237);
  background-color: rgb(239, 242, 246);
}

.character-count {
  font-weight: bold;
  margin-left: 10px;
  color: #333;
}

</style>
