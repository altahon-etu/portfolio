<!DOCTYPE html>
<html lang="fr" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexis Tahon — Portfolio R&T</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        (function() {
            var t = localStorage.getItem('theme');
            /* dark par défaut si aucune préférence sauvegardée */
            if (t === 'light') {
                document.documentElement.setAttribute('data-theme', 'light');
            } else {
                document.documentElement.setAttribute('data-theme', 'dark');
            }
        })();
    </script>
</head>
<body>
    <div id="scroll-sentinelle" aria-hidden="true"></div>

    <header id="header-principal">
        <nav>
            <a href="index.php?page=accueil" class="logo">Alexis <span>Tahon</span></a>

            <ul id="nav-menu">
                <li class="<?php echo ($page === 'accueil') ? 'active' : ''; ?>">
                    <a href="index.php?page=accueil">Accueil</a>
                </li>
                <li class="<?php echo ($page === 'presentation') ? 'active' : ''; ?>">
                    <a href="index.php?page=presentation">Présentation</a>
                </li>
                <li class="<?php echo ($page === 'competences') ? 'active' : ''; ?>">
                    <a href="index.php?page=competences">Compétences</a>
                </li>
                <li class="<?php echo ($page === 'projets') ? 'active' : ''; ?>">
                    <a href="index.php?page=projets">Projets / SAÉ</a>
                </li>
                <li class="<?php echo ($page === 'contact') ? 'active' : ''; ?>">
                    <a href="index.php?page=contact">Contact</a>
                </li>

            </ul>

            <button class="btn-theme" id="btn-theme" aria-label="Changer de thème">
                <span class="theme-icon">🌙</span>
                <span class="theme-label">Sombre</span>
            </button>

            <button class="btn-menu" id="btn-menu" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="nav-menu">
                <span class="menu-icon">☰</span>
            </button>
        </nav>
    </header>

    <script>
        (function () {
            var html  = document.documentElement;
            var btn   = document.getElementById('btn-theme');
            var icon  = btn.querySelector('.theme-icon');
            var label = btn.querySelector('.theme-label');

            function appliquerTheme(theme) {
                html.setAttribute('data-theme', theme);
                localStorage.setItem('theme', theme);
                if (theme === 'dark') {
                    icon.textContent  = '☀️';
                    label.textContent = 'Clair';
                } else {
                    icon.textContent  = '🌙';
                    label.textContent = 'Sombre';
                }
            }

            appliquerTheme(html.getAttribute('data-theme') || 'dark');

            btn.addEventListener('click', function () {
                appliquerTheme(html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark');
            });

            /* ── Menu mobile (hamburger) ── */
            var btnMenu = document.getElementById('btn-menu');
            var navMenu = document.getElementById('nav-menu');

            if (btnMenu && navMenu) {
                var icone = btnMenu.querySelector('.menu-icon');

                function fermerMenu() {
                    navMenu.classList.remove('menu-ouvert');
                    btnMenu.setAttribute('aria-expanded', 'false');
                    icone.textContent = '☰';
                }

                function basculerMenu() {
                    var ouvert = navMenu.classList.toggle('menu-ouvert');
                    btnMenu.setAttribute('aria-expanded', ouvert ? 'true' : 'false');
                    icone.textContent = ouvert ? '✕' : '☰';
                }

                btnMenu.addEventListener('click', basculerMenu);

                /* Ferme le menu après avoir choisi un lien */
                navMenu.querySelectorAll('a').forEach(function (lien) {
                    lien.addEventListener('click', fermerMenu);
                });

                /* Ferme le menu si on repasse en affichage large (rotation, redimensionnement) */
                window.addEventListener('resize', function () {
                    if (window.innerWidth > 620) fermerMenu();
                });
            }

            /* ── Hide on scroll ── */
            var header     = document.getElementById('header-principal');
            var sentinelle = document.getElementById('scroll-sentinelle');
            var dernierePosition = 0;

            var observer = new IntersectionObserver(function(entries) {
                if (entries[0].isIntersecting) {
                    header.classList.remove('header-cache', 'header-compacte');
                    dernierePosition = 0;
                }
            }, { threshold: 0 });
            observer.observe(sentinelle);

            var ticking = false;
            window.addEventListener('scroll', function() {
                if (ticking) return;
                if (navMenu && navMenu.classList.contains('menu-ouvert')) return;
                window.requestAnimationFrame(function() {
                    var pos = window.scrollY || window.pageYOffset || 0;
                    if (pos <= 10) {
                        header.classList.remove('header-cache', 'header-compacte');
                    } else if (pos > dernierePosition + 5) {
                        header.classList.add('header-cache');
                    } else if (pos < dernierePosition - 5) {
                        header.classList.remove('header-cache');
                        header.classList.add('header-compacte');
                    }
                    dernierePosition = pos;
                    ticking = false;
                });
                ticking = true;
            }, { passive: true });
        })();
    </script>

    <main>