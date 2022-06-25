<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tractor extends Model
{
    use HasFactory;

    public function branch(){
        return $this->belongsTo('App\Models\Branch');
    }
    public function drivers(){
        return $this->belongsTo('App\Models\Driver');
    }
}
