/*
 Pour cet exercice, on va travailler sur deux tables: ProduitV2 et Categorie.
Affichez tous les noms de produits et le nom de la catégorie dont ils font partie.
Faites un tri ascendant sur le nom du produit.
table=produit avec key primaire idproduit et idcategorie suivi de nom stock et prix
 table categorie  avec key primaire idcategorie et son nom
 */
 use ventes;
SELECT ProduitV2.nom , categorie.nom
from ProduitV2
inner join categorie on ProduitV2. idcategorie = categorie.idcategorie;

SELECT ProduitV2. nom , categorie. nom , prix , stock
from ProduitV2
inner join  categorie on ProduitV2. idcategorie = categorie.idcategorie
order by  ProduitV2.nom asc , categorie.nom  ;

