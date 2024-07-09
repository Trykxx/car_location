<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/car-rent/public/css/style.css">
    <link rel="stylesheet" href="/car-rent/public/css/contact.css">
</head>

<body>
    <header>
        <nav>
            <a href="<?= SITE_NAME; ?>/">Accueil</a>
            <a href="<?= SITE_NAME; ?>/contact">Contact</a>
            <a href="<?= SITE_NAME; ?>/connexion">Connexion</a>
        </nav>
    </header>

    <?= $content; ?>

    <footer></footer>
</body>
</html>