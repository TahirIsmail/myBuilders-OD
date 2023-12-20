<template>
    
        
        <form @submit.prevent="submitForm" class="account-form">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" @input="generateUsername" v-model="form.email" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="********" v-model="form.password" />
            </div>
            <div class="form-group">
                <label for="fullName">Full name</label>
                <input type="text" class="form-control" id="fullName" placeholder="Full name" v-model="form.fullName" />
            </div>
            
            <div class="form-group">
                <label for="phone">Phone number</label>
                <input type="tel" class="form-control" id="phone" placeholder="Phone number" v-model="form.phone" />
                <small class="form-text text-muted">We will only share your phone number with
                    tradespeople you choose to talk to.</small>
            </div>
            <div class="form-group">
                <label for="username">Public username</label>
                <input type="text" class="form-control" id="username" placeholder="Public username"
                    v-model="form.username" />
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="newsletter" v-model="form.newsletter" />
                <label class="form-check-label" for="newsletter">I'd like to receive MyBuilder News, Advice and
                    Tips</label>
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="terms" v-model="form.terms" />
                <label class="form-check-label" for="terms">I agree to the <a href="#"> terms & conditions</a></label>
            </div>
            <div class="form-group button-container">
                <button type="submit" class="btn btn-primary">
                    Continue
                </button>
            </div>
            <p class="mt-3 alternative-option">
                I already have an account,
                <a href="#">use a different email address</a>
            </p>
        </form>
    
</template>

<script setup>
import { reactive, ref } from 'vue';
import { useQuestionnaireStore } from '../store/questionnaireStore';
const form = reactive({
    email: "",
    fullName: "",
    phone: "",
    password: "",
    username: "",
    newsletter: false,
    terms: false,
});

const questionnaireStore = useQuestionnaireStore();
const generateUsername = () => {
      // Extract username from the email (before the @ symbol)
      const username = form.email.split('@')[0];

      // Generate a random suffix or use a hashing algorithm for uniqueness
      const randomSuffix = Math.floor(Math.random() * 1000);

      // Combine the username and random suffix
      form.username = `${username}${randomSuffix}`;
    };
const submitForm = () => {
    // Handle the form submission
    questionnaireStore.setUserInformation({
        ...form
    })
    const response =questionnaireStore.sendUserinfoWithJobInfo()
    console.log(response)
    // You would typically send this data to a server or perform some action with it here
};
</script>
>

<style scoped>
/* Button styling */
.btn-primary {
    color: #fff !important;
    background-color: rgb(81, 197, 125) !important;
}

.button-container {
    display: flex;
    justify-content: center;
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

.account-form {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-heading {
    color: #333;
    margin-bottom: 20px;
}

.btn-primary {
    background-color: #0056b3;
    border-color: #004085;
}

.btn-primary:hover {
    background-color: #003d7a;
}

.alternative-option a {
    color: #0056b3;
}

.alternative-option a:hover {
    text-decoration: underline;
}

/* Add more styles as needed */
</style>
