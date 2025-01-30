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
        <h2 class="text-center">Registro de Institución</h2>
        <form action="../controlador/registroControler.php" method="POST" class="mt-4">
            <div class="form-group">
                <label for="nombrePersona">Nombre:</label>
                <input type="text" id="nombrePersona" name="nombrePersona" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="empresa">Empresa:</label>
                <input type="text" id="empresa" name="empresa" class="form-control" placeholder="Nombre de la empresa o institucion educativa" required>
            </div>
            <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tipoSistema">Tipo de Sistema</label>
                <select class="form-control" id="tipoSistema" name="tipoSistema" required>
                    <option value="">Seleccione un tipo</option>
                    <option value="evaluacion">Evaluación</option>
                    <option value="aula_virtual">Aula Virtual</option>
                    <option value="servicio_mensajeria">Servicio de Mensajería</option>
                    <option value="sae_pagos">SAE Pagos</option>
                    <option value="asistencia_tecnica">Asistencia Técnica</option>
                    <option value="migracion_datos">Migración de Datos</option>
                </select>
            </div>
            <div class="form-group">
                <label for="correoElectronico">Correo Electronico:</label>
                <input type="email" id="correoElectronico" name="correoElectronico" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>