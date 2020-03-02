<!DOCTYPE html>
<html>
<head>
	<title>Var dump PHP</title>
</head>
<body>

	<?php
		$texto = "Hello World!";
		$texto2 = 'Hello World!';
		$numeroInteiro = 123;

		var_dump($texto);
		echo "<br>";
		echo "<div id=\'teste'></div>";
		var_dump($numeroInteiro);

		$float1 = 1.2345;
		$float2 = 1.23456;

		echo $float1 ."; " . $float2;
	?>

</body>
</html>