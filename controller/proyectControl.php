<?php
require_once '../models/proyectos.php';

class ProyectController {
    public function registrarProyecto() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['empresa']) && isset($_POST['ciudad']) && isset($_POST['tipo']) && isset($_POST['fecha']) && isset($_POST['programador']) && isset($_POST['status']) && isset($_POST['requisitos'])) {
                // Registro de proyecto
                $id = null;
                $empresa = $_POST['empresa'];
                $ciudad = $_POST['ciudad'];
                $tipo = $_POST['tipo'];
                $fecha = $_POST['fecha'];
                $programador = $_POST['programador'];
                $status = $_POST['status'];
                $requisitos = $_POST['requisitos'];

                // Crear una instancia de Proyecto y guardar los datos
                $proyecto = new Proyecto($id, $empresa, $ciudad, $tipo, $fecha, $programador, $status, $requisitos);
                if ($proyecto->save()) {
                    header("Location: ../views/dashboard.php?empresa=$empresa&ciudad=$ciudad");
                    exit();
                } else {
                    echo "Error al registrar el proyecto.";
                }
            }
        }
    }

    public function editarProyecto() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['id']) && isset($_POST['empresa']) && isset($_POST['ciudad']) && isset($_POST['tipo']) && isset($_POST['fecha']) && isset($_POST['programador']) && isset($_POST['status']) && isset($_POST['requisitos'])) {
                // Obtener el proyecto existente
                $id = $_POST['id'];
                $proyecto = Proyecto::obtenerProyectoPorId($id);

                if ($proyecto) {
                    // Actualizar los datos del proyecto
                    $proyecto->setEmpresa($_POST['empresa']);
                    $proyecto->setCiudad($_POST['ciudad']);
                    $proyecto->setTipo($_POST['tipo']);
                    $proyecto->setFecha($_POST['fecha']);
                    $proyecto->setProgramador($_POST['programador']);
                    $proyecto->setStatus($_POST['status']);
                    $proyecto->setRequisitos($_POST['requisitos']);

                    if ($proyecto->editar()) {
                        if (isset($_POST['is_admin'])) {
                            header("Location: ../views/dashboard-admin.php");
                            exit();
                        }else{
                            header("Location: ../views/dashboard.php?empresa=" . $proyecto->getEmpresa() . "&ciudad=" . $proyecto->getCiudad());
                            exit();
                        }
                    } else {
                        echo "Error al actualizar el proyecto.";
                    }
                } else {
                    echo "Proyecto no encontrado.";
                }
            }
        }
    }

    public function buscarProyecto() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (isset($_GET['empresa']) && isset($_GET['ciudad'])) {
                $empresa = $_GET['empresa'];
                $ciudad = $_GET['ciudad'];

                // Buscar proyectos por empresa y ciudad
                $proyectos = Proyecto::buscarPorEmpresaYCiudad($empresa, $ciudad);

                if ($proyectos) {
                    echo json_encode($proyectos);
                } else {
                    echo "No se encontraron proyectos.";
                }
            }
        }
    }

    public function deleteProyecto() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
            $id = $_GET['id'];
            $proyecto = Proyecto::obtenerProyectoPorId($id);

            if ($proyecto) {
                if ($proyecto->eliminar()) {
                    header("Location: ../views/dashboard.php?empresa=" . $proyecto->getEmpresa() . "&ciudad=" . $proyecto->getCiudad());
                    exit();
                } else {
                    echo "Error al eliminar el proyecto.";
                }
            } else {
                echo "Proyecto no encontrado.";
            }
        }
    }
}

// Crear una instancia del controlador y llamar al método correspondiente
$proyectController = new ProyectController();
if (isset($_POST['action']) && $_POST['action'] === 'registrar') {
    $proyectController->registrarProyecto();
} elseif (isset($_POST['action']) && $_POST['action'] === 'editar') {
    $proyectController->editarProyecto();
}elseif (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $proyectController->deleteProyecto();
}
?>