<!-- Question.vue -->
<template>
  <div>
      <div class="py-4 py-lg-5">
          <div class="container">
              <div class="row">
                  <div
                      class="col-xxl-6 col-xl-6 col-md-7 mx-auto formpadding bg-white"
                  >
                  <h1 class="h3 mb-0 heading-large" style="color: #55b97b">
                      <strong>Carpentry </strong></h1>
                      <label class="control-label trade-question">
                          <p>{{ question.question }}</p>
                      </label>
                      <ul class="answer-list">
                          <li
                              v-for="answer in question.answers"
                              :key="answer.id"
                          >
                              <label class="answer-label">
                                  <input
                                      type="radio"
                                      :value="answer"
                                      v-model="selectedAnswer"
                                      class="fqFfVE"
                                  />
                                  {{ answer.answer }}
                              </label>
                          </li>
                      </ul>
                      <div class="mb-5 d-flex justify-content-center mt-20px" style="margin-top: 30px;margin-bottom: 2rem;">
                          <button @click="nextQuestion" class="btn--Tradec">
                              Continue
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</template>

<style scoped>
.heading-large {

  font-size: 30px;
  margin: 35px 16px 0px;
}

.trade-question {
  padding: 20px 0px 0px 15px;

  color: #343944;
  margin-bottom: 1em;
  position: relative;
  line-height: 1.5em;
}
.trade-question p {
  font-size: 1.2rem;
  color: #343944;
  margin-bottom: 1rem;
  line-height: 1.5em;
  font-weight: normal;
}
.answer-list {
  list-style-type: none;
  padding: 0;
}

.answer-label {
  border: 2px solid rgb(239, 242, 246) !important;
  position: relative;
  display: flex;
  flex-flow: row;
  -webkit-box-align: center;
  align-items: center;
  margin-bottom: 0px;
  font-weight: normal;
  color: rgb(74, 144, 226);
  padding: 15px 15px 15px 50px;
  font-size: 1.1rem;
}

.fqFfVE {
  margin-right: 0.5em;
  box-sizing: border-box;
  height: 22px;
  width: 22px;
  line-height: 22px;
  display: block;
  border: 2px solid rgb(176, 192, 211);
  border-radius: 50%;
  color: rgb(255, 255, 255);
  background-color: rgb(255, 255, 255);
  text-align: center;
  position: absolute;
  top: 50%;
  left: 15px;
  margin-top: -11px;
}


@media only screen and (min-width: 320px) and (max-width: 600px) {
  .answer-label {
      font-size: 0.8rem !important;
  }
}
@media only screen and (min-width: 320px) and (max-width: 600px) {
  .fqFfVE {
      width:15px !important;
      height:15px !important;
  }
}

@media only screen and (min-width: 320px) and (max-width: 600px) {
  .trade-question p{
      font-size: 0.9rem !important;
  }
}
@media only screen and (min-width: 320px) and (max-width: 600px) {
  .btn--Tradeb {
      font-size: 12px !important;
  }
}

@media only screen and (min-width: 320px) and (max-width: 600px) {
  .btn--Tradec {
      font-size: 12px !important;
  }
}
</style>

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
          this.$emit("next", this.selectedAnswer);
      },
  },
};
</script>
