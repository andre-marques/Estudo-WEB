<?php 
	echo "Hoje é dia " . date('d/m/Y'); //visualizar a data no formado 26/05/2016
	echo " agora são " . date('H:i:s'); //visualizar a hora no formado 11:35:34

	echo "</br></br>Hoje é dia " . date('d/m/y'); //visualizar a data no formado 26/05/16

	echo "</br></br>Agora são " . date('h:i:s A'); //visualizar a hora no formado 11:35:34 AM or PM
	echo "</br>Agora são " . date('h:i:s a'); //visualizar a hora no formado 11:35:34 am or pm

	echo "</br></br>Dia do mês " . date('j'); //visualizar o dia do mês 1 até 31

	$dia_hoje = date('N'); //visualizar um número que representa o dia da semana 1 - 7 (segunda - domingo)
	$dia_falta = 6 - $dia_hoje;
	echo "</br></br>Faltam " . $dia_falta . " dias para o sábado"; 

	echo "</br></br>Mês atual é " . date('F');  //visualização completa do Mês (January até December)

	echo "</br></br>Mês atual é " . converte_Mes(date('m'));

	//função pega o mês representado em Decimal (01-12) e retorna uma String correspondente
	function converte_Mes($mes)
	{
		switch ($mes) {
			case 1:
				return 'Janeiro';
			case 2:
				return 'Fevereiro';
			case 3:
				return 'Março';
			case 4:
				return 'Abril';
			case 5:
				return 'Maio';
			case 6:
				return 'Junho';
			case 7:
				return 'Julho';
			case 8:
				return 'Agosto';
			case 9:
				return 'Setembro';
			case 10:
				return 'Outubro';
			case 11:
				return 'Novembro';
			case 12:
				return 'Dezembro';
			default:
				return "Só existe até o mês 12";
		}
	}
?>