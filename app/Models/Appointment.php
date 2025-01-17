<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id' , 'patient_id' , 'appointmentdate'
    ];

    public function appointmentpatient(){
        return $this->belongsTo(Patient::class,'patient_id');
    }

    public function appointmentdoctor(){
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
