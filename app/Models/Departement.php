<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recrutement;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 
        'etat_recrutement',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function recrutements()
    {
        return $this->hasMany(Recrutement::class);
    }
}
