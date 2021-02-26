<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $primaryKey = "id_ann";
    protected $table = "annonce";

    protected $fillable = [
        "id_ann",
        "texte",
        "audio",
        "date_pub",
        "heure_pub",
        "id_per_fk",
        "valid",
        "prix",
        "titre",
        "tel",
        "location",
        "tel1",
        "tel2",
        "vue",
        "categorie",
        "vip",
        "share",
        "updatedAt",
    ];


    public function illustrations() {
        return $this->hasMany(\App\Models\Illustration::class, 'id_annonce_fk', 'id_ann');
    }

    public function personne() {
        return $this->belongsTo(\App\Models\Personne::class, 'id_per_fk', 'id_personne');
    }

}
