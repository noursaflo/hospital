<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class datecontroller extends Controller
{
  //
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function Admin_date_show(Request $request)
  {
    $dates = DB::table('doctor')
      ->join('date', 'doctor.id', '=', 'date.doctor_id')
      ->select('date.*', 'doctor.full_name')
      ->where('doctor.clinic_id', '=', 1)
      ->get();
    $clinic_name = 'سنية';
    return view('dates.dates_clinic', compact('dates', 'clinic_name'));

    return view('dates.dates_clinic');
  }
  public function Admin_date_search(Request $request)
  {
    $clinic_record = DB::table('clinics')
      ->where('specialization', 'like', '%' . $request->clinic . '%')
      ->select('*')
      ->get();
    $dates = DB::table('doctor')
      ->join('date', 'doctor.id', '=', 'date.doctor_id')
      ->select('date.*', 'doctor.full_name')
      ->where('doctor.clinic_id', '=', $clinic_record[0]->id)
      ->get();

    $clinic_name = $clinic_record[0]->specialization;
    return view('dates.dates_clinic', compact('dates', 'clinic_name'));
  }
  public function Admin_date_save(Request $request)
  {
    DB::insert(
      'insert into date(doctor_id,day,start_time,end_time)
                     values (?,?,?,?)',
      [$request->doctor_id,$request->day, $request->start_time, $request->end_time]
    );
    return redirect('../date');
  }

  public function Admin_date_add()
  {
    $doctor = DB::select('select * from doctor');
    return view('dates.admin_date_add', compact('doctor'));
  }
  public function delete_date($date_id)
  {
    DB::delete('delete from date where id=?',[$date_id]);
    return redirect('../date');
  }
 
}
