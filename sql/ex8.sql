use blindcode ;
    /*
Affichez les élèves nés après 1980: Le format de la date est année/Mois/Jour
Affichez les élèves nés avant 1980: Le format de la date est année/Mois/Jour
 */
 SELECT nom , prenom , naissance
 FROM eleve
WHERE naissance > '1980-01-01' ;
/*ici  on utilise le where pour chercher des eleve nee avant ou apres la date recherche */
SELECT nom , prenom , naissance
FROM eleve
WHERE naissance < '1980-01-01' ;