<?php

namespace App\Models;
use App\Models\Recrutement;
use App\Models\Cv;
use App\Models\Experience;
use App\Models\Competance;
use App\Models\Entretien;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 
        'titre_pro', 
        'email', 
        'linkedin', 
        'tel', 
        'adresse', 
        'profil_candidat', 
        'langue', 
        'photo', 
        'recrutement_id'
    ];

    public function recrutement ()
    {
        return $this->belongsTo(Recrutement::class);
    }

    public function cv()
    {
        return $this->hasOne(Cv::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }

    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }

    public function competances()
    {
        return $this->hasMany(Competance::class);
    }

    public function entretiens()
    {
        return $this->belongsToMany(Entretien::class);
    }
}
