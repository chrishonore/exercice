/*
 Affichez chaque pays et le nom du continent dont il fait partie.
Faites un tri ascendant sur le nom du pays.
Je vous conseille d'utiliser le mot clef AS après le nom du pays et après le nom du continent.
 Sinon vous allez avoir deux colonnes Name pour le pays et le continent. Ce qui n'est pas très pratique...
 */
 use pays;

SELECT pays.name as 'name_pays', continent.name as 'name_continent'
from pays
 inner join continent on pays.continent = continent.code ;

select name
from pays
order by name asc;
