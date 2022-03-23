<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 
        'prenom',
        'entreprise',
        'tel',
        'adresse',
        'etat',
        'langue',
        'photo',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
