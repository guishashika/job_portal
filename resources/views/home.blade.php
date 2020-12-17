@extends('layouts.app')
@section('title')
    {{ 'Uwa Wellassa Job Portal' }}
@endsection

@section('content')
<!-- Home Slder  -->
<div class="container-fluid">
<div id="carouselExampleInterval" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="{{ asset('assets/images/slider-00333_02.png') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption slider-caption">
        <h3>Uva Wellassa University Job Vacancy</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <button type="submit" class="btn btn-primary mb-2">Find Your Future</button>
     </div>  
    </div>
    <div class="carousel-item" data-interval="2000">
    <img src="{{ asset('assets/images/slider-00333_02.png') }}" class="d-block w-100" alt="...">
    <div class="carousel-caption slider-caption">
        <h3>Uva Wellassa University Job Vacancy</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <button type="submit" class="btn btn-primary mb-2">Find Your Future</button>
      </div>  
    </div>
    <div class="carousel-item">
    <img src="{{ asset('assets/images/slider-00333_02.png') }}" class="d-block w-100" alt="...">
    <div class="carousel-caption slider-caption">
        <h3>Uva Wellassa University Job Vacancy</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <button type="submit" class="btn btn-primary mb-2">Find Your Future</button>
      </div>  
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div>
<!-- End of Home Slider -->

<!-- Find job -->
<div class="container ">
  <div class="row ">
      <div class="col-sm-1" ></div>
      <div class="col-sm-10 d-flex justify-content-center" >
       
          <div class="container find-job ">
              <form class="form-inline justify-content-center" action="/action_page.php">
              
                <input type="text" class="form-control mb-2 mr-sm-2 find-job-select" id="email2" placeholder="Search Keyword" name="email">
                
                
                <select  class="form-control  mb-2 mr-md-2 find-job-select">
                  <option>Select Positions</option>
                </select>
                <select  class="form-control  mb-2 mr-md-2 find-job-select">
                  <option>All Locations</option>
                </select>
                <button type="submit" class="btn btn-primary mb-2 find-job-submit">Find Job</button>
              </form>
              
              <!-- <div class="row">
                <div class="col-sm-3"><p>Search keywords e.g. web design</p></div>
                <div class="col-sm-3">33.33%</div>
                <div class="col-sm-3">33.33%</div>
                <div class="col-sm-3">33.33%</div>
            </div> -->

          </div>
        
    
      </div>
      <div class="col-sm-1" ></div>
  </div>

</div>
<!-- End of find job -->

<!--Browse Jobs section -->
<div id="section-2" class="container ">
  <h1 class="text-center main-title">Browse Jobs by Specialisms</h1>
  <p class="text-center sub-title">28 jobs live - 0 added today</p>
            <div class="row ">
            <div  class="col-sm-1"></div>
            <div  class="col-sm-10">
              <div class="row">
                <div  class="col-sm-3"><div class="job-category">Accountancy<br><span class="job-position">(5 open positions)</span></div ></div>
                <div  class="col-sm-3"><div class="job-category">Banking<br><span class="job-position">(5 open positions)</span></div ></div>
                <div  class="col-sm-3"><div class="job-category">Sales & Marketing<br><span class="job-position">(5 open positions)</span></div ></div>
                <div  class="col-sm-3"><div class="job-category">Public Sector<br><span class="job-position">(5 open positions)</span></div ></div>
              </div> 
              <div class="row">
                <div  class="col-sm-3"><div class="job-category">Accountancy<br><span class="job-position">(5 open positions)</span></div ></div>
                <div  class="col-sm-3"><div class="job-category">Banking<br><span class="job-position">(5 open positions)</span></div ></div>
                <div  class="col-sm-3"><div class="job-category">Sales & Marketing<br><span class="job-position">(5 open positions)</span></div ></div>
                <div  class="col-sm-3"><div class="job-category">Public Sector<br><span class="job-position">(5 open positions)</span></div ></div>
              </div> 
              <div class="row">
                <div  class="col-sm-3"><div class="job-category">Accountancy<br><span class="job-position">(5 open positions)</span></div ></div>
                <div  class="col-sm-3"><div class="job-category">Banking<br><span class="job-position">(5 open positions)</span></div ></div>
                <div  class="col-sm-3"><div class="job-category">Sales & Marketing<br><span class="job-position">(5 open positions)</span></div ></div>
                <div  class="col-sm-3"><div class="job-category">Public Sector<br><span class="job-position">(5 open positions)</span></div ></div>
              </div> 
              <div class="row">
                <div  class="col-sm-3"><div class="job-category">Accountancy<br><span class="job-position">(5 open positions)</span></div ></div>
                <div  class="col-sm-3"><div class="job-category">Banking<br><span class="job-position">(5 open positions)</span></div ></div>
                <div  class="col-sm-3"><div class="job-category">Sales & Marketing<br><span class="job-position">(5 open positions)</span></div ></div>
                <div  class="col-sm-3"><div class="job-category">Public Sector<br><span class="job-position">(5 open positions)</span></div ></div>
              </div> 
               
                 
            </div>
            <div  class="col-sm-1"></div>
                
            </div>
