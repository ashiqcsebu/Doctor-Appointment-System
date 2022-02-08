<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use DB;
class DoctorAppointment extends Model
{
    use HasFactory;
     protected $fillable = ['user_id','appointment_date','booking_date', 'doctor_id','isApproved'];   
    
     

  public function doctor()
  {
  	return $this->belongsTo(User::class);
  }
   public function user()
  {
  	return $this->belongsTo(User::class);
  }
 

     
}
