<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autoformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 'date_de_creation', 'date_modification', 'reference', 'description',
    ];

    public function chapitres()
    {
        return $this->hasMany(Chapitre::class);
    }
}
