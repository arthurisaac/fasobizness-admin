<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffichePub extends Model
{
    use HasFactory;
    protected $table = "affiche_pub";
    protected $fillable = [
      'id',
      'nom',
      'id_pub',
    ];
}
