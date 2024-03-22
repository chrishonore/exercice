function cacherTitreH1() {
    const titreH1 = document.getElementById("titreh1");
    if (titreH1) {
        titreH1.style.display = "none";
    } else {
        console.log("L'élément avec l'ID spécifié n'a pas été trouvé.");
    }
}