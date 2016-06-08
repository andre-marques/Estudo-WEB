<h1><?php echo "Calendário - Domingo (vermelho) e Sabado (negrito)"; ?></h1>

<table border = "1">
	<tr>
		<th>Dom</th>
		<th>Seg</th>
		<th>Ter</th>
		<th>Qua</th>
		<th>Qui</th>
		<th>Sex</th>
		<th>Sáb</th>
	</tr>
	<?php calendario(2); ?>
	
</table>

<?php 
	function linha($semana)
	{
		echo "<tr>";
		for ($i = 0; $i <= 6 ; $i++) { 
			if (isset($semana[$i])) { // isset verifica se uma variável existe ou se um índice em um array foi definido
				if($semana[$i] == -1){
					echo "<td></td>";
				}elseif ($i == 0) {
					echo "<td><font color = '#FF0000'>{$semana[$i]}</font></td>";
				}elseif ($i == 6) {
					echo "<td><b>{$semana[$i]}</b></td>";
				}else{
					echo "<td>{$semana[$i]}</td>";					
				}
			} else {
				echo "";
			}
		}
		echo "</tr>";
	}

	function calendario($comeca)
	{
		$dia = 1;
		$semana = array();
		for ($i = 0; $i < $comeca; $i++) { 
			array_push($semana, -1);
		}
		while ($dia <= 31) {
			array_push($semana, $dia);

			if (count($semana) == 7) {
				linha($semana);
				$semana = array();
			}

			$dia++;
		}
		linha($semana);
	}

 ?>