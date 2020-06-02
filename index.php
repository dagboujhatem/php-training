<?php 

	/*  block to read visit from database
	*/


	// les constantes en PHP
	define("TAUX_TVA", 0.05);
	$product_price = 200 + 200 * TAUX_TVA;
	echo 'Produit ça coûte vers : '. $product_price . ' DTN <br>';

	define('USERS_LIST', ['Ahmed', 'Ali']);


	// this is a comment (in sigle line)

		$old = 2;
		$visit = $old + 1;

	# comment here in signe line

	/*   this is a comment 
	in multiple line 
	*/

	/*  block to incriment visit in database
	*/

	$age = 25;
	$age -= 5; 
	echo $age . '<br>';

	// Data type section 
			// string 
			$fist_name = "david"; 
			// integer
			$age_user = 42; 
			// float or called double
			$moyenne = 12.5;
			// array ( sont les tableaux)
			$names = ['Ahmed', 'Ali', 'Saleh'];
			// Boolean 
			$is_admin = false; // false or true value
			// NULL
			$last_name = NULL;
			// Object ( Class )
			//$user->last_name;

	// function can be used in string types
			echo "la langeur de la chaine est " . strlen("Hello world!") . '<br>';
			echo "la chaine contient (mots) " .
			 str_word_count("Hello world again") . '<br>';
			echo strrev("Hello world again") . '<br>';
			echo strpos("Hello world!", "world"). '<br>'; // outputs 6
			echo str_replace("world", "Dolly", "Hello world!"). '<br>'; // outputs Hello Dolly!

	// function can be used in Integer/Float type
			$price = 200;
			//var_dump(is_nan($price));
	// Castiong => c'est le convertion entre les types
			// par exemple : convertion de string en integer
			$prix = (int) "20000.05";
			//var_dump($prix * 10);
	// MATH
		# PI value
			// echo 'PI = ' . (pi()). '<br>'; // returns 3.1415926535898
	 	# MIN & Max value 
			// echo 'MIN = ' . (min(0, 150, 30, 20, -8, -200, -750)) . '<br>';  // returns -200
			// echo 'MAX = ' . (max(0, 150, 30, 20, -8, -200, 1208)) . '<br>';  // returns 150
			// echo 'Absolute value of -150 = ' . (abs(-150)) . '<br>';  // returns 150
			// echo 'Racine carées de 64 = ' . (sqrt(64)) . '<br>';  // returns 8
			// echo 'Valeur aléotoire = ' . rand() . '<br>';  // returns 
			// echo 'Valeur aléotoire entre 100 et 999 = ' . rand(100, 999) . '<br>';  // returns 
	// les opérateurs
			if($price <= 300) 
			{
				// si le price < ou = à 300
				$new_price = $price + $price * 0.1 ;
				echo 'le prix final ça sera '. $new_price . ' DTN <br>';
			}
			else if($price <= 500)
			{
				// si le price < ou = à 500
				$new_price = $price + $price * 0.2 ;
				echo 'le prix final ça sera '. $new_price . ' DTN <br>';
			}
			else {
				// si le price > à 500
				$new_price = $price + $price * 0.3 ;
				echo 'le prix final ça sera '. $new_price . ' DTN <br>';
			}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to my Web site</title>
</head>
<body>
	<?php 

		$name =  "Ali";
		$age = 22; 

		echo '<h1> Welcome '. $name . ' , Your age is ' . $age . '. ';
	?>
	<h1><?php echo 'Welcome back, your visit number is : ' . $visit; ?></h1>
</body>
</html>