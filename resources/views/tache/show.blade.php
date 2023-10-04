<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails de la tâche</title>
</head>
<body>
<h1>Détails de la tâche</h1>

<ul>
    <li>
        <strong>Titre :</strong> {{ $tache->titre }}
    </li>
    <li>
        <strong>Description :</strong> {{ $tache->description }}
    </li>
    <li>
        <strong>Date d'échéance :</strong> {{ $tache->date_echeance }}
    </li>
    <li>
        <strong>Priorité :</strong> {{ $tache->priorite }}
    </li>
    <li>
        <strong>État :</strong> {{ $tache->etat }}
    </li>
</ul>

<a href="{{ route('taches.edit', $tache->id) }}">Modifier</a>
<a href="{{ route('taches.destroy', $tache->id) }}">Supprimer</a>
</body>
</html>
