/*
 Affichez pour chaque catégorie,
 son stock. (Indice utilisez aussi SUM)
 super cool
 */
 use ventes;
     SELECT categorie, SUM(stock)
     FROM produit
     GROUP BY categorie;