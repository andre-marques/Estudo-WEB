<html>
	<head>
		<title>3.8 - Desafios (1)</title>
	</head>
	<body>
		<h1><?php echo exibe_Frase(date('H')); ?></h1>
	</body>
</html>

<?php  
	function exibe_Frase($hora)
	{
		if ($hora >= 0 && $hora < 12) {
			return "Bom dia!";
		}elseif ($hora >= 12 && $hora < 18) {
			return "Boa tarde!";
		}else{
			return "Boa noite!";
		}
	}

?>