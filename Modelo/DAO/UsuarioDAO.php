<?php
//include_once 'Modelo/OBJECT/usuario.php';
require_once $_SERVER['DOCUMENT_ROOT'].Constantes::ruta."/Modelo/OBJECT/usuario.php";
class UsuarioDAO{
    public function validaUsuario ($Usuario){
        /*$file = 'Modelo/DAO/Datos.txt';
        $file_lines = file($file);
        $bandera = "";
        $userOBJ = null;
        foreach ($file_lines as $line) {
            $datos = explode(",", $line);
            //if( trim($datos[5]) == $Usuario->getUsuario() && trim($datos[6]) == $Usuario->getContrasenia() ) {
               /* $bandera = "true";
                $userOBJ = new Usuario($datos[0],$datos[1],$datos[2], $datos[3],$datos[4],$bandera, $datos[5],$datos[6]);
                break;*/
                /*if(1==1){
                print $datos[0];
                print $datos[1];
                print $datos[2];
                print $datos[3];
                print $datos[4];
                print $datos[5];
                print $datos[6];
                print $datos[7];
            }else{
                $bandera = "false";
                $userOBJ = new Usuario("","","", "","", $bandera, "","");
            }
        }*/

        $file = 'Modelo/DAO/Datos.txt';
        $fn = fopen($file,"r");
        while(! feof($fn))  {
          
          $result = trim(fgets($fn));
         

            if( empty ( $result) || strlen($result) == 0){
                continue;
            }else{
                $datos = explode(",", $result);

                if( trim($datos[5]) == $Usuario->getUsuario() && trim($datos[6]) == $Usuario->getContrasenia() ) {
                    $bandera = "true";
                    $userOBJ = new Usuario($datos[0],$datos[1],$datos[2], $datos[3],$datos[4],$bandera, $datos[5],$datos[6]);
                    break;
                }else{
                    $bandera = "false";
                    $userOBJ = new Usuario("","","", "","", $bandera, "","");
                }
            }

        }
      
        fclose($fn);
        return  $userOBJ;
    }

    public function escribirArchivo ($Usuario){
        
        $salida = "";

        try {
            $fichero = '../Modelo/DAO/Datos.txt';
            $txt = $Usuario->getNombre().",".$Usuario->getApellidoPaterno().",".$Usuario->getApellidoMaterno().",".$Usuario->getCorreo().",".$Usuario->getTelefono().",".$Usuario->getUsuario().",". $Usuario->getContrasenia()."\n";
            file_put_contents($fichero, $txt, FILE_APPEND | LOCK_EX);
            $salida = "Usuario Creado con exito";
        } catch (Exception $e) {
            $salida = $e->getMessage();
        } 

        return $salida;


    }
}


?>


