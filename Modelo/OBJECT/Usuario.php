<?php
class Usuario {

    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $telefono;
    private $correo;
    private $usuario;
    private $contrasenia;
    private $bandera;
    


      function __construct($nombre,$apellidoPaterno,$apellidoMaterno, $correo,$telefono,$bandera,$usuario,$contrasenia) {
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->bandera = $bandera;
        $this->usuario = $usuario;
        $this->contrasenia = $contrasenia;
      }


    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidoPaterno()
    {
        return $this->apellidoPaterno;
    }


    public function getApellidoMaterno()
    {
        return $this->apellidoMaterno;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }



    public function getUsuario()
    {
        return $this->usuario;
    }


    public function getContrasenia()
    {
        return $this->contrasenia;
    }

    
    public function getBandera()
    {
        return $this->bandera;
    }

    public function getCorreo()
    {
        return $this->correo;
    }
}
?>