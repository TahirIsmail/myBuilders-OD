<template>
    <div>
        <div class="container">

            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="card p-3 d-flex">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="mb-0 fw-bold h4">Payment Methods</p>
                            </div>
                            <div class="col-md-3 ml-auto">
                                <div class="text-center">
                                    <img src="/public/assets/frontend/default/img/icons/Mastercard.png"
                                        style="width: 50px" />
                                    <img src="/public/assets/frontend/default/img/icons/visa1.png" style="width: 50px" />
                                    <img src="/public/assets/frontend/default/img/icons/american.png" style="width: 50px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card p-3">
                        <div class="card-body border p-0">
                            <div class="collapse p-3 pt-0" id="collapseExample">
                                <div class="row">
                                    <div class="col-8">
                                        <p class="mb-0">
                                            Lorem ipsum, dolor sit amet
                                            consectetur adipisicing elit. Atque
                                            nihil neque quisquam aut
                                            repellendus, dicta vero? Animi dicta
                                            cupiditate, facilis provident
                                            quibusdam ab quis, iste harum ipsum
                                            hic, nemo qui!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="col-md-12" style="background: #64c976">
                                <p class="mb-0 text-white fw-bold h4 p-2">
                                    Summary
                                </p>
                            </div>
                            <div class="collapse show p-3 pt-5" id="collapseExample">
                                <div class="row">
                                    <div class="col-lg-5 mb-lg-0 mb-3">
                                        <p class="mb-0">
                                            Providing your payment details helps
                                            us verify your identity and
                                            simplifies the process of paying
                                            future invoices. Payments will be
                                            processed from your card
                                            automatically to settle any
                                            outstanding invoices. Change default
                                            card
                                        </p>
                                    </div>
                                    <div class="col-lg-7">
                                        <form id="payment-form" class="form" ref="form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form__div">
                                                        <input id="card-holder-email" v-model="cardHolderEmail
                                                            " type="email" class="form-control" placeholder=" " />
                                                        <label for="card-holder-email" class="form__label">Card Holder
                                                            Email</label>
                                                    </div>
                                                    <span class="error my-2 text-danger">{{
                                                        errors.cardHolderEmail
                                                    }}</span>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form__div">
                                                        <input id="card-number" v-model="cardNumber" type="tel" v-mask="'#### #### #### ####'
                                                            " class="form-control" placeholder=" " />
                                                        <label for="card-number" class="form__label">Card Number</label>
                                                    </div>
                                                    <span class="error my-2 text-danger">{{
                                                        errors.cardNumber
                                                    }}</span>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form__div">
                                                        <input id="card-expiry" v-model="cardExpiry" v-mask="'##/##'"
                                                            type="tel" class="form-control" placeholder=" " />
                                                        <label for="card-expiry" class="form__label">MM / YY</label>
                                                    </div>
                                                    <span class="error my-2 text-danger">{{
                                                        errors.cardExpiry
                                                    }}</span>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form__div">
                                                        <input id="card-cvc" v-model="cardCvc" type="text" v-mask="'###'"
                                                            class="form-control" placeholder=" " />
                                                        <label for="card-cvc" class="form__label">CVV Code</label>
                                                    </div>
                                                    <span class="error my-2 text-danger">{{
                                                        errors.cardCvc
                                                    }}</span>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form__div">
                                                        <input id="card-holder-name" v-model="cardHolderName
                                                                " type="text" class="form-control" placeholder=" " />
                                                        <label for="card-holder-name" class="form__label">Name on the
                                                            Card</label>
                                                    </div>
                                                    <span class="error my-2 text-danger">{{
                                                        errors.cardHolderName
                                                    }}</span>
                                                </div>
                                                <!-- <div class="col-12">
                                                    <div class="form__div">
                                                        <input id="card-holder-address" v-model="cardHolderAddress
                                                                " type="text" class="form-control" placeholder=" " />
                                                        <label for="card-holder-address" class="form__label">Address</label>
                                                    </div>
                                                    <span class="error my-2 text-danger">{{
                                                        errors.cardHolderAddress
                                                    }}</span>
                                                </div> -->
                                            </div>

                                            <div class="container mt-5">
                                                <!-- <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="toggleInput"
                                                        data-bs-toggle="collapse" data-bs-target="#textInput"
                                                        aria-expanded="false" aria-controls="textInput" />
                                                    <label class="form-check-label" for="toggleInput">Billing address is not
                                                        same</label>
                                                </div> -->
                                                <div  id="textInput">
                                                    <div class="col-12 mt-3">
                                                        <div class="form__div">
                                                            <input id="card-holder-line1" v-model="cardHolderLine1" type="text" class="form-control"
                                                                placeholder=" " />
                                                            <label for="card-holder-line1" class="form__label">Address line
                                                                1</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mt-3">
                                                        <div class="form__div">
                                                            <input id="card-holder-line2" v-model="cardHolderLine2" type="text" class="form-control"
                                                                placeholder=" " />
                                                            <label for="card-holder-line2" class="form__label">Address line
                                                                2</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mt-3">
                                                        <div class="form__div">
                                                            <input id="card-holder-town" v-model="cardHolderTown" type="text" class="form-control"
                                                                placeholder=" " />
                                                            <label for="card-holder-town" class="form__label">Town /
                                                                City</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mt-3">
                                                        <div class="form__div">
                                                            <input id="card-holder-Postal" v-model="cardHolderPostal" type="text" class="form-control"
                                                                placeholder=" " />
                                                            <label for="card-holder-Postal" class="form__label">Postal
                                                                Code</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="btn btn-primary" id="submit-button" @click="submitCard">
                                                            Submit
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { loadStripe } from "@stripe/stripe-js";
export default {
    data() {
        return {
            errors: {},
            cardHolderEmail: "",
            cardNumber: "",
            cardExpiry: "",
            cardCvc: "",
            cardHolderName: "",
            cardHolderLine1:"",
            cardHolderLine2:"",
            cardHolderTown:"",
            cardHolderPostal:"",
            stripe: null,

        };
    },
    props: {
        stripePubKey: {
            type: String
        },
        stripeSecKey:{
            type:String
        }
    },
    methods: {
        async submitCard() {
            if (!this.cardHolderEmail) {
                this.errors.cardHolderEmail =
                    "Please enter your Card Holder Email Address";
            } else if (!this.isValidEmail(this.cardHolderEmail)) {
                this.errors.cardHolderEmail =
                    "Please enter a valid email address";
            } else {
                this.errors.cardHolderEmail = "";
            }

            if (!this.cardNumber) {
                this.errors.cardNumber = "Please enter a valid card number";
            } else if (this.cardNumber.length < 16) {
                this.errors.cardNumber =
                    "Card Number must be at least 16 characters long";
            } else {
                this.errors.cardNumber = "";
            }

            if (!this.cardExpiry) {
                this.errors.cardExpiry = "Please enter a valid expiry date";
            } else {
                this.errors.cardExpiry = "";
            }

            if (!this.cardCvc) {
                this.errors.cardCvc = "Please enter a valid CVC";
            } else if (this.cardCvc.length < 3) {
                this.errors.cardCvc = "CVC must be at least 3 characters long";
            } else {
                this.errors.cardCvc = "";
            }

            if (!this.cardHolderName) {
                this.errors.cardHolderName = "Please enter the cardholder name";
            } else {
                this.errors.cardHolderName = "";
            }

            if (!this.cardHolderAddress) {
                this.errors.cardHolderAddress =
                    "Please enter the cardholder address";
            } else if (this.cardHolderAddress.length < 10) {
                this.errors.cardHolderAddress =
                    "Address must be at least 10 characters long";
            } else {
                this.errors.cardHolderAddress = "";
            }

            // Check if there are any validation errors
            if (
                this.errors.cardHolderEmail ||
                this.errors.cardNumber ||
                this.errors.cardExpiry ||
                this.errors.cardCvc ||
                this.errors.cardHolderName ||
                this.errors.cardHolderAddress
            ) {
                return; // Exit early if there are validation errors
            }

            // Proceed with form submission
            try {
                const cardExpiryParts = this.cardExpiry.split("/");
                const cardExpMonth = cardExpiryParts[0];
                const cardExpYear = "20" + cardExpiryParts[1];
                const response = await axios.post("/stripe/store-user-card", {
                    card_number: this.cardNumber,
                    card_exp: this.cardExpiry,
                    card_exp_month: parseInt(cardExpMonth),
                    card_exp_year: parseInt(cardExpYear),
                    card_cvc: this.cardCvc,
                    card_holder_name: this.cardHolderName,
                    card_holder_email: this.cardHolderEmail,
                });

                // Handle the response here
                console.log(response.data); // Log the response data or perform other actions
            } catch (error) {
                // Handle errors here
                if (error.response.status === 422) {
                    // Extract validation errors from the error response
                    const errors = error.response.data.errors;
                    let errorMessage = "";

                    // Format error messages
                    for (const key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            errorMessage += `${errors[key][0]}\n`;
                        }
                    }

                    // Show SweetAlert with error message
                    Swal.fire({
                        icon: "error",
                        title: "Validation Error",
                        text: errorMessage.trim(),
                    });
                } else {
                    // Handle other errors
                    Swal.fire(
                        "Error!",
                        "An unexpected error occurred while processing your request. Please try again later.",
                        "error"
                    );
                    console.error("Error storing user card:", error.message);
                }
            }
        },

        isValidEmail(email) {
            // Simple email validation function
            const re = /\S+@\S+\.\S+/;
            return re.test(email);
        },
    },
    async mounted() {
        this.stripe = await loadStripe(this.stripePubKey);
       
        console.log(this.stripe.elements)
    },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

