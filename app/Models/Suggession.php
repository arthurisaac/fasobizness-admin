<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggession extends Model
{
    use HasFactory;
    protected $table = "suggestion";
    protected $fillable = [
        'texte',
        'email',
        'lu',
        'nom',
        'prenom',
        'tel',
    ];
}
