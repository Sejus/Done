<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails du fichier</title>
</head>
<body>
<h1>Détails du fichier</h1>

<ul>
    <li>
        <strong>Nom :</strong> {{ $fichier->nom }}
    </li>
    <li>
        <strong>Taille :</strong> {{ $fichier->taille }}
    </li>
    <li>
        <strong>Type MIME :</strong> {{ $fichier->mime_type }}
    </li>
</ul>

<a href="{{ route('fichiers.edit', $fichier->id) }}">Modifier</a>
<a href="{{ route('fichiers.destroy', $fichier->id) }}">Supprimer</a>
</body>
</html>

