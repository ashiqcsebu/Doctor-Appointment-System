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
  {{-- Datatable css --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.5/css/autoFill.bootstrap4.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.3.1/css/fixedColumns.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/scroller/2.0.2/css/scroller.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchpanes/1.1.1/css/searchPanes.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.bootstrap4.min.css"/>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
{{-- End Datatable css --}}
  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

 
</head>
<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="{{url('/')}}"><span>Medi</span>Serve</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
        

          <li><a href="services.html">About</a></li>
          <li><a href="pricing.html">Diagnostics</a></li>
          <li><a href="blog.html">Pharmacy</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li class="drop-down"><a href="">


@if(Auth::check()) 
  {{ Auth::user()->name }} 
@else  

<p>Guest</p>

@endif
   
          </a>
                     <ul>

                    {{--   @if(Auth::check())  --}}
                          @if(auth()->check()&& auth()->user()->role->name === 'patient')

                           {{--  <li><a href="about.html">My Profile</a></li> --}}
                            <li><a href="{{route('my.booking')}}">My Appointment</a></li>  
                                             
                            <li ><a href="{{route('logout')}}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">Logout</a>
                                  <form action="{{route('logout')}}" method="post" class="d-none" id="logout-form">
                                        @csrf
                                   </form></li>

                      @else


                                      <li><a href="{{url('login')}}">login</a></li>
                                      <li><a href="{{url('register')}}">Regester</a></li>

                      @endif
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

  <!-- Datatables js-->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.5/js/dataTables.autoFill.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.5/js/autoFill.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.3.1/js/dataTables.fixedColumns.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/scroller/2.0.2/js/dataTables.scroller.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/searchpanes/1.1.1/js/dataTables.searchPanes.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/searchpanes/1.1.1/js/searchPanes.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $('#dataTable').DataTable({
                responsive: true,
                'aoColumnDefs': [{
                    'bSortable': false,
                    'aTargets': [-1] /* 1st one, start by the right */
                }],
                "pageLength": 25,
            });
        });
    </script>

    {{-- End Datatable --}}

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>
  <script>
    $(document).ready(function() {
      $('#day').on('change',function(){

        var targetDate = new Date();
        targetDate.setDate(targetDate.getDate() + 15);
                    var d = $("#day").val();
                    var day = new Date(d);
                  
                    var q = new Date();
                    var m =("0" + (q.getMonth())).substr(-2);
                    var d = ("0" + q.getDate()).substr(-2);
                    var y = q.getFullYear();
                    
                    var today = new Date(y,m,d);
                    if (today>day || day>targetDate) {
                        $("#day").val('');
                    }
        });
    });
</script>
  @yield('js')
</body>
</html>
         
 

 
