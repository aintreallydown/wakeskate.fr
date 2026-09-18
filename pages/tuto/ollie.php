

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../../styles/app.css">

    <!-- google adsense -->
    <meta name="google-adsense-account" content="ca-pub-4810298741612120">
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4810298741612120"
     crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    
    <title>Tutoriel de wakeskate - ollie</title>
</head>

<body class="theme-tuto">

     <?php 
    require_once '../../elements/navigation.php';
    ?>


    <div class="color-container">
        <div class="grid-container">
             <div class="grid-item">
                <p>WAKESKATE SESSION.</p>
            </div>
            <div class="grid-item">
                <p>STEP BY STEP</p>
             </div>
            <div class="grid-item">
                 <p>Dans ce tutoriel, nous allons vous montrer comment réaliser un des tricks qui, selon moi, est l’un des plus
                    importants. Non seulement parce qu’il constitue la base de toutes les autres figures en wakeskate, mais
                    aussi
                    parce que le ollie se travaille en permanence. C’est une figure essentielle pour progresser vers les flip
                    tricks,
                    les pop shuvs et bien d’autres.</p>
            </div>
            <div class="grid-item">
                <p>Que vous soyez débutant ou que vous cherchiez à perfectionner vos techniques, nos guides pas à pas
                vous
                aideront à atteindre vos objectifs sur l'eau.</p>
                <p>Nous vous recommandons de commencer par les tricks de base, tels que le <strong>pop shove</strong> et le
                <strong>ollie</strong>, avant
                de passer aux tricks plus avancés comme le <strong>kickflip</strong> et <strong>l'entrée
                street</strong>.
                </p>
            </div>
        </div>
    </div>



    <div class="grid-container">
    <div class="grid-item">
        <h1>OLLIE.</h1>
    </div>
    <div class="grid-item">
        <h2>HOW TO</h2>
    </div>
    <div class="grid-item">
    <p>Le secret du ollie réside dans l’appui palonnier au moment de déclencher le geste.</p>

    <p>1. On commence par la position des pieds sur la planche, similaire à celle du pop shuv : bien écartés, le
pied
arrière sur le tail, et le pied avant juste avant la remontée du nose.</p>

<p>2. S’appuyer sur la jambe avant, palonnier tenu à une main.</p>

<p>3. Basculer le poids du corps sur la jambe arrière en appuyant fortement vers l’eau, tout en déclenchant une
extension vers le haut en même temps.</p>

<p>4. Lever la jambe avant en s’aidant du palonnier (appui palo).</p>

<p>5. Laisser décoller la planche et se relâcher, en gardant les jambes écartées.</p>

<p>6. Maintenir une tension correcte avec le palonnier, puis plaquer à plat.</p>

<p>Il est important de garder le regard sur la planche, et de ne pas hésiter à garder les épaules bien au-dessus
de celle-ci pour plus d’équilibre.</p>
    </div>
    <div class="grid-item">
        <p>Relax</p>
    
    </div>
</div>
    </div>

    


   
    <?php require_once '../../elements/footer.php'; ?>
    <script>
        function loadYouTubeVideo(button) {
            const container = button.parentElement;
            const videoId = container.dataset.videoId;
            container.innerHTML = `
    <iframe
      width="560"
      height="315"
      src="https://www.youtube-nocookie.com/embed/${videoId}?autoplay=1"
      title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      referrerpolicy="strict-origin-when-cross-origin"
      allowfullscreen>
    </iframe>
  `;
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="../../js/header.js"></script>
     


</body>

</html>