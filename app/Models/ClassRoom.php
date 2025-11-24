<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}
