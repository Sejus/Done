<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des notes</title>
</head>
<body>
<h1>Liste des notes</h1>

<ul>
    @foreach ($notes as $note)
        <li>
            <a href="{{ route('notes.show', $note->id) }}">{{ $note->titre }}</a>
            <a href="{{ route('notes.edit', $note->id) }}">Modifier</a>
            <a href="{{ route('notes.destroy', $note->id) }}">Supprimer</a>
        </li>
    @endforeach
</ul>

<a href="{{ route('notes.create') }}">Créer une nouvelle note</a>
</body>
</html>

