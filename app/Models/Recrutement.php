<?php

namespace App\Models;
use App\Models\User;
use App\Models\Candidat;
use App\Models\Departement;


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
        'user_id',
        'departement_id'
    ];
    public function setTypeAttribute($value)
    {
        $this->attributes['type'] = json_encode($value);
    }

    /*public function getTypeAttribute($value)
    {
        return $this->attributes['type'] = json_decode($value);
    }*/

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function candidats()
    {
        return $this->hasMany(Candidat::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}
