<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des fichiers</title>
</head>
<body>
<h1>Liste des fichiers</h1>

<ul>
    @foreach ($fichiers as $fichier)
        <li>
            <a href="{{ route('fichiers.show', $fichier->id) }}">{{ $fichier->nom }}</a>
            <a href="{{ route('fichiers.edit', $fichier->id) }}">Modifier</a>
            <a href="{{ route('fichiers.destroy', $fichier->id) }}">Supprimer</a>
        </li>
    @endforeach
</ul>

<a href="{{ route('fichiers.create') }}">Créer un nouveau fichier</a>
</body>
</html>

