<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 29/05/2015
 * Time: 04:41 PM
 */

include 'global.php';

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
$categoria = $_POST["categoria"];
$consola = $_POST["consola"];
$imagen_anterior = $_POST["imagenAnterior"];
$file =  basename($_FILES["img1"]["name"]);

if($file === ''){

$query = "UPDATE juegos SET nombre = '$nombre', precio = '$precio', cantidad = '$cantidad', categoria_id = '$categoria', consola_id = '$consola' WHERE id = $id";    
    ejecutar_query($query);
    header("Location: ../juegos.php");

} else {
    if (is_uploaded_file($_FILES['img1']['tmp_name'])) {

        //recojo la imagen
        $imagen = $_FILES['img1']['name'];
        //Obtengo el nombre de la imagen y la extensi�n de la foto
        $imagen1 = explode(".", $imagen);

        if (($imagen1[1] == "jpg") || ($imagen1[1] == "png")) {
            //Genero un nombre aleatorio con n�meros y se asigno la extensi�n obtenida anteriormente
            $imagen2 = rand(0, 9) . rand(100, 9999) . rand(100, 9999) . "." . $imagen1[1];
            //Coloco la imagen en la carpeta correspondiente con el nuevo nombre
            move_uploaded_file($_FILES['img1']['tmp_name'], "../images/games/" . $imagen2);
            //Asigno a la foto permisos
            $ruta = "images/games/" . $imagen2;

            $query = "UPDATE juegos SET nombre = '$nombre', precio = '$precio', cantidad = '$cantidad', imagen = '$ruta', categoria_id = '$categoria', consola_id = '$consola' WHERE id = $id";
            ejecutar_query($query);
            unlink("../".$imagen_anterior);
            header("Location: ../juegos.php");

        } else {
            header('location: ../mensajes.php?msg=3');
        }
    }else{
        header('location: ../mensajes.php?msg=4');
    }

}
