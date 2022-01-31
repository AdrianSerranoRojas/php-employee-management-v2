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

    function updateEmployee2(array $employee)
    {
        $id = intval($employee['id']);
        //$query = "UPDATE employees SET name =".$employee['name']." WHERE id = ".$employee['id'];
        //$query = "UPDATE `employees` SET `name` = 'Robert' WHERE `employees`.`id` = '1'";
        unset($employee['id']);
     $query ="UPDATE employees
    SET name = ?, LastName = ?, email = ?, gender = ?, city = ?, streetAddress = ?, state = ?, age = ?, postalCode = ?, phoneNumber = ?,
     WHERE id = ?;";
     $params = ["1"=>$employee["name"],
     "2"=>$employee["lastName"],
     "3"=>$employee["email"],
     "4"=>$employee["gender"],
     "5"=>$employee["city"],
     "6"=>$employee["streetAddress"],
     "7"=>$employee["state"],
     "8"=>$employee["age"],
     "9"=>$employee["postalCode"],
     "10"=>$employee["phoneNumber"],
     "11"=>$id
    ];
        //$query->bindParam(1, $employee["name"]);
        //$query->bindParam(2, $employee["email"]);
    // $query->bindParam(3, $employee["gender"]);
    // $query->bindParam(4, $employee["city"]);
    // $query->bindParam(5, $employee["streetAddress"]);
    // $query->bindParam(6, $employee["postalCode"]);
    // $query->bindParam(7, $employee["phoneNumber"]);
     //$query->bindParam(7, $employee["id"]);
        // $query = "UPDATE employees SET " .
        //     implode(', ', array_map(function ($key) {
        //         return "$key = :$key";
        //     }, array_keys($employee)))
        //     . " WHERE id = :id;";
        $employee['id'] = $id;
        try {
            $this->query($query,$params, false);
        } catch (PDOException $e) {
            print $e;
            return null;
        }
        return $employee;
    }

   
    public function  updateEmployee($formU, $id){
        // print_r($formU);
            $name=$formU["name"];
            $lastName=$formU["lastName"];
            $email=$formU["email"];
            $gender=$formU["gender"];
            $city=$formU["city"];
            $streetAddress=$formU["streetAddress"];
            $state=$formU["state"];
            $age=$formU["age"];
            $postalCode=$formU["postalCode"];
            $phoneNumber=$formU["phoneNumber"];
        try{
            $query= $this->db -> conn() -> prepare("UPDATE employees SET name='$name', lastName='$lastName', email='$email', gender='$gender', city='$city', streetAddress=$streetAddress, state='$state', age=$age, postalCode=$postalCode, phoneNumber =$phoneNumber  WHERE id=$id;");
             $query ->execute();
             $data= $query->fetchAll();
            return $data;
        }
        catch(PDOException $e){
            return false;
        }
    }
}

/* Ejecuta una sentencia preparada pasando un array de valores */



