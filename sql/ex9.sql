use blindcode ;
/*
    Affichez les élèves nés entre 1980 ET 1990.
Affichez les élèves qui ne sont pas nés entre 1980 ET 1990.
    Pour cela, vous devez inverser la requête précédente.
    Pour rappel, dans une inversion de condition:
AND devient OR
OR devient AND
= devient <>
<> devient =
> devient <=
>= devient <
< devient >=
<= devient >
    Exemple: a \< b AND d >= e devient a \>= b OR d \< e A vous de jouer. :-)
Reprenez la requète des élèves nés entre 1980 ET 1990.
    Encadrez celle-ci de parenthèses et ajoutez juste devant le NOT.
    Vous devriez avoir le même résultat que la requête précédente.
    Parfois quand on a des requêtes complexes, il est plus facile de les inverser en ajoutant un NOT devant la requête.
    C'est plus facile que de tout inverser. :-)
 */
 SELECT nom, prenom , naissance
 FROM eleve
 /*naissance inferieur ou egale a annee et naissance inferieur a annee
   pour rechercher entre deux date */
 WHERE naissance  >='1980-01-01' AND naissance <'1990-01-01' ;

SELECT nom, prenom , naissance
FROM eleve
/* ou alors en utilisant where not on indique les date ou on ne dois pas chercher
   on ne cherche pas quand se inferieur a 1980 ou on ne cherche pas quand se superieur a 1990 */
WHERE NOT (naissance <'1980-01-01' OR naissance  >'1990-01-01' ) ;

SELECT nom, prenom , naissance
FROM eleve
/*ou alors on fait de cette maniere*/
WHERE NOT (naissance  >='1980-01-01' AND naissance <'1990-01-01') ;