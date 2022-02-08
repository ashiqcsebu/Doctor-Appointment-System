@extends('admin.layouts.master')

@section('content')
    

<div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-edit bg-blue"></i>
                    <div class="d-inline">
                        <h5>Doctors</h5>
                        <span>Add Doctor</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

        <div class="row justify-content-center">
         <div class="col-md-10">
            @if (Session::has('message'))
                     <div class="alert alert-success">
                        {{ Session::get('message') }}
                     </div>
              @endif
         
            <div class="card">
                <div class="card-header"><h3>Add Doctor</h3></div>
                  <div class="card-body">
                    <form class="forms-sample" action="{{route('doctor.store')}}" method="POST"
                    enctype="multipart/form-data">
                @csrf
                        <div class="row">
                              <div class="col-md-6">
                                   <label  for="">Full Name</label>
                                     <input type="text" name ="name"
                                      class="form-control border-primary
                                     @error('name') is-invalid @enderror" 
                                     autocomplete="current-password"   
                                     placeholder="Enter Doctor's Full Name" autocomplete="off"
                                     value="{{old('name')}}">

                                     @error('name')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                       </span>
                                     @enderror
                              </div>  
                      
                                    <div class="col-md-6">
                                        <label for="">Email address</label>
                                        <input type="email" name="email" 
                                         class="form-control border-primary 
                                        @error('email') is-invalid @enderror" 
                                        placeholder="Enter doctor  Email" autocomplete="off"
                                        ">

                                         @error('email')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                       </span>
                                     @enderror
                                    </div>
                         </div>
                    
        <div class="row">
            <div class="col-md-6">
                  <label  for="">Password</label>
                   <input type="password"  
                     name ="password" class="form-control border-primary 
                     @error('password') is-invalid @enderror"
                   placeholder="Enter Doctor's Password" autocomplete="off">

                    @error('password')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                       </span>
                                     @enderror
            </div>  
                      
                    <div class="col-md-6">
                    <label for="">Gender</label>
                        <select name="gender" class="form-control border-primary 
                         @error('gender') is-invalid @enderror ">
                         <option value="">select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        </select>  
                         @error('gender')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                       </span>
                                     @enderror  
                    </div>
        </div>

            <div class="row">
                    <div class="col-md-6">
                        <label  for="">Eucational Background</label>
                            <input type="text" name ="education" class="form-control border-primary
                              @error('education') is-invalid @enderror "   
                            placeholder="Enter Doctor's Educational Degree" autocomplete="off" 
                            value="{{old('education')}}">

                             @error('education')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                       </span>
                                     @enderror
                    </div>  
                      
                    <div class="col-md-6">
                        <label for="">Address</label>
                        <input type="text" class="form-control border-primary
                          @error('address') is-invalid @enderror " name="address" 
                        placeholder="Doctor address" autocomplete="off" 
                        value="{{old('address')}}">

                         @error('address')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                       </span>
                                     @enderror
                    </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label  for="">Specialist</label>

                     <select name="department" class="form-control border-primary">
                        <option value=""> Please select</option>
                        <option value="Cardiologist">Cardiologist</option>
                        <option value="Medicine">Medicine</option>
                        <option value="Gynaecologist">Gynaecologist</option>
                        <option value="Urologist">Urologist</option>
                        <option value="Chest Disease">Chest Disease</option>
                        <option value="Dermatologist">Dermatologist</option>
                        <option value="Gastroenterologist">Gastroenterologist</option>
                     </select> 
                
                  {{--  @error('department') is-invalid @enderror "   placeholder="Doctor'S Expertise"
                        autocomplete="off" value="{{old('department')}}"> --}}
                         @error('department')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                       </span>
                                     @enderror
                </div>  
        
                    <div class="col-md-6">
                        <label for="">Phone Number</label>
                        <input type="text" class="form-control border-primary
                          @error('phone_number') is-invalid @enderror " 
                          name="phone_number"  placeholder="Doctor Contact No." 
                          autocomplete="off" value="{{old('phone_number')}}"
                          >
                         @error('phone_number')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                       </span>
                         @enderror
                    </div>
           </div>

        <div class="row">
            <div class="col-md-6">
                <label>Image</label>
                    <input type="file" class="form-control file-upload-info border-primary
                     @error('image') is-invalid @enderror "
                     placeholder="Upload Image" name="image">
                    <span class="input-group-append">
                       
                    </span>
                      @error('image')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                       </span>
                         @enderror
                    
            </div>
           
            <div class="col-md-6">
                <label for="">Role</label>
                <select name="role_id" class="form-control border-primary 
                 @error('role_id') is-invalid @enderror">
                    <option value="">Please Select Role</option>
                     @foreach (App\Models\Role::where('name', '!=','patient')-> get() as $role)
                           <option value="{{$role->id}}">{{$role->name}}</option>
                    
                     @endforeach

                              </select>

                @error('role_id')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                @enderror
                              </div>
                              </div>

               </div>

                <div class="form-group"  >
                     <div class="col-lg-12" >
                            <label for="exampleTextarea1">About</label>
                            <textarea  id="exampleTextarea1" rows="4"
                              name ="description" class="form-control border-primary 
                               @error('image') is-invalid @enderror ">
                            </textarea>

                               @error('description')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                @enderror
                            
                        </div>
                </div>

                <div class="float-right mb-4">   
                        <button type="submit" class="btn btn-primary mr-3 ml-3 float-right">Submit</button>
                        <button class="btn btn-danger float-right">Cancel</button>
                  </div>
            
                    </form>      
                </div>
            </div>
       </div>     
    </div>           





@endsection