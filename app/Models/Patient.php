<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'curp', 
        'birthdate',
        'address',
        'phone_number',
        'email',
        'gender'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
