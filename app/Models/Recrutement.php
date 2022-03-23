<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recrutement extends Model
{
    use HasFactory;

    protected $fillable = [
        'poste', 
        'nbr_poste',
        'type',
        'experience',
        'niveau_etude',
        'langue',
        'genre',
        'description',
        'exigences',
        'date_expiration',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