.container {
    margin: 30px auto;
}

.container .card {
    width: 100%;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    background: #fff;
    border-radius: 0px;
}

body {
    background: #eee;
}

.btn.btn-primary {
    background-color: #ddd;
    color: black;
    box-shadow: none;
    border: none;
    font-size: 20px;
    width: 100%;
    height: 100%;
}

.btn.btn-primary:focus {
    box-shadow: none;
}

.container .card .img-box {
    width: 80px;
    height: 50px;
}

.container .card img {
    width: 100%;
    object-fit: fill;
}

.container .card .number {
    font-size: 24px;
}

.container .card-body .btn.btn-primary .fab.fa-cc-paypal {
    font-size: 32px;
    color: #3333f7;
}

.fab.fa-cc-amex {
    color: #1c6acf;
    font-size: 32px;
}

.fab.fa-cc-mastercard {
    font-size: 32px;
    color: red;
}

.fab.fa-cc-discover {
    font-size: 32px;
    color: orange;
}

.c-green {
    color: green;
}

.box {
    height: 40px;
    width: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ddd;
}

.btn.btn-primary.payment {
    background-color: #1c6acf;
    color: white;
    border-radius: 0px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 24px;
}

.form__div {
    height: 50px;
    position: relative;
    margin-bottom: 24px;
}

.form-control {
    width: 100%;
    height: 45px;
    font-size: 14px;
    border: 1px solid #dadce0;
    border-radius: 0;
    outline: none;
    padding: 2px;
    background: none;
    z-index: 1;
    box-shadow: none;
}

.form__label {
    position: absolute;
    left: 16px;
    top: 10px;
    background-color: #fff;
    color: #80868b;
    font-size: 16px;
    transition: 0.3s;
    text-transform: uppercase;
}

.form-control:focus+.form__label {
    top: -8px;
    left: 12px;
    color: #1a73e8;
    font-size: 12px;
    font-weight: 500;
    z-index: 10;
}

.form-control:not(:placeholder-shown).form-control:not(:focus)+.form__label {
    top: -8px;
    left: 12px;
    font-size: 12px;
    font-weight: 500;
    z-index: 10;
}

.form-control:focus {
    border: 1.5px solid #1a73e8;
    box-shadow: none;
}
</style>
