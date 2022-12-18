<div>
    <?php if (isset($message)) : ?>
        <div>
            <p class="text-center"><?= $message ?></p>
        <div class="text-center">
            <a href="<?= BASE_DIR ?>/blog" class="btn btn-warning">Retourner à l'index </a>
        </div>
    </div>
    <?php endif; ?>
<h1 class="text-center m-3">Modifier un articles</h1>
<!-- Create the editor container -->
<form method="POST" action="<?= BASE_DIR ?>/blog/edit?id=<?= $id ?>" enctype="multipart/form-data">
    <div>
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" value="<?= $edit_temp['title'] ?>">
    </div>
    <label for=" content">Votre Article</label>

    <textarea id="mytextarea" name="content"><?= $edit_temp['content'] ?></textarea>

    <div>
        <input type="submit" name="submit" value="Enregistrer">
    </div>
    <div>Ajouter photo vin:
        <label for="image_browser">
            <img src="<?php $image ?>">
            <input onchange="display_image_name(this.files[0].name)" id="image_browser" type="file" name="image" style="display:none">
            Chercher l'image
        </label>
        <br>
        <small class="file_info text-muted"></small>
    </div>
</form>
</div>
<script>
    function display_image_name(file_name) {
        document.querySelector(".file_info").innerHTML = '<b>Fichier choisi:</b><br>' + file_name;
    }
</script>
<script src="../../../best-wines/node_modules/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#mytextarea'
    });
    function display_image_name(file_name) {
        document.querySelector(".file_info").innerHTML = '<b>Fichier choisi:</b><br>' + file_name;
    }
</script>