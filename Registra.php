<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Registrate</title>
    <link rel="stylesheet" href="styles/ingresa.css"/>
    <link rel="stylesheet" href="styles/tables.css"/>
    <link rel="stylesheet" href="styles/formulario.css"/>
    <script type="text/javascript" src="scripts/register.js"></script>
</head>
<body>

<?php include '_header.php' ?>

<section id="content">
    <div class="container_12">
        <h1>Registro de usuarios</h1>
        <form action="daos/registro.php" method="post" name="fValida" onsubmit="return validar()">
             <div class="formulario">
                <div class="column">


                    <label>NOMBRE </label><input type="text" id="Nombre" name="Nombre" class="form-input" ><br>


                    <label>APELLIDO </label><input type="text" id="Apellidos" name="Apellidos" class="form-input" ><br>


                    <label>CORREO ELECTRONICO </label><input type="text" id="email" name="email" class="form-input" ><br>


                    <label>CONTRASEÑA </label><input type="password" id="password" name="password" class="form-input" ><br>


                    <label>REPETIR CONTRASEÑA </label><input type="password" id="password2" name="password2" class="form-input" ><br>


                    <input type="hidden" id="admin" name="admin" value='0' class="form-input" ><br>


                </div>
                
                <input  type="submit" id="modificar" name="modificar" value="Registrar" class="form-btn">
            
            </div>
        </form>
    </div>
</section>

<?php include '_footer.php' ?>

</body>
</html>