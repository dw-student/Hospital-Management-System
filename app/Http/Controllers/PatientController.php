<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Prescription;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $patient = Patient::all();
        return view('patient.index',compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        // dd($request);
        $request->validate([
            'name' => 'required|min:6',
            'age' => 'required|integer|min:12'
        ]);
        $store = Patient::insert([
            'name' => $request->name,
            'age' => $request->age,
        ]);
        return redirect()->route('patient.index');
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
        $delete = Patient::find($id)->delete();
        return redirect()->route('patient.index');
    }
}
