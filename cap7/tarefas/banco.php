<?php 

	$bdServidor = '127.0.0.1';
	$bdUsuario = 'root';
	$bdSenha = '';
	$bdBanco = 'tarefas';

	$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

	if (mysqli_connect_errno($conexao)) { //irá retornar o número do código de erro da ultima chamada a função mysqli_connect(). Se não houve erro, esta função irá retornar zero.
		echo "Problemas para conectar no banco.";
		die();
	}

	function buscar_tarefas($conexao)
	{
		$sqlBusca = 'SELECT * FROM tarefas';
		$resultado = mysqli_query($conexao, $sqlBusca);

		$tarefas = array();

		while ($tarefa = mysqli_fetch_assoc($resultado)) {
			$tarefas[] = $tarefa;
		}

		return $tarefas;
	}

	function gravar_tarefa($conexao, $tarefa){
		$sqlGrava = "INSERT INTO tarefas(nome, descricao, prioridade, prazo, concluida) VALUES ('{$tarefa['nome']}', '{$tarefa['descricao']}', '{$tarefa['prioridade']}', '{$tarefa['prazo']}', {$tarefa['concluida']})";

		mysqli_query($conexao, $sqlGrava);
	}

 ?>