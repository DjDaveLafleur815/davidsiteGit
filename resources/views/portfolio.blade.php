<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio - Découvrez mes projets et créations.">
    <title>Portfolio - Antoine David</title>
    <!-- Inclusions CSS et JS -->
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-zinc-300">
<!-- Conteneur principal -->
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

    <!-- Ligne décorative -->
    <div class="hidden w-screen h-px md:block bg-gradient-to-r from-zinc-300/0 via-zinc-300/50 to-zinc-300/0"></div>

    <!-- Contenu principal -->
    <div class="text-center my-12">
        <h1 class="text-4xl font-bold text-white sm:text-6xl md:text-8xl">Portfolio</h1>
        <p class="mt-4 text-sm sm:text-lg">
            Découvrez mes créations et projets récents.
        </p>
    </div>

    <!-- Section des projets -->
    <div class="container mx-auto px-4 my-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Projet 1 -->
            <div class="bg-zinc-800 rounded-lg shadow-lg overflow-hidden flex flex-col items-center justify-center">
                <a href="{{ asset('images/img_le_blog_de_batman.jpg') }}" data-lightbox="image-1" data-title="Le Blog De Batman">
                    <img src="{{ asset('images/img_le_blog_de_batman.jpg') }}" alt="Le Blog De Batman" class="w-full h-40 object-cover">
                </a>
                <div class="p-4 text-center">
                    <h4 class="text-lg font-semibold">Le Blog De Batman</h4>
                    <p class="text-sm mt-2">Site fait pendant la Formation Développeur Web et Web Mobile.</p>
                </div>
            </div>

            <!-- Projet 2 -->
            <div class="bg-zinc-800 rounded-lg shadow-lg overflow-hidden flex flex-col items-center justify-center">
                <a href="{{ asset('images/img_nina_city.jpg') }}" data-lightbox="image-2" data-title="Nina City">
                    <img src="{{ asset('images/img_nina_city.jpg') }}" alt="Nina City" class="w-full h-40 object-cover">
                </a>
                <div class="p-4 text-center">
                    <h4 class="text-lg font-semibold">Nina City</h4>
                    <p class="text-sm mt-2">Projet de Soutenance de la Formation Développeur Web et Web Mobile.</p>
                </div>
            </div>

            <!-- Projet 3 -->
            <div class="bg-zinc-800 rounded-lg shadow-lg overflow-hidden flex flex-col items-center justify-center">
                <a href="{{ asset('images/ima_air_crash_disaster.jpg') }}" data-lightbox="image-3" data-title="Air Crash Disaster">
                    <img src="{{ asset('images/ima_air_crash_disaster.jpg') }}" alt="Air Crash Disaster" class="w-full h-40 object-cover">
                </a>
                <div class="p-4 text-center">
                    <h4 class="text-lg font-semibold">Air Crash Disaster</h4>
                    <p class="text-sm mt-2">1er projet en solo toujours en cours de développement.</p>
                </div>
            </div>

            <!-- Projet 4 (CV) -->
            <div class="bg-zinc-800 rounded-lg shadow-lg overflow-hidden flex flex-col items-center justify-center">
                <div class="p-4 text-center">
                    <a href="{{ asset("pdf/MonCV-2024.pdf") }}" download>
                        <button type="button" class="bg-zinc-700 text-white px-4 py-2 rounded-md hover:bg-zinc-600">
                            <h4 class="text-lg font-semibold">Mon CV en PDF</h4>
                        </button>
                    </a>
                    <p class="text-sm mt-2">Accessible également via le QR Code sur la page d'accueil.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Ligne décorative -->
    <div class="hidden w-screen h-px md:block bg-gradient-to-r from-zinc-300/0 via-zinc-300/50 to-zinc-300/0"></div>
    <!-- Footer -->
    <footer class="container mx-auto px-4 py-4 text-center text-xs text-zinc-500">
        &copy; {{ date('d/m/y H:i') }} Antoine David. Tous droits réservés.
    </footer>
</div>
</body>
</html>
