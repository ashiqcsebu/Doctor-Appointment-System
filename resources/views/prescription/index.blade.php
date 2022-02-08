@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"> 

                    Appointment ({{$appointments->count()}})
                 </div>
               
                

              <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Patient Name</th>
                          <th scope="col">Gender</th>
                          <th scope="col"> Patient Email</th></th>
                          <th scope="col">Booking Date</th>
                            <th scope="col">Appointment Date</th>
                          <th scope="col">Status</th>

                          <th scope="col">Action</th>
                          
                          <th scope="col">Prescription</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                       @php( $i =1 ) 
               
                   @foreach($appointments as $key=>$appointment)
                        <tr>
                  
                             <td> {{ $i++}}</td> 

                              <td>{{$appointment->user->name}}</td> 
                             <td>{{$appointment->user->gender}}</td> 
                             <td>{{$appointment->user->email}}</td> 
                  

                         {{--      <td>{{$appointment->doctor->name}}</td>  --}}
                             
                             <td>{{$appointment->booking_date }}</td>
                             <td>{{$appointment->appointment_date}}</td>

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
                                      <span class="badge badge-secondary">Finished</span>
                                  @endif 
                                   @if($appointment->status==5)
                                      <span class="badge badge-danger">Absent</span>
                                  @endif 
                                    
                           </td> 
     

                           <td>
                                <a href="{{route('update.status',[$appointment->id,1])}}"><button class="btn  btn-info"> Approved </button></a> 
                            
                               <a href="{{route('update.status',[$appointment->id,2])}}"><button class="btn btn-danger"> Cancelled</button></a>
                            

                          </td>


                                    <td>
                              <!-- Button trigger modal -->
                       
           {{--      @if(!App\Models\Prescription::where('date',date('Y-m-d'))->where('doctor_id',auth()->user()->id)->where('user_id',$appointment->user->id)->exists()) --}}


                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$appointment->user_id}}">
                                Write prescription
                    </button>
                 {{--    @include('prescription.form')

                    @else 
                   <a href="{{route('prescription.show',[$appointment->user_id,$appointment->appointment_date])}}" class="btn btn-secondary">View prescription</a>
                    @endif
 --}}
                               
                          </td>


                      
                          </tr>
                        @endforeach
                       
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
