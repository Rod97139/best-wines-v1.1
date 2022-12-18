<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Product;

//Gestion du panier

class CartController extends Controller
{

	//affichage du panier
	public function index()	{
		
		$this->renderView('cart/index');
	}

	//Ajout d'un produit
	public function addProduct()
	{
		$product = new Product; 

        $id = $_GET['id'];
        
        if(!empty($_POST["qty"])) {
			$productById = $product->findOneItemBy(['id' => $id]);
			

			$itemArray = array(
				$productById->name => array(
					'name'=>$productById->name, 
					'id'=>$productById->id, 
					'quantity'=>$_POST["qty"], 
					'price'=>$productById->price, 
					'image'=>$productById->photo,
					'total_price' => $_POST["qty"]*$productById->price));

			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productById->name,array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v ) {
							if($productById->name == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["qty"];
							}
					}
					
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}

		header('Location: /best-wines/cart');
		exit;
       
	}

//Suppression d'un produit
	public function removeProduct()
	{
		if (!empty($_SESSION["cart_item"])) {
			foreach ($_SESSION["cart_item"] as $k => $v) {
				if ($_GET["id"] == $v['id'])
					unset($_SESSION["cart_item"][$k]);
				if (empty($_SESSION["cart_item"]))
					unset($_SESSION["cart_item"]);
			}
		}
		header('Location: /best-wines/cart');
		exit;
	}

//Vider le panier
	public function emptyCart()
	{
		unset($_SESSION["cart_item"]);
		header('Location: /best-wines/cart');
		exit;
	}
}
