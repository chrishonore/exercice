/*
 Affichez chaque pays et le nom du continent dont il fait partie.
Faites un tri ascendant sur le nom du pays.
Je vous conseille d'utiliser le mot clef AS après le nom du pays et après le nom du continent.
 Sinon vous allez avoir deux colonnes Name pour le pays et le continent. Ce qui n'est pas très pratique...
 */
 use pays;
select *
from pays limit 2;

select *
from continent ;

select name
from pays
order by name asc;

SELECT pays.name as 'name_pays', continent.name as 'name_continent'
from pays
 inner join continent on pays.continent = continent.code ;
/* en gros on introduit le deuxieme tableau pour le mettre dans table 1
   et il va s appeler continent qui devien une colonne que l on va
   le relier avec = au table 2 a la colonne code qui represente sa clef primary */
select code
from continent;



