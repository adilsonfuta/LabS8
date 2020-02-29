<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once "config.php";

class Conexion{
   
    public static function Conectar(){
       //mysql_connect($this->server, $this->user , $this->paswd);
       //mysql_select_db($this->basedato);
       
       if (!isset($conexion)) {
            $conexion = (mysql_connect(DB_HOST, DB_USER , DB_PASS)) or die(mysql_error());
            mysql_select_db(DB_NAME, $conexion) or die(mysql_error());
        }
    }
    
    public static function Desconectar(){
       mysql_close();
    }
    
     public static function Consultar($query){
       $resultado = mysql_query($query);  
       if(!$resultado){
        echo 'MySQL Error--: ' . mysql_error();
       exit;
       }
       return $resultado;
    }
    
     public static function ResultadoConsultarAObjeto($resultado){
        $array = array();
        while ($obj = mysql_fetch_object($resultado)) {
            $array[] = $obj;
        }
        return $array;
    }
    
     // METODO PARA CONTAR EL NUMERO DE FILAS DEVUELTAS
     public static function numero_de_filas($result) {
        if (!is_resource($result))
            return false;
        return mysql_num_rows($result);
    }

}
