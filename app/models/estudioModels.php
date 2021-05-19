<?php
class EstudioModels extends Model{

    private $table = "estudio";
    function __construct()
    {
        parent::__construct();
    }

    function add($data){
        try{
            $query = "INSERT INTO {$this->table}(fecha, id_trabajador, id_cultivo) VALUES(? , ? , ?)";
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