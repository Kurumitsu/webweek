/*--
    Déclaration des variables globales
--*/
let btnScroll;

/*--
    Déclaration des fonctions de callback
--*/

/**
 * Fonction pour remonter en haut de la page
 * Elle utilise window.scrollTo avec un comportement fluide
 */
function actionScrollTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Scroll fluide
    });
}

/**
 * Fonction pour gérer l'affichage du bouton selon la position du scroll
 */
function handleScrollVisibility() {
    // Si on a scrollé plus de 200px, on affiche le bouton
    if (window.scrollY > 200) {
        btnScroll.classList.add('visible');
    } else {
        btnScroll.classList.remove('visible');
    }
}

/**
 * Fonction d'initialisation (setup) appelée au chargement du DOM
 */
function init() {
    // Récupération de l'élément dans le DOM
    btnScroll = document.getElementById("scrollToTop");

    // Vérification de sécurité pour éviter les erreurs console
    if (btnScroll) {
        // Logique pour afficher/masquer le bouton "Remonter"
        const currentPage = window.location.pathname.toLowerCase();
        const isMobile = window.innerWidth <= 768; // Détection version téléphone
        const isIndexOrAdopter = currentPage.includes("index.html") || currentPage.includes("adopter.html") || currentPage.endsWith("/");
        const isConnexion = currentPage.includes("connexion.html");
        
        // Masquer le bouton si:
        // - On n'est pas sur index.html ou adopter.html (sauf si version mobile)
        // - On est sur connexion.html ET version mobile
        if ((!isIndexOrAdopter && !isMobile) || (isConnexion && isMobile)) {
            btnScroll.style.display = "none";
        } else {
            // Abonnement au clic sur le bouton
            btnScroll.addEventListener("click", actionScrollTop);
            
            // Abonnement au scroll de la fenêtre pour afficher/masquer le bouton
            window.addEventListener("scroll", handleScrollVisibility);
        }
    }

    // Masquer le bouton "Don" sur la page aider.html
    const btnDon = document.getElementById("btn-don");
    if (btnDon) {
        // Vérifier si la page actuelle est aider.html
        const currentPageForDon = window.location.pathname.toLowerCase();
        if (currentPageForDon.includes("aider.html")) {
            btnDon.style.display = "none !important";
            btnDon.style.visibility = "hidden";
            btnDon.style.pointerEvents = "none";
        }
    }
}

/*--
    Attente du chargement complet du DOM avant exécution
--*/
window.addEventListener("load", init);