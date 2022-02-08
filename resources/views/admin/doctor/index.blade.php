@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
                       <div class="row align-items-end">
                           <div class="col-lg-8">
                               <div class="page-header-title">
                                   <i class="ik ik-inbox bg-blue"></i>
                                   <div class="d-inline">
                                       <h5>Doctors</h5>
                                       <span>Doctors List</span>
                                   </div>
                               </div>
                           </div>
                           <div class="col-lg-4">
                               <nav class="breadcrumb-container" aria-label="breadcrumb">
                                   <ol class="breadcrumb">
                                       <li class="breadcrumb-item">
                                           <a href="../index.html"><i class="ik ik-home"></i></a>
                                       </li>
                                       <li class="breadcrumb-item">
                                           <a href="#">Doctors</a>
                                       </li>
                                       <li class="breadcrumb-item active" aria-current="page">Index</li>
                                   </ol>
                               </nav>
                           </div>
                       </div>
                   </div>
           
<div class="row">
   <div class="col-md-12" >

     @if (Session::has('message'))
                     <div class="alert bg-success alert-success text-white">
                        {{ Session::get('message') }}
                     </div>
              @endif
       <div class="card">
           <div class="card-header"><h3>Data Table</h3></div>
           <div class="card-body">
               <table class="table table-bordered col-md-12"  id="data_table" >
           <thead>
               <tr>
                   <th class="col-md-2">Name</th>
                   <th class="nosort  col-md-1" >Avatar</th>
                   <th class="col-md-2">Email</th>
                   <th class="col-md-2">Address</th>
                   <th class="col-md-2" >Phone</th> 
                  
                  <th class="col-md-3">Action</th> 
                  {{--  <th class="nosort">&nbsp; </th>  --}}
               </tr>
         </thead>
    <tbody>
           @if(count($users)>0)
            @foreach($users as $user)        
           <tr>    
                           <td>{{$user->name}}</td>
                           <td>
                               <img src="{{asset ('images')}}/{{$user->image}}"  class="table-user-thumb" alt="">
                           </td>
                               <td>{{$user->email}}</td>
                               <td>{{$user->address}}</td>
                                <td>{{$user->phone_number}}</td>
                                        

            <td>
               <div class="table-actions ">
                  <button class="btn btn-info" data-toggle="modal" data-target="#info{{$user->id}}">Info</button>  
                   
                  <a href="{{route('doctor.edit',[$user->id])}}">
                     <button class="btn btn-primary">Edit</button> 
                 </a>
                <a href="{{route('doctor.show',[$user->id])}}">
                  <button class="btn btn-danger">Delete</button> 
                </a>
               </div>
            </td>    
          </tr>
                   @include('admin.doctor.modal')  
                 @endforeach 
                       
                       @else
                   <td>No users is found</td>
                   @endif   
 @include('admin.doctor.modal')
      </div>
       </div>
   </div>
</div>




@endsection



      {{--   <td>
               <div class="table-actions ">
                  <button class="btn btn-info" data-toggle="modal" data-target="#exampleModel">Info</button>  
                   {{-- <a href="#" data-toggle="modal" data-target="#add">`
                       <i class="ik ik-eye"></i>
                   </a>
                   <a href="{{route('doctor.edit',[$user->id])}}">
               <i class="ik ik-edit-2"></i> 
           
                
                </a>
                   <a href="{{route('doctor.show',[$user->id])}}">
                    {{-- <i class="ik ik-trash-2"></i></a>
                    
                      </a>
               </div>
            </td>   --}}

            
            
            
            
            