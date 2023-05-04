<?php
include('../conexion.php');
$conexion = conectar();
$sql = "SELECT matricula.matricula_id, CONCAT(alumno.nombres, ' ', alumno.ape_paterno, ' ', alumno.ape_materno) AS nombre_completo, curso.nombre_curso 
FROM matricula 
INNER JOIN alumno ON matricula.alumno_id = alumno.alumno_id 
INNER JOIN curso ON matricula.curso_id = curso.curso_id";
$resultado = mysqli_query($conexion, $sql);
desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="/sem06/style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <h1>Matriculas</h1>

                <a href="agregar_matricula.html"><button class="btn btn-success">Nueva matricula</button></a>
                <a href="editar_matricula.php?matricula_id=' . $matricula_id . '"><button
                        class="btn btn-warning">Editar</button></a>
                <table class="custom-table">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Alumno</td>
                            <td>Curso</td>
                            <td>&nbsp;</td>
                        </tr>
                    </thead>
                    <tbody>
                        <br>
                        <br>
                        <?php
                        // Recorremos el array con los datos de las matriculas
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            $matricula_id = $fila['matricula_id'];
                            $nombre_completo = $fila['nombre_completo'];
                            $nombre_curso = $fila['nombre_curso'];
                            
                            echo '<tr>';
                            echo '<td>' . $matricula_id . '</td>';
                            echo '<td>' . $nombre_completo . '</td>';
                            echo '<td>' . $nombre_curso . '</td>';
                            echo '<td>';
                            echo '<form action="eliminar_matricula.php" method="post">';
                            echo '<input type="hidden" name="matricula_id" value="' . $matricula_id . '">';
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