<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idee extends Model
{
    use HasFactory;
    protected $fillable = ['prenom_auteur','nom_auteur','email','libelle_idee','description','status','created_at','categorie_id'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
