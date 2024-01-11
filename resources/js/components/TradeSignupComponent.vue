<template>
    <div class="container" style="padding: 30px">
        <div class="row justify-content-center">
            <div class="py-4 py-lg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-7 col-xl-7 col-md-7 mx-auto">
                            <div class="card rounded-2 border-gray-light bg-white">
                                <div class="card-body">
                                    <div
                                        class="mb-5  col-xxl-12 col-xl-12 col-md-12"
                                    >
                                        <h1
                                            class="h3 mb-0"
                                            style="color: #55b97b"
                                        >
                                           <strong> Sign up to be a trade member</strong>
                                        </h1>

                                        <p
                                            class="p_size"
                                            style="margin-top: 10px"
                                        >
                                            Builders'Valley supports quality
                                            tradespeople. Our application
                                            process is strict and only
                                            those who meet our high
                                       standards are accepted.
                                        </p>
                                    </div>
                                    <Form
                                        class=""
                                        id="reg-form"
                                        @submit="submitForm"
                                        method="POST"
                                        :validation-schema="schema"
                                    >
                                        <div class="form-group">
                                            <label class="form-label"
                                                >Full Name</label
                                            >
                                            <Field
                                                type="text"
                                                class="form-control"
                                                name="name"
                                                placeholder="Full Name"
                                                required
                                            />
                                        </div>

                                        <div class="form-group">
                                            <label
                                                class="form-label"
                                                for="email"
                                                >Email address
                                            </label>
                                            <Field
                                                type="email"
                                                class="form-control"
                                                name="email"
                                                id="signinSrEmail"
                                                placeholder="Email address"
                                                required
                                            />
                                            <ErrorMessage
                                                class="text-danger"
                                                name="email"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label
                                                class="form-label"
                                                for="phone"
                                                >Contact No</label
                                            >
                                            <Field
                                                id="phone"
                                                type="tel"
                                                class="form-control"
                                                name="phone"
                                                placeholder="+153234258"
                                                autocomplete="on"
                                            />

                                            <ErrorMessage name="phone" />
                                        </div>
                                        <div class="container">
                                            <div
                                                class="alert alert-info"
                                                style="display: none"
                                            ></div>
                                        </div>

                                        <div class="form-group">
                                            <label
                                                class="form-label"
                                                for="password"
                                                >Password</label
                                            >
                                            <Field
                                                type="password"
                                                class="form-control"
                                                name="password"
                                                id="password"
                                                placeholder="********"
                                                aria-label="********"
                                                required
                                            />
                                            <small>
                                                Minimun 6 characters
                                            </small>
                                            <ErrorMessage
                                                class="text-danger"
                                                as="p"
                                                name="password"
                                            />
                                        </div>

                                        <div class="form-group">
                                            <label
                                                class="form-label"
                                                for="password-confirm"
                                            >
                                                Confirm password
                                            </label>
                                            <Field
                                                type="password"
                                                class="form-control"
                                                name="password_confirmation"
                                                placeholder="********"
                                                rules="confirmed:@password"
                                                required
                                            />
                                            <small>
                                                Minimun 6 characters
                                            </small>
                                            <ErrorMessage
                                                class="text-danger"
                                                as="p"
                                                name="password_confirmation"
                                            />
                                        </div>

                                        <div class="form-group">
                                            <div class="aiz-checkbox-list">
                                                <label class="aiz-checkbox">
                                                    <Field
                                                        type="checkbox"
                                                        name="condition"
                                                        value="1"
                                                        required
                                                    />
                                                    <span class="fs-13">
                                                        I'd like to receive
                                                        Builders'Valley News,
                                                        Advice and Tips
                                                    </span>
                                                    <span
                                                        class="aiz-square-check"
                                                    ></span>
                                                    <ErrorMessage
                                                        class="text-danger"
                                                        as="p"
                                                        name="condition"
                                                    />
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="aiz-checkbox-list">
                                                <label class="aiz-checkbox">
                                                    <Field
                                                        type="checkbox"
                                                        name="term_conditions"
                                                        value="1"
                                                        required
                                                    />
                                                    <span class="fs-13">
                                                        I agree to the Builder's
                                                        Valley
                                                        <span class="span_style"
                                                            >terms &
                                                            conditions</span
                                                        >
                                                        , the Quote Tool
                                                        <span class="span_style"
                                                            >terms &</span>
                                                        conditions and the data
                                                        <span class="span_style"
                                                            >sharing
                                                            agreement</span
                                                        >
                                                    </span>
                                                    <span
                                                        class="aiz-square-check"
                                                    ></span>
                                                    <ErrorMessage
                                                        class="text-danger"
                                                        as="p"
                                                        name="term_conditions"
                                                    />
                                                </label>
                                            </div>
                                        </div>

                                        <div
                                            class="mb-5 d-flex justify-content-center"
                                        >
                                            <button
                                                type="submit"
                                                class="btn--Tradec"
                                            >
                                                Continue
                                            </button>
                                        </div>

                                        <p class="p_size" style="margin-top: 10px">
                                            I have read and understood the
                                            <span class="span_style"
                                                >privacy notice </span
                                            >and
                                            <span class="span_style"
                                                >cookie policy.
                                            </span>
                                        </p>
                                    </Form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref,onMounted, reactive,defineProps,defineEmits } from 'vue'
import { Form, Field, ErrorMessage } from 'vee-validate'
import { useTrademensStore } from '../store/trademensStore';
import * as yup from 'yup';

const props = defineProps(['navigationMethods'])

onMounted(() => {
    const scrollComponent = document.querySelector('div');

// Check if the element is found before scrolling
if (scrollComponent) {
  // Use scrollIntoView to scroll to the element
  scrollComponent.scrollIntoView({ behavior: 'smooth' });
}
})

const schema = yup.object().shape({

    email: yup.string().email().required(),
    password: yup.string().min(8).required(),
    password_confirmation: yup
        .string()
        .required()
        .oneOf([yup.ref('password')], 'Passwords do not match'),
    phone: yup.string().required().matches(/^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/, 'Phone number is not valid'),
    term_conditions: yup.string().required(),
    condition: yup.string().required()
});

const store  = useTrademensStore();
const submitForm = (values) => {
    store.setUserInformation(values)
    // console.log(store.getUserInfo)
    if (props.navigationMethods && typeof props.navigationMethods.nextStep === 'function') {
    props.navigationMethods.nextStep();
  }
};

</script>
<style scoped>

.iti {
    position: relative;
    display: block !important;
}

.span_style {
    color: #4990e2;
}

.btn {
    color: #fff !important;
    background-color: rgb(81, 197, 125) !important;
    width: 500px;
    display: inline-block !important;
    font-weight: 400 !important;
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

.btn:hover {
    color: #fff;
    background-color: rgb(101, 217, 145) !important;
}
@media only screen and (min-width: 320px) and (max-width: 600px) {
    .form-label{
        font-size:0.7rem !important;
    }
}

@media only screen and (min-width: 320px) and (max-width: 600px) {
    .btn--Tradec{
        font-size:12px !important;
    }
}
@media only screen and (min-width: 320px) and (max-width: 600px) {
    .p_size {
        font-size:0.75rem !important;
    }
}
</style>


<!-- Add Bootstrap CSS in your project for this to work -->
