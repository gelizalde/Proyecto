<?php
    include_once 'Includes/constantes.php';
    require_once $_SERVER['DOCUMENT_ROOT'].Constantes::ruta."/Includes/ManejoSesion.php";
    require_once $_SERVER['DOCUMENT_ROOT'].Constantes::ruta."/Modelo/OBJECT/usuario.php";
    require_once $_SERVER['DOCUMENT_ROOT'].Constantes::ruta."/Modelo/BO/UsuarioModel.php";

    $userSession = new manejoSession();


    if(isset($_SESSION['usuario'])){
    
        include_once 'Vista/principal.php';
    }else if(isset($_POST['usuario']) && isset($_POST['pass'])){
        $userx =  sha1($_POST['usuario']);
        $passx = sha1($_POST['pass']);
        $objModel = new usuarioModel();  
        $usuario = new Usuario("","","","","","", $userx,$passx);
        $usuarioAux = $objModel->validarUsuario($usuario); 
        
        if($usuarioAux->getBandera() == "true"){
            include_once 'Vista/principal.php';
         }else{
            $mensajeError = "Verifique sus credenciales";
            include_once 'Vista/inicio.php';
         }
    }else{
        include_once 'Vista/inicio.php';
    }
  
?>