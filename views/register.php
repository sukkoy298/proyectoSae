<?php include("layouts/header.html") ?>

<h1 class="text-center my-4">Registro de Usuario</h1>
<div class="container">
    <form action="../controller/authControl.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" pattern="^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s'-]+$" title="El nombre solo puede contener letras, espacios, apóstrofes y guiones." required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Por favor ingrese un email válido." required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
        </div>
        <div class="mb-3">
            <label for="empresa" class="form-label">Empresa</label>
            <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa" pattern="^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ\s'&.-]+$" title="El nombre de la empresa solo puede contener letras, números, espacios, apóstrofes, guiones y puntos." required>
        </div>
        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" pattern="^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s'-]+$" title="El nombre de la ciudad solo puede contener letras, espacios, apóstrofes y guiones." required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
        <button type="button" class="btn btn-success"><a class="text-decoration-none text-white" href="login.php">Iniciar Sesion</a></button>
    </form>
</div>

<?php include("layouts/footer.html") ?>