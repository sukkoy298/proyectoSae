<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Institución</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Registro Usuario</h2>
        <form action="../controlador/registroControler.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="nombrePersona">Nombre:</label>
                <input type="text" id="nombrePersona" name="nombrePersona" class="form-control" placeholder="Nombre de usuario..." required>
            </div>
            <div class="form-group">
                <label for="empresa">Empresa:</label>
                <input type="text" id="empresa" name="empresa" class="form-control" placeholder="Nombre de la empresa o institucion educativa..." required>
            </div>
            <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="correoElectronico">Correo Electronico:</label>
                <input type="email" id="correoElectronico" name="correoElectronico" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>