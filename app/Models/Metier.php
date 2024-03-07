<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Metier extends Model
{
    use HasFactory;

    protected $fillable = [
      'libelle',
      'description',
      'slug'
    ];
}
