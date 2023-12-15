<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use auth;
use Illuminate\Validation\Validator;
use App\Models\doctor;
use Illuminate\Validation\Rule;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
      public function show()
    {
      
    $doctor=DB::select('select * from doctor');
    return view('doctor.show',compact('doctor'));

    }         
     public function add_doctor()
    {
        $clinic=DB::select('select * from clinics');
        return view('doctor.add_doctor',compact('clinic'));
    }   
     public function delete_doctor($doctor_id)
    {
      
      DB::delete('delete from doctor where id=?',[$doctor_id]);
     
      return back();
    }
    
     public function add_doctor_save(Request $request)
    {
          DB::insert('insert into doctor (clinic_id,full_name,birthday,phone,specialization,experience,address,email)
                     values (?,?,?,?,?,?,?,?)'
                     , [$request->clinic_id,$request->full_name,$request->birthday,$request->p,$request->specialization
                        ,$request->experience,$request->a,$request->email]);
          
     return redirect('../doctor.show');      
    }
    
    
     public function doctor_date_show($doctor_id)
    {
      $doct=$doctor_id;
    $dat=DB::select('select * from date where doctor_id=?',[$doct]);
    return view('doctor.doctor_date_show',compact('dat'));
    }
    public function user_show()
    {
   $users=DB::select('select * from users');
    return view('doctor.user_show',compact('users'));
    }
     public function user_update_role(Request $request,$user_id)
    {
     DB::update('update users set role=? where id=?',[$request->role,$user_id]);
       return back();
    }
   
    public function doctor_update($doctor_id)
    {  $doctor_record=doctor::find($doctor_id);
       $clinic=DB::select('select * from clinics');
        return view('doctor.doctor_update',compact('clinic','doctor_record'));
    }
        public function doctor_update_save(Request $request)
    {
        DB::update('update doctor set clinic_id=?,full_name=?,birthday=?,phone=?,specialization=?,experience=?,address=? where id=?'
                     , [$request->clinic_id,$request->full_name,$request->birthday,$request->phone,$request->specialization
                        ,$request->experience,$request->address,$request->doctor_id]);
        return redirect('../doctor.show');
    }
}  
            
