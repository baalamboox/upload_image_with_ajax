<!DOCTYPE html>
<html lang="es-MX" dir="ltr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Subida de imágenes con jQuery y Ajax</title>
        <link rel="stylesheet" href="raw/lib/bootstrap-4.6.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="raw/lib/fontawesome-free-5.15.3-web/css/all.min.css">
        <link rel="stylesheet" href="raw/css/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-4">
                    <form class="shadow">
                        <div class="card">
                            <img class="card-img-top" src="files/images/default-avatar.png">
                            <div class="card-body">
                                <h5 class="card-title">Sube una foto</h5>
                                <p class="card-text text-justify">Sube una imagen para probar esta demostración. La imagen puede ser en formato .jpg, o .png.</p>
                                <div class="form-group">
                                    <label for="imagen">Nueva imagen</label>
                                    <input type="file" class="form-control-file" name="imagen" id="imagen">
                                </div>
                                <div class="text-center mt-4">
                                    <span class="btn btn-primary btn-sm" id="boton_subir"><i class="fas fa-upload mr-2"></i>Subir</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="raw/lib/jquery-3.6.0/jquery-3.6.0.min.js"></script>
        <script src="raw/lib/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
        <script src="manager/subir-imagen.js"></script>
    </body>
</html>