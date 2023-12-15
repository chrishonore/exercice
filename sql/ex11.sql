//  Affichez les élèves qui ont une adresse qui n ont pas d gmail.com//

SELECT nom, prenom, email
FROM  eleve
WHERE not (email LIKE '%gmail.com');