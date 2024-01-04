<template>
    <div>
        <div class="py-4 py-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-6 col-md-7 mx-auto form">
                        <h1><strong>About you</strong></h1>
                        <p><strong>You operate as a:</strong></p>
                        <div class="col-xxl-12 col-xl-12 col-md-12 mx-auto form">
                            <!-- Radio buttons -->
                            <div v-for="(option, index) in options" :key="index" class="form-check">
                                <input v-model="selectedOption" :value="option.value" class="form-check-input" type="radio"
                                    :id="option.id" />
                                <label :for="option.id" class="form-check-label"><strong>{{ option.label }}</strong></label>
                            </div>

                            <transition name="slide-fade" v-for="(option, index) in options" :key="index">
                                <div v-if="selectedOption === option.value">
                                    <div class="container mt-2">
                                        <div class="mt-3">
                                            <label :for="option.textInputId" class="form-label"><strong>Trading
                                                    name</strong></label>
                                            <input v-model="formData.Trading_name" type="text"
                                                class="form-control form_input" id="trade_id" name="Trading_name" />
                                        </div>
                                    </div>
                                </div>
                            </transition>

                            <!-- Collapsible content for each radio button -->

                            <div class="container mt-3">
                                <!-- Additional content for radio A -->

                                <Transition name="slide-fade">
                                    <div v-if="selectedOption == 'selfEmployed'"></div>
                                </Transition>
                                <!-- Additional content for radio B -->

                                <!-- Additional content for radio B -->
                                <Transition name="slide-fade">
                                    <div v-if="selectedOption === 'limitedCompany'
                                        ">
                                        <div class="mt-3">
                                            <label for="textB" class="form-label"><strong>Registered company
                                                    name</strong></label>
                                            <input type="text" class="form-control form_input" id="textB"
                                                v-model="formData.registered_company" name="Registered_company" />
                                        </div>
                                        <div class="mt-3">
                                            <label for="textB" class="form-label"><strong>Company registration
                                                    number</strong></label>
                                            <input type="text" class="form-control form_input" id="textB"
                                                name="Company_registration" v-model="formData.company_registration" />
                                        </div>
                                    </div>
                                </Transition>
                                <!-- Additional content for radio C -->
                                <Transition name="slide-fade">
                                    <div v-if="selectedOption ===
                                        'ordinaryPartnership'
                                        ">
                                        <div class="mt-3">
                                            <label for="textC" class="form-label"><strong>Full names of all
                                                    partners</strong></label>
                                            <br />
                                            <label for="textC" class="form-label">Comma-separated list of all
                                                names on the partnership
                                                agreement, including yourself
                                                (e.g. John Smith, Jane
                                                Doe)</label>
                                            <input type="text" class="form-control form_input" id="textC"
                                                name="partners_name" v-model="formData.partners_name" />
                                        </div>
                                    </div>
                                </Transition>
                                <!-- Additional content for radio D -->
                                <Transition name="slide-fade">
                                    <div v-if="selectedOption ===
                                        'limitedPartnership'
                                        ">
                                        <div class="mt-3">
                                            <label for="textD" class="form-label"><strong>Registered company
                                                    name</strong></label>
                                            <input type="text" class="form-control form_input" id="textD"
                                                name="limited_Registered_company"
                                                v-model="formData.limited_registered_company" />
                                        </div>
                                        <div class="mt-3">
                                            <label for="textD" class="form-label"><strong>Company registration
                                                    number</strong></label>
                                            <input type="text" class="form-control form_input" id="textD"
                                                name="limited_registration_number"
                                                v-model="formData.limited_registration_number" />
                                        </div>
                                    </div>
                                </Transition>
                                <Transition>
                                    <div v-show="selectedOption">
                                        <div class="lp-header__content">
                                            <button type="submit" class="btn--Tradeb" @click.prevent="back">
                                                Back
                                            </button>
                                            <button type="submit" class="btn--Tradec" @click.prevent="submit">
                                                Continue
                                            </button>
                                        </div>
                                    </div>
                                </Transition>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div>
  </div> -->
