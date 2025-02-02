<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Proyectos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?php
        // Obtener los datos de la URL
        $empresa = isset($_GET['empresa']) ? $_GET['empresa'] : 'Desconocida';
        $ciudad = isset($_GET['ciudad']) ? $_GET['ciudad'] : 'Desconocida';
        $nombre = isset($_GET['name']) ? $_GET['name'] : 'Usuario';
        ?>
        <h1>Bienvenido <?php echo htmlspecialchars($nombre); ?> de la empresa <?php echo htmlspecialchars($empresa); ?> - <?php echo htmlspecialchars($ciudad); ?></h1>
    </div>
</body>
</html>