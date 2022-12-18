<?php

namespace App\Controllers;

use Core\Controller;


//En cours de réalisation
//Gestion des remboursements

class PaiementsController extends Controller
{

    public function index()
    {
        $this->renderView('employe/paiements/index');
    }
}
