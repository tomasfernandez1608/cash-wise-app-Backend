<?php
include_once "cors.php";
include_once "funciones.php";


if (!isset($_GET["id"])) {
    echo json_encode(null);
    exit;
}

$id = $_GET["id"];


$operaciones = obtenerOperaciones($id);
echo json_encode($operaciones);
?>