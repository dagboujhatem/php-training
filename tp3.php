<!DOCTYPE html>
<html>
<head>
	<title>Third Tp</title>
</head>
<body>
	<?php
			// fist exemple (for statement)
			$user_names = ['Ahmed', 'Ali', 'Mohamed Ali', 'Med'];

			for ($i=0; $i < count($user_names); $i++) { 
				# code...
				echo $user_names[$i] . '<br>';
			}

			// 2eme exemple (for statement)
			for ($x = 0; $x <= 100; $x+=5) {
			  echo "The number is: $x <br>";
			}

			// (foreach statement)
			foreach ($user_names as $name) {
				# code...
				if ($name == "Mohamed Ali")
				{
					echo "Votre nom est : $name , a ".strlen($name)." caractères.<br>";
				}
			}

			// while loop
			$x = 1;

			while($x <= 5) {
			  echo "The number is: $x <br>";
			  $x++;
			}
	?>
</body>
</html>