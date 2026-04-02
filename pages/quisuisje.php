<?php

require_once '../back-end/contactBe.php';
require_once '../elements/confidentialite.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="chocolate">

    <!-- Favicon (PNG et ICO pour compatibilité maximale) -->
    <link rel="icon" type="image/png" href="https://wake-skate.fr/images/palo-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://wake-skate.fr/images/palo-icon.ico">
    <link rel="icon" href="https://wake-skate.fr/images/palo-icon-48x48.png" sizes="48x48">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../styles/tuto.css">
    <link rel="stylesheet" href="../styles/consent.css">
    <link rel="stylesheet" href="../styles/footer.css" type='text/css'>
    <link rel="stylesheet" href="../styles/RotateScroll.css">

    <link href='../styles/header.css' rel='stylesheet' type='text/css'>

    <!-- google adsense -->
    <meta name="google-adsense-account" content="ca-pub-4810298741612120">
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4810298741612120"
     crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">



    <title>Qui suis je ?</title>
</head>
<style>
    @font-face {
        font-family: 'marianne';
        src: url(../font/Marianne-Regular.woff2) format('woff2');

    }

    * {
        font-family: 'marianne';
    }

    body {
        color: #2f2e2e;
        background-color: #E5E4E4;
    }

   

    #loading-bar-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: rgba(0, 0, 0, 0.1);
        z-index: 9999;
    }

    #loading-bar {
        width: 0;
        height: 100%;
        background:rgba(241, 124, 28, 0.83);
        transition: width 0.25s;
    }


    .color-container {
    z-index: -2;
    width: 100%;
    padding: 20px;
}
.color-container::before{
    content: "";
    position: absolute;
    top: 900px;
    left: 0;
    width: 50%; /* couleur sur 50% seulement */
    height: 400px;
    background-color: rgba(241, 124, 28, 0.83);
    z-index: -1; /* derrière le contenu */

}

.color-container__2 {
    z-index: -2;
    width: 100%;
    padding: 20px;
}
.color-container__2::before{
    content: "";
    position: absolute;
    top: 1850px;
    
    width: 50%; /* couleur sur 50% seulement */
    height: 400px;
    background-color: rgba(241, 124, 28, 0.83);
    z-index: -1; /* derrière le contenu */

}
@media screen and (max-width: 768px) {
     .color-container__2::before {
        left: 100px; /* centrer la couleur */
    }
    
}


   
</style>
</head>

