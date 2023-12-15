<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visit extends Model
{
    use HasFactory;
    protected $table='visit';
    public function visit()
    {
        return $this->belongsTo(doctor::class);
        return $this->belongsTo(patient::class);
    }
}
