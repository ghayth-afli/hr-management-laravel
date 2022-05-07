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
        'sexe', 
        'linkedin', 
        'tel', 
        'adresse', 
        'profil_candidat', 
        'langue', 
        'photo', 
        'etat',
        'nb_experience',
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

    public function scopeSearch($query,$term)
    {
        $term = "%$term%";
        $query->where(function($query) use ($term){
            $query->where('nom','like',$term)
                    ->orWhere('titre_pro','like',$term)
                    ->orWhere('email','like',$term)
                    ->orWhere('linkedin','like',$term)
                    ->orWhere('tel','like',$term)
                    ->orWhere('adresse','like',$term)
                    ->orWhere('tel','like',$term)
                    ->orWhere('langue','like',$term);
        });
    }
}
