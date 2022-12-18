
<?php
$paypalLink='/best-wines/pay/paypal';
if ($_SERVER['REDIRECT_URL'] == $paypalLink) : ?>
<div>
<div>
<h1 class="h1 text-center p-3"> Félicitations, le paiement a bien été effectué !</h1>
</div>
<div class="p-5">
    <h2>Voici le récapitulatif de votre commande :</h2>
    <ul>
        <li>Numéro de commmande : <?= $lastInvoice['id_invoice'] ?></li>
        <li>Référence Paypal : <?= $lastInvoice['orderId_Invoice'] ?></li>
        <li>Statut de la commande : Paiement reçu !</li>

        <li> Nom du client : <?= $lastInvoice['clientName'] ?></li>
        <li> Adresse de facturation : <?= $lastInvoice['billingAddress'] ?></li>        
        <li> Détail de la commande : </li>
        <table class="tbl-cart" cellpadding="10" cellspacing="1">
        <tbody>
        <tr>
					<th style="text-align:left;">Nom</th>
					<th style="text-align:left;">Ref</th>
					<th style="text-align:right;" width="5%">Quantité</th>
					<th style="text-align:right;" width="10%">Prix Unitaire</th>
					<th style="text-align:right;" width="10%">Prix total/unité</th>

				</tr>
        <?php foreach ($_SESSION["cart_item"] as $item) :
					$item_price = $item["quantity"] * $item["price"];
				?>
					<tr>
						<td><img src="/best-wines/uploads/vins/<?= $item["image"]; ?>" class="cart-item-image" /><?= $item["name"]; ?></td>
						<td><?= $item["id"]; ?></td>
						<td style="text-align:right;"><?= $item["quantity"]; ?></td>
						<td style="text-align:right;"><?= $item["price"] . " €"; ?></td>
						<td style="text-align:right;"><?= $item['total_price'] . " €"; ?></td>
					</tr>
        <?php 
         endforeach ?>
        			<tr class="h2">
					<td colspan="2" align="right">Total:</td>
					<td align="right" colspan="2"><strong><?=$lastInvoice['total_price'] . " €"; ?></strong></td>
					<td></td>
				</tr>
        </tbody>
        </table>    
    </ul>
    
    <div class="text-center p-3">
    <a href="/best-wines/" class="btn color1 p-1">Retourner à l'accueil</a>
    </div>
</div>
<?php  unset($_SESSION["cart_item"]);
 ?>

 <?php endif ?>
 <?php  if (isset($_SESSION["cart_item"])):?>
		
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<div class=stripeSuccess>
		<script>
		Swal.fire({
		title: 'Paiement validé ! \n Vous allez recevoir un mail de confirmation ',
		icon: 'success',
		html:
			'<a style="visibility: visible;" class = "btn color1" href="/best-wines/">Retourner à l\'accueil</a> ',
		background: '#211a1a',
		color: '#f3f3f3',
		showConfirmButton: false
		})
		</script>
		</div>
		<?php	unset($_SESSION["cart_item"]) ?>

		<?php 
		if (empty(($_SESSION["cart_item"]))){
				} ?>

			<?php endif ?>


