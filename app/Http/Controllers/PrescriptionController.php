<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Prescription;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $prescription = Prescription::with(['appointment','appointment.appointmentpatient','appointment.appointmentdoctor'])->get();
        // dd($prescription->toArray());

        return view('prescription.index',compact('prescription'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $create = Appointment::with('appointmentpatient','appointmentdoctor')->get();
        // $create = Appointment::all();
        return view('prescription.create',compact('create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //   dd($request);
        $request->validate([
            'appointment_id' => 'required',
            'medication_list' => 'required|min:6',
            'note' => 'required|min:8',
        ]);
         $store = Prescription::insert([
            'appointment_id' => $request->appointment_id,
            'medication_list' => $request->medication_list,
            'note' => $request->note,
        ]);
        return redirect()->route('prescription.index');
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
    public function destroy(string $id)
    {
        //
    }
}
