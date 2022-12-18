<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Groupe1 DWWM">
    <meta name="description" content="Bienvenue sur BestWines, site de commerce de vin en ligne">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_DIR ?>/assets/styles/css/style.css">
    <!-- CSS for quill -->
    <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.snow.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Best wines</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="/best-wines">Best Wines</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <div class="search-box">
                            <input type="text" class="form-control me-2" autocomplete="off" placeholder="Rechercher un nom de produit..." />
                            <div class="result"></div>
                        </div>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu droplog">
                                <?php if (isset($_SESSION['user']['is_logged']) && $_SESSION['user']['is_logged']) : ?>
                                    <li class="dropdown-item-log">
                                        <a class="nav-link" href="<?= BASE_DIR ?>/logout">Se déconnecter</a>
                                    </li>
                                <?php else : ?>
                                    <li class="dropdown-item-log">
                                        <a class="nav-link" href="<?= BASE_DIR ?>/login">Se connecter</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li class="dropdown-item-log">
                                        <a class="nav-link" href="<?= BASE_DIR ?>/register">S'enregistrer</a>
                                    </li>
                                <?php endif ?>
                            </ul>
                        </li>
                        <?php if (isset($_SESSION['user']['is_admin']) && $_SESSION['user']['is_admin']) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?= BASE_DIR ?>/employe" role="button">
                                    Espace administrateur
                                </a>
                            </li>
                        <?php elseif (isset($_SESSION['user']['is_employee']) && $_SESSION['user']['is_employee']) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?= BASE_DIR ?>/employe" role="button">
                                    Espace employé
                                </a>
                            </li>
                        <?php elseif (isset($_SESSION['user']['is_logged']) && $_SESSION['user']['is_logged']) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?= BASE_DIR ?>/mon-compte" role="button">
                                    Mon compte
                                </a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown" id="dropdown-nav" href="./nos-vins">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Vins
                            </a>
                            <ul class="dropdown-menu ">
                                <li><a class="dropdown-item" href="<?= BASE_DIR ?>/nos-vins">Notre catalogue</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_DIR ?>/nos-vins/rouge">Rouges</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_DIR ?>/nos-vins/blanc">Blancs</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_DIR ?>/nos-vins/nos-champagnes">Champagnes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="<?= BASE_DIR ?>/nos-coffrets" role="button">
                                Coffrets
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/nos-fournisseurs">Nos fournisseurs</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="./nos-vins" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Qui sommes nous
                            </a>
                            <ul class="dropdown-menu ">
                                <li><a class="dropdown-item" href="<?= BASE_DIR ?>/qui-sommes-nous">Présentation BestWines</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_DIR ?>/presse">La presse parle de nous</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_DIR ?>/nous-contacter">Nous contacter</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_DIR ?>/mentions-legales">Les mentions légales</a></li>
                                <li><a class="dropdown-item" href="<?= BASE_DIR ?>/faq">Vos questions</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_DIR ?>/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/best-wines/cart">
                                Panier
                                <?php
                                if (isset($_SESSION["cart_item"])) {
                                    $total_quantity = 0;
                                    foreach ($_SESSION["cart_item"] as $item) {
                                        $total_quantity += $item["quantity"];
                                    }
                                    echo "(" .  $total_quantity . ")";
                                } ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <?= $content ?>

    <footer class="text-center text-lg-star footer p-1">
        <h3>L'ABUS D'ALCOOL EST DANGEREUX POUR LA SANTÉ, À CONSOMMER AVEC MODÉRATION.</h3>
        <img src="<?= BASE_DIR ?>/assets\img\bandeau_boissons_alcooliques.jpg" alt="bandeau de prévention contre l'abus d'alcool">
        <section class="">
            <div class="container text-center text-md-start mt-2">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto my-2">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-secondary"></i>Best Wines
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <div>
                            <a href="" class="me-4 link-secondary">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="" class="me-4 link-secondary">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="" class="me-4 link-secondary">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="" class="me-4 link-secondary">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="" class="me-4 link-secondary">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="" class="me-4 link-secondary">
                                <i class="fa fa-github"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto my-2">
                        <h6 class="text-uppercase fw-bold mb-4">
                            <a href="<?= BASE_DIR ?>/nos-vins" class="text-reset">Notre catalogue</a>
                        </h6>
                        <p>
                            <a href="<?= BASE_DIR ?>/nos-vins/rouge" class="text-reset">Rouges</a>
                        </p>
                        <p>
                            <a href="<?= BASE_DIR ?>/nos-vins/blanc" class="text-reset">Blancs</a>
                        </p>
                        <p>
                            <a href="<?= BASE_DIR ?>/nos-vins/nos-champagnes" class="text-reset">Champagne</a>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto my-2">
                        <h6 class="text-uppercase fw-bold mb-4"><a href=""></a>
                            <a href="<?= BASE_DIR ?>/nos-coffrets" class="text-reset">Coffrets</a>
                        </h6>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto my-2">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Aide
                        </h6>
                        <p>
                            <a href="<?= BASE_DIR ?>/faq" class="text-reset">FAQ</a>
                        </p>
                        <p>
                            <a href="<?= BASE_DIR ?>/mentions-legales" class="text-reset">Mentions légales</a>
                        </p>
                        <p>
                            <a href="<?= BASE_DIR ?>/presse" class="text-reset">Presse</a>
                        </p>
                        <p>
                            <a href="<?= BASE_DIR ?>/qui-sommes-nous" class="text-reset">Présentation</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="https://www.afpa.fr/">DWWM 22032 - Groupe 1</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="<?= BASE_DIR ?>/assets/js/app.js"></script>
    <script src="<?= BASE_DIR ?>/assets/js/search.js"></script>
</body>

</html>