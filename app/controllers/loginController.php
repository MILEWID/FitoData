<?php
require_once MODELS.'employeeModels.php';

class LoginController extends Controller{
    
    function __construct()
    {
        parent::__construct();
        $this->loginModel = new EmployeeModels();
    }

    function index(){
        parent::render('php/index');
    }
    
    function login(){
        $email = filter_var($_POST['loginconrreo'], FILTER_SANITIZE_EMAIL);
        $password = filter_var($_POST['logincontrasenia'], FILTER_SANITIZE_STRING);
        if(!empty($email) || empty(!$password)){    
            $queryModel = $this->loginModel->show();
            if($queryModel["correo"] == $email && $queryModel['contrasenia'] == $password){
                redirect_to("employee");
            }
        }else{
            redirect_to('login?st=1');
        }
    }
}