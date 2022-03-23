<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Mail extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 
        'contenu',
        'type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
