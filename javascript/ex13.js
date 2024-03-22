// Récupérez l'élément du titre h1
const titreH1 = document.getElementById("monTitre");

// Récupérez l'élément du bouton
const bouton = document.getElementById("toggleButton");

// Ajoutez un gestionnaire d'événements pour le clic sur le bouton
bouton.addEventListener("click", () => {
    // Utilisez la propriété style.display pour afficher ou cacher le titre
    if (titreH1.style.display === "none") {
        titreH1.style.display = "block"; // Afficher le titre
    } else {
        titreH1.style.display = "none"; // Cacher le titre
    }
});
let toggleButton = document.getElementById("toggleButton");
if (toggleButton) { // Si l'élément existe
    // Modifier le contenu du h1
    toggleButton.innerHTML = "visible / invisible";
}
