<!-- Bouton "Scroll To Top" -->
<button id="scrollToTop" class="hidden fixed bottom-10 right-10 w-12 h-12 bg-zinc-700 text-zinc-300 rounded-full shadow-md hover:bg-zinc-600 hover:text-white focus:outline-none" title="Revenir en haut">↑</button>

<!-- Script pour le bouton "Scroll To Top" -->
<script>
    window.addEventListener('scroll', function () {
        const scrollToTopButton = document.getElementById('scrollToTop');
        if (window.scrollY > 300) {
            // Afficher le bouton
            scrollToTopButton.classList.remove('hidden');
        } else {
            // Masquer le bouton
            scrollToTopButton.classList.add('hidden');
        }
    });

    // Ajout de l'événement click pour faire défiler la page
    const scrollToTopButton = document.getElementById('scrollToTop');
    scrollToTopButton.addEventListener('click', function () {
        window.scrollTo({
            top: 0, // Aller en haut de la page
            behavior: 'smooth' // Utiliser un défilement fluide
        });
    });
</script>
