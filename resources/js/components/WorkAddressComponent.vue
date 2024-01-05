<template>
    <div class="container-fluid">

    </div>
    <div class="py-4 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-6 col-md-7 mx-auto form bg-white  ">
            
                    <h1 class="h3 mb-0" style="color: #55b97b">
                        <strong>What's your work address? </strong>
                    </h1>


                    <div class="col-xxl-12 col-xl-12 col-md-12 mx-auto ">


                        <div class="mt-3">
                            <div style="margin-bottom: 10px" class="input-group">
                                <label for="textA" class="form-label"><strong>Search for your
                                        address</strong></label><br>

                                <div class="input-group">
                                    <AddressInput @addressSelect="getAddress" :mapboxOptions="mapboxOptions"></AddressInput>
                                    <span class="input-group-text">
                                        <i class="fas fa-search"></i>
                                        <!-- Assuming you are using Font Awesome for the search icon -->

                                    </span>
                                </div>
                            </div>


                            <div style="margin-bottom:10px">

                                <label for="textA" class="form-label "><strong>Work address</strong></label><br>

                                <input type="text" class="form-control form_input" v-model="work_address"
                                    placeholder="House number/name">
                            </div>
                            <div style="margin-bottom:10px">
                                <label for="textA" class="form-label"><strong> </strong></label><br>

                                <input type="text" class="form-control form_input" v-model="street"
                                    placeholder="Street name">
                            </div>
                            <div style="margin-bottom:10px">
                                <label for="textA" class="form-label"><strong>Town/City</strong></label><br>

                                <input type="text" v-model="town" class="form-control form_input ">
                            </div>
                            <div style="margin-bottom:10px">
                                <label for="textA" class="form-label"><strong>Postcode</strong></label><br>

                                <input type="text" v-model="postcode" class="form-control form_input ">
                            </div>
                            <div style="margin-bottom: 10px">
                                <label for="distance" class="form-label" style="color: black;">What is the maximum distance
                                    you are willing to
                                    travel for work?</label>

                                <select class="form-select form_input drop-down red-icon" id="distance" v-model="distance"
                                    name="distance">
                                    <option value="5">5 miles</option>
                                    <option value="10">10 miles</option>
                                    <option value="20">20 miles</option>
                                    <option value="50">50 miles</option>
                                    <!-- Add more options as needed -->
                                </select>
                                <br>
                                <label for="distance" class="form-label" style="color: rgb(63, 63, 63);margin-top:10px">This
                                    will determine which leads we send you. Later you can create your custom working area on
                                    a map.</label>
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
import { defineProps, reactive, ref } from 'vue'
// import AddressInput from './components/AddressInput.vue'
// import AddressInput from './components/AddressInput.js'
import { useTrademensStore } from '../store/trademensStore'
import AddressInput from '@samhess/vue-address-input'


const postcode = ref('')
const town = ref('')
const street = ref('')
const work_address = ref('')
const distance = ref('')
const editedItem = reactive({})
// mapbox options as per https://docs.mapbox.com/api/search/geocoding
const mapboxOptions = {
    access_token: 'pk.eyJ1IjoidGFoaXItdGVzdDEyIiwiYSI6ImNsb2g1ZDlhczEzYnQybXFlcTB1ajlwNjEifQ.c8bkCwEOW_EWwaP23Mor9A',
    limit: 5,

}
const props = defineProps(['navigationMethods'])
const store = useTrademensStore();
function getAddress(address) {
    Object.assign(editedItem, address)
    //let post_code = address.label.split(',')
    work_address.value = address.label

    postcode.value = address.postcode
    street.value = address.street
    town.value = address.city


}
function submit() {

    store.setWorkingDetails({
        work_address: work_address.value,
        postcode: postcode.value,
        street: street.value,
        town: town.value,
        distance: distance.value
    })
    if (props.navigationMethods && typeof props.navigationMethods.nextStep === 'function') {
        props.navigationMethods.nextStep();
    }
}
function back() {
    if (props.navigationMethods && typeof props.navigationMethods.prevStep === 'function') {
        props.navigationMethods.prevStep();
    }
}

</script>
<style type="text/css" scoped>
.form {
    border: 2px solid #eff2f6;
    padding: 30px;
    margin-bottom: 10px;
    border-radius: 4px;
}
.lp-header__content {
    margin-top: 5% !important;
}
</style>