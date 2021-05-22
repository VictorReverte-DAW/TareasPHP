<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "tareaphp");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
