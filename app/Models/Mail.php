<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Mail extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenu',
        'objet',
        'type'
    ];

}
