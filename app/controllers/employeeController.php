<?php 
require_once MODELS.'employeeModels.php';

class EmployeeController extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->employeeModel = new EmployeeModels();
    }

    function index(){
        parent::render('empleados/index');
    }
    
    function add(){
        $employee = [
            "names" => filter_var($_POST["nombres"],FILTER_SANITIZE_STRING), 
            "lastname" => filter_var($_POST["apellidos"],FILTER_SANITIZE_STRING), 
            "email" => filter_var($_POST["correo"],FILTER_SANITIZE_STRING),
            "phone" => filter_var($_POST["telefono"],FILTER_SANITIZE_STRING), 
            "type" => filter_var($_POST["cargo"],FILTER_SANITIZE_STRING),
            "password" => filter_var($_POST["contrasenia"],FILTER_SANITIZE_STRING),
        ];
        foreach($employee as $key => $data_employee){
            if(empty($data_employee)){
                print_message_json(404,"Todos los campos son requeridos");
                return;
            }
        }
        $resultQuery = $this->employeeModel->add($employee);
        if($resultQuery[0] == "ok"){

        }else{

        }

    }
}