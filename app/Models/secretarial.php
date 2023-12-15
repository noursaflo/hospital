<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secretarial extends Model
{
    use HasFactory;
     protected $table='secretarial';
      public function secretarial()
    {
        return $this->belongsTo(clinic::class);
    }
}
