<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    protected $primaryKey = "id_personne";

    protected $table = "personne";

    protected $fillable = [
        'id_personne',
        'nom',
        'prenom',
        'nom_pers',
        'mdp',
        'email',
        'description',
        'date_creation',
        'photo',
        'type',
        'status',
        'code',
        'tel',
        'sect_activite',
        'gcm_registration_id',
        'date_naissance',
        'genre',
    ];

    protected $hidden = [
        'mdp',
    ];
}
