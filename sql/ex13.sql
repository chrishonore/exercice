/*Affichez toutes les communes sur le code Postal 4280
Affichez toutes les communes sur le code Postal 4280 et dont la commune commence par 'b' ou par 'a'
Affichez les CP et les noms des communes de la Province de Liège: les CP sont compris entre 4000 et 4999
*/
use Localites
select *
from Localite
where cp =4280;

select *
from Localite
where cp =4280 and commune=like 'a%' and 'b%' ;
