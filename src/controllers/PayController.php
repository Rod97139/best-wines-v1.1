<?php

namespace App\Controllers;

use App\Models\Invoice;
use App\Models\StripePayment;
use Core\Controller;
use Core\Partials\CheckLog;
use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersGetRequest;
use App\Models\Sale;

//En cours de réalisation
//Gestion des paiements
class PayController extends Controller
{
    //Choix du mode de paiement avec récupération du panier. Paypal seulement
    public function index()
    {
        CheckLog::checkClientIsLogged();
        $total = $_SESSION['total_price'];
        $paypal_items_array = [];
        foreach ($_SESSION["cart_item"] as $k => $v) {
            $paypal_items_array[] = [
                'name' => $v['name'],
                'unit_amount' => [
                    'value' => $v['price'],
                    'currency_code' => 'EUR'
                ],
                'quantity' => $v['quantity']
            ];
        }
        
        $order = json_encode([
            'purchase_units' => [[
                'description' => "Panier de l'utilisateur n°" . $_SESSION['user']['id'],
                'items' => $paypal_items_array,
                'amount' => [
                    'currency_code' => 'EUR',
                    'value' => $total,
                    'breakdown' => [
                        'item_total' => [
                            'currency_code' => 'EUR',
                            'value' => $total
                        ]
                    ]
                ]
            ]]
        ]);
        $this->renderView('pay/index', compact('order'));
    }

    //Paiement avec PayPal
    public function paypal()
    {
        $environment = new SandboxEnvironment("Ad3W5NwEIU0dsnq-0ceovxjEu4rMfLjiXByoqs08JqjYGS1rUy7oqwVprP4jWDr91NIe1fC9_kk2Ypbq", "EEE0U9BvSZfHmhV2jfZvElGXs8qvG1jtcGwPTbeDEhchYwA9vBmdSweerQTpySRSUQO6txEov_3guUAl");
        $client = new PayPalHttpClient($environment);
        $request = new OrdersGetRequest($_GET['orderId']);
        $response = $client->execute($request);
        $OrderId = $response->result->id;
        // dd($response);

        if ($response->result->status == 'COMPLETED') {
            $sale = new Sale();
            $invoice = new Invoice();
            $invoice_array = [];

            foreach ($_SESSION["cart_item"] as $k => $v) {
                $invoice_array[] = [
                    'id' => $v['id'],
                    // 'name' => $v['name'],
                    'quantity' => $v['quantity'],
                    'total_price' => $v['total_price']
                ];
            }
            $i = 0;
            while ($i < count($invoice_array)) {

                foreach ($invoice_array[$i] as $k => $v) {
                    $k = 'id';
                    $v = $sale->setId_product($invoice_array[$i]['id']);
                    $k = 'id_user';
                    $v = $sale->setId_user($_SESSION["user"]["id"]);
                    $k = "quantity";
                    $v = $sale->setQuantity($invoice_array[$i]['quantity']);
                    $k = 'total_price';
                    $v = $sale->setPrice_Total_Product($invoice_array[$i]['total_price']);
                    $k = 'orderId';
                    $v = $sale->setOrderId($OrderId);
                }
                $i = $i + 1;
                $sale->InsertSale();
            }
                $clientfullname = $response->result->payer->name->given_name.' '. $response->result->payer->name->surname;
                $clientfullAddress = $response->result->purchase_units[0]->shipping->address->address_line_1.' '.$response->result->purchase_units[0]->shipping->address->admin_area_2.' '.$response->result->purchase_units[0]->shipping->address->postal_code;
                $totalpricepaid = $response->result->purchase_units[0]->amount->value;
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    $k = 'clientName';
                    $v = $invoice->setClientName($clientfullname);
                    $k = "billingAddress";
                    $v = $invoice->setBillingAddress($clientfullAddress);
                    $k = 'total_price';
                    $v = $invoice->setTotal_price($totalpricepaid);
                    $k = 'orderId_Invoice';
                    $v = $invoice->setOrderId_Invoice($OrderId);
                }
                $i = $i + 1;
                $invoice->InsertInvoice();
            $invoice = new Invoice;
            $lastInvoice= $invoice->findLastInvoice();
            $this->renderView('pay/success', compact('lastInvoice'));
        } else {
            echo 'echec du paiement';
        }
        $this->renderView('pay/success', compact('lastInvoice'));

    }

    //En cours de réalisation
    //Paiement avec stripe
    public function stripePayment()

    {
        $payment = new StripePayment('sk_test_51MFSr6DqvB6uQCmLYh57hTz529jASvKBjeORVylUg6190E6aIXaknfUa6ymuIaa24UA2LUUVZNvwuSsWhyrlHwUG002d6u3Qq0', 'whsec_01c59bc18dc792fcd543427e5eaa98e55dd08975e5d7b3205a242bf83d78a4ff');
        $payment->startPayment();
    }

    public function success()
    {
        $this->renderView('pay/success');
    }

    public function webhook()
    {
        $psr17Factory = new Psr17Factory();

        $creator = new ServerRequestCreator(
            $psr17Factory, // ServerRequestFactory
            $psr17Factory, // UriFactory
            $psr17Factory, // UploadedFileFactory
            $psr17Factory  // StreamFactory
        );

        $request = $creator->fromGlobals();
        
        $payment = new StripePayment('sk_test_51MFSr6DqvB6uQCmLYh57hTz529jASvKBjeORVylUg6190E6aIXaknfUa6ymuIaa24UA2LUUVZNvwuSsWhyrlHwUG002d6u3Qq0', 'whsec_01c59bc18dc792fcd543427e5eaa98e55dd08975e5d7b3205a242bf83d78a4ff');
        $payment->handle($request);
    }


    
}
