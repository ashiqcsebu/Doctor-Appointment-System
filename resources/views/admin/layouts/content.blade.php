       @if(auth()->check()&& auth()->user()->role->name === 'admin')


<div class="main-content">
                    <div class="container-fluid">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12">
     <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Total Registered Doctors </h6>
                                             
         <h2>{{App\Models\User::where('role_id',1)->count()}}</h2>
                                            
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
                                                <h6>Total Appintment </h6>
                         

                          <h2> {{App\Models\DoctorAppointment:: whereIn('status', [0,1, 3, 4]) ->count()}} </h2>   
                                                              
                                            </div>
                                            <div class="icon">
                                        
                                                  <i class="fas fa-stethoscope"></i>
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
                                                <h6>Total Registered Patients</h6>
                                              <h2>{{App\Models\User::where('role_id',3)->count()}}</h2>
                                            </div>
                                            <div class="icon">
                                               <i class="fa fa-heartbeat"></i>

                                                	
                                            </div>
                                        </div>
                                       

                                       
                                    </div>
                                
     </div>
                            </div>

                            
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                
                               
                            </div> 
                        </div>

                            <div class="card-body">
                               
                            </div>
                        </div>
 </div>
        

             

     @endif