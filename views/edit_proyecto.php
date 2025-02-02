<?php
// Assuming you have a session started and a way to check if the user is an admin
session_start();
$isAdmin = $_SESSION['user_role'] === 'admin';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proyecto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Proyecto</h2>
        <form action="update_proyecto.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre del Proyecto</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <?php if ($isAdmin): ?>
                <div class="form-group">
                    <label for="tipo">Tipo de Proyecto</label>
                    <input type="text" class="form-control" id="tipo" name="tipo" required>
                </div>
                <div class="form-group">
                    <label for="requisitos">Requisitos</label>
                    <textarea class="form-control" id="requisitos" name="requisitos" rows="3" required></textarea>
                </div>
            <?php endif; ?>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>