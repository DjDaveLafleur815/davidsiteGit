<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contactez-moi pour toute demande.">
    <title>@lang('messages.titleContact') - ANTOINE David</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            color: #ccc;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
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

        .input-field {
            width: 100%;
            padding: 0.75rem;
            margin-top: 0.5rem;
            border: 1px solid transparent;
            border-radius: 0.375rem;
            background-color: #374151;
            color: #ffffff;
            placeholder-color: #9CA3AF;
            transition: box-shadow 0.2s;
        }

        .input-field:focus {
            outline: none;
            border-color: #3B82F6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.3);
        }

        .error-message {
            color: #F87171;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
    </style>
</head>
<body class="bg-black text-zinc-300">
<!-- Fond étoilé -->
<div class="stars">
    <!-- Création des étoiles dynamiques -->
    <div class="star" style="top: 10%; left: 20%;"></div>
    <div class="star" style="top: 50%; left: 40%;"></div>
    <div class="star" style="top: 30%; left: 80%;"></div>
    <div class="star" style="top: 70%; left: 60%;"></div>
    <div class="star" style="top: 90%; left: 10%;"></div>
    <!-- Ajoutez plus d'étoiles ici selon vos besoins -->
</div>

<!-- Conteneur principal -->
<div class="flex flex-col items-center justify-center min-h-screen px-4 py-4">
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
            </ul>
        </div>

        <!-- Switcher de langues (3e colonne) : texte plus grand sur mobile -->
        <div class="flex justify-center md:justify-end items-center space-x-2 mt-4 md:mt-0 text-base md:text-lg">
            <a href="{{ url('locale/fr') }}" class="text-sm hover:text-white font-semibold">FR</a>
            <span>|</span>
            <a href="{{ url('locale/en') }}" class="text-sm hover:text-white font-semibold">EN</a>
            <span>|</span>
            <a href="{{ url('locale/de') }}" class="text-sm hover:text-white font-semibold">DE</a>
        </div>
    </nav>

    <!-- Ligne décorative -->
    <div class="hidden w-screen h-px md:block bg-gradient-to-r from-zinc-300/0 via-zinc-300/50 to-zinc-300/0"></div>
    <!-- Conteneur du formulaire -->
    <div class="max-w-xl w-full bg-zinc-800 p-8 rounded-lg shadow-lg">
        <!-- Titre -->
        <div class="text-center mb-6">
            <h3 class="text-4xl font-bold text-white sm:text-5xl">@lang('messages.titleContact')</h3>
        </div>
        <!-- Message de succès -->
        <div class="mt-3 text-green-600 text-2xl font-semibold text-center">
            @if (session('success'))
                {{ session('success') }}
            @endif
        </div>
        <!-- Formulaire de contact -->
        <form action="/contact" method="POST" class="space-y-6">
            @csrf
            <!-- Champ Nom -->
            <div>
                <label for="nom" class="block text-lg font-medium text-white text-center">@lang('messages.name')</label>
                <input type="text" name="nom" id="nom" class="input-field" placeholder="@lang('messages.nameText')" required>
                <div class="error-message hidden" id="error-nom">@lang('messages.error-nom')</div>
            </div>

            <!-- Champ Prénom -->
            <div>
                <label for="prenom" class="block text-lg font-medium text-white text-center">@lang('messages.firstname')</label>
                <input type="text" name="prenom" id="prenom" class="input-field" placeholder="@lang('messages.firstnameText')" required>
                <div class="error-message hidden" id="error-prenom">@lang('messages.error-prenom')</div>
            </div>

            <!-- Champ Email -->
            <div>
                <label for="email" class="block text-lg font-medium text-white text-center">@lang('messages.email')</label>
                <input type="email" name="email" id="email" class="input-field" placeholder="@lang('messages.emailText')" required>
                <div class="error-message hidden" id="error-email">@lang('messages.error-email')</div>
            </div>

            <!-- Champ Message -->
            <div>
                <label for="contenu" class="block text-lg font-medium text-white text-center">@lang('messages.content')</label>
                <textarea name="contenu" id="contenu" rows="5" class="input-field" placeholder="@lang('messages.contentText')" required></textarea>
                <div class="error-message hidden" id="error-contenu">@lang('messages.error-content')</div>
            </div>

            <!-- Bouton Envoyer -->
            <button type="submit" class="w-full px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 shadow-md hover:shadow-xl">@lang('messages.buttonText')</button>
        </form>
    </div>
</div>
<!-- Ligne décorative -->
<div class="hidden w-screen h-px md:block bg-gradient-to-r from-zinc-300/0 via-zinc-300/50 to-zinc-300/0"></div>
<!-- Footer -->
<footer class="container mx-auto px-4 py-4 text-center text-xs text-zinc-500">
    &copy; {{ date('d/m/y H:i') }} ANTOINE David. @lang('messages.allrights')
</footer>
<!-- Inclure le bouton "Scroll To Top" -->
@include('partials.scroll-to-top')
<!-- Script pour le bouton "Scroll To Top" -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.querySelector('form');
        const successMessage = document.getElementById('success-message');

        form.addEventListener('submit', (e) => {
            let isValid = true;

            // Vérification de chaque champ
            document.querySelectorAll('.input-field').forEach((field) => {
                const errorElement = document.getElementById(`error-${field.id}`);
                if (!field.value || (field.id === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value))) {
                    errorElement.classList.remove('hidden');
                    isValid = false;
                } else {
                    errorElement.classList.add('hidden');
                }
            });

            // Si des erreurs sont détectées, on empêche la soumission
            if (!isValid) {
                e.preventDefault();
                return;
            }

            // Afficher le message de succès et réinitialiser le formulaire
            successMessage.textContent = 'Votre message a bien été envoyé !';
            successMessage.classList.remove('hidden');
            form.reset();

            // Masquer le message après 5 secondes
            setTimeout(() => successMessage.classList.add('hidden'), 5000);

            // Empêche la soumission réelle pour cette démo (à retirer en production)
            e.preventDefault();
        });
    });
</script>
</body>
</html>
