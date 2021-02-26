<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pub extends Model
{
    use HasFactory;
    protected $table = "pub";
    protected $fillable = [
        "id",
        "titre",
        "nom",
        "description",
        "vue",
        "shared",
        "appel",
        "whatsapp",
        "facebook",
    ];

    public function affiches() {
        return $this->hasMany(\App\Models\AffichePub::class, 'id_pub', 'id');
    }

}
