<?php if (isset($message)) : ?>
    <div>
        <span><?= $message ?></span>
    </div>
<?php endif; ?>
<div class="container d-grid gap-3 mt-5">
    <div class="mb-3 mx-auto">
        <h1> Veuillez vous enregistrer pour pouvoir vous connecter</h1>
    </div>
</div>
<div class="container " style="min-height :400px;">
<form action="<?= BASE_DIR ?>/register" method="post">
    <div class="form-group">
        <label for="email">email:</label>
        <input type="text" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">mot de passe:</label>
        <input type="texte" name="password" id="password" class="form-control">
    </div>
    <div class="form-group pt-3">
        <input type="submit" name="submit" value="Enregistrer" class="btn color1">
    </div>
</form>
</div>