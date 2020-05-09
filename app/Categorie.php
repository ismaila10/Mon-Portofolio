<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $guarded = [];

    public function projet()
    {
        return $this->belongsToMany(Projet::class);
    }
}
