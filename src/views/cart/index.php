<div id="shopping-cart">
	<div class="txt-heading">Panier de Produits</div>
	<a id="btnEmpty" href="cart/empty">Vider Panier</a>
	<?php
	if (isset($_SESSION["cart_item"])) {
		$total_quantity = 0;
		$total_price = 0;
	?>
		<table class="tbl-cart" cellpadding="10" cellspacing="1">
			<tbody>
				<tr>
					<th style="text-align:left;">Nom</th>
					<th style="text-align:left;">Ref</th>
					<th style="text-align:right;" width="5%">Quantité</th>
					<th style="text-align:right;" width="10%">Prix Unitaire</th>
					<th style="text-align:right;" width="10%">Prix</th>
					<th style="text-align:center;" width="5%">Retirer</th>
				</tr>
				<?php
				foreach ($_SESSION["cart_item"] as $item) {
					$item_price = $item["quantity"] * $item["price"];
				?>
					<tr>
						<td><img src="/best-wines/uploads/vins/<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
						<td><?php echo $item["id"]; ?></td>
						<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
						<td style="text-align:right;"><?php echo $item["price"] . " €"; ?></td>
						<td style="text-align:right;"><?php echo number_format($item_price, 2) . " €"; ?></td>
						<td style="text-align:center;"><a href="/best-wines/cart/remove?id=<?php echo $item["id"]; ?>" class="btnRemoveAction"><img src="uploads/icon-delete.png" alt="Remove Item" /></a></td>
					</tr>
				<?php
					$total_quantity += $item["quantity"];
					$total_price += ($item["price"] * $item["quantity"]);
				}
				$_SESSION['total_price'] = $total_price ;
				?>
				<tr>
					<td colspan="2" align="right">Total:</td>
					<td align="right"><?php
					 echo $total_quantity; ?></td>
					<td align="right" colspan="2"><strong><?php echo number_format($total_price, 2) . " €"; ?></strong></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	<?php
	} else {
	?>
		<div class="no-records">Votre panier est vide</div>
	<?php
	}
	?>
</div>
<div></div>
<div class="no-records p-4">
	<?php if (isset($_SESSION["cart_item"])) : ?>
		<a href="/best-wines/pay" class="btn color1 p-1">Valider la commande</a>
		
	<?php endif ?>
	<a href="javascript:history.go(-1)" class="btn color1 p-1">Continuer mes achats</a>
</div>