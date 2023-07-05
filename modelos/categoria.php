<?php

    require_once "./configuracion/conexion.php";

    class Categotia{

        public function __construct()
        {
            
        }

        public function insertar($nombre, $descripcion){
            // se crea nueva categoria por default es 1
            $sql = "INSERT INTO categoria (nombre, descripcion, condicion) VALUES ('$nombre','$descripcion','1');";
            return ejecutarConsulta($sql);
        }

        public function editar($idcategoria, $nombre, $descripcion){
            $sql = "UPDATE categoria SET nombre ='$nombre', descripcion = '$descripcion' WHERE idcategoria = '$idcategoria';";
            return ejecutarConsulta($sql);
        }

        public function activar($idcategoria){
            $sql = "UPDATE categoria SET condicion = '0' WHERE idcategoria = '$idcategoria';";
            return ejecutarConsulta($sql);
        }

    }

?>