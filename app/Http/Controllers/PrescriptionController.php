<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Prescription;
use App\Models\DoctorAppointment;
use DB;
use Auth;

class PrescriptionController extends Controller
{
      public function index()
    {

    	date_default_timezone_set('Asia/Dhaka');
		$appointments =  DoctorAppointment::where('appointment_date',date('Y-m-d'))
                                         ->whereIn('status', [1,2, 3, 4])
                                           ->where('doctor_id',auth()->user()->id)->get();
		return view('prescription.index',compact('appointments'));
    }
   
}
