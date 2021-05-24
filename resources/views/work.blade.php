@extends('master')

@section('title','Work')
@section('content')
  <!-- BLOG -->
   <section class="blog section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12 py-5 mt-5 mb-3 text-center">

                      <h1 class="mb-4" data-aos="fade-up">My work</h1>
                      <p>During all these years I have been involved into a huge variety of projects, covering vast spectrum of software engineering.</p>
                    </div>

                    <div class="col-lg-5 ml-auto mt-5 pt-5 col-md-6 col-12">

                      <img src="{{ asset('assets/images/newsletter.png') }}" data-aos="fade-up" data-aos-delay="100" class="img-fluid" alt="newsletter">
                    </div>

                    <div class="col-lg-5 mr-auto mt-5 pt-5 col-md-6 col-12 newsletter-form">
                      <h2 data-aos="fade-up" data-aos-delay="200">Freelance</h2>

                    <p>For more than 15 years I have been working with many companies and professionals on successful projects that boosted productivity and conversion rates. From full featured applications to complex system integrations, e-commerce, CRM, CMS, ERP or any other platform the outcome was always above expectations. Original ideas and agile procedures improved collaboration experience and lead to the creation of robust software.

                        Feel free to send me your inquiries. Together we can elaborate on new ideas, design concepts and integration scenarios that lead to successful software projects. Start your new project today! </p>
                    </div>

               </div>
          </div>
     </section>

        <!-- PROJECT DETAIL -->
        <section class="project-detail section-padding">
          <div class="container">
               <div class="row">
               <div class="col-lg-6 col-md-6 col-12 mb-5">
                <img src="{{ asset('assets/images/project/project-detail/personal-website.png') }}" class="img-fluid" alt="personal website" data-aos="fade-up">
                </div>
                    <div class="col-lg-5 col-md-6 mr-lg-auto mt-lg-5 col-12" data-aos="fade-up" data-aos-delay="200">

                      <h2>Open Source</h2>

                      <p class="mt-3 mb-4">Open source projects are one of the best thing in the human history, featuring some of the biggest collaborations ever. The knowledge, the expertise and the communities backing up top-notch solutions are beyond compare and being part of an ecosystem like this is something every individual should consider joining, since together we can do better.</p>

                      <p>I maintain a plethora of open source project and contribute as much as possible to third party ones. Take a look at my <a href="https://github.com/shalini-s-sharma" target="_blank">github profile</a> for more information about my contributions.</p>
                    </div>
               </div>


          </div>
     </section>

     <section class="testimonial section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="contact-image" data-aos="fade-up">

                          <img src="{{ asset('assets/images/female-avatar.png') }}" class="img-fluid" alt="website">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 col-12">
                      <h2 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Entrepreneurship</h2>

                      <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                      <p class="mb-4" data-aos="fade-up" data-aos-delay="300">Combining resources and figuring out solutions to problems for many years quickly lead to finding new paths that are not yet explored. With the last years being overly productive, I have already set on a path of creating new startup projects that aim to provide the right assets for everyone to use. Many projects successfully emerged and new ones are being in the works.</p>
                      </p>
                    </div>

               </div>
          </div>
     </section>

     <section class="blog section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12 py-5 mt-5 mb-3 text-center">

                      <h1 class="mb-4" data-aos="fade-up">Projects</h1>
                      <p>This section contains some of most successful projects I produced along with newer entries with great potential. Unfortunately it is not possible to mention all the projects I have worked on, so do not hesitate to get in touch with me for more information about my portfolio.</p>
                    </div>
               </div>
          </div>
     </section>


@endsection
