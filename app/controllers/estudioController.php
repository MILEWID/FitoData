<?php 
class EstudioController extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->estudioModel = new EstudioModels();
    }

    function index(){
        
    }
    function add(){
        $date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
        $id_employee = filter_var($_POST['idtrabajador'],FILTER_SANITIZE_STRING);
        $id_cultivo = filter_var($_POST['idcultivo'],FILTER_SANITIZE_STRING);

        $estudio = array($date, $id_employee, $id_cultivo);
        $result = $this->estudioModel->add($estudio);

        if($result[0] == "ok"){
            redirect_to("estudio");
        }else{
            print_message_json(500, "Error interno, intentelo mas tarde");
        }
    }
}