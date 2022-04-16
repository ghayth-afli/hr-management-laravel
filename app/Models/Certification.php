<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'candidat_id', 
        'nom',
        'organisme',
        'date', 
    ];

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
}
