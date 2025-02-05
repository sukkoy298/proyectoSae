<?php include("layouts/header.html") ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center mt-5">Inicio de Sesión</h1>
            <form action="../controller/authControl.php" method="POST" class="mt-4">
                <input type="hidden" name="login" value="true">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                <button type="button" class="btn btn-success"><a class="text-decoration-none text-white" href="register.php">Registrarme</a></button>
            </form>
        </div>
    </div>
</div>
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php include("layouts/footer.html") ?>