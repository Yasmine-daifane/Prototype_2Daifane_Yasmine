<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 'ordre', 'description',
    ];

    public function autoformation()
    {
        return $this->belongsTo(Autoformation::class);
    }
}
