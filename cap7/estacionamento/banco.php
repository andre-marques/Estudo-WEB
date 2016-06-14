<?php 
	
	$bdServidor = "127.0.0.1";
	$bdNome = "root";
	$bdSenha = "";
	$bdBanco = "estacionamento";

	$conexao = mysqli_connect($bdServidor, $bdNome, $bdSenha, $bdBanco);

	if (mysqli_connect_errno($conexao)) {
		echo "Não foi possível conectar a {$bdBanco}";
		die();
	}

	function lista_veiculos($conexao){

		$sqlBusca = "SELECT * FROM veiculos";

		$resultado = mysqli_query($conexao, $sqlBusca);

		$veiculos = array();

		while ($veiculo = mysqli_fetch_assoc($resultado)) {
			$veiculos[] = $veiculo;
		}

		return $veiculos;
	}

	function cadastra_veiculo($conexao, $veiculo){

		$sqlCadastra = "INSERT INTO veiculos (placa, marca, modelo, hora_entrada, hora_saida) VALUES ('{$veiculo['placa']}','{$veiculo['marca']}','{$veiculo['modelo']}','{$veiculo['hora_entrada']}','{$veiculo['hora_saida']}')";

		mysqli_query($conexao, $sqlCadastra);
	}


 ?>