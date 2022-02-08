@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                {{--************************ New add ********************* --}} 
        
                <div class="card-body">

          <form action="{{route('login')}}" method="post" autocomplete="off" >

              @if (Session::get('fail'))
                     <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                     </div>
              @endif
                   @csrf

               <div class="col">
                   
                  <div class="form-group col-md-12 mb-4">
                    <input type="email" name="email" class="form-control input-lg" aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}">
                    <span class="text-danger">@error ('email') {{$message}}@enderror</span>
                  </div>

                  <div class="form-group col-md-12 ">
                    <input type="password" name="password" class="form-control input-lg"  placeholder="Password" 
                    value="{{old('password')}}">
                    <span class="text-danger">@error ('password') {{$message}}@enderror</span>
                  </div>

                   <div class="form-group row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                   @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                </div>
                                  
                            </div>
                        </div>

</div>
                        <div class="form-group row mb-0 ">
                            <div class="col-md-12 ">
                                

                                <button  type="submit" class="btn btn-primary float-left">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                        </div>       
                  </div>
                </div>
              </form>


                        </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{--************************ New add end********************* --}} 





{{-- old log in code --}}

               {{--  <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form> --}}
      
