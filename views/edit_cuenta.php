<?php include("layouts/header_dashboard.html") ?>

<?php
$id = $_POST["id"];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$empresa = $_POST['empresa'];
$ciudad = $_POST['ciudad'];
?>

<div class="container">
    <h1 style="margin-top:1.5rem; margin-bottom:1.5rem;">Editar cuenta</h1>
    <form action="../controller/edit_cuenta_controller.php" method="POST">
        <input type="hidden" value="<?php print $id ?>" name="id">
        <div class="mb-3">
            <label for="name">Nombre: </label>
            <input type="text" value="<?php print $name ?>" name="name" class="form-control" pattern="^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s'-]+$" title="El nombre solo puede contener letras, espacios, apóstrofes y guiones." required>
        </div>
        <div class="mb-3">
            <label for="email">Email: </label>
            <input type="text" value="<?php print $email ?>" name="email" class="form-control" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Por favor ingrese un email válido." required>
        </div>
        <div class="mb-3">
            <label for="password">Contraseña: </label>
            <input type="text" value="<?php print $password ?>" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="empresa">Empresa: </label>
            <input type="text" value="<?php print $empresa ?>" name="empresa" class="form-control" pattern="^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ\s'&.-]+$" title="El nombre de la empresa solo puede contener letras, números, espacios, apóstrofes, guiones y puntos." required>
        </div>
        <div class="mb-3">
            <label for="ciudad">Ciudad: </label>
            <input type="text" value="<?php print $ciudad ?>" name="ciudad" class="form-control" placeholder="Ciudad" pattern="^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s'-]+$" title="El nombre de la ciudad solo puede contener letras, espacios, apóstrofes y guiones." required>
        </div>
        <button type="submit" class="btn btn-outline-primary">guardar</button>
        <button type="reset" class="btn btn-outline-danger">limpiar campos</button>
    </form>
</div>

<?php include("layouts/footer.html") ?>