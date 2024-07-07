@extends('layout.app')
@section('content')
<style>
    .banner {
        background-image:linear-gradient(rgba(19,17,19,0.50), rgba(19,17,19,0.50)),url('{{ asset('images/accueil-banner.jpg') }}');
        background-size: cover;
        background-position:center;
        color: white;
        width:100%;
        height:600px
    }
    </style>
<body>
    <div class="banner">
        <h1 style="text-align: center; padding-top:250px;">Bienvenue à votre boite à idées</h1>
    </div>
    <div class="container">
        <h1>Liste des idées</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('idee.create') }}" class="btn btn-primary mb-3">Créer une nouvelle idée</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Libellé</th>
                    <th>Description</th>
                    <th>Catégorie</th>
                    <th>Statut</th>
                    <th>Date de création</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($idees as $idee)
                    <tr>
                        <td>{{ $idee->libelle_idee }}</td>
                        <td>{{ $idee->description }}</td>
                        <td>{{ $idee->categorie->libelle_categorie }}</td>
                        <td>{{ $idee->status }}</td>
                        <td>{{ $idee->created_at}}</td>
                        <td>
                            <a href="{{ route('idee.show', $idee->id) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('commentaires.index', $idee->id) }}">Voir les détails et les commentaires</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection