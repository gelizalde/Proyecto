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
<link rel="stylesheet" href="Assets/css/all.min.css">
<!------ Include the above in your HEAD tag ---------->

	
	<title>Login Page</title>
</head>


<body>

<div class="login">
<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Iniciar Sesión</h3>
                            <div class="text-danger">
                                <?php
                                    if(isset($mensajeError)){
                                        //echo $mensajeError;
                                       //echo "<span class='glyphicon glyphicon-remove'> ".$mensajeError."</span>";
                                      
                                       echo "<i class='nav-icon fas fa-exclamation-circle text-danger'></i>" .$mensajeError;
                                        
                                    }
                                ?>
                            </div>
                            <div class="form-group">
                                <label for="usuario" class="text-info">Usuario:</label><br>
                                <input type="text" name="usuario" id="usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pass" class="text-info">Contraseña:</label><br>
                                <input type="password" name="pass" id="pass" class="form-control">
                            </div>
                 			<div class="form-group">
                                <!--<label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>-->
								<input id = "ingresar" type="submit" name="submit" class="btn btn-info btn-md" value="Ingresar">
							</div>
                            <div id="register-link" class="text-right">
								<br>
                                <a href="" class="text-info" data-toggle="modal" data-target="#modalRegisterForm" >Crear una cuenta</a>
                                <div class="text-center">
                                    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
                                        Modal Register Form</a>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
