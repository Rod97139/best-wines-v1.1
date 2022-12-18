<div id="filter">
    <form action="" method="get">
        <div class="container text-center">
            <div class="row justify-content-md-center">
                <div class="col col-lg-3">
                    <div id="criteria" class="text-start">Type de vin :</div>
                    <div class=" form-check text-start">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Vin Rouge
                        </label>
                    </div>
                    <div class="form-check text-start">
                        <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Vin Blanc
                        </label>
                    </div>
                    <div class="form-check text-start">
                        <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Champagne
                        </label>
                    </div>
                </div>
                <div class="col col-lg-3">
                    <label for="customRange" class="col-3 mb-3"> Trier par prix maximum : <span id="rangeValue">1</span> €</label>
                    <input type="range" name="filterPrice" value="1" min="1" max="1000" class="form-range" id="customRange" onchange="rangeSlide(this.value)">
                </div>
                <div class="col col-lg-3">
                    <div class="form-check text-start">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="reverseCheck1">
                            Notre sélection vin rouge
                        </label>
                    </div>
                    <div class="form-check text-start">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="reverseCheck2">
                            Notre sélection de vin Blanc
                        </label>
                    </div>
                    <div class="form-check text-start">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="reverseCheck2">
                            Notre sélection de champagne
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit">Filtrer</button>
    </form>
</div>
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php foreach ($products as $product) : ?>
            <div class="card mb-3 me-5" style="max-width: 540px; min-height: 300px">
                <div class="row g-0 mt-3">
                    <div class="col-md-4">
                        <img src="uploads/vins/<?= $product['photo'] ?>" alt="<?= $product['name'] ?>" srcset="" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title"><?= $product['name'] ?></h5>
                        <p class="card-text"><?= $product['description'] ?></p>
                        <p class="card-text">Pourcentage d'alcool: <?= $product['alcohol_percentage'] ?>%</p>
                        <p class="card-text">Région: <?= $product['region_name'] ?></p>
                        <p class="card-text">Prix Unitaire: <?= $product['price'] ?>€</p>
                        <a href="<?= BASE_DIR ?>/nos-vins/detail?id=<?= $product['id'] ?>" class="btn color1 position-absolute bottom-0 start-50 translate-middle-x mb-3">Détails</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script>
    const rangeSlide = (value) => {
        document.getElementById("rangeValue").innerHTML = value;
    }
</script>