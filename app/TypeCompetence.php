<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeCompetence extends Model
{
    protected $guarded = [];

    public function competenceType()
    {
        return $this->hasMany(Competence::class);
    }
}
