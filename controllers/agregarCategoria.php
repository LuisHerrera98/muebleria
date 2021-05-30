
<?php
$categoria = $_POST['categoria'];
$tipo = "tipo1";
echo "$categoria";
include_once "conexion.php";

$query = "INSERT INTO categorias (categoria,tipo) values ('" . $categoria . "','" . $tipo . "');";
$res = mysqli_query($conexion, $query);

/*






        

$mensaje = "Categoria creada con exito!!"

header("Location:../views/creado.php?mensaje=$mensaje");

$categoria=$_POST['categoria'];

    if (isset($_FILES['foto']['name'])) {
        $tipoArchivo = $_FILES['foto']['type'];
        $permitido=array("image/png","image/jpeg");
        if( in_array($tipoArchivo,$permitido) ==false ){
            die("Archivo no permitido");
            }
        $nombreArchivo = $_FILES['foto']['name'];
        $tamanoArchivo = $_FILES['foto']['size'];
        $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
        $binariosImagen = fread($imagenSubida, $tamanoArchivo);
        
        //CONECTO LA BASE DE DATOS Y SUBO LOS DATOS
        include "conexion.php";
        $binariosImagen = mysqli_escape_string($conexion, $binariosImagen);

        $query = "INSERT INTO categorias (categoria,imagen,tipo) values ('" . $categoria . "','" . $binariosImagen . "','" . $tipoArchivo . "');";
        $res = mysqli_query($conexion, $query);
        

        $mensaje = "Categoria creada con exito!!"

        header("Location:../views/creado.php?mensaje=$mensaje");            
        }
    
*/
?>