<!DOCTYPE html>
<html lang="en">
<head>

     <title>@yield('title') - Shalini Sharma</title>
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

    @yield('content')
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Lets get started with <strong> your product</strong> our passion.</h1>
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
<!-- 
          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            
            <ul class="footer-link">
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Contact</a></li>
            
            </ul>
          </div> -->

          <!-- <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="#" class="fa fa-instagram"></a></li>
              <li><a href="#" class="fa fa-twitter"></a></li>
              <li><a href="#" class="fa fa-dribbble"></a></li>
              <li><a href="#" class="fa fa-behance"></a></li>
            </ul>
          </div> -->

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