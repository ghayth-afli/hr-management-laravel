<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidat;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidat_id', 
        'lieu',
        'diplome',
        'date_debut',
        'date_fin'
    ];

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
}
