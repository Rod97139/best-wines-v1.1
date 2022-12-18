<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\User;
use App\Models\Sale;
use App\Models\Invoice;
use Core\Partials\CheckLog;

//En cours de réalisation
//Gestion des factures
class InvoiceController extends Controller
{

    // Function qui renvoit l'historique des commandes pour un utilisateur
    public function showOrders()
    {
        CheckLog::checkClientIsLogged();
        $invoice = new Invoice();
        $all_invoices = $invoice->findInvoiceByUser();
        $this->renderView('user/compte', compact('all_invoices'));
    }
    public function showOne()
    {   
        CheckLog::checkClientIsLogged();
        $id = $_GET['id'];
        $invoice = new Invoice();
        $invoices = $invoice->findOneInvoiceUserBy($id);        
        $this->renderView('user/compteDetails', compact('invoices'));
    }
}
