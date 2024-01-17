/*
 Affichez les champs: Prenom, Nom, Sexe, Naissance et triez dans l'ordre alphabétique sur le nom et puis le prenom.
Ensuite, triez dans l'ordre inverse le nom.
Triez les élèves du plus agé au plus jeune.
Ensuite, triez dans l'ordre inverse.
 */
 use blindcode ;
   select nom,prenom , Sexe, Naissance
   from eleve
   order by nom, prenom ;

select nom,prenom , Sexe, Naissance
from eleve
order by nom desc ;

select nom,prenom , Sexe, Naissance
from eleve
order by Naissance ;

select nom,prenom , Sexe, Naissance
from eleve
order by Naissance desc ;

select nom,prenom , Sexe, Naissance
from eleve
order by PRENOM ASC ;



