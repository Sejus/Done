<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer une nouvelle note</title>
</head>
<body>
<h1>Créer une nouvelle note</h1>

<form action="{{ route('notes.store') }}" method="POST">
    @csrf

    <input type="text" name="titre" placeholder="Titre de la note">
    <textarea name="contenu" placeholder="Contenu de la note"></textarea>

    <input type="submit" value="Créer">
</form>
</body>
</html>
