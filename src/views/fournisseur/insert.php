<div>
    <?php if (isset($message)) : ?>
        <div>
            <p class="text-center"><?= $message ?></p>
            <div class="text-center">
                <a href="<?= BASE_DIR ?>/nos-fournisseurs" class="btn btn-warning">Retourner à l'index </a>
            </div>
        </div>
    <?php endif; ?>
    <h1 class="text-center m-3">Ajouter un fournisseur</h1>
    <form method="POST" action="<?= BASE_DIR ?>/nos-fournisseurs/insert" enctype="multipart/form-data">
        <div>
            <label for="name">Nom du fournisseur</label>
            <input type="text" name="name" id="name">
        </div>
        <label for="content">Description du fournisseur :</label>
        <textarea id="mytextarea" name="content"></textarea>
        <div>Ajouter une photo:
            <label for="image_browser">
                <img src="<?php $image ?>">
                <input onchange="display_image_name(this.files[0].name)" id="image_browser" type="file" name="image" style="display:none">
                Chercher l'image
            </label>
            <br>
            <small class="file_info text-muted"></small>
        </div>
        <input type="submit" name="submit" value="Enregistrer">
    </form>
</div>
<script src="../../../best-wines/node_modules/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#mytextarea'
    });
    function display_image_name(file_name) {
        document.querySelector(".file_info").innerHTML = '<b>Fichier choisi:</b><br>' + file_name;
    }
</script>