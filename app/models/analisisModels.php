<?php

class EstudioAnalisisModels extends Model{

    private $table = "analisis_estudio";
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
                $query = "SELECT * FROM {$this->table} WHERE id_analisis = ?";
                $result = parent::query($query,[$id]);
                return $result[0];
            }
        } catch (Exception $th) {
            return $th->getMessage();
        }

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