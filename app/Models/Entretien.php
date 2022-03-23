<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Candidat;

class Entretien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 
        'designation',
        'time',
        'date',
    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function candidats()
    {
        return $this->belongsToMany(Candidat::class);
    }
}
