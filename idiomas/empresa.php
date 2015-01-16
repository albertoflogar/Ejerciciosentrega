<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" >
	<title></title>
	
</head>
<body>

	<?php
	$idioma=$_GET['idioma'];
	
	switch($idioma){
		case "espanol":
			echo "Español";
			break;
		case "ingles":
			echo "Inglés";
			break;
		case "frances":
			echo "Francés";
			break;
		case "aleman":
			echo "Alemán";
			break;		
	}

	?>
	
</body>
</html>