</div>
<!--End of Browse Jobs section -->

<!--Banner Section-->
<div id="banner1" class="container-fluid ">
    <div class="row">
      <div  class="col-sm-6"><img class="inner-banner-img" src="{{ asset('assets/images/ad_06.png') }}" alt=""></div>
      <div  class="col-sm-6 justify-content-center"><img class="banner-img" src="{{ asset('assets/images/laptop_03.png') }}" alt=""></div>
    </div>
</div>
<!-- End of Banner -->

<!-- Feature job section -->
<div id="job-section" class="container">
  <div  class="row ">
      <div id="featured-job" class="col-sm-8 ">
            <h1 class="main-title">FEATURED JOB</h1>
            <p class="sub-title">Leading employer's already using job and talent</p>
            <div class="row fe-job-div">
                <div class="col-sm-2"><img src="{{ asset('assets/images/dailoglogo_03.png') }}" alt=""></div>
                <div class="col-sm-8">
                  <h4 class="fe-job-title">Senior Technician</h4>
                  <p><span><img src="{{ asset('assets/images/location-pin16px.png') }}" alt=""></span ><span class="fe-location">Colombo 12, Sri Lanka</span></p>
                </div>
                <div class="col-sm-2"><button class="btn btn-primary fe-apply">Apply</button></div>
            </div>
            <div class="row fe-job-div">
                <div class="col-sm-2 align-baseline"><img id="company-logo" class="align-middle" src="{{ asset('assets/images/barndix_03.png') }}" alt=""></div>
                <div class="col-sm-8">
                  <h4 class="fe-job-title">Senior Technician</h4>
                  <p><span><img src="{{ asset('assets/images/location-pin16px.png') }}" alt=""></span ><span class="fe-location">Colombo 12, Sri Lanka</span></p>
                </div>
                <div class="col-sm-2"><button class="btn btn-primary fe-apply">Apply</button></div>
            </div>
            <div class="row fe-job-div">
                <div class="col-sm-2 align-baseline"><img id="company-logo" class="align-middle" src="{{ asset('assets/images/abanslogo_07.png') }}" alt=""></div>
                <div class="col-sm-8">
                  <h4 class="fe-job-title">Senior Technician</h4>
                  <p><span><img src="{{ asset('assets/images/location-pin16px.png') }}" alt=""></span ><span class="fe-location">Colombo 12, Sri Lanka</span></p>
                </div>
                <div class="col-sm-2"><button class="btn btn-primary fe-apply">Apply</button></div>
            </div>
      </div>
      <div id="top-recuiters" class="col-sm-4">
            <h1 class="main-title">TOP RECUITERS</h1>
            <p class="sub-title">Employer already using job talent</p>
            <div  class="container-sm inner-box" >
                <div class="container-sm text-center"><img src="{{ asset('assets/images/top-com1_03.png') }}" alt=""></div>
                <div class="container inner-sub-box">
                  <h5 class="inner-box-title">Mas Holdings</h4>
                  <p>2 Open Jobs</p>
                </div>
                
            </div>

            <div  class="container-sm inner-box" >
                <div class="container-sm text-center"><img class="justify-content-center" src="{{ asset('assets/images/jhonkeels_07.png') }}" alt=""></div>
                <div class="container inner-sub-box">
                  <h5 class="inner-box-title">Jhon Keels Holding</h4>
                  <p>2 Open Jobs</p>
                </div>
                
            </div>
      </div>
  </div>
