/*
 Pour cet exercice, on va travailler sur deux tables: ProduitV2 et Categorie.
Affichez tous les noms de produits et le nom de la catégorie dont ils font partie.
Faites un tri ascendant sur le nom du produit.
table=produit avec key primaire idproduit et idcategorie suivi de nom stock et prix
 table categorie  avec key primaire idcategorie et son nom
 */
 use ventes;
SELECT ProduitV2.nom , categorie.nom
FROM ProduitV2
INNER JOIN categorie ON ProduitV2. idcategorie = categorie.idcategorie;

SELECT ProduitV2. nom , categorie. nom , prix , stock
FROM ProduitV2
INNER JOIN categorie ON ProduitV2. idcategorie = categorie.idcategorie
ORDER BY  ProduitV2.nom ASC , categorie.nom  ;

SELECT produitv2.nom AS produit , categorie.nom AS categorie, stock , prix
FROM categorie
INNER JOIN produitv2 ON categorie. idcategorie = produitv2.idcategorie
ORDER BY produitv2.stock ASC , categorie.nom;

SELECT produitv2.nom AS produit , categorie.nom AS categorie, stock , prix
FROM categorie
         INNER JOIN produitv2 ON categorie. idcategorie = produitv2.idcategorie
ORDER BY produitv2.prix ASC , categorie.nom;


