<?php
	# function  used to calculate the final price (Bonne pratique DRY)
	function final_price($prix, $taux_tva)
	{
		$final_price = $prix + $prix *  $taux_tva;
		return $final_price;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tp 4</title>
</head>
<body>
	<?php

			$les_prix_des_produits = [100, 400, 300.5];

			foreach($les_prix_des_produits as $prix) {
                echo "le prix de produit est : $prix , etle prix final est : " .
                    final_price($prix, 0.1) . '<br>';
            }

	?>
</body>
</html>