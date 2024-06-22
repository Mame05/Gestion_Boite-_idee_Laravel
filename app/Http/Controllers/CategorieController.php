<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategorieRequest;

class CategorieController extends Controller
{
    // Affiche la liste des catégories
    public function index()
    {
        $categories = Categorie::all();
        return view('categories.index', compact('categories'));
    }

    // Affiche le formulaire pour ajouter une nouvelle catégorie
    public function create()
    {
        return view('categories.create');
    }

    // Traite les données du formulaire et ajoute une nouvelle catégorie
    public function store(StoreCategorieRequest $request)
    {
        Categorie::create($request->validated());
        return redirect()->route('categories.index')->with('success', 'Catégorie créée avec succès');
    }
}
