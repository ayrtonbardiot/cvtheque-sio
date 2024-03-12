<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professionnel extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'cp',
        'ville',
        'telephone',
        'email',
        'naissance',
        'formation',
        'domaine',
        'source',
        'observation',
        'metier_id',
    ];

    // la méthode métier (au singulier) permet de trouver le métier auquel appartient (belongsTo) au professionnel (singulier)
    public function metier() {
        return $this->belongsTo(Metier::class);
    }
}
