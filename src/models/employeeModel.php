<?php
class EmployeeModel extends Model
{
    function getEmployees() //OK
    {
        try {
            return $this->query("SELECT * FROM employees");
        } catch (PDOException $e) {
            return null;
        }
    }
    
    function getEmployee(string $id) //OK
    {
        try {
            return $this->query("SELECT * FROM employees WHERE id = ?", [$id])[0];
        } catch (PDOException $e) {
            return null;
        }
    }

}