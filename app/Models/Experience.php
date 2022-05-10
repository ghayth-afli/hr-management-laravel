<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidat;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidat_id', 
        'titre',
        'entreprise',
        'emplacement',
        'date_debut',
        'date_fin',
    ];

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
}
