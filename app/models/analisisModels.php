<?php

class EstudioModels extends Model{

    private $table = "analisis_estudio";
    function __construct()
    {
        parent::__construct();
    }

    
    function add($data){
        try{
            $query = "INSERT INTO {$this->table}(id_estudio, arbol, fruto, incidencia, severidad) VALUES(? , ? , ?, ?, ?)";
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