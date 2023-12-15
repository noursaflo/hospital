<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/doctor.show','App\Http\Controllers\HomeController@show');
Route::get('add_doctor','App\Http\Controllers\HomeController@add_doctor');
Route::post('add_doctor_save','App\Http\Controllers\HomeController@add_doctor_save');
Route::get('doctor/{doctor_id}','App\Http\Controllers\HomeController@delete_doctor');
Route::get('/doctor/{doctor_id}/doctor_date_show','App\Http\Controllers\HomeController@doctor_date_show');
Route::get('/secret','App\Http\Controllers\secretController1@Admin_S_add');
Route::post('/secret','App\Http\Controllers\secretController1@Admin_S_save');
Route::get('/secret_show','App\Http\Controllers\secretController1@Admin_S_show');
Route::get('/secretarial/{secret_id}','App\Http\Controllers\secretController1@delete_secret');
Route::get('/secretarial_update/{secret_id}','App\Http\Controllers\secretController1@update_secret');
Route::post('/secretarial_update_save','App\Http\Controllers\secretController1@secret_update_save');
Route::get('/date','App\Http\Controllers\dateController@Admin_date_show');
Route::get('search','App\Http\Controllers\dateController@Admin_date_search');
Route::get('date_add','App\Http\Controllers\dateController@Admin_date_add');
Route::post('/date','App\Http\Controllers\dateController@Admin_date_save');
Route::get('/clinic','App\Http\Controllers\clinicController@Admin_clinic_show');
Route::get('/oneclinic_show/{clinic_id}','App\Http\Controllers\clinicController@Admin_oneclinic_show');
Route::get('/user.show','App\Http\Controllers\HomeController@user_show');
Route::post('/user/{user_id}','App\Http\Controllers\HomeController@user_update_role');
Route::get('/user.show','App\Http\Controllers\HomeController@user_show');
Route::get('/main_show',[App\Http\Controllers\clinicController::class,'main_show'])->name('main_show');
Route::get('/doctor_update/{doctor_id}','App\Http\Controllers\HomeController@doctor_update');
Route::post('/doctor_update_save','App\Http\Controllers\HomeController@doctor_update_save');
Route::get('/clinic_details/{clinic_id}','App\Http\Controllers\clinicdetailsController@clinic_details');
Route::get('back','App\Http\Controllers\Controller@to_back');
Route::get('show_patients','App\Http\Controllers\doctorController@show_patients');
Route::get('Patient_D_Diagnose/{patient_id}','App\Http\Controllers\doctorController@Patient_D_Diagnose');
Route::post('refresh','App\Http\Controllers\doctorController@refresh_Patients');
Route::get('patient_diagnose_add/{patient_id}','App\Http\Controllers\doctorController@patient_diagnose_add');
Route::post('patient_diagnose_save','App\Http\Controllers\doctorController@patient_diagnose_save');
Route::post('clinic_S_update/{clinic_id}','App\Http\Controllers\clinicController@clinic_S_update');
Route::post('patient_search','App\Http\Controllers\secretController1@patient_search');
Route::get('add_patient','App\Http\Controllers\secretController1@add_patient');
Route::post('add_patient_save','App\Http\Controllers\secretController1@add_patient_save');
Route::get('Patient/{patient_id}','App\Http\Controllers\secretController1@delete_patient');
Route::post('visit_save','App\Http\Controllers\secretController1@visit_save');
Route::get('visits','App\Http\Controllers\secretController1@visits');
Route::get('add_visit','App\Http\Controllers\secretController1@add_visit');
Route::post('is_complete/{visit_id}','App\Http\Controllers\secretController1@is_complete_update');
Route::get('delete_visit/{visit_id}','App\Http\Controllers\secretController1@delete_visit');
Route::get('delete_date/{date_id}','App\Http\Controllers\datecontroller@delete_date');
Route::get('patient_search','App\Http\Controllers\secretController1@patient');
Route::get('my_dates','App\Http\Controllers\doctorcontroller@my_dates');
Route::get('update_patient/{patient_id}','App\Http\Controllers\secretController1@update_patient');
Route::post('update_patient_save','App\Http\Controllers\secretController1@update_patient_save');