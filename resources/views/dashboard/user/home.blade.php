<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MediServe</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

 
</head>
<body>

          <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html"><span>Medi</span>Serve</a></h1>
     
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        
      

         <li><a href="services.html">About</a></li>

          <li><a href="services.html">Doctors</a></li>
          <li><a href="pricing.html">Diagnostics</a></li>
          <li><a href="blog.html">Pharmacy</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li class="drop-down"><a href="">{{Auth::user()->name}}</a>
                     <ul>
                            <li><a href="about.html">My Profile</a></li>
                            <li><a href="team.html">My Appointment</a></li>  
                                             
                            <li ><a href="{{route('user.logout')}}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">Logout</a>
                                  <form action="{{route('user.logout')}}" method="post" class="d-none" id="logout-form">
                                        @csrf
                                   </form>
                     
                                  


                             </li>
                     </ul>
           </li>
         </ul>
      </nav>
     </div>
  </header>



<main id="main">

  @yield('home_content')

  </main><!-- End #main -->

 
 @include('layouts.body.footer')


 <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>
         
 


