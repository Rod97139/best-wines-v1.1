<?php

namespace Core;

use Core\Partials\StartSession;


// Démarrage de la session, simplification des chemins, récupérations du contenu de chaque page
abstract class Controller
{
    public function __construct()
    {
        StartSession::start();
    }

    public function renderView(string $view_name, array $params = []): void
    {
        extract($params);
        ob_start();
        require_once "src/views/$view_name.php";
        $content = ob_get_clean();
        require_once 'src/views/layout.php';
    }
}
