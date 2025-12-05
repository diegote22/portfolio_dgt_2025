<?php 
$pg="contacto";
?>


<!DOCTYPE html>
<html lang="es" class="h-100" >
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacto</title>
    
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once 'menu.php'; ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6">
                <p>
                    Te invito a que te contactes conmigo a través de los siguientes
                    medios:
                </p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="post">
                    <div class="pb-3">
                        <input
                            type="text"
                            name="txtNombre"
                            id="txtNombre"
                            placeholder="Nombre"
                            class="form-control shadow"
                        />
                    </div>

                    <div class="pb-3">
                        <input
                            type="email"
                            name="txtCorreo"
                            id="txtCorreo"
                            placeholder="Correo"
                            class="form-control shadow"
                        />
                    </div>

                    <div class="pb-3">
                        <input
                            type="tel"
                            name="datTelefono"
                            id="datTelefono"
                            placeholder="Teléfono/Whatsapp"
                            class="form-control shadow"
                        />
                    </div>

                    <div class="pb-3">
                        <textarea
                            name="txtMensaje"
                            id="txtMensaje"
                            cols="30"
                            rows="10"
                            placeholder="Escribe tu mensaje aquí..."
                            class="form-control shadow"
                        ></textarea>
                    </div>

                    <div class="pb-3 float-end">
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn shadow">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="mt-auto mb-3">
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