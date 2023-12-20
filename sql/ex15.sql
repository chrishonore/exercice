/*
 On va ici créer une colonne dynamiquement dans le résultat qu'on nommera Age.
 On utilisera le AS comme vu au cours dans la Exercice n°"champs calculés" Je vous demande d'afficher le prenom, nom et l'age des eleves. Pour cela, je vous rappelle que la fonction YEAR() permet de récupérer l'année d'une date et que CURDATE() donne la date du jour. Pour avoir l'age approximatif de l'élève on pourrait donc faire Année en cours(2022)-Année de naissance(ex:1974) AS Age
Reprenez la requête précédente et affichez les élèves du plus jeune au plus vieux.
Ensuite, du plus vieux au plus jeune.
Réécrivez vos deux requêtes pour ne traîter que des élèves de BlindCode4Data.
 */
 use blindcode;
     SELECT nom, prenom, naissance,YEAR (curdate())- year (naissance) as age
     FROM eleve
     ORDER BY age ;

select nom, prenom, naissance,year (curdate())- year (naissance) as age
from eleve
ORDER BY age asc ;

select nom, prenom, naissance,year (curdate())- year (naissance) as age
FROM eleve
ORDER BY age DESC ;

SELECT nom, prenom, naissance
FROM eleve
WHERE formation_id=2;