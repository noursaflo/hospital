<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class clinicdetailsController extends Controller
{
    //
    public function clinic_details($clinic_id)
    {


        $doctors = DB::select('select * from doctor where clinic_id=?', [$clinic_id]);
        $dates = DB::table('doctor')
            ->join('clinics',  'clinics.id', '=', 'doctor.clinic_id')
            ->join('date', 'doctor.id', '=', 'date.doctor_id')
            ->select('date.*')
            ->get();

        return view('clinics.clinic_details', compact('doctors', 'dates'));
    }
}
