<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un nouvel utilisateur</title>
</head>
<body>
<h1>Créer un nouvel utilisateur</h1>

<form action="{{ route('utilisateurs.store') }}" method="POST">
    @csrf

    <input type="text" name="nom" placeholder="Nom de l'utilisateur">
    <input type="email" name="email" placeholder="Adresse e-mail de l'utilisateur">
    <input type="password" name="password" placeholder="Mot de passe de l'utilisateur">
    <input type="password" name="password_confirmation" placeholder="Confirmation du mot de passe de l'utilisateur">

    <input type="submit" value="Créer">
</form>
</body>
</html>
