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
                                    <h3><i class="fa fa-sign-in-alt"></i> Iniciar Sesión</h3>
                                    
                                    <div class="text-light">
                                        <?php
                                            if(isset($mensajeError)){
                                                //echo $mensajeError;
                                            //echo "<span class='glyphicon glyphicon-remove'> ".$mensajeError."</span>";
                                            
                                            echo "<i class='nav-icon fas fa-exclamation-circle text-light'></i>" ." ".$mensajeError;
                                                
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
                                          <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña" required>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Ingresar" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                                <div id="register-link" class="text-right">
								    <br>
                                        <a href="Vista/registro.php" class="text-info">Crear una cuenta</a>
                                
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
