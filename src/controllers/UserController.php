<?php

namespace App\Controllers;

use App\Models\User;
use Core\Controller;
use Core\Partials\CheckLog;

// à améliorer
//Gestion de l'utilisateur
class UserController extends Controller
{
//Connexion
    public function login()
    {
        $errors = null;
        CheckLog::checkIsNotLogged();
        if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            $user = UserController::findOneByEmail($email);
            if (!$user) {
                $_SESSION['errors'][] = "nous n'avons pas un compte avec cette adresse";
            } else {
                if (password_verify(htmlspecialchars($_POST['password']), $user->password)) {
                    $_SESSION['user'] = [
                        'is_logged' => TRUE,
                        'email' => $user->email,
                        'id' => $user->id,
                        "is_employee" => $user->is_employee,
                        "is_admin" => $user->is_admin
                    ];
                    header('Location: ' . $_SESSION['last_page']);
                    exit;
                } else {
                    $_SESSION['errors'][] = "Le mot de passe est erroné";
                }
            }
        } // else {
        //     // $_SESSION['errors'][] = "Tous les champs sont obligatoires";
        // }
        $_SESSION['last_page'] = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
        $errors = CheckLog::errors();
        $this->renderView('user/login', compact('errors'));
    }

//Déconnexion
    public function logout()
    {
        if (!empty($_SESSION['user']['is_logged'])) {
            CheckLog::logoutUser();
            header('Location: /best-wines');
        } else {
            echo "Vous n'êtes même pas connecté ! ";
        }
    }


    /**
     * Insérer un nouvel utilsiateur
     *
     * @return void
     */
    public function insert()
    {
        if (isset($_POST['submit'])) {
            $user = new User();
            $user->setEmail(htmlentities($_POST['email']));
            $user->setPassword(htmlentities($_POST['password']));
            $result = $user->insert();
            if ($result) {
                $message =  "insertion bien effectuée";
                $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
                $user = UserController::findOneByEmail($email);
                if (!$user) {
                    $_SESSION['errors'][] = "nous n'avons pas un compte avec cette adresse";
                } else {
                    if (password_verify(htmlspecialchars($_POST['password']), $user->password)) {
                        $_SESSION['user'] = [
                            'is_logged' => TRUE,
                            'email' => $user->email,
                            'id' => $user->id,
                            "is_employee" => $user->is_employee,
                            "is_admin" => $user->is_admin
                        ];
                    }
                }
                header('Location: ' . $_SESSION['last_page']);
                exit;
            } else {
                $message =  "échec";
            }
            $this->renderView('user/insert', [
                'message' => $message
            ]);
        }
        $this->renderView('user/insert');
    }

//Vérification émail déjà dans la BDD
    public static function findOneByEmail(string $email): object|array|false
    {
        $user_to_find = new User();
        $user = $user_to_find->findOneItemBy(['email' => $email]);
        return $user;
    }
}
