<div class="container-fluid text-center p-3">
    <a class='btn color1' href=" <?= BASE_DIR ?>/administrateur">Retour à la liste des employés</a>
    <?php if (isset($message)) : ?>
        <div class="text-center fs-4">
            <span><?= $message ?></span>
        </div>
    <?php endif; 
    ?>
    <form method="POST" action="<?= BASE_DIR ?>/administrateur/edit?id=<?= $id ?>" class="text-center">
        <div class="p-5  text-center">
            <div class="pb-3">
                <label for="email">email:</label>
                <input type="text" name="email" id="email" value="<?= $edit_temp['email'] ?> ">
            </div>
            <div> Mettre en administrateur</div>
            <div class="form-check">
                <label class="" for="is_admin">Non</label>
                <input class="" name="is_admin" id="is_admin" type="radio" value="0" aria-label="0" <?php if (($edit_temp['is_admin'] == 0)) : ?> <?= "checked" ?>><?php endif; ?>
            </div>
            <div class="form-check">
                <label class="" for="is_admin">Oui</label>
                <input class="" name="is_admin" id="is_admin" type="radio" value="1" aria-label="1" <?php if (($edit_temp['is_admin'] == 1)) : ?> <?= "checked" ?>><?php endif; ?>
            </div>
        </div>
        <div class=" text-center p-3">
            <input type="submit" name="submit" value="Enregistrer" class="btn color1">
        </div>
    </form>
</div>