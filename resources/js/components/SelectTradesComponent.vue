<template>
    <div class="py-4 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-6 col-md-7 mx-auto form">
                    <h1 class="heading">
                        <strong> Select your strongest trade </strong>
                    </h1>
                    <p style="margin-left: 20px">
                        Select trades to suit your business. Once your
                        application has been approved you can go for more.
                    </p>

                    <div class="col-xxl-12 col-xl-12 col-md-12 mx-auto">
                        <div class="mt-3">
                            <div class="form-group has-search">
                                <span
                                    class="fa fa-search form-control-feedback"
                                ></span>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Search"
                                />
                            </div>

                          
                                <div class="border-style">
                                    <ul>
                                        <li>
                                            <input
                                                type="checkbox"
                                                id="item1"
                                                name="item1"
                                            />
                                            <label for="item1">CAD/Drawings</label>
                                        </li>
                                        <li>
                                            <input
                                                type="checkbox"
                                                id="item2"
                                                name="item2"
                                            />
                                            <label for="item2">Carpentry</label>
                                        </li>
                                        <li>
                                            <input
                                                type="checkbox"
                                                id="item3"
                                                name="item3"
                                            />
                                            <label for="item3">Kitchen Fitting</label>
                                        </li>
                                        <li>
                                            <input
                                                type="checkbox"
                                                id="item4"
                                                name="item4"
                                            />
                                            <label for="item4">Landscaping</label>
                                        </li>
                                        <li>
                                            <input
                                                type="checkbox"
                                                id="item5"
                                                name="item5"
                                            />
                                            <label for="item5">Loft Conversions</label>
                                        </li>
                                        <li>
                                            <input
                                                type="checkbox"
                                                id="item6"
                                                name="item6"
                                            />
                                            <label for="item6">New Builds</label>
                                        </li>
                                        <!-- Add more list items with checkboxes as needed -->
                                    </ul>
                                </div>
                          

                            <div class="lp-header__content">
                                <a
                                    title="Start winning more work"
                                    href="{{ route('register') }}"
                                    class="btn--Tradeb"
                                    >Back</a
                                >
                                <a
                                    title="Post a job today and we'll alert the relevant tradespeople."
                                    href="{{ route('post_project') }}"
                                    class="btn--Tradec"
                                    style="margin-left: 2%"
                                    >Continue</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
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
    list-style-type: none; /* Remove bullets from the list */
    padding: 0; /* Remove default padding */
 
}

.border-style li {
    margin-bottom: 10px; /* Add some spacing between list items */
    font-size: 16px;
}

/* Style checkboxes and labels */
.border-style input[type="checkbox"] {
    margin-right: 10px; /* Add some spacing between checkbox and label */
}

.border-style label {
    display: inline-block; /* Align labels in a row */
    font-weight: bold; /* Make labels bold, adjust as needed */
}


</style>
