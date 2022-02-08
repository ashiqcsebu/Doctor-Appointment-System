<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Doctor Log in </title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />



  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="  {{asset('backend/assets/css/sleek.css')}}" />

  {

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{asset('backend/assets/plugins/nprogress/nprogress.js')}}"></script>
</head>

  <body class="bg-light-gray" id="body">
      <div class="container d-flex flex-column justify-content-between vh-100">
      <div class="row justify-content-center mt-5">
        <div class="col-xl-5 col-lg-6 col-md-10">
          <div class="card">
            <div class="card-header bg-primary">
              <div class="app-brand">
                <a href="/index.html">
                  <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33"
                    viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                      <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                      <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                  </svg>
                  <span class="brand-name">Doctor Login</span>
                </a>
              </div>
            </div>
            <div class="card-body p-5">

              <h4 class="text-dark mb-5">Log in to Doctor Hompage</h4>

                <form action="{{route('doctor.check')}}" method="post" autocomplete="off" >

              @if (Session::get('fail'))
                     <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                     </div>
              @endif
      @csrf

                <div class="row">
                  <div class="form-group col-md-12 mb-4">
                    <input type="email" name="email" class="form-control input-lg" aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}">
                    <span class="text-danger">@error ('email') {{$message}}@enderror</span>
                  </div>

            
            
                  <div class="form-group col-md-12 ">
                    <input type="password" name="password" class="form-control input-lg"  placeholder="Password" 
                    value="{{old('password')}}">
                    <span class="text-danger">@error ('password') {{$message}}@enderror</span>
                  </div>

                  <div class="col-md-12">
                    <div class="d-flex my-2 justify-content-between">
                      <div class="d-inline-block mr-3">

                        <label class="control control-checkbox">Remember me
                          <input type="checkbox" />
                          <div class="control-indicator"></div>
                        </label>

                     <button type="submit" class="btn btn-lg btn-primary">Sign In</button> 
                    
                   
                      {{-- 
                      </div>
                      <p><a class="text-blue" href="{{ route('password.request') }}">Forgot Your Password?</a></p>
                      </div> --}}

                      {{-- <a class="text-blue" href="{{ route('register') }}">Sign Up</a> --}}
                      {{-- <a class="text-blue" href="{{ url('/admin/login') }}">Sign Up</a> --}}
                    
                  </div>
                </div>
              </form>
             
               <h5>Don't have an account yet ?
              <a href="{{route('user.register')}}">Register Now</a>
              </h5>
           
            </div>
          </div>
        </div>
      </div>
     
    </div>
</body>
</html>






{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Login</title>
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <div class="row">


            <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
                <h4>Doctor Login</h4>

                <form action="{{route('doctor.check')}}" method="post" autocomplete="off" >

              @if (Session::get('fail'))
                     <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                     </div>
              @endif
           @csrf
                 <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter Email  address"
                    value="{{old('email')}}">
                    <span class="text-danger">@error ('email') {{$message}}@enderror</span>
                 </div>

                 <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password"
                    value="{{old('password')}}">
                    <span class="text-danger">@error ('password') {{$message}}@enderror</span>
                 </div>
<br>
                 <div class="form-group">
                    
                   <button type="submit" class="btn btn-primary">Login</button>
                 </div>

                 </form>
                 <br>
                 <a href="{{route('doctor.register')}}">Create a new account</a>
            </div>
        </div>


    </div>

</body>
</html> --}}