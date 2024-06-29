<?php

namespace App\Http\Controllers;

use App\Models\Idee;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCommentaireRequest;

class CommentaireController extends Controller
{
    public function index($idee_id)
    {
        $idee = Idee::with('commentaires')->findOrFail($idee_id);
        return view('commentaires.index', compact('idee'));
    }
    public function store(StoreCommentaireRequest $request, $idee_id)
    {
        $commentaire = new Commentaire();
        $commentaire->idee_id = $idee_id;
        $commentaire->nom_complet_auteur = $request->input('nom_complet_auteur');
        $commentaire->libelle_commentaire = $request->input('libelle_commentaire');
        $commentaire->save();

        return redirect()->route('commentaires.index', $idee_id)->with('status', 'Commentaire ajouté avec succès.');
    }
}
