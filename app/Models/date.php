<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class date extends Model
{
    use HasFactory;

    protected $table='date';
    public function date()
    {
        return $this->belongsTo(doctor::class);
    }
}
