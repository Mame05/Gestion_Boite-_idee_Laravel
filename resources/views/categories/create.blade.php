<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ajouter une nouvelle catégorie</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="libelle_categorie">Nom de la catégorie :</label>
        <input type="text" id="libelle_categorie" name="libelle_categorie">
        @error('libelle_categorie')
            <div>{{ $message }}</div>
        @enderror
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
