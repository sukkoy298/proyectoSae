<?php
session_start();
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
<?php
// Obtener los datos de la URL
$empresa = isset($_GET['empresa']) ? $_GET['empresa'] : 'Desconocida';
$ciudad = isset($_GET['ciudad']) ? $_GET['ciudad'] : 'Desconocida';
$nombre = isset($_GET['name']) ? $_GET['name'] : 'Usuario';
$id = isset($_GET['id']) ? $_GET['id'] : null;
$_SESSION["NOMBRE"] = $nombre;
?>
<?php include("layouts/header_dashboard.html") ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-lg-7">
            <h1>Bienvenido <?php echo $_SESSION["NOMBRE"]; ?> de la empresa <?php echo htmlspecialchars($empresa); ?> - <?php echo htmlspecialchars($ciudad); ?></h1>
        </div>
    </div>
</div>
<div class="container mt-5">
    <h2>Proyectos</h2>
    <div class="row">
        <div class="espera col-md-3">
            <h3>En Espera</h3>
            <?php
            // Obtener proyectos en espera
            $sql = "SELECT * FROM proyectos WHERE ciudad = '$ciudad' AND empresa = '$empresa' AND status = 'En Espera'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="card mb-3">';
                    echo '<div class="card-body"';
                    echo '<p class="card-text" id="tipo">Tipo: ' . htmlspecialchars($row["tipo"]) . '</p>';
                    echo '<p class="card-text" id="programador">Programador: ' . htmlspecialchars($row["programador"]) . '</p>';
                    echo '<div class="requerimientos">';
                    echo '<p class="card-text">Requisitos: ' . htmlspecialchars($row["requisitos"]) . '</p>';
                    echo '</div>';
                    echo '<div class="container d-flex flex-column">';
                    echo '<a href="edit_proyecto.php?id=' . htmlspecialchars($row["id"]) . '" class="btn btn-outline-warning" id="edit_amarillo">Editar</a>';
                    echo '<a href="../controller/proyectControl.php?action=delete&id=' . htmlspecialchars($row["id"]) . '" class="btn btn-outline-danger" id="delete">Eliminar</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No hay proyectos en espera.";
            }
            ?>
        </div>
        <div class="asignado col-md-3">
            <h3>Asignado</h3>
            <?php
            // Obtener proyectos asignados
            $sql2 = "SELECT * FROM proyectos WHERE ciudad = '$ciudad' AND empresa = '$empresa' AND status = 'Asignado'";
            $result2 = $conn->query($sql2);

            if ($result2->num_rows > 0) {
                while ($row = $result2->fetch_assoc()) {
                    echo '<div class="card mb-3">';
                    echo '<div class="card-body">';
                    echo '<p class="card-text"id="tipo">Tipo: ' . htmlspecialchars($row["tipo"]) . '</p>';
                    echo '<p class="card-text"id="programador">Programador: ' . htmlspecialchars($row["programador"]) . '</p>';
                    echo '<div class="requerimientos">';
                    echo '<p class="card-text">Requisitos: ' . htmlspecialchars($row["requisitos"]) . '</p>';
                    echo '</div>';
                    echo '<div class="container d-flex flex-column">';
                    echo '<a href="edit_proyecto.php?id=' . htmlspecialchars($row["id"]) . '" class="btn btn-outline-primary" id="edit_azul">Editar</a>';
                    echo '<a href="../controller/proyectControl.php?action=delete&id=' . htmlspecialchars($row["id"]) . '" class="btn btn-outline-danger" id="delete">Eliminar</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No hay proyectos asignados.";
            }
            ?>
        </div>
        <div class="proceso col-md-3">
            <h3>En Proceso</h3>
            <?php
            // Obtener proyectos en proceso
            $sql3 = "SELECT * FROM proyectos WHERE ciudad = '$ciudad' AND empresa = '$empresa' AND status = 'En Proceso'";
            $result3 = $conn->query($sql3);

            if ($result3->num_rows > 0) {
                while ($row = $result3->fetch_assoc()) {
                    echo '<div class="card mb-3">';
                    echo '<div class="card-body">';
                    echo '<p class="card-text"id="tipo">Tipo: ' . htmlspecialchars($row["tipo"]) . '</p>';
                    echo '<p class="card-text"id="programador">Programador: ' . htmlspecialchars($row["programador"]) . '</p>';
                    echo '<div class="requerimientos">';
                    echo '<p class="card-text">Requisitos: ' . htmlspecialchars($row["requisitos"]) . '</p>';
                    echo '</div>';
                    echo '<div class="container d-flex flex-column">';
                    echo '<a href="edit_proyecto.php?id=' . htmlspecialchars($row["id"]) . '" class="btn" id="edit_morado">Editar</a>';
                    echo '<a href="../controller/proyectControl.php?action=delete&id=' . htmlspecialchars($row["id"]) . '" class="btn btn-outline-danger" id="delete">Eliminar</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No hay proyectos en proceso.";
            }
            ?>
        </div>
        <div class="terminado col-md-3">
            <h3>Terminado</h3>
            <?php
            // Obtener proyectos terminados
            $sql4 = "SELECT * FROM proyectos WHERE ciudad = '$ciudad' AND empresa = '$empresa' AND status = 'Terminado'";
            $result4 = $conn->query($sql4);

            if ($result4->num_rows > 0) {
                while ($row = $result4->fetch_assoc()) {
                    echo '<div class="card mb-3">';
                    echo '<div class="card-body">';
                    echo '<p class="card-text"id="tipo">Tipo: ' . htmlspecialchars($row["tipo"]) . '</p>';
                    echo '<p class="card-text"id="programador">Programador: ' . htmlspecialchars($row["programador"]) . '</p>';
                    echo '<div class="requerimientos">';
                    echo '<p class="card-text">Requisitos: ' . htmlspecialchars($row["requisitos"]) . '</p>';
                    echo '</div>';
                    echo '<div class="container d-flex flex-column">';
                    echo '<a href="edit_proyecto.php?id=' . htmlspecialchars($row["id"]) . '" class="btn btn-outline-success" id="edit_verde">Editar</a>';
                    echo '<a href="../controller/proyectControl.php?action=delete&id=' . htmlspecialchars($row["id"]) . '" class="btn btn-outline-danger" id="delete">Eliminar</a>';
                    echo '</div>';
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
</div>
<?php include("layouts/footer.html") ?>