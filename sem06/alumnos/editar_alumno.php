<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <h1>Editar alumno</h1>
                <form name="formCurso" method="post" action="actualizar_alumno.php">
                    <table>
                        <tbody>
                            <tr>
                                <td>ID del alumno</td>
                                <td><input type="text" name="alumno_id" value="<?php echo $alumno['alumno_id']; ?>"
                                        required>
                                </td>
                            </tr>
                            <tr>
                                <td>Nombre del alumno</td>
                                <td><input type="text" name="nombres" value="<?php echo $alumno['nombres']; ?>"
                                        required>
                                </td>
                            </tr>
                            <tr>
                                <td>Apellido paterno</td>
                                <td><input type="text" name="ape_paterno" value="<?php echo $alumno['ape_paterno']; ?>"
                                        required>
                                </td>
                            </tr>
                            <tr>
                                <td>Apellido materno</td>
                                <td><input type="text" name="ape_materno" value="<?php echo $alumno['ape_materno']; ?>">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <a><button class="btn btn-success" type="submit">Actualizar</button></a>
                    <a href="alumnos.php" class="btn btn-primary">Regresar</a>

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