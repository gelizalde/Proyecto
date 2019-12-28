<?php

require_once "Modelo/DAO/UsuarioDAO.php";
class usuarioModel {

    public function validarUsuario($usuario){
        $objDao = new UsuarioDAO();
        $respuesta  = $objDao->validaUsuario($usuario);
        return $respuesta;
    }

    public function crearUsuario($usuario){
        
    }
}
    

?>