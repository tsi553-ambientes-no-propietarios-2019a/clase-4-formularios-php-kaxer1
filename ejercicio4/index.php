<?php

/**
 * Problema Propuesto:
 * Desarrollar un formulario que simule el registro de un usuario (archivo index.php). 
 * El formulario debe solicitar el nombre de usuario y la clave en dos oportunidades. 
 * El formulario debe ser procesado por el archivo validarRegistro.php. Este archivo
 * debe implementar una función que permita validar si las dos contraseñas coinciden. 
 * Si las contraseñas coinciden, se debe redirigir al archivo "registroCorrecto.php"
 * Si las contraseñas no coinciden, se debe redirigir al index.php y mostrar el mensaje
 * "Las contrseñas no coinciden".
 */



?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 4</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

	<br>
    <br>

    <h1> <center> INICIAR SESIÓN </center> </h1>
    <br>

    <form action="index.php" method="POST">
    <div class="container">
        <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm-5">
            <div class="form-group row">
                <label for="inputUser" class="col-sm-2 col-form-label">User</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="id_user" placeholder="User">
            </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="id_pass" placeholder="Password">
            </div>
            </div>
            	<center>
                	<input type="submit" class="btn btn-primary mb-2" name="ingresar" value="Ingresar">
            	</center>
        </div>
        <div class="col-sm">
            
        </div>
        </div>
    </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>