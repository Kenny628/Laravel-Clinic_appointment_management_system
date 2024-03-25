<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function patient_name()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
