 @extends('layouts.master_home')  


<br>
<br>
<br>
<br>

@section('home_content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> 
              <div class="card-body ">
                   Running Patent ({{$data['running']}}/{{$data['total']}})
                 </div>

        
                <a class="btn btn-primary mr-3 ml-3 float-right"
                     href="{{ URL::to ("/")}}">Back to Home</a>  
                </div>

                <div class="card-body">
                    <table id="dataTable" class="table table-striped col-md-10">

                        <thead>
                                <tr>
                                          <th scope="col-md-1">#</th>
                                          <th scope="col-md-2">Patent Name</th>
                                          <th scope="col-md-2">Doctor Photo</th>
                                           <th scope="col-md-1">Booking Date</th>
                                          <th scope="col-md-1">Appointment date</th>
                                          <th scope="col-md-1">Serial No</th>
                                         
                                          <th scope="col-md-1">Status</th>
                                          <th scope="col-md-2">Action</th>
                                 </tr>
                        </thead> 
                            
                            <tbody>
                                @forelse($appointments as $key=>$appointment)
                                    <tr>
                                       <th scope="row">{{$key+1}}</th>
                                       <td> {{$appointment->doctor->name }}</td>  
                                      <td> <img src="{{asset ('images')}}/{{$appointment->doctor->image}} "height = "70px;" width="60px;">  </td> 
                                          <td>{{$appointment->booking_date}}</td> 
                                          <td>{{$appointment->appointment_date}}</td>
                                          <td>{{$data['sl']}}</td>
                                       
                                         
                                         <td>

                                     @if($appointment->status==0)
                                      <span class="badge badge-primary">Pending</span>
                                  @endif
                                  @if($appointment->status==1)
                                      <span class="badge badge-success">Approved</span>
                                  @endif
                                  @if($appointment->status==2)
                                      <span class="badge badge-warning">Cancelled</span>
                                  @endif 
                                  @if($appointment->status==3)
                                      <span class="badge badge-info">Started</span>
                                  @endif 
                                   @if($appointment->status==4)
                                      <span class="badge badge-success">Finished</span>
                                  @endif 
                                   @if($appointment->status==5)
                                      <span class="badge badge-danger">Absent</span>
                                  @endif 

                                          </td> 

                                          <td>
                            

                            <a href="{{route('update.status',[$appointment->id,2])}}"><button class="btn btn-danger"> Cancelled</button></a>
                                          </td>
                                        
                                        </tr>
                                      @empty
                                      <br>
                                       <strong><h4>You don't have any appointments yet.</h4></strong>  
                                        <br>
                                       
                                        @endforelse
                                
                                      </tbody> 
                                        
                                    </table> 
                                      
                                </div>
                            </div>


@endsection 
