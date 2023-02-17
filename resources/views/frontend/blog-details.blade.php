@extends('layouts.main')
@section('content')
   @section('breadcrumbs')
        <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Event Details</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Event Details</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
   @endsection

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <article class="blog-details">

              <div class="post-img">
                <img src="assets/img/dott.jpeg" alt="" class="img-fluid">
              </div>

              <h2 class="title">DATA SCIENCE BOOTCAMP</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> 
                    <a href="blog-details.html">Gritinai</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> 
                    <a href="blog-details.html"><time datetime="2020-01-01">Monday, 8th August 2022</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> 
                    <a href="blog-details.html">4pm-5pm WAT</a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                  Are you a student,
                  A graduate,
                  A techie,
                  A Data Science/Machine Language Enthusiast?
                  Have you been wanting to upgrade/learn a new skill?

                  Or you've heard of Ai, Data Science, Machine Learning and still wondering what it's about?
                  Then this is for you!
                </p>

                <blockquote>
                  <p>
                    Still wondering why?
                    Data Science is a field ripe with opportunity,
                    as companies across all industries have made big
                    commitments to big data, building out their analytics departments – especially 
                    in telecommunications, insurance, advertising, financial services, healthcare, and technology.
                  </p>
                </blockquote>

                <h3>GRITINAI</h3>

                <p>
                  Is Organizing a
                  A 3 weeks FREE webinar  on  Python refresher with data science.
                  In this webinar we would take you through all you need to know 
                  to start your journey in Data science.

                </p>

                <h3>Also
                  Beyond the Webinar;
                </h3>

                <ul style="list-style: none;">
                  <li><i class="bi bi-check-all" style="color:#7797C9;"></i> 
                    Our Community would offer support and assistance to help your growth.  
                  </li>
                  <li><i class="bi bi-check-all" style="color:#7797C9;"></i> 
                    Resources, Projects and Assignments.
                  </li>
                  <li><i class="bi bi-check-all" style="color:#7797C9;"></i> 
                    Access to our tutors and experts who will help guide you and 
                    provide answers to your questions and challenges.
                    And lots more.
                  </li>
                </ul>

                <p>Surely you don't want to miss this!
                  Hop in while there's still space.
                </p>

                <h3>Register Now <i class="bi bi-arrow-right"></i> &nbsp; <a href="https://forms.gle/Qp6JbnneGLYhquX99">Click</a></h3>
                
                <!-- <h3>Join our WhatsApp group <a href="https://chat.whatsapp.com/FUNZ0aX0dR1DYBIHwmPgYm">Click</a></h3> -->

              </div><!-- End post content -->

            </article><!-- End blog post -->

            

            
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4">

               <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Search</h3>
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div> 
              <!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>
              </div> 
              <!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Events</h3>

                <div class="mt-3">

                  <div class="post-item mt-3">
                    <img src="assets/img/dott.jpeg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">DATA SCIENCE BOOTCAMP</a></h4>
                      <time datetime="2020-01-01">8th August 2022</time>
                    </div>
                  </div><!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Quidem autem et impedit</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div>
                  <!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/blog-recent-3.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div> 
                  <!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/blog-recent-4.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Laborum corporis quo dara net para</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div> 
                  <!-- End recent post item-->

                  <div class="post-item">
                    <img src="assets/img/blog/blog-recent-5.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html">Et dolores corrupti quae illo quod dolor</a></h4>
                      <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                  </div> 
                  <!-- End recent post item-->

                </div>

              </div><!-- End sidebar recent posts-->

              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div> 
              <!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->
 @endsection