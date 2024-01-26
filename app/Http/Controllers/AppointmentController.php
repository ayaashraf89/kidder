<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Traits\Common;

class AppointmentController extends Controller
{
    use Common;

    public function index()
{
     $appointments = Appointment::all();
     return view("appointment", compact("appointments"));
}

    public function create()
{
    return view('appointment');
}

    public function store(Request $request)
{
    $appointment = new Appointment();
    $appointment->GName = $request->GName;
    $appointment->GEmail = $request->GEmail;
    $appointment->ChildName = $request->ChildName;
    $appointment->ChildAge = $request->ChildAge;
    $appointment->message = $request->message;
    $appointment->save();
    return 'Added Successfully';
}


}
