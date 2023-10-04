<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un fichier</title>
</head>
<body>
<h1>Modifier un fichier</h1>

<form action="{{ route('fichiers.update', $fichier->id) }}" method="POST">
    @csrf

    <input type="text" name="nom" value="{{ $fichier->nom }}" placeholder="Nom du fichier">

    <input type="file" name="fichier" placeholder="Fichier">

    <input type="radio" name="action" value="remplacer"> Remplacer le fichier
    <input type="radio" name="action" value="supprimer"> Supprimer le fichier

    <input type="submit" value="Modifier">
</form>
</body>
</html>
