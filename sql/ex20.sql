/*
 Faites un DESC Pays, pour voir sa structure.
Affichez pour chaque continent, combien il a de pays. On n'utilisera qu'une seule table: Pays. Donc pour le continent à afficher on prendra le champ continent. (On fera mieux plus tard.)
 */
 use pays;
     SELECT continent, count(*) as nombre_de_pays
     from pays
     group by continent
     order by continent desc ;

SELECT continent, count(*) as nombre_de_pays
from pays
group by continent
order by nombre_de_pays desc ;


