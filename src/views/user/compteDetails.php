<div class=" text-center py-3">
    <h1>Voici le détail de votre facture</h1>
</div>
<div class="text-center p-1">
<a href="javascript:history.go(-1)"><button class="btn btn-warning" ><< Retour</button></a>
</div>
<div class="p-3">
    <h2>Détail de la commande #<?=$invoices[0]['id_invoice'] ?></h2>
    <ul>
        <li>Référence Paypal : <?= $invoices[0]['orderId'] ?></li>
        <li>Statut de la commande : Paiement reçu !</li>

        <li> Nom du client : <?= $invoices[0]['clientName'] ?></li>
        <li> Adresse de facturation : <?= $invoices[0]['billingAddress'] ?></li>        
        <li> Détail de la commande : </li></ul>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No facture</th>
            <th scope="col">Date</th>
            <th scope="col">Etat</th>
            <th scope="col">Prix unitaire</th>
            <th scope="col">Total par produit</th>
        </tr>
    </thead>
    <tbody id='table-body'>
        <?php  foreach ($invoices as $item) :?>

					<tr>
						<td><img src="/best-wines/uploads/vins/<?= $item["photo"]; ?>" class="cart-item-image bg-light" /><?= $item["name"]; ?></td>
						<td><?= $item["id_product"]; ?></td>
						<td style="text-align:right;"><?= $item["quantity"]; ?></td>
						<td style="text-align:right;"><?= $item["price"] . " €"; ?></td>
						<td style="text-align:right;"><?= $item['price_total_product'] . " €"; ?></td>
					</tr>
<?php endforeach ?>
                    <tr class="h2">
					<td colspan="2" align="right">Total:</td>
					<td align="right" colspan="2"><strong><?=$invoices[0]['total_price'] . " €"; ?></strong></td>
					<td></td>
			    	</tr>

    </tbody>
</table>
</div>