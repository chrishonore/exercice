/*
 Suite à l'arrêt du club d'Andenne, les joueurs de ce club feront dérénavant partie du Standard.
Mettez à jour la table joueur en tenant compte de ce changement de club.
 */
 use exercice27;
     update joueur
     set id_equipe='2'
where id_joueur='2';

select *
from joueur;
