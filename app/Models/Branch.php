<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Driver;
use App\Models\Tactor;

class Branch extends Model
{
    use HasFactory;

    public function drivers(){
        return $this->hasMany(Driver::class);
    }
    public function tractors(){
        return $this->hasMany(Tractor::class);
    }
}
