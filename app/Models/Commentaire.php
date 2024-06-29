<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;
    protected $fillable = ['nom_complet_auteur', 'libelle_commentaire', 'idee_id','created_at'];

    public function idee()
    {
        return $this->belongsTo(Idee::class);
    }
}
