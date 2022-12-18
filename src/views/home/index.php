<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner monCarrousel">
            <div class="carousel-item active">
                <img src="/best-wines/uploads/carrousel/1.png" class="d-block w-100" alt="image avec code promotion">
            </div>
            <div class="carousel-item">
                <img src="/best-wines/uploads/carrousel/2.png" class="d-block w-100" alt="message promotionnel">
            </div>
            <div class="carousel-item">
                <img src="/best-wines/uploads/carrousel/3.png" class="d-block w-100" alt="message promotionnel">
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row ">
            <div class="col-12 col-md-3">
                <div class="card mb-3" style="max-width: 540px; min-height: 350px">
                    <div class="row g-0 m-3">
                        <div class="col-md-4">
                            <img src="uploads/vins/<?= $lastWhiteWine['photo'] ?>" alt="<?= $lastWhiteWine['name'] ?>" srcset="" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title"><?= $lastWhiteWine['name'] ?></h5>
                            <p class="card-text">description: <?= $lastWhiteWine['description'] ?></p>
                            <p class="card-text">Pourcentage d'alcool: <?= $lastWhiteWine['alcohol_percentage'] ?>%</p>
                            <p class="card-text">Région: <?= $lastWhiteWine['region_name'] ?></p>
                            <p class="card-text">Prix Unitaire: <?= $lastWhiteWine['price'] ?>€</p>
                            <a href="<?= BASE_DIR ?>/nos-vins/detail?id=<?= $lastWhiteWine['id'] ?>" class="btn color1 position-absolute bottom-0 start-50 translate-middle-x mb-3">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card mb-3" style="max-width: 540px; min-height: 350px">
                    <div class="row g-0 m-3">
                        <div class="col-md-4">
                            <img src="uploads/vins/<?= $lastRedWine['photo'] ?>" alt="<?= $lastRedWine['name'] ?>" srcset="" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title"><?= $lastRedWine['name'] ?></h5>
                            <p class="card-text">description: <?= $lastRedWine['description'] ?></p>
                            <p class="card-text">Pourcentage d'alcool: <?= $lastRedWine['alcohol_percentage'] ?>%</p>
                            <p class="card-text">Région: <?= $lastRedWine['region_name'] ?></p>
                            <p class="card-text">Prix Unitaire: <?= $lastRedWine['price'] ?>€</p>
                            <a href="<?= BASE_DIR ?>/nos-vins/detail?id=<?= $lastRedWine['id'] ?>" class="btn color1 position-absolute bottom-0 start-50 translate-middle-x mb-3">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card mb-3" style="max-width: 540px; min-height: 350px">
                    <div class="row g-0 m-3">
                        <div class="col-md-4">
                            <img src="uploads/vins/<?= $lastChampagne['photo'] ?>" alt="<?= $lastChampagne['name'] ?>" srcset="" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title"><?= $lastChampagne['name'] ?></h5>
                            <p class="card-text">description: <?= $lastChampagne['description'] ?></p>
                            <p class="card-text">Pourcentage d'alcool: <?= $lastChampagne['alcohol_percentage'] ?>%</p>
                            <p class="card-text">Région: <?= $lastChampagne['region_name'] ?></p>
                            <p class="card-text">Prix Unitaire: <?= $lastChampagne['price'] ?>€</p>
                            <a href="<?= BASE_DIR ?>/nos-vins/detail?id=<?= $lastChampagne['id'] ?>" class="btn color1 position-absolute bottom-0 start-50 translate-middle-x mb-3">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card mb-3" style="max-width: 540px; min-height: 350px">
                    <div class="row g-0 m-3">
                        <div class="col-md-4">
                            <img src="uploads/vins/<?= $lastBox['photo'] ?>" alt="<?= $lastBox['name'] ?>" srcset="" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title"><?= $lastBox['name'] ?></h5>
                            <p class="card-text">description: <?= $lastBox['description'] ?></p>
                            <p class="card-text">Pourcentage d'alcool: <?= $lastBox['alcohol_percentage'] ?>%</p>
                            <p class="card-text">Région: <?= $lastBox['region_name'] ?></p>
                            <p class="card-text">Prix Unitaire: <?= $lastBox['price'] ?>€</p>
                            <a href="<?= BASE_DIR ?>/nos-vins/detail?id=<?= $lastBox['id'] ?>" class="btn color1 position-absolute bottom-0 start-50 translate-middle-x mb-3">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pb-5" style="background-color: #9e121b">
    <h1 class="text-center pt-5 text-light"> Nos recommandations</h1>
    <div class="container-fluid mt-5 ">
        <div class="row">
            <div class="col-12 col-md-3 ">
                <div class="card mb-3" style="max-width: 540px; min-height: 350px">
                    <div class="row g-0 m-3">
                        <div class="col-md-4">
                            <img src="uploads/vins/<?= $featuredWhiteWine['photo'] ?>" alt="<?= $featuredWhiteWine['name'] ?>" srcset="" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title"><?= $featuredWhiteWine['name'] ?></h5>
                            <p class="card-text">description: <?= $featuredWhiteWine['description'] ?></p>
                            <p class="card-text">Pourcentage d'alcool: <?= $featuredWhiteWine['alcohol_percentage'] ?>%</p>
                            <p class="card-text">Région: <?= $featuredWhiteWine['region_name'] ?></p>
                            <p class="card-text">Prix Unitaire: <?= $featuredWhiteWine['price'] ?>€</p>
                            <a href="<?= BASE_DIR ?>/nos-vins/detail?id=<?= $featuredWhiteWine['id'] ?>" class="btn color1 position-absolute bottom-0 start-50 translate-middle-x mb-3">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card mb-3" style="max-width: 540px; min-height: 350px">
                    <div class="row g-0 m-3">
                        <div class="col-md-4">
                            <img src="uploads/vins/<?= $featuredRedWine['photo'] ?>" alt="<?= $featuredRedWine['name'] ?>" srcset="" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title"><?= $featuredRedWine['name'] ?></h5>
                            <p class="card-text">description: <?= $featuredRedWine['description'] ?></p>
                            <p class="card-text">Pourcentage d'alcool: <?= $featuredRedWine['alcohol_percentage'] ?>%</p>
                            <p class="card-text">Région: <?= $featuredRedWine['region_name'] ?></p>
                            <p class="card-text">Prix Unitaire: <?= $featuredRedWine['price'] ?>€</p>
                            <a href="<?= BASE_DIR ?>/nos-vins/detail?id=<?= $featuredRedWine['id'] ?>" class="btn color1 position-absolute bottom-0 start-50 translate-middle-x mb-3">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card mb-3 me-1" style="max-width: 540px; min-height: 350px">
                    <div class="row g-0 m-3">
                        <div class="col-md-4">
                            <img src="uploads/vins/<?= $featuredChampagne['photo'] ?>" alt="<?= $featuredChampagne['name'] ?>" srcset="" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title"><?= $featuredChampagne['name'] ?></h5>
                            <p class="card-text">description: <?= $featuredChampagne['description'] ?></p>
                            <p class="card-text">Pourcentage d'alcool: <?= $featuredChampagne['alcohol_percentage'] ?>%</p>
                            <p class="card-text">Région: <?= $featuredChampagne['region_name'] ?></p>
                            <p class="card-text">Prix Unitaire: <?= $featuredChampagne['price'] ?>€</p>
                            <a href="<?= BASE_DIR ?>/nos-vins/detail?id=<?= $featuredChampagne['id'] ?>" class="btn color1 position-absolute bottom-0 start-50 translate-middle-x mb-3">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card mb-3 me-1" style="max-width: 540px; min-height: 350px">
                    <div class="row g-0 m-3">
                        <div class="col-md-4">
                            <img src="uploads/vins/<?= $featuredBox['photo'] ?>" alt="<?= $featuredBox['name'] ?>" srcset="" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title"><?= $featuredBox['name'] ?></h5>
                            <p class="card-text">description: <?= $featuredBox['description'] ?></p>
                            <p class="card-text">Pourcentage d'alcool: <?= $featuredBox['alcohol_percentage'] ?>%</p>
                            <p class="card-text">Région: <?= $featuredBox['region_name'] ?></p>
                            <p class="card-text">Prix Unitaire: <?= $featuredBox['price'] ?>€</p>
                            <a href="<?= BASE_DIR ?>/nos-vins/detail?id=<?= $featuredBox['id'] ?>" class="btn color1 position-absolute bottom-0 start-50 translate-middle-x mb-3">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="container-fluid p-5">
        <div class="row content">
            <div class="col-lg-3 centerCard ">
                <img src="<?= BASE_DIR ?>/uploads/blog/<?= $articles['photo_article']; ?>" alt="" class="rounded card-bw">
            </div>
            <div class="col-lg-9 ">
                <h2><?= $articles['title'] ?></h2>
                <div><?= substr($articles['content'], 0, 300) ?>...</div>
                <a href="<?= BASE_DIR ?>/blog/details?id=<?= $articles['id'] ?>">Voir plus</a>
                <div>Ajouté le <?= date('d-m-Y H:i:s', strtotime($articles['date'])) ?></div>
            </div>
        </div>
    </div>
</div>