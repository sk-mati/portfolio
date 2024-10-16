<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shorcut icon" href="images/icon.png">
</head>

<body id="inicio" class="d-flex flex-column h-100">
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
                            <a class="nav-link px-4 active" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item"></li>
                        <a class="nav-link px-4" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item"></li>
                        <a class="nav-link px-4" href="contacto.php">Contacto</a>
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
        <div class="col-12 mx-auto text-center cohete">
          <a href="proyectos.html">
            <img src="images/cohete.svg" alt="cohete">
          </a>
        </div>
        <div class="col-12 col-sm-6 my-4 mt-sm-5 offset-sm-3 text-center mb-3">
          <div class="">
          <p class="py-1">Bienvenid@ a mi sitio web sobre desarrollo en sistemas.</p>
          </div>
        </div>
        <div class="col-12 text-center">
            <a href="proyectos.html" class="btn btn-blanco">Conozca mis proyectos</a>
        </div>
      </div>
    </main>

    <footer class="container mt-auto py-4">
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
                Sponsor <a href="https://depcsuite.com">DePC Suite</a>
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