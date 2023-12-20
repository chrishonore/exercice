/*Affichez toutes les communes sur le code Postal 4280
Affichez toutes les communes sur le code Postal 4280 et dont la commune commence par 'b' ou par 'a'
Affichez les CP et les noms des communes de la Province de Liège: les CP sont compris entre 4000 et 4999
*/
use Localites
select *
from Localite
where cp =4280;

select cp , commune
from localite
where cp  > '4000'and cp < '4999';

select cp,Commune
from Localite
where cp=4280 and (commune like 'a%' or commune like 'b%');