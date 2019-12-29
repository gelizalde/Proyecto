<?php
       include_once '../Includes/constantes.php';
       require_once $_SERVER['DOCUMENT_ROOT'].Constantes::ruta.'/Includes/registroUsuario.php';
      // include_once '../Includes/registroUsuario.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/Proyecto/Assets/css/login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="../Assets/css/all.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<!------ Include the above in your HEAD tag ---------->

	
	<title>Login Page</title>
</head>


<body>

<div class="container">
    <br>
    <h2 class="text-center"></h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                <!--Form with header-->

                <form action="" method="post">
              
                    <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                                <h3><i class="fa fa-plus-circle"></i> Registro</h3>
                                    <div class="text-light">
                                        <?php
                                           // unset($mensajeError);
                                            if(isset($mensajeError)){
                                          
                                              echo "<i class='nav-icon fas fa-exclamation-circle text-light'></i>" . " ".$mensajeError;
                                              echo "<br>";
                                              echo  "<a href='../Index.php' class='text-light'>Regresar al inicio de sesión</a>";
                                            }
                                        ?>
                                    </div>

                                    
                            </div>
                        </div>
                        <div class="card-body p-3">

                            <!--Body-->
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="paterno" name="paterno" placeholder="Apellido Paterno" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="materno" name="materno" placeholder="Apellido Materno" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                    </div>
                                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="user" name="user" placeholder="Usuario" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-key text-info"></i></div>
                                    </div>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" value="Enviar" class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>

                    </div>
                </form>
                <!--Form with header-->


                </div>
	</div>
</div>

</body>
</html>

