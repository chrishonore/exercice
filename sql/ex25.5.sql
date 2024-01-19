/*
 Écrivez une requête SQL qui renvoie chaque titre d'emploi unique et le nombre d'employés qui ont ce titre.
 Votre requête devrait renvoyer un tableau avec deux colonnes : title et Number of Employees. (Humm ça ne sentirait pas le GROUP BY ?)
 */
 use employees;
select titles.title,count(employees.emp_no) as nombre_d_employees
from  titles
inner join employees on titles.emp_no=employees.emp_no
group by titles.title;
/*
 Triez les résultats par nombre d'employés en ordre descendant.
 */
select titles.title,count(employees.emp_no) as nombre_d_employees
from  titles
inner join employees on titles.emp_no=employees.emp_no
group by titles.title
 order by nombre_d_employees desc ;
/*
Faites deux requêtes:
Quel titre est le plus courant ? (On utilisera LIMIT)
Quel titre est le moins courant ? (On utilisera LIMIT)
 */
select titles.title,count(employees.emp_no) as nombre_d_employees
from  titles
          inner join employees on titles.emp_no=employees.emp_no
group by titles.title
order by nombre_d_employees desc
limit 2
;
select titles.title,count(employees.emp_no) as nombre_d_employees
from  titles
          inner join employees on titles.emp_no=employees.emp_no
group by titles.title
order by nombre_d_employees asc
    limit 2;
/*
Quelle est la moyenne des salaires des différents titres ?
*/
select titles.title ,avg(salaries.salary) as salaire_moyen
from titles
inner join employees on titles.emp_no=employees.emp_no
inner join salaries on employees.emp_no=salaries.emp_no
group by title ;
/*
Vous utiliserez la table salaries. Quel est le salaire moyen des employés de l'entreprise ? (Ne vous prenez pas la tête, c'est très simple)
*/
select titles.title as post_de_travail, count(employees.emp_no) as nombre_d_employees ,avg(salaries.salary) as salaire_moyen
from salaries
inner join employees on salaries.emp_no=employees.emp_no
inner join titles on employees.emp_no=titles.emp_no
group by post_de_travail
;
/*
Quel est l'employé ayant le salaire le plus élevé de l'entreprise ? (On utilisera LIMIT)
Quel est l'employé ayant le salaire le plus bas de l'entreprise ? (On utilisera LIMIT)
 */
select employees.last_name as nom,employees.first_name as prenom , titles.title as post_de_travail,salaries.salary as salaire
from employees
inner join titles on employees.emp_no=titles.emp_no
inner join salaries on employees.emp_no=salaries.emp_no
order by salaire desc
limit 1
;
select employees.last_name as nom,employees.first_name as prenom , titles.title as post_de_travail,salaries.salary as salaire
from employees
         inner join titles on employees.emp_no=titles.emp_no
         inner join salaries on employees.emp_no=salaries.emp_no
order by salaire asc
    limit 1
;