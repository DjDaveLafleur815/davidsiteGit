<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Spécifier les champs autorisés pour l'assignation en masse
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'contenu',
    ];
}

