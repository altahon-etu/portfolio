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
            <div class="logo">Alexis <span>Tahon</span></div>

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