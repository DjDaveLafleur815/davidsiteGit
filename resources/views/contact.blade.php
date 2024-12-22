<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contactez-moi pour toute demande.">
    <title>Contactez-moi - Antoine David</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-zinc-300">
<div class="flex flex-col items-center justify-center min-h-screen">

    <!-- Navigation -->
    <nav class="my-8">
        <ul class="flex space-x-6">
            <li><a href="/" class="text-sm hover:text-white">Accueil</a></li>
            <li><a href="/a-propos" class="text-sm hover:text-white">À Propos</a></li>
            <li><a href="/portfolio" class="text-sm hover:text-white">Portfolio</a></li>
            <li><a href="/contact" class="text-sm hover:text-white">Contact</a></li>
        </ul>
    </nav>

    <!-- Conteneur du formulaire -->
    <div class="max-w-xl w-full bg-zinc-800 p-8 rounded-lg shadow-lg">

        <!-- Titre -->
        <div class="text-center mb-6">
            <h3 class="text-4xl font-bold text-white sm:text-5xl">Contactez-moi</h3>
        </div>

        <!-- Message de succès -->
        <div id="success-message" class="mt-3 text-green-600 text-2xl font-semibold hidden">
            <!-- Le message de succès sera injecté ici via JavaScript si nécessaire -->
        </div>

        <!-- Formulaire de contact -->
        <form action="/contact/submit" method="POST" class="space-y-6">

            <!-- Champ Nom -->
            <div class="mb-4">
                <label for="nom" class="block text-lg font-medium text-white">Nom</label>
                <input type="text" name="nom" id="nom" class="w-full p-3 mt-2 border rounded-lg bg-zinc-700 text-white placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm hover:shadow-md transition duration-200" placeholder="Ex : Duchemin" required>
                <div class="text-red-500 text-sm mt-1 hidden" id="error-nom">Veuillez entrer un nom valide.</div>
            </div>

            <!-- Champ Prénom -->
            <div class="mb-4">
                <label for="prenom" class="block text-lg font-medium text-white">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="w-full p-3 mt-2 border rounded-lg bg-zinc-700 text-white placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm hover:shadow-md transition duration-200" placeholder="Ex : Alice" required>
                <div class="text-red-500 text-sm mt-1 hidden" id="error-prenom">Veuillez entrer un prénom valide.</div>
            </div>

            <!-- Champ Email -->
            <div class="mb-4">
                <label for="email" class="block text-lg font-medium text-white">Email</label>
                <input type="email" name="email" id="email" class="w-full p-3 mt-2 border rounded-lg bg-zinc-700 text-white placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm hover:shadow-md transition duration-200" placeholder="Ex : alice.duchemin@mail.a" required>
                <div class="text-red-500 text-sm mt-1 hidden" id="error-email">Veuillez entrer un email valide.</div>
            </div>

            <!-- Champ Message -->
            <div class="mb-4">
                <label for="contenu" class="block text-lg font-medium text-white">Votre message</label>
                <textarea name="contenu" id="contenu" rows="5" class="w-full p-3 mt-2 border rounded-lg bg-zinc-700 text-white placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-blue-500 shadow-sm hover:shadow-md transition duration-200" placeholder="Écrivez votre message ici..." required></textarea>
                <div class="text-red-500 text-sm mt-1 hidden" id="error-contenu">Veuillez entrer un message.</div>
            </div>

            <!-- Bouton Envoyer -->
            <button type="submit" class="w-full px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 shadow-md hover:shadow-xl">
                Envoyer
            </button>
        </form>
    </div>

    <script>
        // Simuler un message de succès
        // Décommentez la ligne suivante pour tester le message de succès
        document.getElementById('success-message').classList.remove('hidden');
        document.getElementById('success-message').textContent = 'Votre message a bien été envoyé !';

        // Validation simple pour afficher les erreurs
        document.querySelector('form').addEventListener('submit', function(e) {
            let valid = true;

            // Vérification du champ nom
            const nom = document.getElementById('nom');
            if (!nom.value) {
                valid = false;
                document.getElementById('error-nom').classList.remove('hidden');
            } else {
                document.getElementById('error-nom').classList.add('hidden');
            }

            // Vérification du champ prénom
            const prenom = document.getElementById('prenom');
            if (!prenom.value) {
                valid = false;
                document.getElementById('error-prenom').classList.remove('hidden');
            } else {
                document.getElementById('error-prenom').classList.add('hidden');
            }

            // Vérification de l'email
            const email = document.getElementById('email');
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!email.value || !emailPattern.test(email.value)) {
                valid = false;
                document.getElementById('error-email').classList.remove('hidden');
            } else {
                document.getElementById('error-email').classList.add('hidden');
            }

            // Vérification du contenu du message
            const contenu = document.getElementById('contenu');
            if (!contenu.value) {
                valid = false;
                document.getElementById('error-contenu').classList.remove('hidden');
            } else {
                document.getElementById('error-contenu').classList.add('hidden');
            }

            // Si des erreurs, empêcher l'envoi
            if (!valid) {
                e.preventDefault();
            }
        });
    </script>
</div>
</body>
</html>
