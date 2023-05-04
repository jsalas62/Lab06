<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar matricula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <h1>Editar matricula</h1>
                <form name="formCurso" method="post" action="actualizar_matricula.php">
                    <table>
                        <tbody>
                            <tr>
                                <td>ID de la matricula</td>
                                <td><input type="text" name="matricula_id"
                                        value="<?php echo $matricula['matricula_id']; ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Id del curso</td>
                                <td><input type="text" name="curso_id" value="<?php echo $matricula['curso_id']; ?>"
                                        required>
                                </td>
                            </tr>
                            <tr>
                                <td>Id del alumno</td>
                                <td><input type="text" name="alumno_id" value="<?php echo $curso['alumno_id']; ?>"
                                        required></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <a><button class="btn btn-success" type="submit">Actualizar</button></a>
                    <a href="matricula.php" class="btn btn-primary">Regresar</a>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>

</html>