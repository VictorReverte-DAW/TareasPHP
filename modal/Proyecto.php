<?php

class Proyecto{
    private $db;
    private $proyecto;

    public function __construct(){
        $this->db=Conectar::conexion();
        $this->proyecto=array();
    }

    public function get_proyecto(){
        $consulta=$this->db->query("select * from proyecto;");
        while($filas=$consulta->fetch_assoc()){
            $this->proyecto[]=$filas;
        }
        return $this->proyecto;
    }

}
