<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails de l'utilisateur</title>
</head>
<body>
<h1>Détails de l'utilisateur</h1>

<ul>
    <li>
        <strong>Nom :</strong> {{ $utilisateur->nom }}
    </li>
    <li>
        <strong>Email :</strong> {{ $utilisateur->email }}
    </li>
</ul>

<a href="{{ route('taches.index', $utilisateur->id) }}">Liste des tâches</a>

<a href="{{ route('utilisateurs.edit', $utilisateur->id) }}">Modifier</a>
<a href="{{ route('utilisateurs.destroy', $utilisateur->id) }}">Supprimer</a>
</body>
</html>
