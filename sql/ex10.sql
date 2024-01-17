/*Connectez-vous au SGBD MySQL: mysql -u root -p
Entrez votre mot de passe
Si vous n'êtes pas dans la DB BlindCode, tapez: use BlindCode;
Affichez les élèves qui ont une adresse de type gmail.com
Affichez les élèves qui n'ont pas une adresse de type gmail.com */
use blindcode;
SELECT nom, prenom, email
FROM  eleve
WHERE email LIKE '%gmail.com' ;

SELECT nom, prenom, email
FROM  eleve
WHERE NOT (email LIKE '%gmail.com');

SELECT  nom , prenom
FROM eleve
WHERE nom LIKE  'h%';