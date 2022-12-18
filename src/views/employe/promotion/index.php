<div class="container">
    <h1 class="text-center p-5">Gestion des codes de promotion</h1>
    <form role="search">
        <a class='btn color1 ' href=" <?= BASE_DIR ?>/employe/promotion/insert">Ajouter un code de promotion</a>
                            <input class="" type="search" placeholder="Rechercher un code" aria-label="Search">
                            <button class="btn color1" type="submit">Recherche un code</button>
                        </form>
    <table class="table">
        <thead >
            <tr>
                <th scope="col">Nom du code</th>
                <th scope="col">date de début</th>
                <th scope="col">date de fin</th>
                <th scope="col">Pourcentage de remise</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <form action="" method="POST">
                <?php
                foreach ($all_promotions as $promotion) : ?>
                    <tr>
                        <td><?= $promotion['promotion_name'] ?></td>
                        <td><?= date('d-m-Y', strtotime($promotion['start_date'])) ?></td>
                        <td><?= date('d-m-Y', strtotime($promotion['end_date'])) ?></td>
                        <td><?= $promotion['percentage'] ?></td>
                        <td>
                            <a href="<?= BASE_DIR ?>/employe/promotion/edit?id=<?= $promotion['id'] ?>" class="btn btn-danger">Modifier</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </form>
        </tbody>
    </table>
</div>