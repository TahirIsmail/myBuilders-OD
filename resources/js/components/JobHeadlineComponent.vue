<template>
    <div class="container" style="padding: 30px">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- <h2 class="form-heading">Give your job a headline</h2> -->
                <form @submit.prevent="submitForm" class="account-form">
                    <!-- Job Headline Input -->
                    <div class="form-group position-relative">
                        <label for="jobHeadline"
                            >Give your job a headline</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="jobHeadline"
                            placeholder="Enter job headline"
                            v-model="form.jobHeadline"
                            @input="updateCounter"
                            maxlength="55"
                        />
                        <small class="form-text text-muted">
                            More tradespeople express interest in jobs that have
                            a descriptive name.
                        </small>
                        <div
                            class="position-absolute"
                            style="top: 0; right: 10px"
                        >
                            {{ form.jobHeadline.length }}/55
                        </div>
                    </div>

                    <!-- Postcode Input with Inner Div -->
                    <div class="form-group">
                        <label for="postcode">Postcode for the job</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text">UK Postcode</span>
                            </div>
                            <input
                                type="text"
                                class="form-control"
                                id="postcode"
                               
                                v-model="form.postcode"
                            />
                        </div>
                    </div>

                    <!-- Email Address Input -->
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

<script>
export default {
    data() {
        return {
            form: {
                jobHeadline: "",
                postcode: "",
                email: "",
            },
        };
    },
    methods: {
        submitForm() {
            // Handle the form submission
            console.log(this.form);
            // You would typically send this data to a server here
        },
    },
};
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
