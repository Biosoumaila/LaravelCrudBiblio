<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marche extends Model
{
    protected $fillable = [
        'nomMarche',
        'description',
        'capacite',
        'adresse',
        'telephone',
        'image',
       ];
}
