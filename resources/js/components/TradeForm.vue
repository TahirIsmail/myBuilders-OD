<template>
  <div class="py-4 py-lg-5" ref="scrollTarget">
    <div class="container">
      <div class="row">
        <div class="col-xxl-4 col-xl-6 col-md-7 mx-auto form">
          <h1><strong>About you</strong></h1>
          <p><strong>You operate as a:</strong></p>

          <!-- Radio buttons -->
          <div class="col-xxl-12 col-xl-12 col-md-12 mx-auto form">
            <div v-for="(option, index) in radioOptions" :key="index" class="form-check">
              <input class="form-check-input" type="radio" :name="option.name" :id="option.id" v-model="selectedOption"
                @change="handleRadioChange(option.id)" />
              <label class="form-check-label" :for="option.id"><strong>{{ option.label }}</strong></label>
            </div>
          </div>

          <!-- Collapsible content for each radio button -->
          <div class="container mt-5">
            <div v-for="(option, index) in radioOptions" :key="index" class="collapse" :id="option.collapseId">
              <div class="mt-3" v-if="option.showInput">
                <label :for="option.textId" class="form-label"><strong>{{ option.textLabel }}</strong></label>
                <input type="text" class="form-control form_input" :id="option.textId"
                  v-model="inputValues[option.textId]" />
              </div>


            </div>
            <div class="lp-header__content">
              <a title="Start winning more work" href="{{ route('register') }}" class="btn--Tradeb">Back</a>
              <a title="Post a job today and we'll alert the relevant tradespeople." href="{{ route('post_project') }}"
                class="btn--Tradec">Continue</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
  
<script>
export default {
  data() {
    return {
      selectedOption: null,
      inputValues: {
        textA: '',
        textB: '',
        textC: '',
        textD: '',
      },
      radioOptions: [
        { id: 'radioA', name: 'radioOption', label: 'Self-employed / Sole Trader', collapseId: 'collapseA', textId: 'textA', showInput: true },
        { id: 'radioB', name: 'radioOption', label: 'Limited Company', collapseId: 'collapseB', textId: 'textB', showInput: true },
        { id: 'radioC', name: 'radioOption', label: 'Ordinary Partnership', collapseId: 'collapseC', textId: 'textC', showInput: true },
        { id: 'radioD', name: 'radioOption', label: 'Limited Partnership', collapseId: 'collapseD', textId: 'textD', showInput: true },
        // Add more radio options as needed
      ],
    };
  },
  methods: {
    handleRadioChange(selectedId) {
      // Reset other input values and collapse states
      this.radioOptions.forEach(option => {
        if (option.id !== selectedId) {
          this.inputValues[option.textId] = '';
          document.getElementById(option.collapseId).classList.remove('show');
        }
      });

      // Show/hide the selected collapse
      const selectedCollapse = document.getElementById(selectedId);
      selectedCollapse.classList.toggle('show', this.selectedOption === selectedId);
    },
  },
  mounted() {
    
      // Scroll the element into view when the component is mounted
    const scrollTarget = this.$refs.scrollTarget;
    if (scrollTarget) {
      scrollTarget.scrollIntoView({ behavior: 'smooth' });
    }
   
  }
};
</script>
<style type="text/css" scoped>
.iti {
  position: relative;
  display: block !important;
}


.form {
  border: 2px solid #b0c0d3;
  padding: 30px;
  margin-bottom: 10px;
  border-radius: 4px;

}

.form_input {
  border: 2px solid #b0c0d3;
  border-radius: 4px;

}

.form-check {
  border-bottom: 2px solid #b0c0d3;
  padding: 5px;
  margin-bottom: 10px;

}
</style>
  