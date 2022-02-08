<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\DoctorAppointment;
use App\Models\User;

use DB;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

 
      public function index()
    {   
          if(Auth::user()->role->id=="2" || Auth::user()->role->id=="1"){
              return redirect()->to('/dashboard');
          }
        $doctors= DB:: table('users')->where ('role_id','=',1)->get();
        return view('home',compact('doctors'));
} 
 
  
/* 
       public function index()
    {   
          if(Auth::user()->role->id=="2" ){
              return redirect()->to('/dashboard');
          }
                $doctors= DB:: table('users')->where ('role_id','=',1)->get();
                 return view('home',compact('doctors'));


           if( Auth::user()->role->id=="1"){
              return redirect()->to('/patientlist');
          }
           $doctors= DB:: table('users')->where ('role_id','=','user_id')->get();
        return view('patientlist',compact('doctors')); 
        
}

 */
  
   public function myBookings()
    {

      $data=[];
      $data['total']=0;
      $data['running']=0;
      $data['sl']=0;

        $user_appnt =  DoctorAppointment ::where ('user_id',auth()->user()->id)
        ->whereDate('appointment_date',\Carbon\Carbon::today())
        ->whereIn('status', [1,3,4])->first();
        if(!empty($user_appnt)){
          $today_count= DoctorAppointment::whereDate('appointment_date',\Carbon\Carbon::today())
            ->where('doctor_id',$user_appnt->doctor_id)
            ->whereIn('status', [1,3,4])
            ->count();

          $today_apt= DoctorAppointment::whereDate('appointment_date',\Carbon\Carbon::today())
            ->where('doctor_id',$user_appnt->doctor_id)
            ->whereIn('status', [1,3,4])
            ->get();


            $data['total']=$today_count;
          $running= DoctorAppointment::whereDate('appointment_date',\Carbon\Carbon::today())
            ->where('doctor_id',$user_appnt->doctor_id)
            ->whereIn('status', [3,4])
            ->count();
          $data['running']=$running;
            
          
          $sl=$today_apt->pluck('user_id')->search(auth()->user()->id);
            $data['sl']=$sl+1;
        }
        $appointments =  DoctorAppointment::where ('user_id' , auth()->user()->id)
          ->whereDate('appointment_date', '>=',\Carbon\Carbon::today())
         ->get();
      
        
        return view('booking.index',compact(['appointments','data'])); 

    }


}