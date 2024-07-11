<main>
    <h1>Connectez-vous</h1>
    <form action="<?= SITE_NAME ?>/connecter" method="POST">
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="pswd">Mot de passe :</label>
            <input type="password" id="pswd" name="mdp">
        </div>
        <input type="submit" value="Connexion">
    </form>
</main>