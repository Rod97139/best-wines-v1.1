<?php

namespace Core\Partials;

class CheckLog
{
    //Verification si l'utilisateur est un employé
    public static function checkIsEmployee(): void
    {

        if (!isset($_SESSION['user']['is_employee']) || !$_SESSION['user']['is_employee']) {
            header('Location: /best-wines');
            exit;
        }
    }
    //Verification si l'utilisateur est un admin
    public static function checkIsAdmin(): void
    {
        if (!isset($_SESSION['user']['is_admin']) || !$_SESSION['user']['is_admin']) {
            header('Location: /best-wines');
            exit;
        }
    }

 //Verification si l'utilisateur est connecté
    public static function checkIsNotLogged(): void
    {
        if (isset($_SESSION['user']['is_logged']) && $_SESSION['user']['is_logged']) {
            header('Location: /best-wines');
            exit;
        }
    }
 //Verification si l'utilisateur n'est pas connecté
    public static function checkClientIsLogged(): void
    {
        if (!isset($_SESSION['user']['is_logged']) || !$_SESSION['user']['is_logged']) {
            header('Location: /best-wines/login');
            exit;
        }
    }

 //Fonction pour se déconnecter
    public static function logoutUser(): void
    {
        if (isset($_SESSION['user']['is_logged']) && $_SESSION['user']['is_logged']) {
            unset($_SESSION["user"]);
        }
    }
 //Fonction pour afficher les erreurs
    public static function errors(): void
    {
        if (isset($_SESSION['errors'])) {
            foreach ($_SESSION['errors'] as $error)
                echo ' <div class="alert alert-danger" role="alert">' . $error . '</div>';
        }
        $_SESSION['errors'] = [];
    }
}
