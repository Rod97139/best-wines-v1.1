<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\User;
use App\Models\Sale;
use App\Models\Invoice;
use Core\Partials\CheckLog;

//Gestions des ventes
class SaleController extends Controller
{

    // Function qui renvoit le détals des commandes pour un utilisateur
    public function showSales()
    {
        CheckLog::checkClientIsLogged();
        $sale = new Sale();
        $all_sales = $sale->findProductBySale();
        $this->renderView('user/compteDetails', compact('all_sales'));
    }
}
