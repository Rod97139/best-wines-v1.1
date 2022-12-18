<div class=" text-center py-5">
    <h1>Voici la liste de vos commandes</h1>
</div>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No facture</th>               
                <th scope="col">Prix total</th>
                <th scope="col">Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <form action="" method="POST">
                <?php foreach ($all_invoices as $invoice) : ?>
                    <?php if ($_SESSION["user"]["id"] == $invoice["id_user"]) : ?>
                        <tr>
                            <td><?= $invoice['id_invoice'] ?></td>
                            <td><?= $invoice['total_price'] ?> €</td>
                            <td><?= $invoice['date'] ?></td>
                            <td>
                                <a href="<?= BASE_DIR ?>/mon-compte/details?id=<?= $invoice['orderId'] ?>" class="btn btn-warning">Détails</a>
                            </td>
                        </tr>
                    <?php endif ?>
                <?php endforeach; ?>
            </form>
        </tbody>
    </table>
</div>