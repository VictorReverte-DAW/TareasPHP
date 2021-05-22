<?php

class Tarea{
    private $db;
    private $tarea;

    public function __construct(){
        $this->db=Conectar::conexion();
        $this->tarea=array();
    }

    public function get_proyecto(){
        $consulta=$this->db->query("select * from tarea;");
        while($filas=$consulta->fetch_assoc()){
            $this->tarea[]=$filas;
        }
        return $this->tarea;
    }

}
