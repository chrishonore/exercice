use employees;

SELECT last_name AS nom , first_name AS prenom , gender AS sexe
FROM employees
limit 5
;
SELECT last_name AS nom , first_name AS prenom , gender AS sexe
FROM employees
    where last_name like 'h%'
         limit 6
;
SELECT count(gender)AS sexe ,first_name as prenom , last_name as nom
FROM employees
where last_name like ' a% '
group by gender
;
