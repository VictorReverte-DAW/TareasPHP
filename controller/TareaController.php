<?php

require_once("./modal/Tarea.php");
$tarea = new Tarea();
$rowset = $Tarea->get_Tarea();
require_once('view/index.php');