</div>
<!-- End of Feature job section -->

<!-- Find another job section -->
<div class="container-fluid">
  <div class="row">
      <div class="col-sm-6 left-box">
        <div class="align-items-center left-box-content ">
        <div class="align-items-center card-body">
                 <h5>We'll always match you up with opportunities that are the right fit</h5>
                 <p>thought I would never be able to find a good job. Anyhow I took a look at the jobs posted by. I was looking for a job after matriculation due to some personal and domestic issues. I found a job but they did not pay me well. I thought I would never be able to find a good job. Anyhow I took a look. </p>
                 <button class="btn btn-success">Find Another Jobs</button>
            </div> 
        </div>
        
        </div>
      <div class="col-sm-6 right-box">
          
      </div>
  </div>
</div>
<!-- End of Find another job section -->

<!-- Testimonial  section -->
 <!-- The slideshow -->
 <div id="my-carousel">
 <div id="demo" class="carousel slide" data-ride="carousel">
            <h1 class="main-title text-center">Quick Career Tips</h1>
            <p class="sub-title text-center">found by employers communicate directly with hiring managers and recruiters.</p>
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <!-- <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li> -->
  </ul>
  
  <!-- The slideshow -->
  <div class="container carousel-inner no-padding">
    <div class="carousel-item active">
      <div class="col-xs-4 col-sm-4 col-md-4">
        <img class="testi-img" src="{{ asset('assets/images/testimonials1_03.png') }}">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-10 testimonial-text">
                  <p class="testimonial-details"><span>DEC 12, 2020</span><span> 0 Comment</span></p>
                  <h5 class="testimonial-h5">Jhon Keels Holding</h4>
                  <p class="testimonial-p" >Ravenously while stridently coughed far promiscuously below jeez much yikes bland that salamander cunningly some over abhorrent as house with..</p>
                  <span><a class="testimonial-read-more" href="http://">Read More >></a></span>
          </div>
          <div class="col-sm-1"></div>
        </div>
    </div>    
    <div class="col-xs-4 col-sm-4 col-md-4">
      <img class="testi-img" src="{{ asset('assets/images/testimonial2_03.png') }}">
      <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-10 testimonial-text">
                  <p class="testimonial-details"><span>DEC 12, 2020</span><span> 0 Comment</span></p>
                  <h5 class="testimonial-h5">Jhon Keels Holding</h4>
                  <p class="testimonial-p" >Ravenously while stridently coughed far promiscuously below jeez much yikes bland that salamander cunningly some over abhorrent as house with..</p>
                  <span><a class="testimonial-read-more" href="http://">Read More >></a></span>
          </div>
          <div class="col-sm-1"></div>
        </div>
      </div>   
      <div class="col-xs-4 col-sm-4 col-md-4">
        <img class="testi-img" src="{{ asset('assets/images/testimonial3_03.png') }}">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-10 testimonial-text">
                  <p class="testimonial-details"><span>DEC 12, 2020</span><span> 0 Comment</span></p>
                  <h5 class="testimonial-h5">Jhon Keels Holding</h4>
                  <p class="testimonial-p" >Ravenously while stridently coughed far promiscuously below jeez much yikes bland that salamander cunningly some over abhorrent as house with..</p>
                  <span><a class="testimonial-read-more" href="http://">Read More >></a></span>
          </div>
          <div class="col-sm-1"></div>
        </div>
      </div>   
         
    </div>

   
    
  
  <!-- Left and right controls -->
  <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> -->
</div>
  </div>
  
  <!-- Left and right controls -->
  <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> -->
</div></div>



<!-- End of Testimonial  section -->

