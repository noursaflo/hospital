<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    protected $table='doctor';
    public function doctor()
    {
        return $this->hasMony(date::class);
        return $this->hasMony(visit::class);
    }
     public function date()
    {
        return $this->belongsTo(clinin::class);
    }
}
