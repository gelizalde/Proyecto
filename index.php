<?php
    include_once 'Includes/ManejoSesion.php';
    include_once 'Modelo/OBJECT/usuario.php';
    require_once "Modelo/BO/UsuarioModel.php";
    $userSession = new manejoSession();


    if(isset($_SESSION['usuario'])){
    
    
    }else if(isset($_POST['usuario']) && isset($_POST['pass'])){
        $userx =  $_POST['usuario'];
        $passx = sha1($_POST['pass']);
        //($nombre,$apellidoPaterno,$apellidoMaterno, $correo,$telefono,$bandera,$usuario,$contrasenia) {
        $usuario = new Usuario("","","", "","","", $userx,$passx);
        $objModel = new usuarioModel();    
        $usuarioAux = $objModel->validarUsuario($usuario);

        if($usuarioAux->getBandera() == "true"){
            include_once 'Vista/principal.php';
         }else{
            $mensajeError = "Verifique sus credenciales";
            include_once 'Vista/inicio2.php';
         }

       
    }else{
        include_once 'Vista/inicio2.php';
    }
?>