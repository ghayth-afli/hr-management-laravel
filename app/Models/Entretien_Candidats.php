<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entretien_Candidats extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 
        'candidat_id',
        'entretien_id'
    ];
}
