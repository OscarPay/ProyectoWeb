<?php
/**
 * Created by PhpStorm.
 * User: Hyuchiha
 * Date: 13/05/2015
 * Time: 07:04 PM
 */

include 'daos/show_all_juegos.php';

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="styles/index.css"/>
    <link rel="stylesheet" href="styles/catalogo.css"/>
</head>
<body>

    <?php include '_header.php' ?>

    <center>

    <div class="catalogo">
        <ul class="catalog-list" id="triple">
            <?php foreach($juegos as $juego): ?>
                <li>
                    <div class="Catalog-Item">
                        <div class="Game-Image"><img src=" <?php echo $juego['imagen'] ?> "></div>
                        <div class="Catalog-Title"><h1><?php echo $juego['nombre'] ?></h1></div>
                        <div class="Catalog-Category"><h2>Categoria: <?php echo $juego['categoria_id'] ?></h2></div>
                        <div class="Catalog-Console"><h3>Disponible para: <?php echo $juego['consola_id'] ?></h3></div>
                        <div class="Catalog-Price"><h3>Precio: <?php echo $juego['precio'] ?></h3></div>

                        <button onclick="location.href = 'Juego.html';">Comprar</button>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    </center>

<?php include '_footer.php' ?>
</body>
</html>