<!DOCTYPE html>
<html lang="en">
<head>

     <title>Software Development - Shalini Sharma</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" >
     <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{ asset('assets/css/templatemo-digital-trend.css') }}">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ asset('assets/index.html') }}">
              <i class="fa fa-line-chart"></i>
              <!-- Digital Trend -->
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link smoothScroll">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('work') }}" class="nav-link smoothScroll">Work</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('hire-me') }}" class="nav-link contact">Hire me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">

                                   <h1 class="text-white" data-aos="fade-up">Let get started with our project now!</h1>

                                   <a href="contact.html') }}" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Let us discuss together!</a>

                                   <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-phone mr-2"></i> +91 9716856665</strong>
                              </div>
                        </div>

                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="{{ asset('assets/images/working-girl.png') }}" class="img-fluid" alt="working girl">
                          </div>
                        </div>

                    </div>
               </div>
     </section>


     <!-- ABOUT -->
     <section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">

                              <h2 class="mb-4" data-aos="fade-up">Welcome to <strong>My place</h2>

                              <p class="mb-0" data-aos="fade-up">Hello and welcome to my place! My name is Shalini Sharma and I am a software engineer from Delhi. I have been working as a programmer for the past 15+ years and have spent countless hours of imagining, solving and planning things that come in my way. I am always very serious with what I do and my ambitions are always high as to never let myself down. All I am looking forward is the next project.
                              </p>
                         </div>

                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                          <img src="{{ asset('assets/images/office.png') }}" class="img-fluid" alt="office">
                        </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- PROJECT -->
     <section class="project section-padding" id="project">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-12 col-12">

                        <h2 class="mb-5 text-center" data-aos="fade-up">
                            Please take a look through 
                            <strong>My works</strong>
                        </h2>

                         <div class="owl-carousel owl-theme" id="project-slide">
                              <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                   <img src="{{ asset('assets/images/project/project-image01.jpg') }}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Website</small>

                                        <h3>
                                             <a href="https://www.thecollegemonk.com/" target="_blank">
                                                  <span>Thecollegemonk</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="{{ asset('assets/images/project/project-image02.jpg') }}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Website</small>

                                        <h3>
                                             <a href="https://www.peppydesk.com/">
                                                  <span>Peppy Desk</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="{{ asset('assets/images/project/project-image03.jpg') }}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Website</small>

                                        <h3>
                                             <a href="https://www.peppyprojects.com/">
                                                  <span>Peppy Project</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="{{ asset('assets/images/project/project-image04.jpg') }}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Website</small>

                                        <h3>
                                             <a href="https://www.interviewpro.in/">
                                                  <span>Interview pro</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="{{ asset('assets/images/project/project-image05.jpg') }}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Website</small>

                                        <h3>
                                             <a href="project-detail.html') }}">
                                                  <span>Ultimate HealthCare</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a> 
                                        </h3>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section class="testimonial section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="contact-image" data-aos="fade-up">

                          <img src="{{ asset('assets/images/female-avatar.png') }}" class="img-fluid" alt="website">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 col-12">
                      <h2 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Build great products</h2>

                      <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                      <p class="mb-4" data-aos="fade-up" data-aos-delay="300">Today’s possibilities are just endless. With the right skills and tools developers can create memorable experiences and cutting edge solutions that can run in browsers, desktop or mobile devices in zero time. If you find this interesting continue reading the other sections of this site and learn about how tech help you become more efficient.</p>

                      <!-- <p data-aos="fade-up" data-aos-delay="400">
                        <strong>Mary Zoe</strong>

                        <span class="mx-1">/</span>

                        <small>Digital Agency (CEO)</small> -->
                      </p>
                    </div>

               </div>
          </div>
     </section>


    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Lets get started with our <strong> your product</strong> our passion.</h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              +91 9716856665
            </p>

            <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                info.jobago@gmail.com
              </a>
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Shalini Sharma &copy; 2021 
            <br>
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            
            <ul class="footer-link">
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Contact</a></li>
            
            </ul>
          </div>

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="#" class="fa fa-instagram"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-dribbble"></a></li>
              <li><a href="#" class="fa fa-behance"></a></li>
            </ul>
          </div>

        </div>
      </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('assets/js/aos.js') }}"></script>
     <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('assets/js/smoothscroll.js') }}"></script>
     <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>