<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Développeur web, mobile et desktop. Découvrez mon portfolio et mon CV.">
    <title>@lang('messages.home') - ANTOINE David</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Fond étoilé */
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            color: #ccc;
            overflow: hidden;
        }

        .stars {
            position: absolute;
            width: 100%;
            height: 100%;
            background: transparent;
            z-index: 1;
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

        /* Scintillement */
        @keyframes twinkle {
            0%, 100% {
                opacity: 0.8;
            }
            50% {
                opacity: 0.2;
            }
        }

        /* Mouvement des étoiles */
        @keyframes move {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(-100px, 100px);
            }
        }

        /* Ligne décorative */
        .line {
            height: 2px;
            background: linear-gradient(to right, transparent, #ffffff50, transparent);
        }

        /* Animations de texte */
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
<body class="flex flex-col min-h-screen">
    <!-- Fond étoilé -->
    <div id="stars-container" class="stars w-full h-full"></div>

    <!-- Conteneur principal -->
    <div class="flex flex-col items-center justify-center flex-grow relative z-10 w-full">

    <!-- Navigation -->
    <nav class="my-8 fade-in grid grid-cols-1 md:grid-cols-3 md:gap-4 w-full" style="animation-delay: 0.5s;">
        <!-- Colonne vide (1ère colonne) : cachée sur mobile -->
        <div class="hidden md:block"></div>

        <!-- Menu principal (2e colonne) : texte plus grand sur mobile -->
        <div class="flex justify-center mb-4 md:mb-0 text-base md:text-lg">
            <ul class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6">
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

        <!-- Ligne décorative supérieure -->
        <div class="line fade-in w-full" style="animation-delay: 1s;"></div>

        <!-- Contenu principal -->
        <div class="text-center my-8">
            <h1 class="text-4xl font-bold text-white sm:text-6xl md:text-8xl animate-text">ANTOINE David</h1>
            <p class="mt-4 text-sm sm:text-lg fade-in" style="animation-delay: 2.5s;">
                @lang('messages.welcome')<br>@lang('messages.text')
            </p>
        </div>

    <!-- Section CV et Bouton À propos -->
    <div class="flex flex-col md:flex-row items-center justify-center gap-8 my-16">
        <!-- Section CV -->
        <div class="md:w-1/2 flex flex-col items-center">
            <h2 class="text-lg font-semibold">@lang('messages.cv')</h2>
            <a href="https://www.unitag.io/qrcode" class="mt-4">
                <img src="https://davidantoine.zapto.org/images/cv2.png" alt="QR Code CV" class="rounded-lg w-48">
            </a>
        </div>

        <!-- Bouton "À propos" -->
        <div class="md:w-1/2 flex flex-col items-center">
            <a href="/a-propos" class="bg-blue-500 text-white py-2 px-6 rounded-full hover:bg-blue-600 transition duration-300">
                @lang('messages.about')
            </a>
        </div>
    </div>

        <!-- Ligne décorative inférieure -->
        <div class="line fade-in w-full" style="animation-delay: 3s;"></div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-xs text-zinc-500 fade-in py-4 w-full" style="animation-delay: 5s;">
        &copy; {{ date('d/m/y H:i') }} ANTOINE David. @lang('messages.allrights')
    </footer>

    <!-- Script pour créer les étoiles -->
    <script>
        const starContainer = document.getElementById('stars-container');
        const starCount = 150; // Nombre d'étoiles

        for (let i = 0; i < starCount; i++) {
            const star = document.createElement('div');
            star.classList.add('star');
            star.style.top = Math.random() * 100 + 'vh'; // Position verticale aléatoire
            star.style.left = Math.random() * 100 + 'vw'; // Position horizontale aléatoire
            star.style.animationDuration = Math.random() * 5 + 5 + 's'; // Durée de scintillement aléatoire
            star.style.animationDelay = Math.random() * 5 + 's'; // Délai de scintillement aléatoire
            starContainer.appendChild(star);
        }
    </script>
</body>
</html>
