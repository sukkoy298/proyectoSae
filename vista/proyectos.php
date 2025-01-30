<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css_1/style.css">
    <link rel="stylesheet" href="css_1/proyectos.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include("layouts/header.html"); ?>

    <div class="proyectos container-fluid">
        <div class="row">
            <div class="col-3 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            </div>
            <div class="col-8 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <select name="" id="" class="filter">
                    <option value="">filtrar</option>
                </select>
            </div>
        </div>
        <div class="row" style="padding:1.5rem;">

            <div class="muestra col-12 col-lg-4">
                <img src="imagenes/miniatura-galeria.png" alt="foto" width="2rem">
                <div class="muestra_descripcion">
                    <p>nombre: ejemplo de proyecto</p>
                    <p>descripcion: este es un ejemplo de proyecto</p>
                    <p>estado: no especificado</p>
                </div>
            </div>
            <!--implementar codigo php para extraer con un foreach() todos los proyectos de la base 
            de datos y mostrarlos en la pagina en un contenedor de la siguiente manera

            1._incluir el fragmeto de codigo que hace conexion con la base de datos (podria ser con pdo)
            2._seleccionar las colmnas de las tabla "proyectos" y asignarlos a los espacios de array 
            correspondientes (?, ?, ?...?)
            3._extraer los datos de la base de datos con un foreach() y gardarlos en un fetch::asoc
            
            4._colocar la informacion obtenida de la base de datos y almacenada en el fetch::asoc
            <div class="muestra col-12 col-lg-4">
                <img src="ruta/en/donde/esta/la/imagen/en/el/server" alt="foto">
                <div class="muestra_descripcion">
                    <p>nombre: nombre: ?php print array["nombre"]/*esta es el nombre de la tabla donde pertenece el dato*/?></p>
                    <p>descripcion: ?php print array["descripcion"]?> </p>
                    <p>estado: ?php print array["estado"] ?></p>
                    .
                    .
                    .asi sucesivamente con los otros campos de la tabla
                </div>
            </div>
            esto mostrara rectangulos que contenga toda la informacion referente a los proyectos
            -->

            <div class="muestra col-12 col-lg-4">
                <img src="imagenes/miniatura-galeria.png" alt="foto" width="2rem">
                <div class="muestra_descripcion">
                    <p>nombre: ejemplo de proyecto</p>
                    <p>descripcion: este es un ejemplo de proyecto</p>
                    <p>estado: no especificado</p>
                    <p>desarrolladores a cargo: pepe, jaime, usuario, yo</p>
                </div>
            </div>
        </div>
    </div>

    <?php include("layouts/footer.html"); ?>

</body>

</html>