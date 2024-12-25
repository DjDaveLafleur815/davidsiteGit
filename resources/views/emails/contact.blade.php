<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message de contact</title>
</head>
<body>
<h1>Vous avez reçu un message de {{ $nom }} {{ $prenom }}</h1>
<p>Email : {{ $email }}</p>
<p>Message : {{ $contenu }}</p>
</body>
</html>
