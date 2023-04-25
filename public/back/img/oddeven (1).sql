BEGIN

FOR i in 1..10 LOOP

dbms_output.put(i|| ',');
end LOOP;

END;
/


BEGIN
FOR i in REVERSE 0..50 LOOP  
dbms_output.put(2*i|| ' ');
end LOOP;
dbms_output.new_line();
END;
/


DECLARE
nom employees.first_name%type;
BEGIN
SELECT first_name INTO nom from employees where employee_id=205;
dbms_output.put_line('le nom de l"employe est: ' || nom);
END;
/



DECLARE
nb NUMBER:=0;
BEGIN
select count(*) into nb from employees where department_id=50;
dbms_output.put_line('le nombre des employes est: '||nb);
END;
/


DECLARE
salMin NUMBER :=0;
salMax NUMBER :=0;
BEGIN
select min(salary), max(salary) into salMin, salMax from employees where department_id=50;
dbms_output.put_line('le salaire minimal: ' ||salMin|| ' le salaire maximal: '||salMax);
end;
/




DECLARE
CURSOR emp IS SELECT first_name, salary, job_id from employees where department_id=50;
fn employees.first_name%TYPE;
s employees.salary%TYPE;
j employees.job_id%TYPE;
BEGIN

open emp;

LOOP
FETCH emp into fn,s,j ;
dbms_output.put_line(fn||' '||s||' '||j);
EXIT WHEN emp%notfound;
end LOOP;
dbms_output.put_line(emp%rowcount);
close emp;
end;
/




DECLARE
CURSOR emp IS SELECT first_name, salary, job_id from employees where department_id=50;
r emp%rowtype;
BEGIN
for r in emp
LOOP

dbms_output.put_line(emp%rowcount||' '||r.first_name||' '||r.salary||' '||r.job_id );
EXIT WHEN emp%notfound;
end LOOP;
end;
/
