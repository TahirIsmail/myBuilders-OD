<template>
    <div class="py-4 py-lg-5">
        <div class="container">
            <div ref="refIntro" class="row">
                <div class="col-xxl-6 col-xl-6 col-md-7 mx-auto form bg-white ">

                    <h1 class="h3 mb-0" style="color: #55b97b">
                        <strong>Introduce yourself to customers </strong>
                    </h1>
                    <p class="p_size" style="margin-top: 10px">Introduce your business by describing the work you normally
                        undertake and what makes you stand out from other tradespeople. You can always edit this later.</p>


                    <div class="col-xxl-12 col-xl-12 col-md-12 mx-auto ">


                        <div class="mt-3">



                            <div style="margin-bottom:10px">


                                <textarea type="text" class="form-control form_input" v-model="introduction"
                                    style="height: 120px;"></textarea>
                            </div>



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
import { reactive, onMounted, ref } from 'vue'
import { useTrademensStore } from '../store/trademensStore';

const store = useTrademensStore();
const refIntro = ref(null)
const introduction = ref('')
onMounted(() => {
    refIntro.value.scrollIntoView({behavious:"smooth"})
    console.log("Introduction component mounted")
})
const props = defineProps(['navigationMethods'])
const submit = () => {
    store.setUserIntroduction(introduction);
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
.form {
    border: 2px solid #eff2f6;
    padding: 30px;
    margin-bottom: 10px;
    border-radius: 4px;
}
</style>