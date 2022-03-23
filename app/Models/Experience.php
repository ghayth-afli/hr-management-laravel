<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidat_id', 
        'lieu',
        'taches',
        'date_debut',
        'date_fin'
    ];
}
