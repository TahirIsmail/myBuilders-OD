
<template>
    <div class="container" style="padding: 30px">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- <h2 class="form-heading">Give your job a headline</h2> -->
                <form @submit.prevent="submitForm" class="account-form">
                    <!-- Job Headline Input -->
                    <div class="form-group position-relative">
                        <label for="jobHeadline">Give your job a headline</label>
                        <input type="text" class="form-control" id="jobHeadline" placeholder="Enter job headline"
                            v-model="form.jobHeadline" @input="updateCounter" maxlength="55" />
                        <small class="form-text text-muted">
                            More tradespeople express interest in jobs that have
                            a descriptive name.
                        </small>
                        <div class="position-absolute" style="top: 0; right: 10px">
                            {{ form.jobHeadline.length }}/55
                        </div>
                    </div>

                    <!-- Postcode Input with Inner Div -->
                    <div class="form-group">
                        <label for="postcode">Postcode for the job</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text">UK Postcode</span>
                            </div>
                            <input type="text" class="form-control" id="postcode" v-model="form.postcode"
                                @input="postalCodeValidation" />
                        </div>
                        <div v-if="!form.isValidPostalCode && form.postcode.trim() !== ''" class="alert">
                            <p>Invalid postal code! Please enter a valid postal code.</p>
                        </div>
                    </div>

                    <!-- Email Address Input -->

                    <div v-if="!store.jobInformation || user">
                        <div class="form-group button-container">
                            <button type="submit" class="btn btn-primary">
                                Continue
                            </button>
                        </div>

                    </div>



                </form>
            </div>

            <div v-if="!user">
                <KeepAlive>
                    <Transition>
                        <component :is="currentComponent " v-if="store.jobInformation"
                            @toggleCurrent="handleComponentChange"></component>
                    </Transition>
                </KeepAlive>
            </div>

        </div>
    </div>
</template>

<script setup>
import { reactive, computed, ref, shallowRef, inject } from 'vue';
import { useQuestionnaireStore } from '../store/questionnaireStore';
import SignUp from '../components/SignUpComponent.vue';
import EmailInput from '../components/EmailInputComponent.vue'
import axios from 'axios';
const showSecondComponent = ref(false);

const handleComponentChange = (value) => {
    // Update the state based on the emitted value
    showSecondComponent.value = value;
};
const currentComponent = computed(() => {
    return showSecondComponent.value ? SignUp : EmailInput;
});
const user = inject("user")
const form = reactive({
    jobHeadline: '',
    postcode: '',
    isValidPostalCode: false,
});
const store = useQuestionnaireStore()
const validateUKPostalCode = (postalCode) => {
    const pattern = /^[A-Z]{1,2}\d[A-Z\d]? \d[A-Z]{2}$/;
    return pattern.test(postalCode);
};

const validateEuropeanPostalCode = (postalCode) => {
    const pattern = /^[A-Z\d]{3,10}$/;
    return pattern.test(postalCode);
};
const postalCodeValidation = () => {
    const ukValidation = validateUKPostalCode(form.postcode);
    const europeanValidation = validateEuropeanPostalCode(form.postcode);

    form.isValidPostalCode = ukValidation || europeanValidation;
}


const submitForm = () => {
    // Handle the form submission



    if (user !== null && user !== undefined) {
        // Object exists and is not null or undefined
        store.setjobInformation({
            ...form,
            JobQuestionAnswer: store.getAllSelectedAnswers,
            SelectedCategory: store.selectedCategory,
            JobDescription: store.getJobDescription
        })
        const response  =  store.sendJobinformation();
        console.log(response)
    } else {
        // Object is null or undefined

        store.setjobInformation({
            ...user,
            ...form,
            JobQuestionAnswer: store.getAllSelectedAnswers,
            SelectedCategory: store.selectedCategory,
            JobDescription: store.getJobDescription
        })
    }


};

const postjob = async () => {
    await store.sendJobinformation()
}

</script>

<!-- Add Bootstrap CSS in your project for this to work -->
<style scoped>
.btn-primary {
    color: #fff !important;
    background-color: rgb(81, 197, 125) !important;
}

.button-container {
    display: flex;
    justify-content: center;
}

.alert {
    background-color: #f8d7da;
    color: #721c24;
    padding: 10px;
    border-radius: 5px;
    margin-top: 10px;
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

/* we will explain what these classes do next! */
.v-enter-active,
.v-leave-active {
    transition: opacity 1.5s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}
</style>
