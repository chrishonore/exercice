    let title = document.getElementById("title");
    if (title) { // Si l'élément existe
    // Modifier le contenu du h1
    title.innerHTML = "Ceci est un h1 qui as etes modifié par christian.";
}
        let info = document.getElementById("info");
        info.innerHTML += "Nous sommes en " + new Date().getFullYear();