<?php

//creamos un header para obtener
header('Content-Type: application/json');

//para obtener los fichros de la carpeta 
require_once("../config/conexion.php");
require_once("../models/Categoria.php");

//se instancia un objeto de la clase categoria para poder utilizarlo en el switch
$caregoria = new Categoria();

$body = json_decode(file_get_contents("php://input"), true);

//switch para crear el caso que nos devolvera los datos de la tabla categoria
switch ($_GET["op"]) {
    case 'obtenertodos':
        $datos = $caregoria->get_categorias();
        echo json_encode($datos);
        break;

    case 'obtenerporid':
        $datos = $caregoria->get_categoria_id($body["cat_id"]);
        echo json_encode($datos);
        break;

    case 'insert':
        $datos = $caregoria->insert_categoria($body["cat_nombre"], $body["cat_observacion"]);
        echo 'Se inserto correctamente';
        break;

    case 'update':
        $datos = $caregoria->update_categoria($body["cat_id"],$body["cat_nombre"], $body["cat_observacion"]);
        echo 'Se actualizo correctamente';
        break;    
    
    case 'delete':
        $datos = $caregoria->delete_categoria($body["cat_id"]);
        echo 'Se borro correctamente';
        break;  
}