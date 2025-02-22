 <?php include("layouts/header_dashboard.html") ?>
 <?php
    $empresa = isset($_GET['empresa']) ? $_GET['empresa'] : 'Desconocida';
    $ciudad = isset($_GET['ciudad']) ? $_GET['ciudad'] : 'Desconocida';
    ?>
 <div class="container mt-5">
     <h1 class="mb-4">Registrar Proyecto</h1>
     <form action="../controller/proyectControl.php" method="POST"><!--enctype="multipart/form-data"-->
         <input type="hidden" name="action" value="registrar">
         <input type="hidden" name="empresa" value="<?php echo $empresa; ?>">
         <input type="hidden" name="ciudad" value="<?php echo $ciudad; ?>">
         <input type="hidden" name="programador" value="Sin asignar">
         <input type="hidden" name="status" value="En Espera">
         <input type="hidden" name="id" value="null">
         <input type="hidden" name="fecha" value="<?php echo date('Y-m-d'); ?>">
         <div class="form-group">
             <label for="empresa">Empresa:</label>
             <input type="text" class="form-control" id="empresa" name="empresa" value="<?php echo $empresa; ?>" <?php echo ($empresa == 'Desconocida') ? '' : 'readonly'; ?>>
         </div>
         <div class="form-group">
             <label for="ciudad">Ciudad:</label>
             <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?php echo $ciudad; ?>" <?php echo ($ciudad == 'Desconocida') ? '' : 'readonly'; ?>>
         </div>
         <div class="form-group">
             <label for="tipo">Tipo:</label>
             <select class="form-control" id="tipo" name="tipo" required>
                 <option value="Evaluacion">Evaluacion</option>
                 <option value="sae WEB + aula virtual">sae WEB + aula virtual</option>
                 <option value="servicion de mensajeria sms y email">servicion de mensajeria sms y email</option>
                 <option value="sae pagos">sae pagos</option>
                 <option value="asistencia tecnica">asistencia tecnica</option>
                 <option value="migracion de datos">migracion de datos</option>
             </select>
         </div>
         <div class="form-group">
             <label for="requisitos">Requisitos:</label>
             <textarea class="form-control" id="requisitos" name="requisitos" required></textarea>
         </div>

         <button type="submit" class="registrar btn btn-primary">Registrar Proyecto</button>
     </form>

 </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <?php include("layouts/footer.html") ?>