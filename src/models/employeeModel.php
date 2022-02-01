<?php
class EmployeeModel extends Model
{

    function addEmployee(array $employee)
    {
        $query = "INSERT INTO employees (" . implode(', ', array_keys($employee)) . ") VALUES " .
            '(' . implode(', ', array_map(function ($key) {
                return ":$key";
            }, array_keys($employee))) . ')';

        try {
            $this->query($query, $employee, false);
            return $this->query("SELECT * FROM employees WHERE phoneNumber = ?", [$employee['phoneNumber']])[0];
        } catch (PDOException $e) {
            print_r($e);
            return null;
        }
    }

    function deleteEmployee(string $id){

        try{
            $this->query("DELETE FROM employees WHERE id = ?", [$id],false);
        }catch (PDOException $e) {
            print_r($e);
            return null;
        }
    }


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

    function updateEmployee2(array $employee)
    {
        $id = $employee['id'];
        unset($employee['id']);

        $name=$employee["name"];
        $lastName=$employee["lastName"];
        $email=$employee["email"];
        $gender=$employee["gender"];
        $city=$employee["city"];
        $streetAddress=$employee["streetAddress"];
        $state=$employee["state"];
        $age=$employee["age"];
        $postalCode=$employee["postalCode"];
        $phoneNumber=$employee["phoneNumber"];

        $query = "UPDATE employees SET name = ?, lastName = ?, email = ?, gender= ? , city= ? , streetAddress= ? , state= ? , age= ? , postalCode= ? , phoneNumber = ?  WHERE id= ? ;";

        $employee['id'] = $id;

        try {
            $this->query($query, [$name,$lastName,$email,$gender,$city,$streetAddress,$state,$age,$postalCode,$phoneNumber,$id], true);
        } catch (PDOException $e) {
            print_r($e);
            return null;
        }
        return $employee;
    }



    // function updateEmployee3(array $employee) //ok
    // {
    //     $id = $employee['id'];
    //     unset($employee['id']);

    //     $query = "UPDATE employees SET " .
    //         implode(', ', array_map(function ($key) {
    //             return "$key = :$key";
    //         }, array_keys($employee)))
    //         . " WHERE id = :id;";

    //     $employee['id'] = $id;

    //     try {
    //         $this->query($query, $employee, false);
    //     } catch (PDOException $e) {
    //         return null;
    //     }
    //     return $employee;
    // }

    // public function  updateEmployee($employee, $id){
    //     // print_r($employee);
    //         $name=$employee["name"];
    //         $lastName=$employee["lastName"];
    //         $email=$employee["email"];
    //         $gender=$employee["gender"];
    //         $city=$employee["city"];
    //         $streetAddress=$employee["streetAddress"];
    //         $state=$employee["state"];
    //         $age=$employee["age"];
    //         $postalCode=$employee["postalCode"];
    //         $phoneNumber=$employee["phoneNumber"];
    //     try{
    //         $query= $this->db -> conn() -> prepare("UPDATE employees SET name='$name', lastName='$lastName', email='$email', gender='$gender', city='$city', streetAddress=$streetAddress, state='$state', age=$age, postalCode=$postalCode, phoneNumber =$phoneNumber  WHERE id=$id;");
    //         $query ->execute();
    //         $data= $query->fetchAll();
    //         return $data;
    //     }
    //     catch(PDOException $e){
    //         return false;
    //     }
    // }
}


