<?php
include_once 'Modelo/OBJECT/usuario.php';
class UsuarioDAO{
    public function validaUsuario ($Usuario){
        $file = 'Modelo/DAO/Datos.txt';
        $file_lines = file($file);
        
        $userOBJ = null;
        
         foreach ($file_lines as $line) {
            $datos = explode(",", $line);
            if( trim($datos[5]) == $Usuario->getUsuario() && trim($datos[6]) == $Usuario->getContrasenia() ) {
                $bandera = "true";
                $userOBJ = new Usuario($datos[0],$datos[1],$datos[2], $datos[3],$datos[4],$bandera, $datos[5],$datos[6]);
                break;
            }else{
                $bandera = "false";
                $userOBJ = new Usuario("","","", "","", $bandera, "","");
            }
           
        }

        return  $userOBJ;
    }

    public function EscribirArchivo ($Persona){
        
    }
}


?>


