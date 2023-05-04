<?php
// Incluimos el archivo de conexión a la base de datos
include('../conexion.php');
// Abrimos la conexión a la base de datos
$conexion = conectar();
// Obtenemos los nuevos datos del curso
$alumno_id = $_POST['alumno_id'];
$nombres = $_POST['nombres'];
$ape_paterno = $_POST['ape_paterno'];
$ape_materno = $_POST['ape_materno'];
// Verificamos que el Id ingresado exista en nuestra BD
if (!isset($_POST['alumno_id']) || empty($_POST['alumno_id'])) {
    echo "El ID del curso no es válido.";
    exit();
}
$sql = "SELECT * FROM alumno WHERE alumno_id = $alumno_id";
$resultado1 = mysqli_query($conexion, $sql);
if (mysqli_num_rows($resultado1) != 1) {
    echo '<h3>El ID del alumno no existe.</h3>';
    echo '<a href="alumnos.php"><button class="btn btn-primary">Regresar</button></a>';
    exit();
}
$curso = mysqli_fetch_array($resultado1);
// Formamos la consulta SQL para actualizar los datos del alumno
$sql = "UPDATE alumno SET nombres = '$nombres', ape_paterno = '$ape_paterno', ape_materno = '$ape_materno' WHERE alumno_id = $alumno_id";
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
                <h1>Actualizar alumno</h1>
                <h3>
                    <?php
                    if (!$resultado) {
                        echo 'El alumno no fue actualizado';
                    } else {
                        echo 'El alumno ha sido actualizado';
                    }
                    ?>
                </h3>
                <br>
                <a href="alumnos.php"><button class="btn btn-primary" type="submit">Regresar</button></a>
            </div>
        </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>

</html>