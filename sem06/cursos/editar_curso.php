<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <h1>Editar curso</h1>
                <form name="formCurso" method="post" action="actualizar_curso.php">
                    <table>
                        <tbody>
                            <tr>
                                <td>ID del curso</td>
                                <td><input type="text" name="curso_id" value="<?php echo $curso['curso_id']; ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Nombre del curso</td>
                                <td><input type="text" name="nombre_curso" value="<?php echo $curso['nombre_curso']; ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Créditos</td>
                                <td><input type="text" name="creditos" value="<?php echo $curso['creditos']; ?>" required></td>
                        </tbody>
                    </table>
                    <br>
                    <a><button class="btn btn-success" type="submit">Actualizar</button></a>
                    <a href="cursos.php" class="btn btn-primary">Regresar</a>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>