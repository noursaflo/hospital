<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clinic extends Model
{
    use HasFactory;
    protected $table='clinics';
     public function clinic()
    {
        return $this->hasMony(doctor::class);
    
    }
}
