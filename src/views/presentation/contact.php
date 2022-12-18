<div class="container">
    <h1 class="text-center">Nous contacter</h1>
    <form id="contact-form" action="<?= BASE_DIR ?>/src/views/presentation/send-email.php" method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Entrer votre adresse mail">
        </div>
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Entrer votre nom">
        </div>
        <div class="form-group">
            <label for="subject">Sujet</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Entrer la raison de votre message">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" rows="4" placeholder="Entrer votre message"></textarea>
        </div>
        <div class="py-3 text-center">
            <button type="submit" class="btn color1" id="submit">Envoyer le message</button>
        </div>
    </form>
</div>