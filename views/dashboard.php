<?php 
            require_once '../config/db.php';
            // Conexión a la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "proyecto_sae";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }
?>
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
        $id = isset($_GET['id']);
        ?>
        <h1>Bienvenido <?php echo htmlspecialchars($nombre); ?> de la empresa <?php echo htmlspecialchars($empresa); ?> - <?php echo htmlspecialchars($ciudad); ?></h1>
    </div>
    <div class="container mt-5">
        <h2>Proyectos</h2>
        <a class="btn btn-success" href="agregar_proyecto.php?empresa=<?php echo htmlspecialchars($empresa); ?>&ciudad=<?php echo htmlspecialchars($ciudad); ?>">Agregar Proyecto</a>
        <div class="row">
            <div class="col-md-3">
                <h3>En Espera</h3>
                <?php
                // Obtener proyectos en espera
                $sql = "SELECT * FROM proyectos WHERE ciudad = '$ciudad' AND empresa = '$empresa' AND status = 'En Espera'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="card mb-3">';
                        echo '<div class="card-body">';
                        echo '<p class="card-text">Tipo: ' . htmlspecialchars($row["tipo"]) . '</p>';
                        echo '<p class="card-text">Programador: ' . htmlspecialchars($row["programador"]) . '</p>';
                        echo '<p class="card-text">Requisitos: ' . htmlspecialchars($row["requisitos"]) . '</p>';
                        echo '<a href="edit_proyecto.php?id=' . htmlspecialchars($row["id"]) . '" class="btn btn-warning">Editar</a>';
                        echo '<a href="#" class="btn btn-danger">Eliminar</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "No hay proyectos en espera.";
                }
                ?>
            </div>
            <div class="col-md-3">
                <h3>Asignado</h3>
                <?php
                // Obtener proyectos asignados
                $sql2 = "SELECT * FROM proyectos WHERE ciudad = '$ciudad' AND empresa = '$empresa' AND status = 'Asignado'";
                $result2 = $conn->query($sql2);

                if ($result2->num_rows > 0) {
                    while($row = $result2->fetch_assoc()) {
                        echo '<div class="card mb-3">';
                        echo '<div class="card-body">';
                        echo '<p class="card-text">Tipo: ' . htmlspecialchars($row["tipo"]) . '</p>';
                        echo '<p class="card-text">Programador: ' . htmlspecialchars($row["programador"]) . '</p>';
                        echo '<p class="card-text">Requisitos: ' . htmlspecialchars($row["requisitos"]) . '</p>';
                        echo '<a href="#" class="btn btn-warning">Editar</a>';
                        echo '<a href="#" class="btn btn-danger">Eliminar</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "No hay proyectos asignados.";
                }
                ?>
            </div>
            <div class="col-md-3">
                <h3>En Proceso</h3>
                <?php
                // Obtener proyectos en proceso
                $sql3 = "SELECT * FROM proyectos WHERE ciudad = '$ciudad' AND empresa = '$empresa' AND status = 'En Proceso'";
                $result3 = $conn->query($sql3);

                if ($result3->num_rows > 0) {
                    while($row = $result3->fetch_assoc()) {
                        echo '<div class="card mb-3">';
                        echo '<div class="card-body">';
                        echo '<p class="card-text">Tipo: ' . htmlspecialchars($row["tipo"]) . '</p>';
                        echo '<p class="card-text">Programador: ' . htmlspecialchars($row["programador"]) . '</p>';
                        echo '<p class="card-text">Requisitos: ' . htmlspecialchars($row["requisitos"]) . '</p>';
                        echo '<a href="#" class="btn btn-warning">Editar</a>';
                        echo '<a href="#" class="btn btn-danger">Eliminar</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "No hay proyectos en proceso.";
                }
                ?>
            </div>
            <div class="col-md-3">
                <h3>Terminado</h3>
                <?php
                // Obtener proyectos terminados
                $sql4 = "SELECT * FROM proyectos WHERE ciudad = '$ciudad' AND empresa = '$empresa' AND status = 'Terminado'";
                $result4 = $conn->query($sql4);

                if ($result4->num_rows > 0) {
                    while($row = $result4->fetch_assoc()) {
                        echo '<div class="card mb-3">';
                        echo '<div class="card-body">';
                        echo '<p class="card-text">Tipo: ' . htmlspecialchars($row["tipo"]) . '</p>';
                        echo '<p class="card-text">Programador: ' . htmlspecialchars($row["programador"]) . '</p>';
                        echo '<p class="card-text">Requisitos: ' . htmlspecialchars($row["requisitos"]) . '</p>';
                        echo '<a href="#" class="btn btn-warning">Editar</a>';
                        echo '<a href="#" class="btn btn-danger">Eliminar</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "No hay proyectos terminados.";
                }
                ?>
            </div>
        </div>
    </div>
        <a href="../controller/authControl.php?logout=true" class="btn btn-danger">Cerrar Sesión</a>
    </div>
</body>
</html>