<?php

namespace App\Models;

use Psr\Http\Message\ServerRequestInterface;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use Stripe\StripeClient;
use Stripe\Webhook;

class StripePayment
{

    public function __construct(readonly private string $clientSecret, readonly private string $webhookSecret = '')
    {


        Stripe::setApiKey($this->clientSecret);
        Stripe::setApiVersion('2022-11-15');
    }

    // Session de paiement stripe
    public function startPayment()
    {
       
        $stripe_items_array = [];

        foreach ($_SESSION["cart_item"] as $k => $v) {

            $stripe_items_array[] = [
                'quantity' => $v['quantity'],
                'price_data' => [
                    'currency' => 'EUR',
                    'product_data' => [
                        'name' => $v['name']
                    ],
                    'unit_amount' => $v['price'] * 100
                ]
            ];
        }


        $session = Session::create([
            'line_items' =>  $stripe_items_array,
            'mode' => 'payment',
            'success_url' => 'http://localhost/best-wines/pay/success',
            'cancel_url' => 'http://localhost/best-wines',
            // 'billing_adress_collection' => 'required',
            'shipping_address_collection' => [
                'allowed_countries' => ['FR']
            ],
            // 'automatic_tax' => [
            //     'enabled'
            // ],
            'metadata' => [
                'userId' => $_SESSION['user']['id']
            ]

        ]);

        header("HTTP/1.1 303 See Other");
        header('Location: ' . $session->url);
    }

    //création d'évènement avec webhook
    public function handle(ServerRequestInterface $request)
    {
       

        $signature = $request->getHeaderLine('stripe-signature');
        
        $body = (string)$request->getBody();
        $event = Webhook::constructEvent(
            $body,
            $signature,
            'whsec_01c59bc18dc792fcd543427e5eaa98e55dd08975e5d7b3205a242bf83d78a4ff'
        );

        
    
        $data = $event->data['object'];
        $client = new StripeClient('sk_test_51MFSr6DqvB6uQCmLYh57hTz529jASvKBjeORVylUg6190E6aIXaknfUa6ymuIaa24UA2LUUVZNvwuSsWhyrlHwUG002d6u3Qq0');
        $items = $client->checkout->sessions->allLineItems($data['id']);
        foreach ($items as $item) {
            dump($item->description);
        
        }
        // On retrouve la commande dans la base de données
        // On la marque comme payé
    
        dd($items);
    }
}
