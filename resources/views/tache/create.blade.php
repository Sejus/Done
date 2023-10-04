<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer une nouvelle tâche</title>
</head>
<body>
<h1>Créer une nouvelle tâche</h1>

<form action="{{ route('taches.store') }}" method="POST">
    @csrf

    <input type="text" name="titre" placeholder="Titre de la tâche">
    <textarea name="description" placeholder="Description de la tâche"></textarea>
    <input type="date" name="dateEcheance" placeholder="Date d'échéance">
    <select name="priorite">
        <option value="haute">Haute</option>
        <option value="moyenne">Moyenne</option>
        <option value="basse">Basse</option>
    </select>
    <select name="etat">
        <option value="en cours">En cours</option>
        <option value="terminee">Terminée</option>
    </select>

    <input type="submit" value="Créer">
</form>
</body>
</html>
