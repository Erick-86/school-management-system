<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function grades(){
        return $this->hasMany(Grade::class);
    }
}
