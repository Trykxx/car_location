<main>
    <h1>Dashboard-users</h1>

    <table>
        <thead>
            <tr>
                <th>Nom d'utilisateur</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($users as $user) {
            ?>
                <tr>
                    <td><?= $user['pseudo'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['statut']? 'admin' : 'user'; ?></td>
                    <td><a class="btn btn-primary" href="">Modifier</a></td>
                    <td><a class="btn btn-danger" href="">Supprimer</a></td>
                </tr>
            <?php }
            ?>

        </tbody>

    </table>
</main>