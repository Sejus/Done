<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un utilisateur</title>
</head>
<body>
<h1>Modifier un utilisateur</h1>

<form action="{{ route('utilisateurs.update', $utilisateur->id) }}" method="POST">
    @csrf

    <input type="text" name="nom" value="{{ $utilisateur->nom }}" placeholder="Nom de l'utilisateur">
    <input type="email" name="email" value="{{ $utilisateur->email }}" placeholder="Adresse e-mail de l'utilisateur">
    <input type="password" name="password" placeholder="Nouveau mot de passe de l'utilisateur">
    <input type="password" name="password_confirmation" placeholder="Confirmation du nouveau mot de passe de l'utilisateur">

    <input type="submit" value="Modifier">
</form>
</body>
</html>
