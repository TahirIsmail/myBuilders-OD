<template>
<div class="py-4 py-lg-5">   
       <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-6 col-md-7 mx-auto form ">

                    <h1 class="h3 mb-0" style="color: #55b97b" ><strong> Introduce yourself to customers </strong></h1>
                    <p class="p_size" style="margin-left: 20px;"> Introduce your business by describing the work you normally undertake and what makes you stand out from other tradespeople. You can always edit this later.</p>

                  
                    <div class="col-xxl-12 col-xl-12 col-md-12 mx-auto ">


                        <div class="mt-3">
                            


                            <div style="margin-bottom:10px">
                                

                                <input type="text" class="form-control form_input" style="height: 120px;">
                            </div>
                          


                            <div class=" lp-header__content">
                                <a title="Start winning more work" href="{{ route('register') }}"
                                    class="btn--Tradeb">Back</a>
                                <a title="Post a job today and we'll alert the relevant tradespeople."
                                    href="{{ route('post_project') }}" class="btn--Tradec" style="margin-left: 2%;" >Continue</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div> 
  </template>
  <style scoped>
  @media only screen and (min-width: 320px) and (max-width: 600px) {
    .btn--Tradeb{
        font-size:12px !important;
    }
}


@media only screen and (min-width: 320px) and (max-width: 600px) {
    .btn--Tradec{
        font-size:12px !important;
    }
}

@media only screen and (min-width: 320px) and (max-width: 600px) {
    .h1 {
        font-size:0.94rem !important;
    }
}
@media only screen and (min-width: 320px) and (max-width: 600px) {
    .p_size {
        font-size:0.8rem !important;
    }
}
</style>