<?php 
	$bdServidor = "127.0.0.1";
	$bdNome = "root";
	$bdSenha = "";
	$bdBanco = "contatos";

	$conexao = mysqli_connect($bdServidor, $bdNome, $bdSenha, $bdBanco);

	if (mysqli_connect_errno($conexao)) {
		echo "Não foi possível conectar ao banco de {$bdBanco}";
		die();
	}

	function lista_contatos($conexao){

		$sqlBusca = "SELECT * FROM contatos";

		$resultado = mysqli_query($conexao, $sqlBusca);

		$contatos = array();

		while ($contato = mysqli_fetch_assoc($resultado)) {
			$contatos[] = $contato;
		}

		return $contatos;
	}

	function cadastra_contato($conexao, $contato){

		$sqlCadastra = "INSERT INTO contatos (nome, telefone, descricao, aniversario, email, favorito) VALUES ('{$contato['nome']}','{$contato['telefone']}','{$contato['descricao']}','{$contato['aniversario']}','{$contato['email']}',{$contato['favorito']})";

		mysqli_query($conexao, $sqlCadastra);
	}

 ?>