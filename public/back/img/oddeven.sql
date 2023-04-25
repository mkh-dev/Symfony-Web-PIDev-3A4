DECLARE
  
   CURSOR curs_departments is select department_id, department_name
      FROM departments d  ;
   emp_id employees.employee_id%TYPE;
   emp_firstname employees.first_name%TYPE;
   emp_lastname employees.last_name%TYPE;
   
   emp_numb NUMBER;
BEGIN
   
   OPEN curs_departments;
   
     LOOP
      FETCH curs_departments INTO dept_id, dept_name;
      EXIT WHEN curs_departments%NOTFOUND;
      
      SELECT COUNT(*) INTO emp_numb FROM employees WHERE department_id = dept_id;
      IF emp_numb > 20 THEN
         
         CURSOR curs_employees is select employee_id, first_name, last_name
            FROM employees
            WHERE department_id = dept_id;
         
         OPEN curs_employees;
         
         LOOP
            FETCH curs_employees INTO employee_id, employee_firstname, employee_lastname;
            EXIT WHEN curs_employees%NOTFOUND;
           
            DBMS_OUTPUT.PUT_LINE(employee_firstname || ' ' || employee_lastname);
         END LOOP;
         
         CLOSE c_employees;
      END IF;
   END LOOP;
 
   CLOSE c_departments;
END;
 
