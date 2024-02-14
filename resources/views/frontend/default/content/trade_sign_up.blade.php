@extends('frontend.default.layouts.app')
<style>
    .welcome-hero {
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      background: url(../images/about/c1.jpg) no-repeat;
      background-size: cover;
      background-position: center;
      height: 600px;
    }
    .welcome-hero:before {
      position: absolute;
      content: " ";
      top: 0;
      left: 0;
      background: rgb(80 94 79 / 42%);
      width: 100%;
      height: 100%;
    }

    .header-text h2 {
      color: #fff;
      font-size: 54px;
      font-weight: 700;
      text-transform: uppercase;
      line-height: 1.5;
    }
    .header-text h2 span {
      color: #64c976;
    }
    .header-text p {
      color: #fff;
      font-size: 15px;
      font-weight: 300;
      text-transform: uppercase;
      margin: 30px 0 60px;
      letter-spacing: 1px;
    }
    .header-text a {
      width: 200px;
      height: 60px;
      line-height: 60px;
      border-radius: 10px;
      text-transform: capitalize;
      color: #fff;
      background: #64c976;
      /* border:1px solid #b636ff; */
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
      -webkit-transition: 0.3s linear;
      -moz-transition: 0.3s linear;
      -ms-transition: 0.3s linear;
      -o-transition: 0.3s linear;
      transition: 0.3s linear;
    }
    .header-text a:hover {
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.4);
      background: #9f00ff;
      border: 1px solid #9f00ff;
    }

    .about {
      padding: 0px 0 100px;
      background-color: #ececec;
    }
    .about-content {
      padding-top: 70px;
    }

    .section-heading h2 {
      font-size: 24px;
      font-weight: 600;
      text-transform: uppercase;
      padding-bottom: 50px;
      border-bottom: 1px solid #e5ebf2;
      color: #64c976;
    }

	.single-about-txt h3 {
    font-size:18px;
    color: #3c4258;
    text-transform: initial;
    line-height: 1.8;
}
.single-about-txt p {
    font-size: 16px;
    color: #999fb3;
    padding: 35px 0 43px;
    border-bottom: 1px solid #999fb3;
}
.single-about-img:before {
    position:  absolute;
    content: " ";
    top: 0;
    left:  0;
    width: 109%;
    height:  100%;
    /* background: rgba(31,44,108,.3); */
}
.single-about-img img {
    max-width: 500px;
    height: 200px;
}

.education {
    background:  #f9fbfd;
    padding-top:  50px;
}



  </style>
@section('content')

  
  
    <section id="welcome-hero" class="welcome-hero">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="header-text">
              <h2>
                Sign Up <span>,</span> as a <br />
                tradesperson for free <span>.</span>
              </h2>
              <p>
                A trade membership with Builders’ Valley means you can contact
                potential <br />
                customers across the country. Sign up now for better business
                opportunities.
              </p>
              <a class='btn--lp'href={{route('register')}} >Trade Signup</a>
            </div>
            <!--/.header-text-->
          </div>
          <!--/.col-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </section>
    <!--/.welcome-hero-->
    <!--welcome-hero end -->

    <!--about start -->
    <section id="about" class="about">
      <div class="container">
        <div class="about-content">
          <div class="row">
            <div class="col-sm-6">
              <div class="section-heading">
                <h2>Reach more customers today</h2>
              </div>
              <div class="single-about-txt">
                <h3>
                  With our competitive fixed prices, gives more equal
                  opportunities to sole traders as well to big businesses to
                  find a new range of potential customers. There are no
                  membership fees, you will be charged only once you are
                  short-listed. Sign-up is completely free with no charges.
                </h3>
                <a class="contact-btn" href="#" role="button">submit</a>
              </div>
            </div>
            <div class="col-sm-offset-1 col-sm-5">
              <div class="single-about-img">
                <img src="assets/images/about/b2.png" alt="profile_image" />
                <!-- /.about-list-icon -->
              </div>
            </div>
            <div class="col-sm-6 sec1">Our best fixed price in the market</div>
            <div class="col-sm-5 sec2">Short-listed fee: £10</div>
          </div>
        </div>
      </div>
    </section>
    <!--/.about-->
    <!--about end -->

    <!--education start -->
    <section id="education" class="education">
      <div class="section-heading text-center">
        <h2>education</h2>
      </div>
      <div class="container">
        <div class="education-horizontal-timeline">
          <div class="row">
            <div class="col-sm-4">
              <div class="single-horizontal-timeline">
                <div class="experience-time">
                  <h2>2008 - 2010</h2>
                  <h3>master <span>of </span> computer science</h3>
                </div>
                <!--/.experience-time-->
                <div class="timeline-horizontal-border">
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <span class="single-timeline-horizontal"></span>
                </div>
                <div class="timeline">
                  <div class="timeline-content">
                    <h4 class="title">university of north carolina</h4>
                    <h5>north carolina, USA</h5>
                    <p class="description">
                      Duis aute irure dolor in reprehenderit in vol patate velit
                      esse cillum dolore eu fugiat nulla pari. Excepteur sint
                      occana inna tecat cupidatat non proident.
                    </p>
                  </div>
                  <!--/.timeline-content-->
                </div>
                <!--/.timeline-->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-horizontal-timeline">
                <div class="experience-time">
                  <h2>2004 - 2008</h2>
                  <h3>bachelor <span>of </span> computer science</h3>
                </div>
                <!--/.experience-time-->
                <div class="timeline-horizontal-border">
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <span class="single-timeline-horizontal"></span>
                </div>
                <div class="timeline">
                  <div class="timeline-content">
                    <h4 class="title">university of north carolina</h4>
                    <h5>north carolina, USA</h5>
                    <p class="description">
                      Duis aute irure dolor in reprehenderit in vol patate velit
                      esse cillum dolore eu fugiat nulla pari. Excepteur sint
                      occana inna tecat cupidatat non proident.
                    </p>
                  </div>
                  <!--/.timeline-content-->
                </div>
                <!--/.timeline-->
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-horizontal-timeline">
                <div class="experience-time">
                  <h2>2004 - 2008</h2>
                  <h3>bachelor <span>of </span> creative design</h3>
                </div>
                <!--/.experience-time-->
                <div class="timeline-horizontal-border">
                  <i class="fa fa-circle" aria-hidden="true"></i>
                  <span
                    class="single-timeline-horizontal spacial-horizontal-line"
                  ></span>
                </div>
                <div class="timeline">
                  <div class="timeline-content">
                    <h4 class="title">university of bolton</h4>
                    <h5>bolton, united kingdome</h5>
                    <p class="description">
                      Duis aute irure dolor in reprehenderit in vol patate velit
                      esse cillum dolore eu fugiat nulla pari. Excepteur sint
                      occana inna tecat cupidatat non proident.
                    </p>
                  </div>
                  <!--/.timeline-content-->
                </div>
                <!--/.timeline-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/.education-->
    <!--education end -->

    <!--/.footer-copyright-->
    <!--footer-copyright end-->

    <!-- Include all js compiled plugins (below), or include individual files as needed -->

@endsection