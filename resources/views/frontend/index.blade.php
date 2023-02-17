@extends('layouts.main')

@section('hero')
      <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">Focus On What Matters</h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>
              Bringing your ideas to reality is what matters most.
            </p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="contact.html" class="btn-get-started">Get Started</a>
            <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
          </div>

        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->
@endsection

@section('breadcrumbs')
    
@endsection

@section('content')
        <!-- ======= Why Choose Us Section ======= -->
        <section id="why-us" class="why-us">
          <div class="container" data-aos="fade-up">
    
            <div class="section-header">
              <h2>Why Choose Us</h2>
    
            </div>
    
            <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
    
              <div class="col-xl-5 img-bg" style="background-image: url('assets/img/why-us-bg.jpg')"></div>
              <div class="col-xl-7 slides  position-relative">
    
                <div class="slides-1 swiper">
                  <div class="swiper-wrapper">
    
                    <div class="swiper-slide">
                      <div class="item">
                        <h3 class="mb-3">Get matched with mentors</h3>
                        <p>
                          Being mentored is one great way to ensure productivity across any conceived idea.
                          Get matched with great experienced mentors to aid consistency and growth.
                        </p>
                      </div>
                    </div><!-- End slide item -->
    
                    <div class="swiper-slide">
                      <div class="item">
                        <h3 class="mb-3">Get training</h3>
                        <p>
                          We organise tech related trainings to equip you with skills as you bring your ideas to life.
                        </p>
                      </div>
                    </div><!-- End slide item -->
    
                    <div class="swiper-slide">
                      <div class="item">
                        <h3 class="mb-3">Grow your business </h3>
                        <p>
                          With our ever growing community, it's easier to promote your products and business on a global
                          scale.
                        </p>
                      </div>
                    </div><!-- End slide item -->
    
                    <div class="swiper-slide">
                      <div class="item">
                        <h3 class="mb-3">Build your idea.</h3>
                        <p>
                          We'll help you explore your creativity and make your business fantasy a reality
                        </p>
                      </div>
                    </div><!-- End slide item -->
    
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
    
            </div>
    
          </div>
        </section><!-- End Why Choose Us Section -->
    
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
                    With our growing community its easier to promote products
                    and business relevant to our communities.
                  </p>
                </div>
              </div><!-- End Service Item -->
    
    
    
            </div>
    
          </div>
        </section><!-- End Our Services Section -->
    
        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
          <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
              <div class="col-lg-6 text-center">
                <h3>Take Action</h3>
                <p> The journey of a thousand miles begins with a step. That idea, that dream is for a reason. </p>
                <a class="cta-btn" href="services.html">Take Action</a>
              </div>
            </div>
    
          </div>
        </section><!-- End Call To Action Section -->
    
    
        <section id="testimonials" class="testimonials">
          <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-header">
              <h2>Partners</h2>
            </div>
            <div class="slides-3 swiper swiper-initialized swiper-horizontal swiper-pointer-events aos-init aos-animate swiper-backface-hidden"
              data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper" id="swiper-wrapper-41de610438db8e471" aria-live="off" style="transform: translate3d(-1173px, 0px, 0px); transition-duration: 0ms;">
                
                @foreach ($partner as $part)
                  <div class="swiper-slide" role="group" aria-label="1 / 5" style="width: 351px; margin-right: 40px;"
                  data-swiper-slide-index="0">
                  <div class="testimonial-item">
                    <div class="profile mt-auto"> 
                      <a href="www.withpropel.com">
                        <img src="{{  asset('storage/partner/'.$part->image) }}" class="testimonial-img" alt="">
                        <h3>{{  $part->name }}</h3>
                      </a>
                    </div>
                  </div>
                </div>
                @endforeach
                

              </div>
              <div role="button" aria-label="Go to slide 5"></span></div><span class="swiper-notification"
                aria-live="assertive" aria-atomic="true"></span>
            </div>
          </div>
        </section>

            <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Recent Blog Posts</h2>

        </div>

        <div class="row gy-5">
          @foreach ($blog as $item)
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="post-box">
                <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
                <div class="meta">
                  <span class="post-date">Tue, December 12</span>
                  <span class="post-author"> / {{ $item->author }}</span>
                </div>
                <h3 class="post-title">{{ $item->title }}</h3>
                <p>{{ $item->body }}</p>
                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          @endforeach
          

        </div>

      </div>
    </section><!-- End Recent Blog Posts Section -->
@endsection





 