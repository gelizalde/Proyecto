<?php
  include_once $_SERVER['DOCUMENT_ROOT'].Constantes::ruta."/Includes/ManejoSesion.php";
   require_once $_SERVER['DOCUMENT_ROOT'].Constantes::ruta."/Modelo/OBJECT/usuario.php";
   require_once $_SERVER['DOCUMENT_ROOT'].Constantes::ruta."/Modelo/BO/UsuarioModel.php";
   $mensajeError = "";
    if(isset($_POST['nombre']) 
        && isset($_POST['paterno']) 
            && isset($_POST['materno'])
                && isset($_POST['email']) 
                    && isset($_POST['telefono']) 
                       && isset($_POST['user'])
                          &&  isset($_POST['password'])
                        ){

     if(is_numeric($_POST['telefono']) == false 
            ||   strlen ($_POST['telefono']) < 8 
                ||  strlen ($_POST['telefono']) > 10 ||  strlen ($_POST['telefono']) == 9 ){
        $mensajeError = "Ingrese un telefono valido";
     }else{
         
        $userSession = new manejoSession();
        $nombre = trim($_POST['nombre']);
        $apellidoPaterno = trim($_POST['paterno']);
        $apellidoMaterno = trim($_POST['materno']);
        $correo = trim($_POST['email']);
        $telefono = trim($_POST['telefono']);
        $bandera = "";
        $usuario = sha1(trim($_POST['user']));
        $contrasenia = sha1(trim($_POST['password']));


        $miUsuario = new Usuario($nombre,$apellidoPaterno, $apellidoMaterno, $correo, $telefono, $bandera , $usuario, $contrasenia);
        $objUser = new usuarioModel();
        $mensajeError =  $objUser->crearUsuario($miUsuario);

     }

    
    }
?>