<?php

require_once '../back-end/contactBe.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#2A1A14">

    <!-- Favicon (PNG et ICO pour compatibilité maximale) -->
    <link rel="icon" type="image/png" href="https://wake-skate.fr/images/palo-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://wake-skate.fr/images/palo-icon.ico">
    <link rel="icon" href="https://wake-skate.fr/images/palo-icon-48x48.png" sizes="48x48">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Jost:ital,wght@0,100..900;1,100..900&family=Spicy+Rice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/app.css">

    <!-- google adsense -->
    <meta name="google-adsense-account" content="ca-pub-4810298741612120">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4810298741612120"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">



    <title>Qui suis je ?</title>
</head>

<body id="dark-mode" class="theme-tuto theme-rotate">
    <div id="loading-bar-container" role="progressbar" aria-valuemin="0" aria-valuemax="100">
        <div id="loading-bar"></div>
    </div>
    <!-- <div class="container">
        <div>
            <h1 class="hero-section">W<i>A</i>KESK<i>A</i>TE • PRESENT<i>A</i>TION</h1>
        </div>
    </div> -->

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








    <?php require_once '../elements/footer.php'; ?>


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
    </script>

    <script src="../js/header.js"></script>

    <script src="../js/responsive.js"></script>


</body>

</html>