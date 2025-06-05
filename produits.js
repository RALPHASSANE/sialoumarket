// Fonction pour gérer l'animation de transition et la redirection
function handleTransition(targetUrl) {
    // Crée un élément pour l'animation de transition
    const transitionElement = document.createElement("div");
    transitionElement.classList.add("page-transition");
    document.body.appendChild(transitionElement);

    // Ajoute la classe active pour démarrer l'animation
    setTimeout(() => {
        transitionElement.classList.add("active");
    }, 10);

    // Redirige vers la page cible après l'animation
    setTimeout(() => {
        window.location.href = targetUrl;
    }, 600); // Correspond à la durée de la transition (0.6s)
}

// Gestion du clic sur le lien "Accueil" dans la navigation
document.getElementById("nav-home").addEventListener("click", function (e) {
    e.preventDefault(); // Empêche le comportement par défaut
    handleTransition("accueil.html");
});