</template>
<script>
export default {
    props: ['navigationMethods'],
    created() {
        console.log(this.navigationMethods)
        
    },
    data() {
        return {
            selectedOption: "",
            formData: {
                trading_name: "",
                registered_company: "",
                company_registration: "",
                partners_name: "",
                limited_registered_company: "",
                limited_registration_number: "",
            },
            options: [
                {
                    id: "A",
                    label: "Self-employed / Sole Trader",
                    value: "selfEmployed",
                    textInputId: "textA",
                },
                {
                    id: "B",
                    label: "Limited Company",
                    value: "limitedCompany",
                    textInputId: "textB",
                },
                {
                    id: "C",
                    label: "Ordinary Partnership",
                    value: "ordinaryPartnership",
                    textInputId: "textC",
                },
                {
                    id: "D",
                    label: "Limited Partnership",
                    value: "limitedPartnership",
                    textInputId: "textD",
                },
            ],
        };
    },
    computed: {
        getComputedFormData() {
            return Object.fromEntries(
                Object.entries(this.formData).filter(([key, value]) => value !== "")
            );
        }
    },
    methods: {
        submit() {
            console.log({ ...this.getComputedFormData }, this.selectedOption)
            if (this.navigationMethods && typeof this.navigationMethods.nextStep === 'function') {
                this.navigationMethods.nextStep();
            }
        },
        back(){
            if (this.navigationMethods && typeof this.navigationMethods.prevStep === 'function') {
                this.navigationMethods.prevStep();
            }
        }
    }
};
</script>
<style type="text/css" scoped>
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

/*
  Enter and leave animations can use different
  durations and timing functions.
  */

/* we will explain what these classes do next! */
.v-enter-active,
.v-leave-active {
    transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}

.slide-fade-enter-active {
    transition: all 0.2s ease-out;
}

.slide-fade-leave-active {
    transition: all 0.5s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
    transform: translateX(20px);
    opacity: 0;
}

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

.lp-header__content {
    margin-top: 5% !important;
}

.btn--Tradeb {
    width: 30% !important;
    font-weight: normal;
    font-size: 20px;
    line-height: 1em;
    font-family: "sofia_probold", "Trebuchet MS", "Segoe UI", Candara,
        "Bitstream Vera Sans", "DejaVu Sans", "Bitstream Vera Sans", Verdana,
        "Verdana Ref", sans-serif;
    padding: 0.6em 0.25em 0.7em;
    -webkit-border-radius: 0.25em;
    -moz-border-radius: 0.25em;
    border-radius: 0.25em;
    background: white;
    opacity: 0.9;
    border: 2px solid #51c57d;
    color: #51c57d;
    display: inline-block;
    transition: color ease 100ms, border-color ease 100ms;
    margin-left: 10px;
    text-decoration: none !important;
}

.btn--Tradeb:hover {
    border: 2px solid #f0ae55 !important;
    color: #f0ae55 !important;
    text-decoration: none !important;
}

.btn--Tradec {
    width: 60% !important;
    font-weight: normal;
    font-size: 20px;
    line-height: 1em;
    font-family: "sofia_probold", "Trebuchet MS", "Segoe UI", Candara,
        "Bitstream Vera Sans", "DejaVu Sans", "Bitstream Vera Sans", Verdana,
        "Verdana Ref", sans-serif;
    padding: 0.6em 0.25em 0.7em;
    -webkit-border-radius: 0.25em;
    -moz-border-radius: 0.25em;
    border-radius: 0.25em;
    background-color: #51c57d;
    color: #fff;
    display: inline-block;
    border: 2px solid #51c57d;
    transition: color ease 100ms, border-color ease 100ms;
    text-decoration: none !important;
}

.btn--Tradec:hover {
    background-color: #f0ae55 !important;
    color: white !important;
    text-decoration: none !important;
    border-color: #f0ae55 !important;
}

.form-check {
    border-bottom: 2px solid #b0c0d3;
    padding: 5px;
    margin-bottom: 10px;
}

.btn--Tradeb {
    margin-right: 10px;
}
</style>
