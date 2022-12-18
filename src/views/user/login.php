<div class="container d-grid gap-3 mt-5">
    <div class="mb-3 mx-auto">
        <h1> Veuillez saisir vos identifiants pour vous connecter</h1>
    </div>
</div>
<div class="container">
<?php $errors ?>
    <form action="" method="post" id="register">
        <div class="form-group">
            <label for="email">Votre adresse email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Votre mot de passe</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group pt-3">
            <input type="submit" name="submit" value="Se connecter" class="btn color1">
        </div>
    </form>
</div>
<div class="container d-grid gap-3 mt-5">
    <p class="mb-3 mx-auto"> Si vous n'avez pas encore de compte, vous pouvez en créer un maintenant.</p>
    <a class="btn color1 mb-3 mx-auto" role="button" aria-disabled="true" href="register">Créer un compte</a>
</div>

