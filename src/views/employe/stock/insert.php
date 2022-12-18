<div>
    <?php if (isset($message)) : ?>
        <div>
            <p class="text-center"><?= $message ?></p>
            <div class="text-center">
                <a href="<?= BASE_DIR ?>/employe/stock" class="btn btn-warning">Retourner à l'index </a>
            </div>
        </div>
    <?php endif; ?>
    <a class='btn btn-success' href=" <?= BASE_DIR ?>/employe/stock">Index</a>
    <form method="POST" action="<?= BASE_DIR ?>/employe/stock/insert" enctype="multipart/form-data">
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
        </div>
        <div>
            <label for="stock">stock</label>
            <input type="number" name="stock" id="stock">
        </div>
        <div>
            <label for="alcohol_percentage">alcohol_percentage</label>
            <input type="number" name="alcohol_percentage" id="alcohol_percentage">
        </div>
        <div>
            <label for="id_region">Region</label>
            <select name="id_region" class="form-select" aria-label="Default select example">
                <option selected>Choisissez la région</option>
                <?php foreach ($regions as $region) : ?>
                    <option name="<?= $region['id_region'] ?>" value="<?= $region['id_region'] ?>"><?= $region['region_name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="id_cepage">Cepage</label>
            <select name="id_cepage" class="form-select" aria-label="Default select example">
                <option selected>Choisissez le cépage</option>
                <?php foreach ($cepages as $cepage) : ?>
                    <option name="<?= $cepage['id_cepage'] ?>" value="<?= $cepage['id_cepage'] ?>"><?= $cepage['cepage_name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="id_taste">Goût</label>
            <select name="id_taste" class="form-select" aria-label="Default select example">
                <option selected>Choisissez le goût</option>
                <?php foreach ($tastes as $taste) : ?>
                    <option name="<?= $taste['id_taste'] ?>" value="<?= $taste['id_taste'] ?>"><?= $taste['taste_name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="id_association">Association</label>
            <select name="id_association" class="form-select" aria-label="Default select example">
                <option selected>Choisissez l'accord</option>
                <?php foreach ($associations as $association) : ?>
                    <option name="<?= $association['id_association'] ?>" value="<?= $association['id_association'] ?>"><?= $association['association_name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="id_type">Choissisez le type de produit</label>
            <select name="id_type" class="form-select" aria-label="Default select example">
                <option selected>Choisissez l'accord</option>
                <?php foreach ($type_products as $type_product) : ?>
                    <option name="<?= $type_product['id_type'] ?>" value="<?= $type_product['id_type'] ?>"><?= $type_product['type_name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
            <label for="price">Prix</label>
            <input type="text" name="price" id="price">
        </div>
        <p>Mettre en vedette :</p>
        <div class="form-check">
            <label class="form-check-label" for="is_featured">Non</label> <input class="form-check-input" name="is_featured" id="is_featured" type="radio" value="0" aria-label="Non">
        </div>
        <div class="form-check">
            <label class="form-check-label" for="is_featured">Oui</label> <input class="form-check-input" name="is_featured" id="is_featured" type="radio" value="1" aria-label="Oui">
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
        <div>
            <input type="submit" name="submit" value="Enregistrer">
        </div>
    </form>
</div>
<script>
    function display_image_name(file_name) {
        document.querySelector(".file_info").innerHTML = '<b>Fichier choisi:</b><br>' + file_name;
    }
</script>