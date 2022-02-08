<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;
use App\Models\DoctorAppointment;
use DB;
use Auth;

class DoctorAppointmentController extends Controller
{
    
    function makeAppointment(Request $request){


        $doesExist = DoctorAppointment::where([

                    ['user_id', '=', Auth::user()->id],

                    ['doctor_id', '=', $request->did]

        ])->where('status','!=',2)->whereDate('appointment_date',$request->date)->first();


        if(!empty($doesExist)){
            
            return redirect()->back()->with('failed','Your are not allowed now ');
       
        }
        
        else{

            $app = new DoctorAppointment;
            $app->user_id = Auth::user()->id;
            $app->booking_date = date('Y-m-d', time());
            $app->appointment_date = $request->date;
            $app->doctor_id =  $request->did;
            $app->status = 0;

            
            $app->save();

            return redirect()->back()->with('success','Your Appointment is Pending ');

       
        }
        

        
    }

    function show($id){
        $doctor = User::findOrFail($id);
        return view('appointment',compact('doctor'));
    }
}
