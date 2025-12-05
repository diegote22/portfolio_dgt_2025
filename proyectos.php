<?php 
$pg="proyectos";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proyectos</title>
    
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/proyectos.css">

    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once 'menu.php'; ?>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1 class="proyecto-titulo">Proyectos</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="algunos">Algunos de mis proyectos:</p>
            </div>
        </div>

        <div class="row">
            
            <div class="col-12 col-sm-4 p-4">
                <div class="row border shadow proyecto">
                    <div class="col-12 p-0">
                        <img src="images/web-1.png" alt="PROYECTO 1" class="img-fluid shadow" />
                        <h2>PROYECTO 1</h2>
                        <p class="py-2 px-3">Descripción breve del proyecto 1.</p>
                    </div>
                    <div class="col-6 justify-content-center d-flex">
                        <a href="#" class="btn">Ver sitio</a>
                    </div>
                    <div class="col-6 justify-content-center d-flex">
                        <a href="#" class="btn">Github</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-4 p-4">
                <div class="row border shadow proyecto">
                    <div class="col-12 p-0">
                        <img src="images/web-2.png" alt="PROYECTO 2" class="img-fluid shadow" />
                        <h2>PROYECTO 2</h2>
                        <p class="py-2 px-3">Descripción breve del proyecto 2.</p>
                    </div>
                    <div class="col-6 justify-content-center d-flex">
                        <a href="#" class="btn">Ver sitio</a>
                    </div>
                    <div class="col-6 justify-content-center d-flex">
                        <a href="#" class="btn">Github</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-4 p-4">
                <div class="row border shadow proyecto">
                    <div class="col-12 p-0">
                        <img src="images/web-3.png" alt="PROYECTO 3" class="img-fluid shadow" />
                        <h2>PROYECTO 3</h2>
                        <p class="py-2 px-3">Descripción breve del proyecto 3.</p>
                    </div>
                    <div class="col-6 justify-content-center d-flex">
                        <a href="#" class="btn">Ver sitio</a>
                    </div>
                    <div class="col-6 justify-content-center d-flex">
                        <a href="#" class="btn">Github</a>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

    <footer class="proyectofooter mt-auto mb-3">
        <div class="btn-whatsapp">
            <a href="https://wa.me/2615590979" target="_blank" class="btn-whatsapp" title="Contáctanos por WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
        </div>

        <div class="row">
            <div class="col-3">
                <a href="" target="_blank" title="Github">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="" target="_blank" title="Linkedin">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="" target="_blank" title="Face">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
            <div class="col-3">Sponsor DePC Suite</div>
            <div class="col-3"><a href="mailto:diegote_21_82@hotmail.com">diegote_21_82@hotmail.com</a></div>
            <div class="col-3"></div>
        </div>
    </footer>

    <script
        src="https://kit.fontawesome.com/282fd0a33c.js"
        crossorigin="anonymous"
    ></script>
</body>
</html>