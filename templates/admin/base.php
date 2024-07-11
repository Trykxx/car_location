<?php

use App\Core\Session;

$session = new Session();
$email = isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : '';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/car-rent/public/css/style.css">
    <link rel="stylesheet" href="/car-rent/public/css/contact.css">
</head>

<body>
    <header>
        <nav>
            <a href="<?= SITE_NAME; ?>/">Accueil</a>
            <a href="<?= SITE_NAME; ?>/contact">Contact</a>
            <a href="<?= SITE_NAME; ?>/admin/connexion">Connexion</a>
        </nav>
    </header>

    <?= $session->displayFlashMessage(); ?>

    <?= $content; ?>

    <footer></footer>
</body>
</html>