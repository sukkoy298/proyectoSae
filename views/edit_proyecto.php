<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proyecto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    require_once '../config/db.php';
    require_once '../models/proyectos.php';

    // Obtener el ID del proyecto desde la URL
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $admin = isset($_GET['admin']) ? $_GET['admin'] : true;
    $proyecto = Proyecto::obtenerProyectoPorId($id);

    if ($proyecto) {
        $empresa = $proyecto->getEmpresa();
        $ciudad = $proyecto->getCiudad();
        $tipo = $proyecto->getTipo();
        $fecha = $proyecto->getFecha();
        $programador = $proyecto->getProgramador();
        $status = $proyecto->getStatus();
        $requisitos = $proyecto->getRequisitos();
    } else {
        echo "Proyecto no encontrado.";
        exit();
    }
    ?>
    <?php include("layouts/header_dashboard.html") ?>
    <div class="container mt-5">
        <h1 class="mb-4">Editar Proyecto</h1>
        <form action="../controller/proyectControl.php" method="POST">
            <input type="hidden" name="action" value="editar">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="is_admin" value="<?php echo $admin; ?>">

            <div class="form-group">
                <label for="empresa">Empresa:</label>
                <input type="text" class="form-control" id="empresa" name="empresa" value="<?php echo $empresa; ?>" <?php echo $admin ? '' : 'readonly'; ?> required>
            </div>
            <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo $ciudad; ?>" <?php echo $admin ? '' : 'readonly'; ?> required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <select class="form-control" id="tipo" name="tipo" required>
                    <option value="Evaluacion" <?php if ($tipo == 'Evaluacion') echo 'selected'; ?>>Evaluacion</option>
                    <option value="sae WEB + aula virtual" <?php if ($tipo == 'sae WEB + aula virtual') echo 'selected'; ?>>sae WEB + aula virtual</option>
                    <option value="servicion de mensajeria sms y email" <?php if ($tipo == 'servicion de mensajeria sms y email') echo 'selected'; ?>>servicion de mensajeria sms y email</option>
                    <option value="sae pagos" <?php if ($tipo == 'sae pagos') echo 'selected'; ?>>sae pagos</option>
                    <option value="asistencia tecnica" <?php if ($tipo == 'asistencia tecnica') echo 'selected'; ?>>asistencia tecnica</option>
                    <option value="migracion de datos" <?php if ($tipo == 'migracion de datos') echo 'selected'; ?>>migracion de datos</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $fecha; ?>" <?php echo $admin ? '' : 'readonly'; ?> required>
            </div>
            <div class="form-group">
                <label for="programador">Programador:</label>
                <input type="text" class="form-control" id="programador" name="programador" value="<?php echo $programador; ?>" <?php echo $admin ? '' : 'readonly'; ?> required>
            </div>
            <div class="form-group">
                <label for="status">Estado:</label>
                <select class="form-control" id="status" name="status" <?php echo $admin ? '' : 'disabled'; ?> required>
                    <option value="En Espera" <?php if ($status == 'En Espera') echo 'selected'; ?>>En Espera</option>
                    <option value="Asignado" <?php if ($status == 'Asignado') echo 'selected'; ?>>Asignado</option>
                    <option value="En Proceso" <?php if ($status == 'En Proceso') echo 'selected'; ?>>En Proceso</option>
                    <option value="Terminado" <?php if ($status == 'Terminado') echo 'selected'; ?>>Terminado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="requisitos">Requisitos:</label>
                <textarea class="form-control" id="requisitos" name="requisitos" required><?php echo $requisitos; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Proyecto</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php include("layouts/footer.html") ?>
</body>
</html>