<template>
    <div class="container mt-4">
        
        <div class="text-center" style="width:800px;  margin: 0 auto;">
            
            <div class="row px-2">
                <h1 class="text-center">Post a Job</h1>
            </div>
            <hr>
            <div class="row px-2">
                <p class="text-center"><strong>Get responses from MyBuilder's screened and reviewed tradespeople near
                        you</strong></p>
            </div>
            <div class="mx-auto row justify-content-md-center">

                <div class="col col-lg-8 text-center">
                    <p>What would you like to have done? </p>
                    <select class="select2 form-control form-control-lg aiz-selectpicker mb-3" data-live-search="true">
                        <option value="">{{ translate('Filter by Project Categories') }}</option>
                       
                    </select>
                    <button aria-hidden="false" type="submit" class="btn btn-primary"
                        style="opacity: 1; transition: opacity 0.3s ease-in-out 0s;">Continue</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['project-categories'],
    setup(props) {
        // setup() receives props as the first argument.
        console.log(props.project-categories)
    },
        mounted() {
        console.log('Component mounted.')
    }
}
</script>
