<template>
    <div class="container-fluid">

    </div>
    <div class="py-4 py-lg-5">
        <div class="container">
            <div class="row">
                <div ref="workDetailref" class="col-xxl-6 col-xl-6 col-md-7 mx-auto form bg-white  ">

                    <h1 class="h3 mb-0" style="color: #55b97b">
                        <strong>What's your work address? </strong>
                    </h1>


                    <div class="col-xxl-12 col-xl-12 col-md-12 mx-auto ">


                        <div class="mt-3">
                            <div style="margin-bottom: 10px" class="input-group">
                                <label for="textA" class="form-label"><strong>Search for your
                                        address</strong></label><br>

                                <div class="input-group">
                                    <AutoComplete placeholder="Choose the Address" @placeChanged="handlePlaceChanged"
                                        class="form-control" />

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
import { onMounted, reactive, ref } from 'vue'
// import AddressInput from './components/AddressInput.vue'
// import AddressInput from './components/AddressInput.js'
import { useTrademensStore } from '../store/trademensStore'

import AutoComplete from '../components/AutoCompleteAddressComponent'

const postcode = ref('')
const town = ref('')
const street = ref('')
const work_address = ref('')
const distance = ref('')
const editedItem = reactive({})
const workDetailref = ref(null)
const searchText = ref(null)
const location = ref({});
const country = ref('');
const region = ref('');

// mapbox options as per https://docs.mapbox.com/api/search/geocoding



const props = defineProps(['navigationMethods'])
const store = useTrademensStore();

function submit() {

    store.setWorkingDetails({

        postcode: postcode.value,
        street: street.value,
        town: town.value,
        distance: distance.value,
        work_address: work_address.value,
        location: location.value,
        country: country.value,
        region: region.value,
    })
    if (props.navigationMethods && typeof props.navigationMethods.nextStep === 'function') {
        props.navigationMethods.nextStep();
    }
}
function handlePlaceChanged(place, address) {
   
    work_address.value = place.formatted_address
    postcode.value = address.postal_code
    street.value = address.street
    town.value = address.city
    location.value = place.geometry.location.toJSON()
    country.value = address.country
    region.value = address.region

}



function back() {
    if (props.navigationMethods && typeof props.navigationMethods.prevStep === 'function') {
        props.navigationMethods.prevStep();
    }
}
onMounted(() => {
    workDetailref.value.scrollIntoView({ behavior: "smooth" })
})

</script>
<style type="text/css" scoped>
#mapContainer {
    width: 200px;
    height: 350px;
}

.form {
    border: 2px solid #eff2f6;
    padding: 30px;
    margin-bottom: 10px;
    border-radius: 4px;
}

.lp-header__content {
    margin-top: 5% !important;
}

.map-container {
    flex: 1;
}
</style>