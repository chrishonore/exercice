/*
 Affichez le nom COMPLET du pays
 et le nom COMPLET du continent (pas l'acronyme) dont il fait partie.
 */
 use pays;

SELECT pays.name, continent.name
from pays
inner join continent on pays.continent = continent.code ;