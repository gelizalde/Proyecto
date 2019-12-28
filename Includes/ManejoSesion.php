<?php

class manejoSession{

    public function __construct(){
        session_start();
    }

    public function setUsuarioSesion($user){
        $_SESSION['usuario'] = $user;
    }

    public function getUsurarioSesion(){
        return $_SESSION['usuario'];
    }

    public function cerrarSesion(){
        session_unset();
        session_destroy();
    }
}


?>