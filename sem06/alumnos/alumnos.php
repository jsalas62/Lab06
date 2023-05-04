<?php
include('../conexion.php');
// Abrimos la conexión a la base de datos
$conexion = conectar();
// Consulta SQL
$sql = 'SELECT alumno_id, nombres, ape_paterno, ape_materno FROM alumno';
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
    <title>Alumnos</title>
    <link rel="stylesheet" href="/sem06/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <h1>Alumnos</h1>
                <a href="agregar.html"><button class="btn btn-success">Nuevo alumno</button></a>
                <a href="editar_alumno.php?alumno_id=' . $alumno_id . '"><button
                        class="btn btn-warning">Editar</button></a>
                <table class="custom-table">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Nombres</td>
                            <td>Apellido Paterno</td>
                            <td>Apellido Materno</td>
                            <td>&nbsp;</td>
                        </tr>
                    </thead>
                    <tbody>
                        <br>
                        <br>
                        <?php
                        // Recorremos el array con los datos de los alumnos
                        while ($alumno = mysqli_fetch_array($resultado)) {
                            $alumno_id = $alumno['alumno_id'];
                            $nombres = $alumno['nombres'];
                            $ape_paterno = $alumno['ape_paterno'];
                            $ape_materno = $alumno['ape_materno'];

                            echo '<tr>';
                            echo '<td>' . $alumno_id . '</td>';
                            echo '<td>' . $nombres . '</td>';
                            echo '<td>' . $ape_paterno . '</td>';
                            echo '<td>' . $ape_materno . '</td>';
                            echo '<td>';
                            echo '<form action="eliminar_alumno.php" method="post">';
                            echo '<input type="hidden" name="alumno_id" value="' . $alumno_id . '">';
                            echo '<button class="btn btn-danger" type="submit">Eliminar</button>';
                            echo '</form>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>

</html>