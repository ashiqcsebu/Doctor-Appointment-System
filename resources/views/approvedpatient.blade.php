@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              {{--  <div class="card-header"> 

                  Your Total Appointment ({{$appointments->count()}})
                 </div>  --}}


                    <div class="container-fluid">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12">
     <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                       <h6>Total Patients</h6>
                            <h2>
                               {{App\Models\DoctorAppointment:: whereIn('status', [1, 3, 4])
                                                                ->where('doctor_id',auth()->user()->id)
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
                 <div class="col-lg-3 col-md-6 col-sm-12">
 <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                        
                               <h6>Total  Patients meet</h6>
                                 <h2>
                                 {{App\Models\DoctorAppointment::whereIN('status',[ 3, 4])
                                                                ->where('doctor_id',auth()->user()->id)
                                                                 ->where('appointment_date',date('Y-m-d'))
                                                                ->count()}}
                             </h2>
                                            </div>
                                            <div class="icon">
                                        
                                                  <i class="fas fa-stethoscope"></i>
                                            </div>
                                        </div>
                                      
                                    </div>

                                    
   </div>
                            </div>
                         

                            
                           
                        </div>

                            
                        </div>
 

                <div class="card-body">
                    <table  id="dataTable" class="table table-striped col-md-12">
                      <thead>
                        <tr>
                          <th scope="col-md-1">#</th>
                          <th scope="col-md-2">Patient Name</th>
                          <th scope="col-md-1">Gender</th>
                          <th scope="col-md-1">Contact</th>
                          <th scope="col-md-2"> Patient Email</th></th>
                          <th scope="col-md-1">Booking Date</th>
                         <th scope="col-md-1">Appointment Date</th>
                          <th scope="col-md-2">Status</th>
                          <th scope="col-md-2">Action</th>
                         
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

                                  
                                  @if($appointment->status==3)
                                      <span class="badge badge-success">Started</span>
                                  @endif
                                  @if($appointment->status==4)
                                      <span class="badge badge-warning">Finished</span>
                                  @endif 
                                   @if($appointment->status==5)
                                      <span class="badge badge-danger">Absent</span>
                                  @endif 
                                    
                                          </td>

                           <td>
                             
                                <a href="{{route('edit.status',[$appointment->id,3])}}"><button class="btn  btn-primary"> Start </button></a> 
                            
                               <a href="{{route('edit.status',[$appointment->id,4])}}"><button class="btn btn-success"> Finish</button></a>
                               
                               <a href="{{route('edit.status',[$appointment->id,5])}}"><button class="btn btn-danger"> Absent</button></a>
                             

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
 