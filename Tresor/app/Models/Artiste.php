<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Oeuvre;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artiste extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'telephone'];

    public function oeuvres(){
        return $this->hasMany(Oeuvre::class);
    }
}
