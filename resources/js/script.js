//Get the button:
mybutton = document.getElementById("myBtn");

// Quand l'utilisateur scroll en bas de 20px pour le haut du document, affiche le bouton
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// Quand l'utilisateur clique sur le bouton, scroll en haut de la page
function topFunction() {
    document.body.scrollTop = 0; // Pour Safari
    document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE(Internet Explorer) et Opera
}
