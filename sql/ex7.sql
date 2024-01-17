use blindcode ;
    /*Affichez les élèves
  dont le code postal est dans les 4000
  */
SELECT nom , prenom , cp
FROM eleve
WHERE cp BETWEEN 6000 AND 6999 ;
/*
 explication de la troisieme ligne
 WHERE cp BETWEEN 6000 AND 6999
  dans le cp entre 6000 et 6999
 */
SELECT nom , prenom , cp
FROM eleve
WHERE cp BETWEEN 1000 AND 1999 ;
/* ou alors on peut utilise simplement  where and */
SELECT nom , prenom , cp
FROM eleve
WHERE cp >=4000 AND cp <=4999 ; /* cp >=4000 AND cp <=4999     */

SELECT nom , prenom , cp
FROM eleve
WHERE cp BETWEEN 5000 AND 5999 ;