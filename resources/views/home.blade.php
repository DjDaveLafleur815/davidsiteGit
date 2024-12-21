<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Développeur web, mobile et desktop. Découvrez mon portfolio et mon CV.">
    <title>Accueil - Antoine David</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-zinc-300">
<!-- Conteneur principal -->
<div class="flex flex-col items-center justify-center min-h-screen">
    <!-- Navigation -->
    <nav class="my-8">
        <ul class="flex space-x-6">
            <li><a href="/portfolio" class="text-sm hover:text-white">Portfolio</a></li>
            <li><a href="/contact" class="text-sm hover:text-white">Contact</a></li>
        </ul>
    </nav>

    <!-- Ligne décorative -->
    <div class="hidden w-screen h-px md:block bg-gradient-to-r from-zinc-300/0 via-zinc-300/50 to-zinc-300/0"></div>

    <!-- Contenu principal -->
    <div class="text-center my-12">
        <h1 class="text-4xl font-bold text-white sm:text-6xl md:text-8xl">Antoine David</h1>
        <p class="mt-4 text-sm sm:text-lg">
            Développeur Web, Mobile et Desktop, Bloggeur, Programmeur.<br>
            Bienvenue sur mon site, un portfolio pour vous montrer mon métier et mes compétences.
        </p>
    </div>

    <!-- Section CV -->
    <div class="flex flex-col items-center my-8">
        <h2 class="text-lg font-semibold">Mon CV</h2>
        <a href="https://www.unitag.io/qrcode" class="mt-4">
            <img src="{{ asset('images/CV.png') }}" alt="QR Code CV" class="rounded-lg w-48">
        </a>
    </div>

    <!-- Ligne décorative -->
    <div class="hidden w-screen h-px md:block bg-gradient-to-r from-zinc-300/0 via-zinc-300/50 to-zinc-300/0"></div>
</div>
</body>
</html>
