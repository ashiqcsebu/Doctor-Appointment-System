

  @extends('layouts.master_home') 
<br>
<br>
<br>
 <div> 
   <br> 
   <br>
   <br>
   <h3>List Of Available Doctor</h3>
 </div>
<div class="card-body">
                    <table id="dataTable" class="table table-striped col-md-8">
                      <thead>
                        <tr>
                          <th scope="col-md-2">Doctor Name</th>
                          <th scope="col-md-2">Doctor Photo</th>
                          <th scope="col-md-1">Doctor Gender</th>
                          <th scope="col-md-2"> Doctor Degree</th></th>
                             <th scope="col-md-2"> Doctor Department</th></th>
                              <th scope="col-md-1">Location</th>
                          <th scope="col-md-2">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                   @foreach($doctors as $doctor)
                      <tr>
                    
                       <td >{{$doctor->name}}</td>
          <td> <img src="{{asset ('images')}}/{{$doctor->image}} "height = "70px;" width="60px;">  </td> 
                        <td>{{$doctor->gender}}</td>
                        <td>{{$doctor->education}}</td>
                        <td>{{$doctor->department}}</td>
                        <td>{{$doctor->address}}</td>
                        
                      
                        <td>
        
               <a class="btn btn-info" href="{{ URL::to ("doctor/details/".$doctor->id)}}">Book Now</a>     -
         
                        </td>
                        @endforeach
                      </tr>

                    
                      </tbody> 
                    </table>
     </div>





















