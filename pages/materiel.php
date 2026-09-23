<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="chocolate">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Jost:ital,wght@0,100..900;1,100..900&family=Spicy+Rice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- google adsense -->
    <meta name="google-adsense-account" content="ca-pub-4810298741612120">

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4810298741612120"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <title>Materiel de wakeskate</title>
</head>

<body id="dark-mode" class="theme-tuto theme-rotate">
    <div id="loading-bar-container" role="progressbar" aria-valuemin="0" aria-valuemax="100">
        <div id="loading-bar"></div>
    </div>
    <!-- <div class="container">
        <div>
            <h1 class="hero-section">W<i>A</i>KESK<i>A</i>TE • M<i>A</i>TERIEL</h1>
        </div>
    </div> -->
    <?php
    require_once '../elements/navigation.php';
    ?>

    <div class="color-container">
        <div class="grid-container">
            <div class="grid-item">
                <p>01.</p>
            </div>
            <div class="grid-item">
                <h1>M<i>A</i>TERIEL</h1>
            </div>
            <div class="grid-item">
                <p>Le wakeskate est une planche de glisse qui ressemble à un skateboard, mais conçue pour être utilisée
                    sur l'eau. Elle est généralement fabriquée en bois ou en composite.</p>
                <p>Les planches de wakeskate sont disponibles dans une variété de tailles et de formes pour s'adapter
                    aux différents styles de glisse et aux préférences des riders. Elles sont souvent équipées de grip
                    tape pour une meilleure adhérence.</p>
            </div>
            <div class="grid-item">
                <p>Les planches
                </p>
                <p><a href="https://quantum-boards.com/" target="_blank">Quantum Boards</a></p>
                <p><a href="https://fattitesiwakeskates.com/" target="_blank">Fattitesi </a></p>
                <p><a href="https://www.watermonsters.co/" target="_blank">Water monster</a></p>

            </div>
        </div>
    </div>


    <div class="grid-container">
        <div class="grid-item">
            <p>02.</p>
        </div>
        <div class="grid-item">
            <h2>PERSO</h2>
        </div>
        <div class="grid-item">
            <p>Personnellement, je ride une planche Quantum Boards en 39. C'est une planche qui offre un
                bon équilibre entre la maniabilité et la stabilité. Je trouve, que le poids y est trés trés bien
                repartie, ce qui est super important sur un wakeskate, si le poids n'est pas bien repartie cela va
                causer à la planche de vriller de manière aleatoire une fois en l'air. Donc prennez le en compte
                avant d'en acheter un. </br>La Quantum a tout pour elle, le poids bien repartie, une planche ni trop
                épaisse ni trop fine, une board faite main avec un savoir faire de trés bonne qualité. J'ai eu un
                trés bon ressenti en ridant cette planche, ma précédente planche etais une Remote en 40, plus
                lourde, plus grande, plus stable, mais les tricks en générale me demandé plus d'energie. Avec la
                quantum j'ai l'impression de rider sans effort, et d'avoir un meuilleur touché de board en générale.
                Que ce soit sur module ou sur le flat, la Quantum réagit super bien, pas d'accroche sur les modules,
                la base grind est de trés bonne facture, vous ne serai pas déçu de rider une Quantum et si vous avez
                l'occasion d'en tester une, allez y les yeux fermés.
            </p>
        </div>
        <div class="grid-item">
            <p>Si vous débutez dans le wakeskate, je vous recommande de commencer avec une planche de taille
                moyenne, qui offre un bon équilibre entre la maniabilité et la stabilité. Les planches plus larges
                et plus grandes
                sont généralement plus stables, tandis que les planches plus étroites sont plus maniables.</p>
            <p>Il est également important de choisir une planche qui correspond à votre niveau de compétence et à
                votre style de glisse. Si vous êtes débutant, optez pour une planche avec un bois plus épais, un peu
                plus lourde
                qui facilite les tricks et les sauts. Pour les riders plus expérimentés, une planche plus fine, plus
                légere, plus dur à controller
                mais peut offrir un meilleur touché.</p>
            </br>
            <p>Enfin, n'oubliez pas de prendre en compte votre budget. Les planches de wakeskate peuvent varier
                considérablement en prix, alors assurez-vous de choisir une planche qui correspond à vos besoins et
                à votre budget.</p>

        </div>
    </div>
    <div class="section-tuto" style="margin: 20px; padding-top: 20px;">
        <h2>Vous aimerez aussi :</h2>

        <ul style="list-style: none;">
            <li><a href="/">Les bases du wakeskate : Guide pour débutants</a></li>
            <li><a href="/">Comment choisir sa planche de wakeskate ?</a></li>
            <li><a href="/">Techniques avancées en wakeskate : Trucs et astuces</a></li>
            <li><a href="/">Entretien de sa planche de wakeskate : Conseils pratiques</a></li>
        </ul>
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


</body>

</html>