<body id="dark-mode">
    <div id="loading-bar-container" role="progressbar" aria-valuemin="0" aria-valuemax="100">
        <div id="loading-bar"></div>
    </div>
    <div class="container">
        <div class="circular">
            <span class="char" data-idx="0">W</span>
            <span class="char" data-idx="1"><i>A</i></span>
            <span class="char" data-idx="2">K</span>
            <span class="char" data-idx="3">E</span>
            <span class="char" data-idx="4">S</span>
            <span class="char" data-idx="5">K</span>
            <span class="char" data-idx="6"><i>A</i></span>
            <span class="char" data-idx="7">T</span>
            <span class="char" data-idx="8">E</span>
            <span class="char" data-idx="9">• </span>
            <span class="char" data-idx="10">P</span>
            <span class="char" data-idx="11">R</span>
            <span class="char" data-idx="12">E</span>
            <span class="char" data-idx="13">S</span>
            <span class="char" data-idx="14">E</span>
            <span class="char" data-idx="15">N</span>

            <span class="char" data-idx="16">T</span>
            <span class="char" data-idx="17"><i>A</i></span>
            <span class="char" data-idx="18">T</span>
            <span class="char" data-idx="19">I</span>
            <span class="char" data-idx="20">O</span>
            <span class="char" data-idx="21">N</span>

        </div>
    </div>

    <?php 
    require_once '../elements/navigation.php';
    ?>

    <div class="color-container">
        <div class="grid-container">
             <div class="grid-item">
                <h1>Q&A</h1>
            </div>
            <div class="grid-item">
                <p>INTRO</p>
             </div>
            <div class="grid-item">
            <p>Découvrez l'univers passionnant de Driss Benkirane, opérateur wakeboard et rider passionné. Dans
            cette
            interview exclusive, Driss partage son parcours, ses défis actuels, ses sources d'inspiration et ses
            aspirations futures dans le monde du wakeskate. Plongez dans son histoire et laissez-vous inspirer
            par
            sa passion pour ce sport unique.</p>
            </div>
            <div class="grid-item">
            <p>Interview du bloggueur
                </p>
            </div>
        </div>
    </div>
        <div class="grid-container">
             <div class="grid-item">
                <p>01.</p>
            </div>
            <div class="grid-item">
            <p>Pourriez-vous nous parler un peu de vous ?</p>
             </div>
            <div class="grid-item">
            <p>Bien, bonjour, je m'appelle
                Driss, je suis operateur wakeboard au teleski nautique de Verberie, j'ai 32 ans, Je suis
                Goofy, j'ai commencé la pratique du ski nautique à l'age de 12 ans au Maroc, j'ai ensuite
                pratiqué le wakeboard en bateau et puis le wakeskate m'a paru comme une évidence, moi qui
                venais du skateboard classic. Aujourd'hui je ne ride plus en bateau mais en cable, depuis 6
                ans maintenant, partout en France, j'alterne entre wakeboard et wakeskate.</p>
            </div>
            <div class="grid-item">
            <p>et ça continue..
                </p>
            </div>
        </div>

        <div class="color-container__2">
        <div class="grid-container">
             <div class="grid-item">
                <p>02.</p>
            </div>
            <div class="grid-item">
            <p>Quel est votre plus grand défi actuellement ?</p>
             </div>
            <div class="grid-item">
            <p>En ce moment, je prépare les
                championnat de France 2025 de wakeskate, cela va faire ma troisiemme competition wakeskate
                en cable. L'aventure est enorme, je suis quelqu'un qui peux se mettre la pression pour rien
                comme être totalement relaché, donc le challenge, comme pour toute competition est d'arrivé
                avec un mental equilibré et de rider pour soi. J'espere vraiment que ma preparation va donné
                quelque chose le jour J. Pour pouvoir proposé quelque chose de coherent et régulier. Je vois
                la competition comme le résultat d'un travail d'acharnement, généralement c'est à ce moment
                qu'on voit si on a vraiment progressé. </p>
            </div>
            <div class="grid-item">
            <p>
                </p>
            </div>
        </div>
        </div>
        <div class="grid-container ">
             <div class="grid-item">
                <p>03.</p>
            </div>
            <div class="grid-item">
            <p>Qu'est-ce qui vous inspire au quotidien ?</p>
             </div>
            <div class="grid-item">
            <p>Je peux être inspirer par pleins de
                choses, en générale, l'environnement en lui meme est une source d'inspiration pour moi, mais
                aussi les copains et les bon moments passé ensemble sur l'eau et aprés. C'est quelque chose
                qui va me permettre de m'épanouir et donc de me sentir bien aussi sur ma planche.</p>
            </div>
            <div class="grid-item">
            <p>
                </p>
            </div>
        </div>
        <div class="grid-container">
             <div class="grid-item">
                <p>05.</p>
            </div>
            <div class="grid-item">
            <p>Où vous voyez-vous dans cinq ans ?</p>
             </div>
            <div class="grid-item">
            <p>Dans cinq ans ? hahaha, je sais pas
                répondre à cette question, personne sait de quoi la vie est faite, mais j'espere que je
                serai sur l'eau encore a vouloir progressé et continuer de partager des moments
                inoubliables. </p>
            </div>
            <div class="grid-item">
            <p>
                </p>
            </div>
        </div>
        <div class="grid-container">
             <div class="grid-item">
                <p>06.</p>
            </div>
            <div class="grid-item">
            <p>Un dernier mot pour nos lecteurs ?</p>
             </div>
            <div class="grid-item">
            <p>Un dernier mot ? faite du wakeskate </p>
            </div>
            <div class="grid-item">
            <p>The wakeskate blog -
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
        //progress bar
        document.addEventListener('DOMContentLoaded', () => {
            const progressBar = document.getElementById('loading-bar');

            function updateProgressBar() {
                const scrollTop = window.scrollY;
                const docHeight = document.body.scrollHeight - window.innerHeight;
                const scrollPercent = (scrollTop / docHeight) * 100;
                progressBar.style.width = scrollPercent + '%';
            }

            window.addEventListener('scroll', updateProgressBar);
            updateProgressBar(); // Initial call
        });
        //landing letter rotation on scroll
        $(window).on('scroll', function() {
            let scrollPos = $(this).scrollTop();

            let rotationAngle = scrollPos * 0.45;

            // Calcule une opacité qui diminue avec le scroll
            // Ex. : à 0px => 1 (opaque), à 500px => 0 (transparent)
            let opacity = 1 - scrollPos / 300;

            // Limite l'opacité entre 0 et 1
            opacity = Math.max(0, Math.min(1, opacity));

            $('.circular').css({
                'transform': ' rotate(' + rotationAngle + 'deg)',
                'opacity': opacity
            });
        });
    </script>

    <script src="../js/header.js"></script>
    <script src="../js/preferences.js"></script>
    <script src="../js/responsive.js"></script>


</body>

</html>