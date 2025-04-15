<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Livre extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'description','auteur_id'];
    public function auteur():BelongsTo{
        return $this->belongsTo(Auteur::class);
    }
}
