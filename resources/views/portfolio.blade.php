<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio - Découvrez mes projets et créations.">
    <title>Portfolio - ANTOINE David</title>
    <!-- Inclusions CSS et JS -->
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            color: #ccc;
            min-height: 100vh; /* Hauteur minimale pour le body */
            overflow-x: hidden; /* Empêche le débordement horizontal */
            position: relative; /* Pour que les étoiles ne déplacent pas le contenu */
        }

        .stars {
            position: fixed; /* Positionnement fixe pour que le fond reste visible en arrière-plan */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Assurez-vous que les étoiles ne couvrent pas le contenu */
            pointer-events: none; /* Empêche les étoiles d'interférer avec l'interaction de l'utilisateur */
        }

        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            opacity: 0.8;
            border-radius: 50%;
            animation: twinkle 5s infinite ease-in-out, move 20s linear infinite;
        }

        @keyframes twinkle {
            0%, 100% {
                opacity: 0.8;
            }
            50% {
                opacity: 0.2;
            }
        }

        @keyframes move {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(-100px, 100px);
            }
        }

        .line {
            height: 2px;
            background: linear-gradient(to right, transparent, #ffffff50, transparent);
        }

        @keyframes textReveal {
            0% {
                opacity: 0;
                transform: scale(1.3);
                filter: blur(10px);
            }
            50% {
                opacity: 0.5;
                transform: scale(1.1);
                filter: blur(5px);
            }
            100% {
                opacity: 1;
                transform: scale(1);
                filter: blur(0);
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-text {
            animation: textReveal 2s ease-out forwards;
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn 1.5s ease-out forwards;
        }
    </style>
</head>
<body class="bg-black text-zinc-300">
<!-- Fond étoilé -->
<div id="stars-container" class="stars"></div>

<!-- Conteneur principal -->
<div class="flex flex-col items-center justify-center min-h-screen relative z-10">
    <!-- Navigation -->
    <nav class="my-8 fade-in grid grid-cols-1 md:grid-cols-3 md:gap-4 w-full" style="animation-delay: 0.5s;">
        <!-- Colonne vide (1ère colonne) : cachée sur mobile -->
        <div class="hidden md:block"></div>

        <!-- Menu principal (2e colonne) : texte plus grand sur mobile -->
        <div class="flex justify-center mb-4 md:mb-0 text-base md:text-lg">
            <ul class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6">
                <li><a href="/" class="text-sm hover:text-white">@lang('messages.home')</a></li>
                <li><a href="/portfolio" class="text-sm hover:text-white">@lang('messages.portfolio')</a></li>
                <li><a href="/contact" class="text-sm hover:text-white">@lang('messages.contact')</a></li>
            </ul>
        </div>

        <!-- Switcher de langues (3e colonne) : texte plus grand sur mobile -->
        <div class="flex justify-center md:mb-0 items-center space-x-2 mt-4 md:mt-0 text-base md:text-lg">
            <a href="{{ url('locale/fr') }}" class="text-sm hover:text-white font-semibold">FR</a>
            <span>|</span>
            <a href="{{ url('locale/en') }}" class="text-sm hover:text-white font-semibold">EN</a>
            <span>|</span>
            <a href="{{ url('locale/de') }}" class="text-sm hover:text-white font-semibold">DE</a>
        </div>
    </nav>

    <!-- Ligne décorative -->
    <div class="hidden w-screen h-px md:block bg-gradient-to-r from-zinc-300/0 via-zinc-300/50 to-zinc-300/0"></div>

    <!-- Contenu principal -->
    <div class="text-center my-12">
        <h3 class="text-4xl font-bold text-white sm:text-6xl md:text-8xl">Portfolio</h3>
        <p class="mt-4 text-sm sm:text-lg">@lang('messages.Pportfolio')</p>
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
                    <h4 class="text-lg font-semibold">@lang('messages.h4PortfolioP1')</h4>
                    <p class="text-sm mt-2">@lang('messages.h4PortfolioP1p')</p>
                </div>
            </div>

            <!-- Projet 2 -->
            <div class="bg-zinc-800 rounded-lg shadow-lg overflow-hidden flex flex-col items-center justify-center">
                <a href="{{ asset('images/img_nina_city.jpg') }}" data-lightbox="image-2" data-title="Nina City">
                    <img src="{{ asset('images/img_nina_city.jpg') }}" alt="Nina City" class="w-full h-40 object-cover">
                </a>
                <div class="p-4 text-center">
                    <h4 class="text-lg font-semibold">@lang('messages.h4PortfolioP2')</h4>
                    <p class="text-sm mt-2">@lang('messages.h4PortfolioP2p')</p>
                </div>
            </div>

            <!-- Projet 3 -->
            <div class="bg-zinc-800 rounded-lg shadow-lg overflow-hidden flex flex-col items-center justify-center">
                <a href="{{ asset('images/ima_air_crash_disaster.jpg') }}" data-lightbox="image-3" data-title="Air Crash Disaster">
                    <img src="{{ asset('images/ima_air_crash_disaster.jpg') }}" alt="Air Crash Disaster" class="w-full h-40 object-cover">
                </a>
                <div class="p-4 text-center">
                    <h4 class="text-lg font-semibold">@lang('messages.h4PortfolioP3')</h4>
                    <p class="text-sm mt-2">@lang('messages.h4PortfolioP3p')</p>
                </div>
            </div>

            <!-- Projet 4 (CV) -->
            <div class="bg-zinc-800 rounded-lg shadow-lg overflow-hidden flex flex-col items-center justify-center">
                <div class="p-4 text-center">
                    <a href="{{ asset("pdf/MonCV II 2024.pdf") }}" download>
                        <button type="button" class="bg-zinc-700 text-white px-4 py-2 rounded-md hover:bg-zinc-600">
                            <h4 class="text-lg font-semibold">@lang('messages.h4PortfolioButton')</h4>
                        </button>
                    </a>
                    <p class="text-sm mt-2">@lang('messages.h4PortfolioButtonP')</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Ligne décorative -->
    <div class="hidden w-screen h-px md:block bg-gradient-to-r from-zinc-300/0 via-zinc-300/50 to-zinc-300/0"></div>
    <!-- Footer -->
    <footer class="container mx-auto px-4 py-4 text-center text-xs text-zinc-500">
        &copy; {{ date('d/m/y H:i') }} ANTOINE David. @lang('messages.allrights')
    </footer>
</div>

<!-- Script pour créer les étoiles -->
<script>
    const starContainer = document.getElementById('stars-container');
    const starCount = 150; // Nombre d'étoiles

    for (let i = 0; i < starCount; i++) {
        const star = document.createElement('div');
        star.classList.add('star');
        star.style.top = Math.random() * 200 + 'vh'; // Position verticale aléatoire
        star.style.left = Math.random() * 200 + 'vw'; // Position horizontale aléatoire
        star.style.animationDuration = Math.random() * 5 + 5 + 's'; // Durée de scintillement aléatoire
        star.style.animationDelay = Math.random() * 5 + 's'; // Délai de scintillement aléatoire
        starContainer.appendChild(star);
    }
</script>
</body>
</html>
