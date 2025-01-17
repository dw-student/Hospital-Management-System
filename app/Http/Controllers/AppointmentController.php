<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Prescription;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $data = Appointment::with('appointmentpatient','appointmentdoctor')->paginate(4);
        // $home = Appointment::all();
        // $doctor = Doctor::all();
        // $patient = Patient::all();
        return view('appointment.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $doctor = Doctor::all();
        $patient = Patient::all();
        return view('appointment.create',compact('doctor','patient'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //  dd($request);
        $request->validate([
            'doctor_id' => 'required',
            'patient_id' => 'required',
            'date' => 'required|date|after_or_equal:today',
        ],[
            'doctor_id.required' => 'Please select a Doctor!',
            'patient_id.required' => 'Please select a Patient!',
            'date.after_or_equal' => 'The appointment date must be today or a future date.',
        ]);
         $store = Appointment::insert([
            'doctor_id' => $request->doctor_id,
            'patient_id' => $request->patient_id,
            'appointmentdate' => $request->date,
        ]);
        return redirect()->route('appointment.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $delete = Appointment::find($id)->delete();
        return redirect()->route('appointment.index');
    }
}
