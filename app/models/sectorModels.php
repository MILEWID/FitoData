<?php
class SectorModels extends Model{

    private $table = "sectores";
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
                $query = "SELECT * FROM {$this->table} WHERE id_sector = ?";
                $result = parent::query($query,[$id]);
                return $result[0];
            }
        } catch (Exception $th) {
            return $th->getMessage();
        }

    }

}