<?php
include('../conexion.php');
// Abrimos la conexión a la base de datos
$conexion = conectar();
// Obtenemos los valores del formulario
$curso_id = $_POST['curso_id'];
// Formamos la consulta SQL
$sql = "DELETE FROM curso WHERE curso_id = $curso_id";
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
    <title>Nuevo Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <h1>Eliminar curso</h1>
                <h3>
                    <?php
                    if (!$resultado) {
                        echo 'El curso no fue eliminado, ya que el id pertenece a una llave foránea de la entidad matricula';
                    } else {
                        echo 'El curso ha sido eliminado';
                    }
                    ?>
                </h3>
                <a href="cursos.php"><button class="btn btn-primary">Regresar</button></a>
            </div>
        </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>

</html>