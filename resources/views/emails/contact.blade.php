<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouveau message de contact</title>
</head>
<body>
<h1>Vous avez reçu un nouveau message de contact</h1>
<p><strong>Nom:</strong> {{ $data['nom'] }}</p>
<p><strong>Prénom:</strong> {{ $data['prenom'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Message:</strong> {{ $data['contenu'] }}</p>
</body>
</html>
