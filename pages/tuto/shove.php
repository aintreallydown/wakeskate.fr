

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Jost:ital,wght@0,100..900;1,100..900&family=Spicy+Rice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/app.css">

    <!-- google adsense -->
    <meta name="google-adsense-account" content="ca-pub-4810298741612120">
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4810298741612120"
     crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    
    <title>Tutoriel de wakeskate - shuvit</title>
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
            <p>Dans ce tutoriel, nous allons vous montrer comment réaliser un des tricks de base en wakeskate, un
            fondamental pour évoluer.</p>
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

    <video width="100%" height="300" src="../../video/tutobackshuv.mp4" type="video/mp4" autoplay loop preload="auto"></video>
    <div class="grid-container">
    <div class="grid-item">
        <h1>POP SHOVE.</h1>
    </div>
    <div class="grid-item">
        <h2>HOW TO</h2>
    </div>
    <div class="grid-item">
    <p>Le secret du shove réside dans le relachement musculaire au bon moment. </p>
    <p> 1. On commence par la position des pieds sur la planche, bien écartés, le pied arrière sur le tail, et le
            pied avant juste avant la remontée du nose.</p>
            <p> 2. Rapprochez le palonnier près de vous pour garder le contrôle de la tension dans la phase de
            POP. À ce stade, vous devriez avoir les jambes en tension, semi-fléchies, prêtes pour l’extension verticale.</p>
            
            <p> 3. Pop avec le pied arrière, levez la jambe avant pour laisser de
            l’espace à la planche, puis exagérez le pop dans la direction voulue. Essayez de faire un mouvement
            circulaire avec le pied arrière : vous aurez plus de facilité à rattraper la planche en vol (en front ou en
            back).</p>
            <p> 4. Laissez tourner la planche, relachez la tension musculaire, en gardant les jambes écartées.</p>
            <p> 5. Catch avec les deux pieds, souples sur les appuis, prêt à baisser le centre de gravité en cas de
            déséquilibre.
        </p>
        <p>Il est important de garder le regard sur la planche, et de ne pas hésiter à se pencher en arrière
            pour
            garder le contrôle de la rotation.</p>
    </div>
    <div class="grid-item">
        <p>Have fun.</p>
    
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