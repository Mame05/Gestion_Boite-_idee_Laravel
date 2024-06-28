<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>{{ $idee->libelle_idee }}</h1>
        <p><strong>Description:</strong> {{ $idee->description }}</p>
        <p><strong>Catégorie:</strong> {{ $idee->categorie->livelle_categorie }}</p>
        <p><strong>Statut:</strong> {{ $idee->status }}</p>
        <p><strong>Date de création:</strong> {{ $idee->created_at }}</p>
        <p><strong>De la part de:</strong>  {{ $idee->prenom_auteur }}  {{ $idee->prenom_auteur}}</p>
        <p><strong>Son adresse email:</strong>  {{ $idee->email}}</p>
        @if(session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <!-- Boutons pour approuver et rejeter l'idée -->
    <form method="POST" action="{{ route('idees.approve', $idee->id) }}">
        @csrf
        <button type="submit">Approuver</button>
    </form>

    <form method="POST" action="{{ route('idees.reject', $idee->id) }}">
        @csrf
        <button type="submit">Rejeter</button>
    </form>

        <a href="{{ route('idees.edit', $idee->id) }}" class="btn btn-warning">Modifier</a>
        <form action="{{ route('idees.destroy', $idee->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
    <a href="#" onclick="document.getElementById('logout-form').submit()" class="btn  btn-sm" style=" font-weight:400;font-size:16px; background-color:#ffffff;
            color:#333;">
            <form action="/logout" action="post" id="logout-form">@csrf</form>
             Se Déconnecter
             </a>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>