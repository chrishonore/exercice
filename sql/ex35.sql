/*
 Cette vue contiendra les champs suivants:
Tous les champs de la table employees: employees.* (On utilisera par exemple un SELECT employees.* pour les champs de la table employees).
dept_name
dept_emp.to_date
Astuce dans votre WHERE vous pouvez utiliser la fonction CURDATE() qui retourne la date du jour et la comparer au champ dept_emp.to_date qui contient la date de fin de contrat de l'employé. A vous de trouver le test à faire. ;-)
 */
 --CREATE VIEW employees_info as
 use employees;
CREATE VIEW inactive_employees as
    select e.* ,d.*, de.to_date
    from employees e
    inner join dept_emp de on e.emp_no=de.emp_no
    inner join departments d on de.dept_no=d.dept_no
    where de.to_date < curdate();