<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../Modelos/Persona.php';



$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$ci = $_POST["ci"];
$telf = $_POST["telf"];
$edad = $_POST["edad"];

if (Valida($nombre, $apellido, $ci, $telf, $edad)) {
    $persona = new Persona($nombre, $apellido, $ci,  $telf, $edad );
    $persona->Insertar_Persona();
    header('Location: ../public_pages/ListadoPersonas.php');
}

function Valida($nombre, $apellido, $ci, $telf, $edad)
{
    return TRUE;
}

?>