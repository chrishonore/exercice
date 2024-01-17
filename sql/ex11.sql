//  Affichez les élèves qui ont une adresse qui n ont pas d gmail.com//
 use blindcode;
SELECT nom, prenom, email
FROM  eleve
WHERE not (email LIKE '%gmail.com');

SELECT id ,nom , prenom , sexe
FROM eleve
WHERE NOT (sexe LIKE 'm%');

SELECT id ,nom , prenom , sexe
FROM eleve
WHERE NOT(sexe LIKE 'f%');