<?php
// Incluimos el archivo de conexión a la base de datos
include('../conexion.php');
// Abrimos la conexión a la base de datos
$conexion = conectar();
// Obtenemos los nuevos datos del curso
$curso_id = $_POST['curso_id'];
$nombre_curso = $_POST['nombre_curso'];
$creditos = $_POST['creditos'];
// Verificamos que el Id ingresado exista en nuestra BD
if (!isset($_POST['curso_id']) || empty($_POST['curso_id'])) {
    echo "El ID del curso no es válido.";
    exit();
}
$sql = "SELECT * FROM curso WHERE curso_id = $curso_id";
$resultado1 = mysqli_query($conexion, $sql);
if (mysqli_num_rows($resultado1) != 1) {

    echo "El ID del curso no existe.";
    exit();
}
$curso = mysqli_fetch_array($resultado1);
// Fomamos la consulta SQL para actualizar los datos del curso
$sql = "UPDATE curso SET nombre_curso = '$nombre_curso', creditos = '$creditos' WHERE curso_id = $curso_id";
// Ejecutamos la consulta
$resultado = mysqli_query($conexion, $sql);
// Cerramos la conexión
desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <h1>Actualizar curso</h1>
                <h3>
                    <?php
                    if (!$resultado) {
                        echo 'El curso no fue actualizado';
                    } else {
                        echo 'El curso ha sido actualizado';
                    }
                    ?>
                </h3>
                <br>
                <a href="cursos.php"><button class="btn btn-primary" type="submit">Regresar</button></a>
            </div>
        </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>

</html>