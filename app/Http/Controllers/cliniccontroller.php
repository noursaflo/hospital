<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Models\clinic;

class cliniccontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Admin_clinic_show()
    {
        $secretarial = DB::select('select * from secretarial');
        $clinics = DB::select('select * from clinics');
        return view('clinics.admin_clinic_show', compact('clinics', 'secretarial'));
    }
    public function Admin_oneclinic_show($clinic_id)
    {
        $doctors = DB::select('select * from doctor where clinic_id=?', [$clinic_id]);
        return view('clinics.admin_oneclinic_show', compact('doctors'));
    }

    public function main_show()
    {
        $clinics = DB::select('select * from clinics');
        return view('doctor.main_show', compact('clinics'));
    }
   
    public function clinic_S_update(Request $request, $clinic_id)
    {

        DB::update('update clinics set secret_id=? where id=?', [$request->secret_id, $clinic_id]);
        return back();
    }
}
