<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author Asnay
 */

include_once '../BD/Conexion.php';

class Persona {
    
    private $nombre;
    private $apellidos;
    private $ci;
    private $telefono;
    private $edad;

   
    
    function __construct($nombre, $apellidos, $ci, $telefono, $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->ci = $ci;
        $this->telefono = $telefono;
        $this->edad = $edad;
    }

    public function Insertar_Persona() {
        Conexion::Conectar();
        $consulta = "INSERT INTO `datos_persona` (`Nombre`, `Apellidos` ,`Ci`, `Telefono`, `Edad`) 
                    VALUES('$this->nombre ',' $this->apellidos', '$this->ci', '$this->telefono' , '$this->edad')";
        
        Conexion::Consultar($consulta);
        Conexion::Desconectar();
    }

    public static function Mostrar_Persona() {
        Conexion::Conectar();
        $arrobjetos = NULL;
        $consulta = "SELECT * FROM `datos_persona` LIMIT 0, 30 ";
        $resultado = Conexion::Consultar($consulta);
        if( Conexion::numero_de_filas($resultado) != 0 ){
            $arrobjetos = Conexion::ResultadoConsultarAObjeto($resultado);
         }
        Conexion::Desconectar();
        return $arrobjetos;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getCi() {
        return $this->ci;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setCi($ci) {
        $this->ci = $ci;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }


    
    
}
