@extends('layouts.main')

@section('content')
    

    @section('breadcrumbs')
        <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/services-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Services</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Services</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    @endsection

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>

        </div>

        <div class="row gy-5">

          <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Mentoring</a></h4>
              <p class="description">
                Being mentored is one great way to ensure productivity across any conceived idea. 
                Get matched with great experienced mentors to aid consistency and growth.
              </p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link"> Building products</a></h4>
              <p class="description">
                Most persons have great ideas but 
                lack the skill in bringing them to reality we 
                help persons and organisations build products 
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Training</a></h4>
              <p class="description">
                We organise trainings that are tech related 
                inorder to equip you with skills relevant for what you'll like to bring to life.
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Grow your business</a></h4>
              <p class="description">
                With our ever growing community, it's easier to promote your products and business on a global scale.
              </p>
            </div>
          </div><!-- End Service Item -->

          

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Cards Section ======= -->
    <section id="services-cards" class="services-cards">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4 render-serivce">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="card-item">
                <div class="card-body">
                  <h4 class="card-title"> Want to be a mentor </h4>
                  <a class=" " href="{{  route('mentorform-page')  }}">Click Here</a>
                </div>
              </div>
            </div><!-- End Card Item -->
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="card-item">
                <div class="card-body">
                  <h4 class="card-title"> Want to be a mentee </h4>
                  <a class=""  href="{{ route('mentee-page') }}">Click Here</a>
                </div>
              </div>
            </div><!-- End Card Item -->
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <div class="card-item">
                <div class="card-body">
                  <h4 class="card-title"> Have a startup or idea you want help with </h4>
                  <p><a href="{{  route('idea-page') }}">Click Here</a></p>
                </div>
              </div>
            </div><!-- End Card Item -->
  
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <div class="card-item">
                <div class="card-body">
                  <h4 class="card-title"> 
                    Need help with data science,  Machine Learning or deep 
                    learning projects  
                  </h4>
                  <p><a href="{{  route('learn-page') }}">Click Here</a></p>
                </div>
              </div>
            </div><!-- End Card Item -->
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
              <div class="card-item">
                <div class="card-body">
                  <h4 class="card-title"> 
                    Staff training   
                  </h4>
                  <p><a href="{{ route('saff-page') }}">Click Here</a></p>
                </div>
              </div>
            </div><!-- End Card Item -->
  
            
  
          </div>
    </div>
      
    </section><!-- End Services Cards Section -->


@endsection