<!-- profile carousel  section -->
<div class="container">

    <!-- The slideshow -->
 <div id="my-carousel" class="profile-carousel">
            <h1 class="main-title text-center">Latest Candidates</h1>
            <p class="sub-title text-center">Thought I would never be able to find a good job. Anyhow I took a look at the jobs</p>
 <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <!-- <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li> -->
  </ul>
  
  <!-- The slideshow -->
  <div class="container carousel-inner no-padding">
    <div class="carousel-item active">
      <div class="col-xs-2 col-sm-2 col-md-2 text-center">
        <img class="profile-slider-img" src="{{ asset('assets/images/pro1_03.png') }}">
        <div class="container text-center slider-inner-content">
          <h6>MCCOY DALE</h6> 
          <p>Lorepsum text </p>   
      </div>
        
      </div>    
      <div class="col-xs-2 col-sm-2 col-md-2 text-center">
      <img class="profile-slider-img" src="{{ asset('assets/images/pro2_03.png') }}"> 
      <div class="container text-center slider-inner-content">
          <h6>MCCOY DALE</h6> 
          <p>Lorepsum text </p>   
      </div>
      </div>   
      <div class="col-xs-2 col-sm-2 col-md-2 text-center">
      <img class="profile-slider-img" src="{{ asset('assets/images/pro3_03.png') }}">
      <div class="container text-center slider-inner-content">
          <h6>MCCOY DALE</h6> 
          <p>Lorepsum text </p>   
      </div>
      </div>   
      <div class="col-xs-2 col-sm-2 col-md-2 text-center">
          <img class="profile-slider-img" src="{{ asset('assets/images/pro4_03.png') }}"> 
            <div class="container text-center slider-inner-content">
              <h6>MCCOY DALE</h6> 
              <p>Lorepsum text </p>   
            </div>
        </div>  
        <div class="col-xs-2 col-sm-2 col-md-2 text-center">
          <img class="profile-slider-img" src="{{ asset('assets/images/p5_03.png') }}"> 
            <div class="container text-center slider-inner-content">
              <h6>MCCOY DALE</h6> 
              <p>Lorepsum text </p>   
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 text-center">
          <img class="profile-slider-img" src="{{ asset('assets/images/p6_03.png') }}"> 
            <div class="container text-center slider-inner-content">
              <h6>MCCOY DALE</h6> 
              <p>Lorepsum text </p>   
            </div>
        </div> 
    </div>
    

    
  
  <!-- Left and right controls -->
  <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> -->
</div>
  </div>
  
  <!-- Left and right controls -->
  <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> -->
</div>
</div>
</div>
<!-- End of profile carousel  section -->

<!-- gallery  section -->
<div class="container-fluid company-logo" >

    <div id="logo-gallery"  class="container">
            <h1 class="main-title text-center">Agencies</h1>
            <p class="sub-title text-center">The world's leading digital Leading employers already using Uwa Wellassa University job vacancies</p>
        <div class="row image-gallery">
           
            <img class="g-images" src="{{ asset('assets/images/cinamon_03.png') }}" alt="">
            <img class="g-images" src="{{ asset('assets/images/hemass_03.png') }}" alt="">
            <img class="g-images" src="{{ asset('assets/images/mount-lavinia_03.png') }}" alt="">
            <img class="g-images" src="{{ asset('assets/images/mobitel_03.png') }}" alt="">
            <img class="g-images" src="{{ asset('assets/images/sal_03.png') }}" alt="">
           
        </div>
        <div class="row image-gallery">
            
            <img class="g-images" src="{{ asset('assets/images/c23_03.png') }}" alt="">
            <img class="g-images" src="{{ asset('assets/images/hk_03.png') }}" alt="">
            <img class="g-images" src="{{ asset('assets/images/c2_03.png') }}" alt="">
            <img class="g-images" src="{{ asset('assets/images/abans_03.png') }}" alt="">
            <img class="g-images" src="{{ asset('assets/images/sal_03.png') }}" alt="">
            
        </div>
    </div>
  </div>   
<!-- End of image gallery section -->

@endsection
