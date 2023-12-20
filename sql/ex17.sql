/*
 Affichez le prix maximum des produits
Affichez le prix minimum des produits
Affichez le prix total de tous les produits en tenant compte du stock de chaque produit. :-)
 */
 use ventes;
     SELECT MIN(prix)
     FROM produit;

SELECT MAX(prix)
FROM produit;

SELECT SUM((prix)*(stock)) AS Total
FROM Produit;

SELECT prix, stock
FROM produit;
