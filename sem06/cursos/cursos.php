<?php
include('../conexion.php');
$conexion = conectar();
$sql = 'SELECT * FROM curso';
$resultado = mysqli_query($conexion, $sql);
desconectar($conexion);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="/sem06/style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <h1>Cursos</h1>

                <a href="agregar_curso.html"><button class="btn btn-success">Nuevo curso</button></a>
                <a href="editar_curso.php?curso_id=' . $curso_id . '"><button class="btn btn-warning">Editar</button></a>


                <table class="custom-table">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Nombre del curso</td>
                            <td>Créditos</td>
                            <td>&nbsp;</td>
                        </tr>
                    </thead>
                    <tbody>
                        <br>
                        <br>
                        <?php
                        // Recorremos el array con los datos de los cursos
                        while ($curso = mysqli_fetch_array($resultado)) {
                            $curso_id = $curso['curso_id'];
                            $nombre_curso = $curso['nombre_curso'];
                            $creditos = $curso['creditos'];

                            echo '<tr>';
                            echo '<td>' . $curso_id . '</td>';
                            echo '<td>' . $nombre_curso . '</td>';
                            echo '<td>' . $creditos . '</td>';
                            echo '<td>';
                            echo '<form action="eliminar_curso.php" method="post">';
                            echo '<input type="hidden" name="curso_id" value="' . $curso_id . '">';
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>

</html>