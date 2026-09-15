<?php

require_once 'back-end/contactBe.php';
require_once 'back-end/newsletter.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Encodage et viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="rgba(241, 124, 28, 0.83)">

    <!-- Favicon (PNG et ICO pour compatibilité maximale) -->
    <link rel="icon" type="image/png" href="https://wake-skate.fr/images/palo-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://wake-skate.fr/images/palo-icon.ico">
    <link rel="icon" href="https://wake-skate.fr/images/palo-icon-48x48.png" sizes="48x48">


    <!-- SEO -->
    <meta name="description"
        content="Découvrez le wakeskate avec tutoriels, astuces et conseils pour tous les niveaux. Rejoignez la communauté wake-skate.fr !">
    <meta name="keywords" content="wakeskate, tutoriels wakeskate, astuces wakeskate, blog wakeskate">
    <link rel="canonical" href="https://wake-skate.fr">

    <!-- Open Graph / réseaux sociaux -->
    <meta property="og:title" content="Wake Skate - Blog et Tutoriels">
    <meta property="og:description"
        content="Tout sur le wakeskate, astuces, vidéos et tutoriels pour débutants et pros.">
    <meta property="og:image" content="../images/IMG-20250712-WA0001.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <!-- jquery -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- google adsense -->
    <meta name="google-adsense-account" content="ca-pub-4810298741612120">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4810298741612120"
        crossorigin="anonymous"></script>


    <!-- Stylesheets -->
    <link rel="stylesheet" href="../styles/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="96965f7a-182e-4f18-aa42-ae4a90edcf9a" data-blockingmode="auto" type="text/javascript"></script>

    <!-- Titre de la page -->




    <title>Wake Skate - Conseils, Tutoriels et Blog</title>
    <!-- Google Tag Manager -->

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PWQVQFDP');
    </script>
    <!-- End Google Tag Manager -->
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-27ZTXGK330"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-27ZTXGK330');
</script>
<body id="dark-mode" class="theme-index">



    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWQVQFDP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    <nav class="sticky-nav">
        <div class="row">
            <a class="logo" href="/" style="color: #212221; text-decoration:none;">W<i style="font-size: inherit;
                line-height: inherit;">A</i>KESKATE
            </a>
            <div class="mobile-toggle"><span></span><span></span><span></span>
            </div>
            <nav>
                <ul>
                    <li><a href="/blog">Blog</a></li>
                    <li class="desktop"><a href="/tuto">Tutoriel</a></li>
                    <li class="has-submenu">
                        <a href="/tuto" class="submenu-toggle">Tutoriel</a>
                        <ul class="submenu">
                            <li><a href="/ollie">Ollie</a></li>
                            <li><a href="/shove">Pop shuv</a></li>
                            <li><a href="/kickflip">Kickflip</a></li>
                            <!-- Chevron pour fermer -->
                            <li class="submenu-close">
                                <a href="#" class="close-submenu">
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="/wakepark">Wakepark</a></li>
                    <li><a href="/materiel">Matériel</a></li>
                    <li><a href="/quisuisje">À propos</a></li>
                </ul>
            </nav>
        </div>
    </nav>

    <br /><br />
    <div id="modal"
        style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100vh; background: rgba(0, 0, 0, 0.5);">
        <div
            style="background: white; padding: 20px; border-radius: 8px; width: 90%; max-width: 400px; margin: 100px auto; position: relative;">
            <span id="close-modal"
                style="position: absolute; top: 10px; right: 15px; cursor: pointer; font-size: 1.5em;">&times;</span>
            <h2 style="text-decoration: underline;">Inscription à la Newsletter</h2>

            <form action="" method="post">
                <input type="email" name="email_newsletter" placeholder="Votre adresse email" required>
                <label>
                    <input type="checkbox" name="consentement" required>
                    J’ai lu et j’accepte les conditions générales d’utilisation.
                </label><br /><br />
                <p> En vous inscrivant, vous acceptez de recevoir des emails de notre part sur les nouvelles
                    publications du site. Vous pouvez vous désinscrire à tout moment.</p>
                <button type="submit" name="newsletter_submit" class="submit-button">S'inscrire <i
                        class="fas fa-paper-plane"></i></button>

            </form>
        </div>
    </div>

    <div class="hero-section">
        <div class="hero-sub-container">
            <div class="hero-sub bounce"><a href="/mon-retour-sur-la-progression-en-wakeskate" class="hero-link"></a></div>
            <div class="hero-sub bounce"><a href="/kickflip" class="hero-link"></a></div>
            <div class="hero-sub bounce"><a href="/blog" class="hero-link"></a></div>
        </div>

        <div class="custom__shape">

        </div>
    </div>
    <div class="brockmanTitle">
        <p><a href="/mon-retour-sur-la-progression-en-wakeskate">W<i>A</i>KESK<i>A</i>TE YOUR OWN W<span class="italic-reverse">A</span>Y.</a></p><br />
        <p><a href="/tuto">TUTORIELS</a></p><br />
        <p><a href="/wakepark">W<i>A</i>KEP<i>A</i>RK</p></a><br />
        <p><a href="/materiel">M<span class="italic-reverse">A</span>TOS</a></p><br />
        <p><a href="/kickflip">KICKFLIP</a></p><br />
        <p><a href="/blog">BLOG</a></p>

    </div>

    <div class="separator"></div>

    <div class="color-container">


        <div class="grid-container">
            <div class="grid-item">
                <p>07.</p>
            </div>
            <div class="grid-item">
                <a href="/blog">
                    <h2>W<i>A</i>KESKATE SESSION</h2>
                </a>
            </div>
            <div class="grid-item">
                <p>Plongez dans l'univers du wakeskate avec notre blog dédié. Que vous soyez débutant ou expert, trouvez
                    des
                    conseils, des tutoriels et des récits inspirants pour améliorer votre technique et profiter pleinement
                    de ce
                    sport passionnant.</p>
            </div>
            <div class="grid-item">
                <p>Salut, moi c'est Driss, passionné de wakeskate depuis plusieurs années. Sur ce blog, je partage mes
                    expériences, astuces et conseils pour tous les niveaux. Rejoignez-moi dans cette aventure aquatique et
                    découvrez le plaisir du wakeskate !</p>
            </div>
        </div>


        <div class="grid-container">
            <div class="grid-item">
                <p></p>
            </div>
            <div class="grid-item">
                <a href="/tuto">
                    <h2>TUTORIELS</h2>
                </a>
            </div>
            <div class="grid-item">
                <p>Découvrez nos tutoriels détaillés pour maîtriser les bases du wakeskate et progresser rapidement. Que
                    vous
                    soyez débutant ou que vous cherchiez à perfectionner vos techniques, nos guides pas à pas vous aideront
                    à
                    atteindre vos objectifs sur l'eau.</p>
            </div>
            <div class="grid-item">
                <p>Que vous soyez débutant ou que vous cherchiez à perfectionner vos techniques, nos guides pas à pas
                    vous
                    aideront à atteindre vos objectifs sur l'eau.</p>
            </div>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <p></p>
            </div>
            <div class="grid-item">
                <a href="/quisuisje">
                    <h2>NETWORK</h2>
                </a>
            </div>
            <div class="grid-item">
                <p>Rejoignez notre communauté sur les réseaux sociaux pour des mises à jour régulières, des vidéos
                    exclusives et des interactions avec d'autres passionnés de wakeskate. Suivez-nous pour ne rien manquer
                    de
                    l'action, et n'hesitez pas à m'envoyer des DM si vous avez des questions ou des zones d'ombres concernant
                    certaines figures je serai ravi d'y répondre !</p>
            </div>
            <div class="grid-item">
                <p>Vous avez des questions, des suggestions ou souhaitez collaborer ? N'hésitez pas à me contacter via
                    Instagram ou en utilisant le formulaire ci-dessous. Je suis toujours ouvert aux échanges et aux
                    nouvelles
                    idées pour enrichir notre communauté de passionnés de wakeskate.</p>
            </div>
        </div>
    </div>
    <div class="separator"></div>
    <div class="video-container">

        <video class="lazy-video" data-src="../video/taktak-270-blind.mov" autoplay muted loop preload="auto"></video>
        <video class="lazy-video" data-src="../video/frontboard-pipe-noir.mov" autoplay muted loop
            preload="auto"></video>
        <video class="lazy-video" data-src="../video/kickflip.mov" autoplay muted loop preload="auto"></video>


    </div>
    <div class="form-container">
        <h2>Vous avez pas instagram ? Contactez moi ici <i class="fa-solid fa-arrow-right"></i><br /><br /> Ou sinon, par là...<br /><a href="https://www.instagram.com/drissbnkiran?igsh=MWpsaTBqNjlsc2EycQ==" target="_blank"
                rel="noopener"><i class="fab fa-instagram fa-2x icon"></i>

            </a></h2>
        </li>
        <form action="" method="POST">
            <div class="form-group">

                <input type="text" id="name" name="nom" placeholder="Nom complet" required />
            </div>
            <div class="form-group">

                <input type="email" id="email" name="email" placeholder="Email" required />
            </div>
            <div class="form-group">

                <input type="text" id="objet" name="objet" placeholder="Objet" required />
            </div>
            <div class="form-group">

                <textarea id="message" name="message" placeholder="Votre message..." required></textarea>
            </div>
            <button type="submit" name="formulaire" class="submit-button">Envoyer <i
                    class="far fa-paper-plane"></i></button>
        </form>
        <div class="form-note">
            <p>Vos informations resteront confidentielles et ne seront utilisées que pour répondre à votre
                message.
                Je rappele que vous pouvez consulter ma politique de confidentialité
                <a
                    href="/politique-de-confidentialite">ici</a>.
            </p>
        </div>
    </div>

    <footer>
        <ul>

            <li><a href="/">Accueil</a></li>
            <li><a href="/tuto">Tutoriel</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/mentions-legales">Mentions légales & CGU</a></li>
            <li><button type="button" id="change-preferences"
                    style=" bottom: 20px; right: 20px; cursor:pointer; background: none; border: none; color:#212221; text-decoration: none; font-size: 1em; padding: 0; font-family: 'marianne';">
                    Modifier mes préférences
                </button></li>
        </ul>
    </footer>


    <script>
        // modal newsletter
        const modal = document.getElementById('modal');
        const toggleModal = document.getElementById('toggle-modal');
        const closeModal = document.getElementById('close-modal');
        toggleModal.addEventListener('click', () => {
            modal.style.display = 'block';
        });
        closeModal.addEventListener('click', () => {
            modal.style.display = 'none';
        });
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script>




    <script src="../js/header.js"></script>

    <script src="../js/lazyVideo.js"></script>
    <script src="../js/scrollAnimationBounceUp.js"></script>


</body>

</html>