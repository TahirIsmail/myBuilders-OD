<template>
    <div class="py-4 py-lg-5">
        <div class="container ">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-md-6 mx-auto form bg-white">
                    <h1 class="h3 mb-0" style="color: #55b97b">
                        <strong> Select up to 5 trades </strong>
                    </h1>
                    <p class="p_size" style="margin-left: 20px">
                        Select trades to suit your business. Once your
                        application has been approved you can go for more.
                    </p>

                    <div class="mt-3">
                        <div class="form-group has-search">
                            <span
                                class="fa fa-search form-control-feedback"
                            ></span>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Search"
                                v-model="search"
                            />
                        </div>

                        <div class="border-style row">
                            <ul
                                class="col-md-6"
                                v-for="trade in filteredTrades"
                                :key="trade.id"
                            >
                                <li>
                                    <input
                                        type="checkbox"
                                        :value="trade.id"
                                        :disabled="isCheckboxDisabled(trade.id)"
                                        :id="'item' + trade.id"
                                        :name="'item' + trade.id"
                                        v-model="selectedCheckboxes"
                                    />
                                    <label :for="'item' + trade.id">{{
                                        trade.name
                                    }}</label>
                                </li>
                            </ul>
                        </div>

                        <div class="lp-header__content">
                            <button
                                type="submit"
                                class="btn--Tradeb"
                                @click.prevent="back"
                            >
                                Back
                            </button>
                            <button
                                type="submit"
                                class="btn--Tradec"
                                @click.prevent="submit"
                            >
                                Continue
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref, onMounted, computed, reactive } from "vue";
import axios from "axios";
const trades = ref([]);

const search = ref("");
const selectedCheckboxes = ref([]);
const props = defineProps(["navigationMethods"]);
const filteredTrades = computed(() => {
    return trades.value.filter((p) => {
        return (
            p.name.toLowerCase().includes(search.value.toLowerCase()) ||
            p.name.toLowerCase().includes(search.value.toLowerCase())
        );
    });
});
const isCheckboxDisabled = (tradeId) => {
    const isChecked = selectedCheckboxes.value.includes(tradeId);

    if (selectedCheckboxes.value.length >= 5 && !isChecked) {
        return true; // Disable unchecked checkboxes if more than 5 checkboxes are selected
    }

    return false;
};
onMounted(async () => {
    const response = await axios.get("/getskills");
    trades.value = response.data;
});
const submit = () => {
    const filterSelectedValue = trades.value.filter((item) =>
        selectedCheckboxes.value.includes(item.id)
    );
    console.log(filterSelectedValue);
    if (
        props.navigationMethods &&
        typeof props.navigationMethods.nextStep === "function"
    ) {
        props.navigationMethods.nextStep();
    }
};

const back = () => {
    if (
        props.navigationMethods &&
        typeof props.navigationMethods.prevStep === "function"
    ) {
        props.navigationMethods.prevStep();
    }
};
</script>
<style scoped>
.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}

.border-style {
    border-bottom: 2px solid #b0c0d3;
    border-top: 2px solid #b0c0d3;
    padding: 5px;
    margin-bottom: 10px;
}

.border-style ul {
    list-style-type: none;
    /* Remove bullets from the list */
    padding: 0;
    /* Remove default padding */
}

.border-style li {
    margin-bottom: 10px;
    /* Add some spacing between list items */
    font-size: 16px;
}

/* Style checkboxes and labels */
.border-style input[type="checkbox"] {
    margin-right: 10px;
    /* Add some spacing between checkbox and label */
}

.border-style label {
    display: inline-block;
    /* Align labels in a row */
    font-weight: bold;
    /* Make labels bold, adjust as needed */
}

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

@media only screen and (min-width: 320px) and (max-width: 600px) {
    .h1 {
        font-size: 0.94rem !important;
    }
}
@media only screen and (min-width: 320px) and (max-width: 600px) {
    .p_size {
        font-size: 0.8rem !important;
    }
}

.form {
    border: 2px solid #eff2f6;
    padding: 30px;
    margin-bottom: 10px;
    border-radius: 4px;
}
</style>
