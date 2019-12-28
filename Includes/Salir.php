<?php

    include_once 'ManejoSesion.php';

    $userSession = new manejoSession();
    $userSession->cerrarSesion();

    header("location: ../index.php");

?>