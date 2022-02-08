 @extends('layouts.master_home') 

<br><br>
<br><br><br> <br>

 <div class="col d-flex justify-content-center">
 <div class="col-md-5  "> 
                        @if(Session::has('success'))

                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">
                                        x
                                    </button>
                                    <strong>
                                        {!! session('success') !!}
                                    </strong>
                                </div>
                                @endif
                                @if(Session::has('failed'))

                                <div class="alert alert-error alert-block">
                                    <button type="button" class="close" data-dismiss="alert">
                                        x
                                    </button>
                                    <strong>
                                        {!! session('failed') !!}
                                    </strong>
                                </div>

                            @endif

            
 <div class="card ">
         <img class="justify-content-center" src="{{asset ('images')}}/{{$doctor->image}}"height = "120px;" width="120px;">
    <div class="card-body">
                <p> NAME: {{$doctor->name}}</p> 
                <p> Education : {{$doctor->education}}  </p>
                <p> Department : {{$doctor->department}} </p>
                <p> Specialization : {{$doctor->description }} </p>
    </div>

    @if(Auth::check()) 
          <form action="{{route('appointment.save')}}"> 
        @csrf
        <input type="hidden" name="did" value="{{$doctor->id}}">
     <div class="container">
    <input type="date"  id="day" name="date" class="form-control datepicker" required>

</div>
              <button type="submit" class="btn btn-outline-primary text-center">Book Appointment</button>

    </form>
    @else
<a class="btn btn-danger" href="{{url('/login')}}">Log in first</a>

    @endif

  </div>


</div>
 
</div>
