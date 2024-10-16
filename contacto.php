<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shorcut icon" href="images/icon.png">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link px-4" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item"></li>
                        <a class="nav-link px-4" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item"></li>
                        <a class="nav-link px-4 active" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="float-sm-end">
                          <a href="contacto.html" class="btn btn-rojo">
                            Descargue mi CV
                            <i class="fa-solid fa-download"></i>
                          </a>
                        </li>
                      </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje, o bien, por WhatsApp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/WhatsApp"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje"
                            class="form-control shadow"></textarea>
                    </div>
                    <div class="pb-3">
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn btn-blanco px-3">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="container mt-auto pb-3">
        <div class="row">
            <div class="col-sm-3 col-12">
                <a href="https://github.com/sk-mati" target="_blank">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/mati-sk-3a2099333/" target="_blank">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
            <div class="col-sm-3 col-12">
                Sponsor <a href="https://depcsuite.com">DePcSuite</a>
            </div>
            <div class="col-sm-3 col-12">
                <a href="mailto:mati.skmj@gmail.com">Contactame por e-mail</a>
            </div>
            <a href="https://api.whatsapp.com/send?phone=5492616639904" target="_blank">
                <i class="fa-brands fa-whatsapp px-3 pt-3 pb-4"></i>
              </a>
        </div>
    </footer>
</body>
</html>