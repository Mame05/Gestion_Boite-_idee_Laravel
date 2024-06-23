<?php

namespace App\Http\Controllers;

use App\Models\Idee;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\StoreIdeeRequest;

class IdeeController extends Controller
{
    public function create()
    {
        $categories = Categorie::all();
        return view('idees.create', compact('categories'));
    }

    public function store(StoreIdeeRequest $request)
    {
        Idee::create($request->validated());
        return redirect()->route('idees.index')->with('success', 'Idée créée avec succès');
    }

    public function index()
    {
        $idees = Idee::all();
        return view('idees.index', compact('idees'));
    }
}
