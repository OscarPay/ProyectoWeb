<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Ingresa</title>

    <link rel="stylesheet" href="styles/ingresa.css"/>
    <script type="text/javascript" src="scripts/login.js"></script>
</head>
<body>

    <?php include '_header.php' ?>

    <nav>
        <ul class="menu">
            <li class="current"><a href="index.php">Home</a></li>
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Catalogo</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
        <div class="clear"></div>
    </nav>

    <section id="content">
        <div class="container_12">
        <h1>Inicia Sesión</h1>

        <form action="daos/login.php" method="post" onsubmit="return validar()">
            <table>
                <tr>
                    <td>
                        <label for="usuario">Usuario:</label>
                    </td>
                    <td>
                        <input id="usuario" name="usuario" type="text" required/>
                    </td>
                </tr>
                <tr>
                    <td><p></p></td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Contraseña:</label>
                    </td>
                    <td>
                        <input id="password" name="password" type="password" required/>
                    </td>
                </tr>
            </table>
           <p></p>
            <input type="submit" class="button" value="Entrar"/>
            <input type="button" class="button" id="registrate"  value="Registrate!"/>
        </form>
        </div>
    </section>

    <!--==============================content================================-->
    <footer>
        <p id="copyright">&copy; 2015 Game Center</p>
    </footer>

</body>
</html>