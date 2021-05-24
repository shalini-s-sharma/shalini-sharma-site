@extends('master')

@section('title','Hire me')
@section('content')

     <!-- CONTACT -->
     <section class="contact section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 mx-auto col-md-7 col-12 py-5 mt-5 text-center" data-aos="fade-up">

                      <h1 class="mb-4">Let’s <strong>get</strong> to <strong>work</strong></h1>
                      <p>You are more than welcome to send me an email with your ideas, plans or questions.

                        Together we can come up with an implementation plan without any fee restrictions.</p>

                      <p>or email us at <a href="mailto:info.jobago@gmail.com"><strong>info.jobago@gmail.com</strong></a></p>
                      <p>Use this form to reach out and get started with your new project directly.</p>
                    </div>

                    <div class="col-lg-8 mx-auto col-md-10 col-12">
                    
                    <!-- Follow https://templatemo.com/contact page to setup your own contact form -->
                    
                      <form action="#" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                        <div class="row">
                          <div class="col-lg-6 col-12">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                          </div>

                          <div class="col-lg-6 col-12">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                          </div>

                          <div class="col-lg-6 col-12">
                            <input type="text" class="form-control" name="company" placeholder="Company">
                          </div>

                          <div class="col-lg-6 col-12">
                            <input type="text" class="form-control" name="phone" placeholder="Phone(optional)">
                          </div>

                          <div class="col-lg-12 col-12">
                            <textarea class="form-control" rows="6" name="message" placeholder="What needs to be done?"></textarea>
                          </div>

                          <div class="col-lg-5 mx-auto col-7">
                            <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                          </div>
                        </div>

                      </form>
                    </div>

               </div>
          </div>
     </section>

@endsection
