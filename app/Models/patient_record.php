<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient_record extends Model
{
    use HasFactory;

    public function getUser()
    {
        return $this->hasMany('App\Models\User');
    }
}
