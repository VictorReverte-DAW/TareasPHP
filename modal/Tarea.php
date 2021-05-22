<?php

class Tarea{
    private $ID;
    private $Nombre;
    private $Estado;
    private $ID_Proyecto;

    /**
     * Get the value of ID
     */
    public function getID(){
        return $this->ID;
    }

    /**
     * Set the value of ID
     *
     * @return  self
     */
    public function setID($ID){
        $this->ID = $ID;

        return $this;
    }

    /**
     * Get the value of Nombre
     */
    public function getNombre(){
        return $this->Nombre;
    }

    /**
     * Set the value of Nombre
     *
     * @return  self
     */
    public function setNombre($Nombre){
        $this->Nombre = $Nombre;

        return $this;
    }

    /**
     * Get the value of Estado
     */
    public function getEstado(){
        return $this->Estado;
    }

    /**
     * Set the value of Estado
     *
     * @return  self
     */
    public function setEstado($Estado){
        $this->Estado = $Estado;

        return $this;
    }

    /**
     * Get the value of ID_Proyecto
     */
    public function getID_Proyecto(){
        return $this->ID_Proyecto;
    }

    /**
     * Set the value of ID_Proyecto
     *
     * @return  self
     */
    public function setID_Proyecto($ID_Proyecto){
        $this->ID_Proyecto = $ID_Proyecto;

        return $this;
    }
}
