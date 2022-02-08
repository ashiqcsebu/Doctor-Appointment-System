<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DoctorAppointment;
use App\Models\User;
use DB;

class PatientListController extends Controller
{
   
 public function index()
    {
   
       $appointments =   DoctorAppointment ::first()
        ->orderBy('booking_date', 'ASC') 
       ->where('doctor_id',auth()->user()->id)->get() ;

        return view('patientlist', compact('appointments')); 
    }

 public function toggleStatus($id,$value)
    {
         $appointments  = DoctorAppointment::find($id);

          if($appointments->status == 4){
            return redirect()->back();
         }
          if($appointments->status == 1){
            return redirect()->back();
         }

         if($appointments->status == 2){
            return redirect()->back();
         } 
         if($appointments->status == 5){
            return redirect()->back();
         } 


         $appointments->status = $value;
         $appointments->save();
        return redirect()->back();

    }

        public function show()
    {


        $appointments =  DoctorAppointment ::first()
       // $appointments = DB::table('doctor_appointments')
       ->whereDate('appointment_date',\Carbon\Carbon::today())
       ->where('doctor_id',auth()->user()->id)
        ->whereIn('status', [1,3,4,5])
       ->get();

        return view('approvedpatient',compact('appointments'));

}

// 0 pending , 1 approved, 2 cancelled , 3 start , 4 finished ,5 absent
public function updateStatus($id,$val)
    {
         $appointments  = DoctorAppointment::find($id);
         
           if($appointments->status == 5){
           // return redirect()->back();
         } 

         if($appointments->status == 3){      
          // return redirect()->back();
         } 
         if($appointments->status == 4){
            return redirect()->back();
         }


         $appointments->status = $val;
         $appointments->save();
        return redirect()->back();

    }


    


} 
  

