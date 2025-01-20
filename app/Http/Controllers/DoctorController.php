<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use App\Models\Prescription;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $doctor = Doctor::all();
        return view('doctor.index',compact('doctor'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)  {
        // dd($request);
        $request->validate([
            'name' => 'required|min:6',
            'speciality' => 'required',
            'file' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $file = $request->file('file')->store('images','public');
        $store = Doctor::insert([
            'name' => $request->name,
            'speciality' => $request->speciality,
            'file' => $file,
        ]);
        // dd($request);
        return redirect()->route('doctor.index');
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
        $delete = Doctor::find($id)->delete();
        return redirect()->route('doctor.index');
    }
}
