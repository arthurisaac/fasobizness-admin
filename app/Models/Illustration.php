<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Illustration extends Model
{
    use HasFactory;

    protected $primaryKey = "id_illustration";
    protected $table = "illustration";

    protected $fillable = [
        "nom",
        "date_save",
        "heure_save",
        "id_annonce_fk",
    ];

    protected $hidden = [
        "date_save",
        "heure_save",
        "id_annonce_fk",
        "thumbnail",
        "id_illustration"
    ];
}
