<?php

namespace App\services;

use App\Competence;
use App\Contact;
use App\Experience;
use App\Profil;
use App\ReseauSocio;
use App\SavoirFaire;
use App\User;

class Helpers
{
    public function listeprofil()
    {
        $profils = Profil::first();
        //dd($profils);
        return $profils;
    }

    public function listecontact()
    {
        $contacts = Contact::first();
        //dd($profils);
        return $contacts;
    }

    public function listesavoirfaire()
    {
        $savoirfaire = SavoirFaire::all();
        //dd($profils);
        return $savoirfaire;
    }

    public function listecompetence()
    {
        $skills = Competence::all();

        return $skills;
    }

    public function listeexperience()
    {
        $exp = Experience::all();

        return $exp;
    }

    public function listereseausocio()
    {
        $socio = ReseauSocio::all();

        return $socio;
    }
}
