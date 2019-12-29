<?php

require_once $_SERVER['DOCUMENT_ROOT'].Constantes::ruta."/Modelo/DAO/UsuarioDAO.php";
class usuarioModel {

    public function validarUsuario($usuario){
        $objDao = new UsuarioDAO();
        $respuesta  = $objDao->validaUsuario($usuario);
        return $respuesta;
    }

    public function crearUsuario($usuario){
        $objDao = new UsuarioDAO();
        $respuesta  = $objDao->escribirArchivo($usuario);
        return $respuesta;
    }
}
    

?>