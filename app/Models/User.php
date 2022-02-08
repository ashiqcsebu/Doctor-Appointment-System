<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'address' ,	
        'phone_number',
        'department',	
        'image',	
        'education',	
        'description',	
        'gender',
    ];

    
    protected $hidden = [
        'password',
        'remember_token',
    ];

  
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){

        return $this->hasOne( 'App\Models\Role','id' ,'role_id'  );
    }


 /*    public function doctor()
{
    return $this->hasMany('App\Models\DoctorAppointment', 'user_id');
} */

/* public function abc(){
    	return $this->hasMany(User::class);
    }
 */
      


    public function UserAvatar($request){

         $image = $request->file('image');
        $name  = $image->hashName();
        $destination = public_path('/images');
        $image ->move($destination,  $name );
        return $name;
    }


  
  
}
