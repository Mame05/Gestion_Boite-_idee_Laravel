@extends('layout.app')
@section('content')
<style>
    .banner {
        background-image:linear-gradient(rgba(19,17,19,0.50), rgba(19,17,19,0.50)),url('{{ asset('images/categorie-banner.jpg') }}');
        background-size: cover;
        background-position:center;
        color: white;
        width:100%;
        height:600px
    }
</style>
<body>
    <div class="banner">
        <h1 style="text-align: center; padding-top:250px;">Les catégories d'idées</h1>
    </div>
    <div class="container">
        <h1>Liste des catégories</h1>
        <a href="{{ route('categories.create') }}">Ajouter une nouvelle catégorie</a>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <ul class="list-group mt-3">
            @foreach($categories as $categorie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $categorie->libelle_categorie }}
                <span>
                    <a href="{{ route('categories.edit', $categorie) }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ route('categories.destroy', $categorie) }}" method="POST" class="d-inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </span>
            </li>
            @endforeach
        </ul>
    </div>
    @endsection