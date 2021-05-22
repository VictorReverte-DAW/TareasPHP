<?php

require_once("./modal/Proyecto.php");

$proyecto = new Proyecto();
$rowset = $proyecto->get_proyecto();
require_once('view/index.php');
