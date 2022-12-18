<div class="container text-center pt-5">
    <a class='btn btn-success' href=" <?= BASE_DIR ?>/administrateur">Retour à la liste des employés</a>
    <?php if (isset($message)) : ?>
        <div class="text-center fs-4">
            <span><?= $message ?></span>
        </div>
    <?php endif; ?>
    <form method="POST" action="<?= BASE_DIR ?>/administrateur/insert" class="text-center">
        <div class="p-5 row">
            <div class="col-6">
                <label for="email">email:</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="col-6">
                <label for="password">mot de passe:</label>
                <input type="texte" name="password" id="password">
            </div>
        </div>
</div>
<div class=" text-center">
    <input type="submit" name="submit" value="Enregistrer" class="btn btn-success">
</div>
</div>