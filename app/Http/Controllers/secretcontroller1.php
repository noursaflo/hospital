<?php

namespace App\Http\Controllers;

use App\Models\patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use auth;
use App\Models\secretarial;

class secretcontroller1 extends Controller
{
   //

   public function __construct()
   {
      $this->middleware('auth');
   }
   public function Admin_S_add()
   {
      return view('secretarial.admin_S_add');
   }
   public function Admin_S_save(Request $request)
   {


      DB::insert(
         'insert into secretarial(full_name,birthday,phone,address,email)
                     values (?,?,?,?,?)',
         [$request->full_name, $request->birthday, $request->Phone, $request->address,$request->email]
      );
      return redirect('../secret_show');
   }

   public function Admin_S_show(Request $request)
   {
      $secret = DB::select('select * from secretarial');
      return view('secretarial.admin_S_show', compact('secret'));
   }
   public function delete_secret($secret_id)
   {
      DB::delete('delete from secretarial where id=?', [$secret_id]);
      return back();
   }
   public function update_secret($secret_id)
   {
      $secret_record = secretarial::find($secret_id);
      return view('secretarial.admin_S_update', compact('secret_record'));
   }

   public function secret_update_save(Request $request)
   {

      DB::update(
         'update secretarial set full_name=?,birthday=?,phone=?,address=?,email=? where id=?',
         [
            $request->name
           , $request->birthday, $request->phone,$request->address,$request->email,$request->secret_id
         ]
      );
      return redirect('../secret_show');
   }

   public function  add_patient()
   {
      return view('secretarial.add_patient');
   }
   public function  add_patient_save(Request $request)
   {
      DB::insert(
         'insert into patients(full_name,gender,birthday,phone,email,address) values (?,?,?,?,?,?)',
         [$request->full_name, $request->gender, $request->birthday, $request->phone, $request->email, $request->address]
      );
      return redirect('../patient_search');
   }
   public function delete_patient($patient_id)
   {
      DB::delete('delete from patients where id=?', [$patient_id]);

      return back();
   }
   public function add_visit()
   {
      $doctors = DB::select('select * from doctor');
      $clinics = DB::select('select * from clinics');
      $patient = DB::select('select * from patients');
      $patients = array_reverse($patient, true);

      return view('secretarial.add_visit', compact('patients', 'doctors', 'clinics'));
   }
   public function visits()
   {
      $visits = DB::table('visits')
         ->join('patients',  'patients.id', '=', 'visits.patient_id')
         ->join('clinics',  'clinics.id', '=', 'visits.clinic_id')
         ->select('visits.*', 'patients.full_name','clinics.specialization')
         ->get();
      return view('secretarial.visits', compact('visits'));
   }
   public function patient_search(Request $request)
   {
      $Patients = DB::table('patients')
         ->where('full_name', 'like', '%' . $request->patient_search . '%')
         ->select('*')
         ->get();

      return view('secretarial.patient_search', compact('Patients'));
   }
   public function patient(Request $request)
   {
      $Patients = DB::table('patients')
         ->select('*')
         ->get();

      return view('secretarial.patient_search', compact('Patients'));
   }

   public function visit_save(Request $request)
   {
      DB::insert(
         'insert into visits(visit_date,visit_time,patient_id,doctor_id,clinic_id,visit_type,notes,is_complete) values (?,?,?,?,?,?,?,?)',
         [$request->visit_date, $request->visit_time, $request->patient_id, $request->doctor_id, $request->clinic_id, $request->visit_type, $request->notes, $request->is_complete]
      );

      return redirect('../visits');
   }
   public function is_complete_update(Request $request)
   {
      DB::update('update visits set is_complete=?', [$request->is_complete]);
      return redirect('../visits');
   }
   public function delete_visit($visit_id)
   {
      DB::delete('delete from visits where id=?', [$visit_id]);
      return redirect('../visits');
   }
  
   public function  update_patient($patient_id)
   {
     $patient_record=patient::find($patient_id);
      return view('secretarial.update_patient',compact('patient_record'));
   }
   public function  update_patient_save(Request $request)
   {
   DB::update('update patients set full_name=?,birthday=?,phone=?,gender=?,address=? where id=?'
      ,[$request->patient_name,$request->birthday,$request->phone,$request->gender,$request->address,$request->patient_id]);
      return redirect('../patient_search');
   }
   
   
}
