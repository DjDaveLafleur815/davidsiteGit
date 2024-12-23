<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Développeur web, mobile et desktop. Découvrez mon portfolio et mon CV.">
    <title>À Propos - Antoine David</title>
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
            <h3 class="text-4xl font-bold text-white sm:text-6xl md:text-8xl">Qui suis-je ?</h3>
        </div>

        <!-- Section Photo de Profil -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-8 my-16">
            <div class="md:w-1/3 max-w-xs">
                <img src="{{ asset('images/photoDeMoi.jpg') }}" class="rounded-lg shadow-md w-full h-auto object-cover hover:shadow-lg transition duration-300" alt="Photo de moi">
            </div>
            <div class="md:w-2/3 text-lg leading-relaxed text-justify">
            Passionné par l'informatique le numérique et la programmation en général, j’ai suivi une filière STI2D option SIN (Systèmes Informatiques et Numériques). J’y ai appris les bases de HTML et CSS, le réseau informatique, le code binaire avec des conversions de base, etc. À partir de là, l’idée d’être développeur web m’est apparue comme une évidence, surtout le côté programmation. Puis, après avoir quitté les études pour raisons personnelles, j’ai été stagiaire à Une Formation Pour Moi, c’est Possible ? par OnlineFormaPRO à Dijon.<br>Ensuite, c’est écoulé 2 années de pandémie où ne trouvant pas de formation à proprement parler, j’ai suivi pas mal de dispositifs, du Digital’Access à Fabrik Ton Parcours en passant par la Garantie Jeune et l’E2C (École de la 2ème chance) ainsi que le Contrat Engagement Jeune. Après Fabrik Ton Parcours (préparation aux métiers du sport, de l’animation et du numérique), j’ai finalement entamé une formation Développeur Web et Web Mobile par Web Force 3 à l’issue de laquelle j’ai effectué un stage, à savoir la création d’un site internet en intégrant les recommandations de sécurité pour mon association de musique, ayant obtenu avec succès le Titre Professionnel Développeur Web et Web Mobile de niveau 5 (BAC + 2).<br>Après cette formation, sur les conseils du jury lors du passage du Titre Professionnel, j’ai suivi la formation Concepteur Développeur d’Applications durant laquelle j’ai effectué ce stage dans le laboratoire CIAD, une antenne de l’Université de Bourgogne-Franche-Comté ayant obtenu avec succès la Certification Développement d'Applications pour enchaîner sur un Bachelor Développeur Full Stack (BAC+3) enfin finir sur un master IA & DATA (BAC+5). Je suis également depuis bientôt 10 ans musicien en fanfare, batterie-fanfare, harmonie et dans plusieurs projets musicaux en tout genre (rock, metal, électro, etc...)</p>
            </div>
        </div>

    <!-- Section Langages -->
    <div class="my-16">
        <div class="flex flex-col items-center justify-center my-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-white text-center mb-8 leading-tight max-w-4xl">Les différents langages, frameworks et environnements de travail que je suis capable d'utiliser :</h2>
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
            &copy; {{ date('d/m/y H:i') }} Antoine David. Tous droits réservés.
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
