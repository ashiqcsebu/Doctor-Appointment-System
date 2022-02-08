 @extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
    

      <div class="col-lg-3 col-md-6 col-sm-12">
     <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                       <h6>Total Today's Patients</h6>
                            <h2>
                                  {{App\Models\DoctorAppointment::  
                                                                where('doctor_id',auth()->user()->id)
                                                                 ->where('appointment_date',date('Y-m-d'))
                                                                ->count()}}
                           </h2>
                                            
                                            </div>
                                            <div class="icon">
                                               <i class="fas fa-user-md"></i>
                                            </div>
                                        </div>
                                      
                                    </div>
                                   
      </div>
                            </div>




                <div class="card-body">
                    <table id="dataTable" class="table table-striped col-md-12">
                      <thead>
                        <tr>
                          <th scope="col-xs-1">#</th>
                          <th scope="col-md-2">Patient Name</th>
                          <th scope="col-md-1">Gender</th>
                           <th scope="col-md-1">Contact</th>
                          <th scope="col-md-2"> Patient Email</th></th>
                          <th scope="col-md-1">Booking Date</th>
                            <th scope="col-md-1">Appointment Date</th>
                          <th scope="col-md-1">Status</th>

                          <th scope="col-md-3">Action</th>
                         
                        </tr>
                      </thead>
                      <tbody>

                    @php( $i =1 ) 
               
                   @foreach($appointments as $key=>$appointment)
                        <tr>
                  
                             <td> {{ $i++}}</td> 

                              <td>{{$appointment->user->name}}</td> 
                             <td>{{$appointment->user->gender}}</td> 
                              <td>{{$appointment->user->phone_number}}</td>
                             <td>{{$appointment->user->email}}</td> 
                  

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
 