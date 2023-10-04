<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une tâche</title>
</head>
<body>
<h1>Modifier une tâche</h1>

<form action="{{ route('taches.update', $tache->id) }}" method="POST">
    @csrf

    <input type="text" name="titre" value="{{ $tache->titre }}" placeholder="Titre de la tâche">
    <textarea name="description" placeholder="Description de la tâche">{{ $tache->description }}</textarea>
    <input type="date" name="dateEcheance" value="{{ $tache->date_echeance }}" placeholder="Date d'échéance">
    <select name="priorite">
        <option value="haute" {{ $tache->priorite === 'haute' ? 'selected' : '' }}>Haute</option>
        <option value="moyenne" {{ $tache->priorite === 'moyenne' ? 'selected' : '' }}>Moyenne</option>
        <option value="basse" {{ $tache->priorite === 'basse' ? 'selected' : '' }}>Basse</option>
    </select>
    <select name="etat">
        <option value="en cours" {{ $tache->etat === 'en cours' ? 'selected' : '' }}>En cours</option>
        <option value="terminee" {{ $tache->etat === 'terminee' ? 'selected' : '' }}>Terminée</option>
    </select>

    <input type="submit" value="Modifier">
</form>
</body>
</html>
