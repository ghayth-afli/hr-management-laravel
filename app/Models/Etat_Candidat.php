<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etat_Candidat extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom', 
        'etat',
        'candidat_id',
        'mail_id',
    ];
}
