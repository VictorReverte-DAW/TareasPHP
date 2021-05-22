<?php

class TareaController{
    var $Tarea;

    function __construct(){
        $this->Tarea = [
            1 => new Tarea(1,"TareaController","Incompleto",1)
        ];
    }

    public function index(){
        $rowset  = $this ->tarea;

        require('view/index.php');
    }
}