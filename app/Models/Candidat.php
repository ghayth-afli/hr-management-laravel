<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 
        'prenom', 
        'email', 
        'linkedin', 
        'tel', 
        'adresse', 
        'profil_candidat', 
        'langue', 
        'photo', 
        'recrutement_id'
    ];
}
