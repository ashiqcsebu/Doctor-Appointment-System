<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use DB;


class FrontendController extends Controller
{

    	public function index() {
           

        date_default_timezone_set("Asia/Dhaka");
    
    
        $doctors= DB:: table('users')->where ('role_id','=',1)->get();
     
        return view('home',compact('doctors'));
    }


    public function makeApp(Request $request){

        $app = new Appointment();
        $app->user_id = $request->uid;
        $app->doctor_id = $request->pid;
        $app->save();
    }

    /* 	public function show($id) 
        {

    
        $doctors= DB:: table('users')->where ('role_id','=',1)->get();
     
        return view('layouts.body.doctorlist',compact('doctors'));
       }
  */

      public function show($id)
    {
          $user = User::find($id);
          return view('booking.appointment',compact('user'));
     
    }
 

	


	}





