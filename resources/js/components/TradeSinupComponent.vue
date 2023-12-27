<template>
    <div class="container" style="padding: 30px">
        <div class="row justify-content-center">
            <div class="py-4 py-lg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-md-12 mx-auto">
                            <div class="card rounded-2 border-gray-light">
                                <div class="card-body">
                                    <div
                                        class="mb-5 text-center col-xxl-12 col-xl-12 col-md-12"
                                    >
                                        <h1
                                            class="h3 mb-0"
                                            style="color: #55b97b"
                                        >
                                            Sign up to be a trade member
                                        </h1>

                                        <p class ="p_size" style="margin-top: 10px">
                                            Builders'Valley supports quality
                                            tradespeople. Our application
                                            <br />process is strict and only
                                            those who meet our high
                                            <br />standards are accepted.
                                        </p>
                                    </div>
                                    <form class="" id="reg-form" method="POST">
                                        <div class="form-group">
                                            <label class="form-label"
                                                >Full Name</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="name"
                                                id="name"
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
                                            <input
                                                type="email"
                                                class="form-control"
                                                name="email"
                                                id="signinSrEmail"
                                                placeholder="Email address"
                                                required
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label
                                                class="form-label"
                                                for="email"
                                                >Contact No
                                            </label>

                                            <input
                                                id="phone"
                                                type="tel"
                                                class="form-control"
                                                name="contact_no"
                                                placeholder="Contact No"
                                                autocomplete="on"
                                            />
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
                                            <input
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
                                        </div>

                                        <div class="form-group">
                                            <label
                                                class="form-label"
                                                for="password-confirm"
                                            >
                                                Confirm password
                                            </label>
                                            <input
                                                type="password"
                                                class="form-control"
                                                name="password_confirmation"
                                                id="password-confirm"
                                                placeholder="********"
                                                required
                                            />
                                            <small>
                                                Minimun 6 characters
                                            </small>
                                        </div>

                                        <div class="form-group">
                                            <div class="aiz-checkbox-list">
                                                <label class="aiz-checkbox">
                                                    <input
                                                        type="checkbox"
                                                        name="condition"
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
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="aiz-checkbox-list">
                                                <label class="aiz-checkbox">
                                                    <input
                                                        type="checkbox"
                                                        name="condition"
                                                        required
                                                    />
                                                    <span class="fs-13">
                                                        I agree to the MyBuilder
                                                        <span class="span_style"
                                                            >terms &
                                                            conditions</span
                                                        >
                                                        , the Quote Tool
                                                        <span class="span_style"
                                                            >terms &<br
                                                        /></span>
                                                        conditions and the data
                                                        <span class="span_style"
                                                            >sharing
                                                            agreement</span
                                                        >
                                                    </span>
                                                    <span
                                                        class="aiz-square-check"
                                                    ></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="mb-5">
                                            <button
                                                type="submit"
                                                class="btn rounded-1"
                                            >
                                                Continue
                                            </button>
                                        </div>

                                        <p style="margin-top: 10px">
                                            I have read and understood the
                                            <span class="span_style"
                                                >privacy notice </span
                                            >and
                                            <span class="span_style"
                                                >cookie policy.
                                            </span>
                                        </p>
                                    </form>
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
export default {
    data() {
        return {
            name: "",
            email: "",
            // Add other form fields here

            errors: {
                name: "",
                email: "",
                // Add other form fields here
            },
        };
    },
    methods: {
        submitForm() {
            // Validate form fields before submission
            if (!this.validateForm()) {
                // If validation fails, prevent form submission
                return;
            }

            // Handle form submission logic here
            console.log("Form Data:", {
                name: this.name,
                email: this.email,
                // Add other form fields here
            });

            // You may want to make an API request to handle user registration
            // using a library like axios or fetch.
        },
        validateForm() {
            // Reset errors
            this.errors = {};

            let isValid = true;

            // Basic validation, you can customize as needed
            if (!this.name) {
                this.errors.name = "Full Name is required";
                isValid = false;
            }

            if (!this.email) {
                this.errors.email = "Email is required";
                isValid = false;
            }

            // Add validation for other fields as needed

            return isValid;
        },
    },
};
</script>

<style scoped>
@import url("https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
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
</style>

<!-- Add Bootstrap CSS in your project for this to work -->
