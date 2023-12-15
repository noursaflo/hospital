<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
     protected $table='patients';
    public function patient()
    {
        return $this->hasMony(visit::class);
    }
}
