<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeExperience extends Model
{
    protected $guarded = [];

    public function experienceType()
    {
        return $this->hasMany(Experience::class);
    }
}
