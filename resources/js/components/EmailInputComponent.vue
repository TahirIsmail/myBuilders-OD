<template>
    <div class="container" style="padding: 30px">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <form @submit.prevent="submitForm" >
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="Enter email"
                            v-model="form.email"
                        />
                        <small class="form-text text-muted">
                            We value your privacy and won't share your email
                            with anybody else.
                        </small>
                    </div>
                    <div class="form-group button-container">
                        <button type="submit" class="btn btn-primary">
                            Continue
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script setup>
import { reactive, onMounted, watch, ref, inject } from "vue";

import { useQuestionnaireStore } from "../store/questionnaireStore";
const form = reactive({
    email: "",
});

const store = useQuestionnaireStore();
const getEmail = () => form.email;
watch(getEmail, (newEmail) => {
    store.setEmail(newEmail);
});
onMounted(() => {
    console.log("Email component Mounted");
});
const emit = defineEmits(["toggleCurrent"]);
const submitForm = async () => {
    try {
        const response = await axios.post(
            "/checkuser",
            {
                ...form,
                jobInformation: store.jobInformation,
            },
            {
                headers: {
                    "X-CSRF-TOKEN": document.head.querySelector(
                        'meta[name="csrf-token"]'
                    ).content,
                },
            }
        );
        if (response.data.code == 200) {
            Swal.fire({
            title: 'Job Info has been sent to your email',
            text: 'You have already signed up',
            icon: 'success',
            })
            window.location.href = '/'
      }else if(response.data.code == 404){
        Swal.fire({
            title: 'You need to sign up',
            text: 'To complete job posting',
            icon: 'question',
            })
        
        emit('toggleCurrent',true);
      };
      }
      catch(e){
        console.error("Error Sending data to the server")
      }
}

</script>
<style scoped>
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
</style>
