<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    public function branch(){
        return $this->belongsTo('App\Models\Branch');
    }
    public function tractors(){
        return $this->hasOne('App\Models\Tractor');
    }
}
