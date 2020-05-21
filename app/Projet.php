<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $guarded = [];

    public function categorie()
    {
        return $this->belongsToMany(Categorie::class);
    }
}
