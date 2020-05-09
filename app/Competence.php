<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $guarded = [];

    public function typeCompetence()
    {
        return $this->belongsTo(TypeCompetence::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
