<template>
    <div class="py-4 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-md-7 mx-auto form bg-white">
                    <h1 class="h3 mb-0" style="color: #55b97b">
                        <strong> Select your strongest trade</strong>
                    </h1>
                    <p class="p_size" style="margin-left: 20px">
                        Pass trade evaluations to unlock leads in your areas of
                        expertise.
                    </p>

                    <div class="col-xxl-12 col-xl-12 col-md-12 mx-auto">
                        <div class="mt-3">
                            <template v-for="trade in store.getStrongestTrade" :key="trade.id">
                                <button :class="{ active: isActive === trade }" class="jSiDrI" @click.prevent="setTradeEvaluation(trade)">
                                {{ trade.name }}
                            </button>
                            </template>
                           


                            <div class="lp-header__content">
                                <button type="submit" class="btn--Tradeb" @click.prevent="back">
                                    Back
                                </button>
                                <button type="submit" class="btn--Tradec" @click.prevent="submit">
                                    Continue
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { reactive, onBeforeMount, ref, shallowReadonly } from 'vue'
import { useTrademensStore } from '../store/trademensStore';
const store = useTrademensStore();

const isActive = ref(null)
const props = defineProps(['navigationMethods'])
onBeforeMount(() => {
    const scrollComponent = document.querySelector('div');

    // Check if the element is found before scrolling
    if (scrollComponent) {
      // Use scrollIntoView to scroll to the element
      scrollComponent.scrollIntoView({ behavior: 'smooth' });
    }
    if (Object.keys(store.getStrongestTrade).length === 0) {
        Swal.fire({
            title: 'Strongest Trades Selection',
            text: 'Please Select the Strongest Trades!',
            icon: 'error',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Yes,I want to move to selection!'
        }).then((result) => {
            if (result.isConfirmed) {

                if (props.navigationMethods && typeof props.navigationMethods.prevStep === 'function') {
                    props.navigationMethods.prevStep();
                }
            }
        });
    }

})

const setTradeEvaluation = (trade) => {
    
    isActive.value = isActive.value === trade ? null : trade;
}

const submit = () => {
    store.setEvaluationTrade(isActive)
    store.setAssessment();
    if (props.navigationMethods && typeof props.navigationMethods.nextStep === 'function') {
        props.navigationMethods.nextStep();
    }

}

const back = () => {
    if (props.navigationMethods && typeof props.navigationMethods.prevStep === 'function') {
        props.navigationMethods.prevStep();
    }
}
</script>
<style scoped>
@media only screen and (min-width: 320px) and (max-width: 600px) {
    .jSiDrI {
        font-size:0.8rem !important;
        padding:0.5 rem !important;
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

.active{
    background-color: rgba(74, 144, 226, 0.1);
    border: 1px solid rgb(74, 144, 226);
    box-shadow: rgb(74, 144, 226) 0px 0px 0px 1px inset;
    color: rgb(52, 57, 68);
}
.jSiDrI {
    appearance: none;
    width: 100%;
    background-color: rgb(255, 255, 255);
    font-family: inherit;
    margin: 0.75rem 0px;
    border-radius: 6px;
    font-size: 1rem;
    font-weight: bold;
    border: 1px solid rgb(223, 229, 237);
    color: rgb(70, 76, 92);
    padding: 1em;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    cursor: pointer;
}

.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}

.form {
    border: 2px solid #eff2f6;
    padding: 30px;
    margin-bottom: 10px;
    border-radius: 4px;
}

.border-style {
    border-bottom: 2px solid #b0c0d3;
    border-top: 2px solid #b0c0d3;
    padding: 5px;
    margin-bottom: 10px;
}

.border-style ul {
    list-style-type: none;
    /* Remove bullets from the list */
    padding: 0;
    /* Remove default padding */
}

.border-style li {
    margin-bottom: 10px;
    /* Add some spacing between list items */
    font-size: 16px;
}

/* Style checkboxes and labels */
.border-style input[type="checkbox"] {
    margin-right: 10px;
    /* Add some spacing between checkbox and label */
}

.border-style label {
    display: inline-block;
    /* Align labels in a row */
    font-weight: bold;
    /* Make labels bold, adjust as needed */
}
</style>
