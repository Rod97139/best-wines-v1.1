<div class="container">
    <h1 class="text-center p-5">Gestion des employés par l'administrateur</h1>
    <a class='btn btn-success' href=" <?= BASE_DIR ?>/administrateur/insert">Ajouter un employé</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">email</th>
                <th scope="col">admin</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <form action="" method="POST">
                <?php
                foreach ($all_users as $user) : ?>
                    <?php if ($user['is_employee'] == "1") : ?>
                        <tr>
                            <td><?= $user['email'] ?></td>
                            <?php if ($user['is_admin'] == "1") : ?>
                                <td>oui</td>
                            <?php else : ?>
                                <td>non</td>
                            <?php endif ?>
                            <td>
                                <a href="<?= BASE_DIR ?>/administrateur/edit?id=<?= $user['id'] ?>" class="btn btn-warning">Modifier</a>
                            </td>
                            <td>
                                <a href="<?= BASE_DIR ?>/administrateur/delete?id=<?= $user['id'] ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php endif ?>
                <?php endforeach; ?>
            </form>
        </tbody>
    </table>
</div>