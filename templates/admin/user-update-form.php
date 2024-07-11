<main>
    <h1>Modifiez votre Pseudo</h1>

    <form action="<?= SITE_NAME ?>/modifier" method="POST">
        <div>
            <label for="oldPseudo">Ancien pseudo :</label>
            <input type="text" id="newPseudo" value="<?= $user['pseudo'] ?>" readonly>
        </div>
        <div>
            <label for="newPseudo">Nouveau pseudo :</label>
            <input type="text" id="newPseudo" name="newPseudo">
        </div>

        <input type="submit" value="Enregistrer">

    </form>
</main>