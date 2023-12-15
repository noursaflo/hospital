<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
class doctorcontroller extends Controller
{
  //
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function show_patients()
  {
    $doctor_id = DB::select('select id from doctor where email=? ', [Auth::user()->email]);
    $now = date('Y-m-d', time());
    $patients = DB::table('visits')
      ->join('patients', 'patients.id', '=', 'visits.patient_id')
      ->select('patients.*','visits.*')
      ->where([['visits.doctor_id', '=', $doctor_id[0]->id], ['visits.visit_date', '=', $now]])
      ->get();



    return view('doctor_interface.patient_D', compact('patients'));
  }
  public function Patient_D_Diagnose($patient_id)
  {
    $doctor_id = DB::select('select id from doctor where email=? ', [Auth::user()->email]);
    $patient_diagnose = DB::table('diagnose')
      ->where([['diagnose.patient_id', '=', $patient_id], ['diagnose.doctor_id', '=', $doctor_id[0]->id]])
      ->select('diagnose.*')
      ->get();
    return view('doctor_interface.patient_diagnose', compact('patient_diagnose'));
  }

  public function refresh_Patients(Request $request)
  {

    $doctor_id = DB::select('select id from doctor where email=? ', [Auth::user()->email]);
    $now = date('Y-m-d', time());
    $patients = DB::table('visits')
      ->join('patients', 'patients.id', '=', 'visits.patient_id')
      ->select('patients.*')
      ->where([['visits.doctor_id', '=', $doctor_id[0]->id], ['visits.visit_date', '=', $request->date]])
      ->get();
    return view('doctor_interface.patient_D', compact('patients'));
  }
  public function  patient_diagnose_add($patient_id)
  {

    return view('doctor_interface.patient_diagnose_add', compact('patient_id'));
  }
  public function patient_diagnose_save(Request $request)
  {
    $doctor_id = DB::select('select id from doctor where email=? ', [Auth::user()->email]);

    DB::insert(
      'insert into diagnose(diagnose_date,doctor_id,patient_id,complaint,solution,comments)
                     values (?,?,?,?,?,?)',
      [$request->date, $doctor_id[0]->id, $request->patient_id, $request->complaint, $request->solution, $request->comments]
    );
    return redirect('../show_patients');
  }
  public function my_dates()
  {
    $doctor_id = DB::select('select id from doctor where email=? ', [Auth::user()->email]);
   $dates= DB::select('select * from date where doctor_id=?',[$doctor_id[0]->id]);
    return view('doctor_interface.doctor_dates',compact('dates'));
  }
}
