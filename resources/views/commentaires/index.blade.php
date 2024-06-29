<!-- resources/views/commentaires/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Commentaires pour l'idée</title>
</head>
<body>
    <h1>Commentaires pour l'idée: {{ $idee->libelle_idee }}</h1>
    <p>{{ $idee->description }}</p>
    <p>Prénom de l'auteur: {{ $idee->prenom_auteur }}</p>
    <p>Nom de l'auteur: {{ $idee->nom_auteur }}</p>
    <p>Email de l'auteur: {{ $idee->email }}</p>
    <p>Status: {{ $idee->status }}</p>
    <p>Date de création: {{ $idee->created_at }}</p>

    @if(session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <!-- Afficher les commentaires -->
    <h2>Commentaires</h2>
    @foreach($idee->commentaires as $commentaire)
        <div>
            <p><strong>{{ $commentaire->nom_complet_auteur }}</strong> : {{ $commentaire->libelle_commentaire }}</p>
            <p>Date: {{ $commentaire->created_at }}</p>
        </div>
    @endforeach

    <!-- Formulaire pour ajouter un commentaire -->
    <h2>Ajouter un commentaire</h2>
    <form method="POST" action="{{ route('commentaires.store', $idee->id) }}">
        @csrf
        <input type="hidden" name="idee_id" value="{{$idee->id}}">
        <label for="nom_complet_auteur">Votre nom:</label>
        <input type="text" id="nom_complet_auteur" name="nom_complet_auteur" required>
        <br>
        <label for="libelle_commentaire">Commentaire:</label>
        <textarea id="libelle_commentaire" name="libelle_commentaire" required></textarea>
        <br>
        <button type="submit">Ajouter le commentaire</button>
    </form>
</body>
</html>
