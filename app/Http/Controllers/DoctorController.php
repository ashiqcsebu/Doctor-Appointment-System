<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class DoctorController extends Controller
{
    
    public function index()
{
   

     {       
        $users = User::where ('role_id','!=',3)->get();
        return view('admin.doctor.index',compact('users'));
    } 
}
    
    public function create()
    {
        return view('admin.doctor.create');
            
    }

   
    public function store(Request $request)
    {
        $this->ValidateStore($request);
        $data  = $request->all();
        $name  = (new User)->UserAvatar($request);

       /*  $image = $request->file('image');
        $name  = $image->hashName();
        $destination = public_path('/images');
        $image ->move($destination,  $name ); */

        $data['image']=   $name;
        $data['password'] = bcrypt($request->password);
        User::create($data);

     
        return redirect()->back()->with('message','Doctor added successfully ');

            //return redirect()->route('doctor.index')->with('message','Doctor added successfully ');

    }

  
    public function show($id)
    {
          $user = User::find($id);
          return view('admin.doctor.delete',compact('user'));
     
    }

    
    public function edit($id)
    {
         $user = User::find($id);
        return view('admin.doctor.edit',compact('user'));
    }

    
    public function update(Request $request, $id)
    {
        $this->ValidateUpdate($request , $id);
        $data = $request->all();
        $user = User::find($id);
        $imageName = $user->image;
        $userPassword = $user->password;
        if($request->hasFile('image')){

            $imageName  = (new User)->UserAvatar($request);
            unlink(public_path('images/'.$user->image));

           /*  $image = $request->file('image');
            $imageName   = $image->hashName();
            $destination = public_path('/images');
            $image ->move($destination, $imageName  ); */

        }
        $data['image'] = $imageName;

        if($request->password){

             $data['password'] = bcrypt($request->password);
        }
        else{
            $data['password'] = $userPassword ;

        }
        $user->update($data);
        return redirect()->route('doctor.index')->with('message','Doctor Updated successfully ');

    }

    
    public function destroy($id)
    {   
     
    $user = User::findOrFail($id);
    $user->delete();

    
    unlink(public_path('images/'.$user->image));
        
         return redirect()->route('doctor.index')->with('message','Doctor Deleted successfully '); 
       
  }
    

    public function ValidateStore($request){

     return $this->validate($request,[
        'name'=>'required',
        'email'=>'required|unique:users',
        'password'=>'required|min:5|max:30',
        //'cpassword'=>'required|min:5|max:30|same:password',
        'gender'=>'required',
        'education'=>'required',
        'address'=>'required',
        'department'=>'required',
        'phone_number'=>'required | numeric',
        'image'=>'required | mimes:jpeg,jpg,png',
        'role_id'=>'required',
        'department'=>'required',
        ]);
    }
     public function ValidateUpdate($request , $id){

    return $this->validate($request,[
        'name'=>'required',
        'email'=>'required|unique:users,email,'.$id,
        'gender'=>'required',
        'education'=>'required',
        'address'=>'required',
        'department'=>'required',
        'phone_number'=>'required | numeric',
        'image'=>'mimes:jpeg,jpg,png',
        'role_id'=>'required',
        'department'=>'required',
        ]);
    }
    

   
}
