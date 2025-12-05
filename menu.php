     <nav class="navbar navbar-expand-lg my-nav-transparent">
         <div class="container-fluid">
             <a class="navbar-brand" href="index.php">Diego Godoy | <span class="dev">Dev</span> </a>
             <button
                 class="navbar-toggler"
                 type="button"
                 data-bs-toggle="collapse"
                 data-bs-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent"
                 aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-end w-100">
                     <li class="nav-item">
                         <a class="nav-link <?php echo ($pg == "inicio") ? "active shadow": ""; ?>" aria-current="page" href="index.php">Inicio</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link <?php echo ($pg == "sobre-mi") ? "active shadow": ""; ?>" aria-current="page" href="sobre-mi.php">Sobre mí</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link <?php echo ($pg == "proyectos") ? "active shadow": ""; ?>" aria-current="page" href="proyectos.php">Proyectos</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link <?php echo ($pg == "contacto") ? "active shadow": ""; ?>" aria-current="page" href="contacto.php">Contacto</a>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>