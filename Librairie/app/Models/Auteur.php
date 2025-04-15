<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Auteur extends Model
{
    use HasFactory;
    // protected $table = 'auteurs';
    protected $fillable = ['nom', 'prenom'];

    public function Livres():HasMany {
        return $this->hasMany(Livre::class);
    }
}
