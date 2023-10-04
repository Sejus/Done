<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des utilisateurs</title>
</head>
<body>
<h1>Liste des utilisateurs</h1>

<ul>
    @foreach ($utilisateurs as $utilisateur)
        <li>
            <a href="{{ route('utilisateurs.show', $utilisateur->id) }}">{{ $utilisateur->nom }}</a>
            <a href="{{ route('utilisateurs.edit', $utilisateur->id) }}">Modifier</a>
            <a href="{{ route('utilisateurs.destroy', $utilisateur->id) }}">Supprimer</a>
        </li>
    @endforeach
</ul>

<a href="{{ route('utilisateurs.create') }}">Créer un nouvel utilisateur</a>
</body>
</html>
