<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails de la note</title>
</head>
<body>
<h1>Détails de la note</h1>

<ul>
    <li>
        <strong>Titre :</strong> {{ $note->titre }}
    </li>
    <li>
        <strong>Contenu :</strong> {{ $note->contenu }}
    </li>
</ul>

<a href="{{ route('notes.edit', $note->id) }}">Modifier</a>
<a href="{{ route('notes.destroy', $note->id) }}">Supprimer</a>
</body>
</html>
