<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function classRoom(){
        return $this->belongsTo(ClassRoom::class);
    }

    public function grades(){
        return $this->hasMany(Grade::class);
    }

    public function fees(){
        return $this->hasMany(Fee::class);
    }

    public function attendance(){
        return $this->hasMany(Attendance::class);
    }
}
