<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/app.css">
    <title>404 - Page introuvable</title>
</head>

<body class="theme-404">
    <?php require_once 'elements/navigation.php'; ?>

    <main class="error-404">
        <div class="error-404__text">
            <p class="eyebrow">FIG. 404 — PAGE INTROUVABLE</p>
            <h1>404</h1>
            <p class="lead">Oups, la page que vous cherchez n'existe pas.</p>
            <p>Elle a peut-être été déplacée, renommée, ou n'a jamais existé. Pendant ce temps, voici le schéma
                d'un wakeskate.</p>
            <a class="error-404__cta" href="/">Retour à la page d'accueil</a>
        </div>
        <figure class="error-404__image">
            <img src="/images/schema.png" alt="Schéma technique d'un wakeskate, vue de dessus et vue de profil">
            <figcaption>Le seul schéma qu'on ait sous la main.</figcaption>
        </figure>
    </main>

    <?php require_once 'elements/footer.php'; ?>
    <script src="/js/header.js"></script>
</body>

</html>