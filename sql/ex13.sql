/*Affichez toutes les communes sur le code Postal 4280
Affichez toutes les communes sur le code Postal 4280 et dont la commune commence par 'b' ou par 'a'
Affichez les CP et les noms des communes de la Province de Liège: les CP sont compris entre 4000 et 4999
*/
use Localites
SELECT *
FROM Localite
WHERE cp =4280;

SELECT cp , commune
FROM localite
WHERE cp  > '4000'AND cp < '4999';

SELECT cp,Commune
FROM Localite
WHERE cp=4280 AND (commune LIKE 'a%' OR commune LIKE 'b%');

SELECT cp , commune
FROM localite
WHERE cp > 6000 AND cp < 6999 ;

SELECT cp, commune
FROM localite
WHERE cp > 6000 AND cp < 6999 AND (commune LIKE 'a%' OR commune LIKE 'b%');