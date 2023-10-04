<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une note</title>
</head>
<body>
<h1>Modifier une note</h1>

<form action="{{ route('notes.update', $note->id) }}" method="POST">
    @csrf

    <input type="text" name="titre" value="{{ $note->titre }}" placeholder="Titre de la note">
    <textarea name="contenu" placeholder="Contenu de la note">{{ $note->contenu }}</textarea>

    <input type="submit" value="Modifier">
</form>
</body>
</html>
