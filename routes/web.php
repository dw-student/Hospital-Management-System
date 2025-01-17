<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PrescriptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AppointmentController::class,'index'])->name('appointment.index');

Route::get('/appointment/create',[AppointmentController::class,'create'])->name('appointment.create');

Route::post('/appointment/store',[AppointmentController::class,'store'])->name('appointment.store');

Route::get('/appointment/delete/{id}',[AppointmentController::class,'destroy'])->name('appointment.destroy');


Route::get('/doctor/index',[DoctorController::class,'index'])->name('doctor.index');

Route::get('/doctor/create',[DoctorController::class,'create'])->name('doctor.create');

Route::post('/doctor/store',[DoctorController::class,'store'])->name('doctor.store');

Route::get('/doctor/delete/{id}',[DoctorController::class,'destroy'])->name('doctor.destroy');




Route::get('/patient/index',[PatientController::class,'index'])->name('patient.index');

Route::get('/patient/create',[PatientController::class,'create'])->name('patient.create');

Route::post('/patient/store',[PatientController::class,'store'])->name('patient.store');

Route::get('/patient/delete/{id}',[PatientController::class,'destroy'])->name('patient.destroy');




Route::get('/prescription/index',[PrescriptionController::class,'index'])->name('prescription.index');

Route::get('/prescriiption/create',[PrescriptionController::class,'create'])->name('prescription.create');

Route::post('/prescription/store',[PrescriptionController::class,'store'])->name('prescription.store');
