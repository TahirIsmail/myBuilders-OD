
<template>
    <div class="col-md-12 mx-auto row justify-content-md-center">
        <div class="col-md-10 bg-white" style="padding-top:10px;">
            <!-- <h2 class="form-heading">Give your job a headline</h2> -->
            <form ref="jobheadlineref" @submit.prevent="submitForm">
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
                <div class="form-group">

                    <label for="country">Country</label>
                    <div class="input-group">
                        <div class="input-group-append">
                            <span class="input-group-text">Country</span>
                        </div>
                        <country-select class="form-control" v-model="form.country" :country="form.country"
                            :removePlaceholder=true :autocomplete=false topCountry="GB" />

                    </div>
                </div>

                <!-- Region of the post-->
                <div class="form-group">
                    <label for="region">Region</label>
                    <div class="input-group">
                        <div class="input-group-append">
                            <span class="input-group-text">Region</span>
                        </div>
                        <region-select class="form-control" v-model="form.region" :country="form.country"
                            :region="form.region" :removePlaceholder=true :autocomplete=false />
                    </div>
                </div>
                <!-- Postcode Input with Inner Div -->
                <div class="form-group">
                    <label for="postcode">Postcode for the job</label>
                    <div class="input-group">
                        <div class="input-group-append">
                            <span class="input-group-text">Postcode</span>
                        </div>
                        <input type="text" class="form-control" id="postcode" v-model="form.postcode" />
                    </div>

                </div>

                <!-- Email Address Input -->
                
                <div v-if="(!store.jobInformation || user )">
                    <div class="form-group button-container">
                        <button type="submit" class="btn btn-primary">
                            Continue
                        </button>
                    </div>

                </div>



            </form>
        </div>

        <div class="col-md-10 bg-white" v-if="!user">
            <KeepAlive>
                <Transition>
                    <component :is="currentComponent " v-if="store.jobInformation" @toggleCurrent="handleComponentChange">
                    </component>
                </Transition>
            </KeepAlive>
        </div>
    </div>
</template>

<script setup>
import { reactive, onMounted, computed, ref, shallowRef, inject } from 'vue';
import { useQuestionnaireStore } from '../store/questionnaireStore';
import SignUp from '../components/SignUpComponent.vue';
import EmailInput from '../components/EmailInputComponent.vue'
import * as Yup from 'yup';
import axios from 'axios';
import { postcodeValidator, postcodeValidatorExistsForCountry } from 'postcode-validator';




const jobheadlineref = ref('');
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
    country: '',
    region: '',
    jobHeadline: '',
    postcode: '',

});
const validationSchema = computed(() => {
    // Define your Yup validation schema here
    return Yup.object().shape({
        country: Yup.string().required('Country is required'),
        region: Yup.string().required('Region is required'),
        jobHeadline: Yup.string()
            .min(20, 'Job Headline must be more than 10 characters')
            .required('Job Headline is required'),

        postcode: Yup.string()
            .nullable()
            .test('valid-postal-code', 'Invalid Postal Code', (value) => isValidPostalCode(value)),
        // Add more validation rules for other fields as needed

    });
});
const store = useQuestionnaireStore()

const isValidPostalCode = (value) => {

    const validation = postcodeValidator(value, form.country);
    return validation
}



const submitForm = async () => {
    try {
        // Validate the form using Yup schema
        await validationSchema.value.validate(form, { abortEarly: false });

        // If validation succeeds, show SweetAlert2 success message
        if (user !== null && user !== undefined) {
            // Object exists and is not null or undefined
            store.setjobInformation({
                ...user,
                ...form,
                JobQuestionAnswer: store.getAllSelectedAnswers,
                SelectedCategory: store.selectedCategory,
                JobDescription: store.getJobDescription
            })
            
           
            Swal.fire({
                icon: 'success',
                title: `The Job Information has been for ${user.name},\nDo you want to save it!`,
                showConfirmButton: true,
                timer: 1500,
                confirmButtonText: "Save",
                denyButtonText: `Don't save`
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                
                if (result.isConfirmed) {
                    store.sendJobinformation();
                    Swal.fire("Saved!", "", "success");
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }});

            } else {
                // Object is null or undefined




                store.setjobInformation({
                    ...form,
                    JobQuestionAnswer: store.getAllSelectedAnswers,
                    SelectedCategory: store.selectedCategory,
                    JobDescription: store.getJobDescription
                })

            Swal.fire({
                    icon: 'success',
                    title: 'The Job Information has been set!',
                    showConfirmButton: false,
                    timer: 1500,
                });
            }


        // You can also submit the form data to your server here if needed
        // For example: this.$axios.post('/submit', form);
    } catch (error) {
            // If validation fails, show SweetAlert2 error message with validation errors
            console.log(error)
            const validationErrors = error.inner.map((err) => err.message);
            Swal.fire({
                icon: 'error',
                title: 'Invalid Job Information!',
                html: `<ul>${validationErrors.map((err) => `<li>${err}</li>`).join('')}</ul>`,
            });
        }
    };
    onMounted(() => {
        jobheadlineref.value.scrollIntoView({ behavior: "smooth" })
        
    })
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
    margin-top: 50px !important;
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
