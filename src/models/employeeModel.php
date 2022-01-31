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

    function updateEmployee(array $employee)
    {
        $id = $employee['id'];
        unset($employee['id']);

        $query = "UPDATE employees SET " .
            implode(', ', array_map(function ($key) {
                return "$key = :$key";
            }, array_keys($employee)))
            . " WHERE id = :id;";

        $employee['id'] = $id;

        try {
            $this->query($query, $employee, false);
        } catch (PDOException $e) {
            return null;
        }
        return $employee;
    }
}