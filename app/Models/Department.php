<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function teachers(){
        return $this->hasMany(Teacher::class);
    }

    public function classRooms(){
        return $this->hasMany(ClassRoom::class);
    }

    public function subjects(){
        return $this->hasMany(Subject::class);
    }
}
