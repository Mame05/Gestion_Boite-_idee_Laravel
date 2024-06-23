<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <div class="container">
        <h1>Créer une nouvelle idée</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('idees.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="libelle_idee">Nom de l'idée</label>
                <input type="text" class="form-control" id="libelle_idee" name="libelle_idee">
            </div>
            <div class="form-group">
                <label for="description">Description de l'idée</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="categorie_id">Catégorie</label>
                <select class="form-control" id="categorie_id" name="categorie_id">
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->libelle_categorie }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="date_creation">Date de création</label>
                <input type="date" class="form-control" id="date_creation" name="date_creation">
            </div>
            <div class="form-group">
                <label for="status">Statut</label>
                <select class="form-control" id="status" name="status">
                    <option value="Approuvee">Approuvée</option>
                    <option value="Refusee">Refusée</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>

</body>
</html>