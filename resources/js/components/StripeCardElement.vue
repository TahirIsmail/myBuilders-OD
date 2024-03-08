<template>
    <div>
      <div id="payment-element"></div>
      <div id="setup-element"></div>
      <button @click="submitPayment">Submit Payment</button>
      <button @click="submitSetup">Submit Setup</button>
    </div>
  </template>
  
  <script>
  import { loadStripe } from '@stripe/stripe-js';
  
  export default {
    data() {
      return {
        stripe: null,
        paymentElement: null,
        setupElement: null,
        paymentIntent: null,
        setupIntent: null,
        clientSecret: '',
      };
    },
    props:{
        stripeKey : {
            type:String
        }
    },
  
    async mounted() {
      this.stripe = await loadStripe(this.stripeKey);
      const elements = this.stripe.elements();
  
      // Create a Payment Element
      this.paymentElement = elements.create('card');
      this.paymentElement.mount('#payment-element');
  
      // Create a Setup Element
      this.setupElement = elements.create('card');
      this.setupElement.mount('#setup-element');
    },
  
    methods: {
      async submitPayment() {
        // Create Payment Intent on the server
        const response = await axios.post('/create-payment-intent');
        this.clientSecret = response.data.client_secret;
  
        // Confirm Payment Intent with the Payment Element
        const result = await this.stripe.confirmCardPayment(this.clientSecret, {
          payment_method: {
            card: this.paymentElement,
          },
        });
  
        if (result.error) {
          console.error('Error confirming payment:', result.error.message);
          // Handle error
        } else {
          console.log('Payment confirmed:', result.paymentIntent);
          // Handle success
        }
      },
  
      async submitSetup() {
        // Create Setup Intent on the server
        const response = await axios.post('/create-setup-intent');
        this.clientSecret = response.data.client_secret;
  
        // Confirm Setup Intent with the Setup Element
        const result = await this.stripe.confirmCardSetup(this.clientSecret, {
          payment_method: {
            card: this.setupElement,
          },
        });
  
        if (result.error) {
          console.error('Error confirming setup:', result.error.message);
          // Handle error
        } else {
          console.log('Setup confirmed:', result.setupIntent);
          // Handle success
        }
      },
    },
  };
  </script>
  
  <style>
  /* Your component styles */
  </style>
  