<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;

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
    // Affiche le formulaire pour modifier une catégorie existante
    public function edit(Categorie $categorie)
    {
        return view('categories.edit', compact('categorie'));
    }

    // Traite les données du formulaire et met à jour la catégorie
    public function update(UpdateCategorieRequest $request, Categorie $categorie)
    {
        $categorie->update($request->validated());
        return redirect()->route('categories.index')->with('success', 'Catégorie modifier avec succès');
    }
    // Supprime une catégorie
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès');
    }
}
