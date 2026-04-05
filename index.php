<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NovaWeb Studio | Tu Agencia Digital</title>
    <!-- Fuente Poppins desde Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Iconos Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Hoja de estilos principal -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- ===== BARRA DE NAVEGACION ===== -->
    <header>
        <nav>
            <div class="logo">NovaWeb <span>Studio</span></div>    
            <ul class="menu">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#equipo">Equipo</a></li>
                <li><a href="#portafolio">Portafolio</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
            <button class="btn-nav" onclick="document.getElementById('contacto').scrollIntoView({behavior:'smooth'})">
                Cotizar Proyecto
            </button>
        </nav>
    </header>

    <!-- ===== SECCION INICIO ===== -->
    <section id="inicio" class="hero">
        <div class="hero-contenido">
            <div class="hero-texto">
                <h1>Diseñamos <span>soluciones digitales</span> a tu medida</h1>
                <p>Somos un equipo apasionado por la tecnologia. Creamos sitios web modernos y funcionales para empresas que quieren destacar en el mundo digital.</p>
                <div class="hero-botones">
                    <a href="#servicios" class="btn-primario">Ver Servicios</a>
                    <a href="#portafolio" class="btn-secundario">Nuestro Trabajo</a>
                </div>
            </div>
            <div class="hero-imagen">
                <img src="hero.jpg" alt="Desarrollo web con codigo en laptop" loading="lazy">
            </div>
        </div>
    </section>

    <!-- ===== SECCION SOBRE NOSOTROS ===== -->
    <section id="nosotros">
        <div class="contenedor">
            <h2 class="titulo-seccion">Sobre <span>Nosotros</span></h2>
            <p class="subtitulo-seccion">Conoce quienes somos y que nos mueve.</p>
            <p style="text-align:center; max-width:700px; margin:0 auto; color:var(--color-texto-muted); line-height:1.8; font-size:1rem;">
                NovaWeb Studio es una agencia digital formada por estudiantes apasionados por la tecnologia y el diseño web.
                Nuestro objetivo es crear soluciones digitales modernas, funcionales y accesibles para todo tipo de clientes.
                Creemos que un buen sitio web es la mejor herramienta para destacar en el mundo digital actual.
            </p>
        </div>
    </section>

    <!-- ===== SECCION SERVICIOS ===== -->
    <section id="servicios" class="fondo-alt">
        <div class="contenedor">
            <h2 class="titulo-seccion">Nuestros <span>Servicios</span></h2>
            <p class="subtitulo-seccion">Ofrecemos soluciones digitales para potenciar tu negocio en linea.</p>
            <div class="grid-tarjetas">

                <div class="tarjeta">
                    <div class="tarjeta-icono"><i class="fas fa-paint-brush"></i></div>
                    <h3>Diseño Web</h3>
                    <p>Creamos interfaces modernas y atractivas centradas en la experiencia del usuario.</p>
                </div>

                <div class="tarjeta">
                    <div class="tarjeta-icono"><i class="fas fa-code"></i></div>
                    <h3>Desarrollo Frontend</h3>
                    <p>Implementamos sitios rapidos y responsivos con HTML, CSS y JavaScript.</p>
                </div>

                <div class="tarjeta">
                    <div class="tarjeta-icono"><i class="fas fa-chart-line"></i></div>
                    <h3>Marketing Digital</h3>
                    <p>Estrategias SEO y campañas para aumentar tu visibilidad en internet.</p>
                </div>

                <div class="tarjeta">
                    <div class="tarjeta-icono"><i class="fas fa-mobile-alt"></i></div>
                    <h3>Apps Moviles</h3>
                    <p>Desarrollamos aplicaciones moviles intuitivas para iOS y Android.</p>
                </div>

                <div class="tarjeta">
                    <div class="tarjeta-icono"><i class="fas fa-shield-alt"></i></div>
                    <h3>Ciberseguridad Web</h3>
                    <p>Protegemos tu plataforma con auditorias y buenas practicas de seguridad.</p>
                </div>

                <div class="tarjeta">
                    <div class="tarjeta-icono"><i class="fas fa-cloud"></i></div>
                    <h3>Hosting y Dominio</h3>
                    <p>Gestionamos tu infraestructura en la nube para maximo rendimiento.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== SECCION EQUIPO ===== -->
    <section id="equipo">
        <div class="contenedor">
            <h2 class="titulo-seccion">Nuestro <span>Equipo</span></h2>
            <p class="subtitulo-seccion">Las personas detras de NovaWeb Studio.</p>
            <div class="equipo-grid">

                <div class="tarjeta-miembro">
                    <div class="avatar">L</div>
                    <h3>Leonardo Suazo</h3>
                    <p class="rol">Diseñador / Documentador</p>
                    <p>Responsable del diseno visual, estructura HTML, hoja de estilos CSS y redaccion del informe tecnico del proyecto.</p>
                </div>

                <div class="tarjeta-miembro">
                    <div class="avatar">A</div>
                    <h3>Arturo Araya</h3>
                    <p class="rol">Desarrollador Frontend</p>
                    <p>Encargado de la logica de validacion con JavaScript y el procesamiento del formulario con PHP.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== SECCION PORTAFOLIO ===== -->
    <section id="portafolio" class="fondo-alt">
        <div class="contenedor">
            <h2 class="titulo-seccion">Portafolio de <span>Trabajos</span></h2>
            <p class="subtitulo-seccion">Algunos de nuestros proyectos mas destacados.</p>
            <div class="grid-tarjetas">

                <div class="tarjeta-proyecto">
                    <div class="proyecto-imagen" style="background: linear-gradient(135deg, #0077B6, #1E90FF);">
                        E-Commerce
                    </div>
                    <div class="proyecto-info">
                        <h3>Tienda Online Moda</h3>
                        <p>Diseño y desarrollo de tienda con carrito de compras y pasarela de pago.</p>
                        <div class="etiquetas">
                            <span>HTML</span><span>CSS</span><span>JS</span>
                        </div>
                    </div>
                </div>

                <div class="tarjeta-proyecto">
                    <div class="proyecto-imagen" style="background: linear-gradient(135deg, #023E8A, #1E90FF);">
                        Landing Page
                    </div>
                    <div class="proyecto-info">
                        <h3>Campaña Inmobiliaria</h3>
                        <p>Landing page de alta conversion para empresa de bienes raices.</p>
                        <div class="etiquetas">
                            <span>HTML</span><span>CSS</span><span>PHP</span>
                        </div>
                    </div>
                </div>

                <div class="tarjeta-proyecto">
                    <div class="proyecto-imagen" style="background: linear-gradient(135deg, #1565C0, #1E90FF);">
                        Dashboard
                    </div>
                    <div class="proyecto-info">
                        <h3>Panel de Gestion</h3>
                        <p>Dashboard administrativo con graficos interactivos y reportes en tiempo real.</p>
                        <div class="etiquetas">
                            <span>JS</span><span>CSS</span><span>PHP</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== SECCION CONTACTO (DINAMICA - JS + PHP) ===== -->
    <section id="contacto">
        <div class="contenedor">
            <h2 class="titulo-seccion">Contactanos <span>hoy</span></h2>
            <p class="subtitulo-seccion">¿Tienes un proyecto en mente? Escríbenos y te responderemos a la brevedad.</p>

            <?php
            // Procesamiento PHP del formulario (metodo POST)
            $mensajePHP = "";
            $tipoPHP = "";

            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $nombre  = htmlspecialchars(trim($_POST["Nombre"] ?? ""));
                $email   = htmlspecialchars(trim($_POST["Email"] ?? ""));
                $mensaje = htmlspecialchars(trim($_POST["Mensaje"] ?? ""));

                // Validacion en PHP lado servidor
                if (empty($nombre) || empty($email) || empty($mensaje)) {
                    $mensajePHP = "Por favor, completa todos los campos del formulario.";
                    $tipoPHP = "error";
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $mensajePHP = "El formato del correo electronico no es valido.";
                    $tipoPHP = "error";
                } else {
                    $mensajePHP = "Gracias, {$nombre}! Tu mensaje fue recibido correctamente.";
                    $tipoPHP = "exito";
                }
            }
            ?>

            <?php if (!empty($mensajePHP)): ?>
                <div class="php-mensaje <?php echo $tipoPHP; ?>">
                    <?php echo $mensajePHP; ?>
                </div>
            <?php endif; ?>

            <div class="contacto-wrapper">

                <!-- Informacion de contacto -->
                <div class="contacto-info">
                    <h3>Informacion de contacto</h3>
                    <p>&#128205; Santiago, Chile</p>
                    <p>&#128222; +56 9 1234 5678</p>
                    <p>&#128231; contacto@novawebstudio.cl</p>
                    <p>&#127758; www.novawebstudio.cl</p>
                </div>

                <!-- Formulario con validacion JS (Arturo Araya) y procesamiento PHP -->
                <form id="formularioContacto" action="index.php" method="POST" class="form-contacto" novalidate>

                    <div class="form-grupo">
                        <label for="nombre">Nombre completo</label>
                        <input type="text" id="nombre" name="Nombre"
                               placeholder="Ej: Juan Perez"
                               autocomplete="name" required>
                    </div>

                    <div class="form-grupo">
                        <label for="email">Correo electronico</label>
                        <input type="email" id="email" name="Email"
                               placeholder="correo@ejemplo.cl"
                               autocomplete="email" required>
                    </div>

                    <div class="form-grupo">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="Mensaje"
                                  placeholder="Cuentanos sobre tu proyecto..."
                                  rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn-enviar">Enviar Mensaje</button>

                    <!-- Mensaje de estado manejado por JavaScript (java.js) -->
                    <div id="mensajeEstado"></div>

                </form>
            </div>
        </div>
    </section>

    <!-- ===== PIE DE PAGINA ===== -->
    <footer>
        <div class="footer-contenido">
            <div class="footer-logo">
                <div class="logo">NovaWeb <span>Studio</span></div>
                <p>Agencia Digital Creativa &copy; 2025</p>
            </div>
            <div class="footer-links">
                <h4>Navegacion</h4>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#equipo">Equipo</a></li>
                    <li><a href="#portafolio">Portafolio</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-redes">
                <h4>Redes Sociales</h4>
                <ul>
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">LinkedIn</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Desarrollado con HTML, CSS, JavaScript y PHP &mdash; Leonardo Suazo &amp; Arturo Araya &mdash; AIEP 2025</p>
        </div>
    </footer>

    <!-- Script de validacion desarrollado por Arturo Araya -->
    <script src="java.js"></script>

</body>
</html>
