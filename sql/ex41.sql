use employees;
delimiter $$
DROP FUNCTION IF EXISTS calculeranciennete;
create function calculeranciennete (emp_id int) returns int
begin
    declare date_debut DATE;
    declare anciennete int;
select hire_date into date_debut from employees where emp_no=emp_id;
set anciennete= TIMESTAMPDIFF(year,date_debut,curdate());
return anciennete;
end ;
$$
delimiter ;
select emp_no, first_name, last_name ,hire_date, calculeranciennete (emp_no)
from employees
where emp_no in (10614,10444,10001,10562,10006);