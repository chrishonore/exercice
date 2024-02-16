/*
VIEW - Création d'une vue
Créez une vue qui s'appellera employees_info qui contiendra les champs suivants:
Tous les champs de la table employees: employees.* (On utilisera par exemple un SELECT employees.* pour les champs de la table employees)
dept_name
title
salary
Cette vue contiendra les informations de la table employees ainsi que les informations de la table departments, titles et salaries. Et ce, grâce à des INNER JOIN d'amour <3.
On testera la vue en faisant un SELECT * FROM employees_info LIMIT 10;
*/
use employees;
CREATE VIEW employees_info as
SELECT  e.*,dept_name,title,salary
FROM employees as e
inner join dept_emp as de on e.emp_no = de.emp_no
inner join departments as d on de.dept_no=d.dept_no
inner join titles as t on e.emp_no=t.emp_no
inner join salaries as s on e.emp_no=s.emp_no;
