<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un fichier à une tâche</title>
</head>
<body>
<h1>Ajouter un fichier à une tâche</h1>

<form action="{{ route('fichiers.store') }}" method="POST">
    @csrf

    <input type="hidden" name="tache_id" value="{{ $tache->id }}">

    <select name="fichier">
        @foreach ($fichiers as $fichier)
            <option value="{{ $fichier->id }}">{{ $fichier->nom }}</option>
        @endforeach
    </select>

    <input type="submit" value="Ajouter">
</form>
</body>
</html>
