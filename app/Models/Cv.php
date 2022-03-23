<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidat;

class Cv extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidat_id', 
        'chemin', 
    ];

    public function candidat ()
    {
        return $this->belongsTo(Candidat::class);
    }
}
