<?php 
class employeeModels extends Model{
    
    private $table = "trabajador";
    function __construct()
    {
        parent::__construct();
    }

    function show(int $id = null){
        try {
            if($id === null){
                $query = "SELECT * FROM {$this->table}";
                $result = parent::query($query);
                return $result;
            }else{
                $query = "SELECT * FROM {$this->table} WHERE id_trabajor = ?";
                $result = parent::query($query,[$id]);
                return $result[0];
            }
        } catch (Exception $th) {
            return $th->getMessage();
        }

    }
    function add($data){
        try{
            $query = "INSERT INTO {$this->table}(nombres, apellidos, correo, telefono,cargo, contrasenia) VALUES(:names, :lastname, :email, :phone :type :password)";
            $result = Model::query($query, $data);
            if($result[0]){
                return ["ok", $result[1]]; 
            }else{
                return null;
            }
        }
        catch(Exception $error){
            return $error->getMessage();
        }
    }
}