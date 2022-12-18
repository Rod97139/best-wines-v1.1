<div class="container-fluid bg-products border border-light p-1" id="product-section">
    <div class="row m-3">
        <div class="col-md-4">
            <img class="img-fluid border  rounded bg-light" src="<?= BASE_DIR ?>/uploads/vins/<?= $products['photo']; ?>" alt="<?= $products['name'] ?>">
        </div>
        <div class="col-md-8">
            <div class="col-md-12">
                <h1 class="h2 text-center text-light"><?= $products['name'] ?></h1>
            </div>
            <div class="row m-3">
                <div class="bg-light border rounded col-md-7 mt-2 me-2 h5">
                    <div><?= $products['description'] ?></div>
                    <div>Pourcentage d'alcool: <?= $products['alcohol_percentage'] ?>%</div>
                    <div class=""> Région : <?= $products['region_name'] ?></div>
                    <div>
                        <h2 class="product-price mt-3">Prix : <?= $products['price'] ?>€ /unité</h2>
                    </div>
                </div>
                <div class=" bg-light border rounded col-md-4 mt-2 h5">
                    <sectionc class="m-3">
                        <form action="/best-wines/cart/add?id=<?= $products['id'] ?>" method="POST">
                            <div class="qty">
                                <label for="qty">Quantité : </label>
                                <input type="number" name="qty" id="qty" min="1" max="30" step="1" value="1">
                                <button type="input" class="btn btn-success mt-2">Ajouter au panier</button>
                            </div>
                        </form>
                    </sectionc>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center p-5">
    <h2>Autres Vins conseillés</h2>
</div>
<div class="container d-flex">
    <div class="row" id="row-card-details">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <h5 class="card-title"></h5>
                    <div class="col-md-4">
                        <img src="<?= BASE_DIR ?>/uploads/vins/<?= $lastWhiteWine['photo'] ?>" alt="<?= $lastWhiteWine['name'] ?>" srcset="" class="img-fluid rounded-start">
                    </div>
                    <p class="card-title"><?= $lastWhiteWine['name'] ?></p>
                    <p class="card-text"><?= $lastWhiteWine['price'] ?>€</p>
                    <p class="card-text"></p>
                    <a href="<?= BASE_DIR ?>/nos-vins/detail?id=<?= $lastWhiteWine['id'] ?>" class="btn btn-primary">Détails</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="row-card-details">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <h5 class="card-title"></h5>
                    <div class="col-md-4">
                        <img src="<?= BASE_DIR ?>/uploads/vins/<?= $lastRedWine['photo'] ?>" alt="<?= $lastRedWine['name'] ?>" srcset="" class="img-fluid rounded-start">
                    </div>
                    <p class="card-title"><?= $lastRedWine['name'] ?></p>
                    <p class="card-text"><?= $lastRedWine['price'] ?>€</p>
                    <p class="card-text"></p>
                    <a href="<?= BASE_DIR ?>/nos-vins/detail?id=<?= $lastRedWine['id'] ?>" class="btn btn-primary">Détails</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="row-card-details">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <h5 class="card-title"></h5>
                    <div class="col-md-4">
                        <img src="<?= BASE_DIR ?>/uploads/vins/<?= $lastChampagne['photo'] ?>" alt="<?= $lastChampagne['name'] ?>" srcset="" class="img-fluid rounded-start">
                    </div>
                    <p class="card-title"><?= $lastChampagne['name'] ?></p>
                    <p class="card-text"><?= $lastChampagne['price'] ?>€</p>
                    <p class="card-text"></p>
                    <a href="<?= BASE_DIR ?>/nos-vins/detail?id=<?= $lastChampagne['id'] ?>" class="btn btn-primary">Détails</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="row-card-details">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <h5 class="card-title"></h5>
                    <div class="col-md-4">
                        <img src="<?= BASE_DIR ?>/uploads/vins/<?= $lastBox['photo'] ?>" alt="<?= $lastBox['name'] ?>" srcset="" class="img-fluid rounded-start">
                    </div>
                    <p class="card-title"><?= $lastBox['name'] ?></p>
                    <p class="card-text"><?= $lastBox['price'] ?>€</p>
                    <p class="card-text"></p>
                    <a href="<?= BASE_DIR ?>/nos-vins/detail?id=<?= $lastBox['id'] ?>" class="btn btn-primary">Détails</a>
                </div>
            </div>
        </div>
    </div>
</div>