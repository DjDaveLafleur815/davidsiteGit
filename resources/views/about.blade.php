<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Développeur web, mobile et desktop. Découvrez mon portfolio et mon CV.">
    <title>@lang('messages.about') - ANTOINE David</title>
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
            position: fixed; /* Fond positionné de manière fixe */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Les étoiles restent derrière le contenu */
            pointer-events: none; /* Les étoiles ne bloquent pas les interactions avec la page */
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

        /* Autres styles pour votre page */
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
    <div class="stars">
        <!-- Des étoiles générées dynamiquement via JavaScript -->
    </div>

    <!-- Conteneur principal -->
    <div class="flex flex-col items-center justify-center min-h-screen px-4">

    <!-- Navigation -->
    <nav class="my-8 fade-in grid grid-cols-1 md:grid-cols-3 md:gap-4 w-full" style="animation-delay: 0.5s;">
        <!-- Colonne vide (1ère colonne) : cachée sur mobile -->
        <div class="hidden md:block"></div>

        <!-- Menu principal (2e colonne) : texte plus grand sur mobile -->
        <div class="flex justify-center mb-4 md:mb-0 text-base md:text-lg">
            <ul class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6">
                <li><a href="/" class="text-sm hover:text-white">@lang('messages.home')</a></li>
                <li><a href="/a-propos" class="text-sm hover:text-white">@lang('messages.about')</a></li>
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
            <h3 class="text-4xl font-bold text-white sm:text-6xl md:text-8xl">@lang('messages.titleAbout')</h3>
        </div>

        <div class="my-16 flex flex-col md:flex-row items-center justify-center gap-8">
            <!-- Première colonne (photo) -->
            <div class="md:w-1/2 flex justify-center items-center">
                <img src="{{ asset('images/photoDeMoi.jpg') }}" class="rounded-lg shadow-md max-w-xs h-auto object-cover hover:shadow-lg transition duration-300" alt="Photo de moi">
            </div>
            <!-- Deuxième colonne (bio) -->
            <div class="md:w-1/2 flex justify-center items-center text-lg leading-relaxed text-justify">
                @lang('messages.bio')
            </div>
        </div>

    <!-- Section Langages -->
    <div class="my-16">
        <div class="flex flex-col items-center justify-center my-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-white text-center mb-8 leading-tight max-w-4xl">@lang('messages.h2text')</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="flex justify-center">
                <img src="https://davidantoine.zapto.org/images/html-css-js.png" class="rounded-lg shadow-md hover:shadow-lg transition duration-300 w-32 h-auto object-contain" alt="Logos HTML, CSS et JavaScript">
            </div>
            <div class="flex justify-center">
                <img src="https://davidantoine.zapto.org/images/php.png" class="rounded-lg shadow-md hover:shadow-lg transition duration-300 w-32 h-auto object-contain" alt="Logo PHP">
            </div>
            <div class="flex justify-center">
                <img src="https://davidantoine.zapto.org/images/python.jpg" class="rounded-lg shadow-md hover:shadow-lg transition duration-300 w-32 h-auto object-contain" alt="Logo Python">
            </div>
            <div class="flex justify-center">
                <img src="https://davidantoine.zapto.org/images/java-black-2560x2560-16069.png" class="rounded-lg shadow-md hover:shadow-lg transition duration-300 w-32 h-auto object-contain" alt="Logos Python, Java, Arduino et C++">
            </div>
            <div class="flex justify-center">
                <img src="https://davidantoine.zapto.org/images/mysql.jpg" class="rounded-lg shadow-md hover:shadow-lg transition duration-300 w-32 h-auto object-contain" alt="Logo SQL">
            </div>
            <div class="flex justify-center">
                <img src="https://davidantoine.zapto.org/images/bootstrap.png" class="rounded-lg shadow-md hover:shadow-lg transition duration-300 w-32 h-auto object-contain" alt="Logo Bootstrap">
            </div>
            <div class="flex justify-center">
                <img src="https://davidantoine.zapto.org/images/flutter.png" class="rounded-lg shadow-md hover:shadow-lg transition duration-300 w-32 h-auto object-contain" alt="Logo Flutter">
            </div>
            <div class="flex justify-center">
                <img src="https://davidantoine.zapto.org/images/docker.png" class="rounded-lg shadow-md hover:shadow-lg transition duration-300 w-32 h-auto object-contain" alt="Logo Docker">
            </div>
            <div class="flex justify-center">
                <img src="https://davidantoine.zapto.org/images/angular.png" class="rounded-lg shadow-md hover:shadow-lg transition duration-300 w-32 h-auto object-contain" alt="Logo Angular">
            </div>
            <div class="flex justify-center">
                <img src="https://davidantoine.zapto.org/images/symfony.png" class="rounded-lg shadow-md hover:shadow-lg transition duration-300 w-32 h-auto object-contain" alt="Logo Symfony">
            </div>
            <div class="flex justify-center">
                <img src="https://davidantoine.zapto.org/images/laravel.png" class="rounded-lg shadow-md hover:shadow-lg transition duration-300 w-32 h-auto object-contain" alt="Logo Laravel">
            </div>
            <div class="flex justify-center">
                <img src="https://davidantoine.zapto.org/images/fastapi.png" class="rounded-lg shadow-md hover:shadow-lg transition duration-300 w-32 h-auto object-contain" alt="Logo FastAPI">
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

    <!-- Inclure le bouton "Scroll To Top" -->
    @include('partials.scroll-to-top')

    <script>
        // Générer des étoiles de manière aléatoire
        const starsContainer = document.querySelector('.stars');
        for (let i = 0; i < 100; i++) {
            const star = document.createElement('div');
            star.classList.add('star');
            star.style.top = `${Math.random() * 100}vh`;
            star.style.left = `${Math.random() * 100}vw`;
            star.style.animationDuration = `${Math.random() * 5 + 5}s`; // Durée de l'animation aléatoire
            starsContainer.appendChild(star);
        }
    </script>
</body>
</html>
