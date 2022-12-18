<div class="container p-5">
    <h1 class="text-center">Page employé</h1>
    <h2>Gestion des commandes</h2>
    <a href="<?= BASE_DIR ?>/employe/commandes" class="btn color1">Commandes</a>
    <h2>Gestion du stock</h2>
    <a href="<?= BASE_DIR ?>/employe/stock" class="btn color1">Stock</a>
    <h2>Gestion du blog</h2>
    <a href="<?= BASE_DIR ?>/blog" class="btn color1">Blog</a>
    <h2>Gestion des Remboursement</h2>
    <a href="<?= BASE_DIR ?>/employe/paiements" class="btn color1">Remboursement</a>
    <h2>Gestion des promotions</h2>
    <a href="<?= BASE_DIR ?>/employe/promotion" class="btn color1">promotions</a>
    <?php if (isset($_SESSION['user']['is_admin']) && $_SESSION['user']['is_admin']) : ?>
        <h2>Espace Admin</h2>
        <a href="<?= BASE_DIR ?>/administrateur" class="btn color1">Gestion des employés</a>
    <?php endif ?>
</div>