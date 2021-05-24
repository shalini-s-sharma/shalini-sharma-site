@extends('master')

@section('title','Software Development')

@section('content')
     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">

                                   <h1 class="text-white" data-aos="fade-up">Let get started with our project now!</h1>

                                   <a href="contact.html') }}" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Interested in starting a new project!</a>

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
                      <h2 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Experience matters.</h2>

                      <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                      <p class="mb-4" data-aos="fade-up" data-aos-delay="300">Having worked with companies for that long, I have specialized into helping professionals reach their ultimate goals and explore all the possibilities beyond them. Always being open for discussion and brainstorming sessions, feel free to reach out with your inquiry and get started with your own project asap.</p>

                      <!-- <p data-aos="fade-up" data-aos-delay="400">
                        <strong>Mary Zoe</strong>

                        <span class="mx-1">/</span>

                        <small>Digital Agency (CEO)</small> -->
                      </p>
                    </div>

               </div>
          </div>
     </section>
@endsection
