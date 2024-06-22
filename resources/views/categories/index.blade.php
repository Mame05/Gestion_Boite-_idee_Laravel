<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Liste des catégories</h1>
    <a href="{{ route('categories.create') }}">Ajouter une nouvelle catégorie</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <!--<ul>
        @*f*oreach($categories as $categorie)
            <li>
                {*{ $categorie->libelle_categorie }}
                <a href="{*{ route('categories.edit', $*categorie) }}">Modifier</a>
                <form action="{*{ route('categories.destroy', $-category) }}" method="POST" style="display:inline;">
                    @*csrf
                    @*method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @*endforeach
    </ul>-->

</body>
</html>