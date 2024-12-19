<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShunsuiStudio - Páginas web y diseño gráfico</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo ShunsuiStudio">
                </a>
            </div>
            <ul class="nav-links">
                <li><a href="#" class="active">Inicio</a></li>
                <li><a href="#portfolio">Portafolio</a></li>
                <li><a href="https://www.instagram.com/shunsuistudio/">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero">
            <h1>SHUNSUI STUDIO</h1>
            <p>Creando identidad, diseño gráfico y páginas web adaptadas a tus necesidades.</p>
        </section>
        <section class="description">
            <div class="description-content">
                <img src="{{ asset('images/logoblack.png') }}" alt="Logo Shunsui Studio" class="logo">
                <div class="text-content">
                    <h1>Te ayudamos a crear tu marca visual</h1>
                    <p>En Shunsui Studio nos especializamos en la creación de identidad visual para tu negocio, tanto en diseño gráfico como en desarrollo web. Desde logotipos y elementos visuales, hasta páginas web completamente funcionales y adaptadas a tus necesidades, estamos comprometidos en brindar soluciones personalizadas que ayuden a tu marca a destacarse y conectar con tu audiencia.</p>
                </div>
            </div>
        </section>
        <section id="portfolio">
            <h2>Nuestros proyectos.</h2>
            
            <div class="category">
                <h3>DISEÑO GRÁFICO</h3>
                <div class="projects-grid">
                    <div class="project-card">
                        <img src="{{ asset('images/melodyhive.jpg') }}" alt="Proyecto Diseño Gráfico 1">
                        <div class="project-details">
                            <h3>MelodyHive</h3>
                            <p>Diseño de logotipo para una plataforma musical.</p>
                            <a href="https://www.instagram.com/p/DBIYVykJrNo/?img_index=1" class="btn-primary">Ver más</a>
                        </div>
                    </div>

                    <div class="project-card">
                        <img src="{{ asset('images/gutierrez.jpg') }}" alt="Proyecto Diseño Gráfico 2">
                        <div class="project-details">
                            <h3>Gutierrez R&A</h3>
                            <p>Creación de logotipo para una veterinaria.</p>
                            <a href="https://www.instagram.com/p/DDsF_mWpS2-/?img_index=1" class="btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category">
                <h3>PÁGINAS WEB</h3>
                <div class="projects-grid">
                    <div class="project-card">
                        <img src="{{ asset('images/unusualcode.png') }}" alt="Proyecto Página Web 1">
                        <div class="project-details">
                            <h3>UnusualCode</h3>
                            <p>Aplicacion hibrida dedicada a programadores que quieran mostrar su portafolio completo (En proceso)</p>
                            <a href="https://github.com/shunsuistudio/UnusualCode" class="btn-primary">Ver más</a>
                            <p>Pagina Oficial: <a href="https://unusualcode-70d43.web.app/home" target="_blank">UnusualCode</a></p>
                        </div>
                    </div>
                    <div class="project-card">
                        <img src="{{ asset('images/grillmaster.png') }}" alt="Proyecto Página Web 2">
                        <div class="project-details">
                            <h3>Grill Master</h3>
                            <p>Pagina para una marca ficticia de eventos de parrilladas.</p>
                            <a href="https://github.com/shunsuistudio/GrillMaster" class="btn-primary">Ver más</a>
                        </div>
                    </div>
                    <div class="project-card">
                        <img src="{{ asset('images/xd.jpg') }}" alt="Proyecto Página Web 3">
                        <div class="project-details">
                            <h3>???</h3>
                            <p>Proximamente...</p>
                            <a href="#" class="btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-content">
            <p>Síguenos en nuestras redes sociales:</p>
            <ul class="social-icons">
                <li><a href="https://www.instagram.com/shunsuistudio/" target="_blank" title="Instagram"><img src="images/instagram.png" alt="Instagram"></a></li>
                <li><a href="https://github.com/shunsuistudio" target="_blank" title="GitHub"><img src="images/github.png" alt="GitHub"></a></li>
                <li><a href="https://www.behance.net/shunsuistudio" target="_blank" title="Behance"><img src="images/behance.png" alt="Behance"></a></li>
            </ul>
            <p class="rights">© 2024 Shunsui Studio. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>