<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des tâches</title>
</head>
<body>
<h1>Liste des tâches</h1>

<ul>
    @foreach ($taches as $tache)
        <li>
            <a href="{{ route('taches.show', $tache->id) }}">{{ $tache->titre }}</a>
            <a href="{{ route('taches.edit', $tache->id) }}">Modifier</a>
            <a href="{{ route('taches.destroy', $tache->id) }}">Supprimer</a>
        </li>
    @endforeach
</ul>

<a href="{{ route('taches.create') }}">Créer une nouvelle tâche</a>
</body>
</html>
