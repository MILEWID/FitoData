<?php 
require_once MODELS.'estudioModels.php';
require_once MODELS.'sectorModels.php';
require_once MODELS.'employeeModels.php';

class EstudioController extends Controller{

    function __construct()
    {
        parent::__construct();
        $this->estudioModel = new EstudioModels();
    }

    function index(){
        $sectorModels = new SectorModels();
        $empleadoModels = new employeeModels();


        $queryEmpleados = $empleadoModels->show();
        $querySector= $sectorModels->show();
        parent::render("estudio/index",[$queryEmpleados, $querySector]);
    }
    function add(){
        $date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
        $id_employee = filter_var($_POST['idtrabajador'],FILTER_SANITIZE_STRING);
        $id_cultivo = filter_var($_POST['idcultivo'],FILTER_SANITIZE_STRING);

        $estudio = array("date" => $date, "id_em" => $id_employee, "id_cul" => $id_cultivo);
        $result = $this->estudioModel->add($estudio);

        if($result == "ok"){
            redirect_to("estudio");
        }else{
            print_message_json(500, "Error interno, intentelo mas tarde");
        }
    }
}