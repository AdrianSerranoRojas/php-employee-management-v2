<?php 

class EmployeeController extends Controller
{
    function __construct()
    {
     parent::__construct();
     $this->loadModel("employee");
    }
/** THE FOLLOWING METHODS ARE INTENDED TO RENDER A VIEW */
    function dashboard()
    {
        $this->view->render("employee/dashboard");
    }

    function show($id)
    {
        $this->view->employee = $this->model->getEmployee($id);
        $this->view->render("employee/employee");
    }

    function show2()
    {
        $this->view->render("employee/employee");
    }

    function updateEmployee()
    {
        $employee = $_POST;
        echo "<pret>";
        print_r($employee);
        echo "<pret>";
        $this->view->employee = $this->model->updateEmployee2($employee);
        $this->view->render("employee/dashboard");
    }

    function addEmployee2()
    {
        $employee = $_POST;
        $newEmployee = $this->model->addEmployee($employee);
        $this->view->render("employee/dashboard");
    }

/** THE FOLLOWING METHODS WILL BE CALLED THROUGH AJAX */

    function deleteEmployee($id)
    {
        $this->model->deleteEmployee($id);
    }

    function addEmployee()
    {
        $employee = json_decode(file_get_contents("php://input"), true);
        $newEmployee = $this->model->addEmployee($employee);
        echo json_encode($newEmployee);
    }

    function getEmployees()
    {
        echo json_encode($this->model->getEmployees());
    }

    function modifyEmployee()
    {
        $employee = json_decode(file_get_contents("php://input"), true);
        if (!isset($employee['id'])) {
            $this->throw_error(401, "Bad Request");
        }
        $newEmployee = $this->model->updateEmployee2($employee);
        echo json_encode($newEmployee);
    }
}