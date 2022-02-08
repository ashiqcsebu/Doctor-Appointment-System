<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DoctorAppointmentController;
use App\Http\Controllers\PatientListController;
use App\Http\Controllers\PrescriptionController;


Route::get('/', [FrontendController::class, 'index']);

 Route::get('/doctor/details/{id}',[DoctorAppointmentController::class, 'show'])->name('appointment.create');Route::get('/doctor/booking', [DoctorAppointmentController::class, 'makeAppointment'])->name('appointment.save'); 
 
 
Route::get('/dashboard', function () {
    return view('dashboard');
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/myBooking',[HomeController::class, 'myBookings'])->name('my.booking')->middleware('auth');


Route::group (['middleware'=>['auth','admin','doctor']], function(){ 
Route::resource('doctor','DoctorController');

 
  Route::get('/patients', [PatientListController::class, 'index']);  

  Route::get('/status/update/{id}/{value}',[PatientlistController::class, 'toggleStatus'])->name('update.status');
   Route::get('/patients/today',[PatientlistController::class, 'show']);
   Route::get('/patients/today/{id}/{val}',[PatientlistController::class, 'updateStatus'])->name('edit.status');

   Route::get('/patients/today/prescription',[PrescriptionController::class, 'index'])->name('patients.today');

});
