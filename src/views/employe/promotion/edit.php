<div class="container text-center pt-5">
    <a class='btn color1' href=" <?= BASE_DIR ?>/employe/promotion">Retour à la liste des codes de promotions</a>
    <?php if (isset($message)) : ?>
        <div class="text-center fs-4">
            <span><?= $message ?></span>
        </div>
    <?php endif; ?>
    <form method="POST" action="<?= BASE_DIR ?>/employe/promotion/edit?id=<?= $id ?>" class="text-center">
        <div class="p-5 row">
            <div class="col-12 pb-5">
                <label for="promotion_name">Nom de la promotion :</label>
                <input type="text" name="promotion_name" id="promotion_name" value="<?= $edit_temp['promotion_name'] ?>">
            </div>
            <div class="col-6">
                <label for="start_date">Début de la promotion :</label>
                <input type="date" name="start_date" id="start_date" value="<?= $edit_temp['start_date'] ?>">
            </div>
            <div class="col-6">
                <label for="end_date">Fin de la promotion:</label>
                <input type="date" name="end_date" id="end_date" value="<?= $edit_temp['end_date'] ?>">
            </div>
            <div class="col-12 p-5">
                <label for="percentage">Pourcentage de remise :</label>
                <input type="number" name="percentage" id="percentage" value="<?= $edit_temp['percentage'] ?>">
            </div>
        </div>
        <div class=" text-center pb-5">
            <input type="submit" name="submit" value="Enregistrer" class="btn color1">
        </div>
    </form>
</div>